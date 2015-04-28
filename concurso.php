<html>
<head>
	<title>concurso</title>
</head>
<body>

	<?php
	
	//echo $_POST["NIF"];
	fwrite("informacionConcursantes.txt",$_POST["NIF"])
	
	?>

</body>
</html>