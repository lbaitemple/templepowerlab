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
				<div id="double-turbine">
					<div id="turbine">
						<div class="turbine-title">
							Tachometer <br>(rpm)
						</div>

						<div id="speedometer"   align="left"></div>
						<!--button class="turbine-button down js-turbine-button" disabled>
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
						</div-->
<br>
<br>
					</div>
					<div id="turbine_1">
						<div class="turbine-title">
							Torque meter (mNm)
						</div>

						<div id="torquemeter"   align="left"></div>
						<div  class="col-lg-12" align="center">

						</div>

					
						<button id="torque-up" onclick="up()" class="btn-default " disabled>
						bringup
						</button>
					</div>
					<div class="turbine-buttons-wrap js-turbine-buttons-wrap">
						<div  class="col-lg-12" align="center">
							<div class="onoffswitch">
								<input type="checkbox" name="onoffswitch" onclick="switchMachine()" value="0" class="onoffswitch-checkbox js-turbine-button-switch" id="myonoffswitch" unchecked disabled>
								<label class="onoffswitch-label" for="myonoffswitch"> <span class="onoffswitch-inner"></span> <span class="onoffswitch-switch"></span> </label>
							</div>
							<span id="timer" >20 secs</span>
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
						<h4 class="modal-title" id="myModalLabel">Schematic</h4>
					</div>
					<div class="modal-body">
						<img width="100%" src="../images/experiment1/circuit_exp6.jpg" />
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
						<img width="100%" src="../images/experiment1/exp6_sol.jpg" />
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
				<span class="component voltmeter hor js-component" data-component="voltmeter"><span class="component-text meter">Power Supply</span></span>
				<span class="component resistor hor js-component" data-component="resistor"><span class="component-text resistor">Variable Resistor</span></span>
				<span class="component wire hor js-component" data-component="wire"><span class="component-text wire">Jumper Wire</span></span>

				<span class="component-option js-component-option" data-option="disconnect">Disconnect Component</span>
				<span class="component-option js-component-option" data-option="change">Change Component</span>
				<span class="component-option js-component-option js-resistor-option" data-option="resistor">Change Resistor Value</span>

				<!--<div class="variable_resistor_body js_variable_resistor_body" data-value="">
				<img src="images/circuit/variable_resistor_terminal.png" class="variable_resistor_terminal js_variable_resistor_terminal" data-position=""-->
				<span class="variable_resistor_value js_variable_resistor_value"></span>

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
			var count;
			var counter;
			var S = [];
			var W = [];
			var j = 0;
			//var SS=[5,6,7,8];
			var C = [];
			function switchMachine() {
				//var $turbine_speed_indicator = $('.js-turbine-speed-indicator');
				var $turbine_buttons = $('.js-turbine-button');
				var $turbine_buttons_switch = document.getElementById("myonoffswitch");
				//console.log($turbine_buttons_switch.checked);
				$ammeter1 = $('.js-a.ammeter');
				$ammeter2 = $('.js-f.ammeter');
				$power = $('.js-g.voltmeter');
				//var res = document.getElementById("indicator").innerHTML.split(" ");
				if ($turbine_buttons_switch.checked == true) {
					//alert(res[0]);
					//var turbine_speed = $('.js-turbine-speed-indicator').attr('data-speed');
					//$turbine_speed_indicator.attr('data-speed', res[0]);
					circuit_checker.experiments['exp1'].calculate();
					//$turbine_buttons.attr('disabled', true);
					//enable "-" set to 20 ohms
					$('.js-d.resistor .down').attr('disabled', false);

					count = 20;
					//speedometer.update(100);
					document.getElementById("timer").style.color = "black";
					document.getElementById("timer").innerHTML = count + " secs";
					counter = setInterval(timer, 1000);
					//speedometer.update(100);
					//speed = 100;

					/*(function(i) {
					setInterval(function() {
					speed -= 10;
					speedometer.animatedUpdate(speed, 500);
					}, 1000)
					})(i);*/

					//1000 will  run it every 1 second
					//clearInterval(counter);

					disableResistor();

				} else {
					//$turbine_speed_indicator.attr('data-speed', 0);
					//circuit_checker.experiments['exp1'].calculate();
					S = [];
					C = [];
					W = [];
					j = 0;
					t = 0;
					Speed = 0;
					w = 0;
					new_Speed = 0;
					T_load=0;
					
					temp = 1;
					$('.js-b.resistor .down').attr('disabled', true);
					$('#torque-up').attr('disabled', true);
					var $generator = $('#generatorCanvas');
					var turbine_speed = $('.js-turbine-speed-indicator').attr('data-speed');

					$generator.trigger("updateGenerator", [0]);
					speedometer.update(0);
					torquemeter.update(0);
					//console.log(S);
					//$turbine_buttons.attr('disabled', false);
					//set speed to 0
					//$turbine_speed_indicator.html('0 RPM');
					//disable "-"
					$('.js-d.resistor .up').attr('disabled', true);
					$('.js-d.resistor .down').attr('disabled', true);
					//ammeter to 0
					calcExp1.current1 = 0;
					calcExp1.current2 = 0;
					$ammeter1.html('0.00A');
					$ammeter2.html('0.00A');
					document.getElementById('value_d').innerHTML = "20 Ohms";
					document.getElementById('value_b').innerHTML = "0 Ohms";
					//voltmeter to 0
					//$voltmeter1.html('0.00V');
					clearInterval(counter);
					enableResistor();
				}
			}

			function timer() {
				count = count - 1;
				document.getElementById("timer").innerHTML = count + " secs";

				var $generator = $('#generatorCanvas');
				var turbine_speed = $('.js-turbine-speed-indicator').attr('data-speed');
				$ammeter1 = $('.js-a.ammeter');
				$ammeter2 = $('.js-f.ammeter');
				//set ammeter
				$ammeter1.html('0.00A');

				var value = parseFloat(C[(20 - count) * 10]);
				if (count == 0)
					value = parseFloat(C[199]);
				$ammeter2.html(value.toFixed(2) + 'A');
				//set speed

				var value_1 = parseFloat(S[(20 - count) * 10]);
				if (count == 0)
					value_1 = parseFloat(S[199]);
				$generator.trigger("updateGenerator", [value_1 / 1000]);
				speedometer.animatedUpdate(value_1, 500);
				//rotate machine

				if (count == 14) {
					document.getElementById("timer").style.color = "red";
				}
				if (count <= 0) {
					clearInterval(counter);
					
					$('#torque-up').attr('disabled', false);
					//bringUp(0);
					//counter ended, do something here
					return;
				}

				//Do code for showing the number of seconds here
			}

			function disableResistor() {
				document.getElementById("spot-b").className = document.getElementById("spot-b").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
				//document.getElementById("spot-b").className = document.getElementById("spot-b").className.replace(/(?:^|\s)b(?!\S)/g, '');
				document.getElementById("spot-b").className = document.getElementById("spot-b").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

				document.getElementById("spot-c").className = document.getElementById("spot-c").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
				//document.getElementById("spot-c").className = document.getElementById("spot-c").className.replace(/(?:^|\s)c(?!\S)/g, '');
				document.getElementById("spot-c").className = document.getElementById("spot-c").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

				document.getElementById("spot-d").className = document.getElementById("spot-d").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
				//document.getElementById("spot-d").className = document.getElementById("spot-d").className.replace(/(?:^|\s)d(?!\S)/g, '');
				document.getElementById("spot-d").className = document.getElementById("spot-d").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

				document.getElementById("spot-e").className = document.getElementById("spot-e").className.replace(/(?:^|\s)circuit-hotspot(?!\S)/g, '');
				document.getElementById("spot-e").className = document.getElementById("spot-e").className.replace(/(?:^|\s)e(?!\S)/g, '');
				document.getElementById("spot-e").className = document.getElementById("spot-e").className.replace(/(?:^|\s)js-circuit-hotspot(?!\S)/g, '');

			}

			function enableResistor() {
				//document.getElementById("spot-b").classList.add("b");
				document.getElementById("spot-b").classList.add("circuit-hotspot");
				document.getElementById("spot-b").classList.add("js-circuit-hotspot");

				//document.getElementById("spot-c").classList.add("c");
				document.getElementById("spot-c").classList.add("circuit-hotspot");
				document.getElementById("spot-c").classList.add("js-circuit-hotspot");

				//document.getElementById("spot-d").classList.add("d");
				document.getElementById("spot-d").classList.add("circuit-hotspot");
				document.getElementById("spot-d").classList.add("js-circuit-hotspot");

				document.getElementById("spot-e").classList.add("e");
				document.getElementById("spot-e").classList.add("circuit-hotspot");
				document.getElementById("spot-e").classList.add("js-circuit-hotspot");
			}
		</script>

		<script type="text/javascript">
			//var SS = [];
			function cutDown() {
				var a = .05;
				// flux model
				var K = 0.07;
				// flux model
				var R_f0 = 150;
				// field resistance
				var R_a = 1;
				// armature resistance
				var R_s = 0.2;
				// series field
				var R_starter = 0;
				// starter resistance
				var T_load = 0;
				var N_f = 1000;
				// number of turns in shunt field
				var N_s = 150;
				// number of turns in series field
				var J_m = 5.0e-03;
				// motor inertia 7.5
				var D_m = 0.7e-03;
				// friction coefficient 1.5
				var Delta = 0.1;
				// sampling time
				var A_d = Math.exp(numeric.mul((0 - D_m), Delta) / J_m);
				var B_d = numeric.div(K, D_m) * (1 - A_d);
				var C_d = (-1 / D_m) * (1 - A_d);
				var R_f;
				//var w=0;

				//motor model in discrete time

				//var SS = [];
				//var SS = [5, 6, 7, 8];
				//var j = 0;

				R_starter = 20 - 5 * (j + 1);
				$('#value_d').html(R_starter + " Ohms");
				if (R_starter == 0) {
					$('.js-d.resistor .down').attr('disabled', true);
					//$('.js-b.resistor .down').attr('disabled', false);
				}
				var V_t = 120;
				// document.getElementById("v_in").value;

				var new_Speed = 0;

				var speed_error = 999;
				var iter = 0;
				var step = 0;
				var res = document.getElementById("timer").innerHTML.split(" ");

				var t = 20 - res[0];
				var index = parseInt(t / 0.1);
				var Speed = S[index - 1];
				var w = W[index - 1];
				var x = numeric.div(I_f, a);
				var y = numeric.div(a, I_f);

				//Hyperbolic cotangent of x = coth x = (e^x + e^-x)/(e^x - e^-x)
				var coth = (Math.exp(x) + Math.exp(0 - x) ) / (Math.exp(x) - Math.exp(0 - x) );
				var Phi = parseFloat(coth) - parseFloat(y);
				var iter = 0;

				while (1) {

					var E_a = numeric.mul(K, Speed, Phi) + 0.1 * Math.random();
					//Armature current
					var u = parseInt(V_t) - parseFloat(E_a);
					var v = parseFloat(R_a) + parseInt(R_starter);
					var I_a = numeric.div(u, v);
					I_a = I_a.toPrecision(4);

					var f1 = numeric.mul(A_d, w);
					var f2 = numeric.mul(B_d, Phi, I_a);
					var f3 = numeric.mul(C_d, T_load);

					w = parseFloat(f1) + parseFloat(f2) + parseFloat(f3);
					new_Speed = (60 * w) / (2 * Math.PI);

					speed_error = parseFloat(new_Speed) - parseFloat(Speed);
					Speed = new_Speed.toPrecision(5);
					t = index * 0.1;
					t += parseFloat(Delta);
					t = t.toPrecision(3);
					//index=parseInt(t/0.1);
					C[index] = I_a;
					S[index] = Speed;
					W[index] = w;
					//console.log("t is :"+t);

					//console.log("Speed is :"+Speed);
					//console.log("index is :"+index);
					index++;
					if (parseInt(t) == 20)
						break;
					//j++;
				}

				j++;
				//console.log(W);
				//console.log(C);
			}
		</script>

		<script type="text/javascript">
			var temp = 1;
			//var Speed=S[199];
			var Control_S = [];

			var Control_R = [];
			var Control_Ia = [];
			var Control_If = [];
			var t = 0;
			var Speed;
			var w;
			var new_Speed;
			var I_a;
			var T_load;

			function bringUp(T_load) {
				var a = .05;
				// flux model
				var K = 0.07;
				// flux model
				var R_f0 = 150;
				// field resistance
				var R_a = 1;
				// armature resistance
				var R_s = 0.2;
				// series field
				var R_starter = 0;
				// starter resistance
				//var T_load = 0.5;
				var N_f = 1000;
				// number of turns in shunt field
				var N_s = 150;
				// number of turns in series field
				var J_m = 5.0e-03;
				// motor inertia 7.5
				var D_m = 0.7e-03;
				// friction coefficient 1.5
				var Delta = 0.1;
				// sampling time
				var A_d = Math.exp(numeric.mul((0 - D_m), Delta) / J_m);
				var B_d = numeric.div(K, D_m) * (1 - A_d);
				var C_d = (-1 / D_m) * (1 - A_d);
				var R_f;
				var span = 0.05;
				//var w=0;

				//motor model in discrete time

				if (temp == 1) {
					Speed = parseFloat(S[199]);
					w = parseFloat(W[199]);
					new_Speed = 0;
					I_a=parseFloat(C[199]);
				}

				//var SS = [];
				//var SS = [5, 6, 7, 8];
				//var j = 0;

				/*R_starter = 20 - 5*(j+1);
				 $('.resistor_value').html(R_starter+" Ohms");
				 if(R_starter==0){
				 $('.js-d.resistor .down').attr('disabled', true);
				 $('.js-b.resistor .down').attr('disabled', false);
				 }*/
				var V_t = 120;
				// document.getElementById("v_in").value;

				var speed_error = 999;
				var iter = 0;
				var step = 0;
				//var res = document.getElementById("timer").innerHTML.split(" ");

				//var t = 20-res[0];
				//var index=parseInt(t/0.1);
				
				R_f = R_f0;
				
				//var I_f = V_t / R_f-0.04*I_a;
				var I_f = V_t / R_f;
				var x = numeric.div(I_f, a);
				var y = numeric.div(a, I_f);
				//Hyperbolic cotangent of x = coth x = (e^x + e^-x)/(e^x - e^-x)
				var coth = (Math.exp(x) + Math.exp(0 - x) ) / (Math.exp(x) - Math.exp(0 - x) );
				var Phi = parseFloat(coth) - parseFloat(y);
				var iter = 0;

				var E_a = numeric.mul(K, Speed, Phi) + 0.1 * Math.random();
				//Armature current
				var u = parseInt(V_t) - parseFloat(E_a);
				var v = parseFloat(R_a) + parseInt(R_starter);
				 I_a = numeric.div(u, v);
				I_a = I_a.toFixed(2);

				var f1 = numeric.mul(A_d, w);
				var f2 = numeric.mul(B_d, Phi, I_a);
				var f3 = numeric.mul(C_d, T_load);

				w = parseFloat(f1) + parseFloat(f2) + parseFloat(f3);
				new_Speed = (60 * w) / (2 * Math.PI);

				speed_error = parseFloat(new_Speed) - parseFloat(Speed);
				Speed = new_Speed.toPrecision(5);
				//t = index*0.1;
				t += parseFloat(Delta);
				//t = t.toFixed(3);
				//index=parseInt(t/0.1);
				
				
				Control_S[temp-1] = Speed;
				//var tt = temp * span;
				//Control_R[temp - 1] = tt.toString();
				Control_Ia[temp-1] = I_a;
				Control_If[temp-1] = I_f;
				console.log("Speed is " + Speed);
				//speedometer.update(20);
				speedometer.animatedUpdate(parseInt(Speed),100);
				//console.log("tt is " + tt);
				//console.log("error is " + speed_error);
				//console.log("Ia is " + I_a);
				//console.log("I_f is " + I_f);

				var $generator = $('#generatorCanvas');
				var turbine_speed = $('.js-turbine-speed-indicator').attr('data-speed');
				$ammeter1 = $('.js-a.ammeter');
				$ammeter2 = $('.js-f.ammeter');
				//$('#value_b').html(tt + " Ohms");
				$ammeter2.html(I_a + 'A');
				$ammeter1.html('0.00A');
				//set speed

				$generator.trigger("updateGenerator", [Speed / 1000]);

				//rotate machine

				//console.log("t is :"+t);

				//console.log("Speed is :"+Speed);
				//console.log("index is :"+index);
				temp++;
				//if(parseInt(t)==20)break;
				//j++;

				//j++;
				//console.log(W);
				//console.log(C);
			}
		</script>
		
		<script type="text/javascript">
			function up(){
				var value=parseFloat(torquemeter.value());
			
				//console.log("value is"+ value)
				value+=50;
				//console.log("value now 	is"+ value)
				bringUp(value/1000);
				torquemeter.animatedUpdate(parseInt(value), 100);
					if(value==500){
					$('#torque-up').attr('disabled', true);
					return;
					}
				
			}
			
			
			
			
		</script>
		
		<script type="text/javascript">
			
			function down(){
				var value=parseFloat(torquemeter.value());
				
				//console.log("value is"+ value)
				value-=50;
				//console.log("value now 	is"+ value)
				bringUp(value/1000);
				torquemeter.animatedUpdate(parseInt(value), 100);
				if(value==0){
					$('#torque-down').attr('disabled', true);
					return;
					}
						if(value==450){
					$('#torque-up').attr('disabled', false);
					return;
					}
			}
			
		</script>

		<link rel="stylesheet" type="text/css" href="techometer/speedometer.css" media="screen" />

		<script type="text/javascript" src="techometer/xcanvas.js"></script>
		<script type="text/javascript" src="techometer/tbe.js"></script>

		<script type="text/javascript" src="techometer/digitaldisplay.js"></script>
		<script type="text/javascript" src="techometer/speedometer.js"></script>
		<script type="text/javascript" src="techometer/themes/default.js"></script>
		<script type="text/javascript" src="techometer/themes/kitsch.js"></script>
		<script type="text/javascript" src="techometer/example.js"></script>
		<script type="text/javascript" src="techometer/controls.js"></script>
		<script type="text/javascript">
			var speedometer;
			// Explicit onready listener for modern browsers. If you use a JS framework,
			// you should replace this code with your toolkit's "onReady" helpers (e.g.
			// $(document).ready() on jQuery, Event.observe('dom:loaded') on prototype,
			// and so on.
			document.addEventListener("DOMContentLoaded", function() {
				document.removeEventListener("DOMContentLoaded", arguments.callee, false);

				// Check out configuration and API on GitHub Wiki:
				// http://wiki.github.com/vjt/canvas-speedometer
				speedometer = new Speedometer('speedometer', {
					theme : 'default'
				});
				speedometer.draw();

			}, false);

			var torquemeter;
			// Explicit onready listener for modern browsers. If you use a JS framework,
			// you should replace this code with your toolkit's "onReady" helpers (e.g.
			// $(document).ready() on jQuery, Event.observe('dom:loaded') on prototype,
			// and so on.
			document.addEventListener("DOMContentLoaded", function() {
				document.removeEventListener("DOMContentLoaded", arguments.callee, false);

				// Check out configuration and API on GitHub Wiki:
				// http://wiki.github.com/vjt/canvas-speedometer
				torquemeter = new Torquemeter('torquemeter', {
					theme : 'kitsch'
				});
				torquemeter.draw();

			}, false);
		</script>

		<script type="text/javascript">
			function test() {
				//var meter=document.getElementById('test');
				//speedometer.update(20);
				//for(var i; i<1; i++)
				//speedometer.update('stop');
				speedometer.update(100);
				speed = 100;

				(function(i) {
					setInterval(function() {
						speed -= 10;
						speedometer.animatedUpdate(speed, 50);
					}, 1000)
				})(i);

				//speedometer.update(0, 500)
				//animatedUpdate(150, 2);
			}

		</script>

	</body>
</html>
