
/* $(document).ready(function() {
	var winHeight = $('.content-sections').height();
	var winWidth = $(this).width();
	//console.log(winWidth);
	console.log(winHeight);
	var off = $('.content-sections').offset().top
	console.log(off);

  }); */	
  
  $('.scroll-content').scroll(function() {
	  var off = $('.content-sections').offset().top;
        if (off < 0) {
			console.log('--------------------');
            $('nav').css({position: "fixed", top: "0px"});
            $('.intro').css({position: "fixed", top: "0px"});
        } else {
            $('nav').css({position: "fixed", top: off});
			 $('.intro').css({position: "fixed", top: off});
        }
    });
