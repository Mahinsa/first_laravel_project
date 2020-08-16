<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min1.css') }}" rel="stylesheet">

    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">

    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">

    <link href="{{ asset('css/owl.transitions.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.min2.css') }}" rel="stylesheet">

    <link href="{{ asset('css/stylesheets.css') }}" rel="stylesheet">

    <link href="{{ asset('css/site1.css') }}" rel="stylesheet">

    <!-- <link href="{{ asset('css/site2.css') }}" rel="stylesheet"> -->

    <link href="{{ asset('css/style_ltr.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
    <!-- 
    <link href="{{ asset('css/site.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">

    <link href="{{ asset('css/player.css') }}" rel="stylesheet">

    <link href="{{ asset('css/videocontrols.css') }}" rel="stylesheet">

    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">




    <!-- Styles -->
    <style>
    html,
    body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .sqs-block {
        position: relative;
        height: auto;
        padding-top: 17px;
        padding-bottom: 17px;
        outline: none;
        box-shadow: inset 0 0 0 1px rgba(128, 128, 128, 0);
        transition: box-shadow .2s ease-in-out;
    }

    [class*="sqs-col"] .sqs-block {
        padding-left: 17px;
        padding-right: 17px;
    }

    .sqs-block:not(.sqs-block-html):not(.sqs-block-markdown) {
        clear: both;
    }

    /* cyrillic-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: italic;
        font-weight: 500;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4VrMDr4fIA9c.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
        font-family: 'Raleway';
        font-style: italic;
        font-weight: 500;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4VrMDrcfIA9c.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
        font-family: 'Raleway';
        font-style: italic;
        font-weight: 500;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4VrMDrwfIA9c.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: italic;
        font-weight: 500;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4VrMDr0fIA9c.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Raleway';
        font-style: italic;
        font-weight: 500;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4VrMDrMfIA.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: italic;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4Y_LDr4fIA9c.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
        font-family: 'Raleway';
        font-style: italic;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4Y_LDrcfIA9c.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
        font-family: 'Raleway';
        font-style: italic;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4Y_LDrwfIA9c.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: italic;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4Y_LDr0fIA9c.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Raleway';
        font-style: italic;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Pt_g8zYS_SKggPNyCgSQamb1W0lwk4S4Y_LDrMfIA.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 300;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVuEorCFPrEHJA.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 300;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVuEorCMPrEHJA.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 300;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVuEorCHPrEHJA.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 300;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVuEorCGPrEHJA.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 300;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVuEorCIPrE.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 500;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvoorCFPrEHJA.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 500;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvoorCMPrEHJA.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 500;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvoorCHPrEHJA.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 500;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvoorCGPrEHJA.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 500;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvoorCIPrE.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVs9pbCFPrEHJA.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVs9pbCMPrEHJA.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVs9pbCHPrEHJA.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVs9pbCGPrEHJA.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Raleway';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/raleway/v17/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVs9pbCIPrE.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    </style>
</head>

<body>
    <div class="header" style="width: 1349px; height: 63px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="top-menu-container">
                        <div class="navigation">
                            <div class="menu-button">Menu<span class="touch-button"><i
                                        class="fa fa-angle-down navicon"></i></span></div>
                            <ul data-breakpoint="800" class="flexnav with-js opacity lg-screen">
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="/photos">Photos</a></li>
                                <li><a href="#">Packages</a></li>
                                <li><a href="#">Contact us</a></li>
                                <!-- <li class="creg-btn"><a href="http://www.weddingdirectory.lk/Register">Win an Air Ticket</a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="logo">
                        <div class="navbar-brand logo-inner"> <a href="http://www.weddingdirectory.lk/"><img
                                    style="margin-top: -89px;"
                                    src="http://www.weddingdirectory.lk/asset/images/logo.png" alt="Wedding Directory"
                                    class="img-responsive"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://www.weddingdirectory.lk/asset/images/slider/slider_04.jpg" class="d-block w-100"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="http://www.weddingdirectory.lk/asset/images/slider/slider_07.jpg" class="d-block w-100"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="http://www.weddingdirectory.lk/asset/images/slider/slider_01.jpg" class="d-block w-100"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="social">
        <ul class="unstyled">
            <li class="social-item">
                <a href="http://twitter.com/adambirdyy" target="_blank" class="social-item-link">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-40 -150 1000 1000" class="social-icon">
                        <path fill="currentColor"
                            d="M904 228q-37 54-90 93v23q0 73-21 145t-64 139-103 117-144 82-181 30q-151 0-276-81 19 3 43 3 126 0 224-77-59-2-105-36t-64-89q19 2 34 2 24 0 48-6-63-13-104-62T60 396v-2q38 21 82 23-37-25-59-64t-22-86q0-49 25-91 68 83 164 133t208 55q-5-21-5-41 0-75 53-127t127-53q79 0 132 57 61-12 114-44-20 64-79 100 52-6 104-28z">
                        </path>
                    </svg>
                </a>
            </li>
            <li class="social-item">
                <a href="http://facebook.com/AdamBirdPhotography" target="_blank" class="social-item-link">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -150 1000 1000" class="social-icon">
                        <path fill="currentColor"
                            d="M570.5 310h144l-17 159h-127v460h-190V469h-95V310h95v-95c0-68 16-119.3 48-154s84.7-52 158-52h126v158h-79c-14.7 0-26.3 1.3-35 4s-15 7-19 13-6.3 12.3-7 19-1.3 16-2 28v79z">
                        </path>
                    </svg>
                </a>
            </li>
            <li class="social-item">
                <a href="http://www.instagram.com/adambirdyy" target="_blank" class="social-item-link">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-70 -150 1000 1000" class="social-icon">
                        <path fill="currentColor"
                            d="M571 500q0-59-41-101t-101-42-101 42-42 101 42 101 101 42 101-42 41-101zm77 0q0 91-64 156t-155 64-156-64-64-156 64-156 156-64 155 64 64 156zm61-229q0 21-15 36t-37 15-36-15-15-36 15-36 36-15 37 15 15 36zM429 148H327l-54 2-57 5-40 11q-28 11-49 32t-33 49q-6 16-10 40t-6 58-1 53 0 59 0 43 0 43 0 59 1 53 6 58l10 40q12 28 33 49t49 32q16 6 40 11t57 5 54 2 59 0 43 0 42 0 59 0 54-2 58-5 39-11q28-11 50-32t32-49q6-16 10-40t6-58 1-53 0-59 0-43 0-43 0-59-1-53-6-58l-10-40q-11-28-32-49t-50-32q-16-6-39-11t-58-5-54-2-59 0-42 0zm428 352q0 128-3 177-5 116-69 180t-179 69q-50 3-177 3t-177-3q-116-6-180-69T3 677q-3-49-3-177t3-177q5-116 69-180t180-69q49-3 177-3t177 3q116 6 179 69t69 180q3 49 3 177z">
                        </path>
                    </svg>
                </a>
            </li>
            <li class="social-item">
                <a href="https://www.flickr.com/adambirdphotography" target="_blank" class="social-item-link">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-70 -150 1000 1000" class="social-icon">
                        <path fill="currentColor"
                            d="M696 71q67 0 114 48t47 113v536q0 66-47 113t-114 48H161q-67 0-114-48T0 768V232q0-66 47-113t114-48h535zM390 500q0-49-35-84t-84-34-83 34-35 84 35 84 83 34 84-34 35-84zm314 0q0-49-34-84t-84-34-84 34-34 84 34 84 84 34 84-34 34-84z">
                        </path>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    <div class="container"
        style="background-repeat: no-repeat; margin-top: 371px; background-image: url('https://images.squarespace-cdn.com/content/v1/53f297c7e4b0ab3644507028/1472516811206-D2NVZ0M2UZMUS1Z00JVD/ke17ZwdGBToddI8pDm48kHH9S2ID7_bpupQnTdrPcoF7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0nQwvinDXPV4EYh2MRzm-RRB5rUELEv7EY2n0AZOrEupxpSyqbqKSgmzcCPWV5WMiQ/Kevin-Emily-Previews-1-edit2.jpg?format=1500w'); max-width: 1394px;">
        <div class="row" style="margin-top: -370px;">
            <div class="col-sm-8">
                <div class="sqs-block-content" id="yui_3_17_2_1_1596608677460_88">
                    <figure
                        class="sqs-block-image-figure image-block-outer-wrapper image-block-v2 design-layout-poster combination-animation-none individual-animation-none individual-text-animation-none image-position-left sqs-text-ready sqs-narrow-width"
                        data-scrolled="" data-test="image-block-v2-outer-wrapper" id="yui_3_17_2_1_1596608677460_87">
                        <div class="intrinsic" id="yui_3_17_2_1_1596608677460_86">
                            <div style="padding-bottom: 97.5701%; overflow: hidden;"
                                class="image-inset content-fill has-aspect-ratio" data-animation-role="image"
                                data-description="" id="yui_3_17_2_1_1596608677460_82">
                                <img data-src="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588974911754-TZXQG4VE1KNL4FLPS0JK/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/0028+Ariana+Jordan+Photo+-+Luis+%26+Maddie+0927.jpg"
                                    data-image="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588974911754-TZXQG4VE1KNL4FLPS0JK/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/0028+Ariana+Jordan+Photo+-+Luis+%26+Maddie+0927.jpg"
                                    data-image-dimensions="2500x1667"
                                    data-image-focal-point="0.5356522817460317,0.5535714285714286"
                                    data-parent-ratio="1.0"
                                    style="left: 205.396px;top: 97px; width: 544.391px; height: 363px; position: absolute;"
                                    alt="0028 Ariana Jordan Photo - Luis &amp; Maddie 0927.jpg" class="loaded"
                                    data-image-resolution="750w"
                                    src="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588974911754-TZXQG4VE1KNL4FLPS0JK/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/0028+Ariana+Jordan+Photo+-+Luis+%26+Maddie+0927.jpg?format=750w">
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="sqs-block-content" id="yui_3_17_2_1_1596608677460_112">
                    <figure
                        class="sqs-block-image-figure image-block-outer-wrapper image-block-v2 design-layout-poster combination-animation-none individual-animation-none individual-text-animation-none image-position-left sqs-text-ready sqs-narrow-width"
                        data-scrolled="" data-test="image-block-v2-outer-wrapper" id="yui_3_17_2_1_1596608677460_111">
                        <div class="intrinsic" id="yui_3_17_2_1_1596608677460_110">
                            <div style="padding-bottom: 97.1963%; overflow: hidden;"
                                class="image-inset content-fill has-aspect-ratio" data-animation-role="image"
                                data-description="" id="yui_3_17_2_1_1596608677460_107">
                                <noscript><img
                                        src="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588970601013-TTAYTINW9DAHCIVIZE3L/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/0005+Ariana+Jordan+Photo+-+Hunt+Family+9707.jpg"
                                        alt="Family - " /></noscript>
                                <img data-src="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588970601013-TTAYTINW9DAHCIVIZE3L/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/0005+Ariana+Jordan+Photo+-+Hunt+Family+9707.jpg"
                                    data-image="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588970601013-TTAYTINW9DAHCIVIZE3L/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/0005+Ariana+Jordan+Photo+-+Hunt+Family+9707.jpg"
                                    data-image-dimensions="2500x3750"
                                    data-image-focal-point="0.49107142857142855,0.6904761904761905"
                                    data-parent-ratio="1.0"
                                    style="left: -143px;top: 54px;width: 393px; height: 558px; position: absolute;"
                                    alt="0005 Ariana Jordan Photo - Hunt Family 9707.jpg" class="loaded"
                                    data-image-resolution="500w"
                                    src="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588970601013-TTAYTINW9DAHCIVIZE3L/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/0005+Ariana+Jordan+Photo+-+Hunt+Family+9707.jpg?format=500w">
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="sqs-block-content" id="yui_3_17_2_1_1596608677460_132">
                    <figure
                        class="sqs-block-image-figure image-block-outer-wrapper image-block-v2 design-layout-poster combination-animation-none individual-animation-none individual-text-animation-none image-position-left sqs-text-ready sqs-narrow-width"
                        data-scrolled="" data-test="image-block-v2-outer-wrapper" id="yui_3_17_2_1_1596608677460_131">
                        <div class="intrinsic" id="yui_3_17_2_1_1596608677460_130">
                            <div style="padding-bottom: 97.5701%; overflow: hidden;"
                                class="image-inset content-fill has-aspect-ratio" data-animation-role="image"
                                data-description="" id="yui_3_17_2_1_1596608677460_127">
                                <noscript><img
                                        src="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588971346468-33EZ5XIQZBOXNACQ86C5/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/0019+Ariana+Jordan+Photo+-+Emily%27s+Graduation+Session+9299.jpg"
                                        alt="Grads + SENIORS - " /></noscript>
                                <img data-src="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588971346468-33EZ5XIQZBOXNACQ86C5/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/0019+Ariana+Jordan+Photo+-+Emily%27s+Graduation+Session+9299.jpg"
                                    data-image="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588971346468-33EZ5XIQZBOXNACQ86C5/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/0019+Ariana+Jordan+Photo+-+Emily%27s+Graduation+Session+9299.jpg"
                                    data-image-dimensions="2500x3750"
                                    data-image-focal-point="0.5089285714285714,0.8809523809523809"
                                    data-parent-ratio="1.0"
                                    style="left: 424px;top: -398px;width: 326px;height: 480px; position: absolute;"
                                    alt="0019 Ariana Jordan Photo - Emily's Graduation Session 9299.jpg" class="loaded"
                                    data-image-resolution="500w"
                                    src="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588971346468-33EZ5XIQZBOXNACQ86C5/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/0019+Ariana+Jordan+Photo+-+Emily%27s+Graduation+Session+9299.jpg?format=500w">
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-sm">
                <div class="sqs-block-content" id="yui_3_17_2_1_1596608677460_152">
                    <figure
                        class="sqs-block-image-figure image-block-outer-wrapper image-block-v2 design-layout-poster combination-animation-none individual-animation-none individual-text-animation-none image-position-left sqs-narrow-width sqs-text-ready"
                        data-scrolled="" data-test="image-block-v2-outer-wrapper" id="yui_3_17_2_1_1596608677460_151">
                        <div class="intrinsic" id="yui_3_17_2_1_1596608677460_150">
                            <div style="padding-bottom: 98.8%; overflow: hidden;"
                                class="image-inset content-fill has-aspect-ratio" data-animation-role="image"
                                data-description="" id="yui_3_17_2_1_1596608677460_147">
                                <noscript><img
                                        src="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588970972432-NGF9ROK7BQWJ8K0DSRRA/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/0037+Ariana+Jordan+Photo+-+Madison+%26+Christian+8842.jpg"
                                        alt="Maternity - " /></noscript>
                                <img data-src="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588970972432-NGF9ROK7BQWJ8K0DSRRA/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/0037+Ariana+Jordan+Photo+-+Madison+%26+Christian+8842.jpg"
                                    data-image="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588970972432-NGF9ROK7BQWJ8K0DSRRA/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/0037+Ariana+Jordan+Photo+-+Madison+%26+Christian+8842.jpg"
                                    data-image-dimensions="2500x3750"
                                    data-image-focal-point="0.45535714285714285,0.9761904761904762"
                                    data-parent-ratio="1.0"
                                    style="left: 306px;top: -246.5px; width: 169px; height: 253.5px; position: absolute;"
                                    alt="0037 Ariana Jordan Photo - Madison &amp; Christian 8842.jpg" class="loaded"
                                    data-image-resolution="300w"
                                    src="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588970972432-NGF9ROK7BQWJ8K0DSRRA/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/0037+Ariana+Jordan+Photo+-+Madison+%26+Christian+8842.jpg?format=300w">
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-sm">
                <div class="sqs-block-content" id="yui_3_17_2_1_1596608677460_195">
                    <figure
                        class="sqs-block-image-figure image-block-outer-wrapper image-block-v2 design-layout-poster combination-animation-none individual-animation-none individual-text-animation-none image-position-left sqs-narrow-width sqs-text-ready"
                        data-scrolled="" data-test="image-block-v2-outer-wrapper" id="yui_3_17_2_1_1596608677460_194">
                        <div class="intrinsic" id="yui_3_17_2_1_1596608677460_193">
                            <div style="padding-bottom: 97.3832%; overflow: hidden;"
                                class="image-inset content-fill has-aspect-ratio" data-animation-role="image"
                                data-description="" id="yui_3_17_2_1_1596608677460_190">
                                <noscript><img
                                        src="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588970690701-SLK2I6GXQAU0P9HXI42E/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/0005+Ariana+Jordan+Photo+-++Cynthia+Main+6313.jpg"
                                        alt="Celebrating Achievements - " /></noscript>
                                <img data-src="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588970690701-SLK2I6GXQAU0P9HXI42E/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/0005+Ariana+Jordan+Photo+-++Cynthia+Main+6313.jpg"
                                    data-image="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588970690701-SLK2I6GXQAU0P9HXI42E/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/0005+Ariana+Jordan+Photo+-++Cynthia+Main+6313.jpg"
                                    data-image-dimensions="2500x3750" data-image-focal-point="0.5,1.0"
                                    data-parent-ratio="1.0"
                                    style="left: 32px;top: -246.5px; width: 169px; height: 253.5px; position: absolute;"
                                    alt="0005 Ariana Jordan Photo -  Cynthia Main 6313.jpg" class="loaded"
                                    data-image-resolution="300w"
                                    src="https://images.squarespace-cdn.com/content/v1/5415b390e4b07804ec78d04e/1588970690701-SLK2I6GXQAU0P9HXI42E/ke17ZwdGBToddI8pDm48kMXRibDYMhUiookWqwUxEZ97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0luUmcNM2NMBIHLdYyXL-Jww_XBra4mrrAHD6FMA3bNKOBm5vyMDUBjVQdcIrt03OQ/0005+Ariana+Jordan+Photo+-++Cynthia+Main+6313.jpg?format=300w">
                                <div class="image-overlay"></div>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>

        <!-- <div class="card-header border-0" style="margin-top: -108px; margin-left: 340px;margin-right: 340px;">
            <div class="card-deck mb-3">
                <div class="card  text-center cols">
                    <br>
                    <div class="planname">Appsgator-Monthly</div>
                    <div class="pricing-plan-v3__price ">
                        <span class="currency-symbol currency-symbol--inr currency-symbol--bold">$</span>
                        <div class="pricing-plan-v3__price-with-currency" style="margin-left:53px; margin-top:10px;">
                            39.99/
                        </div>
                        <div class="pricing-plan-v3__price-period">
                            monthly
                        </div>
                    </div>
                    <div class="pricing-plan-v3__billed-yearly">
                        <span class="currency-symbol currency-symbol--inr">$</span>179.99
                        billed annually
                    </div>
                    <div class="pricing-plan-v3__bottom-wrapper">
                        <div class="pricing-plan-v3__description text-left" style="margin-left: px;">
                            When you subscribe your trial will be activated for the first 2 weeks &amp;
                            after that you will be charged.
                        </div>

                        <a class="pricing-plan-v3__cta button js-open-signup-popup js-pw-link"
                            href="http://appsgator3.efitosolutions.com/register/subscribe">Start 2 Week Free
                            Trial</a>
                    </div>
                    <br>
                </div>
                <div class="card  text-center cols">
                    <br>
                    <div class="planname">Appsgator-Annually</div>
                    <div class="pricing-plan-v3__price ">
                        <span class="currency-symbol currency-symbol--inr currency-symbol--bold">$</span>
                        <div class="pricing-plan-v3__price-with-currency" style="margin-left:53px; margin-top:10px;">
                            456.00/
                        </div>
                        <div class="pricing-plan-v3__price-period">
                            monthly
                        </div>
                    </div>
                    <div class="pricing-plan-v3__billed-yearly">
                        <span class="currency-symbol currency-symbol--inr">$</span>179.99
                        billed annually
                    </div>
                    <div class="pricing-plan-v3__bottom-wrapper">
                        <div class="pricing-plan-v3__description text-left">
                            When you subscribe your trial will be activated for the first 2 weeks &amp;
                            after that you will be charged.
                        </div>

                        <a class="pricing-plan-v3__cta button js-open-signup-popup js-pw-link"
                            href="http://appsgator3.efitosolutions.com/register/subscribe">Start 2 Week Free
                            Trial</a>
                    </div>
                    <br>
                </div>
            </div>
        </div> -->
    </div>
    <div id="aa-footer" class="aa-footer" style="display: block;">
        <div id="aa-notification-bar" class="nb-buttons-new-row" data-speed="40"
            style="background-color:#af0000;color:#fff;">
            <div class="col-md-12" style="margin-top: 0px;">
                <div class="col-md-1 col-sm-2 profile-image">
                    <img src="http://appsgator3.efitosolutions.com/storage/profile_photos/5f1b01b625dd9.jpg"
                        style="border-radius: 50%; object-fit: cover; width: 120px;height: 120px;">
                </div>
                <div class="col-md-4 col-sm-4 profile-text">
                    <p class="name">saman, The First Insurance</p>
                    <p class="agency">1, 1, 1, 1</p>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-12">
                    <span class="homeicons-mobile" onclick="showhome();"><i class="icon ion-ios-home"></i></span>
                    <a class="profile-btns green" href="http://edesk.io" target="_blank">Schedule A Call</a>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-12">
                    <span class="homeicons-mobile " onclick="showhome();"><i class="icon ion-ios-home"></i></span>
                    <a class="profile-btns green" href="http://appsgator3.efitosolutions.com/quote/home/2/saman"
                        target="_blank">Request Quote</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>


</body>

</html>