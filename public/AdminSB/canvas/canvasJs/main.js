


var canvas = document.getElementById('canvasDemo');
var context = canvas.getContext('2d');

var radius = 2;
// var dragging = false;

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

canvas.addEventListener('mousedown', putPoint);
// canvas.addEventListener('mouseup', disengage);
// canvas.addEventListener('mousemove', putPoint);

var putPoint = function(e){

		context.beginPath();
		context.arc(e.offsetX, e.offsetY, 0, 0, Math.PI*2);
		context.fill();
	
}
canvas.addEventListener('mousedown',putPoint);