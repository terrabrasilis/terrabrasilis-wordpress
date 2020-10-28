<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
/* adiciona campo de busca no menu top */
add_filter('wp_nav_menu_items','add_search_box', 10, 2);
function add_search_box($items, $args) {
 
        ob_start();
        get_search_form();
        $searchform = ob_get_contents();
        ob_end_clean();
 
        $items .= '<li class="buscam">' . $searchform . '</li>';
 
    return $items;
}
?>
<?php
/**
 * Suporte a imagem full em blocos
 */
function mytheme_setup() {
  add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );
?>