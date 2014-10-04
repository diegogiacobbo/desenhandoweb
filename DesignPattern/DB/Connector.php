<?php
interface Connector{
	public function connect( AbstractConnectorConfig $connectorConfig );
	public function disconnect();
	public function isConnected();
	public function getConnection();
}
?>