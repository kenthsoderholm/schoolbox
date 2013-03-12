window.HomeView = Backbone.View.extend({

	//Instansierar HomeViwe
    initialize:function () {
        //Fungerar som .ready
    },
    //renderar dess html
    render:function () {
        $(this.el).html(this.template());
        return this;
    }

});