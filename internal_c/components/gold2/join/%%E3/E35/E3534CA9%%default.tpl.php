<?php /* Smarty version 2.6.27, created on 2013-07-13 10:40:54
         compiled from components/join/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/join/default.tpl', 8, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/join/%%E3/E35/E3534CA9%%default.tpl.inc'] = 'e05a9bf74ed894352e6b793f4ca8d87f'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:e05a9bf74ed894352e6b793f4ca8d87f#0}'; endif;global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	$this->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2510/101/10196301%25%25interface.style.css?51e1750697a99');

	 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}
if ($this->caching && !$this->_cache_including): echo '{/nocache:e05a9bf74ed894352e6b793f4ca8d87f#0}'; endif; ?>

<?php if ($this->caching && !$this->_cache_including): echo '{nocache:e05a9bf74ed894352e6b793f4ca8d87f#1}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/center_block/%25%2599/996/996EAF4A%25%25join.style.css?51e175069c0e3');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="center_block">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:e05a9bf74ed894352e6b793f4ca8d87f#1}'; endif; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:e05a9bf74ed894352e6b793f4ca8d87f#2}'; endif;include '/Applications/MAMP/dev.local/ska/internal_c/forms/profile_join.form.php';
SK_Layout::current_component()->handleForm($form);
SK_Layout::frontend_handler()->registerForm($form);
echo $form->renderStart();
$this->assign('form', $form);
if ($this->caching && !$this->_cache_including): echo '{/nocache:e05a9bf74ed894352e6b793f4ca8d87f#2}'; endif; ?>
<div class="steps"><?php echo SK_Language::text("profile_fields.page_join.".($this->_tpl_vars['step'])); ?></div>
	<?php $this->_tag_stack[] = array('block', array('title' => SK_Language::text("components.join.label"))); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		
		
			<?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sect_id'] => $this->_tpl_vars['section']):
?>
				<table class="form">
					<thead>
						<tr>
							<th colspan="2"><?php echo SK_Language::text("profile_fields.section.".($this->_tpl_vars['sect_id'])); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php $_from = $this->_tpl_vars['section']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
							<tr>
								<?php if ($this->_tpl_vars['field']['presentation'] == 'location'): ?>
									<td colspan="2">
										<div style="display: none">
											<?php echo $form->renderFieldLabel(array('for' => $this->_tpl_vars['field']['name'])); ?>
										</div>
										<?php if ($this->caching && !$this->_cache_including): echo '{nocache:e05a9bf74ed894352e6b793f4ca8d87f#3}'; endif;
echo $form->renderField(array('name' => $this->_tpl_vars['field']['name'],'labelsection' => "profile_fields.label_join"));
if ($this->caching && !$this->_cache_including): echo '{/nocache:e05a9bf74ed894352e6b793f4ca8d87f#3}'; endif; ?>
									</td>
								<?php else: ?>
									<td class="label">
									   <?php echo $form->renderFieldLabel(array('for' => $this->_tpl_vars['field']['name'],'text' => SK_Language::text("profile_fields.label_join.".($this->_tpl_vars['field']['id'])))); ?><?php if ($this->_tpl_vars['field']['required']): ?><span class="required_star">*</span><?php endif; ?>
									</td>
									<td class="value"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:e05a9bf74ed894352e6b793f4ca8d87f#4}'; endif;
echo $form->renderField(array('name' => $this->_tpl_vars['field']['name'],'labelsection' => "profile_fields.value"));
if ($this->caching && !$this->_cache_including): echo '{/nocache:e05a9bf74ed894352e6b793f4ca8d87f#4}'; endif; ?></td>
								<?php endif; ?>
								
							</tr>
							<?php if ($this->_tpl_vars['field']['confirm']): ?>
								<tr>
									<td class="label">
									   <?php echo $form->renderFieldLabel(array('for' => "re_".($this->_tpl_vars['field']['name']),'text' => SK_Language::text("profile_fields.confirm.".($this->_tpl_vars['field']['id'])))); ?><?php if ($this->_tpl_vars['field']['required']): ?><span class="required_star">*</span><?php endif; ?>
									</td>
									<td class="value"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:e05a9bf74ed894352e6b793f4ca8d87f#5}'; endif;
echo $form->renderField(array('name' => "re_".($this->_tpl_vars['field']['name']),'labelsection' => "profile_fields.value"));
if ($this->caching && !$this->_cache_including): echo '{/nocache:e05a9bf74ed894352e6b793f4ca8d87f#5}'; endif; ?></td>								
								</tr>
							<?php endif; ?>
							
								
						<?php endforeach; endif; unset($_from); ?>
					</tbody>
				</table>
					
			<?php endforeach; endif; unset($_from); ?>
			<?php if ($this->_tpl_vars['has_captcha']): ?>
				<br clear="all">
				<table class="form">
					<thead>
						<tr>
							<th colspan="2"><?php echo $form->renderFieldLabel(array('for' => 'captcha','text' => SK_Language::text("components.join.captcha_label"))); ?></th>
						</tr>
					</thead>
					<tbody>
					<tr><td colspan="2" class="captcha"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:e05a9bf74ed894352e6b793f4ca8d87f#6}'; endif;
echo $form->renderField(array('name' => 'captcha'));
if ($this->caching && !$this->_cache_including): echo '{/nocache:e05a9bf74ed894352e6b793f4ca8d87f#6}'; endif; ?></td></tr>
					</tbody>
				</table>
				<br clear="all">	
			<?php endif; ?>
			<p align="center" class="join_btn"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:e05a9bf74ed894352e6b793f4ca8d87f#7}'; endif;
echo $form->renderButton(array('action' => $this->_tpl_vars['form']->active_action,'label' => SK_Language::text("forms._actions.join")));
if ($this->caching && !$this->_cache_including): echo '{/nocache:e05a9bf74ed894352e6b793f4ca8d87f#7}'; endif; ?></p>	
		
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:e05a9bf74ed894352e6b793f4ca8d87f#8}'; endif;unset($this->_tpl_vars['form'], $form);
echo '</form>';if ($this->caching && !$this->_cache_including): echo '{/nocache:e05a9bf74ed894352e6b793f4ca8d87f#8}'; endif; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:e05a9bf74ed894352e6b793f4ca8d87f#9}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:e05a9bf74ed894352e6b793f4ca8d87f#9}'; endif; ?>

<?php global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}
 ?>