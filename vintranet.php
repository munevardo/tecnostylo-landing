<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body, html
{
	width:100%;
	height:100%;
}
a:link
{
	background:#000000;
	filter:alpha(opacity=75);
	opacity: 1;
	color:#FFFFFF;
	border:10px solid #000000;
	border-radius:5px 5px 5px 5px;
	text-decoration: none;
}
a:visited {
	background:#000000;
	filter:alpha(opacity=75);
	opacity: 1;
	color:#FFFFFF;
	border:10px solid #000000;
	border-radius:5px 5px 5px 5px;
	text-decoration: none;
}
a:hover {
	color:#000000;
	filter:alpha(opacity=75);
	opacity: 1;

	border:10px solid #5CBB52;
	background:#5CBB52;
}

a:active {
	text-decoration: none;
	color: #000000;
}
-->
</style></head>

<body>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">

  <tr>
    <td align="center"><p><?Php
	$c=0;
	include('conectar.php');
	$cedula=$_POST['cedula'];
	$co=mysql_query("select * from recepcion where cedula='$cedula'");
	$dt=mysql_fetch_array($co);
	if($cedula==$dt['cedula'])
	{
		echo "<a href='http://recepcion.tecnostylo.com' target='_blank'><img src='../img/recepcion.png' width='208' height='62'/></a>"."<br>";
		$c=$c+1;
	}

	$cedula=$_POST['cedula'];
	$co=mysql_query("select * from peluquero where cedula='$cedula'");
	$dt=mysql_fetch_array($co);
	if($cedula==$dt['cedula'])
	{
		echo "<a href='http://peluqueros.tecnostylo.com' target='_blank'><img src='../img/profesional.png' width='208' height='62'/></a>"."<br>";
		$c=$c+1;
	}
	
	// Validando Cliente
	
	$cedula=$_POST['cedula'];
	$co=mysql_query("select * from clientes where cedula='$cedula'");
	$dt=mysql_fetch_array($co);
	if($cedula==$dt['cedula'])
	{
		echo "<a href='sesion.php' target='_blank'><img src='../img/administrador.png' width='208' height='62'/></a>"."<br>";
		$c=$c+1;
	}
	if($c==0)
	{
		echo "<img src='../img/alto.png' width='101' height='90' />"."<br>";
		echo "<h2>Usuario no Encontrado</h2>"."<br>";
		echo "<p></p>";
		echo "<a href='video.html'>Cerrar</a>";
	}
	
	$cedula=$_POST['cedula'];
	$co=mysql_query("select * from clipelu where cedula='$cedula'");
	$dt=mysql_fetch_array($co);
	$peluqueria=$dt['id_pelu'];
	
	//Buscando sitio del Cliente
	
	$co2=mysql_query("select * from clientes where cedula='$peluqueria'");
	$dt2=mysql_fetch_array($co2);
	
	$web=$dt2['dweb'];
	
	//
	
	if($cedula==$dt['cedula'])
	{
		echo "<a href='http://tecnostylo.com/".$web."' target='_blank'><img src='../img/micentro.png' width='208' height='62'/></a>";
		$c=$c+1;
	}
	if($c==0)
	{
		echo "<img src='../img/alto.png' width='101' height='90' />"."<br>";
		echo "<h2>Usuario no Encontrado</h2>"."<br>";
		echo "<p></p>";
		echo "<a href='video.html'>Cerrar</a>";
	}
	?>
    </p></td>
  </tr>
</table>
</body>
</html>
