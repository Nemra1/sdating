<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:50
         compiled from db:gold2:index_page_code */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ads', 'db:gold2:index_page_code', 22, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/index/%%8F/8F8/8F8EEB56%%db%3Agold2%3Aindex_page_code.inc'] = '51a76c81261e4993f986f2b487b67791'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:51a76c81261e4993f986f2b487b67791#0}'; endif;global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	$this->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2510/101/10196301%25%25interface.style.css?51e174c698e9e');

	 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'canvas/index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}
if ($this->caching && !$this->_cache_including): echo '{/nocache:51a76c81261e4993f986f2b487b67791#0}'; endif; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:51a76c81261e4993f986f2b487b67791#1}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2595/954/954990CB%25%25index.style.css?51e174c69b4bc');
if ($this->caching && !$this->_cache_including): echo '{/nocache:51a76c81261e4993f986f2b487b67791#1}'; endif; ?>

<div id="page_canvas" class="index_page">
    <div class="index_page_header">
        <?php if ($this->caching && !$this->_cache_including): echo '{nocache:51a76c81261e4993f986f2b487b67791#2}'; endif;
$component = SK_Component('PageHeader');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:51a76c81261e4993f986f2b487b67791#2}'; endif; ?>
        <div class="index_box_top">
            <div class="promo_image"></div>
            <div class="index_quick_search"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:51a76c81261e4993f986f2b487b67791#3}'; endif;
$component = SK_Component('QuickSearch', array('type' => 'index'));

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:51a76c81261e4993f986f2b487b67791#3}'; endif; ?></div>
        </div>
        <div class="index_box_bottom">
            <p class="promo_text"><?php echo SK_Language::text("promo.promo_index_avatar"); ?></p>
            <p><a class="join_button" href="member/join.php">Join</a><span>or</span><a class="sing_in_botton"  href="member/sign_in.php">Sign in</a></p>
        </div>
    </div>
<div style="width:772px;margin: 0 auto;"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:51a76c81261e4993f986f2b487b67791#4}'; endif;
$component = SK_Component('Slideshow');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:51a76c81261e4993f986f2b487b67791#4}'; endif; ?></div>
    <div id="footer"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:51a76c81261e4993f986f2b487b67791#5}'; endif;
$component = SK_Component('PageFooter');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:51a76c81261e4993f986f2b487b67791#5}'; endif; ?></div>
</div>
<?php echo smarty_function_ads(array('pos' => 'bottom'), $this);?>

<?php global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'canvas/index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}
 ?>