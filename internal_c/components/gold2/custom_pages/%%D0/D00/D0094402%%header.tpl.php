<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:51
         compiled from themes/gold2/canvas/default/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ads', 'themes/gold2/canvas/default/header.tpl', 4, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/custom_pages/%%D0/D00/D0094402%%header.tpl.inc'] = 'ede66c312a9512226690c3b641583126'; ?>
<div id="page_canvas">
    <?php echo smarty_function_ads(array('pos' => 'top'), $this);?>

    <?php if ($this->caching && !$this->_cache_including): echo '{nocache:ede66c312a9512226690c3b641583126#0}'; endif;
$component = SK_Component('PageHeader');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:ede66c312a9512226690c3b641583126#0}'; endif; ?>
    <div class="submenu_wrap"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:ede66c312a9512226690c3b641583126#1}'; endif;
$component = SK_Component('NavigationSubMenu', array('level' => 1));

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:ede66c312a9512226690c3b641583126#1}'; endif; ?></div>
    <div class="content_wrap">
        <?php if (! isset ( $this->_tpl_vars['sidebar'] ) || $this->_tpl_vars['sidebar']): ?>
            <?php if ($this->caching && !$this->_cache_including): echo '{nocache:ede66c312a9512226690c3b641583126#2}'; endif;
$component = SK_Component('PageSidebar');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:ede66c312a9512226690c3b641583126#2}'; endif; ?>
        <?php endif; ?>
        <div id="content">
            <?php echo smarty_function_ads(array('pos' => 'middle'), $this);?>

            <?php if ($this->caching && !$this->_cache_including): echo '{nocache:ede66c312a9512226690c3b641583126#3}'; endif;
$component = SK_Component('GroupBriefInfo');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:ede66c312a9512226690c3b641583126#3}'; endif; ?>
            <?php if ($this->caching && !$this->_cache_including): echo '{nocache:ede66c312a9512226690c3b641583126#4}'; endif;
$component = SK_Component('BreadCrumb');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:ede66c312a9512226690c3b641583126#4}'; endif; ?>               
        <h1 id="page_content_header"><?php echo $this->_tpl_vars['content_header']; ?>
</h1>