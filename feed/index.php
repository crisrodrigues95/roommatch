<?php

//Protege a página de ser acessada por quem não está logado
include('../php/protect.php');

//Seleção do nome para a barra superior
require('../php/conexao.php');

$query = 'SELECT nome_completo FROM moradores WHERE id_morador = '.$_SESSION['id_morador']; 
$result = mysqli_query($mysqli, $query);

$row = mysqli_fetch_row($result);


//Seleção dos imóveis
$query2 = 'SELECT  id_locador, quartos, apet, vagas_carro, foto_perfil_casa, bairro, ap_ou_casa, id_estab, cidade, estado, descricao, quartos, tamanho_casa, comodos, banheiros, lavanderia, internet FROM estabelecimentos ORDER BY id_estab DESC '; 
$result2 = mysqli_query($mysqli, $query2);







?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
       
        <title>RoomMatch</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        
       
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/log.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link"><?php echo $row[0]; ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="../php/update_morador/update_morador.php">Atualizar Cadastro</a></li>
                        <li class="nav-item"><a class="nav-link" href="../index.php">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="../php/logout.php">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>

       


        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Feed</h2>
                    <h3 class="section-subheading text-muted">Encontre o quarto ideal para você!</h3>
                </div>
                <div class="row">
                

                <!-- começar aqui o while -->
                <?php 
                $nui = 1;

                //função para converter binario em sim e não

                function bin_sn ($bin01){
                    if ($bin01 == 0){
                        $nvar = "Não";
                    }
                    if ($bin01 == 1){
                        $nvar = "Sim";
                    }
                    return $nvar;
                
                }

                function limpar_telefone($str){ 
                    return preg_replace("/[^0-9]/", "", $str); 
                  }

                while ($row2 = mysqli_fetch_row($result2)) {

                    
                    $pm = "portfolioModal".$nui;

                    $local = $row2[8]."-".$row2[9]; //Variavel cidade-estado
                    $descl = $row2[10]; //Descrição do imovel
                    $qquartos = $row2[11]; //Quantidade de quartos
                    $tamanhoim = number_format($row2[12], 2, ',', '.'); //Tamanho casa 
                    $comodos = $row2[13];
                    $banheiros = $row2[14];
                    $lavanderias  = $row2[15];
                    $internet  = bin_sn($row2[16]);
               


                    
                    
                    //Convertendo binarios do banco de dados em strings

                    if ($row2[6] == 0){
                        $ca = "Apartamento";
                    }

                    if ($row2[6] == 1){
                        $ca = "Casa";
                    }

                    
                    //Converte 0 e 1 em sim e não para aceita pets
                    $aapet = bin_sn ($row2[2]);


                    

                    //Seleção dos locadores
                    $query3 = 'SELECT  nome_completo, data_nascimento, sexo, fumante, pet, vegano, vegetariano, faculdade, trabalho, cozinha, tem_carro, tem_vel, telefone FROM locadores WHERE id_locador ='.$row2[0]; 
                    $result3 = mysqli_query($mysqli, $query3);
                    $row3 = mysqli_fetch_row($result3);

                    //Convertendo binarios do banco de dados em strings

                    
                    if ($row3[2] == 'm'){
                        $sx = "Masculino";
                    }

                    if ($row3[2] == 'f'){
                        $sx = "Feminino";
                    }
                    if ($row3[2] == 'n'){
                        $sx = "Prefiro não responder";
                    }

                    //Converte 0 e 1 em sim e não para é fumante
                    
                    $fum = bin_sn ($row3[3]);

                    //Converte 0 e 1 em sim e não para tem pet
                    
                    $tpet = bin_sn ($row3[4]);

                    //Converte 0 e 1 em sim e não para vegano
                    
                    $vegan = bin_sn ($row3[5]);

                    //Converte 0 e 1 em sim e não para vegetariano
                    
                    $veg = bin_sn ($row3[6]);

                    
                    
                    $fac = $row3[7]; //Faculdade

                    
                    
                    $coz = bin_sn ($row3[9]); //Converte 0 e 1 em sim e não para sabe cozinhar

                    
                    
                    $car = bin_sn ($row3[10]); //Converte 0 e 1 em sim e não para tem carro


                    
                    
                    $mot = bin_sn ($row3[11]); //Converte 0 e 1 em sim e não para tem moto


                    $tel = limpar_telefone($row3[12]); // telefone do locador já adaptado para integrar com whatsapp



                    



                    //Seleção des quartos
                    $query4 = 'SELECT  tamanho_quarto, valor, foto_perfil_quarto, descricao, tamanho_quarto, mobiliado, quantidade_tomada, arcondicionado, negociavel, disponibilidade FROM quartos WHERE id_estab ='.$row2[7]; 
                    $result4 = mysqli_query($mysqli, $query4);
                    $row4 = mysqli_fetch_row($result4);

                    $fquarto = $row4[2]; //Foto do quarto
                    $descq = $row4[3]; // Descrição do quarto
                    $tquarto = number_format($row4[4], 2, ',', '.'); // Tamanho do quarto 
                    $mobil = bin_sn ($row4[5]); //É mobiliado
                    $qtom = $row4[6]; // Quantidade de tomadas
                    $arc =  bin_sn ($row4[7]); //É mobiliado
                    $negociavel = bin_sn($row4[8]);
                    $dispo = $row4[9];


                    //Formatado valor do aluguel
                    $val = number_format($row4[1], 2, ',', '.');

                    //Calculo de idade
                    $dataNascimento = $row3[1];
                    $data = new DateTime($dataNascimento);
                    $idade = $data->diff( new DateTime( date('Y-m-d') ) );
                    $idade = $idade->format( '%Y anos' );



                    

                   

                        echo "
                        <div class='col-lg-4 col-sm-6 mb-4'>
                        <!-- Portfolio item 1-->
                        <div class='portfolio-item'>
                            <a class='portfolio-link' data-bs-toggle='modal' href='#$pm'>
                                <div class='portfolio-hover'>
                                    <div class='portfolio-hover-content'><i class='fas fa-plus fa-3x'></i></div>
                                </div>
                                
                                <img class='img-fluid perfil' src='$row2[4]' alt='...' />
                                
                            </a>
                            <div class='portfolio-caption'>
                                
                                <div class='portfolio-caption-heading'>$row2[5]</div>
                                <div class='portfolio-caption-subheading text-muted'>$ca</div>
                                <div class='portfolio-caption-subheading'>Quantidade de quartos: $row2[1]</div>
                            
                                <div class='portfolio-caption-subheading'>Aceita Pets: $aapet</div>
                                <div class='portfolio-caption-subheading'>Vaga para carro: $row2[1] </div>
                                <hr>
                                <div class='portfolio-caption-heading'>Dados Do Locador</div>
                                <div class='portfolio-caption-subheading '><strong>Nome:</strong> $row3[0]</div>                              
                                <div class='portfolio-caption-subheading'><strong>Idade:</strong> $idade </div>
                                <div class='portfolio-caption-subheading'><strong>Sexo:</strong> $sx</div>
                                <div class='portfolio-caption-subheading'><strong>Fumante:</strong> $fum</div>
                                <div class='portfolio-caption-subheading'> <strong>Tem Pet?:</strong> $tpet</div>
                                <div class='portfolio-caption-subheading'><strong>Vegano: </strong> $vegan</div>
                                <div class='portfolio-caption-subheading'><strong>Vegetariano:</strong> $veg </div>
                                <div class='portfolio-caption-subheading '><strong>Faculdade:</strong><span style='text-transform: capitalize'> $fac</span></div>
                                <div class='portfolio-caption-subheading'><strong>Trabalho:</strong><span style='text-transform: capitalize'> $row3[8] </span> </div>
                                <div class='portfolio-caption-subheading'><strong>Sabe cozinhar? :</strong> $coz </div>
                                <div class='portfolio-caption-subheading'><strong>Possui Carro:</strong> $car </div>
                                <div class='portfolio-caption-subheading'><strong>Possui Moto:</strong> $mot </div>
                                <a href='https://api.whatsapp.com/send/?phone=55$tel&text&app_absent=0' class='btn btn-primary btn-xl text-uppercase'    id='bb'   type='button'>
                                
                                    Entre Em Contato!                                </a>
                                
                        
                            
                            
                                <hr>
                                <div class='portfolio-caption-subheading text-muted' id='tete'>Valor do aluguel do quarto</div>
                                <div class='portfolio-caption-heading'>R$ $val </div>

                                <hr>
                                <div class='portfolio-caption-subheading text-muted' id='tete'>Disponibilidade</div>
                                <div class='portfolio-caption-heading'>$dispo </div>
                                                
                                                
                                                    
                                </div>
                                </div>
                                </div>

                                

                                <div class='portfolio-modal modal fade' id='$pm' tabindex='-1' role='dialog' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='close-modal' data-bs-dismiss='modal'><img src='assets/img/close-icon.svg' alt='Close modal' /></div>
                                        <div class='container'>
                                            <div class='row justify-content-center'>
                                                <div class='col-lg-8'>
                                                    <div class='modal-body'>
                                                        <!-- Project details-->
                                                        <h2 class='text-uppercase'>$row2[5]</h2>
                                                        <p class='item-intro text-muted'><span style='text-transform: capitalize'>$local</span></p>
                                                        <img class='img-fluid d-block mx-auto' src='$fquarto' alt='...' />
                                                        <div class='text-uppercase'> <strong>Descrição</strong></div>
                                                        <p id='descr'>$descl</p>
                                                
                                                    
                                                        <div class='text-uppercase'> <strong>Caracteristicas Da Casa</strong></div>
                                                        <br>
                                                <ul class='list-inline'>
                                                    <li>
                                                        <strong>Quantidade de quartos: </strong>
                                                        $qquartos
                                                    </li>
                                                    <li>
                                                        <strong>Tamanho da casa: </strong>
                                                        $tamanhoim m<sup>2</sup>
                                                    </li>
                                                    <li>
                                                        <strong>Quantidade De Cômodos: </strong>
                                                        $comodos
                                                    </li>
                                                    <li>
                                                        <strong>Quantidade De Banheiros: </strong>
                                                        $banheiros
                                                    </li>
                                                    <li>
                                                        <strong>Lavanderias: </strong>
                                                        $lavanderias
                                                    </li>
                                                    <li>
                                                        <strong> Tem Internet? :</strong>
                                                        $internet
                                                    </li>
                                                </ul>
                                                <hr>
                                                </div>
                                                <div class='text-uppercase'><strong>Caracteristicas Do Quarto</strong></div>
                                                <br>
                                                <ul class='list-inline'>
                                                <div class='text-uppercase'> <strong>Descrição</strong></div>
                                                    <p id='descr'>$descq</p>
                                                
                                                    <li>
                                                        <strong>Tamanho do quarto: </strong>
                                                        $tquarto m<sup>2</sup>
                                                    </li>
                                                    <li>
                                                        <strong>Valor do aluguel: </strong>
                                                        R$ $val
                                                    </li>
                                                    <li>
                                                    <strong>Negociável: </strong>
                                                     $negociavel
                                                    </li>
                                                
                                                    <li>
                                                        <strong>Mobiliado: </strong>
                                                        $mobil
                                                    </li>
                                                    <li>
                                                        <strong>Quantidade de tomadas: </strong>
                                                        $qtom
                                                    </li>
                                                    <li>
                                                        <strong>Ar Condicionado: </strong>
                                                        $arc
                                                    </li>
                                                </ul>
                                                <button class='btn btn-primary btn-xl text-uppercase' data-bs-dismiss='modal' type='button'>
                                                    <i class='fas fa-xmark me-1'></i>
                                                    Fechar Anuncio
                                                </button>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>









                                
                                ";








                                $nui = $nui+1;
                            }
                        
                    ?>

                        </div>
                            
                      
    


        
        
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

