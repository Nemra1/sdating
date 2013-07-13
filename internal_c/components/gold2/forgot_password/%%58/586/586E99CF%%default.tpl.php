<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:50
         compiled from components/forgot_password/default.tpl */ ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/forgot_password/%%58/586/586E99CF%%default.tpl.inc'] = '05cdf59a8e89d12fbae34a9405254676'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:05cdf59a8e89d12fbae34a9405254676#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/forgot_password/%25%25B9/B97/B97EE44A%25%25forgot_password.style.css?51e174c6906d8');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="forgot_password">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:05cdf59a8e89d12fbae34a9405254676#0}'; endif; ?>

	<a href="javascript://" <?php if ($this->caching && !$this->_cache_including): echo '{nocache:05cdf59a8e89d12fbae34a9405254676#1}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('btn').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:05cdf59a8e89d12fbae34a9405254676#1}'; endif; ?> class="forgot_pass_btn"><?php echo SK_Language::text("components.forgot_password.label"); ?></a>
	<div <?php if ($this->caching && !$this->_cache_including): echo '{nocache:05cdf59a8e89d12fbae34a9405254676#2}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('thick_title').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:05cdf59a8e89d12fbae34a9405254676#2}'; endif; ?> style="display:none"><b><?php echo SK_Language::text("components.forgot_password.label"); ?></b></div>
	<div <?php if ($this->caching && !$this->_cache_including): echo '{nocache:05cdf59a8e89d12fbae34a9405254676#3}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('thick_content').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:05cdf59a8e89d12fbae34a9405254676#3}'; endif; ?> style="display:none">
		<div class="block_info"><?php echo SK_Language::text("components.forgot_password.message"); ?></div>
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:05cdf59a8e89d12fbae34a9405254676#4}'; endif;include '/Applications/MAMP/dev.local/ska/internal_c/forms/forgot_password.form.php';
SK_Layout::current_component()->handleForm($form);
SK_Layout::frontend_handler()->registerForm($form);
echo $form->renderStart();
$this->assign('form', $form);
if ($this->caching && !$this->_cache_including): echo '{/nocache:05cdf59a8e89d12fbae34a9405254676#4}'; endif; ?>
			<div class="float_left">
				<?php echo $form->renderFieldLabel(array('for' => 'email')); ?> : <?php if ($this->caching && !$this->_cache_including): echo '{nocache:05cdf59a8e89d12fbae34a9405254676#5}'; endif;
echo $form->renderField(array('name' => 'email'));
if ($this->caching && !$this->_cache_including): echo '{/nocache:05cdf59a8e89d12fbae34a9405254676#5}'; endif; ?>
			</div>
			<div class="controls center float_left">
				<?php if ($this->caching && !$this->_cache_including): echo '{nocache:05cdf59a8e89d12fbae34a9405254676#6}'; endif;
echo $form->renderButton(array('action' => 'send'));
if ($this->caching && !$this->_cache_including): echo '{/nocache:05cdf59a8e89d12fbae34a9405254676#6}'; endif; ?>
			</div>
			<div class="clr"></div>
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:05cdf59a8e89d12fbae34a9405254676#7}'; endif;unset($this->_tpl_vars['form'], $form);
echo '</form>';if ($this->caching && !$this->_cache_including): echo '{/nocache:05cdf59a8e89d12fbae34a9405254676#7}'; endif; ?>
	</div>
	
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:05cdf59a8e89d12fbae34a9405254676#8}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:05cdf59a8e89d12fbae34a9405254676#8}'; endif; ?>
