var countries = {
	"Question1" : "Why do I need to connect a resistor in the field circuit?",
	"Question2" : "how to connect a circuit",
	"Question3" : "how to find a student's record",
	"Question4" : "how to find the knowledge concept",
	"Question5" : "how to find the experiment concept",
	"Question6" : "how to do experiment 1",
	"Question7" : "how to do experiment 2",
	"Question8" : "how to do experiment 3",
	"Question9" : "how to do experiment 4",
	"Question10" : "how to do experiment 5",
	"Question11" : "how to do experiment 6",
	"Question12" : "how to do experiment 7",
	"Question13" : "how to do experiment 8",
	"Question14" : "how to do experiment 9",
};

var q_exp1 = {
	"Question1" : "Why do I need to connect a resistor in the field circuit?",
	"Question2" : "Can I connect the field power supply with reverse polarity?",
	"Question3" : "Why does the generator terminal voltage saturate with higher field current?",
	"Question4" : "Can I reverse the polarity of field supply and reverse direction of rotation of the machine?",
	"Question5" : "What is residual voltage?",
	"Question6" : "I don't see any induced emf at the generator terminals.  What should I do?",
	"Question7" : "Why don't I connect the series field in all experiments?",
	"Question8" : "How are you doing?",
	"Question9" : "You are a dumb computer.",
	"Question10" : "I have had a great time in this lab.",
};

var a_exp1 = {
	"Answer1" : "You can vary the generator terminal voltage by varing field current.",
	"Answer2" : "Yes, you can.  This will change the polarity of the generated voltage.",
	"Answer3" : "That's magnetic saturation.  This happens for all magnetic material.",
	"Answer4" : "Yes, you can.  What do you think would be the polarity of the induced emf?  Think again.",
	"Answer5" : "That is the induced emf when the field current is zero.",
	"Answer6" : "Stop the machine.  Apply a small field current- about 0.5A for a few seconds. Then disconnect the field supply.  Then start the experiment from the beginning.",
	"Answer7" : "Series field needs to be connected only when you are working with a series generator/motor or a compound generator/motor.",
	"Answer8" : "Great!  How about you?",
	"Answer9" : "I am a computer, but not dumb.  You are intelligent.",
	"Answer10" : "I am glad, you liked it.",
};

var q_exp2 = {
	"Question1" : "What is the highest speed we can go?",
	"Question2" : "Can I start a shunt generator without a field resistor?",
	"Question3" : "What is the minimum resistance that I can connect in the field circuit?",
	"Question4" : "What is the maximum resistance that I can connect in the field circuit?",
	"Question5" : "What happens if reverse the direction of rotation?",
	"Question6" : "Why does the generator terminal voltage saturate with higher field current?",
	"Question7" : "I don't see any induced emf at the generator terminals.  What should I do?",
	"Question8" : "What is residual voltage?",
	"Question9" : "Why don't I connect the series field in all experiments?",
	"Question10" : "How are you doing?",
	"Question11" : "You are a dumb computer.",
	"Question12" : "I have had a great time in this lab.",
};

var a_exp2 = {
	"Answer1" : "That depends on the design of the machine.  Basically it is restricted by mechanical design of the machine.",
"Answer2" : "Yes you can.  Then the terminal voltage will be determined by the resistance of the field circuit.  You won’t be able to vary the generated voltage.",
"Answer3" : "Technically you don't need to connect any extra resistance in the field circuit.  Then you won’t be able to change the generated emf as well.",
"Answer4" : "That is called the critical resistance.  If you connect a higher resistance, there will not be any generated voltage.",
"Answer5" : "Try it and see what happens.  ",
"Answer6" : "That's magnetic saturation.  This happens for all magnetic material.",
"Answer7" : "Stop the machine.  Apply a small field current- about 0.5A for a few seconds. Then disconnect the field supply.  Then start the experiment from the beginning.",
"Answer8" : "That is the induced emf when the field current is zero.",
"Answer9" : "In that case, it will be a compund generator.  This experiment is for a shunt generator.",
"Answer10" : "Great!  How about you?",
"Answer11" : "I am a computer, but not dumb.  You are intelligent.",
"Answer12" : "I am glad, you liked it.",
};

