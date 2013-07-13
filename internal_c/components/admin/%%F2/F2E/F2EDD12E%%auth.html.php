<?php /* Smarty version 2.6.27, created on 2013-07-13 11:55:14
         compiled from auth.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'page_messages', 'auth.html', 26, false),)), $this); ?>
<html>
<head>
    <title><?php echo $this->_tpl_vars['_page']['title']; ?>
</title>
	<script src="<?php echo @URL_STATIC; ?>
jquery.js" type="text/javascript"></script>
	<script type="text/javascript">
		var $jq = jQuery.noConflict();
	</script>
	<?php $_from = $this->_tpl_vars['_required_js_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['js_file']):
?>
		<script src="<?php echo $this->_tpl_vars['js_file']; ?>
" type="text/javascript"></script>
	<?php endforeach; endif; unset($_from); ?>
	<link type="text/css" rel="stylesheet" href="<?php echo @URL_ADMIN_CSS; ?>
admin.css" />
	<?php $_from = $this->_tpl_vars['_required_css_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['css_file']):
?>
		<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['css_file']; ?>
" />
	<?php endforeach; endif; unset($_from); ?>
</head>

<body <?php if ($this->_tpl_vars['_js_onload']): ?>onload="<?php echo $this->_tpl_vars['_js_onload']; ?>
"<?php endif; ?>>
<table cellspacing="0" cellpadding="0" align="center" style="border: 0px">
	<tr><td style="padding: 0px"><?php echo $this->_tpl_vars['demo_header']; ?>
</td></tr>
</table>


<div class="admin_auth_precont">
	<table align="center" style="border: 0px">
		<tr>
			<td><?php echo $this->_plugins['function']['page_messages'][0][0]->FrontendPrintMessages(array(), $this);?>
</td>
		</tr>
	</table>
</div>

<form action="<?php echo $_SERVER['URL_ADMIN']; ?>
auth.php" method="POST" >
<table align="center" class="admin_auth_tbl" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="2" align="center" valign="top" class="admin_auth_main_tr">
			SkaDate admin panel access
		</td>
	</tr>
	<tr>
		<td valign="top" align="center" class="admin_auth_item">
			Username
		</td>
		<td align="left" valign="top">
			<input type="text" name="username" id="username" class="input_text" value="" <?php if ($this->_tpl_vars['locked']): ?> disabled="disabled"<?php endif; ?> />
		</td>
	</tr>
	<tr>
		<td valign="top" align="center" class="admin_auth_item">
			Password
		</td>
		<td align="left" valign="top">
			<input type="password" name="password" id="password" class="input_text" value="" <?php if ($this->_tpl_vars['locked']): ?> disabled="disabled"<?php endif; ?> />
		</td>
	</tr>
	<tr>
		<td></td>
		<td colspan="2" align="left">
			<div style="position: relative">
				<input type="submit" name="login" value="Login" class="admin_auth_btn" onclick="return checkLoginForm();"<?php if ($this->_tpl_vars['locked']): ?> disabled="disabled"<?php endif; ?> /> &nbsp;
				<a href="javascript://" onclick="show_node( 'restore_cont' )">forgot password</a>
				<div class="admin_auth_pass_restore_cot" id="restore_cont">
					<table cellspacing="0" width="100%">
						<thead>
							<tr>
								<td style="padding: 1px 1px 1px 4px">
									<div style="float: left; margin-top: 1px">Restore forgot password</div>
									<div class="close_btn" onclick="hide_node( 'restore_cont' )">x</div>
								</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Specify here admin personal email.</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="email" class="input_text" id="email" />
									<input type="submit" name="restore_pass" value="Send" class="submit" onclick="return checkRecoveryForm();" />
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</td>
	</tr>
</table>
</form>
</body>
</html>