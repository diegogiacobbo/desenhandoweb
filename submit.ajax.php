<?php
require 'DesignPattern/Model/DAO/MensagemDAO.php';
require 'DesignPattern/Model/Mensagem.php';

$mensagemDao = new MensagemDAO ();
$mensagem = new Mensagem ( isset ( $_POST ['email'] ) ? $_POST ['email'] : null, isset ( $_POST ['nome'] ) ? $_POST ['nome'] : null, isset ( $_POST ['skype'] ) ? $_POST ['skype'] : null );

$mensagemDao->insert ( $mensagem );

echo "Entraremos em contato em breve!"
?>