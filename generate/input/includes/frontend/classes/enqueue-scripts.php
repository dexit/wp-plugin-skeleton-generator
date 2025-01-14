<?php

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

class |UNIQUESTRING|EnqueueScriptsFrontend
{

    /*
    * Registration of styles and scripts
    */
    public static function registerScripts()
    {

        // register scripts and styles
        add_action( 'wp_enqueue_scripts', ['|UNIQUESTRING|EnqueueScriptsFrontend', 'enqueue'] );

    }

        public static function enqueue()
        {

            wp_enqueue_style( '|uniquestring|_font_awesome', |UNIQUESTRING|_PLUGIN_URL . 'assets/font-awesome-4.6.3/css/font-awesome.min.css' );

            wp_enqueue_style( '|uniquestring|_style', |UNIQUESTRING|_PLUGIN_URL . 'includes/frontend/assets/css/style.css', [ '|uniquestring|_font_awesome' ], |UNIQUESTRING|_PLUGIN_VERSION, 'all' );

            wp_enqueue_script( '|uniquestring|_script', |UNIQUESTRING|_PLUGIN_URL . 'includes/frontend/assets/js/script.js', [ 'jquery' ], |UNIQUESTRING|_PLUGIN_VERSION, false );

        }

}
