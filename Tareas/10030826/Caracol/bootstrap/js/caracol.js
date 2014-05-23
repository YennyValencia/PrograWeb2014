$(document).ready(
	/*function(){
		//$('img').hide(1000);	
		//*$('img').click(
			function() {
				$('a').attr('src', 'x'); 
			}
		);

		$('#img').click(
			function(){
				$('img').show(1000);
			}
		)
	} */
	
	function(){
       var flag=0;
		$('img').click(
		  function(){
			  if (flag==0) {
			 	 $(this).fadeTo( "fast", 0.3); flag=1;  
			  }
			  else{
			  	 $(this).fadeTo("slow",1); flag=0;
			  }
			  
		 }
		);
		
		$('#sol').attr("src","images/"+parseInt((Math.random()*31)+1)+".jpg");
		$('#luna').attr("src","images/"+parseInt((Math.random()*31)+1)+".jpg");
		
		
		var myVar=setInterval(function(){myTimer()},3000);

			function myTimer(){
				$('#imglol').attr("src","images/"+parseInt((Math.random()*31)+1)+".jpg");
			}
		
		
    }
);