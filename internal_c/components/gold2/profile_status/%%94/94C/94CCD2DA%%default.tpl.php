<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/profile_status/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block', 'components/profile_status/default.tpl', 5, false),array('block', 'block_cap', 'components/profile_status/default.tpl', 6, false),array('function', 'document_url', 'components/profile_status/default.tpl', 21, false),array('function', 'text_formatter', 'components/profile_status/default.tpl', 52, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/profile_status/%%94/94C/94CCD2DA%%default.tpl.inc'] = '5e15508c0f41cc7848841cd5325fed4c'; ?> 
<?php if ($this->caching && !$this->_cache_including): echo '{nocache:5e15508c0f41cc7848841cd5325fed4c#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/profile_status/%25%2531/31B/31B7F303%25%25profile_status.style.css?51e1848570fa0');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="profile_status">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:5e15508c0f41cc7848841cd5325fed4c#0}'; endif; ?>

<?php $this->_tag_stack[] = array('block', array('class' => 'status_bg')); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $this->_tag_stack[] = array('block_cap', array('title' => SK_Language::text("components.profile_status.profile_status_header"))); $_block_repeat=true;$this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="profile_status_toggle" <?php if ($this->caching && !$this->_cache_including): echo '{nocache:5e15508c0f41cc7848841cd5325fed4c#1}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('profile_status_toggle_cont').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:5e15508c0f41cc7848841cd5325fed4c#1}'; endif; ?>></div><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<table width="100%">
	<tbody>
		<tr>
			<td width="40%"><?php echo SK_Language::text("components.profile_status.profile_status_label"); ?>:</td>
			<td width="60%"><span <?php if ($this->caching && !$this->_cache_including): echo '{nocache:5e15508c0f41cc7848841cd5325fed4c#2}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('status_value').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:5e15508c0f41cc7848841cd5325fed4c#2}'; endif; ?> class="bold"></span></td>
		</tr>
		<tr>
			<td><?php echo SK_Language::text("components.profile_status.membership_label"); ?>:</td>
			<td>
				<span class="bold"><?php echo SK_Language::text("membership.types.".($this->_tpl_vars['membership']['membership_type_id'])); ?></span>
				<?php if ($this->_tpl_vars['membership']['expiration_time']): ?>
					(<?php echo SK_Language::text("components.profile_status.expiration_time"); ?> <?php echo $this->_tpl_vars['membership']['expiration_time']; ?>
)
				<?php endif; ?>
				<?php if ($this->_tpl_vars['membership']['type'] == 'subscription' && $this->_tpl_vars['membership']['limit'] == 'unlimited'): ?>
				    <span class="small">(<a href="<?php echo smarty_function_document_url(array('doc_key' => 'payment_selection'), $this);?>
"><?php echo SK_Language::text("membership.membership_selection_title"); ?></a>)</span>
				<?php endif; ?>
			</td>
		</tr>
        <?php if ($this->_tpl_vars['credits_balance']): ?>
        <tr>
            <td><?php echo SK_Language::text("components.profile_status.credits_left"); ?>:</td>
            <td>
                <span class="bold"><?php echo $this->_tpl_vars['credits_balance']; ?>
</span>
                <span class="small">(<a href="<?php echo smarty_function_document_url(array('doc_key' => 'points_purchase'), $this);?>
"><?php echo SK_Language::text("user_points.buy_more"); ?></a>)</span>
            </td>
        </tr>
		<?php endif; ?>
		<tr>
			<td colspan="2" class="user_status_update_form">
				<span <?php if ($this->caching && !$this->_cache_including): echo '{nocache:5e15508c0f41cc7848841cd5325fed4c#3}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('user_status_curr_value').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:5e15508c0f41cc7848841cd5325fed4c#3}'; endif; ?>
					class="user_status_curr_value">
					<?php if ($this->_tpl_vars['user_status']): ?>
						<?php echo SK_Language::text("components.profile_status.profile_status_header"); ?>:
						<?php echo $this->_tpl_vars['username']; ?>
 <a href="javascript://" onclick="$('#status-form').toggle();"><?php echo $this->_tpl_vars['user_status']; ?>
</a>
					<?php endif; ?>
				</span>
				<div class="user_status_form" id="status-form" style="<?php if ($this->_tpl_vars['user_status']): ?>display: none;<?php endif; ?>">
				<?php if ($this->caching && !$this->_cache_including): echo '{nocache:5e15508c0f41cc7848841cd5325fed4c#4}'; endif;include '/Applications/MAMP/dev.local/ska/internal_c/forms/user_status.form.php';
SK_Layout::current_component()->handleForm($form);
SK_Layout::frontend_handler()->registerForm($form);
echo $form->renderStart();
$this->assign('form', $form);
if ($this->caching && !$this->_cache_including): echo '{/nocache:5e15508c0f41cc7848841cd5325fed4c#4}'; endif; ?>
					<div class="float_left">
						<span style="display: none"><?php echo $form->renderFieldLabel(array('for' => 'status')); ?></span>
						<span class="username_label"><?php echo $this->_tpl_vars['username']; ?>
</span>
					</div>
					<div class="float_left" style="vertical-align:top;">
						<?php if ($this->caching && !$this->_cache_including): echo '{nocache:5e15508c0f41cc7848841cd5325fed4c#5}'; endif;
echo $form->renderField(array('name' => 'status'));
if ($this->caching && !$this->_cache_including): echo '{/nocache:5e15508c0f41cc7848841cd5325fed4c#5}'; endif; ?>
					</div>
					<div class="float_left" style="vertical-align:top;"><?php echo smarty_function_text_formatter(array('for' => 'status','controls' => 'emoticon','entity' => 'profile_status'), $this);?>
</div>
					<div class="float_left" style="vertical-align:top;"><?php if ($this->caching && !$this->_cache_including): echo '{nocache:5e15508c0f41cc7848841cd5325fed4c#6}'; endif;
echo $form->renderButton(array('action' => 'update'));
if ($this->caching && !$this->_cache_including): echo '{/nocache:5e15508c0f41cc7848841cd5325fed4c#6}'; endif; ?></div>
                    <span class="small status_length"><?php echo SK_Language::text("components.profile_status.constraint_profile_status_length", array('length' => 40)); ?></span>
				<?php if ($this->caching && !$this->_cache_including): echo '{nocache:5e15508c0f41cc7848841cd5325fed4c#7}'; endif;unset($this->_tpl_vars['form'], $form);
echo '</form>';if ($this->caching && !$this->_cache_including): echo '{/nocache:5e15508c0f41cc7848841cd5325fed4c#7}'; endif; ?>
				</div>
			</td>
		</tr>
	</tbody>
</table>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php if ($this->caching && !$this->_cache_including): echo '{nocache:5e15508c0f41cc7848841cd5325fed4c#8}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:5e15508c0f41cc7848841cd5325fed4c#8}'; endif; ?>