<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/profile_gift_list/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/profile_gift_list/default.tpl', 6, false),array('block', 'block_cap', 'components/profile_gift_list/default.tpl', 13, false),array('function', 'document_url', 'components/profile_gift_list/default.tpl', 8, false),array('modifier', 'censor', 'components/profile_gift_list/default.tpl', 13, false),array('modifier', 'truncate', 'components/profile_gift_list/default.tpl', 28, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/profile_gift_list/%%85/85D/85D50857%%default.tpl.inc'] = '697a427babdc5eb417ec35d2babdc4d3'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:697a427babdc5eb417ec35d2babdc4d3#0}'; endif;global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	$this->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2510/101/10196301%25%25interface.style.css?51e1848546dcf');

	 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}
if ($this->caching && !$this->_cache_including): echo '{/nocache:697a427babdc5eb417ec35d2babdc4d3#0}'; endif; ?>

<?php if ($this->caching && !$this->_cache_including): echo '{nocache:697a427babdc5eb417ec35d2babdc4d3#1}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/profile_gift_list/%25%253A/3A6/3A65E8F4%25%25profile_gift_list.style.css?51e1848548258');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="profile_gift_list">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:697a427babdc5eb417ec35d2babdc4d3#1}'; endif; ?>

<?php $this->_tag_stack[] = array('block', array()); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php ob_start(); ?>
        <?php if ($this->_tpl_vars['gifts']): ?><a href="<?php echo smarty_function_document_url(array('doc_key' => 'gifts','profile_id' => $this->_tpl_vars['profile_id']), $this);?>
"><?php echo SK_Language::text("gifts.view_all"); ?></a><?php else: ?>&nbsp;<?php endif; ?>
    <?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('toolbar', ob_get_contents());ob_end_clean(); ?>

    <?php if ($this->_tpl_vars['owner_mode']): ?>
        <?php ob_start(); ?><?php echo SK_Language::text("gifts.your_gifts", array('count' => $this->_tpl_vars['gift_count'])); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('title', ob_get_contents());ob_end_clean(); ?>
        <?php $this->_tag_stack[] = array('block_cap', array('title' => ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('censor', true, $_tmp, 'event', true) : smarty_modifier_censor($_tmp, 'event', true)),'toolbar' => $this->_tpl_vars['toolbar'])); $_block_repeat=true;$this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><a class="delete_cmp" href="javascript://"></a><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php else: ?>
        <?php ob_start(); ?><?php echo SK_Language::text("gifts.profile_gifts", array('username' => $this->_tpl_vars['username'],'count' => $this->_tpl_vars['gift_count'])); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('title', ob_get_contents());ob_end_clean(); ?>
        <?php $this->_tag_stack[] = array('block_cap', array('title' => ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('censor', true, $_tmp, 'event', true) : smarty_modifier_censor($_tmp, 'event', true)),'toolbar' => $this->_tpl_vars['toolbar'])); $_block_repeat=true;$this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php endif; ?>
    
    <?php if (! $this->_tpl_vars['gifts']): ?>
        <div class="no_content"><?php echo SK_Language::text("gifts.no_gifts"); ?></div>
    <?php else: ?>
    
    <div class="gift_list list_cont">
        <ul>
            <?php $_from = $this->_tpl_vars['gifts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gift']):
?>
            <li class="item" title="<?php echo SK_Language::text("gifts.gift_by", array('username' => $this->_tpl_vars['gift']['username'])); ?>">
                <a href="<?php echo smarty_function_document_url(array('doc_key' => 'gift','gid' => $this->_tpl_vars['gift']['gift_id']), $this);?>
"><img src="<?php echo $this->_tpl_vars['gift']['picture']; ?>
" width="80" /></a><br />
                <a href="<?php echo smarty_function_document_url(array('doc_key' => 'gift','gid' => $this->_tpl_vars['gift']['gift_id']), $this);?>
"><span class="small"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['gift']['sign_text'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 9, "...") : smarty_modifier_truncate($_tmp, 9, "...")))) ? $this->_run_mod_handler('censor', true, $_tmp, 'event', true) : smarty_modifier_censor($_tmp, 'event', true)); ?>
</span></a>
            </li>
            <?php endforeach; endif; unset($_from); ?>
            <li class="clr"></li>
        </ul>
    </div>
    
    <?php endif; ?>
    
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php if ($this->caching && !$this->_cache_including): echo '{nocache:697a427babdc5eb417ec35d2babdc4d3#2}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:697a427babdc5eb417ec35d2babdc4d3#2}'; endif; ?>

<?php global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}
 ?>