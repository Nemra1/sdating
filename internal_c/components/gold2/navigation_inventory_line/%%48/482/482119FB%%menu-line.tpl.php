<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:00
         compiled from plugins/menu-line.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip', 'plugins/menu-line.tpl', 4, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/navigation_inventory_line/%%48/482/482119FB%%menu-line.tpl.inc'] = 'dacf463c3504bfce47edcc56294c170a'; ?><?php if ($this->caching && !$this->_cache_including): echo '{nocache:dacf463c3504bfce47edcc56294c170a#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2501/01C/01C551C8%25%25menu-line.style.css?51e18484c9494');
if ($this->caching && !$this->_cache_including): echo '{/nocache:dacf463c3504bfce47edcc56294c170a#0}'; endif; ?>

<?php echo '<ul class="menu-'; ?><?php echo $this->_tpl_vars['type']; ?><?php echo '">'; ?><?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['menu'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['menu']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['menu']['iteration']++;
?><?php echo '<li class="line_menu_item"><a href="'; ?><?php echo $this->_tpl_vars['item']['href']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['item']['active']): ?><?php echo 'class="active"'; ?><?php endif; ?><?php echo '>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['label'])) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)); ?><?php echo '</a>&nbsp;&nbsp;'; ?><?php if (! ($this->_foreach['menu']['iteration'] == $this->_foreach['menu']['total'])): ?><?php echo '|'; ?><?php endif; ?><?php echo '</li>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</ul>'; ?>
