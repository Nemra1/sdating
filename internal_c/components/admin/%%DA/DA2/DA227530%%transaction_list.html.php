<?php /* Smarty version 2.6.27, created on 2013-07-13 12:05:31
         compiled from transaction_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_page', 'transaction_list.html', 5, false),array('function', 'math', 'transaction_list.html', 90, false),array('function', 'html_options', 'transaction_list.html', 94, false),array('function', 'counter', 'transaction_list.html', 99, false),array('function', 'cycle', 'transaction_list.html', 142, false),array('function', 'edit_lang_values_btn', 'transaction_list.html', 144, false),array('function', 'profile_url', 'transaction_list.html', 145, false),array('modifier', 'date_format', 'transaction_list.html', 148, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div style="width: 72%; float: left">
<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<form action="<?php echo @URL_ADMIN; ?>
transaction_list.php" method="POST" name="SearchForm" onsubmit="return CheckForm();">
<input type="hidden" name="refunded" value="<?php echo $this->_tpl_vars['include_arr']['refunded']; ?>
" />
<input type="hidden" name="deleted" value="<?php echo $this->_tpl_vars['include_arr']['deleted']; ?>
" />
<input type="hidden" name="approval" value="<?php echo $this->_tpl_vars['include_arr']['approval']; ?>
" />

<table cellspacing="1" align="left" width="100%">
	<thead>
		<tr>
			<th id="finance_search_tbl_title" colspan="3">Search</th>
		</tr>
	</thead>
	<tbody>
		<tr class="tr_1">
			<td rowspan="2"><input type="radio" id="order" name="transaction_search_type" value="order"<?php if ($this->_tpl_vars['search_type'] == 'order'): ?> checked<?php endif; ?> /></td>
			<td id="finance_search_tbl_order_number_cell"><label for="order">Order number</label></td>
			<td><input type="text" id="order_number" maxlength="35" name="order" size="25" value="<?php echo $this->_tpl_vars['order']; ?>
" onclick="getElementById('order').checked=true" /></td>
		</tr>
		<tr class="tr_1">
			<td id="finance_search_tbl_payment_provider_cell"><label for="order">Payment provider</label></td>
			<td><select name="payment_provider" onchange="getElementById('order').checked=true">
				<?php unset($this->_sections['pp']);
$this->_sections['pp']['loop'] = is_array($_loop=$this->_tpl_vars['payment_providers']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pp']['name'] = 'pp';
$this->_sections['pp']['show'] = true;
$this->_sections['pp']['max'] = $this->_sections['pp']['loop'];
$this->_sections['pp']['step'] = 1;
$this->_sections['pp']['start'] = $this->_sections['pp']['step'] > 0 ? 0 : $this->_sections['pp']['loop']-1;
if ($this->_sections['pp']['show']) {
    $this->_sections['pp']['total'] = $this->_sections['pp']['loop'];
    if ($this->_sections['pp']['total'] == 0)
        $this->_sections['pp']['show'] = false;
} else
    $this->_sections['pp']['total'] = 0;
if ($this->_sections['pp']['show']):

            for ($this->_sections['pp']['index'] = $this->_sections['pp']['start'], $this->_sections['pp']['iteration'] = 1;
                 $this->_sections['pp']['iteration'] <= $this->_sections['pp']['total'];
                 $this->_sections['pp']['index'] += $this->_sections['pp']['step'], $this->_sections['pp']['iteration']++):
$this->_sections['pp']['rownum'] = $this->_sections['pp']['iteration'];
$this->_sections['pp']['index_prev'] = $this->_sections['pp']['index'] - $this->_sections['pp']['step'];
$this->_sections['pp']['index_next'] = $this->_sections['pp']['index'] + $this->_sections['pp']['step'];
$this->_sections['pp']['first']      = ($this->_sections['pp']['iteration'] == 1);
$this->_sections['pp']['last']       = ($this->_sections['pp']['iteration'] == $this->_sections['pp']['total']);
?>
					<option value="<?php echo $this->_tpl_vars['payment_providers'][$this->_sections['pp']['index']]['fin_payment_provider_id']; ?>
" <?php if ($this->_tpl_vars['payment_providers'][$this->_sections['pp']['index']]['fin_payment_provider_id'] == $this->_tpl_vars['payment_provider']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['payment_providers'][$this->_sections['pp']['index']]['name']; ?>
</option>
				<?php endfor; endif; ?>
				</select>
			</td>
		</tr>
		<tr class="tr_2">
			<td><input type="radio" id="profile" name="transaction_search_type" value="profile" <?php if ($this->_tpl_vars['search_type'] == 'profile'): ?>checked <?php endif; ?>/></td>
			<td id="finance_search_tbl_username_or_email_cell"><label for="profile">Member Username or Email</label></td>
			<td><input type="text" id="profile_name" maxlength="40" name="profile" size="25" value="<?php echo $this->_tpl_vars['profile']; ?>
" onclick="getElementById('profile').checked=true" /></td>
		</tr>
		<tr class="tr_1">
			<td><input type="radio" id="date" name="transaction_search_type" value="date"<?php if ($this->_tpl_vars['search_type'] == 'date'): ?> checked<?php endif; ?> /></td>
			<td id="finance_search_tbl_date_from_to_cell"><label for="date">Order date</label></td>
			<td>
			from <input type="text" id="date_from" maxlength="10" name="date_from" size="10" title="format: YYYY-mm-dd" value="<?php echo $this->_tpl_vars['date_from']; ?>
" onclick="getElementById('date').checked=true" />
			to <input type="text" id="date_to" maxlength="10" name="date_to" size="10" title="format: YYYY-mm-dd" value="<?php echo $this->_tpl_vars['date_to']; ?>
" onclick="getElementById('date').checked=true" />
			</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="3" align="right" colspan="3"><input type="submit" value="Search" />&nbsp; </td>
		</tr>
	</tfoot>
</table>
</form>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div style="width: 25%; float:right">
<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table align="center" cellspacing="1" width="100%">
	<thead>
		<tr>
			<th colspan="2">Statistics</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td id="finance_stats_tbl_total_cell">Total:</td>
			<td align="right"><b><?php echo $this->_tpl_vars['total']; ?>
</b></td>
		</tr>
		<tr>
			<td id="finance_stats_tbl_total_refunded">Refunded:</td>
			<td align="right"><b><?php echo $this->_tpl_vars['refunded']; ?>
</b></td>
		</tr>
		<tr>
			<td id="finance_stats_tbl_fines_cell">Fines:</td>
			<td align="right"><b><?php echo $this->_tpl_vars['fines']; ?>
</b></td>
		</tr>
		<tr>
			<td id="finance_stats_tbl_result_cell">Result:</td>
			<td align="right"><b><?php echo $this->_tpl_vars['total']-$this->_tpl_vars['refunded']-$this->_tpl_vars['fines']; ?>
</b></td>
		</tr>
	</tbody>
</table>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<br clear="all" />
<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<center>
<form action="<?php echo @URL_ADMIN; ?>
transaction_list.php?transaction_search_type=<?php echo $this->_tpl_vars['search_type']; ?>
&order=<?php echo $this->_tpl_vars['order']; ?>
&payment_provider=<?php echo $this->_tpl_vars['payment_provider']; ?>
&profile=<?php echo $this->_tpl_vars['profile']; ?>
&date_from=<?php echo $this->_tpl_vars['date_from']; ?>
&date_to=<?php echo $this->_tpl_vars['date_to']; ?>
&refunded=<?php echo $this->_tpl_vars['include_arr']['refunded']; ?>
&deleted=<?php echo $this->_tpl_vars['include_arr']['deleted']; ?>
&approval=<?php echo $this->_tpl_vars['include_arr']['approval']; ?>
" method="post" name="on_page_form">
Results: <?php echo smarty_function_math(array('equation' => ($this->_tpl_vars['on_page'])."*".($this->_tpl_vars['page'])."-".($this->_tpl_vars['on_page'])."+1",'assign' => 'v'), $this);?>
<b><?php if ($this->_tpl_vars['number'] == 0): ?>0<?php else: ?><?php echo $this->_tpl_vars['v']; ?>
<?php endif; ?></b>-<?php if ($this->_tpl_vars['page']*$this->_tpl_vars['on_page'] < $this->_tpl_vars['number']): ?><?php echo smarty_function_math(array('equation' => "page*".($this->_tpl_vars['on_page']),'page' => $this->_tpl_vars['page'],'assign' => 'v'), $this);?>
<b><?php echo $this->_tpl_vars['v']; ?>
</b><?php else: ?><b><?php echo $this->_tpl_vars['number']; ?>
</b><?php endif; ?>  
| Total: <b><?php echo $this->_tpl_vars['number']; ?>
</b>	 
| Results per page: 
<select name="on_page" onchange="javascript: document.forms['on_page_form'].submit();">
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['on_page_arr'],'selected' => $this->_tpl_vars['on_page']), $this);?>

</select>
</form>
<?php if ($this->_tpl_vars['page'] != 1): ?><a href="<?php echo @URL_ADMIN; ?>
transaction_list.php?transaction_search_type=<?php echo $this->_tpl_vars['search_type']; ?>
&order=<?php echo $this->_tpl_vars['order']; ?>
&payment_provider=<?php echo $this->_tpl_vars['payment_provider']; ?>
&profile=<?php echo $this->_tpl_vars['profile']; ?>
&date_from=<?php echo $this->_tpl_vars['date_from']; ?>
&date_to=<?php echo $this->_tpl_vars['date_to']; ?>
&page=1&on_page=<?php echo $this->_tpl_vars['on_page']; ?>
&refunded=<?php echo $this->_tpl_vars['include_arr']['refunded']; ?>
&deleted=<?php echo $this->_tpl_vars['include_arr']['deleted']; ?>
&approval=<?php echo $this->_tpl_vars['include_arr']['approval']; ?>
">First</a> | <?php endif; ?>
<?php if ($this->_tpl_vars['page'] > 1): ?><a href="<?php echo @URL_ADMIN; ?>
transaction_list.php?transaction_search_type=<?php echo $this->_tpl_vars['search_type']; ?>
&order=<?php echo $this->_tpl_vars['order']; ?>
&payment_provider=<?php echo $this->_tpl_vars['payment_provider']; ?>
&profile=<?php echo $this->_tpl_vars['profile']; ?>
&date_from=<?php echo $this->_tpl_vars['date_from']; ?>
&date_to=<?php echo $this->_tpl_vars['date_to']; ?>
&page=<?php echo $this->_tpl_vars['page']-1; ?>
&on_page=<?php echo $this->_tpl_vars['on_page']; ?>
&refunded=<?php echo $this->_tpl_vars['include_arr']['refunded']; ?>
&deleted=<?php echo $this->_tpl_vars['include_arr']['deleted']; ?>
&approval=<?php echo $this->_tpl_vars['include_arr']['approval']; ?>
">Previous</a> | <?php endif; ?>
<?php echo smarty_function_counter(array('start' => 0,'skip' => 1,'print' => false), $this);?>

<?php $_from = $this->_tpl_vars['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['element']):
?>
<?php echo smarty_function_math(array('equation' => "3-count+page",'count' => $this->_tpl_vars['count'],'page' => $this->_tpl_vars['page'],'assign' => 'd'), $this);?>

<?php if ($this->_tpl_vars['d'] < 0): ?><?php echo smarty_function_math(array('equation' => "7-7",'assign' => 'd'), $this);?>
<?php endif; ?>
<?php echo smarty_function_math(array('equation' => "4-page",'page' => $this->_tpl_vars['page'],'assign' => 'd2'), $this);?>

<?php if ($this->_tpl_vars['d2'] < 0): ?><?php echo smarty_function_math(array('equation' => "7-7",'assign' => 'd2'), $this);?>
<?php endif; ?>
	<?php if (( $this->_tpl_vars['page'] >= $this->_tpl_vars['element'] && $this->_tpl_vars['page'] - $this->_tpl_vars['element'] < 4 + $this->_tpl_vars['d'] ) || ( $this->_tpl_vars['page'] < $this->_tpl_vars['element'] && $this->_tpl_vars['element'] - $this->_tpl_vars['page'] < 4 + $this->_tpl_vars['d2'] )): ?>
		<?php if ($this->_tpl_vars['page'] == $this->_tpl_vars['element']): ?> [<b><?php echo $this->_tpl_vars['element']; ?>
</b>] <?php else: ?> <b><a href="<?php echo @URL_ADMIN; ?>
transaction_list.php?transaction_search_type=<?php echo $this->_tpl_vars['search_type']; ?>
&order=<?php echo $this->_tpl_vars['order']; ?>
&payment_provider=<?php echo $this->_tpl_vars['payment_provider']; ?>
&profile=<?php echo $this->_tpl_vars['profile']; ?>
&date_from=<?php echo $this->_tpl_vars['date_from']; ?>
&date_to=<?php echo $this->_tpl_vars['date_to']; ?>
&page=<?php echo $this->_tpl_vars['element']; ?>
&on_page=<?php echo $this->_tpl_vars['on_page']; ?>
&refunded=<?php echo $this->_tpl_vars['include_arr']['refunded']; ?>
&deleted=<?php echo $this->_tpl_vars['include_arr']['deleted']; ?>
&approval=<?php echo $this->_tpl_vars['include_arr']['approval']; ?>
"><?php echo $this->_tpl_vars['element']; ?>
</a></b> <?php endif; ?>
	<?php endif; ?>
	<?php echo smarty_function_counter(array('assign' => 'i','print' => false), $this);?>

<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['page'] < $this->_tpl_vars['i']): ?> | <a href="<?php echo @URL_ADMIN; ?>
transaction_list.php?transaction_search_type=<?php echo $this->_tpl_vars['search_type']; ?>
&order=<?php echo $this->_tpl_vars['order']; ?>
&payment_provider=<?php echo $this->_tpl_vars['payment_provider']; ?>
&profile=<?php echo $this->_tpl_vars['profile']; ?>
&date_from=<?php echo $this->_tpl_vars['date_from']; ?>
&date_to=<?php echo $this->_tpl_vars['date_to']; ?>
&page=<?php echo $this->_tpl_vars['page']+1; ?>
&on_page=<?php echo $this->_tpl_vars['on_page']; ?>
&refunded=<?php echo $this->_tpl_vars['include_arr']['refunded']; ?>
&deleted=<?php echo $this->_tpl_vars['include_arr']['deleted']; ?>
&approval=<?php echo $this->_tpl_vars['include_arr']['approval']; ?>
">Next</a><?php endif; ?>
<?php if ($this->_tpl_vars['page'] < $this->_tpl_vars['count']): ?> | <a href="<?php echo @URL_ADMIN; ?>
transaction_list.php?transaction_search_type=<?php echo $this->_tpl_vars['search_type']; ?>
&order=<?php echo $this->_tpl_vars['order']; ?>
&payment_provider=<?php echo $this->_tpl_vars['payment_provider']; ?>
&profile=<?php echo $this->_tpl_vars['profile']; ?>
&date_from=<?php echo $this->_tpl_vars['date_from']; ?>
&date_to=<?php echo $this->_tpl_vars['date_to']; ?>
&page=<?php echo $this->_tpl_vars['count']; ?>
&on_page=<?php echo $this->_tpl_vars['on_page']; ?>
&refunded=<?php echo $this->_tpl_vars['include_arr']['refunded']; ?>
&deleted=<?php echo $this->_tpl_vars['include_arr']['deleted']; ?>
&approval=<?php echo $this->_tpl_vars['include_arr']['approval']; ?>
">Last</a><?php endif; ?>
</center>


<div align="right">
	<form action="<?php echo @URL_ADMIN; ?>
transaction_list.php?transaction_search_type=<?php echo $this->_tpl_vars['search_type']; ?>
&order=<?php echo $this->_tpl_vars['order']; ?>
&payment_provider=<?php echo $this->_tpl_vars['payment_provider']; ?>
&profile=<?php echo $this->_tpl_vars['profile']; ?>
&date_from=<?php echo $this->_tpl_vars['date_from']; ?>
&date_to=<?php echo $this->_tpl_vars['date_to']; ?>
&on_page=<?php echo $this->_tpl_vars['on_page']; ?>
" method="post" name="include_form">
	<input type="hidden" name="refunded" value="no" />
	<input type="hidden" name="deleted" value="no" />
	<input type="hidden" name="approval" value="no" />
	<input type="checkbox" name="refunded" value="yes" onclick="document.include_form.submit();"<?php if ($this->_tpl_vars['include_arr']['refunded'] == 'yes'): ?> checked<?php endif; ?> /> <span id="finance_transaction_list_select_refunded_label">Refunded</span>
	<input type="checkbox" name="deleted" value="yes" onclick="document.include_form.submit();"<?php if ($this->_tpl_vars['include_arr']['deleted'] == 'yes'): ?> checked<?php endif; ?> /> <span id="finance_transaction_list_select_deleted_label">Deleted</span>
	<input type="checkbox" name="approval" value="yes" onclick="document.include_form.submit();"<?php if ($this->_tpl_vars['include_arr']['approval'] == 'yes'): ?> checked<?php endif; ?> /> <span id="finance_transaction_list_select_approval_label">Approval</span>
	</form>
</div>
<table align="left" width="100%">
	<thead>
		<tr>
			<th colspan="7" id="finance_transaction_list_tbl_title_thead">Transactions</th>
		</tr>
		<tr>
			<td id="finance_transaction_list_tbl_order_id_cell">Order ID</td>
			<td id="finance_transaction_list_tbl_payment_provider_cell">Payment Provider</td>
			<td id="finance_transaction_list_tbl_member_cell">Member</td>
			<td id="finance_transaction_list_tbl_amount_cell">Amount</td>
			<td id="finance_transaction_list_tbl_membership_type_cell">Membership type</td>
			<td id="finance_transaction_list_tbl_order_date_cell">Order date</td>
			<td id="finance_transaction_list_tbl_status_cell">Status</td>
		</tr>
	</thead>
	<tbody>
	<?php unset($this->_sections['tr']);
$this->_sections['tr']['loop'] = is_array($_loop=$this->_tpl_vars['trans']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tr']['name'] = 'tr';
$this->_sections['tr']['show'] = true;
$this->_sections['tr']['max'] = $this->_sections['tr']['loop'];
$this->_sections['tr']['step'] = 1;
$this->_sections['tr']['start'] = $this->_sections['tr']['step'] > 0 ? 0 : $this->_sections['tr']['loop']-1;
if ($this->_sections['tr']['show']) {
    $this->_sections['tr']['total'] = $this->_sections['tr']['loop'];
    if ($this->_sections['tr']['total'] == 0)
        $this->_sections['tr']['show'] = false;
} else
    $this->_sections['tr']['total'] = 0;
if ($this->_sections['tr']['show']):

            for ($this->_sections['tr']['index'] = $this->_sections['tr']['start'], $this->_sections['tr']['iteration'] = 1;
                 $this->_sections['tr']['iteration'] <= $this->_sections['tr']['total'];
                 $this->_sections['tr']['index'] += $this->_sections['tr']['step'], $this->_sections['tr']['iteration']++):
$this->_sections['tr']['rownum'] = $this->_sections['tr']['iteration'];
$this->_sections['tr']['index_prev'] = $this->_sections['tr']['index'] - $this->_sections['tr']['step'];
$this->_sections['tr']['index_next'] = $this->_sections['tr']['index'] + $this->_sections['tr']['step'];
$this->_sections['tr']['first']      = ($this->_sections['tr']['iteration'] == 1);
$this->_sections['tr']['last']       = ($this->_sections['tr']['iteration'] == $this->_sections['tr']['total']);
?>
		<tr class="<?php echo smarty_function_cycle(array('values' => "tr_1,tr_2"), $this);?>
">
			<td><a href="<?php echo @URL_ADMIN; ?>
transaction.php?provider_id=<?php echo $this->_tpl_vars['trans'][$this->_sections['tr']['index']]['fin_payment_provider_id']; ?>
&order=<?php echo $this->_tpl_vars['trans'][$this->_sections['tr']['index']]['payment_provider_order_number']; ?>
"><?php echo $this->_tpl_vars['trans'][$this->_sections['tr']['index']]['payment_provider_order_number']; ?>
</a></td>
			<td><?php echo $this->_plugins['function']['edit_lang_values_btn'][0][0]->tpl_EditLangKey(array('section' => 'components.payment_selection','key' => $this->_tpl_vars['trans'][$this->_sections['tr']['index']]['fin_payment_provider_id']), $this);?>
</td>
			<td><?php if ($this->_tpl_vars['trans'][$this->_sections['tr']['index']]['username'] == ''): ?>Deleted<?php else: ?><a href="<?php echo $this->_plugins['function']['profile_url'][0][0]->frontendGetProfileURL(array('profile_id' => $this->_tpl_vars['trans'][$this->_sections['tr']['index']]['profile_id']), $this);?>
"><?php echo $this->_tpl_vars['trans'][$this->_sections['tr']['index']]['username']; ?>
</a><?php endif; ?></td>
			<td><?php echo $this->_tpl_vars['trans'][$this->_sections['tr']['index']]['amount']; ?>
</td>
			<td><?php if ($this->_tpl_vars['trans'][$this->_sections['tr']['index']]['membership_type_id'] == ''): ?>Deleted<?php else: ?><?php echo $this->_plugins['function']['edit_lang_values_btn'][0][0]->tpl_EditLangKey(array('section' => 'membership.types','key' => $this->_tpl_vars['trans'][$this->_sections['tr']['index']]['membership_type_id']), $this);?>
<?php endif; ?></td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['trans'][$this->_sections['tr']['index']]['order_stamp'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %e %y, %H:%M") : smarty_modifier_date_format($_tmp, "%b %e %y, %H:%M")); ?>
</td>
			<td><?php if ($this->_tpl_vars['trans'][$this->_sections['tr']['index']]['amount_fine'] != ''): ?><font color="#BB6333">refunded</font><?php elseif ($this->_tpl_vars['trans'][$this->_sections['tr']['index']]['status'] == 'deleted'): ?><font color="Red">deleted</font><?php else: ?>approval<?php endif; ?></td>
		</tr>
	<?php endfor; endif; ?>
	</tbody>
</table>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<br clear="all" />

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>