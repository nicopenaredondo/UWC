<?php
require_once('inc/scripts_styles.php');
require_once('inc/theme-support.php');
require_once('inc/duplicate-posts.php');
require_once('inc/timthumb_extension.php');

function is_login_page() {
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}


//hides the admin bar
add_filter('show_admin_bar', '__return_false');


