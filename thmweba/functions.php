<?php

 function menu(){
    register_nav_menus(array(
        'primary'=>_('Primary Menu'),
        'footer'=>_('Footer Menu'),
)); 
}
add_action('after_setup_theme', 'menu');

function add_feature(){
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(400,400);
}
add_action('after_setup_theme', 'add_feature');
?>