<?php get_header(); ?>
<!--header-->
<div class="header">

	<div class="social-menu-top hide-on-large-only">
		<div class="menu-list"><a href="#" data-activates="slide-out" class="button-collapse"><img class="social-logo-head" src="<?php bloginfo('template_url') ?>/img/menu-head.svg" alt="Логотип"></a></div>
		<div class="menu-list"><a href="#modal1"   > <img class="social-logo" src="<?php bloginfo('template_url') ?>/img/social/man.svg" alt="Логотип"></a></div>
		<div class="menu-list"><a href="#modal2"><img class="social-logo" src="<?php bloginfo('template_url') ?>/img/social/search.svg" alt="Логотип"></a></div>


	</div>
	<nav>
		<div class="nav-shadow">
			<a href="#"><img class="header-logo" src="<?php bloginfo('template_url') ?>/img/logo/CMedia.svg" alt="Логотип"></a>
			<div class="logo-text hide-on-small-only "><a href="<?php echo get_home_url(); ?>">центральне медіа</a></div>
			<ul id="nav-mobile" class="hide-on-med-and-down">
				<li><a class="" href="<?php echo get_post_type_archive_link('video'); ?>">ВІДЕО</a></li>
				<li><a class="" href="<?php echo get_post_type_archive_link('articles'); ?>">СТАТТІ</a></li>
				<li><a class="" href="<?php echo get_post_type_archive_link('blogs'); ?>">БЛОГИ</a></li>
			</ul>
		</div>
	</nav>
</div>

<div class="row home-content">
	<div id="disable-mat-padding" class="col l9 s12 left-block">
		<div class="left-block-content">
			<div class="button-position  hide-on-small-only">
				<a href="#" ><img class="play-button button-hover center" src="<?php bloginfo('template_url') ?>/img/play-button.svg" alt="Логотип"></a>
			</div>
			<div class="content-box">
				<div class="title-tag"><a href="#" class="no-hover-blog">Політика</a></div>
				<div class="box-title "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
				<div class="box-title-small "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
				<div class="box-title-time ">28.06.2016</div>
			</div>
			<div class="social-menu-bottom hide-on-large-only ">
				<div class="menu-list"><a href="#" ><img  class="social-logo" src="<?php bloginfo('template_url') ?>/img/social/youtube.svg" alt="Логотип"></a>
				</div>

				<div class="menu-list"><a href="#"><img class="social-logo" src="<?php bloginfo('template_url') ?>/img/social/facebook.svg" alt="Логотип"></a>
				</div>

				<div class="menu-list"><a href="#" ><img class="social-logo" src="<?php bloginfo('template_url') ?>/img/social/twitter.svg" alt="Логотип"></a>
				</div>
			</div>
		</div>

	</div>


	<div class="col l3 s12 right-block hide-on-med-and-down">
		<div class="social-menu-top ">
			<div class="menu-list"><a href="#modal1" ><img class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/man.svg" alt="Логотип"></a></div>
			<div class="menu-list"><a href="#modal2"><img class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/search.svg" alt="Логотип"></a></div>
		</div>
		<div class="video-container">


			<iframe class="right-block-video center" src="https://www.youtube.com/embed/MJ_aWV_-DF8" frameborder="0" ></iframe>

			<div class="right-block-second ">
				<div class="right-block-second-tag ">
					<a href="#" class="no-hover-blog">АТО</a>
				</div>
				<div class="right-block-second-sign ">
					<a href="#">Під Києвом сплюндрували Биковнянський меморіал</a>
				</div>
			</div>



			<div class="social-menu-bottom hide-on-med-and-down">
				<div class="menu-list"><a href="#" ><img  class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/youtube.svg" alt="Логотип"></a>
				</div>

				<div class="menu-list"><a href="#" ><img class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/twitter.svg" alt="Логотип"></a>
				</div>

				<div class="menu-list"><a href="#"><img class="button-hover social-logo" src="<?php bloginfo('template_url') ?>/img/social/facebook.svg" alt="Логотип"></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--header-->
