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
      <meta name="theme-color" content="#269bef ">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <title>Data Meninggal</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/fonts/font/flaticon.css">
      <link rel="stylesheet" type="text/css" href="{{ url('assets/css') }}/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
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
         <!--End Preloader-->
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
                      <a class="navbar-brand" href="/"><img src="assets/image/home-1-logo.png" class="img-fluid" alt="img"></a>
                      <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
                      <div class="collapse navbar-collapse scroll-nav">
                         <ul class="navbar-nav navbar-mobile navbar_left  ml-auto" id="nav">
                            <li class="nav-item nav-item">
                               <a class="nav-link link_hd" href="/">  Home  </a>
                            </li>
                            <li class="nav-item nav_item"><a class="nav-link link_hd" href="/about">About </a></li>
                            <li class="nav-item nav-item dropdown">
                              <a class="nav-link link_hd" href="/crud">Data</a>
                              <ul class="navbar-nav submenu">
                                 <li class="nav-item"><a class="nav-link" href="{{ url('/odp') }}">Data ODP</a></li>
                                 <li class="nav-item"><a class="nav-link" href="{{ url('/pdp') }}">Data PDP</a></li>
                                 <li class="nav-item"><a class="nav-link" href="{{ url('/positif') }}">Data Positif</a></li>
                                 <li class="nav-item"><a class="nav-link" href="{{ url('/sembuh') }}">Data Sembuh</a></li>
                                 <li class="nav-item"><a class="nav-link" href="{{ url('/meninggal') }}">Data Meninggal</a></li>
                              </ul>
                            </li>
                            <li class="nav-item nav-item"><a class="nav-link link_hd" href="/dataTerkini">  Data terkini  </a> </li>
                            <li class="nav-item nav-item"><a href="#" class="nav-link link_hd"> Tips & Trick</a></li>
                           </ul>
                         
                      </div>
                   </div>
                </div>
             </section>
         </header>
         <!--Header-->
         <!------main-content------>
         <main class="main-content">
            <section class="page_title">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 d-flex">
                        <div class="content_box">
                           <ul class="bread_crumb text-center">
                              <li class="bread_crumb-item"><a href="#">Home</a></li>
                              <li class="bread_crumb-item active">Data</li>
                           </ul>
                           <h1>Data Pasien Meninggal</h1>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <div class="single_blog_box">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!--------list-of categories-------->
                        <div class="container">
                           <div class="table-wrapper">
                              <div class="row">
                                 <div class="col-sm-4">
                                    <!-- Modal Add Form -->
                                    <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                          </button>
                                          </div>
                                          <form id="addform">
                                          <div class="modal-body">
                                             {{ csrf_field() }}
                                             <div class="form-group">
                                                <label for="nik">NIK</label>
                                                <input type="number" class="form-control" name="nik" />
                                             </div>
                                             <div class="form-group">
                                                <label for="nama">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="nama" />
                                             </div>
                                             <div class="form-group">
                                                <label for="jenkel">Jenis Kelamin</label>
                                                <div class="radio-inline">
                                                   <label><input type="radio" name="jenkel" value="Laki-laki"> Laki-laki</label>
                                                   </div>
                                                   <div class="radio-inline">
                                                <label><input type="radio" name="jenkel" value="Perempuan"> Perempuan</label>
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                <label for="umur">Umur</label>
                                                <input type="text" class="form-control" name="umur" />
                                             </div>
                                             <div class="form-group">
                                                <label for="provinsi">Provinsi</label>
                                                <input type="text" class="form-control" name="provinsi" />
                                             </div>
                                             <div class="form-group">
                                                <label for="kota">Kota/Kabupaten</label>
                                                <input type="text" class="form-control" name="kota" />
                                             </div>
                                             <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control" name="alamat"  />
                                             </div>
                                             <div class="form-group">
                                                <label for="id_data">Status</label> 
                                                <select name="id_data" class="form-control">
                                                   <option value="">- Pilih Status -</option>
                                                   <option value="1" >ODP</option>
                                                   <option value="2" >PDP</option>
                                                   <option value="3" >Positif</option>
                                                   <option value="4" >Sembuh</option>
                                                   <option value="5" >Meninggal</option>
                                                </select>
                                             </div>
                                          </div>
                                          
                                          <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                          <button type="submit" class="btn btn-primary">Simpan</button>
                                          </div>
                                       </div>
                                       </form>
                                    </div>
                                    </div>
                                    <!-- End Add Form -->

                                    <!-- Modal Edit Form -->
                                    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                          </button>
                                          </div>
                                          <form id="editform">
                                          <div class="modal-body">
                                             {{ csrf_field() }}
                                             {{ method_field('PUT') }}

                                             <input type="hidden" name="id" id="id">
                                             <div class="form-group">
                                                <label for="nik">NIK</label>
                                                <input type="number" class="form-control" name="nik" id="nik" />
                                             </div>
                                             <div class="form-group">
                                                <label for="nama">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="nama" id="nama" />
                                             </div>
                                             <div class="form-group">
                                                <label for="jenkel">Jenis Kelamin</label>
                                                <div class="radio-inline" id="jenkel">
                                                   <label><input type="radio" name="jenkel" value="Laki-laki"></label>
                                                   </div>
                                                   <div class="radio-inline" id="jenkel">
                                                <label><input type="radio" name="jenkel" value="Perempuan"> Perempuan</label>
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                <label for="umur">Umur</label>
                                                <input type="text" class="form-control" name="umur" id="umur" />
                                             </div>
                                             <div class="form-group">
                                                <label for="provinsi">Provinsi</label>
                                                <input type="text" class="form-control" name="provinsi" id="provinsi" />
                                             </div>
                                             <div class="form-group">
                                                <label for="kota">Kota/Kabupaten</label>
                                                <input type="text" class="form-control" name="kota" id="kota" />
                                             </div>
                                             <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control" name="alamat" id="alamat" />
                                             </div>
                                             <div class="form-group">
                                                <label for="id_data">Status</label> 
                                                <select name="id_data" id="id_data" class="form-control">
                                                   <option value="">- Pilih Status -</option>
                                                   <option value="1" >ODP</option>
                                                   <option value="2" >PDP</option>
                                                   <option value="3" >Positif</option>
                                                   <option value="4" >Sembuh</option>
                                                   <option value="5" >Meninggal</option>
                                                </select>
                                             </div>
                                          </div>
                                          
                                          <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                          <button type="submit" class="btn btn-primary">Simpan</button>
                                          </div>
                                       </div>
                                       </form>
                                    </div>
                                    </div>
                                    <!-- End Edit Form -->
                                 

                                 <button type="button" class="btn btn-info add-new" data-toggle="modal" data-target="#addmodal"><i class="fa fa-plus"></i> Add New</button>
                                    </div>

                                 <!--<div class="col-sm-8" style="float: right;">
                                    <div class="search-box">
                                       <div class="input-group">
                                          <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                                          <input type="text" class="form-control" placeholder="Search&hellip;">
                                       </div>
                                    </div>
                                 </div>-->
                                 </div>
                              </div>
                           </div>
                           <div class="table-responsive">
                             <table  class="table table-striped table-bordered" id="t-meninggal" >
                             <thead>
                                 <tr align="center">
                                    <th>No</th>
                                    <th>Nik</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Umur</th>
                                    <th>Provinsi</th>
                                    <th>Kota</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                 </tr>
                               </thead>
                                 </table>
                               </div>
                             </div>
                             </div>
                             </div>
                           </div>
                                 
            
            <section class="footer type_two ">
               <div class="footer_layer" style="background-image: url(assets/image/resources/footer-bg1.png);"></div>
               <div class="container ">
                  <div class="row ">
                     <div class="col-lg-3 col-xs-12 ">
                        <div class="footer_widgets tp_two first ">
                           <h3 class="widgets_title logo ">
                              <a href="index.html "><img src="assets/image/home-1-logo-white.png " class="img-fluid " alt="logo "></a>
                           </h3>
                           <div class="inner_widgets ">
                              <p>A novel coronavirus is a new coronavirus that has not been previously identified. The virus causing coronavirus disease 2019 (COVID-19)</p>
                              <div class="social_media_icon ">
                                 <ul class="clearfix ">
                                    <li>
                                       <a href="# " class="has-tooltip ">
                                          <span class="fa fa-facebook "></span>
                                          <div class="c-tooltip ">
                                             <div class="tooltip-inner ">Facebook</div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="# " class="has-tooltip ">
                                          <span class="fa fa-twitter "></span>
                                          <div class="c-tooltip ">
                                             <div class="tooltip-inner ">Twitter</div>
                                          </div>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="# " class="has-tooltip ">
                                          <span class="fa fa-linkedin "></span>
                                          <div class="c-tooltip ">
                                             <div class="tooltip-inner ">Linkedin</div>
                                          </div>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                        <div class="footer_widgets tp_two ">
                           <h3 class="widgets_title ">Usefull links</h3>
                           <div class="inner_widgets ">
                              <ul>
                                 <li><a href="# ">Situation Reports</a></li>
                                 <li><a href="# ">Advice For Public</a></li>
                                 <li><a href="# ">Prevention</a></li>
                                 <li><a href="# ">Coronavirus Symptoms</a></li>
                                 <li><a href="# ">Donor & Partners</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                        <div class="footer_widgets tp_two ">
                           <h3 class="widgets_title ">Contact us</h3>
                           <div class="inner_widgets ">
                              <div class="text_box ">
                                 <span class="fa fa-map-marker"></span>
                                 <p>124, Queens walk 2nd cross newyork 5241.</p>
                              </div>
                              <div class="text_box ">
                                 <span class="fa fa-phone"></span>
                                 <p>+44 555 67 890</p>
                              </div>
                              <div class="text_box ">
                                 <span class="fa fa-clock-o"></span>
                                 <p>Mon - Fri: 09.00 to 18.00</p>
                              </div>
                              <div class="text_box ">
                                 <span class="fa fa-envelope"></span>
                                 <p>support@corano.com</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="footer_widgets tp_two">
                           <h3 class="widgets_title ">Newsletter</h3>
                           <div class="inner_widgets">
                              <p class="sub_description">Subscribe Us &amp; Recive Our Offers and Updates i Your Inbox Directly.</p>
                              <form>
                                 <input type="email" name="email" placeholder="Email Address..." />
                                 <button class="sub_btn" type="submit"><span class="flaticon-paper-plane "></span></button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="footer_last type_two">
                     <div class="row">
                        <div class="col-lg-12 text-center ">
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
      <a href="# " id="scroll" class="default-bg " style="display: inline;"><span class="fa fa-angle-up "></span></a>
      <!---------mbile-navbar----->
      <div class="bsnav-mobile ">
         <div class="bsnav-mobile-overlay"></div>
         <div class="navbar ">
            <button class="navbar-toggler toggler-spring mobile-toggler"><span class="fa fa-close "></span></button>
         </div>
      </div>
      <!---------mbile-navbar----->
      <!-- /.side-menu__block -->
      <div class="side-menu__block">
         <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor "></div>
            <div class="cursor-follower"></div>
         </div>
         <!-- /.side-menu__block-overlay -->
         <div class="side-menu__block-inner">
            <div class="row ">
               <div class="col-lg-12 ">
                  <div class="logo_site ">
                     <a href="index.html "><img src="assets/image/home-1-logo.png" alt="logo " /></a>
                  </div>
                  <div class="side-menu__block-contact ">
                     <h2>Quick Online Consultancy Only on Few Minutes</h2>
                     <div class="form_outer ">
                        <form>
                           <div class="from_group ">
                              <input type="text" name="name" placeholder="Name " />
                           </div>
                           <div class="from_group ">
                              <input type="email" name="email" placeholder="Email " />
                           </div>
                           <div class="from_group">
                              <input type="text" name="phone" placeholder="Phone " />
                           </div>
                           <div class="from_group ">
                              <textarea rows="4" placeholder="Share Your Thoughts"></textarea>
                           </div>
                           <div class="from_group ">
                              <button  class="theme_btn tp_two" type="submit">Contact Us</button>
                           </div>
                        </form>
                     </div>
                  </div>
                  <!-- /.side-menu__block-contact -->
                  <div class="side-menu__block-contact ">
                     <h3 class="side-menu__block__title ">Contact Us</h3>
                     <!-- /.side-menu__block__title -->
                     <ul class="side-menu__block-contact__list ">
                        <li class="side-menu__block-contact__list-item ">
                           <i class="fa fa-map-marker "></i> Rock St 12, Newyork City, USA
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                        <li class="side-menu__block-contact__list-item ">
                           <i class="fa fa-phone "></i>
                           <a href="tel:526-236-895-4732 ">(526) 236-895-4732</a>
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                        <li class="side-menu__block-contact__list-item ">
                           <i class="fa fa-envelope "></i>
                           <a href="mailto:example@mail.com ">example@mail.com</a>
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                        <li class="side-menu__block-contact__list-item ">
                           <i class="fa fa-clock-o "></i> Week Days: 09.00 to 18.00 Sunday: Closed
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                     </ul>
                     <!-- /.side-menu__block-contact__list -->
                  </div>
                  <!-- /.side-menu__block-contact -->
                  <p class="side-menu__block__text site-footer__copy-text "><a href="# ">corano</a> <i class="fa fa-copyright "></i> 2020 All Right Reserved</p>
               </div>
            </div>
            <!-- /.side-menu__block-inner -->
         </div>
      </div>
      <!-- /.side-menu__block -->
      <!-- /.search-popup -->
      <div class="search-popup">
         <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor "></div>
            <div class="cursor-follower "></div>
         </div>
         <!-- /.search-popup__overlay -->
         <div class="search-popup__inner ">
            <form action="# " class="search-popup__form ">
               <input type="text" name="search" placeholder="Type here to Search.... ">
               <button type="submit"><i class="flaticon-magnifying-glass "></i></button>
            </form>
         </div>
         <!-- /.search-popup__inner -->
      </div>
      <!-- /.search-popup -->
      <!-----------------------------------script-------------------------------------->
      <script src="assets/js/jquery.js "></script>
      <script src="assets/js/popper.min.js "></script>
      <script src="assets/js/bootstrap.min.js "></script>
      <script src="assets/js/bsnav.min.js "></script>
      <script src="assets/js/jquery-ui.js "></script>

      <script src="assets/js/wow.js "></script>
      <script src="assets/js/owl.js "></script>
      <script src="assets/js/odometer.min.js "></script>
      <script src="assets/js/TweenMax.min.js "></script>
      <script src="assets/js/validator.min.js "></script>
      <script src="assets/js/appear.js "></script>
      <script src="assets/js/moment.js "></script>
      <script src="assets/js/jquery.flexslider-min.js"></script>
      <script src="assets/js/pagenav.js"></script>
      <script src="assets/js/custom.js "></script>
      <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

   <script type="text/javascript">
      $(document).ready(function() {
             $('#t-meninggal').DataTable({   
               processing: true,
               serverSide: true,


               ajax : {
                  url: '{{ route("meninggal.json") }}'
               },
               columns: [
                  { data: null, sortable: false, 
                     render: function (data, type, row, meta) {
                       return meta.row + meta.settings._iDisplayStart + 1;
                      } 
                  },
                  { data: 'nik', name: 'nik' },
                  { data: 'nama', name: 'nama' },
                  { data: 'jenkel', name: 'jenkel' },
                  { data: 'umur', name: 'umur' },
                  { data: 'provinsi', name: 'provinsi' },
                  { data: 'kota', name: 'kota' },
                  { data: 'alamat', name: 'alamat' },
                  { data: 'action', orderable:false, searchable:false } 
               ]
             });
         });


         //AddForm
         $(document).ready(function() {
            
            $('#addform').on('submit', function(e) {
               e.preventDefault();

               $.ajax({
                  type: "POST",
                  url: "/meninggal",
                  data: $('#addform').serialize(),
                  success: function(response) {
                     console.log(response)
                     $('#addmodal').modal('hide')
                     alert("Data berhasil disimpan");
                     location.reload();
                  },
                  error: function(error) {
                     alert("Data tidak tersimpan");
                  }
               });
            });
         });

         //EditForm
        $(document).ready(function(){

            $('.edit').on('click', function(){
               $('#editmodal').modal('show');

               $tr = $(this).closest('tr');

               var data = $tr.children("td").map(function(){
                  return $(this).text();
               }).get();

               console.log(data);
               $('#id').val(data[0]);
               $('#nik').val(data[1]);
               $('#nama').val(data[2]);
               $('#jenkel').val(data[3]);
               $('#umur').val(data[4]);
               $('#provinsi').val(data[5]);
               $('#kota').val(data[6]);
               $('#alamat').val(data[7]);
               $('#id_data').val(data[8]);
            });

         $('#editform').on('submit', function(e){
            e.preventDefault();

            var id = $('#id').val();

            $.ajax({
               type: "PUT",
               url: "/meninggal/"+id,
               data: $('#editform').serialize(),
               success: function(response){
                  console.log(response);
                  $('#editmodal').modal('hide');
                  alert("Data berhasil diubah");
                  location.reload();
               },
               error: function(error){
                  console.log(error);
               }
            });
         });
      });

         //Hapus Data
         $(document).on('click', '.delete', function(){
             if(confirm("Are you sure you want to Delete this data?"))
             {
              alert('Record deleted successfully.'); 
              location.reload();
             }
             else
             {
                 return false;
             }
         });

      </script>

   </body>
</html>