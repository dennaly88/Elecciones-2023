<!--------------------------------------------------------------------------------------------------------
|--------------------------------------------------------------------------------------------------------
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ   
| TELEFONO :0426-249-15-40
| CORREO : DENNALY88@GMAIL.COM
|------------------------------------------------------------------------------------------------------------
|  
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISION DE SERVIDORES Y REDES
|  VENEZOLANA DE TELEVISION C.A
|  CANAL 8
|  PROYECTO SOCIOTECNOLOGICO 
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA 
| 
| 
--------------------------------------------------------------------------------------------------------->

<?php

include('conexion.php');
$edit_id=$_POST['edit_id'];
$edit_voto=$_POST['edit_voto'];
$gerencias=$_POST['edit_gerencia'];
$edit_observacion=$_POST['edit_observacion'];




 
if ( $gerencias == 'OFICINA DE ATENCION CIUDADANA') {
  $codnom='1'; 
  } else
  if ( $gerencias == 'PRESIDENCIA') {
      $codnom='2';
  } else
  if ( $gerencias == 'RELACIONES PUBLICAS') {
      $codnom='3';
  }
  else
  if ( $gerencias == 'CONSULTORIA JURIDICA') {
      $codnom='4';
  }
  else
  if ( $gerencias == 'UNIDAD DE AUDITORIA INTERNA') {
      $codnom='5';
  }
  else
  if ( $gerencias == 'JUNTA DIRECTIVA') {
      $codnom='6';
  }
  else
  if ( $gerencias == 'INGENIERIA') { 
      $codnom='7'; 
  }
  else
  if ( $gerencias == 'VICEPRESIDENCIA DE SOPORTE TECNOLOGICO') {
      $codnom='8';  
  }
  else
  if ( $gerencias == 'SERVICIOS A LA PRODUCCION') {
      $codnom='9';
  }
  else
  if ( $gerencias == 'GESTION HUMANA') {
      $codnom='10';
  }
  else
  if ( $gerencias == 'COMERCIALIZACION Y VENTAS') {
      $codnom='11';
  }else
  if ( $gerencias == 'VICEPRESIDENCIA EJECUTIVA') {
      $codnom='12'; 
  }else
  if ( $gerencias == 'PLANIFICACION Y PRESUPUESTO') {
      $codnom='13'; 
  }else
  if ( $gerencias == 'ASUNTOS PUBLICOS') {
      $codnom='14';  
  }else
  if ( $gerencias == 'SERVICIOS INFORMATIVOS') {
      $codnom='15';  
  }else
  if ( $gerencias == 'VICEPRESIDENCIA DE INFORMACION') {
      $codnom='16';  
  }else
  if ( $gerencias == 'PROGRAMACION') {
      $codnom='17';  
  }else
  if ( $gerencias == 'VICEPRESIDENCIA EJECUTIVA DE PRODUCCION') {
      $codnom='18';  
  }else
  if ( $gerencias == 'PROGRAMAS') {
      $codnom='19'; 
  }else
  if ( $gerencias == 'MULTIMEDIOS') {
      $codnom='20'; 
  }else
  if ( $gerencias == 'ARCHIVO AUDIOVISUAL') {
      $codnom='21';
  }else
  if ( $gerencias == 'CONTRATACIONES PUBLICAS') {
      $codnom='22';  
  }else
  if ( $gerencias == 'ADMINISTRACION Y FINANZAS') {
      $codnom='23'; 
  }else
  if ( $gerencias == 'INFRAESTRUCTURA Y SERVICIOS GENERALES') {
      $codnom='24';
  }else
  if ( $gerencias == 'SEGURIDAD INTEGRAL') {
      $codnom='25';  
  }else
  if ( $gerencias == 'TECNOLOGIA DE LA INFORMACION Y COMUNICACION') {
      $codnom='26';
  }
  else
  if ( $gerencias == 'IMAGEN') {
      $codnom='27';
  }


if (!$conexion) {
     
      header("location:../index.php?usu=6");
}
 
$sql = "UPDATE nomina SET id='$edit_id',voto='$edit_voto',observacion='$edit_observacion' WHERE id='$edit_id'" ;

if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../index.php?dat=3&usu=1&codnom=$codnom");

} else {

      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
      
}
mysqli_close($conexion);
?>














<!--------------------------------------------------------------------------------------------------------
|--------------------------------------------------------------------------------------------------------
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ   
| TELEFONO :0426-249-15-40
| CORREO : DENNALY88@GMAIL.COM
|------------------------------------------------------------------------------------------------------------
|  
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISION DE SERVIDORES Y REDES
|  VENEZOLANA DE TELEVISION C.A
|  CANAL 8
|  PROYECTO SOCIOTECNOLOGICO 
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA 
| 
| 
--------------------------------------------------------------------------------------------------------->
	
















