<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Fulano da Silva");
$cad->setEmail("fulano@gmail.com");
$cad->setSenha("123456");

echo ("$cad <br>"); //será mostrado o cadastro em função do método mágico __tostring

$cad->registrarVenda();
