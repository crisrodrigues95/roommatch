<?php
 require("conexao.php");


 $nome_completo = $_POST["nome"];
 $telefone = $_POST["telefone"];    
 $cpf = $_POST["cpf"];
 $senha = $_POST["password"];
 $data_nascimento  = $_POST["date"];
 $sexo = $_POST["sexo"];
 $fumante =  $_POST["fumante"];
 $pet = $_POST["pet"];
 $quant_pet = $_POST["qpet"];
 $vegano = $_POST["vegano"];
 $vegetariano  = $_POST["vegetariano"];
 $faculdade = $_POST["faculdade"];
 $trabalho = $_POST["trabalho"];
 $tem_carro = $_POST["carro"];
 $tem_vel = $_POST["moto"];
 $cozinha = $_POST["cozinha"];
 $email = $_POST["email"];
 
 
 
 
 
 $stmt = mysqli_prepare($mysqli, "INSERT INTO locadores (nome_completo, cpf, telefone, email, senha, data_nascimento, sexo, fumante, pet, quant_pet, vegano, vegetariano, faculdade, trabalho, tem_carro, tem_vel, cozinha) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
 
 mysqli_stmt_bind_param($stmt, "sssssssiiiiissiii", $pnome_completo, $pcpf, $ptelefone, $pemail, $psenha, $pdata_nascimento, $psexo, $pfumante, $ppet, $pquant_pet, $pvegano, $pvegetariano, $pfaculdade, $ptrabalho, $ptem_carro, $ptem_vel, $pcozinha);
 
 
 
 
 $pnome_completo = $nome_completo;
 $ptelefone = $telefone ;
 $pcpf = $cpf ;
 $psenha = $senha;
 $pdata_nascimento = $data_nascimento;
 $psexo = $sexo;
 $pfumante = $fumante ;
 $ppet = $pet;
 $pquant_pet = $quant_pet;
 $pvegano = $vegano;
 $pvegetariano  = $vegetariano;
 $pfaculdade = $faculdade;
 $ptrabalho = $trabalho;
 $ptem_carro = $tem_carro;
 $ptem_vel = $tem_vel;
 $pcozinha = $cozinha;
 $pemail   = $email;
 
 
 /* Execute the statement */
 mysqli_stmt_execute($stmt);

$last_id = mysqli_insert_id($mysqli);

header('location: ../Cadastro imovel/index.php?id='.$last_id);




 
?>