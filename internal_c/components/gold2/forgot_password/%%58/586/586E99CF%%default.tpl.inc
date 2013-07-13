<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:50
         compiled from components/forgot_password/default.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/forgot_password/%%58/586/586E99CF%%default.tpl.inc'] = '05cdf59a8e89d12fbae34a9405254676';

?><?php
function _smarty_tplfunc_05cdf59a8e89d12fbae34a9405254676_0(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/forgot_password/%25%25B9/B97/B97EE44A%25%25forgot_password.style.css?51e174c6906d8');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="forgot_password">
<?php

}


function _smarty_tplfunc_05cdf59a8e89d12fbae34a9405254676_1(&$_smarty)
{
echo 'id="'.SK_Layout::current_component()->getTagAutoId('btn').'"';
}


function _smarty_tplfunc_05cdf59a8e89d12fbae34a9405254676_2(&$_smarty)
{
echo 'id="'.SK_Layout::current_component()->getTagAutoId('thick_title').'"';
}


function _smarty_tplfunc_05cdf59a8e89d12fbae34a9405254676_3(&$_smarty)
{
echo 'id="'.SK_Layout::current_component()->getTagAutoId('thick_content').'"';
}


function _smarty_tplfunc_05cdf59a8e89d12fbae34a9405254676_4(&$_smarty)
{
include '/Applications/MAMP/dev.local/ska/internal_c/forms/forgot_password.form.php';
SK_Layout::current_component()->handleForm($form);
SK_Layout::frontend_handler()->registerForm($form);
echo $form->renderStart();
$_smarty->assign('form', $form);

}


function _smarty_tplfunc_05cdf59a8e89d12fbae34a9405254676_5(&$_smarty)
{

echo $form->renderField(array('name' => 'email'));

}


function _smarty_tplfunc_05cdf59a8e89d12fbae34a9405254676_6(&$_smarty)
{

echo $form->renderButton(array('action' => 'send'));

}


function _smarty_tplfunc_05cdf59a8e89d12fbae34a9405254676_7(&$_smarty)
{
unset($_smarty->_tpl_vars['form'], $form);
echo '</form>';
}


function _smarty_tplfunc_05cdf59a8e89d12fbae34a9405254676_8(&$_smarty)
{

?>
</div>
<?php

}



?>
