<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tragbarer Mini-Drucker</title>
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

        <style>
            
*{
    margin: 0;
    box-sizing: border-box;
    overflow-x: hidden;
    overflow-y: auto;
    font-family:'Roboto';
}


.review img{
    height: 400px;
    object-fit: cover;
}

/* top toggle text */

.top-section {
   
    width: 100%;
    background-color: black;
    color: white;
    padding: 10px 0;
    text-align: center;
    font-size: 12px;
    height: 50px;
  }
  
  .content {
    transition: opacity 0.5s ease; /* Fade animation */
  }
  

  /* logo */
  .logo{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center ;
  }
  .logo img{
    width: 40%;
    height: auto;
    margin: 10px auto;
  }

  /*product images  */
.product-photos {
    position: relative;
    width: 100%;
    padding: 10px;
  }
  
  .main-photo {
    position: relative;
    overflow: hidden;
  }
  
  .main-photo img {
    width: 100%;
    transition: transform 0.5s ease;
  }
  
  .thumbnail-container {
    display: flex;
    justify-content: left ;
    margin-top: 10px;
    
  }
  
  .thumbnail {
    width: 100px;
    margin: 0 5px;
    cursor: pointer;
  }
  
  .arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: black;
    font-size: 30px;
    user-select: none;
  }
  
  .prev {
    left: 10px;
  }
  
  .next {
    right: 10px;
  }
  
  .selected {
    border: 1px solid black;
  }
  
  .d-title{
    width: 100%;
    text-align: center;
    font-weight: 700;
    font-size: 22px;
    margin-top: 30px;
    padding: 0 10px;
  }
  .d-p{
    width: 85%;
    text-align: center;
    margin: 10px AUTO;
    font-size: 14px;
  }
  .d-img{
    margin: 10px auto;
    text-align: center;
  }

  .d-img img{
    width: 80%;
    height: auto;
  }






  /* countdown timer */

  .timer{
    display: flex;
    flex-direction: row;
  }
  .grey-color{
    padding: 10px;
    background: rgb(221, 221, 221);
    width: 95%;
    display: flex;
    margin: auto;
    border-radius: 25px;
  }

  .red-color{
    width: 46px;
    background-color: rgb(205, 39, 39);
    background-image: linear-gradient(rgb(205, 39, 39) 37%, transparent 69%);
    padding: 7px;
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    margin: 0;
  }

.text{
    display: flex;
    align-items: center;
    justify-content: space-between;
    MARGIN: 5px 15px;
    font-size: 13px;
    font-weight: bold;
    
  }

  .text-1{
    font-family: 'Poppins';
    font-weight: 700;
    font-size: 12px;
  }

  .time{
    display: flex;
    font-family: 'Poppins';
    font-weight: 400;
    align-items: center;
  }

  /* cta button */

  .cta{
    display: flex;
    flex-direction: column;
    margin: 0 8px 0 8px;
    padding: 15px 30px;
    background-color: rgb(205, 39, 39);
    border-radius: 5px;
    align-items: center;
    justify-content: center;
    margin-top: 30px;
  }
  .cta1{
    color: rgb(246, 249, 254);

    font-weight: bold;
    font-size: 28px;
    font-family: 'Poppins';
    text-align: center;
  }
  .cta2{
    color: rgb(246, 249, 254);
    font-size: 15px;
    font-family: 'Poppins';
    text-align: center;
}

/* trustpilot */
.trustpilot{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 90%;
    margin: auto;
    margin-top: 10px;
}

.trustpilot img{
    width: 25%;
    height: auto;
}
  
.trustpilot .text{
    display: block;
    font-weight: normal;
    font-family: 'Poppins';
    width: 60%;
    font-size: 13px;
    margin-top: 15px;
    line-height: 1.4;
}

.tp-review .content{
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 20px 10px;
    flex-direction: column;
}

.content .title{
    font-size: 34px;
    line-height: 1;
    padding: 0 10px 0 10px;
    font-weight: 700;
    margin-top: 20px;
    text-align: center;
    font-family: 'Poppins';
}

.content .p{
    text-align: center;
    font-size: 16px;
    font-weight: 300;
    font-family: 'Poppins';
    margin-top: 15px;
}

