<!DOCTYPE html>
<html> 
<head>
    <title>Generator</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="user-scalable=no">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="../css/toastr.css" rel="stylesheet"/>
    <link href="../css/bootstrap.css" rel="stylesheet"/>
</head>

<body>
<div id="loader"><span class="loader-text">Loading...</span></div>
<div id="container">
    <div class="turbine-generator-wrap">
        <div id="turbine">
            <div class="turbine-title">Turbine</div>
            <div class="turbine-buttons-wrap js-turbine-buttons-wrap">
                <button class="turbine-button down js-turbine-button" disabled>-<br>Speed</button>
                <button class="turbine-button up js-turbine-button" disabled>+<br>Speed</button>
            </div>
            <div class="turbine-speed-indicator js-turbine-speed-indicator" data-speed="0">0 RPM</div>
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

        <span class="circuit-hotspot a vert js-circuit-hotspot" data-connect="a"></span>
        <span class="circuit-hotspot b vert js-circuit-hotspot" data-connect="b"></span>
        <span class="circuit-hotspot c vert js-circuit-hotspot" data-connect="c"></span>
        <span class="circuit-hotspot d hor js-circuit-hotspot" data-connect="d"></span>
        <span class="circuit-hotspot e vert js-circuit-hotspot" data-connect="e"></span>
        <span class="circuit-hotspot f hor js-circuit-hotspot" data-connect="f"></span>
        <span class="circuit-hotspot g vert js-circuit-hotspot" data-connect="g"></span>

        
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
						<img width="100%" src="../images/experiment1/circuit_exp9.jpg" />
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
						<img width="100%" src="../images/experiment1/exp9_sol.jpg" />
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
    <script src="../js/toastr.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script>
</body>
</html>
