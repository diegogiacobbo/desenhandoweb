<?php
class FactoryPostgreSQL extends MySQLConnectorConfig {
	public function __construct() {
		parent::__construct ();
	}
	public function criarInstancia() {
		return new PDOConnector ( 
				new MySQLConnectorConfig ( 'localhost', 'diego_DesenhandoWeb', 'root', 'olnrtvu2t' ) );
	}
}
?>