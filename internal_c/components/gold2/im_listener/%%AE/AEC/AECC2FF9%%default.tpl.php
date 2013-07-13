<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:00
         compiled from components/im_listener/default.tpl */ ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/im_listener/%%AE/AEC/AECC2FF9%%default.tpl.inc'] = 'b8ef7939e308ebb57d4d3841263eb634'; ?>
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:b8ef7939e308ebb57d4d3841263eb634#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/im_listener/%25%2587/873/87372032%25%25im_listener.style.css?51e18484eb76d');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="im_listener">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:b8ef7939e308ebb57d4d3841263eb634#0}'; endif; ?>

<div style="display: none;">
	<div <?php if ($this->caching && !$this->_cache_including): echo '{nocache:b8ef7939e308ebb57d4d3841263eb634#1}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('im_invitaion_tpl').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:b8ef7939e308ebb57d4d3841263eb634#1}'; endif; ?> class="block_body">
        <div class="block_body_r">
            <div class="block_body_c clearfix"></div>
        </div>
	</div>
</div>

<?php if ($this->_tpl_vars['im_enable_sound']): ?>
    <div id="im_sound_player" style="position: absolute; top: -1000px;"></div>
<?php endif; ?>

<div <?php if ($this->caching && !$this->_cache_including): echo '{nocache:b8ef7939e308ebb57d4d3841263eb634#2}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('im_invitations').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:b8ef7939e308ebb57d4d3841263eb634#2}'; endif; ?> class="block im_invitation" style="display: none;">
    <div class="block_cap">
        <div class="block_cap_r">
            <div class="block_cap_c clearfix">
                <h3 class="block_cap_title"><?php echo SK_Language::text("components.im_listener.new_invitation_title"); ?></h3>
            </div>
        </div>
    </div>
    <div class="block_bottom">
        <div class="block_bottom_r"><div class="block_bottom_c"></div></div>
    </div>
</div>

<?php if ($this->caching && !$this->_cache_including): echo '{nocache:b8ef7939e308ebb57d4d3841263eb634#3}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:b8ef7939e308ebb57d4d3841263eb634#3}'; endif; ?>