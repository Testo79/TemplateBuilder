<?php
require_once app_path('Helpers/CurrencyHelper.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>
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
    @include('layouts.pages.preview.style_p')

</head>

<body>
    <div class="wrapper">

        <!-- top toggle text section -->
        <div class="top-section">
            <div class="" id="topContent">
                {{ $pub_1 }} <br> {{ $pub_2 }}
            </div>
        </div>

        <!-- logo -->
        <div class="logo">
            @if(isset($logo))
            <!-- <p> {{ $logo }}</p> -->
            <img src="{{ $logo }}" alt="Logo produit">
            @else
            <p></p>
            @endif
        </div>

        <!-- product photos section -->
        <div class="product-photos">
            <div class="main-photo">
                <img id="mainImage" src="{{ isset($image_produit_paths[0]) ? $image_produit_paths[0] : '' }}" alt="Product Image">
                <div class="arrow prev" onclick="prevImage()">&#10094;</div>
                <div class="arrow next" onclick="nextImage()">&#10095;</div>
            </div>
            <div class="thumbnail-container">
                @foreach ($image_produit_paths as $image_path)
                <img class="thumbnail" src="{{ $image_path }}" onclick="displayImage('{{ $image_path }}')" alt="Thumbnail">
                @endforeach
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
            {{ $stock_restant }}
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
          
            {{ $nom_produit }}
        </div>
        <div class="p">
        </div>
        <div class="price">
            <div class="old">
                {{ currencySymbol($devise) }} {{ $prix }}
            </div>
            <div class="new">
                {{ currencySymbol($devise) }} {{ $nouveau_prix }}
            </div>
        </div>
    </div>

    <!-- shipping -->
    <div class="shipping-date">
        <!-- Assurez-vous que $geo est défini -->
        <img id="flag" class="flag-icon" data-country="{{ $geo }}" style="width: 20px; height: 15px;">
        &nbsp;{{ $livraison_promo }}
        <span class="dateDay">Friday</span>,
        <span class="dateNumber">10</span>
        <span class="monthName">May</span>
    </div>


    <a href="{offer}" style="cursor: pointer;">
        <div class="cta disappear">
            <div class="cta1">
                {{ $cta_text }}
            </div>
            <div class="cta2">
                {{ $cta_description }}
            </div>
        </div>
    </a>
    <!-- trustpilot -->
    <div class="trustpilot">
        <img src="{{ $trustpilot }}" alt="" class="tp-img">
        <div class="text" style=" text-center">
            <b>{{ $notation }}</b>
        </div>
    </div>
    <!-- Product Description -->
    <div class="d-title">
        {{ $nom_produit }}
    </div>

    <div class="d-p">
        <strong> {{ $nom_produit }} </strong>
        {{ $mini_description }}
    </div>
    <div class="d-img">
        <img src="{{ $image_description_1 }}" alt="Product Description">
    </div>
    <div class="d-title">
        {{ $about }} {{ $nom_produit }}
    </div>
    <div class="d-p">
        {{ $description }}
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
            <img src="{{ $image_description_2 }}" alt="Product Description">
        </div>
        <div class="d-title">
            {{ $more_about }} {{ $nom_produit }}

        </div>
        <div class="d-p">
            <!-- QUALITY -->
            @if(is_array($qualite))
            @foreach($qualite as $q)
            ✅&nbsp;{{ $q }}<br><br>
            @endforeach
            @else
            {{ $qualite }}
            @endif
        </div>
        <div class="tabs">
            <div class="tab">
                <img src="{{ $image_1 }}" alt="">
                <p>
                    {{ $livraison_gratuite }}
                </p>
            </div>
            <div class="tab">
                <img src="{{ $image_2 }}" alt="">
                <p>
                    {{ $offer }}
                </p>
            </div>
            <div class="tab">
                <img src="{{ $image_3 }}" alt="">
                <p>
                    {{ $paiement }}
                </p>
            </div>
        </div>

        <!-- trust pilot reviews -->
        <div class="trustpilot-reviews">
            <div class="title">
                {{ $ratings_truspilot }}
            </div>
            <div class="tp-reviews">

                <div class="tp-review">
                    <div class="content">
                        {{ $reviews_principale_1 }}
                    </div>
                    <div class="client">
                        <div class="name">
                            - Jessica Brown
                        </div>
                        <div class="confirm">
                            {{ $confirmed_customer}}
                        </div>
                    </div>
                    <img src="{{ $trustpilot }}" alt="" class="tp-img">
                </div>
                <div class="tp-review">
                    <div class="content">
                        {{ $reviews_principale_2 }}
                    </div>
                    <div class="client">
                        <div class="name">
                            - Emily Davis
                        </div>
                        <div class="confirm">
                            {{ $confirmed_customer }}
                        </div>
                    </div>
                    <img src="{{ $trustpilot }}" alt="" class="tp-img">
                </div>
            </div>
            <a class="cta fixed" href="{offer}" style="cursor: pointer;">
                <div class="cta1">
                    {{ $cta_text }}
                </div>
                <div class="cta2">
                    {{ $cta_description }}
                </div>
            </a>
        </div>
        <div class="star-review">
            <div class="text">
                Reviews from our customers
            </div>
            <img src="assets/Stars_Mobile.jpg" alt="" class="mobile">
            <!-- <img src="assets/Stars_Desktop.jpg" alt="" class="desktop"> -->
        </div>
        <div class="reviews-list">
            <div class="review">
                <div class="line1">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <div class="name">
                        katekate

                    </div>
                    <div class="client-confirm">
                        {{ $confirmed_customer }}
                    </div>
                </div>
                <div class="review-content">
                    {{ $reviews_1 }}
                </div>
                <img src="{{ $image_reviews_1 }}" alt="">

            </div>
            <div class="review">
                <div class="line1">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <div class="name">
                        Lisa Johnson
                    </div>
                    <div class="client-confirm">
                        {{ $confirmed_customer }}
                    </div>
                </div>
                <div class="review-content">
                    {{ $reviews_2 }}
                </div>
                <img src="{{ $image_reviews_2 }}" alt="">
            </div>
            <div class="review">
                <div class="line1">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <div class="name">
                        Michael Brown

                    </div>
                    <div class="client-confirm">
                        {{ $confirmed_customer }}
                    </div>
                </div>
                <div class="review-content">
                    {{ $reviews_3 }}
                </div>
                <img src="{{ $image_reviews_3 }}" alt="">
            </div>
            <div class="review">
                <div class="line1">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <div class="name">
                        Chaiii

                    </div>
                    <div class="client-confirm">
                        {{ $confirmed_customer }}
                    </div>
                </div>
                <div class="review-content">
                    {{ $reviews_4 }}
                </div>
                <img src="{{ $image_reviews_4 }}" alt="">
            </div>
            <div class="review">
                <div class="line1">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <div class="name">
                        Jamie Lee
                    </div>
                    <div class="client-confirm">
                        {{ $confirmed_customer }}
                    </div>
                </div>
                <div class="review-content">
                    {{ $reviews_5 }}
                </div>
                <img src="{{ $image_reviews_5 }}" alt="">
            </div>
            <div class="review">
                <div class="line1">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <div class="name">
                        Lupita
                    </div>
                    <div class="client-confirm">
                        {{ $confirmed_customer }}
                    </div>
                </div>
                <div class="review-content">
                    {{ $reviews_6 }}
                </div>
                <img src="{{ $image_reviews_6 }}" alt="">
            </div>
            <div class="review">
                <div class="line1">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <div class="name">
                        Amanda White
                    </div>
                    <div class="client-confirm">
                        {{ $confirmed_customer }}
                    </div>
                </div>
                <div class="review-content">
                    {{ $reviews_7 }}
                </div>
                <!-- <img src="assets/review_1.png" alt=""> -->
            </div>
            <div class="review">
                <div class="line1">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <div class="name">
                        Casey Brown
                    </div>
                    <div class="client-confirm">
                        {{ $confirmed_customer }}
                    </div>
                </div>
                <div class="review-content">
                    {{ $reviews_8 }}
                </div>
                <!-- <img src="assets/review_1.png" alt=""> -->
            </div>
            <div class="review">
                <div class="line1">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <div class="name">
                        Bradley K.
                    </div>
                    <div class="client-confirm">
                        {{ $confirmed_customer }}
                    </div>
                </div>
                <div class="review-content">
                    {{ $reviews_9 }}
                </div>
                <!-- <img src="assets/review_1.png" alt=""> -->
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <div class="col">
                <img src="assets/logo1.jpeg" alt="" class="footer-img1">
                <div class="title">
                    {{ $temporary_offer }}
                </div>
                <div class="text">
                    {{ $message }}
                </div>
            </div>
            <div class="col">
                <img src="{{ $brands }}" alt="" class="footer-img2">
                <div class="cw">
                    © Copyright 2024
                </div>
            </div>
            <div class="col">
                <div class="title1">
                    {{ $termes_legaux }}
                </div>
                <div class="links">
                    <a href="{offer}">
                        {{ $politique }}
                    </a>
                    <a href="{offer}">
                        {{ $garanties_retours }}
                    </a>
                    <a href="{offer}">
                        {{ $termes_conditions }}
                    </a>
                </div>
            </div>
        </div>

    </div>

</body>

</html>