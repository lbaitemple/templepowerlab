var checkCircuit = function(experiment) {
	var correct = true;
	var exp = circuit_checker.experiments[experiment].connections;
	for (var key in exp) {
		var value = exp[key];
		var connection = $('.' + key);
		if (value === 'open' && 
		!connection.hasClass('wire') && !connection.hasClass('resistor') && !connection.hasClass('ammeter') && !connection.hasClass('voltmeter')) {
			//console.log('true');
			//alert("1");
		} else if (connection.hasClass(value)) {
			//console.log('true');
			}
			 else {
			correct = false;
		}
	}


	return correct;
};

var enableResistorControls = function(experiment) {
	//alert("1");
	var connections = circuit_checker.experiments[experiment].resistor_controls;
	for (var connection in connections) {
		var $controls = $('.' + connection).find('.js-resistor-button');
		var buttons = connections[connection];
		for (var button in buttons) {
			$controls.filter('.' + button).attr('disabled', !buttons[button]);

		}
	}
};

/************************************ EXPERIMENT CALCULATORS ***************************************/

var result;
var calcExp1 = function(resistor_button, connection) {
	var $generator = $('#generatorCanvas');
	var turbine_speed = $('.js-turbine-speed-indicator').attr('data-speed');
	$ammeter1 = $('.js-b.ammeter');
	$voltmeter1 = $('.js-h.voltmeter');
	$ammeter2 = $('.js-f.ammeter');

	//CURRENT 1 CALCULATION FOR AMMETER 1
	if (connection === 'js-a') {
		$('.js-a.resistor .up').attr('disabled', false);
		$('.js-a.resistor .down').attr('disabled', false);
		if (resistor_button === 'up') {
			calcExp1.current1 = (10 * calcExp1.current1 - 1) / 10;
			if (calcExp1.current1 < .1) {
				calcExp1.current1 = 0;
				$('.js-a.resistor .up').attr('disabled', true);
			}
		} else if (resistor_button === 'down') {
			var str =$voltmeter1.html();
			var rest = str.split("V");
			var val = parseFloat(rest[0]);
			console.log(val);
			
			if(val>118.0)
			{
				Exp='exp1';
				toastr.success('Rheostat set up is finished, you can proceed to follow second part of the instructions!');
				//$('.js-g.resistor .down').attr('disabled', false);
			
			}
			calcExp1.current1 = (10 * calcExp1.current1 + 1) / 10;
			if (calcExp1.current1 > 1.1) {
				calcExp1.current1 = 1.2;
				$('.js-a.resistor .down').attr('disabled', true);
				//Exp='exp1';
				//toastr.success('Rheostat set up is finished, you can proceed to follow second part of the instructions!');
				//$('.js-g.resistor .down').attr('disabled', false);
			}
		}
	}
	$ammeter1.html(calcExp1.current1.toFixed(2) + 'A');
	var E_a;
	var I_f;
	  if (connection === 'js-g') {
        $('.js-g.resistor .up').attr('disabled', false);
        $('.js-g.resistor .down').attr('disabled', false);
        if (resistor_button === 'up') {
            calcExp1.current2 = (50*calcExp1.current2 - 5)/50;
             calcExp1.voltage1 = result - (result/150+ calcExp1.current2);
             calcExp1.current1 = calcExp1.voltage1/150;
                        $voltmeter1.html(calcExp1.voltage1.toFixed(2) + 'V');
 $ammeter2.html(calcExp1.current2.toFixed(2) + 'A');
 $ammeter1.html(calcExp1.current1.toFixed(2) + 'A');
   					 $generator.trigger( "updateGenerator", [Speed/2000] );
   					
            if (calcExp1.current2 < .1) {
                calcExp1.current2 = 0;
                 calcExp1.voltage1 = result ;
                $('.js-g.resistor .up').attr('disabled', true);
                calcExp1.current1 = 1.0;
                $ammeter1.html(calcExp1.current1.toFixed(2) + 'A');
                           $voltmeter1.html(calcExp1.voltage1.toFixed(2) + 'V');
 $ammeter2.html(calcExp1.current2.toFixed(2) + 'A');
   					 $generator.trigger( "updateGenerator", [Speed/2000] );
   					 return;
            }
             return;
        }
        else if (resistor_button === 'down'){
            calcExp1.current2 = (50*calcExp1.current2 + 5)/50;
            
            	calcExp1.voltage1 = result - (result/150+calcExp1.current2);
            	 calcExp1.current1 = calcExp1.voltage1/150;
            	                  if(calcExp1.voltage1<0||calcExp1.current2>3.1)
			{alert("Current exceeds the limit! Fill the rest voltage with 0" );
				$voltmeter1.html('0.00 V');
						$('.js-a.resistor .up').attr('disabled', true);
					$('.js-a.resistor .down').attr('disabled', true);
					$('.js-g.resistor .up').attr('disabled', true);
					$('.js-g.resistor .down').attr('disabled', true);
				return;}
                $ammeter1.html(calcExp1.current1.toFixed(2) + 'A');
                      $voltmeter1.html(calcExp1.voltage1.toFixed(2) + 'V');
 $ammeter2.html(calcExp1.current2.toFixed(2) + 'A');
   					 $generator.trigger( "updateGenerator", [Speed/2000] );
   					
            if (calcExp1.current2 > 4.9) {
                calcExp1.current2 = 5;
                calcExp1.voltage1 = result - (result/150+ calcExp1.current2);
                $('.js-g.resistor .down').attr('disabled', true);
                 calcExp1.current1 = calcExp1.voltage1/150;

		
                 
                 
                $ammeter1.html(calcExp1.current1.toFixed(2) + 'A');
                    $voltmeter1.html(calcExp1.voltage1.toFixed(2) + 'V');
 $ammeter2.html(calcExp1.current2.toFixed(2) + 'A');
   					 $generator.trigger( "updateGenerator", [Speed/2000] );
   					 return;
            }
             return;
          
        }   
    }
	//CURRENT 1 CALCULATION FOR AMMETER 1

	//VOLTAGE 1 CALCULATION FOR VOLTMETER 1
	var I_f = calcExp1.current1;

	//var Speed= document.getElementById("speed").value;
	var Speed = turbine_speed;

	var K = 0.07;
	var Kmul = numeric.mul(K, Speed);
	var arg = numeric.div(I_f / 0.05);
	var arg_r = numeric.div(0.05 / I_f);
	var e = Math.exp(2);
	var coth = (Math.exp(arg) + Math.exp(0 - arg)) / (Math.exp(arg) - Math.exp(0 - arg)) - arg_r;

	if (I_f == 0) {
		result = 0.5 + (0.5 * Math.random() * 5 * Speed / 1800);
	} else {
		result = numeric.mul(Kmul, coth) + 0.5 * Math.random();
	}
	//result=result.toPrecision(7);
	$voltmeter1.html(result.toFixed(2) + 'V');
	//VOLTAGE 1 CALCULATION FOR VOLTMETER 1

	//VOLTAGE 2 CALCULATION FOR VOLTMETER 2

	//VOLTAGE 2 CALCULATION FOR VOLTMETER 2

	//update the generator speed
	$generator.trigger("updateGenerator", [Speed / 2000]);

};
calcExp1.current1 = 0;
calcExp1.current2 = 0;

