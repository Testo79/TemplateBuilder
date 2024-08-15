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
                    <div class="card-header" style="text-align: center; font-size: 24px;">List of Templates</div>
                    <div class="card-body">
                        <div id="template-preview">

                            <div class="card-body">
                            <div class="cards">
                    @foreach($templates as $template)
                        <div class="card {{ $template->color }}">
                            <a href="{{ url('/templates/' . $template->id) }}" class="text-decoration-none">
                                {{ $template->nom }}
                            </a>
                        </div>
                    @endforeach
                </div>

                        </div>
                        <style>
                            svg {
                                width: 25px !important;
                                height: 25px;
                            }
                        </style>
             


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
        .cards {
            display: flex;
            gap: 10px;
            
        }
        .cards .card {
            padding: 10px;
            

        }
        .cards .card a {
            color: black;
            

        }
        .card-body{
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

</body>