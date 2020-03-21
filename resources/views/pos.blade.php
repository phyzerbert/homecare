@extends('layouts.home')

@section('style')
    <style>
        .btn_pos {
            background-image: url("{{asset('images/btn_pos.png')}}");
            width: 175px;
            height: 46px;
            border-radius: 5px;
        }
        .number-spinner {
            max-width: 150px;
            line-height: 40px;
            padding: 0;
            margin: 0;
            border-radius: 4px;
            border: 2px solid #e2e2e2;
            overflow: hidden;
            position: relative;
            display: table;
        }
        .number-spinner input {
            height: 40px;
            max-height: 40px;
            line-height: 40px;
            font-size: 1em;
            padding: 0;
            margin: 0;
            border: none;
            position: relative;
            float: left;
            width: 100%;
            text-align: center;
        }
        .number-spinner input:focus {
            outline: none;
        }
        .number-spinner .ns-btn {
            position: relative;
            font-size: 0;
            white-space: nowrap;
            vertical-align: middle;
            display: table-cell;
            cursor: pointer;
        }
        .number-spinner .ns-btn a {
            height: 40px;
            min-height: 40px;
            width: 40px;
            padding: 0;
            max-width: 40px;
            line-height: 40px;
            border-radius: 0;
            border: none;
            text-align: center;
            position: relative;
            background: #e2e2e2;
            color: #333;
            display: inline-block;
            vertical-align: middle;
            text-decoration: none;
        }
        .number-spinner .ns-btn .icon-minus:after {
            content: "\002212";
            font-size: 35px;
            line-height: 38px;
            font-weight: bold;
        }
        .number-spinner .ns-btn .icon-plus:after {
            content: "\00002B";
            font-size: 38px;
            line-height: 35px;
            font-weight: bold;
        }

        /* Radio Button */
        
        .radbox {
            float: left;
            margin: 0 20px 20px 0;
            position: relative;
            cursor: pointer;
        }

        .radbox input[type='radio'] {
            display:none;
        }

        .radbox .rad-text {
            display: block;
            height: 34px;
            line-height: 34px;
            text-align: center;
            min-width: 85px;
            border: 1px solid #ddd;
            padding-left: 10px;
            padding-right: 10px;
        }

        input[type="radio"]:checked + .rad-text
        {
            border: 2px solid #e4393c;
            height: 32px;
            line-height: 32px;
            min-width: 91px;
            content: '';
            display: inline-flex;
            justify-content: center;
            align-items: center;
        }




    </style>
@endsection

