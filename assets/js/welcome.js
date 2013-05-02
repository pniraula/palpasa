//This file consists of all the javascripts required for initial welcome page of the sie.

$(document).ready(function(){
	$("#signInButton").click(function(){
		$.post("/palpasa/request/logIn",{user:$("#usernameInput").val(), password: $("#passwordInput").val()},function(data){
			if(data.length<1){
				//login error
				$("#signInError").html("Oops! No match found.");
				 setTimeout(function(){
        				$("#signInError").html("");
    			}, 2000);
			}
			else{
				window.location ="/palpasa/site/home";
			}
		});
	});
	
	 $("#station-wrapper").niceScroll({cursorcolor:"#292929"});
});