var q_exp3 = {
	"Question1" : "What is the highest speed we can go?",
"Question2" : "Can I start a shunt generator without a field resistor?",
"Question3" : "What is the minimum resistance that I can connect in the field circuit?",
"Question4" : "What is the maximum resistance that I can connect in the field circuit?",
"Question5" : "What happens if reverse the direction of rotation?",
"Question6" : "Why does the generator terminal voltage saturate with higher field current?",
"Question7" : "I don't see any induced emf at the generator terminals.  What should I do?",
"Question8" : "What is residual voltage?",
"Question9" : "Why don't I connect the series field in all experiments?",
"Question10" : "Why are there sparks at the brushes?",
"Question11" : "What is voltage regulation?",
"Question12" : "What the minimum load resistance that I can connect?",
"Question13" : "What is the maximum load resistance that I can connect?",
"Question14" : "How are you doing?",
"Question15" : "You are a dumb computer.",
"Question16" : "I have had a great time in this lab.",

};

var a_exp3 = {
		"Answer1" : "That depends on the design of the machine.  Basically it is restricted by mechanical design of the machine.",
	"Answer2" : "Yes you can.  Then the terminal voltage will be determined by the resistance of the field circuit.  You won’t be able to vary the generated voltage.",
	"Answer3" : "Technically you don't need to connect any extra resistance in the field circuit.  Then you won’t be able to change the generated emf as well.",
	"Answer4" : "That is called the critical resistance.  If you connect a higher resistance, there will not be any generated voltage.",
	"Answer5" : "Try it and see what happens.  ",
	"Answer6" : "That's magnetic saturation.  This happens for all magnetic material.",
	"Answer7" : "Stop the machine.  Apply a small field current- about 0.5A for a few seconds. Then disconnect the field supply.  Then start the experiment from the beginning.",
	"Answer8" : "That is the induced emf when the field current is zero.",
	"Answer9" : "In that case, it will be a compund generator.  This experiment is for a shunt generator.",
	"Answer10" : "This is due to armature reaction. When a generator is loaded, the armature current produces a magnetic field which is at 90 degrees with respect to the pole flux.  The brushes are no longer at the magnetic neutral, and hence will short circuit a few armature coils.  This produces sparks at the brushes.",
	"Answer11" : "Voltage regulation is the ratio of change in voltage and the full load voltage as load is disconnected.",
	"Answer12" : "A smaller load resistance means a higher load current.  You will burn the machine is load resistance is too small.",
	"Answer13" : "As large as you want all the way up to infinity, i.e., open circuit.  This will give you open circuit voltage.",
	"Answer14" : "Great!  How about you?",
	"Answer15" : "I am a computer, but not dumb.  You are intelligent.",
	"Answer16" : "I am glad, you liked it.",
};

var q_exp4 = {
	"Question1" : "What is the highest speed we can go?",
"Question2" : "Why don't I connect the shunt field coil? ",
"Question3" : "What is the maximum load resistance that I can connect?",
"Question4" : "What happens if reverse the direction of rotation?",
"Question5" : "Why does the generator terminal voltage saturate with higher field current?",
"Question6" : "I don't see any induced emf at the generator terminals.  What should I do?",
"Question7" : "What is residual voltage?",
"Question8" : "Why are there sparks at the brushes?",
"Question9" : "What is voltage regulation?",
"Question10" : "What the minimum load resistance that I can connect?",
"Question11" : "How do I change the terminal voltage?",
"Question12" : "How are you doing?",
"Question13" : "You are a dumb computer.",
"Question14" : "I have had a great time in this lab.",

};

var a_exp4 = {
	"Answer1" : "That depends on the design of the machine.  Basically it is restricted by mechanical design of the machine.",
"Answer2" : "This is a series generator.  It needs only the series field.",
"Answer3" : "If the load resistance is too high, there won't be enough magnetic field, so will have a very small load voltage.",
"Answer4" : "Try it and see what happens.  ",
"Answer5" : "That's magnetic saturation.  This happens for all magnetic material.",
"Answer6" : "Stop the machine.  Apply a small field current- about 0.5A for a few seconds. Then disconnect the field supply.  Then start the experiment from the beginning.",
"Answer7" : "That is the induced emf when the field current is zero.",
"Answer8" : "This is due to armature reaction. When a generator is loaded, the armature current produces a magnetic field which is at 90 degrees with respect to the pole flux.  The brushes are no longer at the magnetic neutral, and hence will short circuit a few armature coils.  This produces sparks at the brushes.",
"Answer9" : "Voltage regulation is the ratio of change in voltage and the full load voltage as load is disconnected.",
"Answer10" : "A smaller load resistance means a higher load current.  You will burn the machine is load resistance is too small.",
"Answer11" : "You can reduce the field current by connecting a resistance parallel to the series field coil.",
"Answer12" : "Great!  How about you?",
"Answer13" : "I am a computer, but not dumb.  You are intelligent.",
"Answer14" : "I am glad, you liked it.",

	
};

