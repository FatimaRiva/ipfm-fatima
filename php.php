<!doctype html>
<html>
<head>
<meta charset="utf-8">

</head>

<body>
	<?php
	//verificar si se ha enviado una imagen
	if (isset($_FILES['foto']) &&
	$_FILES['foto']['error'] === 0){
		$foto = $_FILES['foto'];
	// Crear un nombre unico para la foto
		$nombreArchivo = uniqid('foto_').
			'.' . pathinfo($foto['name'], PATHINFO_EXTENSION);
		
		//Definir la ruta donde se guardara la foto
		$rutaDestino = 'uploads/' .
			$nombreArchivo;
		//Mover la foto a la carpeta de destino
		if (move_uploaded_file($foto['tmp_name'], 
							   $rutaDestino)){
			echo "La foto se ha subido correctamente. <br>";
			echo "<img src=\"$rutaDestino\" 
			alt=\"Foto del Alumno\">";
		} else{
			echo "Hubo un problema al subir la foto.";
		}
	    }else {
		echo "No se ha seleccionado ninguna foto o hubo un error al subirla.";
	}
	
	?>
	
	
	
	
	
	
	
	
</body>
</html>