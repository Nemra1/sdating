<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:50
         compiled from components/page_header/default.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/page_header/%%88/885/88536C25%%default.tpl.inc'] = '4389c65aa082d8bd6e7f8d7eb5910390';

?><?php
function _smarty_tplfunc_4389c65aa082d8bd6e7f8d7eb5910390_0(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/page_header/%25%2571/716/716D03CE%25%25page_header.style.css?51e174c6a10ea');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="page_header">
<?php

}


function _smarty_tplfunc_4389c65aa082d8bd6e7f8d7eb5910390_1(&$_smarty)
{

$component = SK_Component('NavigationInventoryLine');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_4389c65aa082d8bd6e7f8d7eb5910390_2(&$_smarty)
{

$component = SK_Component('SelectLanguage');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_4389c65aa082d8bd6e7f8d7eb5910390_3(&$_smarty)
{

$component = SK_Component('FBCButton');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_4389c65aa082d8bd6e7f8d7eb5910390_4(&$_smarty)
{

$component = SK_Component('NavigationMenuMain');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_4389c65aa082d8bd6e7f8d7eb5910390_5(&$_smarty)
{

?>
</div>
<?php

}



?>
