<?php
class PostgreSQLConnectorConfig extends AbstractConnectorConfig{
	public function getDsn(){
		return sprintf( 'pgsql:host=%s;dbname=%s',
				$this->getHost(),
				$this->getDbname() );
	}
}
?>