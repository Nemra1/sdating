<?php /* Smarty version 2.6.27, created on 2013-07-13 11:44:23
         compiled from httpdocs/search_result/default.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/search_result/%%96/96F/96FE048B%%default.tpl.inc'] = '11d95fbeec17a94d53cac1a32fe6b621';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'document_url', 'httpdocs/search_result/default.tpl', 8, false),)), $this); ?>
<?php
function _smarty_tplfunc_11d95fbeec17a94d53cac1a32fe6b621_0(&$_smarty)
{
global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2510/101/10196301%25%25interface.style.css?51e183e7df81c');

	 $_smarty_tpl_vars = $_smarty->_tpl_vars;
$_smarty->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/header.tpl', 'smarty_include_vars' => array()));
$_smarty->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}

}


function _smarty_tplfunc_11d95fbeec17a94d53cac1a32fe6b621_1(&$_smarty)
{

$component = SK_Component('SaveSearch');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_11d95fbeec17a94d53cac1a32fe6b621_2(&$_smarty)
{

$component = SK_Component('SavedLists');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_11d95fbeec17a94d53cac1a32fe6b621_3(&$_smarty)
{

$component = SK_Component('SearchResultList');

echo $_smarty->renderComponent($component);

}



?>
