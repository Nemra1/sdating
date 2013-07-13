function form_SignIn(auto_id) {
	this.DOMConstruct('form_SignIn', auto_id);
}
form_SignIn.prototype = new SK_FormHandler({
	name: 'sign_in',
	
	fields: {
		login: {
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
		remember_me: {
			construct: function($input, form_handler) {},
			validate: function(value, required) {},
			focus: function() {}
		}
	},
	actions: {
		process: {
		fields: {"login":true,"password":true,"remember_me":false}
		}
	},
	default_action: 'process'
});
