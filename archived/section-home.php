<?php if(have_posts()): while(have_posts()): the_post();?>
<div class="container">
    <div class="logged-in-status-container">
        <?php get_template_part( 'template-parts/section', 'user' );?>

    </div>
    <?php the_content();?>

    <?php get_sidebar() ?>
    <?php get_template_part('template-parts/section', 'members');?>
</div>



<?php endwhile; else: endif;?>