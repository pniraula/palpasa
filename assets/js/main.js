//This file consists of all the javascripts required for initial welcome page of the sie.

$(document).ready(function(){
	 $("#artist-info").niceScroll({cursorcolor:"#C0C0C0"});
	 $("#station-wrapper").niceScroll({cursorcolor:"#292929"});
	 //user info
	 $("#username").click(function(){
	 	$("#userControls").show();
	 });
	 $("#userControls").mouseleave(function(){
    	$("#userControls").fadeOut("2000");
		});
	 $("#userControls").mouseenter(function(){
    	$("#userControls").fadeIn();
	 });
	 $("#signOutButton").click(function(){
		$.post("/palpasa/request/logOut",function(data){
			if(data.length<1){
				window.location = "/palpasa/site/index";
			}
			else{
				alert(data);
			}
		});
	});
	
	//station
	$("#station-wrapper").on('click',".station-arrow",function(){
		var cId = $(this).attr("station");
		var promt = confirm("Once you remove your station, you will no longer be able to access it in the future. Press Ok to continue.");
		if(promt){
			$.post("/palpasa/request/removeStation",{id: cId},function(data){
				$("#cont-"+cId).remove(); //remove the node from the station list
			});
		}
	});
	$(".nav").click(function(){
		var page = $(this).attr("page");
		$(".extra-info").hide();
		$("#"+page).show();
	});	
});

	function loadSongInfo(song, artistName, artistInfo, lyrics, similarArtists){
		$(".now-playing-con").show();
		$("#lyrics").html(lyrics);
		$("#artist-info").html(artistInfo);
		$("#similar-artists").html(similarArtists);
		shareSong(song, artistName)		
	}
	//**************************sharre********************************//
	function shareSong(song, artist){
		$("#share-option").html('<div id="shareme" data-url="http://localhost/palpasa/site/shared" data-text="Now Playing: '+song+' by '+artist+'."></div>');
		$('#shareme').sharrre({
			  share: {
			    twitter: true,
			    facebook: true,
			    googlePlus: true
			  },
			  template: '<div class="box"><div class="left">Share this song</div><div class="middle"><a href="#" class="facebook">f</a><a href="#" class="twitter">t</a><a href="#" class="googleplus">+1</a></div><div class="right">{total}</div></div>',
			  enableHover: false,
			  enableTracking: true,
			  render: function(api, options){
			  $(api.element).on('click', '.twitter', function() {
			    api.openPopup('twitter');
			  });
			  $(api.element).on('click', '.facebook', function() {
			    api.openPopup('facebook');
			  });
			  $(api.element).on('click', '.googleplus', function() {
			    api.openPopup('googlePlus');
			  });
			}
		});
	}
//********************************************end of sharre*******************//