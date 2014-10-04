<?php
require 'DesignPattern/DB/Connector.php';

class PDOConnector implements Connector {
	private $instance;
	public function __construct(AbstractConnectorConfig $connectorConfig) {
		$this->connect ( $connectorConfig );
	}
	public function connect(AbstractConnectorConfig $connectorConfig) {
		if (! $this->isConnected ()) {
			$this->instance = new PDO ( $connectorConfig->getDsn (), $connectorConfig->getUser (), $connectorConfig->getPassword () );
			$this->instance->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		}
	}
	public function disconnect() {
		if ($this->isConnected ()) {
			$this->instance = null;
		}
	}
	public function isConnected() {
		return ($this->instance instanceof PDO);
	}
	public function getConnection() {
		return $this->instance;
	}
}
?>