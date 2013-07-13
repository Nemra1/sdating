<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/member_home_links/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/member_home_links/default.tpl', 7, false),array('function', 'memberhome_href', 'components/member_home_links/default.tpl', 9, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/member_home_links/%%DA/DAE/DAE6E449%%default.tpl.inc'] = 'e397e31b374c8eea5eb9346a3c5d67e1'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:e397e31b374c8eea5eb9346a3c5d67e1#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/memberhome_hrefs_cont/%25%25AB/ABA/ABA21878%25%25member_home_links.style.css?51e184852161f');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="memberhome_hrefs_cont">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:e397e31b374c8eea5eb9346a3c5d67e1#0}'; endif; ?>
    
    <?php ob_start(); ?>
        <?php echo SK_Language::text("components.member_home.label_welcome", array('username' => $this->_tpl_vars['username'])); ?>
    <?php $this->_smarty_vars['capture']['username'] = ob_get_contents(); ob_end_clean(); ?>
    <?php $this->_tag_stack[] = array('block', array('title' => $this->_smarty_vars['capture']['username'])); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <div class="clearfix">
		<?php echo $this->_plugins['function']['memberhome_href'][0][0]->tpl_href(array('unit' => 'match','class' => 'my_match'), $this);?>

		<?php echo $this->_plugins['function']['memberhome_href'][0][0]->tpl_href(array('unit' => 'mailbox','class' => 'mailbox'), $this);?>

		<?php echo $this->_plugins['function']['memberhome_href'][0][0]->tpl_href(array('unit' => 'bookmark','class' => 'bookmarks'), $this);?>

		<?php echo $this->_plugins['function']['memberhome_href'][0][0]->tpl_href(array('unit' => 'blocklist','class' => 'block_list'), $this);?>

		<?php echo $this->_plugins['function']['memberhome_href'][0][0]->tpl_href(array('unit' => 'friendlist','class' => "friend-list"), $this);?>

		<?php echo $this->_plugins['function']['memberhome_href'][0][0]->tpl_href(array('unit' => 'birthday_list','class' => 'birthdate'), $this);?>

		<?php echo $this->_plugins['function']['memberhome_href'][0][0]->tpl_href(array('unit' => 'location_list','class' => 'location'), $this);?>

		<?php echo $this->_plugins['function']['memberhome_href'][0][0]->tpl_href(array('unit' => 'new_members_list','class' => 'new_members'), $this);?>

		<?php echo $this->_plugins['function']['memberhome_href'][0][0]->tpl_href(array('unit' => 'who_checked_me_out','class' => 'who_view'), $this);?>

		<?php echo $this->_plugins['function']['memberhome_href'][0][0]->tpl_href(array('unit' => 'moderation_list','class' => 'moderator'), $this);?>

		<?php echo $this->_plugins['function']['memberhome_href'][0][0]->tpl_href(array('unit' => 'my_groups_list','class' => 'my_groups'), $this);?>

		<?php echo $this->_plugins['function']['memberhome_href'][0][0]->tpl_href(array('unit' => 'speed_dating_bookmark','class' => 'speed_dating'), $this);?>

        </div>
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:e397e31b374c8eea5eb9346a3c5d67e1#1}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:e397e31b374c8eea5eb9346a3c5d67e1#1}'; endif; ?>