<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:51
         compiled from components/navigation_sub_menu/default.tpl */ ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/navigation_sub_menu/%%DA/DA9/DA97BF5D%%default.tpl.inc'] = 'd950b4cc382e667aab416b4d784f0941'; ?><?php if ($this->_tpl_vars['sub_menu_items']): ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:d950b4cc382e667aab416b4d784f0941#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/submenu/%25%253D/3DA/3DADC1F8%25%25navigation_sub_menu.style.css?51e174c7df8a4');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="submenu">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:d950b4cc382e667aab416b4d784f0941#0}'; endif; ?>
	<?php  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'plugins/menu-list.tpl', 'smarty_include_vars' => array('type' => 'list','items' => $this->_tpl_vars['sub_menu_items'],'tpl_self' => 'plugins/menu-list.tpl')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  ?>	
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:d950b4cc382e667aab416b4d784f0941#1}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:d950b4cc382e667aab416b4d784f0941#1}'; endif; ?>
<?php endif; ?>