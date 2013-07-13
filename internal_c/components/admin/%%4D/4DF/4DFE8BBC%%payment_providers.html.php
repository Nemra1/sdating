<?php /* Smarty version 2.6.27, created on 2013-07-13 11:51:44
         compiled from payment_providers.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_page', 'payment_providers.html', 5, false),array('function', 'edit_lang_values_btn', 'payment_providers.html', 42, false),array('function', 'html_options', 'payment_providers.html', 52, false),array('function', 'text', 'payment_providers.html', 57, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div style="width: 743px;">
	<?php $_from = $this->_tpl_vars['provider_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['provider']):
?>
   
                
		<form enctype="multipart/form-data" id="provider_form_<?php echo $this->_tpl_vars['provider']['fin_payment_provider_id']; ?>
" action="" method="POST">
		<input type="hidden" name="command" value="save" />
		<input type="hidden" name="provider_id" value="<?php echo $this->_tpl_vars['provider']['fin_payment_provider_id']; ?>
" />
		<input type="hidden" name="status" value="<?php if ($this->_tpl_vars['provider']['status'] == 'active'): ?>active<?php else: ?>inactive<?php endif; ?>" />
		<div style="border: 1px solid #BFBFBF; margin: 12px 2px;">
		
			<div class="div_2" style="padding: 3px; border-bottom: 1px solid #CFCFCF; font-weight: bold; font-size: 12px; cursor: pointer;" onclick="showProviderFields( '<?php echo $this->_tpl_vars['provider']['fin_payment_provider_id']; ?>
' );">
				<div style="float: left;">
				<?php if ($this->_tpl_vars['provider']['status'] == 'active'): ?><span style="color: #0BCF00; font-size: 10px;">ACTIVATED</span>
				<?php elseif ($this->_tpl_vars['provider']['is_available'] == 'n'): ?><span style="color: #ff0000; font-size: 10px;">NOT AVAILABLE</span><?php endif; ?>
				<?php echo $this->_tpl_vars['provider']['description']; ?>

				</div>
				<?php ob_start(); ?><?php echo $this->_tpl_vars['provider']['fin_payment_provider_id']; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('provId', ob_get_contents());ob_end_clean(); ?>
				<?php if (isset ( $this->_tpl_vars['manuals'][$this->_tpl_vars['provId']] )): ?><div style="float: right;"><a class="help_manual" title="Setup instructions" href="<?php echo $this->_tpl_vars['manuals'][$this->_tpl_vars['provId']]; ?>
" target="_blank"></a></div><?php endif; ?>
				<div class="clr"></div>
			</div>
		
			<div id="provider_<?php echo $this->_tpl_vars['provider']['fin_payment_provider_id']; ?>
" <?php if ($this->_tpl_vars['expanded'] == $this->_tpl_vars['provider']['fin_payment_provider_id']): ?><?php else: ?>style="display: none"<?php endif; ?>>
                
				<table style="width: 200px; float: left; margin: 5px;"><tbody>
					<tr>
						<td>Status</td>
						<td>
							<?php if ($this->_tpl_vars['provider']['is_available'] == 'n'): ?>
								Disabled
							<?php else: ?>
								<input type="button" value="<?php if ($this->_tpl_vars['provider']['status'] == 'active'): ?>Disable<?php else: ?>Activate<?php endif; ?>" onclick="activateProvider(this);" />
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td>Label</td>
						<td><?php echo $this->_plugins['function']['edit_lang_values_btn'][0][0]->tpl_EditLangKey(array('section' => 'components.payment_selection','key' => $this->_tpl_vars['provider']['fin_payment_provider_id']), $this);?>
</td>
					</tr>
					<tr>
						<td>Recurring payments</td>
						<td><?php if ($this->_tpl_vars['provider']['is_recurring'] == 'y'): ?>available<?php else: ?>not available<?php endif; ?></td>
					</tr>
					<tr>
						<td>Currency</td>
						<td>
							<select name="currency">
							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['provider']['currencies'],'selected' => $this->_tpl_vars['provider']['active_currency'],'output' => $this->_tpl_vars['provider']['currencies']), $this);?>

							</select>		
						</td>
					</tr>
					<tr>
						<td colspan="2"><?php echo $this->_plugins['function']['text'][0][0]->tpl_Text(array('key' => $this->_tpl_vars['provider']['fin_payment_provider_id'],'prefix' => 'payment_selection'), $this);?>
 icon on subscribe page:</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><img src="<?php echo @URL_USERFILES; ?>
<?php echo $this->_tpl_vars['provider']['icon']; ?>
" /></td>
					</tr>
					<?php if ($this->_tpl_vars['provider']['icon']): ?>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="Delete icon" onclick='$("provider_form_<?php echo $this->_tpl_vars['provider']['fin_payment_provider_id']; ?>
")[0].value="delete_icon";'/>
						</td>
					</tr>
					<?php endif; ?>					
					<tr>
						<td colspan="2">
							<input name="icon" type="file" class="input_file" />
						</td>
					</tr>
				</tbody></table>
				
				<table style="float: left; margin: 5px;"><tbody>
					<?php $_from = $this->_tpl_vars['provider']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
					<tr>
						<td><?php echo $this->_tpl_vars['field']['description']; ?>
</td>
						<td>
							<?php if ($this->_tpl_vars['field']['type'] == 'text'): ?>
								<input id="field_<?php echo $this->_tpl_vars['provider']['fin_payment_provider_id']; ?>
_<?php echo $this->_tpl_vars['field']['name']; ?>
" type="text" name="fields[<?php echo $this->_tpl_vars['field']['name']; ?>
]" value="<?php echo $this->_tpl_vars['field']['value']; ?>
" />
							<?php elseif ($this->_tpl_vars['field']['type'] == 'password'): ?>
								<input id="field_<?php echo $this->_tpl_vars['provider']['fin_payment_provider_id']; ?>
_<?php echo $this->_tpl_vars['field']['name']; ?>
" type="password" name="fields[<?php echo $this->_tpl_vars['field']['name']; ?>
]" value="<?php echo $this->_tpl_vars['field']['value']; ?>
" />
							<?php elseif ($this->_tpl_vars['field']['type'] == 'checkbox'): ?>
								<input type="hidden" name="fields[<?php echo $this->_tpl_vars['field']['name']; ?>
]" value="" />
								<input id="field_<?php echo $this->_tpl_vars['provider']['fin_payment_provider_id']; ?>
_<?php echo $this->_tpl_vars['field']['name']; ?>
" type="checkbox" name="fields[<?php echo $this->_tpl_vars['field']['name']; ?>
]" <?php if ($this->_tpl_vars['field']['value']): ?>checked="checked"<?php endif; ?> />
							<?php elseif ($this->_tpl_vars['field']['type'] == 'select'): ?>
								<select id="field_<?php echo $this->_tpl_vars['provider']['fin_payment_provider_id']; ?>
_<?php echo $this->_tpl_vars['field']['name']; ?>
" name="fields[<?php echo $this->_tpl_vars['field']['name']; ?>
]">
								<?php $_from = $this->_tpl_vars['field']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
									<option value="<?php echo $this->_tpl_vars['value']['value']; ?>
" <?php if ($this->_tpl_vars['value']['value'] == $this->_tpl_vars['field']['value']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['value']['label']; ?>
</option>
								<?php endforeach; endif; unset($_from); ?>
								</select>
							<?php endif; ?>
						</td>
					</tr>
					<?php endforeach; endif; unset($_from); ?>
				</tbody></table>
				<br clear="all" />
				<br clear="all" />
				
				<?php if ($this->_tpl_vars['provider']['is_required_plan_synchronizing'] == 'y'): ?>
				<div>
					<table style="margin: 5px;">
						<tr>
							<td colspan="2"><b>This provider requires site membership plans synchronization with your merchant account plans:</b></td>
						</tr>
						<?php $_from = $this->_tpl_vars['provider']['plans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plan']):
?>
						<tr>
							<td>
							<?php if ($this->_tpl_vars['plan']['type'] == 'credits'): ?>
								<?php echo $this->_tpl_vars['plan']['price']; ?>
 <?php echo $this->_plugins['function']['text'][0][0]->tpl_Text(array('prefix' => 'membership_type','key' => $this->_tpl_vars['plan']['membership_type_id']), $this);?>

							<?php elseif ($this->_tpl_vars['plan']['is_recurring'] == 'y'): ?>
								<?php echo $this->_tpl_vars['plan']['price']; ?>
 per <?php echo $this->_tpl_vars['plan']['period']; ?>
 <?php echo $this->_tpl_vars['plan']['units']; ?>
 <?php echo $this->_plugins['function']['text'][0][0]->tpl_Text(array('prefix' => 'membership_type','key' => $this->_tpl_vars['plan']['membership_type_id']), $this);?>

							<?php else: ?>
								<?php echo $this->_tpl_vars['plan']['price']; ?>
 for <?php echo $this->_tpl_vars['plan']['period']; ?>
 <?php echo $this->_tpl_vars['plan']['units']; ?>
 <?php echo $this->_plugins['function']['text'][0][0]->tpl_Text(array('prefix' => 'membership_type','key' => $this->_tpl_vars['plan']['membership_type_id']), $this);?>

							<?php endif; ?>
							</td>
							<td>
								<input type="text" name="plans[<?php echo $this->_tpl_vars['plan']['membership_type_plan_id']; ?>
]" value="<?php echo $this->_tpl_vars['plan']['provider_plan_id']; ?>
" />
							</td>
						</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
				</div>
				
                <div>
                    <table style="margin: 5px;">
                        <tr>
                            <td colspan="2"><b>This provider requires site Points Packages synchronization with your merchant account products:</b></td>
                        </tr>
                        <?php $_from = $this->_tpl_vars['provider']['packages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p']):
?>
                        <tr>
                            <td>
                                <?php echo $this->_tpl_vars['p']['points']; ?>
 points for <?php echo $this->_tpl_vars['curr']; ?>
<?php echo $this->_tpl_vars['p']['price']; ?>
 
                            </td>
                            <td>
                                <input type="text" name="packages[<?php echo $this->_tpl_vars['p']['package_id']; ?>
]" value="<?php echo $this->_tpl_vars['p']['product_id']; ?>
" />
                            </td>
                        </tr>
                        <?php endforeach; endif; unset($_from); ?>
                    </table>
                </div>
				
				<?php endif; ?>
				
				<?php if ($this->_tpl_vars['provider']['is_available'] == 'y'): ?>
					<div style="text-align: center; margin: 5px; margin-top: 0px;"><input type="submit" value="Save" /></div>
				<?php endif; ?>
			</div>
            

		</div>
		</form>
                   

	<?php endforeach; endif; unset($_from); ?>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<br clear="all" />

<table width="30%">
	<tbody>
		<tr>
			<td id="payment_providers_currency_sign_cell">Currency sign:</td>
			<td width="30%"><?php echo $this->_plugins['function']['edit_lang_values_btn'][0][0]->tpl_EditLangKey(array('section' => 'label','key' => 'currency_sign'), $this);?>
</td>
		</tr>
	</tbody>
</table>

<br clear="all" />
<br clear="all" />
<!-- 
<table>
	<tbody>
		<tr>
			<td><font style="color: #ff0000; font-weight: bold; font-size: 10px;">NOT AVAILABLE</font> - Contact Skadate support team to activate these payment providers</td>
		</tr>
	</tbody>
</table>
<div> -->
	
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>