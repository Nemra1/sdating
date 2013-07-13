<?php /* Smarty version 2.6.27, created on 2013-07-13 12:05:26
         compiled from inc/_config_tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'inc/_config_tpl.html', 24, false),array('modifier', 'strip', 'inc/_config_tpl.html', 59, false),)), $this); ?>
<?php echo $this->_tpl_vars['js_checker']['body']; ?>


<script>
	<?php echo $this->_tpl_vars['additional_js']; ?>

</script>

<form action="<?php echo $_SERVER['REQUEST_URI']; ?>
" method="POST" onsubmit="return <?php echo $this->_tpl_vars['js_checker']['name']; ?>
(this)" >
<input type="hidden" name="section" value="<?php echo $this->_tpl_vars['section_name']; ?>
">
<?php if ($this->_tpl_vars['exclude']): ?>
    <input type="hidden" name="exclude" value="<?php echo $this->_tpl_vars['exclude']; ?>
" />
<?php endif; ?>
<table align="left" cellpadding="0" cellspacing="0" width="99%">
	<thead>
		<?php if ($this->_tpl_vars['section_label']): ?>
		<tr>
			<td colspan="2"><?php echo $this->_tpl_vars['section_label']; ?>
</td>
		</tr>
		<?php endif; ?>
	</thead>
	<tbody>
		<?php $_from = $this->_tpl_vars['configs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['config_info']):
?>
			<?php if ($this->_tpl_vars['config_info']['presentation'] != 'hidden'): ?>
				<?php if ($this->_tpl_vars['config_info']['presentation'] == text): ?>
					<tr class="<?php echo smarty_function_cycle(array('values' => "tr_1, tr_2"), $this);?>
">
						<td colspan="2">
							<textarea name="<?php echo $this->_tpl_vars['config_info']['name']; ?>
" class="text_presentation"><?php echo $this->_tpl_vars['config_info']['value']; ?>
</textarea>
						</td>
					</tr>
				<?php else: ?>
					<tr class="<?php echo smarty_function_cycle(array('values' => "tr_1, tr_2"), $this);?>
">
						<td class="config_description">
							<?php echo $this->_tpl_vars['config_info']['description']; ?>

						</td>
						<td class="config_value<?php if ($this->_tpl_vars['config_info']['invalidated']): ?> config_invalid<?php endif; ?>" >
						<?php if (in_array ( $this->_tpl_vars['config_info']['presentation'] , array ( 'varchar' ) )): ?>
							<input type="text" name="<?php echo $this->_tpl_vars['config_info']['name']; ?>
" value="<?php echo $this->_tpl_vars['config_info']['value']; ?>
" class="input_text" />
						<?php elseif (in_array ( $this->_tpl_vars['config_info']['presentation'] , array ( 'float' , 'integer' ) )): ?>
							<div style="float: left">
								<input type="text" size="10" name="<?php echo $this->_tpl_vars['config_info']['name']; ?>
" class="<?php echo $this->_tpl_vars['config_info']['presentation']; ?>
_config" value="<?php echo $this->_tpl_vars['config_info']['value']; ?>
" class="input_text" />
							</div>
							<div class="controls" style="float: left; width: 11px; height: 20px">
								<a class="up increase_btn"></a>
								<a class="down decrease_btn"></a>
							</div>
						<?php elseif ($this->_tpl_vars['config_info']['presentation'] == checkbox): ?>
							<input type="checkbox" value='1' name="<?php echo $this->_tpl_vars['config_info']['name']; ?>
" <?php if ($this->_tpl_vars['config_info']['value']): ?>checked<?php endif; ?> />
						<?php elseif ($this->_tpl_vars['config_info']['presentation'] == select): ?>
							<select name="<?php echo $this->_tpl_vars['config_info']['name']; ?>
">
							<?php $_from = $this->_tpl_vars['config_info']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value_info']):
?>
								<option value="<?php echo $this->_tpl_vars['value_info']['value']; ?>
" <?php if ($this->_tpl_vars['value_info']['value'] == $this->_tpl_vars['config_info']['value']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['value_info']['label']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
							</select>
						<?php elseif ($this->_tpl_vars['config_info']['presentation'] == 'palette'): ?>
						
							<div id="<?php echo $this->_tpl_vars['config_info']['name']; ?>
_palette_cont">
								<?php echo '<script>$jq(\'#'; ?><?php echo $this->_tpl_vars['config_info']['name']; ?><?php echo '_palette_cont\').ready(function()'; ?>{<?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['config_info']['js_definition'])) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)); ?><?php echo ''; ?>}<?php echo ');</script>'; ?>

								<input name="<?php echo $this->_tpl_vars['config_info']['name']; ?>
" type="hidden" value="<?php echo $this->_tpl_vars['config_info']['value']; ?>
" />
								<div style="float:left;">
									<center>Available:</center>
									<select class="admissible_values" multiple="" size="6" style="width: 100px;" onclick="<?php echo $this->_tpl_vars['config_info']['name']; ?>
_palette.selectedNodeDeselect();" ></select>
								</div>
								
								<div style="float:left; height: 100px; padding-top: 13px;">
									<img style="border: 1px solid #354A5F; margin: 2px 2px 1px 2px;" src="<?php echo @URL_ADMIN_IMG; ?>
right.png" onclick="<?php echo $this->_tpl_vars['config_info']['name']; ?>
_palette.move2selected();"></img><br />
									<img style="border: 1px solid #354A5F; margin: 1px 2px;" src="<?php echo @URL_ADMIN_IMG; ?>
left.png" onclick="<?php echo $this->_tpl_vars['config_info']['name']; ?>
_palette.move2available();"></img><br />
									<img style="border: 1px solid #354A5F; margin: 1px 2px;" src="<?php echo @URL_ADMIN_IMG; ?>
up.png" onclick="<?php echo $this->_tpl_vars['config_info']['name']; ?>
_palette.moveUp();" ></img><br />
									<img style="border: 1px solid #354A5F; margin: 1px 2px;" src="<?php echo @URL_ADMIN_IMG; ?>
down.png" onclick="<?php echo $this->_tpl_vars['config_info']['name']; ?>
_palette.moveDown();"></img><br />
								</div>
								<div style="float:left;">
									<center>Selected:</center>
									<select class="selected_values" multiple="" size="6" style="width: 100px; float:left;" onclick="(<?php echo $this->_tpl_vars['config_info']['name']; ?>
_palette)//.availableNodeDeselect()"></select>							
								</div>
							</div>
						<?php elseif ($this->_tpl_vars['config_info']['presentation'] == 'color'): ?>
							<?php echo '<script>$jq(document).ready(function()'; ?>{<?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['config_info']['js_definition'])) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)); ?><?php echo ''; ?>}<?php echo ');</script>'; ?>

							<div id="pc-<?php echo $this->_tpl_vars['config_info']['name']; ?>
">
								<span class="text_formatter">
									<div class="color_picker_input">#<input type="text" maxlength="6" size="6" name="<?php echo $this->_tpl_vars['config_info']['name']; ?>
" /></div>
									<a href="javascript://" id="id-<?php echo $this->_tpl_vars['config_info']['name']; ?>
" class="color_p_btn"></a>
									<br clear="all" />
								</span>	
								
								<div style="position: relative;">
									<div class="color_picker" style="display: none;">
										<?php $_from = $this->_tpl_vars['config_info']['colors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['color']):
?>
											<div class="color_col" title="<?php echo $this->_tpl_vars['color']; ?>
" style="background-color: #<?php echo $this->_tpl_vars['color']; ?>
"></div>
										<?php endforeach; endif; unset($_from); ?>
									</div>
								</div>
							</div>
						<?php endif; ?>			
						</td>
					</tr>
				<?php endif; ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		</tbody>
	<tfoot>
		<tr>
			<td colspan="2">
				<input type="submit" name="save_configs" value="Save" class="submit"/>
			</td>
		</tr>
	</tfoot>
</table>
</form>
<br clear="all">	

	