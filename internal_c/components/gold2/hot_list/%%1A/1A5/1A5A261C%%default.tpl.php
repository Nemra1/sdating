<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:52
         compiled from components/hot_list/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/hot_list/default.tpl', 3, false),array('function', 'cycle', 'components/hot_list/default.tpl', 6, false),array('function', 'profile_thumb', 'components/hot_list/default.tpl', 7, false),array('function', 'document_url', 'components/hot_list/default.tpl', 13, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/hot_list/%%1A/1A5/1A5A261C%%default.tpl.inc'] = '2db324a122c0e2fc974bc408eee11abc'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:2db324a122c0e2fc974bc408eee11abc#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/hot_list/%25%25E4/E46/E46CC0BF%25%25hot_list.style.css?51e174c8124eb');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="hot_list">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:2db324a122c0e2fc974bc408eee11abc#0}'; endif; ?>
<?php $this->_tag_stack[] = array('block', array('title' => SK_Language::text("components.hot_list.title"))); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="clearfix hotlist_items">
	<?php $_from = $this->_tpl_vars['hot_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
	<div class="float_left <?php echo smarty_function_cycle(array('values' => 'hot_even,hot_odd'), $this);?>
">
		<?php echo smarty_function_profile_thumb(array('profile_id' => $this->_tpl_vars['item']['profile_id'],'size' => 78), $this);?>

	</div>
	<?php endforeach; endif; unset($_from); ?>
</div>
   <div class="center">
   <?php if ($this->_tpl_vars['use_sms']): ?>
       <a href="<?php echo smarty_function_document_url(array('doc_key' => 'sms_services'), $this);?>
?service=hot_list"><?php echo SK_Language::text("components.hot_list.join_link"); ?></a>
   <?php else: ?>
       <a href="javascript://" <?php if ($this->caching && !$this->_cache_including): echo '{nocache:2db324a122c0e2fc974bc408eee11abc#1}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('become_hot').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:2db324a122c0e2fc974bc408eee11abc#1}'; endif; ?>><?php echo SK_Language::text("components.hot_list.join_link"); ?></a>
   <?php endif; ?>
   </div>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:2db324a122c0e2fc974bc408eee11abc#2}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:2db324a122c0e2fc974bc408eee11abc#2}'; endif; ?>