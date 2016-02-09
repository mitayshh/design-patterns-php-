<?php
class singleton
{
	private static $instance;

	private function __clone()
	{

	}

	private function __construct()
	{

	}
	public static function getinstance()
	{
		if($instance === null)
		{
			$instance = new singleton();
		}
		return $instance;
	}
}
$first = singleton::getinstance();
var_dump($first);

?>