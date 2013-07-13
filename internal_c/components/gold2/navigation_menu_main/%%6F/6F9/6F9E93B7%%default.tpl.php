<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:50
         compiled from components/navigation_menu_main/default.tpl */ ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/navigation_menu_main/%%6F/6F9/6F9E93B7%%default.tpl.inc'] = '179db275f69ef4cd01553ae4b3398f34'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:179db275f69ef4cd01553ae4b3398f34#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/main_menu/%25%255D/5D9/5D9D69D1%25%25menu_main.style.css?51e174c6aeb6d');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="main_menu">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:179db275f69ef4cd01553ae4b3398f34#0}'; endif; ?>
	<?php  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/plugins/menu-tabs.tpl', 'smarty_include_vars' => array('type' => 'tabs','items' => $this->_tpl_vars['main_menu_items'],'tpl_self' => 'themes/gold2/plugins/menu-tabs.tpl')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:179db275f69ef4cd01553ae4b3398f34#1}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:179db275f69ef4cd01553ae4b3398f34#1}'; endif; ?>