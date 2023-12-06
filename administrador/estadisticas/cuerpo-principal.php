<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
 
</head>
<body class="hold-transition skin-blue sidebar-mini">

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

<section class="content">
     
        

         <div class="box box-primary">
           <div class="box-header">

          
          

             <h3 class="box-title"> <span class="label btn bg-navy btn-fla  pull-left">
              INTERFAZ DE ESTADISTICAS POR GERENCIAS </h3></span>
              <div class="pad margin no-print">

      
    </div>

    <center><a href="#registro_usuario" class='btn btn-primary btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-search'> </span>Buscar por Gerencias</a></center>
    <section class="invoice">
    
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <img href="#" src="imagenes/logo1-vtv.ico" alt="logo">
            <?php echo  $gerencia; ?>

           

            <small class="pull-right">
               <a href="#registro_usuario" class='btn btn-danger btn-sm' data-toggle='modal'>
                FECHA : <?php  echo  date("d-M-Y"); ?>
                HORA :<?php 
                    date_default_timezone_set("America/Caracas");
                    $hora = date('h:i a',time() - 3600*date('I'));
                    print "&nbsp;$hora&nbsp;"; 
                  ?>
                  </a>
                </small>
          </h2>
        </div>
       
      </div>
     

      <div class="row">
        
       
  
      </div>
      <?php include('buscar-gerencia.php');?> 

                <?php
                        include('sql/conexion.php');
                         
                        $sql = "SELECT COUNT(*) total FROM nomina where gerencia='$gerencia'";
                        $result = mysqli_query($conexion, $sql);
                        $totalgerencia = mysqli_fetch_assoc($result);

                    ?>
                   <?php
                        include('sql/conexion.php');
                         
                        $sql = "SELECT COUNT(*) total FROM nomina where gerencia='$gerencia' and voto='SI'";
                        $result = mysqli_query($conexion, $sql);
                        $sivotarongerencia = mysqli_fetch_assoc($result);

                    ?>
                 <?php
                        include('sql/conexion.php');
                         
                        $sql = "SELECT COUNT(*) total FROM nomina where gerencia='$gerencia' and voto='NO'";
                        $result = mysqli_query($conexion, $sql);
                        $novotarongerencia = mysqli_fetch_assoc($result);

                    ?>



                  
              
                  







      <section class="content">
    
  
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Estadisticas de la Gerencia</h3>

            
            </div>
            
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                      <th>Nombre</th>
                      <th>Cantidad</th>
                      <th>Status</th>
                      <th>Información</th>
                </tr>
                <tr> 
                      <td>Cantidad de la Gerencia</td>
                      <td> <?php echo  $totalgerencia['total']; ?>  </td>
                      <td><span class="label label-success">TOTAL</span></td>
                      <td>Cantidad Total de los Trabajadores por la Gerencia.</td>
                </tr>
                <tr>
                      <td>Votaron SI</td>
                      <td><?php echo   $sivotarongerencia['total']; ?></td>
                      <td><span class="label label-primary">SI</span></td>
                      <td>Cantidad Total de los Trabajadores que SI Votaron por esta Gerencia.</td>
                </tr>
                <tr>
                      <td>Votaron NO</td>
                      <td><?php echo   $novotarongerencia['total']; ?></td>
                      <td><span class="label label-danger">NO</span></td>
                      <td>Cantidad Total de los Trabajadores que NO Votaron por esta Gereancia .</td>
                </tr>
               
              </table>
            </div>
           
          </div>
          
        </div>
      </div>
    </section>
    
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-danger"><i class="fa fa-print"></i>Imprimir</a>
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i>Enviar
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </section>
              
   </section>

   





   <script>

   </script>

   <script src="librerias/js/usuario.js"></script>




</body>
</html>
