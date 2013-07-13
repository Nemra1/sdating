<?php /* Smarty version 2.6.27, created on 2013-07-13 11:44:24
         compiled from components/profile_list/no_items.tpl */ ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/profile_list/%%06/06C/06C6B708%%no_items.tpl.inc'] = 'b1255a02f17becdf69abb11a3d692a25'; ?><?php if ($this->caching && !$this->_cache_including): echo '{nocache:b1255a02f17becdf69abb11a3d692a25#0}'; endif;global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	$this->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2510/101/10196301%25%25interface.style.css?51e183e813cee');

	 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}
if ($this->caching && !$this->_cache_including): echo '{/nocache:b1255a02f17becdf69abb11a3d692a25#0}'; endif; ?>
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:b1255a02f17becdf69abb11a3d692a25#1}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/profile_list_contener/%25%2536/363/363C69D3%25%25profile_list.style.css?51e183e8161af');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="profile_list_contener">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:b1255a02f17becdf69abb11a3d692a25#1}'; endif; ?>
		<?php if ($this->_tpl_vars['tabs']): ?>
				<?php  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'plugins/menu-tabs-small.tpl', 'smarty_include_vars' => array('type' => 'tabs-small','items' => $this->_tpl_vars['tabs'],'tpl_self' => 'plugins/menu-tabs-small.tpl')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  ?>
		<?php endif; ?>
		<br clear="all">
		<div class="no_content"><?php echo SK_Language::text("components.profile_list.no_items"); ?></div>
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:b1255a02f17becdf69abb11a3d692a25#2}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:b1255a02f17becdf69abb11a3d692a25#2}'; endif; ?>
<?php global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}
 ?>