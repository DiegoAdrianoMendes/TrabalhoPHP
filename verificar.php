<?php
	session_start();
	// Exercício 1
	if(isset($_REQUEST["num"])){
		$num = $_REQUEST["num"];
		if($num % 2 == 0 and $num % 5 == 0){
			$_SESSION['mensagem'] = '<div class="alert alert-info fade show alert-dismissible" role="alert">
	  								<p class="text-center">'
	  									.$num.' é divisivel por 2 e por 5.
								 	</p>
								 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    							<span aria-hidden="true">&times;</span>
								 </div>';
        	header("Location: index.php");
		}elseif($num % 2 == 0){
			$_SESSION['mensagem'] = '<div class="alert alert-info fade show alert-dismissible" role="alert">
	  								<p class="text-center">'
	  									.$num.' é divisivel por 2.
								 	</p>
								 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    							<span aria-hidden="true">&times;</span>
								 </div>';
        	header("Location: index.php");
		}elseif ($num % 5 == 0) {
			$_SESSION['mensagem'] = '<div class="alert alert-info fade show alert-dismissible" role="alert">
	  								<p class="text-center">'
	  									.$num.' é divisivel por 5.
								 	</p>
								 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    							<span aria-hidden="true">&times;</span>
								 </div>';
        	header("Location: index.php");
		}else{
			$_SESSION['mensagem'] = '<div class="alert alert-info fade show alert-dismissible" role="alert">
	  								<p class="text-center">'
	  									.$num.' não e divisivel por 5 nem 2.
								 	</p>
								 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    							<span aria-hidden="true">&times;</span>
								 </div>';
        	header("Location: index.php");
		}
	}

	// Exercício 2
	if(isset($_REQUEST["num-ex2"]) and isset($_REQUEST["num2-ex2"]) and isset($_REQUEST["operacao"])){
		$num  = $_REQUEST["num-ex2"];
		$num2 = $_REQUEST["num2-ex2"];
		$op   = $_REQUEST["operacao"];
		
		$Tabuada = "";

		for ($i=0; $i <= $num2 ; $i++) { 
			if($op == "+"){
				$n = $num + $i;
				$Tabuada .= $num." + ".$i." = ".$n.'<br>';
			}elseif($op == "-"){
				$n = $num - $i;
				$Tabuada .= $num." - ".$i." = ".$n.'<br>';
			}elseif($op == "*") {
				$Tabuada .= $num." X ".$i." = ".$num*$i.'<br>';
			}elseif($op == "/"){
				if($i>0)
					$Tabuada .= $num." / ".$i." = ".$num/$i.'<br>';
			}
		}  
		
		if(!empty($Tabuada)){
			$_SESSION['tabuada'] = '<div class="alert alert-info fade show alert-dismissible" role="alert">
		  								<p class="text-justify">
		  								Tabuada de '.$num.'<br>'
		  								.$Tabuada.'
									 	</p>
									 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    							<span aria-hidden="true">&times;</span>
									 </div>';
	    	header("Location: exercicio2.php");
        }else{
			$_SESSION['tabuada'] = '<div class="alert alert-info fade show alert-dismissible" role="alert">
  								<p class="text-center">
  									O Operador não existe.
							 	</p>
							 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    							<span aria-hidden="true">&times;</span>
							 </div>';
    		header("Location: exercicio2.php");
		}
	}

	// Exercício 3
	if(isset($_REQUEST["preco"])){
		$btnradio = $_REQUEST["btnradio"];
		$preco    = $_REQUEST["preco"];
		switch ($btnradio) {
			case 1:
				$desconto = (10/100) * $preco;
				$preco -= $desconto;
				break;
			case 2:
				$desconto = (5/100) * $preco;
				$preco -= $desconto;
				break;
			case 3:
				$desconto = (0/100) * $preco;
				$preco -= $desconto;
				break;
			case 4:
				$desconto = (10/100) * $preco;
				$preco += $desconto;
				break;
		}
		$_SESSION['mensagem'] = '<div class="alert alert-info fade show alert-dismissible" role="alert">
  								<p class="text-center">
  									Desconto de: R$ '.$desconto.'<br>
  									Preço Final: R$ '.$preco.'
							 	</p>
							 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    							<span aria-hidden="true">&times;</span>
							 </div>';
    	header("Location: exercicio3.php");
	}

	// Exercício 4
	if (isset($_REQUEST["num-ex4"]) and isset($_REQUEST["num2-ex4"]) and isset($_REQUEST["num3-ex4"])) {
		$vetor[] = ("");

		$vetor[0] = $_REQUEST["num-ex4"];
		$vetor[1] = $_REQUEST["num2-ex4"];
		$vetor[2] = $_REQUEST["num3-ex4"];

		SORT($vetor);
		$menor = $vetor[0];
		$maior = $vetor[2];

		if($maior+$menor > 100){
			$m  = $maior*$menor;
			$mult = $maior."X".$menor." = ".$m;
		}else{
			$mult = "";
		}
		$_SESSION['mensagem'] = '<div class="alert alert-info fade show alert-dismissible" role="alert">
  								<p class="text-center">
  									Maior Número: '.$maior.'<br>
  									Menor Número: '.$menor.'<br>
  									'.$mult.'
							 	</p>
							 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    							<span aria-hidden="true">&times;</span>
							 </div>';
    	header("Location: exercicio4.php");
	}

	// Exercício 5
	if (isset($_REQUEST["num-ex5"]) and isset($_REQUEST["num2-ex5"])){
		$num_ex5  = $_REQUEST["num-ex5"];
		$num2_ex5 = $_REQUEST["num2-ex5"];

		$msg = "";
		foreach (range($num_ex5, $num2_ex5) as $value) {
			$msg .= $value."<br>";
		}
		$_SESSION['mensagem'] = '<div class="alert alert-info fade show alert-dismissible" role="alert">
  								<p class="text-center">
  									'.$msg.'
							 	</p>
							 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    							<span aria-hidden="true">&times;</span>
							 </div>';
    	header("Location: exercicio5.php");
	}
?>