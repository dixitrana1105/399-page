<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{!! $data[13]->text_details[0]->title !!}</title>
    <base href="/">
    <link rel="canonical" href="{!! $data[13]->text_details[0]->extrafield !!} ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="{{ $data[13]->key_value_pair[0]->key }}"
        content="{{ $data[13]->key_value_pair[0]->value }}">
    <meta name="{{ $data[13]->key_value_pair[1]->key }}"
        content="{{ $data[13]->key_value_pair[1]->value }}">
    <meta name="{{ $data[13]->key_value_pair[2]->key }}" content="{{ $data[13]->key_value_pair[2]->value }}">
    <style>
        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff
        }

        @-webkit-keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0
            }

            to {
                background-position: 0 0
            }
        }

        @-webkit-keyframes spinner-border {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @-webkit-keyframes spinner-grow {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }

        @media print {

            *,
            ::after,
            ::before {
                text-shadow: none !important;
                box-shadow: none !important
            }

            @page {
                size: a3
            }

            body {
                min-width: 992px !important
            }
        }

        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 130px;
            right: 40px;
            color: #FFF;
            text-align: center;
            font-size: 30px;
            z-index: 100;
        }    
        .my-float {
            margin-top: 16px;
        }
        
        .modal.right .modal-dialog {
            position: fixed;
            right: 0;
            margin: 0;
            width: 300px;
            height: 100%;
        }
        .modal.right .modal-content {
            height: 100%;
            overflow-y: auto;
        }
        .modal.right.fade .modal-dialog {
            transition: transform 0.3s ease-out;
            transform: translateX(100%);
        }
        .modal.right.fade.in .modal-dialog {
            transform: translateX(0);
        }
        
        .cls-1 {
            fill: #fff;
        }
        
        .cls-2 {
            fill: none;
            stroke: #565656;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-width: .86px;
        }
        .dv_contact_whatsapp_list
        {
            margin: 0;
            padding: 10px 0 0 0;
            list-style: none;
        }
        
        .dv_location_contacts
        {
            border-bottom: 1px solid #ebebeb;
            padding: 0 0 10px 0;
            margin: 0 0 10px 0;
        }
        
        .modal
        {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
            display: none;
            width: 100%;
            height: 100%;
            overflow: hidden;
            outline: 0;
        }
        
        .fade {
            transition: opacity .15s linear;
        }
        
        .dv_contact_whatsapp_list>li {
            margin: 0 0 10px 0;
            padding: 0;
            display: block;
        }
        
        .dv_contact_whatsapp_list>li>a {
            display: block;
            color: #000000;
            font-size: 14px;
        }
        
        
        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1040;
        }
        .modal {
            z-index: 1050;
            display: none;
        }
        .modal.show {
            display: block;
        }
        
        .dv_whatsapp {
            width: 15px !important;
            height: 15px !important;
        }       
    </style>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="print" onload="this.media='all'"><noscript>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </noscript>
    <style>
        @import url('https://fonts.cdnfonts.com/css/helios-antique');
        @import url('https://fonts.cdnfonts.com/css/brittany-signature');
        @import url('https://fonts.cdnfonts.com/css/archivo');
        @import url('https://fonts.cdnfonts.com/css/adam-2');
        @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
        @import url('https://fonts.cdnfonts.com/css/candlescript-demo-version');

        html,
        body {
            margin: 0;
            padding: 0;
            font-family: 'Helios Antique', sans-serif;
            font-size: 16px;
            font-weight: 400;
            scroll-behavior: smooth
        }

        @-webkit-keyframes mirroreffects {
            from {
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-transform-origin: center center;
                transform-origin: center center;
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out
            }

            10% {
                -webkit-transform: scale(.91);
                transform: scale(.91);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in
            }

            17% {
                -webkit-transform: scale(.98);
                transform: scale(.98);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out
            }

            33% {
                -webkit-transform: scale(.87);
                transform: scale(.87);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in
            }

            45% {
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out
            }
        }
    </style>
    <link href="assets/css/style.css" rel="stylesheet" media="print" onload="this.media='all'"><noscript>
        <link rel="stylesheet" href="assets/css/style.css">
    </noscript>
    <style>
        @media (max-width:1080px) {}
    </style>
    <link href="assets/css/responsive.css" rel="stylesheet" media="print" onload="this.media='all'"><noscript>
        <link rel="stylesheet" href="assets/css/responsive.css">
    </noscript>
    <!-- <link href="assets/css/swiper-bundle.min.css" rel="stylesheet"> -->
    <!-- <link rel="icon" type="image/x-icon" href="favicon.ico"> -->
    <link rel="shortcut icon" type="image/x-icon" href="https://ik.imagekit.io/mirrorskit/assets/img/favicon-16x16.png">

    <style>
        @font-face {
            font-family: 'Brown Sugar', sans-serif;
            src: url("https://ik.imagekit.io/mirrorskit/assets/499/img/aed-399-499/brown-sugar.ttf")
        }
    </style>


    <style>
        :root {
            --swiper-theme-color: #007aff
        }

        :root {
            --swiper-navigation-size: 44px
        }
    </style>
    <link rel="stylesheet" href="assets/css/styles.a2f233a33eccd281.css" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="assets/css/styles.a2f233a33eccd281.css">
    </noscript>
