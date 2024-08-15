<?php
require_once app_path('Helpers/CurrencyHelper.php');
?>
<!DOCTYPE html>
<html lang="en">

@include('front.partials.head')
@include('layouts.libraries.styles')


<body>

    <div class="container">

        @include("front.partials.sidebar")
        <div class="split">
            <div class="col-md-12 preview">
                <div class="card">
                    <div class="card-header" style="text-align: center; font-size: 24px;">List of Products</div>
                    <div class="card-body">
                        <div id="template-preview">

                            <form action="" method="GET" class="mb-3">
                                <div class="group">

                                    <i class="bx bx-search-alt-2 icon"></i>
                                    <input class="search" type="search" placeholder="Search for Products ...">

                                </div>
                            </form>
                            <div class="row">
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>N° </th>
                                            <th>IMAGE </th>
                                            <th>PRODUCT</th>
                                            <th>PRICE</th>
                                            <th>STATUS</th>
                                            <th>CURRENCY </th>
                                            <th>GEO</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($produits as $key => $produit)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                @php
                                                $images = is_array($produit->image_produit) ? $produit->image_produit : json_decode($produit->image_produit, true);
                                                @endphp
                                                @if(!empty($images) && isset($images[0]))
                                                <img src="{{ asset('storage/images_produit/' . $images[0]) }}" alt="Product Image" style="width: 60px; height: 60px;">
                                                @else
                                                No Image Available
                                                @endif
                                            </td>
                                            <td>{{ $produit->nom_produit }}</td>
                                            <td>{{ $produit->prix }}</td>

                                            <td>
                                                <div class="status-container">
                                                    <span class="status {{ strtolower($produit->statut) }}">{{ $produit->statut }}</span>
                                                    <select class="status-select" data-produit-id="{{ $produit->id }}">
                                                        <option value="APPROVED" {{ $produit->statut == 'APPROVED' ? 'selected' : '' }}>APPROVED</option>
                                                        <option value="PENDING" {{ $produit->statut == 'PENDING' ? 'selected' : '' }}>PENDING</option>
                                                        <option value="REJECTED" {{ $produit->statut == 'REJECTED' ? 'selected' : '' }}>REJECTED</option>
                                                        <option value="DELIVERED" {{ $produit->statut == 'DELIVERED' ? 'selected' : '' }}>DELIVERED</option>
                                                        <option value="DUPLICATED" {{ $produit->statut == 'DUPLICATED' ? 'selected' : '' }}>DUPLICATED</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>{{ currencySymbol($produit->devise) }}</td>
                                            <td>
                                                <img class="flag-icon" id="flag-{{ $produit->id }}" data-country="{{ $produit->geo }}" style="width: 32px; height: 20px;">

                                            </td>
                                            <td>
                                                <div class="btn-container" style="display:flex;justify-content:center;gap:5px">
                                                    <a href="" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Détails">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('produit.edit', $produit->id) }}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Modifier">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form id="deleteForm-{{ $produit->id }}" action="{{ route('produit.destroy', $produit->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $produit->id }})" data-toggle="tooltip" data-placement="top" title="Supprimer">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>

                        </div>
                        <style>
                            svg {
                                width: 25px !important;
                                height: 25px;
                            }
                        </style>
                        {{ $produits->links() }}


                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>

    @include("front.partials.styles")
    @include("front.partials.scripts")
    @include('layouts.libraries.scripts')
    @include('layouts.pages.preview.script_p')
    <style>
        .card-header {
            color: white;
            background-color: #695CFE;
        }

        .split {

            margin-left: 10px;
            margin-top: 10px;
            position: relative;
            display: flex;
            gap: 10px;
            overflow-x: hidden;
            left: 0;
            /* Initial position */
            width: 100%;
            /* Initial width */
            transition: var(--tran-05);
            /* Smooth transition */

        }

        .search {
            padding: 10px;
            background-color: #F6F5FF;
            border: none;
        }

        .icon {
            width: 25px;
            height: 25px;
            color: #707070;
        }

        .card-body    nav {
            display: flex;

            justify-content: center;
            align-content: center;
        }
        .page-link {
            padding-left: 15px;
            padding-right: 15px;
        }
        .pagination{
            --bs-pagination-active-bg:#695CFE ;
        }
        table {
    width: 100%;
    border-collapse: collapse;
}

td, th {
    text-align: center; /* Centers text and inline elements horizontally */
    vertical-align: middle; /* Centers content vertically */
    padding: 10px;
}

td img {
    display: block;
    margin: 0 auto; /* Centers the image within its cell */
}

table {
    border: none;
    border-collapse: collapse; /* This ensures that there are no gaps between cells */
}

table tr {
    border: none;
}

table td, table th {
    border: none;
}

    </style>

</body>