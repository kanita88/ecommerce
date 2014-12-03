<?php defined('SYSPATH') or die('No direct script access.');

class Model_UserManager 
{
	private $db;

	public function __construct()
	{
		$this->db = new Helper_Database();
	}

	public function userExits($emailOrName,$password)
	{
		$users = $this->db->query('SELECT * FROM user WHERE email = ? OR name = ?', array($emailOrName, $emailOrName));
		foreach($users as $user)
		{
			if (password_verify($password, $user['password']))
				return $user;
		}
		return false;
	}

	public function getUser($id)
	{
		return $this->db->QueryOne ('SELECT * FROM user WHERE id = ?', array($id));
	}

	public function createUser($name, $firstname, $email, $password)
	{
		return $this->db->execute ("INSERT INTO user(name,firstname,email,password) values(?,?,?,?)", array($name, $firstname, $email, $password));
	}

	public function userLogged()
	{
		return isset($_SESSION['id']);
	}

	public function userAdmin()
	{
		return (isset($_SESSION['admin']) && $_SESSION['admin'] == 1);	
	}

} // End Welcome
