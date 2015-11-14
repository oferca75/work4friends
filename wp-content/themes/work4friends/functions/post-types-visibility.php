<?


////Make sure users don't see other's posts
////---------------------------------------

function posts_for_current_author($query)
{
    global $pagenow;

    if (('edit.php' != $pagenow) || !$query->is_admin)
        return $query;

    if (!current_user_can('manage_options')) {
        global $user_ID;
        $query->set('author', $user_ID);
    }
    return $query;
}

add_filter('pre_get_posts', 'posts_for_current_author');


//
//////Make sure users don't see other's comments
//////-------------------------------------------
//
//function xyz_comment_query_set_only_author($clauses)
//{
//    global $current_user;
//    $post = get_post($clauses->query_vars['post_id']);
//
//    if (is_admin() && $post->post_author != $current_user->ID && !current_user_can('delete_others_posts')) {
//
//        //$clauses->query_vars['post_author'] = $current_user->ID;
//        $clauses->query_vars['author__in'] = $current_user->ID;
//    }
//
//    return $clauses;
//}
//
//add_action('pre_get_comments', 'xyz_comment_query_set_only_author');


//add_filter('posts_where', 'devplus_attachments_wpquery_where');
//function devplus_attachments_wpquery_where($where)
//{
//    global $current_user;
//
//    if (is_user_logged_in()) {
//        // we spreken over een ingelogde user
//        if (isset($_POST['action'])) {
//            // library query
//            if ($_POST['action'] == 'query-attachments') {
//                $where .= ' AND post_author=' . $current_user->data->ID;
//            }
//        }
//    }
//
//    return $where;
//}


?>