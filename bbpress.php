<?php /* Template Name: BBPress-Page */ ?>
<?php get_header();?>

<div class="container">
    <h2 style='color: red'>bbpress.php</h2>
    <?php if(have_posts()): while(have_posts()): the_post();?>

    <?php the_content();?>

    <?php endwhile; else: endif;?>
</div>


<?php get_footer();?>