<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Devprod Solutions</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/devprod/logo_preto.png" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/fonts/lineicons/font-css/LineIcons.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--====== Image Modal CSS ======-->
    <link rel="stylesheet" href="assets/css/image-modal.css">
</head>

<body>
<!--[if IE]>
<p class="browserupgrade">Você está utilizando um navegador <strong>desatualizado</strong>. Por favor,
    <a href="https://browsehappy.com/">atualize seu navegado</a> para melhorar sua experiência e segurança.</p>
<![endif]-->

<!--====== PRELOADER PART START ======-->

<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PRELOADER PART ENDS ======-->

<!--====== MODAL IMAGE PART START ======-->

<div id="myModal" class="modal">
    <span class="close">×</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

<!--====== MODAL IMAGE PART ENDS ======-->

<!--====== HEADER PART START ======-->

<section class="header_area">
    <div class="header_navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="/">
                            <img src="assets/devprod/cinza_h.png" alt="Devprod Logo" height="51">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="page-scroll" href="#home">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#about">Sobre</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#services">Serviços</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#pricing">Preços</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#blog">Soluções</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#contact">Contatos</a>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header navbar -->

    <div id="home" class="header_hero d-lg-flex align-items-center">
        <div class="hero_shape shape_1">
            <img src="assets/images/shape/shape-1.svg" alt="shape">
        </div><!-- hero shape -->
        <div class="hero_shape shape_2">
            <img src="assets/images/shape/shape-2.svg" alt="shape">
        </div><!-- hero shape -->
        <div class="hero_shape shape_3">
            <img src="assets/images/shape/shape-3.svg" alt="shape">
        </div><!-- hero shape -->
        {{--<div class="hero_shape shape_4">
            <img src="assets/images/shape/shape-4.svg" alt="shape">
        </div><!-- hero shape -->--}}
        <div class="hero_shape shape_6">
            <img src="assets/images/shape/shape-1.svg" alt="shape">
        </div><!-- hero shape -->
        <div class="hero_shape shape_7">
            <img src="assets/images/shape/shape-4.svg" alt="shape">
        </div><!-- hero shape -->
        <div class="hero_shape shape_8">
            <img src="assets/images/shape/shape-3.svg" alt="shape">
        </div><!-- hero shape -->
        <div class="hero_shape shape_9">
            <img src="assets/images/shape/shape-2.svg" alt="shape">
        </div><!-- hero shape -->
        <div class="hero_shape shape_10">
            <img src="assets/images/shape/shape-4.svg" alt="shape">
        </div><!-- hero shape -->
        <div class="hero_shape shape_11">
            <img src="assets/images/shape/shape-1.svg" alt="shape">
        </div><!-- hero shape -->
        <div class="hero_shape shape_12">
            <img src="assets/images/shape/shape-2.svg" alt="shape">
        </div><!-- hero shape -->

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header_hero_content">
                        <h2 class="hero_title wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">Devprod
                            <span>Conciliador</span></h2>
                        <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">Uma aplicação web integrada ao sistema ERP WinThor by TOTVS, projetada para importar e conciliar automaticamente as principais cobranças emitidas na frente de caixa do varejo.</p>
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
                                <a class="main-btn page-scroll" rel="nofollow" href="#pricing">Comprar Agora</a></li>
                        </ul>
                    </div> <!-- header hero content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="header_shape d-none d-lg-block"></div>

        <div class="header_image d-flex align-items-center">
            <div class="image">
                <!--<img class="wow fadeInRightBig" data-wow-duration="2s" data-wow-delay="1.6s" src="assets/images/header-image.svg" alt="Header Image">-->
                <img id="myImg1" class="wow fadeInRightBig myImgClass" data-wow-duration="2s" data-wow-delay="1.6s" src="assets/devprod/devprod_dashboard_branco.png" alt="Devprod Dashboard" style="padding-right: 20px; border-radius: 10px;">
            </div>
        </div> <!-- header image -->
    </div> <!-- header hero -->
</section>

<!--====== HEADER PART ENDS ======-->

<!--====== SERVICES PART START ======-->

