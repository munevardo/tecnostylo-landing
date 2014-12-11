<!DOCTYPE html>
<html>
<head>
	<title>Tutorial ventanas modales con Jquery</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript">
		function openVentana(){
			$(".ventana").slideDown(1000);
		}
		function closeVentana(){
			$(".ventana").slideUp("fast");
		}
	</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo14 {color: #000000;
	font-weight: bold;
}
-->
</style></head>
<body onLoad="javascript:openVentana()">
<div class="container">
		<div class="ventana">
			<h1 align="center">ha ocurrido un error</h1>
			<div class="form">
				<div class="cerrar"><a href="javascript:closeVentana();">Cerrar X</a></div>
				<h1>Formulario Login</h1>
				<hr>
				<form>
					<table>
						<tr>
							<td>Nombre:</td>
							<td><input type="text" placeholder="Ingresa tu nombre"></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="password" placeholder="Ingresa tu contraseña"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Ingresar"></td>
						</tr>
					</table>
				</form>
			</div>

		</div>
	    <p align="center"><span class="Estilo14">
	      <?php
		$clo=mysql_query("select dilogo from logoemp where cedula='$peluqueria'");
		$dlo=mysql_fetch_array($clo);
		echo "<a href='nage.php?peluqueria=$peluqueria&cliente=$cliente'><img src='http://tecnostylo.com/httpdoc/".$dlo['dilogo']."' class='img'/></a>";
 		$cc=mysql_query("select * from clientes where cedula='$peluqueria'");
		$cd=mysql_fetch_array($cc);
		echo "<p align='center'>";
		echo "<font size='4'>".$cd['nombre']."</font><br>";
		//echo $cd['direccion']."<br>";
		echo "Telefonos: ".$cd['telefono']." - ".$cd['celular']."<br>";
		echo "</p>";
		?>
        </span></p>
	    <p>
          <?php
	echo "<table align='center'>";
		echo "<tr>";
			$p=mysql_query("select * from speluquero where servicio='".$_GET['servicio']."'");
			while($d=mysql_fetch_array($p))
			{
				$pe=$d['peluquero'];
				$p2=mysql_query("select * from ipeluquero where cedula='$pe'");
				$d2=mysql_fetch_array($p2);
				$pe2=$d2['dilogo'];
				if($c<=1)
				{
					$p3=mysql_query("select * from peluquero where cedula='$pe'");
					$d3=mysql_fetch_array($p3);
					$no=$d3['nombre'];
					$fecha=$_GET['fecha'];
					$servicio=$_GET['servicio'];
					echo "<td align='center'><a href='nage4.php?peluquero=$pe&fecha=$fecha&servicio=$servicio&peluqueria=$peluqueria&cliente=$cliente'><img src='http://tecnostylo.com/peluqueros/".$pe2."' width='60' height='60' border='3' class='i2'/></a>";
					echo "<br>";
					echo $no;
					echo "</td>";
					$c=$c+1;
				}
				else
				{
					$p3=mysql_query("select * from peluquero where cedula='$pe'");
					$d3=mysql_fetch_array($p3);
					$no=$d3['nombre'];
					$fecha=$_GET['fecha'];
					$servicio=$_GET['servicio'];
					echo "<td align='center'><a href='nage4.php?peluquero=$pe&fecha=$fecha&servicio=$servicio&peluqueria=$peluqueria&cliente=$cliente'><img src='http://tecnostylo.com/peluqueros/".$pe2."' width='60' height='60' border='3' class='i2'/></a>";
					echo "<br>";
					echo $no;
					echo "</tr>";
					$c=0;
				}
			}
		echo "</tr>";
	echo "</table>";
	?>
        </p>
	    <p align="center"><img src="info.jpg" alt="tecnostylo"/></p>
	    <table width="100%" border="0">
          <tr>
            <td align="center" valign="top"><?Php
	  	error_reporting(0);
	  	$cs=mysql_query("select * from servicios where id='$servicio'");
		$ss=mysql_fetch_array($cs);
		
		$a=mysql_query("select * from apertura where cedula='$peluqueria'");
		$d=mysql_fetch_array($a);
		$d1=$ss['duracion']*$d['tiempo'];
		
		$cierre=$d['hcierre'];
				
		echo "<font size='2'>Servicio: "."<strong>".$ss['servicio']."</strong></font><br>";
		
		$minutoAnadir=$d1;
		if($d1<45)
		{
			$me="Minutos";
		}
		else
		{
			$me="Hora(s)";
		}
		$hora="00:00";
		$segundos_horaInicial=strtotime($hora);
		$segundos_minutoAnadir=$minutoAnadir*60;
		
		$nuevaHora=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);
		$horaInicial=$nuevaHora;
		$hinicio=$horaInicial;
		$ht1=$hinicio;
		
		echo "<font size='2'>Duración: "."<strong>".$ht1."</strong> ".$me."</font><br>";
				
		$minutoAnadir=($d['tiempo']*2);
		$segundos_horaInicial=strtotime($cierre);
		$segundos_minutoAnadir=$minutoAnadir*60;
		
		$nuevaHora=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);
		$horaInicial=$nuevaHora;
		$hinicio=$horaInicial;
		$cierre=$hinicio;
		
		$minutoAnadir=$d1;
		$segundos_horaInicial=strtotime($cierre);
		$segundos_minutoAnadir=$minutoAnadir*60;
		
		$nuevaHora=date("H:i",$segundos_horaInicial-$segundos_minutoAnadir);
		$horaInicial=$nuevaHora;
		$hinicio=$horaInicial;
		
		if($ss['servicio']<>"")
		{
			echo "<font size='2'>Hora máxima de solicitud del servicio: "."<strong>".$hinicio." Horas..</strong></font><br>";
		}
		else
		{
			echo "<font size='3'>Hora máxima para solicitar este servicio: "."<strong>"."00:00"." Horas.</strong></font><br>";
		}
		echo "<br>";
		echo "<font size='3'>Profesional"."</font><br>";
		$p3=mysql_query("select * from ipeluquero where cedula='$profesional'");
		$d3=mysql_fetch_array($p3);
		$no=$d3['dilogo'];
		echo "<br>";
		echo "<img src='http://tecnostylo.com/peluqueros/".$no."' width='80' height='80' border='3' class='i2'/>";

		
		?></td>
          </tr>
        </table>
	    <p>
          <?Php
