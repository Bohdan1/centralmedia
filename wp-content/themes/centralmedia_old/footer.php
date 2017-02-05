
	<footer class="page-footer">
    <div >
      <div class="row">
        <div class="offset-l1 col l3 s12">
        <p>
        <a href="<?php echo get_home_url(); ?>">
          <img src="<?php bloginfo('template_url') ?>/img/logo/logo-central-media — footer.png" class="footer-logo-float">
          </a>
          <div class="main-sign-footer">CENTRAL MEDIA</div>
          <div>МУЛЬТИМЕДІЙНА ПЛАТФОРМА</div>
         </p>
          <p class="black-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
        <div class="col l4 s12 center nav-footer-pos">
          <ul>
            <li><a class="black-text text-lighten-3 nav-footer" href="<?php echo get_post_type_archive_link('news'); ?>"><span class="footer-nav">Новини</span></a></li>
            <li><a class="black-text text-lighten-3 nav-footer" href="<?php echo get_post_type_archive_link('articles'); ?>"><span class="footer-nav">Статті</span></a></li>
            <li><a class="black-text text-lighten-3 nav-footer" href="<?php echo get_post_type_archive_link('blogs'); ?>"><span class="footer-nav">Блоги</span></a></li>
            <li><a class="black-text text-lighten-3 nav-footer" href="<?php echo get_post_type_archive_link('video'); ?>"><span class="footer-nav">Відео</span></a></li>
          </ul>
        </div>
        <div class="col l4 s12 center nav-contact-pos">
          <span class="email-footer">central-media@gmail.com</span><br>
          <span class="number-footer">+38(067)904-74-15</span><br>
          <span class="number-footer">+38(067)904-74-15</span><br>
          <span class="address-footer">м.Львів, вул. Зелена 82</span><br>

          <div class="soial-footer">
    				<a href="https://www.facebook.com/"><img  src="<?php bloginfo('template_url') ?>/img/social/fb.png"></a>                 
    				<a href="https://www.youtube.com/"><img  src="<?php bloginfo('template_url') ?>/img/social/yb.png"></a>
    				<a href="https://twitter.com/"><img src="<?php bloginfo('template_url') ?>/img/social/tw.png"></a>
    			</div>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container center">
        © 2017 PLATFROM IT-Company
      </div>
    </div>
  </footer>

	<script type="text/javascript">
		$('.carousel.carousel-slider').carousel({full_width: true});
		setTimeout(autoplay, 4000);
		function autoplay() {
			$('.carousel.carousel-slider').carousel('next');
			setTimeout(autoplay, 4000);
		}
	</script>
  
	<?php wp_footer(); ?>
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
</body>
</html>