@section('content')
    
    <header>
        <div id="sf-top-header" class="sf-top-header top-header">
            <div class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
                <div id="TopHeader_TD9F2A204012_Col00" class="sf_colsIn container empty" data-sf-element="Container" data-placeholder-label="Container"></div>    
                <div class="row" data-sf-element="Row">
                    <div class="sf_colsIn col-md-4" data-sf-element="Geo Navigation" data-placeholder-label="Geo Navigation"></div>
                    <div class="sf_colsIn col-md-8" data-sf-element="Language Selector &amp; Search" data-placeholder-label="Language Selector &amp; Search">
                        
                        <div class="language-selector language-selector-header">
                            <ul class="sf-lang-selector list-inline">
                                <li>
                                    <a data-available-culture="zh" href="" onclick="openLinkWithTranslation('zh'); return false;" class=" header" style="display: inline-block;">中文</a>
                                </li>
                                <li>
                                    <a data-available-culture="en" href="" onclick="openLinkWithTranslation('en'); return false;" class="selected header" style="display: inline-block;">English</a>
                                </li>
                            </ul>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <!-- logo:on -->
        <div id="sf-main-header" class="main-header">
            <div class="container">
                <div class="row" data-sf-element="Row">
                    <div class="sf_colsIn col-md-12" data-sf-element="Logos" data-placeholder-label="Logos Geo Navigation">
                        <div class="navigation-search"> <span> <i class="fa fa-search fa-2x fa-loaded" aria-hidden="true"></i> </span> </div>
                        <div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed" style="outline: none;"><span class="slicknav_menutxt"></span><span class="slicknav_icon slicknav_no-text"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a>
                            <ul class="slicknav_nav slicknav_hidden" style="display: none;" aria-hidden="true" role="menu">
                                <li class="slicknav_addition sf-geo-navigation-selector slicknav_collapsed slicknav_parent">
                                    <ul class="slicknav_hidden">
                                        <nav class="sf-geo-navigation">

                                            <ul id="sf-primary-geo-navigation" class="sf-primary-geo-navigation">

                                                <li class="active sf-no-logo">
                                                    <a href="https://www.who.int/" class="mobile nav-logo">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 580.82 177.96" class="svg replaced-svg">
                                                            <defs>
                                                                <style>
                                                                    .cls-1 {
                                                                        fill: #0093d5;
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <title>World Health Organization</title>
                                                        </svg>
                                                    </a>
                                                    <a href="https://www.who.int/" class="desktop">Global</a>
                                                </li>

                                                <li class=" has-children">
                                                    <a href="#">Regions</a>

                                                    <div class="sf-secondary-geo-navigation-container">
                                                        <div class="sf-secondary-geo-navigation-wrapper">
                                                            <div class="sf-geo-navigation-title">
                                                                <div class="nav-header">
                                                                    <span class="nav-logo">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 580.82 177.96" class="svg replaced-svg">
                                                                            <defs>
                                                                                <style>.cls-1{fill:#0093d5;}</style>
                                                                            </defs>
                                                                            <title>World Health Organization</title>
                                                                        </svg>
                                                                    </span>

                                                                    <span class="nav-title">WHO Regional websites</span>

                                                                    <div class="nav-back-btn"><i class="fas fa-angle-left"></i></div>
                                                                </div>

                                                            </div>

                                                            <ul class="sf-secondary-geo-navigation sf-secondary-geo-navigation-region row">
                                                                <li class=" col-md-4">
                                                                    <a href="https://www.afro.who.int/">
                                                                        <img class="lazy-navigation-icons" data-src="/images/default-source/fallback/maps/africa.png?sfvrsn=3204f957_16" alt="Africa">

                                                                        <span>Africa</span>
                                                                    </a>
                                                                </li>
                                                                <li class=" col-md-4">
                                                                    <a href="https://www.paho.org/hq/index.php?lang=en">
                                                                        <img class="lazy-navigation-icons" data-src="/images/default-source/fallback/maps/americas.png?sfvrsn=9efd6df3_14" alt="Americas">

                                                                        <span>Americas</span>
                                                                    </a>
                                                                </li>
                                                                <li class=" col-md-4">
                                                                    <a href="https://who.int/southeastasia">
                                                                        <img class="lazy-navigation-icons" data-src="/images/default-source/fallback/maps/south-east-asia.png?sfvrsn=68e76dc2_14" alt="South-East Asia">

                                                                        <span>South-East Asia</span>
                                                                    </a>
                                                                </li>
                                                                <li class=" col-md-4">
                                                                    <a href="http://www.euro.who.int/en/home">
                                                                        <img class="lazy-navigation-icons" data-src="/images/default-source/fallback/maps/europe.png?sfvrsn=c7d5c5a5_14" alt="Europe">

                                                                        <span>Europe</span>
                                                                    </a>
                                                                </li>
                                                                <li class=" col-md-4">
                                                                    <a href="http://www.emro.who.int/index.html">
                                                                        <img class="lazy-navigation-icons" data-src="/images/default-source/fallback/maps/eastern-mediterranean.png?sfvrsn=71211e18_14" alt="Eastern Mediterranean">

                                                                        <span>Eastern Mediterranean</span>
                                                                    </a>
                                                                </li>
                                                                <li class=" col-md-4">
                                                                    <a href="https://www.who.int/westernpacific/">
                                                                        <img class="lazy-navigation-icons" data-src="/images/default-source/fallback/maps/western-pacific.png?sfvrsn=88cbdcd5_14" alt="Western Pacific">

                                                                        <span>Western Pacific</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </nav>
                                    </ul>
                                </li>
                                <li class="slicknav_addition sf-lang-selector slicknav_collapsed slicknav_parent">
                                    <ul class="slicknav_hidden">
                                        <li>
                                            <a data-available-culture="ar" href="" onclick="openLinkWithTranslation('ar'); return false;" class=" header" style="display: inline-block;">العربية</a>
                                        </li>
                                        <li>
                                            <a data-available-culture="zh" href="" onclick="openLinkWithTranslation('zh'); return false;" class=" header" style="display: inline-block;">中文</a>
                                        </li>
                                        <li class="selected">
                                            <a data-available-culture="en" href="" onclick="openLinkWithTranslation('en'); return false;" class="selected header" style="display: inline-block;">English</a>
                                        </li>
                                        <li>
                                            <a data-available-culture="fr" href="" onclick="openLinkWithTranslation('fr'); return false;" class=" header" style="display: inline-block;">français</a>
                                        </li>
                                        <li>
                                            <a data-available-culture="ru" href="" onclick="openLinkWithTranslation('ru'); return false;" class=" header" style="display: inline-block;">русский</a>
                                        </li>
                                        <li>
                                            <a data-available-culture="es" href="" onclick="openLinkWithTranslation('es'); return false;" class=" header" style="display: inline-block;">español</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="home"><a href="/" target="_self" role="menuitem" tabindex="-1">Home</a></li>
                                <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="javascript:;" target="_self" tabindex="-1">Health Topics</a><span class="slicknav_arrow"></span></a>
                                </li>
                                <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="javascript:;" target="_self" tabindex="-1">Countries</a><span class="slicknav_arrow"></span></a>
                                </li>
                                <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="javascript:;" target="_self" tabindex="-1">Newsroom</a><span class="slicknav_arrow"></span></a>
                                </li>
                                <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="javascript:;" target="_self" tabindex="-1">Emergencies</a><span class="slicknav_arrow"></span></a>
                                </li>
                                <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="javascript:;" target="_self" tabindex="-1">About Us</a><span class="slicknav_arrow"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-sf-element="Row">
                <div id="MainHeader_TEC2026FA002_Col00" class="sf_colsIn col-sm-6 col-md-3 empty" data-sf-element="Column 1" data-placeholder-label="Column 1"></div>
                <div id="MainHeader_TEC2026FA002_Col01" class="sf_colsIn col-sm-6 col-md-3 empty" data-sf-element="Column 2" data-placeholder-label="Column 2"></div>
                <div id="MainHeader_TEC2026FA002_Col02" class="sf_colsIn col-sm-6 col-md-3 empty" data-sf-element="Column 3" data-placeholder-label="Column 3"></div>
                <div id="MainHeader_TEC2026FA002_Col03" class="sf_colsIn col-sm-6 col-md-3 empty" data-sf-element="Column 4" data-placeholder-label="Column 4"></div>
            </div>
        </div>
        <!-- logo:off -->
        <div id="navigationToScrape" class="navigation attached" style="position: relative !important;">
            <div class="row navWrapper" data-sf-element="Row">
                <div class="nav-container">
                    <!--Main desktop navigation:on-->
                    <ul class="nav">                        
                        <li class=""><a href="javascript:;" target="_self">Health Topics</a></li>
                        <li class=""><a href="javascript:;" target="_self">Countries</a></li>
                        <li class=""><a href="javascript:;" target="_self">Newsroom</a></li>
                        <li class=""><a href="javascript:;" target="_self">Emergencies</a></li>
                        <li class=""><a href="javascript:;" target="_self">About Us</a></li>
                    </ul>
                    <!--Main desktop navigation:off-->
                </div>

                <ul class="nav-mobile" style="display: none;">
                    <li class="home"><a href="/" target="_self">Home<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 580.82 177.96" class="logo svg replaced-svg"><defs><style>.cls-1{fill:#0093d5;}</style></defs><title>World Health Organization</title><g id="Layer_2" data-name="Layer 2"><g id="ENGLISH"><path class="cls-1" d="M164,32.58c3.86,4.6,10.61,7.31,14.56,11.92-2.83-13.63-13.35-24.76-25.79-27.42C158.84,21.65,160.15,28,164,32.58ZM14.48,67.13c8.57-18.65,21.36-14.7,26.77-32.47-3,5.45-17,7.75-23.51,21.72,3.31-8.3,1.65-21,7.25-27.85C8.25,40.88,15.38,60.86,14.48,67.13ZM30,111.86c1.54,7.26-3,17.74,4.2,27.76C26.76,131.28,11,129.16,4.58,116.48c8,31,29,24.6,38.39,31.33C35.21,136.66,41.56,129.25,30,111.86Zm-2.41,19.45C23,114,31.18,108,24.93,91.4c-.65,9.36-6.89,13.92-2.68,31C14.82,107.94,3.33,102.54,0,92.6.23,119.78,22.07,123.81,27.59,131.31Zm33.54,29c-6.43-8.9-2-13.93-20.1-30.09,3.82,5.9-.12,13.32,12.06,24.86-11.92-7-28.36-4-36.29-13.41C30.42,167.74,54.35,157.1,61.13,160.34Zm87.42-5.23c12.18-11.54,8.24-19,12.06-24.86-18.06,16.16-13.67,21.19-20.1,30.09,6.78-3.24,30.71,7.4,44.32-18.64C176.91,151.09,160.47,148.08,148.55,155.11Zm18.89-15.49c7.17-10,2.66-20.5,4.2-27.76-11.56,17.39-5.21,24.8-13,36,9.44-6.73,30.36-.35,38.39-31.33C190.62,129.16,174.88,131.28,167.44,139.62Zm-28.86,21.95a89.2,89.2,0,0,0-19.75-3,47.75,47.75,0,0,0-18,3.06,47.78,47.78,0,0,0-18-3.06,89.2,89.2,0,0,0-19.75,3c-10.87,2.89-20.26,5.13-28.45,1,7.85,7,17,9.45,30.23,8,11-1.18,19.91-6.69,30.29-6.61h.41a55.47,55.47,0,0,0-17.12,13.31l5,.67s5.27-10.59,17.39-13.35c12.12,2.76,17.39,13.35,17.39,13.35l5-.67A55.63,55.63,0,0,0,106.1,164h.41c10.38-.08,19.27,5.43,30.28,6.61,13.23,1.43,22.39-1.06,30.24-8C158.84,166.7,149.45,164.46,138.58,161.57ZM25.67,72.63C21.19,81.23,14.23,83.2,15,101,11.22,85.18,2.24,79.32,2.35,69.23c-6.24,26.3,10.44,29.42,14.72,40.44C16.44,93.88,26.52,90.69,25.67,72.63Zm6.26-20.3c-1.56,2.18-2.65,3.11-6.81,6.54A33.77,33.77,0,0,0,13,78.64c.43-9.64-5.53-23.49-1.57-33.59-15.33,21.65.88,34.62,1.45,42.46C16.86,72.42,26,72.3,31.93,52.33Zm156.7,26.31a33.82,33.82,0,0,0-12.11-19.77c-4.16-3.43-5.25-4.36-6.81-6.54,5.93,20,15.07,20.09,19,35.18.57-7.84,16.78-20.81,1.44-42.46C194.15,55.15,188.2,69,188.63,78.64Zm13,14c-3.33,9.94-14.82,15.34-22.25,29.84,4.21-17.12-2-21.68-2.68-31-6.25,16.62,2,22.59-2.66,39.91C179.57,123.81,201.41,119.78,201.64,92.6ZM176,72.63c-.85,18.06,9.24,21.25,8.6,37,4.29-11,21-14.14,14.72-40.44.12,10.09-8.86,16-12.61,31.72C187.41,83.2,180.45,81.23,176,72.63Zm-138.34-40c3.87-4.6,5.18-10.93,11.24-15.5-12.44,2.66-23,13.79-25.79,27.42C27,39.89,33.76,37.18,37.62,32.58Zm122.77,2.08c5.41,17.77,18.2,13.82,26.76,32.47-.89-6.27,6.24-26.25-10.5-38.6,5.6,6.86,3.94,19.55,7.25,27.85C177.41,42.41,163.44,40.11,160.39,34.66ZM117,44.75A41.92,41.92,0,0,0,106.77,42c0,.75,0,1.52,0,2.28a40,40,0,0,1,9.4,2.58A6,6,0,0,0,117,44.75Zm-2.59-22,.68-.61-1.3-.55-3.42-.07-.89.62-2-.17,0,.49a34.75,34.75,0,0,1,3.52.37l1.67-.15ZM107.78,96.5c0-.58-.77-1.15-1.91-1.69h-.21c0,.47,0,2.79-.07,3.92C107,98.1,107.78,97.42,107.78,96.5ZM68.16,53a10.92,10.92,0,0,1,.29-1.25,5.79,5.79,0,0,1-1.4.14Zm32.73,100.6A69.76,69.76,0,0,0,108,14.47c0,.13,0,.27-.08.4-.14.68-.27,1.29-.37,1.83a67.35,67.35,0,0,1,40.63,19l-7.7,7.7.29-1.36-1-.44-1.38-.08.29-.89-.93-3.15-1.92-2.11-6-3.17-.52.55-1.09.32a18,18,0,0,1,3.18,10.11c0,.47,0,.92,0,1.37l3,3.75-1.4.32.93,1.4-2.63,2.62-1.06-2a17.92,17.92,0,0,1-2,3.93l.59.54-8.11,8.11c-.49-.47-1-.92-1.52-1.35-.78.36-1.57.69-2.38,1l.69.54-.41.41-1,.53-.35,1-.59-.59-1.71.57.47.75,1.18-.31.77.06.06-.42.59-.3.18-.35,1.06-.3.83,0c.16.14.33.29.48.44L115.81,68l-.24-.34-3.36.55-.75.75-.73.09,2.08-2-.74-.37-1.95,2.6.57-.06,0,1,.71.28.14,1-1.17-.23-1.22.22-3-1.51s-.16,7.92-.24,11.9c7,2.34,14.35,5.72,14.35,14.6a11,11,0,0,1-5,9.38h0l-.15.1h0l-.22.15c-2.82,1.86-6.44,2.86-9.58,3.84,0,0-.09,6.22-.09,6.22,5,2.48,11.05,6.09,10.49,16.42-.07,2.54-1.06,3.24-1.91,3.47h0a52.52,52.52,0,0,1-9,1.43c0,.8,0,1.56,0,2.27a55.87,55.87,0,0,0,34.78-15.36l8.1,8.1a67.37,67.37,0,0,1-93.3.19l8.1-8.1a55.83,55.83,0,0,0,34.29,15.15c0-.7,0-1.46,0-2.27A53.59,53.59,0,0,1,64.05,123l2.16-2.17,3,.34,1.58-1.7,4.14.14.61-1.43-.15-.61A42,42,0,0,0,96.48,126c0-.88,0-1.65,0-2.28A39.93,39.93,0,0,1,73.76,113.3l8.11-8.11a28.85,28.85,0,0,0,6.57,4.41,7.67,7.67,0,0,1,.82-2.13,26.22,26.22,0,0,1-5.79-3.89l8.13-8.12a14.86,14.86,0,0,0,4.34,2.41c0-.8,0-1.65,0-2.44a12.47,12.47,0,0,1-2.68-1.59l2.29-2.29c-.8-.24-1.62-.5-2.42-.78l-1.54,1.54a12.4,12.4,0,0,1-1.94-2.89,27.57,27.57,0,0,1-4-2.14A15.69,15.69,0,0,1,78.06,73.5,16.54,16.54,0,0,1,81.34,63l-8.08-8.08A39.91,39.91,0,0,1,94.9,44.28c0-.78,0-1.55-.05-2.28A42.18,42.18,0,0,0,71.66,53.34L70.29,52c-.31.55-.67,1.24-1.09,2.11l.86.87A42.13,42.13,0,0,0,58.6,83.17H47.13A53.62,53.62,0,0,1,62,46.83l3.64,3.65a4.61,4.61,0,0,0,.52,0,5.5,5.5,0,0,0,2.07-.6l-4.63-4.63a54.51,54.51,0,0,1,8-6.38,15.06,15.06,0,0,1,.57-1.68,26.93,26.93,0,0,1,1.75-2.35A56,56,0,0,0,62,43.63l-8.1-8.1A67.2,67.2,0,0,1,94,16.73c-.06-.28-.1-.5-.1-.5-.1-.53-.22-1.12-.33-1.74a69.77,69.77,0,0,0,7.28,139.15ZM116,105.45v-.06l0,0Zm33.78-68.12a67.26,67.26,0,0,1,18.65,45.84H156.92a55.67,55.67,0,0,0-6-24.48l.1-.2.79.42.19-.61L150,54.71l-2.43-3.36L144.69,49c-1-1.22-2-2.4-3.07-3.54ZM135.13,52l2.75.12.66.79-.33,1.17L142,56.48l.75-.09,4.9,5.6,2-.7a53.4,53.4,0,0,1,5,21.88H143.19a41.78,41.78,0,0,0-1.07-8.72l.53-.71.71-3.59-.54-3.86-1.38-4.44-3.2-4.68.78.41.39-.39-2.57-1.74-.17.57,2.57,3.67,1.45,3,1,3,.33,2,.53,3.38-1,.07s-1.11-2.07-1.45-2.92l.51-.77-1-1.4v-1.4l-.7-.88-.87.11c-.31-.58-.64-1.15-1-1.71l.62.31.16-.16-.33-.72.75-.42-.34-.42-1.11.42.41-1.74-.66-.38-.59,1.39a42.64,42.64,0,0,0-4.17-5.3Zm-2.3,26.87,2.06-1.12,2.1-.32.46-1,1.17-.7.45-1,.36-1.69c.17.59.32,1.2.46,1.81l-1.11,3.31,0,1.12,1.61-2.15a38.74,38.74,0,0,1,.57,6h-10l-.23-.87,1.17-.93.23-.56.51-.38,1.36-.14.14-.6ZM119.07,71l1-.24,0-.24-1-.69.35-2.16,1.23-1.23a27.16,27.16,0,0,1,2.13,2.77l-.43,1.33-1.12-.8-.85.23.42.79h.42l-.47,1.17-.32-.47Zm4.39,38.07-2.48-.7-.74.27-1.4-1.07-1.32-.47c.65-.47,1.28-1,1.89-1.48l2,1.44,1.56.82.77.77ZM122.2,64.85l8.11-8.11a40.43,40.43,0,0,1,5,6.74l-1,.28.05,1.81,3,1.92a39.2,39.2,0,0,1,1.9,5.12l-.53.78-1.1.7-.27,1.68-.75.42-.63.74-.63-.23-1.12,0,.65-.88.47-2.29.74-.46L134,70.92l-1.63.55L132,73l-1,1.11-1.07-.88-.38-.94.61-.38.34.62.5-.19-.22-1-.71,0-.05.42-.47.09L127,68.86l-.86-.65.33-.36.76-.26-.7-.28s-.89.2-1,.2l.51.64-1.28,0A27.71,27.71,0,0,0,122.2,64.85ZM126.33,108l-1.1-1.1.84-1.09,1.06-2.16-.41-.6.7-1.6-.08-1.44-.42-1.49-1-.35-.37.84-.6-.16a27.18,27.18,0,0,0,2.4-4.19l1-.44.58-.78.28.32.7-.84-.56-.7.51-.14.94.38,1.77,0,1.07-.56,2.8-.74-.53-.93-.18-1.13,1.5.66.56-.33-.28-1.16L135.7,89l-2-.42-1.54-3.15h8.77a39.92,39.92,0,0,1-11.07,26.08l-1.2-1.21.52-1.61-.94-3.55Zm1.55,22.37,1.08-2.32-.42-1,1.59-1.4v-.84l-1.36-.85,1.12-2.23,1.68-2.2-1.68-1.81h-1.26l-.78-1.27c.67-.56,1.34-1.13,2-1.73l8.11,8.11A54.38,54.38,0,0,1,127.88,130.38ZM138,119.67l.9-1-.85-4.44-.58-.23.36-.75-1.92-.6-.37,1.58-.19,2-.4.37-3.5-3.5a42.17,42.17,0,0,0,11.74-27.67h11.47a53.55,53.55,0,0,1-15.1,35.78Zm3.16,3.15a55.84,55.84,0,0,0,15.77-37.38h11.46a67.28,67.28,0,0,1-19.12,45.49Zm-69-11.11c-.83-.86-1.62-1.75-2.38-2.68l.35-2.9-1.21-2.78L68.62,99l-1.36-2.64.28-1.64L65.9,91.57l-1.43-.72.58-1.67-.59-1.32.59-1.51h1.57l.55-.91h2.68l.41.79L69.76,89l-.32.47,1,2.19-.66.36-.46-.58-.2.22.46,1.3.79,1.52.37,0L71,93l-.38-.5,0-.92-.12-1.9L71,86.34l-.54-.9h1.92a28.48,28.48,0,0,0,7.89,18.17ZM64.56,89.3,63.48,91H61.62l-.15-.11a40.74,40.74,0,0,1-.58-5.45h3.45l-.83,2.76Zm3.77-7.87.21-2.28,1.36-.79,2.43.43.37.44a27,27,0,0,0-.37,3.94H69.58ZM80,90l.57-.29L82,90.84l-.65.53,1.69,1.12L83,91.29l.9-1.49.94,1,1,1.38L84,92.56l.79,1.58L86,93.5,85.88,93l.9-.61.53-2.5a14.91,14.91,0,0,0,2.63,4l-8.1,8.1a26.21,26.21,0,0,1-7.1-15.22l1.66,1.77,1.56,0ZM71.66,56.54l8.1,8.11a28.91,28.91,0,0,0-4.3,6.19l-.56,0-1.14.35-.4,0-1.21,1.13L73.68,72l1.38-.35-.24.53-1.21.74H73l-1.78,1.36-1.72-.14-2.49,4.64.49.93-1.35,1.5-.21,2H60.86A39.92,39.92,0,0,1,71.66,56.54ZM61.19,117.69l2.57,1.51.53.36-1.86,1.86q-1.3-1.35-2.52-2.79ZM58.62,85.44c0,1.11.14,2.22.26,3.31l-1.4.32-.29,1.42-2.92,3.72.07,5.11-3,1H49.7a53.48,53.48,0,0,1-2.56-14.89ZM47.3,100.26l-.67-.13L46,99.42l-3.22-.28,1,1.35-3-.56.78-.72-.73-.72-2.15.94-.77,1.42.3,3.27L40.69,110l1.19,1.86.68.25-1.87-3.55-.41-1.81.42-.44-.26-1,1.13.15,1.73,2.62.43.17,0-1.91.7.41.15,1,1.82.48.76-.54.26.18,0,1.39.8,1,1,.22,2.12,3.59,1.29.36.4-1.68a56.32,56.32,0,0,0,7.9,10.2l-8.1,8.1A67.32,67.32,0,0,1,33.41,85.44H44.88A55.83,55.83,0,0,0,47.3,100.26Zm5-63.13,8.1,8.1A55.91,55.91,0,0,0,44.86,83.17H33.4A67.28,67.28,0,0,1,52.25,37.13Zm83-4.18-.69-1.12-1.5-.75-1.17.89,1.5.8L135.05,34ZM128.29,65.3l0,.88,2-.59.61-1.21-1.37-1.8.73-1.1,1.85,1.32.34-.27-.37-.26-.42-.8.76-.44-.74-1-1.74.88L129.36,62l-.35.95.77,1.29-.28.6Zm-82.9,51.42.15-.52-1-2.24-1.22-.45ZM92.27,73.64c0,1.92,1.17,3.28,3.3,4.45,0,0,0-.33,0-.86l-1.34-1.34.71-1.29.58-.16c0-2.24-.09-4.75-.1-5.11l-.1,0C93.34,70.43,92.27,71.75,92.27,73.64Z"></path><path class="cls-1" d="M105.07,123.32c3.6,1.82,6.92,4.34,8.31,9.11.61-7.9-3.82-11.32-8.21-13.63C105.17,118.81,105.07,123.33,105.07,123.32Z"></path><path class="cls-1" d="M129,43.2c0-7.17-5.2-15.13-17.95-17.94a30.69,30.69,0,0,0-3.89-.45c0,1.08-.08,3.56-.08,3.56,0,.78-.08,3.65-.1,4.27a18,18,0,0,1,2.45.34c7.41,1.77,10.06,6,10.06,10.22,0,6.81-5.82,9.38-13,11.32l-2.37.62c-2.17.54-4.4,1.06-6.61,1.65-.79.21-1.57.44-2.35.67h0c-7.93,2.42-14.75,6.24-14.75,16s7.78,13.34,15.37,15.68q-.07-4.19-.16-8.42c-3.35-1.57-5.71-3.64-5.71-7.12s2.15-5.46,5.44-7c.73-.33,1.51-.63,2.34-.91,1.89-.64,4-1.19,6.25-1.73l2.37-.57h0C117,60.89,129,57.54,129,43.2Z"></path><path class="cls-1" d="M90.56,111.67c0,3.92,2.9,6,5.79,7.67,0-.66-.12-6.73-.12-6.83.06-1.21,1.23-1.94,2.18-2.39a47.05,47.05,0,0,1,4.59-1.75c.86-.3,1.59-.59,2.41-.83h0c5.8-1.75,12.51-4,12.51-11s-5.75-10-12-12.13c0,2.25-.11,5.54-.16,7.81,2.66,1,4.42,2.31,4.42,4.32,0,2.53-2.7,4-4.61,4.72-.8.31-2,.71-2.35.82-1.54.48-3.2,1-4.75,1.6a22.79,22.79,0,0,0-2.35,1C93.36,106.06,90.55,108.09,90.56,111.67Z"></path><path class="cls-1" d="M94.49,25.93a46.17,46.17,0,0,0-7,2.85c-2.5.83-6,1-9.67,4.94A49.49,49.49,0,0,0,74.49,38c-1.1,1.58-1.15,4.12-2,5.49-1.16,2-.88,3.11-.88,3.11l0,.06a5.31,5.31,0,0,1-1.34,2.48A5.08,5.08,0,0,1,65.61,51c1.66.83,4-.33,4-.33a30.61,30.61,0,0,0-.88,3.3c1.86-4.21,3.57-5.75,4.1-6.18.8.18,2.46.11,5.54-1.66,3.48-2,8.71-5.25,10.19-7.31a13.59,13.59,0,0,1,6.16-4.65C94.61,31,94.55,28.26,94.49,25.93ZM79.81,39.08,78,39.47,80.16,36l2.52.08Z"></path><path class="cls-1" d="M101.68,111.18c-.34.12-1.21.49-1.76.68s-1.32.51-1.32.71.56,30.41.56,31.08c0,6.25,3.18,6.29,3.18,0,0-.45.64-32.9.64-32.9S102.22,111,101.68,111.18Z"></path><path class="cls-1" d="M98.38,101.16c1-.34,2-.64,2.9-.93l1.93-.6c0-1.91.58-28.33.68-33.13a60.72,60.72,0,0,0-6.15,1.77C97.81,71.87,98.33,98.28,98.38,101.16Z"></path><path class="cls-1" d="M101,0c-8.94,0-5.14,13.26-4.43,17.58,0,.21.72,30,.86,36.79,1.36-.36,2.71-.69,4-1l2.7-.68c.13-6.57.79-35,.81-35.15C105.53,12.91,110.21,0,101,0Z"></path><path class="cls-1" d="M247.15,42.27H247l-7.57,41.34H229.05l-9.71-50.45h8.26l6.75,38.89h.13l7.23-38.89h10.74l7.16,38.89h.14l7-38.89h8l-9.92,50.45H254.31Z"></path><path class="cls-1" d="M289.43,45.81c7.22,0,15.56,4,15.56,19.15,0,15.62-8.34,19.23-15.56,19.23S273.8,80.58,273.8,65C273.8,49.79,282.2,45.81,289.43,45.81Zm0,32c5.5,0,6.74-6.65,6.74-12.87s-1.24-12.79-6.74-12.79-6.82,6.58-6.82,12.79S283.92,77.83,289.43,77.83Z"></path><path class="cls-1" d="M310.28,52.53a52.55,52.55,0,0,0-.27-6.14h7.71c.07,2.24.28,4.55.28,6.79h.13c1-2.89,3.72-7.37,9-7.37a8.15,8.15,0,0,1,1.45.22v8.38a8.4,8.4,0,0,0-2.41-.36c-3.51,0-7.37,2.24-7.37,9.18V83.61h-8.54Z"></path><path class="cls-1" d="M334,29.4h8.54V83.61H334Z"></path><path class="cls-1" d="M378.14,29.4V77.25a51.7,51.7,0,0,0,.27,6.36h-8a51.34,51.34,0,0,1-.28-5.78h-.21c-1.37,3.18-3.92,6.36-9.43,6.36-8.81,0-12.46-8.82-12.46-19.15,0-12.15,4.61-19.23,12.26-19.23a9.51,9.51,0,0,1,9.15,5.93h.14V29.4ZM362.85,77.62c5,0,6.75-5.72,6.75-12.73,0-7.23-1.93-12.5-6.61-12.5s-6.4,4.84-6.4,12.29C356.59,73.28,357.9,77.62,362.85,77.62Z"></path><path class="cls-1" d="M406.26,33.16h8.82V53.69h14.24V33.16h8.82V83.61h-8.82V61.35H415.08V83.61h-8.82Z"></path><path class="cls-1" d="M470.84,81.81a25.48,25.48,0,0,1-10.6,2.38c-11.43,0-16.39-8.6-16.39-18.65,0-11.13,5.58-19.73,14.6-19.73,7.64,0,14.18,4.7,14.18,19.88v1.73H452.11c0,6.36,2.41,10.2,9,10.2,5.23,0,7.71-1.67,9.3-2.9Zm-6.47-20c0-6.58-2.07-9.91-5.92-9.91-4.48,0-6.34,5-6.34,9.91Z"></path><path class="cls-1" d="M480.27,48.56a23.72,23.72,0,0,1,11.22-2.75c11,0,13.56,5.64,13.56,15V77a47.23,47.23,0,0,0,.49,6.57h-7.72a19.44,19.44,0,0,1-.48-5h-.13c-2.14,3-4.83,5.63-9.92,5.63-5.51,0-10.6-4-10.6-10.91,0-10.12,7.85-12.65,18.66-12.65h1.72V59.26c0-3.69-1.72-7.09-6.61-7.09a15.87,15.87,0,0,0-9.71,3.62Zm16.8,16.84h-.76c-7.3,0-11.63,1.59-11.63,7,0,3.4,2.13,5.71,5.43,5.71,5.1,0,7-4,7-10.63Z"></path><path class="cls-1" d="M513.45,29.4H522V83.61h-8.54Z"></path><path class="cls-1" d="M532.66,38.73,541.2,36V46.39h7.09V53H541.2v19.3c0,4,1.37,5.13,3.85,5.13a6.51,6.51,0,0,0,3.24-.8V83a12.66,12.66,0,0,1-5.72,1.23c-6.33,0-9.91-3-9.91-10.84V53H527V46.39h5.64Z"></path><path class="cls-1" d="M552.69,29.4h8.54V51.16h.21c1.51-2.32,3.51-5.35,8.81-5.35,8,0,10.46,6.29,10.46,13.81v24h-8.54V61.28c0-5.71-1.37-8.1-4.88-8.1-4.48,0-6.06,4-6.06,8.75V83.61h-8.54Z"></path><path class="cls-1" d="M238.13,97c10,0,19.14,7.81,19.14,26s-9.15,25.94-19.14,25.94S219,141.14,219,123,228.15,97,238.13,97Zm0,44.82c5.58,0,10.05-5,10.05-18.86s-4.47-18.87-10.05-18.87-10,5-10,18.87S232.56,141.86,238.13,141.86Z"></path><path class="cls-1" d="M263,117.14a55,55,0,0,0-.27-6.15h7.71c.07,2.25.27,4.56.27,6.8h.14c1-2.89,3.72-7.37,9-7.37a8.9,8.9,0,0,1,1.44.21V119a8.27,8.27,0,0,0-2.4-.36c-3.52,0-7.37,2.24-7.37,9.18v20.38H263Z"></path><path class="cls-1" d="M286.63,154a21.73,21.73,0,0,0,10.47,3.19c8,0,9.36-5.86,9.36-11.72v-3.54h-.14c-1.37,2.89-3.78,6.29-9.36,6.29-5,0-12.39-3.47-12.39-18.5,0-10.27,3.51-19.3,12.8-19.3,5.17,0,7.58,3.11,9.37,6.36H307c0-2,.21-3.83.28-5.79H315c-.14,2-.28,3.91-.28,5.86v27.47c0,11.64-3.37,20-16.38,20A34.38,34.38,0,0,1,286.15,162Zm13.28-12.36c5.37,0,7.5-4,7.5-12.5,0-7.81-2.82-12-6.88-11.93-4.48.08-6.2,4.41-6.2,12C294.33,138,297,141.64,299.91,141.64Z"></path><path class="cls-1" d="M324,113.16a23.9,23.9,0,0,1,11.23-2.74c11,0,13.56,5.64,13.56,15v16.26a47.54,47.54,0,0,0,.48,6.58h-7.71a19.47,19.47,0,0,1-.48-5.06h-.14c-2.13,3-4.82,5.64-9.91,5.64-5.51,0-10.6-4-10.6-10.91,0-10.12,7.84-12.65,18.65-12.65h1.72v-1.38c0-3.68-1.72-7.08-6.61-7.08a15.9,15.9,0,0,0-9.7,3.61ZM340.75,130H340c-7.3,0-11.64,1.59-11.64,7,0,3.39,2.14,5.71,5.44,5.71,5.09,0,6.95-4,6.95-10.63Z"></path><path class="cls-1" d="M357.34,117.14a55,55,0,0,0-.27-6.15h8c.06,1.88.27,3.83.27,5.72h.14c1.24-2.25,3.65-6.29,9.43-6.29,8.05,0,10.46,6.29,10.46,13.8v24h-8.53V125.89c0-5.71-1.38-8.1-4.89-8.1-4.48,0-6.06,4-6.06,8.75v21.68h-8.54Z"></path><path class="cls-1" d="M393.06,95.16h8.81V104h-8.81Zm.13,15.83h8.54v37.23h-8.54Z"></path><path class="cls-1" d="M409.68,140.49l15.14-22.7H410.16V111h23.2v7.67l-14.87,22.77h15.35v6.79H409.68Z"></path><path class="cls-1" d="M441.92,113.16a23.87,23.87,0,0,1,11.23-2.74c11,0,13.56,5.64,13.56,15v16.26a47.54,47.54,0,0,0,.48,6.58h-7.71a19,19,0,0,1-.48-5.06h-.14c-2.14,3-4.82,5.64-9.91,5.64-5.51,0-10.61-4-10.61-10.91,0-10.12,7.85-12.65,18.66-12.65h1.72v-1.38c0-3.68-1.72-7.08-6.61-7.08a15.9,15.9,0,0,0-9.7,3.61ZM458.72,130H458c-7.3,0-11.63,1.59-11.63,7,0,3.39,2.13,5.71,5.44,5.71,5.09,0,7-4,7-10.63Z"></path><path class="cls-1" d="M476.52,103.33l8.54-2.74V111h7.09v6.58h-7.09v19.3c0,4,1.38,5.13,3.86,5.13a6.48,6.48,0,0,0,3.23-.79v6.36a12.62,12.62,0,0,1-5.71,1.23c-6.34,0-9.92-3-9.92-10.84V117.57h-5.64V111h5.64Z"></path><path class="cls-1" d="M498,95.16h8.81V104H498ZM499.1,111h8.54v37.23H499.1Z"></path><path class="cls-1" d="M529.81,110.42c7.23,0,15.55,4,15.55,19.15,0,15.62-8.32,19.23-15.55,19.23s-15.63-3.61-15.63-19.23C514.18,114.39,522.58,110.42,529.81,110.42Zm0,32c5.5,0,6.74-6.65,6.74-12.87s-1.24-12.79-6.74-12.79S523,123.35,523,129.57,524.3,142.44,529.81,142.44Z"></path><path class="cls-1" d="M552.8,117.14a52.51,52.51,0,0,0-.28-6.15h8c.07,1.88.28,3.83.28,5.72h.14c1.23-2.25,3.64-6.29,9.42-6.29,8.06,0,10.47,6.29,10.47,13.8v24h-8.53V125.89c0-5.71-1.38-8.1-4.9-8.1-4.47,0-6,4-6,8.75v21.68H552.8Z"></path></g></g></svg></a></li>
                    <li class=""><a href="javascript:;" target="_self">Health Topics</a></li>
                    <li class=""><a href="/redirect-pages/mega-menu/countries" target="_self">Countries</a> </li>
                    <li class=""><a href="/news-room" target="_self">Newsroom</a></li>
                    <li class=""><a href="/redirect-pages/mega-menu/emergencies" target="_self">Emergencies</a></li>
                    <li class=""><a href="/redirect-pages/mega-menu/about-us" target="_self">About Us</a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <section class="sf-content content">
        <div id="PageContent_TA51A0481002_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
            <div>
                <ul class="sf-breadscrumb breadcrumb">
                    <li><a href="javascript:;">主页</a><span>/</span></li>
                    <li><a href="javascript:;">健康知识</a><span>/</span></li>
                    <li class="active">新冠状病毒</li>
                </ul>
            </div>            
            <article class="sf-detail-body-container sf-detail-body-wrapper health-topic--detail dynamic-content dynamic-content__article">
                <div class="container">
                    <div class="row">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="text-primary">一次性卫生防护口罩</h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{asset('images/mask.jpg')}}" alt="">
                                    </div>
                                    <div class="col-md-9">
                                        <form action="{{route('pos_submit')}}" method="post">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <label for="">商品价值:</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <label for="price_45"  class="radbox">
                                                        <input type="radio" id="price_45" name="price" value="45" checked>
                                                        <span class='rad-text'>RM 45</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group row" style="margin-top: 15px;">
                                                <div class="col-md-2">
                                                    <label for="">商品数量:</label>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="number-spinner">
                                                        <span class="ns-btn">
                                                                <a data-dir="dwn"><span class="icon-minus"></span></a>
                                                        </span>
                                                        <input type="text" class="pl-ns-value" value="1" name="quantity" max="2" />
                                                        <span class="ns-btn">
                                                                <a data-dir="up"><span class="icon-plus"></span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row" style="margin-top: 30px;">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-10">
                                                    <button type="submit" class="btn btn-danger btn-lg btn_pos"></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </article>

        </div>
        <div class="row" data-sf-element="Row" style="margin-top: 30px;">
            <div id="PageContent_TA51A0481001_Col00" class="sf_colsIn col-md-12" data-sf-element="Column 1" data-placeholder-label="Body content">
                <div id="PageContent_C001_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
                    <div id="PageContent_C047_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
                        <div class="row" data-sf-element="Row">
                            <div id="PageContent_C045_Col00" class="sf_colsIn col-md-8" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                <div class="section-heading">
                                    <p>由于之前我们的货源被不法分子用来行骗和一些商家购买后以更高的价钱出售
                                        所以我们只限定每位用户最多可以购买2盒口罩。
                                        只需下单RM5.00来确定，余额将会在货物到达后付款。
                                        因为口罩有限所以货物到达后送货员将会核对真实姓名和电话号码才可以签收。
                                        信息核实不正确将会取消并不会退还之前预定的资金。
                                        对各位照成困扰实在抱歉。
                                        谢谢马来西亚同胞们之前对中国同胞的贡献，我们也将会尽我们的能力帮助大家。</p>
                                </div>                                
                            </div>
                        </div>   
                    </div>    
                </div>    
            </div>
        </div>
    </section>
    
    <footer id="sf-footer">
        <div class="main-footer">
            <div id="Footer_TD9F2A204001_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
                <div class="row" data-sf-element="Row">
                    <div id="Footer_T75121FDA199_Col00" class="sf_colsIn col-md-12 empty" data-sf-element="Column 1" data-placeholder-label="Column 1"></div>
                </div>    
            </div>    
            <div class="footer-logo">
                <a href="#" title="Home"> </a>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">    
                        <div class="sf-content-block content-block">
                            <div><a href="https://www.who.int/about/privacy/en/">Privacy Legal Notice</a></div>    
                        </div>
                    </div>
                    <div class="col-md-4">    
                        <div class="social-share--add-this follow-us--footer">
                            <div class="addthis_inline_follow_toolbox">
                                <div id="atftbx19" class="at-follow-tbx-element addthis-smartlayers addthis-animated at4-show">
                                    <p><span></span></p>
                                    <div class="addthis_toolbox addthis_default_style">
                                        <a class="at300b at-follow-btn" data-svc="rss" data-svc-id="http://www.who.int/about/licensing/rss/en/" title="Follow on RSS" href="http://www.who.int/about/licensing/rss/en/" target="_blank">
                                            <span class="at-icon-wrapper" style="background-color: rgb(239, 134, 71); line-height: 32px; height: 32px; width: 32px; border-radius: 46%;">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-rss-1" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;" class="at-icon at-icon-rss">
                                                    <title id="at-svg-rss-1">RSS</title>
                                                    <g><path d="M11.454 23.273a2.63 2.63 0 0 1-.796 1.932 2.63 2.63 0 0 1-1.93.795 2.63 2.63 0 0 1-1.933-.795A2.63 2.63 0 0 1 6 23.273c0-.758.265-1.402.795-1.932a2.63 2.63 0 0 1 1.932-.795c.757 0 1.4.266 1.93.796.532.53.797 1.175.797 1.933zm7.272 1.747a.86.86 0 0 1-.242.682.837.837 0 0 1-.667.298H15.9a.873.873 0 0 1-.61-.234.865.865 0 0 1-.285-.59c-.21-2.168-1.082-4.022-2.62-5.56-1.54-1.54-3.393-2.413-5.56-2.622a.865.865 0 0 1-.59-.284A.873.873 0 0 1 6 16.1V14.18c0-.275.1-.497.298-.668.16-.16.365-.24.61-.24h.072c1.515.122 2.964.503 4.346 1.142 1.382.64 2.61 1.5 3.68 2.578a12.56 12.56 0 0 1 2.576 3.68c.64 1.382 1.02 2.83 1.144 4.346zm7.27.028a.82.82 0 0 1-.254.668.84.84 0 0 1-.654.284h-2.03a.887.887 0 0 1-.633-.25.85.85 0 0 1-.277-.602 15.88 15.88 0 0 0-1.434-5.803c-.843-1.832-1.94-3.423-3.288-4.773-1.35-1.35-2.94-2.445-4.772-3.288a16.085 16.085 0 0 0-5.802-1.45.85.85 0 0 1-.603-.276A.87.87 0 0 1 6 8.94V6.91a.84.84 0 0 1 .284-.654A.85.85 0 0 1 6.91 6h.042c2.48.123 4.855.69 7.122 1.705a19.91 19.91 0 0 1 6.043 4.176 19.913 19.913 0 0 1 4.176 6.045 19.712 19.712 0 0 1 1.704 7.123z" fill-rule="evenodd"></path></g>
                                                </svg></span></a>
                                        <a class="at300b at-follow-btn" data-svc="youtube" data-svc-id="who" title="Follow on YouTube" href="http://www.youtube.com/user/who?sub_confirmation=1" target="_blank"><span class="at-icon-wrapper" style="background-color: rgb(205, 32, 31); line-height: 32px; height: 32px; width: 32px; border-radius: 46%;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-youtube-2" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;" class="at-icon at-icon-youtube"><title id="at-svg-youtube-2">YouTube</title><g><path d="M13.73 18.974V12.57l5.945 3.212-5.944 3.192zm12.18-9.778c-.837-.908-1.775-.912-2.205-.965C20.625 8 16.007 8 16.007 8c-.01 0-4.628 0-7.708.23-.43.054-1.368.058-2.205.966-.66.692-.875 2.263-.875 2.263S5 13.303 5 15.15v1.728c0 1.845.22 3.69.22 3.69s.215 1.57.875 2.262c.837.908 1.936.88 2.426.975 1.76.175 7.482.23 7.482.15 0 .08 4.624.072 7.703-.16.43-.052 1.368-.057 2.205-.965.66-.69.875-2.262.875-2.262s.22-1.845.22-3.69v-1.73c0-1.844-.22-3.69-.22-3.69s-.215-1.57-.875-2.262z" fill-rule="evenodd"></path></g>
                                        </svg></span></a>
                                        <a class="at300b at-follow-btn" data-svc="twitter" data-svc-id="who" title="Follow on Twitter" href="http://twitter.com/intent/follow?source=followbutton&amp;variant=1.0&amp;screen_name=who" target="_blank"><span class="at-icon-wrapper" style="background-color: rgb(29, 161, 242); line-height: 32px; height: 32px; width: 32px; border-radius: 46%;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-3" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;" class="at-icon at-icon-twitter"><title id="at-svg-twitter-3">Twitter</title><g><path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path></g>
                                        </svg></span></a>
                                        <a class="at300b at-follow-btn" data-svc="facebook" data-svc-id="WHO" title="Follow on Facebook" href="http://www.facebook.com/WHO" target="_blank"><span class="at-icon-wrapper" style="background-color: rgb(59, 89, 152); line-height: 32px; height: 32px; width: 32px; border-radius: 46%;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-4" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;" class="at-icon at-icon-facebook"><title id="at-svg-facebook-4">Facebook</title><g><path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path></g>
                                        </svg></span></a>
                                        <a class="at300b at-follow-btn" data-svc="instagram" data-svc-id="who" title="Follow on Instagram" href="http://instagram.com/who" target="_blank"><span class="at-icon-wrapper" style="background-color: rgb(224, 53, 102); line-height: 32px; height: 32px; width: 32px; border-radius: 46%;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-instagram-5" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;" class="at-icon at-icon-instagram"><title id="at-svg-instagram-5">Instagram</title><g><path d="M16 5c-2.987 0-3.362.013-4.535.066-1.17.054-1.97.24-2.67.512a5.392 5.392 0 0 0-1.95 1.268 5.392 5.392 0 0 0-1.267 1.95c-.272.698-.458 1.498-.512 2.67C5.013 12.637 5 13.012 5 16s.013 3.362.066 4.535c.054 1.17.24 1.97.512 2.67.28.724.657 1.337 1.268 1.95a5.392 5.392 0 0 0 1.95 1.268c.698.27 1.498.457 2.67.51 1.172.054 1.547.067 4.534.067s3.362-.013 4.535-.066c1.17-.054 1.97-.24 2.67-.51a5.392 5.392 0 0 0 1.95-1.27 5.392 5.392 0 0 0 1.268-1.95c.27-.698.457-1.498.51-2.67.054-1.172.067-1.547.067-4.534s-.013-3.362-.066-4.535c-.054-1.17-.24-1.97-.51-2.67a5.392 5.392 0 0 0-1.27-1.95 5.392 5.392 0 0 0-1.95-1.267c-.698-.272-1.498-.458-2.67-.512C19.363 5.013 18.988 5 16 5zm0 1.982c2.937 0 3.285.01 4.445.064 1.072.05 1.655.228 2.042.38.514.198.88.437 1.265.822.385.385.624.75.823 1.265.15.387.33.97.38 2.042.052 1.16.063 1.508.063 4.445 0 2.937-.01 3.285-.064 4.445-.05 1.072-.228 1.655-.38 2.042-.198.514-.437.88-.822 1.265-.385.385-.75.624-1.265.823-.387.15-.97.33-2.042.38-1.16.052-1.508.063-4.445.063-2.937 0-3.285-.01-4.445-.064-1.072-.05-1.655-.228-2.042-.38-.514-.198-.88-.437-1.265-.822a3.408 3.408 0 0 1-.823-1.265c-.15-.387-.33-.97-.38-2.042-.052-1.16-.063-1.508-.063-4.445 0-2.937.01-3.285.064-4.445.05-1.072.228-1.655.38-2.042.198-.514.437-.88.822-1.265.385-.385.75-.624 1.265-.823.387-.15.97-.33 2.042-.38 1.16-.052 1.508-.063 4.445-.063zm0 12.685a3.667 3.667 0 1 1 0-7.334 3.667 3.667 0 0 1 0 7.334zm0-9.316a5.65 5.65 0 1 0 0 11.3 5.65 5.65 0 0 0 0-11.3zm7.192-.222a1.32 1.32 0 1 1-2.64 0 1.32 1.32 0 0 1 2.64 0" fill-rule="evenodd"></path></g>
                                        </svg></span></a>
                                        <a class="at300b at-follow-btn" data-svc="linkedin" data-svc-id="world-health-organization" title="Follow on LinkedIn" href="http://www.linkedin.com/company/world-health-organization" target="_blank"><span class="at-icon-wrapper" style="background-color: rgb(0, 119, 181); line-height: 32px; height: 32px; width: 32px; border-radius: 46%;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-linkedin-6" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;" class="at-icon at-icon-linkedin"><title id="at-svg-linkedin-6">LinkedIn</title><g><path d="M26 25.963h-4.185v-6.55c0-1.56-.027-3.57-2.175-3.57-2.18 0-2.51 1.7-2.51 3.46v6.66h-4.182V12.495h4.012v1.84h.058c.558-1.058 1.924-2.174 3.96-2.174 4.24 0 5.022 2.79 5.022 6.417v7.386zM8.23 10.655a2.426 2.426 0 0 1 0-4.855 2.427 2.427 0 0 1 0 4.855zm-2.098 1.84h4.19v13.468h-4.19V12.495z" fill-rule="evenodd"></path></g>
                                        </svg></span></a>                                        
                                        <div class="atclear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-4 copyright"> <span>©</span> 2020    
                        <div class="sf-content-block content-block">
                            <div><a href="https://www.who.int/about/copyright/en/">WHO</a></div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            var numberSpinner = (function() {
                $('.number-spinner>.ns-btn>a').click(function() {
                    var btn = $(this),
                    oldValue = btn.closest('.number-spinner').find('input').val().trim(),
                    newVal = 0;

                    if (btn.attr('data-dir') === 'up') {
                        if(oldValue == 2) return false;
                        newVal = parseInt(oldValue) + 1;
                    } else {
                        if (oldValue > 1) {
                            newVal = parseInt(oldValue) - 1;
                        } else {
                            newVal = 1;
                        }
                    }
                    btn.closest('.number-spinner').find('input').val(newVal);
                });
                $('.number-spinner>input').keypress(function(evt) {
                    evt = (evt) ? evt : window.event;
                    var charCode = (evt.which) ? evt.which : evt.keyCode;
                    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                        return false;
                    }
                    return true;
                });
            })();
        });
    </script>
@endsection