function form_InviteFriends(auto_id) {
	this.DOMConstruct('form_InviteFriends', auto_id);
}
form_InviteFriends.prototype = new SK_FormHandler({
	name: 'invite_friends',
	
	fields: {
		email_addr: {
			construct: function($input, form_handler) {},
			validate: function(value, required, autoId) {
			       if ( required && $("#" + autoId).hasClass("input_invitation") )
			       {
			           throw new Exception();
			       }
			    },
			focus: function() {}
		},
		message: {
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
		process: {
		fields: {"email_addr":true,"message":false}
		}
	},
	default_action: 'process'
});
