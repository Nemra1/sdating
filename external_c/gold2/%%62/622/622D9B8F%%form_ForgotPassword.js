function form_ForgotPassword(auto_id) {
	this.DOMConstruct('form_ForgotPassword', auto_id);
}
form_ForgotPassword.prototype = new SK_FormHandler({
	name: 'forgot_password',
	
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
		}
	},
	actions: {
		send: {
		fields: {"email":true}
		}
	},
	default_action: 'send'
});
