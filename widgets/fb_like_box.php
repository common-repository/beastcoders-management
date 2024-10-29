<?php

/*
 Widget File: Facebook Like Box
 */


    class FB_Like_Box extends WP_Widget {

            public function __construct() {
                    // widget actual processes
                parent::__construct(
			'fb_like_box', // Base ID
			'beast - Fb Like Box', // Name
			array( 'description' => __( 'Facebook Like Box provided by beastCoders', 'beastCoders' ), ) // Args
		);
            }

            public function widget( $args, $instance ) {
                    // outputs the content of the widget
                $href = $instance['href'];
                $width = $instance['width'];
                $height = $instance['height'];
                $colorscheme = $instance['colorscheme'];
                $faces = $instance['faces'];
                $header = $instance['header'];
                $stream = $instance['stream'];
                $border = $instance['border'];
                ?>
                <div class="fb-like-box" data-href="<?php echo $href;?>" data-width="<?php echo $width;?>" data-height="<?php echo $height;?>" data-colorscheme="<?php echo $colorscheme;?>" data-show-faces="<?php echo $faces;?>" data-header="<?php echo $header;?>" data-stream="<?php echo $stream;?>" data-show-border="<?php echo $border;?>"></div>
                <?php
            }

            public function form( $instance ) {
                    // outputs the options form on admin
                    if ( isset( $instance[ 'href' ] ) ) {
                            $href = $instance[ 'href' ];
                    }
                    else {
                            $href = 'https://www.facebook.com/FacebookDevelopers';
                    }
                    if ( isset( $instance[ 'height' ] ) ) {
                            $height = $instance[ 'height' ];
                    }
                    else {
                            $height = 500;
                    }
                    if ( isset( $instance[ 'width' ] ) ) {
                            $width = $instance[ 'width' ];
                    }
                    else {
                            $width = 292;
                    }
                    if ( isset( $instance[ 'colorscheme' ] ) ) {
                            $colorscheme = $instance[ 'colorscheme' ];
                    }
                    else {
                            $colorscheme = 'light';
                    }
                    if ( isset( $instance[ 'faces' ] ) ) {
                            $faces = $instance[ 'faces' ];
                    }
                    else {
                            $faces = true;
                    }
                    if ( isset( $instance[ 'header' ] ) ) {
                            $header = $instance[ 'header' ];
                    }
                    else {
                            $header = true;
                    }
                    if ( isset( $instance[ 'stream' ] ) ) {
                            $stream = $instance[ 'stream' ];
                    }
                    else {
                            $stream = true;
                    }
                    if ( isset( $instance[ 'border' ] ) ) {
                            $border = $instance[ 'border' ];
                    }
                    else {
                            $border = true;
                    }
                    ?>
                    <div>
                    <p>
                        <label for="<?php echo $this->get_field_name( 'href' ); ?>"><?php _e( 'Facebook PageUrl:' ); ?></label> 
                        <input class="widefat" id="<?php echo $this->get_field_id( 'href' ); ?>" name="<?php echo $this->get_field_name( 'href' ); ?>" type="text" value="<?php echo esc_attr( $href ); ?>" />
                    </p>
                    <p>
                        <label for="<?php echo $this->get_field_name( 'width' ); ?>"><?php _e( 'Width:' ); ?></label> 
                        <input class="widefat" id="<?php echo $this->get_field_id( 'width' ); ?>" name="<?php echo $this->get_field_name( 'width' ); ?>" type="text" value="<?php echo esc_attr( $width); ?>" />
                    </p>
                    <p>
                        <label for="<?php echo $this->get_field_name( 'height' ); ?>"><?php _e( 'Height:' ); ?></label> 
                        <input class="widefat" id="<?php echo $this->get_field_id( 'height' ); ?>" name="<?php echo $this->get_field_name( 'height' ); ?>" type="text" value="<?php echo esc_attr( $height); ?>" />
                    </p>
                    <p>
                        <label for="<?php echo $this->get_field_name( 'colorscheme' ); ?>"><?php _e( 'Color Scheme:' ); ?></label> 
                        <input <?php if($colorscheme=="light"){ echo " checked='checked' ";}?> type="radio" name="<?php echo $this->get_field_name( 'colorscheme' ); ?>" value="light"/> Light
                        <input <?php if($colorscheme=="dark"){ echo " checked='checked' ";}?> type="radio" name="<?php echo $this->get_field_name( 'colorscheme' ); ?>" value="dark"/> Dark
                    </p>
                    <p>
                        <label for="<?php echo $this->get_field_name( 'faces' ); ?>"><?php _e( 'Show Faces:' ); ?></label> 
                        <input <?php if($faces=="true"){ echo " checked='checked' ";}?> type="radio" name="<?php echo $this->get_field_name( 'faces' ); ?>" value="true"/> True
                        <input <?php if($faces=="false"){ echo " checked='checked' ";}?> type="radio" name="<?php echo $this->get_field_name( 'faces' ); ?>" value="false"/> False
                    </p>
                    <p>
                        <label for="<?php echo $this->get_field_name( 'header' ); ?>"><?php _e( 'Show Header:' ); ?></label> 
                        <input <?php if($header=="true"){ echo " checked='checked' ";}?> type="radio" name="<?php echo $this->get_field_name( 'header' ); ?>" value="true"/> True
                        <input <?php if($header=="false"){ echo " checked='checked' ";}?> type="radio" name="<?php echo $this->get_field_name( 'header' ); ?>" value="false"/> False
                    </p>
                    <p>
                        <label for="<?php echo $this->get_field_name( 'stream' ); ?>"><?php _e( 'Show Stream:' ); ?></label> 
                        <input <?php if($stream=="true"){ echo " checked='checked' ";}?> type="radio" name="<?php echo $this->get_field_name( 'stream' ); ?>" value="true"/> True
                        <input <?php if($stream=="false"){ echo " checked='checked' ";}?> type="radio" name="<?php echo $this->get_field_name( 'stream' ); ?>" value="false"/> False
                    </p>
                    <p>
                        <label for="<?php echo $this->get_field_name( 'border' ); ?>"><?php _e( 'Show Border:' ); ?></label> 
                        <input <?php if($border=="true"){ echo " checked='checked' ";}?> type="radio" name="<?php echo $this->get_field_name( 'border' ); ?>" value="true"/> True
                        <input <?php if($border=="false"){ echo " checked='checked' ";}?> type="radio" name="<?php echo $this->get_field_name( 'border' ); ?>" value="false"/> False
                    </p>
                    </div>
                    <?php 
            }

            public function update( $new_instance, $old_instance ) {
                    // processes widget options to be saved
                    $instance = array();
                    $instance['href'] = ( ! empty( $new_instance['href'] ) ) ? strip_tags( $new_instance['href'] ) : '';
                    $instance['width'] = ( ! empty( $new_instance['width'] ) ) ? strip_tags( $new_instance['width'] ) : '';
                    $instance['height'] = ( ! empty( $new_instance['height'] ) ) ? strip_tags( $new_instance['height'] ) : '';
                    $instance['colorscheme'] = ( ! empty( $new_instance['colorscheme'] ) ) ? strip_tags( $new_instance['colorscheme'] ) : '';
                    $instance['faces'] = ( ! empty( $new_instance['faces'] ) ) ? strip_tags( $new_instance['faces'] ) : '';
                    $instance['header'] = ( ! empty( $new_instance['header'] ) ) ? strip_tags( $new_instance['header'] ) : '';
                    $instance['stream'] = ( ! empty( $new_instance['stream'] ) ) ? strip_tags( $new_instance['stream'] ) : '';
                    $instance['border'] = ( ! empty( $new_instance['border'] ) ) ? strip_tags( $new_instance['border'] ) : '';

                    return $instance;
            }       
    }
?>
