function form_SignUp(auto_id) {
	this.DOMConstruct('form_SignUp', auto_id);
}
form_SignUp.prototype = new SK_FormHandler({
	name: 'sign_up',
	
	fields: {
		email: {
			construct: function($input, form_handler) {},
			validate: function(value, required, autoId) {
			       if ( required && $("#" + autoId).hasClass("input_invitation") )
			       {
			           throw new Exception();
			       }
			    },
			focus: function() {}
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
		username: {
			construct: function($input, form_handler) {},
			validate: function(value, required, autoId) {
			       if ( required && $("#" + autoId).hasClass("input_invitation") )
			       {
			           throw new Exception();
			       }
			    },
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
		i_agree_with_tos: {
			construct: function($input, form_handler) {},
			validate: function(value, required) {},
			focus: function() {}
		}
	},
	actions: {
		action_sign_up: {
		fields: {"email":true,"re_email":true,"username":true,"password":true,"re_password":true,"i_agree_with_tos":true}
		}
	},
	default_action: 'action_sign_up'
});
