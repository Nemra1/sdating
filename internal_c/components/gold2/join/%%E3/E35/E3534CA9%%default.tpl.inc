<?php /* Smarty version 2.6.27, created on 2013-07-13 10:40:54
         compiled from components/join/default.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/join/%%E3/E35/E3534CA9%%default.tpl.inc'] = 'e05a9bf74ed894352e6b793f4ca8d87f';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/join/default.tpl', 8, false),)), $this); ?>
<?php
function _smarty_tplfunc_e05a9bf74ed894352e6b793f4ca8d87f_0(&$_smarty)
{
global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2510/101/10196301%25%25interface.style.css?51e1750697a99');

	 $_smarty_tpl_vars = $_smarty->_tpl_vars;
$_smarty->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/header.tpl', 'smarty_include_vars' => array()));
$_smarty->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}

}


function _smarty_tplfunc_e05a9bf74ed894352e6b793f4ca8d87f_1(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/center_block/%25%2599/996/996EAF4A%25%25join.style.css?51e175069c0e3');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="center_block">
<?php

}


function _smarty_tplfunc_e05a9bf74ed894352e6b793f4ca8d87f_2(&$_smarty)
{
include '/Applications/MAMP/dev.local/ska/internal_c/forms/profile_join.form.php';
SK_Layout::current_component()->handleForm($form);
SK_Layout::frontend_handler()->registerForm($form);
echo $form->renderStart();
$_smarty->assign('form', $form);

}


function _smarty_tplfunc_e05a9bf74ed894352e6b793f4ca8d87f_3(&$_smarty)
{

echo $form->renderField(array('name' => $_smarty->_tpl_vars['field']['name'],'labelsection' => "profile_fields.label_join"));

}


function _smarty_tplfunc_e05a9bf74ed894352e6b793f4ca8d87f_4(&$_smarty)
{

echo $form->renderField(array('name' => $_smarty->_tpl_vars['field']['name'],'labelsection' => "profile_fields.value"));

}


function _smarty_tplfunc_e05a9bf74ed894352e6b793f4ca8d87f_5(&$_smarty)
{

echo $form->renderField(array('name' => "re_".($_smarty->_tpl_vars['field']['name']),'labelsection' => "profile_fields.value"));

}


function _smarty_tplfunc_e05a9bf74ed894352e6b793f4ca8d87f_6(&$_smarty)
{

echo $form->renderField(array('name' => 'captcha'));

}


function _smarty_tplfunc_e05a9bf74ed894352e6b793f4ca8d87f_7(&$_smarty)
{

echo $form->renderButton(array('action' => $_smarty->_tpl_vars['form']->active_action,'label' => SK_Language::text("forms._actions.join")));

}


function _smarty_tplfunc_e05a9bf74ed894352e6b793f4ca8d87f_8(&$_smarty)
{
unset($_smarty->_tpl_vars['form'], $form);
echo '</form>';
}


function _smarty_tplfunc_e05a9bf74ed894352e6b793f4ca8d87f_9(&$_smarty)
{

?>
</div>
<?php

}



?>
