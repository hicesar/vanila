<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<section>
	<form action="../controller/controlComentarios.php" method="post">
			<h3 style="text-align:center;">Deja tú comentario</h3>
			<input type="mail" name="to" placeholder="Escriba su correo" required />
			<select name="asunto">
					<option value="Valoración">Valoración de producto</option>
					<option value="Queja">Queja</option>
					<option value="Sugerencia">Sugerencia</option>
					<option value="Cotización">Cotización</option>
			</select>
			<textarea name="mensaje" cols="100" row="20"></textarea>
			<input type="submit" name="btnCorreo" value="Enviar"/>
	
		
	</form>
</section>
	
</body>
</html>