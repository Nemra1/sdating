<?php /* Smarty version 2.6.27, created on 2013-07-13 10:41:38
         compiled from httpdocs/sign_in/default.tpl */ ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/sign_in/%%58/58A/58A81400%%default.tpl.inc'] = 'fddf3bc7a2d672fd1148374aa6c599af'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:fddf3bc7a2d672fd1148374aa6c599af#0}'; endif;global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	$this->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2510/101/10196301%25%25interface.style.css?51e17532760b1');

	 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/centered/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}
if ($this->caching && !$this->_cache_including): echo '{/nocache:fddf3bc7a2d672fd1148374aa6c599af#0}'; endif; ?>
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:fddf3bc7a2d672fd1148374aa6c599af#1}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%25E8/E85/E856A91D%25%25sign_in.style.css?51e175327da0c');
if ($this->caching && !$this->_cache_including): echo '{/nocache:fddf3bc7a2d672fd1148374aa6c599af#1}'; endif; ?>
    	
	<div class="sign_in_document clearfix">
		<?php if ($this->_tpl_vars['sign_up']): ?>
			<div class="float_half_left">
				<?php if ($this->caching && !$this->_cache_including): echo '{nocache:fddf3bc7a2d672fd1148374aa6c599af#2}'; endif;
$component = SK_Component('SignIn');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:fddf3bc7a2d672fd1148374aa6c599af#2}'; endif; ?>
			</div>
			<div class="signin_signup_delimitr"><?php echo SK_Language::text("components.sign_in.or"); ?></div>
			<div class="float_half_right">
				<?php if ($this->caching && !$this->_cache_including): echo '{nocache:fddf3bc7a2d672fd1148374aa6c599af#3}'; endif;
$component = SK_Component('SignUp');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:fddf3bc7a2d672fd1148374aa6c599af#3}'; endif; ?>
			</div>
		<?php else: ?>
			<div class="center_block">
				<?php if ($this->caching && !$this->_cache_including): echo '{nocache:fddf3bc7a2d672fd1148374aa6c599af#4}'; endif;
$component = SK_Component('SignIn');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:fddf3bc7a2d672fd1148374aa6c599af#4}'; endif; ?>
			</div>
		<?php endif; ?>	
	</div>
<?php global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/centered/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}
 ?>