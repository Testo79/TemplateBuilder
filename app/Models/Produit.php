<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $table = 'produits';
    protected $primaryKey = 'id';
    protected $fillable = [
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

        
    ];
    
    protected $casts = [
        'image_produit' => 'array',
        'image_reviews' => 'array',
        'reviews' => 'array',
        'qualite' => 'array',
        'reviews_principale' => 'array',
        'image_description' => 'array',
        'geo' => 'array',
    ];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}
