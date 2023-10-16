<?php
include_once('conexao.php');
$cpf=$_POST['cpf'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=hash("sha256",$_POST['senha']);
$telefone=$_POST['telefone'];
$confirmaSenha=hash("sha256",$_POST['confirmasenha']);

if($senha==$confirmaSenha){

try{
//somente usaremos 'prepare' na insercao de dados e na atualizacao de dados
    $inserir=$conexao->prepare('INSERT INTO clientes (cpf,nome,email,senha,telefone) VALUES (:cpf,:nome,:email,:senha,:telefone)');
$inserir->execute(
    [
        ':cpf' => $cpf,
        ':nome' => $nome,
        ':email' => $email,
        ':senha' => $senha,
        ':telefone' => $telefone
    ]
);
echo $inserir->rowCount();
}catch(PDOException $erro){
echo $erro->getMessage();
}
}else{
    //redireciona o usuario para uma pagina escolhida
    header('location:index.php');
}
?>