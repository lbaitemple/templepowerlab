var checkCircuit = function(experiment) {
    var correct = true;
    var exp = circuit_checker.experiments[experiment].connections;
    for (var key in exp) {
        var value = exp[key];
        var connection = $('.'+key);
        if (value === 'open' &&
            !connection.hasClass('wire') && !connection.hasClass('resistor') && !connection.hasClass('ammeter') && !connection.hasClass('voltmeter')) {
            //console.log('true');
        }
        else if (connection.hasClass(value)){
            //console.log('true');
        }
        else {
            correct = false;
        }
    }
    
    return correct;
};



var enableResistorControls = function(experiment) {
    var connections = circuit_checker.experiments[experiment].resitor_controls;
    for (var connection in connections) {
        var $controls = $('.'+connection).find('.js-resistor-button');
        var buttons = connections[connection];
        for (var button in buttons) {
            $controls.filter('.'+button).attr('disabled', !buttons[button]);
        }
    }
};







/************************************ EXPERIMENT CALCULATORS ***************************************/


var calcExp1 = function(resistor_button, connection) {
    var $generator = $('#generatorCanvas_1');
    var turbine_speed =  $('.js-turbine-speed-indicator').attr('data-speed');
    $ammeter1 = $('.js-b.ammeter');
    $voltmeter1 = $('.js-h.voltmeter');
    
    //CURRENT 1 CALCULATION FOR AMMETER 1
    if (connection === 'js-a') {
        $('.js-a.resistor .up').attr('disabled', false);
        $('.js-a.resistor .down').attr('disabled', false);
        if (resistor_button === 'up') {
            calcExp1.current1 = (10*calcExp1.current1 - 1)/10;
            if (calcExp1.current1 < .1) {
                calcExp1.current1 = 0;
                $('.js-a.resistor .up').attr('disabled', true);
            }
        }
        else if (resistor_button === 'down'){
            calcExp1.current1 = (10*calcExp1.current1 + 1)/10;
            if (calcExp1.current1 > .9) {
                calcExp1.current1 = 1;
                $('.js-a.resistor .down').attr('disabled', true);
            }
        }   
    }
    $ammeter1.html(calcExp1.current1.toFixed(2) + 'A');
    
    //CURRENT 1 CALCULATION FOR AMMETER 1
    
    
    //VOLTAGE 1 CALCULATION FOR VOLTMETER 1
    var I_a = calcExp1.current1;
    var I_f=numeric.div(I_a);
    //var Speed= document.getElementById("speed").value;
    var Speed = turbine_speed;
    var K= 0.07;
    var Kmul=numeric.mul(K,Speed);
    var arg = numeric.div(I_f/0.05);
    var arg_r = numeric.div(0.05/I_f);
    var e = Math.exp(2);
    var coth = (Math.exp(arg)+Math.exp(0-arg))/(Math.exp(arg)-Math.exp(0-arg))-arg_r;
    var result;
    if(I_f==0) {
        result = numeric.mul(Math.random(),5);
    }
    else {
        result = numeric.mul(Kmul,coth)+Math.random();
    }
    //result=result.toPrecision(7);
    $voltmeter1.html(result.toFixed(2) + 'V');
    //VOLTAGE 1 CALCULATION FOR VOLTMETER 1

    
    //update the generator speed
    $generator.trigger( "updateGenerator", [Speed/2000] );
    
};
calcExp1.current1 = 0;






var calcExp2 = function(resistor_button, connection) {
	 var $generator = $('#generatorCanvas_1');
    var turbine_speed =  $('.js-turbine-speed-indicator').attr('data-speed');
    $ammeter1 = $('.js-b.ammeter');
    $voltmeter1 = $('.js-h.voltmeter');
    
    //CURRENT 1 CALCULATION FOR AMMETER 1
    if (connection === 'js-a') {
        $('.js-a.resistor .up').attr('disabled', false);
        $('.js-a.resistor .down').attr('disabled', false);
        if (resistor_button === 'up') {
            calcExp2.current1 = (10*calcExp2.current1 - 1)/10;
            if (calcExp2.current1 < .1) {
                calcExp2.current1 = 0;
                $('.js-a.resistor .up').attr('disabled', true);
            }
        }
        else if (resistor_button === 'down'){
            calcExp2.current1 = (10*calcExp2.current1 + 1)/10;
            if (calcExp2.current1 > .9) {
                calcExp2.current1 = 1;
                $('.js-a.resistor .down').attr('disabled', true);
            }
        }   
    }
    $ammeter1.html(calcExp2.current1.toFixed(2) + 'A');
    
    //CURRENT 1 CALCULATION FOR AMMETER 1
    
    
    //VOLTAGE 1 CALCULATION FOR VOLTMETER 1
    var I_a = calcExp2.current1;
    var I_f=numeric.div(I_a);
    //var Speed= document.getElementById("speed").value;
    var Speed = turbine_speed;
    var K= 0.07;
    var Kmul=numeric.mul(K,Speed);
    var arg = numeric.div(I_f/0.05);
    var arg_r = numeric.div(0.05/I_f);
    var e = Math.exp(2);
    var coth = (Math.exp(arg)+Math.exp(0-arg))/(Math.exp(arg)-Math.exp(0-arg))-arg_r;
    var result;
    if(I_f==0) {
        result = numeric.mul(Math.random(),5);
    }
    else {
        result = numeric.mul(Kmul,coth)+Math.random();
    }
    //result=result.toPrecision(7);
    $voltmeter1.html(result.toFixed(2) + 'V');
    //VOLTAGE 1 CALCULATION FOR VOLTMETER 1

    
    //update the generator speed
    $generator.trigger( "updateGenerator", [Speed/2000] );
    
};


//var calcExp2 = function(resistor_button, connection) {};
var calcExp3 = function(resistor_button, connection) {};
var calcExp4 = function(resistor_button, connection) {};
/************************************ EXPERIMENT CALCULATORS ***************************************/






var circuit_checker = {
    'checkCircuit' : checkCircuit,
    'enableResistorControls' : enableResistorControls,
    'experiments' : {
        'exp1' : {
            'connections' : {
                'js-a' : 'resistor',
                'js-b' : 'ammeter',
                'js-c' : 'open',
                'js-d' : 'wire',
                'js-e' : 'open',
                'js-f' : 'ammeter',
                'js-g' : 'resistor',
                'js-h' : 'voltmeter'
            },
            'resitor_controls' : {
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
            'calculate' : calcExp2
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






//$(function(){

 
    
    //circuit_checker['checkCircuit'] = check;
    //return circuit_checker;

//});