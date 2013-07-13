<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:50
         compiled from components/quick_search/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/quick_search/index.tpl', 4, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/quick_search/%%C7/C74/C740E1F9%%index.tpl.inc'] = '36876d881212e22e85d52171c6595af7'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:36876d881212e22e85d52171c6595af7#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/quick_search/%25%25B8/B87/B87E2585%25%25quick_search.style.css?51e174c6c8bf6');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="quick_search">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:36876d881212e22e85d52171c6595af7#0}'; endif; ?>
	<?php $this->_tag_stack[] = array('block', array('title' => SK_Language::text("components.quick_search.label"))); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:36876d881212e22e85d52171c6595af7#1}'; endif;include '/Applications/MAMP/dev.local/ska/internal_c/forms/quick_search.form.php';
SK_Layout::current_component()->handleForm($form);
SK_Layout::frontend_handler()->registerForm($form);
echo $form->renderStart();
$this->assign('form', $form);
if ($this->caching && !$this->_cache_including): echo '{/nocache:36876d881212e22e85d52171c6595af7#1}'; endif; ?>
			<?php if ($this->_tpl_vars['fields']['sex']): ?>
				<b><?php echo $form->renderFieldLabel(array('for' => 'sex','text' => SK_Language::text("profile_fields.label_search.".($this->_tpl_vars['fields']['sex'])))); ?></b>
				<div class="center clearfix qs_fields_sex"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:36876d881212e22e85d52171c6595af7#2}'; endif;
echo $form->renderField(array('name' => 'sex','type' => 'radio','labelsection' => "profile_fields.value",'class' => 'input_group clearfix'));
if ($this->caching && !$this->_cache_including): echo '{/nocache:36876d881212e22e85d52171c6595af7#2}'; endif; ?></div>
			<?php endif; ?>	
			<?php if ($this->_tpl_vars['fields']['match_sex']): ?>
				<b><?php echo $form->renderFieldLabel(array('for' => 'match_sex','text' => SK_Language::text("profile_fields.label_search.".($this->_tpl_vars['fields']['match_sex'])))); ?></b>
				<div class="center clearfix qs_fields_match_sex"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:36876d881212e22e85d52171c6595af7#3}'; endif;
echo $form->renderField(array('name' => 'match_sex','labelsection' => "profile_fields.value",'class' => 'input_group clearfix'));
if ($this->caching && !$this->_cache_including): echo '{/nocache:36876d881212e22e85d52171c6595af7#3}'; endif; ?></div>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['fields']['birthdate']): ?>
				<b><?php echo $form->renderFieldLabel(array('for' => 'birthdate','text' => SK_Language::text("profile_fields.label_search.".($this->_tpl_vars['fields']['birthdate'])))); ?></b>
				<div class="center clearfix qs_fields_birthdate"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:36876d881212e22e85d52171c6595af7#4}'; endif;
echo $form->renderField(array('name' => 'birthdate'));
if ($this->caching && !$this->_cache_including): echo '{/nocache:36876d881212e22e85d52171c6595af7#4}'; endif; ?><br clear="all"></div>
			<?php endif; ?>			
			<div class="clearfix qs_fields_location"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:36876d881212e22e85d52171c6595af7#5}'; endif;
echo $form->renderField(array('name' => 'location'));
if ($this->caching && !$this->_cache_including): echo '{/nocache:36876d881212e22e85d52171c6595af7#5}'; endif; ?><br clear="all"></div>
			<div class="center clearfix qs_fields_params">
				<table width="100%">
					<tr>
						<td align="right"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:36876d881212e22e85d52171c6595af7#6}'; endif;
echo $form->renderField(array('name' => 'search_online_only','label' => SK_Language::text("profile_fields.label_search.".($this->_tpl_vars['fields']['search_online_only']))));
if ($this->caching && !$this->_cache_including): echo '{/nocache:36876d881212e22e85d52171c6595af7#6}'; endif; ?></td>
						<td align="left"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:36876d881212e22e85d52171c6595af7#7}'; endif;
echo $form->renderField(array('name' => 'search_with_photo_only','label' => SK_Language::text("profile_fields.label_search.".($this->_tpl_vars['fields']['search_with_photo_only']))));
if ($this->caching && !$this->_cache_including): echo '{/nocache:36876d881212e22e85d52171c6595af7#7}'; endif; ?></td>
					</tr>
				</table>
				<br clear="all">
			</div>            
			<div class="left clearfix"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:36876d881212e22e85d52171c6595af7#8}'; endif;
echo $form->renderButton(array('action' => 'search','label' => 'Quick Search'));
if ($this->caching && !$this->_cache_including): echo '{/nocache:36876d881212e22e85d52171c6595af7#8}'; endif; ?></div>
			<div class="clr_div"></div>
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:36876d881212e22e85d52171c6595af7#9}'; endif;unset($this->_tpl_vars['form'], $form);
echo '</form>';if ($this->caching && !$this->_cache_including): echo '{/nocache:36876d881212e22e85d52171c6595af7#9}'; endif; ?>
		<div class="clr_div"></div>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:36876d881212e22e85d52171c6595af7#10}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:36876d881212e22e85d52171c6595af7#10}'; endif; ?>