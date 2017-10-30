<?php include_once('header.php'); ?>

  <style>
  * {margin: 0; padding: 0; -webkit-transition: all 0.65s ease;-moz-transition: all 0.65s ease;-ms-transition: all 0.65s ease;-o-transition: all 0.65s ease;transition: all 0.65s ease;}

  body {background: url(img/gif-load.gif) center center no-repeat  #000; }

  #grid {
    /* Prevent vertical gaps */
    line-height: 0;

    -webkit-column-count: 5;
    -webkit-column-gap:   0px;
    -moz-column-count:    5;
    -moz-column-gap:      0px;
    column-count:         5;
    column-gap:           0px;
  }


  #grid img {
    /* Just in case there are inline attributes */
    width: 100% !important;
    height: auto !important;
    opacity: 0;
    transform: rotate(-10deg);
  }

  #grid img.show{
    opacity: 1;
    transform: rotate(0deg);
  }

  .go-back{position: fixed; right: 20px; bottom: 20px; padding: 10px; font-size: 18px; line-height: 1; color: #FFF; background: #ed8151; box-shadow: 0px 0px 20px 2px rgba(255,255,255,0.6); -webkit-box-shadow: 0px 0px 20px 2px rgba(255,255,255,0.6); }
  .go-back:hover{background: #e86a32; color: #FFF; transform: translateY(-2px);box-shadow: 0px 3px 15px 1px rgba(255,255,255,0.4); -webkit-box-shadow: 0px 3px 15px 1px rgba(255,255,255,0.4); }

  @media (max-width: 1799px) {
    #grid {
    -moz-column-count:    4;
    -webkit-column-count: 4;
    column-count:         4;
    }
  }

  @media (max-width: 1499px) {
    #grid {
    -moz-column-count:    3;
    -webkit-column-count: 3;
    column-count:         3;
    }
  }

  @media (max-width: 1000px) {
    #grid {
    -moz-column-count:    2;
    -webkit-column-count: 2;
    column-count:         2;
    }
  }

  @media (max-width: 400px) {
    #grid {
    -moz-column-count:    1;
    -webkit-column-count: 1;
    column-count:         1;
    }
  }
  </style>

    <section id="grid">
      <img src="img/gallery/dhawal-mehta-28.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-12.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-23.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-11.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-25.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-24.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-2.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-20.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-6.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-8.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-26.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-21.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-9.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-18.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-1.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-10.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-4.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-13.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-15.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-14.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-27.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-16.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-17.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-3.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-19.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-29.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-22.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-7.jpg" alt="Dhawal Mehta">
      <img src="img/gallery/dhawal-mehta-5.jpg" alt="Dhawal Mehta">
    </section>

    <a href="http://dhawalmehta.com/" class="go-back">Go Back</a>

    <script>

    $(window).load(function () {
      $("#grid img").each(function () {
        $(this).addClass("show");
      });
    });

    </script>
<?php include_once('footer.php'); ?>
