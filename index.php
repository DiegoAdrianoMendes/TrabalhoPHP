<?php
    session_start();
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Exercício-1</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="form-validation.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container">
            <div class="py-5 text-center">
                <h2>Exercício-1</h2>
                <p class="lead">
                    Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou por nenhum deles.
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
                            <div>
                                <h6 class="my-0 text-success">Exercício-1</h6>
                            </div>
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
                            <a href="exercicio4.php">
                                <div>
                                    <h6 class="my-0">Exercício-4</h6>
                                </div>
                            </a>
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
                            <div class="col-md-12 mb-3">
                                <label for="numero">Informe um Número:</label>
                                <input type="number" class="form-control" name="num" id="numero" required="" placeholder="Informe um número">
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-success btn-lg btn-block" name="btn-enviar" value="enviar" type="submit">Enviar</button>
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