@extends('layouts.home')

@section('content')

<header>
    <div id="sf-top-header" class="sf-top-header top-header">
        <div class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
            <div id="TopHeader_TD9F2A204012_Col00" class="sf_colsIn container empty" data-sf-element="Container" data-placeholder-label="Container"></div>

            <div class="row" data-sf-element="Row">
                <div class="sf_colsIn col-md-4" data-sf-element="Geo Navigation" data-placeholder-label="Geo Navigation">
                </div>
                <div class="sf_colsIn col-md-8" data-sf-element="Language Selector &amp; Search" data-placeholder-label="Language Selector &amp; Search">                    
                    <div class="language-selector language-selector-header">
                        <ul class="sf-lang-selector list-inline">
                            <li>
                                <a data-available-culture="zh" href="{{route('index_zh')}}" class="selected header" style="display: inline-block;">中文</a>
                            </li>
                            <li>
                                <a data-available-culture="en" href="{{route('index')}}" class=" header" style="display: inline-block;">English</a>
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
                    <div class="header-logo logos-container">
                        <a href="#" title="世卫组织网站主页" class="primary-logo">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 673.24 177.96" class="logo svg replaced-svg">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #0093d5;
                                        }
                                    </style>
                                </defs>
                                <title>世界卫生组织</title>
                            </svg>
                        </a>
                    </div>
                    <div class="navigation-search"> <span> <i class="fa fa-search fa-2x fa-loaded" aria-hidden="true"></i> </span> </div>
                    <div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed" style="outline: none;"><span class="slicknav_menutxt"></span><span class="slicknav_icon slicknav_no-text"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a>
                        <ul class="slicknav_nav slicknav_hidden" style="display: none;" aria-hidden="true" role="menu">
                            <li class="slicknav_addition sf-geo-navigation-selector slicknav_collapsed slicknav_parent">
                                <ul class="slicknav_hidden">
                                    <nav class="sf-geo-navigation">

                                        <ul id="sf-primary-geo-navigation" class="sf-primary-geo-navigation">

                                            <li class="active sf-no-logo">
                                                <a href="https://www.who.int/zh/" class="mobile nav-logo">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 673.24 177.96" class="svg replaced-svg">
                                                        <defs>
                                                            <style>
                                                                .cls-1 {
                                                                    fill: #0093d5;
                                                                }
                                                            </style>
                                                        </defs>
                                                        <title>世界卫生组织</title>
                                                    </svg>
                                                </a>
                                                <a href="https://www.who.int/zh/" class="desktop">全球网站</a>
                                            </li>

                                            <li class=" has-children">
                                                <a href="#">区域网站</a>

                                                <div class="sf-secondary-geo-navigation-container">
                                                    <div class="sf-secondary-geo-navigation-wrapper">
                                                        <div class="sf-geo-navigation-title">
                                                            <div class="nav-header">
                                                                <span class="nav-logo">
                                                                </span>

                                                                <span class="nav-title">世卫组织区域办事处网站</span>

                                                                <div class="nav-back-btn"><i class="fas fa-angle-left"></i></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                </ul>
                            </li>
                            <li class="home"><a href="/zh" target="_self" role="menuitem" tabindex="-1">世卫组织网站主页<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 673.24 177.96" class="logo svg replaced-svg"><defs><style>.cls-1{fill:#0093d5;}</style></defs><title>世界卫生组织</title><g id="Layer_2" data-name="Layer 2"><g id="CHINESE"><path class="cls-1" d="M271.61,98.53V75.26h14.6V68.57H271.38v-18h-6.7v18H252.39V50.87h-6.93v17.7H235.31V55h-6.93V68.57h-11v6.69h11v44.05h6.93v-5.15h46.82v-6.78H235.31V75.26h10.15V98.53Zm-6.93-23.27v16.6H252.39V75.26Z"></path><path class="cls-1" d="M312.58,92v.38c.1,6.83-1.37,11.92-4.38,15.12s-8.07,5.19-15,5.89l-.59.06,3.71,6.25.25,0c7.91-1.25,13.79-4.08,17.47-8.42s5.48-10.68,5.35-18.87V92Zm46.27,4.27c-10.48-1.72-18.07-5.75-22.62-12h10.93V52.4H299.31V84.34H310.6c-5.15,5.7-12.76,9.56-22.69,11.42l-.55.1,4,6.07.25-.06c13.49-3.09,22.37-9,26.45-17.53h10.64a23.12,23.12,0,0,0,5.32,7.45h-4.55v27.75h6.7V93.75c3.9,3.45,10.13,6.45,18.59,8.92l.26.07,4.38-6.35ZM326.6,58.79h13.86v6H326.6ZM319.91,78H306V71.22h13.94Zm0-13.12H306v-6h13.94ZM326.6,78V71.22h13.86V78Z"></path><path class="cls-1" d="M400.29,108.18V61.61H421c-.47,7-1,13.27-1.63,18.69-.8,7.13-1.38,8.7-1.66,9a2.19,2.19,0,0,1-1.69.77,18.89,18.89,0,0,1-4.72-.9l-5.15-1.38.13.59,1.3,6.8.23,0a40.38,40.38,0,0,0,8.79,1.39c3.85,0,6.53-1.65,7.95-4.9s2.45-15,3.25-36.19l0-.39H372.85v6.47h20.74v46.57H368.46v6.44H435.6v-6.44Z"></path><path class="cls-1" d="M479.66,108.41V92.54h22V86.07h-22V72.21h25.62V65.78H479.66V49.12H473V65.78H460.69a42.63,42.63,0,0,0,1.54-9.08v-.28l-6.63-2,0,.47A41.34,41.34,0,0,1,441.4,83.69L441,84l6.67,3.59.2-.21c5.4-5.74,8.91-10.85,10.49-15.21H473V86.07H452.75v6.47H473v15.87H445.08v6.44h65.2v-6.44Z"></path><path class="cls-1" d="M525.43,94.57l3.1,5.76.31-.11c1.86-.68,9.59-2.61,23-5.75l.29-.06V88.34l-16,3.49c5.53-5.25,10.86-13,15.85-23.18l.17-.35-6.25-2.79-.16.33a75.07,75.07,0,0,1-5.11,9.09l-7.25,1.52c2.81-5.11,6.49-12.83,10.94-23l.15-.34-6-2.76-.15.37c-4.75,12.11-9.15,21.46-13.09,27.82l-.11.18,3.22,5.87L533.71,83l2.56-.7a103.51,103.51,0,0,1-10.65,12.11ZM553.83,99l-.5.19c-2.78,1-12,4-27.32,8.69l-.44.13,3.26,6.06,25-8.39Zm30.93,9.85V53.2H555.9v55.67H547v6.47h46.74v-6.47Zm-6.7,0h-15.5V95.59h15.5Zm0-19.45h-15.5V77.28h15.5Zm0-18.26h-15.5V59.63h15.5Z"></path><path class="cls-1" d="M606.51,84.77a33.79,33.79,0,0,1,9.22-1.89c-4.71,6.25-8.8,10.91-12.14,13.76l-.23.2,3,5.73.28,0c5.69-1.09,13.78-3,24.05-5.72l.28-.08V90.29L614.2,93.91c5.65-4.77,11.38-13.23,17-25.27l.17-.34-6.14-2.79-.16.33c-2.46,5.13-4.2,8.48-5.19,10l-7.86,1a77.24,77.24,0,0,0,11.2-23.34l.09-.32-6.11-2.46-.12.4c-3.37,11.66-8,20.82-13.87,27.23l-.17.19,3.12,6.33Zm60-29.4H634V92h32.51Zm-6.69,30.16H640.66V61.84h19.16Zm-28.84,22v-6.72l-.5.16-28.77,9.45,3.67,6.19.28-.09c10.08-3.34,18.51-6.34,25.08-8.89Zm12-11.16c-4.52,7.57-10.08,13-16.54,16.1l-.49.23,5.06,4.89.25-.16c8.7-5.48,14.29-11.41,16.62-17.61l.1-.27L643.15,96Zm30.16,17a49.83,49.83,0,0,0-16.9-16.87l-.28-.17-.21.25L652,101l.33.23c7.66,5.28,13,11.07,15.89,17.2l.24.52,4.76-5.4Z"></path><path class="cls-1" d="M164,32.58c3.86,4.6,10.61,7.31,14.56,11.92-2.83-13.63-13.35-24.76-25.79-27.42C158.84,21.65,160.15,28,164,32.58ZM14.48,67.13c8.57-18.65,21.36-14.7,26.77-32.47-3,5.45-17,7.75-23.51,21.72,3.31-8.3,1.65-21,7.25-27.85C8.25,40.88,15.38,60.86,14.48,67.13ZM30,111.86c1.54,7.26-3,17.74,4.2,27.76C26.76,131.28,11,129.16,4.58,116.48c8,31,29,24.6,38.39,31.33C35.21,136.66,41.56,129.25,30,111.86Zm-2.41,19.45C23,114,31.18,108,24.93,91.4c-.65,9.36-6.89,13.92-2.68,31C14.82,107.94,3.33,102.54,0,92.6.23,119.78,22.07,123.81,27.59,131.31Zm33.54,29c-6.43-8.9-2-13.93-20.1-30.09,3.82,5.9-.12,13.32,12.06,24.86-11.92-7-28.36-4-36.29-13.41C30.42,167.74,54.35,157.1,61.13,160.34Zm87.42-5.23c12.18-11.54,8.24-19,12.06-24.86-18.06,16.16-13.67,21.19-20.1,30.09,6.78-3.24,30.71,7.4,44.32-18.64C176.91,151.09,160.47,148.08,148.55,155.11Zm18.89-15.49c7.17-10,2.66-20.5,4.2-27.76-11.56,17.39-5.21,24.8-13,36,9.44-6.73,30.36-.35,38.39-31.33C190.62,129.16,174.88,131.28,167.44,139.62Zm-28.86,21.95a89.2,89.2,0,0,0-19.75-3,47.75,47.75,0,0,0-18,3.06,47.78,47.78,0,0,0-18-3.06,89.2,89.2,0,0,0-19.75,3c-10.87,2.89-20.26,5.13-28.45,1,7.85,7,17,9.45,30.23,8,11-1.18,19.91-6.69,30.29-6.61h.41a55.47,55.47,0,0,0-17.12,13.31l5,.67s5.27-10.59,17.39-13.35c12.12,2.76,17.39,13.35,17.39,13.35l5-.67A55.63,55.63,0,0,0,106.1,164h.41c10.38-.08,19.27,5.43,30.28,6.61,13.23,1.43,22.39-1.06,30.24-8C158.84,166.7,149.45,164.46,138.58,161.57ZM25.67,72.63C21.19,81.23,14.23,83.2,15,101,11.22,85.18,2.24,79.32,2.35,69.23c-6.24,26.3,10.44,29.42,14.72,40.44C16.44,93.88,26.52,90.69,25.67,72.63Zm6.26-20.3c-1.56,2.18-2.65,3.11-6.81,6.54A33.77,33.77,0,0,0,13,78.64c.43-9.64-5.53-23.49-1.57-33.59-15.33,21.65.88,34.62,1.45,42.46C16.86,72.42,26,72.3,31.93,52.33Zm156.7,26.31a33.82,33.82,0,0,0-12.11-19.77c-4.16-3.43-5.25-4.36-6.81-6.54,5.93,20,15.07,20.09,19,35.18.57-7.84,16.78-20.81,1.44-42.46C194.15,55.15,188.2,69,188.63,78.64Zm13,14c-3.33,9.94-14.82,15.34-22.25,29.84,4.21-17.12-2-21.68-2.68-31-6.25,16.62,2,22.59-2.66,39.91C179.57,123.81,201.41,119.78,201.64,92.6ZM176,72.63c-.85,18.06,9.24,21.25,8.6,37,4.29-11,21-14.14,14.72-40.44.12,10.09-8.86,16-12.61,31.72C187.41,83.2,180.45,81.23,176,72.63Zm-138.34-40c3.87-4.6,5.18-10.93,11.24-15.5-12.44,2.66-23,13.79-25.79,27.42C27,39.89,33.76,37.18,37.62,32.58Zm122.77,2.08c5.41,17.77,18.2,13.82,26.76,32.47-.89-6.27,6.24-26.25-10.5-38.6,5.6,6.86,3.94,19.55,7.25,27.85C177.41,42.41,163.44,40.11,160.39,34.66ZM117,44.75A41.92,41.92,0,0,0,106.77,42c0,.75,0,1.52,0,2.28a40,40,0,0,1,9.4,2.58A6,6,0,0,0,117,44.75Zm-2.59-22,.68-.61-1.3-.55-3.42-.07-.89.62-2-.17,0,.49a34.75,34.75,0,0,1,3.52.37l1.67-.15ZM107.78,96.5c0-.58-.77-1.15-1.91-1.69h-.21c0,.47,0,2.79-.07,3.92C107,98.1,107.78,97.42,107.78,96.5ZM68.16,53a10.92,10.92,0,0,1,.29-1.25,5.79,5.79,0,0,1-1.4.14Zm32.73,100.6A69.76,69.76,0,0,0,108,14.47c0,.13,0,.27-.08.4-.14.68-.27,1.29-.37,1.83a67.35,67.35,0,0,1,40.63,19l-7.7,7.7.29-1.36-1-.44-1.38-.08.29-.89-.93-3.15-1.92-2.11-6-3.17-.52.55-1.09.32a18,18,0,0,1,3.18,10.11c0,.47,0,.92,0,1.37l3,3.75-1.4.32.93,1.4-2.63,2.62-1.06-2a17.92,17.92,0,0,1-2,3.93l.59.54-8.11,8.11c-.49-.47-1-.92-1.52-1.35-.78.36-1.57.69-2.38,1l.69.54-.41.41-1,.53-.35,1-.59-.59-1.71.57.47.75,1.18-.31.77.06.06-.42.59-.3.18-.35,1.06-.3.83,0c.16.14.33.29.48.44L115.81,68l-.24-.34-3.36.55-.75.75-.73.09,2.08-2-.74-.37-1.95,2.6.57-.06,0,1,.71.28.14,1-1.17-.23-1.22.22-3-1.51s-.16,7.92-.24,11.9c7,2.34,14.35,5.72,14.35,14.6a11,11,0,0,1-5,9.38h0l-.15.1h0l-.22.15c-2.82,1.86-6.44,2.86-9.58,3.84,0,0-.09,6.22-.09,6.22,5,2.48,11.05,6.09,10.49,16.42-.07,2.54-1.06,3.24-1.91,3.47h0a52.52,52.52,0,0,1-9,1.43c0,.8,0,1.56,0,2.27a55.87,55.87,0,0,0,34.78-15.36l8.1,8.1a67.37,67.37,0,0,1-93.3.19l8.1-8.1a55.83,55.83,0,0,0,34.29,15.15c0-.7,0-1.46,0-2.27A53.59,53.59,0,0,1,64.05,123l2.16-2.17,3,.34,1.58-1.7,4.14.14.61-1.43-.15-.61A42,42,0,0,0,96.48,126c0-.88,0-1.65,0-2.28A39.93,39.93,0,0,1,73.76,113.3l8.11-8.11a28.85,28.85,0,0,0,6.57,4.41,7.67,7.67,0,0,1,.82-2.13,26.22,26.22,0,0,1-5.79-3.89l8.13-8.12a14.86,14.86,0,0,0,4.34,2.41c0-.8,0-1.65,0-2.44a12.47,12.47,0,0,1-2.68-1.59l2.29-2.29c-.8-.24-1.62-.5-2.42-.78l-1.54,1.54a12.4,12.4,0,0,1-1.94-2.89,27.57,27.57,0,0,1-4-2.14A15.69,15.69,0,0,1,78.06,73.5,16.54,16.54,0,0,1,81.34,63l-8.08-8.08A39.91,39.91,0,0,1,94.9,44.28c0-.78,0-1.55-.05-2.28A42.18,42.18,0,0,0,71.66,53.34L70.29,52c-.31.55-.67,1.24-1.09,2.11l.86.87A42.13,42.13,0,0,0,58.6,83.17H47.13A53.62,53.62,0,0,1,62,46.83l3.64,3.65a4.61,4.61,0,0,0,.52,0,5.5,5.5,0,0,0,2.07-.6l-4.63-4.63a54.51,54.51,0,0,1,8-6.38,15.06,15.06,0,0,1,.57-1.68,26.93,26.93,0,0,1,1.75-2.35A56,56,0,0,0,62,43.63l-8.1-8.1A67.2,67.2,0,0,1,94,16.73c-.06-.28-.1-.5-.1-.5-.1-.53-.22-1.12-.33-1.74a69.77,69.77,0,0,0,7.28,139.15ZM116,105.45v-.06l0,0Zm33.78-68.12a67.26,67.26,0,0,1,18.65,45.84H156.92a55.67,55.67,0,0,0-6-24.48l.1-.2.79.42.19-.61L150,54.71l-2.43-3.36L144.69,49c-1-1.22-2-2.4-3.07-3.54ZM135.13,52l2.75.12.66.79-.33,1.17L142,56.48l.75-.09,4.9,5.6,2-.7a53.4,53.4,0,0,1,5,21.88H143.19a41.78,41.78,0,0,0-1.07-8.72l.53-.71.71-3.59-.54-3.86-1.38-4.44-3.2-4.68.78.41.39-.39-2.57-1.74-.17.57,2.57,3.67,1.45,3,1,3,.33,2,.53,3.38-1,.07s-1.11-2.07-1.45-2.92l.51-.77-1-1.4v-1.4l-.7-.88-.87.11c-.31-.58-.64-1.15-1-1.71l.62.31.16-.16-.33-.72.75-.42-.34-.42-1.11.42.41-1.74-.66-.38-.59,1.39a42.64,42.64,0,0,0-4.17-5.3Zm-2.3,26.87,2.06-1.12,2.1-.32.46-1,1.17-.7.45-1,.36-1.69c.17.59.32,1.2.46,1.81l-1.11,3.31,0,1.12,1.61-2.15a38.74,38.74,0,0,1,.57,6h-10l-.23-.87,1.17-.93.23-.56.51-.38,1.36-.14.14-.6ZM119.07,71l1-.24,0-.24-1-.69.35-2.16,1.23-1.23a27.16,27.16,0,0,1,2.13,2.77l-.43,1.33-1.12-.8-.85.23.42.79h.42l-.47,1.17-.32-.47Zm4.39,38.07-2.48-.7-.74.27-1.4-1.07-1.32-.47c.65-.47,1.28-1,1.89-1.48l2,1.44,1.56.82.77.77ZM122.2,64.85l8.11-8.11a40.43,40.43,0,0,1,5,6.74l-1,.28.05,1.81,3,1.92a39.2,39.2,0,0,1,1.9,5.12l-.53.78-1.1.7-.27,1.68-.75.42-.63.74-.63-.23-1.12,0,.65-.88.47-2.29.74-.46L134,70.92l-1.63.55L132,73l-1,1.11-1.07-.88-.38-.94.61-.38.34.62.5-.19-.22-1-.71,0-.05.42-.47.09L127,68.86l-.86-.65.33-.36.76-.26-.7-.28s-.89.2-1,.2l.51.64-1.28,0A27.71,27.71,0,0,0,122.2,64.85ZM126.33,108l-1.1-1.1.84-1.09,1.06-2.16-.41-.6.7-1.6-.08-1.44-.42-1.49-1-.35-.37.84-.6-.16a27.18,27.18,0,0,0,2.4-4.19l1-.44.58-.78.28.32.7-.84-.56-.7.51-.14.94.38,1.77,0,1.07-.56,2.8-.74-.53-.93-.18-1.13,1.5.66.56-.33-.28-1.16L135.7,89l-2-.42-1.54-3.15h8.77a39.92,39.92,0,0,1-11.07,26.08l-1.2-1.21.52-1.61-.94-3.55Zm1.55,22.37,1.08-2.32-.42-1,1.59-1.4v-.84l-1.36-.85,1.12-2.23,1.68-2.2-1.68-1.81h-1.26l-.78-1.27c.67-.56,1.34-1.13,2-1.73l8.11,8.11A54.38,54.38,0,0,1,127.88,130.38ZM138,119.67l.9-1-.85-4.44-.58-.23.36-.75-1.92-.6-.37,1.58-.19,2-.4.37-3.5-3.5a42.17,42.17,0,0,0,11.74-27.67h11.47a53.55,53.55,0,0,1-15.1,35.78Zm3.16,3.15a55.84,55.84,0,0,0,15.77-37.38h11.46a67.28,67.28,0,0,1-19.12,45.49Zm-69-11.11c-.83-.86-1.62-1.75-2.38-2.68l.35-2.9-1.21-2.78L68.62,99l-1.36-2.64.28-1.64L65.9,91.57l-1.43-.72.58-1.67-.59-1.32.59-1.51h1.57l.55-.91h2.68l.41.79L69.76,89l-.32.47,1,2.19-.66.36-.46-.58-.2.22.46,1.3.79,1.52.37,0L71,93l-.38-.5,0-.92-.12-1.9L71,86.34l-.54-.9h1.92a28.48,28.48,0,0,0,7.89,18.17ZM64.56,89.3,63.48,91H61.62l-.15-.11a40.74,40.74,0,0,1-.58-5.45h3.45l-.83,2.76Zm3.77-7.87.21-2.28,1.36-.79,2.43.43.37.44a27,27,0,0,0-.37,3.94H69.58ZM80,90l.57-.29L82,90.84l-.65.53,1.69,1.12L83,91.29l.9-1.49.94,1,1,1.38L84,92.56l.79,1.58L86,93.5,85.88,93l.9-.61.53-2.5a14.91,14.91,0,0,0,2.63,4l-8.1,8.1a26.21,26.21,0,0,1-7.1-15.22l1.66,1.77,1.56,0ZM71.66,56.54l8.1,8.11a28.91,28.91,0,0,0-4.3,6.19l-.56,0-1.14.35-.4,0-1.21,1.13L73.68,72l1.38-.35-.24.53-1.21.74H73l-1.78,1.36-1.72-.14-2.49,4.64.49.93-1.35,1.5-.21,2H60.86A39.92,39.92,0,0,1,71.66,56.54ZM61.19,117.69l2.57,1.51.53.36-1.86,1.86q-1.3-1.35-2.52-2.79ZM58.62,85.44c0,1.11.14,2.22.26,3.31l-1.4.32-.29,1.42-2.92,3.72.07,5.11-3,1H49.7a53.48,53.48,0,0,1-2.56-14.89ZM47.3,100.26l-.67-.13L46,99.42l-3.22-.28,1,1.35-3-.56.78-.72-.73-.72-2.15.94-.77,1.42.3,3.27L40.69,110l1.19,1.86.68.25-1.87-3.55-.41-1.81.42-.44-.26-1,1.13.15,1.73,2.62.43.17,0-1.91.7.41.15,1,1.82.48.76-.54.26.18,0,1.39.8,1,1,.22,2.12,3.59,1.29.36.4-1.68a56.32,56.32,0,0,0,7.9,10.2l-8.1,8.1A67.32,67.32,0,0,1,33.41,85.44H44.88A55.83,55.83,0,0,0,47.3,100.26Zm5-63.13,8.1,8.1A55.91,55.91,0,0,0,44.86,83.17H33.4A67.28,67.28,0,0,1,52.25,37.13Zm83-4.18-.69-1.12-1.5-.75-1.17.89,1.5.8L135.05,34ZM128.29,65.3l0,.88,2-.59.61-1.21-1.37-1.8.73-1.1,1.85,1.32.34-.27-.37-.26-.42-.8.76-.44-.74-1-1.74.88L129.36,62l-.35.95.77,1.29-.28.6Zm-82.9,51.42.15-.52-1-2.24-1.22-.45ZM92.27,73.64c0,1.92,1.17,3.28,3.3,4.45,0,0,0-.33,0-.86l-1.34-1.34.71-1.29.58-.16c0-2.24-.09-4.75-.1-5.11l-.1,0C93.34,70.43,92.27,71.75,92.27,73.64Z"></path><path class="cls-1" d="M105.07,123.32c3.6,1.82,6.92,4.34,8.31,9.11.61-7.9-3.82-11.32-8.21-13.63C105.17,118.81,105.07,123.33,105.07,123.32Z"></path><path class="cls-1" d="M129,43.2c0-7.17-5.2-15.13-17.95-17.94a30.69,30.69,0,0,0-3.89-.45c0,1.08-.08,3.56-.08,3.56,0,.78-.08,3.65-.1,4.27a18,18,0,0,1,2.45.34c7.41,1.77,10.06,6,10.06,10.22,0,6.81-5.82,9.38-13,11.32l-2.37.62c-2.17.54-4.4,1.06-6.61,1.65-.79.21-1.57.44-2.35.67h0c-7.93,2.42-14.75,6.24-14.75,16s7.78,13.34,15.37,15.68q-.07-4.19-.16-8.42c-3.35-1.57-5.71-3.64-5.71-7.12s2.15-5.46,5.44-7c.73-.33,1.51-.63,2.34-.91,1.89-.64,4-1.19,6.25-1.73l2.37-.57h0C117,60.89,129,57.54,129,43.2Z"></path><path class="cls-1" d="M90.56,111.67c0,3.92,2.9,6,5.79,7.67,0-.66-.12-6.73-.12-6.83.06-1.21,1.23-1.94,2.18-2.39a47.05,47.05,0,0,1,4.59-1.75c.86-.3,1.59-.59,2.41-.83h0c5.8-1.75,12.51-4,12.51-11s-5.75-10-12-12.13c0,2.25-.11,5.54-.16,7.81,2.66,1,4.42,2.31,4.42,4.32,0,2.53-2.7,4-4.61,4.72-.8.31-2,.71-2.35.82-1.54.48-3.2,1-4.75,1.6a22.79,22.79,0,0,0-2.35,1C93.36,106.06,90.55,108.09,90.56,111.67Z"></path><path class="cls-1" d="M94.49,25.93a46.17,46.17,0,0,0-7,2.85c-2.5.83-6,1-9.67,4.94A49.49,49.49,0,0,0,74.49,38c-1.1,1.58-1.15,4.12-2,5.49-1.16,2-.88,3.11-.88,3.11l0,.06a5.31,5.31,0,0,1-1.34,2.48A5.08,5.08,0,0,1,65.61,51c1.66.83,4-.33,4-.33a30.61,30.61,0,0,0-.88,3.3c1.86-4.21,3.57-5.75,4.1-6.18.8.18,2.46.11,5.54-1.66,3.48-2,8.71-5.25,10.19-7.31a13.59,13.59,0,0,1,6.16-4.65C94.61,31,94.55,28.26,94.49,25.93ZM79.81,39.08,78,39.47,80.16,36l2.52.08Z"></path><path class="cls-1" d="M101.68,111.18c-.34.12-1.21.49-1.76.68s-1.32.51-1.32.71.56,30.41.56,31.08c0,6.25,3.18,6.29,3.18,0,0-.45.64-32.9.64-32.9S102.22,111,101.68,111.18Z"></path><path class="cls-1" d="M98.38,101.16c1-.34,2-.64,2.9-.93l1.93-.6c0-1.91.58-28.33.68-33.13a60.72,60.72,0,0,0-6.15,1.77C97.81,71.87,98.33,98.28,98.38,101.16Z"></path><path class="cls-1" d="M101,0c-8.94,0-5.14,13.26-4.43,17.58,0,.21.72,30,.86,36.79,1.36-.36,2.71-.69,4-1l2.7-.68c.13-6.57.79-35,.81-35.15C105.53,12.91,110.21,0,101,0Z"></path></g></g></svg></a></li>
                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="/zh/redirect-pages/mega-menu/health-topics" target="_self" tabindex="-1">健康主题</a><span class="slicknav_arrow"></span></a>
                                
                            </li>
                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="/zh/redirect-pages/mega-menu/countries" target="_self" tabindex="-1">国家</a><span class="slicknav_arrow"></span></a>
                                <ul role="menu" class="slicknav_hidden" aria-hidden="true" style="display: none;">
                                    <li class="slicknav_collapsed slicknav_parent horizontal-menu-list">
                                        <a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;">
                                            <a href="https://www.who.int/countries/zh/" tabindex="-1"></a><a href="https://www.who.int/countries/zh/" tabindex="-1">国家 »</a><span class="slicknav_arrow"></span></a>
                                        <ul class="horizontal-menu slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                            <li>
                                                <a href="https://www.who.int/countries/zh/" role="menuitem" tabindex="-1"></a><a href="https://www.who.int/countries/zh/" role="menuitem" tabindex="-1">国家 »</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#A" role="menuitem" tabindex="-1">A</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#B" role="menuitem" tabindex="-1">B</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#C" role="menuitem" tabindex="-1">C</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#D" role="menuitem" tabindex="-1">D</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#E" role="menuitem" tabindex="-1">E</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#F" role="menuitem" tabindex="-1">F</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#G" role="menuitem" tabindex="-1">G</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#H" role="menuitem" tabindex="-1">H</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#I" role="menuitem" tabindex="-1">I</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#J" role="menuitem" tabindex="-1">J</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#K" role="menuitem" tabindex="-1">K</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#L" role="menuitem" tabindex="-1">L</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#M" role="menuitem" tabindex="-1">M</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#N" role="menuitem" tabindex="-1">N</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#O" role="menuitem" tabindex="-1">O</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#P" role="menuitem" tabindex="-1">P</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#Q" role="menuitem" tabindex="-1">Q</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#R" role="menuitem" tabindex="-1">R</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#S" role="menuitem" tabindex="-1">S</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#T" role="menuitem" tabindex="-1">T</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#U" role="menuitem" tabindex="-1">U</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#V" role="menuitem" tabindex="-1">V</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#W" role="menuitem" tabindex="-1">W</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#X" role="menuitem" tabindex="-1">X</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#Y" role="menuitem" tabindex="-1">Y</a></li>
                                            <li><a href="https://www.who.int/countries/zh/#Z" role="menuitem" tabindex="-1">Z</a></li>
                                        </ul>
                                    </li>
                                    <li class="slicknav_collapsed slicknav_parent">
                                        <a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;">
                                            <a href="/zh/redirect-pages/mega-menu/countries/who-in-countries" target="_self" tabindex="-1">世卫组织与国家的合作 »</a>

                                            <span class="slicknav_arrow"></span></a>
                                        <ul class="sub-level slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/countries/who-in-countries/overview" target="_self" role="menuitem" tabindex="-1">概况</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/countries/who-in-countries/cooperation-strategies" target="_self" role="menuitem" tabindex="-1">合作战略</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/countries/who-in-countries/开展的工作" target="_self" role="menuitem" tabindex="-1">开展的工作</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/countries/who-in-countries/特写故事" target="_self" role="menuitem" tabindex="-1">特写故事</a>

                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slicknav_collapsed slicknav_parent">
                                        <a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;">
                                            <a href="/zh/redirect-pages/mega-menu/countries/regions" target="_self" tabindex="-1">区域办事处 »</a>

                                            <span class="slicknav_arrow"></span></a>
                                        <ul class="sub-level slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/countries/regions/africa" target="_self" role="menuitem" tabindex="-1">非洲</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/countries/regions/americas" target="_self" role="menuitem" tabindex="-1">美洲</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/countries/regions/south-east-asia" target="_self" role="menuitem" tabindex="-1">东南亚</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/countries/regions/europe" target="_self" role="menuitem" tabindex="-1">欧洲</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/countries/regions/eastern-mediterranean" target="_self" role="menuitem" tabindex="-1">东地中海</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/countries/regions/western-pacific" target="_self" role="menuitem" tabindex="-1">西太平洋</a>

                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="/zh/news-room" target="_self" tabindex="-1">媒体中心</a><span class="slicknav_arrow"></span></a>
                                <ul role="menu" class="slicknav_hidden" aria-hidden="true" style="display: none;">
                                    <li class="slicknav_collapsed slicknav_parent">
                                        <a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;">
                                            <a href="/zh/news-room" target="_self" tabindex="-1">媒体中心</a>

                                            <span class="slicknav_arrow"></span></a>
                                        <ul class="sub-level slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                            <li class="">
                                                <a href="/zh/news-room/releases" target="_self" role="menuitem" tabindex="-1">新闻稿</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/news-room/statements" target="_self" role="menuitem" tabindex="-1">声明</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/news-room/notes" target="_self" role="menuitem" tabindex="-1">简讯</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/news-room/commentaries" target="_self" role="menuitem" tabindex="-1">评论</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/news-room/feature-stories" target="_self" role="menuitem" tabindex="-1">特写故事</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/news-room/questions-answers" target="_self" role="menuitem" tabindex="-1">在线问答</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/news-room/events" target="_self" role="menuitem" tabindex="-1">要事</a>

                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slicknav_txtnode">世卫组织新闻</li>
                                </ul>
                            </li>
                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="javascript:;" target="_self" tabindex="-1">突发卫生事件</a><span class="slicknav_arrow"></span></a>
                                <ul role="menu" class="slicknav_hidden" aria-hidden="true" style="display: none;">
                                    <li class="slicknav_collapsed slicknav_parent">
                                        <a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;">
                                            <a href="javascript:;" target="_self" tabindex="-1">突发卫生事件 »</a>

                                            <span class="slicknav_arrow"></span></a>
                                        <ul class="sub-level slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/emergencies/emergencies/世卫组织的作用" target="_self" role="menuitem" tabindex="-1">世卫组织的作用</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/emergencies/emergencies/人道主义卫生行动" target="_self" role="menuitem" tabindex="-1">人道主义卫生行动</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/emergencies/emergencies/突发事件防范和应对" target="_self" role="menuitem" tabindex="-1">突发事件防范和应对</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/emergencies/emergencies/出版物" target="_self" role="menuitem" tabindex="-1">出版物</a>

                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slicknav_collapsed slicknav_parent">
                                        <a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;">
                                            <a href="/zh/redirect-pages/mega-menu/emergencies/news" target="_self" tabindex="-1">新闻和特写</a>

                                            <span class="slicknav_arrow"></span></a>
                                        <ul class="sub-level slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/emergencies/news/有关紧急情况的特写" target="_self" role="menuitem" tabindex="-1">有关紧急情况的特写</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/emergencies/news/后备合作伙伴在突发事件应对中的重要作用" target="_self" role="menuitem" tabindex="-1">后备合作伙伴在突发事件应对中的重要作用</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/emergencies/news/捐助方对世卫组织突发事件应急基金承诺捐款" target="_self" role="menuitem" tabindex="-1">捐助方对世卫组织突发事件应急基金承诺捐款</a>

                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="slicknav_collapsed slicknav_parent"><a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;"><a href="/zh/redirect-pages/mega-menu/about-us" target="_self" tabindex="-1">关于世卫组织</a><span class="slicknav_arrow"></span></a>
                                <ul role="menu" class="slicknav_hidden" aria-hidden="true" style="display: none;">
                                    <li class="slicknav_collapsed slicknav_parent">
                                        <a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;">
                                            <a href="/zh/redirect-pages/mega-menu/about-us/about" target="_self" tabindex="-1">关于世卫组织  »</a>

                                            <span class="slicknav_arrow"></span></a>
                                        <ul class="sub-level slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/about-us/about/who-we-are" target="_self" role="menuitem" tabindex="-1">我们是谁</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/about-us/about/what-we-do" target="_self" role="menuitem" tabindex="-1">我们开展何种工作</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/about-us/about/where-we-work" target="_self" role="menuitem" tabindex="-1">我们在何处工作</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/about-us/about/who-we-work-with" target="_blank" role="menuitem" tabindex="-1">我们与联合国的合作</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/about-us/about/director-general" target="_self" role="menuitem" tabindex="-1">世卫组织总干事</a>

                                            </li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="/zh/redirect-pages/mega-menu/about-us/contact-us" target="_self" role="menuitem" tabindex="-1">联系我们 »</a></li>
                                    <li class="slicknav_collapsed slicknav_parent">
                                        <a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;">
                                            <a href="/zh/redirect-pages/mega-menu/about-us/governance" target="_blank" tabindex="-1">理事机构 »</a>

                                            <span class="slicknav_arrow"></span></a>
                                        <ul class="sub-level slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/about-us/governance/world-health-assembly" target="_self" role="menuitem" tabindex="-1">世界卫生大会</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/about-us/governance/executive-board" target="_self" role="menuitem" tabindex="-1">执行委员会</a>

                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slicknav_collapsed slicknav_parent">
                                        <a href="#" role="menuitem" aria-haspopup="true" tabindex="-1" class="slicknav_item slicknav_row" style="outline: none;">
                                            <a href="/zh/redirect-pages/mega-menu/about-us/planning-accountability" target="_self" tabindex="-1">规划、资金与问责 »</a>

                                            <span class="slicknav_arrow"></span></a>
                                        <ul class="sub-level slicknav_hidden" role="menu" aria-hidden="true" style="display: none;">
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/about-us/planning-accountability/general-programme-of-work" target="_blank" role="menuitem" tabindex="-1">工作总规划</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/about-us/planning-accountability/budget" target="_blank" role="menuitem" tabindex="-1">预算</a>

                                            </li>
                                            <li class="">
                                                <a href="/zh/redirect-pages/mega-menu/about-us/planning-accountability/funding" target="_self" role="menuitem" tabindex="-1">筹资</a>

                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- logo:off -->
    <div id="navigationToScrape" class="navigation">
        <div class="row navWrapper" data-sf-element="Row">
            <div class="nav-container">
                <!--Main desktop navigation:on-->
                <ul class="nav">
                    <li class="home"><a href="javascript:;" target="_self">世卫组织网站主页<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 673.24 177.96" class="logo svg replaced-svg"><defs><style>.cls-1{fill:#0093d5;}</style></defs><title>世界卫生组织</title><g id="Layer_2" data-name="Layer 2"><g id="CHINESE"><path class="cls-1" d="M271.61,98.53V75.26h14.6V68.57H271.38v-18h-6.7v18H252.39V50.87h-6.93v17.7H235.31V55h-6.93V68.57h-11v6.69h11v44.05h6.93v-5.15h46.82v-6.78H235.31V75.26h10.15V98.53Zm-6.93-23.27v16.6H252.39V75.26Z"></path><path class="cls-1" d="M312.58,92v.38c.1,6.83-1.37,11.92-4.38,15.12s-8.07,5.19-15,5.89l-.59.06,3.71,6.25.25,0c7.91-1.25,13.79-4.08,17.47-8.42s5.48-10.68,5.35-18.87V92Zm46.27,4.27c-10.48-1.72-18.07-5.75-22.62-12h10.93V52.4H299.31V84.34H310.6c-5.15,5.7-12.76,9.56-22.69,11.42l-.55.1,4,6.07.25-.06c13.49-3.09,22.37-9,26.45-17.53h10.64a23.12,23.12,0,0,0,5.32,7.45h-4.55v27.75h6.7V93.75c3.9,3.45,10.13,6.45,18.59,8.92l.26.07,4.38-6.35ZM326.6,58.79h13.86v6H326.6ZM319.91,78H306V71.22h13.94Zm0-13.12H306v-6h13.94ZM326.6,78V71.22h13.86V78Z"></path><path class="cls-1" d="M400.29,108.18V61.61H421c-.47,7-1,13.27-1.63,18.69-.8,7.13-1.38,8.7-1.66,9a2.19,2.19,0,0,1-1.69.77,18.89,18.89,0,0,1-4.72-.9l-5.15-1.38.13.59,1.3,6.8.23,0a40.38,40.38,0,0,0,8.79,1.39c3.85,0,6.53-1.65,7.95-4.9s2.45-15,3.25-36.19l0-.39H372.85v6.47h20.74v46.57H368.46v6.44H435.6v-6.44Z"></path><path class="cls-1" d="M479.66,108.41V92.54h22V86.07h-22V72.21h25.62V65.78H479.66V49.12H473V65.78H460.69a42.63,42.63,0,0,0,1.54-9.08v-.28l-6.63-2,0,.47A41.34,41.34,0,0,1,441.4,83.69L441,84l6.67,3.59.2-.21c5.4-5.74,8.91-10.85,10.49-15.21H473V86.07H452.75v6.47H473v15.87H445.08v6.44h65.2v-6.44Z"></path><path class="cls-1" d="M525.43,94.57l3.1,5.76.31-.11c1.86-.68,9.59-2.61,23-5.75l.29-.06V88.34l-16,3.49c5.53-5.25,10.86-13,15.85-23.18l.17-.35-6.25-2.79-.16.33a75.07,75.07,0,0,1-5.11,9.09l-7.25,1.52c2.81-5.11,6.49-12.83,10.94-23l.15-.34-6-2.76-.15.37c-4.75,12.11-9.15,21.46-13.09,27.82l-.11.18,3.22,5.87L533.71,83l2.56-.7a103.51,103.51,0,0,1-10.65,12.11ZM553.83,99l-.5.19c-2.78,1-12,4-27.32,8.69l-.44.13,3.26,6.06,25-8.39Zm30.93,9.85V53.2H555.9v55.67H547v6.47h46.74v-6.47Zm-6.7,0h-15.5V95.59h15.5Zm0-19.45h-15.5V77.28h15.5Zm0-18.26h-15.5V59.63h15.5Z"></path><path class="cls-1" d="M606.51,84.77a33.79,33.79,0,0,1,9.22-1.89c-4.71,6.25-8.8,10.91-12.14,13.76l-.23.2,3,5.73.28,0c5.69-1.09,13.78-3,24.05-5.72l.28-.08V90.29L614.2,93.91c5.65-4.77,11.38-13.23,17-25.27l.17-.34-6.14-2.79-.16.33c-2.46,5.13-4.2,8.48-5.19,10l-7.86,1a77.24,77.24,0,0,0,11.2-23.34l.09-.32-6.11-2.46-.12.4c-3.37,11.66-8,20.82-13.87,27.23l-.17.19,3.12,6.33Zm60-29.4H634V92h32.51Zm-6.69,30.16H640.66V61.84h19.16Zm-28.84,22v-6.72l-.5.16-28.77,9.45,3.67,6.19.28-.09c10.08-3.34,18.51-6.34,25.08-8.89Zm12-11.16c-4.52,7.57-10.08,13-16.54,16.1l-.49.23,5.06,4.89.25-.16c8.7-5.48,14.29-11.41,16.62-17.61l.1-.27L643.15,96Zm30.16,17a49.83,49.83,0,0,0-16.9-16.87l-.28-.17-.21.25L652,101l.33.23c7.66,5.28,13,11.07,15.89,17.2l.24.52,4.76-5.4Z"></path><path class="cls-1" d="M164,32.58c3.86,4.6,10.61,7.31,14.56,11.92-2.83-13.63-13.35-24.76-25.79-27.42C158.84,21.65,160.15,28,164,32.58ZM14.48,67.13c8.57-18.65,21.36-14.7,26.77-32.47-3,5.45-17,7.75-23.51,21.72,3.31-8.3,1.65-21,7.25-27.85C8.25,40.88,15.38,60.86,14.48,67.13ZM30,111.86c1.54,7.26-3,17.74,4.2,27.76C26.76,131.28,11,129.16,4.58,116.48c8,31,29,24.6,38.39,31.33C35.21,136.66,41.56,129.25,30,111.86Zm-2.41,19.45C23,114,31.18,108,24.93,91.4c-.65,9.36-6.89,13.92-2.68,31C14.82,107.94,3.33,102.54,0,92.6.23,119.78,22.07,123.81,27.59,131.31Zm33.54,29c-6.43-8.9-2-13.93-20.1-30.09,3.82,5.9-.12,13.32,12.06,24.86-11.92-7-28.36-4-36.29-13.41C30.42,167.74,54.35,157.1,61.13,160.34Zm87.42-5.23c12.18-11.54,8.24-19,12.06-24.86-18.06,16.16-13.67,21.19-20.1,30.09,6.78-3.24,30.71,7.4,44.32-18.64C176.91,151.09,160.47,148.08,148.55,155.11Zm18.89-15.49c7.17-10,2.66-20.5,4.2-27.76-11.56,17.39-5.21,24.8-13,36,9.44-6.73,30.36-.35,38.39-31.33C190.62,129.16,174.88,131.28,167.44,139.62Zm-28.86,21.95a89.2,89.2,0,0,0-19.75-3,47.75,47.75,0,0,0-18,3.06,47.78,47.78,0,0,0-18-3.06,89.2,89.2,0,0,0-19.75,3c-10.87,2.89-20.26,5.13-28.45,1,7.85,7,17,9.45,30.23,8,11-1.18,19.91-6.69,30.29-6.61h.41a55.47,55.47,0,0,0-17.12,13.31l5,.67s5.27-10.59,17.39-13.35c12.12,2.76,17.39,13.35,17.39,13.35l5-.67A55.63,55.63,0,0,0,106.1,164h.41c10.38-.08,19.27,5.43,30.28,6.61,13.23,1.43,22.39-1.06,30.24-8C158.84,166.7,149.45,164.46,138.58,161.57ZM25.67,72.63C21.19,81.23,14.23,83.2,15,101,11.22,85.18,2.24,79.32,2.35,69.23c-6.24,26.3,10.44,29.42,14.72,40.44C16.44,93.88,26.52,90.69,25.67,72.63Zm6.26-20.3c-1.56,2.18-2.65,3.11-6.81,6.54A33.77,33.77,0,0,0,13,78.64c.43-9.64-5.53-23.49-1.57-33.59-15.33,21.65.88,34.62,1.45,42.46C16.86,72.42,26,72.3,31.93,52.33Zm156.7,26.31a33.82,33.82,0,0,0-12.11-19.77c-4.16-3.43-5.25-4.36-6.81-6.54,5.93,20,15.07,20.09,19,35.18.57-7.84,16.78-20.81,1.44-42.46C194.15,55.15,188.2,69,188.63,78.64Zm13,14c-3.33,9.94-14.82,15.34-22.25,29.84,4.21-17.12-2-21.68-2.68-31-6.25,16.62,2,22.59-2.66,39.91C179.57,123.81,201.41,119.78,201.64,92.6ZM176,72.63c-.85,18.06,9.24,21.25,8.6,37,4.29-11,21-14.14,14.72-40.44.12,10.09-8.86,16-12.61,31.72C187.41,83.2,180.45,81.23,176,72.63Zm-138.34-40c3.87-4.6,5.18-10.93,11.24-15.5-12.44,2.66-23,13.79-25.79,27.42C27,39.89,33.76,37.18,37.62,32.58Zm122.77,2.08c5.41,17.77,18.2,13.82,26.76,32.47-.89-6.27,6.24-26.25-10.5-38.6,5.6,6.86,3.94,19.55,7.25,27.85C177.41,42.41,163.44,40.11,160.39,34.66ZM117,44.75A41.92,41.92,0,0,0,106.77,42c0,.75,0,1.52,0,2.28a40,40,0,0,1,9.4,2.58A6,6,0,0,0,117,44.75Zm-2.59-22,.68-.61-1.3-.55-3.42-.07-.89.62-2-.17,0,.49a34.75,34.75,0,0,1,3.52.37l1.67-.15ZM107.78,96.5c0-.58-.77-1.15-1.91-1.69h-.21c0,.47,0,2.79-.07,3.92C107,98.1,107.78,97.42,107.78,96.5ZM68.16,53a10.92,10.92,0,0,1,.29-1.25,5.79,5.79,0,0,1-1.4.14Zm32.73,100.6A69.76,69.76,0,0,0,108,14.47c0,.13,0,.27-.08.4-.14.68-.27,1.29-.37,1.83a67.35,67.35,0,0,1,40.63,19l-7.7,7.7.29-1.36-1-.44-1.38-.08.29-.89-.93-3.15-1.92-2.11-6-3.17-.52.55-1.09.32a18,18,0,0,1,3.18,10.11c0,.47,0,.92,0,1.37l3,3.75-1.4.32.93,1.4-2.63,2.62-1.06-2a17.92,17.92,0,0,1-2,3.93l.59.54-8.11,8.11c-.49-.47-1-.92-1.52-1.35-.78.36-1.57.69-2.38,1l.69.54-.41.41-1,.53-.35,1-.59-.59-1.71.57.47.75,1.18-.31.77.06.06-.42.59-.3.18-.35,1.06-.3.83,0c.16.14.33.29.48.44L115.81,68l-.24-.34-3.36.55-.75.75-.73.09,2.08-2-.74-.37-1.95,2.6.57-.06,0,1,.71.28.14,1-1.17-.23-1.22.22-3-1.51s-.16,7.92-.24,11.9c7,2.34,14.35,5.72,14.35,14.6a11,11,0,0,1-5,9.38h0l-.15.1h0l-.22.15c-2.82,1.86-6.44,2.86-9.58,3.84,0,0-.09,6.22-.09,6.22,5,2.48,11.05,6.09,10.49,16.42-.07,2.54-1.06,3.24-1.91,3.47h0a52.52,52.52,0,0,1-9,1.43c0,.8,0,1.56,0,2.27a55.87,55.87,0,0,0,34.78-15.36l8.1,8.1a67.37,67.37,0,0,1-93.3.19l8.1-8.1a55.83,55.83,0,0,0,34.29,15.15c0-.7,0-1.46,0-2.27A53.59,53.59,0,0,1,64.05,123l2.16-2.17,3,.34,1.58-1.7,4.14.14.61-1.43-.15-.61A42,42,0,0,0,96.48,126c0-.88,0-1.65,0-2.28A39.93,39.93,0,0,1,73.76,113.3l8.11-8.11a28.85,28.85,0,0,0,6.57,4.41,7.67,7.67,0,0,1,.82-2.13,26.22,26.22,0,0,1-5.79-3.89l8.13-8.12a14.86,14.86,0,0,0,4.34,2.41c0-.8,0-1.65,0-2.44a12.47,12.47,0,0,1-2.68-1.59l2.29-2.29c-.8-.24-1.62-.5-2.42-.78l-1.54,1.54a12.4,12.4,0,0,1-1.94-2.89,27.57,27.57,0,0,1-4-2.14A15.69,15.69,0,0,1,78.06,73.5,16.54,16.54,0,0,1,81.34,63l-8.08-8.08A39.91,39.91,0,0,1,94.9,44.28c0-.78,0-1.55-.05-2.28A42.18,42.18,0,0,0,71.66,53.34L70.29,52c-.31.55-.67,1.24-1.09,2.11l.86.87A42.13,42.13,0,0,0,58.6,83.17H47.13A53.62,53.62,0,0,1,62,46.83l3.64,3.65a4.61,4.61,0,0,0,.52,0,5.5,5.5,0,0,0,2.07-.6l-4.63-4.63a54.51,54.51,0,0,1,8-6.38,15.06,15.06,0,0,1,.57-1.68,26.93,26.93,0,0,1,1.75-2.35A56,56,0,0,0,62,43.63l-8.1-8.1A67.2,67.2,0,0,1,94,16.73c-.06-.28-.1-.5-.1-.5-.1-.53-.22-1.12-.33-1.74a69.77,69.77,0,0,0,7.28,139.15ZM116,105.45v-.06l0,0Zm33.78-68.12a67.26,67.26,0,0,1,18.65,45.84H156.92a55.67,55.67,0,0,0-6-24.48l.1-.2.79.42.19-.61L150,54.71l-2.43-3.36L144.69,49c-1-1.22-2-2.4-3.07-3.54ZM135.13,52l2.75.12.66.79-.33,1.17L142,56.48l.75-.09,4.9,5.6,2-.7a53.4,53.4,0,0,1,5,21.88H143.19a41.78,41.78,0,0,0-1.07-8.72l.53-.71.71-3.59-.54-3.86-1.38-4.44-3.2-4.68.78.41.39-.39-2.57-1.74-.17.57,2.57,3.67,1.45,3,1,3,.33,2,.53,3.38-1,.07s-1.11-2.07-1.45-2.92l.51-.77-1-1.4v-1.4l-.7-.88-.87.11c-.31-.58-.64-1.15-1-1.71l.62.31.16-.16-.33-.72.75-.42-.34-.42-1.11.42.41-1.74-.66-.38-.59,1.39a42.64,42.64,0,0,0-4.17-5.3Zm-2.3,26.87,2.06-1.12,2.1-.32.46-1,1.17-.7.45-1,.36-1.69c.17.59.32,1.2.46,1.81l-1.11,3.31,0,1.12,1.61-2.15a38.74,38.74,0,0,1,.57,6h-10l-.23-.87,1.17-.93.23-.56.51-.38,1.36-.14.14-.6ZM119.07,71l1-.24,0-.24-1-.69.35-2.16,1.23-1.23a27.16,27.16,0,0,1,2.13,2.77l-.43,1.33-1.12-.8-.85.23.42.79h.42l-.47,1.17-.32-.47Zm4.39,38.07-2.48-.7-.74.27-1.4-1.07-1.32-.47c.65-.47,1.28-1,1.89-1.48l2,1.44,1.56.82.77.77ZM122.2,64.85l8.11-8.11a40.43,40.43,0,0,1,5,6.74l-1,.28.05,1.81,3,1.92a39.2,39.2,0,0,1,1.9,5.12l-.53.78-1.1.7-.27,1.68-.75.42-.63.74-.63-.23-1.12,0,.65-.88.47-2.29.74-.46L134,70.92l-1.63.55L132,73l-1,1.11-1.07-.88-.38-.94.61-.38.34.62.5-.19-.22-1-.71,0-.05.42-.47.09L127,68.86l-.86-.65.33-.36.76-.26-.7-.28s-.89.2-1,.2l.51.64-1.28,0A27.71,27.71,0,0,0,122.2,64.85ZM126.33,108l-1.1-1.1.84-1.09,1.06-2.16-.41-.6.7-1.6-.08-1.44-.42-1.49-1-.35-.37.84-.6-.16a27.18,27.18,0,0,0,2.4-4.19l1-.44.58-.78.28.32.7-.84-.56-.7.51-.14.94.38,1.77,0,1.07-.56,2.8-.74-.53-.93-.18-1.13,1.5.66.56-.33-.28-1.16L135.7,89l-2-.42-1.54-3.15h8.77a39.92,39.92,0,0,1-11.07,26.08l-1.2-1.21.52-1.61-.94-3.55Zm1.55,22.37,1.08-2.32-.42-1,1.59-1.4v-.84l-1.36-.85,1.12-2.23,1.68-2.2-1.68-1.81h-1.26l-.78-1.27c.67-.56,1.34-1.13,2-1.73l8.11,8.11A54.38,54.38,0,0,1,127.88,130.38ZM138,119.67l.9-1-.85-4.44-.58-.23.36-.75-1.92-.6-.37,1.58-.19,2-.4.37-3.5-3.5a42.17,42.17,0,0,0,11.74-27.67h11.47a53.55,53.55,0,0,1-15.1,35.78Zm3.16,3.15a55.84,55.84,0,0,0,15.77-37.38h11.46a67.28,67.28,0,0,1-19.12,45.49Zm-69-11.11c-.83-.86-1.62-1.75-2.38-2.68l.35-2.9-1.21-2.78L68.62,99l-1.36-2.64.28-1.64L65.9,91.57l-1.43-.72.58-1.67-.59-1.32.59-1.51h1.57l.55-.91h2.68l.41.79L69.76,89l-.32.47,1,2.19-.66.36-.46-.58-.2.22.46,1.3.79,1.52.37,0L71,93l-.38-.5,0-.92-.12-1.9L71,86.34l-.54-.9h1.92a28.48,28.48,0,0,0,7.89,18.17ZM64.56,89.3,63.48,91H61.62l-.15-.11a40.74,40.74,0,0,1-.58-5.45h3.45l-.83,2.76Zm3.77-7.87.21-2.28,1.36-.79,2.43.43.37.44a27,27,0,0,0-.37,3.94H69.58ZM80,90l.57-.29L82,90.84l-.65.53,1.69,1.12L83,91.29l.9-1.49.94,1,1,1.38L84,92.56l.79,1.58L86,93.5,85.88,93l.9-.61.53-2.5a14.91,14.91,0,0,0,2.63,4l-8.1,8.1a26.21,26.21,0,0,1-7.1-15.22l1.66,1.77,1.56,0ZM71.66,56.54l8.1,8.11a28.91,28.91,0,0,0-4.3,6.19l-.56,0-1.14.35-.4,0-1.21,1.13L73.68,72l1.38-.35-.24.53-1.21.74H73l-1.78,1.36-1.72-.14-2.49,4.64.49.93-1.35,1.5-.21,2H60.86A39.92,39.92,0,0,1,71.66,56.54ZM61.19,117.69l2.57,1.51.53.36-1.86,1.86q-1.3-1.35-2.52-2.79ZM58.62,85.44c0,1.11.14,2.22.26,3.31l-1.4.32-.29,1.42-2.92,3.72.07,5.11-3,1H49.7a53.48,53.48,0,0,1-2.56-14.89ZM47.3,100.26l-.67-.13L46,99.42l-3.22-.28,1,1.35-3-.56.78-.72-.73-.72-2.15.94-.77,1.42.3,3.27L40.69,110l1.19,1.86.68.25-1.87-3.55-.41-1.81.42-.44-.26-1,1.13.15,1.73,2.62.43.17,0-1.91.7.41.15,1,1.82.48.76-.54.26.18,0,1.39.8,1,1,.22,2.12,3.59,1.29.36.4-1.68a56.32,56.32,0,0,0,7.9,10.2l-8.1,8.1A67.32,67.32,0,0,1,33.41,85.44H44.88A55.83,55.83,0,0,0,47.3,100.26Zm5-63.13,8.1,8.1A55.91,55.91,0,0,0,44.86,83.17H33.4A67.28,67.28,0,0,1,52.25,37.13Zm83-4.18-.69-1.12-1.5-.75-1.17.89,1.5.8L135.05,34ZM128.29,65.3l0,.88,2-.59.61-1.21-1.37-1.8.73-1.1,1.85,1.32.34-.27-.37-.26-.42-.8.76-.44-.74-1-1.74.88L129.36,62l-.35.95.77,1.29-.28.6Zm-82.9,51.42.15-.52-1-2.24-1.22-.45ZM92.27,73.64c0,1.92,1.17,3.28,3.3,4.45,0,0,0-.33,0-.86l-1.34-1.34.71-1.29.58-.16c0-2.24-.09-4.75-.1-5.11l-.1,0C93.34,70.43,92.27,71.75,92.27,73.64Z"></path><path class="cls-1" d="M105.07,123.32c3.6,1.82,6.92,4.34,8.31,9.11.61-7.9-3.82-11.32-8.21-13.63C105.17,118.81,105.07,123.33,105.07,123.32Z"></path><path class="cls-1" d="M129,43.2c0-7.17-5.2-15.13-17.95-17.94a30.69,30.69,0,0,0-3.89-.45c0,1.08-.08,3.56-.08,3.56,0,.78-.08,3.65-.1,4.27a18,18,0,0,1,2.45.34c7.41,1.77,10.06,6,10.06,10.22,0,6.81-5.82,9.38-13,11.32l-2.37.62c-2.17.54-4.4,1.06-6.61,1.65-.79.21-1.57.44-2.35.67h0c-7.93,2.42-14.75,6.24-14.75,16s7.78,13.34,15.37,15.68q-.07-4.19-.16-8.42c-3.35-1.57-5.71-3.64-5.71-7.12s2.15-5.46,5.44-7c.73-.33,1.51-.63,2.34-.91,1.89-.64,4-1.19,6.25-1.73l2.37-.57h0C117,60.89,129,57.54,129,43.2Z"></path><path class="cls-1" d="M90.56,111.67c0,3.92,2.9,6,5.79,7.67,0-.66-.12-6.73-.12-6.83.06-1.21,1.23-1.94,2.18-2.39a47.05,47.05,0,0,1,4.59-1.75c.86-.3,1.59-.59,2.41-.83h0c5.8-1.75,12.51-4,12.51-11s-5.75-10-12-12.13c0,2.25-.11,5.54-.16,7.81,2.66,1,4.42,2.31,4.42,4.32,0,2.53-2.7,4-4.61,4.72-.8.31-2,.71-2.35.82-1.54.48-3.2,1-4.75,1.6a22.79,22.79,0,0,0-2.35,1C93.36,106.06,90.55,108.09,90.56,111.67Z"></path><path class="cls-1" d="M94.49,25.93a46.17,46.17,0,0,0-7,2.85c-2.5.83-6,1-9.67,4.94A49.49,49.49,0,0,0,74.49,38c-1.1,1.58-1.15,4.12-2,5.49-1.16,2-.88,3.11-.88,3.11l0,.06a5.31,5.31,0,0,1-1.34,2.48A5.08,5.08,0,0,1,65.61,51c1.66.83,4-.33,4-.33a30.61,30.61,0,0,0-.88,3.3c1.86-4.21,3.57-5.75,4.1-6.18.8.18,2.46.11,5.54-1.66,3.48-2,8.71-5.25,10.19-7.31a13.59,13.59,0,0,1,6.16-4.65C94.61,31,94.55,28.26,94.49,25.93ZM79.81,39.08,78,39.47,80.16,36l2.52.08Z"></path><path class="cls-1" d="M101.68,111.18c-.34.12-1.21.49-1.76.68s-1.32.51-1.32.71.56,30.41.56,31.08c0,6.25,3.18,6.29,3.18,0,0-.45.64-32.9.64-32.9S102.22,111,101.68,111.18Z"></path><path class="cls-1" d="M98.38,101.16c1-.34,2-.64,2.9-.93l1.93-.6c0-1.91.58-28.33.68-33.13a60.72,60.72,0,0,0-6.15,1.77C97.81,71.87,98.33,98.28,98.38,101.16Z"></path><path class="cls-1" d="M101,0c-8.94,0-5.14,13.26-4.43,17.58,0,.21.72,30,.86,36.79,1.36-.36,2.71-.69,4-1l2.7-.68c.13-6.57.79-35,.81-35.15C105.53,12.91,110.21,0,101,0Z"></path></g></g></svg></a></li>
                    <li class=""><a href="javascript:;" target="_self">健康主题</a></li>
                    <li class=""><a href="{{route('pos')}}" target="_self">国家</a></li>
                    <li class=""><a href="javascript:;" target="_self">媒体中心</a></li>
                    <li class=""><a href="javascript:;" target="_self">突发卫生事件</a></li>
                    <li class=""><a href="javascript:;" target="_self">关于世卫组织</a></li>
                </ul>
                <!--Main desktop navigation:off-->
            </div>

            <ul class="nav-mobile" style="display: none;">
                <li class="home"><a href="/zh" target="_self">世卫组织网站主页<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 673.24 177.96" class="logo svg replaced-svg"><defs><style>.cls-1{fill:#0093d5;}</style></defs><title>世界卫生组织</title><g id="Layer_2" data-name="Layer 2"><g id="CHINESE"><path class="cls-1" d="M271.61,98.53V75.26h14.6V68.57H271.38v-18h-6.7v18H252.39V50.87h-6.93v17.7H235.31V55h-6.93V68.57h-11v6.69h11v44.05h6.93v-5.15h46.82v-6.78H235.31V75.26h10.15V98.53Zm-6.93-23.27v16.6H252.39V75.26Z"></path><path class="cls-1" d="M312.58,92v.38c.1,6.83-1.37,11.92-4.38,15.12s-8.07,5.19-15,5.89l-.59.06,3.71,6.25.25,0c7.91-1.25,13.79-4.08,17.47-8.42s5.48-10.68,5.35-18.87V92Zm46.27,4.27c-10.48-1.72-18.07-5.75-22.62-12h10.93V52.4H299.31V84.34H310.6c-5.15,5.7-12.76,9.56-22.69,11.42l-.55.1,4,6.07.25-.06c13.49-3.09,22.37-9,26.45-17.53h10.64a23.12,23.12,0,0,0,5.32,7.45h-4.55v27.75h6.7V93.75c3.9,3.45,10.13,6.45,18.59,8.92l.26.07,4.38-6.35ZM326.6,58.79h13.86v6H326.6ZM319.91,78H306V71.22h13.94Zm0-13.12H306v-6h13.94ZM326.6,78V71.22h13.86V78Z"></path><path class="cls-1" d="M400.29,108.18V61.61H421c-.47,7-1,13.27-1.63,18.69-.8,7.13-1.38,8.7-1.66,9a2.19,2.19,0,0,1-1.69.77,18.89,18.89,0,0,1-4.72-.9l-5.15-1.38.13.59,1.3,6.8.23,0a40.38,40.38,0,0,0,8.79,1.39c3.85,0,6.53-1.65,7.95-4.9s2.45-15,3.25-36.19l0-.39H372.85v6.47h20.74v46.57H368.46v6.44H435.6v-6.44Z"></path><path class="cls-1" d="M479.66,108.41V92.54h22V86.07h-22V72.21h25.62V65.78H479.66V49.12H473V65.78H460.69a42.63,42.63,0,0,0,1.54-9.08v-.28l-6.63-2,0,.47A41.34,41.34,0,0,1,441.4,83.69L441,84l6.67,3.59.2-.21c5.4-5.74,8.91-10.85,10.49-15.21H473V86.07H452.75v6.47H473v15.87H445.08v6.44h65.2v-6.44Z"></path><path class="cls-1" d="M525.43,94.57l3.1,5.76.31-.11c1.86-.68,9.59-2.61,23-5.75l.29-.06V88.34l-16,3.49c5.53-5.25,10.86-13,15.85-23.18l.17-.35-6.25-2.79-.16.33a75.07,75.07,0,0,1-5.11,9.09l-7.25,1.52c2.81-5.11,6.49-12.83,10.94-23l.15-.34-6-2.76-.15.37c-4.75,12.11-9.15,21.46-13.09,27.82l-.11.18,3.22,5.87L533.71,83l2.56-.7a103.51,103.51,0,0,1-10.65,12.11ZM553.83,99l-.5.19c-2.78,1-12,4-27.32,8.69l-.44.13,3.26,6.06,25-8.39Zm30.93,9.85V53.2H555.9v55.67H547v6.47h46.74v-6.47Zm-6.7,0h-15.5V95.59h15.5Zm0-19.45h-15.5V77.28h15.5Zm0-18.26h-15.5V59.63h15.5Z"></path><path class="cls-1" d="M606.51,84.77a33.79,33.79,0,0,1,9.22-1.89c-4.71,6.25-8.8,10.91-12.14,13.76l-.23.2,3,5.73.28,0c5.69-1.09,13.78-3,24.05-5.72l.28-.08V90.29L614.2,93.91c5.65-4.77,11.38-13.23,17-25.27l.17-.34-6.14-2.79-.16.33c-2.46,5.13-4.2,8.48-5.19,10l-7.86,1a77.24,77.24,0,0,0,11.2-23.34l.09-.32-6.11-2.46-.12.4c-3.37,11.66-8,20.82-13.87,27.23l-.17.19,3.12,6.33Zm60-29.4H634V92h32.51Zm-6.69,30.16H640.66V61.84h19.16Zm-28.84,22v-6.72l-.5.16-28.77,9.45,3.67,6.19.28-.09c10.08-3.34,18.51-6.34,25.08-8.89Zm12-11.16c-4.52,7.57-10.08,13-16.54,16.1l-.49.23,5.06,4.89.25-.16c8.7-5.48,14.29-11.41,16.62-17.61l.1-.27L643.15,96Zm30.16,17a49.83,49.83,0,0,0-16.9-16.87l-.28-.17-.21.25L652,101l.33.23c7.66,5.28,13,11.07,15.89,17.2l.24.52,4.76-5.4Z"></path><path class="cls-1" d="M164,32.58c3.86,4.6,10.61,7.31,14.56,11.92-2.83-13.63-13.35-24.76-25.79-27.42C158.84,21.65,160.15,28,164,32.58ZM14.48,67.13c8.57-18.65,21.36-14.7,26.77-32.47-3,5.45-17,7.75-23.51,21.72,3.31-8.3,1.65-21,7.25-27.85C8.25,40.88,15.38,60.86,14.48,67.13ZM30,111.86c1.54,7.26-3,17.74,4.2,27.76C26.76,131.28,11,129.16,4.58,116.48c8,31,29,24.6,38.39,31.33C35.21,136.66,41.56,129.25,30,111.86Zm-2.41,19.45C23,114,31.18,108,24.93,91.4c-.65,9.36-6.89,13.92-2.68,31C14.82,107.94,3.33,102.54,0,92.6.23,119.78,22.07,123.81,27.59,131.31Zm33.54,29c-6.43-8.9-2-13.93-20.1-30.09,3.82,5.9-.12,13.32,12.06,24.86-11.92-7-28.36-4-36.29-13.41C30.42,167.74,54.35,157.1,61.13,160.34Zm87.42-5.23c12.18-11.54,8.24-19,12.06-24.86-18.06,16.16-13.67,21.19-20.1,30.09,6.78-3.24,30.71,7.4,44.32-18.64C176.91,151.09,160.47,148.08,148.55,155.11Zm18.89-15.49c7.17-10,2.66-20.5,4.2-27.76-11.56,17.39-5.21,24.8-13,36,9.44-6.73,30.36-.35,38.39-31.33C190.62,129.16,174.88,131.28,167.44,139.62Zm-28.86,21.95a89.2,89.2,0,0,0-19.75-3,47.75,47.75,0,0,0-18,3.06,47.78,47.78,0,0,0-18-3.06,89.2,89.2,0,0,0-19.75,3c-10.87,2.89-20.26,5.13-28.45,1,7.85,7,17,9.45,30.23,8,11-1.18,19.91-6.69,30.29-6.61h.41a55.47,55.47,0,0,0-17.12,13.31l5,.67s5.27-10.59,17.39-13.35c12.12,2.76,17.39,13.35,17.39,13.35l5-.67A55.63,55.63,0,0,0,106.1,164h.41c10.38-.08,19.27,5.43,30.28,6.61,13.23,1.43,22.39-1.06,30.24-8C158.84,166.7,149.45,164.46,138.58,161.57ZM25.67,72.63C21.19,81.23,14.23,83.2,15,101,11.22,85.18,2.24,79.32,2.35,69.23c-6.24,26.3,10.44,29.42,14.72,40.44C16.44,93.88,26.52,90.69,25.67,72.63Zm6.26-20.3c-1.56,2.18-2.65,3.11-6.81,6.54A33.77,33.77,0,0,0,13,78.64c.43-9.64-5.53-23.49-1.57-33.59-15.33,21.65.88,34.62,1.45,42.46C16.86,72.42,26,72.3,31.93,52.33Zm156.7,26.31a33.82,33.82,0,0,0-12.11-19.77c-4.16-3.43-5.25-4.36-6.81-6.54,5.93,20,15.07,20.09,19,35.18.57-7.84,16.78-20.81,1.44-42.46C194.15,55.15,188.2,69,188.63,78.64Zm13,14c-3.33,9.94-14.82,15.34-22.25,29.84,4.21-17.12-2-21.68-2.68-31-6.25,16.62,2,22.59-2.66,39.91C179.57,123.81,201.41,119.78,201.64,92.6ZM176,72.63c-.85,18.06,9.24,21.25,8.6,37,4.29-11,21-14.14,14.72-40.44.12,10.09-8.86,16-12.61,31.72C187.41,83.2,180.45,81.23,176,72.63Zm-138.34-40c3.87-4.6,5.18-10.93,11.24-15.5-12.44,2.66-23,13.79-25.79,27.42C27,39.89,33.76,37.18,37.62,32.58Zm122.77,2.08c5.41,17.77,18.2,13.82,26.76,32.47-.89-6.27,6.24-26.25-10.5-38.6,5.6,6.86,3.94,19.55,7.25,27.85C177.41,42.41,163.44,40.11,160.39,34.66ZM117,44.75A41.92,41.92,0,0,0,106.77,42c0,.75,0,1.52,0,2.28a40,40,0,0,1,9.4,2.58A6,6,0,0,0,117,44.75Zm-2.59-22,.68-.61-1.3-.55-3.42-.07-.89.62-2-.17,0,.49a34.75,34.75,0,0,1,3.52.37l1.67-.15ZM107.78,96.5c0-.58-.77-1.15-1.91-1.69h-.21c0,.47,0,2.79-.07,3.92C107,98.1,107.78,97.42,107.78,96.5ZM68.16,53a10.92,10.92,0,0,1,.29-1.25,5.79,5.79,0,0,1-1.4.14Zm32.73,100.6A69.76,69.76,0,0,0,108,14.47c0,.13,0,.27-.08.4-.14.68-.27,1.29-.37,1.83a67.35,67.35,0,0,1,40.63,19l-7.7,7.7.29-1.36-1-.44-1.38-.08.29-.89-.93-3.15-1.92-2.11-6-3.17-.52.55-1.09.32a18,18,0,0,1,3.18,10.11c0,.47,0,.92,0,1.37l3,3.75-1.4.32.93,1.4-2.63,2.62-1.06-2a17.92,17.92,0,0,1-2,3.93l.59.54-8.11,8.11c-.49-.47-1-.92-1.52-1.35-.78.36-1.57.69-2.38,1l.69.54-.41.41-1,.53-.35,1-.59-.59-1.71.57.47.75,1.18-.31.77.06.06-.42.59-.3.18-.35,1.06-.3.83,0c.16.14.33.29.48.44L115.81,68l-.24-.34-3.36.55-.75.75-.73.09,2.08-2-.74-.37-1.95,2.6.57-.06,0,1,.71.28.14,1-1.17-.23-1.22.22-3-1.51s-.16,7.92-.24,11.9c7,2.34,14.35,5.72,14.35,14.6a11,11,0,0,1-5,9.38h0l-.15.1h0l-.22.15c-2.82,1.86-6.44,2.86-9.58,3.84,0,0-.09,6.22-.09,6.22,5,2.48,11.05,6.09,10.49,16.42-.07,2.54-1.06,3.24-1.91,3.47h0a52.52,52.52,0,0,1-9,1.43c0,.8,0,1.56,0,2.27a55.87,55.87,0,0,0,34.78-15.36l8.1,8.1a67.37,67.37,0,0,1-93.3.19l8.1-8.1a55.83,55.83,0,0,0,34.29,15.15c0-.7,0-1.46,0-2.27A53.59,53.59,0,0,1,64.05,123l2.16-2.17,3,.34,1.58-1.7,4.14.14.61-1.43-.15-.61A42,42,0,0,0,96.48,126c0-.88,0-1.65,0-2.28A39.93,39.93,0,0,1,73.76,113.3l8.11-8.11a28.85,28.85,0,0,0,6.57,4.41,7.67,7.67,0,0,1,.82-2.13,26.22,26.22,0,0,1-5.79-3.89l8.13-8.12a14.86,14.86,0,0,0,4.34,2.41c0-.8,0-1.65,0-2.44a12.47,12.47,0,0,1-2.68-1.59l2.29-2.29c-.8-.24-1.62-.5-2.42-.78l-1.54,1.54a12.4,12.4,0,0,1-1.94-2.89,27.57,27.57,0,0,1-4-2.14A15.69,15.69,0,0,1,78.06,73.5,16.54,16.54,0,0,1,81.34,63l-8.08-8.08A39.91,39.91,0,0,1,94.9,44.28c0-.78,0-1.55-.05-2.28A42.18,42.18,0,0,0,71.66,53.34L70.29,52c-.31.55-.67,1.24-1.09,2.11l.86.87A42.13,42.13,0,0,0,58.6,83.17H47.13A53.62,53.62,0,0,1,62,46.83l3.64,3.65a4.61,4.61,0,0,0,.52,0,5.5,5.5,0,0,0,2.07-.6l-4.63-4.63a54.51,54.51,0,0,1,8-6.38,15.06,15.06,0,0,1,.57-1.68,26.93,26.93,0,0,1,1.75-2.35A56,56,0,0,0,62,43.63l-8.1-8.1A67.2,67.2,0,0,1,94,16.73c-.06-.28-.1-.5-.1-.5-.1-.53-.22-1.12-.33-1.74a69.77,69.77,0,0,0,7.28,139.15ZM116,105.45v-.06l0,0Zm33.78-68.12a67.26,67.26,0,0,1,18.65,45.84H156.92a55.67,55.67,0,0,0-6-24.48l.1-.2.79.42.19-.61L150,54.71l-2.43-3.36L144.69,49c-1-1.22-2-2.4-3.07-3.54ZM135.13,52l2.75.12.66.79-.33,1.17L142,56.48l.75-.09,4.9,5.6,2-.7a53.4,53.4,0,0,1,5,21.88H143.19a41.78,41.78,0,0,0-1.07-8.72l.53-.71.71-3.59-.54-3.86-1.38-4.44-3.2-4.68.78.41.39-.39-2.57-1.74-.17.57,2.57,3.67,1.45,3,1,3,.33,2,.53,3.38-1,.07s-1.11-2.07-1.45-2.92l.51-.77-1-1.4v-1.4l-.7-.88-.87.11c-.31-.58-.64-1.15-1-1.71l.62.31.16-.16-.33-.72.75-.42-.34-.42-1.11.42.41-1.74-.66-.38-.59,1.39a42.64,42.64,0,0,0-4.17-5.3Zm-2.3,26.87,2.06-1.12,2.1-.32.46-1,1.17-.7.45-1,.36-1.69c.17.59.32,1.2.46,1.81l-1.11,3.31,0,1.12,1.61-2.15a38.74,38.74,0,0,1,.57,6h-10l-.23-.87,1.17-.93.23-.56.51-.38,1.36-.14.14-.6ZM119.07,71l1-.24,0-.24-1-.69.35-2.16,1.23-1.23a27.16,27.16,0,0,1,2.13,2.77l-.43,1.33-1.12-.8-.85.23.42.79h.42l-.47,1.17-.32-.47Zm4.39,38.07-2.48-.7-.74.27-1.4-1.07-1.32-.47c.65-.47,1.28-1,1.89-1.48l2,1.44,1.56.82.77.77ZM122.2,64.85l8.11-8.11a40.43,40.43,0,0,1,5,6.74l-1,.28.05,1.81,3,1.92a39.2,39.2,0,0,1,1.9,5.12l-.53.78-1.1.7-.27,1.68-.75.42-.63.74-.63-.23-1.12,0,.65-.88.47-2.29.74-.46L134,70.92l-1.63.55L132,73l-1,1.11-1.07-.88-.38-.94.61-.38.34.62.5-.19-.22-1-.71,0-.05.42-.47.09L127,68.86l-.86-.65.33-.36.76-.26-.7-.28s-.89.2-1,.2l.51.64-1.28,0A27.71,27.71,0,0,0,122.2,64.85ZM126.33,108l-1.1-1.1.84-1.09,1.06-2.16-.41-.6.7-1.6-.08-1.44-.42-1.49-1-.35-.37.84-.6-.16a27.18,27.18,0,0,0,2.4-4.19l1-.44.58-.78.28.32.7-.84-.56-.7.51-.14.94.38,1.77,0,1.07-.56,2.8-.74-.53-.93-.18-1.13,1.5.66.56-.33-.28-1.16L135.7,89l-2-.42-1.54-3.15h8.77a39.92,39.92,0,0,1-11.07,26.08l-1.2-1.21.52-1.61-.94-3.55Zm1.55,22.37,1.08-2.32-.42-1,1.59-1.4v-.84l-1.36-.85,1.12-2.23,1.68-2.2-1.68-1.81h-1.26l-.78-1.27c.67-.56,1.34-1.13,2-1.73l8.11,8.11A54.38,54.38,0,0,1,127.88,130.38ZM138,119.67l.9-1-.85-4.44-.58-.23.36-.75-1.92-.6-.37,1.58-.19,2-.4.37-3.5-3.5a42.17,42.17,0,0,0,11.74-27.67h11.47a53.55,53.55,0,0,1-15.1,35.78Zm3.16,3.15a55.84,55.84,0,0,0,15.77-37.38h11.46a67.28,67.28,0,0,1-19.12,45.49Zm-69-11.11c-.83-.86-1.62-1.75-2.38-2.68l.35-2.9-1.21-2.78L68.62,99l-1.36-2.64.28-1.64L65.9,91.57l-1.43-.72.58-1.67-.59-1.32.59-1.51h1.57l.55-.91h2.68l.41.79L69.76,89l-.32.47,1,2.19-.66.36-.46-.58-.2.22.46,1.3.79,1.52.37,0L71,93l-.38-.5,0-.92-.12-1.9L71,86.34l-.54-.9h1.92a28.48,28.48,0,0,0,7.89,18.17ZM64.56,89.3,63.48,91H61.62l-.15-.11a40.74,40.74,0,0,1-.58-5.45h3.45l-.83,2.76Zm3.77-7.87.21-2.28,1.36-.79,2.43.43.37.44a27,27,0,0,0-.37,3.94H69.58ZM80,90l.57-.29L82,90.84l-.65.53,1.69,1.12L83,91.29l.9-1.49.94,1,1,1.38L84,92.56l.79,1.58L86,93.5,85.88,93l.9-.61.53-2.5a14.91,14.91,0,0,0,2.63,4l-8.1,8.1a26.21,26.21,0,0,1-7.1-15.22l1.66,1.77,1.56,0ZM71.66,56.54l8.1,8.11a28.91,28.91,0,0,0-4.3,6.19l-.56,0-1.14.35-.4,0-1.21,1.13L73.68,72l1.38-.35-.24.53-1.21.74H73l-1.78,1.36-1.72-.14-2.49,4.64.49.93-1.35,1.5-.21,2H60.86A39.92,39.92,0,0,1,71.66,56.54ZM61.19,117.69l2.57,1.51.53.36-1.86,1.86q-1.3-1.35-2.52-2.79ZM58.62,85.44c0,1.11.14,2.22.26,3.31l-1.4.32-.29,1.42-2.92,3.72.07,5.11-3,1H49.7a53.48,53.48,0,0,1-2.56-14.89ZM47.3,100.26l-.67-.13L46,99.42l-3.22-.28,1,1.35-3-.56.78-.72-.73-.72-2.15.94-.77,1.42.3,3.27L40.69,110l1.19,1.86.68.25-1.87-3.55-.41-1.81.42-.44-.26-1,1.13.15,1.73,2.62.43.17,0-1.91.7.41.15,1,1.82.48.76-.54.26.18,0,1.39.8,1,1,.22,2.12,3.59,1.29.36.4-1.68a56.32,56.32,0,0,0,7.9,10.2l-8.1,8.1A67.32,67.32,0,0,1,33.41,85.44H44.88A55.83,55.83,0,0,0,47.3,100.26Zm5-63.13,8.1,8.1A55.91,55.91,0,0,0,44.86,83.17H33.4A67.28,67.28,0,0,1,52.25,37.13Zm83-4.18-.69-1.12-1.5-.75-1.17.89,1.5.8L135.05,34ZM128.29,65.3l0,.88,2-.59.61-1.21-1.37-1.8.73-1.1,1.85,1.32.34-.27-.37-.26-.42-.8.76-.44-.74-1-1.74.88L129.36,62l-.35.95.77,1.29-.28.6Zm-82.9,51.42.15-.52-1-2.24-1.22-.45ZM92.27,73.64c0,1.92,1.17,3.28,3.3,4.45,0,0,0-.33,0-.86l-1.34-1.34.71-1.29.58-.16c0-2.24-.09-4.75-.1-5.11l-.1,0C93.34,70.43,92.27,71.75,92.27,73.64Z"></path><path class="cls-1" d="M105.07,123.32c3.6,1.82,6.92,4.34,8.31,9.11.61-7.9-3.82-11.32-8.21-13.63C105.17,118.81,105.07,123.33,105.07,123.32Z"></path><path class="cls-1" d="M129,43.2c0-7.17-5.2-15.13-17.95-17.94a30.69,30.69,0,0,0-3.89-.45c0,1.08-.08,3.56-.08,3.56,0,.78-.08,3.65-.1,4.27a18,18,0,0,1,2.45.34c7.41,1.77,10.06,6,10.06,10.22,0,6.81-5.82,9.38-13,11.32l-2.37.62c-2.17.54-4.4,1.06-6.61,1.65-.79.21-1.57.44-2.35.67h0c-7.93,2.42-14.75,6.24-14.75,16s7.78,13.34,15.37,15.68q-.07-4.19-.16-8.42c-3.35-1.57-5.71-3.64-5.71-7.12s2.15-5.46,5.44-7c.73-.33,1.51-.63,2.34-.91,1.89-.64,4-1.19,6.25-1.73l2.37-.57h0C117,60.89,129,57.54,129,43.2Z"></path><path class="cls-1" d="M90.56,111.67c0,3.92,2.9,6,5.79,7.67,0-.66-.12-6.73-.12-6.83.06-1.21,1.23-1.94,2.18-2.39a47.05,47.05,0,0,1,4.59-1.75c.86-.3,1.59-.59,2.41-.83h0c5.8-1.75,12.51-4,12.51-11s-5.75-10-12-12.13c0,2.25-.11,5.54-.16,7.81,2.66,1,4.42,2.31,4.42,4.32,0,2.53-2.7,4-4.61,4.72-.8.31-2,.71-2.35.82-1.54.48-3.2,1-4.75,1.6a22.79,22.79,0,0,0-2.35,1C93.36,106.06,90.55,108.09,90.56,111.67Z"></path><path class="cls-1" d="M94.49,25.93a46.17,46.17,0,0,0-7,2.85c-2.5.83-6,1-9.67,4.94A49.49,49.49,0,0,0,74.49,38c-1.1,1.58-1.15,4.12-2,5.49-1.16,2-.88,3.11-.88,3.11l0,.06a5.31,5.31,0,0,1-1.34,2.48A5.08,5.08,0,0,1,65.61,51c1.66.83,4-.33,4-.33a30.61,30.61,0,0,0-.88,3.3c1.86-4.21,3.57-5.75,4.1-6.18.8.18,2.46.11,5.54-1.66,3.48-2,8.71-5.25,10.19-7.31a13.59,13.59,0,0,1,6.16-4.65C94.61,31,94.55,28.26,94.49,25.93ZM79.81,39.08,78,39.47,80.16,36l2.52.08Z"></path><path class="cls-1" d="M101.68,111.18c-.34.12-1.21.49-1.76.68s-1.32.51-1.32.71.56,30.41.56,31.08c0,6.25,3.18,6.29,3.18,0,0-.45.64-32.9.64-32.9S102.22,111,101.68,111.18Z"></path><path class="cls-1" d="M98.38,101.16c1-.34,2-.64,2.9-.93l1.93-.6c0-1.91.58-28.33.68-33.13a60.72,60.72,0,0,0-6.15,1.77C97.81,71.87,98.33,98.28,98.38,101.16Z"></path><path class="cls-1" d="M101,0c-8.94,0-5.14,13.26-4.43,17.58,0,.21.72,30,.86,36.79,1.36-.36,2.71-.69,4-1l2.7-.68c.13-6.57.79-35,.81-35.15C105.53,12.91,110.21,0,101,0Z"></path></g></g></svg></a></li>
                <li class=""><a href="/zh/redirect-pages/mega-menu/health-topics" target="_self">健康主题</a>
                    <ul>
                        <li><a href="https://www.who.int/topics/zh/">健康主题 »</a>
                            <ul class="horizontal-menu">
                                <li><a href="https://www.who.int/topics/zh/">健康主题 »</a></li>
                                <li><a href="https://www.who.int/topics/zh/#A">A</a></li>
                                <li><a href="https://www.who.int/topics/zh/#B">B</a></li>
                                <li><a href="https://www.who.int/topics/zh/#C">C</a></li>
                                <li><a href="https://www.who.int/topics/zh/#D">D</a></li>
                                <li><a href="https://www.who.int/topics/zh/#E">E</a></li>
                                <li><a href="https://www.who.int/topics/zh/#F">F</a></li>
                                <li><a href="https://www.who.int/topics/zh/#G">G</a></li>
                                <li><a href="https://www.who.int/topics/zh/#H">H</a></li>
                                <li><a href="https://www.who.int/topics/zh/#I">I</a></li>
                                <li><a href="https://www.who.int/topics/zh/#J">J</a></li>
                                <li><a href="https://www.who.int/topics/zh/#K">K</a></li>
                                <li><a href="https://www.who.int/topics/zh/#L">L</a></li>
                                <li><a href="https://www.who.int/topics/zh/#M">M</a></li>
                                <li><a href="https://www.who.int/topics/zh/#N">N</a></li>
                                <li><a href="https://www.who.int/topics/zh/#O">O</a></li>
                                <li><a href="https://www.who.int/topics/zh/#P">P</a></li>
                                <li><a href="https://www.who.int/topics/zh/#Q">Q</a></li>
                                <li><a href="https://www.who.int/topics/zh/#R">R</a></li>
                                <li><a href="https://www.who.int/topics/zh/#S">S</a></li>
                                <li><a href="https://www.who.int/topics/zh/#T">T</a></li>
                                <li><a href="https://www.who.int/topics/zh/#U">U</a></li>
                                <li><a href="https://www.who.int/topics/zh/#V">V</a></li>
                                <li><a href="https://www.who.int/topics/zh/#W">W</a></li>
                                <li><a href="https://www.who.int/topics/zh/#X">X</a></li>
                                <li><a href="https://www.who.int/topics/zh/#Y">Y</a></li>
                                <li><a href="https://www.who.int/topics/zh/#Z">Z</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="/zh/redirect-pages/mega-menu/health-topics/popular-topics" target="_self">热门主题</a>

                            <ul class="sub-level">
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/health-topics/popular-topics/hepatitis" target="_self">肝炎</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/health-topics/popular-topics/癌症" target="_self">癌症</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/health-topics/popular-topics/狂犬病" target="_self">狂犬病</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/health-topics/popular-topics/心血管疾病" target="_self">心血管疾病</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/health-topics/popular-topics/糖尿病" target="_self">糖尿病</a>

                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="/zh/redirect-pages/mega-menu/health-topics/资源" target="_self">资源</a>

                            <ul class="sub-level">
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/health-topics/资源/数据和统计" target="_self">数据和统计</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/health-topics/资源/实况报道" target="_self">实况报道</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/health-topics/资源/图片事实" target="_self">图片事实</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/health-topics/资源/出版物" target="_self">出版物</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/health-topics/资源/questions-answers" target="_self">问答</a>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=""><a href="/zh/redirect-pages/mega-menu/countries" target="_self">国家</a>
                    <ul>
                        <li>
                            <a href="https://www.who.int/countries/zh/"></a><a href="https://www.who.int/countries/zh/">国家 »</a>
                            <ul class="horizontal-menu">
                                <li>
                                    <a href="https://www.who.int/countries/zh/"></a><a href="https://www.who.int/countries/zh/">国家 »</a></li>
                                <li><a href="https://www.who.int/countries/zh/#A">A</a></li>
                                <li><a href="https://www.who.int/countries/zh/#B">B</a></li>
                                <li><a href="https://www.who.int/countries/zh/#C">C</a></li>
                                <li><a href="https://www.who.int/countries/zh/#D">D</a></li>
                                <li><a href="https://www.who.int/countries/zh/#E">E</a></li>
                                <li><a href="https://www.who.int/countries/zh/#F">F</a></li>
                                <li><a href="https://www.who.int/countries/zh/#G">G</a></li>
                                <li><a href="https://www.who.int/countries/zh/#H">H</a></li>
                                <li><a href="https://www.who.int/countries/zh/#I">I</a></li>
                                <li><a href="https://www.who.int/countries/zh/#J">J</a></li>
                                <li><a href="https://www.who.int/countries/zh/#K">K</a></li>
                                <li><a href="https://www.who.int/countries/zh/#L">L</a></li>
                                <li><a href="https://www.who.int/countries/zh/#M">M</a></li>
                                <li><a href="https://www.who.int/countries/zh/#N">N</a></li>
                                <li><a href="https://www.who.int/countries/zh/#O">O</a></li>
                                <li><a href="https://www.who.int/countries/zh/#P">P</a></li>
                                <li><a href="https://www.who.int/countries/zh/#Q">Q</a></li>
                                <li><a href="https://www.who.int/countries/zh/#R">R</a></li>
                                <li><a href="https://www.who.int/countries/zh/#S">S</a></li>
                                <li><a href="https://www.who.int/countries/zh/#T">T</a></li>
                                <li><a href="https://www.who.int/countries/zh/#U">U</a></li>
                                <li><a href="https://www.who.int/countries/zh/#V">V</a></li>
                                <li><a href="https://www.who.int/countries/zh/#W">W</a></li>
                                <li><a href="https://www.who.int/countries/zh/#X">X</a></li>
                                <li><a href="https://www.who.int/countries/zh/#Y">Y</a></li>
                                <li><a href="https://www.who.int/countries/zh/#Z">Z</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="/zh/redirect-pages/mega-menu/countries/who-in-countries" target="_self">世卫组织与国家的合作 »</a>

                            <ul class="sub-level">
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/countries/who-in-countries/overview" target="_self">概况</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/countries/who-in-countries/cooperation-strategies" target="_self">合作战略</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/countries/who-in-countries/开展的工作" target="_self">开展的工作</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/countries/who-in-countries/特写故事" target="_self">特写故事</a>

                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="/zh/redirect-pages/mega-menu/countries/regions" target="_self">区域办事处 »</a>

                            <ul class="sub-level">
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/countries/regions/africa" target="_self">非洲</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/countries/regions/americas" target="_self">美洲</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/countries/regions/south-east-asia" target="_self">东南亚</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/countries/regions/europe" target="_self">欧洲</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/countries/regions/eastern-mediterranean" target="_self">东地中海</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/countries/regions/western-pacific" target="_self">西太平洋</a>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=""><a href="/zh/news-room" target="_self">媒体中心</a>
                    <ul>
                        <li class="">
                            <a href="/zh/news-room" target="_self">媒体中心</a>

                            <ul class="sub-level">
                                <li class="">
                                    <a href="/zh/news-room/releases" target="_self">新闻稿</a>

                                </li>
                                <li class="">
                                    <a href="/zh/news-room/statements" target="_self">声明</a>

                                </li>
                                <li class="">
                                    <a href="/zh/news-room/notes" target="_self">简讯</a>

                                </li>
                                <li class="">
                                    <a href="/zh/news-room/commentaries" target="_self">评论</a>

                                </li>
                                <li class="">
                                    <a href="/zh/news-room/feature-stories" target="_self">特写故事</a>

                                </li>
                                <li class="">
                                    <a href="/zh/news-room/questions-answers" target="_self">在线问答</a>

                                </li>
                                <li class="">
                                    <a href="/zh/news-room/events" target="_self">要事</a>

                                </li>
                            </ul>
                        </li>
                        <li>世卫组织新闻</li>
                    </ul>
                </li>
                <li class=""><a href="javascript:;" target="_self">突发卫生事件</a>
                    <ul>
                        <li class="">
                            <a href="/zh/redirect-pages/mega-menu/emergencies/emergencies" target="_self">突发卫生事件 »</a>

                            <ul class="sub-level">
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/emergencies/emergencies/世卫组织的作用" target="_self">世卫组织的作用</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/emergencies/emergencies/人道主义卫生行动" target="_self">人道主义卫生行动</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/emergencies/emergencies/突发事件防范和应对" target="_self">突发事件防范和应对</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/emergencies/emergencies/出版物" target="_self">出版物</a>

                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="/zh/redirect-pages/mega-menu/emergencies/news" target="_self">新闻和特写</a>

                            <ul class="sub-level">
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/emergencies/news/有关紧急情况的特写" target="_self">有关紧急情况的特写</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/emergencies/news/后备合作伙伴在突发事件应对中的重要作用" target="_self">后备合作伙伴在突发事件应对中的重要作用</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/emergencies/news/捐助方对世卫组织突发事件应急基金承诺捐款" target="_self">捐助方对世卫组织突发事件应急基金承诺捐款</a>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=""><a href="/zh/redirect-pages/mega-menu/about-us" target="_self">关于世卫组织</a>
                    <ul>
                        <li class="">
                            <a href="/zh/redirect-pages/mega-menu/about-us/about" target="_self">关于世卫组织  »</a>

                            <ul class="sub-level">
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/about-us/about/who-we-are" target="_self">我们是谁</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/about-us/about/what-we-do" target="_self">我们开展何种工作</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/about-us/about/where-we-work" target="_self">我们在何处工作</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/about-us/about/who-we-work-with" target="_blank">我们与联合国的合作</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/about-us/about/director-general" target="_self">世卫组织总干事</a>

                                </li>
                            </ul>
                        </li>
                        <li class=""><a href="/zh/redirect-pages/mega-menu/about-us/contact-us" target="_self">联系我们 »</a></li>
                        <li class="">
                            <a href="/zh/redirect-pages/mega-menu/about-us/governance" target="_blank">理事机构 »</a>

                            <ul class="sub-level">
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/about-us/governance/world-health-assembly" target="_self">世界卫生大会</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/about-us/governance/executive-board" target="_self">执行委员会</a>

                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="/zh/redirect-pages/mega-menu/about-us/planning-accountability" target="_self">规划、资金与问责 »</a>

                            <ul class="sub-level">
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/about-us/planning-accountability/general-programme-of-work" target="_blank">工作总规划</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/about-us/planning-accountability/budget" target="_blank">预算</a>

                                </li>
                                <li class="">
                                    <a href="/zh/redirect-pages/mega-menu/about-us/planning-accountability/funding" target="_self">筹资</a>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

            <div id="Navigation_TD9F2A204024_Col00" class="sf_colsIn col-md-12" data-sf-element="Menu Wrapper" data-placeholder-label="Menu Wrapper">
                <div class="navItemLayout navHomeItemLayout">
                    <div id="Navigation_TD9F2A204025_Col00" class="sf_colsIn col-md-12 navParent desktopHidden" data-sf-element="Menu Parent Link" data-placeholder-label="Menu Parent Link" data-offset="-100" style="display: none;">
                        <nav role="navigation">
                            <ul class="main-navigation">

                            </ul>
                        </nav>

                    </div>

                    <div class="container">
                        <div class="row">
                            <div id="Navigation_TD9F2A204025_Col01" class="sf_colsIn col-md-12 navDropdown empty" data-sf-element="Menu Item Dropdown" data-placeholder-label="Menu Item Dropdown"></div>
                        </div>
                    </div>
                </div>
                <div class="navItemLayout">
                    <div id="Navigation_TD9F2A204029_Col00" class="sf_colsIn navParent desktopHidden" data-sf-element="Menu Parent Link" data-placeholder-label="Menu Parent Link" data-offset="-100" style="display: none;">
                        <nav role="navigation">
                            <ul class="main-navigation">

                            </ul>
                        </nav>

                    </div>

                    <div class="container">
                        <div class="row">
                            <div id="Navigation_TD9F2A204029_Col01" class="sf_colsIn col-md-12 navDropdown" data-sf-element="Menu Item Dropdown" data-placeholder-label="Menu Item Dropdown">
                                <div class="row" data-sf-element="Row">
                                    <div id="Navigation_T75121FDA161_Col00" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                        <div id="Navigation_TD9F2A204114_Col00" class="sf_colsIn horizontal" data-sf-element="Horizontal" data-placeholder-label="Horizontal">

                                            <div class="sf-content-block content-block">
                                                <div>
                                                    <ul>
                                                        <li><a href="https://www.who.int/topics/zh/">健康主题 »</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#A">A</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#B">B</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#C">C</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#D">D</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#E">E</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#F">F</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#G">G</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#H">H</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#I">I</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#J">J</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#K">K</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#L">L</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#M">M</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#N">N</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#O">O</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#P">P</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#Q">Q</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#R">R</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#S">S</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#T">T</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#U">U</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#V">V</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#W">W</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#X">X</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#Y">Y</a></li>
                                                        <li><a href="https://www.who.int/topics/zh/#Z">Z</a></li>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <div id="Navigation_T75121FDA161_Col01" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 2" data-placeholder-label="Column 2">
                                        <div class="main-navigation--wrapper">

                                            <ul class="main-navigation navVertical">
                                                <li class="">
                                                    <a href="/zh/redirect-pages/mega-menu/health-topics/popular-topics" target="_self">热门主题</a>

                                                    <ul class="sub-level">
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/health-topics/popular-topics/hepatitis" target="_self">肝炎</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/health-topics/popular-topics/癌症" target="_self">癌症</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/health-topics/popular-topics/狂犬病" target="_self">狂犬病</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/health-topics/popular-topics/心血管疾病" target="_self">心血管疾病</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/health-topics/popular-topics/糖尿病" target="_self">糖尿病</a>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div id="Navigation_T75121FDA161_Col02" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 3" data-placeholder-label="Column 3">
                                        <div class="main-navigation--wrapper">

                                            <ul class="main-navigation navVertical">
                                                <li class="">
                                                    <a href="/zh/redirect-pages/mega-menu/health-topics/资源" target="_self">资源</a>

                                                    <ul class="sub-level">
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/health-topics/资源/数据和统计" target="_self">数据和统计</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/health-topics/资源/实况报道" target="_self">实况报道</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/health-topics/资源/图片事实" target="_self">图片事实</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/health-topics/资源/出版物" target="_self">出版物</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/health-topics/资源/questions-answers" target="_self">问答</a>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div id="Navigation_T75121FDA161_Col03" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 4" data-placeholder-label="Column 4">

                                        <div class="sf-content-block content-block">
                                            <div>
                                                <div class="navigation-title">
                                                    <a href="http://www.who.int/topics/air_pollution/zh/" target="_blank"></a><a href="http://www.who.int/topics/air_pollution/zh/" target="_blank">关注空气污染 »</a></div>
                                            </div>

                                        </div>

                                        <div class="sf-image ">
                                            <img class="lazy" src="/images/default-source/imported/manila-air_pollution-jpg.tmb-549v.jpg?Culture=zh&amp;sfvrsn=c96c5ed4_38" data-image="/images/default-source/imported/manila-air_pollution-jpg.tmb-549v.jpg?Culture=zh&amp;sfvrsn=c96c5ed4_38" title="WMR-2017-cover_180px" alt="Cover of the 2018 World Malaria Report">

                                            <div class="sf-image-credit mobile" style="display: block;">

                                                <div class="sf-image-credit__content">
                                                    <div class="sf-image-credit__inner">
                                                        世卫组织
                                                        <br>空气污染笼罩下的菲律宾首都马尼拉 </div>
                                                </div>

                                                <div class="sf-image-credit__label">
                                                    <span class="sf-image-credit__copyright">©</span>
                                                    <span class="sf-image-credit__text">来源</span>

                                                    <i class="icon plus-icon"></i>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navItemLayout">
                    <div id="Navigation_TD9F2A204027_Col00" class="sf_colsIn navParent desktopHidden" data-sf-element="Menu Parent Link" data-placeholder-label="Menu Parent Link" data-offset="-100" style="display: none;">
                        <nav role="navigation">
                            <ul class="main-navigation">

                            </ul>
                        </nav>

                    </div>

                    <div class="container">
                        <div class="row">
                            <div id="Navigation_TD9F2A204027_Col01" class="sf_colsIn col-md-12 navDropdown" data-sf-element="Menu Item Dropdown" data-placeholder-label="Menu Item Dropdown">
                                <div class="row" data-sf-element="Row">
                                    <div id="Navigation_TD9F2A204039_Col00" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                        <div id="Navigation_TD9F2A204043_Col00" class="sf_colsIn horizontal" data-sf-element="Horizontal" data-placeholder-label="Horizontal">

                                            <div class="sf-content-block content-block">
                                                <div>
                                                    <ul>
                                                        <li>
                                                            <a href="https://www.who.int/countries/zh/"></a><a href="https://www.who.int/countries/zh/">国家 »</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#A">A</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#B">B</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#C">C</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#D">D</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#E">E</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#F">F</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#G">G</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#H">H</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#I">I</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#J">J</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#K">K</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#L">L</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#M">M</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#N">N</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#O">O</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#P">P</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#Q">Q</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#R">R</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#S">S</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#T">T</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#U">U</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#V">V</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#W">W</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#X">X</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#Y">Y</a></li>
                                                        <li><a href="https://www.who.int/countries/zh/#Z">Z</a></li>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <div id="Navigation_TD9F2A204039_Col01" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 2" data-placeholder-label="Column 2">
                                        <div class="main-navigation--wrapper">

                                            <ul class="main-navigation navVertical">
                                                <li class="">
                                                    <a href="/zh/redirect-pages/mega-menu/countries/who-in-countries" target="_self">世卫组织与国家的合作 »</a>

                                                    <ul class="sub-level">
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/countries/who-in-countries/overview" target="_self">概况</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/countries/who-in-countries/cooperation-strategies" target="_self">合作战略</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/countries/who-in-countries/开展的工作" target="_self">开展的工作</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/countries/who-in-countries/特写故事" target="_self">特写故事</a>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div id="Navigation_TD9F2A204039_Col02" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 3" data-placeholder-label="Column 3">
                                        <div class="main-navigation--wrapper">

                                            <ul class="main-navigation navVertical">
                                                <li class="">
                                                    <a href="/zh/redirect-pages/mega-menu/countries/regions" target="_self">区域办事处 »</a>

                                                    <ul class="sub-level">
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/countries/regions/africa" target="_self">非洲</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/countries/regions/americas" target="_self">美洲</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/countries/regions/south-east-asia" target="_self">东南亚</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/countries/regions/europe" target="_self">欧洲</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/countries/regions/eastern-mediterranean" target="_self">东地中海</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/countries/regions/western-pacific" target="_self">西太平洋</a>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div id="Navigation_TD9F2A204039_Col03" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 4" data-placeholder-label="Column 4">

                                        <div class="sf-content-block content-block">
                                            <div>
                                                <div class="navigation-title">关注</div>
                                            </div>

                                        </div>

                                        <div class="sf-image ">
                                            <img class="lazy" src="/images/default-source/imported/yellow-fever-vaccination3ce928d7561f49e58150bce126de2629.jpg?Culture=zh&amp;sfvrsn=3ed84cdf_26" data-image="/images/default-source/imported/yellow-fever-vaccination3ce928d7561f49e58150bce126de2629.jpg?Culture=zh&amp;sfvrsn=3ed84cdf_26" title="chronic-disease-tanzania" alt="An old man in Tanzania, having his blood pressure checked">

                                            <div class="sf-image-credit mobile" style="display: block;">

                                                <div class="sf-image-credit__content">
                                                    <div class="sf-image-credit__inner">
                                                        世卫组织
                                                        <br>一名儿童在接种黄热病疫苗 </div>
                                                </div>

                                                <div class="sf-image-credit__label">
                                                    <span class="sf-image-credit__copyright">©</span>
                                                    <span class="sf-image-credit__text">来源</span>

                                                    <i class="icon plus-icon"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="sf-content-block content-block">
                                            <div>
                                                <div class="navigation-title"><a href="http://www.who.int/countries/nga/zh/">尼日利亚</a></div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navItemLayout">
                    <div id="Navigation_TD9F2A204028_Col00" class="sf_colsIn navParent desktopHidden" data-sf-element="Menu Parent Link" data-placeholder-label="Menu Parent Link" data-offset="-100" style="display: none;">
                        <nav role="navigation">
                            <ul class="main-navigation">

                            </ul>
                        </nav>

                    </div>

                    <div class="container">
                        <div class="row">
                            <div id="Navigation_TD9F2A204028_Col01" class="sf_colsIn col-md-12 navDropdown" data-sf-element="Menu Item Dropdown" data-placeholder-label="Menu Item Dropdown">
                                <div class="row" data-sf-element="Row">
                                    <div id="Navigation_TD9F2A204038_Col00" class="sf_colsIn col-md-3" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                        <div class="main-navigation--wrapper">

                                            <ul class="main-navigation navVertical">
                                                <li class="">
                                                    <a href="/zh/news-room" target="_self">媒体中心</a>

                                                    <ul class="sub-level">
                                                        <li class="">
                                                            <a href="/zh/news-room/releases" target="_self">新闻稿</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/news-room/statements" target="_self">声明</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/news-room/notes" target="_self">简讯</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/news-room/commentaries" target="_self">评论</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/news-room/feature-stories" target="_self">特写故事</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/news-room/questions-answers" target="_self">在线问答</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/news-room/events" target="_self">要事</a>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div id="Navigation_TD9F2A204038_Col01" class="sf_colsIn col-md-6" data-sf-element="Column 2" data-placeholder-label="Column 2">

                                        <div class="sf-content-block content-block">
                                            <div>
                                                <ul>
                                                    <li>世卫组织新闻</li>
                                                </ul>
                                            </div>

                                        </div>

                                        <div id="listView" class="vertical-list" data-role="listview" role="listbox">
                                            <div class="vertical-list-item" data-uid="0e09cfa2-66bc-4e3a-8955-5bf0b77e9d9c" role="option" aria-selected="false">
                                                <div class="info">
                                                    <a href="https://www.who.int/zh/news-room/detail/16-03-2020-icc-who-joint-statement-an-unprecedented-private-sector-call-to-action-to-tackle-covid-19" aria-label="国际商会和世卫组织的联合声明：私营部门为抗击COVID-19疫情发出空前的行动呼吁" role="link">
                                                        <p class="heading">国际商会和世卫组织的联合声明：私营部门为抗击COVID-19疫情发出空前的行动呼吁</p>
                                                    </a>
                                                    <div class="date">
                                                        <span class="timestamp">2020年3月16日</span>
                                                        <div class="sf-tags-list">
                                                            <div class="sf-tags-list-item">世卫组织的声明</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="vertical-list-item" data-uid="0397beba-a9a1-41a5-aa37-51fbc297f1e6" role="option" aria-selected="false">
                                                <div class="info">
                                                    <a href="https://www.who.int/zh/news-room/detail/13-03-2020-who-un-foundation-and-partners-launch-first-of-its-kind-covid-19-solidarity-response-fund" aria-label="世卫组织、联合国基金会以及有关合作伙伴发起COVID-19团结应对基金" role="link">
                                                        <p class="heading">世卫组织、联合国基金会以及有关合作伙伴发起COVID-19团结应对基金</p>
                                                    </a>
                                                    <div class="date">
                                                        <span class="timestamp">2020年3月13日</span>
                                                        <div class="sf-tags-list">
                                                            <div class="sf-tags-list-item">新闻稿</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="vertical-list-item" data-uid="68c3330f-b39e-4cbd-9446-c18eabde86bd" role="option" aria-selected="false">
                                                <div class="info">
                                                    <a href="https://www.who.int/zh/news-room/detail/07-03-2020-who-statement-on-cases-of-covid-19-surpassing-100-000" aria-label="世卫组织关于2019冠状病毒病病例超过10万的声明" role="link">
                                                        <p class="heading">世卫组织关于2019冠状病毒病病例超过10万的声明</p>
                                                    </a>
                                                    <div class="date">
                                                        <span class="timestamp">2020年3月7日</span>
                                                        <div class="sf-tags-list">
                                                            <div class="sf-tags-list-item">世卫组织的声明</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="vertical-list-item" data-uid="1307ebf8-bad5-4b70-876a-43a0b94043f7" role="option" aria-selected="false">
                                                <div class="info">
                                                    <a href="https://www.who.int/zh/news-room/detail/03-03-2020-shortage-of-personal-protective-equipment-endangering-health-workers-worldwide" aria-label="个人防护装备短缺使全球卫生工作者面临危险" role="link">
                                                        <p class="heading">个人防护装备短缺使全球卫生工作者面临危险</p>
                                                    </a>
                                                    <div class="date">
                                                        <span class="timestamp">2020年3月3日</span>
                                                        <div class="sf-tags-list">
                                                            <div class="sf-tags-list-item">新闻稿</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="Navigation_TD9F2A204038_Col02" class="sf_colsIn col-md-3" data-sf-element="Column 3" data-placeholder-label="Column 3">

                                        <div class="sf-content-block content-block">
                                            <div></div>

                                        </div>

                                        <div class="sf-image ">
                                            <img class="lazy" src="/images/default-source/imported/monitoring-health-300.tmb-200v.png?Culture=en&amp;sfvrsn=b29277a3_20" data-image="/images/default-source/imported/monitoring-health-300.tmb-200v.png?Culture=en&amp;sfvrsn=b29277a3_20" title="monitoring-health-300" alt="Monitoring health for the sustainable development goals">

                                            <div class="sf-image-credit mobile" style="display: block;">

                                                <div class="sf-image-credit__content">
                                                    <div class="sf-image-credit__inner">
                                                        OMS
                                                    </div>
                                                </div>

                                                <div class="sf-image-credit__label">
                                                    <span class="sf-image-credit__copyright">©</span>
                                                    <span class="sf-image-credit__text">来源</span>

                                                    <i class="icon plus-icon"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="sf-content-block content-block">
                                            <div>
                                                <div class="navigation-title"><a href="http://www.who.int/gho/zh/">全球卫生观察站</a></div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navItemLayout">
                    <div id="Navigation_TD9F2A204040_Col00" class="sf_colsIn navParent desktopHidden" data-sf-element="Menu Parent Link" data-placeholder-label="Menu Parent Link" data-offset="-100" style="display: none;">
                        <nav role="navigation">
                            <ul class="main-navigation">

                            </ul>
                        </nav>

                    </div>

                    <div class="container">
                        <div class="row">
                            <div id="Navigation_TD9F2A204040_Col01" class="sf_colsIn col-md-12 navDropdown" data-sf-element="Menu Item Dropdown" data-placeholder-label="Menu Item Dropdown">
                                <div class="row" data-sf-element="Row">
                                    <div id="Navigation_TD9F2A204090_Col00" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                        <div class="main-navigation--wrapper">

                                            <ul class="main-navigation navVertical">
                                                <li class="">
                                                    <a href="javascript:;" target="_self">突发卫生事件 »</a>

                                                    <ul class="sub-level">
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/emergencies/emergencies/世卫组织的作用" target="_self">世卫组织的作用</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/emergencies/emergencies/人道主义卫生行动" target="_self">人道主义卫生行动</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/emergencies/emergencies/突发事件防范和应对" target="_self">突发事件防范和应对</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/emergencies/emergencies/出版物" target="_self">出版物</a>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div id="Navigation_TD9F2A204090_Col01" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 2" data-placeholder-label="Column 2">
                                        <div class="main-navigation--wrapper">

                                            <ul class="main-navigation navVertical">
                                                <li class="">
                                                    <a href="/zh/redirect-pages/mega-menu/emergencies/news" target="_self">新闻和特写</a>

                                                    <ul class="sub-level">
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/emergencies/news/有关紧急情况的特写" target="_self">有关紧急情况的特写</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/emergencies/news/后备合作伙伴在突发事件应对中的重要作用" target="_self">后备合作伙伴在突发事件应对中的重要作用</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/emergencies/news/捐助方对世卫组织突发事件应急基金承诺捐款" target="_self">捐助方对世卫组织突发事件应急基金承诺捐款</a>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div id="Navigation_TD9F2A204090_Col02" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 3" data-placeholder-label="Column 3">
                                        <nav role="navigation">
                                            <ul class="main-navigation">
                                            </ul>
                                        </nav>

                                    </div>
                                    <div id="Navigation_TD9F2A204090_Col03" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 4" data-placeholder-label="Column 4">

                                        <div class="sf-content-block content-block">
                                            <div>
                                                <div class="navigation-title"><a href="http://www.who.int/features/2018/10-threats-global-heath/zh/">全球卫生威胁</a></div>
                                            </div>

                                        </div>

                                        <div class="sf-image ">
                                            <img class="lazy" src="/images/default-source/imported/9.tmb-340v.jpg?Culture=en&amp;sfvrsn=7f3cb048_20" data-image="/images/default-source/imported/9.tmb-340v.jpg?Culture=en&amp;sfvrsn=7f3cb048_20" title="WHO_005546.orig" alt="WHO_005546.orig">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navItemLayout">
                    <div id="Navigation_TD9F2A204026_Col00" class="sf_colsIn navParent desktopHidden" data-sf-element="Menu Parent Link" data-placeholder-label="Menu Parent Link" data-offset="-100" style="display: none;">
                        <nav role="navigation">
                            <ul class="main-navigation">

                            </ul>
                        </nav>

                    </div>

                    <div class="container">
                        <div class="row">
                            <div id="Navigation_TD9F2A204026_Col01" class="sf_colsIn col-md-12 navDropdown" data-sf-element="Menu Item Dropdown" data-placeholder-label="Menu Item Dropdown">
                                <div class="row" data-sf-element="Row">
                                    <div id="Navigation_TD9F2A204035_Col00" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                        <div class="main-navigation--wrapper">

                                            <ul class="main-navigation navVertical">
                                                <li class="">
                                                    <a href="/zh/redirect-pages/mega-menu/about-us/about" target="_self">关于世卫组织  »</a>

                                                    <ul class="sub-level">
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/about-us/about/who-we-are" target="_self">我们是谁</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/about-us/about/what-we-do" target="_self">我们开展何种工作</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/about-us/about/where-we-work" target="_self">我们在何处工作</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/about-us/about/who-we-work-with" target="_blank">我们与联合国的合作</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/about-us/about/director-general" target="_self">世卫组织总干事</a>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <nav role="navigation">
                                            <ul class="main-navigation">
                                                <li class=""><a href="/zh/redirect-pages/mega-menu/about-us/contact-us" target="_self">联系我们 »</a></li>
                                            </ul>
                                        </nav>

                                    </div>
                                    <div id="Navigation_TD9F2A204035_Col01" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 2" data-placeholder-label="Column 2">
                                        <div class="main-navigation--wrapper">

                                            <ul class="main-navigation navVertical">
                                                <li class="">
                                                    <a href="/zh/redirect-pages/mega-menu/about-us/governance" target="_blank">理事机构 »</a>

                                                    <ul class="sub-level">
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/about-us/governance/world-health-assembly" target="_self">世界卫生大会</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/about-us/governance/executive-board" target="_self">执行委员会</a>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div id="Navigation_TD9F2A204035_Col02" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 3" data-placeholder-label="Column 3">
                                        <div class="main-navigation--wrapper">

                                            <ul class="main-navigation navVertical">
                                                <li class="">
                                                    <a href="/zh/redirect-pages/mega-menu/about-us/planning-accountability" target="_self">规划、资金与问责 »</a>

                                                    <ul class="sub-level">
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/about-us/planning-accountability/general-programme-of-work" target="_blank">工作总规划</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/about-us/planning-accountability/budget" target="_blank">预算</a>

                                                        </li>
                                                        <li class="">
                                                            <a href="/zh/redirect-pages/mega-menu/about-us/planning-accountability/funding" target="_self">筹资</a>

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div id="Navigation_TD9F2A204035_Col03" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 4" data-placeholder-label="Column 4">

                                        <div class="sf-content-block content-block">
                                            <div>
                                                <div class="navigation-title"><a href="/zh/about/what-we-do/who-brochure"><strong>世卫组织宣传册 »</strong></a></div>
                                            </div>

                                        </div>

                                        <div class="sf-image ">
                                            <img class="lazy" src="/images/default-source/publications/brochure/boy_malawi.tmb-549v.jpg?Culture=zh&amp;sfvrsn=41439f93_12" data-image="/images/default-source/publications/brochure/boy_malawi.tmb-549v.jpg?Culture=zh&amp;sfvrsn=41439f93_12" title="boy_malawi" alt="马拉维的一名男孩开心地笑着">

                                            <div class="sf-image-credit mobile" style="display: block;">

                                                <div class="sf-image-credit__content">
                                                    <div class="sf-image-credit__inner">
                                                        世卫组织/L. Pezzoli
                                                    </div>
                                                </div>

                                                <div class="sf-image-credit__label">
                                                    <span class="sf-image-credit__copyright">©</span>
                                                    <span class="sf-image-credit__text">来源</span>

                                                    <i class="icon plus-icon"></i>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="sf-content content">
    <div id="PageContent_TA51A0481002_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
        <div>
            <ul class="sf-breadscrumb breadcrumb">
                <li><a href="/zh">世卫组织网站主页</a><span>/</span></li>
                <li><a href="/zh/health-topics">健康主题</a><span>/</span></li>
                <li class="active">冠状病毒</li>
            </ul>
        </div>

    </div>
    <div class="row" data-sf-element="Row">
        <div id="PageContent_TA51A0481001_Col00" class="sf_colsIn col-md-12" data-sf-element="Column 1" data-placeholder-label="Body content">
            <div id="PageContent_C001_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
                <article class="sf-detail-body-container sf-detail-body-wrapper health-topic--detail dynamic-content dynamic-content__article">
                    <header class="dynamic-content__header dynamic-content__container">

                        <div class="sf-header-image dynamic-content__image dynamic-content__image" data-url="">
                            <div class="inner">
                                <a class="magnific-popup" href="javascript:;" title=" ">
                                    <img sizes="(max-width: 479px) 280px,
                                (max-width: 549px) 440px,
                                (max-width: 768px) 660px,
                                (max-width: 1366px) 1024px,
                                1920px" src="{{asset('pages/who/images/default-source/health-topics/coronavirus/gettyimages-1181575980.jpg')}}" class="single-image" alt="冠状病毒">
                                </a>
                            </div>

                        </div>

                        <div class="dynamic-content__title">
                            <h1 class="dynamic-content__title-text">冠状病毒</h1>
                        </div>
                    </header>

                    <section class="dynamic-content__section dynamic-content__container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="dynamic-content__section-content">

                                    <div class="sf_cols tabWidget health-topic_tabWidget" style="display: block;">
                                        <div class="sf_colsOut flex-clear" data-placeholder-label="Tab wrapper">
                                            <div class="ul-tabs--wrapper">
                                                <ul class="tabs"></ul>
                                            </div>
                                            <div class="sf_colsIn single-tabContent">
                                                <div class="sf_cols singleTabWrapper">
                                                    <div class="sf_colsOut tabHeaderWrapper" data-sf-element="Tab header" data-placeholder-label="Tab header" style="display: none;">
                                                        <div class="sf_colsIn tabHeaderText">
                                                            <div class="sf-content-block content-block">
                                                                Overview
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="sf_colsOut tabContent" data-sf-element="Tab contents" data-placeholder-label="Tab contents">
                                                        <div class="sf_colsIn">
                                                            <p>冠状病毒是一个大型病毒家族，可引起普通感冒乃至中东呼吸综合征（MERS）和严重急性呼吸综合征（SARS）等较严重疾病。新型冠状病毒是以前从未在人类中发现的一种新毒株。</p>
                                                            <div data-sf-element="Tab contents" data-placeholder-label="Tab contents">
                                                                <p>冠状病毒是一种在动物与人类之间传播的人畜共患病毒。详细调查结果显示，严重急性呼吸综合征冠状病毒是从果子狸传到人，中东呼吸综合征冠状病毒是从单峰骆驼传到人。一些已知的冠状病毒在动物中传播，但尚未感染人类。</p>
                                                                <p>感染的常见体征有呼吸道症状、发热、咳嗽、气短和呼吸困难等。在较严重病例中，感染可导致肺炎、严重急性呼吸综合征、肾衰竭，甚至死亡。
                                                                    <br>
                                                                </p>
                                                                <p>预防感染曼延的标准建议包括经常洗手、咳嗽和打喷嚏时遮住口鼻、将肉和蛋类彻底煮熟。避免与任何有咳嗽和打喷嚏等呼吸道疾病症状的人密切接触。</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-md-push-1">
                                <div class="dynamic-content__sidebar">
                                    <div id="dynamic-content__accordion" class="dynamic-content__accordion sf-accordion">
                                        <div class="sf-accordion__panel">
                                            <div class="sf-accordion__title"><a href="javascript:;" class="sf-accordion__trigger-panel">常见问答 <span class="sf-accordion__icon"></span></a></div>
                                        </div>
                                        <div class="sf-accordion__panel">
                                            <div class="sf-accordion__title"><a href="javascript:;" class="sf-accordion__trigger-panel">技术文件 <span class="sf-accordion__icon"></span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                            </div>
                        </div>
                    </section>
                </article>

                <div id="PageContent_C047_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
                    <div class="row" data-sf-element="Row">
                        <div id="PageContent_C056_Col00" class="sf_colsIn col-md-12" data-sf-element="Column 1" data-placeholder-label="Column 1">

                            <div class="list-view highlight-widget background-highlight-widget bg-main has-image">
                                <div class="list-view--item highlight-widget--content">

                                    <div class="inner">
                                        <img sizes="(max-width: 479px) 280vw,
                        (max-width: 549px) 440vw,
                        (max-width: 768px) 660vw,
                        (max-width: 1366px) 1024vw,
                        1920vw" src="{{asset('pages/who/images/default-source/health-topics/coronavirus/coronavirus-2.jpg')}}" class="background-highlight-image">

                                        <div class="sf_colsIn container">
                                            <div class="content">
                                                <div class="info">
                                                    <p class="heading"><span>正在发生的新型冠状病毒（2019-nCoV）疫情</span></p>

                                                    <div class="button">
                                                        <a href="javascript:;" class="">更多信息</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-sf-element="Row">
                        <div id="PageContent_C048_Col00" class="sf_colsIn col-md-12" data-sf-element="Column 1" data-placeholder-label="Column 1">
                            <div class="row" data-sf-element="Row">
                                <div id="PageContent_C045_Col00" class="sf_colsIn col-md-8" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                    <div class="section-heading">

                                        <p>新闻</p>

                                    </div>
                                    <div class="row" data-sf-element="Row">
                                        <div id="PageContent_C060_Col00" class="sf_colsIn col-md-6" data-sf-element="Column 1" data-placeholder-label="Column 1">

                                            <div class="list-view vertical-list">
                                                <div class="list-view--item vertical-list-item vertical-list-item--hightlight-image">
                                                    <a href="javascript:;" class="link-container" aria-label="世卫组织将加快新型冠状病毒的研究和创新工作" role="link">
                                                        <div class="thumb">
                                                            <div class="background-image" style="background-image: url('{{asset('pages/who/images/default-source/health-topics/coronavirus/corona-virus-getty.jpg')}}');"></div>
                                                        </div>

                                                        <div class="info">
                                                            <div class="date">
                                                                <span class="timestamp">2020年2月6日</span>

                                                                <div class="sf-tags-list">
                                                                    <div class="sf-tags-list-item">新闻稿</div>
                                                                </div>
                                                            </div>

                                                            <p class="heading text-underline">世卫组织将加快新型冠状病毒的研究和创新工作</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="PageContent_C060_Col01" class="sf_colsIn col-md-6" data-sf-element="Column 2" data-placeholder-label="Column 2">

                                            <div class="list-view vertical-list">
                                                <div class="list-view--item vertical-list-item vertical-list-item--hightlight-image">
                                                    <a href="javascript:;" class="link-container" aria-label="新型冠状病毒防范和应对全球计划需要6.75亿美元" role="link">
                                                        <div class="thumb">
                                                            <div class="background-image"style="background-image: url('{{asset('pages/who/images/default-source/health-topics/coronavirus/getty-crowd.jpg')}}');"></div>
                                                        </div>

                                                        <div class="info">
                                                            <div class="date">
                                                                <span class="timestamp">2020年2月5日</span>

                                                                <div class="sf-tags-list">
                                                                    <div class="sf-tags-list-item">新闻稿</div>
                                                                </div>
                                                            </div>

                                                            <p class="heading text-underline">新型冠状病毒防范和应对全球计划需要6.75亿美元</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div id="PageContent_C045_Col01" class="sf_colsIn col-md-4" data-sf-element="Column 2" data-placeholder-label="Column 2">
                                    <div class="section-heading">

                                        <p>问答</p>

                                    </div>

                                    <div class="sf-content-block content-block">
                                        <div>
                                            <iframe width="560" height="267" src="https://www.youtube.com/embed/LPOpdbwiaiY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                            <h3><a href="/zh/news-room/q-a-detail/q-a-coronaviruses"></a><a href="/zh/news-room/q-a-detail/q-a-coronaviruses"></a>
