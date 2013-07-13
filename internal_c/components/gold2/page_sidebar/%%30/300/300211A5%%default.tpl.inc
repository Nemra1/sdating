<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:51
         compiled from components/page_sidebar/default.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/page_sidebar/%%30/300/300211A5%%default.tpl.inc'] = '954e2effa275f77fa39714c3fdc15212';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ads', 'components/page_sidebar/default.tpl', 15, false),array('block', 'block', 'components/page_sidebar/default.tpl', 19, false),)), $this); ?>
<?php
function _smarty_tplfunc_954e2effa275f77fa39714c3fdc15212_0(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/sidebar/%25%2586/86A/86AB2AE8%25%25sidebar.style.css?51e174c7e465d');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="sidebar">
<?php

}


function _smarty_tplfunc_954e2effa275f77fa39714c3fdc15212_1(&$_smarty)
{

$component = SK_Component('SignUpLink');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_954e2effa275f77fa39714c3fdc15212_2(&$_smarty)
{

$component = SK_Component('SignIn');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_954e2effa275f77fa39714c3fdc15212_3(&$_smarty)
{

$component = SK_Component('MemberConsole');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_954e2effa275f77fa39714c3fdc15212_4(&$_smarty)
{

$component = SK_Component('ChuppoUseron');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_954e2effa275f77fa39714c3fdc15212_5(&$_smarty)
{

$component = SK_Component('HotList');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_954e2effa275f77fa39714c3fdc15212_6(&$_smarty)
{

?>
</div>
<?php

}



?>
