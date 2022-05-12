<ul class="social-links">
<?php
if( get_theme_mod( 'namaha-social-email', customizer_library_get_default( 'namaha-social-email' ) ) != '' ) :
    echo '<li><a href="' . esc_url( 'mailto:' . antispambot( get_theme_mod( 'namaha-social-email' ), 1 ) ) . '" target="_blank" rel="noopener" title="';
	echo __( 'Send us an email', 'namaha' );
	echo '" class="social-email"><i class="otb-fa otb-fa-envelope-o"></i></a></li>';
endif;

if( get_theme_mod( 'namaha-social-skype', customizer_library_get_default( 'namaha-social-skype' ) ) != '' ) :
    echo '<li><a href="skype:' . esc_html( get_theme_mod( 'namaha-social-skype' ) ) . '?userinfo" rel="noopener" title="';
	echo __( 'Contact us on Skype', 'namaha' );
	echo '" class="social-skype"><i class="otb-fa otb-fa-skype"></i></a></li>';
endif;

if( get_theme_mod( 'namaha-social-tumblr', customizer_library_get_default( 'namaha-social-tumblr' ) ) != '' ) :
    echo '<li><a href="' . esc_url( get_theme_mod( 'namaha-social-tumblr' ) ) . '" target="_blank" rel="noopener" title="';
	echo __( 'Find us on Tumblr', 'namaha' );
	echo '" class="social-tumblr"><i class="otb-fa otb-fa-tumblr"></i></a></li>';
endif;

if( get_theme_mod( 'namaha-social-flickr', customizer_library_get_default( 'namaha-social-flickr' ) ) != '' ) :
    echo '<li><a href="' . esc_url( get_theme_mod( 'namaha-social-flickr' ) ) . '" target="_blank" rel="noopener" title="';
	echo __( 'Find us on Flickr', 'namaha' );
	echo '" class="social-flickr"><i class="otb-fa otb-fa-flickr"></i></a></li>';
endif;
?>
</ul>