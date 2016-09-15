(function($){

	//new WOW().init();

	var fullpage = $( '#fullpage' ),
	 	//loader = new SVGLoader( document.getElementById( 'loader' ), { speedIn : 300, easingIn : mina.easeinout } ),
		toggle = $('.toggle');
               
                    
    
        var isOpen = false;
       function onOpenDetailSlide() {

	        isOpen = true;
	        $.fn.fullpage.setAllowScrolling(false);
	        $.fn.fullpage.setKeyboardScrolling(false);
	       
	       
	        $('html').css('overflow', 'hidden');
	        $(window).trigger('resize');
	            
	        
	           
	    }
	    function onCloseDetailSlide(index) {
	        $.fn.fullpage.setAllowScrolling(true);
	        $.fn.fullpage.setKeyboardScrolling(true);
	       
            if (index) {
                $('#section' + index + ' .fp-slide').removeClass('active');
            }
            $('html').css('overflow', 'visible');
            $(window).trigger('resize');

	      
	        isOpen = false;
	       
    }
     function onOpenSlide(index, prevIndex) {
	        if (isOpen) {
	            onCloseDetailSlide(prevIndex);
	        } 
	       
	       
	    }


	$('#fullpage').fullpage({
		'verticalCentered': false,
		'css3': true,
		'sectionsColor': ['#F0F2F4', '#fff', '#fff', '#fff'],
		'navigation': false,
		'navigationPosition': 'right',
		'navigationTooltips': ['Home', 'Wedding','Corporate','Real Estate','Local'],
		'loopHorizontal': false,
		'fitToSection': true,
		'scrollOverflow': true,
		'autoScrolling': true,
		afterSlideLoad: function( anchorLink, index, slideAnchor, slideIndex){

            /*if (slideIndex === 1) {
                afterOpenDetailSlide(this);
            } else {
                afterCloseDetailSlide(this);
            }*/
            
	        },
	      onSlideLeave: function( anchorLink, index, slideIndex, direction, nextSlideIndex){
	      		
	            if(slideIndex == 0 && direction == 'right'){
	          		console.log('onOpenDetailSlide');
	                onOpenDetailSlide();

	            }
	            if(slideIndex == 1 && direction == 'left'){
	      			console.log('onCloseDetailSlide');
	                 onCloseDetailSlide();
	              
	            }
	           
	        },

	    onLeave: function(index, nextIndex, direction){
	      console.log('onLeave - onOpenSlide');
	      onOpenSlide(nextIndex - 1, index - 1);
	      
	    }
	});

	$('a[data-goto]').on('click', function (e) {
		//debugger;
		if($(this).data('gotoslide'))
			$.fn.fullpage.moveTo($(this).data('goto'), $(this).data('gotoslide'));
		else
			$.fn.fullpage.moveTo($(this).data('goto'), 0);

		e.preventDefault();
	});
	

	
	toggle.on('click', function  (e) {
		
		$(this).toggleClass('open');
		$('.nav-slides').toggleClass('open');

		e.preventDefault();
	})

	$('.terms').on('click', function (e) {

		$('.terms-conditions').toggleClass('open');
		
		e.preventDefault();
	});

	$('.terms-conditions .close').on('click', function (e) {
		
		$('.terms-conditions').removeClass('open');
		
		e.preventDefault();
	});

	$(".terms-conditions-content").mCustomScrollbar({theme:"dark"});

	$('.contact-link').on('click', function (e) {
		//debugger;
		 if (isSmall()) {
                window.location.href = $(this).attr('href');
            } else {
               $('.contact-us').toggleClass('open');
            }
		
		
		e.preventDefault();
	});

	$('.contact-us .close').on('click', function (e) {
		
		$('.contact-us').removeClass('open');
		
		e.preventDefault();
	});

	$(".contact-us-content").mCustomScrollbar({theme:"dark"});
	//$(".page-normal").mCustomScrollbar({theme:"light"});
	 function isSmall() {
        
        return ($('body').hasClass('fp-responsive'));
        
    }

	
    $(window).load(function() {
     
     
      resizes();

    });

    $(window).resize(resizes);

    function resizes()
     {
      
      
        
		responsive();
        
        
        
       
      

     }
     function responsive() {
         
                var isResponsive = $('body').hasClass('fp-responsive');
                if (getWindowWidth() < 1000) {
                    if (!isResponsive) {
                        $('body').addClass('fp-responsive');
                        $.fn.fullpage.setAutoScrolling(false, 'internal');
                       // $.fn.fullpage.setFitToSection(false, 'internal');
                    }
                } else if (isResponsive) {
                     $('body').removeClass('fp-responsive');
                     $.fn.fullpage.setAutoScrolling(true, 'internal');
                     //$.fn.fullpage.setFitToSection(true, 'internal');
                }

               
        }

})(jQuery);

function getScrollerWidth() {
  var scr = null;
  var inn = null;
  var wNoScroll = 0;
  var wScroll = 0;

  // Outer scrolling div
  scr = document.createElement('div');
  scr.style.position = 'absolute';
  scr.style.top = '-1000px';
  scr.style.left = '-1000px';
  scr.style.width = '100px';
  scr.style.height = '50px';
  // Start with no scrollbar
  scr.style.overflow = 'hidden';

  // Inner content div
  inn = document.createElement('div');
  inn.style.width = '100%';
  inn.style.height = '200px';

  // Put the inner div in the scrolling div
  scr.appendChild(inn);
  // Append the scrolling div to the doc
  document.body.appendChild(scr);

  // Width of the inner div sans scrollbar
  wNoScroll = inn.offsetWidth;
  // Add the scrollbar
  scr.style.overflow = 'auto';
  // Width of the inner div width scrollbar
  wScroll = inn.offsetWidth;

  // Remove the scrolling div from the doc
  document.body.removeChild(
    document.body.lastChild);

  // Pixel width of the scroller
  return (wNoScroll - wScroll);
}

function getWindowHeight() {
  var windowHeight=0;
  if (typeof(window.innerHeight)=='number') {
    windowHeight=window.innerHeight;
  } else {
    if (document.documentElement && document.documentElement.clientHeight) {
      windowHeight = document.documentElement.clientHeight;
    } else {
      if (document.body && document.body.clientHeight) {
        windowHeight=document.body.clientHeight;
      }
    }
  }
  return windowHeight;
}

function getWindowWidth() {
  var windowWidth=0;
  if (typeof(window.innerWidth)=='number') {
    windowWidth=window.innerWidth;
  } else {
    if (document.documentElement && document.documentElement.clientWidth) {
      windowWidth = document.documentElement.clientWidth;
    } else {
      if (document.body && document.body.clientWidth) {
        windowWidth=document.body.clientWidth;
      }
    }
  }
  return windowWidth;
}



