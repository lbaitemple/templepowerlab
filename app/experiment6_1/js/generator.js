
$(function(){
  
    var $generator = $('#generatorCanvas');
    var genCtx = $generator[0].getContext('2d');
    genCtx.scale(0.7,0.7);
    
    var shaft = $('#shaft img')[0];
    
    var $gen_dec_btn = $('.js-gen-dec-button');
    var $gen_inc_btn = $('.js-gen-inc-button');
    
    var $gen_current_indicator = $('.js-gen-current-indicator');
    var $restart = $('#restartButton');
    var $clearWires = $('#clearWires');
    

    
    var CANVAS_TYPE_IMAGE = 'IMG';
    var CANVAS_TYPE_WIRE = 'WIRE';
    var BLACK = {hue:240, sat:0, light: 15, lightIntensity: 3.5};
    var RED = {hue:0, sat:60, light: 30, lightIntensity: 5};
    
    var MOTOR_OUTER = {context:genCtx, url:"experiment6/images/motor_outer.jpg", x:0, y:0, type:CANVAS_TYPE_IMAGE};
    var MOTOR_SHAFT = {context:genCtx, url:"experiment6/images/motor_shaft.png", x:137, y:143, x_rotate: 249, y_rotate: 255, type:CANVAS_TYPE_IMAGE};
    var MOTOR_FLUX = {context:genCtx, url:"experiment6/images/motor_flux.png", x:137, y:143, x_rotate: 249, y_rotate: 255, type:CANVAS_TYPE_IMAGE};
    
    
    var IMAGES_TO_LOAD = [MOTOR_OUTER, MOTOR_SHAFT, MOTOR_FLUX];
    var IMAGES_COUNT = IMAGES_TO_LOAD.length;
    var image_loaded_count = 0;
    
    
    
/******************************************* ROTATING DC GENERATOR *******************************************/
    var speed = 1;
    var TO_RADIANS = Math.PI/180; 
    
    
    //rotates the image (moter shaft);
    function drawRotatedImage(context, image, x, y, degree) { 
 
	// save the current co-ordinate system 
	// before we screw with it
	context.save(); 
 
	// move to the middle of where we want to draw our image
	context.translate(x, y);
 
	// rotate around that point, converting our 
	// angle from degrees to radians 
	context.rotate(degree * TO_RADIANS);
 
	// draw it up and to the left by half the width
	// and height of the image 
	context.drawImage(image, -(image.width/2), -(image.height/2));
 
	// and restore the co-ords to how they were when we began
	context.restore(); 
    }
    
    
    
    //when images are done loading and added to canvas, bind the go button to be able to choose speed
    //bind the restart button to reload page
    function init() {
        console.log('INIT GENERATOR CODE');
	$('#loader').remove();
        var gen_current = 0;
        var SPEED_MULTIPLIER = 4;
        var MIN_MOTOR_SPEED = 0;
        var MAX_MOTER_SPEED = 5 * SPEED_MULTIPLIER;
        var speed = 0;
        var degree = 0;
        var flux_degree = 0;
        var last_speed = 0;
        var ease_speed = 0;
        var ease_counter = 0;
        var ease_increment = 100;
        var MAX_FLUX_ANGLE = 30;
        var ease_flux_angle = 0;
        var flux_angle = 0;
        var last_ease_speed = 0;
        var last_ease_flux_angle = 0;
        var animation_loop = null;
         
        /*
        $restart.bind(eventTypeDown, function(e){
            e.preventDefault();
            e.stopPropagation();
            window.location = window.location;
        });
        
        
        var hold_down_button_timer = null;
        function  setHoldDownTimer($btn) {
            clearInterval(hold_down_button_timer);
            hold_down_button_timer = setInterval(function(){
                $btn.trigger(eventTypeDown);
            }, 150);
        }
        
        $gen_inc_btn.bind(eventTypeDown, function(){
            gen_current = (10*gen_current + 1)/10;
            handleSpeedInput(gen_current);
            setHoldDownTimer($(this));
        });
        
        $gen_inc_btn.bind(eventTypeUp, function(){
            clearInterval(hold_down_button_timer);
        });
        
        $gen_dec_btn.bind(eventTypeDown, function(){
            gen_current = (10*gen_current - 1)/10;
            handleSpeedInput(gen_current);
            setHoldDownTimer($(this));
        });
        
        $gen_dec_btn.bind(eventTypeUp, function(){
            clearInterval(hold_down_button_timer);
        });
        
	*/
	
	
	$generator.on("updateGenerator", function(event, calculated_current) {
	    gen_current = calculated_current;
	    handleSpeedInput(gen_current);
	});
	
	
        
        function handleSpeedInput(current){
            cancelAnimationFrame(animation_loop);
            current = SPEED_MULTIPLIER*current;
        
            if (current > MAX_MOTER_SPEED) {
                speed = MAX_MOTER_SPEED;
                gen_current = 5;
            }
            else if (current < 0) {
                speed = 0;
                gen_current = 0;
            }
            else {
                speed = current;
            }
            
            //$speedInput.val('');
            $gen_current_indicator.html('Current: ' + speed/SPEED_MULTIPLIER.toFixed(3) + ' A');
            
            last_speed = speed;
            if (speed === 0) {
                MOTOR_SHAFT.context.clearRect(0, 0, 500, 500);
                MOTOR_SHAFT.context.drawImage(MOTOR_OUTER.image, MOTOR_OUTER.x, MOTOR_OUTER.y);
                drawRotatedImage(MOTOR_SHAFT.context, MOTOR_SHAFT.image, MOTOR_SHAFT.x_rotate, MOTOR_SHAFT.y_rotate, 0);
                drawRotatedImage(MOTOR_FLUX.context, MOTOR_FLUX.image, MOTOR_FLUX.x_rotate, MOTOR_FLUX.y_rotate, 0);
                degree = 0;
                flux_degree = 0;
                last_ease_speed = 0;
                last_ease_flux_angle = 0;
                flux_angle = 0;
                ease_flux_angle = 0;
                ease_counter = 0;
                return false;
            }
            
            
            var $shaft = $('#shaft');
            var $img = $shaft.find('img');

            ease_counter = 0;
            var speed_change = 0;
            if (last_ease_speed > 0) {
                speed_change = last_ease_speed;
                ease_flux_angle = last_ease_flux_angle;
            }

            
            var ease_speed_increments = (speed - speed_change)/ease_increment;
            flux_angle = (speed * MAX_FLUX_ANGLE) / MAX_MOTER_SPEED;
            var ease_flux_angle_increments = (flux_angle - last_ease_flux_angle)/ease_increment;
    

            function render() {

                ease_counter++;
                ease_speed = speed_change + ease_counter*ease_speed_increments;
                ease_flux_angle += ease_flux_angle_increments;
                last_ease_speed = ease_speed;
                last_ease_flux_angle = ease_flux_angle;
                
                if (ease_counter >= ease_increment) {
                    ease_speed = last_ease_speed;
                    last_ease_flux_angle = ease_flux_angle = flux_angle;
                    ease_counter--;
                }

                degree += ease_speed;
                if (degree > 360) {
                    degree = degree - 360;
                }
                
                flux_degree = ease_flux_angle;
            
                //clear last frame
                MOTOR_SHAFT.context.clearRect(0, 0, 500, 500);
                //add outer motor back
                MOTOR_SHAFT.context.drawImage(MOTOR_OUTER.image, MOTOR_OUTER.x, MOTOR_OUTER.y);
                //rotate shaft
                drawRotatedImage(MOTOR_SHAFT.context, MOTOR_SHAFT.image, MOTOR_SHAFT.x_rotate, MOTOR_SHAFT.y_rotate, degree);
                //ROTATE FLUX
                drawRotatedImage(MOTOR_FLUX.context, MOTOR_FLUX.image, MOTOR_FLUX.x_rotate, MOTOR_FLUX.y_rotate, flux_degree);
            }
            
            (function loop(){
                render();
                sparks.loop();
                animation_loop = requestAnimationFrame(loop);
            })();
            
            
        }
    }
    
    
    //load the images into memory
    function loadImage(imageObj){
        var image = new Image();
        image.src = imageObj.url;
        //this fires when the image is loaded into memory
        //increments image_loaded_count
        $(image).load(function(){
            image_loaded_count++;
            imageObj.image = image;
        });
    }
    
    
    //loop trough IMAGES_TO_LOAD and call loadImages to put images in memory
    //after all for are loaded, place images on canvas
    function loadAndPlaceImage(place_on_canvas) {
        for (i = 0; i < IMAGES_COUNT; i++) {
            if (place_on_canvas) {
                IMAGES_TO_LOAD[i].context.drawImage(IMAGES_TO_LOAD[i].image, IMAGES_TO_LOAD[i].x, IMAGES_TO_LOAD[i].y);
            }
            else {
                loadImage(IMAGES_TO_LOAD[i]);
            }
        }
        if (place_on_canvas) {
           init();
        }
    }
    
    
    //start loading images into memory
    loadAndPlaceImage(false);
    
    
    //wait for images to load memory, when image_loaded_count equals total of all images
    //to load, then call loadAndPlaceImage to place images on canvas
    var wait = setInterval(function(){
        //console.log(image_loaded_count);
        if (image_loaded_count === IMAGES_COUNT) {
            
            clearInterval(wait);
            loadAndPlaceImage(true);
        }
    }, 100);
    
    
/******************************************* ROTATING DC GENERATOR *******************************************/
        

        
        
        


/******************** DETERMINS WHAT THE BROWSER CAN DO WITH FRAME ANIMATIONS ****************************/

    var lastTime = 0;
    var vendors = ['webkit', 'moz'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
        window.cancelAnimationFrame =
          window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];
    }

    if (!window.requestAnimationFrame){
        window.requestAnimationFrame = function(callback, element) {
            var currTime = new Date().getTime();
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
            var id = window.setTimeout(function() { callback(currTime + timeToCall); },
              timeToCall);
            lastTime = currTime + timeToCall;
            return id;
        };
    }

    if (!window.cancelAnimationFrame){
        window.cancelAnimationFrame = function(id) {
            clearTimeout(id);
        };
    }
    
/******************** DETERMINS WHAT THE BROWSER CAN DO WITH FRAME ANIMATIONS ****************************/


//touch device?
//function isTouchDevice() {
    //return 'ontouchstart' in window || !!(navigator.msMaxTouchPoints);
//}





});