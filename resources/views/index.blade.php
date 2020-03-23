@extends('layouts.home')

@section('content')
    
    <header>
        <div id="sf-top-header" class="sf-top-header top-header">
            <div class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
                <div id="TopHeader_TD9F2A204012_Col00" class="sf_colsIn container empty" data-sf-element="Container" data-placeholder-label="Container"></div>    
                <div class="row" data-sf-element="Row">
                    <div class="sf_colsIn col-md-4" data-sf-element="Geo Navigation" data-placeholder-label="Geo Navigation"></div>
                    <div class="sf_colsIn col-md-8" data-sf-element="Language Selector &amp; Search" data-placeholder-label="Language Selector &amp; Search">
                        @php $locale = session()->get('locale'); @endphp
                        <div class="language-selector language-selector-header">
                            <ul class="sf-lang-selector list-inline">
                                <li>
                                    <a data-available-culture="zh" href="{{route('lang', 'zh')}}" class="@if($locale == 'zh') selected @endif header" style="display: inline-block;">中文</a>
                                </li>
                                <li>
                                    <a data-available-culture="en" href="{{route('lang', 'en')}}" class="@if($locale == 'en') selected @endif header" style="display: inline-block;">English</a>
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
                        <div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed" style="outline: none;"><span class="slicknav_menutxt"></span><span class="slicknav_icon slicknav_no-text"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a>
                            <ul class="slicknav_nav slicknav_hidden" style="display: none;" aria-hidden="true" role="menu">                                
                                <li class="slicknav_addition sf-lang-selector slicknav_collapsed slicknav_parent">
                                    <ul class="slicknav_hidden">
                                        <li>
                                            <a href="{{route('lang', 'zh')}}" class="@if($locale == 'zh') selected @endif header" style="display: inline-block;">中文</a>
                                        </li>
                                        <li class="selected">
                                            <a href="{{route('lang', 'en')}}" class="@if($locale == 'en') selected @endif header" style="display: inline-block;">English</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="home"><a href="/" target="_self" role="menuitem" tabindex="-1">{{__('page.home')}}</a></li>
                                <li class=""><a href="javascript:;" target="_self" tabindex="-1">{{__('page.health_topics')}}</a></li>
                                <li class=""><a href="{{route('pos')}}" target="_self" tabindex="-1">{{__('page.pre_order')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- logo:off -->
        <div id="navigationToScrape" class="navigation attached" style="position: relative !important;">
            <div class="row navWrapper" data-sf-element="Row">
                <div class="nav-container">
                    <!--Main desktop navigation:on-->
                    <ul class="nav" style="display: block;">
                        <li class=""><a href="/" target="_self">{{__('page.home')}}</a></li>
                        <li class="" style="padding: 0 40px;"><a href="javascript:;" target="_self">{{__('page.health_topics')}}</a></li>
                        <li class="" style="padding: 0 40px;"><a href="{{route('pos')}}" target="_self">{{__('page.pre_order')}}</a></li>
                    </ul>
                    <!--Main desktop navigation:off-->
                </div>

                <ul class="nav-mobile" style="display: none;">
                    <li class="home"><a href="/" target="_self">{{__('page.home')}}</a></li>
                    <li class=""><a href="javascript:;" target="_self">{{__('page.health_topics')}}</a></li>
                    <li class=""><a href="{{route('pos')}}" target="_self">{{__('page.pre_order')}}</a> </li>
                </ul>
            </div>
        </div>
    </header>

    @if ($locale == 'zh')
        <section class="sf-content content">
            <div id="PageContent_TA51A0481002_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
                <div>
                    <ul class="sf-breadscrumb breadcrumb">
                        <li><a href="/zh">主页</a><span>/</span></li>
                        <li><a href="/zh">健康知识</a><span>/</span></li>
                        <li class="active">新冠状病毒</li>
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
                                            <img src="{{asset('pages/who/images/default-source/health-topics/coronavirus/gettyimages-1181575980.jpg')}}" class="single-image" alt="冠状病毒">
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
                                                <img src="{{asset('pages/who/images/default-source/health-topics/coronavirus/coronavirus-2.jpg')}}" class="background-highlight-image">
        
                                                <div class="sf_colsIn container">
                                                    <div class="content">
                                                        <div class="info">
                                                            <p class="heading"><span>正在发生的新型冠状病毒（2019-nCoV）疫情</span></p>
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
                            </div>
                        </div>
                        <div class="col-md-4">    
                            <div class="social-share--add-this follow-us--footer">
                                <div class="addthis_inline_follow_toolbox">
                                    <div id="atftbx19" class="at-follow-tbx-element addthis-smartlayers addthis-animated at4-show">
                                        <p><span></span></p>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-4 copyright"> <span>
                            ©</span> 2020
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    @else
        <section class="sf-content content">
            <div id="PageContent_TA51A0481002_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
                <div>
                    <ul class="sf-breadscrumb breadcrumb">
                        <li><a href="javascript:;">{{__('page.home')}}</a><span>/</span></li>
                        <li><a href="javascript:;">{{__('page.health_topics')}}</a><span>/</span></li>
                        <li class="active">{{__('page.coronavirus')}}</li>
                    </ul>
                </div>
                <!--/noindex-->
                <!--startindex-->
                <article class="sf-detail-body-container sf-detail-body-wrapper health-topic--detail dynamic-content dynamic-content__article">
                    <header class="dynamic-content__header dynamic-content__container">

                        <div class="sf-header-image dynamic-content__image dynamic-content__image" data-url="">
                            <div class="inner">
                                <a class="magnific-popup" href="javascript:;" title="Getty ">
                                    <img src="{{asset('pages/who/images/default-source/health-topics/coronavirus/gettyimages-1181575980.jpg')}}" class="single-image" alt="Coronavirus">
                                </a>
                            </div>

                            <div class="sf-image-credit" style="display: block;">

                                <div class="sf-image-credit__content">
                                    <div class="sf-image-credit__inner">
                                        Getty
                                    </div>
                                </div>

                                <div class="sf-image-credit__label">
                                    <span class="sf-image-credit__copyright">©</span>
                                    <span class="sf-image-credit__text">Credits </span>

                                    <i class="icon plus-icon"></i>
                                </div>
                            </div>
                        </div>

                        <div class="dynamic-content__title">
                            <h1 class="dynamic-content__title-text">Coronavirus</h1>
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
                                                            <p>&nbsp;</p>
                                                            <p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV)&nbsp;and Severe Acute Respiratory Syndrome (SARS-CoV). </p>
                                                            <p><a href="javascript:;">Coronavirus disease (COVID-19)</a> is a new strain that was discovered in 2019 and has not been previously identified in humans.</p>
                                                            <p>Coronaviruses are zoonotic, meaning they are transmitted between animals and people. &nbsp;Detailed investigations found that SARS-CoV was transmitted from civet cats to humans and MERS-CoV from dromedary camels to humans. Several known coronaviruses are circulating in animals that have not yet infected humans.<span style="font-size:13px;">&nbsp;</span></p>
                                                            <p><span style="background-color:transparent;text-align:inherit;text-transform:inherit;white-space:inherit;word-spacing:normal;caret-color:auto;">Common signs of infection include respiratory symptoms, fever, cough, shortness of breath and breathing difficulties. In more severe cases, infection can cause pneumonia, severe acute respiratory syndrome, kidney failure and even death.&nbsp;</span></p>
                                                            <p>Standard recommendations to prevent infection spread include regular hand washing, covering mouth and nose when coughing and sneezing, thoroughly cooking meat and eggs. Avoid close contact with anyone showing symptoms of respiratory illness such as coughing and sneezing.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-md-push-1"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                            </div>
                        </div>
                    </section>
                </article>

            </div>
            <div class="row" data-sf-element="Row">
                <div id="PageContent_TA51A0481001_Col00" class="sf_colsIn col-md-12" data-sf-element="Column 1" data-placeholder-label="Body content">
                    <div id="PageContent_C001_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">

                        <div class="hero-image--wrapper hero-image--low-wrapper low has-caption" data-url="">

                            <div class="inner responsive-background-image low-1308687178 bg-center-position" style="background-image: url('https://www.who.int/images/default-source/health-topics/coronavirus/gettyimages-943428252.jpg');">
                                <div class="sf_colsIn container">
                                    <div class="hero-image--content bg-text-light text-left">
                                        <p class="title"><span>Coronavirus disease (COVID-19) outbreak</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="sf-image-credit desktop-medium" style="display: block;">

                                <div class="sf-image-credit__content">
                                    <div class="sf-image-credit__inner">
                                        Getty images
                                    </div>
                                </div>

                                <div class="sf-image-credit__label">
                                    <span class="sf-image-credit__copyright">©</span>
                                    <span class="sf-image-credit__text">Credits </span>

                                    <i class="icon plus-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div id="PageContent_C047_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
                            <div class="row" data-sf-element="Row">
                                <div id="PageContent_C045_Col00" class="sf_colsIn col-md-8" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                    <div class="section-heading">

                                        <p>News</p>

                                    </div>

                                    <div class="list-view vertical-list">
                                        <div class="list-view--item vertical-list-item vertical-list-item--hightlight-image">
                                            <a href="javascript:;" class="link-container" aria-label="WHO, UN Foundation and partners launch first-of-its-kind COVID-19 Solidarity Response Fund" role="link">
                                                <div class="thumb">
                                                    <div class="background-image" data-image="/images/default-source/health-topics/coronavirus/map1.tmb-1920v.png?Culture=en&amp;sfvrsn=be9eff03_2" style="background-image: url('{{asset("pages/who/images/default-source/health-topics/coronavirus/map1.png")}}');"></div>
                                                </div>

                                                <div class="info">
                                                    <div class="date">
                                                        <span class="timestamp">13 March 2020</span>

                                                        <div class="sf-tags-list">
                                                            <div class="sf-tags-list-item">News release</div>
                                                        </div>
                                                    </div>

                                                    <p class="heading text-underline">WHO, UN Foundation and partners launch first-of-its-kind COVID-19 Solidarity Response Fund</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div id="PageContent_C045_Col01" class="sf_colsIn col-md-4" data-sf-element="Column 2" data-placeholder-label="Column 2">
                                    <div class="section-heading">    
                                        <p>Questions and answers</p>    
                                    </div>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/OZcRD9fV7jo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
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
                            <div class="sf-content-block content-block"></div>
                        </div>
                        <div class="col-md-4">    
                            <div class="social-share--add-this follow-us--footer">
                                <div class="addthis_inline_follow_toolbox">
                                    <div id="atftbx19" class="at-follow-tbx-element addthis-smartlayers addthis-animated at4-show">
                                        <p><span></span></p>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="col-md-4 copyright">
                            <span>©</span> 2020
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    @endif

@endsection