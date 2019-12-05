<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jamie Howe Portfolio</title>
    <?php wp_head()?>
</head>
<body>

<div class="wrapper">


    <header>

        <div class="menu">
            
            <div class="logo"> 
                <a href="<?php echo get_permalink(9); ?>">Jamie Howe</a>
            </div>

            <div class="bars"><i class="fas fa-bars"></i></div>

            <?php 
            //output the main nav
            $args = array(
                'theme-location'=>'main-menu',
                'container'=>'ul',
                'menu_class'=>'nav'

            );
            wp_nav_menu($args);
            ?>
        
        </div>

    </header>