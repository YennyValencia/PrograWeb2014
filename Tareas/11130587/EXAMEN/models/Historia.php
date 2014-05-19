<?php

class Historia extends Modelo{
    public $nombre_tabla = 'historia';
    
    
    public $atributos = array(
        'numero'=>array(),
        'nombre'=>array(),
        'apellido'=>array(),
        'sexo'=>array(),
        'edad'=>array(),
        'fecha'=>array(),
        'ocupacion'=>array(),
        'tipo'=>array(),
        'peso'=>array(),
        'peso'=>array(),
        'altura'=>array(),
        'enfermedades'=>array(),
        'direccion'=>array(),
        'telefono'=>array()
    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellido;
    private $sexo;
    private $edad;
    private $fecha;
    private $ocupacion;
    private $tipo;
    private $peso;
    private $altura;
    private $enfermedades;
    private $direccion;
    private $telefono;
       
    
    function Historia(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
       public function get_numero(){
        return $this->numero;
    } 
    public function set_numero($valor){
        $this->numero = trim($valor);
    } 
    public function get_nombre(){
        return $this->nombre;
    } 
    public function set_nombre($valor){
        $this->nombre = trim($valor);
    }

    public function get_apellido(){
        return $this->apellido;
    } 
    public function set_apellido($valor){
        $this->apellido = trim($valor);
    }
    
    public function get_sexo(){
        return $this->sexo;
    } 
    public function set_sexo($valor){
        $this->sexo = trim($valor);
    }

        public function get_edad(){
        return $this->edad;
    } 
    public function set_edad($valor){
        $this->edad = trim($valor);
    }

    public function get_fecha(){
        return $this->fecha;
    } 
    public function set_fecha($valor){
        $this->fecha = trim($valor);
    } 

        public function get_ocupacion(){
        return $this->ocupacion;
    } 
    public function set_ocupacion($valor){
        $this->ocupacion = trim($valor);
    } 
	
        public function get_tipo(){
        return $this->tipo;
    } 
    public function set_tipo($valor){
        $this->tipo = trim($valor);
    } 

        public function get_peso(){
        return $this->peso;
    } 
    public function set_peso($valor){
        $this->peso = trim($valor);
    } 

        public function get_altura(){
        return $this->altura;
    } 
    public function set_altura($valor){
        $this->altura = trim($valor);
    } 

        public function get_enfermedades(){
        return $this->enfermedades;
    } 
    public function set_enfermedades($valor){
        $this->enfermedades = trim($valor);
    } 

            public function get_direccion(){
        return $this->direccion;
    } 
    public function set_direccion($valor){
        $this->direccion = trim($valor);
    } 

        public function get_telefono(){
        return $this->telefono;
    } 
    public function set_telefono($valor){
        $this->telefono = trim($valor);
    } 
        
}

?>