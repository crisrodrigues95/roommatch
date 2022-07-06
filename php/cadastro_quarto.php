<?php
require("conexao.php");

/*Coletar caminho da imagem*/

if(isset($_FILES['foto_perfil_quarto'])) { /*Verifica se um arquivo foi enviado*/
    $foto = $_FILES['foto_perfil_quarto'];

    $pasta = "../userimages/"; /*Pasta onde os arquivos vão ser salvos*/
    $nomefoto0 = $foto['name'];
    $nomefoto = uniqid(); /*Criar um nome aleatório para o novo arquivo*/
    $extensao = strtolower(pathinfo($nomefoto0, PATHINFO_EXTENSION)); /*Extrair extensão do arquivo*/
    $caminho = $pasta . $nomefoto . "." . $extensao; /*Concatenação gerando o nome do arquivo*/
    move_uploaded_file($foto['tmp_name'], $caminho); /*Salva foto no caminho especificado*/
    $imagem2 = $caminho;

    
}



$tamanho = $_POST["tamanho"]; 
$mob = $_POST["mobiliado"];
$arc = $_POST["arcondicionado"];
$tom = $_POST["quantidade-tomada"];
$valor = $_POST["valor"];
$desc = $_POST["descricao"];
$id2 = $_POST["ide2"];
$neg = $_POST["negociavel"];
/*imagem*/










$stmt = mysqli_prepare($mysqli, "INSERT INTO quartos (tamanho_quarto, valor, mobiliado, descricao, quantidade_tomada, arcondicionado, id_estab, foto_perfil_quarto, negociavel ) VALUES (?,?,?,?,?,?,?,?,?)");
 
mysqli_stmt_bind_param($stmt,"ddisiiisi", $ptamanho, $pvalor, $pmob, $pdesc, $ptom, $parc, $pid2, $pimagem2, $pneg);

$ptamanho = $tamanho;
$pvalor = $valor;
$pmob = $mob;
$pdesc = $desc; 
$ptom = $tom;
$parc = $arc; 
$pid2 = $id2; 
$pimagem2 = $imagem2;
$pneg = $neg;




/* Execute the statement */

mysqli_stmt_execute($stmt);


header('location: ../index.php');








?>