.price{
    display: flex;
    align-items: last baseline;
    justify-content: center;
    gap: 10px;
}

.old{
    font-weight: 700;
    font-family: 'Poppins';
    text-decoration: line-through;
    font-size: 20px;
}

.new{
    font-size: 40px;
    font-weight: 700;
    color: rgb(255, 0, 0);
    font-family: 'Poppins';
}

/* shipping date */
.shipping-date{
    margin: 10px auto;
    text-align: left;
    width: 85%;
    font-family: 'Poppins';
    font-weight: 600;
    line-height: 1.4;
    font-size: 16px;
}

/* features tab */
.tabs{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 25px;
    font-family: 'Poppins';
}

.tab{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
    font-family: 'Poppins';
   
}

.tab img{
    width: 50px;
    height: auto;
}

.tab p{
    font-size: 16px;
    text-align: center;
    font-family: 'Poppins';
    font-weight: 400;
    line-height: 1.4;
}

.trustpilot-reviews{
    background-color: black;
    padding: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: white;
    font-family: 'Poppins';
    margin-top: 30px;
}

.trustpilot-reviews .title{
    font-weight: bold;
    font-size: 25px;
    font-family: 'Poppins';
    text-align: center;
}

.tp-reviews{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-family: 'Poppins';
}

.tp-review .content{
    font-size: 15px;
    font-weight: 500;
    font-family: 'Poppins';

}

.client{
    font-family: 'Poppins';

    display: flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
}

.client .name{
    font-family: 'Poppins';

    font-weight: bold;
}

.tp-img{
    width: 30%;
    height: auto;
    margin-top: 10px;
}

/* starsimg */

.star-review{
    display: flex;
    flex-direction: column;
    text-align: center;
    align-items: center;
    justify-content: center;
}

.star-review .text{
    
    text-align: center;
    font-size: 16px;
    margin: 10px;
    font-family: 'Poppins';
    font-weight: 400;
}

.star-review img{

    width: 70%;
    height: auto;
    border-radius: 100px;
}


.reviews-list{
    font-family: 'Poppins';
    display: flex;
    justify-content: center;
    padding: 10px;
    gap: 20px;
    flex-direction: column;
    background-color: rgba(197, 199, 210, 0.59);
}

.review{
    background-color: white;
    display: flex;
    flex-direction: column;
   
   border-radius: 10px;

}

.line1{
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 10px;
}

.line1 img{
    width: 40%;
    height: 30px;
    object-fit: cover;
    
}

.line1 .name{
    font-weight: 700;
    font-size: 16px;
    font-family: 'Poppins';
}

.client-confirm{
    color:rgb(98, 193, 69) ;
    font-weight: 900;
}

.review-content{
    padding: 20px;
    font-family: 'Poppins';
    text-align: center;
    font-size: 16px;
    line-height: 1.2;
}

/* footer */

.footer{
    /* margin-bottom: 120px; */
    padding: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: auto auto 120px auto;
    font-family: 'Poppins';

}

.col{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 10px;
    font-family: 'Poppins';

}

.footer-img1{
    width: 30%;
    height: auto;
}

.footer .title{
    margin-top: 10px;
    font-weight: bold;
    text-align: center;
    font-family: 'Poppins';

}

.footer .text{
    font-weight: normal;
    text-align: center;
    font-size: 15px;
    margin-top: 15px;
    font-family: 'Poppins';

}

a{
    text-decoration: none;
    color: black;
    cursor: pointer;
    font-family: 'Poppins';

}

.links{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 20px;
    gap: 20px;
    font-family: 'Poppins';

}

.cw{
    font-weight: 700;
    margin-top: 20px;
    font-size: 17px;

}
.title1{
    font-size: 21px;
    font-weight: 700;
    margin-top: 20px;
    font-family: 'Poppins';

}
.links a{
    font-weight: 600;
    font-size: 16px;
    font-family: 'Poppins';

}



/* cta fixed */

/* .fixed{
    position: fixed;
    bottom: 10px;
    width: 95%;
    padding: 5px;
} */

.fixed {
    display: none;
    position: fixed;
    bottom: 10px;
    width: 95%;
    padding: 15px 30px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    z-index: 999; 
}

.desktop{
    display: none;
}

.color-text{
    font-weight: 700;
    font-family: 'Poppins';
    
    margin-top: 30px;
}

