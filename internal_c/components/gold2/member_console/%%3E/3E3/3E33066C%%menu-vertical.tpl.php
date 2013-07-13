<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from themes/gold2/plugins/menu-vertical.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip', 'themes/gold2/plugins/menu-vertical.tpl', 7, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/member_console/%%3E/3E3/3E33066C%%menu-vertical.tpl.inc'] = '1ee74cae67a046794c6068af547d4073'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:1ee74cae67a046794c6068af547d4073#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2541/41D/41DA6436%25%25menu-vertical.style.css?51e184850495c');
if ($this->caching && !$this->_cache_including): echo '{/nocache:1ee74cae67a046794c6068af547d4073#0}'; endif; ?>

<ul class="menu-<?php echo $this->_tpl_vars['type']; ?>
 clearfix">
	<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<li class="item <?php if (isset ( $this->_tpl_vars['item']['class'] )): ?><?php echo $this->_tpl_vars['item']['class']; ?>
<?php endif; ?>"><a class="<?php if ($this->_tpl_vars['item']['active']): ?>active<?php endif; ?>" href="<?php echo $this->_tpl_vars['item']['href']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['label'])) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)); ?>
</a></li>
	<?php endforeach; endif; unset($_from); ?>
</ul>