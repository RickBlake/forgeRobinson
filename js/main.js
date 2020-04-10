
$( document ).ready( function() {

    $( 'a.dynamicLoad' ).click( function( e ) {
        e.preventDefault();   // prevent the browser from following the link
        e.stopPropagation();  // prevent the browser from following the link

        $( '#pageContent' ).load( $( this ).attr( 'href' ) );

        console.log('page loaded');
    });

    $( '#pageContent' ).load('partials/home.html');
});
