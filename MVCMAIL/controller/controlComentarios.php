<?php
require_once '../models/modelComentarios.php'; 
extract($_POST);
if(isset($btnCorreo) and isset($to) and $to!=''){
	$objComentario= new Comentario(); 
	$objComentario->setTo($to); 
	$objComentario->setAsunto($asunto);
	$objComentario->setMensaje($mensaje);
	$objComentario->guardarMensaje();
	$objComentario->enviarMensaje();
	
}
else{
	echo "No se introdujó ningún valor"; 
}








?>