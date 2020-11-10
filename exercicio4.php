<?php
    session_start();
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Exercício-4</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="form-validation.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container">
            <div class="py-5 text-center">
                <h2>Exercício-4</h2>
                <p class="lead">
                     Faça um programa que receba 3 números. Informe qual é o maior e o menor dos três. Se o resultado da soma dos dois (maior e menor) for maior que 100 o programa deverá apresentar seu resultado multiplicando o maior com o menor. [IF/ELSE]
                </p>
            </div>
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Exercícios</span>
                        <span class="badge badge-secondary badge-pill">5</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <a href="index.php">
                                <div>
                                    <h6 class="my-0 ">Exercício-1</h6>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <a href="exercicio2.php">
                                <div>
                                    <h6 class="my-0">Exercício-2</h6>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <a href="exercicio3.php">
                                <div>
                                    <h6 class="my-0">Exercício-3</h6>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0  text-success">Exercício-4</h6>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <a href="exercicio5.php">
                                <div>
                                    <h6 class="my-0">Exercício-5</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="col-12">
                        <?php 
                            //Retorna a Mensagem do arquivo verificar.php
                            if(isset($_SESSION['mensagem'])){
                                echo $_SESSION['mensagem'];
                                unset($_SESSION['mensagem']);
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-8 order-md-1">
                    <form method="POST" action="verificar.php">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="numero">Informe um Número</label>
                                <input type="number" class="form-control" name="num-ex4" id="numero" required="" placeholder="Informe um número">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="numero2">Informe outro Número</label>
                                <input type="number" class="form-control" name="num2-ex4" id="numero2" required="" placeholder="Informe outro número">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="numero3">Informe outro Número</label>
                                <input type="number" class="form-control" name="num3-ex4" id="numero3" required="" placeholder="Informe outro número">
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-success btn-lg btn-block" name="btn-enviar" value="enviar" type="submit">Enviar</button>
                            </div>
                            <div class="col-12">
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.4.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>   
</html>         