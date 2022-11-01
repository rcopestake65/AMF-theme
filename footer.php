</div>
<!--.container-->
<footer>


    <div class="footer-container">


        <div class="footer-content">
            <div class="footer-logo">
                <img src="http://the-art-market-forum.test//wp-content/uploads/2022/09/AMF-Logo_350_transp.png"
                    alt="logo">
            </div>
            <div class="footer-menu-container">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu','menu_class' => 'footer-menu', ) ); ?>
            </div>
            <div class="copyright">
                <p>&copy; <span id="date"></span> Art Market Forum</p>
            </div>
            <div class="footer-social-icons">
                <a href="#"> <i class="fa-brands fa-square-facebook fa-2x"></i></a>
                <a href="#"> <i class="fa-brands fa-square-twitter fa-2x"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>
                <a href="#"><i class="fa-brands fa-square-instagram fa-2x"></i></a>
                <a href="#"><i class="fa-brands fa-square-snapchat fa-2x"></i></a>


            </div>
        </div>

    </div>
    <!--end footer container-->



</footer>

<?php wp_footer();?>

</body>

</html>