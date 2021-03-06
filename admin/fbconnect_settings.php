<?php

$file_key = 'fbconnect';
$active_tab = 'fbconnect_settings';

require_once( '../internals/Header.inc.php' );

// Admin auth
require_once( DIR_ADMIN_INC.'inc.auth.php' );

require_once( DIR_ADMIN_INC.'class.admin_frontend.php' );
require_once( DIR_ADMIN_INC.'class.admin_configs.php' );

$frontend = new AdminFrontend();

adminConfig::SaveConfigs($_POST);
adminConfig::getResult($frontend);

$configs = adminConfig::ConfigList('facebook_connect');
$frontend->assign('configs', $configs);

// require file with specific functions
require_once( 'inc.admin_menu.php' );

$_page['title'] = "Facebook";

// display template
$frontend->display( 'fbconnect_settings.html' );