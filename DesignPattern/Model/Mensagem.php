<?php
class Mensagem {
	private $id;
	private $email;
	private $texto;
	private $skype;

	public function __construct($email, $texto, $skype) {
		$this->id = "";
		$this->email = $email;
		$this->texto = $texto;
		$this->skype = $skype;
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	public function getTexto() {
		return $this->texto;
	}
	public function setTexto($texto) {
		$this->texto = $texto;
	}
	public function getSkype() {
		return $this->skype;
	}
	public function setSkype($skype) {
		$this->skype = $skype;
	}
}