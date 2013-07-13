<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:50
         compiled from plugins/menu-line-bottom.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip', 'plugins/menu-line-bottom.tpl', 7, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/page_footer/%%EA/EAB/EAB112B7%%menu-line-bottom.tpl.inc'] = '2887cf49655b02c35b77411c9389d17d'; ?><?php if ($this->caching && !$this->_cache_including): echo '{nocache:2887cf49655b02c35b77411c9389d17d#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%25CA/CAD/CADB2AD9%25%25menu-line-bottom.style.css?51e174c6dd579');
if ($this->caching && !$this->_cache_including): echo '{/nocache:2887cf49655b02c35b77411c9389d17d#0}'; endif; ?>

<ul class="menu-<?php echo $this->_tpl_vars['type']; ?>
">
<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['menu'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['menu']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['menu']['iteration']++;
?>
	<li>
		<a href="<?php echo $this->_tpl_vars['item']['href']; ?>
" <?php if ($this->_tpl_vars['item']['active']): ?>class="active"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['label'])) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)); ?>
</a> <?php if (! ($this->_foreach['menu']['iteration'] == $this->_foreach['menu']['total'])): ?>&#183;<?php endif; ?>
	</li>
<?php endforeach; endif; unset($_from); ?>
</ul>