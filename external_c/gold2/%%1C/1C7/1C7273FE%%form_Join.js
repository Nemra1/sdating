function form_Join(auto_id) {
	this.DOMConstruct('form_Join', auto_id);
}
form_Join.prototype = new SK_FormHandler({
	name: 'profile_join',
	
	fields: {
		captcha: {
			construct: function($input, form_handler) {
					var handler = this;
					
					
					$input.parents(".captcha_container:eq(0)").find("a").click(function(){
						handler.refresh_image($input); 
					});
					
					form_handler.bind("error", function(){
						handler.refresh_image($input); 
					});
				},
			validate: function(value, required) {},
			focus: function() {},
			$input: {},
			request_result: "",
			refresh_image: function($input){
						$.ajax({
									url: "http://dev.local/ska/field_responder.php",
									method: "post",
									dataType: "json",
									data: {action: "change_captcha_image"},
									success: function(result){
									 	if (result){
											$input.parents(".captcha_container:eq(0)").find("img").attr("src","http://dev.local/ska/captcha/image.php?img_id="+result);
											$input.val("");								
										}
									 }
								});
				}
		},
		occupation: {
			construct: function($input, form_handler) {},
			validate: function(value, required, autoId) {
			       if ( required && $("#" + autoId).hasClass("input_invitation") )
			       {
			           throw new Exception();
			       }
			    },
			focus: function() {}
		},
		username: {
			construct: 
							function($input) {
								var handler = this;
		
								if($input.val()!="" && $input.val()!=handler.lastValue){
									handler.check_username($input);
								}
		
								$input.change(function(){
									handler.changed = true;
								});
		
								$input.blur(function() {
									if($input.val()!="" && $input.val()!=handler.lastValue && handler.changed ){
										handler.check_username($input);
									}
									else{
										$input.parent().find(".success").remove();
									}
								});
							},
			validate: function(value, required, autoId) {
			       if ( required && $("#" + autoId).hasClass("input_invitation") )
			       {
			           throw new Exception();
			       }
			    },
			focus: function() {},
			changed: true,
			lastValue: "",
			check_username: 
							function($input){
		
							var handler = this;
								$.ajax({
										url: "http://dev.local/ska/field_responder.php",
										method: "post",
										dataType: "json",
										data: {action: "check_username_exists", username: $input.val()},
										success: function(result){
												$input.parent().find(".success").remove();
												handler.changed = false;
		                                        if(result==1){
		   											$input.after('<span class="success">&nbsp;</span>');
		   										}
		   										else{
		   											SK_drawError(result);
		   										}   										
		  								}
									});
							}
							
		},
		location: {
			construct: 
					function($input, formHandler, auto_id){
						var handler = this;
						this.$errorContainer = $("#"+auto_id+"-container");
						this.$parent_node = $input.parents("tbody:eq(0)");
						this.$container_node = $input.parents(".location_container:eq(0)");
						if ($input.val()!=""){
		
							this.$parent_node.find("tr.state_id select").change(function(){
							    handler.$errorContainer.empty();
								handler.change_event($(this),$input.val());
							});
		
							this.$parent_node.find("input[type=button]").click(function(){
							    handler.$errorContainer.empty();
								handler.change_event(handler.$parent_node.find("tr.zip input[type=text]"),$input.val());
							});
							this.suggest(this.$parent_node.find("input[name*=city_name]"),this.$parent_node.find("tr.state_id select").val());
						}
		
						$input.change(function(){
						    handler.$errorContainer.empty();
							handler.change_event($input);
						});
					}
				,
			validate: function(value, required) {},
			focus: function() {},
			$parent_node: {},
			$container_node: {},
			fields: [],
			$prototype_node: {},
			change_event: 
					function($input, param){
						var handler = this;
		
						handler.fields[$input.parents("tr:eq(0)").attr("class")] = $input.val();
						$.ajax({
									url: "http://dev.local/ska/field_responder.php",
									method: "post",
									dataType: "json",
									data: {action: "process_location", changed_item : $input.parents("tr:eq(0)").attr("class") , value : $input.val(), param : param},
									success: function(result){
									 	handler.ajax_receiver(result);
									}
								});
					}
				,
			ajax_receiver: 
					function(result){
						var handler = this;
		
						$.each(result.hide_items,function(i,item){
							handler.$parent_node.find("tr."+item).css("display","none");
							handler.$parent_node.find("tr."+item+" td.value").empty();
						});
		
						$.each(result.assign,function(item,html){
							var $node = handler.$parent_node.find("tr."+item+" td.value");
							$node.empty();
							$node.append(html);
		
		
							switch(item){
							case "state_id":
								$node.find("select[name=state_id]").change(function(){
								    handler.$errorContainer.empty();
									handler.change_event($(this),handler.fields.country_id);
								});
								break;
							case "zip":
								$node.find("input[type=button]").click(function(){
								    handler.$errorContainer.empty();
									handler.change_event($node.find("input[type=text]"),handler.fields.country_id);
								});
								break;
		
							case "city_id":
								handler.suggest($node.find("input[name=city_name]"),handler.fields.state_id);
								break;
							}
		
							$node.find("input, select").each(function(){
								var name = $(this).attr("name");
								if (name!=undefined){
									$(this).attr("name","location["+name+"]");
								}
							});
						});
		
						$.each(result.show_items,function(i,item){
							//this.$parent_node.find("tr."+result.show_items[item]).css("display","table-row");
							handler.$parent_node.find("tr."+item).fadeIn("slow");
						});
		
		
					}
		
				,
			$: function($expr){
					return this.$container_node.find($expr);
				},
			$suggest_cont_prototype: undefined,
			showSuggest: function($node, suggests){
					var handler = this;
		
					var removeSuggest = function(){
						$node.parent().siblings(".suggest_cont").remove();
					}
		
					if (this.$suggest_cont_prototype ==undefined) {
						this.$suggest_cont_prototype = this.$(".suggest_cont").remove().clone();
					}
		
					var $suggest_cont = this.$suggest_cont_prototype.clone();
		
					removeSuggest();
		
					if (suggests.length <= 0) {
						return;
					}
		
					var itemHover = function($item){
						$item.parent().find(".suggest_item").removeClass("hover");
						$item.addClass("hover");
					}
		
					$.each(suggests, function(i, item){
		
						var $item_node = $suggest_cont.find(".prototype_node").clone().removeClass("prototype_node").css("display","block");
						var $parent_node = $suggest_cont.find(".prototype_node").parent();
		
						$item_node.html(item.suggest_label);
		
						$item_node.mouseover(function(){
							itemHover($item_node);
						});
		
						$item_node.click(function(){
							$node.val(item.name);
							removeSuggest();
							$node.focus();
						});
		
						$parent_node.append($item_node);
		
					});
		
					$node.unbind("keypress");
					$node.keypress(function(eventObject){
		
						$selected_item = $node.parent().find("div.suggest_cont ul li.hover");
						if ( $selected_item.length == 0 ) {
							$selected_item = $node.parent().find("div.suggest_cont ul li:visible:eq(0)");
							itemHover($selected_item);
							return;
						}
		
						switch(eventObject.keyCode){
							case 40:
								itemHover($selected_item.next(".suggest_item"));
								break;
							case 38:
								itemHover($selected_item.prev(".suggest_item"));
								break
							case 13:
								itemHover($selected_item.prev(".suggest_item"));
								if ($selected_item.length > 0) {
									$selected_item.click();
									return false;
								}
								break
						}
					});
		
					$node.unbind("blur");
					$node.blur(function(){
						window.setTimeout(removeSuggest,200);
					});
		
					$node.parent().after($suggest_cont);
					$suggest_cont.css("width",$node.outerWidth()).show();
		
				},
			suggest: function($node, state_id){
					var handler = this;
					var timeout;
					var last_str;
		
		
					$node.unbind();
					$node.keyup(function(eventObject){
		
						var $field = $(this);
		
						var getCityList = function(str, state_id) {
							if (!$.trim(str)) {
								last_str = "";
								handler.showSuggest($node, []);
								return;
							}
		
							var key = eventObject.which;
							if ( last_str == str || key==13) {
								return;
							}
		
							var params ={
								str : str,
								state_id: state_id,
								action: "location_get_city"
							};
							$.ajax({
										url: "http://dev.local/ska/field_responder.php",
										method: "post",
										dataType: "json",
										data: params,
										success: function(result){
											last_str = str;
											handler.showSuggest($node, result, eventObject);
										}
								});
						}
		
						var suggestGetList = function(){
							var str = $field.val();
							getCityList(str, state_id);
						}
		
						if (timeout != undefined) {
							window.clearTimeout(timeout)
						}
						timeout = window.setTimeout(suggestGetList,300);
						return false;
					});
				}
		},
		photo_upload: {
			construct: function($input, form_handler)
						{
							this.$input = $input;
							this.form_handler = form_handler;
							this.$iframe = $input.next();
							
							this.upload_error = false;
							
							
							
		                    this.onConstruct($input, form_handler);
		                    					
							var form_window = this.$iframe.get(0).contentWindow;
							
							var handler = this;
							
							var onload_ping =
								window.setInterval(function() {
									if (form_window.$userfile) {
										window.clearInterval(onload_ping);
										form_window.$userfile.change(function() {
											handler.uploadStart(form_window.$upload_form);
										});
									}
								}, 500);
						},
			validate: function( value ) {},
			onConstruct: function( $input, form_handler ) {},
			displayLoading: function( value ) {
							this.$input.before('<img src="http://dev.local/ska/layout/img/loading.gif" />');
						},
			focus: function() {
							this.$iframe.get(0).contentWindow.$userfile.focus();
						},
			showLoading: function() {
							this.$input.before('<img src="http://dev.local/ska/layout/img/loading.gif" />');
						},
			hideLoading: function() {
							this.$input.prev().remove();
						},
			uploadStart: function($form)
						{
						    if ( !$form )
						    {
						        return;
						    }
						
							this.form_handler.file_upload_in_process = true;
							
							this.$iframe.hide();
							this.showLoading();
							
							var form_window = this.$iframe.get(0).contentWindow;
							form_window.$upload_form = null;
							form_window.$userfile = null;
							form_window = null;
							
		 				    $form.submit();
							var handler = this;
							
							var ping = window.setInterval(function() {
								var form_window = handler.$iframe.get(0).contentWindow;
								if (form_window && form_window.$userfile)
								{
									window.clearInterval(ping);
									
									handler.hideLoading();
									
									if (form_window.sk_upload_error) {
									    handler.form_handler.clearErrors("photo_upload");
										handler.form_handler.error(form_window.sk_upload_error, "photo_upload");
										handler.$iframe.show();
										handler.construct(handler.$input, handler.form_handler);
										handler.upload_error = true;
									}
									else {
										var $input_clone;
										
										$("#" + handler.form_handler.auto_id + "-photo_upload-container").hide();
										
										if (!handler.$input.val()) {
											handler.$input.val(form_window.sk_userfile_uniqid);
										}
										else {
											$input_clone = handler.$input.before(
												handler.$input.clone()
													.val(form_window.sk_userfile_uniqid)
											);
										}
										
										var $preview = $(form_window.sk_userfile_preview);
										
										handler.$input.parent().find(".preview_cont").append($preview);
										
										$(".delete_file_btn", $preview)
											.one("click", function()
											{
												if (!$input_clone) {
													handler.$input.removeAttr("value");
												}
												else {
													$input_clone.remove();
												}
												
												if (handler.$iframe.css("display") == "none") {
													handler.$iframe.show();
													handler.construct(handler.$input, handler.form_handler);
												}
												
												if (typeof handler.free_file_slots != "undefined") {
													handler.free_file_slots++;
												}
												
												$preview.remove();
											});
									}
									
									handler.form_handler.file_upload_in_process = false;
									
									handler.uploadComplete();
								}
							}, 500);
						},
			uploadComplete: function() {}
		},
		general_description: {
			construct: function($input, form_handler) {},
			validate: function(value, required, autoId) {
			       if ( required && $("#" + autoId).hasClass("input_invitation") )
			       {
			           throw new Exception();
			       }
			    },
			focus: function() {}
		},
		religion: {
			construct: function($input, form_handler) {},
			validate: function(value, required) {},
			focus: function() {}
		},
		password: {
			construct: function($input, form_handler) {},
			validate: function(value, required, autoId) {
			       if ( required && $("#" + autoId).hasClass("input_invitation") )
			       {
			           throw new Exception();
			       }
			    },
			focus: function() {}
		},
		re_password: {
			construct: function($input, form_handler) {},
			validate: function(value, required, autoId) {
			       if ( required && $("#" + autoId).hasClass("input_invitation") )
			       {
			           throw new Exception();
			       }
			    },
			focus: function() {}
		},
		have_children: {
			construct: function($input, form_handler) {},
			validate: function(value, required) {},
			focus: function() {}
		},
		body_type: {
			construct: function($input, form_handler) {},
			validate: function(value, required) {},
			focus: function() {}
		},
		sex: {
			construct: function($input, form_handler) {},
			validate: function(value, required) {},
			focus: function() {}
		},
		eye_color: {
			construct: function($input, form_handler) {},
			validate: function(value, required) {},
			focus: function() {}
		},
		match_sex: {
			construct: 
					function($input, formHandler, auto_id){
						var handler = this;
		
		                var $node = $("input[name='match_sex_select_all']");
		                this.lastStatus = $node.prop("checked");
		
		                $("input[name='match_sex\[\]']").click(function(){
		                    if ($node.prop("checked"))
		                    {
		                        $node.removeAttr("checked");
		                        handler.lastStatus = false;
		                    }
		                });
		
						$node.click(function(){
		
		                        if (handler.lastStatus)
		                        {
		                            $.each($("#"+auto_id+" li"), function(){
		                                $(this).find("input").removeAttr("checked");
		                            });
		                            handler.lastStatus = false;
		                        }
		                        else
		                        {
		                            $.each($("#"+auto_id+" li"), function(){
		                                $(this).find("input").prop("checked", "checked");
		                            });
		                            handler.lastStatus = true;
		                        }
						});
					}
				,
			validate: function(value, required) {},
			focus: function() {},
			$prototype_node: {}
		},
		email: {
			construct: 
							function($input) {
								var handler = this;
								
								this.lastValue = $input.parent().find("input[name=last_value]").val();
								
								if($input.val()!="" && $input.val()!=this.lastValue){
									handler.check_email($input);
								}		
								
								$input.change(function(){
									handler.changed = true;
								});
												
								$input.blur(function() {
									if($input.val()!="" && $input.val()!=handler.lastValue && handler.changed ){
										handler.check_email($input);
									}
									else{
										$input.parent().find(".success").remove();
									}						
								});
							},
			validate: function(value, required, autoId) {
			       if ( required && $("#" + autoId).hasClass("input_invitation") )
			       {
			           throw new Exception();
			       }
			    },
			focus: function() {},
			lastValue: "",
			changed: true,
			check_email: 
							function($input){
							var handler = this;
							
								$.ajax({
										url: "http://dev.local/ska/field_responder.php",
										method: "post",
										dataType: "json",
										data: {action: "check_email_exists", email: $input.val()},
										success: function(result){
												$input.parent().find(".success").remove();
												handler.changed = false;
		                                        if(result==1){
		   											$input.after('<span class="success">&nbsp;</span>');
		   										}
		                                        else{
		                                            SK_drawError(result);											
		   										}
		  								}
									});
							}
							
		},
		re_email: {
			construct: function($input, form_handler) {},
			validate: function(value, required, autoId) {
			       if ( required && $("#" + autoId).hasClass("input_invitation") )
			       {
			           throw new Exception();
			       }
			    },
			focus: function() {}
		},
		birthdate: {
			construct: function($input, form_handler) {},
			validate: function(value, required) {
					if ( !required ) {
						return;
					}
					if ( !$.trim(value.year) ) {
						throw new SK_FormFieldValidationException("");
					}
		
					if ( !$.trim(value.month) ) {
						throw new SK_FormFieldValidationException("");
					}
		
					if ( !$.trim(value.day) ) {
						throw new SK_FormFieldValidationException("");
					}
		
				},
			focus: function() {}
		},
		match_agerange: {
			construct: function($input, form_handler) {},
			validate: function(value, required) {},
			focus: function() {}
		},
		interests: {
			construct: 
					function($input, formHandler, auto_id){
						var handler = this;
		
		                var $node = $("input[name='interests_select_all']");
		                this.lastStatus = $node.prop("checked");
		
		                $("input[name='interests\[\]']").click(function(){
		                    if ($node.prop("checked"))
		                    {
		                        $node.removeAttr("checked");
		                        handler.lastStatus = false;
		                    }
		                });
		
						$node.click(function(){
		
		                        if (handler.lastStatus)
		                        {
		                            $.each($("#"+auto_id+" li"), function(){
		                                $(this).find("input").removeAttr("checked");
		                            });
		                            handler.lastStatus = false;
		                        }
		                        else
		                        {
		                            $.each($("#"+auto_id+" li"), function(){
		                                $(this).find("input").prop("checked", "checked");
		                            });
		                            handler.lastStatus = true;
		                        }
						});
					}
				,
			validate: function(value, required) {},
			focus: function() {},
			$prototype_node: {}
		},
		i_am_at_least_18_years_old: {
			construct: function($input, form_handler) {},
			validate: function(value, required) {},
			focus: function() {}
		},
		i_agree_with_tos: {
			construct: function($input, form_handler) {},
			validate: function(value, required) {},
			focus: function() {}
		},
		real_name: {
			construct: function($input, form_handler) {},
			validate: function(value, required, autoId) {
			       if ( required && $("#" + autoId).hasClass("input_invitation") )
			       {
			           throw new Exception();
			       }
			    },
			focus: function() {}
		},
		headline: {
			construct: function($input, form_handler) {},
			validate: function(value, required, autoId) {
			       if ( required && $("#" + autoId).hasClass("input_invitation") )
			       {
			           throw new Exception();
			       }
			    },
			focus: function() {}
		},
		relationship: {
			construct: 
					function($input, formHandler, auto_id){
						var handler = this;
		
		                var $node = $("input[name='relationship_select_all']");
		                this.lastStatus = $node.prop("checked");
		
		                $("input[name='relationship\[\]']").click(function(){
		                    if ($node.prop("checked"))
		                    {
		                        $node.removeAttr("checked");
		                        handler.lastStatus = false;
		                    }
		                });
		
						$node.click(function(){
		
		                        if (handler.lastStatus)
		                        {
		                            $.each($("#"+auto_id+" li"), function(){
		                                $(this).find("input").removeAttr("checked");
		                            });
		                            handler.lastStatus = false;
		                        }
		                        else
		                        {
		                            $.each($("#"+auto_id+" li"), function(){
		                                $(this).find("input").prop("checked", "checked");
		                            });
		                            handler.lastStatus = true;
		                        }
						});
					}
				,
			validate: function(value, required) {},
			focus: function() {},
			$prototype_node: {}
		}
	},
	actions: {
		action_1___: {
		fields: {"captcha":true,"username":true,"location":true,"photo_upload":true,"password":true,"re_password":true,"sex":true,"match_sex":true,"email":true,"re_email":true,"birthdate":true,"match_agerange":false,"interests":false,"i_am_at_least_18_years_old":true,"i_agree_with_tos":true}
		},
		action_1___1: {
		fields: {"captcha":true,"username":true,"location":true,"photo_upload":true,"password":true,"re_password":true,"sex":true,"match_sex":true,"email":true,"re_email":true,"birthdate":true,"match_agerange":false,"interests":false,"i_am_at_least_18_years_old":true,"i_agree_with_tos":true}
		},
		action_2___1: {
		fields: {"occupation":false,"general_description":true,"religion":false,"have_children":false,"body_type":false,"real_name":true,"headline":true,"relationship":true}
		},
		action_1___2: {
		fields: {"captcha":true,"username":true,"location":true,"photo_upload":true,"password":true,"re_password":true,"sex":true,"match_sex":true,"email":true,"re_email":true,"birthdate":true,"match_agerange":false,"interests":false,"i_am_at_least_18_years_old":true,"i_agree_with_tos":true}
		},
		action_2___2: {
		fields: {"occupation":false,"general_description":true,"religion":false,"have_children":false,"body_type":false,"real_name":true,"headline":true,"relationship":true}
		},
		action_1___4: {
		fields: {"captcha":true,"username":true,"location":true,"photo_upload":true,"password":true,"re_password":true,"sex":true,"match_sex":true,"email":true,"re_email":true,"birthdate":true,"match_agerange":false,"interests":false,"i_am_at_least_18_years_old":true,"i_agree_with_tos":true}
		},
		action_2___4: {
		fields: {"occupation":false,"general_description":true,"religion":false,"have_children":false,"body_type":false,"eye_color":false,"real_name":true,"headline":true,"relationship":true}
		},
		action_1___8: {
		fields: {"captcha":true,"username":true,"location":true,"photo_upload":true,"password":true,"re_password":true,"sex":true,"match_sex":true,"email":true,"re_email":true,"birthdate":true,"match_agerange":false,"interests":false,"i_am_at_least_18_years_old":true,"i_agree_with_tos":true}
		},
		action_2___8: {
		fields: {"occupation":false,"general_description":true,"religion":false,"have_children":false,"body_type":false,"real_name":true,"headline":true,"relationship":true}
		}
	},
	default_action: ''
});
