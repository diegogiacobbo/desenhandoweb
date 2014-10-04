<?php
require 'DesignPattern/DB/Conection/FactoryMysql.php';

class MensagemDAO {
	private $instance;
	public function __construct() {
		$this->instance = new FactoryMysql();
	}
	private function __clone() {
	}
	public function __destruct() {
		foreach ( $this as $key => $value ) {
			unset ( $this->$key );
		}
		foreach ( array_keys ( get_defined_vars () ) as $var ) {
			unset ( ${"$var"} );
		}
		unset ( $var );
	}
	public function load() {
		return $this->instance->criarInstancia()->getConnection()->query("SELECT * FROM Mensagem")->fetchAll(); //( PDO::FETCH_CLASS, "Mensagem" );
	}
	public function insert(Mensagem $mensagem) {
		$sql = $this->instance->criarInstancia()->getConnection()->prepare('INSERT INTO Mensagem (id, email, texto, skype) VALUES ("", :email, :texto, :skype)');
		$sql->bindValue (':email', $mensagem->getEmail());
		$sql->bindValue (':texto', $mensagem->getTexto());
		$sql->bindValue (':skype', $mensagem->getSkype());
		if ($sql->execute()) {
			return true;
		} else {
			echo $sql->errorCode();
		}
	}
	public function delete() {
		$sql = $this->instance->criarInstancia()->getConnection()->lastInsertId();
	}
}
?>