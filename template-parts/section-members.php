<?php /* Template Name: Members-Page */ ?>
<?php get_header();?>
<hr />
<h2>Members Display</h2>
<?php
 
// Display Subscribers

 $args = array(
    'role' => 'Subscriber'
);

// The Query
$user_query = new WP_User_Query( $args );

// User Loop
if ( ! empty( $user_query->get_results() ) ) {
	foreach ( $user_query->get_results() as $user ) {
		echo '<p>' . $user->display_name . '</p>';
	}
} else {
	echo 'No users found.';
}
?>
<hr />
<?php get_footer();?>