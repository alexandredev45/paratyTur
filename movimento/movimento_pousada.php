<?php

include_once "../classes/conexao.php";

$credito = "null";
$valor_total = "null";
$desconto = "null";

$nome_responsavel       = $_POST['nome_responsavel'];
$nome_fantasia          = $_POST['nome_fantasia'];
$cnpj                   = $_POST['cnpj'];
$email                  = $_POST['email'];
$telefone               = $_POST['telefone'];
$rua                    = $_POST['rua'];
$bairro                 = $_POST['bairro'];
$cidade                 = $_POST['cidade'];
$estado                 = $_POST['estado'];
$credito                = $_POST['credito'];
$valor_total            = $_POST['valor_total'];
$desconto               = $_POST['desconto'];

try{    
$coman1do = $conexao->prepare('INSERT INTO pousada (nome_responsavel, nome_fantasia, cnpj, email, telefone, rua, bairro, cidade, estado, credito, valor_total, desconto) 
VALUES (:nome_responsavel, :nome_fantasia, :cnpj, :email, :telefone, :rua, :bairro, :cidade, :estado, :credito, valor_total, :desconto)');
$comando->execute(array(
':nome_responsavel'          => $nome_responsavel,
':nome_fantasia'             => $nome_fantasia,
':cnpj'                      => $cnpj,
':email'                     => $email,
':telefone'                  => $telefone,
':rua '                      => $rua,
':bairro'                    => $bairro,
':cidade'                    => $cidade,
':estado'                    => $estado,
':credito'                   => $credito,
':valor_total'               => $valor_total,
':desconto'                  => $desconto
));
}

catch(PDOException $e) {
echo 'Error: ' . $e->getMessage();
}

$cont = $comando->rowCount();

if($cont == 1){
  //header("Location:cadastro_produto.html");
  echo '<script>Alert(Pousada registrada com sucesso.);</script>'; //colocar alert no  js
 }else{
  echo '<script>Alert(Erro ao registrar pousada.);</script>';
}

//select

//update

//delete

?>