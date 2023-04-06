<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">
    <meta content="notranslate" name="google">
    <link rel="icon" type="image/png" sizes="16x16" href="../static/favicon.ico">
    <title>3d</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="{{asset('/assets/s3d/styles/s3d.min.css')}}">
</head>
<body class="flat-page" id="flat-page">
<header class="s3d-header">
    <div class="s3d__favourite-container js-s3d__favourite-open">
        <div class="s3d__favourite-count js-s3d__favourite-count" data-count="0">0</div>
        <div class="s3d__favourite" data-id="" data-key="id">
            <svg class="icon--favourites js-s3d__favourite-icon" role="presentation">
                <use xlink:href="#icon-favourites"></use>
            </svg>
        </div>
    </div>
    <div class="s3d__compass s3d-ctr__compass js-s3d-ctr__compass"><svg class="icon--Compass" role="presentation">
            <use xlink:href="#icon-Compass"></use>
        </svg>
    </div>
    <div class="s3d__title js-s3d-ctr__option__text"></div>
    <div class="s3d__menu orange-btn-hover" data-open-menu>
        <div class="s3d__menu-elem-wrapper"><span></span><span></span><span></span></div>
    </div>
</header><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="0" height="0" style="position:absolute">

    <symbol id="icon-Compass" viewBox="0 0 60 60">
        <rect x=".5" y=".5" width="59" height="59" rx="29.5" fill="#fff" stroke="#1A1E21"></rect><path d="M26.884 33.096l.138-8.589 1.166.02 4.403 6.815.108-6.743 1.09.017-.138 8.589-1.166-.019-4.402-6.821-.109 6.749-1.09-.018zM29 1h2v17h-2z" fill="#1A1E21"></path>
    </symbol>

    <symbol id="icon-arrow" viewBox="0 0 16 16">
        <path d="M0 8h14.142m0 0L7.072.929M14.141 8l-7.07 7.071"></path>
    </symbol>

    <symbol id="icon-close" viewBox="0 0 10 10">
        <path clip-rule="evenodd" d="M4.999 4.046L9.045 0 10 .954 5.953 5 10 9.046 9.045 10 5 5.954.955 9.997 0 9.043 4.044 5 0 .957.955.003l4.044 4.043z"></path>
    </symbol>

    <symbol id="icon-favourites" viewBox="0 0 24 24">
        <path d="M11.753 19.773L12 20l.246-.227a158.7 158.7 0 0 0 1.49-1.395c.415-.392.86-.812 1.321-1.243 2.56-2.392 3.378-3.215 4.259-4.45.94-1.318 1.619-2.27 1.676-3.684a4.785 4.785 0 0 0-1.161-3.393 4.81 4.81 0 0 0-2.683-1.533 5.01 5.01 0 0 0-2.996.401c-.84.377-1.578.94-2.152 1.644a5.885 5.885 0 0 0-2.152-1.644 5.014 5.014 0 0 0-2.996-.401A4.81 4.81 0 0 0 4.17 5.608 4.785 4.785 0 0 0 3.007 9c.058 1.414.737 2.366 1.677 3.684.88 1.235 1.699 2.058 4.259 4.45.461.431.906.851 1.321 1.243.563.532 1.07 1.011 1.49 1.395z"></path>
    </symbol>

    <symbol id="icon-reset" viewBox="0 0 12 14">
        <path d="M10.59 3.965a.41.41 0 0 0 .382-.561 2.602 2.602 0 0 0-2.409-1.627H8.06C7.872.786 7.002 0 5.938 0h-.875C4 0 3.13.785 2.942 1.777h-.504c-1.09 0-2.024.674-2.41 1.627a.41.41 0 0 0 .382.56h10.18zM5.064.82h.875c.599 0 1.107.403 1.278.957H3.785c.171-.554.68-.957 1.278-.957zM1.537 12.857A1.235 1.235 0 0 0 2.765 14h5.472c.642 0 1.181-.502 1.227-1.143l.575-8.072H.962l.575 8.072zM6.622 6.98a.41.41 0 0 1 .82.04l-.22 4.376a.41.41 0 0 1-.819-.042l.22-4.374zM3.95 6.59a.41.41 0 0 1 .43.39l.219 4.374a.41.41 0 0 1-.82.042L3.56 7.02a.41.41 0 0 1 .389-.43z"></path>
    </symbol>

</svg>
<div class="fs-preloader">
    <img class="fs-preloader-logo" src="{{asset('/assets/s3d/images/svg/logo.svg')}}">
    <div class="fs-preloader-bg"></div>
</div>
<div class="fs-preloader-before js-fs-preloader-before">
    <div class="fs-preloader-box"></div>
    <div class="fs-preloader-shadow"></div>
    <div class="fs-preloader-precent"><span class="fs-preloader-amount"></span>%</div>
</div>
<div class="js-s3d-preloader s3d-preloader">
    <img class="fs-preloader-logo" src="{{asset('/assets/s3d/images/svg/logo.svg')}}">
</div>

<div class="page__inner" data-scroll-container>
    <div class="page__content">
        <div class="js-s3d__slideModule s3d__slideModule scroll">
            <div class="s3d__flyby-container" id="js-s3d__wrapper"></div>
        </div>
    </div>
</div>
<script defer src="{{asset('/assets/s3d/scripts/vendors.bundle.js')}}"></script>
<script defer src="{{asset('/assets/s3d/scripts/index.bundle.js')}}"></script>
</body>
</html>
