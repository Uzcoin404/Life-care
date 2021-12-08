<!DOCTYPE html>
<html lang="en">
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <title>Life Care</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css?v=<?= time()?>">
   <link rel="stylesheet" href="css/fonts.css?v=<?= time()?>">
   <link rel="stylesheet" href="css/colors.css?v=<?= time()?>">
   <link rel="stylesheet" href="css/versions.css?v=<?= time()?>">
   <link rel="stylesheet" href="css/responsive.css?v=<?= time()?>">
   <link rel="stylesheet" href="css/custom.css?v=<?= time()?>">
   </head>
   <body class="clinic_version">
      <?if($_GET['noLogin']):?>
      <h2 class="noLogin">Faqat adminlargina Bu sahifaga kira oladi Kirish uchun <a href="./?route=admin">Manzil</a></h2>
      <?endif;?>
      <div id="preloader">
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div>
      <header>
         <div class="header-top wow fadeIn">
            <div class="container">
               <a class="navbar-brand" href="#"><img src="images/logo.png" alt="image"></a>
               <div class="right-header">
                  <div class="header-info">
                     <div class="info-inner">
                        <span class="icontop"><i class="fas fa-phone-alt"></i></span>
                        <span class="iconcont"><a href="tel:800 123 456">800 123 456</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="mailto:info@yoursite.com">info@Lifecare.com</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fas fa-clock" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="#">Daily: 7:00am - 8:00pm</a></span>	
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div> 
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a class="active" href="#home">Dashboard</a></li>
                        <li><a data-scroll href="#about">Biz Haqimizda</a></li>
                        <li><a data-scroll href="#service">Servislar</a></li>
                        <li><a data-scroll href="#doctors">Shifokorlar</a></li>
                        <li><a data-scroll href="#price">Narx</a></li>
						      <li><a data-scroll href="#testimonials">Guvohlar</a></li>
                        <li><a data-scroll href="#getintouch">Biz bilan bo'g'lanish</a></li>
                     </ul>
                  </div>
                  <ul class="nav navbar-nav">
                     <li><a data-scroll href="./?route=admin">Admin</a></li>
                  </ul>
               </nav>
            </div>
         </div>
      </header>
      <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/slider-bg.png');">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="text-contant">
                     <h2>
                        <span class="center"><span class="icon"><img src="images/icon-logo.png" alt="#" /></span></span>
                        <a href="" class="typewrite" data-period="2000" data-type='[ "Life Carega Xush kelibsiz", "Biz Sizning Sogliqingiz uchun gamxormiz", "Biz Eng Zorimiz" ]'>
                        <span class="wrap"></span>
                        </a>
                     </h2>
                  </div>
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      <div id="time-table" class="time-table-section">
         <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time one" style="background:#2895f1;">
                     <span class="info-icon"><i class="fas fa-ambulance" aria-hidden="true"></i></span>
                     <h3>Yordam qutisi</h3>
                     <p>Har bir mashina birinchi yordam qutisi bilan taminlangan</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time middle" style="background:#0071d1;">
                     <span class="info-icon"><i class="fas fa-clock" aria-hidden="true"></i></span> 
                     <h3>Ish Vaqti</h3>
                     <div class="time-table-section">
                        <ul>
                           <li><span class="left">Dushanba - Juma</span><span class="right">8.00 – 18.00</span></li>
                           <li><span class="left">Shanba</span><span class="right">8.00 – 16.00</span></li>
                           <li><span class="left">Yakshanba</span><span class="right">8.00 – 13.00</span></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time three" style="background:#0060b1;">
                     <span class="info-icon"><i class="fas fa-hospital" aria-hidden="true"></i></span>
                     <h3>Klinika jadvali</h3>
                     <p> Bizning Klinikada rivojlangan texnikalar malakali tajriba ega shifokorlar  mavjud
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="about" class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Ixtisoslashgan klinika</h2>
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-6">
                  <div class="message-box">
                     <h4>Bu nima qiladi</h4>
                     <h2>Klinika Servislari</h2>
                     <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                     <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.  </p>
                     <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
               <div class="col-md-6">
                  <div class="post-media wow fadeIn">
                     <img src="images/about_03.jpg" alt="" class="img-responsive">
                     <a href="https://youtu.be/Ey0cGB2ixOQ" style=" z-index: 1" data-rel="prettyPhoto[gal]" class="playbutton"><i class="fas fa-play" style="color: #0060b1;"></i></a>
                  </div>
                  <!-- end media -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
            <hr class="hr1">
            <div class="row">
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fas fa-link"></i></a>
                        <img src="images/clinic_01.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Zamonaviy boshqaruv markazi</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/clinic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fas fa-link"></i></a>
                        <img src="images/clinic_02.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Gigienik operatsiya xonasi</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/clinic_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fas fa-link"></i></a>
                        <img src="images/clinic_03.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Katta tajribaga ega shifokorlar</h3>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fas fa-link"></i></a>
                        <img src="images/clinic_01.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Yangi operatsion qurilmalar</h3>
                  </div>
                  <!-- end service -->
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <div id="service" class="services wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-xs-12">
                  <div class="inner-services">
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                           <h4>Premium Servislar</h4>
                           <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                           <h4>KATTA LABORATORIYA</h4>
                           <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                           <h4>Mutaxasislar xaqida Batafsil</h4>
                           <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon4.png" alt="#" /></span>
                           <h4>Bolalarga G'amxo'rlik</h4>
                           <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                           <h4>YAXSHI INFRATURUKTURA</h4>
                           <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon6.png" alt="#" /></span>
                           <h4>HAR QANDAY QON BANKASI</h4>
                           <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
	  
	  <!-- doctor -->
	  
	  <div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
        <div class="container">
		
		<div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Klinikamizning tajribali mutaxasislari</h2>
            </div>

            <div class="row dev-list text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="images/doctor_01.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>Soren Bo Bostian</h3>
                            <small>Klinika Boshchisi</small>
                        </div>
                        <!-- end title -->
                        <p>Salom bolalar, men Sirbistonlik Sorenman. Men shu klinikaningning katta badiiy direktori va asoschisiman.</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fab fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="images/doctor_02.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>Bryan Saftler</h3>
                            <small>Ichki kasalliklar mutaxasisi</small>
                        </div>
                        <!-- end title -->
                        <p>Salom bolalar, men Sirbistonlik Sorenman. Men Violettaning katta badiiy rahbari va asoschisiman.</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fab fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="widget clearfix">
                        <img src="images/doctor_03.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>Matthew Bayliss</h3>
                            <small>Ortopediya bo'yicha mutaxassis</small>
                        </div>
                        <!-- end title -->
                        <p>Salom bolalar, men Sirbistonlik Sorenman. Men CareWorldning katta badiiy rahbari va asoschisiman.</p>

                        <div class="footer-social">
                            <a href="#" class="btn grd1"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="btn grd1"><i class="fab fa-github"></i></a>
                            <a href="#" class="btn grd1"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn grd1"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div>
	  
	  <div id="price" class="section pr wow fadeIn" style="background-image:url('images/price-bg.png');">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="tab-content">
                     <div class="tab-pane active fade in" id="tab1">
                        <div class="row text-center">
                           <div class="col-md-4">
                              <div class="pricing-table">
                                 <div class="pricing-table-header">
                                    <h2>Prime xonalar</h2>
                                    <h3></h3>
                                 </div>
                                 <div class="pricing-table-features">
                                    <p><i class="fa fa-envelope-o"></i> <strong>uzcointv@gmail.com</strong> </p>
                                    <p><i class="fa fa-rocket"></i> <strong>24/7</strong></p>
                                    <p><i class="fa fa-database"></i> <strong>$85</strong></p>
                                    <p><i class="fa fa-link"></i> <strong>+998 90 622 50 22</strong></p>
                                    <p><i class="fa fa-life-ring"></i> <strong>Manager</strong> Support</p>
                                 </div>
                                 <div class="pricing-table-sign-up">
                                    <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Buyurtma berish</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="pricing-table pricing-table-highlighted">
                                 <div class="pricing-table-header grd1">
                                    <h2>Biznes xonalar</h2>
                                    <h3>Bu yangi xonalardan biri</h3>
                                 </div>
                                 <div class="pricing-table-space"></div>
                                 <div class="pricing-table-text">
                                    <p></p>
                                 </div>
                                 <div class="pricing-table-features">
                                    <p><i class="fa fa-envelope-o"></i> <strong>nexia992@gmail.coom</strong></p>
                                    <p><i class="fa fa-rocket"></i> <strong>24/7</strong></p>
                                    <p><i class="fa fa-database"></i> <strong>119$</strong></p>
                                    <p><i class="fa fa-link"></i> <strong>+998 90 388 83 33</strong></p>
                                    <p><i class="fa fa-life-ring"></i> <strong>Tuzuvchi</strong> Support</p>
                                 </div>
                                 <div class="pricing-table-sign-up">
                                    <a href="#contact" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 effect-1">Buyurtma berish</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="pricing-table">
                                 <div class="pricing-table-header">
                                    <h2>Elite xonalar</h2>
                                    <h3></h3>
                                 </div>
                                 <div class="pricing-table-features">
                                    <p><i class="fa fa-envelope-o"></i> <strong>umanonym     @gmail.com</strong></p>
                                    <p><i class="fa fa-rocket"></i> <strong>24/7</strong></p>
                                    <p><i class="fa fa-database"></i> <strong>99$</strong> </p>
                                    <p><i class="fa fa-link"></i> <strong>+996 554 545 527</strong></p>
                                    <p><i class="fa fa-life-ring"></i> <strong>manager</strong> Support</p>
                                 </div>
                                 <div class="pricing-table-sign-up">
                                    <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Buyurtma berish</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end row -->
                     </div>
                  </div>
                  <!-- end content -->
               </div>
               <!-- end col -->
            </div>
         </div>
      </div>
	  
	  <!-- end doctor section -->
	  
      <div id="testimonials" class="section wb wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Guvohlar</h2>
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                  <div class="testimonial clearfix">
                     <div class="desc">
                        <h3><i class="fa fa-quote-left"></i> Ajoyib klinika! Ajoyib Support!</h3>
                        <p class="lead"Ular mening loyihamni yuqori malakali, tajribali va professional jamoa bilan raqobat bilan o'z vaqtida olishdi>.</p>
                     </div>
                     <div class="testi-meta">
                        <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                        <h4>James Fernando <small>Eng tezkor meneger</small></h4>
                     </div>
                     <!-- end testi-meta -->
                  </div>
                  <!-- end testimonial -->
               </div>
               <!-- end col -->
               <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="testimonial clearfix">
                     <div class="desc">
                        <h3><i class="fa fa-quote-left"></i>Bizga yordam berganingiz uchun tashakkur!</h3>
                        <p class="lead">Ular mening loyihamni yuqori malakali, tajribali va professional jamoa bilan raqobat bilan o'z vaqtida olishdi.</p>
                     </div>
                     <div class="testi-meta">
                        <img src="images/testi_02.png" alt="" class="img-responsive alignleft">
                        <h4>Andrew Atkinson <small>-Life Care menejeri</small></h4>
                     </div>
                     <!-- end testi-meta -->
                  </div>
                  <!-- end testimonial -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
            <hr class="invis">
            <div class="row">
               <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="testimonial clearfix">
                     <div class="desc">
                        <h3><i class="fa fa-quote-left"></i> Ajoyib klinika! Ajoyib Support!</h3>
                        <p class="lead">Ular mening loyihamni yuqori malakali, tajribali va professional jamoa bilan raqobat bilan o'z vaqtida olishdi.</p>
                     </div>
                     <div class="testi-meta">
                        <img src="images/testi_03.png" alt="" class="img-responsive alignleft">
                        <h4>Amanda DOE <small>-Tezkor manager</small></h4>
                     </div>
                     <!-- end testi-meta -->
                  </div>
                  <!-- end testimonial -->
               </div>
               <!-- end col -->
               <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                  <div class="testimonial clearfix">
                     <div class="desc">
                        <h3><i class="fa fa-quote-left"></i> Bizga yordam berganingiz uchun tashakkur!</h3>
                        <p class="lead">Ular mening loyihamni yuqori malakali, tajribali va professional jamoa bilan raqobat bilan o'z vaqtida olishdi.</p>
                     </div>
                     <div class="testi-meta">
                        <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                        <h4>Martin Johnson <small>- Goosilo asoschisi</small></h4>
                     </div>
                     <!-- end testi-meta -->
                  </div>
                  <!-- end testimonial -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      <div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Bog'lanish operatorlari</h2>
            </div>
         </div>
         <div class="contact-section">
            <div class="form-contant">
               <form id="ajax-contact" action="" method="post">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group in_name">
                           <input type="text" class="form-control" placeholder="Name" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="email" class="form-control" placeholder="E-mail" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="tel" class="form-control" id="phone" placeholder="Phone" required="required">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group in_email">
                           <input type="text" class="form-control" id="subject" placeholder="Subject" required="required">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group in_message"> 
                           <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required"></textarea>
                        </div>
                        <div class="actions">
                           <input type="submit" value="Send Message" name="submit" id="submitButton" class="btn small" title="Submit Your Message!">
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div id="googleMap" style="width:60%;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3028.1567495793065!2d72.49878311611144!3d40.62642499043895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bcf76c4feecb55%3A0x9e29736e00b785d!2sBuloqboshi%2C%20Nayman%2C%20O%60zbekiston!5e0!3m2!1suz!2skg!4v1638376872010!5m2!1suz!2skg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
         </div>
      </div>
      <footer id="footer" class="footer-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="logo padding">
                     <a href=""><img src="images/logo.png" alt=""></a>
                     <p>lifeCare biz sizning sog'lig'ingiz haqida qayg'uramiz</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-info padding">
                     <h3>Biz bilan bog'lanish</h3>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> Uzbekistan>Andijan>Buloqboshi rohat ko'cha 222-uy</p>
                     <p><i class="fa fa-paper-plane" aria-hidden="true"></i>LifeCare@gmail.com</p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i>+998 90 756 71 07</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="subcriber-info">
                     <h3>Izoh Qoldiring</h3>
                     <p>Mutaxassislarimizdan sog'lom yangiliklar, maslahatlar va muammolaringizga yechim oling..</p>
                     <div class="subcriber-box">
                        <form id="mc-form" class="mc-form">
                           <div class="newsletter-form">
                              <input type="email" autocomplete="off" id="mc-email" placeholder="Email address" class="form-control" name="EMAIL">
                              <button class="mc-submit" type="submit"><i class="fa fa-paper-plane"></i></button> 
                              <div class="clearfix"></div>
                              <!-- mailchimp-alerts Start -->
                              <div class="mailchimp-alerts">
                                 <div class="mailchimp-submitting"></div>
                                 <!-- mailchimp-submitting end -->
                                 <div class="mailchimp-success"></div>
                                 <!-- mailchimp-success end -->
                                 <div class="mailchimp-error"></div>
                                 <!-- mailchimp-error end -->
                              </div>
                              <!-- mailchimp-alerts end -->
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="copyright-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="footer-text">
                     <a href="#">Owner</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="social">
                     <ul class="social-links">
                        <li><a href=""><i class="fa fa-paper-plane"></i></a></li>
                        <li><a href=""><i class="fab fa-facebook"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-youtube"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <script src="js/all.js?v=<?= time()?>"></script>
      <script src="js/modernizer.js?v=<?= time()?>"></script>
      <script src="js/custom.js?v=<?= time()?>"></script>
   </body>
</html>
