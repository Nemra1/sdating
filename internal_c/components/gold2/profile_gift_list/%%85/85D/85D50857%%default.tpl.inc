<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/profile_gift_list/default.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/profile_gift_list/%%85/85D/85D50857%%default.tpl.inc'] = '697a427babdc5eb417ec35d2babdc4d3';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/profile_gift_list/default.tpl', 6, false),array('block', 'block_cap', 'components/profile_gift_list/default.tpl', 13, false),array('function', 'document_url', 'components/profile_gift_list/default.tpl', 8, false),array('modifier', 'censor', 'components/profile_gift_list/default.tpl', 13, false),array('modifier', 'truncate', 'components/profile_gift_list/default.tpl', 28, false),)), $this); ?>
<?php
function _smarty_tplfunc_697a427babdc5eb417ec35d2babdc4d3_0(&$_smarty)
{
global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2510/101/10196301%25%25interface.style.css?51e1848546dcf');

	 $_smarty_tpl_vars = $_smarty->_tpl_vars;
$_smarty->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/header.tpl', 'smarty_include_vars' => array()));
$_smarty->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}

}


function _smarty_tplfunc_697a427babdc5eb417ec35d2babdc4d3_1(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/profile_gift_list/%25%253A/3A6/3A65E8F4%25%25profile_gift_list.style.css?51e1848548258');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="profile_gift_list">
<?php

}


function _smarty_tplfunc_697a427babdc5eb417ec35d2babdc4d3_2(&$_smarty)
{

?>
</div>
<?php

}



?>
