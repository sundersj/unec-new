@extends('website.layouts.websiteNew')

@section("content")
    <link href="{{ asset('frontend/assets/css/views_website/index.css') }}" rel="stylesheet" type="text/css">

    <main>
        {{--        <!-- hero-section -->--}}
        {{--        <section class="hero">--}}
        {{--            <div class="container">--}}
        {{--            </div>--}}
        {{--        </section>--}}
        <div class="banner-area ">
            <!--Banner Item Start-->
            <div class="video-main">
                <div class="video-overlay"></div>
                <div class="video-container">
                    <iframe class="video-iframe"
                            src="https://www.youtube.com/embed/wFWxuVU5z_k?controls=0&mute=1&autoplay=1&playlist=wFWxuVU5z_k&loop=1"
                            frameborder="0"></iframe>
                    <div id="text">
                        <div class="container edit" rel="content" field="hero-text">
                            <div class="banner-title text-left ">
                                <h5>UNEC-lə xəyallarınıza doğru hər <br> gün bir addım yaxınlaşın</h5>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!--Banner Item End-->
        </div>
        <section class="mobile-slider">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-interval="false">
                    <div class="carousel-inner" style="height: 335px;">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-6">
                                    <div class="content">
                                        <img class="d-block" src="assets/images/unec-2-section/Rectangle 11.png"
                                             alt="item-image">
                                        <p>UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris
                                            mərkəzidir.</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="content">
                                        <img class="d-block" src="assets/images/unec-2-section/Rectangle 12.png"
                                             alt="item-image">
                                        <p>UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris
                                            mərkəzidir.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-6">
                                <div class="content">
                                    <img class="d-block" src="assets/images/unec-2-section/Rectangle 13.png"
                                         alt="item-image">
                                    <p>UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris mərkəzidir.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            2
                        </div>
                        <div class="carousel-item">
                            4
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- unec-section -->
        <section class="unec">
            <div class="container">
                <div class="unec-group">
                    <div class="row">
                        <div class="card">
                            <img src="/assets/images/unec-group/Vector.svg" alt="icon">
                            <h2>Müəllİm KABİNETİ</h2>
                        </div>
                        <div class="card">
                            <img src="/assets/images/unec-group/Frame.svg" alt="icon">
                            <h2>tələbə KABİNETİ</h2>
                        </div>
                        <div class="card">
                            <img src="/assets/images/unec-group/Vector (1).svg" alt="icon">
                            <h2>Fakültələr</h2>
                        </div>
                        <div class="card">
                            <img src="/assets/images/unec-group/Vector (2).svg" alt="icon">
                            <h2>kafedralar</h2>
                        </div>
                        <div class="card">
                            <img src="/assets/images/unec-group/Frame (1).svg" alt="icon">
                            <h2>İxtİsaslar</h2>
                        </div>
                        <div class="card">
                            <img src="/assets/images/unec-group/Frame (2).svg" alt="icon">
                            <h2>əməkdaşlar</h2>
                        </div>
                        <div class="card hidden">
                            <img src="/assets/images/unec-group/Frame (3).svg" alt="icon">
                            <h2>Karyera mərkəzİ</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- unec-2-section -->
        <section class="unec-2">
            <div class="container">
                <div class="row">
                    <div class="content-col col-4">
                        <h2>UNEC - GƏLƏCƏYİN UNİVERSİTETİ</h2>
                        <p style="opacity: 45%;">UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris
                            mərkəzidir.
                            Universitetdə tədris prosesi
                            və
                            kadr
                            hazırlığı Amerika və Avropa təhsil sisteminə uyğundur.</p>
                        <p style="opacity: 45%;">İxtisaslar bakalavriat, magistratura və doktorantura təhsil pillələri
                            üzrə
                            azərbaycan, ingilis, rus və
                            türk
                            dillərində
                            tədris edilir.</p>
                        <p style="opacity: 45%;">Tələbələr universiteti iki və daha çox ixtisas üzrə (dual major) bitirə
                            və
                            müxtəlif
                            mübadilə
                            proqramlarında
                            iştirak edə
                            bilərlər.</p>
                        <p style="opacity: 62%;"><b>Davamlı inkişaf yolunda bizimlə birgə addımlayın!
                                Gələcək hədəflərimizə birlikdə nail olaq!</b></p>
                        <div style="margin-top: 2rem;">
                            <span>UNEC REKTORU</span>
                            <span>PROF. ƏDALƏT MURADOV</span>
                        </div>
                    </div>
                    <div class="col-8" style="padding: 0 0 0 1rem;">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-interval="false">
                            <div class="carousel-inner" style="height: 400px;">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="content">
                                                <img class="d-block" src="assets/images/unec-2-section/Rectangle 11.png"
                                                     alt="item-image">
                                                <p>UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris
                                                    mərkəzidir.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="content">
                                                <img class="d-block" src="assets/images/unec-2-section/Rectangle 12.png"
                                                     alt="item-image">
                                                <p>UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris
                                                    mərkəzidir.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="content">
                                                <img class="d-block" src="assets/images/unec-2-section/Rectangle 13.png"
                                                     alt="item-image">
                                                <p>UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris
                                                    mərkəzidir.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">2
                                </div>
                                <div class="carousel-item">
                                    2
                                </div>
                                <div class="carousel-item">
                                    4
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- rəqəmsal-section -->
        <section class="rəqəmsal">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-2">
                        <blockquote>
                            “Rəqəmsal iqtisadiyyat: müasir çağırışlar və real imkanlar” mövzusunda II beynəlxalq
                            konfrans
                        </blockquote>
                        <span class="d-none d-lg-block">Bütün bölmələr</span>
                    </div>
                    <div class="card-group col-12 col-lg-10">
                        <div id="myCarousel" class="carousel slide w-100" data-interval="false">
                            <div class="carousel-inner w-100" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <img class="card-img-top"
                                                 src="assets/images/rəqəmsal-section/Rectangle 14.png"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <span>Fakültə</span>
                                                <p class="card-text"><a href="#">
                                                        UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris
                                                        mərkəzidir.
                                                    </a>
                                                </p>
                                                <span>Aprel 04, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <img class="card-img-top"
                                                 src="assets/images/rəqəmsal-section/Rectangle 14 (1).png"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <span>Fakültə</span>
                                                <p class="card-text"><a href="#">
                                                        UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris
                                                        mərkəzidir.
                                                    </a>
                                                </p>
                                                <span>Aprel 04, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <img class="card-img-top"
                                                 src="assets/images/rəqəmsal-section/Rectangle 14 (2).png"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <span>Fakültə</span>
                                                <p class="card-text"><a href="#">
                                                        UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris
                                                        mərkəzidir.
                                                    </a>
                                                </p>
                                                <span>Aprel 04, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card">
                                            <img class="card-img-top"
                                                 src="assets/images/rəqəmsal-section/Rectangle 14 (3).png"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <span>Fakültə</span>
                                                <p class="card-text"><a href="#">
                                                        UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris
                                                        mərkəzidir.
                                                    </a>
                                                </p>
                                                <span>Aprel 04, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>
                        </div>
                        <span class="d-block d-lg-none ml-auto">Bütün bölmələr</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Xəbərlər-section -->
        <section class="xəbərlər">
            <div class="container">
                <div class="title">
                    <div>
                        <h2>Xəbərlər</h2>
                        <a href="/news"> <span>Bütün xəbərlər</span></a>

                    </div>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Rubrika</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="card-group">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                        <div class="card">
                                            <img class="card-img-top"
                                                 src="assets/images/Xəbərlər-section/Rectangle 12.png"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <span>Fakültə</span>
                                                <p class="card-text"><a href="/single-news">
                                                        UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris
                                                        mərkəzidir.
                                                    </a>
                                                </p>
                                                <span>Aprel 04, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="card">
                                            <img class="card-img-top"
                                                 src="assets/images/Xəbərlər-section/Rectangle 12.png"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <span>Fakültə</span>
                                                <p class="card-text"><a href="/single-news">
                                                        UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris
                                                        mərkəzidir.
                                                    </a>
                                                </p>
                                                <span>Aprel 04, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="card">
                                            <img class="card-img-top"
                                                 src="assets/images/Xəbərlər-section/Rectangle 12.png"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <span>Fakültə</span>
                                                <p class="card-text"><a href="/single-news">
                                                        UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris
                                                        mərkəzidir.
                                                    </a>
                                                </p>
                                                <span>Aprel 04, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="card">
                                            <img class="card-img-top"
                                                 src="assets/images/Xəbərlər-section/Rectangle 12.png"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <span>Fakültə</span>
                                                <p class="card-text"><a href="/single-news">UNEC regionda iqtisad elmini dərindən
                                                        öyrədən fundamental
                                                        tədris
                                                        mərkəzidir.</a>
                                                </p>
                                                <span>Aprel 04, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators3" data-slide-to="3"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- Elanlar-section -->
        <section class="elanlar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="title">
                            <h2>Elanlar</h2>

                            <a href="/news"><span class="d-none d-lg-block">Bütün elanlar</span></a>
                        </div>
                        <div class="card-group">
                            <div id="elanlarCarousel" class="carousel slide w-100" data-interval="false">
                                <div class="carousel-inner w-100" role="listbox">
                                    <div class="carousel-item active">
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="card">
                                                <img class="card-img-top"
                                                     src="assets/images/Elanlar-section/Rectangle 15.png"
                                                     alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-text"><a href="/single-news">
                                                            UNEC regionda iqtisad elmini dərindən öyrədən fundamental
                                                            tədris
                                                            mərkəzidir.
                                                        </a>
                                                    </h5>
                                                    <div class="">
                                                        <a href="#">#UNEC</a>
                                                        <a href="#">#Elan</a>
                                                    </div>
                                                    <p>Fakültə | teqlər | rubrikalar</p>
                                                    <span>04 May 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="card">
                                                <img class="card-img-top"
                                                     src="assets/images/Elanlar-section/Rectangle 15.png"
                                                     alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-text"><a href="/single-news">
                                                            UNEC regionda iqtisad elmini dərindən öyrədən fundamental
                                                            tədris
                                                            mərkəzidir.
                                                        </a>
                                                    </h5>
                                                    <div class="">
                                                        <a href="#">#UNEC</a>
                                                        <a href="#">#Elan</a>
                                                    </div>
                                                    <p>Fakültə | teqlər | rubrikalar</p>
                                                    <span>04 May 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="card">
                                                <img class="card-img-top"
                                                     src="assets/images/Elanlar-section/Rectangle 15.png"
                                                     alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-text"><a href="/single-news">UNEC regionda iqtisad elmini
                                                            dərindən öyrədən fundamental
                                                            tədris
                                                            mərkəzidir.</a>
                                                    </h5>
                                                    <div class="">
                                                        <a href="#">#UNEC</a>
                                                        <a href="#">#Elan</a>
                                                    </div>
                                                    <p>Fakültə | teqlər | rubrikalar</p>
                                                    <span>04 May 2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ol class="carousel-indicators">
                                    <li data-target="#elanlarCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#elanlarCarousel" data-slide-to="1"></li>
                                    <li data-target="#elanlarCarousel" data-slide-to="2"></li>
                                    <li data-target="#elanlarCarousel" data-slide-to="3"></li>
                                </ol>
                            </div>
                        </div>
                        <div class="title"><span class="d-block d-lg-none ml-auto">Bütün bölmələr</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tad">
                            <div class="title">

                                <h2>Tədbirlər</h2>
                                <a href="/events"> <span class="d-none d-lg-block">Bütün tədbirlər</span></a>

                            </div>
                            <ul>
                                <li>
                                    <div class="date">
                                        <span>04</span>
                                        Sentyabr
                                    </div>
                                    <div class="content">
                                      <a href="/single-event">  <p>UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris mərkəzidir. </p> </a>

                                        <span>Keçiriləcəyi məkan</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="date">
                                        <span>04</span>
                                        Sentyabr
                                    </div>
                                    <div class="content">
                                        <a href="/single-event">  <p>UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris mərkəzidir. </p> </a>
                                        <span>Keçiriləcəyi məkan</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="date">
                                        <span>04</span>
                                        Sentyabr
                                    </div>
                                    <div class="content">
                                        <a href="/single-event">  <p>UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris mərkəzidir. </p> </a>
                                        <span>Keçiriləcəyi məkan</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="date">
                                        <span>04</span>
                                        Sentyabr
                                    </div>
                                    <div class="content">
                                        <a href="/single-event">  <p>UNEC regionda iqtisad elmini dərindən öyrədən fundamental tədris mərkəzidir. </p> </a>
                                        <span>Keçiriləcəyi məkan</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="title">
                                <span class="d-block d-lg-none ml-auto">Bütün bölmələr</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faktlar-section -->
        <section class="faktlar">
            <div class="container">
                <div class="faktlar-border">
                    <div class="row">
                        <div class="col-lg-4 col-12 title">
                            <span>Faktlar</span>
                            <h2>UNEC</h2>
                            <h3>Rəqəmlərlə</h3>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="card-group">
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                        <div class="card">
                                            <img class="card-img-top" src="assets/images/Faktlar-section/Vector.svg"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-text">18.200</h5>
                                                <span>Tələbə sayı</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="card">
                                            <img class="card-img-top" src="assets/images/Faktlar-section/Vector (1).svg"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-text">403</h5>
                                                <span>Professor və dosent</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="card">
                                            <img class="card-img-top" src="assets/images/Faktlar-section/Vector (2).svg"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-text">10</h5>
                                                <span>Fakültə</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="card">
                                            <img class="card-img-top" src="assets/images/Faktlar-section/Vector (3).svg"
                                                 alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-text">23</h5>
                                                <span>Kafedra</span>
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
        <!-- sosial-section -->
        <section class="sosial">
            <div class="container">
                <div class="title text-center">
                    <h2>#UNEC kəşf et</h2>
                    <p>Sosial hesablarımızla tanış olun</p>
                </div>
                <div class="images-group">
                    <div><img src="assets/images/sosial-section/Rectangle 7875.png" alt="image">
                        <img class="icon" src="assets/images/sosial-section/insta.svg" alt="icon">
                    </div>
                    <div><img src="assets/images/sosial-section/Rectangle 7876.png" alt="image">
                        <img class="icon" src="assets/images/sosial-section/insta.svg" alt="icon">
                    </div>
                    <div class="images">
                        <div><img src="assets/images/sosial-section/Rectangle 7878.png" class="w-100" alt="image">
                            <img class="icon" src="assets/images/sosial-section/insta.svg" alt="icon">
                        </div>
                        <div class="d-flex">
                            <div><img src="assets/images/sosial-section/Rectangle 7879.png" class="w-100"
                                      style="min-height: 102%;"
                                      alt="image">
                                <img class="icon" src="assets/images/sosial-section/insta.svg" alt="icon">
                            </div>
                            <div><img src="assets/images/sosial-section/Rectangle 7880.png" class="w-100"
                                      style="min-height: 102%;"
                                      alt="image">
                                <img class="icon" src="assets/images/sosial-section/insta.svg" alt="icon">
                            </div>
                        </div>
                    </div>
                    <div><img src="assets/images/sosial-section/Rectangle 7877.png" alt="image">
                        <img class="icon" src="assets/images/sosial-section/insta.svg" alt="icon">

                    </div>
                </div>
                <div class="social-icons text-center">
                    <a href="#"><img src="assets/images/sosial-section/Frame.svg" alt="twitter-icon"></a>
                    <a href="#"><img src="assets/images/sosial-section/Frame (1).svg" alt="facebook-icon"></a>
                    <a href="#"><img src="assets/images/sosial-section/Frame (2).svg" alt="linkedin-icon"></a>
                    <a href="#"><img src="assets/images/sosial-section/Frame (3).svg" alt="youtube-icon"></a>
                    <a href="#"><img src="assets/images/sosial-section/Frame (4).svg" alt="instagram-icon"></a>
                </div>
            </div>
        </section>
        <!-- Tələbələrin-section -->
        <section class="talabalarin">
            <div class="container">
                <div class="title">
                    <div class="left">
                        <h2>UNEC</h2>
                        <span>Tələbələrin dili ilə</span>
                    </div>
                    <div class="right">
                        <p>Ən çox sorüşülan suallara
                            tələbərimizin cavablan</p>
                    </div>
                </div>
                <div class="horizontal-scroll">
                    <div class="horizontal-scroll__item">
                        <img src="assets/images/Tələbələrin-section/Rectangle 7881.png" alt="image">
                        <div class="cover">
                            <div class="content">
                                <img src="assets/images/Tələbələrin-section/video.svg" alt="play">
                                <h5>UNEC-də tədris neçə dildə aparılır?</h5>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal-scroll__item">
                        <img src="assets/images/Tələbələrin-section/Rectangle 7882.png" alt="image">
                        <div class="cover">
                            <div class="content">
                                <img src="assets/images/Tələbələrin-section/video.svg" alt="play">
                                <h5>UNEC-də tədris neçə dildə aparılır?</h5>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal-scroll__item">
                        <img src="assets/images/Tələbələrin-section/Rectangle 7883.png" alt="image">
                        <div class="cover">
                            <div class="content">
                                <img src="assets/images/Tələbələrin-section/video.svg" alt="play">
                                <h5>UNEC-də tədris neçə dildə aparılır?</h5>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal-scroll__item">
                        <img src="assets/images/Tələbələrin-section/Rectangle 7884.png" alt="image">
                        <div class="cover">
                            <div class="content">
                                <img src="assets/images/Tələbələrin-section/video.svg" alt="play">
                                <h5>UNEC-də tədris neçə dildə aparılır?</h5>
                            </div>
                        </div>
                    </div>
                    <div class="horizontal-scroll__item">
                        <img src="assets/images/Tələbələrin-section/Rectangle 7885.png" alt="image">
                        <div class="cover">
                            <div class="content">
                                <img src="assets/images/Tələbələrin-section/video.svg" alt="play">
                                <h5>UNEC-də tədris neçə dildə aparılır?</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="d-block d-md-none text-center">Dİgər suallar</a>
            </div>
        </section>
        <!-- FƏXRİ-section -->
        <section class="faxri">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div id="faxricarousel" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card">
                                        <span>FƏXRİ DOKTORLAR</span>
                                        <img class="card-img-top" src="assets/images/FƏXRİ-section/Rectangle 7888.png"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Ad Soyad</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Etiam eu turpis
                                                molestie
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    2
                                </div>
                                <div class="carousel-item">
                                    3
                                </div>
                                <div class="carousel-item">
                                    4
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#faxricarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#faxricarousel" data-slide-to="1"></li>
                                <li data-target="#faxricarousel" data-slide-to="2"></li>
                                <li data-target="#faxricarousel" data-slide-to="3"></li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="card middle-card">
                            <img class="card-img-top" src="assets/images/FƏXRİ-section/file-e1628411134371 1.png"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">HEYDƏR ƏLİYEVİN İQTİSADİ İRSİ</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div id="faxricarousel2" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card">
                                        <span>FƏXRİ DOKTORLAR</span>
                                        <img class="card-img-top" src="assets/images/FƏXRİ-section/Rectangle 7888.png"
                                             alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Ad Soyad</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Etiam eu turpis
                                                molestie
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    2
                                </div>
                                <div class="carousel-item">
                                    3
                                </div>
                                <div class="carousel-item">
                                    4
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#faxricarousel2" data-slide-to="0" class="active"></li>
                                <li data-target="#faxricarousel2" data-slide-to="1"></li>
                                <li data-target="#faxricarousel2" data-slide-to="2"></li>
                                <li data-target="#faxricarousel2" data-slide-to="3"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection