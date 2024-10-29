<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


if(get_option('bc_disable_admin_bar'))
{
    add_filter('show_admin_bar','__return_false');
}

if(get_option('bc_fb_like_box')=="on")
{
    //-- FB Like Box Shortcode
    add_shortcode('fb_like_box','bc_fb_like_box');;
    function bc_fb_like_box($atts)
    {
        extract( shortcode_atts( array(
		'href' => 'https://www.facebook.com/FacebookDevelopers',
		'width' => 292,
                'faces' => true,
                'header' => true,
                'stream' => true,
                'border' => true,
                'colorscheme' => 'light',
                'height' => 500,
	), $atts ) );
        ?>
        <div class="fb-like-box" data-href="<?php echo $href;?>" data-colorscheme="<?php echo $colorscheme;?>" data-height="<?php echo $height;?>" data-width="<?php echo $width;?>" data-show-faces="<?php echo $faces;?>" data-header="<?php echo $header;?>" data-stream="<?php echo $stream;?>" data-show-border="<?php echo $border;?>"></div>
        <?php
    }
    //-- FB Like Box Scripts
    add_action('wp_footer','fb_script');
    function fb_script()
    {
        ?>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=448271655210134";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <?php
    }
    
    //-- FB Like Box Widget
    
     add_action( 'widgets_init', function(){
        register_widget( 'FB_Like_Box' );
    });
    
}
?>
