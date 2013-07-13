<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:51
         compiled from components/page_sidebar/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ads', 'components/page_sidebar/default.tpl', 15, false),array('block', 'block', 'components/page_sidebar/default.tpl', 19, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/page_sidebar/%%30/300/300211A5%%default.tpl.inc'] = '954e2effa275f77fa39714c3fdc15212'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:954e2effa275f77fa39714c3fdc15212#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/sidebar/%25%2586/86A/86AB2AE8%25%25sidebar.style.css?51e174c7e465d');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="sidebar">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:954e2effa275f77fa39714c3fdc15212#0}'; endif; ?>

	<?php if ($this->_tpl_vars['sign_in']): ?>
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:954e2effa275f77fa39714c3fdc15212#1}'; endif;
$component = SK_Component('SignUpLink');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:954e2effa275f77fa39714c3fdc15212#1}'; endif; ?>
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:954e2effa275f77fa39714c3fdc15212#2}'; endif;
$component = SK_Component('SignIn');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:954e2effa275f77fa39714c3fdc15212#2}'; endif; ?>
	<?php endif; ?>
	
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:954e2effa275f77fa39714c3fdc15212#3}'; endif;
$component = SK_Component('MemberConsole');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:954e2effa275f77fa39714c3fdc15212#3}'; endif; ?>
	
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:954e2effa275f77fa39714c3fdc15212#4}'; endif;
$component = SK_Component('ChuppoUseron');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:954e2effa275f77fa39714c3fdc15212#4}'; endif; ?>	
	
	<?php ob_start(); ?><?php echo ''; ?><?php echo smarty_function_ads(array('pos' => 'sidebar'), $this);?><?php echo ''; ?>
<?php $this->_smarty_vars['capture']['ads'] = ob_get_contents(); ob_end_clean(); ?>
	
	<?php if ($this->_smarty_vars['capture']['ads']): ?>
		<?php $this->_tag_stack[] = array('block', array('title' => SK_Language::text("profile.list.ads_label"))); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_smarty_vars['capture']['ads']; ?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>
	
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:954e2effa275f77fa39714c3fdc15212#5}'; endif;
$component = SK_Component('HotList');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:954e2effa275f77fa39714c3fdc15212#5}'; endif; ?>

<?php if ($this->caching && !$this->_cache_including): echo '{nocache:954e2effa275f77fa39714c3fdc15212#6}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:954e2effa275f77fa39714c3fdc15212#6}'; endif; ?>