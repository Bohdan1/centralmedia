
<footer>
  <div class="footer">
    <div class="row">
      <div class="col l6 m12 s12">
        <a href="#"><img class="footer-logo" src="<?php bloginfo('template_url') ?>/img/logo/CMedia.svg" alt="Логотип"></a>
        <p class="footer-about">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <div class="clear"></div>


      </div>
      <div class="col l6 m12 s12">
        <div class="footer-menu">
          <span><a class="hover-link menu-link" href="#">ВІДЕО</a></span>
          <span><a class="hover-link menu-link" href="#">СТАТТІ</a></span>
          <span><a class="hover-link menu-link" href="#">БЛОГИ</a></span>

        </div>
        <div class="social-menu-footer">

          <div class="footer-menu-icons"><a href="#modal2" ><img class="social-logo-footer" src="<?php bloginfo('template_url') ?>/img/social/search.svg" alt="Логотип"></a></div>

          <div class="footer-menu-icons"><a href="#"><img class="social-logo-footer" src="<?php bloginfo('template_url') ?>/img/social/facebook.svg" alt="Логотип"></a>
          </div>


          <div class="footer-menu-icons"><a href="#" ><img class="social-logo-footer" src="<?php bloginfo('template_url') ?>/img/social/twitter.svg" alt="Логотип"></a>
          </div>

          <div class="footer-menu-icons"><a href="#" ><img  class="social-logo-footer" src="<?php bloginfo('template_url') ?>/img/social/youtube.svg" alt="Логотип"></a>
          </div>
        </div>

        <div class="social-text-footer">
          <div>
            Засновник проекту: Олег Стефанюк<br>
            Головний редактор: Олег Стефаюк<br>
            Редактор-засновник: Олег Стефанюк<br>
            E-mail редакції: email@gmail.com<br>
            Webmaster: email@gmail.com
          </div>
        </div>

      </div>
    </div>
    <div class="madeby">
      Made by PLATFORM IT-COMPANY
    </div>
  </div>

</footer>

<div id="people-share">
  <img class="pencil" src="<?php bloginfo('template_url') ?>/img/pencil12.png" alt="Логотип">
</div>
<div id="back-to-top">
  <img class="arrow-up" src="<?php bloginfo('template_url') ?>/img/up-arrow.svg" alt="Логотип">
</div>


<?php wp_footer(); ?>
<script>
  var limit     = $(window).height()/3,
  $backToTop = $('#back-to-top');

  $(window).scroll(function () {
    if ( $(this).scrollTop() > limit ) {
      $backToTop.fadeIn();
    } else {
      $backToTop.fadeOut();
    }
  });

// scroll body to 0px on click
$backToTop.click(function () {
  $('body,html').animate({
    scrollTop: 0
  }, 1500);
  return false;
});

</script>
<script>
  $(document).ready(function(){
// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
$('.modal').modal();
});
</script>
<script>
// Initialize collapse button
$(".button-collapse").sideNav();
// Initialize collapsible (uncomment the line below if you use the dropdown variation)
//$('.collapsible').collapsible();
</script>

<script type="text/javascript">
  $(document).on('ready', function() {
    $(".center").slick({
      dots: false,
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 3
    });


  });
</script>
<script type="text/javascript">
  jssor_1_slider_init = function() {

    var jssor_1_options = {
      $AutoPlay: true,
      $SlideDuration: 1500,
      $SlideEasing: $Jease$.$OutQuint,
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$
      },
      $BulletNavigatorOptions: {
        $Class: $JssorBulletNavigator$
      }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*responsive code begin*/
    /*you can remove responsive code if you don't want the slider scales while window resizing*/
    function ScaleSlider() {
      var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
      if (refSize) {
        refSize = Math.min(refSize, 1920);
        jssor_1_slider.$ScaleWidth(refSize);
      }
      else {
        window.setTimeout(ScaleSlider, 30);
      }
    }
    ScaleSlider();
    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    /*responsive code end*/
  };

</script>
<script type="text/javascript">jssor_1_slider_init();</script>

<script type="text/javascript">
        jssor_2_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: true,
              $DragOrientation: 2,
              $PlayOrientation: 2,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_2", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_2_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>

    <script type="text/javascript">jssor_2_slider_init();</script>

</body>
</html>