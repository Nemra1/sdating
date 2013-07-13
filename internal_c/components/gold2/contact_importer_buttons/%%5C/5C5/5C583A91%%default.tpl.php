<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/contact_importer_buttons/default.tpl */ ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/contact_importer_buttons/%%5C/5C5/5C583A91%%default.tpl.inc'] = 'd2b5ce575439e2ddbd61273541f363d7'; ?><?php if ($this->caching && !$this->_cache_including): echo '{nocache:d2b5ce575439e2ddbd61273541f363d7#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/float_right%2Bcontact_importer_buttons/%25%258C/8C5/8C5A5A38%25%25contact_importer_buttons.style.css?51e1848563639');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="float_right contact_importer_buttons">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:d2b5ce575439e2ddbd61273541f363d7#0}'; endif; ?>

<?php if ($this->_tpl_vars['buttons']['facebook']): ?>
<div class="fb_float_right">
    <button onclick="Fb_Invite();" class="fbib"><?php echo SK_Language::text("components.invite_friends.fb_invite_txt"); ?></button>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['buttons']['google']): ?>
<div class="gmail_float_right">
    <button class="gib" <?php if ($this->caching && !$this->_cache_including): echo '{nocache:d2b5ce575439e2ddbd61273541f363d7#1}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('google').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:d2b5ce575439e2ddbd61273541f363d7#1}'; endif; ?>><?php echo SK_Language::text("components.invite_friends.fb_invite_txt"); ?></button>
</div>
<?php endif; ?>

<?php if ($this->caching && !$this->_cache_including): echo '{nocache:d2b5ce575439e2ddbd61273541f363d7#2}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:d2b5ce575439e2ddbd61273541f363d7#2}'; endif; ?>