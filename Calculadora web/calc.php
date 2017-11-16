<?php
if ($_POST["Val1"] != "" and $_POST["Val2"] != ""){
	if ($_POST["signo"] == "+"){
		echo $resultado = $_POST["Val1"] + $_POST["Val2"];
		echo "<br/><a href='index.html'>Volver</a>";
	}
	if ($_POST["signo"] == "-"){
		echo $resultado = $_POST["Val1"] - $_POST["Val2"];
		echo "<br/><a href='index.html'>Volver</a>";
	}
	if ($_POST["signo"] == "*"){
		echo $resultado = $_POST["Val1"] * $_POST["Val2"];
		echo "<br/><a href='index.html'>Volver</a>";
	}
	if ($_POST["signo"] == "/"){
		echo $resultado = $_POST["Val1"] / $_POST["Val2"];
		echo "<br/><a href='index.html'>Volver</a>";
	}
}else{
	echo "Debes ingresar un valor <br/><a href='index.html'>Volver</a>";
}
?>


<?php/* 
	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
		if ($_POST["operador"] == "suma") {
			print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "resta") {
			print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "multiplicacion") {
			print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "division") {
			print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		}
	} else {
		print("Ingresa alg&uacute;n valor");
		print ('<br /><a href="calculadora.php">Volver</a>');
	}*/
?>
