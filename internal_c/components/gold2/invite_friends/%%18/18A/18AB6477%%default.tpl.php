<?php /* Smarty version 2.6.27, created on 2013-07-13 11:47:01
         compiled from components/invite_friends/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_cap', 'components/invite_friends/default.tpl', 38, false),array('block', 'block', 'components/invite_friends/default.tpl', 39, false),)), $this); ?>
<?php $this->_cache_serials['/Applications/MAMP/dev.local/ska/internal_c/components/gold2/invite_friends/%%18/18A/18AB6477%%default.tpl.inc'] = '8c4dc93e9a99c5ab7ef4f411c6eae679'; ?>

 <?php if ($this->caching && !$this->_cache_including): echo '{nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#0}'; endif;$this->includeCSSFile('http://dev.local/ska/external_c/gold2/invite_friends_cont/%25%25F6/F6B/F6B47B0F%25%25invite_friends.style.css?51e1848558d1b');

?>
<div id="<?php echo SK_Layout::current_component()->auto_id; ?>" class="invite_friends_cont">
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#0}'; endif; ?>
 <?php if ($this->_tpl_vars['contactGrabber']): ?>
 	<div <?php if ($this->caching && !$this->_cache_including): echo '{nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#1}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('box_title').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#1}'; endif; ?> style="display:none"><b><?php echo SK_Language::text("components.invite_friends.import.box_label"); ?></b></div>
	<div <?php if ($this->caching && !$this->_cache_including): echo '{nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#2}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('box_content').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#2}'; endif; ?> style="display:none">
		<div class="import_container">

			<div class="auth_cont">
					<div class="mobile_cont">
						<form>
							<table class="form">
								<tbody>
									<tr>
										<td class="label"><?php echo SK_Language::text("components.invite_friends.import.email"); ?></td><td class="value"><input type="text" name="email"></td>
									</tr>
									<tr>
										<td class="label"><?php echo SK_Language::text("components.invite_friends.import.password"); ?></td><td class="value"><input type="password" name="password"></td>
									</tr>
									<tr>
										<td class="label"><?php echo SK_Language::text("components.invite_friends.import.provider"); ?></td>
										<td class="value">
											<select name="provider" class="provider">
												<?php $_from = $this->_tpl_vars['providers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['provider']):
?>
													<option value="<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['provider']['name']; ?>
</option>
												<?php endforeach; endif; unset($_from); ?>
											</select>
										</td>
									</tr>
								</tbody>
							</table>
							<p align="center"><input type="submit" value="<?php echo SK_Language::text("components.invite_friends.import.get_contacts_btn"); ?>"></p>
						</form>
					</div>
			</div>
			<div class="contact_list" style="display:none">
			<!--<div class="open_list pointer"><?php $this->_tag_stack[] = array('block_cap', array('title' => SK_Language::text("components.invite_friends.import.contact_list"))); $_block_repeat=true;$this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="drop_list_icon"></div><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>-->
				<?php $this->_tag_stack[] = array('block', array('class' => 'nomargin','title' => SK_Language::text("components.invite_friends.import.contact_list"),'expandable' => true,'id' => 'contact_list')); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<div  class="list_items_cont">
						<table width="98%" class="form">
							<tbody>
								<tr>
									<td class="check"></td>
									<td class="name label"><b><?php echo SK_Language::text("components.invite_friends.import.name_label"); ?></b></td>
									<td class="address value"><b><?php echo SK_Language::text("components.invite_friends.import.address_label"); ?></b></td>
								</tr>
								<tr class="empty_list" style="display: none">
									<td colspan="3" class="center"><?php echo SK_Language::text("components.invite_friends.import.empty_list_text"); ?></td>
								</tr>
								<tr class="contact_item list_item prototype_node">
									<td class="check"><input type="checkbox"></td>
									<td class="name label info"></td>
									<td class="address value info"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<!--<div class="mobile_cont" style="display:none">
						<div class="list_items_cont">
							<div class="contact_item list_item prototype_node">
								<div class="check"><input type="checkbox"></div>
								<div class="info">
									<div class="name"></div>
									<div class="address"></div>
									<br clear="all" />
								</div>
								<br clear="all"	/>
							</div>
						</div>-->
						<p class="check_all"><input type="checkbox"}>&nbsp;<?php echo SK_Language::text("components.invite_friends.import.check_all"); ?></p>

						<p align="center"><input type="button" name="add_contact" value="<?php echo SK_Language::text("components.invite_friends.import.add_contact_btn"); ?>"></p>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div class="invite_form_cont">
	 	<?php $this->_tag_stack[] = array('block', array()); $_block_repeat=true;$this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('block_cap', array('title' => SK_Language::text("components.invite_friends.block_label"))); $_block_repeat=true;$this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	 		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#3}'; endif;
$component = SK_Component('ContactImporterButtons');

echo $this->renderComponent($component);
if ($this->caching && !$this->_cache_including): echo '{/nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#3}'; endif; ?>
 		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_cap'][0][0]->tpl_block_cap($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php if ($this->caching && !$this->_cache_including): echo '{nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#4}'; endif;include '/Applications/MAMP/dev.local/ska/internal_c/forms/invite_friends.form.php';
SK_Layout::current_component()->handleForm($form);
SK_Layout::frontend_handler()->registerForm($form);
echo $form->renderStart();
$this->assign('form', $form);
if ($this->caching && !$this->_cache_including): echo '{/nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#4}'; endif; ?>
				<p>
					<?php echo $form->renderFieldLabel(array('for' => 'email_addr')); ?><?php if ($this->_tpl_vars['contactGrabber']): ?>&nbsp;<a href="javascript://" <?php if ($this->caching && !$this->_cache_including): echo '{nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#5}'; endif;echo 'id="'.SK_Layout::current_component()->getTagAutoId('open_box_btn').'"';if ($this->caching && !$this->_cache_including): echo '{/nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#5}'; endif; ?>><?php echo SK_Language::text("components.invite_friends.import.open_btn"); ?></a><?php endif; ?>
					<?php if ($this->caching && !$this->_cache_including): echo '{nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#6}'; endif;
echo $form->renderField(array('name' => 'email_addr'));
if ($this->caching && !$this->_cache_including): echo '{/nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#6}'; endif; ?>
			 	</p>
			 	<p>
					<?php echo $form->renderFieldLabel(array('for' => 'message')); ?>
					<?php if ($this->caching && !$this->_cache_including): echo '{nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#7}'; endif;
echo $form->renderField(array('name' => 'message'));
if ($this->caching && !$this->_cache_including): echo '{/nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#7}'; endif; ?>
			 	</p>
			 	<p align="right">
					<?php if ($this->caching && !$this->_cache_including): echo '{nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#8}'; endif;
echo $form->renderButton(array('action' => 'process'));
if ($this->caching && !$this->_cache_including): echo '{/nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#8}'; endif; ?>
				</p>
			 <?php if ($this->caching && !$this->_cache_including): echo '{nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#9}'; endif;unset($this->_tpl_vars['form'], $form);
echo '</form>';if ($this->caching && !$this->_cache_including): echo '{/nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#9}'; endif; ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block'][0][0]->tpl_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
 	</div>
 <?php if ($this->caching && !$this->_cache_including): echo '{nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#10}'; endif;
?>
</div>
<?php
if ($this->caching && !$this->_cache_including): echo '{/nocache:8c4dc93e9a99c5ab7ef4f411c6eae679#10}'; endif; ?>