<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:00
         compiled from components/navigation_inventory_line/default.tpl */ ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/navigation_inventory_line/%%9B/9BF/9BF6EE35%%default.tpl.inc'] = '0894733159b4e1bec6beb4b958c47c0f'; ?><?php if ($this->caching && !$this->_cache_including): echo '{nocache:0894733159b4e1bec6beb4b958c47c0f#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/inventory_line/%25%250F/0F7/0F7D975C%25%25inventory.style.css?51e18484c5956');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="inventory_line">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:0894733159b4e1bec6beb4b958c47c0f#0}'; endif; ?>
	<?php  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'plugins/menu-line.tpl', 'smarty_include_vars' => array('type' => 'line','items' => $this->_tpl_vars['inv_line_items'],'tpl_self' => 'plugins/menu-line.tpl')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:0894733159b4e1bec6beb4b958c47c0f#1}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:0894733159b4e1bec6beb4b958c47c0f#1}'; endif; ?>