<?php
/*

Je potřeba si založit dvě menu ve Wordpressu
    1- Hlavní menu (úvod, návody, tipy)
    2- Kontakt menu (kontakt)
*/








// Registrace stylů a skriptů
function test_enqueue_assets() {
    wp_enqueue_style(
        'test-styles',
        get_template_directory_uri(),
        array(),
        '1.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'test_enqueue_assets');



// Registrace menu
function test_register_menus()
{
    register_nav_menus(array(
        'hlavni-menu' => __('Hlavní menu', 'test'),
        'paticka-menu' => __('Paticka menu', 'test') // Nepovinné, pokud chcete i menu v patičce
    ));
}

add_action('init', 'test_register_menus');

function kontakt_register_menus()
{
    register_nav_menus(array(
        'kontakt-menu' => __('Kontakt menu', 'test'),
    ));
}

add_action('init', 'kontakt_register_menus');



// Přidání třídy "nav-item" do <li> pro více menu
function pridat_bootstrap_tridy_do_menu($classes, $item, $args) {
    $povolena_menu = ['hlavni-menu', 'kontakt-menu'];
    if (isset($args->theme_location) && in_array($args->theme_location, $povolena_menu)) {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'pridat_bootstrap_tridy_do_menu', 10, 3);

// Přidání třídy "nav-link" do <a> pro více menu
function pridat_bootstrap_tridy_do_odkazu($atts, $item, $args) {
    $povolena_menu = ['hlavni-menu', 'kontakt-menu'];
    if (isset($args->theme_location) && in_array($args->theme_location, $povolena_menu)) {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'pridat_bootstrap_tridy_do_odkazu', 10, 3);

