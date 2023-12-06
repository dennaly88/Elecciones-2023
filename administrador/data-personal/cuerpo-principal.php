<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<section class="content">
         <div class="box box-primary">
           <div class="box-header">
             <h3 class="box-title"> <span class="label btn bg-navy btn-fla  pull-left">
              INTERFAZ DE  DATA PERSONAL VTV CANAL 8 </h3></span> 
           </div>           
           <div class="box-body">
           <center><a href="#registro" class='btn btn-success btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-user'> </span>Registrar Empleado</a></center>
            
            <br>
            <center><a href="#registro_usuario" class='btn btn-primary btn-sm' data-toggle='modal'>
            <span class='glyphicon glyphicon-search'> </span>Buscar por Gerencias</a></center>
             <table id="usuarios" class="table table-bordered table-striped">
               <thead>
                 <tr>
                                    <th>Foto</th>
                                    <th>Codigo</th>
                                    <th>Apellidos</th>
                                    <th>Nombres</th>
                                    <th>Cargo</th>
                                    <th>Cedula</th>
                                    <th>Gerencia</th>
                                    <th>División</th>
                                    <th>Telefono Casa</th>
                                    <th>Telefono Celular</th>
                                    <th>Voto</th>
                                    <th>Observacion</th>
                </tr>
               </thead>
               <tbody>
               <?php
               include('buscar-gerencia.php');
                  ?>      

  <?php echo  $gerencia; ?>
  
               <?php
                         $sql="SELECT * from nomina where gerencia='$gerencia'";
                        // $sql="SELECT id,nombres,apellidos,telefono,corre,usuario,contraseña,estado,iamgen,pregunta,cedula,id_rol from usuarios order by id desc";
                        
                         $result=mysqli_query($conexion,$sql);
                         while($row=mysqli_fetch_array($result))
                         
                         {
                         $imagen = '<img class="img-circle"  width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                         $voto=$row['voto'];
                         if($voto=='SI'){
                           
                           $voto='success'; 
                         }else
                         if($voto=='NO')
                         {

                           $voto='btn bg-maroon';
                         }
                       echo 
                     "<tr>
                     <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagen</a></td>
                           <td>".$row['codigo']."</td>
                           <td>".$row['apellidos']."</td>
                           <td>".$row['nombres']."</td>
                           <td>".$row['cargo']."</td>
                           <td>".$row['cedula']."</td>
                           <td>".$row['gerencia']."</td>
                           <td>".$row['division']."</td>
                           <td>".$row['telefono-casa']."</td>
                           <td>".$row['telefono-celular']."</td>
                           <td><a href='#voto_".$row['id']."' class='btn btn-$voto btn-xs' data-toggle='modal'>  ".$row['voto']."</a></td>
                           <td><a href='#observa_".$row['id']."' class='btn btn-black btn-lg' data-toggle='modal'><span class='fa fa-eye'></span></a></td>
                           </tr>"; 
                     
                     include('voto.php');
                     include('cambiar-foto.php');
                     include('registro.php');
                     include('observaciones.php');
                   }
                 ?>
               </tbody>
               <tfoot>
               <tr>
                                    <th>Foto</th>
                                    <th>Codigo</th>
                                    <th>Apellidos</th>
                                    <th>Nombres</th>
                                    <th>Cargo</th>
                                    <th>Cedula</th>
                                    <th>Gerencia</th>
                                    <th>División</th>
                                    <th>Telefono Casa</th>
                                    <th>Telefono Celular</th>
                                    <th>Voto</th>
                                    <th>Observacion</th>
               </tr>
               </tfoot>
             </table>
           </div>
         </div>
         <?php include('contador-votos.php');?>
   </section>
   <script src="librerias/js/usuario.js"></script>
</body>
</html>
