<?php 

function hlm_sports_head() {

	$bloginfo = get_template_directory_uri();








    //Css
    ?>

    <style type='text/css'>
        body{font-family: 'Roboto';font-size:14px;line-height: 24px;}
   



        
<?php 
    $pageposts = get_posts(array('posts_per_page' => -1, 'post_type' => 'bookmaker', 'post_status' => 'publish'));
    foreach ( $pageposts as $q ){
    $color = get_field('color', $q->ID);           
    echo '.bookmaker-background-wrap-'.esc_html($q->ID).'{background:'.$color.'}';
    }
?>





    </style>

    <?php
	    

}

function customizer_css() {
	echo "
	
	<style type='text/css'>
.customize-control-image .container, .customize-control-header .container{float:left;background:#ebebeb;margin-bottom:10px;height:auto !important;}
.customize-control-header .header-view{background:#ebebeb;}	
.customize-control-image .actions{width:100%;float:left;}
.customize-section .customize-control-image .preview-thumbnail img {max-width:100% !important;max-height:100% !important;}
#customize-control-hlm_sports_logo .container{}
#customize-section-hlm_sports_images .customize-control{padding-bottom:20px;}
 
    </style>";
}

//Fonts

function hlm_sports_fonts_url() {
    $fonts_url = '';

    $fonts     = array(get_option('hlm_sports_fonts', 'Roboto'));
    $subsets   = '';
    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
            'family' => urlencode( implode( ':100,200,300,400,600,700,800|', $fonts ) ),
            'subset' => urlencode( $subsets ),
        ), 'https://fonts.googleapis.com/css' );
    }
    return $fonts_url;
}

function hlm_sports_fonts_add() {
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style( 'hlm_sports-fonts', hlm_sports_fonts_url(), array(), null );
}



add_action( 'wp_enqueue_scripts', 'hlm_sports_fonts_add' );
add_action( 'wp_head', 'hlm_sports_head', 999999);
add_action( 'customize_controls_print_styles', 'customizer_css' );
?>