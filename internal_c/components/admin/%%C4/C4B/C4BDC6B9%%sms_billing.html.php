<?php /* Smarty version 2.6.27, created on 2013-07-13 11:51:51
         compiled from sms_billing.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_page', 'sms_billing.html', 5, false),array('function', 'edit_lang_values_btn', 'sms_billing.html', 42, false),array('function', 'cycle', 'sms_billing.html', 97, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<table>
	<thead>
		<tr><th>SMS Payment Providers</th></tr>
	</thead>
</table>
<br />	

<div style="width: 49%; float: left">
	<?php $_from = $this->_tpl_vars['provider_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['provider']):
?>
		<div class="sms_prov<?php if ($this->_tpl_vars['provider']['active']): ?>_active<?php endif; ?>">
			<div class="sms_prov_header<?php if ($this->_tpl_vars['provider']['active']): ?>_active<?php endif; ?>"><?php echo $this->_tpl_vars['provider']['description']; ?>
</div>
		
			<div id="provider_<?php echo $this->_tpl_vars['provider']['sms_provider_id']; ?>
">
				<table width="100%">
				<tbody>
					<tr class="tr_1">
						<td width="25%"><b>Status</div></td>
						<td>
							<div style="float: left; padding: 2px"><?php if ($this->_tpl_vars['provider']['active']): ?>Active<?php else: ?>Inactive<?php endif; ?></div>
							<div style="float: right">
								<form method="post" action="">
									<input type="hidden" name="command" value="<?php if ($this->_tpl_vars['provider']['active']): ?>disable<?php else: ?>activate<?php endif; ?>" />
									<input type="hidden" name="provider_id" value="<?php echo $this->_tpl_vars['provider']['sms_provider_id']; ?>
" />
									<input type="hidden" name="status" value="<?php if ($this->_tpl_vars['provider']['status'] == 'active'): ?>active<?php else: ?>inactive<?php endif; ?>" />
									<input type="submit" value="<?php if ($this->_tpl_vars['provider']['active']): ?>Disable<?php else: ?>Activate<?php endif; ?>" />
								</form>
							</div>
						</td>
					</tr>
					<form id="provider_form_<?php echo $this->_tpl_vars['provider']['sms_provider_id']; ?>
" action="" method="post">
					<input type="hidden" name="command" value="save" />
					<input type="hidden" name="provider_id" value="<?php echo $this->_tpl_vars['provider']['sms_provider_id']; ?>
" />
					
					<tr class="tr_2">
						<td style="vertical-align: top; font-weight: bold">Label</td>
						<td><?php echo $this->_plugins['function']['edit_lang_values_btn'][0][0]->tpl_EditLangKey(array('section' => 'sms_billing.providers','key' => $this->_tpl_vars['provider']['sms_provider_id']), $this);?>
</td>
					</tr>
					<tr class="tr_1">
						<td><b><?php echo $this->_tpl_vars['provider']['mk_title']; ?>
</b></td>
						<td><input type="text" value="<?php echo $this->_tpl_vars['provider']['merchant_key']; ?>
" name="merchant_key" /></td>
					</tr>
					<tr class="tr_2">
						<td><b>Fields</b></td>
						<td>
							<?php $_from = $this->_tpl_vars['provider']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
								<div class="sms_field_desc"><?php echo $this->_tpl_vars['field']['description']; ?>
:</div>
									<?php if ($this->_tpl_vars['field']['type'] == 'text'): ?>
										<input id="field_<?php echo $this->_tpl_vars['provider']['sms_provider_id']; ?>
_<?php echo $this->_tpl_vars['field']['field_name']; ?>
" type="text" name="fields[<?php echo $this->_tpl_vars['field']['field_name']; ?>
]" value="<?php echo $this->_tpl_vars['field']['value']; ?>
" />
									<?php elseif ($this->_tpl_vars['field']['type'] == 'password'): ?>
										<input id="field_<?php echo $this->_tpl_vars['provider']['sms_provider_id']; ?>
_<?php echo $this->_tpl_vars['field']['field_name']; ?>
" type="password" name="fields[<?php echo $this->_tpl_vars['field']['field_name']; ?>
]" value="<?php echo $this->_tpl_vars['field']['value']; ?>
" />
									<?php elseif ($this->_tpl_vars['field']['type'] == 'checkbox'): ?>
										<input type="hidden" name="fields[<?php echo $this->_tpl_vars['field']['field_name']; ?>
]" value="" />
										<input id="field_<?php echo $this->_tpl_vars['provider']['sms_provider_id']; ?>
_<?php echo $this->_tpl_vars['field']['field_name']; ?>
" type="checkbox" name="fields[<?php echo $this->_tpl_vars['field']['field_name']; ?>
]" <?php if ($this->_tpl_vars['field']['value']): ?>checked="checked"<?php endif; ?> />
									<?php elseif ($this->_tpl_vars['field']['type'] == 'select'): ?>
										<select id="field_<?php echo $this->_tpl_vars['provider']['sms_provider_id']; ?>
_<?php echo $this->_tpl_vars['field']['field_name']; ?>
" name="fields[<?php echo $this->_tpl_vars['field']['field_name']; ?>
]">
										<?php $_from = $this->_tpl_vars['field']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
											<option <?php if ($this->_tpl_vars['value'] == $this->_tpl_vars['field']['value']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['value']['label']; ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
										</select>
									<?php endif; ?>
								<br />
							<?php endforeach; endif; unset($_from); ?>
						</td>
					</tr>
					<tr><td colspan="2" style="padding: 3px; text-align: right"><input type="submit" value="Save" /></td></tr>
					</form>
				</tbody>
				</table>
			</div>
		</div>
	<br /><br />
	<?php endforeach; endif; unset($_from); ?>
	<br clear="all" />
</div>

<div style="float: right; width: 49%"> 
<table width="100%">
<form method="post">
<input type="hidden" name="command" value="save_services" />
	<thead>
		<tr><th colspan="4">SMS Services</th></tr>
		<tr>
			<td>Service name</td>
			<td>Service cost</td>
			<td>Active</td>
			<td width="15">Edit</td>
		</tr>
	</thead>
	<tbody>
	<?php $_from = $this->_tpl_vars['service_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['service']):
?>
		<tr class="<?php echo smarty_function_cycle(array('values' => "tr_1,tr_2"), $this);?>
">
			<td><?php echo $this->_tpl_vars['service']['description']; ?>
</td>
			<td><input type="text" name="services[<?php echo $this->_tpl_vars['service']['service_key']; ?>
][cost]" value="<?php echo $this->_tpl_vars['service']['cost']; ?>
" /></td>
			<td><input type="checkbox" name="services[<?php echo $this->_tpl_vars['service']['service_key']; ?>
][active]" value="<?php echo $this->_tpl_vars['service']['active']; ?>
" class="flist_checkbox" <?php if ($this->_tpl_vars['service']['active']): ?>checked="checked"<?php endif; ?>></td>
			<td style="padding: 3px"><a href="<?php echo @URL_ADMIN; ?>
sms_billing.php?service=<?php echo $this->_tpl_vars['service']['service_key']; ?>
" class="open_forum_edit_cont" style="margin: 0 auto; float: none"></td>		
		</tr>
	<?php endforeach; endif; unset($_from); ?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="4"><input type="submit" value="Save" /></td>
		</tr>
	</tfoot>
</form>
</table>
<br />
<br />

<?php if ($this->_tpl_vars['service_info'] && $this->_tpl_vars['services_fields']): ?> 
<table width="100%">
<form method="post" action="<?php echo @URL_ADMIN; ?>
sms_billing.php?service=<?php echo $this->_tpl_vars['service_info']['service_key']; ?>
">
<input type="hidden" name="command" value="save_services_fields" />
	<thead>
		<tr><th colspan="4">SMS service "<?php echo $this->_tpl_vars['service_info']['description']; ?>
" configs</th></tr>
		<tr>
			<td>Config</td>
			<td>Value</td>
		</tr>
	</thead>
	<tbody>
		<?php $_from = $this->_tpl_vars['services_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sf']):
?>
			<tr class="<?php echo smarty_function_cycle(array('values' => "tr_1,tr_2"), $this);?>
">
				<td><?php echo $this->_tpl_vars['sf']['description']; ?>
</td>
				<td>
				<?php if ($this->_tpl_vars['sf']['type'] == 'text'): ?>
					<input id="field_<?php echo $this->_tpl_vars['sf']['sms_provider_id']; ?>
_<?php echo $this->_tpl_vars['sf']['field_name']; ?>
" type="text" name="sf[<?php echo $this->_tpl_vars['sf']['field_name']; ?>
]" value="<?php echo $this->_tpl_vars['sf']['value']; ?>
" />
				<?php elseif ($this->_tpl_vars['sf']['type'] == 'password'): ?>
					<input id="field_<?php echo $this->_tpl_vars['sf']['sms_provider_id']; ?>
_<?php echo $this->_tpl_vars['sf']['field_name']; ?>
" type="password" name="sf[<?php echo $this->_tpl_vars['sf']['field_name']; ?>
]" value="<?php echo $this->_tpl_vars['sf']['value']; ?>
" />
				<?php elseif ($this->_tpl_vars['sf']['type'] == 'checkbox'): ?>
					<input type="hidden" name="sf[<?php echo $this->_tpl_vars['sf']['field_name']; ?>
]" value="" />
					<input id="field_<?php echo $this->_tpl_vars['sf']['sms_provider_id']; ?>
_<?php echo $this->_tpl_vars['sf']['field_name']; ?>
" type="checkbox" name="sf[<?php echo $this->_tpl_vars['sf']['field_name']; ?>
]" <?php if ($this->_tpl_vars['sf']['value']): ?>checked="checked"<?php endif; ?> />
				<?php endif; ?>
				</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	</tbody>
	<tfoot>
		<tr><td colspan="2"><input type="submit" value="Save" /></td></tr>
	</tfoot>
</form>
</table>
<?php endif; ?>
</div>
<br />

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>