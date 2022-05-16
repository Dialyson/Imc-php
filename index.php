<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form name="form_imc" id="form_imc" method="POST" enctype="multipart/form-data" action="imc.php" >
	  <div class="form-group">
		<label for="altura">Altura</label>
		<input type="number" step="0.01" min="1" class="form-control" id="altura" name="altura">
	  </div>
	  <div class="form-group">
		<label for="exampleInputPassword1">Peso</label>
		<input type="number" step="0.01" min="1" class="form-control" id="peso" name="peso">
	  </div>
	  <br><button type="submit" class="btn btn-primary">Calcular</button>
	</form>

    <?php



//function calcula($peso,$altura){
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$total = $peso/($altura**2);

 if($total < 16){
    echo"Você está com Destnutrição grau 3";
} elseif($total >= 16 && $total <17){
    echo"Você está com Destnutrição grau 2";
} elseif($total >= 17 && $total <18.5){
    echo"Você está com Destnutrição grau 1";
} elseif($total >= 18.5 && $total <24.9){
    echo"Você está com Normal";
} elseif($total >= 25 && $total <30){
    echo"Você está com Sobrepeso";
} elseif($total >= 30 && $total <35){
    echo"Você está com Obesidade Grau 1 ";
} elseif($total >= 35 && $total <40){
    echo"Você está com Obesidade Grau 2 ";
} elseif($total > 40){
    echo"Você está com Obesidade Grau 3";
}


//}



?>
</body>
</html>


