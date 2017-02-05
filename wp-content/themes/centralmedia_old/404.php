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

<?php get_footer() ?>
