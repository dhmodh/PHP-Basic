<?php

class Person {
	private $name;
	private $eyeColor;
	private $age;

	public static drinkingAge = 21;

	public function __construct($name, $eyeColor, $age) {
		$this->name = $name;
		$this->eyeColor = $eyeColor;
		$this->age = $age;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public static function setdrinkingAge($newDA) {
		self::$drinkingAge = $newDA;
	}
}

