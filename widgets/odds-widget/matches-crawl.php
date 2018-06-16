<?php 
function remove_all_matches(){

			//Delete Matches
			$args = array(
			    'posts_per_page' => -1,
			    'post_type' => 'match',
			    'post_status' => 'publish',   
			);
			$hlm_sports_posts = new WP_Query($args);
			while($hlm_sports_posts->have_posts()) : $hlm_sports_posts->the_post();
			  	$page_name_id = get_the_ID();
			 	wp_delete_post( $page_name_id, true );
			endwhile;	

}


function crawl_matches(){

	$opts=array('http'=>array('method'=>"GET",'header'=>"Accept-language: en\r\n"."Cookie: odds_type=decimal\r\n",'user_agent'=>'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10.4; en-US; rv:1.9.2.28) Gecko/20120306 Firefox/3.6.28'));
	$context=stream_context_create($opts);

	$html = file_get_html('https://www.oddschecker.com/football/world-cup',false,$context);




		$crawled_titles_number = count($html->find('.match-on .fixtures-bet-name'));

		//remove span text
		foreach($html->find('.match-on p.fixtures-bet-name span') as $row) {
			$row->innertext = '';
			$row->outertext = '';
		}


		for ($i=0; $i < $crawled_titles_number; $i++) { 

			$duplicate = 'unique';
			$title = $html->find('.match-on p.fixtures-bet-name', $i)->plaintext.' vs '.$html->find('.match-on p.fixtures-bet-name', $i + 1)->plaintext;
			$match_url = 'https://www.oddschecker.com/'.$html->find('.match-on .link-right a', $i / 2)->href;
			





		//check for duplicate
		            $args = array(
		                'post_type' => 'match',
		                'posts_per_page' => -1, 
		                's' => $title, 
		                'post_status' => 'publish',   
		            );
		            $lunar_magazine_posts = new WP_Query($args);
		            while($lunar_magazine_posts->have_posts()) : $lunar_magazine_posts->the_post();
		                // $page_name_id = get_the_ID();
		                // wp_delete_post( $page_name_id, true );
		                $duplicate = 'duplicate';
		            endwhile;   
		//create match
		        if($duplicate != 'duplicate'){
					$post= array('post_title' => $title, 'post_content' => '', 'post_status' => 'publish', 'post_type' => 'match' );
			 		$post_ID = wp_insert_post( $post );
			 		update_field( 'match_url', $match_url, $post_ID );


$teams = wp_set_object_terms( $post_ID, array($html->find('.match-on p.fixtures-bet-name', $i)->plaintext,  $html->find('.match-on p.fixtures-bet-name', $i + 1)->plaintext), 'teams', false );
					update_field( 'home_team', $teams[0], $post_ID );
					update_field( 'away_team', $teams[1], $post_ID );
// update_field( 'start_time', $html->find('.match-on .time .time-div .time-digits', $i)->plaintext, $post_ID );






$i++;
				}

echo $i;
echo '     ';
echo $match_url;
echo '     ';
echo $title;
echo '</br>';







		}







}








