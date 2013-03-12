window.LoginErrorView = Backbone.View.extend({

	//Instansierar loginerrorview
    initialize:function () {
        
    },
    //renderar html
    render:function () {
        $(this.el).html(this.template());
        return this;
    }

});