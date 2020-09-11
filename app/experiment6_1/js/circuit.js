
$(function(){
    var MAX_RESISTOR_VALUE = 20;
    var VARSITOR_TERMINAL_MAX_DISTANCE = 274;
    var mouse_down = false;
    var margin_left = null;
    var last_x = null;
    var last_value = null;
    var reminder =0;
    var touch_move_listener = null;
    var EXPERIMENT = /exp=(\d+)/i.exec(window.location.search);
    if (EXPERIMENT !== null ) EXPERIMENT = 'exp' + EXPERIMENT[1];


    $('.js-circuit-container').delegate('.js-circuit-hotspot', eventTypeDown, function(){
        handleNodeClick($(this).attr('data-connect'));
    });
    
    
    var handleNodeClick = function(hotspot) {
        var $node = $('.js-' + hotspot);
        showComponentsChoiceWindow($node, hotspot);
    };
    
    
    
    var showComponentsChoiceWindow = function($node, hotspot) {
        var $components_window_wrap = $('.js-components-window-wrap');
        var $document = $(document);
        var $window = $(window);
        var top = $document.scrollTop();
        var window_height = $document.height();
        
        $components_window_wrap.show().css({
            'height' : window_height
          
        }); 
        
        var $heading = $('.js-components-window-heading');
        var $options = $('.js-component-option').hide();
        var $components = $('.js-component').hide();
        var $variable_resistor = $('.js_variable_resistor_body').hide();
        var $components_window = $('.js-components-window');
        
        $components_window.css({
            'top':$window.height()/2.3
        });

        if (doesNodeHaveComponent($node)) {
            showComponentOptions($options, $heading, isResistor($node));
            addComponentOptionListener($options, $heading, $components, $node, $variable_resistor, $components_window_wrap, $components_window, hotspot);
        }
        else {
            showComponents($components, $heading);
            addComponentListener($components, $node,  $options, $heading, $variable_resistor, $components_window_wrap, $components_window, hotspot);
        }

        addCloseListener($components_window_wrap, $components_window);
    };
    
    
    var showComponentOptions = function($options, $heading, isResistor){
        //if (isResistor) {
            //$options.css('display', 'inline-block');
        //}
        //else {
            $options.not('.js-resistor-option').css('display', 'inline-block');
        //}
        
        $heading.text('Choose an option');
    };
    
    
    var addComponentOptionListener = function($options, $heading, $components, $node, $variable_resistor, $window_wrap, $window, hotspot) {
        $options.unbind();
        $options.bind(eventTypeDown, function(){
            var option = $(this).attr('data-option');
            if (option === 'disconnect') {
                removeComponent($node);
                removeComponentWindow($window_wrap, $window);
            }
            else if (option === 'change') {
                $options.hide();
                showComponents($components, $heading);
                addComponentListener($components, $node, $options, $heading, $variable_resistor, $window_wrap, $window, hotspot);
            }
            //else if (option === 'resistor') {
                //$options.hide();
                //addVariableResistor($heading, $variable_resistor, $window_wrap, $window, $node);
            //}
        });
    };
    
   

    var showComponents = function($components, $heading) {
        $components.css('display', 'inline-block');
        $heading.text('Choose a component');
    };
    
    
    var addComponentListener = function($components, $node,  $options, $heading, $variable_resistor, $window_wrap, $window, hotspot) {
        $components.unbind();
        $components.bind(eventTypeDown, function(){
            var component = $(this).attr('data-component');
            addComponentChosen($components, $node, component, $options, $heading, $variable_resistor, $window_wrap, $window, hotspot);
            //keep component window open to use for resistor, if not resistor close window
            /*if (component !== 'resistor')*/ removeComponentWindow($window_wrap, $window);
        });
    };
    
    
    var addComponentChosen = function($components, $node, component, $options, $heading, $variable_resistor, $window_wrap, $window, hotspot) {
        $node.removeClass('ammeter').removeClass('voltmeter').removeClass('wire').removeClass('resistor');
        $node.html('');
        $node.addClass(component);
        
        if (component === 'ammeter') {
            $node.text('0.00A');
        }
        else if (component === 'voltmeter') {
            $node.text('120.00V');


        }
        else if (component === 'resistor') {
            var orientation = 'hor';
            if ($node.hasClass('vert')) orientation = 'vert';
            $node.html(getResistorControlsHTML(orientation, hotspot));   
            addResistorControlListeners($node, hotspot);
            //$('.js-circuit-hotspot.'+hotspot).html(getResistorControlsHTML());
            var string=$node.html();
            $node.html(string+'<span class="resistor_value">' + MAX_RESISTOR_VALUE + ' Ohms</span>');
            //addResistorControlListeners($node, hotspot);
            
            //$components.hide();
            //addVariableResistor($heading, $variable_resistor, $window_wrap, $window, $node);
        }
        checkCompoent(component,hotspot);
        checkIfCircuitIsCorrect();
    };
    
         var checkCompoent= function(component,hotspot){
    	//console.log(component+hotspot);
    	
    	var location="js-"+hotspot;
    	var exp = circuit_checker.experiments['exp1'].connections;
    	for (var key in exp) {
    		if(location===key)
    		{
    			 var value = exp[key];
    			 if(component===value)
    			 {
    		
					toastr.success('Good! You placed the component <i><b>correctly</b></i>!');
					reminder=0;
    			 }
    			 else{
    			 	reminder++;
    			 	if(reminder===5){
    			 		toastr.warning("<div>Sorry! You placed the component<b style='color:red'><i> incorrectly 5 times</i></b>!</div><a href='captivate/callees/EXP6/' target='_top' class='btn btn-success'>Review slides</a> <button type='button' id='surpriseBtn' class='btn' style='margin: 0 8px 0 8px'>Close</button></div>");
    			 		reminder=0;
    			 	}else{
    			 	toastr.warning("<div>Sorry! You placed the component <i style='color:red'><b>incorrectly!</b></i> <p>Please change the component according to the schematic on the right.");
    			 }
    			 }
    		}
    		
    	}
    	console.log(reminder);
    	return 1;
    };
    var removeComponentWindow = function($window_wrap, $window) {
        $window.removeClass('varsistor');
        $window_wrap.hide();
    };
    
   	 toastr.options = {
  "closeButton": false,
  "debug": false,
  "positionClass": "toast-bottom-left",
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
	};
    

    var addCloseListener = function($window_wrap, $window){
        var $close_x = $('.js-close-x');
        $close_x.unbind();
        $close_x.bind(eventTypeDown, function(){
            removeComponentWindow($window_wrap, $window);
        });
    };
    
    
    
    var removeComponent = function($node) {
        $node.removeClass('ammeter').removeClass('voltmeter').removeClass('wire').removeClass('resistor');
        $node.html('');
        checkIfCircuitIsCorrect();
    };
    
    
    var isResistor = function($node) {
        return $node.hasClass('resistor');  
    };
    
    
    var doesNodeHaveComponent = function($node) {
        return $node.hasClass('ammeter') || $node.hasClass('voltmeter') || $node.hasClass('wire') || $node.hasClass('resistor');
    };
    
    
    
    var getResistorControlsHTML = function(orientation, hotspot) {
        var html = '<div class="resistor-controls js-resistor-controls ' + orientation + ' ' + hotspot + '">';
        //html += '<button class="resistor-button up js-resistor-button" data-type="up" disabled>+</button>';
        html += '<button class="resistor-button down js-resistor-button" data-type="down" disabled onclick="cutDown()">cut down</button>';
        html += '</div>';
        
        return html;
    };
    
    
    
    var addResistorControlListeners = function($node, hotspot) {
        var $buttons = $node.find('.js-resistor-button');
        $buttons.unbind();
        $buttons.bind(eventTypeDown, function(){
            var $button = $(this);
            var button_type = $button.attr('data-type');
            if ($button.is(':enabled')) {
                circuit_checker.experiments['exp1'].calculate(button_type, 'js-'+hotspot);
            }
        });
    };
    

    
    
    
    var checkIfCircuitIsCorrect = function() {
        if (circuit_checker.checkCircuit('exp1')){
            console.log("ran checkcircuit");
            toastr.success('Excellent! You put all the components <i><b>correctly</b></i>!<br><b>Go to next step!</b>');
            enableTurbineControls();
            disablehotspot();
              var $node = $('.js-a');
              $node.addClass('zoom');
              var $node = $('.js-f');
              $node.addClass('zoom');
              var $node = $('.js-g');
              $node.addClass('zoom');
            circuit_checker.enableResistorControls('exp1');
            //circuit_checker.experiments['exp1'].calculate();
        }
        else if (circuit_checker.checkCircuit('exp2')){
            enableTurbineControls();
            circuit_checker.enableResistorControls('exp2');
            circuit_checker.experiments['exp2'].calculate();
        }
        //else circuit is still not correct, make sure everything is zeroed out
        else {
            disableTurbineControls();
            $('.js-resistor-button').attr('disabled', true);
            $('.js-circuit-connection.ammeter').html('0.00A');
            $('.js-circuit-connection.voltmeter').html('120.00V');
        };
    };
    
    var disablehotspot = function() {
    	
    	document.getElementById("spot-a").className =
   		document.getElementById("spot-a").className.replace
        ( /(?:^|\s)circuit-hotspot(?!\S)/g , '' );
    	document.getElementById("spot-a").className =
   		document.getElementById("spot-a").className.replace
        ( /(?:^|\s)a(?!\S)/g , '' );
    	document.getElementById("spot-a").className =
   		document.getElementById("spot-a").className.replace
        ( /(?:^|\s)js-circuit-hotspot(?!\S)/g , '' );
        
        document.getElementById("spot-f").className =
   		document.getElementById("spot-f").className.replace
        ( /(?:^|\s)circuit-hotspot(?!\S)/g , '' );
    	document.getElementById("spot-f").className =
   		document.getElementById("spot-f").className.replace
        ( /(?:^|\s)f(?!\S)/g , '' );
    	document.getElementById("spot-f").className =
   		document.getElementById("spot-f").className.replace
        ( /(?:^|\s)js-circuit-hotspot(?!\S)/g , '' );
        
        document.getElementById("spot-g").className =
   		document.getElementById("spot-g").className.replace
        ( /(?:^|\s)circuit-hotspot(?!\S)/g , '' );
    	document.getElementById("spot-g").className =
   		document.getElementById("spot-g").className.replace
        ( /(?:^|\s)g(?!\S)/g , '' );
    	document.getElementById("spot-g").className =
   		document.getElementById("spot-g").className.replace
        ( /(?:^|\s)js-circuit-hotspot(?!\S)/g , '' );
        
        
                        
        
    };
    
    
/******************************************* TURBINE BUTTONS *******************************************/
    var $turbine_buttons = $('.js-turbine-button');
    var $turbine_buttons_switch = $('.js-turbine-button-switch');
    var $turbine_speed_indicator = $('.js-turbine-speed-indicator');
    var MAX_TURBINE_SPEED = 10000;
    
    
    var turbine_speed = 0;
    $turbine_buttons.bind(eventTypeDown, function(){
	$turbine_button = $(this);
        
        //if disabled don't do anything, leave function
        if (!$turbine_button.is(':enabled')) return false;
        
	if ($turbine_button.hasClass('up')) {
	    turbine_speed += 100;
	    if (turbine_speed > MAX_TURBINE_SPEED) turbine_speed = MAX_TURBINE_SPEED;
	}
	else {
	    turbine_speed -= 100;
	    if (turbine_speed < 0) turbine_speed = 0;
	}
	
	$turbine_speed_indicator.html(turbine_speed + ' RPM');
	$turbine_speed_indicator.attr('data-speed', turbine_speed);
        circuit_checker.experiments['exp1'].calculate();
       
	setHoldDownTurbineTimer($(this));
    });
    
 
    $turbine_buttons.bind(eventTypeUp, function(){
        clearInterval(hold_down_turbine_button_timer);
    });
        

    var hold_down_turbine_button_timer = null;
    function  setHoldDownTurbineTimer($btn) {
        clearInterval(hold_down_turbine_button_timer);
        hold_down_turbine_button_timer = setInterval(function(){
            $btn.trigger(eventTypeDown);
        }, 300);
    }
    
    
    var disableTurbineControls = function() {
        $turbine_buttons.attr('disabled', true);
        $turbine_buttons_switch.attr('disabled', true);
    };
    
    
    var enableTurbineControls = function() {
        $turbine_buttons.attr('disabled', false);
        $turbine_buttons_switch.attr('disabled', false);
    };
/******************************************* TURBINE BUTTONS *******************************************/
    
    
    
    
     /*Not need any more, but keeping here.  This is for a zoom of the resistor that lets you
      *slide the terminal of a the variable resistor to change resistance
    var handleTouchMove = function(e, $terminal, $value_display, $node, offset_x, init_margin_left) {
        e.preventDefault();
        moveVarsistorTerminal($terminal, $value_display, $node, e.touches[0].pageX, offset_x, init_margin_left);
    };
    
    
    var addVariableResistor = function($heading, $resistor, $window_wrap, $window, $node) {
        var resistor_value = $node.find('span').text();
        var $value_display = $resistor.find('span');
        
        //add value stored from $node which is the resistor user clicked in the circuit
        $value_display.html(resistor_value);
        $heading.text('Drag left terminal to change value');
        $window.addClass('varsistor');
        
        //find terminal image, also get rid of any inline styles to reset it's position
        var $terminal = $resistor.find('img').attr('style','');
        var offset_x = $window.position().left;
        margin_left = Number($terminal.css('margin-left').replace('px', ''));
        var init_margin_left = margin_left;
        last_x = null;
        last_value = null;
        mouse_down = false;
        
        //set initial position
        var init_value = Number($node.find('span').text().replace(' Ohms', ''));

        //250 is init_margin_left (-450) minus the margin_left of the right boundry you can move the terminal (-200)
        //basically the terminal can move from margin_left -450 to -200
        margin_left = init_margin_left + (VARSITOR_TERMINAL_MAX_DISTANCE - (init_value/MAX_RESISTOR_VALUE)*VARSITOR_TERMINAL_MAX_DISTANCE);
        $terminal.css('margin-left', margin_left);
        $resistor.show();

        $terminal.off('dragstart.varsistor');
        $terminal.on('dragstart.varsistor', function(event) { event.preventDefault(); });
        
        $terminal.unbind('mousedown.varsistor');
        $terminal.bind('mousedown.varsistor', function() {
            mouse_down = true;
        });
        
         $terminal.unbind('mousemove.varsistor');
         $terminal.bind('mousemove.varsistor', function(e){
            if (mouse_down === true) {
                moveVarsistorTerminal($terminal, $value_display, $node, e.pageX, offset_x, init_margin_left);
            }
         });
        
        
        $(document).unbind('mouseup.varsistor');
        $(document).bind('mouseup.varsistor', function() {
            //$terminal.unbind('mousemove.varsistor');
            mouse_down = false;
        });
        
        
        //for touch devices, using try catch in case an old browsers and do not
        //support addEventListener (ie below 8) gets to here
        try {
            $terminal[0].ontouchmove = null;
            $terminal[0].ontouchmove = function(e){
                e.preventDefault();
                moveVarsistorTerminal($terminal, $value_display, $node, e.touches[0].pageX, offset_x, init_margin_left);
            };
        } catch(e) {
            console.log('error caught, browser doesn\'t support addEventListener.');
        }

        
        
    };
    
    
    
    var moveVarsistorTerminal = function($terminal, $value_display, $node, pageX, offset_x, init_margin_left){
        var x =  pageX - offset_x;
        if (last_x) {
            margin_left += (x - last_x);
            if (withinBounds(init_margin_left, margin_left)) {
                $terminal.css('margin-left', margin_left);
                last_x = x;
            }
            else {
                margin_left = margin_left = Number($terminal.css('margin-left').replace('px', ''));
            }
        }
        else {
            last_x = x;
        }
        
        last_value = Math.floor(Math.abs(MAX_RESISTOR_VALUE*(margin_left - init_margin_left)/VARSITOR_TERMINAL_MAX_DISTANCE - MAX_RESISTOR_VALUE));
        if (last_value > 980) {
            last_value = 1000;
        }
        else if (last_value < 20) {
            last_value = 1;
        }
        $value_display.text(last_value + ' Ohms');
        //update the value of the resistor that is in the circuit
        $node.find('span').html(last_value + ' Ohms');
    };
    
    
    
    var withinBounds = function(init_margin, margin) {
        var right_bound = init_margin + VARSITOR_TERMINAL_MAX_DISTANCE;
        if (margin < right_bound && margin > init_margin) {
            return true;
        }
        return false;
    };
    */
});