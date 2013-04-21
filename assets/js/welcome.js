//This file consists of all the javascripts required for initial welcome page of the sie.
$(document).ready(function(){
	$("#sign").click(function(){
		$.post("/palpasa/request/logIn",{user:'pniraula@vumari.com', password: 'pande123'},function(data){
			alert(data);
		});
	});
});
