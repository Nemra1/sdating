<?php /* Smarty version 2.6.27, created on 2013-07-13 12:05:31
         compiled from inc/_header.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'page_messages', 'inc/_header.html', 122, false),)), $this); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
	<title><?php echo $this->_tpl_vars['_page']['title']; ?>
</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<?php if ($this->_tpl_vars['_meta_tags']): ?>
		<?php $_from = $this->_tpl_vars['_meta_tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tag']):
?>
			<?php echo $this->_tpl_vars['tag']; ?>

		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
	<script src="<?php echo @URL_ADMIN_JS; ?>
jquery.js" type="text/javascript"></script>
	<script src="<?php echo @URL_STATIC; ?>
interface.js" type="text/javascript"></script>
	<script type="text/javascript">
		var $jq = jQuery.noConflict();
	</script>

	<?php $_from = $this->_tpl_vars['_required_js_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['js_file']):
?>
		<script src="<?php echo $this->_tpl_vars['js_file']; ?>
" type="text/javascript"></script>
	<?php endforeach; endif; unset($_from); ?>
	<?php if ($this->_tpl_vars['header_js_code']): ?>
	<script type="text/javascript"><?php echo $this->_tpl_vars['header_js_code']; ?>
</script>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['_js_onload']): ?>
	<script type="text/javascript">
		$jq(function() {
			<?php echo $this->_tpl_vars['_js_onload']; ?>

		});
	</script>
	<?php endif; ?>
	<link type="text/css" rel="stylesheet" href="<?php echo @URL_ADMIN; ?>
css/admin.css" />
	<?php $_from = $this->_tpl_vars['_required_css_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['css_file']):
?>
		<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['css_file']; ?>
" />
	<?php endforeach; endif; unset($_from); ?>

</head>

<style>
H3.block_cap_title{
	border-bottom: 1px dotted #999999;
}
.floatbox_body{
	padding: 10px;
}
</style>

<body>
	<div style="display: none" id="sk-floatbox-block-prototype">
	    <div class="floatbox_container">
			<div class="block_cap floatbox_header">
				<div class="block_cap_r">
					<div class="block_cap_c">
						<h3 class="block_cap_title">
						</h3>
						<a class="close_btn" href="#">x</a><br clear="all" />
					</div>
				</div>
			</div>
			<div class="floatbox_body">
				<div class="fblock_body block_body">
					 <div class="fblock_body_r block_body_r">
						  <div class="fblock_body_c block_body_c">
						  </div>
					 </div>
				</div>
	        </div>
	     <div class="floatbox_bottom">
		<div class="block_bottom">
		 <div class="block_bottom_r">
		   <div class="block_bottom_c">
		   </div>

                  </div>
		  </div>
               </div>
		<div class="fblock_bottom">
			<div class="fblock_bottom_r">
			<div class="fblock_bottom_c"></div>
			</div>
		</div>

		</div>
	</div>
<?php echo $this->_tpl_vars['demo_header']; ?>

<table id="base" cellspacing="0" cellpadding="0">
	<tr>
	   <td  align="left">
            <a href="<?php echo @SITE_URL; ?>
" target="_blank">Jump to site</a>
        </td>
		<td align="right">
			<a href="<?php echo @URL_ADMIN; ?>
logout.php">Log out</a>
		</td>
	</tr>
	<tr>
		<td colspan="2" id="top">
			<div class="header"><?php echo $this->_tpl_vars['_header_site_name']; ?>
 Administration</div>
			<div class="powered_by_skadate"></div>
		</td>
	</tr>
	<tr>
		<td class="menu_td"></td>
        <td class="menu_td"><div id="tabs"><?php echo $this->_tpl_vars['tabs_menu']; ?>
</div><div style="float:right;"><?php echo $this->_tpl_vars['help_manual_link']; ?>
</div></td>
	</tr>
	<tr>
		<td id="sidebar" valign="top">
			<?php echo $this->_tpl_vars['sidebar_menu']; ?>

		</td>
		<td id="td_right" valign="top">
			<table class="content_table" cellspacing="0" cellpadding="0" width="800">
				<tr>
				<td class="corner_left_top"></td>
				<td class="top_side"></td>
				<td class="corner_right_top"></td>
				</tr>
				<tr>
				<td class="center_side"></td>
				<td class="center_side"><div id="content" style="width: 790px">

                	<?php echo $this->_plugins['function']['page_messages'][0][0]->FrontendPrintMessages(array(), $this);?>

				<!-- PAGE CONTENT -->