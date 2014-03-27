$(document).ready(
  function(){

		var myVar=setInterval(function(){myTimer()},1000);

			function myTimer(){
                 $('#imag1').attr("src","img/"+parseInt(Math.random()*2+1)+".png");
			}
 	
	}
);


$(document).ready(function() {

    $('#aceptar').click(function(){

 		    var profundidad = document.calcular.profundidad.value
 		    var resbala = document.calcular.resbala.value 
 		    var resultado = eval(profundidad  - resbala)
 		    document.calcular.dias.value = resultado

    });
});

// $(document).ready(function() {
// 	$('#car').click(function(){
// 		$(this).hide(1000);
// $( "car" ).animate({ "top": "+=50px" }, 3000);
// $( "car" ).animate({ "bottom": "-=50px" }, 3000);
// });
// });

$(document).ready(function() {
 $('#aceptar').click(
                      function()
                           {

                            var profundidad=parseInt($('#profundidad').val());
                            var sube=parseInt($('#sube').val());
                            var resbala=parseInt($('#resbala').val());
                            var termina=0;
                            var dia=0;
                            var duracion=sube*1000;
                           // alert(resbala);
                            var i=0;
                            var nueva_profun=((sube*300)/profundidad);
                            if(profundidad>resbala)
                              {
                               if(sube>=profundidad)
                                  {
                                   $('#caracol1').animate({ marginBottom:2 });//cambie 0a 2
                                   dia++;
                                   alert("Caracol subio a la cima :)"+"en el dia"+dia);
                                  }
                                  else
                                  {
                                    var myVar = setInterval(function(){myTimer()},3000);
                                    function myTimer()
                                     { 
                                        if (i==0)
                                         { 
                                            $('#car').animate({ marginBottom:nueva_profun });
                                            // $('#cambiar').fadeTo("fast", 0.0);//sol se esconde
                                            // $('#cambiar2').fadeTo("fast", 1.0);//sale la luna
                                            i++;
                                            termina=termina+sube;
                                            if(parseInt(termina)>=profundidad)
                                              {
                                                 alert("Caracol subio a la cima"+"en el dia"+dia);
                                                 $('#car').animate({ marginBottom:300 });
                                                 window.clearInterval(myVar);
                                              }
                                         }
                                         else
                                         { 
                                            nueva_profun=nueva_profun+((resbala*300)/profundidad);
                                            $('#car').animate({ marginBottom:nueva_profun});
                                            // $('#cambiar2').fadeTo("fast", 0.0);//luna se esconde
                                            // $('#cambiar').fadeTo("fast", 1.0);//sale el sol
                                             i = 0; 
                                            termina=termina-resbala;
                                            dia++;
                                            nueva_profun=nueva_profun-((sube*300)/profundidad);
                                         } 


                                      }  
                                   } 
                               }
                               else 
                                  alert("La profundidad es menor a los metros que resbala,verifique!!:) ")
                         }); 
          }
);//llamada a metodos $




