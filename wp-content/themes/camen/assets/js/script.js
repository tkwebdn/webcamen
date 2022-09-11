( function( $ ) {
	var body;

	$( document ).ready( function() {
		body = $( document.body );
        
        var main_slider = new Swiper(".main-slider", {
            autoplay: {
                delay: 3000,
            },
            loop: true,
            effect: 'fade',
            navigation: {
                nextEl: ".swiper-button-right",
                prevEl: ".swiper-button-left",
            },
        });
	
	} );
    
    $(window).load(function(){
        
    });
    
} )( jQuery );