//This file consists of all the javascripts required for initial welcome page of the sie.

$(document).ready(function(){
	//sign in
	$("#signInButton").click(function(){
		$.signIn();
	});
	//sign up
	$("#signUpButton").click(function(){
		$.signUp();
	});
	//enterkey press 
	$(document).keypress(function(e){
		if(e.keyCode == 13){
			//sign in
			if($(".signInInput").is(":focus")){
				$.signIn();
			}
			//sign up
			if($(".signUpInput").is(":focus")){
				$.signUp();
			}
		}
	});
	 $("#usernameInput").focus();
	
});
