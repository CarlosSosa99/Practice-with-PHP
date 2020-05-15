<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link  rel="StyleSheet" href="estilos.css">
	<title>Validar formulario - Listasrroja</title>
</head>
<body>
	<form action="#" method="POST">
		<?php
			$nombre = "";
			$password = "";
			$email = "";
			// TODO (1) declarar variable
			$pais = "";
			
			if(isset($_POST['nombre'])){
				$nombre = $_POST['nombre'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				// TODO (2) asignar valor de solicitud POST
				$pais = $_POST['pais'];

				$campos = array();

				if($nombre == ""){
					array_push($campos, "El campo Nombre no pude estar vacío");
				}

				if($password == "" || strlen($password) < 6){
					array_push($campos, "El campo Password no puede estar vacío, ni tener menos de 6 caracteres.");
				}

				if($email == "" || strpos($email, "@") === false){
					array_push($campos, "Ingresa un correo electrónico válido.");
				}

				// TODO (3) Validar que el campo no esté vacío
				if($pais == ""){
					array_push($campos, "Selecciona un país de origen.");
				}

				if(count($campos) > 0){
					echo "<div class='error'>";
					for($i = 0; $i < count($campos); $i++){
						echo "<li>".$campos[$i]."</i>";
					}
				}else{
					echo "<div class='correcto'>
							Datos correctos";
				}
				echo "</div>";
			}
		?>
		<p>
		Nombre:<br/>
		<input type="text" name="nombre" value="<?php echo $nombre; ?>">
		</p>

		<p>
		Password:<br/>
		<input type="password" name="password" value="<?php echo $password; ?>">
		</p>

		<p>
		correo electrónico:<br/>
		<input type="text" name="email" value="<?php echo $email; ?>">
		</p>

		<p>
			País de origen: <br>	
			<select name="pais" id="">
				<option value="">Selecciona un país</option>
				<option value="Al" <?php if($pais == "Al") echo "selected" ?> >Alemania</option>
				<option value="EU" <?php if($pais == "EU") echo "selected" ?>>Estados Unidos</option>
				<option value="ES" <?php if($pais == "ES") echo "selected" ?>>España</option>
				<option value="AR" <?php if($pais == "AR") echo "selected" ?>>Argentina</option>
				<option value="VE" <?php if($pais == "VE") echo "selected" ?>>Venezuela</option>
			</select>
		</p>

	

		<p><input type="submit" value="enviar datos"></p> 
	</form>
</body>
</html>