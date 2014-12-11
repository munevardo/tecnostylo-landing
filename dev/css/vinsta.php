<?Php
echo $_COOKIE['usuario'];
if($_COOKIE['usuario']<>"")
{
	include('conectar.php');
	$ce=$_COOKIE['usuario'];
	$cedula=$_COOKIE['peluqueria'];
	$co=mysql_query("select * from redsocial where cedula='$cedula'");
	$dt=mysql_fetch_array($co);
	$face=$dt['instagram'];
	echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=$face'>";
} 
else 
{ 
	echo "<meta name='viewport' content='width=device-width, initial-scale=1'/>";
	echo "no hay cookie Creada";
	echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=vi.php'>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Documento sin t&iacute;tulo</title>
</head>

<body>
</body>
</html>