<section class="services_area pt-115" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-25">
                    <h5 class="sub_title">Sobre</h5>
                    <h4 class="main_title">Etapas</h4>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-7">
                <div class="single_services text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="services_icon">
                        <i class="lni lni-cloud-upload"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                            <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z"/>
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#/">Importar</a></h3>
                        <p>Importe os arquivos de vendas do SitefGW ou Shipay para posterior processamento.</p>
                    </div>
                </div> <!-- single services -->
            </div>
            <div class="col-lg-4 col-sm-7">
                <div class="single_services text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="services_icon">
                        <i class="lni lni-bulb"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                            <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z"/>
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#/">Aprender</a></h3>
                        <p>Configure o sistema para identificar e classificar automaticamente as cobranças.</p>
                    </div>
                </div> <!-- single services -->
            </div>
            <div class="col-lg-4 col-sm-7">
                <div class="single_services text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                    <div class="services_icon">
                        <i class="lni lni-checkmark-circle"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                            <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z"/>
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#/">Desdobrar</a></h3>
                        <p>Desdobre as prestações, conforme as correspondências previamente estabelecidas.</p>
                    </div>
                </div> <!-- single services -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== SERVICES PART ENDS ======-->

<!--====== ABOUT PART START ======-->

<section id="why" class="about_area pt-115 ">
    <div class="about_image d-flex align-items-end justify-content-end">
        <div class="image">
            <img class="wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s" src="assets/images/about2.svg" alt="about">
        </div>
    </div> <!-- about image -->
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="about_content wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="section_title pb-35">
                        <h5 class="sub_title">Por que nos escolher</h5>
                        <h4 class="main_title">Seu objetivo é nossa conquista</h4>
                    </div> <!-- section title -->
                    <p>Unimos tecnologia avançada e expertise de mercado para transformar dados complexos em insights precisos. Nosso sistema integra processos de produção, importação e análise financeira, facilitando a tomada de decisões e impulsionando o crescimento da sua empresa.</p>
                    <ul class="about_list">
                        <li class="d-flex">
                            <div class="about_check">
                                <i class="lni lni-checkmark-circle"></i>
                            </div>
                            <div class="about_list_content">
                                <p>Integração completa entre sistemas operacionais e financeiros para uma visão unificada do desempenho.</p>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="about_check">
                                <i class="lni lni-checkmark-circle"></i>
                            </div>
                            <div class="about_list_content">
                                <p>Automatização inteligente que reduz erros, otimiza processos e acelera resultados.</p>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="about_check">
                                <i class="lni lni-checkmark-circle"></i>
                            </div>
                            <div class="about_list_content">
                                <p>Suporte especializado e soluções personalizadas para atender às necessidades específicas do seu negócio.</p>
                            </div>
                        </li>
                    </ul>
                </div> <!-- about content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== SERVICES PART START ======-->

<section id="services" class="services_area pt-115 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-25">
                    <h5 class="sub_title">O que fazemos</h5>
                    <h4 class="main_title">Nossas Soluções</h4>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <!-- Módulo Importação SitefGW -->
            <div class="col-lg-4 col-sm-6">
                <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="services_icon">
                        <i class="lni lni-cloud-upload"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                            <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z"/>
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#/">Importação SitefGW</a></h3>
                        <p>Importe os arquivos de transações extraídos do SitefGW, categorizando as transações com conciliação automática.</p>
                    </div>
                </div> <!-- single services -->
            </div>

            <!-- Validação de Sangrias -->
            <div class="col-lg-4 col-sm-6">
                <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                    <div class="services_icon">
                        <i class="lni lni-money-protection"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                            <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z"/>
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#/">Validação de Sangrias</a></h3>
                        <p>Realize a validação automatizada das sangrias, comparando os totais do caixa e sinalizando discrepâncias para ajustes.</p>
                    </div>
                </div> <!-- single services -->
            </div>

            <!-- Edição de Cobranças -->
            <div class="col-lg-4 col-sm-6">
                <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s">
                    <div class="services_icon">
                        <i class="lni lni-pencil"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                            <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z"/>
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#/">Edição de Cobranças</a></h3>
                        <p>Mapeie as informações dos cartões e realize o desdobramento correto das cobranças registradas no ERP WinThor.</p>
                    </div>
                </div> <!-- single services -->
            </div>

            <!-- Módulo Importação Shipay -->
            <div class="col-lg-4 col-sm-6">
                <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="services_icon">
                        <i class="lni lni-layers"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                            <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z"/>
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#/">Importação Shipay</a></h3>
                        <p>Importe arquivos XLSX da Shipay, categorizando as transações com conciliação automática.</p>
                    </div>
                </div> <!-- single services -->
            </div>

            <!-- Suporte e Atualizações -->
            <div class="col-lg-4 col-sm-6">
                <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                    <div class="services_icon">
                        <i class="lni lni-notepad"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                            <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z"/>
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#/">Suporte</a></h3>
                        <p>Conte com suporte especializado e atualizações remotas para garantir a continuidade e segurança do sistema.</p>
                    </div>
                </div> <!-- single services -->
            </div>

            <!-- Gestão Financeira Integrada -->
            <div class="col-lg-4 col-sm-6">
                <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s">
                    <div class="services_icon">
                        <i class="lni lni-bar-chart"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                            <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z"/>
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#/">Gestão Financeira</a></h3>
                        <p>Otimize seus processos financeiros com conciliação automática e gestão precisa das transações.</p>
                    </div>
                </div> <!-- single services -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


