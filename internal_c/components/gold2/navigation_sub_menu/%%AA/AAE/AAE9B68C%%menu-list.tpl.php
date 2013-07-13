<?php /* Smarty version 2.6.27, created on 2013-07-13 11:44:23
         compiled from plugins/menu-list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip', 'plugins/menu-list.tpl', 7, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/navigation_sub_menu/%%AA/AAE/AAE9B68C%%menu-list.tpl.inc'] = '21e0fb2e3fe983eefac2c5579127b4d0'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:21e0fb2e3fe983eefac2c5579127b4d0#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2527/27D/27D2E248%25%25menu-list.style.css?51e183e7f0a2f');
if ($this->caching && !$this->_cache_including): echo '{/nocache:21e0fb2e3fe983eefac2c5579127b4d0#0}'; endif; ?>

<ul class="menu-<?php echo $this->_tpl_vars['type']; ?>
">
<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
	<li class="item"><a <?php if ($this->_tpl_vars['item']['active']): ?>class="active"<?php endif; ?> href="<?php echo $this->_tpl_vars['item']['href']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['label'])) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)); ?>
</a></li>
	<?php if ($this->_tpl_vars['item']['active'] && $this->_tpl_vars['item']['sub_menu']): ?>
		<br><br>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['tpl_self'], 'smarty_include_vars' => array('items' => $this->_tpl_vars['item']['sub_menu'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</ul>