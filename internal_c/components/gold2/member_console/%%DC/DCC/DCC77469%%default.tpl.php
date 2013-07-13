<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:00
         compiled from components/member_console/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/member_console/default.tpl', 5, false),array('modifier', 'truncate', 'components/member_console/default.tpl', 5, false),array('function', 'profile_thumb', 'components/member_console/default.tpl', 8, false),array('function', 'membership_icon', 'components/member_console/default.tpl', 16, false),array('function', 'document_url', 'components/member_console/default.tpl', 18, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/member_console/%%DC/DCC/DCC77469%%default.tpl.inc'] = '9ecc467ca7546d7027ebf99181f2bc54'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:9ecc467ca7546d7027ebf99181f2bc54#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/member_console/%25%2571/712/7129C098%25%25member_console.style.css?51e18484e134d');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="member_console">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:9ecc467ca7546d7027ebf99181f2bc54#0}'; endif; ?>
	
	<?php $this->_tag_stack[] = array('block', array('title' => ((is_array($_tmp=$this->_tpl_vars['profile']['username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 18, "...", true) : smarty_modifier_truncate($_tmp, 18, "...", true)))); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<div class="center">
			<div class="thumb_container">
				<?php echo smarty_function_profile_thumb(array('profile_id' => $this->_tpl_vars['profile']['id'],'href' => $this->_tpl_vars['profile']['photo_upload_url'],'size' => 99,'sexLine' => false), $this);?>

			<div style="display:none"><input id="delete_t_text" value="<?php echo SK_Language::text("components.member_console.delete_thumb_msg"); ?>" /></div>
			<?php if ($this->_tpl_vars['profile']['hasThumb']): ?>
				<a href="javascript://" class="delete_thumb"><?php echo SK_Language::text("components.member_console.delete_thumb"); ?></a>
                        <?php endif; ?>
			</div>
			<div class="clr_div"></div>
			<?php if ($this->_tpl_vars['membership']): ?>
				<div class="membership_container"><?php echo smarty_function_membership_icon(array('profile_id' => $this->_tpl_vars['profile']['id']), $this);?>
 <?php echo $this->_tpl_vars['membership']; ?>
</div>
			<?php endif; ?>
			<div class="float_right"><a class="sign_out" href="<?php echo smarty_function_document_url(array('doc_key' => 'sign_out'), $this);?>
"><?php echo SK_Language::text("components.member_console.sign_out"); ?></a></div>
			<div class="clr_div"></div>
		</div>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:9ecc467ca7546d7027ebf99181f2bc54#1}'; endif;
$component = SK_Component('IMListener');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:9ecc467ca7546d7027ebf99181f2bc54#1}'; endif; ?>
	
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:9ecc467ca7546d7027ebf99181f2bc54#2}'; endif;
$component = SK_Component('ProfileNotices');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:9ecc467ca7546d7027ebf99181f2bc54#2}'; endif; ?>
	
	<?php $this->_tag_stack[] = array('block', array('title' => SK_Language::text("components.member_console.my_profile"),'expandable' => true,'expanded' => $this->_tpl_vars['console_menu_opened'],'id' => 'console_menu','class' => 'my_profile_menu')); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<div class="my_profile_menu_cont">
			<?php  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/plugins/menu-vertical.tpl', 'smarty_include_vars' => array('type' => 'vertical','items' => $this->_tpl_vars['console_menu'],'tpl_self' => 'themes/gold2/plugins/menu-vertical.tpl')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  ?>
		</div>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	
	<?php $this->_tag_stack[] = array('block', array('title' => SK_Language::text("components.member_console.add_new"),'class' => 'add_new_items')); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<div class="new_items super_small clearfix">
		<?php $_from = $this->_tpl_vars['new_items_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
			<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
">
				<div class="<?php echo $this->_tpl_vars['item']['class']; ?>
"></div>
				<?php echo $this->_tpl_vars['item']['label']; ?>

			</a>
		<?php endforeach; endif; unset($_from); ?>
			<div class="clr_div"></div>
		</div>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:9ecc467ca7546d7027ebf99181f2bc54#3}'; endif;
$component = SK_Component('EventSpeedDatingNotifier');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:9ecc467ca7546d7027ebf99181f2bc54#3}'; endif; ?> 

	
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:9ecc467ca7546d7027ebf99181f2bc54#4}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:9ecc467ca7546d7027ebf99181f2bc54#4}'; endif; ?>