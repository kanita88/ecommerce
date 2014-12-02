<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller {


	public function action_login()
	{
		if (!empty($_POST))
		{
			$userManager = new Model_UserManager();
			$user = $userManager->userExits($_POST['emailOrName'], $_POST['password']);
			if ($user)
			{
				session_start();
				$_SESSION['name'] = $user['name'];
				$_SESSION['email'] = $user['email'];
				$_SESSION['id'] = $user['id'];

			}
			$this->redirect('/');
		}
		else
		{
			$view=View::Factory("login");
			$this->response->body($view);
		}

	}

	public function action_logout()
	{
		session_start();
		session_destroy();
		$this->redirect('/');
	}

	public function action_register()
	{
		if (!empty($_POST))
		{
			$userManager = new Model_UserManager();
			$userManager->createUser($_POST['name'],$_POST['firstname'],$_POST['email'],password_hash ($_POST['password'], PASSWORD_DEFAULT));

			$this->redirect('user/login');
		}
		else
		{
			$view=View::Factory("register");
			$this->response->body($view);
		}

	}

} // End Welcome
