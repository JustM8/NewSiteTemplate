<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">
    <meta content="notranslate" name="google">
    <link rel="icon" type="image/png" sizes="16x16" href="../static/favicon.ico">
    <title>Главная</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="{{asset('/assets/styles/main.min.css')}}" />
</head>
<body class="home" id="home-page">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="0" height="0" style="position:absolute">

    <symbol id="icon-arrow-download" viewBox="0 0 24 28">
        <g clip-path="url(#a)"><path d="M12.555 1.5v20m0 0L2 11.5m10.555 10L22 11.5M1 25h22v2H1z"></path></g><defs><clipPath id="a"><path transform="rotate(90 11.75 12.25)" d="M0 0h27v24H0z"></path></clipPath></defs>
    </symbol>

    <symbol id="icon-footer-arrow" viewBox="0 0 13 8">
        <path d="M0 7.71L.258 8 6.5 3.797 12.742 8 13 7.71 6.603.777h-.258L0 7.709z"></path>
    </symbol>

    <symbol id="icon-logo" viewBox="0 0 82 100">
        <path d="M82 40c0 30-41 60-41 60S0 70 0 40c0-10.609 4.32-20.783 12.009-28.284C19.698 4.214 30.126 0 41 0c10.874 0 21.302 4.214 28.991 11.716C77.681 19.217 82 29.39 82 40z" fill="#2E3237"></path><path d="M68.57 44.534c-1.32-.631-4.131-2.279-3.318-2.489.813-.21 1.76-.666.44-1.121-1.287-.456-2.642-2.068-1.694-2.068.949 0 1.287-.386-.203-.806-1.49-.421-3.32-1.578-2.337-1.753.982-.14.542-.596-.135-.666-.678-.07-3.116-.841-2.202-1.402.915-.56.407-.876-.27-.63-.644.245-2.88.77-4.268-.281-1.423-1.051-5.216-3.75-8.231-2.418-3.014 1.331-5.148 1.857-6.266-.35.474-.036 1.084-.597-.508-.772-.474-.105-.407-.63.237-.63.644 0 .847-.386-.576-.632-1.422-.28-.711-.946-.237-.946s1.084-.596-.068-.631c-1.151-.035-.61-.49-.304-.56.304-.07.474-.421-.644-.562-.61-.105-.982-.21-.745-.455.237-.246-.271-.28-.78-.21.035-.316.407-.772-.846-.666 0-.491.339-1.157-.982-1.017.034-.315-.068-.35-.88-.315 0-.28-.068-.456-.983-.386.034-.315-.203-.315-.44-.35.17-.42.17-.771-.813-.491.068-.56-.644-1.157-3.387-.63-1.05.14-1.152.14-1.49-.316-.305-.491-.881-1.578-.983-.561-.101.42-.575.526-1.084.841-.508.316-.372 1.017-1.151.49-.813-.49-.61-2.277-1.152-1.156-.542 1.122.373 2.454.576 2.664.068.28.102.456-.44.876s-1.728 1.262-1.423 2.944c-.474.701-2.066 2.629-2.642 3.47-.575.841-.677 1.542-.237 2.068.034.841.237 1.577 1.694 1.752.372.21 1.016.035 1.998-.981s2.1-1.928 3.252-2.033c1.151-.105 1.185-.736 1.355-.841.169-.105.575-.245.982.736.406.981 1.05 2.068 1.49 2.559.44.455-.034 2.068-.677 3.26-.644 1.19-.678 3.013-.542 3.89-.305.455-4.403 4.45-6.402 6.028-1.998 1.612-5.385 4.311-6.604 5.222-1.254.912-2.54 2.033-.813 2.804.813.28 2.1.526 2.303-.946 0 0 .27-1.227 1.016-1.542.745-.28 1.456-.736 2.608-2.103 1.152-1.402 6.13-4.872 9.822-6.309 1.524-.596 2.134-.315 2.778 0 .643.316-.204.911-.813 1.332 0 0-2.032 1.577-2.608 2.208-.576.63-.102 1.998.474 2.664.576.666 1.49 1.928 1.761 2.383.271.456 1.66.245 2.168.316.542.07 1.829.21 2.27-.035.44-.21.643-.842.1-1.403-.541-.56-1.591-1.717-2.675-.525-.372.385-.61.385-1.151-.21-.543-.596-1.186-1.227-.746-1.998.44-.771 2.066-1.437 3.387-2.068 1.321-.631 2.676-1.648 3.286-2.349h3.285s.237.07 0 .491c-.237.456-1.456 3.82-4.606 7.185-1.22 1.367-1.457 1.402-2.032 1.753-.61.35-1.152 1.472.372 2.103.813.245 1.66-.666 1.66-1.718-.034-.455 1.355-1.297 1.863-1.927-.136.49-.305 1.437.101 1.507.44.07 2.371-.21 2.371-1.157 0-.946 0-1.227.373-1.507.372-.28 3.658-2.313 6.063-3.365 1.591-.806.575-1.542 1.524-3.05.948-1.506 1.151-2.242 4.03-4.38 1.592-1.297 1.694-2.419 2.405-3.19.711-.806 1.456-.84 1.863.28.406 1.122 2.574 6.134 6.3 7.046 1.456.42 2.642.7 3.522.736.915 0 2.98-.035 1.66-.701zm-22.082.105c-.644 1.437-2.44 3.364-3.997 3.995-1.558.631-2.913 2.279-2.913 2.279-.61.736-1.152 1.332-1.084 1.156.474-1.086 1.524-2.243 1.524-2.243.508-.49 2.202-1.998 2.778-3.084.575-1.087 1.219-3.155 1.219-3.155.745-.14 1.863-.596 2.574-1.121.711-.526.508.736-.102 2.173z" fill="url(#a)"></path><defs><linearGradient id="a" x1="13" y1="20" x2="55.106" y2="74.015" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"></stop><stop offset="1" stop-color="#6C7A88"></stop></linearGradient></defs>
    </symbol>

    <symbol id="icon-metro" viewBox="0 0 24 24">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.895 14.74L19.137 20H24l-.42-1L17.34 4.133 16.863 3l-.646 1.045-3.63 5.87-.587.95-.588-.95-3.634-5.87L7.13 3l-.475 1.132L.42 19 0 20h4.864l2.24-5.26.463-1.085.675.966 3.148 4.506L12 20l.61-.873 3.148-4.506.675-.966.462 1.084zM12 18.253l3.614-5.172 1.032-1.479.707 1.66L19.798 19h2.698L16.693 5.177l-3.843 6.214-.85 1.374-.85-1.374-3.847-6.214L1.503 19h2.7l2.444-5.737.707-1.66 1.032 1.479L12 18.254z" fill="#E3EBF3"></path>
    </symbol>

    <symbol id="icon-popup-close" viewBox="0 0 13 12">
        <path clip-rule="evenodd" d="M.258 12L0 11.71 5.226 6 0 .29.258 0 6.5 4.203 12.742 0 13 .29 7.731 6 13 11.71l-.258.29-6.24-4.203L.257 12z"></path>
    </symbol>

