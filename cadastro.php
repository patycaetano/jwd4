<?php
$conexao = mysqli_connect("localhost","root","","seriecadastro");
$titulo = $_POST['titulo'];
$atrizprincipal = $_POST['atrizprincipal'];
$atorprincipal = $_POST['atorprincipal'];
$qtdtemporadas = $_POST['qtdtemporadas'];
$totalepisodios = $_POST['totalepisodios'];
$sinopse = $_POST['sinopse'];

$sql_inserir = "insert into cadastrarserie(titulo,atrizprincipal,atorprincipal,qtdtemporadas,totalepisodios,sinopse) values ('{$titulo}' , '{$atrizprincipal}' , '{$atorprincipal}' , {$qtdtemporadas} , {$totalepisodios} , '{$sinopse}' )";
mysqli_query($conexao,  $sql_inserir);
mysqli_close($conexao);
?>