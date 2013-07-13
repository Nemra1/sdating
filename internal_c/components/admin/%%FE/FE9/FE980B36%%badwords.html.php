<?php /* Smarty version 2.6.27, created on 2013-07-13 12:05:14
         compiled from badwords.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_page', 'badwords.html', 5, false),array('function', 'cycle', 'badwords.html', 43, false),array('function', 'print_configs', 'badwords.html', 130, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div style="float:left;width:64%;">

<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<form action="" method="POST">
         <input type="hidden" name="edit" value="1" />
         <table cellspacing="1" style="width:100%;">
           <thead>
             <tr>
               <th id="profile_message_keyword_title_thead_cell" colspan="2"> Badwords List </th>
             </tr>
           </thead>
           <tbody>
           <tr >
                <td colspan="5" style="padding:0">
                    <div id="tabs">

                        <div class="<?php if ($this->_tpl_vars['badword_type'] == 'word'): ?>active_tab<?php else: ?>tab<?php endif; ?>">

                            <a href="<?php echo @URL_ADMIN; ?>
badwords.php?badword_type=word">Word</a>
                            <div class="active_tab_no_border"></div>

                        </div>
                        <div class="<?php if ($this->_tpl_vars['badword_type'] == 'string'): ?>active_tab<?php else: ?>tab<?php endif; ?>">

                            <a href="<?php echo @URL_ADMIN; ?>
badwords.php?badword_type=string">String</a>
                            <div class="active_tab_no_border"></div>

                        </div>
                        <div class="<?php if ($this->_tpl_vars['badword_type'] == 'regexp'): ?>active_tab<?php else: ?>tab<?php endif; ?>">

                            <a href="<?php echo @URL_ADMIN; ?>
badwords.php?badword_type=regexp">Regexp</a>
                            <div class="active_tab_no_border"></div>

                        </div>
                </td>

           </tr>
		<?php if ($this->_tpl_vars['badwords']): ?>

           <?php $_from = $this->_tpl_vars['badwords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['badword']):
?>
           <tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
             <td>
                 <input type="text" class="badword_input" name="badwords[<?php echo $this->_tpl_vars['badword']->getId(); ?>
]" value="<?php if (! empty ( $this->_tpl_vars['error_list'][$this->_tpl_vars['key']] )): ?><?php echo $this->_tpl_vars['error_list'][$this->_tpl_vars['key']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['badword']->getLabel(); ?>
<?php endif; ?>" size="50" maxlength="250" />
                 <?php if (! empty ( $this->_tpl_vars['error_list'][$this->_tpl_vars['key']] )): ?>
                    <div style="color: red;padding-top:5px;padding-bottom:5px;">Please enter a valid badword (at least 3 characters)</div></td>
                 <?php endif; ?>
             <td width="12%"><a href="<?php echo $this->_tpl_vars['uri']; ?>
&delete_id=<?php echo $this->_tpl_vars['badword']->getId(); ?>
" class="delete"></a></td>
           </tr>
           <?php endforeach; endif; unset($_from); ?>
           <tr>
           	<td colspan="5">Pages:
               	<?php $_from = $this->_tpl_vars['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>
                   	<?php if ($this->_tpl_vars['page']['active']): ?><span>&nbsp;<?php echo $this->_tpl_vars['page']['index']; ?>
</span><?php else: ?>
                       <a href="<?php echo @URL_ADMIN; ?>
badwords.php?page=<?php echo $this->_tpl_vars['page']['index']; ?>
&badword_type=<?php echo $this->_tpl_vars['badword_type']; ?>
" style="font-weight:bold;"><?php echo $this->_tpl_vars['page']['index']; ?>
</a>&nbsp;
                       <?php endif; ?>
                   <?php endforeach; endif; unset($_from); ?>
               </td>
           </tr>
           </tbody>

           <tfoot>
             <tr>
               <td colspan="2"><input type="submit" class="submit" value="Edit" />
               </td>
             </tr>
           </tfoot>
		<?php else: ?>
			<tr class="tr_1">
				<td colspan="5">No items</td>
			</tr>
			</tbody>
		<?php endif; ?>
         </table>
   </form>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<form action="" method="POST" onsubmit="if( jQuery.trim(this.badword.value).length < 3 )<?php echo '{alert(\'Please enter a valid badword (at least 3 characters)\');return false;}'; ?>
">
           <input type="hidden" name="add" value="1" />
           <table cellspacing="1" cellpadding="0">
           	<thead>
                   <tr>
                     <th colspan="2">Add new badword</th>
                   </tr>
               </thead>
             <tbody>
               <tr class="tr_1">
                 <td style="padding: 5px 10px;">
                     Badword type
                 </td>
                 <td>
                     <select name="badword_type">
                        <option value="word">Word</option>
                        <option value="string">String</option>
                        <option value="regexp">Regexp</option>
                     </select>
                 </td>
               </tr>
               <tr class="tr_2">
                    <td style="padding: 5px 10px;">
                        Text
                    </td>
                    <td>
                        <input type="text" name="badword" size="45" maxlength="250" />
                    </td>
               </tr>
               <tr>
                 <td colspan="2">
                     <input type="submit" class="submit" value="Add" />
                 </td>
               </tr>
             </tbody>
           </table>
         </form>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

</div>

<div style="float:right;width:35%;">

<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<table style="width:100%;">
         <thead>
         <th>Censored features</th>
           </thead>
         <tbody>
           <tr>
             <td> <?php echo adminConfig::FrontendPrintConfig(array('section' => 'badwords'), $this);?>
 </td>
           </tr>
         </tbody>
    </table>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

</div>
<br clear="all" />
<script type="text/javascript">

</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>