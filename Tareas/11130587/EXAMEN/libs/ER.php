<?php
class ER extends Modelo {
	public $nombre_tabla = 'expresiones';


    public function set_nombre($valor){
        
        $rs = $this->consulta_sql("select * from expresiones where nombre = '$valor'");
        $rows = $rs->GetArray();
        
        if(preg_match("/^([a-zA-ZñÑ\s]{2,50})+$/",$valor) &&  (count($rows) <= 0))
                $this->nombre = trim($valor);
            else{
            $this->nombre = "";
            $this->errores[] = "El nombre: (".$valor.") no es válido o ya esta registrado";
            echo "El nombre: (".$valor.") no es válido o ya esta registrado";
            }
    }

    public function get_nombre(){
        return $this->nombre;
    } 
    

    public function get_password(){
        return $this->password;
    } 
    public function set_password($valor){
         
     //     CONTRASEÑA SEGURA
    	// •Contraseñas que contengan al menos una letra mayúscula.
     //    •Contraseñas que contengan al menos una letra minúscula.
     //    •Contraseñas que contengan al menos un número o carácter especial.
     //    •Contraseñas cuya longitud sea como mínimo 8 caracteres.
     //    •Contraseñas cuya longitud máxima no debe ser arbitrariamente limitada. 

        $rs = $this->consulta_sql("select * from expresiones where password = '$valor'");
        $rows = $rs->GetArray();

        if(preg_match("/^((?=^.{8,}$)((?=.*d)|(?=.*W+))(?![.n])(?=.*[A-Z])(?=.*[a-z]).*$)+$/",$valor))
        {
          $this->password = trim($valor);
          echo "El password: (".$valor.") es de seguridad alta";
        }
            else{
            	$this->password = trim($valor);
           echo "El password: (".$valor.") es de seguridad baja";
            }
    }
    
    public function get_curp(){
        return $this->curp;
    } 
    public function set_curp($valor){
        $rs = $this->consulta_sql("select * from expresiones where curp = '$valor'");
        $rows = $rs->GetArray();
        
        if(preg_match("/^(^.*(?=.{18})(?=.*[0-9])(?=.*[A-ZÑ]).*$)+$/",$valor))
                $this->curp = trim($valor);
            else{
            $this->curp = "";
            $this->errores[] = "El CURP: (".$valor.") no es válido, por favor verifique";
            echo "El CURP: (".$valor.") no es válido, por favor verifique";
            }
    }

    public function get_telefono(){
        return $this->telefono;
    } 
    public function set_telefono($valor){
        $rs = $this->consulta_sql("select * from expresiones where telefono = '$valor'");
        $rows = $rs->GetArray();
        
        if(preg_match("/^(^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$)+$/",$valor))
                $this->telefono = trim($valor);
            else{
            $this->telefono = "";
            $this->errores[] = "El Télefono: (".$valor.") no es válido, por favor verifique";
            echo "El Télefono: (".$valor.") no es válido, por favor verifique";
            }
    }

    public function get_tarjeta(){
        return $this->tarjeta;
    } 
    public function set_tarjeta($valor){
        $rs = $this->consulta_sql("select * from expresiones where tarjeta = '$valor'");
        $rows = $rs->GetArray();
        
        if(preg_match("/^(^((67\d{2})|(4\d{3})|(5[1-5]\d{2})|(6011))(-?\s?\d{4}){3}|(3[4,7])\ d{2}-?\s?\d{6}-?\s?\d{5}$)+$/",$valor))
                $this->tarjeta = trim($valor);
            else{
            $this->tarjeta = "";
            $this->errores[] = "El Numero de la tarjeta: (".$valor.") no es válido, por favor verifique";
            echo "El Número de la tarjeta: (".$valor.") no es válido, por favor verifique";
            }
    }
     
}


?>