<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/index_news/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_cap', 'components/index_news/default.tpl', 6, false),array('block', 'block', 'components/index_news/default.tpl', 11, false),array('function', 'profile_thumb', 'components/index_news/default.tpl', 18, false),array('modifier', 'censor', 'components/index_news/default.tpl', 21, false),array('modifier', 'spec_date', 'components/index_news/default.tpl', 22, false),array('modifier', 'smile', 'components/index_news/default.tpl', 24, false),array('modifier', 'out_format', 'components/index_news/default.tpl', 24, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/index_news/%%12/12F/12FB438C%%default.tpl.inc'] = 'c4753130faa8c65de4d2390bc5ca3353'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:c4753130faa8c65de4d2390bc5ca3353#0}'; endif;
?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="index_news">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:c4753130faa8c65de4d2390bc5ca3353#0}'; endif; ?>

<?php if ($this->_tpl_vars['no_posts']): ?>
	<?php $this->_tag_stack[] = array('block_cap', array('title' => SK_Language::text("blogs.index_news_cap"))); $_block_repeat=true;$this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php else: ?>
	<?php $this->_tag_stack[] = array('block_cap', array('title' => SK_Language::text("blogs.index_news_cap"))); $_block_repeat=true;$this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>

<?php $this->_tag_stack[] = array('block', array()); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>	
	<?php if ($this->_tpl_vars['no_posts']): ?>
    	<div class="no_content"><?php echo SK_Language::text("blogs.label_no_posts"); ?></div>
	<?php else: ?>
    <ul class="thumb_text_list">
    <?php $_from = $this->_tpl_vars['bp_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['blog_entry']):
?>
        <li class="item">
            <div class="list_thumb"><a href="<?php echo $this->_tpl_vars['blog_entry']['blog_post_url']; ?>
"><?php echo smarty_function_profile_thumb(array('profile_id' => $this->_tpl_vars['blog_entry']['dto']->getProfile_id(),'size' => '60','href' => false), $this);?>
</a></div>
            <div class="list_block">
            	<div class="list_info">
                	<div class="item_title"><a href="<?php echo $this->_tpl_vars['blog_entry']['blog_post_url']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['blog_entry']['title'])) ? $this->_run_mod_handler('censor', true, $_tmp, 'blog', true) : smarty_modifier_censor($_tmp, 'blog', true)); ?>
</a></div>
                	<?php echo SK_Language::text("txt.by"); ?> <a href="<?php echo $this->_tpl_vars['blog_entry']['profile_url']; ?>
"><?php echo $this->_tpl_vars['blog_entry']['username']; ?>
</a>, <?php echo ((is_array($_tmp=$this->_tpl_vars['blog_entry']['dto']->getCreate_time_stamp())) ? $this->_run_mod_handler('spec_date', true, $_tmp) : smarty_modifier_spec_date($_tmp)); ?>

                </div>
                <div class="list_content"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['blog_entry']['desc'])) ? $this->_run_mod_handler('smile', true, $_tmp) : smarty_modifier_smile($_tmp)))) ? $this->_run_mod_handler('out_format', true, $_tmp) : smarty_modifier_out_format($_tmp)))) ? $this->_run_mod_handler('censor', true, $_tmp, 'blog', true) : smarty_modifier_censor($_tmp, 'blog', true)); ?>
</div>
            </div>
            <div class="clr"></div>
        </li>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
    <div class="clearfix"><div class="block_toolbar"><a href="<?php echo $this->_tpl_vars['news_url']; ?>
"><?php echo SK_Language::text("blogs.label_view_all"); ?></a></div></div>
    <?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:c4753130faa8c65de4d2390bc5ca3353#1}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:c4753130faa8c65de4d2390bc5ca3353#1}'; endif; ?>