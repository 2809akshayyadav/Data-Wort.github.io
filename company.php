<?php
include '.\include\base.html';
include '.\include\header.html';
?>
<div class="clearfix"></div>
  <div class="header-height-125"></div>
  <div class="container-fluid inner-page-nav"><!-- child-page-links -->
    <div class="row my-own-nav">
      <div class="title-container">
      </div>
    </div>
  </div>
  <div class="container">
    <p id="breadcrumbs" class="breadcrumbs fx" data-animate="fadeInDown"><span
        xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="./index.php"
            rel="v:url" property="v:title">Home</a> <span class="arrow1">&gt;</span> <strong
            class="breadcrumb_last">Company</strong></span></span></p>
  </div>
  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
  <script src="js/api_1.js"></script>
    <div>
        <link rel="stylesheet" id="style_assets" href="css/home-slide.css" type="text/css">
        <link rel="stylesheet" id="style_assets" href="css/flexslider.css" type="text/css">
        <link rel="stylesheet" id="style_assets" href="css/assets.css" type="text/css">
    </div>
  <div class="container my-marg-bot-50 page-heading-top-parent padtop70">
    <div class="row">
      <div class="container">
        <div class="heading side-head">
          <div class="head-6">
            <h1 class="main-color h3"><i class="fa fa-circle-o-notch"></i>Company</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="./about.php">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/about.png" alt=""><span
                class="my-text-break">About Us</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="./featured_clients.php">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/client.png"
                alt=""><span class="my-text-break">Featured Clients</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="./choose.php">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/why-choose.png"
                alt=""><span class="my-text-break">Why Choose Us</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="./case_studies.php">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/CaseStudy.png"
                alt=""><span class="my-text-break">Case Studies</span></div>
          </div>
        </a> </div>
      <div class="col-sm-4 col-xs-6 my-marg-top-50"> <a href="./customers_testimonials.php">
          <div class="my-custom-top-nav-area">
            <div class="my-custom-top-nav-area-inner"><img class="my-img-responsive" src="images/testimonial.png"
                alt=""><span class="my-text-break">Customers Testimonials</span></div>
          </div>
        </a> 
       </div>
    </div>
  </div>
  <br>
<?php
include '.\include\clientTestimonials.html';
include '.\include\partners.html';
include '.\include\delighted.html';
include '.\include\contactFooter.html';
include '.\include\footer.html';
?>
<!-- testimonial-->