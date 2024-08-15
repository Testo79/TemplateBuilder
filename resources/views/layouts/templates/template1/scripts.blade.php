<script>
    
// top toggle text

const contents = [
  "{{ $produit->pub_3 }} ",
  "{{ $produit->pub_4 }}<br>🔥🔥🔥",
  " {{ $produit->pub_1 }} <span id='flagIcon'></span> <br> {{ $produit->pub_2 }}"
];

let currentContentIndex = 0;
const topContent = document.getElementById("topContent");

// Function to toggle content with fade animation
function toggleContentWithAnimation() {
  topContent.style.opacity = 0;
  setTimeout(() => {
    topContent.innerHTML = contents[currentContentIndex];
    topContent.style.opacity = 1;
    currentContentIndex = (currentContentIndex + 1) % contents.length;
  }, 500); // Wait for 500ms for fade out animation
}

// Function to toggle content every 3 seconds
function autoToggleContent() {
  setInterval(toggleContentWithAnimation, 3000); // Toggle every 3 seconds
}

// Call the function to start automatic toggling
autoToggleContent();



// timer
// Function to start the countdown timer
function startCountdown(duration, display) {
    let timer = duration, minutes, seconds;
    setInterval(function () {
      minutes = parseInt(timer / 60, 10);
      seconds = parseInt(timer % 60, 10);
  
      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;
  
      display.textContent = minutes + ":" + seconds;
  
      if (--timer < 0) {
        timer = duration;
      }
    }, 1000);
  }
  
  // Function to start the 30 minutes countdown
  window.onload = function () {
    const thirtyMinutes = 30 * 60,
      display = document.querySelector('#countdownTimer');
    startCountdown(thirtyMinutes, display);
  };
  
// product images


const images = [
  @foreach ($images as $image)
        "assets/images_produit/{{ $image }}",
  @endforeach
];

let currentImageIndex = 0;

function updateSelectedThumbnail() {
  const thumbnails = document.querySelectorAll(".thumbnail");
  thumbnails.forEach((thumbnail, index) => {
    if (index === currentImageIndex) {
      thumbnail.classList.add("selected");
      
    } else {
      thumbnail.classList.remove("selected");
    }
  });
}

function prevImage() {
  if (currentImageIndex > 0) {
    currentImageIndex--;
  } else {
    currentImageIndex = images.length - 1;
  }
  displayImage(images[currentImageIndex]);
}

function nextImage() {
  if (currentImageIndex < images.length - 1) {
    currentImageIndex++;
  } else {
    currentImageIndex = 0;
  }
  displayImage(images[currentImageIndex]);
}

function displayImage(imagePath) {
  document.getElementById("mainImage").src = imagePath;
  updateSelectedThumbnail();
  
}

// Set default image


// shipping date
// Function to get the next date and day in French
function getNextDate() {
    const daysInFrench = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    const monthsInFrench = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
  
    const currentDate = new Date();
    const nextDate = new Date(currentDate);
    nextDate.setDate(currentDate.getDate() + 2);
  
    const nextDay = daysInFrench[nextDate.getDay()];
    const nextDateNumber = nextDate.getDate();
    const nextMonth = monthsInFrench[nextDate.getMonth()];
  
    return {
      day: nextDay,
      date: nextDateNumber,
      month: nextMonth
    };
  }
  
  // Update the shipping date with the next date
  function updateShippingDate() {
    const nextDate = getNextDate();
    const dateDay = document.querySelector('.dateDay');
    const dateNumber = document.querySelector('.dateNumber');
    const monthName = document.querySelector('.monthName');
  
    dateDay.textContent = nextDate.day;
    dateNumber.textContent = nextDate.date;
    monthName.textContent = nextDate.month;
  }
  
  // Call the function to update the shipping date
  updateShippingDate();
  

  // scrollbutton
  window.addEventListener('scroll', function() {
    var disappearElement = document.querySelector('.disappear');
    var fixedElement = document.querySelector('.fixed');
    
    var disappearRect = disappearElement.getBoundingClientRect();
    
    // Check if the .disappear element is off-screen
    if (disappearRect.bottom <= 0 || disappearRect.top >= window.innerHeight) {
        fixedElement.style.display = 'block';
    } else {
        fixedElement.style.display = 'none';
    }
});
// color
    // Function to select the thumbnail and update main image
    function selectThumbnail(thumbnail, imgSrc) {
        // Remove border from all thumbnails
        var thumbnails = document.querySelectorAll('.option');
        thumbnails.forEach(function(item) {
            item.style.border = 'none';
        });

        // Add border to the clicked thumbnail
        thumbnail.style.border = '2px solid black';

        // Update main image src
        var mainImage = document.getElementById('mainImage');
        mainImage.src = imgSrc;
        updateSelectedThumbnail();
    }

    document.addEventListener("DOMContentLoaded", function() {
    const flagIcons = document.querySelectorAll('.flag-icon');
    flagIcons.forEach(flagIcon => {
        const countryCode = flagIcon.getAttribute('data-country');
        if (countryCode) {
            fetch(`https://restcountries.com/v3.1/alpha/${countryCode}`)
                .then(response => response.json())
                .then(data => {
                    const country = data[0];
                    flagIcon.src = country.flags.png;
                    flagIcon.alt = `${country.name.common} flag`;
                })
                .catch(error => console.error('Error fetching flag:', error));
        }
    });
});

</script>