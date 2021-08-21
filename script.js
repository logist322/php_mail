$(document).ready(function() {

	
	$("form").submit(function(evt) { 
		evt.preventDefault();	

		var th = $(this);

		//$.ajax({
		//	type: "POST",
		//	url: "mail.php", 
		//	data: th.serialize()
		//}).done(function() {
		//	setTimeout(function() {
		//		th.trigger("reset");
		//	}, 1000);
		//});

		$.ajax({
			type: "POST",
			url: "telegram.php", 
			data: th.serialize()
		}).done(function() {
			setTimeout(function() {
				th.trigger("reset");
			}, 1000);
		});
		
		alert("Спасибо");
	});
});