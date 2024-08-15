<?php
require_once app_path('Helpers/CurrencyHelper.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $produit->nom_produit }}</title>
    <link rel="stylesheet" href="styles.css">

    <!-- font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="wrapper">

        <!-- top toggle text section -->
        <div class="top-section">
            <div class="content" id="topContent">
            
            {{ $produit->pub_1 }} <img class="flag-icon" data-country="{{ $produit->geo }}" style="width: 15px; height: 10px;"> <br> 
            {{ $produit->pub_2 }}</div>
        </div>

        <!-- logo -->
        <div class="logo">
            <img src="assets/logos/{{ $produit->logo }}" alt="Logo">
        </div>


        <!-- product photos section -->
        <div class="product-photos">
            <div class="main-photo">
                <img id="mainImage" src="assets/images_produit/{{ $images[0] }}" alt="Product Image">
                <div class="arrow prev" onclick="prevImage()">&#10094;</div>
                <div class="arrow next" onclick="nextImage()">&#10095;</div>
            </div>
            <div class="thumbnail-container">
                @if (!empty($images))
                    @foreach ($images as $image)
                        <img class="thumbnail" src="assets/images_produit/{{ $image }}" onclick="displayImage('assets/images_produit/{{ $image }}')" alt="Thumbnail">
                    @endforeach
                @endif
            </div>
        </div>
          
        </div>

        <!-- timer section -->
        <div class="timer">
            <div class="grey-color">
                <div class="red-color">
                </div>
            </div>
        </div>
        <div class="text">
            <div class="text-1">
            {{ $produit->stock_restant}}
            </div>
            <div class="time">
                0 hours &nbsp;
                <div class="countdown">
                    <span id="countdownTimer"></span>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="title">
             {{ $produit->nom_produit }} </div>
            <div class="p">
                <!-- Contains at least 15 different products -->
            </div>
            <div class="price">
                <div class="old">
                    {{ currencySymbol($produit->devise) }}{{ $produit->prix }}
                </div>
                <div class="new">
                    {{ currencySymbol($produit->devise) }}{{ $produit->nouveau_prix }}
                </div>
            </div>
        </div>

        <!-- shipping -->
        <div class="shipping-date">
        <img class="flag-icon" data-country="{{ $produit->geo }}" style="width: 20px; height: 15px;">
        &nbsp;{{ $produit->livraison_promo }}
            <span class="dateDay">Friday</span>,
            <span class="dateNumber">10</span>
            <span class="monthName">May</span>
        </div>
        <a href="{offer}" style="cursor: pointer;"> 
            <div class="cta disappear">
                <div class="cta1">
                {{ $produit->cta_text }}
                </div>
                <div class="cta2">
                {{ $produit->cta_description }}
                </div>
            </div>
        </a>
        <!-- trustpilot -->
        <div class="trustpilot">
        <img src="assets/images_statiques/trustpilot.png" alt="" class="tp-img">
        <div class="text">
                <b>{{ $produit->notation }}</b>
            </div>
        </div>
        <!-- Product Description -->
        <div class="d-title">
        {{ $produit->nom_produit }} </div>

        <div class="d-p">
            <strong>{{ $produit->nom_produit }}

            </strong>

            {{$produit->mini_description}}

        </div>
        <div class="d-img">
            <img src="assets/image_descriptions/{{ $produit->image_description[0] ?? 'default_image.png' }}" alt="Product Description">
        </div>
        <div class="d-title">
        {{ $produit->about }} {{ $produit->nom_produit }}
        </div>
        <div class="d-p">
        {{ $produit->description }}
        </div>

        <div class="d-title">
            <!-- Revolutionize Entertainment Electric Cleaning Brush -->
        </div>
        <div class="d-p">
            <!-- ✅&nbsp; Transform any cleaning task into a breeze with the Electric Cleaning Brush, turning cluttered spaces
            into organized havens with its clear and precise cleaning capabilities.<br><br>

            ✅&nbsp; Whether you’re scrubbing surfaces, polishing fixtures, or deep-cleaning grout, this electric brush
            offers endless possibilities, revolutionizing how you handle your cleaning needs.<br><br>

            ✅&nbsp; With its compact design and easy setup, take your cleaning routine to the next level and enjoy
            efficient cleaning wherever you are, whether it's in the bathroom, kitchen, or even outdoors<br><br>

            ✅&nbsp; Enjoy seamless operation and customization with the Electric Cleaning Brush's versatile features,
            including adjustable speed settings and interchangeable brush heads, making it easy to tackle any cleaning
            task with precision and ease.<br><br> -->
            <div class="d-img">
                 <img src="assets/image_descriptions/{{ $produit->image_description[1] ?? 'default_image.png' }}" alt="Product Description">
             </div>
            <div class="d-title">
            {{ $produit->more_about }} {{ $produit->nom_produit }}

            </div>
            <div class="d-p">
                @foreach ($produit->qualite as $quality)
                    ✅&nbsp;{{ $quality }}<br><br>
                @endforeach
            </div>

            <div class="tabs">
                <div class="tab">
                    <img src="assets/images_statiques/1.png" alt="">
                    <p>
                    {{ $produit->livraison_gratuite }}
                    </p>
                </div>
                <div class="tab">
                    <img src="assets/images_statiques/2.png" alt="">
                    <p>
                    {{ $produit->offer }}
                    </p>
                </div>
                <div class="tab">
                    <img src="assets/images_statiques/3.png" alt="">
                    <p>
                    {{ $produit->paiement }}
                    </p>
                </div>
            </div>

            <!-- trust pilot reviews -->
            <div class="trustpilot-reviews">
                <div class="title">
                {{ $produit-> ratings_trustpilot }}
                </div>
                <div class="tp-reviews">

                    <div class="tp-review">
                    <div class="content">
                        @if (!empty($produit->reviews_principale) && count($produit->reviews_principale) > 0)
                            {{ $produit->reviews_principale[0] }}
                        @else
                            Aucun avis disponible.
                        @endif
                    </div>


                        <div class="client">
                            <div class="name">
                                - Jessica Brown
                            </div>
                            <div class="confirm">
                               {{ $produit->confirmed_customer }}
                            </div>
                        </div>
                        <img src="assets/images_statiques/trustpilot.png" alt="" class="tp-img">
                    </div>
                    <div class="tp-review">
                    <div class="content">
                        @if (!empty($produit->reviews_principale) && count($produit->reviews_principale) > 1)
                            {{ $produit->reviews_principale[1] }}
                        @endif
                    </div>
                        <div class="client">
                            <div class="name">
                                - Emily Davis
                            </div>
                            <div class="confirm">
                               {{ $produit->confirmed_customer }}
                            </div>
                        </div>
                        <img src="assets/images_statiques/trustpilot.png" alt="" class="tp-img">
                    </div>
                </div>
                <a class="cta fixed" href="{offer}" style="cursor: pointer;">
                    <div class="cta1">
                    {{ $produit->cta_text }}
                    </div>
                    <div class="cta2">
                    {{ $produit->cta_description }}
                    </div>
                </a>
            </div>
            <div class="star-review">
                <div class="text">
                {{ $produit->avis_clients }}
                </div>
                <img src="assets/Stars_Mobile.jpg" alt="" class="mobile">
                <!-- <img src="assets/Stars_Desktop.jpg" alt="" class="desktop"> -->
            </div>
            <div class="reviews-list">
                <div class="review">
                    <div class="line1">
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                        <div class="name">
                            katekate

                        </div>
                        <div class="client-confirm">
                           {{ $produit->confirmed_customer }}
                        </div>
                    </div>
                    <div class="review-content">
                       @if (!empty($produit->reviews) && isset($produit->reviews[0]))
                            {{ $produit->reviews[0] }}
                       
                        @endif
                    </div>
                    <img src="assets/images_reviews/{{ $reviewImages[0] ?? 'default_image.png' }}" alt="" >
                    </div>
                <div class="review">
                    <div class="line1">
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>                        
                    <div class="name">
                            Lisa Johnson
                        </div>
                        <div class="client-confirm">
                           {{ $produit->confirmed_customer }}
                        </div>
                    </div>
                    <div class="review-content">
                        @if (!empty($produit->reviews) && isset($produit->reviews[1]))
                            {{ $produit->reviews[1] }}
                        @endif
                    </div>
                    <img src="assets/images_reviews/{{ $reviewImages[1] ?? 'default_image.png' }}" alt="" >
                </div>
                <div class="review">
                    <div class="line1">
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>                       
                     <div class="name">
                            Michael Brown

                        </div>
                        <div class="client-confirm">
                           {{ $produit->confirmed_customer }}
                        </div>
                    </div>
                    <div class="review-content">
                        @if (!empty($produit->reviews) && isset($produit->reviews[2]))
                            {{ $produit->reviews[2] }}
                        @endif
                    </div>
                    <img src="assets/images_reviews/{{ $reviewImages[2] ?? 'default_image.png' }}" alt="" >
                </div>
                <div class="review">
                    <div class="line1">
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>                       
                     <div class="name">
                            Chaiii

                        </div>
                        <div class="client-confirm">
                           {{ $produit->confirmed_customer }}
                        </div>
                    </div>
                    <div class="review-content">
                        @if (!empty($produit->reviews) && isset($produit->reviews[3]))
                            {{ $produit->reviews[3] }}
                        @endif
                    </div>
                    <img src="assets/images_reviews/{{ $reviewImages[3] ?? 'default_image.png' }}" alt="" >
                </div>
                <div class="review">
                    <div class="line1">
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>                        
                    <div class="name">
                            Jamie Lee
                        </div>
                        <div class="client-confirm">
                           {{ $produit->confirmed_customer }}
                        </div>
                    </div>
                    <div class="review-content">
                        @if (!empty($produit->reviews) && isset($produit->reviews[4]))
                            {{ $produit->reviews[4] }}
                        @endif
                    </div>
                    <img src="assets/images_reviews/{{ $reviewImages[4] ?? 'default_image.png' }}" alt="" >
                </div>
                <div class="review">
                    <div class="line1">
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>                       
                     <div class="name">
                            Lupita
                        </div>
                        <div class="client-confirm">
                           {{ $produit->confirmed_customer }}
                        </div>
                    </div>
                    <div class="review-content">
                        @if (!empty($produit->reviews) && isset($produit->reviews[5]))
                            {{ $produit->reviews[5] }}
                        @endif
                    </div>
                    <img src="assets/images_reviews/{{ $reviewImages[5] ?? 'default_image.png' }}" alt="" >
                </div>
                <div class="review">
                    <div class="line1">
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>                        
                    <div class="name">
                            Amanda White
                        </div>
                        <div class="client-confirm">
                           {{ $produit->confirmed_customer }}
                        </div>
                    </div>
                    <div class="review-content">
                        @if (!empty($produit->reviews) && isset($produit->reviews[6]))
                            {{ $produit->reviews[6] }}
                        @endif
                    </div>
                    <!-- <img src="assets/review_1.png" alt=""> -->
                </div>
                <div class="review">
                    <div class="line1">
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>                        
                    <div class="name">
                            Casey Brown
                        </div>
                        <div class="client-confirm">
                           {{ $produit->confirmed_customer }}
                        </div>
                    </div>
                    <div class="review-content">

                        @if (!empty($produit->reviews) && isset($produit->reviews[7]))
                            {{ $produit->reviews[7] }}
                        @endif

                    </div>
                    <!-- <img src="assets/review_1.png" alt=""> -->
                </div>
                <div class="review">
                    <div class="line1">
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>
                    <span class="fa fa-star checked" ></span>                       
                     <div class="name">
                            Bradley K.
                        </div>
                        <div class="client-confirm">
                           {{ $produit->confirmed_customer }}
                        </div>
                    </div>
                    <div class="review-content">
                        @if (!empty($produit->reviews) && isset($produit->reviews[8]))
                            {{ $produit->reviews[8] }}
                        @endif
                    </div>
                    <!-- <img src="assets/review_1.png" alt=""> -->
                </div>
            </div>
            <!-- footer -->
            <div class="footer">
                <div class="col">
                    <img src="assets/logo1.jpeg" alt="" class="footer-img1">
                    <div class="title">
                    {{ $produit->temporary_offer }}
                    </div>
                    <div class="text">
                    {{ $produit->message }}
                    </div>
                </div>
                <div class="col">
                    <img src="assets/images_statiques/brands.png" alt="" class="footer-img2">
                    <div class="cw">
                        © Copyright 2024
                    </div>
                </div>
                <div class="col">
                    <div class="title1">
                    {{ $produit->termes_legaux }}
                    </div>
                    <div class="links">
                        <a href="{offer}">
                        {{ $produit->politiqu }}
                        </a>
                        <a href="{offer}">
                        {{ $produit->garanties_retours }}
                        </a>
                        <a href="{offer}">
                        {{ $produit->termes_conditions }}
                        </a>
                    </div>
                </div>
            </div>


        </div>

        <script src="scripts.js"></script>
</body>
</html>