var q_exp5 = {
"Question1" : "What is the highest speed we can go?",
"Question2" : "What is the minimum resistance that I can connect in the field circuit?",
"Question3" : "What is the maximum resistance that I can connect in the field circuit?",
"Question4" : "What happens if reverse the direction of rotation?",
"Question5" : "Why does the generator terminal voltage saturate with higher field current?",
"Question6" : "I don't see any induced emf at the generator terminals.  What should I do?",
"Question7" : "What is residual voltage?",
"Question8" : "Why do I have to connect the series field?",
"Question9" : "Why are there sparks at the brushes?",
"Question10" : "What is voltage regulation?",
"Question11" : "What the minimum load resistance that I can connect?",
"Question12" : "What is the maximum load resistance that I can connect?",
"Question13" : "How are you doing?",
"Question14" : "You are a dumb computer.",
"Question15" : "I have had a great time in this lab.",

	
};

var a_exp5 = {
	"Answer1" : "That depends on the design of the machine.  Basically it is restricted by mechanical design of the machine.",
"Answer2" : "Technically you don't need to connect any extra resistance in the field circuit.  Then you won’t be able to change the generated emf as well.",
"Answer3" : "That is called the critical resistance.  If you connect a higher resistance, there will not be any generated voltage.",
"Answer4" : "Try it and see what happens.  ",
"Answer5" : "That's magnetic saturation.  This happens for all magnetic material.",
"Answer6" : "Stop the machine.  Apply a small field current- about 0.5A for a few seconds. Then disconnect the field supply.  Then start the experiment from the beginning.",
"Answer7" : "That is the induced emf when the field current is zero.",
"Answer8" : "Compound generator means it has both shunt field and series field.",
"Answer9" : "This is due to armature reaction. When a generator is loaded, the armature current produces a magnetic field which is at 90 degrees with respect to the pole flux.  The brushes are no longer at the magnetic neutral, and hence will short circuit a few armature coils.  This produces sparks at the brushes.",
"Answer10" : "Voltage regulation is the ratio of change in voltage and the full load voltage as load is disconnected.",
"Answer11" : "A smaller load resistance means a higher load current.  You will burn the machine is load resistance is too small.",
"Answer12" : "As large as you want all the way up to infinity, i.e., open circuit.  This will give you open circuit voltage.",
"Answer13" : "Great!  How about you?",
"Answer14" : "I am a computer, but not dumb.  You are intelligent.",
"Answer15" : "I am glad, you liked it.",

};
var q_exp6 = {
	"Question1" : "What is the highest speed we can go?",
"Question2" : "Can I start a shunt motor without a field resistor?",
"Question3" : "What is the minimum resistance that I can connect in the field circuit?",
"Question4" : "What is the maximum resistance that I can connect in the field circuit?",
"Question5" : "How do I reverse the direction of rotation?",
"Question6" : "Why don't I connect the series field in this experiment?",
"Question7" : "Why are there sparks at the brushes?",
"Question8" : "What is speed regulation?",
"Question9" : "How are you doing?",
"Question10" : "You are a dumb computer.",
"Question11" : "I have had a great time in this lab.",

};

var a_exp6 = {
	"Answer1" : "That depends on the design of the machine.  Basically it is restricted by mechanical design of the machine.",
"Answer2" : "A field registance allows you change field current, hence the speed of the machine.",
"Answer3" : "Technically you don't need to connect any extra resistance in the field circuit.  Then you won’t be able to change the speed as well.",
"Answer4" : "A higher field resistance means smaller field current, and hence higher speed.  So you must be careful.",
"Answer5" : "Interchange the connection of the field coil.",
"Answer6" : "In that case, it will be a compund motor.  This experiment is for a shunt motor.",
"Answer7" : "This is due to armature reaction. When a motor is loaded, the armature current produces a magnetic field which is at 90 degrees with respect to the pole flux.  The brushes are no longer at the magnetic neutral, and hence will short circuit a few armature coils.  This produces sparks at the brushes.",
"Answer8" : "Speed regulation is the ratio of change in motor and the full load speed as mechanical load is disconnected.",
"Answer9" : "Great!  How about you?",
"Answer10" : "I am a computer, but not dumb.  You are intelligent.",
"Answer11" : "I am glad, you liked it.",

};
var q_exp7 = {
	"Question1" : "What is the highest speed we can go?",
"Question2" : "Can I start a shunt motor without a field resistor?",
"Question3" : "What is the minimum resistance that I can connect in the field circuit?",
"Question4" : "What is the maximum resistance that I can connect in the field circuit?",
"Question5" : "How do I reverse the direction of rotation?",
"Question6" : "Why don't I connect the series field in this experiment?",
"Question7" : "Why are there sparks at the brushes?",
"Question8" : "What is speed regulation?",
"Question9" : "Why do I need a starter resistance?",
"Question10" : "Can I use the starter resistance to control the motor speed?",
"Question11" : "How much mechanical load can I attach to the shaft?",
"Question12" : "How are you doing?",
"Question13" : "You are a dumb computer.",
"Question14" : "I have had a great time in this lab.",

};

