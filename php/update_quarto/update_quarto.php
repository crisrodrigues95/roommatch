<?php

include('../protect2.php');


require('../conexao.php');
$idloc = $_SESSION['id_locador'];

$query = 'SELECT id_locador, id_estab, CEP, endereco, complemento, bairro, cidade, quartos, tamanho_casa, descricao, vagas_carro, comodos, banheiros, lavanderia, internet, apet, foto_perfil_casa FROM estabelecimentos WHERE id_locador = '.$idloc; 
$result = mysqli_query($mysqli, $query);

$row = mysqli_fetch_row($result);

$query2 = 'SELECT id_estab, id_quarto, tamanho_quarto, valor, descricao, quantidade_tomada, foto_perfil_quarto FROM quartos WHERE id_estab = ' .$row[1]; 
$result2 = mysqli_query($mysqli, $query2);

$row2 = mysqli_fetch_row($result2);







?>


<!doctype html>
<html>

    <head>
        <!-- Metadados -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">
        <link rel="stylesheet" href="../cs/global.css">

             <!--Scripts Jquery para máscaras-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


        <!-- Título da página (aparece na aba) -->
        <title>Cadastro de Quarto</title>
    </head>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <!-- <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <!-- <li class="nav-item"><a class="nav-link" href="locador.html">Cadastro Locador</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="../../index.php">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../feed/index-loc.php">Voltar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
                    <!-- Até aqui finalizado -->
                    <body> 
                        <div class="container contact-pop">
                            <div class="row justify-content-center">
                             
                              <div class="col-md-10 pl-0" id="about">
                                <div class="content">
                                    <div> 
                
                        <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
                        <div class="text-center">
                            <!-- <h1 id="titulo">RoomMatch</h1> -->
                            <img class="mw-100" src="img/lo.png" alt="logo">
                            <p id="subtitulo">Cadastro Quarto</p>
                            <br>
                        </div>
                
                        <!-- Início do formulário -->
                        <form enctype="multipart/form-data" action="../uiqu.php" method="POST">

                        

                        

                        <input type="hidden" name="manter-foto" id="manter-foto" value="<?php echo $row2[6]; ?>">
                        <input type="hidden" name="idqu" id="idqu" value="<?php echo $row2[1]; ?>">

                        

                        
                
                            <div class="row">
                                
                                <div class="col-md-6 mb-3">
                                    <label for="tamanho"><strong>Tamanho do Quarto(m<sup>2</sup>) </strong></label>
                                    <input type="number" step="0.5" name="tamanho" class="form-control" id="tamanho" min=0 maxlength=100 required  placeholder="Digite o tamanho do quarto" value="<?php echo $row2[2]?>">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="mobiliado"><strong>Mobiliado </strong></label>
                                        <select name="mobiliado"id="mobiliado"  class="form-control maxlength=100" required>
                                        <option value=0>Não</option>
                                        <option value=1>Sim</option>
                                        </select>
                                    </div>
                                </div>
                        
                            <div class="row">  
                                        <div class="col-md-6 mb-3">
                                        <label for="arcondicionado"><strong>Ar-Condicionado</strong></label>
                                        <select name="arcondicionado" class="form-control" id="arcondicionado" maxlength=100 required>
                                        <option value=0>Não</option>
                                        <option value=1>Sim</option>
                                        </select>
                                    </div>
                                
                                    <div class="col-md-6 mb-3" >
                                        <label for="quantidade_tomada"><strong>Quantidade de Tomadas </strong></label>
                                        <input type="number" name="quantidade-tomada"  class="form-control" id="quantidade-tomada" min=0 maxlength=100 required placeholder="Quantidade de tomadas" value="<?php echo $row2[5]?>">
                                    </div>
                            </div>
                                    
                                    
                                        <div class="row">
                                        <div class="col-md-6 mb-3">
                                        <label for="valor"><strong>Valor aluguel (R$) </strong></label>
                                        <input type="number" step="0.5" name="valor" class="form-control" id="valor" min=0 maxlength=100 required placeholder="Qual o valor do aluguel" value="<?php echo $row2[3]?>" >
                                        </div>

                                        <div class="col-md-6 mb-3">
                                        <label for="negociavel"><strong>Valor negociável?</strong></label>
                                        <select name="negociavel" id="negociavel" class="form-control"  required>
                                        <option value=0>Não</option>
                                        <option value=1>Sim</option>
                                        </select>
                                        </div>
                                        </div>

                                <div class=row>
                                <div class="col-md-12 mb-3">
                                <label for="disp"><strong>Quarto disponível?</strong></label>
                                <select name="disp" id="disp" class="form-control"  required>
                                <option value='Disponível'>Disponível</option>
                                <option value='Indisponível'>Indisponível</option>
                                </select>
                                </div>
                                </div>
                        
                                
                        
                                <div class="col-md-12 mb-3" id="dd">
                                    <label for="descricao"><strong>Descrição </strong></label>
                                       <textarea cols="50" rows="5" maxlength="500" input name="descricao" id="descricao"  class="form-control"  placeholder="Digite aqui a descrição do imóvel:"><?php echo $row2[4]?></textarea> 
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 mb-3" id="tt">
                                    <label for="foto_perfil_quarto"><strong>Foto do Quarto </strong></label>
                                    <input type="file" name="foto_perfil_quarto"  id="foto_perfil_quarto">
                                </div>
                                
                                </div>


                                <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div id="botao">
                                        <button class="botao" type="submit"  class="form-control" onclick="return valida()">Atualizar</button>
                                    </div>
                                </div>

                                </div>
                            <style>

                            .botao{

                                margin-top: 0px;
                            }



                            </style>



                                
                               
                                
                        </form>

                        <script src="validacao.js"></script>
   

    
<footer>
    <!-- <img src="img/logo.png" alt="logo"> -->
   
</div>
         
</div>
</div>
</div>
</div>


              
     


</footer>

</html>


