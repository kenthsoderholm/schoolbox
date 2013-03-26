
function ajax(url, formValues, callback){
	$.ajax({
		url: url,
		dataType: 'json',
		data: formValues,
		method: 'POST',
		success: function(data) {
			callback(data);
			console.log(data);
		}
	});
}
function sendFormdataWithAjax(url, domForm, callback){
		$.ajax({
	    url: url,
	    data:new FormData(domForm),
	    contentType: false,
	    processData: false,
	    type: 'POST',
	    success: function(data){
	        callback(data);
	    }
	});
}


function html(data){
	$('body').html(data.html);
}
function page(data){
	$('.row-fluid').html(data.html);
}
function directorylisting(data){
	$('#directorylisting').append(data.htmlDir);
}

ajax('server/functions/user.php?check', null,  function(d){html(d);directorylisting(d);});	


