//I realize this is a little wierd, but I really hate mailto
//and this will help with spammers.
window.onload = function() {
    $('#email').click(function(event) {
        $('#email').replaceWith("chris@iammueller.com");
        event.preventDefault();
    });
};