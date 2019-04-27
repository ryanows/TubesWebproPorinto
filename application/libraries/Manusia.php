<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed'));

	/**
	* 
	*/
	class Manusia
	{
		private $nama;
		private $username;
		private $password;
		function __construct($nama, $username, $password)
		{
			$this->nama = $nama;
			$this->username = $username;
			$this->password = $password;
		}

		function getName() {
			return $this->name;
		}

		function getUsername() {
			return $this->username;
		}

		function getPassword() {
			return $this->password;
		}

		function setName() {
			return $this->name;
		}

		function setUsername($username) {
			$this->username = $username;
		}

		function setName($name) {
			$this->name = $name;
		}

		function setPassword($password) {
			$this->password = $password;
		}

		function getArray() {
			return array(
				'name' => $this->name,
				'username' => $this->username,
				'password' => $this->password
			);
		}
	}