<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{

    protected $produit;
    public function __construct()
    {
        $this->produit = new Produit();
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $this->produit->query();
    
        if ($request->has('search') && $request->input('search') !== '') {
            $search = $request->input('search');
            $query->where('nom_produit', 'like', "%{$search}%")
                  ->orWhere('prix', 'like', "%{$search}%")
                  ->orWhere('statut', 'like', "%{$search}%");
        }
    
        $produits = $query->paginate(3);
        
        return view('layouts.pages.index', ['produits' => $produits]);
    }
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $templates = Template::all();
        return view('front.master', compact('templates'));
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
         $data = $request->all();
 
         $productImages = [];
         if ($request->hasFile('image_produit')) {
             foreach ($request->file('image_produit') as $image) {
                 $filename = uniqid() . '_' . $image->getClientOriginalName();
                 $image->storeAs('images_produit', $filename, 'public');
                 $productImages[] = $filename;
             }
         }
 
         $reviewImages = [];
         if ($request->hasFile('image_reviews')) {
             foreach ($request->file('image_reviews') as $image) {
                 $filename = uniqid() . '_' . $image->getClientOriginalName();
                 $image->storeAs('images_reviews', $filename, 'public');
                 $reviewImages[] = $filename;
             }
         }
 
         $data['image_produit'] = $productImages;
         $data['image_reviews'] = $reviewImages;
 
         if ($request->hasFile('logo')) {
             $filename = uniqid() . '_' . $request->file('logo')->getClientOriginalName();
             $request->file('logo')->storeAs('logos', $filename, 'public');
             $data['logo'] = $filename;
         }
 
         $descriptionImages = [];
         if ($request->hasFile('image_description')) {
             $files = $request->file('image_description');
             
             if (count($files) > 2) {
                 return redirect()->back()->with('error', 'Vous pouvez sélectionner un maximum de 2 images pour la description.');
             }
             
             foreach ($files as $image) {
                 $filename = uniqid() . '_' . $image->getClientOriginalName();
                 $image->storeAs('image_descriptions', $filename, 'public');
                 $descriptionImages[] = $filename;
             }
         }
         $data['image_description'] = $descriptionImages;
 
         Produit::create($data);
 
         return redirect()->back()->with('success', 'Produit ajouté avec succès.');
    }

    /**
     * Display the specified resource.
    */
    public function show(string $id)
    {
       
        $produit = Produit::findOrFail($id);
        return view('layouts.pages.details', compact('produit'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produit = Produit::findOrFail($id);
        $templates = Template::all();
        
        return view('layouts.pages.edit', compact('produit', 'templates'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produit = Produit::findOrFail($id);
        $data = $request->all();
        
        $productImages = $produit->image_produit; 
        if ($request->hasFile('image_produit')) {
            $productImages = [];
            foreach ($request->file('image_produit') as $image) {
                $filename = uniqid() . '_' . $image->getClientOriginalName();
                $image->storeAs('images_produit', $filename, 'public');
                $productImages[] = $filename;
            }
        }
           
        $reviewImages = $produit->image_reviews; 
        if ($request->hasFile('image_reviews')) {
            $reviewImages = [];
            foreach ($request->file('image_reviews') as $image) {
                $filename = uniqid() . '_' . $image->getClientOriginalName();
                $image->storeAs('images_reviews', $filename, 'public');
                $reviewImages[] = $filename;
            }
        }
        
        $data['image_produit'] = $productImages;
        $data['image_reviews'] = $reviewImages;
        
        if ($request->hasFile('logo')) {
            $filename = uniqid() . '_' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->storeAs('logos', $filename, 'public');
            $data['logo'] = $filename;
        } else {
            $data['logo'] = $produit->logo;
        }
        
        if ($request->hasFile('image_description')) {
            $filename = uniqid() . '_' . $request->file('image_description')->getClientOriginalName();
            $request->file('image_description')->storeAs('image_descriptions', $filename, 'public');
            $data['image_description'] = $filename;
        } else {
            $data['image_description'] = $produit->image_description;
        }
    
        $produit->update($data);
    
        return redirect('produit')->with('success', 'Produit mis à jour avec succès.');
    }
    
    /**
     * Remove the specified resource from storage.
    */

    public function destroy(string $id)
    {
        $produit = $this->produit->find($id);
        $produit->delete();
        return redirect('produit');   
    }
     
    public function updateStatus(Request $request, $id)
    {
        $produit = Produit::find($id);
     
        if ($produit) {
            $produit->statut = $request->input('statut');
            $produit->save();
            return response()->json(['success' => true]);
        }
     
        return response()->json(['success' => false, 'message' => 'Produit not found'], 404);
    }  
     
    public function preview(Request $request)
    {
        $data = $request->only([
            'nom_produit',
            'description',
            'prix',
            'nouveau_prix',
            'image_produit',
            'image_reviews',
            'reviews',
            'logo',
            'statut',
            'mini_description',
            'image_description',
            'qualite',
            'reviews_principale',
            'devise',
            'geo',
            'template_id',
            'alias',
            'stock_restant',
            'livraison_promo',
            'notation',
            'livraison_gratuite',
            'offer',
            'paiement',
            'about',
            'more_about',
            'avis_clients',
            'temporary_offer',
            'message',
            'confirmed_customer',
            'ratings_truspilot',
            'cta_text',
            'cta_description',
            'termes_legaux',
            'politique',
            'garanties_retours',
            'termes_conditions',
            'pub_1',
            'pub_2',
            'pub_3',
            'pub_4',
        ]);

        // // REVIEWS PRINCIPALE:
        if (is_array($data['reviews_principale'])) {
            $data['reviews_principale_1'] = $data['reviews_principale'][0] ?? null;
            $data['reviews_principale_2'] = $data['reviews_principale'][1] ?? null;
        } else {
            $data['reviews_principale_1'] = $data['reviews_principale'];
            $data['reviews_principale_2'] = $data['reviews_principale'];
        }

        // REVIEWS
        if (is_array($data['reviews'])) {
            for ($i = 0; $i < 9; $i++) {
                $data['reviews_' . ($i + 1)] = $data['reviews'][$i] ?? null;
            }
        } else {
            for ($i = 0; $i < 9; $i++) {
                $data['reviews_' . ($i + 1)] = $data['reviews'];
            }
        }

        // IMAGE PRODUIT
        if ($request->hasFile('image_produit')) {
            $imagePaths = [];
            foreach ($request->file('image_produit') as $file) {
                // Use the original filename
                $filename = $file->getClientOriginalName();
                $path = 'images_produit/' . $filename;

                // Check if the file already exists in storage
                if (!Storage::disk('public')->exists($path)) {
                    // Store the file if it doesn't exist
                    $file->storeAs('images_produit', $filename, 'public');
                }

                // Generate the public URL for the file
                $imagePaths[] = asset('storage/' . $path);
            }
            $data['image_produit_paths'] = $imagePaths;
        } else {
            $data['image_produit_paths'] = [];
        }
        // LOGO
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $data['logo'] = asset('storage/' . $logoPath);
        }    

        // IMAGE DESCRIPTION 
        $imageDescriptionPaths = [];
        if ($request->hasFile('image_description')) {
            $files = $request->file('image_description');
            for ($i = 0; $i < min(2, count($files)); $i++) {
                // Use the original filename
                $filename = $files[$i]->getClientOriginalName();
                $path = 'image_descriptions/' . $filename;
        
                // Check if the file already exists in storage
                if (!Storage::disk('public')->exists($path)) {
                    // Store the file if it doesn't exist
                    $files[$i]->storeAs('image_descriptions', $filename, 'public');
                }
        
                // Generate the public URL for the file
                $imageDescriptionPaths[] = asset('storage/' . $path);
            }
        }
        
        $data['image_description_1'] = $imageDescriptionPaths[0] ?? null;
        $data['image_description_2'] = $imageDescriptionPaths[1] ?? null;

        // IMAGE REVIEWS
        
if ($request->hasFile('image_reviews')) {
    $imageReviewsPaths = [];
    foreach ($request->file('image_reviews') as $file) {
        // Use the original filename
        $filename = $file->getClientOriginalName();
        $path = 'image_reviews/' . $filename;

        // Check if the file already exists in storage
        if (!Storage::disk('public')->exists($path)) {
            // Store the file if it doesn't exist
            $file->storeAs('image_reviews', $filename, 'public');
        }

        // Generate the public URL for the file
        $imageReviewsPaths[] = asset('storage/' . $path);
    }

    // Assign paths to data array, up to 6 images
    for ($i = 0; $i < 9; $i++) {
        $data['image_reviews_' . ($i + 1)] = $imageReviewsPaths[$i] ?? null;
    }
} else {
    // Set image reviews paths to null if no images are uploaded
    for ($i = 0; $i < 9; $i++) {
        $data['image_reviews_' . ($i + 1)] = null;
    }
}

        // STATIC IMAGES
        $data['image_1'] = asset('images_statiques/1.png');
        $data['image_2'] = asset('images_statiques/2.png');
        $data['image_3'] = asset('images_statiques/3.png');
        $data['brands'] = asset('images_statiques/brands.png');
        $data['trustpilot'] = asset('images_statiques/trustpilot.png');

        return view('layouts.pages.preview.preview', $data);
        // return 'test ' ; 
     }


    
}
