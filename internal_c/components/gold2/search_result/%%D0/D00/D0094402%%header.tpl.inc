<?php /* Smarty version 2.6.27, created on 2013-07-13 11:44:23
         compiled from themes/gold2/canvas/default/header.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/search_result/%%D0/D00/D0094402%%header.tpl.inc'] = 'ef83d592579a57c027ca68b2e6dcc3bf';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ads', 'themes/gold2/canvas/default/header.tpl', 4, false),)), $this); ?>
<?php
function _smarty_tplfunc_ef83d592579a57c027ca68b2e6dcc3bf_0(&$_smarty)
{

$component = SK_Component('PageHeader');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_ef83d592579a57c027ca68b2e6dcc3bf_1(&$_smarty)
{

$component = SK_Component('NavigationSubMenu', array('level' => 1));

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_ef83d592579a57c027ca68b2e6dcc3bf_2(&$_smarty)
{

$component = SK_Component('PageSidebar');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_ef83d592579a57c027ca68b2e6dcc3bf_3(&$_smarty)
{

$component = SK_Component('GroupBriefInfo');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_ef83d592579a57c027ca68b2e6dcc3bf_4(&$_smarty)
{

$component = SK_Component('BreadCrumb');

echo $_smarty->renderComponent($component);

}



?>
