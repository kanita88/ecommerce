<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Product extends Controller {

	private $productManager;
	private $userManager;
	

	function before()
	{
		parent::before();
		$this->productManager = new Model_ProductManager();
		$this->userManager = new Model_UserManager();
	}


	public function action_index()
	{
		session_start();
		$products = $this->productManager->getlatestproduct(0,6); //0 et 6 valeurs
		
		$view = View::Factory("product");
		$view->products=$products;
		$view->productManager = $this->productManager; 
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
		if(isset($_SESSION['admin'])==false || $_SESSION['admin'] !=1 )
		{
			$this->redirect('user/login');
		}
		if (isset($_POST['name']) && isset($_POST['description']))
		{
			
			$fileName = $_FILES['photo']['name'];
			$uploaddir='assets/produits/';
			move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir.$_FILES['photo']['name']);
			$product_id = $this->productManager->createProduct($_POST['name'], $_POST['categorie'], 1, $_POST['description'], $_POST['price'], $fileName);		
			$this->redirect('/product/index');	
			
		}

		$view = View::Factory("addproduct");
		$this->response->body($view);
	}

	public function action_addcart()
	{
		session_start();
		if (!isset($_SESSION["Cart"]))
		{
			$_SESSION['Cart']=array();
		}
		$id = $this->request->param('id');
		$_SESSION['Cart'][$id] = $_POST['quantity'];

		$this->redirect('/product/index');
	}

	public function action_deleteCart()
	{
		session_start();
		unset($_SESSION['Cart'][$this->request->param('id')]);

		$this->redirect('/product/index');

	}

	public function action_viewcart()
	{
		session_start();
		if (!isset($_SESSION["Cart"]))
		{
			$_SESSION['Cart']=array();
		}
		$view = View::Factory("viewcart");
		$view->products=array();
		foreach ($_SESSION['Cart'] as $id_product => $quantity)
		{
			$product=$this->productManager->getProduct($id_product);
			$product['quantity']=$quantity;
			array_push($view->products, $product);
		}
		$this->response->body($view);
		
	}

	public function action_getcategorie()
	{

	}
		
} // End Welcome
