<?

// Remove unnecessary menu entries
//---------------------------------

function custom_menu_page_removing()
{
    remove_menu_page('edit.php');
    remove_menu_page('edit.php?post_type=page');
}

add_action('admin_menu', 'custom_menu_page_removing');


?>