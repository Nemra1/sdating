<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/newsfeed/no_permission.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_cap', 'components/newsfeed/no_permission.tpl', 4, false),array('block', 'block', 'components/newsfeed/no_permission.tpl', 5, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/newsfeed/%%50/501/5018BD3A%%no_permission.tpl.inc'] = '94e277b02e20c385119d4218c6c7956d'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:94e277b02e20c385119d4218c6c7956d#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/newsfeed/%25%250E/0E5/0E56E51C%25%25newsfeed.style.css?51e1848541e9f');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="newsfeed">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:94e277b02e20c385119d4218c6c7956d#0}'; endif; ?>
    <?php $this->_tag_stack[] = array('block_cap', array('title' => SK_Language::text("components.newsfeed.cap_label"))); $_block_repeat=true;$this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><a class="delete_cmp" href="javascript://"></a><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $this->_tag_stack[] = array('block', array()); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

    <div class="center">
        <?php echo $this->_tpl_vars['no_permission_msg']; ?>

    </div>
        
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:94e277b02e20c385119d4218c6c7956d#1}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:94e277b02e20c385119d4218c6c7956d#1}'; endif; ?>