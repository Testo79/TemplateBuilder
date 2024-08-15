<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;
use App\Models\Produit;
use Illuminate\Support\Str;
use ZipArchive;
use File;

class TemplateController extends Controller  
{
    public function index()
    {
        $templates = Template::all();
        return view('layouts.pages.templates', compact('templates'));
    }
    
    public function show($id)
    {
        $template = Template::with('produits')->findOrFail($id);
        return view('layouts.pages.showProducts', compact('template'));
    }
 
    public function downloadProduct($id)
    {
        $produit = Produit::with('template')->findOrFail($id);
        $template = $produit->template; 
        $zipFileName = $produit->nom_produit.'.zip';
        $zipPath = storage_path('app/' . $zipFileName);    
        $images = $produit->image_produit;
        $reviewImages = $produit->image_reviews;
       
        $zip = new ZipArchive;
        if ($zip->open($zipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
        
            $htmlContent = view('layouts.templates.template1.template1', compact('produit', 'images', 'reviewImages'))->render();
            $zip->addFromString('index.html', $htmlContent);
    
            $scriptsContent = view('layouts.templates.template1.scripts', compact('produit', 'images', 'reviewImages'))->render();
            $scriptsContent = preg_replace('/<script\b[^>]*>/', '', $scriptsContent);
            $scriptsContent = preg_replace('/<\/script>/', '', $scriptsContent);
            $zip->addFromString('scripts.js', $scriptsContent);
    
            $stylesContent = view('layouts.templates.template1.styles')->render();
            $stylesContent = preg_replace('/<style\b[^>]*>/', '', $stylesContent);
            $stylesContent = preg_replace('/<\/style>/', '', $stylesContent);
            $zip->addFromString('styles.css', $stylesContent);
    
            $zip->addEmptyDir('assets');
    
            $zip->addEmptyDir('assets/images_produit');
            foreach ($produit->image_produit as $image) {
                $imagePath = public_path('storage/images_produit/' . $image);
                if (file_exists($imagePath)) {
                    $zip->addFile($imagePath, 'assets/images_produit/' . $image);
                }
            }
    
            $logoPath = public_path('storage/logos/' . $produit->logo);
            if (file_exists($logoPath)) {
                $zip->addEmptyDir('assets/logos');
                $zip->addFile($logoPath, 'assets/logos/' . $produit->logo);
            }
    
            $zip->addEmptyDir('assets/image_descriptions');
            foreach ($produit->image_description as $image) {
                $imageDescriptionPath = public_path('storage/image_descriptions/' . $image);
                if (file_exists($imageDescriptionPath)) {
                    $zip->addFile($imageDescriptionPath, 'assets/image_descriptions/' . $image);
                }
            }
            
            $zip->addEmptyDir('assets/images_statiques');
            $staticImagesDir = public_path('images_statiques');
            if ($handle = opendir($staticImagesDir)) {
                while (false !== ($entry = readdir($handle))) {
                    if ($entry != "." && $entry != "..") {
                        $filePath = $staticImagesDir . '/' . $entry;
                        $zip->addFile($filePath, 'assets/images_statiques/' . $entry);
                    }
                }
                closedir($handle);
            }
    
            $zip->addEmptyDir('assets/images_reviews');
            foreach ($reviewImages as $reviewImage) {
                $reviewImagePath = public_path('storage/images_reviews/' . $reviewImage);
                if (file_exists($reviewImagePath)) {
                    $zip->addFile($reviewImagePath, 'assets/images_reviews/' . $reviewImage);
                }
            }
    
            $zip->close();
    
            return response()->download($zipPath)->deleteFileAfterSend(true);
        } else {
            return redirect()->back()->with('error', 'Could not create zip file.');
        }
    }
    
    
}