<!--====== SERVICES PART ENDS ======-->

<!--====== WORK PART START ======-->

{{--<section id="work" class="work_area pt-115 pb-120">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <div class="section_title text-center pb-25">
                    <h5 class="sub_title">You are using free lite version of Plain</h5>
                    <h4 class="main_title">Please purchase full version to get all pages, features and permission to remove footer credits.</h4>
                </div> &lt;!&ndash; section title &ndash;&gt;
                <a class="main-btn" href="https://rebrand.ly/plain-ud" rel="nofollow">Purchase Now</a>
            </div>
        </div> &lt;!&ndash; row &ndash;&gt;
    </div> &lt;!&ndash; container &ndash;&gt;
</section>--}}

<!--====== WORK PART ENDS ======-->

<!--====== PRICING PLAN PART START ======-->

<section id="pricing" class="pricing_area pt-115 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-25">
                    <h5 class="sub_title">Planos de Preços</h5>
                    <h4 class="main_title">Escolha o Seu Plano</h4>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="pricing_menu mt-30 pb-30">
                    <ul class="nav justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="active" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="true">Mensal</a>
                        </li>
                        <!--<li class="nav-item">
                            <a id="yearly-tab" data-toggle="tab" href="#yearly" role="tab" aria-controls="yearly" aria-selected="false">Anual</a>
                        </li>-->
                    </ul>
                </div> <!-- pricing menu -->

                <div class="pricing_content_area">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-7 col-sm-9">
                                    <div class="single_pricing text-center mt-30 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                        <div class="pricing_title">
                                            <h4 class="title">Starter</h4>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                                <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f"/>
                                            </svg>
                                        </div>
                                        <div class="pricing_content">
                                            <span class="pricing_price">R$300</span>
                                            <!--<p>Ideal para empresas com 1 filial. Conte com recursos essenciais para gerenciamento e controle operacional de forma eficiente.</p>-->
                                            <ul class="about_list" style="margin-top: 15px">
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-checkmark-circle" style="color: #F94F4F"></i> 1 Filial
                                                    </p></li>
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-checkmark-circle" style="color: #F94F4F"></i> Conciliação de Cartões
                                                    </p></li>
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-checkmark-circle" style="color: #F94F4F"></i> Conciliação de PIX's
                                                    </p></li>
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-checkmark-circle" style="color: #F94F4F"></i> Conciliação de Sangrias
                                                    </p></li>
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-checkmark-circle" style="color: #F94F4F"></i> Envio de Notificações
                                                    </p></li>
                                                <li style="visibility: hidden">
                                                    <p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-rocket" style="color: #F94F4F"></i> Conciliação Automatica
                                                    </p></li>
                                            </ul>
                                            <a href="#contact" class="main-btn">Escolher Plano</a>
                                        </div>
                                    </div>  <!-- single pricing -->
                                </div>

                                <div class="col-lg-4 col-md-7 col-sm-9">
                                    <div class="single_pricing text-center mt-30 active wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1s">
                                        <div class="pricing_title">
                                            <h4 class="title">Standard</h4>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                                <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f"/>
                                            </svg>
                                        </div>
                                        <div class="pricing_content">
                                            <span class="pricing_price"><h4 style="text-decoration-line: line-through; display: inline-block; color: #F94F4F">R$300</h4> R$250 🚀</span>
                                            <!--<p>Recomendado para empresas com 2 ou 3 filiais. Oferece funcionalidades ampliadas para um controle operacional mais robusto.</p>-->
                                            <ul class="about_list" style="margin-top: 15px">
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-checkmark-circle" style="color: #F94F4F"></i> 2 a 3 Filiais
                                                    </p></li>
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-checkmark-circle" style="color: #F94F4F"></i> Conciliação de Cartões
                                                    </p></li>
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-checkmark-circle" style="color: #F94F4F"></i> Conciliação de PIX's
                                                    </p></li>
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-checkmark-circle" style="color: #F94F4F"></i> Conciliação de Sangrias
                                                    </p></li>
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-checkmark-circle" style="color: #F94F4F"></i> Envio de Notificações
                                                    </p></li>
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-rocket" style="color: #F94F4F"></i> Conciliação Automatica
                                                    </p></li>
                                            </ul>
                                            <a href="#contact" class="main-btn">Escolher Plano</a>
                                        </div>
                                    </div>  <!-- single pricing -->
                                </div>

                                <div class="col-lg-4 col-md-7 col-sm-9">
                                    <div class="single_pricing text-center mt-30 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.5s">
                                        <div class="pricing_title">
                                            <h4 class="title">Premium</h4>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                                <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f"/>
                                            </svg>
                                        </div>
                                        <div class="pricing_content">
                                            <span class="pricing_price"><h4 style="text-decoration-line: line-through; display: inline-block; color: #F94F4F">R$250</h4> R$200 🔥</span>
                                            <!--<p>Perfeito para empresas com mais de 3 filiais. Aproveite uma solução completa com recursos avançados e suporte especializado.</p>-->
                                            <ul class="about_list" style="margin-top: 15px">
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-checkmark-circle" style="color: #F94F4F"></i> +3 Filiais
                                                    </p></li>
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-checkmark-circle" style="color: #F94F4F"></i> Conciliação de Cartões
                                                    </p></li>
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-checkmark-circle" style="color: #F94F4F"></i> Conciliação de PIX's
                                                    </p></li>
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-checkmark-circle" style="color: #F94F4F"></i> Conciliação de Sangrias
                                                    </p></li>
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-checkmark-circle" style="color: #F94F4F"></i> Envio de Notificações
                                                    </p></li>
                                                <li><p style="text-align: left; margin-top: 0">
                                                        <i class="lni lni-rocket" style="color: #F94F4F"></i> Conciliação Automatica
                                                    </p></li>
                                            </ul>
                                            <a href="#contact" class="main-btn">Escolher Plano</a>
                                        </div>
                                    </div>  <!-- single pricing -->
                                </div>
                            </div> <!-- row -->
                        </div>
                        <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-7 col-sm-9">
                                    <div class="single_pricing text-center mt-30">
                                        <div class="pricing_title">
                                            <h4 class="title">Starter</h4>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                                <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f"/>
                                            </svg>
                                        </div>
                                        <div class="pricing_content">
                                            <span class="pricing_price">$99.00</span>
                                            <p>Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos accusam et justo duo dolores </p>
                                            <a href="#/" class="main-btn">Choose Plan</a>
                                        </div>
                                    </div>  <!-- single pricing -->
                                </div>

                                <div class="col-lg-4 col-md-7 col-sm-9">
                                    <div class="single_pricing text-center mt-30 active">
                                        <div class="pricing_title">
                                            <h4 class="title">Standard</h4>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                                <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f"/>
                                            </svg>
                                        </div>
                                        <div class="pricing_content">
                                            <span class="pricing_price">$199.00</span>
                                            <p>Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos accusam et justo duo dolores </p>
                                            <a href="#/" class="main-btn">Choose Plan</a>
                                        </div>
                                    </div>  <!-- single pricing -->
                                </div>

                                <div class="col-lg-4 col-md-7 col-sm-9">
                                    <div class="single_pricing text-center mt-30">
                                        <div class="pricing_title">
                                            <h4 class="title">Premium</h4>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                                <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f"/>
                                            </svg>
                                        </div>
                                        <div class="pricing_content">
                                            <span class="pricing_price">$499.00</span>
                                            <p>Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos accusam et justo duo dolores </p>
                                            <a href="#/" class="main-btn">Choose Plan</a>
                                        </div>
                                    </div>  <!-- single pricing -->
                                </div>
                            </div> <!-- row -->
                        </div>
                    </div>
                </div> <!-- pricing menu -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PRICING PLAN PART ENDS ======-->

