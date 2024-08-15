<style>

    .review img {
        height: 400px;
        object-fit: cover;
    }

    .top-section {
        width: 100%;
        background-color: black;
        color: white;
        padding: 10px 0;
        text-align: center;
        font-size: 11px;
        height: 40px;
        overflow: hidden;
        /* Pour cacher le contenu dépassant */
        white-space: nowrap;
        /* Pour éviter le retour à la ligne */
    }

    #topContent {
        display: inline-block;
        /* Permet au contenu de s'adapter à la taille de son contenu */
    }


    .content {
        transition: opacity 0.5s ease;
        /* Fade animation */

    }


    /* logo */
    .logo {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .logo img {
        width: 50%;
        padding: 10px;
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
        justify-content: left;
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

    .d-title {
        width: 100%;
        text-align: center;
        font-weight: 700;
        font-size: 22px;
        margin-top: 30px;
        padding: 0 10px;
    }

    .d-p {
        width: 85%;
        text-align: center;
        margin: 10px AUTO;
        font-size: 14px;
    }

    .d-img {
        margin: 10px auto;
        text-align: center;
    }

    .d-img img {
        width: 80%;
        height: auto;
    }






    /* countdown timer */

    .timer {
        display: flex;
        flex-direction: row;
    }

    .grey-color {
        padding: 10px;
        background: rgb(221, 221, 221);
        width: 95%;
        display: flex;
        margin: auto;
        border-radius: 25px;
    }

    .red-color {
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

    .text {
        display: flex;
        align-items: center;
        justify-content: space-between;
        MARGIN: 5px 15px;
        font-size: 13px;
        font-weight: bold;

    }

    .text-1 {
        font-family: 'Poppins';
        font-weight: 700;
        font-size: 12px;
    }

    .time {
        display: flex;
        font-family: 'Poppins';
        font-weight: 400;
        align-items: center;
    }

    /* cta button */

    .cta {
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

    .cta1 {
        color: rgb(246, 249, 254);

        font-weight: bold;
        font-size: 28px;
        font-family: 'Poppins';
        text-align: center;
    }

    .cta2 {
        color: rgb(246, 249, 254);
        font-size: 15px;
        font-family: 'Poppins';
        text-align: center;
    }

    /* trustpilot */
    .trustpilot {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 90%;
        margin: auto;
        margin-top: 10px;
    }

    .trustpilot img {
        width: 25%;
        height: auto;
    }

    .trustpilot .text {
        display: block;
        font-weight: normal;
        font-family: 'Poppins';
        width: 60%;
        font-size: 13px;
        margin-top: 15px;
        line-height: 1.4;
    }

    .tp-review .content {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px 10px;
        flex-direction: column;
    }

    .content .title {
        font-size: 34px;
        line-height: 1;
        padding: 0 10px 0 10px;
        font-weight: 700;
        margin-top: 20px;
        text-align: center;
        font-family: 'Poppins';
    }

    .content .p {
        text-align: center;
        font-size: 16px;
        font-weight: 300;
        font-family: 'Poppins';
        margin-top: 15px;
    }

    .price {
        display: flex;
        align-items: last baseline;
        justify-content: center;
        gap: 10px;
    }

    .old {
        font-weight: 700;
        font-family: 'Poppins';
        text-decoration: line-through;
        font-size: 20px;
    }

    .new {
        font-size: 40px;
        font-weight: 700;
        color: rgb(255, 0, 0);
        font-family: 'Poppins';
    }

    /* shipping date */
    .shipping-date {
        margin: 10px auto;
        text-align: left;
        width: 85%;
        font-family: 'Poppins';
        font-weight: 600;
        line-height: 1.4;
        font-size: 16px;
    }

    /* features tab */
    .tabs {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 25px;
        font-family: 'Poppins';
    }

    .tab {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-family: 'Poppins';

    }

    .tab img {
        width: 50px;
        height: auto;
    }

    .tab p {
        font-size: 16px;
        text-align: center;
        font-family: 'Poppins';
        font-weight: 400;
        line-height: 1.4;
    }

    .trustpilot-reviews {
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

    .trustpilot-reviews .title {
        font-weight: bold;
        font-size: 25px;
        font-family: 'Poppins';
        text-align: center;
    }

    .tp-reviews {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-family: 'Poppins';
    }

    .tp-review .content {
        font-size: 15px;
        font-weight: 500;
        font-family: 'Poppins';

    }

    .client {
        font-family: 'Poppins';

        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }

    .client .name {
        font-family: 'Poppins';

        font-weight: bold;
    }

    .tp-img {
        width: 30%;
        height: auto;
        margin-top: 10px;
    }

    /* starsimg */

    .star-review {
        display: flex;
        flex-direction: column;
        text-align: center;
        align-items: center;
        justify-content: center;
    }

    .star-review .text {

        text-align: center;
        font-size: 16px;
        margin: 10px;
        font-family: 'Poppins';
        font-weight: 400;
    }

    .star-review img {

        width: 70%;
        height: auto;
        border-radius: 100px;
    }


    .reviews-list {
        font-family: 'Poppins';
        display: flex;
        justify-content: center;
        padding: 10px;
        gap: 20px;
        flex-direction: column;
        background-color: rgba(197, 199, 210, 0.59);
    }

    .review {
        background-color: white;
        display: flex;
        flex-direction: column;

        border-radius: 10px;

    }

    .line1 {
        display: flex;
        align-items: center;
        gap: 5px;
        padding: 10px;
    }

    .line1 img {
        width: 40%;
        height: 30px;
        object-fit: cover;

    }

    .line1 .name {
        font-weight: 700;
        font-size: 16px;
        font-family: 'Poppins';
    }

    .client-confirm {
        color: rgb(98, 193, 69);
        font-weight: 900;
    }

    .review-content {
        padding: 20px;
        font-family: 'Poppins';
        text-align: center;
        font-size: 16px;
        line-height: 1.2;
    }

    /* footer */

    .footer {
        /* margin-bottom: 120px; */
        padding: 10px;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: auto auto 120px auto;
        font-family: 'Poppins';

    }

    .col {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 10px;
        font-family: 'Poppins';

    }

    .footer-img1 {
        width: 30%;
        height: auto;
    }

    .footer .title {
        margin-top: 10px;
        font-weight: bold;
        text-align: center;
        font-family: 'Poppins';

    }

    .footer .text {
        font-weight: normal;
        text-align: center;
        font-size: 15px;
        margin-top: 15px;
        font-family: 'Poppins';

    }

    a {
        text-decoration: none;
        color: black;
        cursor: pointer;
        font-family: 'Poppins';

    }

    .links {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
        gap: 20px;
        font-family: 'Poppins';

    }

    .cw {
        font-weight: 700;
        margin-top: 20px;
        font-size: 17px;
    }

    .title1 {
        font-size: 21px;
        font-weight: 700;
        margin-top: 20px;
        font-family: 'Poppins';

    }

    .links a {
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

    .desktop {
        display: none;
    }

    .color-text {
        font-weight: 700;
        font-family: 'Poppins';

        margin-top: 30px;
    }

    .color-variation {
        display: flex;

        align-items: center;
        gap: 5px;
    }

    .option {
        width: 20px;
        height: 20px;
        border-radius: 25px;
    }

    .option1 {
        background-color: lightblue;
    }

    .option2 {
        background-color: pink;
    }

    .checked {
        color: orange;
        font-size: 20px;
    }

    .flag-icon {
        width: 20px;
        height: 15px;
        vertical-align: middle;
    }

    .currency-symbol {
        font-size: 1.5em;
        margin-left: 5px;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
        display: flex;
        align-items: center;
    }

    .select2-container .select2-selection--single .select2-selection__rendered img {
        margin-right: 10px;
    }

    /* Styles CSS pour la vue mobile (iPhone XR) */
    @media only screen and (max-width: 414px) {
        .card {
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #f8f9fa;
            font-size: 18px;
        }

        .card-body {
            padding: 10px;
        }

        .col-form-label {
            font-size: 14px;
        }

        .form-control {
            font-size: 14px;
        }

        .btn-lg {
            padding: 8px 16px;
            font-size: 16px;
        }
    }

    .content .title {
        font-size: 34px;
        line-height: 1;
        padding: 0 10px 0 10px;
        font-weight: 700;
        margin-top: 20px;
        text-align: center;
        font-family: 'Poppins';
    }
</style>