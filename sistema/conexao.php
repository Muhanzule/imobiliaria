<?php 
//date_default_timezone_get('Africa/mozambique');

$nome_site = 'IMOBILIARIA';

//Conexao local
$usuario = 'root';
$senha = '';
$banco = 'imobiliaria';
$servidor = 'localhost';


try {
	$pdo = new PDO("mysql:dbname=$banco;host=$servidor", "$usuario", "$senha");
	
} catch (Exception $e) {
	echo 'Erro ao  tentar se Conectar a Base de dados! <br><br>';
	echo $e;
	
}

?>