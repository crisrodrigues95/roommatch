<?php

    require('conexao.php'); 

    
    
 

    if(isset($_FILES['foto_perfil_quarto']) && !empty($_FILES['foto_perfil_quarto']["name"])) { /*Verifica se um arquivo foi enviado*/
        $foto = $_FILES['foto_perfil_quarto'];
    
        $pasta = "../userimages/"; /*Pasta onde os arquivos vão ser salvos*/
        $nomefoto0 = $foto['name'];
        $nomefoto = uniqid(); /*Criar um nome aleatório para o novo arquivo*/
        $extensao = strtolower(pathinfo($nomefoto0, PATHINFO_EXTENSION)); /*Extrair extensão do arquivo*/
        $caminho = $pasta . $nomefoto . "." . $extensao; /*Concatenação gerando o nome do arquivo*/
        move_uploaded_file($foto['tmp_name'], $caminho); /*Salva foto no caminho especificado*/
        $imagem2 = $caminho;
        
    }
    else {

        $imagem2 = $_POST['manter-foto'];
    }
    
    
    $tamanho = $_POST["tamanho"]; 
    $mob = $_POST["mobiliado"];
    $arc = $_POST["arcondicionado"];
    $tom = $_POST["quantidade-tomada"];
    $valor = $_POST["valor"];
    $desc = $_POST["descricao"];
    $idqu = $_POST["idqu"];
    $neg = $_POST["negociavel"];
    $disp = $_POST["disp"];


   


    $stmt = mysqli_prepare($mysqli, "UPDATE quartos SET tamanho_quarto = ?, valor = ?, mobiliado = ?, descricao = ?, quantidade_tomada = ?, arcondicionado = ?, foto_perfil_quarto = ?, negociavel = ?, disponibilidade = ? WHERE id_quarto = ?");
    
    mysqli_stmt_bind_param($stmt,"ddisiisisi", $ptamanho, $pvalor, $pmob, $pdesc, $ptom, $parc, $pimagem2, $pneg, $pdisp, $pidqu);

    $ptamanho = $tamanho;
    $pvalor = $valor;
    $pmob = $mob;
    $pdesc = $desc; 
    $ptom = $tom;
    $parc = $arc; 
    $pidqu = $idqu; 
    $pimagem2 = $imagem2;
    $pneg = $neg;
    $pdisp = $disp;




    /* Execute the statement */

    mysqli_stmt_execute($stmt);
    



    header('location: ../feed/index-loc.php');
?>