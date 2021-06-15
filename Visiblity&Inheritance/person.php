<?php

class Person {
	private $first = "DMX";
	private $last = "Modh";
	private $age = "20";

	//Access the private variable 
	/*public function owner() { 
		$a = $this->first;
		return $a;
	}*/
}

class Pet extends Person {
	public function owner() {
		$a = $this->first;

		return $a;
	}
}

?>

