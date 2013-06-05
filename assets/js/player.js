$(document).ready(function(){

/*play icon click function 
  if song is paused change icon and play,
  if song is being played change icon and pause
*/ var dir ="http://localhost/palpasa/assets/images/";
	var song = $("#current-song").get(0);
	var muted = false;
	var volume_value;
	var index = 0;
	var song_list = new Array();
	var max = 0;
	var scroller = new Scroller();
	var active  = false;
	var stationId;
	var isFav = false;
	scroller.load();
	completed();
	$("#volume-cont").mouseover(function() {
		$("#volume-icon").attr("src", "http://localhost/palpasa/assets/images/controls/mute.png");
	  }).mouseout(function(){
	  	  if(!muted){
	    	$("#volume-icon").attr("src", "http://localhost/palpasa/assets/images/controls/volume.png");
		  }else{
			$("#volume-icon").attr("src", "http://localhost/palpasa/assets/images/controls/mute.png");
		  }
	});
	/*$("#play-icon").click(function(){
		if(song_list.length>0){
			if(song.paused){
				song.play();
				$("#play-icon").attr("src", "http://localhost/palpasa/assets/images/controls/pause.png");
			}
			else{
			$("#play-icon").attr("src", "http://localhost/palpasa/assets/images/controls/play.png");
				song.pause();
			}
		}else{
			alert("Please choose a station or create one");
		}
	});
	$("#forward-icon").click(function(){
		if(!active){
			active = true;
			next();
		}
	});
	$("#previous-icon").click(function(){
		if(!active){
			active = true;
			previous();
		}
	});
	*/
	$(".icon-play").click(function(){
		if(song_list.length>0){
			if(song.paused){
				song.play();
				$(".icon-play").attr("class", "icon-pause");
			}
			else{
			$(".icon-pause").attr("class", "icon-play");
				song.pause();
			}
		}else{
			alert("Please choose a station or create one");
		}
	});
	
	$("icon.next").click(function(){
		if(!active){
			active = true;
			next();
		}
	});
	$(".icon-previous").click(function(){
		if(!active){
			active = true;
			previous();
		}
	});
	$("#volume-icon").click(function(){
		if(song.muted){
			song.muted = false;
			muted = false;
			$("#volume-icon").attr("src", "http://localhost/palpasa/assets/images/controls/volume.png");
		}else{
			song.muted = true;
			muted = true;
			$("#volume-icon").attr("src", "http://localhost/palpasa/assets/images/controls/mute.png");
		}
	});
	$("#volume-max-icon").click(function(){
		song.muted = false;
		muted = false;
		$( "#slider" ).slider({ value: 100});
	});
	$("#controllers-icon div").mouseover(function(){
		$(this).addClass('icon-hover');
	}).mouseleave(function(){
		$(this).removeClass('icon-hover');
	});
	$("#slider").slider({
	    orientation: "horizontal",
	    range: "min",
	    min: 0,
	   	max: 100,
	    value: 50,
	    step: 1,
	    change : function(){
		    	song.muted = false;
				muted = false;
	   		    var value = $("#slider").slider("value");
		        song.volume = (value / 100);
	    }
	});
	//load station
	$("#station-wrapper").on('click',".station-name",function(){
		var sId = $(this).attr("station");
		isFav = false;
		$.post("/palpasa/request/songList",{id : sId}, function(data){
			var list = eval('(' + data + ')');
			song_list = list.shuffle();
			index = 0;
			stationId = sId;
			play(song_list[index], true);
			scroller.reset();
		});
	});
	$("#favorite").click(function(){
		$(".rating").hide();
		isFav = true;
		$.post("/palpasa/request/favList", function(data){
			var list = eval('(' + data + ')');
			if(list.length>0){
				song_list = list.shuffle();
				index = 0;
				play(song_list[index], true);
				scroller.reset();
			}else{
				alert("You don't have favorite songs");
			}
		});
	});
	function next(){
		index = index+1;
		if(song_list.length>index){
			if(max<index){
				max = index;
				play(song_list[index], true);
			}else{
				play(song_list[index], false);
				scroller.left();
			}
		}else{
			index = index-1;
			active = false;
		}
	}
	function previous(){
		index = index-1;
		if(index>-1){
			play(song_list[index], false);
			scroller.right();
		}else{
			index = index+1;
			active = false;
		}
	}
	function play(song_id, card){
		completed();
		$.post("/palpasa/request/songDetail",{id : song_id}, function(data){
			var data  = eval('('+data+')');
			var song_url ='http://localhost/palpasa/player/getSong/'+data[0]['url'];
			var song_name = data[0]['name'];
			var artist_name = data[0]['artist'];
			var album_name = data[0]['album'];
			var about_artist = (data[0]['about']!=null)?data[0]['about']:"Not Available";
			var artist_img = (data[0]['image']!=null)?data[0]['image']:"http://localhost/palpasa/assets/images/Artists/default.jpg";
			var lyrics = (data[0]['lyrics']!=null)?data[0]['lyrics']:"We are working hard to bring lyrics. <br>Thank you for your patience.";
			var rating = (data[0]['rate']!=null)?data[0]['rate']:1;
			$("#player").html('<audio id="current-song"><source id="current_song_src" src="'+song_url+'" type="audio/mpeg" onended="playnext()"></div>');
			song = $("#current-song").get(0);
			$("#play-icon").attr("src", "http://localhost/palpasa/assets/images/controls/pause.png");
			$(".songCard").removeClass("current");
			if(card){
				addCard(song_id, song_name, artist_name, album_name,rating, artist_img);
			}else{
				$("#card-"+index).addClass("current");
				active = false;
			}
			loadSongInfo(song_name, artist_name, about_artist, lyrics, "1974 AD");
			song.play();
			song.addEventListener("timeupdate", updateProgress, false);
		});
	}
	function addCard(id, nam, art, alb, rat, imag){
		$('.scrollDiv').animate({marginLeft: '190px' }, 500,function(){
			$(this).css({'margin-left':'0px'});
			var imgstyle = 'style="background-image:url(\''+imag+'\')"';
			var html = '<div class="songCard current" '+imgstyle+' id="card-'+index+'">';
			html = html+'<div class="progressBar"><div class="progress"></div></div>';
			html = html+'<div class="artistImg"></div>';
			html = html+'<div class="songInfo"><div class="title songInfoVal">Title: '+nam+'</div>';
			html = html+'<div class="album songInfoVal">Album: '+alb+'</div>';
			html = html+'<div class="artist songInfoVal">Artist: '+art+'</div>';
			if(!isFav){//we don't show rating icons we are playing favorite playlist
				html = html+'<div class="rating songInfoVal">Rate:';
				if(rat==0){
					html = html +'<img class="thumbsdown thumbs" index="'+index+'" station="'+stationId+'" icon="down" rateId="'+id+'" src="'+dir+'thumbsdowned.png"/>';
					html = html +'<img class="thumbsup thumbs" index="'+index+'" station="'+stationId+'" icon="up" rateId="'+id+'" src="'+dir+'thumbsup.png"/>';
				}else if(rat==1){
					html = html +'<img class="thumbsdown thumbs" index="'+index+'" station="'+stationId+'" icon="down" rateId="'+id+'" src="'+dir+'thumbsdown.png"/>';
					html = html +'<img class="thumbsup thumbs" index="'+index+'" station="'+stationId+'" icon="up" rateId="'+id+'" src="'+dir+'thumbsup.png"/>';
				}
				else if(rat==2){
					html = html +'<img class="thumbsdown thumbs" index="'+index+'" station="'+stationId+'" icon="down" rateId="'+id+'" src="'+dir+'thumbsdown.png"/>';
					html = html +'<img class="thumbsup thumbs" index="'+index+'" station="'+stationId+'" icon="uped" rateId="'+id+'" src="'+dir+'thumbsuped.png"/>';
				}
			}else{
				html = html+'<div class="songInfoVal"><img class="thumbs" icon="uped" src="'+dir+'thumbsuped.png"/>';
			}
			html = html+'</div>';
			html = html+'</div>';
			html = html+'</div>';
			$(this).prepend(html);
			scroller.load();
			active = false;
		});
	}
	$('.scrollDiv').on('click', '.songCard .rating .thumbs', function(){
		var songId = $(this).attr("rateId");
		var i = $(this).attr("index");
		if($(this).attr("icon")=="uped"){
			$(this).attr("src",dir+"thumbsup.png");
			$(this).attr("icon", "up");
			$.post("/palpasa/request/rate",{val: 1, station: stationId, id : songId});
		}else if($(this).attr("icon")=="up"){
			$(this).attr("icon", "uped");
			$(this).attr("src",dir+"thumbsuped.png");
			$(".thumbsdown[index='"+i+"']").attr("icon", "down");
			$(".thumbsdown[index='"+i+"']").attr("src",dir+"thumbsdown.png");
			$.post("/palpasa/request/rate",{val: 2, station: stationId, id : songId});
		}else if($(this).attr("icon")=="down"){
			$.post("/palpasa/request/rate",{val: 0, station: stationId, id : songId});
			$(this).attr("icon", "downed");
			$(this).attr("src",dir+"thumbsdowned.png");
			$(".thumbsup[index='"+i+"']").attr("icon", "up");
			$(".thumbsup[index='"+i+"']").attr("src",dir+"thumbsup.png");
			if(max==i){
				index +=1;
				next();
			}
		}else if($(this).attr("icon")=="downed"){
			$.post("/palpasa/request/rate",{val: 1, station: stationId, id : songId});
			$(this).attr("icon", "down");
			$(this).attr("src",dir+"thumbsdown.png");
			if(max==i){
				index +=1;
				next();
			}
		}
	});
	function updateProgress() {
	   var progress = document.getElementById("progress");
	   var value = 0;
	   if (song.currentTime > 0) {
	      value = (100 / song.duration) * song.currentTime;
	   }
	   var total = Math.floor(song.duration/60)+Math.floor(song.duration%60)/100;
	   var current = Math.floor(song.currentTime/60)+Math.floor(song.currentTime%60)/100;
	   var second = Math.floor(song.currentTime%60)/100;
	   var minute = Math.floor(song.currentTime/60);
	   //$("#current-time").html(Math.round(current*100)/100);
	   //$("#total-time").html(Math.round((total)*100)/100);
	   $(".progress").css({'width': value + "%"});
	   if(song.ended){
			index +=1;
			next();
		}
	}
	$("#searchSuggestion").on('click', '.searchResult',function(){
		var type = $(this).attr('type');
		var id = $(this).attr('id');
		var name = $(this).html();
		$.loading.start("Creating station");
		$.post('/palpasa/request/addStation',{station_name:name, type_id: id, type_name:type}, function(data){
			if(data>0){
				var station = "<div class='station' id='cont-"+data+"'>";
				station +="<div class='station-arrow' station='"+data+"' name='"+name+"'></div>";
				station +="<div class='station-name' station='"+data+"'>"+name+"</div></div>";
				$("#station-wrapper").append(station);
				$.post("/palpasa/request/songList",{id : data}, function(data2){
					var list = eval('(' + data2 + ')');
					song_list = list.shuffle();
					index = 0;
					play(song_list[index], true);
					scroller.load();
					scroller.reset();
				});
			}
			$.loading.end();
		});
		$("#searchSuggestion").html('');
		$("#searchSuggestion").hide();
	});
	function completed(){
		//$(".controller-icon").css({'visibility':'visible'});
		if(song_list.length==0){
			//$(".controller-icon").css({'visibility':'hidden'});
		}
		else if(index==song_list.length-1){
			//$("#forward-icon").css({'visibility':'hidden'});
		}else if(index==0){
			//$("#previous-icon").css({'visibility':'hidden'});
		}
	}
});
