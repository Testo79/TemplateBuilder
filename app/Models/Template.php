<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $table = 'templates';
    protected $fillable = [
        'nom'
    ];

    /**
     * Get all products associated with the template.
    */
    public function produits()
    {
        return $this->hasMany(Produit::class, 'template_id');
    }
}
