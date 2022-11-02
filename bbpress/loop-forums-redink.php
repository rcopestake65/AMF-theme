<?php

/**
 * Forums Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

do_action( 'bbp_template_before_forums_loop' ); ?>
<div class="home-grid">
    <div class="home-grid__col-1">
        <h2>CATEGORIES</h2>
        <li class="bbp-body">

            <?php while ( bbp_forums() ) : bbp_the_forum(); ?>

            <?php bbp_get_template_part( 'loop', 'single-forum-redink' ); ?>

            <?php endwhile; ?>

        </li><!-- .bbp-body -->

        </ul><!-- .forums-directory -->

        <?php do_action( 'bbp_template_after_forums_loop' ); ?>
    </div>
    <!--.home-grid__col-1-->
    <div class="home-grid__col-2">
        <div class="latest-posts-grid-header">
            <h2>LATESTS POSTS</h2>
            <p>Replies</p>
            <p>Views</p>
        </div>


        <?php 
            $posts = get_posts([
                'post_type' => 'topic',
                'posts_per_page' => 15,
                'orderby' => 'publish_date',
                'order' => 'DECS',
            ]);


            echo '<div class="latest-posts-grid">';
            
        foreach ($posts as $post){
        setup_postdata( $post );
        $id = get_the_ID();


        echo do_shortcode( $stats ['reply_count'] );
        echo '<div class="latest-posts-grid__col-1">';
            echo '<a href="' .get_the_permalink() . '"> '. get_the_title() .'</a>';

            //bbp_topic_title(); just displays the topic title again - need parent!

           //the excerpt is shortened to 10 words in the functions.php file
            echo the_excerpt();

            echo '</div>
        <div class="latest-posts-grid__col-2">';
            bbp_topic_reply_count( $id );
            echo '</div>
        <div class="latest-posts-grid__col-3">';
            //'views' shortcdoe is from the plugin: WP-PostViews
            echo do_shortcode( '[views]' );
            echo '</div>';
        }
        echo '</div>';

    wp_reset_postdata();

    ?>

    </div>
    <!--home-grid__col-2-->
    <div class="home-grid__col-3">
        <h2>TOP FOLLOWING</h2>

        <?php
 
// USERS.

 
$args = array(
    'role_in' => array('Administrator', 'Subscriber'),
    'orderby' => 'post_count',
    'order' => 'DESC',
   // 'role' => 'Subscriber',
);
 
// Custom query.
$my_user_query = new WP_User_Query( $args );
 
// Get query results.
$editors = $my_user_query->get_results();
 
// Check for editors
if ( ! empty( $editors ) ) {
 
    echo '<ul class="editors-list">';
 
        // Loop over editors.
        foreach ( $editors as $editor ) {
     
            // Get each editor's data.
            $editor_info = get_userdata( $editor->ID );

            //this is retrieving 'actual WP posts count, not forums
            $posts = count_user_posts($editor->ID);

           
           // Show editor's name and forum count.
                echo '<p><span>' . esc_html( $editor->display_name ) . ': ' . $posts . '</span>';
        
        }
 
    echo '</ul>';
 
} else {
 
    // Display "no editors found" message.
    echo 'No subscribers found';
 
}

?>

    </div>
    <!--home-grid__col-3-->
</div>