<?php

/**
 * Forums Loop - Single Forum
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>



<ul id="bbp-forum-<?php bbp_forum_id(); ?>" <?php bbp_forum_class(); ?>>
    <li class="bbp-forum-info">

        <?php if ( bbp_is_user_home() && bbp_is_subscriptions() ) : ?>

        <span class="bbp-row-actions">

            <?php do_action( 'bbp_theme_before_forum_subscription_action' ); ?>

            <?php bbp_forum_subscription_link( array( 'before' => '', 'subscribe' => '+', 'unsubscribe' => '&times;' ) ); ?>

            <?php do_action( 'bbp_theme_after_forum_subscription_action' ); ?>

        </span>

        <?php endif; ?>

        <?php do_action( 'bbp_theme_before_forum_title' ); ?>

        <?php        //the href to the top level category has been removed to make the accordion menu removed php was bbp_forum_permalink(); ?>

        <a class="bbp-forum-title" href="#"><img class="arrow-icon"
                src="<?php bloginfo('template_url'); ?>/img/arrow-icon.svg" alt=""><?php bbp_forum_title(); ?></a>
        <div class="forum-menu-container">
            <?php do_action( 'bbp_theme_after_forum_title' ); ?>

            <?php do_action( 'bbp_theme_before_forum_description' ); ?>

            <div class="bbp-forum-content"><?php bbp_forum_content(); ?></div>

            <?php do_action( 'bbp_theme_after_forum_description' ); ?>

            <?php do_action( 'bbp_theme_before_forum_sub_forums' ); ?>

            <?php bbp_list_forums(); ?>

            <?php do_action( 'bbp_theme_after_forum_sub_forums' ); ?>

            <?php bbp_forum_row_actions(); ?>
        </div>

    </li>


</ul><!-- #bbp-forum-<?php bbp_forum_id(); ?> -->