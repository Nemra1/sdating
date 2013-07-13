<?php /* Smarty version 2.6.27, created on 2013-07-13 11:44:23
         compiled from httpdocs/search_result/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'document_url', 'httpdocs/search_result/default.tpl', 8, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/search_result/%%96/96F/96FE048B%%default.tpl.inc'] = '11d95fbeec17a94d53cac1a32fe6b621'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:11d95fbeec17a94d53cac1a32fe6b621#0}'; endif;global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	$this->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2510/101/10196301%25%25interface.style.css?51e183e7df81c');

	 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}
if ($this->caching && !$this->_cache_including): echo '{/nocache:11d95fbeec17a94d53cac1a32fe6b621#0}'; endif; ?>
	<div class="clearfix">
	<div class="float_right search_menu_wrap">
		<table class="search_menu" cellpadding="0" cellspacing="0">
			<tr>
				<td><a class="refine_search" href="<?php echo smarty_function_document_url(array('doc_key' => 'profile_search','refine' => 1), $this);?>
"><?php echo SK_Language::text("components.search_result.refine"); ?></a></td>
				<td><?php if ($this->caching && !$this->_cache_including): echo '{nocache:11d95fbeec17a94d53cac1a32fe6b621#1}'; endif;
$component = SK_Component('SaveSearch');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:11d95fbeec17a94d53cac1a32fe6b621#1}'; endif; ?></td>
			</tr>
		</table>
	</div>	


	<div class="float_left">
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:11d95fbeec17a94d53cac1a32fe6b621#2}'; endif;
$component = SK_Component('SavedLists');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:11d95fbeec17a94d53cac1a32fe6b621#2}'; endif; ?>
	</div>
	<div class="clr_div"></div>
	</div>
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:11d95fbeec17a94d53cac1a32fe6b621#3}'; endif;
$component = SK_Component('SearchResultList');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:11d95fbeec17a94d53cac1a32fe6b621#3}'; endif; ?>
<?php global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}
 ?>