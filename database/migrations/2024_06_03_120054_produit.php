<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom_produit');
            $table->text('description');
            $table->decimal('prix', 8, 2);
            $table->decimal('nouveau_prix', 8, 2)->nullable();
            $table->json('image_produit')->nullable(); 
            $table->json('image_reviews'); 
            $table->json('reviews'); 
            $table->string('logo');
            $table->text('mini_description');
            $table->json('image_description');
            $table->json('qualite');
            $table->json('reviews_principale');
            $table->enum('statut', ['APPROVED', 'PENDING', 'REJECTED', 'DELIVERED', 'DUPLICATED'])->default('PENDING');
            $table->unsignedBigInteger('template_id');
            $table->foreign('template_id')->references('id')->on('templates')->onDelete('cascade');
            $table->string('devise');  
            $table->json('geo');
            $table->string('alias');
            $table->string('stock_restant');
            $table->string('livraison_promo');
            $table->string('notation');
            $table->string('livraison_gratuite');
            $table->string('offer');
            $table->string('paiement');
            $table->string('about');
            $table->string('more_about');
            $table->string('avis_clients');
            $table->string('temporary_offer');
            $table->text('message');
            $table->text('confirmed_customer');
            $table->text('ratings_truspilot');
            $table->string('cta_text');
            $table->text('cta_description');
            $table->text('termes_legaux');
            $table->text('politique');
            $table->text('garanties_retours');
            $table->text('termes_conditions');
            $table->text('pub_1');
            $table->text('pub_2');
            $table->text('pub_3');
            $table->text('pub_4');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
