//Vår templateloader. Används för att ladda våra templates asynk i separata html-filer.
//Underscore.js används här.
window.templateLoader = {

    load: function(views, callback) {

        var deferreds = [];

        $.each(views, function(index, view) {
            if (window[view]) {
                deferreds.push($.get('tpl/' + view + '.html', function(data) {
                    window[view].prototype.template = _.template(data);
                }, 'html'));
            } else {
                alert(view + " was not found");
            }
        });

        $.when.apply(null, deferreds).done(callback);
    }

};