(function($) {
    $.fn.countElement = function() {
    	var counter = 0;
        this.each(function() {
            counter +=1;
        });
        return counter;
    };
})(jQuery);