function crawl_table(){




		//check for duplicate
		            $args = array(
		                'post_type' => 'match',
		                'posts_per_page' => -1, 
		                'post_status' => 'publish',   
		            );
		            $lunar_magazine_posts = new WP_Query($args);
		            while($lunar_magazine_posts->have_posts()) : $lunar_magazine_posts->the_post();


	$opts=array('http'=>array('method'=>"GET",'header'=>"Accept-language: en\r\n"."Cookie: odds_type=decimal\r\n",'user_agent'=>'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10.4; en-US; rv:1.9.2.28) Gecko/20120306 Firefox/3.6.28'));
	$context = stream_context_create($opts);
	$match_url = get_field('match_url');

	$html = file_get_html($match_url,false,$context);



$crawl_date = $html->find('.date', 0)->plaintext;
$date_parts = explode(' ', $crawl_date);
$day = substr($date_parts[1], 0, -2);
$month = date('m',strtotime($date_parts[2]));
$year = '2018';
$time = $date_parts[4];
$fulldate_unix = mysql2date( 'U', $year.'-'.$month.'-'.$day.' '.$time.':00' );



		//$crawled_titles_number = count($html->find('.match-on .fixtures-bet-name'));


//the id of the table with odds
$table = $html->find('#t1', 0);


$rowData = array();
if (!empty($table)){
foreach($table->find('tr') as $row) {
    // initialize array to store the cell data from each row
    $flight = array();
    foreach($row->find('td') as $cell) {
        // push the cell's text to the array
        $flight[] = $cell->plaintext;
    }
    $rowData[] = $flight;
}
}
var_dump($rowData);


		                 $page_name_id = get_the_ID();
		                // wp_delete_post( $page_name_id, true );
		                 echo get_the_title();
update_field( 'start_time', $fulldate_unix, $page_name_id );

		            $args1 = array(
		                'post_type' => 'bookmaker',
		                'posts_per_page' => -1, 
		                'post_status' => 'publish',   
		            );
		            $bookmakers_query = new WP_Query($args1);
		            $count = 0;
		            while($bookmakers_query->have_posts()) : $bookmakers_query->the_post();




		            		$bookmaker_crawl_order = get_field('bookmaker_crawl_order', get_the_ID());





		            		echo get_the_title();
		            		echo get_the_ID();
		            		echo $match_url;

		            		$value[$count]['win_odds'] = $rowData[0][$bookmaker_crawl_order];
		            		$value[$count]['draw_odds'] = $rowData[1][$bookmaker_crawl_order];
		            		$value[$count]['loss_odds'] = $rowData[2][$bookmaker_crawl_order];
		            		$value[$count]['bookmaker'] = get_the_ID();


		            		$count++;
		            endwhile; 

// save a repeater field value
$field_key = "winner_table";
// $value = array(
//     array(
//         "win_odds"	=> "2222",
//         "draw_odds"	=> "3333"
//     ),    array(
//         "win_odds"	=> "444",
//         "draw_odds"	=> "5555"
//     ),

// );
update_field( $field_key, $value, $page_name_id );


// update_sub_field( array('winner_table', 1, 'win_odds'), '1111' );
// update_sub_field( array('winner_table', 2, 'win_odds'), '1111' );






		            endwhile;  



}








function our_own_api($pick_league){

$url = 'http://market.exaloc.org/v1/pre-match/markets?categories='.$pick_league;



$request = wp_remote_get($url);
$body = wp_remote_retrieve_body( $request );
$data = json_decode( $body, true );


	foreach ($data as $data_part) {

		$title = $data_part['teams'][0]['name'].' vs '.$data_part['teams'][1]['name'];
		$league = $data_part['league']['name'];

		//check for duplicate
					$duplicate = 'unique';
		            $args = array(
		                'post_type' => 'match',
		                'posts_per_page' => -1, 
		                's' => $title, 
		                'post_status' => 'publish',   
		            );
		            $check_duplicate_posts = new WP_Query($args);
		            while($check_duplicate_posts->have_posts()) : $check_duplicate_posts->the_post();
		                $duplicate = 'duplicate';
		            endwhile;   


				//Add Match
		        if($duplicate != 'duplicate'){
					$post= array('post_title' => $title, 'post_content' => '', 'post_status' => 'publish', 'post_type' => 'match' );
			 		$post_ID = wp_insert_post( $post );
			 		wp_set_object_terms( $post_ID, $league, 'leagues', false );
			 		
			 		$teams = wp_set_object_terms( $post_ID, array($data_part['teams'][0]['name'],  $data_part['teams'][1]['name']), 'teams', false );

			 		update_field( 'start_time', $data_part['startTime'], $post_ID );
					update_field( 'home_team', $teams[0], $post_ID );
					update_field( 'away_team', $teams[1], $post_ID );

					$args1 = array(
		                'post_type' => 'bookmaker',
		                'posts_per_page' => -1, 
		                'post_status' => 'publish',   
		            );
		            $bookmakers_query = new WP_Query($args1);
		            $count = 0;
		            while($bookmakers_query->have_posts()) : $bookmakers_query->the_post();
		            		$bookmaker_crawl_order = get_field('bookmaker_crawl_order', get_the_ID());
 							$bookmaker_number = 'none';
							for ($g=0; $g < 20; $g++) { 
								if($data_part['markets'][0]['bookies'][$g]['code'] == $bookmaker_crawl_order){ $bookmaker_number = $g;}
							}

		            		$value[$count]['bookmaker'] = get_the_ID();
		            		$value[$count]['win_odds'] = $data_part['markets'][0]['bookies'][$bookmaker_number]['bets'][0]['odds'];
		            		$value[$count]['draw_odds'] = $data_part['markets'][0]['bookies'][$bookmaker_number]['bets'][1]['odds'];
		            		$value[$count]['loss_odds'] = $data_part['markets'][0]['bookies'][$bookmaker_number]['bets'][2]['odds'];


		            		$count++;
		            endwhile; 

					$field_key = "winner_table";
					update_field( $field_key, $value, $post_ID );


				}

	}

}


































































