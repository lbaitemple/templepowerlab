"use strict";

var sparks = {};

$(function(){
  
var maxParticles = 10,
  particleSize = 1,
  emissionRate = 1,
  objectSize = 1; // drawSize of emitter/field

    var canvas = document.getElementById('generatorCanvas');
    var ctx = canvas.getContext('2d');


 
//var canvas = document.querySelector('canvas');
//var ctx = canvas.getContext('2d');

//canvas.width = window.innerWidth;
//canvas.height = window.innerHeight;
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1) + min);
}



function Particle(point, velocity, acceleration, name) {
  this.position = point || new Vector(0, 0);
  this.velocity = velocity || new Vector(0, 0);
  this.acceleration = acceleration || new Vector(0, 0);
  this.name = name;
  this.startX = point.x;
  this.startY = point.y;
  this.spark_length = getRandomInt(5,16);
}

Particle.prototype.move = function () {
  this.velocity.add(this.acceleration);
  this.position.add(this.velocity);
};

function Field(point, mass) {
  this.position = point;
  this.setMass(mass);
}

Field.prototype.setMass = function(mass) {
  this.mass = mass || 100;
  this.drawColor = mass < 0 ? "#f00" : "#0f0";
}

function Vector(x, y) {
  this.x = x || 0;
  this.y = y || 0;
}

Vector.prototype.add = function(vector) {
  this.x += vector.x;
  this.y += vector.y;
}

Vector.prototype.getMagnitude = function () {
  return Math.sqrt(this.x * this.x + this.y * this.y);
};

Vector.prototype.getAngle = function () {
  return Math.atan2(this.y,this.x);
};

Vector.fromAngle = function (angle, magnitude) {
  return new Vector(magnitude * Math.cos(angle), magnitude * Math.sin(angle));
};

function Emitter(point, velocity, spread, name) {
  this.position = point; // Vector
  this.velocity = velocity; // Vector
  this.spread = spread || 360; // possible angles = velocity +/- spread
  this.drawColor = "#999"; // So we can tell them apart from Fields later
  
  this.name = name;
}

Emitter.prototype.emitParticle = function() {
  // Use an angle randomized over the spread so we have more of a "spray"
  var angle = this.velocity.getAngle() + this.spread - (Math.random() * this.spread * 2);

  // The magnitude of the emitter's velocity
  var magnitude = this.velocity.getMagnitude();

  // The emitter's position
  var position = new Vector(this.position.x, this.position.y);

  // New velocity based off of the calculated angle and magnitude
  var velocity = Vector.fromAngle(angle, magnitude);

  // return our new Particle!
  return new Particle(position, velocity, null, this.name);
};

function addNewParticles() {
  // if we're at our max, stop emitting.
  if (particles.length > maxParticles) return;

  // for each emitter
  for (var i = 0; i < emitters.length; i++) {

    // emit [emissionRate] particles and store them in our particles array
    for (var j = 0; j < emissionRate; j++) {
      particles.push(emitters[i].emitParticle());
    }

  }
}

function plotParticles(boundsX, boundsY) {
  // a new array to hold particles within our bounds
  var currentParticles = [];

  for (var i = 0; i < particles.length; i++) {
    var particle = particles[i];
    var pos = particle.position;
    var startX = particle.startX;
    var startY = particle.startY;

    
    // If we're out of bounds, drop this particle and move on to the next
    if (pos.x < (startX - boundsX) || pos.x > (startX + boundsX) || pos.y < (startY - boundsY) || pos.y > (startY + boundsY)) continue;

    // Move our particles
    particle.move();

    // Add this particle to the list of current particles
    currentParticles.push(particle);
  }

  // Update our global particles reference
  particles = currentParticles;
}

function drawParticles() {
  
  

  
  
  
  for (var i = 0; i < particles.length; i++) {
    var particle = particles[i];
    var position = particle.position;
    var angle = particle.velocity.getAngle();
    var spark_length = particle.spark_length;
    
    var y = spark_length * Math.sin(angle);
    var x = spark_length* Math.cos(angle);
  
    ctx.beginPath();
    ctx.moveTo(position.x, position.y);
    ctx.lineTo(position.x + x, position.y + y);
    
    ctx.strokeStyle = 'rgb(230,169,1)';
      
    //var lingrad = ctx.createLinearGradient(position.x, position.y, position.x + x, position.y + y);
    //lingrad.addColorStop(0, 'rgba(230,169,1,0)');
    //lingrad.addColorStop(.25, 'rgba(230,169,1,.5)');
    //lingrad.addColorStop(1, 'rgba(230,169,1,1)');
    //ctx.strokeStyle = lingrad;
    ctx.lineWidth = 1;
    ctx.stroke();
    //ctx.fillRect(position.x, position.y, position.x + x, position.y + y);
  }
}

var particles = [];

//var midX = canvas.width / 2;
//var midY = canvas.height / 2; 

// Add one emitter located at `{ x : 100, y : 230}` from the origin (top left)
// that emits at a velocity of `2` shooting out from the right (angle `0`)
var emitters = [new Emitter(new Vector(250, 143), Vector.fromAngle(0, 2), 360, 'top'), new Emitter(new Vector(250, 366), Vector.fromAngle(0, 2), 360, 'bottom')];

function loop() {
  //clear();
  update();
  draw();
  //queue();
}

function clear() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
}

function update() {
  addNewParticles();
  plotParticles(40, 10);
}

function draw() {
  drawParticles();
}

function queue() {
  window.requestAnimationFrame(loop);
}

sparks['loop'] = loop;
return sparks;


});
