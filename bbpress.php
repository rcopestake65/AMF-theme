<?php get_header();?>

<h1><?php the_title();?></h1>
<h2 style='color: red'>bbpress.php</h2>
<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content();?>

<?php endwhile; else: endif;?>

<?php get_footer();?>