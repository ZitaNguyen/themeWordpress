<!-- footer -->
<footer class="text-white">
        <div class="container">
            <div class="row my-4 justify-content-md-between justify-content-sm-center">
                <!-- google map -->
                <?php dynamic_sidebar('womendevs-google-map') ?>

                <!-- newsletter & follow -->
                <?php dynamic_sidebar('womendevs-newsletter') ?>

                <!-- contact -->
                <?php dynamic_sidebar('womendevs-contact') ?>

            </div><!-- row -->
        </div><!-- container -->
    </footer>
    
    <!-- Permet a Wordpress de placer les fichiers scripts dans le bas de page de mon theme -->
    <?php wp_footer(); ?>    
</body>
</html>