<?php
	require_once 'config/dbconfig.php';
	
	class db {

	public function readdb($value) {
		// model：dbからの読み込み文のみ記述する。繰り返しは、controllerで。
		$mysqli = new mysqli(HOST,USER,PASS,DBNAME);
		if ($mysqli->connect_errno) {
			printf("Connect failed: %s\n",$mysqli->connect_error);
			exit();
		}
		
		if () {
		
		}
		return 
	}

	public function writedb($value) {
		
	}
	
	public function update($value) {
	
	}
	
}