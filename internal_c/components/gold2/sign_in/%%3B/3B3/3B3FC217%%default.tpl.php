<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:50
         compiled from components/sign_in/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_cap', 'components/sign_in/default.tpl', 12, false),array('block', 'block', 'components/sign_in/default.tpl', 17, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/sign_in/%%3B/3B3/3B3FC217%%default.tpl.inc'] = 'b2543a4d259a1a4bb26e8509440c5239'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:b2543a4d259a1a4bb26e8509440c5239#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/sign_in/%25%2582/826/826539FD%25%25sign_in.style.css?51e174c6853f7');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="sign_in">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:b2543a4d259a1a4bb26e8509440c5239#0}'; endif; ?>

<div class="sign_in_cont" <?php if ($this->_tpl_vars['hidden']): ?>style="display: none"<?php endif; ?>>
	
		<?php if ($this->_tpl_vars['hidden']): ?>
			<div class="fb_title">
				<?php echo SK_Language::text("components.sign_in.label"); ?>
			</div>
		<?php else: ?>
			<?php $this->_tag_stack[] = array('block_cap', array('title' => SK_Language::text("components.sign_in.label"))); $_block_repeat=true;$this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
		
		<div class="fb_content">
		<div class="block_toolbar"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:b2543a4d259a1a4bb26e8509440c5239#1}'; endif;
$component = SK_Component('ForgotPassword');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:b2543a4d259a1a4bb26e8509440c5239#1}'; endif; ?></div>
		<?php $this->_tag_stack[] = array('block', array()); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		
				<?php if ($this->caching && !$this->_cache_including): echo '{nocache:b2543a4d259a1a4bb26e8509440c5239#2}'; endif;include '/Applications/MAMP/dev.local/ska/internal_c/forms/sign_in.form.php';
SK_Layout::current_component()->handleForm($form);
SK_Layout::frontend_handler()->registerForm($form);
echo $form->renderStart();
$this->assign('form', $form);
if ($this->caching && !$this->_cache_including): echo '{/nocache:b2543a4d259a1a4bb26e8509440c5239#2}'; endif; ?>
					<div class="field">
						<div><?php echo $form->renderFieldLabel(array('for' => 'login')); ?></div>
						<div class="input_bg"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:b2543a4d259a1a4bb26e8509440c5239#3}'; endif;
echo $form->renderField(array('name' => 'login'));
if ($this->caching && !$this->_cache_including): echo '{/nocache:b2543a4d259a1a4bb26e8509440c5239#3}'; endif; ?></div>
					</div>
					<div class="field">
						<div><?php echo $form->renderFieldLabel(array('for' => 'password')); ?></div>
						<div class="input_bg"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:b2543a4d259a1a4bb26e8509440c5239#4}'; endif;
echo $form->renderField(array('name' => 'password'));
if ($this->caching && !$this->_cache_including): echo '{/nocache:b2543a4d259a1a4bb26e8509440c5239#4}'; endif; ?></div>
					</div>
					<div class="clearfix">
					<div class="float_left">
						<?php if ($this->caching && !$this->_cache_including): echo '{nocache:b2543a4d259a1a4bb26e8509440c5239#5}'; endif;
echo $form->renderField(array('name' => 'remember_me','label' => SK_Language::text("forms.sign_in.fields.remember_me.label")));
if ($this->caching && !$this->_cache_including): echo '{/nocache:b2543a4d259a1a4bb26e8509440c5239#5}'; endif; ?>
					</div>
					<p align="right" class="float_right">
						<?php if ($this->caching && !$this->_cache_including): echo '{nocache:b2543a4d259a1a4bb26e8509440c5239#6}'; endif;
echo $form->renderButton(array('action' => 'process'));
if ($this->caching && !$this->_cache_including): echo '{/nocache:b2543a4d259a1a4bb26e8509440c5239#6}'; endif; ?>
					</p>
					</div>
				<?php if ($this->caching && !$this->_cache_including): echo '{nocache:b2543a4d259a1a4bb26e8509440c5239#7}'; endif;unset($this->_tpl_vars['form'], $form);
echo '</form>';if ($this->caching && !$this->_cache_including): echo '{/nocache:b2543a4d259a1a4bb26e8509440c5239#7}'; endif; ?>	
			
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	
		</div>
	
</div>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:b2543a4d259a1a4bb26e8509440c5239#8}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:b2543a4d259a1a4bb26e8509440c5239#8}'; endif; ?>