<?php
 require_once '../helpers/ClsConexion.php'; 
		class Comentario{
				private $destinatario; 
				private $asunto; 
				private $mensaje; 
			
				function __construct(){
					 $this->destinatario='';
					$this->asunto='';
					$this->mensaje='';
				}
			public function setTo($to){
				$this->destinatario=$to;
			}
			public function setAsunto($asunto){
				$this->asunto=$asunto;
			}
			public function setMensaje($mensaje){
				$this->mensaje=$mensaje;
			}
			public function getTo(){
				return $this->destinatario;
			}
			public function getAsunto(){
				return $this->asunto;
			}
			public function getMensaje(){
				return $this->mensaje;
			}
			
			public function guardarMensaje(){
				$sql= "INSERT INTO comentarios (destinatario, asunto, mensaje) VALUES ('".$this->getTo()."','".$this->getAsunto()."','".$this->getMensaje()."')";
			     echo $sql;
				$resultado=$this->aplicarQry($sql);
				$r=1; 
				return $r;
			}
			public function enviarMensaje(){
				$para      = $this->getTo();
				$titulo    = $this->getAsunto();
				$mensaje   = $this->getMensaje();
         $cabeceras = 'From: quecomerenvanila@gmail.com' . "\r\n" .
    'Reply-To: anahitorres.maestra@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

				mail($para, $titulo, $mensaje, $cabeceras); 
				
			}
			
			
			
			
			
			
			public function aplicarQry($sql){
				$objConectar= new Conexion(); 
				$resultado=$objConectar->ejecutarConsulta($sql);
				$objConectar ->cerrarConexion(); 
				return $resultado;
		  }
      }
?>