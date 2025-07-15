<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Ponpes Sumurnangka</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="profile/assets/img/logo/sumurnangka-icon.png">

      <!-- CSS here -->
      <link rel="stylesheet" href="{{ asset('profile/assets/css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('profile/assets/css/animate.css') }}">
      <link rel="stylesheet" href="{{ asset('profile/assets/css/swiper-bundle.css') }}">
      <link rel="stylesheet" href="{{ asset('profile/assets/css/splide.css') }}">
      <link rel="stylesheet" href="{{ asset('profile/assets/css/slick.css') }}">
      <link rel="stylesheet" href="{{ asset('profile/assets/css/nouislider.css') }}">
      <link rel="stylesheet" href="{{ asset('profile/assets/css/magnific-popup.css') }}">
      <link rel="stylesheet" href="{{ asset('profile/assets/css/font-awesome-pro.css') }}">
      <link rel="stylesheet" href="{{ asset('profile/assets/css/spacing.css') }}">
      <link rel="stylesheet" href="{{ asset('profile/assets/css/main.css') }}">
      <link rel="stylesheet" href={{ "https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"  }}/>
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
	  <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	  <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />		<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href= "{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet"  type="text/css" />
    <base href="{{ url('/') }}">
    <!--end::Global Stylesheets Bundle-->
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


      <!-- pre loader area start -->
         {{-- <div id="loading" class="">
            <div id="loading-center">
               <div id="loading-center-absolute">
                  <div class="object" id="object_four"></div>
                  <div class="object" id="object_three"></div>
                  <div class="object" id="object_two"></div>
                  <div class="object" id="object_one"></div>
               </div>
            </div>
         </div> --}}
      <!-- pre loader area end -->


      <!-- back to top start -->
         <div class="back-to-top-wrapper">
            <button id="back_to_top" type="button" class="back-to-top-btn">
               <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
            </button>
         </div>
      <!-- back to top end -->

      <!-- search popup start -->
         <div class="search__popup">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="search__wrapper">
                        <div class="search__top d-flex justify-content-between align-items-center">
                           <div class="search__logo">
                              <a href="home-main.html">
                                 <img src="profile/assets/img/logo/footer-logo.png" alt="logo">
                              </a>
                           </div>
                           <div class="search__close">
                              <button type="button" class="search__close-btn search-close-btn">
                                 <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </button>
                           </div>
                        </div>
                        <div class="search__form">
                           <form action="#">
                              <div class="search__input">
                                 <input class="search-input-field" type="text" placeholder="Type here to search...">
                                 <span class="search-focus-border"></span>
                                 <button type="submit">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                 </button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="search-popup-overlay"></div>
      <!-- search popup end -->

      <!-- offcanvas area start -->
         <div class="offcanvas__area">
            <div class="offcanvas__wrapper">
               <div class="offcanvas__close">
                  <button class="offcanvas__close-btn offcanvas-close-btn">
                     <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     </svg>
                  </button>
               </div>
               <div class="offcanvas__content">
                  <div class="offcanvas__top mb-50 d-flex justify-content-between align-items-center">
                     <div class="offcanvas__logo logo">
                        <a href="home-main.html">
                           <img src="profile/assets/img/logo/kominfo-logo.png" alt="logo">
                        </a>
                     </div>
                  </div>
                  <div class="mobile-menu fix d-lg-none"></div>
                  <div class="tp-mobile-menu-pos"></div>
                  <div class="offcanvas__popup">
                     <p>Web designing in a powerful way of just not an only professions. We have tendency to believe the idea that smart looking .</p>
                     <div class="offcanvas__popup-gallery">
                        <h4 class="offcanvas__title">Gallery</h4>
                        <a class="popup-image" href="profile/assets/img/portfolio/img-1.jpg">
                           <img src="profile/assets/img/portfolio/img-1.jpg" alt="">
                        </a>
                        <a class="popup-image" href="profile/assets/img/portfolio/img-2.jpg">
                           <img src="profile/assets/img/portfolio/img-2.jpg" alt="">
                        </a>
                        <a class="popup-image" href="profile/assets/img/portfolio/img-3.jpg">
                           <img src="profile/assets/img/portfolio/img-3.jpg" alt="">
                        </a>
                        <a class="popup-image" href="profile/assets/img/portfolio/img-4.jpg">
                           <img src="profile/assets/img/portfolio/img-4.jpg" alt="">
                        </a>
                        <a class="popup-image" href="profile/assets/img/portfolio/img-5.jpg">
                           <img src="profile/assets/img/portfolio/img-5.jpg" alt="">
                        </a>
                        <a class="popup-image" href="profile/assets/img/portfolio/img-6.jpg">
                           <img src="profile/assets/img/portfolio/img-6.jpg" alt="">
                        </a>
                     </div>
                  </div>
                  <div class="offcanvas__contact">
                     <h4 class="offcanvas__title">Contacts</h4>
                     <div class="offcanvas__contact-content d-flex">
                        <div class="offcanvas__contact-content-icon">
                           <i class="fa-sharp fa-solid fa-location-dot"></i>
                        </div>
                        <div class="offcanvas__contact-content-content">
                           <a href="https://www.google.com/maps/search/86+Road+Broklyn+Street,+600+New+York,+USA/@40.6897806,-74.0278086,12z/data=!3m1!4b1">86 Road Broklyn Street, 600 </a>
                        </div>
                     </div>
                     <div class="offcanvas__contact-content d-flex">
                        <div class="offcanvas__contact-content-icon">
                           <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="offcanvas__contact-content-content">
                           <a href="mailto:needhelp@company.com"> Needhelp@company.com  </a>
                        </div>
                     </div>
                     <div class="offcanvas__contact-content d-flex">
                        <div class="offcanvas__contact-content-icon">
                           <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="offcanvas__contact-content-content">
                           <a href="tel:01310-069824"> +92 666 888 0000</a>
                        </div>
                     </div>
                  </div>
                  <div class="offcanvas__social">
                     <a class="icon facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                     <a class="icon twitter" href="#"><i class="fab fa-twitter"></i></a>
                     <a class="icon youtube" href="#"><i class="fab fa-youtube"></i></a>
                     <a class="icon linkedin" href="#"><i class="fab fa-linkedin"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="body-overlay"></div>
      <!-- offcanvas area end -->


      <!-- header area start -->
         <header class="tp-header-area tp-header-height p-relative">
            <div class="tp-header-top tp-header-space d-none d-xl-block">
               <div class="container-fluid">
                  <div class="row align-items-center">
                     <div class="col-xxl-6 col-xl-8">
                        <div class="tp-header-top-info">
                           <ul>
                              <li>
                                 <a href="https://maps.app.goo.gl/onuj6PUrZqKuYUKD9" target="_blank"><span><i class="fa-sharp fa-solid fa-location-dot"></i></span>Ponpes Sumurnangka Ath-Tholhawiyah</a>
                              </li>
                              <li>
                                 <a><span><i class="fa-solid fa-clock"></i></span>Senin - Jumat 07.00 - 16.00</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-4">
                        <div class="tp-header-top-right d-flex justify-content-end align-items-center">
                           <div class="header-call">
                              <a href="tel:0812-4910-7363"><i class="fa-solid fa-phone"></i>0812-4910-7363</a>
                           </div>
                           <div class="header-social d-xxl-block d-none">
                              {{--  <a href="www.facebook.com/KominfoBondowoso"><i class="fa-brands fa-facebook"></i> Facebook</a>  --}}
                              <a href="www.youtube.com/c/KominfoBondowoso"><i class="fa-brands fa-youtube"></i> You Tube</a>
                              <a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a>
                           </div>
                           <div  style="margin-inline: 7px"class="d-xxl-block d-none">
                               <div class="btn  btn-success">
                               <a href="login"><i class=" "></i> Login</a>
                            </div>
                           </div>

                        </div>
                    </div>
                  </div>
               </div>
            </div>
            <div id="header-sticky" class="tp-header-bottom header__sticky p-relative">
               <div class="tp-header-bottom-space p-relative">
                  <div class="container-fluid gx-0">
                     <div class="row gx-0 align-items-center">
                        <div class="col-xxl-3 col-xl-3">
                        <div class="tp-header-main-left d-flex align-items-center p-relative">
                           <div class="tp-header-hamburger-btn offcanvas-open-btn" data-background="profile/assets/img/icon/header-hamburger-shape.png">
                              <button class="hamburger-btn">
                                 <span>
                                    <svg width="29" height="24" viewBox="0 0 29 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M0 1.13163C0 0.506972 0.499692 0 1.11538 0H20.4487C21.0644 0 21.5641 0.506972 21.5641 1.13163C21.5641 1.7563 21.0644 2.26327 20.4487 2.26327H1.11538C0.499692 2.26327 0 1.7563 0 1.13163ZM27.8846 10.5619H1.11538C0.499692 10.5619 0 11.0689 0 11.6935C0 12.3182 0.499692 12.8252 1.11538 12.8252H27.8846C28.5003 12.8252 29 12.3182 29 11.6935C29 11.0689 28.5003 10.5619 27.8846 10.5619ZM14.5 21.1238H1.11538C0.499692 21.1238 0 21.6308 0 22.2555C0 22.8801 0.499692 23.3871 1.11538 23.3871H14.5C15.1157 23.3871 15.6154 22.8801 15.6154 22.2555C15.6154 21.6308 15.1157 21.1238 14.5 21.1238Z" fill="currentColor"/>
                                       </svg>
                                 </span>
                              </button>
                              </div>
                              <div class="tp-header-logo">
                                 <a href="/">
                                    <img src="profile/assets/img/logo/sumurnangka-logo2.png" alt="">
                                 </a>
                              </div>
                           </div>
                           </div>
                        <div class="col-xxl-8 col-xl-8 d-none d-xl-block" >
                           <div class="tp-main-menu-area counter d-flex align-items-center" >
                              <div class="tp-main-menu menu-icon f-1" style="font-weight: 900">
                                 <nav id="tp-mobile-menu">
                                    <ul>
                                       <li >
                                          <a href="/">BERANDA</a>
                                       </li>
                                       <li class="has-dropdown"><a href="">TENTANG</a>
                                       <ul class="submenu">
                                          <li><a href="/visimisi">VISI & MISI</a></li>
                                          <li><a href="/tugas">Tugas Pokok & Fungsi</a></li>
                                          <li><a href="/struktur">Struktur Organisasi</a></li>
                                       </ul>
                                       </li>
                                       <li class="has-dropdown"><a href="">LAYANAN</a>
                                       <ul class="submenu">
                                          <li><a href="/e-goverment">E-Goverment</a></li>
                                          <li><a href="/PPID">PPID</a></li>
                                       </ul>
                                       </li>
                                       <li><a href="/bondowosomelesat">BULETIN</a></li>
                                       <li><a href="/berita">BERITA</a></li>
                                       <li class="has-dropdown"><a href="">GALERI</a>
                                          <ul class="submenu">
                                             <li><a href="galerifoto">Galeri Foto</a></li>
                                             <li><a href="galerivideo">Galeri Video</a></li>
                                          </ul>
                                       </li>
                                       <li><a href="#" title="contact">KONTAK KAMI</a></li>
                                    </ul>
                                 </nav>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
      <!-- header area end -->

      <main>

        @yield('konten_web')

      </main>

      <!-- footer area start -->
      <footer class="tp-footer-area p-relative">
            <div class="tp-footer-bg" data-background="profile/assets/media/footer/footer-bg.jpg"></div>
            <div class="container container-large">
               <div class="tp-footer-main-area">
                  <div class="row">
                     <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-footer-widget tp-footer-col-1">
                           <div class="tp-footer-logo">
                           <a href="/"> <img src="profile/assets/img/logo/sumurnangka-logo2.png" alt=""></a>
                           </div>
                           <div class="tp-footer-widget-content">
                              <p class="p">Ponpes Sumurnangka Ath-Tholhawiyah</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-footer-widget tp-footer-col-2">

                           </div>
                     </div>
                     <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-footer-widget tp-footer-col-3">

                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-5 col-md-6">
                        <div class="tp-footer-widget tp-footer-col-4">
                           <div class="tp-footer-main-mail">
                              <a href="kominfo@bondowosokab.go.id"><i class="fa-light fa-message-dots"></i> ponpessumurnangka@gmail.com <br> +6281 24910 7363</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tp-footer-copyright-area p-relative">
                  <div class="row">
                     <div class="col-md-12 col-lg-6">
                        <div class="tp-footer-copyright-inner">
                           <p> © Copyright <span>©2025</span> L. All Rights Reserved</p>
                        </div>
                     </div>
                     {{--  <div class="col-md-12 col-lg-6">
                        <div class="tp-footer-copyright-inner text-lg-end">
                           <a href="#">Terms and conditions</a>
                           <a class="ml-50" href="#"> Privacy policy</a>
                        </div>
                     </div>  --}}
                  </div>
               </div>
            </div>
      </footer>
      <!-- footer area end -->


      <!-- JS here -->
      <script src="profile/assets/js/vendor/jquery.js"></script>
      <script src="profile/assets/js/vendor/waypoints.js"></script>
      <script src="profile/assets/js/bootstrap-bundle.js"></script>
      <script src="profile/assets/js/meanmenu.js"></script>
      <script src="profile/assets/js/swiper-bundle.js"></script>
      <script src="profile/assets/js/splide.js"></script>
      <script src="profile/assets/js/slick.min.js"></script>
      <script src="profile/assets/js/purecounter.js"></script>
      <script src="profile/assets/js/nouislider.js"></script>
      <script src="profile/assets/js/magnific-popup.js"></script>
      <script src="profile/assets/js/nice-select.js"></script>
      <script src="profile/assets/js/wow.js"></script>
      <script src="profile/assets/js/gsap.min.js"></script>
      <script src="profile/assets/js/split-text.min.js"></script>
      <script src="profile/assets/js/scrool-triger.js"></script>
      <script src="profile/assets/js/scrollMagic.min.js"></script>
      <script src="profile/assets/js/parallax-scroll.js"></script>
      <script src="profile/assets/js/animation.gsap.min.js"></script>
      <script src="profile/assets/js/isotope-pkgd.js"></script>
      <script src="profile/assets/js/imagesloaded-pkgd.js"></script>
      <script src="profile/assets/js/jquery-appear.js"></script>
      <script src="profile/assets/js/jquery-knob.js"></script>
      <script src="profile/assets/js/ajax-form.js"></script>
      <script src="profile/assets/js/main.js"></script>
   </body>
</html>
