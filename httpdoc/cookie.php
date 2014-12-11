<?Php
if($_COOKIE['usuario']<>"")
{
 $ce=$_COOKIE['usuario'];
 $cedula=$_COOKIE['peluqueria'];
 echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=http://tecnostylo.com/pw3/index.php?cedula=$cedula'>";
} 
else 
{ 
 echo "<meta name='viewport' content='width=device-width, initial-scale=1'/>";
 echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=vi.php'>";
}
include('conectar.php');
?>
[6:39:59] luis acevedo: <?Php
setcookie("usuario", $_POST['cedula'], time()+(60*60*24*365));
include('conectar.php');
$ce=$_POST['cedula'];
$c=mysql_query("select * from clipelu where cedula='$ce'");
$d=mysql_fetch_array($c);
$cedula=$d['id_pelu'];
if($cedula<>"")
{
 setcookie("peluqueria", $d['id_pelu']);
 echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=vcookie.php'>";
}
else
{
 setcookie("usuario", "", time()+(60*60*24*365));
 echo "<meta name='viewport' content='width=device-width, initial-scale=1'/>";
 echo "<div align='center'><img src='registrese.png'/>"."<br>";
 echo "Regístrese para poder disfrutar de la aplicación, oprima cualquier botón para volver a intentar";
 echo "</div>";
}

?>