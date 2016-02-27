<?php
/**
 * Administration custom
 */

// Custom WordPress Login Logo
function login_css() {
    wp_enqueue_style( 'login_css', get_template_directory_uri() . '/admin/css/login.css' );
}
add_action('login_head', 'login_css');


// Use your own external URL logo link
function wpc_url_login(){
    return "http://www.solerieu-nicolas.fr/"; // your URL here
}
add_filter('login_headerurl', 'wpc_url_login');


// Custom WordPress Footer
function modify_footer_admin () {
    echo '&copy; ' . date('Y') . ' - <a href="http://www.solerieu-nicolas.fr/" target="_blank">Nicolas Solerieu</a> - ';
    echo 'Powered by <a href="http://WordPress.org">WordPress</a>.';
}
add_filter('admin_footer_text', 'modify_footer_admin');



// Add a widget in WordPress Dashboard
function wpc_dashboard_widget_function() {

    echo '<h4>Support and features request</h4>';
    echo "<p>For any request about the site maintenance or question about the functions, we are available 24/7 to support you.<br/>
    <br/>
    Just send us an email at <a href='mailto:contact@solerieu-nicolas.fr'>contact@solerieu-nicolas.fr</a><br/>
    We are also available on skype <a>nicolas.solerieu</a>
    </p>";
    

}
function wpc_add_dashboard_widgets() {
    wp_add_dashboard_widget('wp_dashboard_widget', 'Support and Updates', 'wpc_dashboard_widget_function');
}
add_action('wp_dashboard_setup', 'wpc_add_dashboard_widgets' );