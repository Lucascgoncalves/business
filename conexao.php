<?php 
$servidor = "localhost";
$user = "root";
$senha = "";
$nome_db = "ifbusiness";

function banco($servidor, $user, $senha, $nome_db, $sql){
    $conexao = mysqli_connect($servidor, $user, $senha, $nome_db);
    $consulta = mysqli_query($conexao, $sql);
    return $consulta;
}
?>
