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
<span class="template-name">loop-forums-home.php</span>
<div class="home-grid">
    <div class="home-grid__col-1">
        <h2>Categories</h2>
        <ul class="accordion">
            <li class="bbp-body">

                <?php while ( bbp_forums() ) : bbp_the_forum(); ?>

                <?php bbp_get_template_part( 'loop', 'single-forum-home' ); ?>

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
                'posts_per_page' => 4,
                'orderby' => 'publish_date',
                'order' => 'DECS',
            ]);


           
        $count = 0;  
        foreach ($posts as $post){
        setup_postdata( $post );
        $id = get_the_ID();        
        $count++;
        echo '<div class="latest-posts-grid">';

        echo do_shortcode( $stats ['reply_count'] );
        echo '<div class="latest-posts-grid__col-1">';
            echo '<a href="' .get_the_permalink() . '"><span class="post-number">' . $count . '</span>' . get_the_title() .'</a>';

            //bbp_topic_title(); just displays the topic title again - need parent!

           //the excerpt is shortened to 10 words in the functions.php file
            echo the_excerpt();
echo '<p>Category: -----<br>';
echo 'Topic: -----</p>';
            echo '</div>
        <div class="latest-posts-grid__col-2">';
            bbp_topic_reply_count( $id );
            echo '</div>
        <div class="latest-posts-grid__col-3">';
            //'views' shortcdoe is from the plugin: WP-PostViews
            echo do_shortcode( '[views]' );
            echo '</div>';
            echo '</div>';
        }
      

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
 
        // Loop over editors.
        foreach ( $editors as $editor ) {
            echo '<div class="editors-list-container">';
            // Get each editor's data.
            $editor_info = get_userdata( $editor->ID );

            //this is retrieving 'actual' WP posts count, not forums
            //$posts = count_user_posts($editor->ID);
            
           
           // Show avatar, name and posts count.
           ?>
        <!--<a href="<?php bbp_user_profile_url( $editor->ID ); ?>">
             <?php
                echo '<img class="avatar-img" src="' . esc_url( get_avatar_url( $editor->ID ) ) . '" /></a>'
            ?> -->
        <a href="<?php bbp_user_profile_url( $editor->ID ); ?>">
            <?php
            echo '<span>' . esc_html( $editor->display_name ) . '</span></a></div>';
            echo '<div class="following-icons">
            <div class="views">428 <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="hearts">50<i class="fa-solid fa-heart"></i></div>
            <div class="posts">20<i class="fa-solid fa-file-lines"></i></div></div>
            <div class="latest">Latest: ----</div>
            ';

    }


    } else {

    // Display "no editors found" message.
    echo 'No subscribers found';

    }

    ?>

    </div>
    <!--home-grid__col-3-->
</div>
<!--home-grid-->