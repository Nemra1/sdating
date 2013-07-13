<?php /* Smarty version 2.6.27, created on 2013-07-13 11:50:49
         compiled from inc/_lang_add_key_value.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'text', 'inc/_lang_add_key_value.html', 14, false),)), $this); ?>
<div class="lang_input_<?php echo $this->_tpl_vars['params']['name']; ?>
">
	<?php if (! $this->_tpl_vars['params']['single']): ?>
	<div class="language_tab_cont">
		<?php $_from = $this->_tpl_vars['params']['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang_id'] => $this->_tpl_vars['lang']):
?>
			<div <?php if ($this->_tpl_vars['lang']->default): ?>id='<?php echo $this->_tpl_vars['params']['name']; ?>
_id'<?php endif; ?> class="<?php if ($this->_tpl_vars['lang']->default): ?>active_<?php endif; ?>lang_tab lang_tab_<?php echo $this->_tpl_vars['params']['name']; ?>
_<?php echo $this->_tpl_vars['lang_id']; ?>
" data-lang="<?php echo $this->_tpl_vars['lang_id']; ?>
" onclick="select_tab(this,'<?php echo $this->_tpl_vars['params']['name']; ?>
',<?php echo $this->_tpl_vars['lang_id']; ?>
)" style="cursor:pointer"><?php echo $this->_tpl_vars['lang']->abbrev; ?>
</div>
		<?php endforeach; endif; unset($_from); ?>
	</div>
	<br clear='all'>
	<?php endif; ?>
	<div class="lang_value_contener">

		<?php $_from = $this->_tpl_vars['params']['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang_id'] => $this->_tpl_vars['lang']):
?>
			<?php if ($this->_tpl_vars['params']['type'] == 'textarea'): ?>
				<textarea <?php if ($this->_tpl_vars['lang']->default): ?>id='<?php echo $this->_tpl_vars['params']['id']; ?>
'<?php endif; ?> data-lang="<?php echo $this->_tpl_vars['lang_id']; ?>
" data-name="<?php echo $this->_tpl_vars['params']['name']; ?>
" class='lang_val_input' name='<?php echo $this->_tpl_vars['params']['name']; ?>
[<?php echo $this->_tpl_vars['lang_id']; ?>
]' style="width:<?php echo $this->_tpl_vars['params']['width']; ?>
;height:<?php echo $this->_tpl_vars['params']['height']; ?>
;<?php if (! $this->_tpl_vars['lang']->default): ?>display:none<?php endif; ?>" <?php if ($this->_tpl_vars['params']['extra'] && $this->_tpl_vars['lang']->default): ?><?php echo $this->_tpl_vars['params']['extra']; ?>
<?php endif; ?>><?php echo $this->_plugins['function']['text'][0][0]->tpl_Text(array('section' => $this->_tpl_vars['params']['section'],'key' => $this->_tpl_vars['params']['key'],'lang_id' => $this->_tpl_vars['lang_id']), $this);?>
</textarea>
			<?php else: ?>
				<input <?php if ($this->_tpl_vars['lang']->default): ?>id='<?php echo $this->_tpl_vars['params']['id']; ?>
'<?php endif; ?> data-lang="<?php echo $this->_tpl_vars['lang_id']; ?>
" data-name="<?php echo $this->_tpl_vars['params']['name']; ?>
" class='lang_val_input lang_val_inputs_<?php echo $this->_tpl_vars['params']['name']; ?>
' type='text' name='<?php echo $this->_tpl_vars['params']['name']; ?>
[<?php echo $this->_tpl_vars['lang_id']; ?>
]' style="width:<?php echo $this->_tpl_vars['params']['width']; ?>
;<?php if (! $this->_tpl_vars['lang']->default): ?>display:none<?php endif; ?>" value='<?php echo $this->_plugins['function']['text'][0][0]->tpl_Text(array('section' => $this->_tpl_vars['params']['section'],'key' => $this->_tpl_vars['params']['key'],'lang_id' => $this->_tpl_vars['lang_id']), $this);?>
' <?php if ($this->_tpl_vars['params']['extra'] && $this->_tpl_vars['lang']->default): ?><?php echo $this->_tpl_vars['params']['extra']; ?>
<?php endif; ?>>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</div>
</div>