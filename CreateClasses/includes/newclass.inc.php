<?php

class NewClass {

	//Properties and Methods goes here
	public $data = "This is some info";

	public function __construct() {
		echo "This class has instantiated <br>";
	}

	public function setNewProperty($newdata) {
		$this->data = $newdata;
	}

	public function getProperty() {
		return $this->data;
	}

	public function __destruct() {
		echo "<br> This is the end of the class!!!";
	}
	

}


