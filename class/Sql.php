<?php

class Sql extends PDO {

private $conn;

public function __construct() {

	$this -> conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "");

}

private function setParams($statement, $parameters = array()) {

	foreach ($parameters as $Key => $value) {

		$this->setParam ($statement, $Key, $value);
	}
}

private function setParam($statement, $Key, $value) {

	$statement -> bindParam($Key, $value);
}

public function query($rawQuery, $params = array()) {

	$stmt = $this->conn -> prepare($rawQuery);

	$this->setParams($stmt, $params);

	$stmt -> execute();

	return $stmt;
}

public function select($rawQuery, $params = array()):array {

	$stmt = $this->query($rawQuery, $params);

	return $stmt -> fetchALL(PDO::FETCH_ASSOC);
}

}

?>