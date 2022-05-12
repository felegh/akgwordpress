<?php 
global $site_intro_text;
?>

<div class="site-intro-container">
	<div class="site-intro">
		<?php
		echo wp_kses_post( $site_intro_text );
		?>
	</div>
</div>
