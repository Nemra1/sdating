<?php /* Smarty version 2.6.27, created on 2013-07-13 11:53:29
         compiled from themes/gold2/canvas/default/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ads', 'themes/gold2/canvas/default/footer.tpl', 7, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/group_list/%%29/29B/29BA70D3%%footer.tpl.inc'] = '38a434e732f17f52d9b091a981170291'; ?><br clear="all" />
</div>
<div class="hfooter"></div>
</div>
</div>
<div id="footer"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:38a434e732f17f52d9b091a981170291#0}'; endif;
$component = SK_Component('PageFooter');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:38a434e732f17f52d9b091a981170291#0}'; endif; ?></div>
<?php echo smarty_function_ads(array('pos' => 'bottom'), $this);?>
