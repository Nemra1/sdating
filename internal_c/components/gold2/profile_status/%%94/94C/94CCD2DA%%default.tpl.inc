<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/profile_status/default.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/profile_status/%%94/94C/94CCD2DA%%default.tpl.inc'] = '5e15508c0f41cc7848841cd5325fed4c';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/profile_status/default.tpl', 5, false),array('block', 'block_cap', 'components/profile_status/default.tpl', 6, false),array('function', 'document_url', 'components/profile_status/default.tpl', 21, false),array('function', 'text_formatter', 'components/profile_status/default.tpl', 52, false),)), $this); ?>
<?php
function _smarty_tplfunc_5e15508c0f41cc7848841cd5325fed4c_0(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/profile_status/%25%2531/31B/31B7F303%25%25profile_status.style.css?51e1848570fa0');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="profile_status">
<?php

}


function _smarty_tplfunc_5e15508c0f41cc7848841cd5325fed4c_1(&$_smarty)
{
echo 'id="'.SK_Layout::current_component()->getTagAutoId('profile_status_toggle_cont').'"';
}


function _smarty_tplfunc_5e15508c0f41cc7848841cd5325fed4c_2(&$_smarty)
{
echo 'id="'.SK_Layout::current_component()->getTagAutoId('status_value').'"';
}


function _smarty_tplfunc_5e15508c0f41cc7848841cd5325fed4c_3(&$_smarty)
{
echo 'id="'.SK_Layout::current_component()->getTagAutoId('user_status_curr_value').'"';
}


function _smarty_tplfunc_5e15508c0f41cc7848841cd5325fed4c_4(&$_smarty)
{
include '/Applications/MAMP/dev.local/ska/internal_c/forms/user_status.form.php';
SK_Layout::current_component()->handleForm($form);
SK_Layout::frontend_handler()->registerForm($form);
echo $form->renderStart();
$_smarty->assign('form', $form);

}


function _smarty_tplfunc_5e15508c0f41cc7848841cd5325fed4c_5(&$_smarty)
{

echo $form->renderField(array('name' => 'status'));

}


function _smarty_tplfunc_5e15508c0f41cc7848841cd5325fed4c_6(&$_smarty)
{

echo $form->renderButton(array('action' => 'update'));

}


function _smarty_tplfunc_5e15508c0f41cc7848841cd5325fed4c_7(&$_smarty)
{
unset($_smarty->_tpl_vars['form'], $form);
echo '</form>';
}


function _smarty_tplfunc_5e15508c0f41cc7848841cd5325fed4c_8(&$_smarty)
{

?>
</div>
<?php

}



?>
