<?php
include '.\include\base.html';
include '.\include\header.html';
?>
 
<div class="clearfix"></div>
  <div class="header-height-72"></div>
  <div class="container-fluid inner-page-nav">
    <div class="row my-own-nav">
      <div class="title-container"> </div>
    </div>
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
  <div>
    <link rel="stylesheet" id="style_assets" href="css/home-slide.css" type="text/css">
    <link rel="stylesheet" id="style_assets" href="css/flexslider.css" type="text/css">
    <link rel="stylesheet" id="style_assets" href="css/assets.css" type="text/css">
  </div>
  <div id="main-slide" class="ts-flex-slider margintopbanner">
    <div class="flexSlideshow flexslider">
      <ul class="slides">
        <li>
          <div class="overlay1">
            <div class="banneronebg-web"><img src="images/homecrm-bg.png" alt="slider"></div>
            <div class="bannertwobg-mob"><img src="images/homecrm-bg-mob.jpg" alt="slider"></div>
          </div>
          <div class="flex-caption slider-content">
            <div class="container crmbanner">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 crmheading">
                  <p>Our Team of Professionals Specialize <span>in CRM Implementation, Migration and Integration</span>
                  </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 text-center">
                  <div class="col-lg-5 col-md-12 col-sm-5 col-xm-12 text-center gold-partner">
                    <p>Salesforce Partner Since 2015</p> <img src="images/salesforce-logo.png" alt="">
                    <div class="salesforce-logo-btn"><a href="/salesforce-consulting-services/">See why companies
                        partner with Girikon</a></div>
                  </div>
                  <div class="col-lg-2 col-md-12 col-sm-2 col-xm-12 text-center separater-line-size"><span
                      class="banneronebg-web"><img src="images/separater-line-banner.png" alt=""></span> <span
                      class="bannertwobg-mob"><img src="images/separater-line-banner-mob.png" alt=""></span></div>
                  <div class="col-lg-5 col-md-12 col-sm-5 col-xm-12 text-center hubspot-partner">
                    <p>Advanced Implementation Partner </p> <img src="images/hubspot-logo-banner.png" alt="">
                    <div class="hubspot-logo-btn"><a href="/hubspot-consulting/">Facing a difficult integration? Let us
                        show you why Girikon is a Diamond Partner</a></div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
                  <div class="crafting-sec">
                    <div>
                      <p>&amp; Crafting Tomorrow with Generative AI</p>
                    </div>
                    <div><img src="images/crafting-img.png" alt="slider"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="overlay1">
            <div class="banneronebg-web"><img src="images/home-banner-bg.jpg" alt="slider"></div>
            <div class="bannertwobg-mob"><img src="images/home-banner-bg-mob.jpg" alt="slider"></div>
          </div>
          <div class="flex-caption slider-content">
            <div class="container">
              <div class="row">
                <div class="text-center banner-content">
                  <h1><strong>Salesforce Cloud Applications</strong> <span class="font-weight200">are best built
                      <strong>with us</strong>, try our focused and certified team</span></h1>
                </div>
                <div class="goldpartner">
                  <div class="separater-line"><img src="images/separater-line.png" alt="img"></div>
                  <div class="goldpartner-sec">
                    <div class="goldtext">
                      <p><span>Salesforce Partner Since 2015</span></p>
                    </div>
                    <div class="goldimg"><img src="images/gold-partner.png" alt="gold-partner"></div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="separater-line"><img src="images/separater-line.png" alt="img"></div>
                </div>
              </div>
            </div>
            <div class="circle-box"> <span class="circle fx text-center"> <a href="/offshore-salesforce-development/">
                  <div class="service-circle"><img src="images/Sales-Cloud-Logo.svg" alt=""></div>
                  <div class="service-circle-text">Sales <span>Cloud</span></div>
                </a> </span> <span class="circle fx text-center"> <a href="/salesforce-implementation-services/">
                  <div class="service-circle"><img src="images/Marketing-Cloud-Logo.svg" alt=""></div>
                  <div class="service-circle-text">Marketing <span>Cloud</span></div>
                </a> </span> <span class="circle fx text-center"> <a href="/salesforce-marketing-cloud/">
                  <div class="service-circle"><img src="images/Service-Cloud-Logo.svg" alt=""></div>
                  <div class="service-circle-text">Service <span>Cloud</span></div>
                </a> </span> <span class="circle fx text-center"> <a href="/salesforce-consulting-services/">
                  <div class="service-circle"><img src="images/Commerce-Cloud-Logo.svg" alt=""></div>
                  <div class="service-circle-text">Commerce <span>Cloud</span></div>
                </a> </span> <span class="circle fx text-center"> <a
                  href="/salesforce-communities-implementation-services/">
                  <div class="service-circle"><img src="images/Community-Cloud-Logo.svg" alt=""></div>
                  <div class="service-circle-text">Experience <span>Cloud</span></div>
                </a> </span> <span class="circle fx text-center"> <a href="/salesforce-quote-to-cash/">
                  <div class="service-circle"><img src="images/Data-Cloud-Logo.svg" alt=""></div>
                  <div class="service-circle-text">Data <span>Cloud</span></div>
                </a> </span> <span class="circle fx text-center"> <a href="/salesforce-lightning/">
                  <div class="service-circle"><img src="images/MuleSoft-Logo.svg" alt=""></div>
                  <div class="service-circle-text">MuleSoft </div>
                </a> </span> <span class="circle fx text-center"> <a href="/salesforce-consulting-services/">
                  <div class="service-circle"><img src="images/Slack-Logo.svg" alt=""></div>
                  <div class="service-circle-text">Slack <span></span></div>
                </a> </span> <span class="circle fx text-center"> <a href="/salesforce-consulting-services/">
                  <div class="service-circle"><img src="images/Tableau-Logo.svg" alt=""></div>
                  <div class="service-circle-text">Tableau <span></span></div>
                </a> </span> <span class="circle fx text-center"> <a href="/mulesoft-consulting/">
                  <div class="service-circle"><img src="images/AI-Logo.svg" alt=""></div>
                  <div class="service-circle-text">AI <span></span></div>
                </a> </span><span class="circle fx text-center"> <a href="/mulesoft-consulting/">
                  <div class="service-circle"><img src="images/Lightning-Development.svg" alt=""></div>
                  <div class="service-circle-text">Lightning <span>Development</span></div>
                </a> </span> </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
              <div class="banner-2-icon-sec">
                <div><img src="images/crafting-img-icon-banner-2.png" alt="slider"></div>
                <div><img src="images/salesforce-einstein-icon-banner-2.png" alt="slider"></div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="overlay1">
            <div class="banneronebg-web"><img src="images/hubspot-banner-bg.jpg" alt="slider"></div>
            <div class="bannertwobg-mob"><img src="images/hubspot-banner-bg-mob.jpg" alt="slider"></div>
          </div>
          <div class="flex-caption slider-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
                  <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12 hubspot-logo"><img src="images/hubspot-logo.png"
                      alt=""></div>
                  <div class="col-lg-7 col-md-12 col-sm-12 col-xm-12 hubspot-msg">
                    <h1>HubSpot</h1>
                    <p>Advanced Implementation Certified Partner</p>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 text-center hub-service"> <span
                    class="marketing-hub hub-circle"><a href="#">Marketing <br> Hub</a></span> <span
                    class="sales-hub hub-circle"><a href="#">Sales <br> Hub</a></span> <span
                    class="service-hub hub-circle"><a href="#">Service <br> Hub</a></span> <span
                    class="crm-hub hub-circle"><a href="#">CMS <br> Hub</a></span> <span
                    class="operations-hub hub-circle"><a href="#">Operations <br> Hub</a></span> </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="overlay1">
            <div class="banneronebg-web"><img src="images/banner-ai-bg-web.jpg" alt="slider"></div>
            <div class="bannertwobg-mob"><img src="images/banner-ai-bg-mob.jpg" alt="slider"></div>
          </div>
          <div class="flex-caption slider-content">
            <div class="container">
              <div class="row ai-banner">
                <div class="col-lg-6 col-md-12 col-sm-6 col-xm-12">
                  <div class="ai-banner-img">�&nbsp;</div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-6 col-xm-12">
                  <div class="ai-banner-content"> <span>Unlock the Power of Generative AI</span>
                    <p>Transforming your customer engagements and business processes with next-generation Generative AI
                      solutions!</p>
                    <div class="AI-banner-icons"> <img src="images/chatgpt-icon-120x120.png" alt="slider"> <img
                        src="images/Huggingface-icon-120x120.png" alt="slider"> <img
                        src="images/salesforce-einstein-icon-120x120.png" alt="slider"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="main-message text-center fx" data-animate="fadeInUp">
        <h3>Let Us Partner with You</h3>
        <h4>We bring the Expertise to Write Your Success Story</h4>
      </div>
    </div>
  </div>
  <div class="container-fluid fx" data-animate="fadeInUp">
    <div class="row">
      <div class="bhoechie-tab-container">
        <div class="bhoechie-tab-menu">
          <div class="list-group"> <a href="#" class="list-group-item text-center active">
              <h4 class="glyphicon glyphicon-cog icon-style"></h4> SERVICES
            </a> <a href="#" class="list-group-item text-center hide">
              <h4 class="glyphicon glyphicon-heart icon-style"></h4> PRODUCTS
            </a> <a href="#" class="list-group-item text-center">
              <h4 class="glyphicon glyphicon-th icon-style"></h4> INDUSTRIES <br class="visible-xs">
            </a> </div>
        </div>
        <div class="bhoechie-tab">
          <div class="bhoechie-tab-content active">
            <div class="home-service-bg">
              <div class="container">
                <div class="row fx home-service-box" data-animate="fadeInUp">
                  <div class="col-sm-6 col-md-6 margin">
                    <div class="service-box">
                      <div class="service-box-icon" style="width: max-content !important;"><img
                          src="images/salesforce-consulting-icon.png" alt="Salesforce Consulting"></div>
                      <div class="service-box-head">Salesforce Consulting</div>
                      <p>With an Effective team of Experienced and Certified Salesforce Experts, we make <a
                          style="color: #0e71b6; font-weight: 600"
                          href="/salesforce-implementation-services/">Salesforce Implementation</a> Simple and
                        Cost-Effective for our Partners.</p>
                      <div class="service-box-btn"><a style="display: block;"
                          href="/salesforce-consulting-services/">Read More</a></div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 margin">
                    <div class="service-box">
                      <div class="service-box-icon" style="width: max-content !important;"><img
                          src="images/hubspot-consulting-icon.png" alt="HubSpot Consulting"></div>
                      <div class="service-box-head">HubSpot Consulting</div>
                      <p>Whether you are already leveraging HubSpot or new to it, our HubSpot experts can help you make
                        the most of your implementation and integration.</p>
                      <div class="service-box-btn"><a style="display: block;" href="/hubspot-consulting/">Talk with an
                          Expert</a></div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 margin">
                    <div class="service-box">
                      <div class="service-box-icon"><img src="images/other-services-icon.png" alt="Other Services">
                      </div>
                      <div class="service-box-head">Data Services</div>
                      <p>We help organizations deal with the most pressing data management challenges while helping them
                        transform their data into a trusted source of business insight and leveraging it to maximize
                        efficiency.</p>
                      <div class="service-box-btn"><a style="display: block;" href="/talend-consulting-services/">Let us
                          show how to save time</a></div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 margin">
                    <div class="service-box">
                      <div class="service-box-icon"><img src="images/qa-services-icon_1.png" alt="HubSpot Consulting">
                      </div>
                      <div class="service-box-head">QA Services</div>
                      <p>We offer a complete range of QA services with a specialization in CRM QA. Organizations can
                        leverage these services to develop robust, scalable, and reliable software solutions in quick
                        releases.</p>
                      <div class="service-box-btn"><a style="display: block;" href="/services/qa-services/">View our QA
                          Services</a></div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 margin">
                    <div class="service-box">
                      <div class="service-box-icon"><img src="images/ai-services-icon.png" alt="HubSpot Consulting">
                      </div>
                      <div class="service-box-head">Salesforce AI services</div>
                      <p>Our end-to-end Salesforce AI services can be leveraged by organizations to enhance their
                        decision-making ability while improving their performance across different niche business areas.
                      </p>
                      <div class="service-box-btn"><a style="display: block;" href="/ai-services/">Learn More</a></div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 margin" style="display: none;">
                    <div class="service-box">
                      <div class="service-box-icon"><img src="images/custom-application-icon.png" alt="Other Services">
                      </div>
                      <div class="service-box-head">Custom Application</div>
                      <p>Our team of professionals have other software certification and experience with in other
                        technologies as well. We thrive supporting new age projects, Partner with us!</p>
                      <div class="service-box-btn"><a style="display: block;"
                          href="/services/professional-services/">Let us show how to save $$$</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bhoechie-tab-content">
            <div class="container">
              <div class="row fx" data-animate="fadeInUp">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <a class="list-quotes"
                    href="/products/vehicle-tracking-system/"> <img class="img-responsive" alt="img"
                      src="images/Vehicle-Tracking-System.jpg">
                    <div class="quotes">
                      <p><span>Vehicle Tracking System</span> The product developed is a GPS Tracking System. This
                        product uses both hardware, software, and many technologies to support the task at hand. </p>
                    </div>
                  </a></div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <a class="list-quotes"
                    href="/products/computer-aided-dispatch-system/"> <img class="img-responsive" alt="img"
                      src="images/Computer-Aided-Dispatch.jpg">
                    <div class="quotes">
                      <p><span>Computer Aided Dispatch System</span> CAD system functions include resource management,
                        call taking, location verification, dispatching, unit status management, and call disposition
                      </p>
                    </div>
                  </a></div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <a class="list-quotes" href="/products/cms/"> <img
                      class="img-responsive" alt="img" src="images/content-management-system.jpg">
                    <div class="quotes">
                      <p><span>Content Management System</span> Our Content Management Solution eliminates IT Web
                        development bottlenecks and empowers business professionals to rapidly and cost-effectively
                        publish dynamic.. </p>
                    </div>
                  </a></div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <a class="list-quotes"
                    href="/products/logistics-solutions/"> <img class="img-responsive" alt="img"
                      src="images/Logistics-Solutions.jpg">
                    <div class="quotes">
                      <p><span>Logistics Solutions</span> Our Logistics solution significantly improve customer service
                        by tracing the status of shipments, providing flight details and movement updates.. </p>
                    </div>
                  </a></div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <a class="list-quotes"
                    href="/products/e-commerce-solution/"> <img class="img-responsive" alt="img"
                      src="images/e-commerce.jpg">
                    <div class="quotes">
                      <p><span>E-Commerce Solutions</span> Girikon caters to on-line merchants that have gone beyond a
                        basic front end shopping cart and back end warehouse, order management system (WMS &amp; OMS)..
                      </p>
                    </div>
                  </a></div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <a class="list-quotes" href="/products/wms-oms/">
                    <img class="img-responsive" alt="img" src="images/wms.jpg">
                    <div class="quotes">
                      <p><span>WMS &amp; OMS</span> I-WMS is a full-featured warehouse management and automation
                        solution designed to provide companies with the tools necessary to efficiently manage
                        inventory.. </p>
                    </div>
                  </a></div>
              </div>
            </div>
          </div>
          <div class="bhoechie-tab-content">
            <div class="container">
              <div class="row fx" data-animate="fadeInUp">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <a class="list-quotes" href="/industries/education/">
                    <img class="img-responsive" alt="img" src="images/O5IMU50-1024x683.jpg">
                    <div class="quotes">
                      <p><span>Education</span> Girikon has exceptional insights in the education software development…
                      </p>
                    </div>
                  </a></div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <a class="list-quotes"
                    href="/industries/healthcare-hospitals/"> <img class="img-responsive" alt="img"
                      src="images/O6RXLT0-1024x683.jpg">
                    <div class="quotes">
                      <p><span>Health Care</span> Girikon’s Solutions for the Healthcare industry is ready for this new
                        world… </p>
                    </div>
                  </a></div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <a class="list-quotes"
                    href="/industries/life-sciences/"> <img class="img-responsive" alt="img"
                      src="images/O68I560-1024x683.jpg">
                    <div class="quotes">
                      <p><span>Life Sciences</span> We have team of professionals including domain and technical
                        consultants… </p>
                    </div>
                  </a></div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <a class="list-quotes" href="/industries/retail/">
                    <img class="img-responsive" alt="img" src="images/Retro_Tags_02_150ppp-01-1024x717.jpg">
                    <div class="quotes">
                      <p><span>Retail</span> The retail industry is ever green industry and faces lot of challenges…
                      </p>
                    </div>
                  </a></div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <a class="list-quotes"
                    href="/industries/government/"> <img class="img-responsive" alt="img"
                      src="images/bigstock-Government-Screen-Concept-63653218-1024x717.jpg">
                    <div class="quotes">
                      <p><span>Government</span> With over decade of experience in working with national and state
                        governments… </p>
                    </div>
                  </a></div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <a class="list-quotes" href="/industries/media/">
                    <img class="img-responsive" alt="img"
                      src="images/bigstock-Media-technologies-concept-30247733-1024x717.jpg">
                    <div class="quotes">
                      <p><span>Media</span> Girikon expertise with a broad range of technology skills to help media
                        industry… </p>
                    </div>
                  </a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid home-generative-AI-services-section-001 fx" data-animate="fadeInUp">
    <div class="row">
      <div class="main-heading centered margintb fx animated fadeInUp" data-animate="fadeInUp">
        <h4 class="sub-title"><span>Generative</span> <span class="main-color"> AI Services</span></h4>
        <div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
      </div>
    </div>
    <div class="container home-generative-AI-services">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-xm-12">
          <div class="homepage-gais">
            <p>Our skilled experts utilize generative artificial intelligence to develop robust applications that open
              limitless possibilities. Through the seamless incorporation of generative AI into your digital products,
              we assist in boosting efficiency, streamlining processes, and propelling your business to new heights.</p>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12">
              <div class="homepage-gais-box">
                <div class="homepage-gais-box-img"><img src="images/Generative-AI-Model-Development-icon-w.png"
                    alt="Salesforce Consulting"></div> <a href="/generative-ai-development-services/">Generative AI
                  <span>Model Development</span></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12">
              <div class="homepage-gais-box">
                <div class="homepage-gais-box-img"><img src="images/Generative-AI-Model-Replication-icon-w.png"
                    alt="Salesforce Consulting"></div> <a href="/generative-ai-development-services/">Generative AI
                  <span>Model Replication</span></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12">
              <div class="homepage-gais-box">
                <div class="homepage-gais-box-img"><img src="images/Model-Integration-and-Deployment-icon-w.png"
                    alt="Salesforce Consulting"></div> <a href="/generative-ai-development-services/">Model Integration
                  <span>and Deployment</span></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12">
              <div class="homepage-gais-box">
                <div class="homepage-gais-box-img"><img src="images/Upgrade-and-Maintenance-icon-w.png"
                    alt="Salesforce Consulting"></div> <a href="/generative-ai-development-services/">Upgrade <span>and
                    Maintenance</span></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12">
              <div class="homepage-gais-box">
                <div class="homepage-gais-box-img"><img src="images/AI-Model-Fine-Tuning-icon-w.png"
                    alt="Salesforce Consulting"></div> <a href="/generative-ai-development-services/">AI Model
                  <span>Fine Tuning</span></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12">
              <div class="homepage-gais-box">
                <div class="homepage-gais-box-img"><img src="images/AI-Model-Architecting-icon-w.png"
                    alt="Salesforce Consulting"></div> <a href="/generative-ai-development-services/">AI Model
                  <span>Architecting</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid home-product-section">
    <div class="row">
      <div class="main-heading centered margintb fx animated fadeInUp" data-animate="fadeInUp">
        <h4 class="sub-title"><span>Our</span> <span class="main-color"> Products</span></h4>
        <div class="heading-separator"><span class="main-bg"></span><span class="dark-bg"></span></div>
      </div>
    </div>
    <div class="container home-product">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 fx" data-animate="fadeInUp">
          <div class="homepage-product-box">
            <div class="product-box-head">Schema Grid</div>
            <div class="icon_arrow"><a href="https://www.schemagrid.com/" target="_blank"></a></div>
            <div class="row D-flax">
              <div class="col-lg-9 col-md-3 col-sm-9 col-xm-12">
                <p>Schema Grid is a web app for the HubSpot ecosystem and provides functionality to view all the objects
                  at one place with their list of properties and shows the relationship between them. Schema Grid
                  connects to the user’s HubSpot account and retrieves all the Object Schema… <a
                    href="https://www.schemagrid.com/" target="_blank">Read More</a></p>
              </div>
              <div class="col-lg-3 col-md-9 col-sm-3 col-xm-12 text-right img-v-center W-avai-hub">
                <div><a href="https://www.schemagrid.com/" target="_blank"><img src="images/available-on-hubspot.png"
                      alt=""></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12" data-animate="fadeInUp">
          <div class="homepage-product-box fl-right">
            <div class="product-box-head">GirikSMS App</div>
            <div class="icon_arrow"><a
                href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3A00000ErAobUAF&amp;preview=%222020-05-27T18%3A38%3A07.000Z%22"
                target="_blank"></a></div>
            <div class="row D-flax">
              <div class="col-lg-9 col-md-3 col-sm-9 col-xm-12">
                <p>GirikSMS App is a CRM-powered text messaging App that allows businesses to manage customer
                  interactions, streamline communication, and increase engagement through text messaging. Built natively
                  on the Salesforce platform, the App is empowered with generative AI (ChatGPT) capabilities enabling
                  users to provide immediate and personalized responses to common customer queries. <a
                    href="https://www.giriksms.com/" target="_blank">Read More</a></p>
              </div>
              <div class="col-lg-3 col-md-9 col-sm-3 col-xm-12 text-right img-v-center">
                <div><a
                    href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3A00000ErAobUAF&amp;preview=%222020-05-27T18%3A38%3A07.000Z%22"
                    target="_blank"><img src="images/available-on-appexcange.png" alt=""></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 fx" data-animate="fadeInUp">
          <div class="homepage-product-box">
            <div class="product-box-head">GirikForm Builder</div>
            <div class="icon_arrow"><a
                href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3A00000FYEH1UAP"
                target="_blank"></a></div>
            <div class="row D-flax">
              <div class="col-lg-9 col-md-3 col-sm-9 col-xm-12">
                <p>Collecting information from customers and employees is a critical part of running your business.
                  However, if you find out that your business has wasted an enormous amount of time on building and
                  creating form, Girikon’s Form Builder can save you a lot of headache!… <a
                    href="https://www.girikformbuilder.com/">Read More</a></p>
              </div>
              <div class="col-lg-3 col-md-9 col-sm-3 col-xm-12 text-right img-v-center">
                <div><a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3A00000FYEH1UAP"
                    target="_blank"><img src="images/available-on-appexcange.png" alt=""></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?php
include '.\include\clientTestimonials.html';
include '.\include\partners.html';
include '.\include\delighted.html';
include '.\include\contactFooter.html';
include '.\include\footer.html';
?>
