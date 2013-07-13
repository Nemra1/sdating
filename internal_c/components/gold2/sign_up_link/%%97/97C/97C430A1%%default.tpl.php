<?php /* Smarty version 2.6.27, created on 2013-07-13 10:39:51
         compiled from components/sign_up_link/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/sign_up_link/default.tpl', 4, false),array('block', 'block_cap', 'components/sign_up_link/default.tpl', 5, false),array('function', 'document_url', 'components/sign_up_link/default.tpl', 7, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/sign_up_link/%%97/97C/97C430A1%%default.tpl.inc'] = '41e235397e22219a6e0ed561fa64cc4c'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:41e235397e22219a6e0ed561fa64cc4c#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/sign_up_link/%25%25C3/C36/C3614276%25%25sign_up_link.style.css?51e174c7eb21f');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="sign_up_link">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:41e235397e22219a6e0ed561fa64cc4c#0}'; endif; ?>
	<?php $this->_tag_stack[] = array('block', array('class' => 'block')); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->_tag_stack[] = array('block_cap', array()); $_block_repeat=true;$this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<div class="link_container">
			<a href="<?php echo smarty_function_document_url(array('doc_key' => 'join_profile'), $this);?>
"><?php echo SK_Language::text("components.sign_up_link.link_label"); ?></a>
		</div>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:41e235397e22219a6e0ed561fa64cc4c#1}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:41e235397e22219a6e0ed561fa64cc4c#1}'; endif; ?>