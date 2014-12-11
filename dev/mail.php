<style type="text/css">
<!--
.Estilo1 {
	font-family: Tahoma;
	font-weight: bold;
	font-size: 12px;
}
a:link {
	color: #FF0000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000099;
}
a:hover {
	text-decoration: underline;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #000099;
}
.Estilo2 {font-size: 12px; font-family: Tahoma;}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
	font-weight: bold;
	background-image: url(../img/fondo3.jpg);
}
.tsec {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 11px;
	font-weight: normal;
}
.tlo {
	font-weight: normal;
}
.tlo .tsec .tlo {
	font-size: 14px;
	font-weight: bold;
}
body,td,th {
	font-size: 12px;
	color: #FFFFFF;
}
-->
</style>
<p align="justify" class="Estilo1">
  <?php


$asunto= 'TE HAN ENVIADO UNA CONSULTA DE TECNOSTYLO.COM';
$nombre=$_POST['nombre'];
$comentario=$_POST['comentario'];
$email=$_POST['correo'];
$para='info@tecnostylo.com,jader4444@hotmail.com,apestoso87@hotmail.com,acevedo.cl@gmail.com'.','.$email;
$mensaje= 'NOMBRE: '.$nombre."\n";
$mensaje.='MENSAJE: '.$comentario."\n";
$mensaje.='CONTESTAR A: '.$email."\n";

$cabeceras= 'From: no-responder@tecnostylo.com'. "\r\n" .
   	'Reply-To: '.$email. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$envio=mail($para, $asunto, $mensaje, $cabeceras);
if($envio)
{
	echo "Su correo ha sido enviado de Forma Exitosa, muy pronto nos pondremos en contacto con Usted.";
}
echo "<META HTTP-EQUIV=Refresh CONTENT='3; URL=fcontacto.php'>";
?>
