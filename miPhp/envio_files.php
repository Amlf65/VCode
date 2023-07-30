if isset($_FILES)

<form action="" method="POST"
enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="2097152">
<p>Seleccione una foto con un tamaño inferior a 2 MB.</p>
<input type="file" name="photo">
<br />
<input type="submit" name="ok" value="Enviar">
</form>