</svg>
<div class='preloader'>
    <img src="{{asset('/assets/images/logo-loader.svg')}}" class="preloader__image">
</div>

<div class="menu" data-menu>
    <div class="menu-wrapper">
        <div class="menu-bg">Меню</div>
        <div class="menu-close" data-close-menu><svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.93934 2.56068L32.9393 34.5607L35.0607 32.4393L3.06066 0.439361L0.93934 2.56068ZM3.06066 34.5606L35.0607 2.56066L32.9393 0.43934L0.93934 32.4393L3.06066 34.5606Z"/>
            </svg>
        </div>
        <ul class="menu-list">
            <li><a class="link" href="index.html">Главная<span>/<sup>01</sup></span><img class="menu-img" src="{{asset('assets/images/menu/1.png')}}" alt="img1"></a></li>
            <li><a class="link" href="#">Планировки<span>/<sup>02</sup></span><img class="menu-img" src="{{asset('assets/images/menu/2.png')}}" alt="img1"></a></li>
            <li><a class="link" href="gallery.html">Галерея<span>/<sup>03</sup></span><img class="menu-img" src="{{asset('assets/images/menu/1.png')}}" alt="img1"></a></li>
            <li><a class="link" href="about.html">Про проект<span>/<sup>04</sup></span><img class="menu-img" src="{{asset('assets/images/menu/2.png')}}" alt="img1"></a></li>
            <li><a class="link" href="infrastructure.html">Инфраструктура<span>/<sup>05</sup></span><img class="menu-img" src="{{asset('assets/images/menu/1.png')}}" alt="img1"></a></li>
            <li><a class="link" href="panorama.html">Панорама<span>/<sup>06</sup></span><img class="menu-img" src="{{asset('assets/images/menu/2.png')}}" alt="img1"></a></li>
            <li><a class="link" href="characteristics.html">Характеристики<span>/<sup>07</sup></span><img class="menu-img" src="{{asset('assets/images/menu/1.png')}}" alt="img1"></a></li>
            <li><a class="link" href="web-camera.html">Веб-камера<span>/<sup>08</sup></span><img class="menu-img" src="{{asset('assets/images/menu/2.png')}}" alt="img1"></a></li>
            <li><a class="link" href="documents.html">Документы<span>/<sup>09</sup></span><img class="menu-img" src="{{asset('assets/images/menu/1.png')}}" alt="img1"></a></li>
            <li><a class="link" href="construction_progress.html">Ход строительства<span>/<sup>10</sup></span><img class="menu-img" src="{{asset('assets/images/menu/2.png')}}" alt="img1"></a></li>
            <li><a class="link" href="terms.html">Условия оплаты<span>/<sup>11</sup></span><img class="menu-img" src="{{asset('assets/images/menu/1.png')}}" alt="img1"></a></li>
            <li><a class="link" href="developer.html">Девелопер<span>/<sup>12</sup></span><img class="menu-img" src="{{asset('assets/images/menu/2.png')}}" alt="img1"></a></li>
            <li><a class="link" href="contacts.html">Контакты<span>/<sup>13</sup></span><img class="menu-img" src="{{asset('assets/images/menu/1.png')}}" alt="img1"></a></li>
        </ul>
    </div>
