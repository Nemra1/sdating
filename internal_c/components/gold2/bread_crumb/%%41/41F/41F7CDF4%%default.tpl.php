<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:52
         compiled from components/bread_crumb/default.tpl */ ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/bread_crumb/%%41/41F/41F7CDF4%%default.tpl.inc'] = 'a05cea468eb865c43e6088183bf2930d'; ?><?php if ($this->caching && !$this->_cache_including): echo '{nocache:a05cea468eb865c43e6088183bf2930d#0}'; endif;
?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="bread_crumb">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:a05cea468eb865c43e6088183bf2930d#0}'; endif; ?>

<?php $_from = $this->_tpl_vars['bread_crumb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['crumb'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['crumb']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['crumb']['iteration']++;
?>
	<?php if ($this->_tpl_vars['key']): ?>&raquo;<?php endif; ?>
	
	<?php if (($this->_foreach['crumb']['iteration'] == $this->_foreach['crumb']['total'])): ?>
		<b><?php echo $this->_tpl_vars['item']['label']; ?>
</b>
	<?php else: ?>
		<a href="<?php echo $this->_tpl_vars['item']['url']; ?>
"><?php echo $this->_tpl_vars['item']['label']; ?>
</a>
	<?php endif; ?> 
<?php endforeach; endif; unset($_from); ?>

<?php if ($this->caching && !$this->_cache_including): echo '{nocache:a05cea468eb865c43e6088183bf2930d#1}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:a05cea468eb865c43e6088183bf2930d#1}'; endif; ?>