<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		session_start();
		$view=View::Factory("index");
		$this->response->body($view);
	}

} // End Welcome
