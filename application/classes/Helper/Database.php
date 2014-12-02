<?php
class Helper_Database
{
	private $db;

	public function __construct()
	{
		$config = new Helper_Config("config.ini");

		$dbname = $config->get('name', 'database');
		$user = $config->get('user', 'database');
		$password = $config->get('password', 'database');

		$this->db = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $password);
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->db->exec("SET NAMES UTF8");
	}

	public function query($queryString, $data = array())
	{
		$query = $this->db->prepare($queryString);
		$query->execute($data);
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function queryOne($queryString, $data = array())
	{
		$query = $this->db->prepare($queryString);
		$query->execute($data);
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function execute($queryString, $data = array())
	{
		$query = $this->db->prepare($queryString);
		$query->execute($data);
		return $this->db->lastInsertId();
	}

	public function proxy($queryString)
	{
		$this->db->exec($queryString);
	}
}