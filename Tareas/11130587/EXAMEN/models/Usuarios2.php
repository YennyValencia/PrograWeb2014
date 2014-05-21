<?php

class Usuarios2 extends Modelo{
public $nombre_tabla = 'expresiones';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'curp'=>array(),
        'telefono'=>array(),
        'tarjeta'=>array(),
        'fecha'=>array(),
        'hora'=>array()
    );
    
    public $errores = array( );
    
    private $nombre;
    private $curp;
    private $telefono;
    private $tarjeta;
    private $fecha;
    private $hora;
    
    function Usuarios2(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }

    public function set_nombre($valor){
        
 $er = new ER();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "El nombre: (".$valor.") no es no es válido)";
            echo "El nombre: (".$valor.") no es válido";
        }

        $rs = $this->consulta_sql("select * from expresiones where nombre = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "El nombre: (".$valor.") ya esta registrado"; 
            echo "El nombre: (".$valor.") ya esta registrado"; 
        }else{
            $this->nombre = trim($valor);
        }
    } 

    public function get_nombre(){
        return $this->nombre;
    }

       public function set_curp($valor){
        
 $er = new ER();
        
        if ( !$er->valida_curp($valor) ){
            $this->errores[] = "El curp: (".$valor.") no es no es válido)";
            echo "El curp: (".$valor.") no es válido";
        }

        $rs = $this->consulta_sql("select * from expresiones where curp = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "El curp: (".$valor.") ya esta registrado"; 
            echo "El curp: (".$valor.") ya esta registrado"; 
        }else{
            $this->curp = trim($valor);
        }
    } 

    public function get_curp(){
        return $this->curp;
    }

        public function set_telefono($valor){
        
 $er = new ER();
        
        if ( !$er->valida_telefono($valor) ){
            $this->errores[] = "El Télefono: (".$valor.") no es válido, por favor verifique";
            echo "El Télefono: (".$valor.") no es válido, por favor verifique";
        }
        else {
        $rs = $this->consulta_sql("select * from expresiones where telefono = '$valor'");
        $rows = $rs->GetArray();
            $this->telefono= trim($valor);

        }
    } 

    public function get_telefono(){
        return $this->telefono;
    }

    public function set_tarjeta($valor){
        
 $er = new ER();
        
        if ( !$er->valida_tarjeta($valor) ){
            $this->errores[] = "El Número de la tarjeta: (".$valor.") no es válido, por favor verifique";
            echo "El Número de la tarjeta: (".$valor.") no es válido, por favor verifique";
        }
        else {
        $rs = $this->consulta_sql("select * from expresiones where tarjeta = '$valor'");
        $rows = $rs->GetArray();
            $this->tarjeta= trim($valor);

        }
    } 

    public function get_tarjeta(){
        return $this->tarjeta;
    }

    public function set_fecha($valor){
        
 $er = new ER();
        
        if ( !$er->valida_fecha($valor) ){
            $this->errores[] = "La fecha: (".$valor.") no es válida, por favor verifique (formato dd/mm/aaaa)";
            echo "La fecha: (".$valor.") no es válida, por favor verifique (formato dd/mm/aaaa)";
        }
        else {
        $rs = $this->consulta_sql("select * from expresiones where fecha = '$valor'");
        $rows = $rs->GetArray();
            $this->fecha= trim($valor);

        }
    } 

    public function get_fecha(){
        return $this->fecha;
    }

        public function set_hora($valor){
        
 $er = new ER();
        
        if ( !$er->valida_hora($valor) ){
            $this->errores[] = "La hora: (".$valor.") no es válida, por favor verifique (formato hh:mm)";
            echo "La hora: (".$valor.") no es válida, por favor verifique (formato hh:mm)";
        }
        else {
        $rs = $this->consulta_sql("select * from expresiones where hora = '$valor'");
        $rows = $rs->GetArray();
            $this->hora= trim($valor);

        }
    } 

    public function get_hora(){
        return $this->hora;
    }


}
?>