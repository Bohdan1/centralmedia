<?php
	if ( function_exists('vote_poll') && !in_pollarchive() ) {
		echo '
			<ul>
				<li>' . get_poll() . '</li>
			</ul>';
	}
?>