.color-variation{
    display: flex;
    
    align-items: center;
    gap: 5px;
}
.option{
    width: 20px;
    height: 20px;
    border-radius: 25px;
}
.option1{
    background-color: lightblue;
}

.option2{
    background-color: pink;
}

@media only screen and (min-width: 768px){


    .logo img{
        width: 10%;
        margin: 0 auto;
    }

    .product-photos{
        display: flex;
       
        justify-content: center;
        width: 700px;
        flex-direction: column;
        text-align: center;
        margin: 0 auto;
    }
    #mainImage{
        width: 80%;
        height: auto;
       
    }

    .timer{
        width: 90%;
        margin: 0 auto;
    }

    .grey-color{
        width: 100%;
    }
    .text{
        width: 90%;
        margin: 10px auto;
    }

    .cta{
        width: 90%;
        margin: auto;
    }
    .trustpilot img{
        width: 15%;
    }

    .tabs{
        width: 60%;
        margin: 0 auto;
    }
    .tab img{
        width: 60px;
        margin-top: 20px;
    }
    .tp-img{
        width: 20%;
    }

    .star-review .text{
        width: 50%;
        margin: 20px auto;
        justify-content: center;
    }
    .star-review img{
        display: none;
    }
    .reviews-list{
        flex-direction: row;
        flex-wrap: wrap;
        
    }
    .review{
        width: 30%;
    }
    .review-img{
        width: auto;
    height: 430px;
    object-fit: cover;
    }
    .review{
        padding-bottom: 0;
    }
    .footer{
        flex-direction: row;
        justify-content: space-evenly;
    }
    .trustpilot{
        width: 50%;
    }
    .col{
        width: 30%;
    flex-wrap: wrap;
    }
    .footer .text{
        width: 100%;
    }
    .footer-img2{
        width: 100%;
    }

    .d-img img{
        width: 30%;
    }
    .d-p{
        width: 60%;
    }
    .color-text{
        text-align: left;
    }
}
        </style>
</head>

