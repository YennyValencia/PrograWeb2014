<?php

class Compras extends Modelo{
    public $nombre_tabla = 'compras';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'sexo'=>array(),
        'fecha'=>array(),
        'email'=>array(),
        'pais'=>array(),
        'estado'=>array(),
        'ciudad'=>array(),
        'cp'=>array(),
        'telefono'=>array()
    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellido;
    private $sexo;
    private $fecha;
    private $email;
    private $pais;
    private $estado;
    private $ciudad;
    private $cp;
    private $telefono;
       
    
    function Compras(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
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

    public function get_fecha(){
        return $this->fecha;
    } 
    public function set_fecha($valor){
        $this->fecha = trim($valor);
    } 

        public function get_email(){
        return $this->email;
    } 
    public function set_email($valor){
        $this->email = trim($valor);
    } 
	
        public function get_pais(){
        return $this->pais;
    } 
    public function set_pais($valor){
        $this->pais = trim($valor);
    } 

        public function get_estado(){
        return $this->estado;
    } 
    public function set_estado($valor){
        $this->estado = trim($valor);
    } 

        public function get_ciudad(){
        return $this->ciudad;
    } 
    public function set_ciudad($valor){
        $this->ciudad = trim($valor);
    } 

        public function get_cp(){
        return $this->cp;
    } 
    public function set_cp($valor){
        $this->cp = trim($valor);
    } 

        public function get_telefono(){
        return $this->telefono;
    } 
    public function set_telefono($valor){
        $this->telefono = trim($valor);
    } 
        
}

?>