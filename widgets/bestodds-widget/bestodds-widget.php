<?php   

/* 
Author: Stefan Naumovski 
*/    

add_action( 'widgets_init', 'bestodds_widget' );

function bestodds_widget() {register_widget( 'bestodds_widget_hlm_sports' );}

class bestodds_widget_hlm_sports extends WP_Widget {
	
	/* Register widget with WordPress. */
	
	function __construct() {
		parent::__construct(
			'hlm_sports_bestodds', // Widget ID
			esc_html__('BESTODDS Widget', 'hlm-sports'), // Name
			array( 'description' => '', 'customize_selective_refresh' => true ) // Args
			);
					add_action('admin_enqueue_scripts', array( $this, 'services_widget_scripts' ));

		    if ( is_active_widget( false, false, $this->id_base ) || is_customize_preview() ) {
		            add_action( 'wp_enqueue_scripts', array( $this, 'widget_enqueue_scripts' ) );
		        }
			}
			
				/* Front-end display of widget. */
			

	    public function widget_enqueue_scripts() {
			wp_enqueue_style('bestodds_widget_widget', get_stylesheet_directory_uri() . '/widgets/bestodds-widget/bestodds-widget.css');
			wp_enqueue_script('bestodds_widget_widget_script', get_stylesheet_directory_uri() . '/widgets/bestodds-widget/bestodds-widget.js');
			
	    }

		public function services_widget_scripts() {
			  wp_enqueue_script('jquery-ui-sortable');
			  wp_enqueue_script('bestodds-widget-script-back', get_stylesheet_directory_uri() . '/widgets/bestodds-widget/bestodds-widget-back.js', array('jquery-ui-sortable'));
			  wp_enqueue_style( 'bestodds-widget-style-back', get_stylesheet_directory_uri().'/widgets/bestodds-widget/bestodds-widget-back.css');	  	
		}

		/* Front-end display of widget. */
	public function widget( $args, $instance ) {
		
		/* Default widget settings. */
		
		$defaults = array( 'title' => 'BESTODDS widget', 'team' => 'all');
		$instance = wp_parse_args( (array) $instance, $defaults );
		
		
		$title = $instance['title'];
		$team = $instance['team'];

		echo $args['before_widget'];
				
		if ( ! empty( $title ) ){
			echo $args['before_title'] . esc_html($title) . $args['after_title'];
		}
			?>




<div class="bestodds-widget">

		<ul>
<?php 

$args = array(
			    'posts_per_page' => 5,
			    'post_type' => 'match',
			    'post_status' => 'publish', 
				'meta_key'			=> 'start_time',
				'orderby'			=> 'meta_value',
				'order'				=> 'ASC',
		      'tax_query' => array(
                array(
                    'taxonomy' => 'teams',
                    'field' => 'id',
                    'terms' => $team
             	   )
            	)
			);

		            $matches_query = new WP_Query($args);
		            while($matches_query->have_posts()) : $matches_query->the_post();

?>
			<li>

			<?php 
				$i = 0;
			          if(get_field('winner_table')):
			            while(has_sub_field('winner_table')): 
			              $deezs = get_sub_field('bookmaker'); if(!empty(get_field('bookmaker_crawl_order', $deezs->ID))) { 
			              	
			            if(!empty( get_sub_field('win_odds'))){ $win_odds[] = array(get_sub_field('win_odds') => $deezs->ID);}else{$win_odds[] = '0';}
			           if(!empty( get_sub_field('draw_odds'))){ $draw_odds[] = get_sub_field('draw_odds');}else{$draw_odds[] = '0';}
						if(!empty( get_sub_field('loss_odds'))){ $loss_odds[] = get_sub_field('loss_odds');}else{$loss_odds[] = '0';}
			             } 
			         	endwhile;          
			          endif; 

			$highest_win_odd = max(array_keys($win_odds));
			$terms = wp_get_post_terms( get_the_ID(), 'teams');


			echo 'the highest odd to win '.$terms[0]->slug.' is ';
			echo key($win_odds[$highest_win_odd]);
			echo ' by the bookmaker ';
			echo current($win_odds[$highest_win_odd]);
            $image = get_field('logo_136x44', current($win_odds[$highest_win_odd]));              
            if( $image ) {?>
              <img src="<?php  echo $image['sizes']['hlm_sports_136x44']; ?>" >                 
            <?php }	?>


			</li>
<?php endwhile; ?>

		</ul>

</div>
</div>
</div>





<?php
		/* After widget. */
		
		echo $args['after_widget'];
	}
	
		/* Widget settings. */
		
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		
		/* Strip tags. */
		
		$instance['title'] = $new_instance['title'];
		$instance['team'] = $new_instance['team'];

		return $instance;
	}
	

	function form( $instance ) {
		
		/* Default widget settings. */
		
		$defaults = array( 'title' => 'BESTODDS widget', 'team' => 'all');
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

<!-- Widget Title-->
<p>
	<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>">
		<?php _e('Title:', 'hlm-sports'); ?>
	</label>
	<input id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php echo esc_textarea($instance['title']); ?>" style="width:90%;" />
</p>

<p>
	<label for="<?php echo esc_attr($this->get_field_id('team')); ?>">
		<?php _e('(Optional)Select Team:', 'hlm-sports'); ?>
	</label>
	<select id="<?php echo esc_attr($this->get_field_id('question')); ?>" name="<?php echo esc_attr($this->get_field_name('team')); ?>" style="width:100%;">
		<option value='all' <?php if ('all' == (isset($instance['team']))) echo 'selected="selected"'; ?>>
		<?php _e('Team', 'hlm-sports'); ?>
		</option>
		<?php $teams = get_terms('teams', array('hide_empty' => '0'));  ?>
		<?php foreach($teams as $team) { ?>
		<option value='<?php echo esc_attr($team->term_id); ?>' <?php if(isset($instance['team'])){ if ($team->term_id == $instance['team']) echo 'selected="selected"';}?>>
		<?php echo esc_html($team->name); ?>
		</option>
		<?php } ?>
	</select>
</p>

<?php }} ?>