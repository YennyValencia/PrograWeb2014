
$(document).ready(
  function(){

		$('img').click(
		  function(){

		  	$(this).hide(2000);
			  
			  }
			  
		 
		);
		
		var myVar=setInterval(function(){myTimer()},2000);

			function myTimer(){
				$('#hola').attr("src","img/"+parseInt((Math.random()*8)+1)+".jpg");
			}


		
		
    }
);