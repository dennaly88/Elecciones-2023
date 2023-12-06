<!-----------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ                                                  |
| CEDULA    : V 16.029.567                                                                             |
| TELEFONO  : 0426-249-15-40                                                                           |
| CORREO    : DENNALY88@GMAIL.COM                                                                      |
| DIRECCIÓN : CUA , ESTADO MIRANDA  CONJUTO RESIDENCIAL EL CASTILLO APARTAMENTO 62-C                   |                                                     |
|------------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|  
|                                                                                                      |
|  VENEZOLANA DE TELEVISIÓN C.A                                                                        |
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISIÓN DE SERVIDORES Y REDES                                    |
|  CANAL 8                                                                                             |
|                                                                                                      |
|  PROYECTO SOCIOTECNOLOGICO                                                                           |
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA                                                  |
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA                                                    |
|                                                                                                      | 
-------------------------------------------------------------------------------------------------------- 
------------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="imagenes/logo1-vtv.ico">
    <title>Elecciones 2023 | VTV</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>

<!-------------------------------------------------------------------------------------------------------- 
                                           PRINCIPAL SISTEMA
------------------------------------------------------------------------------------------------------->

<body class="hold-transition skin-blue sidebar-mini">
  
<div class="wrapper">

<?php
                session_start();
		            $usuario=$_SESSION['usuario'] ;
                $imagen=$_SESSION['imagen'];
                $nombres=$_SESSION['nombres'];
                $apellidos= $_SESSION['apellidos'];    
                $id_rol=$_SESSION['id_rol']; 
                $corre=$_SESSION['corre'];             
?> 

<!-------------------------------------------------------------------------------------------------------- 
                                           CONSULTA DE PERFIL
------------------------------------------------------------------------------------------------------->
<?php 
session_start();
include('sql/conexion.php');

  if(!$conexion)  
{
  include ('mensajes/conexion-fallida.php');  
}
else {
       
$id=$_SESSION['id'];          
$id_rol=$_SESSION['id_rol'];                       
$imagen=$_SESSION['imagen'];
$nombres=$_SESSION['nombres'];
$apellidos=$_SESSION['apellidos'];
$usuario=$_SESSION['usuario'];
$consulta=" SELECT * FROM usuarios u INNER JOIN roles r  ON u.id_rol=r.id  WHERE '$id'=u.id ";
$result=mysqli_query($conexion,$consulta);          
while($mostrar=mysqli_fetch_array($result)){
  ?> 
<?php
$perfil=$mostrar['nombre']; 
session_start();
$_SESSION['perfil']=$perfil;

}
  ?>	
<?php 
if ($id_rol == '1') {

  $perfil='Administrador';
   
  } else
  if ($id_rol == '2') {
  
    $perfil='Coordinador';
  
  
  } else
  if ($id_rol == '3'){
    $perfil='Tecnico';
  
  }
} 
?> 
<?php
session_start();
$edit_gerencias=$_POST['edit_gerencias'];   
$_SESSION['edit_gerencias']=$edit_gerencias;          
$busqueda_gerencias=$_SESSION['edit_gerencias'];
  



