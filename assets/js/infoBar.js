
	function Scroller(){
		var scrolling = false;
		this.leftArrow = $("#left-arrow");
		this.rightArrow = $("#right-arrow");
		this.totalCards = $(".songCard").countElement();
		var parent = this;
		this.load = function(){
			var cards = $(".songCard");
			var containerWidth = 0;
			cards.each(function(){
				 containerWidth += parseInt($(this).width(), 10);
				 containerWidth +=10;
			});
			$(".scrollDiv").width(containerWidth+190);
		}
		this.reset = function(){
			$(".songCard").remove();
		}
		this.left = function(){
			var margin = $(".scrollDiv").css("margin-left").replace("px", "");
			if(margin<0&&!scrolling){
				scrolling = true;
				$('.scrollDiv').animate( { marginLeft: '+=190' }, 500,function(){
					scrolling = false;;
				});
			}
		}
		this.right = function(){
			var totalCards = $(".songCard").countElement();
			var margin = $(".scrollDiv").css("margin-left").replace("px", "");
			if(margin>-((totalCards-3)*190)&&!scrolling){
				scrolling = true;
				$('.scrollDiv').animate( { marginLeft: '-=190' }, 500,function(){
					scrolling = false;
				});
			}
		}
		//for arrows
		this.rightArrow.click(function(){
				parent.right();
		});
		this.leftArrow.click(function(){
				parent.left();
		});
		//keyboard events
		$(document).bind('keydown', function(e) {
	  		k = e.keyCode;
	  		if(k==37)
	  			scroller.left();
	  		if(k==39)
	  			scroller.right();
		});
	}
$(document).ready(function(){
	function fixDiv() {
	    var $div = $("#music_player");
	    if ($(window).scrollTop() > $div.data("top")) { 
	        $('#music_player').css({'position': 'fixed', 'top': '0', 'width': '640px'}); 
	    }
	    else {
	        $('#music_player').css({'position': 'static', 'top': 'auto', 'width': '640px'});
	    }
	}
	$("#music_player").data("top", $("#music_player").offset().top); // set original position on load
	$(window).scroll(fixDiv);
});
