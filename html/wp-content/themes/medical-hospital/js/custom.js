// NAVIGATION CALLBACK
jQuery(function($){
 	"use strict";
   	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},
		speed:       'fast'
   	});
});

function medical_hospital_resMenu_open() {
	window.mobileMenu=true;
	jQuery(".respside-nav").addClass('show');
}
function medical_hospital_resMenu_close() {
	window.mobileMenu=false;
	jQuery(".respside-nav").removeClass('show');
}

jQuery(function($){
	$(window).scroll(function(){
	    if ($(window).scrollTop() >= 100) {
	        $('.toggle-menu').addClass('sticky');
	    }
	    else {
	        $('.toggle-menu').removeClass('sticky');
	    }
	});
	$(window).scroll(function(){
		var sticky = $('.sticky-header'),
		scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('fixed-header');
		else sticky.removeClass('fixed-header');
	});
	$(window).load(function() {
		$(".tg-loader").delay(2000).fadeOut("slow");
	    $("#overlayer").delay(2000).fadeOut("slow");
	});
	$(window).load(function() {
		$(".preloader").delay(2000).fadeOut("slow");
	    $(".preloader .preloader-container").delay(2000).fadeOut("slow");
	});

	// back to top.
	$( window ).scroll( function() {
		if ( $( this ).scrollTop() > 200 ) {
			$( '.back-to-top' ).addClass( 'show-back-to-top' );
		} else {
			$( '.back-to-top' ).removeClass( 'show-back-to-top' );
		}
	});
	$( '.back-to-top' ).click( function() {
		$( 'html, body' ).animate( { scrollTop : 0 }, 200 );
		return false;
	});
});

jQuery(window).load(function() {
	window.currentfocus=null;
	medical_hospital_checkfocusdElement();
	var body = document.querySelector('body');
	body.addEventListener('keyup', medical_hospital_check_tab_press);
	var gotoHome = false;
	var gotoClose = false;
	window.mobileMenu=false;
	function medical_hospital_checkfocusdElement(){
	    if(window.currentfocus=document.activeElement.className){
	        window.currentfocus=document.activeElement.className;
	    }
	}
	function medical_hospital_check_tab_press(e) {
	    "use strict";
	    // pick passed event or global event object if passed one is empty
	    e = e || event;
	    var activeElement;

	    if(window.innerWidth < 999){
		    if (e.keyCode == 9) {
		        if(window.mobileMenu){
				    if (!e.shiftKey) {
				        if(gotoHome) {
				            jQuery( ".respside-nav .main-menu-navigation ul:first li:first a:first-child" ).focus();
				        }
				    }
				    if (jQuery("a.closebtn.responsive-menu").is(":focus")) {
				        gotoHome = true;
				    } else {
				        gotoHome = false;
				    }
		    	}
		    }
	    }
	    if (e.shiftKey && e.keyCode == 9) {
		    if(window.innerWidth < 999){
			    if(window.currentfocus=="header-search"){
			        jQuery("button.mobiletoggle").focus();
			    }else{
				    if(window.mobileMenu){
				        if(gotoClose){
				        	jQuery("a.closebtn.responsive-menu").focus();
				        }
				        if(jQuery( ".respside-nav .main-menu-navigation ul:first li:first a:first-child" ).is(":focus")) {
				            gotoClose = true;
				        } else {
				            gotoClose = false;
				        }
				    }
			    }
		    }
	    }
	    medical_hospital_checkfocusdElement();
	}
});