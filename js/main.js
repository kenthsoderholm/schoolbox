window.Router = Backbone.Router.extend({

    //Skapar länkarna
    routes: {
        "": "home",
        "loginerror": "loginerror",  
        "signup": "signup"
    },
    //Instansierar headerview för att få fram vår header
    initialize: function () {
        this.headerView = new HeaderView();
        $('.header').html(this.headerView.render().el);
    },
    //Får igång viewn
    home: function () {
        // Denna sidan ändras aldrig och därför skickas vi bara den en gång
        if (!this.homeView) {
            this.homeView = new HomeView();
            this.homeView.render();
        } else {
            this.homeView.delegateEvents(); 
        }
        $("#content").html(this.homeView.el);
    },

    signup: function () {
        if (!this.SignUpView) {
            this.SignUpView = new SignUpView();
            this.SignUpView.render();
        }
        $('#content').html(this.SignUpView.el);
    },
    loginerror: function () {
        if (!this.LoginErrorView) {
            this.LoginErrorView = new LoginErrorView();
            this.LoginErrorView.render();
        }
        $('#content').html(this.LoginErrorView.el);
    }


});
//Skickar in dem viewn som vi behöver för att få upp siten.
templateLoader.load(["HomeView", "SignUpView", "LoginErrorView", "HeaderView"],
    function () {
        app = new Router();
        Backbone.history.start();
    });