</head>

<body>
    <app-root _nghost-cki-c12="" ng-version="14.3.0"><router-outlet _ngcontent-cki-c12=""></router-outlet><app-home
            _nghost-cki-c11="">
            <div _ngcontent-cki-c11="" class="dv_wrapper">
                <header _ngcontent-cki-c11="">
                    <nav _ngcontent-cki-c11="" class="navbar navbar-expand-sm bg-dark navbar-dark pt-2 pb-2 fixed-top"
                        style="background: #000000 !important;">
                        <div _ngcontent-cki-c11="" class="container"><a _ngcontent-cki-c11="" href="#"
                                class="navbar-brand"><img _ngcontent-cki-c11=""
                                    src="{{ $link_project->site_value . $data[12]->image_details->{1}->file_path }}"
                                    class="dv_logo"></a><svg _ngcontent-cki-c11="" xmlns="http://www.w3.org/2000/svg"
                                id="dv_mobile_button" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icon-tabler-menu-deep">
                                <path _ngcontent-cki-c11="" stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path _ngcontent-cki-c11="" d="M4 6h16"></path>
                                <path _ngcontent-cki-c11="" d="M7 12h13"></path>
                                <path _ngcontent-cki-c11="" d="M10 18h10"></path>
                            </svg>
                            <div _ngcontent-cki-c11="" class="justify-content-end dv_navbar_mobile">
                                <ul _ngcontent-cki-c11="" class="navbar-nav">
                                  @if (isset($data[12]->button_details) && is_object($data[12]->button_details))
                                        @foreach ($data[12]->button_details as $button)
                                            <li _ngcontent-cki-c11="" class="nav-item mr-3">
                                                <a _ngcontent-cki-c11="" href="{{ $button->redirect_url }}"
                                                    class="nav-link text-white dv_mobile_menu_a"
                                                    target="{{ $loop->last ? '_blank' : '_self' }}">
                                                    {!! $button->description !!}
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                                <svg _ngcontent-cki-c11="" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icon-tabler-x">
                                    <path _ngcontent-cki-c11="" stroke="none" d="M0 0h24v24H0z" fill="none">
                                    </path>
                                    <path _ngcontent-cki-c11="" d="M18 6l-12 12"></path>
                                    <path _ngcontent-cki-c11="" d="M6 6l12 12"></path>
                                </svg>
                            </div>
                        </div>
                    </nav>
                </header>
                <div _ngcontent-cki-c11="" class="dv_content">
                    <div _ngcontent-cki-c11="" class="dv_slider">
                        @include('website.Hero')
                    </div>
                    <div _ngcontent-cki-c11="" class="dv_why_package">
                        @include('website.why_package')
                    </div>
                    <div _ngcontent-cki-c11="" class="dv_latest_trends">
                        @include('website.latest_trend')
                    </div>
                    <div _ngcontent-cki-c11="" class="dv_price_table">
                        @include('website.price_table')
                    </div>
                    <div _ngcontent-cki-c11="" class="dv_we_accept">
                        @include('website.we_accept')
                    </div>
                  <div class="dv_video_black">
                        <div class="container">
                            <iframe
                                class="responsive-video"
                                src="{{ $data[4]->video_details->{1}->url }}"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>

                    <style>
                    /* Default styles for larger screens */
                    .responsive-video {
                        width: 100%;
                        height: 1000px; /* Adjust as per requirement for large screens */
                    }

                    /* Styles for mobile view */
                    @media screen and (max-width: 768px) {
                        .responsive-video {
                            width: 21rem;
                            height: 21rem;
                        }
                    }
                    </style>
                    <div _ngcontent-cki-c11="" class="dv_why_package pt-5">
                        @include('website.know_best')
                    </div>
                    <div _ngcontent-cki-c11="" class="dv_thousand_review">
                        @include('website.review')
                    </div>
                    <div _ngcontent-cki-c11="" class="dv_staff_mirrors bg-light">
                        @include('website.employee')
                    </div>
                    <div _ngcontent-cki-c11="" id="location" class="dv_branch_499">
                        @include('website.branch')
                    </div>
                </div>
                <div _ngcontent-cki-c11="" id="faq" class="dv_frequrently_asked">
                    @include('website.ask_que')
                </div>
            </div>
            @include('website.footer_section')

            <a href="" class="float" data-toggle="modal" data-target="#whatsapp_icon">
                <img src="/uploadfiles/733585.png" style="width: 50px; height: auto;">
            </a>
            <div id="whatsapp_icon" role="dialog" class="modal right fade in">
                <div class="modal-dialog dv_modal_dialog" style="width: 300px;">
                    <div class="modal-content dv_modal_content mt-0">
                        <div class="modal-body dv_modal_body">
                            <svg data-dismiss="modal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.87 14.87" style="position: absolute; top: -40px; width: 30px; right: 15px;">
                                
                                <circle cx="7.43" cy="7.43" r="7.43" class="cls-1"></circle>
                                <g>
                                    <line x1="10.02" y1="4.85" x2="4.85" y2="10.02" class="cls-2"></line>
                                    <line x1="4.85" y1="4.85" x2="10.02" y2="10.02" class="cls-2"></line>
                                </g>
                            </svg>
                            <div class="dv_location_contacts">
                                <h4 style="text-transform: capitalize; font-size: 16px; font-weight: 600; font-family: OpenSauceOneBold; margin: 0 0 10px 0;">Al Muraqabat</h4>
                                <ul class="dv_contact_whatsapp_list">
                                    <li><a href="" ><img src="/uploadfiles/724664.png" class="dv_whatsapp" > 97142691449</a></li>
                                    <li><a href="" ><img src="/uploadfiles/733585.png" class="dv_whatsapp" > 971565373911</a></li>
                                </ul>
                            </div>
                            <div class="dv_location_contacts">
                                <h4 style="text-transform: capitalize; font-size: 16px; font-weight: 600; font-family: OpenSauceOneBold; margin: 0 0 10px 0;">Home Service</h4>
                                <ul class="dv_contact_whatsapp_list">
                                    <li><a href="" ><img src="/uploadfiles/724664.png" class="dv_whatsapp" > 971555235473</a></li>
                                    <li><a href="" ><img src="/uploadfiles/733585.png" class="dv_whatsapp" > 971509540920</a></li>
                                </ul>
                            </div>
                            <div class="dv_location_contacts">
                                <h4 style="text-transform: capitalize; font-size: 16px; font-weight: 600; font-family: OpenSauceOneBold; margin: 0 0 10px 0;">IBN Battuta Mall</h4>
                                <ul class="dv_contact_whatsapp_list">
                                    <li><a href="" ><img src="/uploadfiles/724664.png" class="dv_whatsapp" > 97145766288</a></li>
                                    <li><a href="" ><img src="/uploadfiles/733585.png" class="dv_whatsapp" > 971543210758</a></li>
                                </ul>
                            </div>
                            <div class="dv_location_contacts">
                                <h4 style="text-transform: capitalize; font-size: 16px; font-weight: 600; font-family: OpenSauceOneBold; margin: 0 0 10px 0;">TECOM</h4>
                                <ul class="dv_contact_whatsapp_list">
                                    <li><a href="" ><img src="/uploadfiles/724664.png" class="dv_whatsapp" > 97145686219</a></li>
                                    <li><a href="" ><img src="/uploadfiles/733585.png" class="dv_whatsapp" > 971502247058</a></li>
                                </ul>
                            </div>
                            <div class="dv_location_contacts">
                                <h4 style="text-transform: capitalize; font-size: 16px; font-weight: 600; font-family: OpenSauceOneBold; margin: 0 0 10px 0;">Al Bustan</h4>
                                <ul class="dv_contact_whatsapp_list">
                                    <li><a href="" ><img src="/uploadfiles/724664.png" class="dv_whatsapp" > 97143797872</a></li>
                                    <li><a href="" ><img src="/uploadfiles/733585.png" class="dv_whatsapp" > 971505458263</a></li>
                                </ul>
                            </div>
                            <div class="dv_location_contacts">
                                <h4 style="text-transform: capitalize; font-size: 16px; font-weight: 600; font-family: OpenSauceOneBold; margin: 0 0 10px 0;">Marina</h4>
                                <ul class="dv_contact_whatsapp_list">
                                    <li><a href="" ><img src="/uploadfiles/724664.png" class="dv_whatsapp" > 97144107691</a></li>
                                    <li><a href="" ><img src="/uploadfiles/733585.png" class="dv_whatsapp" > 971563005629</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>
