<!DOCTYPE html>
<html>
	<head>
		<title>Generator</title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<meta name="viewport" content="user-scalable=no">
		<link href="css/styles.css" rel="stylesheet" type="text/css">
		<link href="css/toastr.css" rel="stylesheet"/>
		<link href="../css/bootstrap.css" rel="stylesheet"/>

	</head>

	<body>

		<div id="loader">
			<span class="loader-text">Loading...</span>
		</div>
		<div id="container">
			<div class="turbine-generator-wrap">
				<div id="turbine">
					<div class="turbine-title">
						Turbine
					</div>
					<div class="turbine-buttons-wrap js-turbine-buttons-wrap">
						<button class="turbine-button down js-turbine-button" disabled>
							-
							<br>
							Speed
						</button>
						<button class="turbine-button up js-turbine-button" disabled>
							+
							<br>
							Speed
						</button>

						<div id='indicator' class="turbine-speed-indicator js-turbine-speed-indicator" data-speed="0">
							0 RPM
						</div>
						<br>
						<div class="col-lg-12" align="center">
							<div class="onoffswitch">
								<input type="checkbox" name="onoffswitch" onclick="switchMachine()" value="0" class="onoffswitch-checkbox js-turbine-button-switch" id="myonoffswitch" unchecked disabled>
								<label class="onoffswitch-label" for="myonoffswitch"> <span class="onoffswitch-inner"></span> <span class="onoffswitch-switch"></span> </label>
							</div>
						</div>

					</div>

				</div>
				<div id="generatorWrap">
					<canvas id="generatorCanvas" height="500" width="500"></canvas>
					<!--<div id="generatorControls">
					<span class="gen-current-indicator js-gen-current-indicator">Current: 0</span>
					<button class="generator_button js-gen-inc-button">+</button>
					<button class="generator_button minus js-gen-dec-button">-</button>
					</div>-->
				</div>
			</div>

			<div class="circuit-container js-circuit-container">
				<span class="circuit js-circuit"></span>

				<span class="circuit-connection a vert js-circuit-connection js-a"></span>

				<span class="circuit-connection b vert js-circuit-connection js-b"></span>

				<span class="circuit-connection c vert js-circuit-connection js-c"></span>
				<span class="circuit-connection d hor js-circuit-connection js-d"></span>
				<span class="circuit-connection e vert js-circuit-connection js-e"></span>
				<span class="circuit-connection f hor js-circuit-connection js-f"></span>
				<span class="circuit-connection g vert js-circuit-connection js-g"></span>
				<span class="circuit-connection h vert js-circuit-connection js-h"></span>
				<span id="spot-a" class="circuit-hotspot a vert js-circuit-hotspot" data-connect="a"></span>
				<span id="spot-b" class="circuit-hotspot b vert js-circuit-hotspot" data-connect="b"></span>
				<span id="spot-c" class="circuit-hotspot c vert js-circuit-hotspot" data-connect="c"></span>
				<span id="spot-d" class="circuit-hotspot d hor js-circuit-hotspot" data-connect="d"></span>
				<span id="spot-e" class="circuit-hotspot e vert js-circuit-hotspot" data-connect="e"></span>
				<span id="spot-f" class="circuit-hotspot f hor js-circuit-hotspot" data-connect="f"></span>
				<span id="spot-g" class="circuit-hotspot g vert js-circuit-hotspot" data-connect="g"></span>
				<span id="spot-h" class="circuit-hotspot h vert js-circuit-hotspot" data-connect="h"></span>

			</div>

		</div>
		<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">

						</button>
						<h4 class="modal-title" id="myModalLabel">Experiment 1 & 5 Schematics</h4>
					</div>
					<div class="modal-body">
						<img width="100%" src="../images/experiment1/circuit_exp1.jpg" />
						<img width="100%" src="../images/experiment1/circuit_exp5.jpg" />
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Close
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="solModal" tabindex="-1" role="dialog" aria-labelledby="solModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">

						</button>
						<h4 class="modal-title" id="myModalLabel">Solution</h4>
					</div>
					<div class="modal-body">
						<img width="100%" src="../images/experiment1/exp1_sol.jpg" />
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Close
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="components-window-wrap js-components-window-wrap">
			<div class="components-window js-components-window">
				<span class="close-x js-close-x"></span>
				<span class="components-window-heading js-components-window-heading"></span>
				<span class="component ammeter hor js-component" data-component="ammeter"><span class="component-text meter">Ammeter</span></span>
				<span class="component voltmeter hor js-component" data-component="voltmeter"><span class="component-text meter">Voltmeter</span></span>
				<span class="component resistor hor js-component" data-component="resistor"><span class="component-text resistor">Variable Resistor</span></span>
				<span class="component wire hor js-component" data-component="wire"><span class="component-text wire">Jumper Wire</span></span>

				<span class="component-option js-component-option" data-option="disconnect">Disconnect Component</span>
				<span class="component-option js-component-option" data-option="change">Change Component</span>
				<span class="component-option js-component-option js-resistor-option" data-option="resistor">Change Resistor Value</span>

				<!--<div class="variable_resistor_body js_variable_resistor_body" data-value="">
				<img src="images/circuit/variable_resistor_terminal.png" class="variable_resistor_terminal js_variable_resistor_terminal" data-position="">
				<span class="variable_resistor_value js_variable_resistor_value"></span>
				</div>-->
			</div>
		</div>

		<script src="js/plugins/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="js/plugins/numeric-1.2.6.min.js"></script>
		<script>
			var eventTypeDown = 'mousedown';
			var eventTypeUp = 'mouseup mouseleave';
			if ('ontouchstart' in window || !!(navigator.msMaxTouchPoints)) {
				eventTypeDown = 'touchstart';
				eventTypeUp = 'touchend';
			}
		</script>
		<script src="js/sparks.js"></script>
		<script src="js/generator.js"></script>
		<script src="js/circuit_checker.js"></script>
		<script src="js/circuit.js"></script>
		<script src="js/toastr.js"></script>

		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script>
		<script type="text/javascript">
			function switchMachine() {
				var $turbine_speed_indicator = $('.js-turbine-speed-indicator');
				var $turbine_buttons = $('.js-turbine-button');
				var $turbine_buttons_switch = document.getElementById("myonoffswitch");
				//console.log($turbine_buttons_switch.checked);
				$ammeter1 = $('.js-b.ammeter');
				$voltmeter1 = $('.js-h.voltmeter');
				if(Exp=='exp1')
				{calcExp1.current1 = 1.20;
					$ammeter1.html('1.20A');}
					//voltmeter to 0
					
				var res = document.getElementById("indicator").innerHTML.split(" ");
				if ($turbine_buttons_switch.checked == true) {
					//alert(res[0]);
					var turbine_speed = $('.js-turbine-speed-indicator').attr('data-speed');
					$turbine_speed_indicator.attr('data-speed', res[0]);
					circuit_checker.experiments['exp1'].calculate();
					$turbine_buttons.attr('disabled', true);
					//enable "-"
					if(Exp=='exp2')
						$('.js-a.resistor .down').attr('disabled', false);
					else
						$('.js-g.resistor .down').attr('disabled', false);
						
						disableResistor();

				} else {
					$turbine_speed_indicator.attr('data-speed', 0);
					circuit_checker.experiments['exp1'].calculate();
					$turbine_buttons.attr('disabled', false);
					//set speed to 0
					//$turbine_speed_indicator.html('0 RPM');
					//disable "-"
					
					$('.js-a.resistor .up').attr('disabled', true);
					$('.js-a.resistor .down').attr('disabled', true);
					$('.js-g.resistor .up').attr('disabled', true);
					$('.js-g.resistor .down').attr('disabled', true);
					//ammeter to 0
					calcExp1.current1 = 0;
					$ammeter1.html('0.00A');
					//voltmeter to 0
					$voltmeter1.html('0.00V');
					if(Exp=='exp1'){
						$('.js-f.ammeter').html('0.00A');
					}
					enableResistor();
				}
			}
			function disableResistor() {
				document.getElementById("spot-a").className = document.getElementById("spot-a").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
				//document.getElementById("spot-b").className = document.getElementById("spot-b").className.replace(/(?:^|\s)b(?!\S)/g, '');
				document.getElementById("spot-a").className = document.getElementById("spot-a").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

				document.getElementById("spot-c").className = document.getElementById("spot-c").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
				//document.getElementById("spot-c").className = document.getElementById("spot-c").className.replace(/(?:^|\s)c(?!\S)/g, '');
				document.getElementById("spot-c").className = document.getElementById("spot-c").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

				document.getElementById("spot-d").className = document.getElementById("spot-d").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
				//document.getElementById("spot-d").className = document.getElementById("spot-d").className.replace(/(?:^|\s)d(?!\S)/g, '');
				document.getElementById("spot-d").className = document.getElementById("spot-d").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

				document.getElementById("spot-e").className = document.getElementById("spot-e").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
				//document.getElementById("spot-e").className = document.getElementById("spot-e").className.replace(/(?:^|\s)e(?!\S)/g, '');
				document.getElementById("spot-e").className = document.getElementById("spot-e").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

		document.getElementById("spot-f").className = document.getElementById("spot-f").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
				//document.getElementById("spot-e").className = document.getElementById("spot-e").className.replace(/(?:^|\s)e(?!\S)/g, '');
				document.getElementById("spot-f").className = document.getElementById("spot-f").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

		document.getElementById("spot-g").className = document.getElementById("spot-g").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
				//document.getElementById("spot-e").className = document.getElementById("spot-e").className.replace(/(?:^|\s)e(?!\S)/g, '');
				document.getElementById("spot-g").className = document.getElementById("spot-g").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

			}

			function enableResistor() {
				//document.getElementById("spot-b").classList.add("b");
				document.getElementById("spot-a").classList.add("circuit-hotspot");
				document.getElementById("spot-a").classList.add("js-circuit-hotspot");

				//document.getElementById("spot-c").classList.add("c");
				document.getElementById("spot-c").classList.add("circuit-hotspot");
				document.getElementById("spot-c").classList.add("js-circuit-hotspot");

				//document.getElementById("spot-d").classList.add("d");
				document.getElementById("spot-d").classList.add("circuit-hotspot");
				document.getElementById("spot-d").classList.add("js-circuit-hotspot");

				//document.getElementById("spot-e").classList.add("e");
				document.getElementById("spot-e").classList.add("circuit-hotspot");
				document.getElementById("spot-e").classList.add("js-circuit-hotspot");
				
								//document.getElementById("spot-e").classList.add("e");
				document.getElementById("spot-f").classList.add("circuit-hotspot");
				document.getElementById("spot-f").classList.add("js-circuit-hotspot");
				
								//document.getElementById("spot-e").classList.add("e");
				document.getElementById("spot-g").classList.add("circuit-hotspot");
				document.getElementById("spot-g").classList.add("js-circuit-hotspot");
			}
		</script>
		
		<!--script>
			
