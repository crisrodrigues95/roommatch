<?php

//Login moradores

include('php/conexao.php');

$msg = "";


if(($_POST['tipoCad']) == 'cadMorador'){

    $msg = "";
    

    if(strlen($_POST['lemail']) == 0) { //Confere se e-mail e senha não estão em branco
        $msg = "Preencha seu e-mail";
    } else if(strlen($_POST['lsenha']) == 0) {
        $msg = "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['lemail']); //Cria uma variavel com o valor do email
        $senha = $mysqli->real_escape_string($_POST['lsenha']); //Cria uma variavel com o valor da senha

        $sql_code = "SELECT * FROM moradores WHERE email = '$email' AND senha = '$senha'"; //Seleciona email e senha no bd
        $sql_query = $mysqli->query($sql_code);

        
        //Confere se o email e a senha batem no banco de dados
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_morador'] = $usuario['id_morador'];
            $_SESSION['nome_completo'] = $usuario['nome_completo'];

            header("Location: feed/index.php");

        } else {
            $msg= "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}

// Login locadores

if(($_POST['tipoCad']) == 'cadLocador'){ //Coleta email e senha digitados

    $msgl = "";
    

    if(strlen($_POST['lemail']) == 0) { //Confere se e-mail e senha não estão em branco
        $msg = "Preencha seu e-mail";
    } else if(strlen($_POST['lsenha']) == 0) {
        $msg = "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['lemail']); //Cria uma variavel com o valor do email
        $senha = $mysqli->real_escape_string($_POST['lsenha']); //Cria uma variavel com o valor da senha

        $sql_code = "SELECT * FROM locadores WHERE email = '$email' AND senha = '$senha'"; //Seleciona email e senha no bd
        $sql_query = $mysqli->query($sql_code);

        
        //Confere se o email e a senha batem no banco de dados
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_locador'] = $usuario['id_locador'];
            $_SESSION['nome_completo'] = $usuario['nome_completo'];

            header("Location: feed/index-loc.php");

        } else {
            $msg= "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}








?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Roommatch</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cs/global.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"

        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <header></header>
</head>
<body>
    
    <main>
        <div class="container">
            <div class="content first-content">
                <div class="first-column">
                    <h2 class="title title-primary">Bem-vindo!</h2>
                    <p class="description description-primary">Você que voltou a nosso site </p>
                    <p class="description description-primary"> continue procurando seu novo lar!</p>
                    <button id="signin" class="btn btn-primary">Entrar</button>
                </div>    
                <div class="second-column">
                    <h2 class="title title-second">Cadastrar</h2>
                 
                    <p class="description description-second">Vamos começar a encontrar alguém para ser seu colega de quarto!</p>
                    <form class="form">
    
                    <div class="form-group">
                            <div>
                                <div  class="input-tipoCad"  value="cadMorador"> <!--Usuário Morador -->
                                <label >
                                    <a href="Formulario/index.html"><i class="fas fa-2x fa-person-booth icon"></i></a>
                                    <a href="Formulario/index.html"><span class="icon">MORADOR</span></a>   
                                </label>
                                </div>
                            </div>
                        
                            <div>
                                <div  class="input-tipoCad" value="cadLocador"> <!--Usuário Locador -->
                
                                
                                <label>
                                    <a href="Locador/index.html"><i class="fas fa-2x fa-door-open icon"></i></a>
                                    <a href="Locador/index.html"> <span class="icon">LOCADOR</span></a>
                                </label>
                                </div>
                            </div>
                        </div>     
                    
                    </form>
                  
                        
    
                    </form> 
    
    
                    
                </div>
            </div>
            <div class="content second-content">
                <div class="first-column">
                    <h2 class="title title-primary">Olá Amigo!</h2>
                    <p class="description description-primary">Insira seus dados pessoais e comece sua jornada para encontrar seu novo lar!
    
                     
                        </p>
                    
                    <button id="signup" class="btn btn-primary">Cadastrar</button>
                </div>
                <div class="second-column">
                    <h2 class="title title-second">Entrar Como Usuário:</h2>
                <p><?php echo $msg; ?></p>

                <style>

                    /*Style do input para escolher tipo*/
                    form input.input-tipoCad{
                        display: none !important;
                    } 

                    form .form-group{
                        display: flex;
                        flex-direction: row;
                        justify-content: space-evenly;
                        margin: 20px 0;
                    }

                    form input.input-tipoCad ~ label{
                        display: flex;
                        flex-direction: column;
                    }

                    form input.input-tipoCad ~ label span{
                        margin-top: 15px;
                        font-weight: bold;
                    }
                    
                    form input.input-tipoCad ~ label{
                        border: 2px solid #cccccc;
                        border-radius: 10px;

                        padding: 30px 20px;
                    }

                    form input.input-tipoCad:hover ~ label{
                        border-color: #999;
                        background-color: #00000005;
                    }
                    
                    form input.input-tipoCad:checked ~ label{
                        border-color: #000;
                        background-color: #00000008;
                    }

                    form input.input-tipoCad:not(:checked) ~ label{
                        border-color: #ccc;
                    }
                
                    form input.input-tipoCad ~ label{
                        text-align: center;
                    }

                    @media(max-width:767px){
                        form .form-group{
                            margin: 10px 0;
                        }

                        form input.input-tipoCad ~ label{
                            padding: 10px;
                            margin-bottom: 0;
                            flex-direction: row;
                        }

                        form input.input-tipoCad ~ label span{
                            margin: 0 0 0 5px;
                        }

                        form input.input-tipoCad ~ label i.fa-2x{
                            font-size: 1.2em !important;
                        }
                    }

                    
                    /*Estilização botão de cadastro*/
                    form div.input-tipoCad ~ label{
                        display: flex;
                        flex-direction: column;
                    }
                    form div.input-tipoCad ~ label span{
                        margin-top: 15px;
                        font-weight: bold;

                    }

                    form div.input-tipoCad ~ label{
                        border: 2px solid #cccccc;
                        border-radius: 10px;

                        padding: 30px 20px;
                    }
                    form div.input-tipoCad ~ label{
                        text-align: center;
                    }

                    form div.input-tipoCad ~ label{
                        border: 2px solid #cccccc;
                        border-radius: 10px;

                        padding: 30px 20px;
                    }

                    form div.input-tipoCad:checked ~ label{
                        border-color: #000;
                        background-color: #00000008;
                    }

                    .icon {

                        color:#000;
                        border: #000;
                    }

                    
                   
                </style>	
                
                <p class="description description-second">Escolha o tipo de usuário</p>
                <form class="form" action="" method="POST">

                    <div class="form-group">
                        <div>
                            <input type="radio" class="input-tipoCad" name="tipoCad" id="cadMorador" value="cadMorador">
                            <label for="cadMorador">
                                <i class="fas fa-2x fa-person-booth"></i>
                                <span>MORADOR</span>
                            </label>
                        </div>
                    
                        <div>
                            <input type="radio" class="input-tipoCad" name="tipoCad" id="cadLocador" value="cadLocador">
                            <label for="cadLocador">
                                <i class="fas fa-2x fa-door-open"></i>
                                <span>LOCADOR</span>
                            </label>
                        </div>
                    </div>
                                
                    <label class="label-input" for="lemail">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="lemail" id="lemail" placeholder="E-mail">
                    </label>
                
                    <label class="label-input" for="lsenha">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="lsenha" id="lsenha" placeholder="Senha">
                    </label>
                
                    <button type="submit" class="btn btn-second">Entrar</button>
                </form>


              


            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="script.js"></script>
</main>
</body>

</html>