<?php

use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/template', function () {
    return view('template/template');
});



Route::get('/AddProduct', function () {
    return view('front.master');
})->middleware(['auth', 'verified'])->name('addProduct');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::resource("/produit", ProduitController::class)->except(['store']);
Route::post('/update-produit-status/{id}', [ProduitController::class, 'updateStatus'])->name('produit.updateStatus');

Route::post('produit/store', [ProduitController::class, 'store'])->name('produit.store');
Route::post('/preview', [ProduitController::class, 'preview'])->name('produit.preview');

Route::get("produit/create", [ProduitController::class,  'create'])->name("produit.create");
Route::get("test", function () {
    return view("front.partials.test");
});
Route::get('/templates', [TemplateController::class, 'index'])->name('templates.index');
Route::get('/templates/{id}', [TemplateController::class, 'show']);

Route::post('/downloadProduct/{produit}', [TemplateController::class, 'downloadProduct'])->name('downloadProduct');
Route::get(
    "/edit",
    function () {
        return view("layouts.pages.edit");
    }
);

require __DIR__ . '/auth.php';
