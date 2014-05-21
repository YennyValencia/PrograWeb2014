<?php

class Usuarios extends Modelo{
    public $nombre_tabla = 'usuarios';
    
    
    public $atributos = array(
        'email'=>array(),
        'username'=>array(),
        'password'=>array(),
        'rfc'=>array(),
        'cp'=>array()
    );
    
    public $errores = array( );
    
    private $email;
    private $username;
    private $password;
    private $rfc;
    private $cp;
    
    function Usuarios(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }

     public function set_email($valor){
        
 $er = new ER();
        
        if ( !$er->valida_email($valor) ){
            $this->errores[] = "El e-mai: (".$valor.") no es no es válido)";
            echo "El e-mail: (".$valor.") no es válido";
        }

        $rs = $this->consulta_sql("select * from usuarios where email = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "El e-mail (".$valor.") ya esta registrado"; 
            echo "El e-mail (".$valor.") ya esta registrado"; 
        }else{
            $this->email = trim($valor);
        }
    } 

    public function get_email(){
        return $this->email;
    }

     public function set_username($valor){
        
 $er = new ER();
        
        if ( !$er->valida_username($valor) ){
            $this->errores[] = "El username: (".$valor.") no es no es válido)";
            echo "El username: (".$valor.") no es válido";
        }

        $rs = $this->consulta_sql("select * from usuarios where username = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "El e-mail (".$valor.") ya esta registrado"; 
            echo "El username (".$valor.") ya esta registrado"; 
        }else{
            $this->username = trim($valor);
        }
    } 

    public function get_username(){
        return $this->username;
    }

    public function set_password($valor){
        
 $er = new ER();
        
        if ( !$er->valida_password($valor) ){
            $this->errores[] = "El password: (".$valor.") no es no es válido, contiene comillas o diagonales";
            echo "El password: (".$valor.") no es válido, contiene comillas o diagonales";
        }
        else {
        $rs = $this->consulta_sql("select * from usuarios where password = '$valor'");
        $rows = $rs->GetArray();
            $this->password = trim($valor);

        }
    } 

    public function get_password(){
        return $this->password;
    }

        public function set_rfc($valor){
        
 $er = new ER();
        
        if ( !$er->valida_rfc($valor) ){
            $this->errores[] = "El RFC: (".$valor.") no es válido, por favor verifique";
            echo "El RFC: (".$valor.") no es válido, por favor verifique";
        }
        else {
        $rs = $this->consulta_sql("select * from usuarios where rfc = '$valor'");
        $rows = $rs->GetArray();
            $this->rfc= trim($valor);

        }
    } 

    public function get_rfc(){
        return $this->rfc;
    }

    public function set_cp($valor){
        
 $er = new ER();
        
        if ( !$er->valida_cp($valor) ){
            $this->errores[] = "El Código Postal: (".$valor.") no es válido, por favor verifique";
            echo "El Código Postal: (".$valor.") no es válido, por favor verifique";
        }
        else {
        $rs = $this->consulta_sql("select * from usuarios where cp = '$valor'");
        $rows = $rs->GetArray();
            $this->cp= trim($valor);

        }
    } 

    public function get_cp(){
        return $this->cp;
    }

  
 }
 ?>