<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:00
         compiled from components/member_console/default.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/member_console/%%DC/DCC/DCC77469%%default.tpl.inc'] = '9ecc467ca7546d7027ebf99181f2bc54';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/member_console/default.tpl', 5, false),array('modifier', 'truncate', 'components/member_console/default.tpl', 5, false),array('function', 'profile_thumb', 'components/member_console/default.tpl', 8, false),array('function', 'membership_icon', 'components/member_console/default.tpl', 16, false),array('function', 'document_url', 'components/member_console/default.tpl', 18, false),)), $this); ?>
<?php
function _smarty_tplfunc_9ecc467ca7546d7027ebf99181f2bc54_0(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/member_console/%25%2571/712/7129C098%25%25member_console.style.css?51e18484e134d');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="member_console">
<?php

}


function _smarty_tplfunc_9ecc467ca7546d7027ebf99181f2bc54_1(&$_smarty)
{

$component = SK_Component('IMListener');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_9ecc467ca7546d7027ebf99181f2bc54_2(&$_smarty)
{

$component = SK_Component('ProfileNotices');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_9ecc467ca7546d7027ebf99181f2bc54_3(&$_smarty)
{

$component = SK_Component('EventSpeedDatingNotifier');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_9ecc467ca7546d7027ebf99181f2bc54_4(&$_smarty)
{

?>
</div>
<?php

}



?>
