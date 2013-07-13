<?php /* Smarty version 2.6.27, created on 2013-07-13 10:41:38
         compiled from themes/gold2/canvas/centered/header.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/sign_in/%%96/96A/96ABCE67%%header.tpl.inc'] = '02a44c453fe3fa49a1da1affe986406a';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ads', 'themes/gold2/canvas/centered/header.tpl', 5, false),)), $this); ?>
<?php
function _smarty_tplfunc_02a44c453fe3fa49a1da1affe986406a_0(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2556/56D/56DD15C1%25%25style.css.css?51e17532886c2');

}


function _smarty_tplfunc_02a44c453fe3fa49a1da1affe986406a_1(&$_smarty)
{

$component = SK_Component('PageHeader');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_02a44c453fe3fa49a1da1affe986406a_2(&$_smarty)
{

$component = SK_Component('NavigationSubMenu', array('level' => 1));

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_02a44c453fe3fa49a1da1affe986406a_3(&$_smarty)
{

$component = SK_Component('BreadCrumb');

echo $_smarty->renderComponent($component);

}



?>
