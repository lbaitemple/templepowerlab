var checkCircuit = function(experiment) {
    var correct = true;
    var exp = circuit_checker.experiments[experiment].connections;
    for (var key in exp) {
        var value = exp[key];
        var connection = $('.'+key);
        if (value === 'open' &&
            !connection.hasClass('wire') && !connection.hasClass('resistor') && !connection.hasClass('ammeter') && !connection.hasClass('voltmeter')) {
            //console.log('true');
            //alert("1");
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
    //alert("1");
    var connections = circuit_checker.experiments[experiment].resistor_controls;
    for (var connection in connections) {
        var $controls = $('.'+connection).find('.js-resistor-button');
        var buttons = connections[connection];
        for (var button in buttons) {
            $controls.filter('.'+button).attr('disabled', !buttons[button]);
           
        }
    }
};







/************************************ EXPERIMENT CALCULATORS ***************************************/









/*function fillTable(i,time,speed,a_current){
	//if(time>=0.1)
		document.getElementById("t"+i).value = time;
	//else
		//document.getElementById("t"+i).value = 0;
	document.getElementById("s"+i).value = speed;
	document.getElementById("a"+i).value = a_current;
}

function clearTable(){
	for(i=0; i<=29; i++){
		document.getElementById("s"+i).value = null;
		document.getElementById("t"+i).value = null;
		document.getElementById("a"+i).value = null;
	}
}
	*/

/*
function cutDown(){
		if (connection === 'js-d') {
        //$('.js-.resistor .up').attr('disabled', false);
        //$('.js-a.resistor .down').attr('disabled', false);
       // var value=$('.resistor_value').innerHTML;
        var res = $('.resistor_value').innerHTML.split(" ");
        consloe.log(res[0]);
        if (resistor_button === 'down'){
            var value = res[0]-5;
            $('.resistor_value').innerHTML=value+" Ohms";
            //if (calcExp2.current1 > .9) {
            //    calcExp2.current1 = 1;
            //    $('.js-a.resistor .down').attr('disabled', true);
            //}
        }   
    }
	//var SS = [];
	//var j = 0;
	R_starter = parseInt(R_starter) - 5;
	var V_t =120;// document.getElementById("v_in").value;
	
	var new_Speed = 0;
	
	var speed_error = 999;
	var iter = 0;
	var step = 0;
	var t = SS[j];
	var index=parseInt(SS[j]/0.1);
	var Speed = S[index-1];
	var w = W[index-1];
	var x = numeric.div(I_f,a);
	var y = numeric.div(a,I_f);
	
	//Hyperbolic cotangent of x = coth x = (e^x + e^-x)/(e^x - e^-x)
	var coth = ( Math.exp(x)+Math.exp(0-x) )/( Math.exp(x)-Math.exp(0-x) );
	var Phi = parseFloat(coth) - parseFloat(y);
	var iter = 0;
	
	while(1){

		var E_a = numeric.mul(K,Speed,Phi) + 0.1*Math.random();
		//Armature current
		var u = parseInt(V_t)-parseFloat(E_a);
		var v = parseFloat(R_a)+parseInt(R_starter);
		var I_a = numeric.div(u,v);
		I_a = I_a.toPrecision(4);
		
		var f1 = numeric.mul(A_d,w);
		var f2 = numeric.mul(B_d,Phi,I_a);
		var f3 = numeric.mul(C_d,T_load);
		
		w = parseFloat(f1) + parseFloat(f2) + parseFloat(f3);
		new_Speed = (60*w)/(2*Math.PI);
		
		speed_error = parseFloat(new_Speed) - parseFloat(Speed);
		Speed = new_Speed.toPrecision(5);
		t = index*0.1;
		t  += parseFloat(Delta); 
		t = t.toPrecision(3);
		//index=parseInt(t/0.1);
		S[index]=Speed;
		W[index]=w;
		//console.log("t is :"+t);
		
		//console.log("Speed is :"+Speed);
		//console.log("index is :"+index);
		index++;
		if(parseInt(t)==20)break;
		//j++;
	}
	j++;
	//console.log(W);
	console.log(S);
}

*/



var result;
var calcExp1 = function(resistor_button, connection) {
	//function startMotor(){
	//DECLARATIONS:											*
//here we initialize all the variables that we will use *
//these variables are used to start and stop the motor  *
//
//motor parameters
var a=.05;   		// flux model
var K=0.07; 		// flux model
var R_f0=150; 		// field resistance
var R_a=1; 			// armature resistance
var R_s=0.2;  		// series field
var R_starter = 0; 	// starter resistance
var T_load=0; 
var N_f=1000; 		// number of turns in shunt field
var N_s=150; 		// number of turns in series field
var J_m=5.0e-03; 	// motor inertia 7.5
var D_m=0.7e-03; 	// friction coefficient 1.5
var Delta=0.1; 		// sampling time
var A_d = Math.exp( numeric.mul((0-D_m),Delta)/J_m );
var B_d = numeric.div(K,D_m)*(1-A_d);
var C_d = (-1/D_m)*(1-A_d);
var R_f;
var w=0;
//var W=[];

//motor model in discrete time


var SS = [5, 6, 7, 8];
//var C = [];
var j=0;
	var R_ext = 0;//document.getElementById("r_ext").value;
	var V_t = 120;//document.getElementById("v_in").value;
	
	T_load =0;//document.getElementById("t_load").value;
	R_starter =20;// document.getElementById("r_start").value;
	
	R_f = parseInt(R_f0) + parseInt(R_ext);
	I_f = numeric.div(V_t,R_f);
	
	var Speed = 0;
	var new_Speed = 0;
	//var w = 0;
	var speed_error = 999;
	var iter = 0;
	var step = 0;
	var t = 0;
	
	var x = numeric.div(I_f,a);
	var y = numeric.div(a,I_f);
	
	//Hyperbolic cotangent of x = coth x = (e^x + e^-x)/(e^x - e^-x)
	var coth = ( Math.exp(x)+Math.exp(0-x) )/( Math.exp(x)-Math.exp(0-x) );
	var Phi = parseFloat(coth) - parseFloat(y);
	var iter = 0;
	var cnt = 0;
	
	while(speed_error > 2 || t < 20){
		//UNCOMMENT BELOW IF WANT 30 STEPS EVERY TIME
	//while(speed_error > 2 || step < 30){
		var E_a = numeric.mul(K,Speed,Phi) + 0.1*Math.random();
		//Armature current
		var u = parseInt(V_t)-parseFloat(E_a);
		var v = parseFloat(R_a)+parseInt(R_starter);
		var I_a = numeric.div(u,v);
		I_a = I_a.toPrecision(4);
		
		C[C.length] = I_a;
		//if(iter === 0){
			//fillTable(step,t,Speed,I_a);
			//step++;
		//}
		
		var f1 = numeric.mul(A_d,w);
		var f2 = numeric.mul(B_d,Phi,I_a);
		var f3 = numeric.mul(C_d,T_load);
		
		w = parseFloat(f1) + parseFloat(f2) + parseFloat(f3);
		new_Speed = (60*w)/(2*Math.PI);
		speed_error = parseFloat(new_Speed) - parseFloat(Speed);
	S[S.length] = Speed;
		Speed = new_Speed.toPrecision(5);
			
		W[W.length]= w;
		t = parseFloat(t) + parseFloat(Delta); t = t.toPrecision(3);
		iter++;
		if(iter === 10){
			iter = 0;
		}
		cnt++;
	}
	//console.log(iter);
	//console.log(cnt);
	console.log(C);


//}
};
calcExp1.current1 = 0;
calcExp1.current2 = 0;


var calcExp2 = function(resistor_button, connection) {
	 var $generator = $('#generatorCanvas');
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
    //$generator.trigger( "updateGenerator", [Speed/2000] );
    
};
calcExp2.current1 = 0;

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
                'js-a' : 'ammeter',
                'js-b' : 'resistor',
                'js-c' : 'open',
                'js-d' : 'resistor',
                'js-e' : 'open',
                'js-f' : 'ammeter',
                'js-g' : 'voltmeter'

            },
            'resitor_controls' : {
           
              'js-d' : {
                'up' : false,
                'down' : false
             },
             
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