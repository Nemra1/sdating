<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/important_tips/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/important_tips/default.tpl', 5, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/important_tips/%%00/00F/00F72758%%default.tpl.inc'] = 'a187752e6d1e1fefd883308c57404f0d'; ?> 
 <?php if ($this->caching && !$this->_cache_including): echo '{nocache:a187752e6d1e1fefd883308c57404f0d#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/important_tips/%25%25E2/E25/E2580E09%25%25important_tips.style.css?51e184856a56f');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="important_tips">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:a187752e6d1e1fefd883308c57404f0d#0}'; endif; ?>
	 <?php if ($this->_tpl_vars['tips']): ?>
		<?php $this->_tag_stack[] = array('block', array('title' => SK_Language::text("components.important_tips.label_tips"),'class' => 'tip')); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<ul>
				<?php $_from = $this->_tpl_vars['tips']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tip']):
?>
					<li><?php echo $this->_tpl_vars['tip']; ?>
</li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>	
 <?php if ($this->caching && !$this->_cache_including): echo '{nocache:a187752e6d1e1fefd883308c57404f0d#1}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:a187752e6d1e1fefd883308c57404f0d#1}'; endif; ?> 

