$(document).ready(//VA A DEFINIR TODOS LOS ELEMENTOS YA CUANDO LA PAGINA ESTE LISTA

function()
{
  var d,m,a,auxc,auxe,auxb,auxf;
  var c=0,e=0,b=0,f=0;
  

  $('#aceptar').click(
  function()
  {
    d=parseInt($('#dia').val()); //---> PASAR DE TEXTO A TIPO NUMERICO
    m=parseInt($('#mes').val()); //---> PASAR DE TEXTO A TIPO NUMERICO 
    a=parseInt($('#año').val()); //---> PASAR DE TEXTO A TIPO NUMERICO 

      if ((d<=0)||(m<=0)||(a<0)||(d>31)||(m>12)||(a>10000) ||(isNaN(d))||(isNaN(m))||(isNaN(a)))
      {
        //window.alert('mensaje');
        alert('No se aceptan valores nulos o fecha no valida');
      }


      else if (m>2) //paso 1
      {
        
        m=m-2; //paso 3
        c=a/100;
        auxc=Math.floor(c); 
        e=a%100; //paso 4
        auxe=Math.floor(e); 
        b=(13*m-1)/5+e/4+c/4; //paso 5 
        auxb=Math.floor(b); 
        f=Math.abs((b+e+d-2*c)%7); // paso 6
        auxf=Math.floor(f);

      } 

      else
      {
        m=m+10; 
        a=a-1; //paso 2 
        c=a/100;
        auxc=Math.floor(c); 
        e=a%100; //paso 4
        auxe=Math.floor(e); 
        b=(13*m-1)/5+e/4+c/4; //paso 5 
        auxb=Math.floor(b); 
        f=Math.abs((b+e+d-2*c)%7); // paso 6
        auxf=Math.floor(f);
        
      }

      if(auxf==0)
        alert("0 Sabado,1 Domingo,2 Lunes") 
      else
        if(auxf==1)
          alert("0 Domingo,1 Lunes,2 Martes") 
        else
          if(auxf==2)
            alert("0 lunes,1 Martes,2 Miercoles") 
          else
            if(auxf==3)
              alert("0 Martes,1 Miercoles,2 Jueves") 
            else
              if(auxf==4)
                alert("0 Miercoles,1 Jueves,2 Viernes")
              else
                if(auxf==5)
                  alert("0 Jueves,1 Viernes,2 Sabado") 
                else
                  if(auxf==6)
                    alert("0 Viernes,1 Sabado,2 Domingo") 
   }); 
}
);