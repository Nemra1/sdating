<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:50
         compiled from components/page_footer/default.tpl */ ?>
<div id="footer_menu" class="footer_menu"><?php  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'plugins/menu-line-bottom.tpl', 'smarty_include_vars' => array('type' => "line-bottom",'items' => $this->_tpl_vars['bottom_menu'],'tpl_self' => 'plugins/menu-line-bottom.tpl')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  ?></div>
&copy; <a href="<?php echo @SITE_URL; ?>
"><?php echo SK_Language::text("txt.copy"); ?></a> <?php echo $this->_tpl_vars['year']; ?>
. Powered by <a href="http://www.skadate.com/">SkaDate dating software</a>