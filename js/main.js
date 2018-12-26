window.onload = function () {

    console.log("Well, hello there!");
    console.log("I always check to see if people made their own sites too.");
    console.log("Feel free to check out the source on github if you want to see more: https://github.com/cmuellerrr/portfolio");

    $(window).scroll(function (event) {
        var chapters = $('.chapter');
        for (var i = 0; i < chapters.length; i++) {
            handleScroll(chapters[i]);
        }
    });

    $(window).scroll();

    //Handle setting the current section of the home page
    function handleScroll(elem) {
        if (isScrolledIntoView(elem) && !elem.classList.contains('current')) {
            $('.chapter').removeClass('current');
            $(elem).addClass('current');
        }
    }

    //Check if enough of the element is visible
    //In this case, 1/2 of the element
    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop(),
            docViewBottom = docViewTop + $(window).height(),
            elemHeight = $(elem).height(),
            elemTop = $(elem).offset().top,
            elemBottom = elemTop + elemHeight,
            elemThreshold = elemHeight / 2;

        return ((elemTop >= docViewTop) && ((docViewBottom - elemTop) >= elemThreshold)) ||
               ((elemTop <= docViewTop) && ((elemBottom - docViewTop) >= elemThreshold));
    }
};