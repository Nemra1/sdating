<?php /* Smarty version 2.6.27, created on 2013-07-13 11:50:49
         compiled from membership_type_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_page', 'membership_type_list.html', 4, false),array('function', 'cycle', 'membership_type_list.html', 25, false),array('function', 'highlight', 'membership_type_list.html', 25, false),array('function', 'text', 'membership_type_list.html', 38, false),array('function', 'edit_lang_values_btn', 'membership_type_list.html', 39, false),array('function', 'print_configs', 'membership_type_list.html', 60, false),array('function', 'add_lang_values_input', 'membership_type_list.html', 146, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<form action="<?php echo @URL_ADMIN; ?>
membership_type_list.php" method="POST" name="membership_types_list">
<input type="hidden" name="command" value="default_membership_type" />
<table cellspacing="1" align="left" width="100%">
	<thead>
		<tr>
			<th id="membership_types_title_thead" colspan="7">Membership types</th>
		</tr>
		<tr>
			<td width="7%">&nbsp;</td>
			<td id="membership_types_name_thead_cell" width="19%">Name</td>
			<td id="membership_types_description_thead_cell" width="34%">Description</td>
			<td id="membership_types_type_thead_cell" width="11%">Type</td>
			<td id="membership_types_limit_thead_cell"	width="9%">Period</td>
			<td id="membership_types_default_thead_cell" width="7%">Set as Default</td>
			<td width="13%">Available for</td>
		</tr>
	</thead>
	<tbody>
	<?php $_from = $this->_tpl_vars['mship_type_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['membership_type_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['membership_type_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['membership_type']):
        $this->_foreach['membership_type_list']['iteration']++;
?>
		<tr class="<?php if ($this->_tpl_vars['membership_type']['membership_type_id'] == $this->_tpl_vars['membership_type_id']): ?>selected_cp<?php else: ?><?php echo smarty_function_cycle(array('values' => 'tr_1_cp,tr_2_cp'), $this);?>
<?php endif; ?>" <?php echo $this->_plugins['function']['highlight'][0][0]->FrontendHighlight(array(), $this);?>
>
			<td>
				<?php if (! ($this->_foreach['membership_type_list']['iteration'] <= 1)): ?>
					<a class="arr_up" href="<?php echo @URL_ADMIN; ?>
membership_type_list.php?membership_type_id=<?php echo $this->_tpl_vars['membership_type']['membership_type_id']; ?>
&move_order=up"></a>
				<?php else: ?>
					<div class="arr_up_i"></div>
				<?php endif; ?>
				<?php if (! ($this->_foreach['membership_type_list']['iteration'] == $this->_foreach['membership_type_list']['total'])): ?>
					<a class="arr_down" href="<?php echo @URL_ADMIN; ?>
membership_type_list.php?membership_type_id=<?php echo $this->_tpl_vars['membership_type']['membership_type_id']; ?>
&move_order=down"></a>
				<?php else: ?>
					<div class="arr_down_i"></div>
				<?php endif; ?>
			</td>
			<td onclick="window.location.href='membership_type.php?membership_type_id=<?php echo $this->_tpl_vars['membership_type']['membership_type_id']; ?>
'"><?php echo $this->_plugins['function']['text'][0][0]->tpl_Text(array('section' => "membership.types",'key' => $this->_tpl_vars['membership_type']['membership_type_id']), $this);?>
</td>
			<td><?php echo $this->_plugins['function']['edit_lang_values_btn'][0][0]->tpl_EditLangKey(array('section' => "membership.types.desc",'key' => $this->_tpl_vars['membership_type']['membership_type_id']), $this);?>
</td>
			<td><?php if ($this->_tpl_vars['membership_type']['membership_type_id'] != 1): ?><?php echo $this->_tpl_vars['membership_type']['type']; ?>
<?php else: ?>guest<?php endif; ?></td>
			<td><?php if ($this->_tpl_vars['membership_type']['membership_type_id'] != 1): ?><?php echo $this->_tpl_vars['membership_type']['limit']; ?>
<?php endif; ?></td>
			<td align="center">
				<?php if ($this->_tpl_vars['membership_type']['type'] == subscription && $this->_tpl_vars['membership_type']['limit'] == unlimited && $this->_tpl_vars['membership_type']['membership_type_id'] != 1): ?> 
				<input type="radio" name="default_membership_type_id" value="<?php echo $this->_tpl_vars['membership_type']['membership_type_id']; ?>
"<?php if ($this->_tpl_vars['membership_type']['membership_type_id'] == $this->_tpl_vars['def_mem_type']): ?> checked<?php endif; ?> onchange="javascript: membership_types_list.submit()" />
				<?php endif; ?>
			</td>
			<td align="center">
				<?php $_from = $this->_tpl_vars['membership_type']['available_for_sex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['available_for'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['available_for']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sex_id']):
        $this->_foreach['available_for']['iteration']++;
?>
					<?php echo $this->_plugins['function']['text'][0][0]->tpl_Text(array('section' => "profile_fields.value",'key' => "sex_".($this->_tpl_vars['sex_id'])), $this);?>
<?php if (! ($this->_foreach['available_for']['iteration'] == $this->_foreach['available_for']['total'])): ?>,<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			</td>
		</tr>
	<?php endforeach; endif; unset($_from); ?>
	</tbody>
</table>
</form>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php echo adminConfig::FrontendPrintConfig(array('section' => 'site.additional.subscribe'), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<div style="width: 39%; float: left;">
<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<form action="" method="POST">
<input type="hidden" name="command" value="default_reg_membership_type" />
<table width="100%">
	<thead>
		<tr>
			<th id="membership_types_given_on_registration_thead" colspan="2">Given on registration</th>
		</tr>
		<tr>
			<td>Sex</td>
			<td>Membership type</td>
		</tr>
	</thead>
	<tbody>
		<?php $_from = $this->_tpl_vars['given_on_reg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_sex_id'] => $this->_tpl_vars['_sex']):
?>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
" align="center">
			<td width="40%"><?php echo $this->_plugins['function']['text'][0][0]->tpl_Text(array('section' => "profile_fields.value",'key' => "sex_".($this->_tpl_vars['_sex_id'])), $this);?>
</td>
			<td>
				<select name="given_on_reg[<?php echo $this->_tpl_vars['_sex_id']; ?>
]">
					<?php $_from = $this->_tpl_vars['_sex']['membership_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_membership_type_id']):
?>
						<option value="<?php echo $this->_tpl_vars['_membership_type_id']; ?>
" <?php if ($this->_tpl_vars['_sex']['default'] == $this->_tpl_vars['_membership_type_id']): ?> selected<?php endif; ?>><?php echo $this->_plugins['function']['text'][0][0]->tpl_Text(array('section' => "membership.types",'key' => $this->_tpl_vars['_membership_type_id']), $this);?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="2"><input type="submit" value="Update" /></td>
		</tr>
	</tfoot>
</table>
</form>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div style="width: 58%; float: right;">
<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="membership_expiration">
    <?php echo adminConfig::FrontendPrintConfig(array('section' => 'membership.expiration'), $this);?>

</div>
<div>
    <table>
    <thead>
        <tr><td colspan="2">Membership expiration email templates</td></tr>
    </thead>
    <tbody>
        <tr class="tr_1">
            <td>Subject</td>
            <td><?php echo $this->_plugins['function']['edit_lang_values_btn'][0][0]->tpl_EditLangKey(array('section' => 'mail_template','key' => 'membership_expiration_notification_subject'), $this);?>
</td>    
        </tr>
        <tr class="tr_2">
            <td>Body (HTML)</td>
            <td><?php echo $this->_plugins['function']['edit_lang_values_btn'][0][0]->tpl_EditLangKey(array('section' => 'mail_template','key' => 'membership_expiration_notification_body_html'), $this);?>
</td>    
        </tr>
        <tr class="tr_1">
            <td>Body (TXT)</td>
            <td><?php echo $this->_plugins['function']['edit_lang_values_btn'][0][0]->tpl_EditLangKey(array('section' => 'mail_template','key' => 'membership_expiration_notification_body_txt'), $this);?>
</td>    
        </tr>
    </tbody>
    </table>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<br clear="all" />


<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<form action="<?php echo @URL_ADMIN; ?>
membership_type_list.php" method="POST" name="creat_membership_type">
<table width="100%">
	<thead>
		<tr>
			<th id="membership_types_create_membership_type_thead" colspan="2">Create a new membership type</th>
		</tr>
		<tr>
			<td width="40%" id="membership_types_create_membership_type_name_cell" width="50%"> Name </td>
			<td width="60%" id="membership_types_create_membership_type_description_cell" class="thead_td">Description</td>
		</tr>
	</thead>
	<tbody>
		<tr class="tr_2">
			<td><?php echo $this->_plugins['function']['add_lang_values_input'][0][0]->tpl_AddLangKeyInput(array('name' => 'membership_name'), $this);?>
</td>
			<td><?php echo $this->_plugins['function']['add_lang_values_input'][0][0]->tpl_AddLangKeyInput(array('name' => 'membership_description'), $this);?>
</td>
		</tr>
	</tbody>
</table>

<table width="100%">
	<thead>
		<tr>
			<td id="membership_types_create_membership_type_type_cell" width="25%"> Type </td>
			<td id="membership_types_create_membership_type_limit_cell" width="25%"> Limit </td>
			<td>Available for</td>
		</tr>
	</thead>
	<tbody>
		<tr class="tr_2" style="vertical-align: top">
			<td width="33%">
				<label><input type="radio" id="subscription" name="membership_type" value="subscription" checked /> subscription</label><br />
				<label><input type="radio" name="membership_type" value="trial" onclick="document.getElementById('limited').checked=true" /> trial</label>
			</td>
			<td width="33%">
				<label><input type="radio" name="membership_limit" id="limited" value="limited" checked /> limited</label><br />
				<label><input type="radio" name="membership_limit" value="unlimited" onclick="document.getElementById('subscription').checked=true" /> unlimited</label>  
			</td>
			<td width="33%">
				<?php $_from = $this->_tpl_vars['field_sex']->values; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
					<label><input type="checkbox" name="available_for[]" value="<?php echo $this->_tpl_vars['value']; ?>
" /> <?php echo $this->_plugins['function']['text'][0][0]->tpl_Text(array('section' => "profile_fields.value",'key' => ($this->_tpl_vars['field_sex']->name)."_".($this->_tpl_vars['value'])), $this);?>
</label><br />
				<?php endforeach; endif; unset($_from); ?>
			</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="3" align="right"><input type="submit" class="submit" name="creat_membership" value="Create" /></td>
		</tr>
	</tfoot>
</table>

</form>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>


<!-- <td id="membership_types_create_membership_type_type_cell" width="25%"> Type </td>
<td id="membership_types_create_membership_type_limit_cell" width="25%"> Limit </td>


<form action="<?php echo @URL_ADMIN; ?>
membership_type_list.php" method="POST" name="creat_membership_type">
<table cellspacing="1" align="left" width="100%">
			
			<td></td>
			<td id="membership_types_create_membership_type_available_for_cell" class="thead_td" align="center">
				
			</td>
		</tr>
	</tbody> 
</table>
</form>
-->


<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table width="100%">
	<thead>
		<tr>
			<td width="45%">Description</td>
			<td width="35%">Your plan structure</td>
			<td width="20%">Sample</td>
		</tr>
	</thead>
	<tbody>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
			<td id="membership_types_plan_template_single_cell">This plan structure used on subscribe page for single payments' plans</td>
			<td><?php echo $this->_plugins['function']['edit_lang_values_btn'][0][0]->tpl_EditLangKey(array('section' => 'membership','key' => 'plan_structure'), $this);?>
</td>
			<td><?php echo $this->_tpl_vars['sample_plan']['single']; ?>
</td>
		</tr>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
			<td id="membership_types_plan_template_recurring_cell">This plan structure used on subscribe page for recurring payments' plans</td>
			<td><?php echo $this->_plugins['function']['edit_lang_values_btn'][0][0]->tpl_EditLangKey(array('section' => 'membership','key' => 'plan_structure_recurring'), $this);?>
</td>
			<td><?php echo $this->_tpl_vars['sample_plan']['recurring']; ?>
</td>
		</tr>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
			<td id="membership_types_plan_template_trial_cell">This plan structure used on subscribe page for free trial plans</td>
			<td><?php echo $this->_plugins['function']['edit_lang_values_btn'][0][0]->tpl_EditLangKey(array('section' => 'membership','key' => 'plan_structure_free_trial'), $this);?>
</td>
			<td><?php echo $this->_tpl_vars['sample_plan']['free_trial']; ?>
</td>
		</tr>
	</tbody>
</table>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<br clear="all" />

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>