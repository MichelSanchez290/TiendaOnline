<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class prueba_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getProducto($id=0){
		if ($id>0){
			$sql = "SELECT * FROM `productos` WHERE id_producto = $id";
		}else{
			$sql = "SELECT * FROM `productos`";	
		}
		$resultado = $this->db->query($sql);
		if ($resultado->num_rows()>0){
			return $resultado;
		}else{
			return false;
		}
	}
}