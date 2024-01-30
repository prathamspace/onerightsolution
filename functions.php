<?php


function onerightsolution_scripts()
{
    wp_enqueue_style('output', get_template_directory_uri() . '/dist/output.css', array());
}
add_action('wp_enqueue_scripts', 'onerightsolution_scripts');




?>