$ca=mysql_query("select * from apertura where cedula='$peluqueria'");
$da=mysql_fetch_array($ca);
$ti=$da['tiempo'];

$hinicio=$_GET['hora'];

$cs=mysql_query("select * from servicios where id='".$_GET['servicio']."'");
$ds=mysql_fetch_array($cs);
if($r3=="")
{
	$t=$ds['duracion']*$ti;
}
else
{
	if($_GET['hora']<>"")
	{
		$t=0;
		echo "A ocurrido un error, no podemos asiganarte la cita...  "; //$r3;
		echo "<a href='#' id='open' class='vi'>click aqui</a>";
	}
}

//hinicio

$minutoAnadir=$t-$ti;
$segundos_horaInicial=strtotime($hinicio);
$segundos_minutoAnadir=$minutoAnadir*60;

$nuevaHora=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);
$horaInicial=$nuevaHora;
$hinicio2=$horaInicial;

while($hinicio<=$hinicio2)
{
	//Almacenando los Datos en la DBF
	if($_GET['hora']<>"")
	{
		$in=mysql_query("insert into agenda(id,peluqueria,peluquero,cliente,servicio,fecha,hora)values('','$peluqueria','$profesional','$cliente','$servicio','$fecha','$hinicio')");
	}
	if($in)
	{
		
	}
	//
	
	$minutoAnadir=$ti;
	$segundos_horaInicial=strtotime($hinicio);
	$segundos_minutoAnadir=$minutoAnadir*60;

	$nuevaHora=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);
	$horaInicial=$nuevaHora;
	$hinicio=$horaInicial;
}
?>
          <?Php
$ca=mysql_query("select * from apertura where cedula='$peluqueria'");
$da=mysql_fetch_array($ca);
$t=$da['tiempo'];

