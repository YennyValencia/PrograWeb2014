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
        
        $rs = $this->consulta_sql("select * from usuarios where email = '$valor'");
        $rows = $rs->GetArray();
        
        if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$valor) &&  (count($rows) <= 0))
                $this->email = trim($valor);
            else{
            $this->email = "";
            $this->errores[] = "El e-mail: (".$valor.") no es válido o ya esta registrado";
            echo "El e-mail: (".$valor.") no es válido o ya esta registrado";
            }
    } 

    public function get_email(){
        return $this->email;
    }

    public function set_username($valor){
        
        $rs = $this->consulta_sql("select * from usuarios where username = '$valor'");
        $rows = $rs->GetArray();
        
        if(preg_match("/^([a-zA-Z0-9])+$/",$valor) &&  (count($rows) <= 0))
                $this->username = trim($valor);
            else{
            $this->username = "";
            $this->errores[] = "El username: (".$valor.") no es válido o ya esta registrado";
            echo "El username: (".$valor.") no es válido o ya esta registrado";
            }
    }

    public function get_username(){
        return $this->username;
    } 
    

    public function get_password(){
        return $this->password;
    } 
    public function set_password($valor){
        $rs = $this->consulta_sql("select * from usuarios where password = '$valor'");
        $rows = $rs->GetArray();

        if(preg_match("/^([A-Za-z0-9_+,.:.,=?();!#$%&*<>-])+$/",$valor))
        {
          $this->password = trim($valor);
        }
            else{
           $this->password = "";
           $this->errores[] = "El password: (".$valor.") no es válido, contiene comillas o diagonales";
           echo "El password: (".$valor.") no es válido, contiene comillas o diagonales";
            }
    }
    
    public function get_rfc(){
        return $this->rfc;
    } 
    public function set_rfc($valor){
        $rs = $this->consulta_sql("select * from usuarios where rfc = '$valor'");
        $rows = $rs->GetArray();
        
        if(preg_match("/^([A-Z,Ñ,&]{3,4}[0-9]{2}[0-1][0-9][0-3][0-9][A-Z,0-9]?[A-Z,0-9]?[0-9,A-Z]?)+$/",$valor))
                $this->rfc = trim($valor);
            else{
            $this->rfc = "";
            $this->errores[] = "El RFC: (".$valor.") no es válido, por favor verifique";
            echo "El RFC: (".$valor.") no es válido, por favor verifique";
            }
    }

    public function get_cp(){
        return $this->cp;
    } 
    public function set_cp($valor){
        $rs = $this->consulta_sql("select * from usuarios where cp = '$valor'");
        $rows = $rs->GetArray();
        
        if(preg_match("/^(^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$)+$/",$valor))
                $this->cp = trim($valor);
            else{
            $this->cp = "";
            $this->errores[] = "El Código Postal: (".$valor.") no es válido, por favor verifique";
            echo "El Código Postal: (".$valor.") no es válido, por favor verifique";
            }
    } 
        
}

?>