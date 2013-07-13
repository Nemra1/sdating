<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:00
         compiled from db:gold2:home_page_code */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/member_home/%%9B/9B6/9B6ADCA5%%db%3Agold2%3Ahome_page_code.inc'] = '7ee5febdaa3ca987882777cb3dbafa3b';

?><?php
function _smarty_tplfunc_7ee5febdaa3ca987882777cb3dbafa3b_0(&$_smarty)
{
global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2510/101/10196301%25%25interface.style.css?51e18484af787');

	 $_smarty_tpl_vars = $_smarty->_tpl_vars;
$_smarty->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/header.tpl', 'smarty_include_vars' => array()));
$_smarty->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}

}


function _smarty_tplfunc_7ee5febdaa3ca987882777cb3dbafa3b_1(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/memberhome/%25%2589/891/891F069E%25%25memberhome.style.css?51e18484b0b6c');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="memberhome">
<?php

}


function _smarty_tplfunc_7ee5febdaa3ca987882777cb3dbafa3b_2(&$_smarty)
{

$component = SK_Component('MemberHomeLinks');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_7ee5febdaa3ca987882777cb3dbafa3b_3(&$_smarty)
{

$component = SK_Component('SiteNewsfeed');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_7ee5febdaa3ca987882777cb3dbafa3b_4(&$_smarty)
{

$component = SK_Component('ProfileGiftList');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_7ee5febdaa3ca987882777cb3dbafa3b_5(&$_smarty)
{

$component = SK_Component('SavedLists');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_7ee5febdaa3ca987882777cb3dbafa3b_6(&$_smarty)
{

$component = SK_Component('InviteFriends');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_7ee5febdaa3ca987882777cb3dbafa3b_7(&$_smarty)
{

$component = SK_Component('OnlineUsersMap');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_7ee5febdaa3ca987882777cb3dbafa3b_8(&$_smarty)
{

$component = SK_Component('ImportantTips');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_7ee5febdaa3ca987882777cb3dbafa3b_9(&$_smarty)
{

$component = SK_Component('ProfileStatus');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_7ee5febdaa3ca987882777cb3dbafa3b_10(&$_smarty)
{

$component = SK_Component('Shoutbox');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_7ee5febdaa3ca987882777cb3dbafa3b_11(&$_smarty)
{

$component = SK_Component('IndexNews');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_7ee5febdaa3ca987882777cb3dbafa3b_12(&$_smarty)
{

$component = SK_Component('QuickSearch');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_7ee5febdaa3ca987882777cb3dbafa3b_13(&$_smarty)
{

$component = SK_Component('IndexCommentsOverview');

echo $_smarty->renderComponent($component);

}


function _smarty_tplfunc_7ee5febdaa3ca987882777cb3dbafa3b_14(&$_smarty)
{

?>
</div>
<?php

}



?>
