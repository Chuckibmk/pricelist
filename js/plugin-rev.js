jQuery( document ).ready( function() {
								   			   
        // revolution slider
        var revapi;
        revapi = jQuery( '#revolution-slider' )
            .revolution( {
                delay: 9000,
                startwidth: 1170,
                startheight: 600,
                onHoverStop: "on",
                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 3,
                touchenabled: "on",
                stopAtSlide: -1,
                stopAfterLoops: -1,
                touchenabled: "on",
                navigationType: "none",
                dottedOverlay: "",
                fullWidth: "on",
                fullScreen: "on",
                shadow: 0
            } );
			
			
});