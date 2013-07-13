<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/shoutbox/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/shoutbox/default.tpl', 4, false),array('function', 'palette_picker', 'components/shoutbox/default.tpl', 57, false),array('function', 'smileset', 'components/shoutbox/default.tpl', 58, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/shoutbox/%%D0/D01/D0164C4A%%default.tpl.inc'] = '074834d2d8161d518a7134a157844961'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:074834d2d8161d518a7134a157844961#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/shoutbox/%25%257B/7BF/7BFD9248%25%25shoutbox.style.css?51e184858402a');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="shoutbox">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:074834d2d8161d518a7134a157844961#0}'; endif; ?>
<?php $this->_tag_stack[] = array('block', array('title' => $this->_tpl_vars['label_shoutbox'])); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php if ($this->_tpl_vars['read_permission_message']): ?>
<div>
    <?php echo $this->_tpl_vars['read_permission_message']; ?>

</div>
<?php else: ?>
<ul style="display: none">
        <li <?php if ($this->caching && !$this->_cache_including): echo '{nocache:074834d2d8161d518a7134a157844961#1}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('message_tpl').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:074834d2d8161d518a7134a157844961#1}'; endif; ?>  class="clearfix">
        <div class="shoutbox_avatar">
        <a href="#" class="profile_thumb_wrapper">
            <img width="45" class="profile_thumb" src="#">
        </a>
        </div>
        <div class="shoutbox_body">
        	<p class="msg_block"><a href="#" class="msg_username"></a>:&nbsp;<span class="msg_text"></span></p>
	        <span class="msg_time small"></span>
            <?php if ($this->_tpl_vars['isModerator']): ?>
                <div class="shoutbox_delete"><a href="javascript://"></a></div>
            <?php endif; ?>
        </div>
	</li>
</ul>

<div <?php if ($this->caching && !$this->_cache_including): echo '{nocache:074834d2d8161d518a7134a157844961#2}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('window').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:074834d2d8161d518a7134a157844961#2}'; endif; ?> class="shoutbox_window">
    <ul <?php if ($this->caching && !$this->_cache_including): echo '{nocache:074834d2d8161d518a7134a157844961#3}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('msg_list').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:074834d2d8161d518a7134a157844961#3}'; endif; ?> ><?php if ($this->_tpl_vars['no_messages']): ?><li><div class="center" id="no_messages_label"><?php echo SK_Language::text("components.shoutbox.no_messages"); ?></div></li><?php else: ?><li><div class='shoutbox_preloader'></div></li><?php endif; ?></ul>
</div>
<?php if ($this->_tpl_vars['write_permission_message']): ?>
<div>
    <?php echo $this->_tpl_vars['write_permission_message']; ?>

</div>
<?php else: ?>
<div <?php if ($this->caching && !$this->_cache_including): echo '{nocache:074834d2d8161d518a7134a157844961#4}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('bottom').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:074834d2d8161d518a7134a157844961#4}'; endif; ?> class="shoutbox_bottom">
    <form <?php if ($this->caching && !$this->_cache_including): echo '{nocache:074834d2d8161d518a7134a157844961#5}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('shoutbox_input_form').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:074834d2d8161d518a7134a157844961#5}'; endif; ?> onsubmit="return false">
        <div class="shoutbox_input_container" >
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td valign="top">
                        <div class="clearfix">
                            <div class="shoutbox_right">
                                <?php if ($this->_tpl_vars['is_guest']): ?>                                
                                    <input type="text" <?php if ($this->caching && !$this->_cache_including): echo '{nocache:074834d2d8161d518a7134a157844961#6}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('username').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:074834d2d8161d518a7134a157844961#6}'; endif; ?> name="username" class="shoutbox_input" size="14" />
                                    <?php echo $this->_tpl_vars['username_invitation']; ?>

                                <?php endif; ?>
                            </div>
                            <div class="clr_div"></div>
                            <div class="shoutbox_right">                                
                                <input type="text" <?php if ($this->caching && !$this->_cache_including): echo '{nocache:074834d2d8161d518a7134a157844961#7}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('input').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:074834d2d8161d518a7134a157844961#7}'; endif; ?> name="text_entry" class="shoutbox_input" size="14"/>
                               <?php echo $this->_tpl_vars['text_entry_invitation']; ?>

                            </div>
                        </div>
                    </td>
                    <td valign="bottom" nowrap="nowrap">
                        <div class="shoutbox_left"><?php echo smarty_function_palette_picker(array('id' => 'msg_color'), $this);?>
</div>
                        <div class="shoutbox_left"><?php echo smarty_function_smileset(array('for' => 'input'), $this);?>
</div>
                        <input type="submit" <?php if ($this->caching && !$this->_cache_including): echo '{nocache:074834d2d8161d518a7134a157844961#8}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('send_btn').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:074834d2d8161d518a7134a157844961#8}'; endif; ?> class="shoutbox_send_btn" value="<?php echo SK_Language::text("components.shoutbox.send_button"); ?>" />
                               <div class="clr_div"></div>
                    </td>
                </tr>
            </table>
        </div>
    </form>
</div>
<?php endif; ?>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:074834d2d8161d518a7134a157844961#9}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:074834d2d8161d518a7134a157844961#9}'; endif; ?>