<?php /* Smarty version 2.6.27, created on 2013-07-13 11:53:28
         compiled from components/group_list/default.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/group_list/%%35/354/354D2B97%%default.tpl.inc'] = 'c7ecd8827f0eb8502c6ba7436e517e55';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'document_url', 'components/group_list/default.tpl', 5, false),array('function', 'paging', 'components/group_list/default.tpl', 42, false),array('block', 'block', 'components/group_list/default.tpl', 14, false),array('modifier', 'out_format', 'components/group_list/default.tpl', 14, false),array('modifier', 'truncate', 'components/group_list/default.tpl', 14, false),array('modifier', 'censor', 'components/group_list/default.tpl', 14, false),array('modifier', 'smile', 'components/group_list/default.tpl', 21, false),array('modifier', 'spec_date', 'components/group_list/default.tpl', 29, false),)), $this); ?>
<?php
function _smarty_tplfunc_c7ecd8827f0eb8502c6ba7436e517e55_0(&$_smarty)
{
global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2510/101/10196301%25%25interface.style.css?51e18608cf911');

	 $_smarty_tpl_vars = $_smarty->_tpl_vars;
$_smarty->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/header.tpl', 'smarty_include_vars' => array()));
$_smarty->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}

}


function _smarty_tplfunc_c7ecd8827f0eb8502c6ba7436e517e55_1(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/group_list/%25%25CA/CA2/CA23D369%25%25group_list.style.css?51e18608d0b2b');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="group_list">
<?php

}


function _smarty_tplfunc_c7ecd8827f0eb8502c6ba7436e517e55_2(&$_smarty)
{

?>
</div>
<?php

}



?>
