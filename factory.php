<?php
class apple
{
	private $brand;
	private $OS="OSX";

	public function __construct($passedbrand)
	{
		$this->brand=$passedbrand;
	}

	public function getos()
	{
		return $this->brand . ' runs ' .$this->OS;
	}
}

class windows
{
	private $brand;
	private $OS="Windows";

	public function __construct($passedbrand)
	{
		$this->brand=$passedbrand;
	}

	public function getos()
	{
		return $this->brand . ' runs ' .$this->OS;
	}
}

class brandfactory
{
	public static function create($givenbrand)
	{
		if ($givenbrand==apple)
		{
			return new apple($givenbrand);
		}
		else
		{
			return new windows($givenbrand);
		}
	}
}

$providedbrand = brandfactory::create("windows");

print_r($providedbrand->getos());

?>