</div>
<div class="form-wrapper" data-form-wrapper data-disable-page-scroll>
    <div class="form-close" data-close-form><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 13L1 1M1 13L13 1L1 13Z" stroke-width="2"/>
        </svg>
    </div>
    <div class="form">
        <form data-form autocomplete="off">
            <div class="form-title">
                <p>Заказать звонок</p>
            </div>
            <div class="form-text">Если у вас возникли вопросы или нужна консультация наши менеджеры с удовольствием помогут вам!</div>
            <div class="form-field form-field-input" data-field-input data-field-name data-status="field--inactive">
                <input class="form-field__input" type="text" name="name" placeholder="Имя">
                <div class="input-message" data-input-message></div>
            </div>
            <div class="form-field disabled form-field-input" data-field-input data-field-phone data-status="field--inactive">
                <input class="form-field__input" type="text" name="phone" placeholder="ваш номер">
                <div class="mask-absolute js-mask-absolute">Телефон</div>
                <div class="input-message" data-input-message></div>
            </div>
            <div class="form-field disabled form-field-input" data-field-input data-field-mail data-status="field--inactive">
                <input class="form-field__input" type="text" name="mail" placeholder="E-mail">
                <div class="input-message" data-input-message></div>
            </div>
            <div class="form-field disabled form-field-input" data-field-input data-field-comment data-status="field--inactive">
                <textarea class="form-field__input text-input" type="text" name="comment" placeholder="Comment"></textarea>
                <div class="input-message" data-input-message></div>
            </div>
            <button class="submit-btn link btn btn-text orange-btn" type="submit" data-btn-submit><span data-btn-submit-text>Отправить</span></button>
        </form>
        <div class="form-thanks-wrapper" data-thanks><img class="bottom" src="{{asset('assets/images/form/villas.svg')}}">
            <div class="form-thanks"><img class="top" src="{{asset('assets/images/form/polo.svg')}}">
                <div class="form-title">Сообщение отправлено</div>
                <div class="form-text">Спасибо за обращение. Ожидайте звонка наших менеджеров. Желаем приятного дня и хорошего настроения =)</div><a class="form-thanks-btn btn btn-text orange-btn" href="index.html"><span>Закрыть</span></a>
            </div>
        </div>
    </div>
