<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Evorail Asset Management</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--        <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico" type="image/x-icon">-->


    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url()?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/css/creative.css" rel="stylesheet">
<style>
            .footer {
                position: static;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: #2E2E2E;
                color: white;
                text-align: center;
                padding-top: 8px;
                padding-bottom: 10px
            }
        </style>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">Evorail</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url()?>/login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url()?>/register">Signup</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img class="d-block w-100" src="<?php echo base_url()?>assets/images/slider_1.jpg" alt="First slide">
                      <div class="carousel-caption">
                          <h3>Evolution in Rail Technology</h3>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo base_url()?>assets/images/slider_2.jpg" alt="Second slide">
                      <div class="carousel-caption">
                          <h3>Rebuilds and Manufacture</h3>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo base_url()?>assets/images/slider_3.jpg" alt="Third slide">
                      <div class="carousel-caption">
                          <h3>Modernisation and Conversions</h3>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo base_url()?>assets/images/slider_4.jpg" alt="Fourth slide">
                      <div class="carousel-caption">
                          <h3>Asset Management</h3>
                      </div>
                  </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">About Us</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4"><b>Evorail</b> provides repair and rebuild, manufacturing, spares, maintenance and asset management services to the rail resources and infrastructure sectors and business process outsourcing services to these users. Its clients are large companies, governments and institutions in Africa, South America and the Middle East. Evorail has partnerships with international technology providers including CAF (Spain), ABB, TSA (Austria), ATS (USA), Caterpillar, Cummins and several South African manufacturers.</p>
          </div>
        </div>
      </div><br><br><br>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Services</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <h3 class="mb-3">Diesel Rebuild and Manufacture</h3>
              <p class="text-muted mb-0">Generally the locomotive engine is overhauled, every 7 to 11 years to reduce maintenance cost, maintain efficiency and emissions.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <h3 class="mb-3">Control System Upgrade of Locomotives</h3>
              <p class="text-muted mb-0">Tried and tested in the African environment utilizing Siemens PLC hardware platforms industrialized locomotive control system.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <h3 class="mb-3">AC conversion of Locomotives</h3>
              <p class="text-muted mb-0">Remanufacturing and overhauls are both options to increase the life of your locomotive.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <h3 class="mb-3">Parts Sourcing</h3>
              <p class="text-muted mb-0">We specialise in the sourcing of obsolete or hard to find parts. We are a leading supplier of consumable and repairable electric and diesel-electric locomotive and rolling stock spare parts.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
        <!--Section: Contact v.1-->
        <div class="container">
            <section class="section pb-5">
                <!--Section heading-->
                
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Contact Us</h2>
            <hr class="my-4">
          </div>
        </div>
                <!--Section description-->
                <p class="section-description pb-4">
                    Please enter your contact details in the form below. An Evorail representative will be in contact with you shortly.
                </p>

                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-5 mb-4">

                        <!--Form with header-->
                        <div class="card">

                            <div class="card-body">
                                <!--Header-->
                                <div class="form-header blue accent-1">
                                    <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                                </div>
<!--                                <p>We'll write rarely, but only the best content.</p>-->
                                <br>

                                <!--Body-->
                                <div class="md-form">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input type="text" id="form-name" class="form-control">
                                    <label for="form-name">Your name</label>
                                </div>

                                <div class="md-form">
                                    <i class="fa fa-envelope prefix grey-text"></i>
                                    <input type="text" id="form-email" class="form-control">
                                    <label for="form-email">Your email</label>
                                </div>

                                <div class="md-form">
                                    <i class="fa fa-tag prefix grey-text"></i>
                                    <input type="text" id="form-Subject" class="form-control">
                                    <label for="form-Subject">Subject</label>
                                </div>

                                <div class="md-form">
                                    <i class="fa fa-pencil prefix grey-text"></i>
                                    <textarea type="text" id="form-text" class="form-control md-textarea" rows="3"></textarea>
                                </div>

                                <div class="text-center mt-4">
                                    <button class="btn btn-light-blue">Submit</button>
                                </div>

                            </div>

                        </div>
                        <!--Form with header-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-7">

                        <!--Google map-->
                        <div  class="z-depth-1-half map-container" style="height: 400px">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.9209584058917!2d28.280735714360947!3d-26.199249383440044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9517cf22c2a475%3A0x6ffd4df0505fcba0!2s35+Atlas+Rd%2C+Anderbolt%2C+Boksburg%2C+1459!5e0!3m2!1sen!2sza!4v1539735742170" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                        <br><br><br>
                        <!--Buttons-->
                        <div class="row text-center">
                            <div class="col-md-4">
                                <a class="btn-floating blue accent-1"><b>Address:</b></a>
                                <p>35 Atlas Rd, Anderbolt</p>
                                <p>Boksburg, South Africa</p>
                                <p><em>Opening hours</em></p>
                                <p>Mon - Fri, 07:00-22:00</p>
                                <p>Sun, 07:00-15:00</p>
                            </div>

                            <div class="col-md-4">
                                <a class="btn-floating blue accent-1"><b>Telephone:</b></a>
                                <p>+27 11 894 2238</p>
                                <a class="btn-floating blue accent-1"><b>Fax:</b></a>
                                <p>+27 11 894 2238</p>
                            </div>

                            <div class="col-md-4">
                                <a class="btn-floating blue accent-1"><b>Email:</b></a>
                                <p><a href="mailto:info@evorail.co.za">info@evorail.co.za</a></p>
                                <a class="btn-floating blue accent-1"><b>Website:</b></a>
                                <p><a href="http://evorail.co.za/contact-us/" target="blank_">www.evorail.co.za</a></p>
                            </div>
                        </div>

                    </div>
                    <!--Grid column-->

                </div>

            </section>
        </div>
        <!--Section: Contact v.1-->

        <!--Google Maps-->
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url()?>assets/js/creative.min.js"></script>
    
<script src="https://maps.google.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="<?php echo base_url()?>assets/js/map.js"></script>
  </body>

</html>





































































































