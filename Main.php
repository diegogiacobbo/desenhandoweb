<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

include 'DesignPattern/Model/DAO/MensagemDAO.php';
include 'DesignPattern/Model/Mensagem.php';
	
$mensagemDao = new MensagemDAO();
var_dump("teste");
$mensagem = new Mensagem("Camila@camidesenhando.com.br","olaaaa2","camilabeatrici");

$rs = $mensagemDao->insert($mensagem);
var_dump($rs);

?>