<a href="http://terrance.who.int/mediacentre/videos/coronavirus/WHO-PROD_Coronavirus_QA_14JAN2020_en_st_ch.mp4" data-sf-ec-immutable="">世卫组织Maria Van Kerkhove博士针对冠状病毒的解答 →</a>
</h3>
                                            <div data-url="">

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="row" data-sf-element="Row">
                                <div id="PageContent_C018_Col00" class="sf_colsIn col-md-12" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                    <div class="section-heading">

                                        <p>信息图</p>

                                    </div>
                                    <div class="row" data-sf-element="Row">
                                        <div id="PageContent_C049_Col00" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 1" data-placeholder-label="Column 1">

                                            <a href="javascript:;">
                                                <div class="sf-image thumb">
                                                    <img class="lazy" src="{{asset('pages/who/images/default-source/health-topics/coronavirus/1overall073b4171a1334f4a97af61b1360113f7.png')}}" data-image="/images/default-source/health-topics/coronavirus/1overall073b4171a1334f4a97af61b1360113f7.tmb-1920v.png?sfvrsn=4f38434f_2" title="Reduce your risk of coronavirus infection ZH" alt="降低感染冠状病毒的风险">
                                                </div>
                                            </a>

                                        </div>
                                        <div id="PageContent_C049_Col01" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 2" data-placeholder-label="Column 2">

                                            <a href="javascript:;">
                                                <div class="sf-image thumb">
                                                    <img class="lazy" src="{{asset('pages/who/images/default-source/health-topics/coronavirus/2handwashing.png')}}" data-image="/images/default-source/health-topics/coronavirus/2handwashing.tmb-1920v.png?sfvrsn=cf9e093e_3" title="7FoodSafety-Meat_Outbreak" alt="洗手小贴士">

                                                </div>

                                            </a>

                                        </div>
                                        <div id="PageContent_C049_Col02" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 3" data-placeholder-label="Column 3">

                                            <a href="javascript:;">
                                                <div class="sf-image thumb">
                                                    <img class="lazy" src="{{asset('pages/who/images/default-source/health-topics/coronavirus/3handwash-handrub.png')}}" data-image="/images/default-source/health-topics/coronavirus/3handwash-handrub.tmb-1920v.png?sfvrsn=98f0177_2" title="3HandwashHandrub ZH">

                                                </div>

                                            </a>

                                        </div>
                                        <div id="PageContent_C049_Col03" class="sf_colsIn col-sm-6 col-md-3" data-sf-element="Column 4" data-placeholder-label="Column 4">

                                            <a href="javascript:;">
                                                <div class="sf-image thumb">
                                                    <img class="lazy" src="{{asset('pages/who/images/default-source/health-topics/coronavirus/6foodsafety-cuttingboard.png')}}" data-image="/images/default-source/health-topics/coronavirus/6foodsafety-cuttingboard.tmb-1920v.png?sfvrsn=ca55656_2" title="5FoodSafety-ChoppingBoard ZH" alt="注意食品安全">

                                                </div>

                                            </a>

                                        </div>
                                    </div>
                                </div>
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
                <div id="Footer_T75121FDA153_Col01" class="sf_colsIn col-sm-3 col-md-3 centered-on-mobile" data-sf-element="Column 2" data-placeholder-label="Column 2">

                    <div class="sf-content-block content-block">
                        <div></div>

                    </div>

                </div>
            </div>
            <div class="row" data-sf-element="Row">
                <div id="Footer_T75121FDA199_Col00" class="sf_colsIn col-md-12 empty" data-sf-element="Column 1" data-placeholder-label="Column 1"></div>
            </div>

        </div>

        <div class="footer-logo">
            <a href="javascript:;" title="世卫组织网站主页"></a>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <div class="sf-content-block content-block">
                        <div><a href="https://www.who.int/about/privacy/zh/">隐私政策</a></div>

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
                <div class="col-md-4 copyright"> <span>
                            ©
                        </span> 2020

                    <div class="sf-content-block content-block">
                        <div><a href="http://www.who.int/about/copyright/zh/">世卫组织</a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection