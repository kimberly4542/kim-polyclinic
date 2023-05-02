var setRadius = function(newRadius){
	if (newRadius<minRad)
		newRadius = minRad;
	else if(newRadius>maxRad)
		newRadius = maxRad;
	radius = newRadius;
	context.lineWidth = radius*2;

	radSpan.innerHTML = radius;
}

var minRad  = 0.5,
	maxRad = 10,
	defaultRad = 1,
	interval = 1,
	radSpan = document.getElementById('radval');
	

setRadius(defaultRad);
