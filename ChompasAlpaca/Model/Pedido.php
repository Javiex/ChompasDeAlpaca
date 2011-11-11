<?php


class Pedido {
   private $_id;
   private $_fecha;
   private $_cantidad;// simepre va ser 1 paquete
   private $_insumo;
   private $_chompa;// para poder mostrar los pedidos por tipo de chompa...xD
   
   public function __construct($id,$fecha,$cantidad = '1', $insumo ,$chompa) {
       $this->_id = $id;
       $this->_fecha = $fecha;
       $this->_cantidad = $cantidad;
       $this->_insumo = $insumo;
       $this->_chompa = $chompa;
   }
   
   
   
}

?>
