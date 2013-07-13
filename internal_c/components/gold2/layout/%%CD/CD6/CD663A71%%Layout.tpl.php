<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:50
         compiled from Layout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_cap', 'Layout.tpl', 12, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="<?php echo $this->_tpl_vars['language_tag']; ?>
" lang="<?php echo $this->_tpl_vars['language_tag']; ?>
" <?php if ($this->_tpl_vars['themeDirection'] == 'rtl'): ?>dir="rtl"<?php endif; ?> xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/">
<head>
	<link rel="shortcut icon" href="<?php echo @SITE_URL; ?>
favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo @SITE_URL; ?>
favicon.ico" type="image/x-icon">
	<?php echo $this->_tpl_vars['html_head']; ?>

</head>
<body>
	<div style="display: none;" id="sk-floatbox-block-prototype">
	    <div class="floatbox_container" style="overflow: visible;">
			<?php $this->_tag_stack[] = array('block_cap', array('title' => "",'class' => 'floatbox_header')); $_block_repeat=true;$this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><a class="close_btn" href="#"></a><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	    <div class="floatbox_body">
		<div class="fblock_body block_body">
		 <div class="fblock_body_r block_body_r">
		  <div class="fblock_body_c block_body_c">
		  </div>
		 </div>
		</div>
             </div>
	     <div class="floatbox_bottom">	
		<div class="block_bottom">
		 <div class="block_bottom_r">
		   <div class="block_bottom_c">
		   </div>
                  </div>
		  </div>
               </div>
		<div class="fblock_bottom">
			<div class="fblock_bottom_r">
			<div class="fblock_bottom_c"></div>
			</div>
		</div>


		</div>
	</div>
	<div style="display: none" id="sk-hidden-components">
	   <?php $_from = $this->_tpl_vars['hiddenComponents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cmp']):
?>
	       <?php echo $this->_tpl_vars['cmp']; ?>

	   <?php endforeach; endif; unset($_from); ?>
	</div>
	<?php echo $this->_tpl_vars['html_body']; ?>

	<?php echo $this->_tpl_vars['google_code']; ?>

</body>
</html>