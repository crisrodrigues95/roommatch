<!doctype html>
<html>

    <head>
        <!-- Metadados -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="../cs/global.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">

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
                        <li class="nav-item"><a class="nav-link" href="../Locador/index.html">Cadastro Locador</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Formulario/index.html">Cadastro Morador</a></li>
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
                        <form enctype="multipart/form-data" action="../php/cadastro_quarto.php" method="POST">

                        

                        <?php $idloc2 = $_GET['id2']; ?>
                        <input type="hidden" name="ide2" id="ide2" value=<?php echo $idloc2; ?>>

                        
                
                            <div class="row">
                                
                                <div class="col-md-6 mb-3">
                                    <label for="tamanho"><strong>Tamanho do Quarto(m<sup>2</sup>) </strong></label>
                                    <input type="number" step="0.5" name="tamanho" class="form-control" id="tamanho" min=0 maxlength=100 required  placeholder="Digite o tamanho do quarto">
                                    </div><div class="col-md-6 mb-3">
                                        <label for="mobiliado"><strong>Mobiliado </strong></label>
                                        <select name="mobiliado"id="mobiliado"  class="form-control maxlength=100" required>
                                        <option value=0>Não</option>
                                        <option value=1>Sim</option>
                                        </select>
                                    </div>
                        
                                    
                                        <div class="col-md-6 mb-3">
                                        <label for="arcondicionado"><strong>Ar-Condicionado</strong></label>
                                        <select name="arcondicionado" class="form-control" id="arcondicionado" maxlength=100 required>
                                        <option value=0>Não</option>
                                        <option value=1>Sim</option>
                                        </select>
                                    </div>
                                
                                    <div class="col-md-6 mb-3" >
                                        <label for="quantidade_tomada"><strong>Quantidade de Tomadas </strong></label>
                                        <input type="number" name="quantidade-tomada"  class="form-control" id="quantidade-tomada" min=0 maxlength=100 required placeholder="Quantidade de tomadas">
                                    </div>
                                    
                                    
                        
                                        <div class="col-md-6 mb-3">
                                        <label for="valor"><strong>Valor aluguel </strong></label>
                                        <input type="number" step="0.5" name="valor" class="form-control" id="valor" min=0 maxlength=100 required placeholder="Qual o valor do aluguel">
                                    
                        
                                   
                                </div>
                        
                                
                        
                                <div class="col-md-12 mb-3" id="dd">
                                    <label for="descricao"><strong>Descrição </strong></label>
                                       <textarea cols="50" rows="5" maxlength="500" input name="descricao" id="descricao"  class="form-control"  placeholder="Digite aqui a descrição do imóvel:"></textarea> 
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3" id="tt">
                                    <label for="foto_perfil_quarto"><strong>Foto do Quarto </strong></label>
                                    <input type="file" name="foto_perfil_quarto"  id="foto_perfil_quarto">
                    
                                </div>
    
                                <fieldset class="grupo" id="botao">
                                    <div class="campo">
                                    <div>
                                        <button class="botao" type="submit"  class="form-control" onclick="return valida()">Concluído</button>  
                                    </div>
                                    
                                </div>
                                </fieldset>
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