var circuit_checker=
{
	'checkCircuit' : checkCircuit,
	'enableResistorControls' : enableResistorControls,
	'experiments' : {
		'exp1' : {
			'connections' : {
				'js-a' : 'resistor',
				'js-b' : 'ammeter',
				 <?php 
				 	if($id==3)
					{}
					else{
					echo "'"."js-c"."':";
					echo "'"."wire"."',";
					echo "\n";
					echo "'"."js-d"."':";
					echo "'"."open"."',";
					echo "\n";
					echo "'"."js-e"."':";
					echo "'"."wire"."',";
					echo "\n";
					}
						?>
			
				'js-f' : 'ammeter',
				'js-g' : 'resistor',
				'js-h' : 'voltmeter'
			},
			'resistor_controls' : {
				'js-a' : {
					'up' : false,
					'down' : true
				},
				'js-g' : {
					'up' : false,
					'down' : true
				}
			},
			'calculate' : calcExp1
		},
		'exp2' : {
			'connections' : {
				'js-a' : 'resistor',
				'js-b' : 'ammeter',
				'js-c' : 'open',
				'js-d' : 'wire',
				'js-e' : 'open',
				'js-f' : 'wire',
				'js-g' : 'resistor',
				'js-h' : 'voltmeter'
			},
			'resistor_controls' : {
				'js-a' : {
					'up' : false,
					'down' : true
				},
				'js-g' : {
					'up' : false,
					'down' : false
				}
			},
			'calculate' : calcExp1
		},
		'exp3' : {
			'connections' : {
				'js-a' : 'resistor',
				'js-b' : 'ammeter',
				'js-c' : 'open',
				'js-d' : 'wire',
				'js-e' : 'open',
				'js-f' : 'wire',
				'js-g' : 'resistor',
				'js-h' : 'voltmeter'
			},
			'resistor_controls' : {
				'js-a' : {
					'up' : false,
					'down' : true
				},
				'js-g' : {
					'up' : false,
					'down' : false
				}
			},
			'calculate' : calcExp3
		},
		'exp4' : {
			'connections' : {
				'js-a' : 'resistor',
				'js-b' : 'ammeter',
				'js-c' : 'open',
				'js-d' : 'wire',
				'js-e' : 'open',
				'js-f' : 'wire',
				'js-g' : 'resistor',
				'js-h' : 'voltmeter'
			},
			'resistor_controls' : {
				'js-a' : {
					'up' : false,
					'down' : true
				},
				'js-g' : {
					'up' : false,
					'down' : false
				}
			},
			'calculate' : calcExp4
		}

	}
};
		</script-->
	</body>
</html>
