<?php get_header() ?>

<div class="comingcontainer">
    <div class="checkbacksoon">
		<p>
			<span class="go3d">4</span>
			<span class="go3d">0</span>
			<span class="go3d">4</span>
			<span class="go3d">!</span>
		</p>
        <p class="error">
			Схоже, ви зайши на неіснуючу сторінку. <br> Не хвилюйтеся, час від часу, це трапляється з кожним з нас. <br>
        	Пошукова форма та посилання нижче, допоможуть вам найти потрійбну інформацію.
		</p>
		<form class="search" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  			<input type="search" placeholder="пошук" class="input" required name="s"/>
		</form>

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
