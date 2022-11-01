<div class="user-status">
    <div class="username">
        <?php global $current_user; wp_get_current_user(); ?>
        <?php if ( is_user_logged_in() ) { 
 echo 'User: ' . $current_user->display_name .  "\n"; } 
else { wp_loginout(); } ?>
    </div>
    <?php if( is_user_logged_in()){
    ?>
    <a href="<?php echo wp_logout_url( home_url()); ?>" title="Logout">|
        Logout |</a>
    <?php
}
?>
    <div class="search-form">
        <?php echo do_shortcode( '[bbp-search]'); ?>
    </div>

</div>