<?php get_header()?>


    <div class="main">


        <div class="container-about">

            <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('partials/content','default');
                endwhile;
            ?>

            <!-- Extra content goes here -->

        </div>



    </div>


<?php get_footer()?>