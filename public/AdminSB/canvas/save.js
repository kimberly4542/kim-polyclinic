var saveButton = document.getElementById('saveCanvas');

saveButton.addEventListener('click', saveImage);

function saveImage(){
	var data = canvas.toDataURL();

		window.open(data, '_blank', 'location=0, menubar=0 ');
	}
