@extends('layouts.app')
@section('content')
<h1 class="template-title">Template: {{ $template->nom }}</h1>
<div class="card-container">
@foreach($template->produits as $produit)
    <div class="card">
        <div class="card-image">
            @php
                $images = is_array($produit->image_produit) ? $produit->image_produit : json_decode($produit->image_produit, true);
            @endphp
            @if(isset($images[0]))
                <img src="{{ asset('/storage/images_produit/' . $images[0]) }}" style="width: 100%;" class="product-image">
            @else
                No Image Available
            @endif
        </div>
        <p class="card-title">{{ $produit->nom_produit }}</p>
        <form action="{{ route('downloadProduct', $produit->id) }}" method="POST">
            @csr
            <button class="Btn" type="submit">
                <svg
                    class="svgIcon"
                    viewBox="0 0 384 512"
                    height="1em"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z">
                    </path>
                </svg>
                <span class="icon2"></span>
            </button>
        </form>
    </div>
@endforeach
</div>
@endsection

@push('css')
<style>
    .template-title {
        font-size: 2.5em;
        color: #686D76;
        text-align: center;
        font-weight: bold;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    }
    .card-container {
        display: flex;
        flex-wrap: wrap;
        margin-top: 20px;
    }
    .card {
        padding: 20px;
        width: 290px;
        min-height: 30px;
        border-radius: 20px;
        background: #e8e8e8;
        box-shadow: 5px 5px 6px #dadada,
                    -5px -5px 6px #f6f6f6;
        transition: 0.4s;
        margin-bottom: 20px;
        margin-right: 30px; 
    }

    .card:hover {
        translate: 0 -10px;
    }

    .card-title {
        font-size: 18px;
        font-weight: 600;
        color: #2e54a7;
        margin: 15px 0 0 10px;
    }

    .card-image {
        min-height: 100px;
        background-color: #c9c9c9;
        border-radius: 15px;
        box-shadow: inset 8px 8px 10px #c3c3c3,
                    inset -8px -8px 10px #cfcfcf;
    }

    .card-body {
        margin: 13px 0 0 10px;
        color: rgb(31, 31, 31);
        font-size: 15px;
    }

    .footer {
        float: right;
        margin: 28px 0 0 18px;
        font-size: 13px;
        color: #636363;
    }

    .by-name {
        font-weight: 700;
    }
    .Btn {
        padding: 10px;
        width: 50px;
        height: 50px;
        border: none;
        border-radius: 50%;
        background-color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        position: relative;
        transition-duration: 0.3s;
        float: right;
    }
    .svgIcon {
        fill: #2196f3;
    }
    
    .icon2 {
        width: 18px;
        height: 5px;
        border-bottom: 2px solid #2196f3;
        border-left: 2px solid #2196f3;
        border-right: 2px solid #2196f3;
    }

    .tooltip {
        position: absolute;
        top: -50px;
        opacity: 0;
        background-color: rgb(12, 12, 12);
        color: white;
        padding: 10px 10px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition-duration: 0.2s;
        pointer-events: none;
        letter-spacing: 0.5px;
    }
    .tooltip::before {
        position: absolute;
        content: "";
        width: 10px;
        height: 10px;
        background-color: rgb(12, 12, 12);
        background-size: 1000%;
        background-position: center;
        transform: rotate(45deg);
        bottom: -5%;
        transition-duration: 0.3s;
    }

    .Btn:hover .tooltip {
        opacity: 1;
        transition-duration: 0.3s;
    }

    .Btn:hover {
        background-color: #01579b;
        transition-duration: 0.3s;
    }

    .Btn:hover .icon2 {
        border-bottom: 2px solid white;
        border-left: 2px solid white;
        border-right: 2px solid white;
    }

    .Btn:hover .svgIcon {
        fill: white;
        animation: slide-in-top 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94) both;
    }

    @keyframes slide-in-top {
        0% {
            transform: translateY(-10px);
            opacity: 0;
        }

        100% {
            transform: translateY(0px);
            opacity: 1;
        }
    }
    .product-image {
        max-width: 300px;
    }
</style>
@endpush
