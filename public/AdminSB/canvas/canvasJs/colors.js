var colors = ['black', 'red'];


// for(var i=0, n=colors.length;i<n;i++){
// 	var swatch = document.createElement('div');
// 	swatch.className = 'swatch';
// 	swatch.style.backgroundColor = colors[i];
// 	swatch.addEventListener('click', setSwatch);
// 	document.getElementById('colors').appendChild(swatch);
// }


function setColor(color){
	context.fillStyle = color;
	context.strokeStyle = color;
	var active = document.getElementsByClassName('active')[0];
	if(active){
		active.className = 'swatch';

	}
} 

function setSwatch(e){
	//identify swatch
	var swatch = e.target;

	//setcolor
	setColor(swatch.style.backgroundColor);
	//give active status 
	swatch.className += ' active';
}
setSwatch({target: document.getElementsByClassName('swatch')[0]});