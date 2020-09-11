$(function() {

	$('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
$(function() {
	$(window).bind("load resize", function() {
		width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
		if (width < 2400) {
			$('div.sidebar-collapse').addClass('collapse');
		} else {
			$('div.sidebar-collapse').removeClass('collapse');
		}
	});
});


$(function() {
$('#act1').affix({
		offset : {
			top : 1400, //2500
			bottom :100 //2500
		}
	});
	/*$('#act1_2').affix({
		offset : {
			top : 2500, //2500
			bottom : 2500 //2500
		}
	});
	$('#act1_3').affix({
		offset : {
			top : 4500, //4500
			bottom : 700 //700
		}
	});
*/
	$('#act2_1').affix({
		offset : {
			top : 1500, //2500
			bottom : 0 //2500
		}
	});

	$('#act5_1').affix({
		offset : {
			top : 1400,
			bottom : 5700
		}
	});
	$('#act5_2').affix({
		offset : {
			top : 3790,
			bottom : 3200
		}
	});
	$('#act5_3').affix({
		offset : {
			top : 6250,
			bottom : 670
		}
	});
		$('#act6_1').affix({
		offset:{
			top:1600, 
			bottom: 0
		}
	});
	
	$('#act7_1').affix({
		offset:{
			top:1600, 
			bottom: 1120
		}
	});	
		$('#act8_1').affix({
		offset:{
			top:1600, 
			bottom: 1120
		}
	});	
	//$('#act7_2').affix({
	//	offset:{
	//		top:1600, 
	//		bottom: 0 
	//	}
	//});	
		$('#act3').affix({
		offset:{
			top:1600, 
			bottom: 1360
		}
	});	
			$('#act4').affix({
		offset:{
			top:1600, 
			bottom: 1460
		}
	});	
	 $("nav.navbar-fixed-top").autoHidingNavbar();
});

