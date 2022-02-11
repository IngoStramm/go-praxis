<?php

/**
 * Plugin Name: Go Praxis
 * Plugin URI: https://agencialaf.com
 * Description: Descrição do Go Praxis.
 * Version: 0.1.2
 * Author: Ingo Stramm
 * Text Domain: gpx
 * License: GPLv2
 */

defined('ABSPATH') or die('No script kiddies please!');

define('GPX_DIR', plugin_dir_path(__FILE__));
define('GPX_URL', plugin_dir_url(__FILE__));

function gpx_debug($debug)
{
    echo '<pre>';
    var_dump($debug);
    echo '</pre>';
}

require_once 'tgm/tgm.php';
require_once 'classes/classes.php';
require_once 'scripts.php';
require_once 'post-type/post-type.php';
require_once 'taxonomy/taxonomy.php';
require_once 'settings.php';
require_once 'cmb.php';
require_once 'functions.php';

require 'plugin-update-checker-4.10/plugin-update-checker.php';
$updateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://raw.githubusercontent.com/IngoStramm/go-praxis/master/info.json',
    __FILE__,
    'gpx'
);
