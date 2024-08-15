<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div>
    <form action="{{ route('downloadProduct',4) }}" method="POST">
    @csrf

        <label for="reviewInput">REVIEWS PRINCIPALE:</label>
        <input type="text" id="reviewInput" />
        <button id="addReviewButton">Add</button>
    </div>
    <div id="reviewsContainer"></div>

    <script>
        document.getElementById('addReviewButton').addEventListener('click', function() {
            var reviewInput = document.getElementById('reviewInput');
            var reviewText = reviewInput.value.trim();
            
            if (reviewText) {
                var reviewElement = document.createElement('input');
                reviewElement.id  = "zbi"
                reviewElement.setAttribute("name" ,  "zbi")
                reviewElement.value = reviewText;
                document.getElementById('reviewsContainer').appendChild(reviewElement);
                document.getElementById('reviewsContainer').appendChild("<br></br>");
                
                reviewInput.value = '';  // Clear the input field
            }
        });
    </script>
</body>
</html>
