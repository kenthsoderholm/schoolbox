window.SignUpView = Backbone.View.extend({

	//Instansierar signupview
    initialize:function () {
        
    },
    //renderar html
    render:function () {
        $(this.el).html(this.template());
        return this;
    }

});