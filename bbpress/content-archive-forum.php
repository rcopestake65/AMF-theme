<?php

/**
 * Archive Forum Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

?>

<!-- if statement to decide whether to use the custom BBPress loop on the Home page or the standard loop on the Forum Index page -->

<?php
if(is_page('Home'))
{
    ?>
<?php echo '<div id="bbpress-forums" class="bbpress-wrapper">' ?>

<?php //bbp_get_template_part( 'form', 'search' ); ?>

<?php bbp_breadcrumb(); ?>

<?php bbp_forum_subscription_link(); ?>

<?php do_action( 'bbp_template_before_forums_index' ); ?>

<?php if ( bbp_has_forums() ) : ?>

<?php bbp_get_template_part( 'loop',     'forums-redink'    ); ?>

<?php else : ?>

<?php bbp_get_template_part( 'feedback', 'no-forums' ); ?>

<?php endif; ?>

<?php do_action( 'bbp_template_after_forums_index' ); 

echo '</div>';
}
else
{
    ?>
<?php echo '<div id="bbpress-forums" class="bbpress-wrapper">' ?>

<?php //bbp_get_template_part( 'form', 'search' ); ?>

<?php bbp_breadcrumb(); ?>

<?php bbp_forum_subscription_link(); ?>

<?php do_action( 'bbp_template_before_forums_index' ); ?>

<?php if ( bbp_has_forums() ) : ?>

<?php bbp_get_template_part( 'loop',     'forums'    ); ?>

<?php else : ?>

<?php bbp_get_template_part( 'feedback', 'no-forums' ); ?>

<?php endif; ?>

<?php do_action( 'bbp_template_after_forums_index' ); 

echo '</div>';
}
?>