$dat = $_GET["dat"];
$gerencias=$_GET["edit_gerencia"];
$codnom=$_GET["codnom"];
if ($codnom =='1') {
  $gerencias = 'OFICINA DE ATENCION CIUDADANA';
  } else
  if ($codnom =='2') {
    $gerencias = 'PRESIDENCIA';
  } else
  if ($codnom =='3') {
    $gerencias = 'RELACIONES PUBLICAS';
  }
  if ($codnom =='4') {
    $gerencias = 'CONSULTORIA JURIDICA';
  }
  if ($codnom =='5') {
    $gerencias = 'UNIDAD DE AUDITORIA INTERNA';
  } if ($codnom =='6') {
    $gerencias = 'JUNTA DIRECTIVA';
  } if ($codnom =='7') {
    $gerencias = 'INGENIERIA';
  } if ($codnom =='8') {
    $gerencias = 'VICEPRESIDENCIA DE SOPORTE TECNOLOGICO';
  } if ($codnom =='9') {
    $gerencias = 'SERVICIOS A LA PRODUCCION';
  } if ($codnom =='10') {
    $gerencias = 'GESTION HUMANA';
  } if ($codnom =='11') {
    $gerencias = 'COMERCIALIZACION Y VENTAS';
  } if ($codnom =='12') {
    $gerencias = 'VICEPRESIDENCIA EJECUTIVA';
  } if ($codnom =='13') {
    $gerencias = 'PLANIFICACION Y PRESUPUESTO';
  } if ($codnom =='14') {
    $gerencias = 'ASUNTOS PUBLICOS';
  } if ($codnom =='15') {
    $gerencias = 'SERVICIOS INFORMATIVOS';
  } if ($codnom =='16') {
    $gerencias = 'VICEPRESIDENCIA DE INFORMACION';
  } if ($codnom =='17') {
    $gerencias = 'PROGRAMACION';
  } if ($codnom =='18') {
    $gerencias = 'VICEPRESIDENCIA EJECUTIVA DE PRODUCCION';
  } if ($codnom =='19') {
    $gerencias = 'PROGRAMAS';
  } if ($codnom =='20') {
    $gerencias = 'MULTIMEDIOS';
  } if ($codnom =='21') {
    $gerencias = 'ARCHIVO AUDIOVISUAL';
  } if ($codnom =='22') {
    $gerencias = 'CONTRATACIONES PUBLICAS';
  } if ($codnom =='23') {
    $gerencias = 'ADMINISTRACION Y FINANZAS';
  } if ($codnom =='24') {
    $gerencias = 'INFRAESTRUCTURA Y SERVICIOS GENERALES';
  } if ($codnom =='25') {
    $gerencias = 'SEGURIDAD INTEGRAL';
  } if ($codnom =='26') {
    $gerencias = 'TECNOLOGIA DE LA INFORMACION Y COMUNICACION';
  } if ($codnom =='27') {
    $gerencias = 'IMAGEN';
  }

 

switch ($dat) { 
  case 1:
    $gerencia='TECNOLOGIA DE LA INFORMACION Y COMUNICACION';  
    $_SESSION['gerencia']=$gerencia; 
    

  break;
  case 2:
    $gerencia=$busqueda_gerencias;
    $_SESSION['gerencia']=$gerencia;
    break;
  case 3:
    $gerencia=$gerencias; 
    break;   
   } 
			?>



                <?php
                          $usu=$_GET["usu"];
                          switch ($usu) { 
                              case 1:require ("mensajes/voto.php");                           
                              break;
                              
                                   } 
                    ?>  
                    
                    
                   



      
<!-------------------------------------------------------------------------------------------------------- 
                                           CONSULTA DE PERFIL
------------------------------------------------------------------------------------------------------->

      <?php require ("libreria.php");?>
      <?php require ("menu-horizontal.php");?>
      <?php require ("menu-vertical.php");?>
     
  <div class="content-wrapper">
        <?php require ("cuerpo-superior.php");?>
        <?php require ("cuerpo-principal.php");?>
        
  </div>
       <?php require ("footer.php");?>

       <?php

$da=$_GET["da"];
switch ($da) { 
    //case 88:require ("bienvenida.php"); 
    case 88:require ("mensajes/voto.php"); 
    break;
    
}  
?>  
      
</div>
</body>

<!-------------------------------------------------------------------------------------------------------- 
                                           
------------------------------------------------------------------------------------------------------->

</html>
<!-----------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|
| PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ                                                  |
| CEDULA    : V 16.029.567                                                                             |
| TELEFONO  : 0426-249-15-40                                                                           |
| CORREO    : DENNALY88@GMAIL.COM                                                                      |
| DIRECCIÓN : CUA , ESTADO MIRANDA  CONJUTO RESIDENCIAL EL CASTILLO APARTAMENTO 62-C                   |                                                     |
|------------------------------------------------------------------------------------------------------|
|------------------------------------------------------------------------------------------------------|  
|                                                                                                      |
|  VENEZOLANA DE TELEVISIÓN C.A                                                                        |
|  DIVISIÓN DESARROLLO DE SISTEMAS Y DIVISIÓN DE SERVIDORES Y REDES                                    |
|  CANAL 8                                                                                             |
|                                                                                                      |
|  PROYECTO SOCIOTECNOLOGICO                                                                           |
|  UNIVERSIDAD EXPERIMENTAL DE LA GRAN CARACAS UNEXCA                                                  |
|  PARA OPTAR POR EL TITULO DE INGENIERO EN SISTEMA                                                    |
|                                                                                                      | 
-------------------------------------------------------------------------------------------------------- 
------------------------------------------------------------------------------------------------------->


