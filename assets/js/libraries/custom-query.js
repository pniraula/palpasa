(function($) {
    $.fn.countElement = function() {
    	var counter = 0;
        this.each(function() {
            counter +=1;
        });
        return counter;
    };
    String.prototype.empty = function(){
    	if(this.length>0)
    		return false;
    	else	
    		return true;
    }
    $.error = function(mes){
    	var errorMessage = mes;
	    	$("#signUpError").html(errorMessage);
	    	 setTimeout(function(){
			 		$("#signUpError").html("");
			 }, 2000);
    }
   $.signIn = function(){
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
   };
   $.signUp = function(){
	    var errorMessage ="";
	    var firstname = $("#firstnameInputS").val();
	    var lastname = $("#lastnameInputS").val();
	    var email = $("#emailidInputS").val();
	    email = (email.indexOf("@") !== -1)?email:"";
	    var password = $("#passwordInputS").val();
	    var repassword = $("#repasswordInputS").val();
	    if(firstname.empty()){
	    	$.error("First Name is required");
	    }	
	  	else if(lastname.empty()){
	    	$.error("Last Name is required");
	    }
	    else if(email.empty()){
	    	$.error("Valid Email Id is required");
	    }
	    else if(password.empty()){
	    	$.error("Password is required");
	    }
	    else if(lastname.empty()){
	    	$.error("Confirm Password is required");
	    }else if(!$("#accept").is(":checked")){
	    	$.error("You need accept terms and conditions");
	    }
	    else{
	    	if(password != repassword){
	    		errorMessage = "Password and confirmation password didn't match";
	    		$("#signUpError").html(errorMessage);
	    		 setTimeout(function(){
			    		$("#signUpError").html("");
			     }, 2000);
	    	}
	    	else{
	    		 	$.post("/palpasa/request/signUp",{firstName: firstname, lastName: lastname, emailId: email, pass: password},function(data){
						if(data!=true){
							$("#signUpError").html(data);
							 setTimeout(function(){
			        				$("#signUpError").html("");
			    			}, 2000);
						}else{
							$("#signUpError").html("Account created. Please check your email.");
							$("#signUpError").css({'color':'green'});
							 setTimeout(function(){
			        				$("#signUpError").html("");
			        				$("#signUpError").css({'color':'red'});
			    			}, 4000);
						}
					});
	    	}
	    }
   };

   $.loading={
   		'start' : function(mess){
   			$("#loading").show();
   			$("#loading_message").html(mess);
   		},
   		'end' : function(){
   			$("#loading").fadeOut();
   			$("#loading_message").html();
   		}
   }
   
   //randomize array
   Array.prototype.shuffle = function () {
	    for (var i = this.length - 1; i > 0; i--) {
	        var j = Math.floor(Math.random()* (i + 1));
	        var tmp = this[i];
	        this[i] = this[j];
	        this[j] = tmp;
	    }
	
	    return this;
	}
})(jQuery);