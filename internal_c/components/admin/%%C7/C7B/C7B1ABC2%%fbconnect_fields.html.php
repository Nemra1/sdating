<?php /* Smarty version 2.6.27, created on 2013-07-13 11:55:52
         compiled from fbconnect_fields.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_page', 'fbconnect_fields.html', 3, false),array('function', 'cycle', 'fbconnect_fields.html', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<form method="POST">
<table width="100%">
	<thead>
		<tr>
			<th colspan="2">Profile Questions Synchronization</th>
		</tr>
		<tr>
			<td align="center">Profile Fields</td>
			<td align="center">Facebook Fields</td>
		</tr>
	</thead>
	<tbody>
		<?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['prField'] => $this->_tpl_vars['fbFields']):
?>
			<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
				<td align="center"><?php echo $this->_tpl_vars['prField']; ?>
</td>
				<td align="center">
					<?php if (count ( $this->_tpl_vars['fbFields'] ) > 1): ?>
						<select name="fields[<?php echo $this->_tpl_vars['prField']; ?>
]">
							<option value="">Select</option>
							<?php $_from = $this->_tpl_vars['fbFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fbField']):
?>
								<option value="<?php echo $this->_tpl_vars['fbField']; ?>
" <?php if ($this->_tpl_vars['aliases'][$this->_tpl_vars['prField']] == $this->_tpl_vars['fbField']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['fbField']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					<?php else: ?>
						<?php echo $this->_tpl_vars['fbFields']['0']; ?>

					<?php endif; ?>
				</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	</tbody>
	<tfoot>
		<tr>
        	<td></td>
			<td colspan="2">
				<input type="submit" value="Save" name="save" />
			</td>
		</tr>
	</tfoot>
</table>
</form>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<form method="POST">
<table width="100%">
	<thead>
		<tr>
			<th colspan="2">Gender field settings</th>
		</tr>
		<tr>
			<td align="center">Facebook gender</td>
			<td align="center">Site gender</td>
		</tr>
	</thead>
	<tbody>
            <tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
                <td align="center">male</td>
                <td align="center">
                    <select name="sexV[male]">
                    <?php $_from = $this->_tpl_vars['sexValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value'] => $this->_tpl_vars['label']):
?>
                        <option value="<?php echo $this->_tpl_vars['value']; ?>
" <?php if ($this->_tpl_vars['value'] == $this->_tpl_vars['sexAliasing']['male']): ?>selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['label']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                    </select>
                </td>
            </tr>
            <tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
                <td align="center">female</td>
                <td align="center">
                    <select name="sexV[female]">
                        <?php $_from = $this->_tpl_vars['sexValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value'] => $this->_tpl_vars['label']):
?>
                            <option value="<?php echo $this->_tpl_vars['value']; ?>
" <?php if ($this->_tpl_vars['value'] == $this->_tpl_vars['sexAliasing']['female']): ?>selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['label']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                </td>
            </tr>
	</tbody>
	<tfoot>
		<tr>
        	<td></td>
			<td colspan="2">
				<input type="submit" value="Save" name="save_sex_v" />
			</td>
		</tr>
	</tfoot>
</table>
</form>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<br clear="all" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>