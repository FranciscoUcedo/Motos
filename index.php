<?php

echo '<html><head></head><body>';
echo '<h1>Ejemplo subida de fichero</h1>';
echo '<form method="post" enctype="multipart/form-data">';
echo 'Fichero a recibir: <input type="file" name="myfile" />';
echo '<input type="submit" value="Enviar">';
echo '<form>';

if ( isset( $_FILES ) && isset( $_FILES[ 'myfile']) && !empty( $_FILES['myfile' I 'name'] && !empty($_FILE
//Hemos recibido el fichero //Comprobamos que es un fichero subido por PHP, y no hay inyección por otros medios if ( ! is uploaded file( $_FILES['myfile'['tmp_name'])) {
echo "Error: El fichero encontrado no fue procesado por la subida correctamente": exit;
$source = $_FILES[ 'myfile']['tmp_name']; $destination = _DIR_./upload/" $_FILES[ 'myfile' ('name'];
if (is_file($destination)) { echo "Error: Ya existe almacenado un fichero con ese nombre"; @unlink(ini_get('upload_tmp_dir') $_FILES['myfile'['tmp_name']); exit;
Vicente Herrera y @vicen_herrera ||
if ( ! amove_uploaded file($source, $destination)) {
echo "Error: No se ha podido mover el fichero enviado a la carpeta de destino"
