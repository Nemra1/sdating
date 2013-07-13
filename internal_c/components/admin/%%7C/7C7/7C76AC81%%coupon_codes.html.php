<?php /* Smarty version 2.6.27, created on 2013-07-13 11:50:51
         compiled from coupon_codes.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_page', 'coupon_codes.html', 4, false),array('function', 'cycle', 'coupon_codes.html', 26, false),array('function', 'print_configs', 'coupon_codes.html', 104, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<?php if ($this->_tpl_vars['codes']): ?>
<form method="POST">
<input type="hidden" name="action" value="update" />
<table width="100%">
    <thead>
        <tr>
            <th colspan="4">Codes</th>
        </tr>
        <tr>
            <td>Code</td>
            <td>Start stamp</td>
            <td>Expire stamp</td>
            <td>Discount, %</td>
            <td>Membership</td>
            <td>Expired</td>
            <td width="6%"></td>
        </tr>
    </thead>
    <tbody>
        <?php $_from = $this->_tpl_vars['codes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['code']):
?>
        <tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
            <td><input type="text" name="code[<?php echo $this->_tpl_vars['code']['id']; ?>
]" value="<?php echo $this->_tpl_vars['code']['code']; ?>
" size="15" /></td>
            <td><input type="text" name="start_ts[<?php echo $this->_tpl_vars['code']['id']; ?>
]" value="<?php echo $this->_tpl_vars['code']['start_stamp']; ?>
" size="9" /></td>
            <td><input type="text" name="expire_ts[<?php echo $this->_tpl_vars['code']['id']; ?>
]" value="<?php echo $this->_tpl_vars['code']['expire_stamp']; ?>
" size="9" /></td>
            <td><input type="text" name="discount[<?php echo $this->_tpl_vars['code']['id']; ?>
]" value="<?php echo $this->_tpl_vars['code']['percent']; ?>
" size="3" maxlength="3" /></td>
            <td>
                <select name="membership_id[<?php echo $this->_tpl_vars['code']['id']; ?>
]" style="width: 130px;">
                    <?php $_from = $this->_tpl_vars['ms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['m']):
?>
                        <option value="<?php echo $this->_tpl_vars['m']['membership_type_id']; ?>
"<?php if ($this->_tpl_vars['code']['membership_type_id'] == $this->_tpl_vars['m']['membership_type_id']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['m']['label']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
            <td><?php if ($this->_tpl_vars['code']['expired']): ?>yes<?php else: ?>no<?php endif; ?></td>
            <td>
                <a class="delete" title="Delete" href="javascript://" onclick="if ( confirm('Are you sure you want to delete coupon code?') ) document.location.href='<?php echo @URL_ADMIN; ?>
coupon_codes.php?remove=<?php echo $this->_tpl_vars['code']['id']; ?>
';"></a>
            </td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="7">
                <input type="submit" value="Update" />
            </td>
        </tr>
    </tfoot>
</table>
</form>
<?php endif; ?>

<br />
<div style="float: left; width: 49%">
<form method="POST">
<input type="hidden" name="action" value="add" />
<table width="50%">
    <thead>
        <tr>
            <th colspan="2">Add code</th>
        </tr>
    </thead>
    <tbody>
        <tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
           <td>Code:</td>
           <td><input type="text" name="code" size="40" /></td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
           <td>Start stamp:</td>
           <td><input type="text" name="start_stamp" value="<?php echo $this->_tpl_vars['date_start']; ?>
" /></td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
           <td>Expire stamp:</td>
           <td><input type="text" name="expire_stamp" value="<?php echo $this->_tpl_vars['date_expire']; ?>
" /></td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
           <td>Discount percent:</td>
           <td><input type="text" name="percent" value="20" maxlength="3" size="3" /> %</td>
        </tr>
        <tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
            <td>Membership:</td>
            <td>
                <select name="membership_id">
                <?php $_from = $this->_tpl_vars['ms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['m']):
?>
                    <option value="<?php echo $this->_tpl_vars['m']['membership_type_id']; ?>
"><?php echo $this->_tpl_vars['m']['label']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
        </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">
                <input type="submit" value="Add" />
            </td>
        </tr>
    </tfoot>
</table>
</form>
</div>
<div style="float: right; width: 49%;"><?php echo adminConfig::FrontendPrintConfig(array('section' => 'coupon_codes'), $this);?>
</div>


<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<br clear="all" />
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>