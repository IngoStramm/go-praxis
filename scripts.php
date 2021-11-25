<?php

add_action('wp_enqueue_scripts', 'gpx_frontend_scripts');

function gpx_frontend_scripts()
{

    $min = (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1', '10.0.0.3'))) ? '' : '.min';

    if (empty($min)) :
        wp_enqueue_script('go-praxis-livereload', 'http://localhost:35729/livereload.js?snipver=1', array(), null, true);
    endif;

    wp_register_script('go-praxis-script', GPX_URL . 'assets/js/go-praxis' . $min . '.js', array('jquery'), '1.0.0', true);

    wp_enqueue_script('go-praxis-script');

    wp_localize_script('go-praxis-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
    wp_enqueue_style('go-praxis-style', GPX_URL . 'assets/css/go-praxis.css', array(), false, 'all');
}
