<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/invite_friends/default.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/invite_friends/%%18/18A/18AB6477%%default.tpl.inc'] = '8c4dc93e9a99c5ab7ef4f411c6eae679';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_cap', 'components/invite_friends/default.tpl', 38, false),array('block', 'block', 'components/invite_friends/default.tpl', 39, false),)), $this); ?>
<?php
function _smarty_tplfunc_8c4dc93e9a99c5ab7ef4f411c6eae679_0(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/invite_friends_cont/%25%25F6/F6B/F6B47B0F%25%25invite_friends.style.css?51e1848558d1b');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="invite_friends_cont">
<?php

}


function _smarty_tplfunc_8c4dc93e9a99c5ab7ef4f411c6eae679_1(&$_smarty)
{
echo 'id="'.SK_Layout::current_component()->getTagAutoId('box_title').'"';
}


function _smarty_tplfunc_8c4dc93e9a99c5ab7ef4f411c6eae679_2(&$_smarty)
{
echo 'id="'.SK_Layout::current_component()->getTagAutoId('box_content').'"';
}


function _smarty_tplfunc_8c4dc93e9a99c5ab7ef4f411c6eae679_3(&$_smarty)
{

$component = SK_Component('ContactImporterButtons');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_8c4dc93e9a99c5ab7ef4f411c6eae679_4(&$_smarty)
{
include '/Applications/MAMP/dev.local/ska/internal_c/forms/invite_friends.form.php';
SK_Layout::current_component()->handleForm($form);
SK_Layout::frontend_handler()->registerForm($form);
echo $form->renderStart();
$_smarty->assign('form', $form);

}


function _smarty_tplfunc_8c4dc93e9a99c5ab7ef4f411c6eae679_5(&$_smarty)
{
echo 'id="'.SK_Layout::current_component()->getTagAutoId('open_box_btn').'"';
}


function _smarty_tplfunc_8c4dc93e9a99c5ab7ef4f411c6eae679_6(&$_smarty)
{

echo $form->renderField(array('name' => 'email_addr'));

}


function _smarty_tplfunc_8c4dc93e9a99c5ab7ef4f411c6eae679_7(&$_smarty)
{

echo $form->renderField(array('name' => 'message'));

}


function _smarty_tplfunc_8c4dc93e9a99c5ab7ef4f411c6eae679_8(&$_smarty)
{

echo $form->renderButton(array('action' => 'process'));

}


function _smarty_tplfunc_8c4dc93e9a99c5ab7ef4f411c6eae679_9(&$_smarty)
{
unset($_smarty->_tpl_vars['form'], $form);
echo '</form>';
}


function _smarty_tplfunc_8c4dc93e9a99c5ab7ef4f411c6eae679_10(&$_smarty)
{

?>
</div>
<?php

}



?>
