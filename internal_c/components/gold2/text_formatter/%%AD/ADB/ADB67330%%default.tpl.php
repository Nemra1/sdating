<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/text_formatter/default.tpl */ ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/text_formatter/%%AD/ADB/ADB67330%%default.tpl.inc'] = '977ced988f21ccad413509d284afa69b'; ?><?php if ($this->caching && !$this->_cache_including): echo '{nocache:977ced988f21ccad413509d284afa69b#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/text_formatter/%25%254A/4A7/4A7444E3%25%25text_formatter.style.css?51e184857ce18');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="text_formatter">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:977ced988f21ccad413509d284afa69b#0}'; endif; ?>

<div class="tf_controls clearfix">
	<?php $_from = $this->_tpl_vars['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
	    <a href="javascript://" sk-tf-command="<?php echo $this->_tpl_vars['item']; ?>
" title="<?php echo $this->_tpl_vars['item']; ?>
" class="b_<?php echo $this->_tpl_vars['item']; ?>
 b_control"></a>
	<?php endforeach; endif; unset($_from); ?>
</div>

<div style="display: none;">
    <div <?php if ($this->caching && !$this->_cache_including): echo '{nocache:977ced988f21ccad413509d284afa69b#1}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId("smile-box-c").'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:977ced988f21ccad413509d284afa69b#1}'; endif; ?>>
        <div <?php if ($this->caching && !$this->_cache_including): echo '{nocache:977ced988f21ccad413509d284afa69b#2}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId("smile-box").'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:977ced988f21ccad413509d284afa69b#2}'; endif; ?> class="add_smile_block content">
            <?php echo $this->_tpl_vars['smileString']; ?>

        </div>
    </div>
</div>

<?php if ($this->caching && !$this->_cache_including): echo '{nocache:977ced988f21ccad413509d284afa69b#3}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:977ced988f21ccad413509d284afa69b#3}'; endif; ?>