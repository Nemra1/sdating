<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:50
         compiled from components/page_header/default.tpl */ ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/page_header/%%88/885/88536C25%%default.tpl.inc'] = '4389c65aa082d8bd6e7f8d7eb5910390'; ?>	
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:4389c65aa082d8bd6e7f8d7eb5910390#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/page_header/%25%2571/716/716D03CE%25%25page_header.style.css?51e174c6a10ea');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="page_header">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:4389c65aa082d8bd6e7f8d7eb5910390#0}'; endif; ?>

   <?php if (! empty ( $this->_tpl_vars['is_123wm'] ) && $this->_tpl_vars['is_123wm']): ?>
	<script> 
		var init_user = "<?php echo $this->_tpl_vars['u']; ?>
"; var init_password = "<?php echo $this->_tpl_vars['p']; ?>
"; dcInit();
	</script>
<?php endif; ?>
<div class="clearfix">
	<div class="inventory_line_wrap">
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:4389c65aa082d8bd6e7f8d7eb5910390#1}'; endif;
$component = SK_Component('NavigationInventoryLine');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:4389c65aa082d8bd6e7f8d7eb5910390#1}'; endif; ?>
	</div>
	<div class="header_line">    	       
        <div class="float_right">
            <?php if ($this->caching && !$this->_cache_including): echo '{nocache:4389c65aa082d8bd6e7f8d7eb5910390#2}'; endif;
$component = SK_Component('SelectLanguage');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:4389c65aa082d8bd6e7f8d7eb5910390#2}'; endif; ?>
            <?php if ($this->caching && !$this->_cache_including): echo '{nocache:4389c65aa082d8bd6e7f8d7eb5910390#3}'; endif;
$component = SK_Component('FBCButton');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:4389c65aa082d8bd6e7f8d7eb5910390#3}'; endif; ?>
            <div class="clr_div"></div>
        </div>
        <a class="logo" href="<?php echo @SITE_URL; ?>
"></a>
    </div>
    <div class="main_menu_wrap">
	    <?php if ($this->caching && !$this->_cache_including): echo '{nocache:4389c65aa082d8bd6e7f8d7eb5910390#4}'; endif;
$component = SK_Component('NavigationMenuMain');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:4389c65aa082d8bd6e7f8d7eb5910390#4}'; endif; ?>
    </div>
</div>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:4389c65aa082d8bd6e7f8d7eb5910390#5}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:4389c65aa082d8bd6e7f8d7eb5910390#5}'; endif; ?>