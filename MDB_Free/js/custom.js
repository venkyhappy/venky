
 $(document).ready(function() {
	var winHeight = $(window).height();
	var winWidth = $(this).width();
	//console.log(winWidth);
	console.log(winHeight);
	

	
	
	$('.special .item').on('click', function(){
		$('.special .item.current').removeClass('current');
		$(this).addClass('current');
	});
	
	
	/* $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
				dots: false,
				
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 1,
                    nav: false
                  },
                  1000: {
                    items: 1,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              }) */
			  
	
        $('.load').click(function(){
			console.log('---------------------------');
            $('#load4').load( 'demo/index.html' );
        });
    
   
	
	
	
	
	
	
  }); 	
  
  