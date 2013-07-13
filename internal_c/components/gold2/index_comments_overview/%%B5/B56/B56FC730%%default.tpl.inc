<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/index_comments_overview/default.tpl */

$this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/index_comments_overview/%%B5/B56/B56FC730%%default.tpl.inc'] = '01d5db039b86f589bcc4c06576a9ce70';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_cap', 'components/index_comments_overview/default.tpl', 9, false),array('block', 'block', 'components/index_comments_overview/default.tpl', 14, false),array('function', 'profile_thumb', 'components/index_comments_overview/default.tpl', 23, false),array('modifier', 'censor', 'components/index_comments_overview/default.tpl', 32, false),array('modifier', 'spec_date', 'components/index_comments_overview/default.tpl', 40, false),array('modifier', 'out_format', 'components/index_comments_overview/default.tpl', 47, false),array('modifier', 'smile', 'components/index_comments_overview/default.tpl', 47, false),)), $this); ?>
<?php
function _smarty_tplfunc_01d5db039b86f589bcc4c06576a9ce70_0(&$_smarty)
{
$_smarty->includeCSSFile('http://dev.local/ska/external_c/gold2/index_comments_overview/%25%25BC/BCD/BCDD90DC%25%25comment_list.style.css?51e18485a874f');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="index_comments_overview">
<?php

}


function _smarty_tplfunc_01d5db039b86f589bcc4c06576a9ce70_1(&$_smarty)
{
echo 'id="'.SK_Layout::current_component()->getTagAutoId('comment_list_cont').'"';
}


function _smarty_tplfunc_01d5db039b86f589bcc4c06576a9ce70_2(&$_smarty)
{
echo 'id="'.SK_Layout::current_component()->getTagAutoId(($_smarty->_tpl_vars['comment_item']['delete_link_id'])).'"';
}


function _smarty_tplfunc_01d5db039b86f589bcc4c06576a9ce70_3(&$_smarty)
{

?>
</div>
<?php

}



?>
