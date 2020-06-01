
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta name="title" content="Corona">
      <meta property="fb:app_id" content="312" />
      <meta property="og:type" content="Corona" />
      <meta property="og:url" content="http://steelthemes.com/demo/Elango/Corona-final" />
      <meta property="og:title" content="Corona">
      <meta property="og:image" content="http://steelthemes.com/demo/Elango/Corona-final/assets/image/fbimg-210x210.jpg">
      <meta property="og:description" content="Corona is html 5 Template">
      <meta name="full-screen" content="yes">
      <meta name="theme-color" content="#269bef">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <title>Homepage</title>
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/fonts/font/flaticon.css">
      <!---------favicon--------------->
      <link rel="icon" type="image/png" href="assets/image/favicon-32x32.png" sizes="32x32">
      <link rel="icon" type="image/png" href="assets/image/favicon-16x16.png" sizes="16x16">
      <!---------favicon--------------->
   </head>
   <body class="home_page_one">
      <div class="page_wapper">
          <!--Start Preloader-->
          <div class="preloader">
            <div class="preloader_box">
               <div class="loader">
                  <div class="circle item0"></div>
                  <div class="circle item1"></div>
                  <div class="circle item2"></div>
               </div>
            </div>
         </div>
         <!--End Preloader -->
         <!--Header-->
         <header class="header_v2">
            <section class="header_top">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8">
                        <div class="row">
                           <div class="col-lg-3 col-md-3">
                              <div class="heading">
                                 <h2>Today Updates</h2>
                              </div>
                           </div>
                           <div class="col-lg-9 col-md-9">
                              <div class="news_inner">
                                 <div class="owl-carousel owl-theme single_items">
                                    <div class="mid-text">
                                       <p><a href="#">Stabilitech's COVID-19 Vaccine Intended to Be Delivered in a Disruptive Thermally Stable Oral Capsule</a></p>
                                    </div>
                                    <div class="mid-text">
                                       <p><a href="#"> Controlled Release Drug Delivery Market Size Worth $69.8 Billion by 2027: Grand View Research, Inc.</a></p>
                                    </div>
                                    <div class="mid-text">
                                       <p><a href="#">  Drug Delivery Market Size Worth $69.8 Billion by 2027: Grand View Research, Inc.
                                          </a>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="text_right">
                           <div class="social_media_icon">
                              <ul class="clearfix">
                                 <li>
                                    <a href="#" class="has-tooltip">
                                       <span class="fa fa-facebook"></span>
                                       <div class="c-tooltip">
                                          <div class="tooltip-inner">Facebook</div>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="has-tooltip">
                                       <span class="fa fa-twitter"></span>
                                       <div class="c-tooltip">
                                          <div class="tooltip-inner">Twitter</div>
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="has-tooltip">
                                       <span class="fa fa-linkedin"></span>
                                       <div class="c-tooltip">
                                          <div class="tooltip-inner">Linkedin</div>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="navbar_outer">
               <div class="navbar navbar-expand-lg  bsnav bsnav-sticky bsnav-sticky-slide">
                  <div class="container">
                     <a class="navbar-brand" href="/home"><img src="assets/image/home-1-logo.png" class="img-fluid" alt="img"></a>
                     <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
                     <div class="collapse navbar-collapse scroll-nav">
                        <ul class="navbar-nav navbar-mobile navbar_left  ml-auto" id="nav">
                           <li class="nav-item nav-item">
                              <a class="nav-link link_hd" href="/home">  Home  </a>
                           </li>
                           <li class="nav-item nav_item"><a class="nav-link link_hd" href="/about">About </a></li>
                           <li class="nav-item nav-item dropdown">
                              <a class="nav-link link_hd" href="">Data</a>
                              <ul class="navbar-nav submenu">
                                 <li class="nav-item"><a class="nav-link" href="{{ url('/odp') }}">Data ODP</a></li>
                                 <li class="nav-item"><a class="nav-link" href="{{ url('/pdp') }}">Data PDP</a></li>
                                 <li class="nav-item"><a class="nav-link" href="{{ url('/positif') }}">Data Positif</a></li>
                                 <li class="nav-item"><a class="nav-link" href="{{ url('/sembuh') }}">Data Sembuh</a></li>
                                 <li class="nav-item"><a class="nav-link" href="{{ url('/meninggal') }}">Data Meninggal</a></li>
                              </ul>
                           </li>
                           <li class="nav-item nav-item"><a class="nav-link link_hd" href="/dataTerkini">  Data terkini  </a> </li>
                           <li class="nav-item nav-item"><a href="/tips" class="nav-link link_hd"> Tips & Trick</a></li>
                          </ul>
                          @extends('layouts.app')
                        @section('content')
                     </div>
                  </div>
               </div>
            </section>
         </header>
         <!--Header-->
         <main class="main-content">
            <!------main-content------>
            <!------main-slider------>
            <section class="main-slider">
               <div class="main-slider-carousel main_slider owl-carousel owl-theme">
                  <div class="slide one">
                     <div class="container text-left">
                        <div class="row">
                           <div class="col-lg-7 d-flex">
                              <div class="content">
                                 <h6>Stabilitech's COVID-19 Vaccine</h6>
                                 <h1> Langkah langkah mencegah virus corona</h1>
                                 <div class="text">Sering mencuci tangan sebelum atau sesudah melakukan aktifitas</div>
                                 <div class="link-box">
                                    <a href="#" class="theme_btn tp_two">Klik disini!</a>
                                    <a href="#" class="theme_btn tp_one two">Informasi covid-19</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-5">
                              <div class="slider_image slide_image_right clearfix">
                                 <div class="image image_1 floating">
                                    <img src="assets/image/main-slider/home-2-slider-1-1.png" class="img-fluid" alt="img" />
                                 </div>
                                 <div class="image image_2 beat">
                                    <img src="assets/image/main-slider/home-2-slider-1-2.png" class="img-fluid" alt="img" />
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slide two">
                     <div class="container text-left">
                        <div class="row">

                           <div class="col-lg-6 d-flex order-last">
                              <div class="content slide_content_right">
                                 <h6>Stabilitech's COVID-19 Vaccine</h6>
                                 <h1> Selalu update informasi <br class="md_none"/>pada setiap berita terkini</h1>
                                 <div class="text">jagalah kebersihan pada lingkungan di sekitar</div>
                                 <div class="link-box">
                                    <a href="#" class="theme_btn tp_two">Klik disini!</a>
                                    <a href="#" class="theme_btn tp_one two">Informasi covid-19</a>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-6 order-first">
                              <div class="slider_image slide_image_left clearfix">
                                 <div class="image image_1 floating">
                                    <img src="assets/image/main-slider/home-2-slider-2-1.png" class="img-fluid" alt="img" />
                                 </div>
                                 <div class="image image_2 beat">
                                    <img src="assets/image/main-slider/home-2-slider-1-2.png" class="img-fluid" alt="img" />
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slide three">
                     <div class="container text-left">
                        <div class="row">
                           <div class="col-lg-7 d-flex">
                              <div class=" content">
                                 <h6>Stabilitech's COVID-19 Vaccine</h6>
                                 <h1>Membantu mencegah penyebaran covid-19</h1>
                                 <div class="text">Selalu update informasi terkini </div>
                                 <div class="link-box">
                                    <a href="#" class="theme_btn tp_two">Klik disini!</a>
                                    <a href="#" class="theme_btn tp_one two">Informasi covid-19</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-5">
                              <div class="slider_image slide_image_right clearfix">
                                 <div class="image image_1 floating">
                                    <img src="assets/image/main-slider/home-2-slider-3-1.png" class="img-fluid" alt="img" />
                                 </div>
                                 <div class="image image_2 beat">
                                    <img src="assets/image/main-slider/home-2-slider-1-2.png" class="img-fluid" alt="img" />
                                 </div>
                                 <div class="image image_3 rotate-me">
                                    <img src="assets/image/main-slider/home-2-slider-3-2.png" class="img-fluid" alt="img" />
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-------------welome_box---------->
            <!-------------abou us---------->
            <section class="symptoms type_two">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="symptoms_box_two wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                 <p><span>Sakit Kepala </span>Penyakit yang dilaporkan bervariasi mulai dari gejala ringan.</p>
                              </div>
                              <div class="symptoms_box_two wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                 <p> <span>Radang tenggorokan </span>Penyakit yang dilaporkan bervariasi mulai dari gejala ringan.</p>
                              </div>
                              <div class="symptoms_box_two wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                 <p><span>Sesak napas</span>Sesak napas umumnya muncul sebagai tanda penyakit mencapai tahap serius. Bahkan, bisa muncul tanpa diiringi dengan batuk.</p>
                              </div>
                              <div class="symptoms_box_two wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                 <p><span>Diare </span>Gejala diare dialami sekitar 20 persen dari pasien positif Covid-19 yang diteliti. Sisanya mengalami diare sekitar 10 hari setelah mereka mengalami gangguan pernapasan.</p>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="symptoms_box_two wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                 <p><span>Demam </span>"Salah satu gejala demam yang paling umum adalah suhu tubuh Anda naik di sore dan menjelang petang. Itu adalah cara umum virus menghasilkan demam.</p>
                              </div>
                              <div class="symptoms_box_two wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                 <p><span>Batuk Kering </span>Batuk yang menjadi salah satu gejala covid-19. Diantaranya yaitu Batuk kering, Terus-menerus, dan disertai gejala demam.</p>
                              </div>
                              <div class="symptoms_box_two wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                 <p> <span>Kelelahan </span>Orang yang mengalami kelelahan ekstrem bisa menjadi tanda awal virus corona.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="image_box">
                           <img src="assets/image/resources/Sym-2.png" class="img-fluid" alt="img" />
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="funfacts type_two">
               <div class="container">
                  <div class="about_fun_facts">
                     <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                           <div class="fun_facts_box type_two">
                              <h2><span class="counter-value">{{$pdp}} </span>+</h2>
                              <h6>Total PDP</h6>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                           <div class="fun_facts_box type_two">
                              <h2><span class="counter-value">{{$positif}} </span>+</h2>
                              <h6>Total Positif</h6>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                           <div class="fun_facts_box type_two">
                              <h2><span class="counter-value">{{$sembuh}} </span>+</h2>
                              <h6>Total Sembuh</h6>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                           <div class="fun_facts_box type_two">
                              <h2><span class="counter-value">{{$meninggal}} </span>+</h2>
                              <h6>Total Meninggal</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="preventions bg_white type_two">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading text-center icon_dark tp_one">
                           <h6>Mencegah corona virus</h6>
                           <h1>Cara melindungi diri anda.</h1>
                           <span class="flaticon-virus icon"></span>
                           <p>Jika Anda sehat, Anda hanya perlu memakai masker jika Anda merawat orang yang diduga terinfeksi 2019-nCoV.</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_three wow fadeIn" data-wow-delay="00ms" data-wow-duration="1500ms">
                           <div class="icon_box">
                              <img src="assets/image/svg/spongewash.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <h2><a href="prevention-single.html">Sering sering lah mencuci tangan dengan sabun dan air</a></h2>
                           <a href="prevention-single.html" class="read_more tp_two">Read More <span class="flaticon-arrow"></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_three wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                           <div class="icon_box">
                              <img src="assets/image/svg/man-touch.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <h2><a href="prevention-single.html">Jangan menyentuh mata, hidung dan mulut anda</a></h2>
                           <a href="prevention-single.html" class="read_more tp_two">Read More <span class="flaticon-arrow"></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_three wow fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
                           <div class="icon_box">
                              <img src="assets/image/svg/no.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <h2><a href="prevention-single.html">Hindari kontak dengan orang yang sakit</a></h2>
                           <a href="prevention-single.html" class="read_more tp_two">Read More <span class="flaticon-arrow"></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_three wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                           <div class="icon_box">
                              <img src="assets/image/svg/sorethroat.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <h2><a href="prevention-single.html">Diamlah dirumah jika anda sakit. atau dapatkan perawatan medis</a></h2>
                           <a href="prevention-single.html" class="read_more tp_two">Read More <span class="flaticon-arrow"></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_three wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                           <div class="icon_box">
                              <img src="assets/image/svg/masksick.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <h2><a href="prevention-single.html">Lindungi mulut, dan hidung anda menggunakan masker</a></h2>
                           <a href="prevention-single.html" class="read_more tp_two">Read More <span class="flaticon-arrow"></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_three wow fadeIn" data-wow-delay="500ms" data-wow-duration="1500ms">
                           <div class="icon_box">
                              <img src="assets/image/svg/handwashwashing.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <h2><a href="prevention-single.html">Segera cuci tangan anda mengggunakan air</a></h2>
                           <a href="prevention-single.html" class="read_more tp_two">Read More <span class="flaticon-arrow"></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_three wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                           <div class="icon_box">
                              <img src="assets/image/svg/maskmedical.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <h2><a href="prevention-single.html">Jika kamu sakit gunakan lah masker</a></h2>
                           <a href="prevention-single.html" class="read_more tp_two">Read More <span class="flaticon-arrow"></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_three wow fadeIn" data-wow-delay="700ms" data-wow-duration="1500ms">
                           <div class="icon_box">
                              <img src="assets/image/svg/object-hygiene.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <h2><a href="prevention-single.html">Jika permukaan kotor maka bersihkanlah</a></h2>
                           <a href="prevention-single.html" class="read_more tp_two">Read More <span class="flaticon-arrow"></span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="explore_more two">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="content_box text-center">
                           <h1>
                              Langkah-langkah perlindungan dasar terhadap
                              <br class="disp_none_md" /><span>virus corona baru</span> </h1>
                           <a href="#" class="theme_btn tp_two">Explore Studies</a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="blog type_two">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading text-center icon_dark tp_one">
                           <h6>Blog</h6>
                           <h1>Berita terkini  </h1>
                           <span class="flaticon-virus icon"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="card-deck">
                        <div class="card">
                           <div class="embed-responsive embed-responsive-16by9">
                              <iframe class="embed-responsive-item" src="https://youtube.com/embed/sRaVVpBiRTo" allowfullscreen></iframe>
                            </div>
                          <div class="card-body">
                            <h5 class="card-title">AGAR TAK JENUH DI RUMAH SAJA</h5>
                            <p class="card-text">Tips dan trik agar tak jenuh terus dirumah, pesan dari pak jokowi lohh!!</p>
                            <p class="card-text"><small class="text-muted">Last updated 2 days ago</small></p>
                          </div>
                        </div>
                        <div class="card">
                           <div class="embed-responsive embed-responsive-16by9">
                              <iframe class="embed-responsive-item" src="https://youtube.com/embed/Xqt5tK1e27U" allowfullscreen></iframe>
                            </div>
                          <div class="card-body">
                            <h5 class="card-title">[Update Corona} 16 Mei: 17.025 Positif, 3.911 Sembuh</h5>
                            <p class="card-text">Konfirmasi Covid-19 yang kita dapatkan hari ini adalah 529 orang, sehingga menjadi 17.025 orang ujar Yuri saat memberikan konfrensi pers harian (16/5/2020).</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                        <div class="card">
                           <div class="embed-responsive embed-responsive-16by9">
                              <iframe class="embed-responsive-item" src="https://youtube.com/embed/iSiUkmiEYdo" allowfullscreen></iframe>
                            </div>
                          <div class="card-body">
                            <h5 class="card-title">[TERBARU] Jokowi Sebut Obat Covid-19 Sudah Ada, Pemerintah Pesan 5 Juta Butir!</h5>
                            <p class="card-text">"Pemerintah juga telah menyiapkan obat dari hasil riset dan pengalaman beberapa negara untuk bisa mengobati Covid-19 ini sesuai resep dokter," kata Presiden Jokowi lewat siaran live streaming di akun YouTube Sekretariat Presiden, Jumat (20/3/2020).</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                      </div>
                  </div>
               </div>
            </section>
            <section class="footer type_two">
               <div class="footer_layer" style="background-image: url(assets/image/resources/footer-bg1.png);"></div>
               <div class="container">
                  <div class="row">
                     <div class="col-lg-3 col-xs-12">
                        <div class="footer_widgets tp_two first">
                           <h3 class="widgets_title logo">
                              <a href="index.html"><img src="assets/image/home-1-logo-white.png" class="img-fluid" alt="logo"></a>
                           </h3>
                           <div class="inner_widgets">
                              <p>A novel coronavirus is a new coronavirus that has not been previously identified. The virus causing coronavirus disease 2019 (COVID-19)</p>
                              <div class="social_media_icon">
                                 <ul class="clearfix">
                                    <li>
                                       <a href="#" class="has-tooltip">
                                          <span class="fa fa-facebook"></span>
                                          <div class="c-tooltip">
                                             <div class="tooltip-inner">Facebook</div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" class="has-tooltip">
                                          <span class="fa fa-twitter"></span>
                                          <div class="c-tooltip">
                                             <div class="tooltip-inner">Twitter</div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" class="has-tooltip">
                                          <span class="fa fa-linkedin"></span>
                                          <div class="c-tooltip">
                                             <div class="tooltip-inner">Linkedin</div>
                                          </div>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_widgets tp_two">
                           <h3 class="widgets_title">Usefull links</h3>
                           <div class="inner_widgets">
                              <ul>
                                 <li><a href="#">Situation Reports</a></li>
                                 <li><a href="#">Advice For Public</a></li>
                                 <li><a href="#">Prevention</a></li>
                                 <li><a href="#">Coronavirus Symptoms</a></li>
                                 <li><a href="#">Donor & Partners</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_widgets tp_two">
                           <h3 class="widgets_title">Contact us</h3>
                           <div class="inner_widgets">
                              <div class="text_box">
                                 <span class="fa fa-map-marker"></span>
                                 <p>124, Queens walk 2nd cross newyork 5241.</p>
                              </div>
                              <div class="text_box">
                                 <span class="fa fa-phone"></span>
                                 <p>+44 555 67 890</p>
                              </div>
                              <div class="text_box">
                                 <span class="fa fa-clock-o"></span>
                                 <p>Mon - Fri: 09.00 to 18.00</p>
                              </div>
                              <div class="text_box">
                                 <span class="fa fa-envelope"></span>
                                 <p>support@corano.com</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <div class="footer_widgets tp_two">
                           <h3 class="widgets_title">Newsletter</h3>
                           <div class="inner_widgets">
                              <p class="sub_description">Subscribe Us &amp; Recive Our Offers and Updates i Your Inbox Directly.</p>
                              <form>
                                 <input type="email" name="email" placeholder="Email Address..." />
                                 <button class="sub_btn" type="submit"><span class="flaticon-paper-plane"></span></button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="footer_last type_two">
                     <div class="row">
                        <div class="col-lg-12 text-center">
                           <p>Copyright © 2020 Corano. All Rights Reserved.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-------------main-centent-end--------------->
         </main>
         <!-------------pagewapper-end--------------->
      </div>
      <!--Scroll to top-->
      <a href="#" id="scroll" class="default-bg" style="display: inline;"><span class="fa fa-angle-up"></span></a>
      <!---------mbile-navbar----->
      <div class="bsnav-mobile">
         <div class="bsnav-mobile-overlay"></div>
         <div class="navbar">
            <button class="navbar-toggler toggler-spring mobile-toggler"><span class="fa fa-close"></span></button>
         </div>
      </div>
      <!---------mbile-navbar----->
      <!-- /.side-menu__block -->
      <div class="side-menu__block">
         <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
         </div>
         <!-- /.side-menu__block-overlay -->
         <div class="side-menu__block-inner">
            <div class="row">
               <div class="col-lg-12">
                  <div class="logo_site">
                     <a href="index.html"><img src="assets/image/home-1-logo.png" alt="logo" /></a>
                  </div>
                  <div class="side-menu__block-contact">
                     <h2>Quick Online Consultancy Only on Few Minutes</h2>
                     <div class="form_outer">
                        <form>
                           <div class="from_group">
                              <input type="text" name="name" placeholder="Name" />
                           </div>
                           <div class="from_group">
                              <input type="email" name="email" placeholder="Email" />
                           </div>
                           <div class="from_group">
                              <input type="text" name="phone" placeholder="Phone" />
                           </div>
                           <div class="from_group">
                              <textarea rows="4" placeholder="Share Your Thoughts"></textarea>
                           </div>
                           <div class="from_group">
                              <button  class="theme_btn tp_two" type="submit">Contact Us</button>
                           </div>
                        </form>
                     </div>
                  </div>
                  <!-- /.side-menu__block-contact -->
                  <div class="side-menu__block-contact">
                     <h3 class="side-menu__block__title">Contact Us</h3>
                     <!-- /.side-menu__block__title -->
                     <ul class="side-menu__block-contact__list">
                        <li class="side-menu__block-contact__list-item">
                           <i class="fa fa-map-marker"></i> Rock St 12, Newyork City, USA
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                        <li class="side-menu__block-contact__list-item">
                           <i class="fa fa-phone"></i>
                           <a href="tel:526-236-895-4732">(526) 236-895-4732</a>
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                        <li class="side-menu__block-contact__list-item">
                           <i class="fa fa-envelope"></i>
                           <a href="mailto:example@mail.com">example@mail.com</a>
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                        <li class="side-menu__block-contact__list-item">
                           <i class="fa fa-clock-o"></i> Week Days: 09.00 to 18.00 Sunday: Closed
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                     </ul>
                     <!-- /.side-menu__block-contact__list -->
                  </div>
                  <!-- /.side-menu__block-contact -->
                  <p class="side-menu__block__text site-footer__copy-text"><a href="#">corano</a> <i class="fa fa-copyright"></i> 2020 All Right Reserved</p>
               </div>
            </div>
            <!-- /.side-menu__block-inner -->
         </div>
      </div>
      <!-- /.side-menu__block -->
      <!-- /.search-popup -->
      <div class="search-popup">
         <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
         </div>
         <!-- /.search-popup__overlay -->
         <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
               <input type="text" name="search" placeholder="Type here to Search....">
               <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
            </form>
         </div>
         <!-- /.search-popup__inner -->
      </div>
      <!-- /.search-popup -->
      <!-----------------------------------script-------------------------------------->
      <script src="assets/js/jquery.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/bsnav.min.js"></script>
      <script src="assets/js/jquery-ui.js"></script>

      <script src="assets/js/owl.js"></script>
      <script src="assets/js/wow.js"></script>
      <script src="assets/js/jquery.fancybox.js"></script>
      <script src="assets/js/TweenMax.min.js"></script>
      <script src="assets/js/validator.min.js"></script>
      <script src="assets/js/appear.js"></script>
      <script src="assets/js/moment.js"></script>
      <script src="assets/js/jquery.flexslider-min.js"></script>
      <script src="assets/js/pagenav.js"></script>
      <script src="assets/js/custom.js"></script>
   </body>
</html>
@endsection

