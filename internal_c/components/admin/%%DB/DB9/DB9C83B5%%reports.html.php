<?php /* Smarty version 2.6.27, created on 2013-07-13 12:05:26
         compiled from reports.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_page', 'reports.html', 5, false),array('function', 'print_configs', 'reports.html', 6, false),array('function', 'cycle', 'reports.html', 38, false),array('modifier', 'date_format', 'reports.html', 41, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div style="width:49%;">
<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php echo adminConfig::FrontendPrintConfig(array('section' => 'reports'), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                
<div class="profile_list_result_nav">
	Results: <?php echo $this->_tpl_vars['result_range']; ?>
 |
	Total: <?php echo $this->_tpl_vars['total_results_num']; ?>
 |
	Results per page: <?php echo $this->_tpl_vars['rpp_select']; ?>

</div>



<div class="profile_list_page_nav">
Pages: <?php echo $this->_tpl_vars['navigation_pages']; ?>

</div>

<form action="" method="post">
<input type="hidden" name="command" id="command_field" />

<table cellspacing="1" width="100%">
	<thead>
		<tr>
			<td width="50%">Reported Content</td>
			<td width="30%">Reported Member</td>
			<td width="20%">Last Report Date</td>
		</tr>
	</thead>
	
	<tbody>
	<?php $_from = $this->_tpl_vars['users_reports']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['report']):
?>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
			<td><a href="profile_reports.php?profile_id=<?php echo $this->_tpl_vars['report']['owner_id']; ?>
"><?php echo $this->_tpl_vars['report']['type']; ?>
</a></td>
			<td><a href="profile.php?profile_id=<?php echo $this->_tpl_vars['report']['owner_id']; ?>
" title="administrate profile"><?php echo $this->_tpl_vars['report']['owner_name']; ?>
</a></td>
			<td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['report']['ts'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %e %y, %H:%M") : smarty_modifier_date_format($_tmp, "%b %e %y, %H:%M")); ?>
</td>
		</tr>
	<?php endforeach; endif; unset($_from); ?>
	</tbody>
</table>
</form>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>


<br clear="all" />
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>