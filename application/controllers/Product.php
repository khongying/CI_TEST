<?php
/**
* 
*/
class Product extends CI_Controller
{
	
	function __construct()
	{
		 parent::__construct();
		 $this->load->model('Product_model');
	}

	public function index()
	{
		echo "Hi";
	}
	
	public function getdata()
	{
		$data['res'] = $this->Product_model->get_user();
		$this->load->view('product/index',$data);

	}
}