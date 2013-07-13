<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:50
         compiled from components/quick_search/index.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/quick_search/%%C7/C74/C740E1F9%%index.tpl.inc'] = '36876d881212e22e85d52171c6595af7';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/quick_search/index.tpl', 4, false),)), $this); ?>
<?php
function _smarty_tplfunc_36876d881212e22e85d52171c6595af7_0(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/quick_search/%25%25B8/B87/B87E2585%25%25quick_search.style.css?51e174c6c8bf6');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="quick_search">
<?php

}


function _smarty_tplfunc_36876d881212e22e85d52171c6595af7_1(&$_smarty)
{
include '/Applications/MAMP/dev.local/ska/internal_c/forms/quick_search.form.php';
SK_Layout::current_component()->handleForm($form);
SK_Layout::frontend_handler()->registerForm($form);
echo $form->renderStart();
$_smarty->assign('form', $form);

}


function _smarty_tplfunc_36876d881212e22e85d52171c6595af7_2(&$_smarty)
{

echo $form->renderField(array('name' => 'sex','type' => 'radio','labelsection' => "profile_fields.value",'class' => 'input_group clearfix'));

}


function _smarty_tplfunc_36876d881212e22e85d52171c6595af7_3(&$_smarty)
{

echo $form->renderField(array('name' => 'match_sex','labelsection' => "profile_fields.value",'class' => 'input_group clearfix'));

}


function _smarty_tplfunc_36876d881212e22e85d52171c6595af7_4(&$_smarty)
{

echo $form->renderField(array('name' => 'birthdate'));

}


function _smarty_tplfunc_36876d881212e22e85d52171c6595af7_5(&$_smarty)
{

echo $form->renderField(array('name' => 'location'));

}


function _smarty_tplfunc_36876d881212e22e85d52171c6595af7_6(&$_smarty)
{

echo $form->renderField(array('name' => 'search_online_only','label' => SK_Language::text("profile_fields.label_search.".($_smarty->_tpl_vars['fields']['search_online_only']))));

}


function _smarty_tplfunc_36876d881212e22e85d52171c6595af7_7(&$_smarty)
{

echo $form->renderField(array('name' => 'search_with_photo_only','label' => SK_Language::text("profile_fields.label_search.".($_smarty->_tpl_vars['fields']['search_with_photo_only']))));

}


function _smarty_tplfunc_36876d881212e22e85d52171c6595af7_8(&$_smarty)
{

echo $form->renderButton(array('action' => 'search','label' => 'Quick Search'));

}


function _smarty_tplfunc_36876d881212e22e85d52171c6595af7_9(&$_smarty)
{
unset($_smarty->_tpl_vars['form'], $form);
echo '</form>';
}


function _smarty_tplfunc_36876d881212e22e85d52171c6595af7_10(&$_smarty)
{

?>
</div>
<?php

}



?>
