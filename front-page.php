<?php get_header(); // Inclus le fichier header.php ?>
    
    <!-- section -->
    <section class="container">
        <div class="my-3 py-3 row">
            <aside class="col-md-7">
                <img src="<?= get_template_directory_uri(); ?>/assets/image/web-1935737_640.png" alt="Skills" class="mx-auto d-block">
            </aside>
            <article class="col-md-5 pt-2">
                <h4 class="font-italic font-weight-bold">What do you expect here?</h4>
                <p class="text-justify">
                    We are a group of women who is passionate and talented in development web. We guarantee to give you
                    the best service and the most-beautiful-desinged website that you have ever imagined.
                </p>
            </article>
        </div><!-- d-flex -->

        <h4 class="font-italic font-weight-bold">Our clients</h4>

        <div class="row clients">
            <div class="col-md-3 col-sm-6 my-2">
                <img src="<?= get_template_directory_uri(); ?>/assets/image/Go-Conserve-Logo.png" alt="goConserveLogo" class="mx-auto d-block">
            </div><!-- col -->
            <div class="col-md-3 col-sm-6 my-2">
                <img src="<?= get_template_directory_uri(); ?>/assets/image/aashe.png" alt="aasheLogo" class="mx-auto d-block">
            </div><!-- col -->
            <div class="col-md-3 col-sm-6 my-2">
                <img src="<?= get_template_directory_uri(); ?>/assets/image/amcor.png" alt="amcorLogo" class="mx-auto d-block">
            </div><!-- col -->
            <div class="col-md-3 col-sm-6 my-2">
                <img src="<?= get_template_directory_uri(); ?>/assets/image/chemours.png" alt="chemoursLogo" class="mx-auto d-block">
            </div><!-- col -->
        </div><!-- row -->
    </section><!-- container -->

<?php get_footer(); // Inclus le fichier footer.php ?>