var calcExp2 = function(resistor_button, connection) {
	var $generator = $('#generatorCanvas');
	var turbine_speed = $('.js-turbine-speed-indicator').attr('data-speed');
	$ammeter1 = $('.js-b.ammeter');
	$voltmeter1 = $('.js-h.voltmeter');

	//CURRENT 1 CALCULATION FOR AMMETER 1
	if (connection === 'js-a') {
		$('.js-a.resistor .up').attr('disabled', false);
		$('.js-a.resistor .down').attr('disabled', false);
		if (resistor_button === 'up') {
			calcExp2.current1 = (10 * calcExp2.current1 - 1) / 10;
			if (calcExp2.current1 < .1) {
				calcExp2.current1 = 0;
				$('.js-a.resistor .up').attr('disabled', true);
			}
		}	
			 else if (resistor_button === 'down') {
			calcExp2.current1 = (10 * calcExp2.current1 + 1) / 10;
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
	var I_f = numeric.div(I_a);
	//var Speed= document.getElementById("speed").value;
	var Speed = turbine_speed;
	var K = 0.07;
	var Kmul = numeric.mul(K, Speed);
	var arg = numeric.div(I_f / 0.05);
	var arg_r = numeric.div(0.05 / I_f);
	var e = Math.exp(2);
	var coth = (Math.exp(arg) + Math.exp(0 - arg)) / (Math.exp(arg) - Math.exp(0 - arg)) - arg_r;
	var result;
	if (I_f == 0) {
		result = numeric.mul(Math.random(), 5);
	} else {
		result = numeric.mul(Kmul, coth) + Math.random();
	}
	//result=result.toPrecision(7);
	$voltmeter1.html(result.toFixed(2) + 'V');
	//VOLTAGE 1 CALCULATION FOR VOLTMETER 1

	//update the generator speed
	$generator.trigger("updateGenerator", [Speed / 2000]);

};
calcExp2.current1 = 0;

//var calcExp2 = function(resistor_button, connection) {};
var calcExp3 = function(resistor_button, connection) {
};
var calcExp4 = function(resistor_button, connection) {
};
/************************************ EXPERIMENT CALCULATORS ***************************************/

var circuit_checker=
{
	'checkCircuit' : checkCircuit,
	'enableResistorControls' : enableResistorControls,
	'experiments' : {
		'exp1' : {
			'connections' : {
				'js-a' : 'resistor',
				'js-b' : 'ammeter',
				'js-c' : 'wire',
				'js-d' : 'open',
				'js-e' : 'wire',
				'js-f' : 'ammeter',
				'js-g' : 'resistor',
				'js-h' : 'voltmeter'
			},
			'resistor_controls' : {
				'js-a' : {
					'up' : false,
					'down' : false
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
					'down' : false
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

//$(function(){

//circuit_checker['checkCircuit'] = check;
//return circuit_checker;

//});