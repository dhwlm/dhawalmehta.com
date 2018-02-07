<?php include_once('header.php'); ?>

    <div id="perspective" class="perspective effect-rotatetop">

      <div class="container">
        <div class="wrapper">
          <div class="row">
            <div class="col-lg-12 intro-cont">
              <h1 class="intro text-center">
                <img src="img/dhawal-mehta.png" alt="Dhawal Mehta, Developer, Web Designer, Web Developer, Guitarist">
                I am <div class="intro-text-type"></div>
              </h1>
              <div class="branding text-center">
                <p><button id="showMenu" onclick="ga('send', 'event', 'know more clicked');"><i class="fa fa-bars" aria-hidden="true"></i> Know More</button></p>
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
				<a href="gallery.php"><i class="fa fa-picture-o" aria-hidden="true"></i>Gallery</a>
			</nav>

    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/typed.min.js"></script>
    <script src="js/classie.min.js"></script>
    <script src="js/menu.min.js"></script>
    <script src="js/common.min.js"></script>

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

<?php include_once('footer.php'); ?>
