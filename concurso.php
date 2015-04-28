<html>
<head>
	<title>concurso</title>
</head>
<body>
	<script type="text/javascript">
	alert("Informacion enviada");
	</script>

	<?php
	$myFile = "concursantes/informacionConcursantes.txt";
	$fh = fopen($myFile, 'a');

	$dni =$_POST["DNI"];
	$nombreYapellido=$_POST["nombre"];
	$direccion =$_POST["direccion"];
	$codigoPostal =$_POST["codigoPostal"];
	$email =$_POST["email"];
	$telefono =$_POST["telefono"];
	$preferencia =$_POST["preferencia"];


	
	fwrite($fh,"\n" . "DNI: " . $dni . "\n");
	fwrite($fh,"Nombre y apellidos: "  . $nombreYapellido . "\n");
	fwrite($fh,"direccion "  . $direccion . "\n");
	fwrite($fh,"codigoPostal: "  . $codigoPostal . "\n");
	fwrite($fh,"email: "  . $email . "\n");
	fwrite($fh,"telefono: "  . $telefono . "\n");
	fwrite($fh,"preferencia: "  . $preferencia . "\n");
	fclose($fh);


	 header ("Location: inscrito.html");  

	
	?>

</body>
</html>