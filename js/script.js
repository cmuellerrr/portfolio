$(document).ready(function(){
    var sliders = $('.slider');

    //I'm sorry for adding html via javascript, but it had to happen
    for (var i = 0; i < sliders.length; i++) {
        var id = sliders[i].id;

        $('#' + id)
        .after(function() {
            return '<div>' +
                '<p id="caption_' + id + '" class="caption"></p>' +
                '<div class="slider_nav">' +
                    '<a id="prev_' + id + '" href="#">&lt;&lt; Prev</a>' +
                    '<a id="pager_' + id + '" class="pager"></a>' +
                    '<a id="next_' + id + '" href="#">Next &gt;&gt;</a>' +
                '</div>' +
            '</div>';
        })
        .cycle({
            fx: 'fade',
            timeout: 0,
            speed: 500,
            width: '100%',
            fit: 1,
            pager: '#pager_' + id,
            next: '#next_' + id,
            prev: '#prev_' + id,
            caption: '#caption_' + id,
            after: setCaption
        });
    }
});

function setCaption(curr, next, opts) {
    $(opts.caption).html(next.nodeName !== "IMG" ? "" : next.alt);
}

window.onload = function () {
    var navPosition = $('#work_nav').position().top;
    $(window).scroll(function() {
    	if($(window).scrollTop() >= navPosition) {
    		$('#work_nav').addClass("fixed")
    	} else {
    		$('#work_nav').removeClass("fixed");
    	}
    })
};

jQuery.fn.extend({
    scrollToMe: function () {
        var x = jQuery(this).offset().top - 100;
        jQuery('html,body').animate({scrollTop: x}, 500);
    }
});

function scrollTo(element) {
    $(element).scrollToMe();
}