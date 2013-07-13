<?php /* Smarty version 2.6.27, created on 2013-07-13 11:53:28
         compiled from components/group_list/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'document_url', 'components/group_list/default.tpl', 5, false),array('function', 'paging', 'components/group_list/default.tpl', 42, false),array('block', 'block', 'components/group_list/default.tpl', 14, false),array('modifier', 'out_format', 'components/group_list/default.tpl', 14, false),array('modifier', 'truncate', 'components/group_list/default.tpl', 14, false),array('modifier', 'censor', 'components/group_list/default.tpl', 14, false),array('modifier', 'smile', 'components/group_list/default.tpl', 21, false),array('modifier', 'spec_date', 'components/group_list/default.tpl', 29, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/group_list/%%35/354/354D2B97%%default.tpl.inc'] = 'c7ecd8827f0eb8502c6ba7436e517e55'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:c7ecd8827f0eb8502c6ba7436e517e55#0}'; endif;global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	$this->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2510/101/10196301%25%25interface.style.css?51e18608cf911');

	 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}
if ($this->caching && !$this->_cache_including): echo '{/nocache:c7ecd8827f0eb8502c6ba7436e517e55#0}'; endif; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:c7ecd8827f0eb8502c6ba7436e517e55#1}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/group_list/%25%25CA/CA2/CA23D369%25%25group_list.style.css?51e18608d0b2b');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="group_list">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:c7ecd8827f0eb8502c6ba7436e517e55#1}'; endif; ?>
	<div class="right clearfix">
		<input type="button" value="<?php echo SK_Language::text("components.group_list.create_new"); ?>" onclick="window.location='<?php echo smarty_function_document_url(array('doc_key' => 'group_add'), $this);?>
'" />
	</div>
    <div class="clearfix smallmargin"></div>

	<?php if ($this->_tpl_vars['no_groups']): ?>
		<div class="no_content"><?php echo SK_Language::text("components.group_list.no_groups"); ?></div>
	<?php else: ?>
		<?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['gr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gr']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group']):
        $this->_foreach['gr']['iteration']++;
?>
			<div class="group_cont<?php if ((1 & $this->_foreach['gr']['iteration'])): ?> group_odd<?php endif; ?>">
			<?php $this->_tag_stack[] = array('block', array('title' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['group']['title'])) ? $this->_run_mod_handler('out_format', true, $_tmp) : smarty_modifier_out_format($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)))) ? $this->_run_mod_handler('censor', true, $_tmp, 'group', true) : smarty_modifier_censor($_tmp, 'group', true)))); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<div class="group_thumb">
					<a href="<?php echo smarty_function_document_url(array('doc_key' => 'group','group_id' => $this->_tpl_vars['group']['group_id']), $this);?>
">
						<img src="<?php echo $this->_tpl_vars['group']['thumb']; ?>
" width="90" />
					</a>
				</div>
				<div class="group_info">
					<div class="group_descr"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['group']['description'])) ? $this->_run_mod_handler('smile', true, $_tmp) : smarty_modifier_smile($_tmp)))) ? $this->_run_mod_handler('out_format', true, $_tmp) : smarty_modifier_out_format($_tmp)))) ? $this->_run_mod_handler('censor', true, $_tmp, 'group') : smarty_modifier_censor($_tmp, 'group')); ?>
</div>
					<div class="group_stat small">
						<?php echo SK_Language::text("label.by"); ?> 
						<?php if ($this->_tpl_vars['group']['profile_id']): ?>
							<a href="<?php echo smarty_function_document_url(array('doc_key' => 'profile','profile_id' => $this->_tpl_vars['group']['profile_id']), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['group']['username'])) ? $this->_run_mod_handler('censor', true, $_tmp, 'group') : smarty_modifier_censor($_tmp, 'group')); ?>
</a>
						<?php else: ?>
							<?php echo SK_Language::text("label.deleted_member"); ?>
						<?php endif; ?>	
							, <?php echo ((is_array($_tmp=$this->_tpl_vars['group']['creation_stamp'])) ? $this->_run_mod_handler('spec_date', true, $_tmp) : smarty_modifier_spec_date($_tmp)); ?>

					</div>
					<div class="group_stat small left">
						<?php echo SK_Language::text("components.group_list.members"); ?>: <span class="highlight"><?php if ($this->_tpl_vars['group']['members_count']): ?><?php echo $this->_tpl_vars['group']['members_count']; ?>
<?php else: ?>0<?php endif; ?></span> |
						<a href="<?php echo smarty_function_document_url(array('doc_key' => 'group','group_id' => $this->_tpl_vars['group']['group_id']), $this);?>
"><?php echo SK_Language::text("components.group_list.browse"); ?></a>
					</div>
				</div>
				<div class="clr"></div>
	        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	        <div class="clr"></div>
	        </div>
        <?php endforeach; endif; unset($_from); ?>
        <br clear="all" /><br />
        <?php echo smarty_function_paging(array('total' => $this->_tpl_vars['paging']['total'],'on_page' => $this->_tpl_vars['paging']['on_page'],'pages' => $this->_tpl_vars['paging']['pages']), $this);?>

    <?php endif; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:c7ecd8827f0eb8502c6ba7436e517e55#2}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:c7ecd8827f0eb8502c6ba7436e517e55#2}'; endif; ?>
<?php global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}
 ?>