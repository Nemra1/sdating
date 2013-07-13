<?php /* Smarty version 2.6.27, created on 2013-07-13 11:50:12
         compiled from profile_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_page', 'profile_list.html', 5, false),array('block', 'block_popup', 'profile_list.html', 19, false),array('block', 'make_url', 'profile_list.html', 59, false),array('function', 'cycle', 'profile_list.html', 67, false),array('function', 'highlight', 'profile_list.html', 67, false),array('function', 'text', 'profile_list.html', 85, false),array('modifier', 'truncate', 'profile_list.html', 73, false),array('modifier', 'date_format', 'profile_list.html', 79, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<div class="profile_list_result_nav">
	Results: <?php echo $this->_tpl_vars['db_results']; ?>
 |
	Total: <?php echo $this->_tpl_vars['total_results_num']; ?>
 |
	Results per page: <?php echo $this->_tpl_vars['rpp_select']; ?>

</div>

<div class="profile_list_page_nav">
Pages: <?php echo $this->_tpl_vars['navigation_pages']; ?>

</div>

<a href="javascript://" onclick="show_node('popup_fields')"><b>Customize</b></a>

<?php $this->_tag_stack[] = array('block_popup', array('title' => 'Select fields to be displayed in profile list','width' => 400,'left' => 0,'node' => 'popup_fields')); $_block_repeat=true;$this->_plugins['block']['block_popup'][0][0]->tpl_BlockPopup($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>
">
<table width="100%">
	<thead>
		<tr>
			<td width="50%">Base fields</td><td width="50%">Extended fields</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
			<?php $_from = $this->_tpl_vars['default_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
				<input type="checkbox" name="fields_arr[]" class="checkbox" value="<?php echo $this->_tpl_vars['field']['name']; ?>
" id="field_<?php echo $this->_tpl_vars['field']['name']; ?>
" <?php if ($this->_tpl_vars['field']['checked'] == 'yes' || $this->_tpl_vars['field']['checked'] == 'always'): ?> checked="checked"<?php endif; ?> <?php if ($this->_tpl_vars['field']['checked'] == 'always'): ?>disabled="disabled"<?php endif; ?> /> <label for="field_<?php echo $this->_tpl_vars['field']['name']; ?>
"><?php echo $this->_tpl_vars['field']['name']; ?>
</label><br />
			<?php endforeach; endif; unset($_from); ?>
			</td>
			<td>
			<?php $_from = $this->_tpl_vars['extend_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
				<input type="checkbox" name="fields_arr[]" class="checkbox" value="<?php echo $this->_tpl_vars['field']['name']; ?>
" id="field_<?php echo $this->_tpl_vars['field']['name']; ?>
" <?php if ($this->_tpl_vars['field']['checked'] == 'yes'): ?> checked="checked"<?php endif; ?> /> <label for="field_<?php echo $this->_tpl_vars['field']['name']; ?>
"><?php echo $this->_tpl_vars['field']['name']; ?>
</label><br />
			<?php endforeach; endif; unset($_from); ?>
			</td>
		</tr>
	</tbody>
	<tfoot>
		<tr><td colspan="2"><input type="submit" name="update_fields" value="Save" class="submit" /></td></tr>
	</tfoot>
</table>
</form>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_popup'][0][0]->tpl_BlockPopup($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<br /><br />

<form name="profiles" action="<?php echo $_SERVER['REQUEST_URI']; ?>
" method="POST">
<input type="hidden" name="action" id="action" value="" />
<div style="overflow-x:auto; width: 758px;">
<table width="100%">
	<thead>
		<tr><th colspan="<?php echo $this->_tpl_vars['field_count']; ?>
">Profile List</th></tr>
		<tr>
			<td></td>
			<?php $_from = $this->_tpl_vars['checked_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_f'] => $this->_tpl_vars['_fl']):
?>
			<td><?php echo '<a href="'; ?><?php $this->_tag_stack[] = array('make_url', array()); $_block_repeat=true;getURL($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '_sf='; ?><?php echo $this->_tpl_vars['_fl']; ?><?php echo '&_so='; ?><?php if ($this->_tpl_vars['sort_field'] == $this->_tpl_vars['_fl']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['sort_order'] == 'asc'): ?><?php echo 'desc'; ?><?php elseif ($this->_tpl_vars['sort_order'] == 'desc'): ?><?php echo 'asc'; ?><?php else: ?><?php echo 'asc'; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo 'asc'; ?><?php endif; ?><?php echo ''; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo getURL($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '">'; ?>
<?php echo $this->_tpl_vars['_fl']; ?>
</a><?php if ($this->_tpl_vars['sort_field'] == $this->_tpl_vars['_fl']): ?> <img src="img/<?php if ($this->_tpl_vars['sort_order'] == 'asc'): ?>arr_up<?php elseif ($this->_tpl_vars['sort_order'] == 'desc'): ?>arr_down<?php endif; ?>.gif" /><?php endif; ?></td>
			<?php endforeach; endif; unset($_from); ?>
		</tr>
	</thead>

	<tbody>
	<?php $_from = $this->_tpl_vars['profiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_id'] => $this->_tpl_vars['_profile']):
?>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
" <?php echo $this->_plugins['function']['highlight'][0][0]->FrontendHighlight(array(), $this);?>
>
			<td class="chbox_container"><input name="profiles_arr[]" type="checkbox" class="checkbox" value="<?php echo $this->_tpl_vars['_profile']['fields'][0]['profile_id']; ?>
" /></td>
			<?php $_from = $this->_tpl_vars['checked_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_f'] => $this->_tpl_vars['_fl']):
?>
            			<?php if ($this->_tpl_vars['_fl'] == 'reviewed' || $this->_tpl_vars['_fl'] == 'has_photo' || $this->_tpl_vars['_fl'] == 'has_media' || $this->_tpl_vars['_fl'] == 'featured' || $this->_tpl_vars['_fl'] == 'has_music' || $this->_tpl_vars['_fl'] == 'i_agree_with_tos' || $this->_tpl_vars['_fl'] == 'i_am_at_least_18_years_old'): ?>
					<td <?php if ($this->_tpl_vars['_profile']['fields'][$this->_tpl_vars['_f']][$this->_tpl_vars['_fl']] == 'y' || $this->_tpl_vars['_profile']['fields'][$this->_tpl_vars['_f']][$this->_tpl_vars['_fl']] == 1): ?>class="td_mark"<?php endif; ?>>&nbsp;</td>
				<?php elseif ($this->_tpl_vars['_fl'] == 'username'): ?>
					<td><a href="<?php echo $this->_tpl_vars['_profile']['href']; ?>
" title="<?php echo $this->_tpl_vars['_profile']['fields'][$this->_tpl_vars['_f']][$this->_tpl_vars['_fl']]; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['_profile']['fields'][$this->_tpl_vars['_f']][$this->_tpl_vars['_fl']])) ? $this->_run_mod_handler('truncate', true, $_tmp, 15) : smarty_modifier_truncate($_tmp, 15)); ?>
</a></td>
				<?php elseif ($this->_tpl_vars['_fl'] == 'status'): ?>
					<td class="profile_status_<?php echo $this->_tpl_vars['_profile']['fields'][$this->_tpl_vars['_f']][$this->_tpl_vars['_fl']]; ?>
"><?php echo $this->_tpl_vars['_profile']['fields'][$this->_tpl_vars['_f']][$this->_tpl_vars['_fl']]; ?>
</td>
				<?php elseif ($this->_tpl_vars['_fl'] == 'email_verified'): ?>
					<td class="email_verified_<?php echo $this->_tpl_vars['_profile']['fields'][$this->_tpl_vars['_f']][$this->_tpl_vars['_fl']]; ?>
"><?php echo $this->_tpl_vars['_profile']['fields'][$this->_tpl_vars['_f']][$this->_tpl_vars['_fl']]; ?>
</td>
				<?php elseif ($this->_tpl_vars['_fl'] == 'join_stamp'): ?>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['_profile']['fields'][$this->_tpl_vars['_f']][$this->_tpl_vars['_fl']])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %e %y, %H:%M") : smarty_modifier_date_format($_tmp, "%b %e %y, %H:%M")); ?>
</td>
				<?php elseif ($this->_tpl_vars['_fl'] == 'activity_stamp'): ?>
					<td align="center">
					<?php if ($this->_tpl_vars['_profile']['fields'][$this->_tpl_vars['_f']][$this->_tpl_vars['_fl']]['online']): ?>
						<label class="label_profile_status_active" style="padding: 0px;">online now</label>
					<?php elseif ($this->_tpl_vars['_profile']['fields'][$this->_tpl_vars['_f']][$this->_tpl_vars['_fl']]['item']): ?>
						<?php echo $this->_tpl_vars['_profile']['fields'][$this->_tpl_vars['_f']][$this->_tpl_vars['_fl']]['item_num']; ?>
 <?php echo $this->_plugins['function']['text'][0][0]->tpl_Text(array('section' => "profile.labels",'key' => "activity_".($this->_tpl_vars['_profile']['fields'][$this->_tpl_vars['_f']][$this->_tpl_vars['_fl']]['item'])), $this);?>
</td>
					<?php endif; ?>
					</td>
				<?php else: ?>
					<td><?php echo $this->_tpl_vars['_profile']['fields'][$this->_tpl_vars['_f']][$this->_tpl_vars['_fl']]; ?>
</td>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		</tr>
	<?php endforeach; endif; unset($_from); ?>

	<?php if ($this->_tpl_vars['profiles']): ?>
		<tr>
			<td class="chbox_container">
				<input type="checkbox" name="check_all" onclick="checkAll( this.form, this.checked );" />
			</td>
		</tr>
	<?php endif; ?>
	</tbody>
</table>
</div>
<br />
<div class="group_profile_state_cont">
	With selected:


	<?php $this->_tag_stack[] = array('block_popup', array('title' => 'Send Message','width' => 428,'node' => 'popup_send_message','bottom' => 8,'left' => 0)); $_block_repeat=true;$this->_plugins['block']['block_popup'][0][0]->tpl_BlockPopup($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<table width="100%">
			<tbody>
				<tr class="tr_1">
					<td>Subject</td>
					<td><input type="text" name="msg_subject" id="msg_subject" class="input_text" /></td>
					<td rowspan="2" align="center">Variables
						<p style="text-align:left;">
							<?php echo '{$site_name}'; ?>
 <br />
							<?php echo '{$site_url}'; ?>
<br />
							<?php echo '{$site_brand_name}'; ?>
<br />
							<?php echo '{$site_email_main}'; ?>
<br />
							<?php echo '{$site_email_billing}'; ?>
<br />
							<?php echo '{$site_email_support}'; ?>
<br />
							<?php echo '{$profile_username}'; ?>
<br />
							<?php echo '{$profile_email}'; ?>
<br />
							<?php echo '{$unsubscribe_url}'; ?>
<br />
						</p>
					</td>
				</tr>
				<tr class="tr_2">
					<td>Text</td>
					<td><textarea name="msg_txt" id="msg_txt" rows="8" cols="30"></textarea></td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2"><label for="ignore">Ignore "Unsubscribe"</label> <input type="checkbox" name="ignore_unsubscribe" id="ignore" /></td>
					<td><input type="button" name="send_msg" class="submit" value="Send message" onclick="return checkSendProfileMsgForm(this.form);"/></td>
				</tr>
			</tfoot>
		</table>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_popup'][0][0]->tpl_BlockPopup($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<input type="button" class="submit" value="Send message" onclick="show_node( 'popup_send_message' )" />

	<?php $this->_tag_stack[] = array('block_popup', array('title' => 'Give membership','width' => 330,'node' => 'popup_give_membership','bottom' => 8,'left' => 0)); $_block_repeat=true;$this->_plugins['block']['block_popup'][0][0]->tpl_BlockPopup($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<table width="100%">
			<thead>
				<tr><td>Membership</td><td>Period</td><td>Units</td></tr>
			</thead>
			<tbody>
			<?php $_from = $this->_tpl_vars['membership_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['membership_types'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['membership_types']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['membership']):
        $this->_foreach['membership_types']['iteration']++;
?>
				<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
					<td>
						<input type="radio" id="membership_type" name="membership_type" value="<?php echo $this->_tpl_vars['membership']['membership_type_id']; ?>
" <?php if (($this->_foreach['membership_types']['iteration'] <= 1)): ?>checked<?php endif; ?>/>
						<label for="membership_type"><?php echo $this->_plugins['function']['text'][0][0]->tpl_Text(array('section' => 'membership.types','key' => $this->_tpl_vars['membership']['membership_type_id']), $this);?>
</label>
					</td>
					<?php if ($this->_tpl_vars['membership']['type'] == 'subscription' || $this->_tpl_vars['membership']['type'] == 'trial'): ?>
						<?php if ($this->_tpl_vars['membership']['limit'] == 'limited'): ?>
							<td><input type="text" class="input_text" name ="numbers[<?php echo $this->_tpl_vars['membership']['membership_type_id']; ?>
]" id="numbers[<?php echo $this->_tpl_vars['membership']['membership_type_id']; ?>
]" /></td>
							<td>
							<select name="units[<?php echo $this->_tpl_vars['membership']['membership_type_id']; ?>
]">
								<option value="days">day(s)</option>
								<option value="months">month(s)</option>
							</select>
							</td>
						<?php else: ?>
						<td colspan="2"></td>
						<?php endif; ?>
					<?php elseif ($this->_tpl_vars['membership']['type'] == 'credits'): ?>
					<td colspan="2" style="text-align: left;"><input type="text" name="numbers[<?php echo $this->_tpl_vars['membership']['membership_type_id']; ?>
]" id="numbers[<?php echo $this->_tpl_vars['membership']['membership_type_id']; ?>
]" />  credits</td>
					<?php endif; ?>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="3"><input type="button" name="set_membership" value="Set membership" class="submit" onclick="return ValidateGiveMembershipFormNew(this.form);"  /></td>
				</td>
			</tfoot>
		</table>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_popup'][0][0]->tpl_BlockPopup($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<input type="button" class="submit" value="Give membership" onclick="show_node( 'popup_give_membership' )" />
	<input type="button" name="send_verify_email" value="Send verification mail" onclick="return checkSendVerifyMail(this.form);" />


	<?php $this->_tag_stack[] = array('block_popup', array('title' => 'Set Status','width' => 200,'node' => 'popup_set_status','bottom' => 8,'left' => 0)); $_block_repeat=true;$this->_plugins['block']['block_popup'][0][0]->tpl_BlockPopup($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<select name="profilelist_status">
			<option value="active" >active</option>
			<option value="on_hold" >on hold</option>
			<option value="suspended" >suspended</option>
		</select>
		<br />
		<input type="checkbox" name="set_reviewed" id="set_reviewed" checked value="1" />
		<label for="set_reviewed">set as "Reviewed"</label>
		<input type="button" name="set_status" value="Set" class="btn" onclick="return checkSetStatus(this.form);" />
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_popup'][0][0]->tpl_BlockPopup($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<input type="button" class="submit" value="Set status" onclick="show_node( 'popup_set_status' );" />

	<?php $this->_tag_stack[] = array('block_popup', array('title' => 'Set Status','width' => 200,'node' => 'popup_delete_profile','bottom' => 8,'left' => 0)); $_block_repeat=true;$this->_plugins['block']['block_popup'][0][0]->tpl_BlockPopup($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <input type="checkbox" name="delete_with_content" id="delete_with_content" checked value="1" />
        <label for="set_reviewed">With content</label>
        <input type="button" name="delete_profiles" value="Delete" class="btn" onclick="return confirmDelete(this.form);" />
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_popup'][0][0]->tpl_BlockPopup($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<input type="button" value="Delete" class="submit" onclick="show_node( 'popup_delete_profile' );" />
</div>
</form>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>