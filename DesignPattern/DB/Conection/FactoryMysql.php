<?php
require 'DesignPattern/DB/MysqlConnectorConfig.php';
require 'DesignPattern/DB/PDOConnector.php';

class FactoryMysql {
	public function __construct() {
	}
	
	public function criarInstancia() {
		
		return new PDOConnector ( 
				new MySQLConnectorConfig ( 'desenhandoweb.com.br', 'diego_desenhandoweb', 'diego_1', 'olnrtvu2t' ) );
// 				new MySQLConnectorConfig ( 'localhost', 'diego_desenhandoweb', 'root', 'olnrtvu2t' ) );
	}
}

?>