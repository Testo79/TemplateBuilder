<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-3">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">Product Details</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">Descriptions</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="false">Reviews</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">Image Upload</button>
            </li>

        </ul>
        <form id="form-id" method="POST"  action="{{ route('produit.update', $produit->id) }}" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <div class="tab-content" id="myTabContent">
                <!-- Tab 1 Content -->
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nom_produit" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="nom_produit" value="{{ $produit->nom_produit }}" name="nom_produit" required>
                            </div>
                            <div class="mb-3">
                                <label for="mini_description" class="form-label">Mini Description</label>
                                <input type="text" value="{{ $produit->mini_description }}" class="form-control" id="mini_description" name="mini_description">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" value ="{{ $produit->prix }}" class="form-control" id="prix" name="prix">
                            </div>
                            <div class="mb-3">
                                <label for="geo" class="col-md-2 col-form-label text-md-right">GEO :</label>
                                <div class="currencyDiv">
                                    <div class="col-md-4 geoSelect">
                                        <select class="form-control" id="template" name="geo">

                                            <!-- Add more templates here -->
                                        </select>
                                    </div>


                                    <div class="col-md-4 currencyField">
                                        <img id="flag" src="" alt="" class="flag-icon">
                                    </div>
                                    <style>
                                        #flag {
                                            width: 25px;
                                            height: 25px;
                                        }

                                        .currencyDiv {
                                            display: flex;
                                            align-items: center;

                                            gap: 20px;
                                        }

                                        .geoSelect {
                                            flex: 9;
                                        }

                                        .currencyField {
                                            display: 1;
                                        }
                                    </style>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alias" class="form-label">Alias</label>
                                <input type="text"  value="{{$produit->alias}}"class="form-control" id="alias" name="alias">
                            </div>
                            <div class="mb-3">
                                <label for="termes_legaux" class="form-label">Legal Terms</label>
                                <input type="text" value="{{$produit->termes_legaux}}"v class="form-control" id="termes_legaux" name="termes_legaux">
                            </div>
                          
                            

                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input class="form-control" value="{{$produit->description}}"id="description" name="description"></input>
                            </div>
                            <div class="mb-3">
                                <label for="nouveau_prix" class="form-label">New Price</label>
                                <input type="text" value="9.99" {{$produit->nouveau_prix}}" class="form-control" id="nouveau_prix" name="nouveau_prix">
                            </div>
                            <div class="mb-3">
                                <label for="currency" class="form-label">Currency</label>
                                <input type="text" class="form-control" value="{{$produit->devise}}"id="devise" name="devise" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="stock_restant" class="form-label">Remaining stock</label>
                                <input type="text"  value="{{$produit->stock_restant}}"class="form-control" id="stock_restant" name="stock_restant">
                            </div>
                            <div class="mb-3">
                                <label for="rating" class="form-label">Rating</label>
                                <input type="text" value="4.9/5 from more than 5,000 satisfied customers on Trustpilot" class="form-control" value="{{$produit->notation}}"id="notation" name="notation">
                            </div>
                            <div class="mb-3">
                                <label for="garanties_retours" class="form-label">Warranties And Returns</label>
                                <input type="text" value="Waranties and returns" class="form-control" id="garanties_retours" value="{{$produit->garanties_retours}}name="garanties_retours">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Tab 2 Content -->
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exclusive_offer" class="form-label">Exclusive limited offer</label>
                                <input type="text"  class="form-control" value="{{$produit->offer}}"id="offer" name="offer">
                            </div>
                            <div class="mb-3">
                                <label for="customer_reviews" class="form-label">Customer Reviews</label>
                                <input type="text" value="{{$produit->avis_clients}}"class="form-control" id="avis_clients" name="avis_clients">
                            </div>
                            <div class="mb-3">
                                <label for="more_about" class="form-label">More about</label>
                                <input type="text" value="{{$produit->more_about}}"class="form-control" id="more_about" name="more_about">
                            </div>
                            <div class="mb-3">
                                <label for="confirmed_customer" class="form-label">Confirmed Customer</label>
                                <input type="text" value="{{$produit->confirmed_customer}}"class="form-control" id="confirmed_customer" name="confirmed_customer">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <input type="text" name="message" value="{{$produit->message}}"class="form-control" id="message">
                            </div>
                            <div class="mb-3">
                                <label for="description_cta" class="form-label">Description CTA</label>
                                <input type="text" value="{{$produit->cta_description}}" class="form-control" name="cta_description" id="cta_description">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="policy" class="form-label">Policy</label>
                                <input type="text" value="{{$produit->politique}}" class="form-control" id="politique" name="politique">
                            </div>
                            <div class="mb-3">
                                <label for="terms_conditions" class="form-label">Terms and Conditions</label>
                                <input type="text" value="{{$produit->termes_conditions}}" class="form-control" id="termes_conditions" name="termes_conditions">
                            </div>
                            <div class="mb-3">
                                <label for="pub1" class="form-label">Pub 1</label>
                                <input type="text" value="{{$produit->pub_1}}" class="form-control" id="pub_1" name="pub_1">
                            </div>
                            <div class="mb-3">
                                <label for="pub2" class="form-label">Pub 2</label>
                                <input type="text" value="{{$produit->pub_2}}" class="form-control" id="pub_2" name="pub_2">
                            </div>
                            <div class="mb-3">
                                <label for="pub3" class="form-label">Pub 3</label>
                                <input type="text" value="{{$produit->pub_3}}" class="form-control" id="pub_3" name="pub_3">
                            </div>
                            <div class="mb-3">
                                <label for="pub4" class="form-label">Pub 4</label>
                                <input type="text" value=" {{$produit->pub_4}}"" class="form-control" id="pub_4" name="pub_4">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Tab 3 Content -->
                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="product_image" class="form-label">Product Image</label>
                                <input type="file" class="form-control" id="image_produit" name="image_produit[]" multiple>
                            </div>
                            <div id="selected-images" style="margin-top: 10px;"></div>

                            <div class="mb-3">
                                <label for="image_description" class="form-label">Image Description</label>
                                <input type="file" class="form-control" id="image_description" name="image_description[]" multiple>
                            </div>

                            <script>
                                function openPrompt() {
                                    let reviews = [];
                                    let more = true;
                                    while (more) {
                                        let review = prompt("Enter your review:");
                                        if (review) {
                                            reviews.push(review);
                                        }
                                        more = confirm("Would you like to add another review?");
                                    }
                                    console.log("Reviews:", reviews);
                                    // You can send the reviews to your server or display them as needed
                                }
                            </script>


                            <div class="mb-3">
                                <label for="template" class="form-label">Template</label>
                                <select class="form-control" id="template_id" name="template_id">
                                    <option value="1">Template 1</option>
                                    <!-- Add more templates here -->
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Free Delivery" class="form-label">Free shipping</label>
                                <input type="text" value="{{$produit->livraison_gratuite}}"class="form-control" id="livraison_gratuite" name="livraison_gratuite">
                            </div>
                            <div class="mb-3">
                                <label for="secure_payment" class="form-label">Secure Payment</label>
                                <input type="text" value="{{$produit->paiement}}"class="form-control" id="paiement" name="paiement">
                            </div>
                            <div class="mb-3">
                                <label for="about" class="form-label">About</label>
                                <input type="text" value="{{$produit->about}}"class="form-control" id="about" name="about">
                            </div>

                        </div>


                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="image_reviews" class="form-label">Image Reviews</label>
                                <input type="file" class="form-control" id="image_reviews" name="image_reviews[]" multiple>
                            </div>
                            <div class="mb-3">
                                <label for="logo" class="form-label">Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo">
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control" id="status" name="status">
                                <option value="APPROVED">APPROVED</option>
                                        <option value="PENDING" selected="">PENDING</option>
                                        <option value="REJECTED">REJECTED</option>
                                        <option value="DELIVERED">DELIVERED</option>
                                        <option value="DUPLICATED">DUPLICATED</option>
                                        </select>
                            </div>
                            <div class="mb-3">
                                <label for="Ratings_on_Trustpilot" class="form-label">Ratings on Trustpilot</label>
                                <input type="text" value="{{$produit->ratings_truspilot}}"class="form-control" id="ratings_truspilot" name="ratings_truspilot">
                            </div>
                            <div class="mb-3">
                                <label for="temporary_offer" class="form-label">Temporary Offer</label>
                                <input type="text" value="{{$produit->temporary_offer}}"class="form-control" id="temporary_offer" name="temporary_offer">
                            </div>
                            <div class="mb-3">
                                <label for="cta_text" class="form-label">Text CTA</label>
                                <input type="text" value="{{$produit->cta_text}}"class="form-control" id="cta_text" name="cta_text">
                            </div>
                            <div class="mb-3 ">
                                <button id="register">Edit</button>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Tab 5  -->
                <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">

                    <div class="row">
                        <div class="col-md-6">



                            <div class="reviewsPrincipales">
                                <div class="mb-3">

                                    <label for="reviews_principle" class="form-label">Reviews Principale</label>
                                    <div class="review_principal">
                                        <input id="reviews_principale" type="text" class="form-control" name="reviews_principale[]" required>
                                        <button type="button" id="addReviewButton">Add</button>
                                    </div>
                                </div>
                            </div>
                            <script>
                                document.getElementById('addReviewButton').addEventListener('click', function() {
                                    // Get the value of the input field
                                    var inputValue = document.getElementById('reviews_principale').value;

                                    // Create a new div to hold the new input and remove button
                                    var newDiv = document.createElement('div');
                                    newDiv.classList.add('input-group', 'mb-3');

                                    // Create a new input field
                                    var newInput = document.createElement('input');
                                    newInput.type = 'text';
                                    newInput.className = 'form-control';
                                    newInput.name = 'reviews_principale[]';
                                    newInput.value = inputValue;

                                    // Create a remove button
                                    var removeButton = document.createElement('button');
                                    removeButton.type = 'button';
                                    removeButton.className = 'btn btn-danger';
                                    removeButton.innerText = 'Remove';

                                    // Add event listener to the remove button
                                    removeButton.addEventListener('click', function() {
                                        newDiv.remove();
                                    });

                                    // Append the new input and remove button to the new div
                                    newDiv.appendChild(newInput);
                                    newDiv.appendChild(removeButton);

                                    // Append the new div to the review_principal div


                                    reviews = document.querySelector(".reviewsPrincipales")
                                    if (reviews.children.length < 2) {

                                        document.querySelector('.reviewsPrincipales').appendChild(newDiv);

                                    }

                                });
                            </script>
                            <div class="reviews">

                                <div class="mb-3">
                                    <label for="reviews" class="form-label">Reviews</label>
                                    <div class="review_principal">
                                        <input type="text" class="form-control" id="reviews" name="reviews[]">
                                        <button type="button" id="addReviewsButton">Add</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <script>
                            document.getElementById('addReviewsButton').addEventListener('click', function() {
                                // Get the value of the input field
                                var inputValue = document.getElementById('reviews').value;

                                // Create a new div to hold the new input and remove button
                                var newDiv = document.createElement('div');
                                newDiv.classList.add('input-group', 'mb-3');

                                // Create a new input field
                                var newInput = document.createElement('input');
                                newInput.type = 'text';
                                newInput.className = 'form-control';
                                newInput.name = 'reviews[]';
                                newInput.value = inputValue;

                                // Create a remove button
                                var removeButton = document.createElement('button');
                                removeButton.type = 'button';
                                removeButton.className = 'btn btn-danger';
                                removeButton.innerText = 'Remove';

                                // Add event listener to the remove button
                                removeButton.addEventListener('click', function() {
                                    newDiv.remove();
                                });

                                // Append the new input and remove button to the new div
                                newDiv.appendChild(newInput);
                                newDiv.appendChild(removeButton);

                                // Append the new div to the review_principal div
                                reviews = document.querySelector(".reviews")
                                if (reviews.children.length < 8) {


                                    document.querySelector('.reviews').appendChild(newDiv);
                                }
                            });
                        </script>
                        <div class="col-md-6">

                            <div class="qualities">

                                <div class="mb-3">

                                    <label for="quality" class="form-label">Quality</label>
                                    <div class="review_principal">
                                        <input type="text" class="form-control" id="qualite" name="qualite[]">
                                        <button type="button" id="addQualityButton">Add</button>
                                    </div>
                                </div>

                                <script>
                                    document.getElementById('addQualityButton').addEventListener('click', function() {
                                        // Get the value of the input field
                                        var inputValue = document.getElementById('qualite').value;

                                        // Create a new div to hold the new input and remove button
                                        var newDiv = document.createElement('div');
                                        newDiv.classList.add('input-group', 'mb-3');

                                        // Create a new input field
                                        var newInput = document.createElement('input');
                                        newInput.type = 'text';
                                        newInput.className = 'form-control';
                                        newInput.name = 'qualite[]';
                                        newInput.value = inputValue;

                                        // Create a remove button
                                        var removeButton = document.createElement('button');
                                        removeButton.type = 'button';
                                        removeButton.className = 'btn btn-danger';
                                        removeButton.innerText = 'Remove';

                                        // Add event listener to the remove button
                                        removeButton.addEventListener('click', function() {
                                            newDiv.remove();
                                        });

                                        // Append the new input and remove button to the new div
                                        newDiv.appendChild(newInput);
                                        newDiv.appendChild(removeButton);

                                        // Append the new div to the review_principal div
                                        qualities = document.querySelector(".qualities")
                                        if (qualities.children.length < 4) {


                                            document.querySelector('.qualities').appendChild(newDiv);
                                        }
                                    });
                                </script>

                            </div>
                            <div class="mb-3">
                                <label for="DeliveryPromo" class="form-label">Delivery Promo</label>
                                <input type="text" value="FREE SHIPPING: Order NOW to get it before" class="form-control" id="livraison_promo" name="livraison_promo">

                            </div>

                            
                        </div>
                    </div>

                </div>

            </div>
        </form>


    </div>

    @include('layouts.pages.preview.script_p')

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>

</html>