var a_exp7 = {
	"Answer1" : "That depends on the design of the machine.  Basically it is restricted by mechanical design of the machine.",
"Answer2" : "A field registance allows you change field current, hence the speed of the machine.",
"Answer3" : "Technically you don't need to connect any extra resistance in the field circuit.  Then you won’t be able to change the speed as well.",
"Answer4" : "A higher field resistance means smaller field current, and hence higher speed.  So you must be careful.",
"Answer5" : "Interchange the connection of the field coil.",
"Answer6" : "In that case, it will be a compund motor.  This experiment is for a shunt motor.",
"Answer7" : "This is due to armature reaction. When a motor is loaded, the armature current produces a magnetic field which is at 90 degrees with respect to the pole flux.  The brushes are no longer at the magnetic neutral, and hence will short circuit a few armature coils.  This produces sparks at the brushes.",
"Answer8" : "Speed regulation is the ratio of change in motor and the full load speed as mechanical load is disconnected.",
"Answer9" : "Without a starter resistance, starting current will be very hight and will burn the motor.",
"Answer10" : "This is basically a series resistance with the armature.  So it will reduce the voltage applied to the armature, and hence will control the speed.  This is however not an efficient way to go.",
"Answer11" : "Higher shaft load means higher motor current.  Don't exceed the machine rating for the motor current.",
"Answer12" : "Great!  How about you?",
"Answer13" : "I am a computer, but not dumb.  You are intelligent.",
"Answer14" : "I am glad, you liked it.",

};
var q_exp8 = {
	"Question1" : "What is the highest speed we can go?",
"Question2" : "Can I start a shunt motor without a field resistor?",
"Question3" : "What is the minimum resistance that I can connect in the field circuit?",
"Question4" : "What is the maximum resistance that I can connect in the field circuit?",
"Question5" : "How do I reverse the direction of rotation?",
"Question6" : "Why don't I connect the series field in this experiment?",
"Question7" : "Why are there sparks at the brushes?",
"Question8" : "What is speed regulation?",
"Question9" : "Why do I need a starter resistace?",
"Question10" : "Can I use the starter resistance to control the motor speed?",
"Question11" : "How much mechanical load can I attach to the shaft?",
"Question12" : "How are you doing?",
"Question13" : "You are a dumb computer.",
"Question14" : "I have had a great time in this lab.",

};

var a_exp8 = {
	"Answer1" : "That depends on the design of the machine.  Basically it is restricted by mechanical design of the machine.",
"Answer2" : "A field registance allows you change field current, hence the speed of the machine.",
"Answer3" : "Technically you don't need to connect any extra resistance in the field circuit.  Then you won’t be able to change the speed as well.",
"Answer4" : "A higher field resistance means smaller field current, and hence higher speed.  So you must be careful.",
"Answer5" : "Interchange the connection of the field coil.",
"Answer6" : "In that case, it will be a compund motor.  This experiment is for a shunt motor.",
"Answer7" : "This is due to armature reaction. When a motor is loaded, the armature current produces a magnetic field which is at 90 degrees with respect to the pole flux.  The brushes are no longer at the magnetic neutral, and hence will short circuit a few armature coils.  This produces sparks at the brushes.",
"Answer8" : "Speed regulation is the ratio of change in motor and the full load speed as mechanical load is disconnected.",
"Answer9" : "Without a starter resistance, starting current will be very hight and will burn the motor.",
"Answer10" : "This is basically a series resistance with the armature.  So it will reduce the voltage applied to the armature, and hence will control the speed.  This is however not an efficient way to go.",
"Answer11" : "Higher shaft load means higher motor current.  Don't exceed the machine rating for the motor current.",
"Answer12" : "Great!  How about you?",
"Answer13" : "I am a computer, but not dumb.  You are intelligent.",
"Answer14" : "I am glad, you liked it.",
};

