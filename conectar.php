<?Php
function Conectarse() 
{ 
   if (!($link=mysql_connect("localhost","tecnosty_lector","57066agu"))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysql_select_db("tecnosty_principal",$link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
} 
$link=Conectarse();
?>