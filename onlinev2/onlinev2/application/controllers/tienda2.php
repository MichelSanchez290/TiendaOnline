<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tienda2 extends CI_Controller {

	
	
    public function __construct(){
		parent::__construct();
		$this->load->model('prueba_model');
		$this->load->helper('url');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('tienda/index_view');
	}
	public function vendido()
	{
		$this->load->view('tienda/masvendido_view');
	}
	public function nuevos()
	{
		$this->load->view('tienda/nuevos_view');
	}
	public function laptos()
	{
		$this->load->view('tienda/laptos_view');
	}
	public function celulares()
	{
		$this->load->view('tienda/celulares_view');
	}
	public function login()
	{
		$this->load->view('tienda/login_view');
	}
	public function registro()
	{
		$this->load->view('tienda/registro_view');
	}
	public function agregar()
	{
		$this->load->view('tienda/agregar_view');
	}
    public function registro2(){
       
		$productos = $this->prueba_model->getProducto();
		$data = array('productos'=>$productos);
		$this->load->view('tienda/registro2_view', $data);
	}
}

	

