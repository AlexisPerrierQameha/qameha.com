<?php
define ('FUNCTIONS', TEMPLATEPATH . '/functions');
define ('COPY', FUNCTIONS . '/titan.php');
require_once (FUNCTIONS . '/comments.php');
require_once (FUNCTIONS . '/titan-admin.php');

// Sidebars
if ( function_exists('register_sidebar_widget') )
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

if ( function_exists('register_sidebar_widget') )
    register_sidebar(array(
		'name'=>'Footer',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
?>
