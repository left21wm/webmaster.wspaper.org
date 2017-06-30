<?
require '../../wp-blog-header.php';
if(isset($_GET['tistory_id'])){
	$args = array(
			'meta_query' => array(
					array(
							'key' => 'tistory_id',
							'value' => $_GET['tistory_id'],
							),
					),
			);
}

if(isset($_GET['post_name'])){
	$post_name = strtolower(urlencode($_GET['post_name']));
	$args = array(
			'name' => $post_name,
			);
}

if(isset($_GET['tistory_date'])){
	if($_GET['tistory_date'] == '2013/04/18 03:00'){
		wp_redirect( home_url() );
	}

	$timestamp = strtotime($_GET['tistory_date']);
	$post_date_timestamp = $timestamp - 60*60*9;

	$year = date('Y', $post_date_timestamp);
	$monthnum = date('m', $post_date_timestamp);
	$day = date('d', $post_date_timestamp);
	$hour = date('H', $post_date_timestamp);
	$minute = date('i', $post_date_timestamp);

	$args = "year=$year&monthnum=$monthnum&day=$day&hour=$hour&minute=$minute";
}

if( ! isset($args)){
	exit;
}

$wp_query = new WP_Query($args);

if($wp_query->post_count == 0){
	$page_404 = get_404_template();
	include $page_404;
	exit;
}
$post = $wp_query->post;
wp_redirect($post->guid, '301');