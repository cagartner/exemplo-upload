<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exemplo de Upload</title>
</head>
<body>	
	<?php if (isset($_GET['message'])): ?>
		<p><?php echo $_GET['message'] ?></p>
	<?php endif ?>
		
	<form action="upload.php" method="POST" enctype="multipart/form-data">		
		<fieldset>
			<legend>Exemplo de upload</legend>
			<p>
				<label for="upload">Selecione um arquivo</label>
				<input type="file" name="file" id="upload" >
			</p>
			<p>
				<button type="submit">Enviar</button>
			</p>
		</fieldset>
	</form>

</body>
</html>