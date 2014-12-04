<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Product extends Controller {

	private $productManager;
	

	function before()
	{
		parent::before();
		$this->productManager = new Model_ProductManager();
	}


	public function action_index()
	{
		session_start();
		$products = $this->productManager->getlatestproduct(0,6); //0 et 6 valeurs
		
		$view = View::Factory("product");
		$view->products=$products;
		$this->response->body($view);
		
	}

	public function action_detail()
	{
		session_start();
		$id = $this->request->param('id');
		$product = $this->productManager->getProduct($id);
		
		$view = View::Factory("productdetail");
		$view->product=$product;
		$this->response->body($view);
	}

	public function action_addproduct()
	{
		session_start();
		
		$view = View::Factory("addproduct");
		$this->response->body($view);
	}
		
} // End Welcome
