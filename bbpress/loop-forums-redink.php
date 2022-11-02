<ul>
    <li class="bbp-body">

        <?php while ( bbp_forums() ) : bbp_the_forum(); ?>

        <?php bbp_get_template_part( 'loop', 'single-forum-redink' ); ?>

        <?php endwhile; ?>

    </li><!-- .bbp-body -->
</ul>