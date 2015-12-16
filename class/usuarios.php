<?php

include 'database.php';

class Usuarios extends DataBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function buscar($usuario){
        $datos = array();
        $sth = $this->prepare('SELECT * FROM users '
                . 'WHERE naUser LIKE "%'.$usuario.'%" ');
        $sth->execute();
        $result = $sth->fetchAll();
        
        foreach ($result as $key => $value) {
            $datos[] = array("value" => $value['naUser'],
                "idUsuario" => $value['idUser']);
        }
        
        return $datos;
        
    }
    
}