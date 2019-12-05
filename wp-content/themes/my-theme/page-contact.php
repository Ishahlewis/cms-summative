<?php get_header()?>


    <div class="main">


        <div class="container-contact">

            <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('partials/content','contact');
                endwhile;
            ?>

            <!-- Extra content goes here -->

        </div>



    </div>


<?php get_footer()?>