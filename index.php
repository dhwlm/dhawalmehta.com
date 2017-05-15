<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dhawal Mehta | Developer | Guitarist</title>
    <meta name="description" content="Dhawal Mehta is an experienced User Interface Designer & Developer with a demonstrated history of working in the internet industry.">
    <meta name="keywords" content="UI, CMS, Ecommerce, CodeIgniter, Bootstrap, Chrome Extension, Photoshop, Wordpress, AJAX, Responsive Design, Opencart, HTML5, CSS3, jQuery, Javascript, guitar, PRS, Paul Reed Smith, Line6, line 6, POD HD500, POD, HD500, Dhawal Mehta, Dhawal, Mehta">
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />

    <!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
    <script src="js/modernizr.custom.25376.js"></script>

  </head>
  <body>

    <div id="perspective" class="perspective effect-rotatetop">

      <div class="container">
        <div class="wrapper">
          <div class="row">
            <div class="col-lg-12 intro-cont">
              <div class="intro text-center">
                <img src="img/bg2.png" alt="Dhawal Mehta | Developer | Web Designer | Web Developer | Guitarist">
                I am <div class="intro-text-type"></div>

              </div>
              <div class="branding text-center">
                <p><button id="showMenu"><i class="fa fa-bars" aria-hidden="true"></i> Know More</button></p>
                Dhawal Mehta &copy; 2017 <a href="http://www.dhawalmehta.com" title="Dhawal Mehta">dhawalmehta.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="outer-nav bottom horizontal">
				<a href="javascript:void(0);" onclick="returnHome();"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
				<a href="http://blog.dhawalmehta.com/"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Blog</a>
				<a href="https://www.facebook.com/dhawal.mehta.75"><i class="fa fa-facebook-official" aria-hidden="true"></i>Facebook</a>
				<a href="https://twitter.com/dhwlm"><i class="fa fa-twitter-square" aria-hidden="true"></i>Twitter</a>
				<a href="https://www.linkedin.com/in/dhwlm"><i class="fa fa-linkedin-square" aria-hidden="true"></i>LinkedIn</a>
				<a href="https://github.com/dhwlm"><i class="fa fa-github-square" aria-hidden="true"></i>GitHub</a>
				<a href="https://www.instagram.com/dhwl_m"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a>
			</nav>

    </div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/classie.js"></script>
		<script src="js/menu.js"></script>
    <script src="js/common.js"></script>

		<script>

    $(function(){
        $(".intro-text-type").typed({
          strings: [ "Dhawal Mehta. ","a Web Developer. ","a Guitarist. "],
          loop: true,
          typeSpeed: 0,
          backDelay: 1000
        });
    });

    function returnHome() {
        var clickHandler = ('ontouchstart' in document.documentElement ? "touchstart" : "click");
        $('.container').trigger(clickHandler);
    };
		</script>

   <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

     ga('create', 'UA-98471073-1', 'auto');
     ga('send', 'pageview');

   </script>
  </body>
</html>