<div class="all-content">
	<!-- second block home page -->
	<div class="block-with-line hide-on-small-only">
		<div class="big-sign-line">ПОПЕРЕДНІ <span>СТАТТІ</span></div>
		<div class="block-line"></div>
		<div class="small-sign-line"><img class="line-img" src="<?php bloginfo('template_url') ?>/img/menu.svg"></div>
	</div>
	<div class="second-block-with-line hide-on-med-and-up">
		<div class="big-sign-line">ТОП <span>СТАТТІ</span></div>
		<div class="block-line"></div>
	</div>

	<div class="row">
		<div class="full-width-mob col l8 s12 m7 ">
			<div class="col l12 s12 m12">
				<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article">
					<div class="mask">
						<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
						<div class="main-article-content-box">

							<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
							<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
							<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
							<div class="box-title-time fix-mob-article">28.06.2016</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col l6 s12 m6 ">
				<div  class="second-article-block">
					<div class="mask">
						<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
						<div class="main-article-content-box">

							<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
							<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
							<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
							<div class="box-title-time fix-mob-article">28.06.2016</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col l6 s12 m6 ">
				<div  class="second-article-block">
					<div class="mask">
						<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
						<div class="main-article-content-box">

							<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
							<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
							<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
							<div class="box-title-time fix-mob-article">28.06.2016</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col l4 s12 m5 ">

			<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
				<div class="mask">
					<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
					<div class="main-article-content-box">

						<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
						<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
						<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
						<div class="box-title-time fix-mob-article">28.06.2016</div>
					</div>
				</div>
			</div>
			<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
				<div class="mask">
					<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
					<div class="main-article-content-box">

						<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
						<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
						<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
						<div class="box-title-time fix-mob-article">28.06.2016</div>
					</div>
				</div>
			</div>
			<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
				<div class="mask">
					<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
					<div class="main-article-content-box">

						<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
						<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
						<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
						<div class="box-title-time fix-mob-article">28.06.2016</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="third-block-with-line">
		<div class="big-sign-line">ПОПУЛЯРНЕ <span></span></div>
		<div class="block-line"></div>
	</div>

	<div class="row">
		<div class="popular-video-all-state-archive">
			<div class="row">
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>



				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
			</div>



		</div>
	</div>

	<section class="center slider">
		<div class="slider-box slider-box-remake">
			<div class="slider-element">
				<img src="<?php bloginfo('template_url') ?>/img/blog-slider/circle-man.png" alt="Логотип">
				<div class="">
					<div class="slider-bloger-name"><a href="#" class="black-text">Олег Стефанюк</a></div>
					<div class="slider-bloger-thema"><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал</a></div>
				</div>
			</div>
		</div>
		<div class="slider-box slider-box-remake">
			<div class="slider-element">
				<img src="<?php bloginfo('template_url') ?>/img/blog-slider/circle-man.png" alt="Логотип">
				<div class="">
					<div class="slider-bloger-name"><a href="#" class="black-text">Олег Стефанюк</a></div>
					<div class="slider-bloger-thema"><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал</a></div>
				</div>
			</div>
		</div>
		<div class="slider-box slider-box-remake-main">
			<div class="slider-element">
				<div class="blog-element-tag" class="no-hover-blog">ТОП БЛОГ</div>
				<img src="<?php bloginfo('template_url') ?>/img/blog-slider/circle-man.png" alt="Логотип">
				<div class="">
					<div class="slider-bloger-name-main"><a href="#" class="no-hover-blog">Олег Стефанюк</a></div>
					<div class="slider-bloger-thema-main"><a href="#" class="no-hover-blog">Під Києвом сплюндрували Биковнянський меморіал</a></div>
				</div>
			</div>
		</div>
		<div class="slider-box slider-box-remake">
			<div class="slider-element">
				<img src="<?php bloginfo('template_url') ?>/img/blog-slider/circle-man.png" alt="Логотип">
				<div class="">
					<div class="slider-bloger-name"><a href="#" class="black-text">Олег Стефанюк</a></div>
					<div class="slider-bloger-thema"><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал</a></div>
				</div>
			</div>
		</div>
		<div class="slider-box slider-box-remake">
			<div class="slider-element">
				<img src="<?php bloginfo('template_url') ?>/img/blog-slider/circle-man.png" alt="Логотип">
				<div class="">
					<div class="slider-bloger-name"><a href="#" class="black-text">Олег Стефанюк</a></div>
					<div class="slider-bloger-thema"><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал</a></div>
				</div>
			</div>
		</div>
		<div class="slider-box slider-box-remake">
			<div class="slider-element">
				<img src="<?php bloginfo('template_url') ?>/img/blog-slider/circle-man.png" alt="Логотип">
				<div class="">
					<div class="slider-bloger-name"><a href="#" class="black-text">Олег Стефанюк</a></div>
					<div class="slider-bloger-thema"><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал</a></div>
				</div>
			</div>
		</div>
		<div class="slider-box slider-box-remake">
			<div class="slider-element">
				<img src="<?php bloginfo('template_url') ?>/img/blog-slider/circle-man.png" alt="Логотип">
				<div class="">
					<div class="slider-bloger-name"><a href="#" class="black-text">Олег Стефанюк</a></div>
					<div class="slider-bloger-thema"><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал</a></div>
				</div>
			</div>
		</div>
		<div class="slider-box slider-box-remake">
			<div class="slider-element">
				<img src="<?php bloginfo('template_url') ?>/img/blog-slider/circle-man.png" alt="Логотип">
				<div class="">
					<div class="slider-bloger-name"><a href="#" class="black-text">Олег Стефанюк</a></div>
					<div class="slider-bloger-thema"><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал</a></div>
				</div>
			</div>
		</div>
	</section>




	<div class="second-block-with-line">
		<div class="big-sign-line">ВСІ <span>СТАТТІ</span></div>
		<div class="block-line"></div>
	</div>

	<div class="row">
		<div class="popular-video-all-state-archive">
			<div class="row">
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col l3 s12 m3">
					<div style="background-image: url('<?php bloginfo('template_url') ?>/img/3.jpg');" class="second-article-block-all-article-side">
						<div class="mask">
							<div class="view-count"><img class="count-width" src="<?php bloginfo('template_url') ?>/img/eye.svg"><span class="count-number"> 523</span></div>
							<div class="main-article-content-box">

								<div class="title-tag"><a href="#" class="no-hover-blog">Родина</a></div>
								<div class="box-title fix-mob-article "><a href="#">Під Києвом сплюндрували Биковнянський меморіал</a></div>
								<div class="box-title-small fix-mob-article "><a href="#">У селищі Биківня селяний сплюндрували український та польський меморіали жертв НКВС.</a></div>
								<div class="box-title-time fix-mob-article">28.06.2016</div>
							</div>
						</div>
					</div>
				</div>
			</div>



		</div>
	</div>
	<div class="advertisment-all-article">
		<div class="advertisment-block">
			<a href="#" ><img class="advertisment-img" src="<?php bloginfo('template_url') ?>/img/sponsors-wide.jpg" alt="Логотип"></a>
		</div>
	</div>

	<div class="five-block-with-line hide-on-med-and-down">
		<div class="big-sign-line">НОВИНИ <span></span></div>
		<div class="block-line"></div>
		<div class="small-sign-line">ОПИТУВАННЯ<img class="line-img-five" src="<?php bloginfo('template_url') ?>/img/medical-result.svg"></div>
	</div>

	<div class="five-block-with-line hide-on-large-only">
		<div class="big-sign-line">НОВИНИ <span>ПАРТНЕРІВ</span></div>
		<div class="block-line"></div>

	</div>

	<div class="row">

		<div class="col l6 s12 m6 devider">
			<div class="main-news-content-footer">
				<div class="next-day-news">2 лютого, 2017 <span>четвер</span></div>
				<div class="news-block">
					<div class="news-main-img"><img class="news-main-img-width-cm" src="<?php bloginfo('template_url') ?>/img/logo/CMedia.svg"></div>
					<div class="news-main-title "><div class="news-time">10:16</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
				</div>
				<div class="news-block">
					<div class="news-main-img"><i class="fa fa-spinner fa-spin fa-1x fa-fw "></i></div>
					<div class="news-main-title "> <div class="news-time ">15:46</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
				</div>

				<div class="next-day-news">3 лютого, 2017 <span>п'ятниця</span></div>
				<div class="news-block">
					<div class="news-main-img"><img class="news-main-img-width-cm" src="<?php bloginfo('template_url') ?>/img/logo/CMedia.svg"></div>
					<div class="news-main-title "><div class="news-time">10:16</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
				</div>
				<div class="news-block">
					<div class="news-main-img"><i class="fa fa-spinner fa-spin fa-1x fa-fw "></i></div>
					<div class="news-main-title "> <div class="news-time ">15:46</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
				</div>
				<div class="news-block">
					<div class="news-main-img"><img class="news-main-img-width-cm" src="<?php bloginfo('template_url') ?>/img/logo/CMedia.svg"></div>
					<div class="news-main-title "><div class="news-time">10:16</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
				</div>
				<div class="news-block">
					<div class="news-main-img"><i class="fa fa-spinner fa-spin fa-1x fa-fw "></i></div>
					<div class="news-main-title "> <div class="news-time ">15:46</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
				</div>
				<div class="news-block">
					<div class="news-main-img"><img class="news-main-img-width-cm" src="<?php bloginfo('template_url') ?>/img/logo/CMedia.svg"></div>
					<div class="news-main-title "><div class="news-time">10:16</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
				</div>
				<div class="news-block">
					<div class="news-main-img"><i class="fa fa-spinner fa-spin fa-1x fa-fw "></i></div>
					<div class="news-main-title "> <div class="news-time ">15:46</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
				</div>
				<div class="news-block">
					<div class="news-main-img"><img class="news-main-img-width-cm" src="<?php bloginfo('template_url') ?>/img/logo/CMedia.svg"></div>
					<div class="news-main-title "><div class="news-time">10:16</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
				</div>
				<div class="news-block">
					<div class="news-main-img"><i class="fa fa-spinner fa-spin fa-1x fa-fw "></i></div>
					<div class="news-main-title "> <div class="news-time ">15:46</div><a href="#" class="black-text">Під Києвом сплюндрували Биковнянський меморіал декілька раз</a></div>
				</div>

			</div>
		</div>
		<div class="five-block-with-line hide-on-large-only">
			<div class="small-sign-line">ОПИТУВАННЯ<img class="line-img-five" src="<?php bloginfo('template_url') ?>/img/medical-result.svg"></div>
			<div class="block-line"></div>

		</div>
		<div class="col l6 s12 m6 ">

		</div>
	</div>




	<?php get_template_part('content', 'footer') ?>

	<?php get_footer(); ?>