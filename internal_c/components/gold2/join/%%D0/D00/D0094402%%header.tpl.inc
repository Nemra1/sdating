<?php /* Smarty version 2.6.27, created on 2013-07-13 10:40:54
         compiled from themes/gold2/canvas/default/header.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/join/%%D0/D00/D0094402%%header.tpl.inc'] = '1b9557a10038c36ca8d7af735968a0ee';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ads', 'themes/gold2/canvas/default/header.tpl', 4, false),)), $this); ?>
<?php
function _smarty_tplfunc_1b9557a10038c36ca8d7af735968a0ee_0(&$_smarty)
{

$component = SK_Component('PageHeader');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_1b9557a10038c36ca8d7af735968a0ee_1(&$_smarty)
{

$component = SK_Component('NavigationSubMenu', array('level' => 1));

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_1b9557a10038c36ca8d7af735968a0ee_2(&$_smarty)
{

$component = SK_Component('PageSidebar');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_1b9557a10038c36ca8d7af735968a0ee_3(&$_smarty)
{

$component = SK_Component('GroupBriefInfo');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_1b9557a10038c36ca8d7af735968a0ee_4(&$_smarty)
{

$component = SK_Component('BreadCrumb');

echo $_smarty->renderComponent($component);

}



?>
