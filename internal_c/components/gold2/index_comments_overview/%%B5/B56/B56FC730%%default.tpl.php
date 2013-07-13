<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/index_comments_overview/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_cap', 'components/index_comments_overview/default.tpl', 9, false),array('block', 'block', 'components/index_comments_overview/default.tpl', 14, false),array('function', 'profile_thumb', 'components/index_comments_overview/default.tpl', 23, false),array('modifier', 'censor', 'components/index_comments_overview/default.tpl', 32, false),array('modifier', 'spec_date', 'components/index_comments_overview/default.tpl', 40, false),array('modifier', 'out_format', 'components/index_comments_overview/default.tpl', 47, false),array('modifier', 'smile', 'components/index_comments_overview/default.tpl', 47, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/index_comments_overview/%%B5/B56/B56FC730%%default.tpl.inc'] = '01d5db039b86f589bcc4c06576a9ce70'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:01d5db039b86f589bcc4c06576a9ce70#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/index_comments_overview/%25%25BC/BCD/BCDD90DC%25%25comment_list.style.css?51e18485a874f');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="index_comments_overview">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:01d5db039b86f589bcc4c06576a9ce70#0}'; endif; ?>
<?php ob_start(); ?>
	<a href="<?php echo $this->_tpl_vars['comments_url']; ?>
"><?php echo SK_Language::text("components.index_comments_overview.label_view_all"); ?></a>
<?php $this->_smarty_vars['capture']['toolbar'] = ob_get_contents(); ob_end_clean(); ?>

<?php if (! $this->_tpl_vars['comments']): ?>
	<?php $this->_tag_stack[] = array('block_cap', array('title' => SK_Language::text("components.index_comments_overview.index_comments_overview_cap"))); $_block_repeat=true;$this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php else: ?>
	<?php $this->_tag_stack[] = array('block_cap', array('title' => SK_Language::text("components.index_comments_overview.index_comments_overview_cap"),'toolbar' => $this->_smarty_vars['capture']['toolbar'])); $_block_repeat=true;$this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>

<?php $this->_tag_stack[] = array('block', array()); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="feature_comment_list">

<?php if ($this->_tpl_vars['comments']): ?>
    <div <?php if ($this->caching && !$this->_cache_including): echo '{nocache:01d5db039b86f589bcc4c06576a9ce70#1}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('comment_list_cont').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:01d5db039b86f589bcc4c06576a9ce70#1}'; endif; ?>>
        <ul class="thumb_text_list">
        <?php $_from = $this->_tpl_vars['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment_item']):
?>
            <li class="item comment_list" id="<?php echo $this->_tpl_vars['comment_item']['feature']; ?>
_<?php echo $this->_tpl_vars['comment_item']['id']; ?>
">
                <div class="list_thumb">
                    <?php echo smarty_function_profile_thumb(array('profile_id' => $this->_tpl_vars['comment_item']['author_id'],'size' => '40'), $this);?>

                </div>
                <div class="list_block">
                    <div class="list_info">
                        <div class="comment_stat">
                            <div class="item_title">
                                <?php if (! $this->_tpl_vars['comment_item']['is_deleted']): ?>
                                    <a href="<?php echo $this->_tpl_vars['comment_item']['profile_url']; ?>
"><?php echo $this->_tpl_vars['comment_item']['username']; ?>
</a>&nbsp;<?php echo SK_Language::text("comment.commented"); ?>
                                   <?php if ($this->_tpl_vars['comment_item']['entity_url']): ?>
                                        <a href="<?php echo $this->_tpl_vars['comment_item']['entity_url']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['comment_item']['entity_title'])) ? $this->_run_mod_handler('censor', true, $_tmp, 'comment', true) : smarty_modifier_censor($_tmp, 'comment', true)); ?>
</a>
                                   <?php else: ?>
                                       <?php echo $this->_tpl_vars['comment_item']['entity_title']; ?>

                                   <?php endif; ?>
                                <?php else: ?>
                                    <span><?php echo SK_Language::text("label.deleted_member"); ?></span>
                                <?php endif; ?>
                             </div>
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['comment_item']['create_time_stamp'])) ? $this->_run_mod_handler('spec_date', true, $_tmp) : smarty_modifier_spec_date($_tmp)); ?>

                        </div>
                        <div class="del_link">
                            <?php if ($this->_tpl_vars['comment_item']['delete']): ?><a href="javascript://" <?php if ($this->caching && !$this->_cache_including): echo '{nocache:01d5db039b86f589bcc4c06576a9ce70#2}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId(($this->_tpl_vars['comment_item']['delete_link_id'])).'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:01d5db039b86f589bcc4c06576a9ce70#2}'; endif; ?>><?php echo SK_Language::text("comment.comment_manage_delete"); ?></a><?php endif; ?>
                        </div>
                    </div>
                    <div class="list_content">
                        <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['comment_item']['text'])) ? $this->_run_mod_handler('out_format', true, $_tmp, 'comment') : smarty_modifier_out_format($_tmp, 'comment')))) ? $this->_run_mod_handler('censor', true, $_tmp, 'comment') : smarty_modifier_censor($_tmp, 'comment')))) ? $this->_run_mod_handler('smile', true, $_tmp) : smarty_modifier_smile($_tmp)); ?>

                    </div>
                </div>
            </li>
        <?php endforeach; endif; unset($_from); ?>
        </ul>
     </div>
<?php else: ?>
    <div class="no_content"><?php echo SK_Language::text("comment.no_items"); ?></div>
<?php endif; ?>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:01d5db039b86f589bcc4c06576a9ce70#3}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:01d5db039b86f589bcc4c06576a9ce70#3}'; endif; ?>
