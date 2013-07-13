<?php /* Smarty version 2.6.27, created on 2013-07-13 10:41:38
         compiled from themes/gold2/canvas/centered/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ads', 'themes/gold2/canvas/centered/header.tpl', 5, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/sign_in/%%96/96A/96ABCE67%%header.tpl.inc'] = '02a44c453fe3fa49a1da1affe986406a'; ?>
<div id="page_canvas">
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:02a44c453fe3fa49a1da1affe986406a#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2556/56D/56DD15C1%25%25style.css.css?51e17532886c2');
if ($this->caching && !$this->_cache_including): echo '{/nocache:02a44c453fe3fa49a1da1affe986406a#0}'; endif; ?>
	<?php echo smarty_function_ads(array('pos' => 'top'), $this);?>

	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:02a44c453fe3fa49a1da1affe986406a#1}'; endif;
$component = SK_Component('PageHeader');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:02a44c453fe3fa49a1da1affe986406a#1}'; endif; ?>
    <div class="submenu_wrap"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:02a44c453fe3fa49a1da1affe986406a#2}'; endif;
$component = SK_Component('NavigationSubMenu', array('level' => 1));

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:02a44c453fe3fa49a1da1affe986406a#2}'; endif; ?></div>
	<div class="content_wrap">
    <div id="content">
	
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:02a44c453fe3fa49a1da1affe986406a#3}'; endif;
$component = SK_Component('BreadCrumb');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:02a44c453fe3fa49a1da1affe986406a#3}'; endif; ?>