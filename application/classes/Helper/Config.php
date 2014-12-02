<?php
class Helper_Config
{
	private $data;

	public function __construct($filename)
	{
		if (file_exists($filename))
			$this->data = parse_ini_file($filename, true);
		else
			throw new Exception('Config ini file not found : '.$filename, 1);
	}

	public function get($name, $section = false)
	{
		if (!$section && isset($this->data[$name]))
			return $this->data[$name];
		else if (isset($this->data[$section]) && isset($this->data[$section][$name]))
			return $this->data[$section][$name];
		return null;
	}
}