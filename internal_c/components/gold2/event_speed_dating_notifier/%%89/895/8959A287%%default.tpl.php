<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/event_speed_dating_notifier/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/event_speed_dating_notifier/default.tpl', 2, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/event_speed_dating_notifier/%%89/895/8959A287%%default.tpl.inc'] = '27614b592bc84c71683be1d1ce992c90'; ?><div class="event_speed_dating_container" <?php if ($this->_tpl_vars['display']): ?> style='display: block;' <?php else: ?> style='display: none;' <?php endif; ?>>
	<?php $this->_tag_stack[] = array('block', array('title' => SK_Language::text("event.speed_dating_events"))); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<div id="event_speed_dating_status">
			<label id='esd_profile_in_session'></label>
			<br />			
			<label id='esd_elapsed_time'></label>
            <div style="text-align:left; margin-top:5px;"><input class="pcv_add_cmps" type="button" id="esd_notifier_next_member" value="<?php echo SK_Language::text("components.event.speed_dating.esd_notifier_next_member_label"); ?>" disabled="disabled" /></div>
            <div style="text-align:left; margin-top:15px; display: none;" id='esd_notifier_reopen_container'><input class="pcv_add_cmps" type="button" id="esd_notifier_reopen" value="<?php echo SK_Language::text("components.event.speed_dating.esd_notifier_reopen_label"); ?>"  /></div>
		</div>
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:27614b592bc84c71683be1d1ce992c90#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/event_speed_dating_notifier/%25%258A/8A2/8A2973BD%25%25style.style.css?51e184850abd1');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="event_speed_dating_notifier">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:27614b592bc84c71683be1d1ce992c90#0}'; endif; ?>
		
		<div <?php if ($this->caching && !$this->_cache_including): echo '{nocache:27614b592bc84c71683be1d1ce992c90#1}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('event_speed_dating_notifier_content').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:27614b592bc84c71683be1d1ce992c90#1}'; endif; ?> style="display:none;">
		<input type='hidden' id="esd_notifier_countdown" />
		<span class="title"><?php echo SK_Language::text("components.event.speed_dating.notifier_cap_title"); ?></span>
		    <span class="content">
		    	<span class="block_body"></span>
				<br clear="all" />
				<div style="text-align:center"><input class="pcv_add_cmps" type="button" <?php if ($this->caching && !$this->_cache_including): echo '{nocache:27614b592bc84c71683be1d1ce992c90#2}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('esd_notifier_submit').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:27614b592bc84c71683be1d1ce992c90#2}'; endif; ?> value="<?php echo SK_Language::text("components.event.speed_dating.esd_notifier_submit_label"); ?>" /></div>
			</span>
		</div>
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:27614b592bc84c71683be1d1ce992c90#3}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:27614b592bc84c71683be1d1ce992c90#3}'; endif; ?>

		<div class="clr"></div>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>