<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name')?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
</head>
<body> 
    <header>
        <h1><?php  bloginfo('name') ?></h1>
        <span><?php  bloginfo('description') ?></span>
        <?php wp_nav_menu();?>
        <form action="#" id ="input">
                <?php 
                    get_search_form();
                ?>
        </form>
    </header>

    <div class="container">
        <?php if(have_posts()):?>
            <?php while(have_posts()):?>
                <?php the_post();?>
                <h3><?php the_title();?></h3>
                <h3><?php the_author();?></h3>
                <h3><?php the_date();?></h3>
                <h3><?php the_category();?></h3>      
                <?php the_content();?>   
                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail();?>
                <?php endif;?>
        
            <?php endwhile;?>
           
        <?php else: echo "not found";?>
        <?php endif;?>
        
            
    </div>

    <footer>
        <p>Posted by: nysar yam</p>
        <p>Contact information: <a href="mailto:someone@example.com">senghorkhen96@gmail.com</a></p>
        <?php wp_footer();?>
    </footer>
</body>
</html>