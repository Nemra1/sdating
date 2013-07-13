<?php /* Smarty version 2.6.27, created on 2013-07-13 10:41:38
         compiled from components/sign_up/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/sign_up/default.tpl', 4, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/sign_up/%%39/399/3999C53C%%default.tpl.inc'] = 'aef4972cb31c053c8df6c9e937e88874'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:aef4972cb31c053c8df6c9e937e88874#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/sign_up_cont/%25%2576/768/76849066%25%25sign_up.style.css?51e17532b9a51');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="sign_up_cont">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:aef4972cb31c053c8df6c9e937e88874#0}'; endif; ?>
<?php $this->_tag_stack[] = array('block', array('title' => SK_Language::text("components.sign_up.label"))); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:aef4972cb31c053c8df6c9e937e88874#1}'; endif;include '/Applications/MAMP/dev.local/ska/internal_c/forms/sign_up.form.php';
SK_Layout::current_component()->handleForm($form);
SK_Layout::frontend_handler()->registerForm($form);
echo $form->renderStart();
$this->assign('form', $form);
if ($this->caching && !$this->_cache_including): echo '{/nocache:aef4972cb31c053c8df6c9e937e88874#1}'; endif; ?>
	
	<div class="field clearfix">
		<div class="float_left">
		<?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['f'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['f']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field']):
        $this->_foreach['f']['iteration']++;
?>

			<?php if ($this->_tpl_vars['field']['name'] == 'i_agree_with_tos'): ?>
			<div class="float_left field_agree">
				<?php if ($this->caching && !$this->_cache_including): echo '{nocache:aef4972cb31c053c8df6c9e937e88874#2}'; endif;
echo $form->renderField(array('name' => $this->_tpl_vars['field']['name'],'label' => SK_Language::text("profile_fields.label_join.".($this->_tpl_vars['field']['id']))));
if ($this->caching && !$this->_cache_including): echo '{/nocache:aef4972cb31c053c8df6c9e937e88874#2}'; endif; ?>
			</div>
			<?php else: ?>
				<?php echo $form->renderFieldLabel(array('for' => $this->_tpl_vars['field']['name'],'text' => SK_Language::text("profile_fields.label_join.".($this->_tpl_vars['field']['id'])))); ?>
				<div class="input_bg"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:aef4972cb31c053c8df6c9e937e88874#3}'; endif;
echo $form->renderField(array('name' => $this->_tpl_vars['field']['name']));
if ($this->caching && !$this->_cache_including): echo '{/nocache:aef4972cb31c053c8df6c9e937e88874#3}'; endif; ?></div>
			<?php endif; ?>
		
			
			<?php if ($this->_tpl_vars['field']['confirm']): ?>
				<?php echo $form->renderFieldLabel(array('for' => "re_".($this->_tpl_vars['field']['name']),'text' => SK_Language::text("profile_fields.confirm.".($this->_tpl_vars['field']['id'])))); ?><br>
				<div class="input_bg"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:aef4972cb31c053c8df6c9e937e88874#4}'; endif;
echo $form->renderField(array('name' => "re_".($this->_tpl_vars['field']['name'])));
if ($this->caching && !$this->_cache_including): echo '{/nocache:aef4972cb31c053c8df6c9e937e88874#4}'; endif; ?></div>
			<?php endif; ?>
			
		<?php if ($this->_foreach['f']['iteration'] == 2): ?>
			</div>
			<div class="float_right">
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
			<p class="right float_right">
				<?php if ($this->caching && !$this->_cache_including): echo '{nocache:aef4972cb31c053c8df6c9e937e88874#5}'; endif;
echo $form->renderButton(array('action' => $this->_tpl_vars['form']->active_action,'label' => SK_Language::text("forms._actions.join")));
if ($this->caching && !$this->_cache_including): echo '{/nocache:aef4972cb31c053c8df6c9e937e88874#5}'; endif; ?>
			</p>
		</div>
	</div>
	<?php if ($this->caching && !$this->_cache_including): echo '{nocache:aef4972cb31c053c8df6c9e937e88874#6}'; endif;unset($this->_tpl_vars['form'], $form);
echo '</form>';if ($this->caching && !$this->_cache_including): echo '{/nocache:aef4972cb31c053c8df6c9e937e88874#6}'; endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php if ($this->caching && !$this->_cache_including): echo '{nocache:aef4972cb31c053c8df6c9e937e88874#7}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:aef4972cb31c053c8df6c9e937e88874#7}'; endif; ?>