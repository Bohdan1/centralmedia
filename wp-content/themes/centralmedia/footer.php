	<!--footer-->
	<br><br>
	<footer class="page-footer">
    <div >
      <div class="row">
        <div class="offset-l1 col l3">
        <p>
          <img src="<?php bloginfo('template_url') ?>/img/logo/logo-central-media — footer.png" class="footer-logo-float">

          <span class="main-sign-footer">CENTRAL MEDIA</span>
          <span>МУЛЬТИМЕДІЙНА ПЛАТФОРМА</span>
         </p>
          <p class="black-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
        <div class="col l4 center nav-footer-pos">
          <ul>
            <li><a class="black-text text-lighten-3 nav-footer" href="#!">Новини</a></li>
            <li><a class="black-text text-lighten-3 nav-footer" href="#!">Статті</a></li>
            <li><a class="black-text text-lighten-3 nav-footer" href="#!">Блоги</a></li>
            <li><a class="black-text text-lighten-3 nav-footer" href="#!">Відео</a></li>
          </ul>
        </div>
        <div class="col l4 center nav-contact-pos">
          <span class="black-text email-footer">central-media@gmail.com</span><br>
          <span class="black-text number-footer">+38(067)904-74-15</span><br>
          <span class="black-text number-footer">+38(067)904-74-15</span><br>
          <span class="black-text address-footer">м.Львів, вул. Зелена 82</span><br>

          <div class="soial-footer">
    				<a href="#"><img  src="<?php bloginfo('template_url') ?>/img/social/fb.png"></a>                 
    				<a href="#"><img  src="<?php bloginfo('template_url') ?>/img/social/yb.png"></a>
    				<a href="#"><img src="<?php bloginfo('template_url') ?>/img/social/tw.png"></a>
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

	<!--Import jQuery before materialize.js-->
	<script  src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/materialize.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/wow.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js/typed.min.js"></script>
	<script src="https://use.fontawesome.com/d97a6585c2.js"></script>
	<script type="text/javascript">
		$('.carousel.carousel-slider').carousel({full_width: true});
		setTimeout(autoplay, 4000);
		function autoplay() {
			$('.carousel.carousel-slider').carousel('next');
			setTimeout(autoplay, 4000);
		}
	</script>
  
  <!--Ajax Poll Script-->
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/Ajax_Poll/ajax-poll.php"></script>
  <!-- end Ajax Poll Script -->
	<?php wp_footer(); ?>
</body>
</html>