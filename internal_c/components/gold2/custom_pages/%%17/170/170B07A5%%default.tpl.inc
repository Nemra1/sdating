<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:51
         compiled from httpdocs/custom_pages/default.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/custom_pages/%%17/170/170B07A5%%default.tpl.inc'] = '750428ce48df9003690291b72226c869';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'httpdocs/custom_pages/default.tpl', 5, false),)), $this); ?>
<?php
function _smarty_tplfunc_750428ce48df9003690291b72226c869_0(&$_smarty)
{
global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2510/101/10196301%25%25interface.style.css?51e174c7bc825');

	 $_smarty_tpl_vars = $_smarty->_tpl_vars;
$_smarty->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/header.tpl', 'smarty_include_vars' => array('sidebar' => true)));
$_smarty->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}

}



?>
