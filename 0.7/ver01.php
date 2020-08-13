<?php
  header("Content-type: text/xml");
  $dir="m01/";
  $dr=@opendir($dir);
  $nombres=array();
  if(!$dr){
    echo "<error/>";
    exit;
  } 
  else 
  {
    echo "<exploracion>";
	// recorremos todos los elementos de la carpeta
	$i=0;
    while (($archivo = readdir($dr)) !== false) 
	{
      // comprobamos que sean archivos y no otras carpetas
/*      if(filetype($dir . $archivo)!="dir")
	  {
	    $tam=round(filesize($dir . $archivo)/1024,0);
		echo "<archivo nombre='$archivo' size='$tam'/>";
      }*/
	  $nombres[$i]=$archivo;
	  $i++;
    }

	sort($nombres);

	for($k=2; $k<$i ; $k++)
	{
		echo "<archivo nombre='$nombres[$k]' size='1'/>";
	}
    echo "</exploracion>";
    closedir($dr);
  }
?>