$hinicio=$da['hinicio'];
$hinicio2=$da['hcierre'];

//hinicio

$minutoAnadir=$t;
$segundos_horaInicial=strtotime($hinicio);
$segundos_minutoAnadir=$minutoAnadir*60;

$nuevaHora=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);
$horaInicial=$nuevaHora;
$hinicio=$horaInicial;

//
//hcierre

$minutoAnadir=$t;
$segundos_horaInicial=strtotime($hinicio2);
$segundos_minutoAnadir=$minutoAnadir*60;

$nuevaHora=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);
$horaInicial=$nuevaHora;
$hinicio2=$horaInicial;

//
echo "<table align='center' border='1' bordercolor='#FFFFFF' width='100%'>";
echo "<tr>";
while($hinicio<=$hinicio2)
{
	if($k<2)
	{
		$co=mysql_query("select * from agenda where peluquero='$profesional' and fecha='$fecha' and hora='$hinicio'");
		$da=mysql_fetch_array($co);
		if($da['servicio']=="at")
		{
			echo "<td width='80px' align='center' bgcolor='#2689C5'>";
			echo "<br>";
			echo $hinicio;
			echo "<p></p>";
			echo "</td>";
			$c=$c+1;
		}
		if($da['servicio']<>"at" and $da['servicio']<>"")
		{
			echo "<td width='80px' align='center' bgcolor='#A12683'>";
			echo "<br>";
			$cliente=$da['cliente'];
			$cl=mysql_query("select * from clipelu where cedula='$cliente'");
			$dl=mysql_fetch_array($cl);
			echo $hinicio;
			echo "<br>".$dl['nombres'];
			echo "</td>";
			$k=$k+1;
		}
		else
		{
			if($da['servicio']<>$servicio and $da['servicio']<>"at")
			{
				echo "<td width='80px' align='center' bgcolor='#02AF1F'>";
				echo "<br>";
				echo "<a href='nage4.php?peluquero=$profesional&fecha=$fecha&servicio=$servicio&peluqueria=$peluqueria&hora=$hinicio&cliente=$cliente'>".$hinicio."</a>";
				echo "<p></p>";
				echo "</td>";
				$k=$k+1;
			}
		}
	}
	else
	{
		// salto de Linea
		$co=mysql_query("select * from agenda where peluquero='$profesional' and fecha='$fecha' and hora='$hinicio'");
		$da=mysql_fetch_array($co);
		if($da['servicio']=="at")
		{
			echo "<td width='80px' align='center' bgcolor='#2689C5'>";
			echo "<br>";
			echo $hinicio;
			echo "<p></p>";
			echo "</td>";
			echo "<tr>";
			$k=0;
		}
		if($da['servicio']<>"at" and $da['servicio']<>"")
		{
			echo "<td width='80px' align='center' bgcolor='#A12683'>";
			echo "<br>";
			$cliente=$da['cliente'];
			$cl=mysql_query("select * from clipelu where cedula='$cliente'");
			$dl=mysql_fetch_array($cl);
			echo $hinicio;
			echo "<br>".$dl['nombres'];
			echo "</td>";
			echo "<tr>";
			$k=0;
		}
		else
		{
			if($da['servicio']<>$servicio and $da['servicio']<>"at")
			{
				echo "<td width='80px' align='center' bgcolor='#02AF1F'>";
				echo "<br>";
				echo "<a href='nage4.php?peluquero=$profesional&fecha=$fecha&servicio=$servicio&peluqueria=$peluqueria&hora=$hinicio&cliente=$cliente'>".$hinicio."</a>";
				echo "<p></p>";
				echo "</td>";
				echo "<tr>";
				$k=0;
			}
		
		}
		
		//
	}
	$minutoAnadir=$t;
	$segundos_horaInicial=strtotime($hinicio);
	$segundos_minutoAnadir=$minutoAnadir*60;

	$nuevaHora=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);
	$horaInicial=$nuevaHora;
	$hinicio=$horaInicial;
}
echo "</tr>";
echo "</table>";
?>
        </p>
</div>

</body>
</html>