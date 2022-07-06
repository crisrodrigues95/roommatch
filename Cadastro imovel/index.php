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
        <title>Cadastro-Imóvel</title>
    </head>
    <header>
  
    </header>

    <body> 
        <div class="container contact-pop">
            <div class="row justify-content-center">
             
              <div class="col-md-11 pl-0" id="about">
                <div class="content">
                    <div> 

        <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
        <div class="text-center">
            <img class="mw-100" src="img/lo.png" alt="logo">
            <p id="subtitulo">Cadastro Imóvel</p>
            <br>
        </div>

        <!-- Início do formulário -->
        <form enctype="multipart/form-data" action="../php/cadastro_estab.php" method="POST">

            <?php $idloc = $_GET['id']; ?>
            <input type="hidden" name="ide" id="ide" value=<?php echo $idloc; ?>>
            

            <div class="row">
                <!-- Campo do endereço com legenda "endereço" e css de classe "campo" -->
                
                <div class="col-md-6 mb-3">
                    <label for="cep"><strong>CEP</strong></label>
                    <input type="text" name="cep" id="cep" class="form-control"   onkeypress="$(this).mask('00.000-000')" maxlength=10  required placeholder="Digite Seu CEP">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="endereco"><strong>Endereço com número </strong></label>
                    <input type="text" name="endereco" id="endereco" class="form-control"   maxlength="100" required  placeholder="Digite Seu endereço">
                </div>
            </div>
                </div>
                <div class="row">
                

                <!-- Campo do bairro com legenda "bairro" e css de classe "campo" -->
                <div class="col-md-6 mb-3">
                    <label for="complemento"><strong>Complemento</strong></label>
                    <input type="text" name="complemento" class="form-control" id="complemento" maxlength="50"  placeholder="Digite Seu complemento">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="bairro"><strong>Bairro</strong></label>
                    <input type="text" name="bairro" id="bairro" class="form-control" maxlength="200"  required  placeholder="Digite Seu Bairro">
                </div>
                

                </div> 

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="cidade"><strong>Cidade</strong></label>
                    <input type="text" name="cidade" id="cidade" class="form-control"  maxlength="200" required  placeholder="Digite Sua cidade">
                </div>
                
                
                    <div class="col-md-6 mb-3">
                        <label for="estado"><strong>Estado</strong></label>
                        <select id="estado" class="form-control"  name="estado" required>
                          <option value="AC" >Acre</option>
                          <option value="AL">Alagoas</option>
                          <option value="AP" >Amapá</option>
                          <option value="AM" >Amazonas</option>
                          <option value="BA" >Bahia</option>
                          <option value="CE" >Ceará</option>
                          <option value="DF" >Distrito Federal</option>
                          <option value="ES" >Espirito Santo</option>
                          <option value="GO" >Goiás</option>
                          <option value="MA" >Maranhão</option>
                          <option value="MT" >Mato Grosso</option>
                          <option value="MS" >Mato Grosso do Sul</option>
                          <option value="MG" >Minas Gerais</option>
                          <option value="PA" >Pará</option>
                          <option value="PB" >Paraíba</option>
                          <option value="PE" >Pernambuco</option>
                          <option value="PI" >Piauí</option>
                          <option value="RJ" >Rio de Janeiro</option>
                          <option value="RN" >Rio Grande do Norte</option>
                          <option value="RS" >Rio Grande do Sul</option>
                          <option value="RO" >Rondônia</option>
                          <option value="RR" >Roraima</option>
                          <option value="SC" >Santa Catarina</option>
                          <option value="SP" >São Paulo</option>
                          <option value="SE" >Sergipe</option>
                          <option value="TO" >Tocantins</option>
			</select>

                </div>

            </div> 

        

           
            <!-- Campo de quartos com-->
            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="tamanho_casa"><strong>Tamanho da casa (m<sup>2</sup>)</strong></label>
                <input type="number" step="0.05" name="tamanho_casa" id="tamanho_casa" class="form-control"  min=0 required  placeholder="Digite o tamanho da casa">
            </div>
    
            <div class="col-md-6 mb-3">
                    <label for="apartamento_ou_casa"><strong>Apartamento ou Casa</strong></label>
                    <select name="apartamento_ou_casa" id="apartamento_ou_casa" class="form-control"  required>
                    <option value=0>Apartamento</option>
                    <option value=1>Casa</option>
                    </select>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                    <label for="comodos"><strong>Comodos</strong></label>
                    <input type="number" name="comodos" id="comodos" class="form-control"  required  placeholder="Digite a quantidade de comodos">
            </div>
    
            <div class="col-md-6 mb-3">
                <label for="banheiros"><strong>Banheiros</strong></label>
                <input type="number" name="banheiros" id="banheiros" class="form-control"  maxlength="500" required  placeholder="Digite a quantidade de banheiros">
            </div>

         

        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="lavanderia"><strong>Lavanderia</strong></label>
                <input type="number" name="lavanderia" id="lavanderia" class="form-control"  min=0 required  placeholder="Quantidade lavanderias">
            </div>

            <div class="col-md-6 mb-3">
                <label for="vagas_carro"><strong>Vagas de carro</strong></label>
                <input type="number" name="vagas_carro" id="vagas_carro" class="form-control"  min=0 required  placeholder="Quantidade vagas">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                    <label for="quartos"><strong>Quartos</strong></label>
                    <input type="number" name="quartos" id="quartos" class="form-control"  required  placeholder="Digite a quantidade de quartos">
            </div>
            
            <div class="col-md-6 mb-3">
                <label for="internet"><strong>Internet</strong></label>
                <select id="internet" name="internet" class="form-control"  required>
                    <option selected disabled value="">Selecione</option>
                    <option value=0>Não</option>
                    <option value=1>Sim</option>
                  </select>
            </div>

            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="apet"><strong>Aceita Pets?</strong></label>
                <select id="apet" name="apet" class="form-control"  required>
                    <option selected disabled value="">Selecione</option>
                    <option value=0>Não</option>
                    <option value=1>Sim</option>
                  </select>
            </div>
   
                
         <div class="row">
            <div class="col-md-12 mb-3">
                <label for="descricao"><strong>Descrição </strong></label>
                <textarea cols="50" rows="5" maxlength="500" input name="descricao" class="form-control"  id="descricao"  placeholder="Digite aqui a descrição do imóvel:"></textarea> 
            </div>
       
            
                <div class="col-md-6 mb-3" id="tt">
                    <label for="foto_perfil_imovel"><strong>Foto do imóvel</strong></label>
                    <input type="file" name="foto_perfil_imovel"  id="foto_perfil_imovel" maxlength=100>
                </div>
            
        

        
            <div class="col-md-12 mb-3">
                <button class="botao" type="submit" onclick="return valida()" id="bota">Concluído</button>  
            </div>
        

                
                    


                

                
            


        </form>


    <script src="validacao.js"></script>
    
    
        
    </body>
   

  



</html>


