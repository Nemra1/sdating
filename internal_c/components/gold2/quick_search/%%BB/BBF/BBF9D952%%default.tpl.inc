<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/quick_search/default.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/quick_search/%%BB/BBF/BBF9D952%%default.tpl.inc'] = '81b95c8381b201e0c8222d4502a4187a';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/quick_search/default.tpl', 4, false),)), $this); ?>
<?php
function _smarty_tplfunc_81b95c8381b201e0c8222d4502a4187a_0(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/quick_search/%25%25B8/B87/B87E2585%25%25quick_search.style.css?51e1848596d67');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="quick_search">
<?php

}


function _smarty_tplfunc_81b95c8381b201e0c8222d4502a4187a_1(&$_smarty)
{
include '/Applications/MAMP/dev.local/ska/internal_c/forms/quick_search.form.php';
SK_Layout::current_component()->handleForm($form);
SK_Layout::frontend_handler()->registerForm($form);
echo $form->renderStart();
$_smarty->assign('form', $form);

}


function _smarty_tplfunc_81b95c8381b201e0c8222d4502a4187a_2(&$_smarty)
{

echo $form->renderField(array('name' => 'sex','type' => 'radio','labelsection' => "profile_fields.value",'class' => 'input_group'));

}


function _smarty_tplfunc_81b95c8381b201e0c8222d4502a4187a_3(&$_smarty)
{

echo $form->renderField(array('name' => 'match_sex','labelsection' => "profile_fields.value",'class' => 'input_group'));

}


function _smarty_tplfunc_81b95c8381b201e0c8222d4502a4187a_4(&$_smarty)
{

echo $form->renderField(array('name' => 'birthdate'));

}


function _smarty_tplfunc_81b95c8381b201e0c8222d4502a4187a_5(&$_smarty)
{

echo $form->renderField(array('name' => 'location'));

}


function _smarty_tplfunc_81b95c8381b201e0c8222d4502a4187a_6(&$_smarty)
{

echo $form->renderField(array('name' => 'search_online_only','label' => SK_Language::text("profile_fields.label_search.".($_smarty->_tpl_vars['fields']['search_online_only']))));

}


function _smarty_tplfunc_81b95c8381b201e0c8222d4502a4187a_7(&$_smarty)
{

echo $form->renderField(array('name' => 'search_with_photo_only','label' => SK_Language::text("profile_fields.label_search.".($_smarty->_tpl_vars['fields']['search_with_photo_only']))));

}


function _smarty_tplfunc_81b95c8381b201e0c8222d4502a4187a_8(&$_smarty)
{

echo $form->renderButton(array('action' => 'search'));

}


function _smarty_tplfunc_81b95c8381b201e0c8222d4502a4187a_9(&$_smarty)
{
unset($_smarty->_tpl_vars['form'], $form);
echo '</form>';
}


function _smarty_tplfunc_81b95c8381b201e0c8222d4502a4187a_10(&$_smarty)
{

?>
</div>
<?php

}



?>
