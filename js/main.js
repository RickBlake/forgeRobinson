
$(document).ready(function() {

    $('a.dynamicLoad' ).click( function(e) {
        e.preventDefault();   // prevent the browser from following the link
        e.stopPropagation();  // prevent the browser from following the link

        $('#pageContent').load($(this).attr('href')).hide().fadeIn();;
        $('#logo').fadeIn();
        console.log('page loaded');
    });

    $('#logo').hide();
    $('#pageContent').load('partials/home.html');
});
