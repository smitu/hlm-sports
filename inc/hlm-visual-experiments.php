<?php 


if ( ! function_exists( 'hlm_theme_styles' ) ) :
  function hlm_theme_styles() {
    wp_enqueue_style( 'experimental', get_template_directory_uri() . '/css/experimental.css', array('style', 'hlm-sports-bootstrap') );
    wp_enqueue_style( 'hlm-sports-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.4.0' );
    wp_enqueue_style( 'hlm-sports-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array() );
  }
endif;
add_action('wp_enqueue_scripts', 'hlm_theme_styles');


if ( ! function_exists( 'hlm_theme_scripts' ) ) :
  function hlm_theme_scripts() {

    wp_enqueue_script( 'hlm-sports-bootstrap-tether', get_template_directory_uri() . '/js/tether.js', array( 'jquery' ) );
    wp_enqueue_script( 'hlm-sports-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );

  }
endif;
add_action('wp_enqueue_scripts', 'hlm_theme_scripts');







function experiment_1(){ 

    ?>


  <div class="container">
    <div class="row">
      <!--team-1-->
      <div class="col-lg-4">
        <div class="our-team-main">
          <div class="team-front">
            <img class="img-fluid" src="http://placehold.it/110x110/9c27b0/fff?text=Dilip">
            <h3>Dilip Kevat</h3>
            <p>Web Designer</p>
          </div>
          <div class="team-back">
            <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</span>
          </div>
        </div>
      </div><!--team-1-->
      <!--team-2-->
      <div class="col-lg-4">
        <div class="our-team-main">
          <div class="team-front">
            <img class="img-fluid" src="http://placehold.it/110x110/336699/fff?text=Dilip">
            <h3>Dilip Kevat</h3>
            <p>Web Designer</p>
          </div>
          <div class="team-back">
            <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</span>
          </div>
        </div>
      </div><!--team-2-->
      <!--team-3-->
      <div class="col-lg-4">
        <div class="our-team-main">
          <div class="team-front">
            <img class="img-fluid" src="http://placehold.it/110x110/607d8b/fff?text=Dilip">
            <h3>Dilip Kevat</h3>
            <p>Web Designer</p>
          </div>
          <div class="team-back">
            <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</span>
          </div>
        </div>
      </div><!--team-3-->
      <!--team-4-->
      <div class="col-lg-4">
        <div class="our-team-main">
          <div class="team-front">
            <img class="img-fluid" src="http://placehold.it/110x110/4caf50/fff?text=Dilip">
            <h3>Dilip Kevat</h3>
            <p>Web Designer</p>
          </div>
          <div class="team-back">
            <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</span>
          </div>
        </div>
      </div><!--team-4-->
      <!--team-5-->
      <div class="col-lg-4">
        <div class="our-team-main">
          <div class="team-front">
            <img class="img-fluid" src="http://placehold.it/110x110/e91e63/fff?text=Dilip">
            <h3>Dilip Kevat</h3>
            <p>Web Designer</p>
          </div>
          <div class="team-back">
            <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</span>
          </div>
        </div>
      </div><!--team-5-->
      <!--team-6-->
      <div class="col-lg-4">
        <div class="our-team-main">
          <div class="team-front">
            <img class="img-fluid" src="http://placehold.it/110x110/2196f3/fff?text=Dilip">
            <h3>Dilip Kevat</h3>
            <p>Web Designer</p>
          </div>
          <div class="team-back">
            <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</span>
          </div>
        </div>
      </div><!--team-6-->
    </div>
  </div>



<?php 
} 
add_shortcode('experiment_1','experiment_1');












function experiment_2(){ ?>
<section>
    <div class="container">
      <div class="row">
          <h1 class="text-center"><span>Bootstrap 4 Cards</span>Created with <i class="fa fa-heart"></i> from<a href="http://grafreez.com"> Grafreez.com</a></h1>

        <div class="col-md-4">
            <div class="card profile-card-1">
                <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
                <img src="https://randomuser.me/api/portraits/women/20.jpg" alt="profile-image" class="profile"/>
                    <div class="card-content">
                    <h2>Savannah Fields<small>Engineer</small></h3>
                    <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                    </div>
                </div>
                <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p>
        </div>
      </div>
    </div>
</section>
<?php

}
add_shortcode('experiment_2','experiment_2');










function experiment_3(){
//https://www.templatemonster.com/demo/63853.html
//https://livedemo00.template-help.com/wt_63853_v1/index.html

 ?>
                <!-- Game Result Bug-->
                <article class="game-result">
                  <div class="game-info game-info-creative">
                    
                    <div class="game-info-main">
                      <div class="game-info-team game-info-team-first">
                        <figure>
                          <?php $home_team = get_term( get_field('home_team'), 'teams' ); 
                               $image = get_field('flag', $home_team);                            
                                  if( $image ) {?>
                                    <img src="<?php  echo $image['sizes']['hlm_sports_166x92']; ?>">                 
                                  <?php } ?>
                        </figure>
                        <div class="game-result-team-name">                      
                          <?php    ?>
                          <a href="<?php echo esc_url(get_term_link($home_team, 'teams')); ?>">
                            <?php echo $home_team->slug;   ?>       



                          </a>
                        </div>
                      </div>
                      <div class="game-info-middle game-info-middle-vertical">
                        <time class="time-big" ><span class="heading-3"><?php $myDateTime = get_field('start_time'); echo date('D d',$myDateTime);?></span> <?php echo date('F Y',$myDateTime);?>
                        <span class="heading-3"><?php echo date ('H:i',$myDateTime); ?></span>
                        </time>
                        <div class="game-result-divider-wrap"><span class="game-info-team-divider">VS</span></div>
                        <div class="group-sm">
                          <div class="button button-sm button-share-outline">Share
                            <ul class="game-info-share">

                              <li class="game-info-share-item"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="blank" title="<?php _e('Share this post on Facebook', 'examiner'); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar') ;return false;" class="icon fa fa-facebook" href="#"></a></li>
                              <li class="game-info-share-item"><a href="https://twitter.com/intent/tweet?original_referer=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>&amp;tw_p=tweetbutton&amp;url=<?php the_permalink(); ?>" target="_blank" title="<?php _e('Share this post on Twitter', 'examiner'); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar') ;return false;" class="icon fa fa-twitter" href="#"></a></li>
                              <li class="game-info-share-item"><a href="https://plusone.google.com/_/+1/confirm?hl=en-US&amp;url=<?php the_permalink(); ?>" target="_blank" title="<?php _e('Share this post on Google Plus', 'examiner'); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar') ;return false;"  class="icon fa fa-google-plus" href="#"></a></li>
                              <li class="game-info-share-item"><a href="http://www.reddit.com/submit?url=<?php the_permalink(); ?>&amp;title=<?php echo urlencode(get_the_title()); ?>" target="_blank" title="<?php _e('Share this post on Reddit', 'examiner'); ?>" onclick="window.open(this.href,'window','width=640,height=480,resizable,scrollbars,toolbar,menubar') ;return false;" class="icon fa fa-reddit" href="#"></a></li>
                            </ul>
                          </div><a href="<?php the_permalink();?>" class="button button-sm button-primary" href="#">Bet Now</a>
                        </div>
                      </div>
                      <div class="game-info-team game-info-team-second">
                        <figure>
                                <?php
                                $away_team = get_term( get_field('away_team'), 'teams' );
                               $image = get_field('flag', $away_team);                            
                                  if( $image ) {?>
                                    <img src="<?php  echo $image['sizes']['hlm_sports_166x92']; ?>">                 
                                  <?php } ?>

                        </figure>
                          <div class="game-result-team-name">  
                          <a href="<?php echo esc_url(get_term_link($away_team, 'teams')); ?>">
                            <?php echo $away_team->slug;?>
                          </a>
                          </div>
                      </div>
                    </div>
                    <h1 class="h3"><?php echo get_the_title(); ?></h1>
                  </div>
                </article>




<?php

}
add_shortcode('experiment_3','experiment_3');



function experiment_4(){
  ?>
<div class="game-highlights">
                <ul class="game-highlights-list">
                  <li>
                    <p class="game-highlights-title">Start of the Match
                    </p><span class="game-highlights-minute">0’</span>
                  </li>
                  <li>
                    <p class="game-highlights-title"><span class="icon icon-xxs icon-orange-dark fa fa-exclamation"></span>Foul by Martin Pierto
                    </p>
                    <p class="game-highlights-description">Martin Pierto showed sharp reflexes but failed to score for his team.</p><span class="game-highlights-minute">12’</span>
                  </li>
                  <li class="team-primary">
                    <p class="game-highlights-title"><span class="icon icon-xxs icon-primary fa fa-futbol-o"></span><span class="game-highlights-goal">Goal</span> (1-0)
                    </p>
                    <p class="game-highlights-description">Franklin Stevens scored with the right foot. Assisted by David Hawkins.</p><span class="game-highlights-minute">18’</span>
                  </li>
                  <li class="team2-blue">
                    <p class="game-highlights-title"><span class="icon icon-xxs icon-blue-boston fa fa-futbol-o"></span><span class="game-highlights-goal">Goal</span> (1-1)
                    </p>
                    <p class="game-highlights-description">atletico’s defender James Peterson turned Hernandez’s cross into his own net.</p><span class="game-highlights-minute">21’</span>
                  </li>
                  <li>
                    <p class="game-highlights-title"><span class="icon icon-xxs icon-orange fa fa-file"></span>Yellow card
                    </p>
                    <p class="game-highlights-description">Ernesto Wilson got his first yellow card just before the first time ended.</p><span class="game-highlights-minute">28’</span>
                  </li>
                  <li>
                    <p class="game-highlights-title"><span class="icon icon-xxs icon-primary fa fa-life-ring"></span>Attempt saved
                    </p>
                    <p class="game-highlights-description">Harry Stevenson saved Rob Wilson’s attempt to score a goal.</p><span class="game-highlights-minute">31’</span>
                  </li>
                  <li>
                    <p class="game-highlights-title"><span class="icon icon-xxs icon-blue-boston fa fa-hand-o-right"></span>Penalty Kick
                    </p>
                    <p class="game-highlights-description">Performed by Sam Schmidt, this penalty kick marks the beginning of the 2nd time.</p><span class="game-highlights-minute">47’</span>
                  </li>
                  <li>
                    <p class="game-highlights-title"><span class="icon icon-xxs icon-primary fa fa-flag"></span>Offside of Chris Balleron
                    </p>
                    <p class="game-highlights-description">Chris Balleron received offside warning for touching the passed ball.</p><span class="game-highlights-minute">60’</span>
                  </li>
                  <li>
                    <p class="game-highlights-title"><span class="icon icon-xxs icon-red-2 fa fa-file"></span>Red card
                    </p>
                    <p class="game-highlights-description">The referee showed red card to Joe Perkins on the 74th minute of the match.</p><span class="game-highlights-minute">74’</span>
                  </li>
                  <li>
                    <p class="game-highlights-title"><span class="icon icon-xxs icon-primary fa fa-exchange"></span>Gary Cahill <span class="text-gray-500">for</span> jack windsor
                    </p>
                    <p class="game-highlights-description">Atletico replaces their first forward with Jack Windsor before the 2nd time ends.</p><span class="game-highlights-minute">86’</span>
                  </li>
                  <li>
                    <p class="game-highlights-title"><span class="icon icon-xxs icon-blue-boston fa fa-clock-o"></span>The referee adds 4 minutes 
                    </p>
                    <p class="game-highlights-description">The referee adds 4 minutes to the second time to compensate goal celebration time.</p><span class="game-highlights-minute">89’</span>
                  </li>
                  <li>
                    <p class="game-highlights-title"><span class="icon icon-xxs icon-primary fa fa-flag-checkered"></span>End of the game
                    </p>
                    <p class="game-highlights-description">4 minutes later the referee announces the end of the game with a draw as a result.</p><span class="game-highlights-minute">94’</span>
                  </li>
                </ul>
              </div>

<?php

}
add_shortcode('experiment_4','experiment_4');







function experiment_5(){
  ?>

<style>

</style>
<section class="section section-sm bg-gray-100"><div class="container"><div class="promo-creative unit-spacing-lg">
            <div class="unit unit-md-horizontal align-items-center align-items-md-stretch">
              <div class="unit-right">
                <div class="promo-creative-details">
                  <div class="promo-creative-countdown">
                      <p class="game-info-subtitle">
                        <time> 
                          <?php $myDateTime = (int)get_field('start_time'); 
                          echo date ('F d, Y H : i',$myDateTime); ?>                  
                        </time>
                      </p>
                  </div>
                  <div class="promo-main promo-creative-main">
                    <div class="promo-team promo-creative-team">
                      <div class="promo-team-title">
                        <div class="promo-team-name">     
                          <?php  $home_team = get_term( get_field('home_team'), 'teams' );  ?>
                          <a href="<?php echo esc_url(get_term_link($home_team, 'teams')); ?>">
                            <?php echo $home_team->slug;?>
                          </a>
                        </div>
                      </div>
                      <figure class="promo-team-figure">                                <?php
                          $home_team = get_term( get_field('home_team'), 'teams' );
                         $image = get_field('flag', $home_team);                            
                            if( $image ) {?>
                              <img src="<?php  echo $image['sizes']['hlm_sports_166x92']; ?>">                 
                            <?php } ?>
                      </figure>
                    </div>
                    <div class="promo-creative-middle">VS</div>
                    <div class="promo-team promo-creative-team">
                      <figure class="promo-team-figure">                                <?php
                                $away_team = get_term( get_field('away_team'), 'teams' );
                               $image = get_field('flag', $away_team);                            
                                  if( $image ) {?>
                                    <img src="<?php  echo $image['sizes']['hlm_sports_166x92']; ?>">                 
                                  <?php } ?>
                      </figure>
                      <div class="promo-team-title">
                        <div class="promo-team-name">
                          <?php  $away_team = get_term( get_field('away_team'), 'teams' );  ?>
                          <a href="<?php echo esc_url(get_term_link($away_team, 'teams')); ?>">
                            <?php echo $away_team->slug;?>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="promo-creative-tickets">
                    <div class="promo-buttons text-nowrap">
                      <a class="button button-primary" href="<?php the_permalink();?>">Check Game Odds</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div></div></section>




<?php

}
add_shortcode('experiment_5','experiment_5');





function experiment_6($term){

?>

<div class="table-custom-responsive">
                <table class="table-custom table-standings table-modern">
                  <thead>
                    <tr>
                      <th>Number</th>
                      <th>Player Name</th>
                      <th>Position</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php 
                    if(empty($term)){
                      $term = get_queried_object();
                    }
                    if( have_rows('player_roster', $term ) ):
                        while ( have_rows('player_roster', $term ) ) : the_row();

                    $player_number = get_sub_field('player_number');
                    $player_name = get_sub_field('player_name' );
                    $player_position = get_sub_field('player_position');

                          ?>
                    <tr>
                      <td><span class="table-counter"><?php echo $player_number;?></span></td>
                      <td class="player-inline">
                        <div class="player-title">
                          <div class="player-name"><?php echo $player_name;?></div>
                        </div>
                      </td>
                      <td><?php echo $player_position;?></td>
                    </tr>
                    <?php
                     endwhile;
                      endif;
                    ?>
                  </tbody>
                </table>
              </div>

<?php 

}

add_shortcode('experiment_6','experiment_6');




function experiment_7(){

?>


      <?php 


                $bookmakers_count = 0;
                $args1 = array(
                    'post_type' => 'bookmaker',
                    'posts_per_page' => -1, 
                    'post_status' => 'publish',   
                );
                $bookmakers_query = new WP_Query($args1);
                while($bookmakers_query->have_posts()) : $bookmakers_query->the_post();
                  if(!empty(get_field('bookmaker_crawl_order')) && is_numeric(get_field('bookmaker_crawl_order'))){ 

                      $bookmaker_crawl_order[] = get_field('bookmaker_crawl_order') - 1;
                    
                  } endwhile; wp_reset_postdata();



$all_odds_array = get_post_meta( get_the_ID(), 'lice_za_kontakt', true );

var_dump($bookmaker_crawl_order);


$name_of_the_odds_table = 'winner';
foreach ($all_odds_array as $key){
if($key['name_of_the_table'] == $name_of_the_odds_table ){
if(!empty($key['odds_lists']) || $key['odds_lists'] != NULL || $key['odds_lists'] != ""){

array_shift($key['odds_lists'][0]['odd_list']);
array_shift($key['odds_lists'][1]['odd_list']);
array_shift($key['odds_lists'][2]['odd_list']);

$whitelist = $bookmaker_crawl_order;
$output_odd1 = array_intersect_key( $key['odds_lists'][0]['odd_list'],  $whitelist  );
$output_odd2 = array_intersect_key( $key['odds_lists'][1]['odd_list'],  $whitelist  );
$output_odd3 = array_intersect_key( $key['odds_lists'][2]['odd_list'],  $whitelist  );

var_dump($output_odd1);
var_dump($output_odd2);
var_dump($output_odd3);



$odd_1 =  max(array_values($output_odd1));


$odd_2 =  max(array_values($output_odd2));


$odd_3 =  max(array_values($output_odd3));


}
}
}




?>


                            <tr>
                              <td>
                                <p><?php echo date ('H : i',$myDateTime); ?></p>
                              </td>
                              <td>
                                <p>
                                  <?php  $away_team = get_term( get_field('away_team'), 'teams' );  ?>
                                  <a href="<?php echo esc_url(get_term_link($away_team, 'teams')); ?>">
                                    <?php echo $away_team->slug;?>
                                  </a>
                                </p>
                                <p>
                                  <?php  $home_team = get_term( get_field('home_team'), 'teams' );  ?>
                                  <a href="<?php echo esc_url(get_term_link($home_team, 'teams')); ?>">
                                    <?php echo $home_team->slug;?>
                                  </a>                                    
                                </p>
                              </td>
                              <td>
                                <p><span><?php echo $odd_1['odd']; ?></span></p>
                              </td>
                              <td>
                                <p><span><?php echo $odd_2['odd']; ?></span></p>
                              </td>
                              <td>
                                <p><span><?php echo $odd_3['odd']; ?></span></p>
                              </td>
                              <td>
                               <a href="<?php the_permalink();?>">Check Game Odds</a>
                              </td>
                            </tr>




<?php
}

add_shortcode('experiment_7','experiment_7');