<!--====== TEAM PART START ======-->

{{--<section id="team" class="team_area pt-115 pb-120">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <div class="section_title text-center pb-25">
                    <h5 class="sub_title">You are using free lite version of Plain</h5>
                    <h4 class="main_title">Please purchase full version to get all pages, features and permission to remove footer credits.</h4>
                </div> &lt;!&ndash; section title &ndash;&gt;
                <a class="main-btn" href="https://rebrand.ly/plain-ud" rel="nofollow">Purchase Now</a>
            </div>
        </div> &lt;!&ndash; row &ndash;&gt;
    </div> &lt;!&ndash; container &ndash;&gt;
</section>--}}

<!--====== TEAM PART ENDS ======-->

<!--====== BLOG PART START ======-->

<section id="blog" class="blog_area pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-25">
                    <h5 class="sub_title">Soluções</h5>
                    <h4 class="main_title">Nossos Projetos</h4>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7">
                <div class="single_blog mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="blog_image">
                        <img id="myImg2" class="myImgClass" src="assets/devprod/sentinela_dashboard.png" alt="Devprod Sentinela">
                    </div>
                    <div class="blog_content">
                        <ul class="blog_meta d-flex justify-content-between">
                            <li><a href="#/">Devprod Sentinela</a></li>
                            <li>15 Mar 2024</li>
                        </ul>
                        <h3 class="blog_title">
                            <a href="#/">Monitore, audite e otimize seu sistema diariamente com precisão e eficiência</a>
                        </h3>
                        <a href="#/" class="more">Ler Mais</a>
                    </div>
                </div> <!-- row -->
            </div>
            <div class="col-lg-4 col-md-7">
                <div class="single_blog mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                    <div class="blog_image">
                        <img id="myImg3" class="myImgClass" src="assets/devprod/devprod_dashboard_preto.png" alt="Devprod Conciliador">
                    </div>
                    <div class="blog_content">
                        <ul class="blog_meta d-flex justify-content-between">
                            <li><a href="#/">Devprod Conciliador</a></li>
                            <li>10 Nov 2024</li>
                        </ul>
                        <h3 class="blog_title">
                            <a href="#/"> Simplifique a conciliação de transações em minutos com precisão e eficiência</a>
                        </h3>
                        <a href="#/" class="more">Ler Mais</a>
                    </div>
                </div> <!-- row -->
            </div>
            <div class="col-lg-4 col-md-7">
                <div class="single_blog mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.9s">
                    <div class="blog_image">
                        <img id="myImg4" class="myImgClass" src="assets/devprod/producao_dashboard_preto.png" alt="Devprod Produção">
                    </div>
                    <div class="blog_content">
                        <ul class="blog_meta d-flex justify-content-between">
                            <li><a href="#/">Devprod Produção</a></li>
                            <li>15 Fev 2025</li>
                        </ul>
                        <h3 class="blog_title">
                            <a href="#/">Flexibilidade nas produções, otimizando o uso de matéria-prima</a></h3>
                        <a href="#/" class="more">Ler Mais</a>
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== BLOG PART ENDS ======-->

