<?php
require 'DesignPattern/DB/AbstractConnectorConfig.php';

class MySQLConnectorConfig extends AbstractConnectorConfig{
	public function getDsn(){
		return sprintf( 'mysql:host=%s;dbname=%s',
				$this->getHost(),
				$this->getDbname() );
	}
}
?>