function form_UserStatus(auto_id) {
	this.DOMConstruct('form_UserStatus', auto_id);
}
form_UserStatus.prototype = new SK_FormHandler({
	name: 'user_status',
	
	fields: {
		status: {
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
		update: {
		fields: {"status":false}
		}
	},
	default_action: 'update'
});
