<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persistencia
 *
 * @author Javier
 */
class Persistencia {
    
    //singlenton
    
    //fin de singlenton
    
    
    //conexion simple ... colocarle manejo de excepciones(log)
    private $cn=null;


    public function __construct() {
        $this->cn = mysql_connect('localhost','root');
        $db= mysql_select_db('chompas');
    }
    
    
}

?>
