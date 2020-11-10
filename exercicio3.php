<?php
    session_start();
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Exercício-3</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="form-validation.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container">
            <div class="py-5 text-center">
                <h2>Exercício-3</h2>
                <p class="lead">
                    Elabore um programa, que calcule o que deve ser pago por um produto considerando o preço normal de etiqueta e a escolha da condição de pagamento. Utilize os códigos da tabela a seguir para ler qual a condição de pagamento escolhida e efetuar o cálculo adequado. [ Utilize o comando Switch] Cod 1 - A vista em dinheiro, recebe 10% de desconto; Cod 2 - à vista no cartão, recebe 5%; Cod 3 - Em 2 vezes, preço normal; Cod 4 - Em 3 vezes, preço normal mais 10% de juros.
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
                                    <h6 class="my-0">Exercício-1</h6>
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
                                    <h6 class="my-0 text-success">Exercício-3</h6>
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
                        <h4 class="mb-3">Forma de Pagamento</h4>
                        <div class="row">
                            <div class="col-6 d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="dinheiro" name="btnradio" value="1" type="radio" class="custom-control-input" checked="" required="">
                                    <label class="custom-control-label" for="dinheiro">A vista em dinheiro</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debito" name="btnradio" value="2" type="radio" class="custom-control-input" required="">
                                    <label class="custom-control-label" for="debito">à vista no cartão</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="Em2Vezes" name="btnradio" value="3" type="radio" class="custom-control-input" required="">
                                    <label class="custom-control-label" for="Em2Vezes">Em 2 vezes</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="Em3Vezes" name="btnradio" value="4" type="radio" class="custom-control-input" required="">
                                    <label class="custom-control-label" for="Em3Vezes">Em 3 vezes</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-md-12 mb-3">
                                <label for="numero">Informe o Preço:</label>
                                <input type="text" class="form-control" name="preco" id="numero" required="" placeholder="R$ 000,00">
                            </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-success btn-lg btn-block" name="btn-enviar" value="enviar" type="submit">Caucular</button>
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