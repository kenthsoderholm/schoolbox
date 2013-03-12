window.HeaderView = Backbone.View.extend({

    //Instansierar HeaderView
    initialize: function () {
        console.log("HeaderView uppe");
    },
    //Skapar ett klickevent för att trigga loginButton
    events: {
        "click #loginButton": "login"
    },
    //Renderar html
    render:function () {
        $(this.el).html(this.template());
        return this;
    },
    //Skapar loginfunktionen som ska prata med server/login.php
    login:function (event) {
        event.preventDefault(); // Tar bort standard utförandet från
        $('.alert-error').hide(); // Gömmer felmeddelande om det finns
        var url = 'http://localhost/schoolbox/server/login.php';
        console.log('Loggin in... ');
        var formValues = {
            email: $('#inputEmail').val(),
            password: $('#inputPassword').val()
        };

        
     $.ajax( {
        url: 'server/login.php', //Ändra till din önskade källa.
        method: 'post',
        data: formValues,
        dataType: 'html',
        success:function (data) {
          console.log(["Login request details: ", data]);
         
          if(data.error) {  // Visa fel
              $('.alert-error').text(data.error.text).show();
          }
          else { // Skicka dem till errorsidan
              window.location.replace('#loginerror');
          }
            }
        });
    }

});



