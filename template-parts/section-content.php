<?php if(have_posts()): while(have_posts()): the_post();?>

<div class="container">
    <?php get_template_part( 'template-parts/section', 'user' );?>
    <?php the_content();?>

    <?php endwhile; else: endif;?>
</div>