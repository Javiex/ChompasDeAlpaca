<?php


class Producto {
   private $_chompa;//nombre de la chompa
   private $_cantidad;// la cantidad actual
   private $_insumo;// el paquete de insumo
   private $_minimo;// el stock minimo de cada producto

   public function __construct($chompa,$cantidad,$insumo,$minimo) {
       $this->_chompa = $chompa;
       $this->_cantidad = $cantidad;
       $this->_insumo = $insumo;
       $this->_minimo = $minimo;
   }
   
}



?>
