<?php
class Theme_Enqueue_Scripts {
    public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }

    public function enqueue() {
        // Enqueue Google Fonts
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Nova+Mono&display=swap', array(), null);
        
        // Enqueue Font Awesome 6.6
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css', array(), '6.6.0');
        
        // Enqueue other styles and scripts
        wp_enqueue_style('normalize-css', get_template_directory_uri() . '/css/normalize.css');
        wp_enqueue_style('player-css', get_template_directory_uri() . '/css/player.css');
        wp_enqueue_style('main-css', get_stylesheet_uri());
        wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', array(), null, true);
    }
}

// Instantiate the class
new Theme_Enqueue_Scripts();
?>
