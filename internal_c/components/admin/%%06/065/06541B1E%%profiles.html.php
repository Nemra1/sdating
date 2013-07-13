<?php /* Smarty version 2.6.27, created on 2013-07-13 12:05:23
         compiled from profiles.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'block_page', 'profiles.html', 227, false),array('function', 'cycle', 'profiles.html', 235, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div style="float: left; width: 60%">

<table id="profiles_statistics_table" cellspacing="1" width="100%" >
	<thead>
		<tr>
			<th id="profiles_statistics_table_head_cell" colspan="2">
				<a class="thead_a" href="profile_list.php">Profiles Total (<?php echo $this->_tpl_vars['total_profiles']; ?>
)</a>
			</th>
		</tr>
		<tr>
			<td id="profiles_statistics_table_infra_head_left_cell">
				<div>Online</div>
			</td>
			<td id="profiles_statistics_table_infra_head_right_cell">
				<a class="thead_a" href="profile_list.php?online=1"><?php echo $this->_tpl_vars['online_profiles']['num']; ?>
 (<?php echo $this->_tpl_vars['online_profiles']['precent']; ?>
)</a>
			</td>
		</tr>
	</thead>
	</table>
    <table id="profiles_statistics_table" cellspacing="1" width="100%">
		<tr class="tr_1">
        	<td class="corner_left_t">        	
            	<b>Membership</b>                               
			</td>
			<td colspan="4" class="corner_right_t">
                    	<table width="100%" cellpadding="0" cellspacing="1">
			<?php $_from = $this->_tpl_vars['memberships']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rows'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rows']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['memberships_row']):
        $this->_foreach['rows']['iteration']++;
?> <tr>
				<?php $_from = $this->_tpl_vars['memberships_row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['m'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['m']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_id'] => $this->_tpl_vars['_mem_type']):
        $this->_foreach['m']['iteration']++;
?>
					<?php if (($this->_foreach['m']['iteration'] == $this->_foreach['m']['total']) && ($this->_foreach['rows']['iteration'] <= 1)): ?>
                    	<td width="80" align="center">
                    <?php else: ?>
                    	<td class="side" width="80" align="center" style="border-right: 1px solid #dfdfdf;">
                    <?php endif; ?>
                    	<?php echo $this->_tpl_vars['_mem_type']['label']; ?>
<br />
                    	<a href="profile_list.php?membership_type_id=<?php echo $this->_tpl_vars['_id']; ?>
"><b><?php echo $this->_tpl_vars['_mem_type']['profiles_num']; ?>
</b> (<?php echo $this->_tpl_vars['_mem_type']['precent']; ?>
)</a>
                    </td>
				<?php endforeach; endif; unset($_from); ?></tr>
                        
				<?php endforeach; endif; unset($_from); ?>
                </table>
                </td>
		</tr>
        
       
		<tr class="tr_1">
			<td class="side" width="84">
				<b>Sex</b>
			</td>
            	<td colspan="4" class="side">
                   	<table width="100%" cellpadding="0" cellspacing="1">
                    <?php $_from = $this->_tpl_vars['sex_stats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rows'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rows']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sex_row']):
        $this->_foreach['rows']['iteration']++;
?> <tr>
						<?php $_from = $this->_tpl_vars['sex_row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['s'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['s']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_id'] => $this->_tpl_vars['_sex']):
        $this->_foreach['s']['iteration']++;
?>
                        	<?php if (($this->_foreach['s']['iteration'] == $this->_foreach['s']['total'])): ?>
								<td class="side" align="center" width="95">
                            <?php else: ?>    
                            	 <td class="side" align="center" width="95" style="border-right: 1px solid #dfdfdf;">
                             <?php endif; ?>    
                            <?php echo $this->_tpl_vars['_sex']['label']; ?>
 <br />
                            	<a href="profile_list.php?sex=<?php echo $this->_tpl_vars['_id']; ?>
"><b><?php echo $this->_tpl_vars['_sex']['profiles_num']; ?>
</b> (<?php echo $this->_tpl_vars['_sex']['precent']; ?>
)</a>
                            
                            </td>
						<?php endforeach; endif; unset($_from); ?>
                        </tr>
                        
				<?php endforeach; endif; unset($_from); ?>
                </table>
                </td>
				
		</tr>

        
		<tr class="tr_1">
	        
            	<td class="side">
					<b>Status</b>
				</td>
	                <td colspan="4" class="side">
                    	<table width="100%" cellpadding="0" cellspacing="1">
                   			<td class="side" align="center" width="110" style="border-right: 1px solid #dfdfdf;">Active
                            	<br />
                            		<a class="green" href="profile_list.php?status=active">
										<b><?php echo $this->_tpl_vars['statuses']['active_num']; ?>
</b> (<?php echo $this->_tpl_vars['statuses']['active_precent']; ?>
)
									</a>
                            </td>
                            
							<td class="side" align="center" width="110" style="border-right: 1px solid #dfdfdf;">On hold
                            	<br />
                            		<a class="ice" href="profile_list.php?status=on_hold">
										<b><?php echo $this->_tpl_vars['statuses']['on_hold_num']; ?>
</b> (<?php echo $this->_tpl_vars['statuses']['on_hold_precent']; ?>
)
									</a>
                            </td>
                            
							<td class="side" align="center" width="110">Suspended
	                            <br />
    	                        	<a class="red" href="profile_list.php?status=suspended">
										<b><?php echo $this->_tpl_vars['statuses']['suspended_num']; ?>
</b> (<?php echo $this->_tpl_vars['statuses']['suspended_precent']; ?>
)
									</a>                         
                            </td>     
                          </table>
                       </td>                 
		</tr>
		
		<tr class="tr_1">
	        
				<td class="side">
					<b>Email Verified</b>
				</td>
                	<td colspan="4" class="side">
                    	<table width="100%" border="0" cellpadding="0" cellspacing="0">
               				<td class="side" align="center" width="100" style="border-right: 1px solid #dfdfdf;">Yes
                            <br />
                            	<a class="green" href="profile_list.php?email_verified=yes">
									<b><?php echo $this->_tpl_vars['email_verified']['yes_num']; ?>
</b> (<?php echo $this->_tpl_vars['email_verified']['yes_precent']; ?>
)
								</a>
                            </td>
							<td class="side" align="center" width="92" style="border-right: 1px solid #dfdfdf;">No
                            <br />
                            	<a class="red" href="profile_list.php?email_verified=no">
									<b><?php echo $this->_tpl_vars['email_verified']['no_num']; ?>
</b> (<?php echo $this->_tpl_vars['email_verified']['no_precent']; ?>
)
								</a>
                            </td>
							<td class="side" align="center" width="92">Undefined
                            <br />
                            	<a class="ice" href="profile_list.php?email_verified=undefined">
									<b><?php echo $this->_tpl_vars['email_verified']['undefined_num']; ?>
</b> (<?php echo $this->_tpl_vars['email_verified']['undefined_precent']; ?>
)
								</a>
                            </td>			
                        </table>	
                     </td>       
	</tr>
		
		<tr class="tr_1">
        	
				<td class="side">
					<b>Have Photo</b>
				</td>
                	<td colspan="4" class="side">
                    	<table width="100%" cellpadding="0" cellspacing="1">
							<td  colspan="2" class="side" align="center" style="border-right: 1px solid #dfdfdf;">Yes <br />
                            	<a class="green" href="profile_list.php?has_photo=y">
									<b><?php echo $this->_tpl_vars['has_photos']['positive_num']; ?>
</b> (<?php echo $this->_tpl_vars['has_photos']['positive_precent']; ?>
)
								</a>
                            </td>
                            
							<td  colspan="2" class="side" align="center">No <br />
								<a class="red" href="profile_list.php?has_photo=n">
									<b><?php echo $this->_tpl_vars['has_photos']['negative_num']; ?>
</b> (<?php echo $this->_tpl_vars['has_photos']['negative_precent']; ?>
)
								</a>
                       
                            </td>														
                       </table>
                    </td>
		</tr>
		
		<tr class="tr_1">
	        
				<td class="side">
					<b>Have Video</b>
				</td>
                <td colspan="4" class="side">
                    	<table width="100%" cellpadding="0" cellspacing="1">
							<td   class="side" align="center" style="border-right: 1px solid #dfdfdf;">Yes <br />
                                <a class="green" href="profile_list.php?has_media=y">
									<b><?php echo $this->_tpl_vars['has_media']['media_yes_num']; ?>
</b> (<?php echo $this->_tpl_vars['has_media']['media_yes_precent']; ?>
)
								</a>
                            </td>
							<td  class="side"align="center" >No <br />
                            	<a class="red" href="profile_list.php?has_media=n">
									<b><?php echo $this->_tpl_vars['has_media']['media_no_num']; ?>
</b> (<?php echo $this->_tpl_vars['has_media']['media_no_precent']; ?>
)
								</a>
                            </td>     
                        </table>
                 </td>									
		</tr>
		
		<tr class="tr_1">
	        
				<td class="side">
					<b>Have Mailbox Messages</b>
				</td>
                <td colspan="4" class="side">
                    	<table width="100%" cellpadding="0" cellspacing="1">
							<td   class="side" align="center" style="border-right: 1px solid #dfdfdf;">Yes <br />
                                <a class="green" href="profile_list.php?mails=y">
									<b><?php echo $this->_tpl_vars['has_mail']['yes_num']; ?>
</b> (<?php echo $this->_tpl_vars['has_mail']['yes_precent']; ?>
)
								</a>
                            </td>
							<td  class="side"align="center" >No <br />
                            	<a class="red" href="profile_list.php?mails=n">
									<b><?php echo $this->_tpl_vars['has_mail']['no_num']; ?>
</b> (<?php echo $this->_tpl_vars['has_mail']['no_precent']; ?>
)
								</a>
                            </td>     
                        </table>
                 </td>									
		</tr>
		
		<tr class="tr_1">
	        	<td class="corner_left_b">
					<b>Featured</b>
				</td>					
                <td colspan="10"  class="corner_right_b">
                    	<table width="100%" cellpadding="0" cellspacing="1">
							<td align="center" class="side" style="border-right: 1px solid #dfdfdf;">Yes <br />
                            <a class="green" href="profile_list.php?featured=y">
									<b><?php echo $this->_tpl_vars['featured']['featured_yes_num']; ?>
</b> (<?php echo $this->_tpl_vars['featured']['featured_yes_precent']; ?>
)
								</a>
                            </td>
							<td align="center">No <br />
                            <a class="red" href="profile_list.php?featured=n">
									<b><?php echo $this->_tpl_vars['featured']['featured_no_num']; ?>
</b> (<?php echo $this->_tpl_vars['featured']['featured_no_precent']; ?>
)
								</a>

                            </td>		
                            
                        </table>
                 </td>				
		</tr>
		

</table>

</div>

<div style="float: right; width: 39%; margin-top:43px;">
<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
      
<table id="pending_approval_table" cellspacing="1">
    <thead>
        <tr><th id="pending_approval_table_head_cell" colspan="2"><div>Administration</div></th></tr>
    </thead>
    <tbody>
    
        <tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
            <td id="pending_approval_table_profiles_left_cell">
                <div class="review_item_label">Site Moderators</div>
            </td>
            <td id="pending_approval_table_profiles_right_cell">
                <a class="review_link" href="profile_list.php?moderators=1">
                    <b class="approval_number"><?php echo $this->_tpl_vars['moderators']; ?>
</b>
                </a>
            </td>
        </tr>
    
    </tbody>
</table>      
                
<table id="pending_approval_table" cellspacing="1">
	<thead>
		<tr><th id="pending_approval_table_head_cell" colspan="2"><div>Pending approval</div></th></tr>
	</thead>
	<tbody>
	<?php if ($this->_tpl_vars['pending_approval']['profiles']): ?>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
			<td id="pending_approval_table_profiles_left_cell">
				<div class="review_item_label">Profiles</div>
			</td>
			<td id="pending_approval_table_profiles_right_cell">
				<a class="review_link" href="profile_list.php?reviewed=n">
					<b class="approval_number"><?php echo $this->_tpl_vars['pending_approval']['profiles']; ?>
</b>
					<span class="review_inscription">review</span>
				</a>
			</td>
		</tr>
	<?php endif; ?>
	
	<?php if ($this->_tpl_vars['pending_approval']['photos']): ?>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
			<td id="pending_approval_table_photos_left_cell">
				<div class="review_item_label">Photo</div>
			</td>
			<td id="pending_approval_table_photos_right_cell">
				<a class="review_link" href="allphotos.php?photo_status=approval">
					<b class="approval_number"><?php echo $this->_tpl_vars['pending_approval']['photos']; ?>
</b>
					<span class="review_inscription">review</span>
				</a>
			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['pending_approval']['membership_claims']): ?>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
			<td id="pending_approval_table_membership_claims_left_cell">
				<div class="review_item_label">Membership Claims</div>
			</td>
			<td id="pending_approval_table_membership_claims_right_cell">
				<a class="review_link" href="trial_management.php">
					<b class="approval_number"><?php echo $this->_tpl_vars['pending_approval']['membership_claims']; ?>
</b>
					<span class="review_inscription">review</span>
				</a>
			</td>
		</tr>
	<?php endif; ?>
        <?php if ($this->_tpl_vars['pending_approval']['music']): ?>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
			<td id="pending_approval_table_media_left_cell">
				<div class="review_item_label">Music</div>
			</td>
			<td id="pending_approval_table_media_right_cell">
				<a class="review_link" href="profile_list.php?music_status=approval">
					<b class="approval_number"><?php echo $this->_tpl_vars['pending_approval']['music']; ?>
</b>
					<span class="review_inscription">review</span>
				</a>
			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['pending_approval']['media']): ?>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
			<td id="pending_approval_table_media_left_cell">
				<div class="review_item_label">Video</div>
			</td>
			<td id="pending_approval_table_media_right_cell">
				<a class="review_link" href="profile_list.php?media_status=approval">
					<b class="approval_number"><?php echo $this->_tpl_vars['pending_approval']['media']; ?>
</b>
					<span class="review_inscription">review</span>
				</a>
			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['pending_approval']['bg_images']): ?>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
			<td id="pending_approval_table_media_left_cell">
				<div class="review_item_label">Background Images</div>
			</td>
			<td id="pending_approval_table_media_right_cell">
				<a class="review_link" href="bg_images.php">
					<b class="approval_number"><?php echo $this->_tpl_vars['pending_approval']['bg_images']; ?>
</b>
					<span class="review_inscription">review</span>
				</a>
			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['pending_approval']['groups']): ?>
		<tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
			<td>
				<div class="review_item_label">Groups</div>
			</td>
			<td id="pending_approval_table_media_right_cell">
				<a class="review_link" href="groups.php?status=approval">
					<b class="approval_number"><?php echo $this->_tpl_vars['pending_approval']['groups']; ?>
</b>
					<span class="review_inscription">review</span>
				</a>
			</td>
		</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['pending_approval']['photo_auth']): ?>
        <tr class="<?php echo smarty_function_cycle(array('values' => 'tr_1,tr_2'), $this);?>
">
            <td>
                <div class="review_item_label">Photo Verification requests</div>
            </td>
            <td id="pending_approval_table_media_right_cell">
                <a class="review_link" href="photo_verification_requests.php">
                    <b class="approval_number"><?php echo $this->_tpl_vars['pending_approval']['photo_auth']; ?>
</b>
                    <span class="review_inscription">review</span>
                </a>
            </td>
        </tr>
    <?php endif; ?>
	
	</tbody>
</table>
<br clear="all" />

<table id="profile_search_table" cellspacing="1">
	<thead>
		<tr><th id="profile_search_table_head_cell" colspan="3"><div>Search Profiles</div></th></tr>
	</thead>
	<tbody>	
		<form action="profile_list.php" method="GET">
		<tr class="tr_2">
			<td id="profile_search_table_username_left_cell">
				<label for="search_username">Username</label>
			</td>
			<td id="profile_search_table_username_center_cell">
				<input id="search_username" name="search_username" type="text" class="input_text" />
			</td>
			<td id="profile_search_table_username_right_cell">
				<input type="submit" class="submit" value="Go &raquo;" />
			</td>
		</tr>
		</form>
		
		<form action="profile_list.php" method="GET">
		<tr class="tr_1">
			<td id="profile_search_table_email_left_cell">
				<label for="search_email">Email</label>
			</td>
			<td id="profile_search_table_email_center_cell">
				<input id="search_email" name="search_email" type="text" class="input_text" />
			</td>
			<td id="profile_search_table_email_right_cell">
				<input type="submit" class="submit" value="Go &raquo;" />
			</td>
		</tr>
		</form>
		
		<form action="profile_list.php" method="GET">
		<tr class="tr_2">
			<td id="profile_search_table_keyword_left_cell">
				<label for="search_keyword">Keyword</label>
			</td>
			<td id="profile_search_table_keyword_center_cell">
				<input id="search_keyword" name="search_keyword" type="text" class="input_text" />
			</td>
			<td id="profile_search_table_keyword_right_cell">
				<input type="submit" class="submit" value="Go &raquo;" />
			</td>
		</tr>
		</form>
		
		<form action="profile_list.php" method="GET">
		<tr class="tr_1">
			<td id="profile_search_table_profile_id_left_cell">
				<label for="search_profile_id">ID</label>
			</td>
			<td id="profile_search_table_profile_id_center_cell">
				<input id="search_profile_id" name="search_profile_id" type="text" class="input_text" />
			</td>
			<td id="profile_search_table_profile_id_right_cell">
				<input type="submit" class="submit" value="Go &raquo;" />
			</td>
		</tr>
		</form>		
	</tbody>
</table>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<br class="clr" />
<?php $this->_tag_stack[] = array('block_page', array()); $_block_repeat=true;$this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<iframe frameborder="0" class="profile_photo_frame" style="width: 700px; height: <?php echo $this->_tpl_vars['spot_height']; ?>
px" src="<?php echo @SKADATE_SPOTLIGHT_FEED; ?>
"> </iframe>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['block_page'][0][0]->tpl_BlockPage($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/_footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>