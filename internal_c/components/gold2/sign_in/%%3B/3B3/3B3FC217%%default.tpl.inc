<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:50
         compiled from components/sign_in/default.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/sign_in/%%3B/3B3/3B3FC217%%default.tpl.inc'] = 'b2543a4d259a1a4bb26e8509440c5239';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_cap', 'components/sign_in/default.tpl', 12, false),array('block', 'block', 'components/sign_in/default.tpl', 17, false),)), $this); ?>
<?php
function _smarty_tplfunc_b2543a4d259a1a4bb26e8509440c5239_0(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/sign_in/%25%2582/826/826539FD%25%25sign_in.style.css?51e174c6853f7');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="sign_in">
<?php

}


function _smarty_tplfunc_b2543a4d259a1a4bb26e8509440c5239_1(&$_smarty)
{

$component = SK_Component('ForgotPassword');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_b2543a4d259a1a4bb26e8509440c5239_2(&$_smarty)
{
include '/Applications/MAMP/dev.local/ska/internal_c/forms/sign_in.form.php';
SK_Layout::current_component()->handleForm($form);
SK_Layout::frontend_handler()->registerForm($form);
echo $form->renderStart();
$_smarty->assign('form', $form);

}


function _smarty_tplfunc_b2543a4d259a1a4bb26e8509440c5239_3(&$_smarty)
{

echo $form->renderField(array('name' => 'login'));

}


function _smarty_tplfunc_b2543a4d259a1a4bb26e8509440c5239_4(&$_smarty)
{

echo $form->renderField(array('name' => 'password'));

}


function _smarty_tplfunc_b2543a4d259a1a4bb26e8509440c5239_5(&$_smarty)
{

echo $form->renderField(array('name' => 'remember_me','label' => SK_Language::text("forms.sign_in.fields.remember_me.label")));

}


function _smarty_tplfunc_b2543a4d259a1a4bb26e8509440c5239_6(&$_smarty)
{

echo $form->renderButton(array('action' => 'process'));

}


function _smarty_tplfunc_b2543a4d259a1a4bb26e8509440c5239_7(&$_smarty)
{
unset($_smarty->_tpl_vars['form'], $form);
echo '</form>';
}


function _smarty_tplfunc_b2543a4d259a1a4bb26e8509440c5239_8(&$_smarty)
{

?>
</div>
<?php

}



?>
