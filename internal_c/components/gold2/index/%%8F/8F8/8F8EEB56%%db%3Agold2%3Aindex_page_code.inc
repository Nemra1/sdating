<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:50
         compiled from db:gold2:index_page_code */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/index/%%8F/8F8/8F8EEB56%%db%3Agold2%3Aindex_page_code.inc'] = '51a76c81261e4993f986f2b487b67791';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ads', 'db:gold2:index_page_code', 22, false),)), $this); ?>
<?php
function _smarty_tplfunc_51a76c81261e4993f986f2b487b67791_0(&$_smarty)
{
global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2510/101/10196301%25%25interface.style.css?51e174c698e9e');

	 $_smarty_tpl_vars = $_smarty->_tpl_vars;
$_smarty->_smarty_include(array('smarty_include_tpl_file' => 'canvas/index/header.tpl', 'smarty_include_vars' => array()));
$_smarty->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}

}


function _smarty_tplfunc_51a76c81261e4993f986f2b487b67791_1(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2595/954/954990CB%25%25index.style.css?51e174c69b4bc');

}


function _smarty_tplfunc_51a76c81261e4993f986f2b487b67791_2(&$_smarty)
{

$component = SK_Component('PageHeader');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_51a76c81261e4993f986f2b487b67791_3(&$_smarty)
{

$component = SK_Component('QuickSearch', array('type' => 'index'));

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_51a76c81261e4993f986f2b487b67791_4(&$_smarty)
{

$component = SK_Component('Slideshow');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_51a76c81261e4993f986f2b487b67791_5(&$_smarty)
{

$component = SK_Component('PageFooter');

echo $_smarty->renderComponent($component);

}



?>
