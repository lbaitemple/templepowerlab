<?php
	require_once('auth.php');
?>
<!DOCTYPE html>
<html lang="en" class="no-js demo-4">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>BookBlock: A Content Flip Plugin - Demo 4</title>
		<meta name="description" content="Bookblock: A Content Flip Plugin - Demo 4" />
		<meta name="keywords" content="javascript, jquery, plugin, css3, flip, page, 3d, booklet, book, perspective" />
		<meta name="author" content="Codrops" />

		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="experiment1/slider/css/default.css" />
		<link rel="stylesheet" type="text/css" href="experiment1/slider/css/bookblock.css" />
		<!-- custom demo style -->
		<link rel="stylesheet" type="text/css" href="experiment1/slider/css/demo4.css" />
		<script src="experiment1/slider/js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="bb-custom-wrapper">
				
				<div id="bb-bookblock" class="bb-bookblock">
					<div  class="bb-item">
						<p>Step 1: Please connect the circuits according to the schematic diagram. Tips are shown in the following video:</p>
						<img width='650'  src="experiment1/slider/1_1.gif"> 
						
					</div>
					<div  class="bb-item">
						<p>Step 2: Once the circuit is connected correctly, change the speed of the turbine to "1800 rpm" by clicking the "+" button. Tips are shown in the following video:</p>
						<img width='650'  src="experiment1/slider/1_2.gif">
				
						
					</div>
					<div class="bb-item">
						<p>Step 3: Read the value of the voltmeter when the value of ammeter is equal to "0.0", then fill the value to the table. Tips are shown in the following video:</p>
						<img width='650'  src="experiment1/slider/1_3.gif">
						<p>Step 4: Change the value of ammeter to "0.1" by clicking "-" button of the left Rheostat, then fill the value to the table. Repeat this step untill you fill up the table.</p>
					</div>
					<div  class="bb-item">
						<p>Step 5: Click the "Save Values" button to save all the values you collect. Then click the "next" button to go to the next page and plot the data. Tips are shown in the following video:</p>
						<img width='650'  src="experiment1/slider/1_4.gif">
					 </div> 
					
				</div>

				<nav>
					<a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
					<a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
					<a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
					<a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>
				</nav>

			</div>

		</div><!-- /container -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="experiment1/slider/js/jquerypp.custom.js"></script>
		<script src="experiment1/slider/js/jquery.bookblock.js"></script>
		<script>
			var Page = (function() {
				
				var config = {
						$bookBlock : $( '#bb-bookblock' ),
						$navNext : $( '#bb-nav-next' ),
						$navPrev : $( '#bb-nav-prev' ),
						$navFirst : $( '#bb-nav-first' ),
						$navLast : $( '#bb-nav-last' )
					},
					init = function() {
						config.$bookBlock.bookblock( {
							speed : 1000,
							shadowSides : 0.8,
							shadowFlip : 0.4
						} );
						initEvents();
					},
					initEvents = function() {
						
						var $slides = config.$bookBlock.children();

						// add navigation events
						config.$navNext.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'next' );
							return false;
						} );

						config.$navPrev.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'prev' );
							return false;
						} );

						config.$navFirst.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'first' );
							return false;
						} );

						config.$navLast.on( 'click touchstart', function() {
							config.$bookBlock.bookblock( 'last' );
							return false;
						} );
						
						// add swipe events
						$slides.on( {
							'swipeleft' : function( event ) {
								config.$bookBlock.bookblock( 'next' );
								return false;
							},
							'swiperight' : function( event ) {
								config.$bookBlock.bookblock( 'prev' );
								return false;
							}
						} );

						// add keyboard events
						$( document ).keydown( function(e) {
							var keyCode = e.keyCode || e.which,
								arrow = {
									left : 37,
									up : 38,
									right : 39,
									down : 40
								};

							switch (keyCode) {
								case arrow.left:
									config.$bookBlock.bookblock( 'prev' );
									break;
								case arrow.right:
									config.$bookBlock.bookblock( 'next' );
									break;
							}
						} );
					};

					return { init : init };

			})();
		</script>
		<script>
				Page.init();
		</script>
	</body>
</html>