<?php
require("conexao.php");

/*Coletar caminho da imagem*/

if(isset($_FILES['foto_perfil_imovel'])) { /*Verifica se um arquivo foi enviado*/
    $foto = $_FILES['foto_perfil_imovel'];

    $pasta = "../userimages/"; /*Pasta onde os arquivos vão ser salvos*/
    $nomefoto0 = $foto['name'];
    $nomefoto = uniqid(); /*Criar um nome aleatório para o novo arquivo*/
    $extensao = strtolower(pathinfo($nomefoto0, PATHINFO_EXTENSION)); /*Extrair extensão do arquivo*/
    $caminho = $pasta . $nomefoto . "." . $extensao; /*Concatenação gerando o nome do arquivo*/
    move_uploaded_file($foto['tmp_name'], $caminho); /*Salva foto no caminho especificado*/
    $imagem = $caminho;

    
}



$cep = $_POST["cep"];
$endereco = $_POST["endereco"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$banheiros = $_POST["banheiros"];
$tamanho_casa = $_POST["tamanho_casa"];
$apartamento_ou_casa = $_POST["apartamento_ou_casa"];
$comodos= $_POST["comodos"];
$quartos= $_POST["quartos"];
$lavanderia = $_POST["lavanderia"];
$vagas_carro = $_POST["vagas_carro"];
$internet = $_POST["internet"];
/*$imagem*/
$descricao = $_POST["descricao"];
$id_locador = intval($_POST["ide"]);
$apet = $_POST["apet"];












$stmt = mysqli_prepare($mysqli, "INSERT INTO estabelecimentos (CEP, endereco, complemento, bairro, cidade, estado, quartos, tamanho_casa, descricao, ap_ou_casa, vagas_carro, comodos, banheiros, lavanderia, internet, id_locador, foto_perfil_casa, apet) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
 
mysqli_stmt_bind_param($stmt,"ssssssidsiiiiiiisi", $pcep, $pendereco, $pcomplemento, $pbairro, $pcidade, $pestado, $pquartos, $ptamanho_casa, $pdescricao, $papartamento_ou_casa, $pvagas_carro, $pcomodos, $pbanheiros, $plavanderia, $pinternet, $pidl, $pfoto, $papet);

$pcep = $cep;
$pendereco = $endereco;
$pcomplemento = $complemento;
$pbairro = $bairro;
$pcidade = $cidade;
$pestado = $estado;
$pquartos = $quartos;
$ptamanho_casa = $tamanho_casa;
$pdescricao = $descricao;
$papartamento_ou_casa = $apartamento_ou_casa;
$pvagas_carro = $vagas_carro;
$pcomodos = $comodos;
$pbanheiros = $banheiros;
$plavanderia = $lavanderia;
$pinternet = $internet;
$pidl = $id_locador;
$pfoto = $imagem;
$papet = $apet;

/* Execute the statement */

mysqli_stmt_execute($stmt);

$last_id2 = mysqli_insert_id($mysqli);

header('location: ../Cadastro quarto/index.php?id2='.$last_id2);








?>