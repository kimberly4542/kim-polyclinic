document.getElementById('clearCanvas').addEventListener('click', function() {
        context.clearRect(0, 0, canvas.width, canvas.height);
      }, false);


var input = $("#imageLoader");

input.on('change', function(){
   console.log(this.value);    
});

$('#clearCanvas').on('click', function(e){
   input.replaceWith(input.val('').clone(true));
});