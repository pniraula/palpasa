$(document).ready(function(){
	$("#searchInput").focus(function(){
    	$("#searchInput").val("");
	});
	$("#searchInput").focusout(function(){
    	$("#searchInput").val("type in artist or genre");
	});
});