<!--====== CONTACT PART START ======-->

<section id="contact" class="contact_area pt-70 pb-120">
    <div class="contact_image d-flex align-items-center justify-content-end">
        <div class="image">
            <img class="wow fadeInLeftBig" data-wow-duration="2s" data-wow-delay="0.4s" src="assets/images/contact2.svg" alt="about">
        </div>
    </div> <!-- about image -->

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="contact_wrapper mt-45 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s">
                    <div class="section_title pb-15">
                        <h5 class="sub_title">Contato</h5>
                        <h4 class="main_title">Entre em Contato</h4>
                        <p>Estamos aqui para ajudar! Entre em contato conosco para saber mais sobre nossos serviços, tirar dúvidas ou discutir oportunidades de colaboração. Sua mensagem é muito importante para nós.</p>
                    </div> <!-- section title -->

                    <div class="contact_form">
                        <form id="contact-form" action="/email" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input name="name" type="text" placeholder="Nome" required>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input name="email" type="email" placeholder="Email" required>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <textarea name="text" placeholder="Mensagem" required></textarea>
                                    </div> <!-- single form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <button class="main-btn" type="submit">Enviar</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact form -->
                </div> <!-- contact wrapper -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->

<!--====== FOOTER PART START ======-->

<footer id="footer" class="footer_area">
    <div class="container">
        <div class="footer_widget pt-70 pb-120">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="footer_about mt-50">
                        <div class="footer_logo">
                            <a href="#"><img src="assets/devprod/branco_h.png" alt="Devprod Logo"></a>
                        </div>
                        <div class="footer_content font-italic">
                            <p style="text-align: center">Projetar, construir e entregar mais rápido do que nunca.</p>
                        </div>
                    </div> <!-- footer about -->
                </div>
                <div class="col-lg-5 col-md-6">
                    <!--<div class="footer_link_wrapper d-flex flex-wrap">
                        <div class="footer_link mt-50">
                            <h2 class="footer_title">Links rápidos</h2>
                            <ul class="link">
                                <li><a href="#/">Empresa</a></li>
                                <li><a href="#/">Política de privacidade</a></li>
                                <li><a href="#/">Sobre</a></li>
                            </ul>
                        </div> &lt;!&ndash; footer link &ndash;&gt;
                        <div class="footer_link mt-50">
                            <h2 class="footer_title">Recursos</h2>
                            <ul class="link">
                                <li><a href="#/">Suporte</a></li>
                                <li><a href="#/">Suporte</a></li>
                                <li><a href="#/">Termos</a></li>
                            </ul>
                        </div> &lt;!&ndash; footer link &ndash;&gt;
                    </div>--> <!-- footer link wrapper -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer_subscribe mt-50">
                        <h2 class="footer_title">Newsletter</h2>
                        <div class="subscribe_form text-right">
                            <form action="#/">
                                <input type="text" placeholder="Digite o email">
                                <button class="main-btn">Inscrever-se</button>
                            </form>
                        </div>
                    </div> <!-- footer subscribe -->
                </div>
            </div> <!-- row -->
        </div> <!-- footer widget -->
        <div class="footer_copyright d-sm-flex justify-content-between">
            <div class="footer_social text-center">
                <ul class="social">
                    <li><a href="#/"><i class="lni lni-facebook-filled" target="_blank"></i></a></li>
                    <li><a href="#/"><i class="lni lni-twitter-filled" target="_blank"></i></a></li>
                    <li>
                        <a href="https://www.instagram.com/devprodsolutions/" target="_blank"><i class="lni lni-instagram-original"></i></a>
                    </li>
                    <li><a href="#/"><i class="lni lni-linkedin-original" target="_blank"></i></a></li>
                </ul>
            </div> <!-- footer social -->
            <div class="footer_copyright_content text-center">
                <p>
                    <a href="mailto:comercial@devprod.com.br" target="_blank" rel="nofollow" style="color: white">comercial@devprod.com.br</a>
                </p>
            </div> <!-- footer copyright content -->
        </div> <!-- footer copyright -->
    </div> <!-- container -->
</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->

<!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">

                </div>
            </div>
        </div>
    </section>
-->

<!--====== PART ENDS ======-->


<!--====== Jquery js ======-->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--====== Scrolling Nav js ======-->
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/scrolling-nav.js"></script>

<!--====== Wow js ======-->
<script src="assets/js/wow.min.js"></script>

<!--====== Main js ======-->
<script src="assets/js/main.js"></script>

@session('success')
<script>
    alert('Mensagem enviada com sucesso! Em breve entraremos em contato.');
</script>
@endsession

<script>
    var modal = document.getElementById('myModal');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");

    var images = document.querySelectorAll('[id^="myImg"]');

    images.forEach(function(img) {
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            modalImg.alt = this.alt;
            captionText.innerHTML = this.alt;
        };
    });

    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
        modal.style.display = "none";
    };
</script>

</body>

</html>