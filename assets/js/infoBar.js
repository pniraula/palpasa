$(document).ready(function(){
	loadBar();
	var scrolling = false;
	$("#right-arrow").click(function(){
		var totalCards = $(".songCard").countElement();
		var margin = $(".scrollDiv").css("margin-left").replace("px", "");
		if(margin>-((totalCards-3)*190)&&!scrolling){
			scrolling = true;
			$('.scrollDiv').animate( { marginLeft: '-=190' }, 500,function(){
				scrolling = false;
			});
		}
	});
	$("#left-arrow").click(function(){
		var margin = $(".scrollDiv").css("margin-left").replace("px", "");
		if(margin<0&&!scrolling){
			scrolling = true;
			$('.scrollDiv').animate( { marginLeft: '+=190' }, 500,function(){
				scrolling = false;;
			});
		}
	});
	$("#add").click(function(){
		$('.scrollDiv').animate({marginLeft: '190px' }, 500,function(){
			$(this).css({'margin-left':'0px'});
			$(this).prepend('<div class="songCard"><div class="songInfo">5</div></div>');
			loadBar();
		});
	});
	function loadBar(){
		var cards = $(".songCard");
		var containerWidth = 0;
		cards.each(function(){
			 containerWidth += parseInt($(this).width(), 10);
			 containerWidth +=10;
		});
		$(".scrollDiv").width(containerWidth+190);
	}
});
(function($) {
    $.fn.countElement = function() {
    	var counter = 0;
        this.each(function() {
            counter +=1;
        });
        return counter;
    };
})(jQuery);