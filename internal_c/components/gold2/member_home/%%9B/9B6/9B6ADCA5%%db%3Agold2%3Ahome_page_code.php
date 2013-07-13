<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:00
         compiled from db:gold2:home_page_code */ ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/member_home/%%9B/9B6/9B6ADCA5%%db%3Agold2%3Ahome_page_code.inc'] = '7ee5febdaa3ca987882777cb3dbafa3b'; ?><?php if ($this->caching && !$this->_cache_including): echo '{nocache:7ee5febdaa3ca987882777cb3dbafa3b#0}'; endif;global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	$this->includeCSSFile('http://dev.local/ska/external_c/gold2/%25%2510/101/10196301%25%25interface.style.css?51e18484af787');

	 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}
if ($this->caching && !$this->_cache_including): echo '{/nocache:7ee5febdaa3ca987882777cb3dbafa3b#0}'; endif; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:7ee5febdaa3ca987882777cb3dbafa3b#1}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/memberhome/%25%2589/891/891F069E%25%25memberhome.style.css?51e18484b0b6c');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="memberhome">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:7ee5febdaa3ca987882777cb3dbafa3b#1}'; endif; ?>

<div class="clearfix">
    <div class="float_half_left">
        <?php if ($this->caching && !$this->_cache_including): echo '{nocache:7ee5febdaa3ca987882777cb3dbafa3b#2}'; endif;
$component = SK_Component('MemberHomeLinks');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:7ee5febdaa3ca987882777cb3dbafa3b#2}'; endif; ?>
        <?php if ($this->caching && !$this->_cache_including): echo '{nocache:7ee5febdaa3ca987882777cb3dbafa3b#3}'; endif;
$component = SK_Component('SiteNewsfeed');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:7ee5febdaa3ca987882777cb3dbafa3b#3}'; endif; ?>  
        <?php if ($this->caching && !$this->_cache_including): echo '{nocache:7ee5febdaa3ca987882777cb3dbafa3b#4}'; endif;
$component = SK_Component('ProfileGiftList');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:7ee5febdaa3ca987882777cb3dbafa3b#4}'; endif; ?>
        <?php if ($this->caching && !$this->_cache_including): echo '{nocache:7ee5febdaa3ca987882777cb3dbafa3b#5}'; endif;
$component = SK_Component('SavedLists');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:7ee5febdaa3ca987882777cb3dbafa3b#5}'; endif; ?>
        <?php if ($this->caching && !$this->_cache_including): echo '{nocache:7ee5febdaa3ca987882777cb3dbafa3b#6}'; endif;
$component = SK_Component('InviteFriends');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:7ee5febdaa3ca987882777cb3dbafa3b#6}'; endif; ?>
    </div>

    <div class="float_half_right">
        <?php if ($this->caching && !$this->_cache_including): echo '{nocache:7ee5febdaa3ca987882777cb3dbafa3b#7}'; endif;
$component = SK_Component('OnlineUsersMap');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:7ee5febdaa3ca987882777cb3dbafa3b#7}'; endif; ?>
        <?php if ($this->caching && !$this->_cache_including): echo '{nocache:7ee5febdaa3ca987882777cb3dbafa3b#8}'; endif;
$component = SK_Component('ImportantTips');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:7ee5febdaa3ca987882777cb3dbafa3b#8}'; endif; ?>
        <?php if ($this->caching && !$this->_cache_including): echo '{nocache:7ee5febdaa3ca987882777cb3dbafa3b#9}'; endif;
$component = SK_Component('ProfileStatus');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:7ee5febdaa3ca987882777cb3dbafa3b#9}'; endif; ?>
        <?php if ($this->caching && !$this->_cache_including): echo '{nocache:7ee5febdaa3ca987882777cb3dbafa3b#10}'; endif;
$component = SK_Component('Shoutbox');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:7ee5febdaa3ca987882777cb3dbafa3b#10}'; endif; ?>
        <?php if ($this->caching && !$this->_cache_including): echo '{nocache:7ee5febdaa3ca987882777cb3dbafa3b#11}'; endif;
$component = SK_Component('IndexNews');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:7ee5febdaa3ca987882777cb3dbafa3b#11}'; endif; ?> 
        <?php if ($this->caching && !$this->_cache_including): echo '{nocache:7ee5febdaa3ca987882777cb3dbafa3b#12}'; endif;
$component = SK_Component('QuickSearch');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:7ee5febdaa3ca987882777cb3dbafa3b#12}'; endif; ?>
        <?php if ($this->caching && !$this->_cache_including): echo '{nocache:7ee5febdaa3ca987882777cb3dbafa3b#13}'; endif;
$component = SK_Component('IndexCommentsOverview');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:7ee5febdaa3ca987882777cb3dbafa3b#13}'; endif; ?>        
    </div>
</div>

<?php if ($this->caching && !$this->_cache_including): echo '{nocache:7ee5febdaa3ca987882777cb3dbafa3b#14}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:7ee5febdaa3ca987882777cb3dbafa3b#14}'; endif; ?>
<?php global $ajax_response;
if ( SK_Layout::current_component()->auto_id === 'httpdoc' && !isset($ajax_response) ) {
	 $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/gold2/canvas/default/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 
}
 ?>