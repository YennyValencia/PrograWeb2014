$(document).ready(
		function profundidad(){
				$('#cal').click(
					function (){
							
						var prof = document.getElementById('dato1').value;
						var sube = document.getElementById('dato2').value;
						var baja = document.getElementById('dato3').value;
						
						$('#termo').height(prof).width(100);
						
															
						var cont=0;
						setInterval(cambia, 3000);
								
						function cambia(){
							cont++;
							$('#cambia').attr('src','img/sol'+cont+'.jpg');
									
							if(cont>=2){
								cont=0;
								setInterval(cambia, 3000);
							}		
						}
						
						
					}
				);
			}
);