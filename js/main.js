window.onload = function () {
    var header = $('header');

    if (header.length > 0) {
        $(document).scroll(function () {
            if ($(document).scrollTop() > 0) {
                header.addClass('fixed');
            }
            else {
                header.removeClass('fixed');
            }
        });
    }
};