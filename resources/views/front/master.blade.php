<!DOCTYPE html>
<html lang="en">

@include('front.partials.head')

<body>


    <div class="container">

        @include("front.partials.sidebar")
        <div class="split">
            <div class="centered">

                @include("front.partials.tabbed")

            </div>

            <div class="col-md-6 preview">
                <div class="card">
                    <div class="card-header" style="text-align: center; font-size: 24px;">Preview</div>
                    <div class="card-body">
                        <div id="template-preview"></div>
                    </div>
                </div>
            </div>
        </div>



    </div>


    <!-- </div> -->
    <style>
        .split {
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

        .centered {
            flex: 5;
            margin-top: 10px;
        }

        .preview {
            flex: 5;
            margin: 10px;
            height: 660px;
            overflow-x: hidden;
            /* overflow-y: hidden; */

        }



        #template-preview {
            overflow-y: auto;
        }

        #reviews_principale {
            flex: 7;
        }

        .review_principal {
            display: flex;
            gap: 2px;
        }

        #reviews {
            flex: 7;
        }

        #addReviewButton {
            border: none;
            background-color: #695CFE;
            color: white;
            border-radius: 3px;
            flex: 3;

        }

        #qualite {
            flex: 7;
        }

        #addQualityButton {
            border: none;
            background-color: #695CFE;
            color: white;
            border-radius: 3px;
            flex: 3;

        }

        #addReviewsButton {
            border: none;
            background-color: #695CFE;
            color: white;
            border-radius: 3px;
            flex: 3;

        }
        #register  {
            border: none;
            background-color: #695CFE;
            color: white;
            border-radius: 3px;
            flex: 3;
            padding: 10px;

        }

        .col-md-4 {
            width: auto;
        }
    </style>



    @include("front.partials.styles")
    @include("front.partials.scripts")
    @include('layouts.libraries.scripts')
    @include('layouts.pages.preview.script_p')


</body>


</html>