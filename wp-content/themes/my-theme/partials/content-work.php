<?php

    $terms = get_the_terms(get_the_ID(),'genre');


    $link = get_term_link($terms[0]->term_id)
?>

<div class="cont" style="background-image:url(<?php the_field('image') ?>)">

        <div class="text-work">
            <a href="<?php echo $link?>">
                <h2><?php the_title() ?></h2>
                <p><?php the_content() ?></p>
            </a>
        </div>
    
    
</div>