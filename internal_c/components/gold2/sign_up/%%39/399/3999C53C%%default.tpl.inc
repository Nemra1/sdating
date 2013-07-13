<?php /* Smarty version 2.6.27, created on 2013-07-13 10:41:38
         compiled from components/sign_up/default.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/sign_up/%%39/399/3999C53C%%default.tpl.inc'] = 'aef4972cb31c053c8df6c9e937e88874';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/sign_up/default.tpl', 4, false),)), $this); ?>
<?php
function _smarty_tplfunc_aef4972cb31c053c8df6c9e937e88874_0(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/sign_up_cont/%25%2576/768/76849066%25%25sign_up.style.css?51e17532b9a51');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="sign_up_cont">
<?php

}


function _smarty_tplfunc_aef4972cb31c053c8df6c9e937e88874_1(&$_smarty)
{
include '/Applications/MAMP/dev.local/ska/internal_c/forms/sign_up.form.php';
SK_Layout::current_component()->handleForm($form);
SK_Layout::frontend_handler()->registerForm($form);
echo $form->renderStart();
$_smarty->assign('form', $form);

}


function _smarty_tplfunc_aef4972cb31c053c8df6c9e937e88874_2(&$_smarty)
{

echo $form->renderField(array('name' => $_smarty->_tpl_vars['field']['name'],'label' => SK_Language::text("profile_fields.label_join.".($_smarty->_tpl_vars['field']['id']))));

}


function _smarty_tplfunc_aef4972cb31c053c8df6c9e937e88874_3(&$_smarty)
{

echo $form->renderField(array('name' => $_smarty->_tpl_vars['field']['name']));

}


function _smarty_tplfunc_aef4972cb31c053c8df6c9e937e88874_4(&$_smarty)
{

echo $form->renderField(array('name' => "re_".($_smarty->_tpl_vars['field']['name'])));

}


function _smarty_tplfunc_aef4972cb31c053c8df6c9e937e88874_5(&$_smarty)
{

echo $form->renderButton(array('action' => $_smarty->_tpl_vars['form']->active_action,'label' => SK_Language::text("forms._actions.join")));

}


function _smarty_tplfunc_aef4972cb31c053c8df6c9e937e88874_6(&$_smarty)
{
unset($_smarty->_tpl_vars['form'], $form);
echo '</form>';
}


function _smarty_tplfunc_aef4972cb31c053c8df6c9e937e88874_7(&$_smarty)
{

?>
</div>
<?php

}



?>
