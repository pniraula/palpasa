
$(document).ready(function(){
	$("#searchInput").focus(function(){
		$("#searchInput").val("");
		$("#searchInput").css({'background-color': '#202020'});
    	$("#searchSuggestion").show();
	});
	$("#searchInput").focusout(function(){
		$("#searchInput").css({'background-color': '#494949'});
    	$("#searchInput").val("type in artist or genre");
    	$("#searchSuggestion").hide(2000,function(){
    		$("#searchSuggestion").html('');
    	});
	});
	$("#searchInput").keyup(function(e){
		var len = $("#searchInput").val().trim();
		len = len.length;
		$("#searchSuggestion").html('');
		if(len>2){
			var value = $("#searchInput").val();
			$.post('/palpasa/request/search',{val: value},function(data){
				var obj = $.parseJSON(data);
				$.each(obj, function(){
					$("#searchSuggestion").append('<div id="'+this.id+'" class="searchResult" type="'+this.type+'">'+this.name+'</div>');
				});
			});
		}
	});
	//search result clicked moved to player.js
});