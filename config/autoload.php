<?php

require 'banco.php';
require 'iniset.php';

function __autoload($nomeClasse){
	$nomeClasse = str_replace('\\','/',$nomeClasse);
	$nomeClasse = $nomeClasse.'.php';
	require_once $nomeClasse;

}

?> 
