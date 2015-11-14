<?


// Position post type
//---------------------------------------
add_action('init', 'create_position_post_type');
function create_position_post_type()
{
    register_post_type('position',
        array(
            'labels' => array(
                'name' => __('Positions'),
                'singular_name' => __('Position')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author', 'excerpt', 'comments'),
            'capability_type' => 'post',
//            'capabilities' => array(
//                'publish_posts' => 'publish_positions',
////                'edit_posts' => 'edit_positions',
//                'edit_others_posts' => 'edit_others_positions',
////                'delete_posts' => 'delete_positions',
////                'delete_others_posts' => 'delete_others_positions',
////                'read_private_posts' => 'read_private_positions',
////                'edit_post' => 'edit_position',
////                'delete_post' => 'delete_position',
////                'read_post' => 'read_position',
//            ),
        )
    );
}


// Application post type
//---------------------------------------
add_action('init', 'create_application_post_type');
function create_application_post_type()
{
    register_post_type('application',
        array(
            'labels' => array(
                'name' => __('Applications'),
                'singular_name' => __('Application')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author', 'excerpt', 'comments'),
            'capability_type' => 'post',
//            'capabilities' => array(
//                'publish_posts' => 'publish_positions',
////                'edit_posts' => 'edit_positions',
//                'edit_others_posts' => 'edit_others_positions',
////                'delete_posts' => 'delete_positions',
////                'delete_others_posts' => 'delete_others_positions',
////                'read_private_posts' => 'read_private_positions',
////                'edit_post' => 'edit_position',
////                'delete_post' => 'delete_position',
////                'read_post' => 'read_position',
//            ),
        )
    );
}


// Add dropdown to comment
//---------------------------------------
add_filter('comment_form_field_comment', function ($field) {

    global $wp_roles;

    $user = wp_get_current_user();

    $select = '<p><label for="roleselect">Your role:</label>
    <select name="prefix_role" id="roleselect">
    <option value="">Select a file</option>';


    $current_user = wp_get_current_user();
//if ( 1 || 0 != $current_user->ID ) {
    $args = array('post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'author' => $current_user->ID);
    $myposts = get_posts($args);
    foreach ($myposts as $post) :
        $select .= '<option value = "' . $post->guid . '" ><a href="' . $post->guid . '">' . $post->post_title . '</a></option>';

    endforeach;
    $select .= '</select></p>';

    return $select . $field;
});

add_action('comment_post', function ($comment_ID) {


    if (isset ($_POST['prefix_role']))
        update_comment_meta($comment_ID, 'prefix_role', '<a href="' . $_POST['prefix_role'] . '">CV</a>');
});

add_filter('comment_text', function ($text, $comment) {

    if ($role = get_comment_meta($comment->comment_ID, 'prefix_role', TRUE))
        $text = "Role: $role<br> $text";

    return $text;
}, 10, 2);


//
//// Add metadata columns to comments admin
////-----------------------------------------
//function myplugin_comment_columns($columns)
//{
//    return array_merge($columns, array(
//        'custom_column_one' => __('Custom Column One'),
//        'custom_column_two' => __('Custom Column Two'),
//        'custom_column_three' => __('Custom Column Three')
//    ));
//}
//
//add_filter('manage_edit-comments_columns', 'myplugin_comment_columns');
//
//function myplugin_comment_column($column, $comment_ID)
//{
//    switch ($column) {
//        case 'custom_column_one':
//        case 'custom_column_two':
//            if ($meta = get_comment_meta($comment_ID, "_wp_attached_file", true)) {
//                echo $meta;
//            } else {
//                echo '-';
//            }
//            break;
//        case 'custom_column_three':
//            echo 'Third Column Data';
//            break;
//    }
//}
//
//add_filter('manage_comments_custom_column', 'myplugin_comment_column', 10, 2);


?>