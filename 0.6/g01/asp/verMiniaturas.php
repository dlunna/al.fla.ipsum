<?php
header("Content-type: text/xml");
$dir="minis/";
$dr=@opendir($dir);
if(!$dr){
echo "<error/>";
exit;
} else {
echo "<exploracion>";
// recorremos todos los elementos de la carpeta
while (($archivo = readdir($dr)) !== false) {
// comprobamos que sean archivos y no otras carpetas
if(filetype($dir . $archivo)!="dir"){
$tam=round(filesize($dir . $archivo)/1024,0);
echo "<archivo nombre='$archivo' size='$tam'/>";
}
}
echo "</exploracion>";
closedir($dr);
}
?>