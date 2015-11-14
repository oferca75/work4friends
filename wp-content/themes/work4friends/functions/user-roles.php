<?


//
// Modify registration form to include roles
//-------------------------------------------
add_action('user_register', 'register_role');

function register_role($user_id, $password = "", $meta = array())
{
    $userdata = array();
    $userdata['ID'] = $user_id;
    $userdata['role'] = 'contributor';

}


/**
 * Remove capabilities from contributor.
 *---------------------------------------
 */
function wpcodex_set_capabilities()
{

    // Get the role object.
    $contributor = get_role('contributor');

    // A list of capabilities to remove from editors.
    $caps = array(
        'moderate_comments',
        'manage_categories',
        'manage_links',
        'edit_others_posts',
        'edit_others_pages',
        'delete_posts',
        'delete_pages',
        'edit_posts',
        'delete_pages'
    , 'delete_positions',
        'edit_others_positions',
        'read_private_positions',
        'delete_others_positions',

    );

    foreach ($caps as $cap) {

        // Remove the capability.
        $contributor->remove_cap($cap);
    }

    $caps = array(
        'edit_positions',
        'read_position',
        'edit_comment',
    );
    foreach ($caps as $cap) {

        // Remove the capability.
        $contributor->add_cap($cap);
    }

}

add_action('init', 'wpcodex_set_capabilities');

?>