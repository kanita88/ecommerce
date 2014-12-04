<?php defined('SYSPATH') or die('No direct script access.');

class Model_ProductManager 
{
	private $db;

	public function __construct()
	{
		$this->db = new Helper_Database();
	}

	public function getProduct($id)
	{
		$product=$this->db->QueryOne ('SELECT * FROM product WHERE id = ?', array($id));

		return $product;
	}

	public function createProduct($name, $quantity, $description, $price)
	{
		return $this->db->execute ("INSERT INTO product(name,quantity,description,price) values(?,?,?,?)", array($name, $quantity, $description, $price));
	}

	public function getlatestproduct($offset=0, $number=6)
	{
		$product=$this->db->query('SELECT * FROM product ORDER BY date_create DESC LIMIT '.$offset.','.$number);

		return $product;
	}


} // End Welcome