function crawl_super_table($market = 'correct-score', $page_name_id){

		


	$opts=array('http'=>array('method'=>"GET",'header'=>"Accept-language: en\r\n"."Cookie: odds_type=decimal\r\n",'user_agent'=>'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10.4; en-US; rv:1.9.2.28) Gecko/20120306 Firefox/3.6.28'));
	$context = stream_context_create($opts);
	$match_url = str_replace('winner', $market, get_field('match_url', $page_name_id ));
	
	$html = file_get_html($match_url,false,$context);



echo $match_url;


		//$crawled_titles_number = count($html->find('.match-on .fixtures-bet-name'));


//the id of the table with odds
$table = $html->find('#t1', 0);


$rowData = array();
if (!empty($table)){
foreach($table->find('tr') as $row) {
    // initialize array to store the cell data from each row
    $flight = array();
    foreach($row->find('td') as $cell) {
        // push the cell's text to the array
        	$flight[] = $cell->plaintext;
    }
    if(array_filter($flight)){
    	$rowData[] = $flight;
	}
}
}
//var_dump($rowData);


		            

		            $args1 = array(
		                'post_type' => 'bookmaker',
		                'posts_per_page' => -1, 
		                'post_status' => 'publish',   
		            );
		            $bookmakers_query = new WP_Query($args1);

		            while($bookmakers_query->have_posts()) : $bookmakers_query->the_post();
		            		$bookmaker_crawl_order[] = get_field('bookmaker_crawl_order', get_the_ID());
		            endwhile; 


var_dump($bookmaker_crawl_order);

//title of the odd

//echo $rowData[$count][0];

//bookmaker crawl number

//echo $rowData[$count][$bookmaker_crawl_order];
$rowdata_count = count($rowData) - 1;


for ($i = 0; $i <= $rowdata_count; $i++) {

	foreach($rowData[$i] as $hhh) {
	        // push the cell's text to the array
	        	$gggg[$i]['odd_list'][] = array('odd' => $hhh);       	
	}

}

       

return $gggg;

}

function crawl_full_football_game(){

        $args = array(
            'post_type' => 'match',
            'posts_per_page' => -1, 
            'post_status' => 'publish',   
        );
        $lunar_magazine_posts = new WP_Query($args);
        while($lunar_magazine_posts->have_posts()) : $lunar_magazine_posts->the_post();


$page_name_id = get_the_ID();

		$crawl_football_markets = array(
				 'first-goalscorer' => 'first-goalscorer',
				// 'both-teams-to-score' => 'both-teams-to-score',
				// 'correct-score' => 'correct-score',
				// 'half-time-full-time' => 'half-time-full-time',
				// 'anytime-goalscorer' => 'anytime-goalscorer',
				// 'draw-no-bet' => 'draw-no-bet',
				// 'total-goals-over-under' => 'total-goals-over-under',
				// 'total-goals-exact' => 'total-goals-exact',
				// 'asian-handicap' => 'asian-handicap',
				// 'enhanced-odds-specials' => 'enhanced-odds-specials',
				// 'half-time' => 'half-time',
				// 'last-goalscorer' => 'last-goalscorer',
				// 'half-time-score' => 'half-time-score',
				// 'winning-margin' => 'winning-margin',
				// 'total-corners' => 'total-corners',
				// 'man-of-the-match' => 'man-of-the-match',
				// 'double-chance' => 'double-chance',
				// 'score-win-double' => 'score-win-double',
				// 'betting-markets' => 'betting-markets',
				'winner' => 'winner',
			);

			$i = 0;
			foreach ($crawl_football_markets as $key => $value) {

				$crawl_full[$i]['name_of_the_table'] = $value;
				$crawl_full[$i]['odds_lists'] = crawl_super_table($value, $page_name_id);
				$i++;
			}

			// echo $page_name_id;
			//save a repeater field value
			// $field_key = "super_table";
			$value = $crawl_full;
			 
			//update_field( $field_key, $value, $page_name_id );
			update_post_meta($page_name_id, 'lice_za_kontakt', 0 );
			if ( ! add_post_meta( $page_name_id, 'lice_za_kontakt', $value, true ) ) { 
			   update_post_meta ( $page_name_id, 'lice_za_kontakt', $value );
			}


    echo "<pre>";
    print_r($value);
    echo "</pre>";

 endwhile; 

}









?>