<body>
    <div class="wrapper">

        <!-- top toggle text section -->
        <div class="top-section">
            <div class="content" id="topContent">
                FREE DELIVERY 🇬🇧 <br> on all orders placed today!</div>
        </div>

        <!-- logo -->
        <div class="logo">
            <img src="assets/logo.jpeg" alt="">
        </div>

        <!-- product photos section -->
        <div class="product-photos">
            <div class="main-photo">
                <img id="mainImage" src="assets/Product_Images/variation_1/Variation_Image_1.webp" alt="Product Image">
                <div class="arrow prev" onclick="prevImage()">&#10094;</div>
                <div class="arrow next" onclick="nextImage()">&#10095;</div>
            </div>
            <div class="thumbnail-container">
                <img class="thumbnail selected" src="assets/Product_Images/variation_1/Variation_Image_1.webp"
                    onclick="displayImage('assets/Product_Images/variation_1/Variation_Image_1.webp')"
                    alt="Thumbnail 1">
                <img class="thumbnail " src="assets/Product_Images/variation_1/Variation_Image_2.webp"
                    onclick="displayImage('assets/Product_Images/variation_1/Variation_Image_2.webp')"
                    alt="Thumbnail 1">

                <img class="thumbnail " src="assets/Product_Images/variation_1/Variation_Image_3.webp"
                    onclick="displayImage('assets/Product_Images/variation_1/Variation_Image_3.webp')"
                    alt="Thumbnail 1">


                <img class="thumbnail " src="assets/Product_Images/variation_1/Variation_Image_4.webp"
                    onclick="displayImage('assets/Product_Images/variation_1/Variation_Image_4.webp')"
                    alt="Thumbnail 1">

                <img class="thumbnail " src="assets/Product_Images/variation_1/Variation_Image_5.webp"
                    onclick="displayImage('assets/Product_Images/variation_1/Variation_Image_5.webp')"
                    alt="Thumbnail 1">

                <img class="thumbnail " src="assets/Product_Images/variation_1/Variation_Image_6.webp"
                    onclick="displayImage('assets/Product_Images/variation_1/Variation_Image_6.webp')"
                    alt="Thumbnail 1">




            </div>

            <!-- color variation -->
            <!-- <div class="color-text">Color:</div>  -->
            <!-- <div class="color-variation">
                
                
                <div class="option option1" onclick="selectThumbnail(this,'assets/Product_Images/variation_1/Variation_Image_1.png')"></div>  
                <div class="option option2" onclick="selectThumbnail(this,'assets/Product_Images/variation_2/Variation_Image_1.png')"></div>
                </div>  -->
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
                12% of remaining stock
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
                Tragbarer Mini-Drucker </div>
            <div class="p">
                <!-- Contains at least 15 different products -->
            </div>
            <div class="price">
                <div class="old">
                    £65.69
                </div>
                <div class="new">
                    £9.99
                </div>
            </div>

        </div>

        <!-- shipping -->
        <div class="shipping-date">
            🇬🇧 &nbsp;FREE SHIPPING: Order NOW to get it before
            <span class="dateDay">Friday</span>,
            <span class="dateNumber">10</span>
            <span class="monthName">May</span>
        </div>


        <a href="{offer}" style="cursor: pointer;">
            <div class="cta disappear">
                <div class="cta1">
                    BUY NOW
                </div>
                <div class="cta2">
                    Max. of 1 order per household.
                </div>
            </div>
        </a>
        <!-- trustpilot -->
        <div class="trustpilot">
            <img src="assets/trustpilot.png" alt="">
            <div class="text">
                <b>4.9/5</b> from more than<b>5,000</b> satisfied customers on <b>Trustpilot</b>
            </div>
        </div>

        <!-- Product Description -->
        <div class="d-title">
            Tragbarer Mini-Drucker </div>

        <div class="d-p">
            <strong>Tragbarer Mini-Drucker

            </strong>

            The Tragbarer Mini-Drucker offers unmatched efficiency and convenience, effortlessly producing high-quality
            prints on the go. Say goodbye to bulky printers and hello to hassle-free printing that saves you time and
            space.

        </div>
        <div class="d-img">
            <img src="assets/Description_Images/Description_Image_1.webp" alt="">
        </div>
        <div class="d-title">
            About Tragbarer Mini-Drucker
        </div>
        <div class="d-p">
            Print anything, anywhere with one click from your smartphone - whether photos, to-do lists or labels for
            labeling
            The PocketPrinter™ is the perfect on-the-go companion to capture your notes or moments. Thanks to its
            perfect size, it fits easily into any bag.
            Never buy expensive ink cartridges again thanks to the thermal technology of the PocketPrinter™
            The PocketPrinter™ has a very high resolution so that images can also be printed out. Never spend money on
            expensive ink cartridges again! Our PocketPrinter™ prints your wishes using thermal technology and therefore
            does not require ink cartridges.
            Many possible applications
            No matter whether at school, you want to record your homework, at home you want to prepare for an exam or
            you want your kitchen to be more organized. The PocketPrinter™ is the ideal solution for your everyday life.
            It prints anything, photos, captions or notes in just a few seconds.
            Thermal technology works like this: With thermal printing technology, the image or note is put on the paper
            by generating heat. No color is added from the outside, instead there is a heat coating on the paper.
            PocketPrinter™ - Creative freedom
            You can easily connect to the PocketPrinter™ via Bluetooth via your smartphone and control your printing
            experience via the “Pmemomo” app. You can choose from over 1000 templates or create your own according to
            your needs.<br>
            Install Phomemo App:<br>
            1. Search Phomemo app in the App Store (iOS) or Play Store (Androit).<br>
            2. Install app<br>
            How do I connect my PocketPrinter™:<br>
            1. Make sure your PocketPrinter™ is sufficiently charged<br>
            2. Turn on PocketPrinter™ and set it to Bluetooth mode<br>
            3. Smartphone Bluetooth settings, enable Bluetooth and select the PocketPrinter™<br>
            4. If necessary, enter the pairing code and confirm the connection<br>
            Connect in the app:<br>
            1. Open Phomemo app<br>
            2. Follow instructions and add the PocketPrinter™<br>
            3. Use app to send content to the PocketPrinter™ and print. You can choose between many templates or put
            your own creations on paper - have fun printing!<br>

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

            <div class="d-title">
                More about Tragbarer Mini-Drucker

            </div>
            <div class="d-p">
                ✅&nbsp;Print high-quality photos and documents on the go with the Tragbarer Mini-Drucker's advanced
                thermal printing technology.

                <br><br>

                ✅&nbsp; Its compact and portable design makes it easy to carry anywhere, perfect for travel, business,
                and everyday use.<br><br>

                ✅&nbsp; Enjoy seamless wireless connectivity, allowing you to print directly from your smartphone or
                tablet with ease.<br><br>
            </div>
            <div class="tabs">
                <div class="tab">
                    <img src="assets/1.png" alt="">
                    <p>
                        Free delivery
                    </p>
                </div>
                <div class="tab">
                    <img src="assets/2.png" alt="">
                    <p>
                        Exclusive Limited Offer
                    </p>
                </div>
                <div class="tab">
                    <img src="assets/3.png" alt="">
                    <p>
                        Secure payment
                    </p>
                </div>
            </div>




            <!-- trust pilot reviews -->
            <div class="trustpilot-reviews">
                <div class="title">
                    4.9/5 Ratings on Truspilot
                </div>
                <div class="tp-reviews">

                    <div class="tp-review">
                        <div class="content">
                            "The Tragbarer Mini-Drucker has revolutionized the way I handle printing tasks on the go.
                            Its compact size and advanced technology make it incredibly easy to use, allowing me to
                            print high-quality documents and photos anytime, anywhere."
                        </div>

                        <div class="client">
                            <div class="name">
                                - Jessica Brown
                            </div>
                            <div class="confirm">
                                Confirmed customer
                            </div>
                        </div>
                        <img src="assets/trustpilot.png" alt="" class="tp-img">
                    </div>
                    <div class="tp-review">
                        <div class="content">
                            "I've tried many portable printers before, but the Tragbarer Mini-Drucker stands out for its
                            effectiveness and convenience. It prints quickly and efficiently, and I love how lightweight
                            and portable it is, making it perfect for travel." </div>

                        <div class="client">
                            <div class="name">
                                - Emily Davis
                            </div>
                            <div class="confirm">
                                Confirmed customer
                            </div>

                        </div>
                        <img src="assets/trustpilot.png" alt="" class="tp-img">
                    </div>
                </div>


                <a class="cta fixed" href="{offer}" style="cursor: pointer;">
                    <div class="cta1">
                        BUY NOW
                    </div>
                    <div class="cta2">
                        Max. of 1 order per household.
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
                        <img src="assets/5_Stars.jpg" alt="">
                        <div class="name">
                            katekate

                        </div>
                        <div class="client-confirm">
                            Confirmed customer
                        </div>
                    </div>
                    <div class="review-content">
                        I've tried many portable printers before, but the Tragbarer Mini-Drucker stands out for its
                        effectiveness and convenience. It prints quickly and efficiently, and I love how lightweight and
                        portable it is, making it perfect for travel </div>
                    <img src="assets/CP_R1.webp" alt="">
                </div>
                <div class="review">
                    <div class="line1">
                        <img src="assets/5_Stars.jpg" alt="">
                        <div class="name">
                            Lisa Johnson

                        </div>
                        <div class="client-confirm">
                            Confirmed customer
                        </div>
                    </div>
                    <div class="review-content">
                        The Tragbarer Mini-Drucker is a game-changer for my business trips. It’s small enough to fit in
                        my bag but powerful enough to handle all my printing needs. I can print contracts, photos, and
                        more with ease.
                    </div>
                    <img src="assets/CP_R2.webp" alt="">
                </div>
                <div class="review">
                    <div class="line1">
                        <img src="assets/5_Stars.jpg" alt="">
                        <div class="name">
                            Michael Brown

                        </div>
                        <div class="client-confirm">
                            Confirmed customer
                        </div>
                    </div>
                    <div class="review-content">
                        This portable printer is fantastic! The setup was straightforward, and the print quality is
                        excellent. It's perfect for printing on the go, and I appreciate the long battery life.</div>
                    <img src="assets/CP_R3.webp" alt="">
                </div>
                <div class="review">
                    <div class="line1">
                        <img src="assets/5_Stars.jpg" alt="">
                        <div class="name">
                            Chaiii

                        </div>
                        <div class="client-confirm">
                            Confirmed customer
                        </div>
                    </div>
                    <div class="review-content">
                        I use the Tragbarer Mini-Drucker for my scrapbooking projects, and it's amazing! The print
                        quality is fantastic, and it's so easy to connect and use. It's a great little printer for
                        creative projects.
                        . </div>
                    <img src="assets/CP_R4.webp" alt="">
                </div>
                <div class="review">
                    <div class="line1">
                        <img src="assets/5_Stars.jpg" alt="">
                        <div class="name">
                            Jamie Lee
                        </div>
                        <div class="client-confirm">
                            Confirmed customer
                        </div>
                    </div>
                    <div class="review-content">
                        The portability and efficiency of the Tragbarer Mini-Drucker make it an essential tool for my
                        mobile office. It's reliable and produces great prints every time.
                    </div>
                    <img src="assets/CP_R5.webp" alt="">
                </div>
                <div class="review">
                    <div class="line1">
                        <img src="assets/5_Stars.jpg" alt="">
                        <div class="name">
                            Lupita
                        </div>
                        <div class="client-confirm">
                            Confirmed customer
                        </div>
                    </div>
                    <div class="review-content">
                        The Tragbarer Mini-Drucker is incredibly handy. Whether I'm at a coffee shop or traveling, I can
                        always rely on it to print important documents quickly and easily.
                    </div>
                    <img src="assets/CP_R6.webp" alt="">
                </div>
                <div class="review">
                    <div class="line1">
                        <img src="assets/5_Stars.jpg" alt="">
                        <div class="name">
                            Amanda White
                        </div>
                        <div class="client-confirm">
                            Confirmed customer
                        </div>
                    </div>
                    <div class="review-content">
                        This mini printer is a powerhouse! Despite its small size, it delivers excellent print quality and speed.</div>
                    <!-- <img src="assets/review_1.png" alt=""> -->
                </div>
                <div class="review">
                    <div class="line1">
                        <img src="assets/5_Stars.jpg" alt="">
                        <div class="name">
                            Casey Brown
                        </div>
                        <div class="client-confirm">
                            Confirmed customer
                        </div>
                    </div>
                    <div class="review-content">

                        I was happy to receive my order and I received.

                    </div>
                    <!-- <img src="assets/review_1.png" alt=""> -->
                </div>
                <div class="review">
                    <div class="line1">
                        <img src="assets/5_Stars.jpg" alt="">
                        <div class="name">
                            Bradley K.
                        </div>
                        <div class="client-confirm">
                            Confirmed customer
                        </div>
                    </div>
                    <div class="review-content">
                        it’s good
                    </div>
                    <!-- <img src="assets/review_1.png" alt=""> -->
                </div>
            </div>

            <!-- footer -->
            <div class="footer">
                <div class="col">
                    <img src="assets/logo1.jpeg" alt="" class="footer-img1">
                    <div class="title">
                        Temporary & exceptional offer!
                    </div>
                    <div class="text">
                        We exceptionally sell our products at wholesale prices, take advantage of it!
                    </div>
                </div>
                <div class="col">
                    <img src="assets/brands.png" alt="" class="footer-img2">
                    <div class="cw">
                        © Copyright 2024
                    </div>
                </div>
                <div class="col">
                    <div class="title1">
                        Legal terms
                    </div>
                    <div class="links">
                        <a href="{offer}">
                            Policy
                        </a>
                        <a href="{offer}">
                            Warranties and returns
                        </a>
                        <a href="{offer}">
                            Terms and conditions
                        </a>
                    </div>
                </div>
            </div>


        </div>

<script>
    
// top toggle text

const contents = [
  
  
  "FREE REFUND <br> for 60 days after purchase",
    "Only a few are left in stock <br>🔥🔥🔥",
    "FREE DELIVERY 🇬🇧 <br> on all orders placed today!"
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
  "assets/Product_Images/variation_1/Variation_Image_1.webp", 
  "assets/Product_Images/variation_1/Variation_Image_2.webp",
  "assets/Product_Images/variation_1/Variation_Image_3.webp",
  "assets/Product_Images/variation_1/Variation_Image_4.webp",
  "assets/Product_Images/variation_1/Variation_Image_5.webp",
  "assets/Product_Images/variation_1/Variation_Image_6.webp",

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
displayImage(images[currentImageIndex]);



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


</script>
</body>

</html>