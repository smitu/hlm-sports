<?php   

/* 
Plugin Name: Shortcode widget
Description: Shortcode widget with different sizes
Version: 1.0 
Author: Stefan Naumovski 
*/    

add_action( 'widgets_init', 'shortcode_widget' );

function shortcode_widget() {register_widget( 'shortcode_widget_hlm_sports' );}

class shortcode_widget_hlm_sports extends WP_Widget {
	
	/* Register widget with WordPress. */
	
	function __construct() {
		parent::__construct(
			'shortcode_widget_sizes_hlm_sports', // Widget ID
			esc_html__('Shortcode Widget or Row Holder', 'hlm-sports'), // Name
			array( 'description' => '', 'customize_selective_refresh' => true ) // Args
			);}
		
		/* Front-end display of widget. */
		
		public function widget( $args, $instance ) {
			
			/* Default widget settings. */
			
			$defaults = array( 'title' =>'Shortcode Widget', 'text' =>'');
			$instance = wp_parse_args( (array) $instance, $defaults );
			
			/* Widget settings. */
			
			$title = $instance['title'];

			$text = do_shortcode(apply_filters( 'shortcode_widget_hlm_sports', empty( $instance['text'] ) ? '' : $instance['text'], $instance ));


			
			
			$args['before_widget'] = str_replace('class="home-widget', 'class="home-widget '. esc_attr($widget_size) , $args['before_widget']);	
			echo $args['before_widget'];
			if ( ! empty( $title ) )
				echo $args['before_title'] . esc_html($title) . $args['after_title'];
			?>

<div class="shortcode-widget-box">
	<?php echo wp_kses_post($text);?>
</div>	
<!--shortcode-widget-box-->

<?php

			/* After widget. */

			echo $args['after_widget'];
		}
		
			/* Widget settings. */
			
		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			
			/* Strip tags. */
			
			$instance['title'] = $new_instance['title'];
			$instance['text'] = $new_instance['text'];


			
			return $instance;
		}
				
		function form( $instance ) {
			
			/* Default widget settings. */
			
			$defaults = array( 'title' =>'advertisment', 'text' =>'');
			$instance = wp_parse_args( (array) $instance, $defaults );
			$text = $instance['text'];
			 ?>

<!-- Widget Title-->

<p>
	<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>">
		<?php esc_html_e('Title:', 'hlm-sports'); ?>
	</label>
	<input id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php echo esc_textarea($instance['title']); ?>" style="width:90%;" />
</p>

<!-- Shortcode-->
<p>
	<label for="<?php echo esc_attr($this->get_field_id( 'text' )); ?>">
		<?php esc_html_e('Add your shortcode here:', 'hlm-sports');?>
	</label>
	<textarea class="widefat" rows="6" id="<?php echo esc_attr($this->get_field_id('text')); ?>" name="<?php echo esc_attr($this->get_field_name('text')); ?>">
<?php echo esc_textarea($text); ?>
</textarea>
</p>

<?php }} ?>