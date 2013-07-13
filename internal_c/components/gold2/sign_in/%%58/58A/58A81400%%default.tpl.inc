<?php /* Smarty version 2.6.27, created on 2013-07-13 10:41:38
         compiled from httpdocs/sign_in/default.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/sign_in/%%58/58A/58A81400%%default.tpl.inc'] = 'fddf3bc7a2d672fd1148374aa6c599af';

?><?php
function _smarty_tplfunc_fddf3bc7a2d672fd1148374aa6c599af_0(&$_smarty)
{
global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2510/101/10196301%25%25interface.style.css?51e17532760b1');

	 $_smarty_tpl_vars = $_smarty->_tpl_vars;
$_smarty->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/centered/header.tpl', 'smarty_include_vars' => array()));
$_smarty->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}

}


function _smarty_tplfunc_fddf3bc7a2d672fd1148374aa6c599af_1(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%25E8/E85/E856A91D%25%25sign_in.style.css?51e175327da0c');

}


function _smarty_tplfunc_fddf3bc7a2d672fd1148374aa6c599af_2(&$_smarty)
{

$component = SK_Component('SignIn');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_fddf3bc7a2d672fd1148374aa6c599af_3(&$_smarty)
{

$component = SK_Component('SignUp');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_fddf3bc7a2d672fd1148374aa6c599af_4(&$_smarty)
{

$component = SK_Component('SignIn');

echo $_smarty->renderComponent($component);

}



?>
