
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

function html(data){
	$('body').html(data.html);
}
function page(data){
	$('.row-fluid').html(data.html);
}
function directorylisting(data){
	$('#directorylisting').append(data.html);
}

ajax('server/functions/user.php?check', null,  html);
