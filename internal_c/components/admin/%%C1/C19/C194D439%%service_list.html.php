<?php /* Smarty version 2.6.27, created on 2013-07-13 11:51:02
         compiled from service_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_page', 'service_list.html', 4, false),array('function', 'cycle', 'service_list.html', 22, false),array('function', 'edit_lang_values_btn', 'service_list.html', 36, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<form action="<?php echo @URL_ADMIN; ?>
service_list.php" method="POST" onsubmit="javascript: return CheckServiceForm(this);">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<thead>
		<th id="membership_service_list_title_thead_cell" colspan="6">
			Membership Service List
		</th>
		<tr>
			<td width="30px">&nbsp;</td>
			<td id="membership_service_list_name_cell">Name</td>
			<td id="membership_service_list_description_cell">Description</td>
			<td id="membership_service_list_free_for_all_cell">Free for all</td>
			<td id="membership_service_list_show_on_diagram_cell" width="1">Show on Membership Diagram</td>
		</tr>
	</thead>
	<tbody>
	<?php $_from = $this->_tpl_vars['services']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['services'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['services']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['service']):
        $this->_foreach['services']['iteration']++;
?>
	<?php if ($this->_tpl_vars['service']['active']): ?>
	<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
		<td>
			<?php if (! ($this->_foreach['services']['iteration'] <= 1)): ?>
				<a class="arr_up" href="<?php echo @URL_ADMIN; ?>
service_list.php?service_key=<?php echo $this->_tpl_vars['service']['membership_service_key']; ?>
&move_order=up"></a>
			<?php else: ?>
				<div class="arr_up_i"></div>
			<?php endif; ?>
			<?php if (! ($this->_foreach['services']['iteration'] == $this->_foreach['services']['total'])): ?>
				<a class="arr_down" href="<?php echo @URL_ADMIN; ?>
service_list.php?service_key=<?php echo $this->_tpl_vars['service']['membership_service_key']; ?>
&move_order=down"></a>
			<?php else: ?>
				<div class="arr_down_i"></div>
			<?php endif; ?>
		</td>
		<td>
			<?php echo $this->_plugins['function']['edit_lang_values_btn'][0][0]->tpl_EditLangKey(array('section' => "membership.services",'key' => $this->_tpl_vars['service']['membership_service_key']), $this);?>

		</td>
		<td>
			<?php echo $this->_tpl_vars['service']['description']; ?>

		</td>
		<td align="center">
			<?php if ($this->_tpl_vars['service']['is_promo'] == 'yes'): ?>
				<?php $this->assign('checked', ' checked'); ?>
			<?php else: ?>
				<?php $this->assign('checked', ""); ?>
			<?php endif; ?>
			<input type="hidden" name="s_promo[<?php echo $this->_tpl_vars['service']['membership_service_key']; ?>
]" value="no" />
			<input type="checkbox" name="s_promo[<?php echo $this->_tpl_vars['service']['membership_service_key']; ?>
]" value="yes"<?php echo $this->_tpl_vars['checked']; ?>
 />
		</td>
		<td align="center">
			<?php if ($this->_tpl_vars['service']['show'] == 'yes'): ?>
				<?php $this->assign('checked', ' checked'); ?>
			<?php else: ?>
				<?php $this->assign('checked', ""); ?>
			<?php endif; ?>
			<input type="hidden" name="show[<?php echo $this->_tpl_vars['service']['membership_service_key']; ?>
]" value="no" />
			<input type="checkbox" name="show[<?php echo $this->_tpl_vars['service']['membership_service_key']; ?>
]" value="yes"<?php echo $this->_tpl_vars['checked']; ?>
 />
		</td>
	</tr>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="5">
				<input type="submit" value="Save" />
			</td>
		</tr>
	</tfoot>
</table>
</form>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>


<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table width="100%">
	<thead>
		<tr>
			<th id="membership_service_list_comments_title_thead" colspan="2">Unavailable service comments</th>
		</tr>
		<tr>
			<td>Your comment</td>
			<td>Description</td>
		</tr>
	</thead>
	<tbody>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
			<td><?php echo $this->_plugins['function']['edit_lang_values_btn'][0][0]->tpl_EditLangKey(array('section' => 'membership','key' => 'service_no_permission'), $this);?>
</td>
			<td id="membership_service_list_comments_no_permission_right_cell">Member has no permissions to use the service</td>
		</tr>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
			<td><?php echo $this->_plugins['function']['edit_lang_values_btn'][0][0]->tpl_EditLangKey(array('section' => 'membership','key' => 'service_no_permission_for_alert'), $this);?>
</td>
			<td id="membership_service_list_comments_no_permission_alert_right_cell">Member has no permissions to use the service (alert window)</td>
		</tr>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
			<td><?php echo $this->_plugins['function']['edit_lang_values_btn'][0][0]->tpl_EditLangKey(array('section' => 'membership','key' => 'service_permission_no_credits_for_alert'), $this);?>
</td>
			<td id="membership_service_list_comments_no_credits_alert_right_cell">Not enough credits to use the service (alert window)</td>
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