</div>
<div class="toast-wrapper" data-toast-wrapper></div>
<header class="header"><a class="header-logo" href="index.html">
        <picture>
            <source srcset="{{asset('assets/images/logo.svg')}}" media="(min-width: 680px)"><img src="{{asset('assets/images/logo-mob.svg')}}">
        </picture></a>
    <div class="header-info-wrapper"><a class="header-location" href="#" target="_blank"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.94668 15.3998C6.94595 15.4003 6.94521 15.4009 6.94448 15.4014C6.77355 15.2897 6.52921 15.1244 6.23576 14.9097C5.64155 14.475 4.8505 13.8414 4.0612 13.0455C2.46749 11.4385 0.956177 9.24665 0.956177 6.74699C0.956177 3.27903 3.65978 0.5 6.95618 0.5C10.2526 0.5 12.9562 3.27932 12.9562 6.74732C12.9562 9.04976 11.451 11.2403 9.8461 12.9061C9.05412 13.7282 8.26039 14.3993 7.66405 14.865C7.36629 15.0975 7.11877 15.2781 6.94668 15.3998ZM4.04183 6.7466C4.04183 8.38917 5.3294 9.75268 6.95618 9.75268C8.58292 9.75268 9.87053 8.38918 9.87053 6.7466C9.87053 5.10421 8.58289 3.74074 6.95618 3.74074C5.32947 3.74074 4.04183 5.10421 4.04183 6.7466Z"/>
            </svg><span class="desk">Какабадзе 2 6, 2 этаж. г. Батуми. Аджара. Грузия</span></a><a class="web-camera-btn btn btn-text" href="#"><span class="desk">Веб камера</span><svg class="mob" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 5L11 8L15 11V5Z" stroke="#E3EBF3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9.57143 4H2.42857C1.63959 4 1 4.59695 1 5.33333V10.6667C1 11.403 1.63959 12 2.42857 12H9.57143C10.3604 12 11 11.403 11 10.6667V5.33333C11 4.59695 10.3604 4 9.57143 4Z" stroke="#E3EBF3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg></a>
        <ul class="lang">
            <li><a href="#">Ru</a></li>
            <li class="active"><a href="#">En</a></li>
        </ul><a class="tell-btn" href="tel:+995596076076"><span class="desk">+995 596 076 076</span><svg class="mob" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.9996 11.4817V13.5893C15.0004 13.7849 14.9602 13.9786 14.8817 14.1578C14.8031 14.3371 14.6879 14.498 14.5435 14.6303C14.399 14.7626 14.2285 14.8633 14.0428 14.9259C13.8571 14.9886 13.6603 15.0119 13.465 14.9943C11.299 14.7594 9.2183 14.0207 7.39023 12.8376C5.68945 11.7589 4.24748 10.3198 3.16674 8.62243C1.9771 6.78969 1.23677 4.70306 1.00571 2.53156C0.988123 2.33729 1.01126 2.1415 1.07364 1.95664C1.13603 1.77178 1.2363 1.60191 1.36807 1.45785C1.49984 1.31378 1.66022 1.19868 1.839 1.11986C2.01779 1.04105 2.21106 1.00025 2.40651 1.00007H4.51826C4.85987 0.996713 5.19105 1.11744 5.45007 1.33976C5.70909 1.56208 5.87828 1.87081 5.92609 2.20841C6.01522 2.88287 6.18052 3.54511 6.41883 4.18249C6.51354 4.43394 6.53403 4.70721 6.47789 4.96993C6.42175 5.23265 6.29132 5.4738 6.10207 5.66481L5.20809 6.55701C6.21016 8.31581 7.6693 9.77206 9.43159 10.7721L10.3256 9.87994C10.517 9.69106 10.7586 9.56089 11.0218 9.50486C11.2851 9.44883 11.5589 9.46929 11.8108 9.56381C12.4495 9.80164 13.113 9.96662 13.7888 10.0556C14.1308 10.1037 14.4431 10.2756 14.6663 10.5386C14.8895 10.8015 15.0081 11.1372 14.9996 11.4817Z" stroke="#E3EBF3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg></a><a class="appartment-btn btn btn-text orange-btn" href="#"><span class="desk">Выбрать дом</span><svg class="mob" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.19444 7.46154H6.2037M6.2037 7.46154V6M6.2037 7.46154V11.4103H3.91667M6.2037 1H1V11.4103H3.91667M6.2037 1V4M6.2037 1H15V7.46154H13.5926M11.1296 7.46154H13.5926M13.5926 7.46154V15H3.91667V11.4103" stroke="#E3EBF3"/>
            </svg></a>
        <div class="menu-btn" data-open-menu><span class="desk">Меню</span>
            <div class="menu-btn-icon"><span></span><span></span><span></span></div>
        </div>
    </div>
</header>
<div class="page__inner" data-scroll-container>
