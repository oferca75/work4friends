<?
// Inherit parent
//---------------------------------------
function theme_enqueue_styles()
{

    $parent_style = 'parent-style';

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style)
    );
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


require get_stylesheet_directory() . '/functions/post-types.php';
//
//require get_stylesheet_directory() . '/functions/file-upload-permissions.php';
//
//require get_stylesheet_directory() . '/functions/post-types-visibility.php';
//
//require get_stylesheet_directory() . '/functions/user-roles.php';
//
//require get_stylesheet_directory() . '/functions/admin-menu.php';


add_action('init', 'prowp_define_product_type_taxonomy');

function prowp_define_product_type_taxonomy()
{
    register_taxonomy('type', 'products', array('hierarchial' => true, 'label' => 'Type', 'query_var' => true, 'rewrite' => true));
}

?>