<?php
require 'guarda_alumnos.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Dosis:400,800" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.min.js"></script>
  </head>
  <body class="">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-4 col-sm-8 "></div>

    <div class="col-12 col-md-4 col-sm-8 ">

                <form class="frm_Inicio"  method="POST">

                 <h1 class="text-center title ti">Reading</h1>

                     <button type="button" class="btn btn-primary btn-block mt-3" data-toggle="modal" data-target="#exampleModal">
                        Registrar alumno
                      </button>
                             <!-- Modal -->
                             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                     <!-- Cabeza -->
                                     <div class="modal-header">
                                       <h5 class="cm modal-title" id="exampleModalLabel" style="color:black;">Alumno</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                       </button>
                                     </div>
                                   <!-- Cuerpo -->
                                   <div class="modal-body">
                                     <div class="form-row">
                                      <div class="form-group col-md-4">
                                        <input type="hidden" name="usuario" value="alumno">
                                        <label for="">Nombre(s):</label>
                                        <input type="text" class="form-control <?php echo (isset($error['Nombre']))?"is-invalid":"" ?> "  name="nombre" placeholder="Nombres(s)" require="">
                                        <div class="invalid-feedback">
                                           <?php echo (isset($error['Nombre']))?$error['Nombre']:"" ?>
                                        </div>
                                       </div>

                                       <div class="form-group col-md-4">
                                         <label for="">Apellido Paterno:</label>
                                         <input type="text" class="form-control <?php echo (isset($error['ApellidoP']))?"is-invalid":"" ?> "  name="ape-pa" placeholder="Apellido paterno" require="">
                                         <div class="invalid-feedback">
                                            <?php echo (isset($error['ApellidoP']))?$error['ApellidoP']:"" ?>
                                         </div>
                                        </div>

                                        <div class="form-group col-md-4">
                                          <label for="">Apellido Paterno:</label>
                                          <input type="text" class="form-control <?php echo (isset($error['ApellidoM']))?"is-invalid":"" ?> "  name="ape-ma" placeholder="Apellido materno" require="">
                                          <div class="invalid-feedback">
                                             <?php echo (isset($error['ApellidoM']))?$error['ApellidoM']:"" ?>
                                          </div>
                                         </div>

                                         <div class="form-group col-md-4">
                                           <label for="">Matricula:</label>
                                           <input type="text" class="form-control <?php echo (isset($error['Matricula']))?"is-invalid":"" ?>"  name="matricula" placeholder="Matricula" require="">
                                           <div class="invalid-feedback">
                                              <?php echo (isset($error['Matricula']))?$error['Matricula']:"" ?>
                                           </div>
                                        </div>

                                         <div class="form-group col-md-4">
                                           <label for="">Grado:</label>
                                           <input type="text" class="form-control <?php echo (isset($error['Grado']))?"is-invalid":"" ?>"  name="grado" placeholder="Grado" require="">
                                           <div class="invalid-feedback">
                                              <?php echo (isset($error['Grado']))?$error['Grado']:"" ?>
                                           </div>
                                        </div>

                                          <div class="form-group col-md-4">
                                            <label for="">Grupo:</label>
                                            <input type="text" class="form-control <?php echo (isset($error['Grupo']))?"is-invalid":"" ?>"  name="grupo" placeholder="Grupo" require="" >
                                            <div class="invalid-feedback">
                                               <?php echo (isset($error['Grupo']))?$error['Grupo']:"" ?>
                                            </div>
                                           </div>

                                           <div class="form-group col-md-6">
                                             <label for="">Contraseña:</label>
                                             <input type="password" class="form-control <?php echo (isset($error['Contraseña']))?"is-invalid":"" ?>"  name="contra" placeholder="Contraseña" require="">
                                             <div class="invalid-feedback">
                                                <?php echo (isset($error['Contraseña']))?$error['Contraseña']:"" ?>
                                             </div>
                                          </div>

                                          <div class="form-group col-md-6">
                                            <label for="">Confirmar Contraseña:</label>
                                            <input type="password" class="form-control <?php echo (isset($error['contra_repe']))?"is-invalid":"" ?>"  name="contra-repe" placeholder="Confirmar Contraseña" require="">
                                            <div class="invalid-feedback">
                                               <?php echo (isset($error['contra_repe']))?$error['contra_repe']:"" ?>
                                            </div>
                                           </div>

                                     </div><!-- Final form-row -->
                                   </div><!-- Final modal body -->
                                   <!-- Final -->
                                   <div class="modal-footer">
                                     <button  id="btn_alumno2" value="btnAgregar_alu" type="submit" class="btn btn-success btn-block mt-3" name="accion">Guardar</button>

                                   </div>
                                 </div>
                               </div>
                             </div><!--final modal-->
                             <button type="button" class="btn btn-success btn-block mt-3" data-toggle="modal" data-target="#modaldos">
                              Registrar Profesor
                              </button><br>

                      <div class="text-center">
                            <a href="index.php">Salir</a>
                      </div>

             </form>


              <form  method="post">
                <!-- Modal PROFESOR -->

                     <!-- Modal -->
                     <div class="modal fade" id="modaldos" tabindex="-1" role="dialog" aria-labelledby="modaldosLabel" aria-hidden="true">
                       <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <!-- Cabeza -->
                           <div class="modal-header">
                             <h5 class="modal-title" id="modal2Label" style="color:black;">Registrar Profesor</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                           <!-- Cuerpo -->
                           <div class="modal-body">
                             <div class="form-row">
                                 <input type="hidden" name="usuario_doc" value="docente">
                               <div class="form-group col-md-4">
                                 <label for="">Nombre(s):</label>
                                 <input type="text" class="form-control"  name="nombre_doc" placeholder="Nombres(s)" required>
                                </div>

                                <div class="form-group col-md-4">
                                  <label for="">Apellido Paterno:</label>
                                  <input type="text" class="form-control "  name="ape_pa_doc" placeholder="Apellido paterno" required>
                                 </div>

                                 <div class="form-group col-md-4">
                                   <label for="">Apellido Paterno:</label>
                                   <input type="text" class="form-control "  name="ape_ma_doc" placeholder="Apellido materno" required>
                                 </div>

                                  <div class="form-group col-md-7">
                                      <label for="">Grupos a impartir:</label><br>
                                      <input class="chek" type="checkbox" name="1A" value="1A">
                                      <label  for="">1° "A"</label>&nbsp; &nbsp;
                                      <input class="chek" type="checkbox" name="1B">
                                      <label  for="">1° "B"</label>&nbsp; &nbsp;
                                      <input class="chek" type="checkbox" name="1C">
                                      <label  for="">1° "C"</label> &nbsp; &nbsp;<br>
                                      <input class="chek mt-2" type="checkbox" name="2A">
                                      <label  for="">2° "A"</label>&nbsp; &nbsp;
                                      <input class="chek" type="checkbox" name="2B">
                                      <label  for="">2° "B"</label>&nbsp; &nbsp;
                                      <input class="chek" type="checkbox" name="2C">
                                      <label  for="">2° "C"</label>&nbsp; &nbsp;
                                   </div>

                                   <div class="form-group col-md-5">
                                     <label for="">N° Empleado:</label>
                                     <input  type="text" class="form-control"  name="empleado" placeholder="N° Empleado" required><br>
                                   </div>

                                   <div class="form-group col-md-6">
                                     <label for="">Contraseña:</label>
                                     <input type="password" class="form-control"  name="contra_doc" placeholder="Contraseña" required>
                                  </div>

                                  <div class="form-group col-md-6">
                                    <label for="">Confirmar Contraseña:</label>
                                    <input type="password" class="form-control "  name="contra_doc_repe" placeholder="Confirmar Contraseña" required>
                                   </div>
                               </div>
                               <?php if(isset($errorLogin)){?>
                                   <p class="mensaje" style="color:red; padding:5px; border-radius: 5px; background-color:#D1F2EB  ";> <?php echo $errorContra  ?></p>

                             <?php   }?>
                           </div>
                           <!-- Final -->
                           <div class="modal-footer">
                             <button value="btnAgregar_doc" id="pro" type="submit" class="btn btn-success btn-block mt-3" name="accion">Guardar</button>
                           </div>
                         </div>
                       </div>
                     </div>
                  </form>


      </div>
    </div>
  </div>

    <script src="js/jquery.slim.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script type="text/javascript">

    $("#btn_alumno").on("click", function(){
      Swal.fire({
        position: 'top-center',
        type: 'success',
        title: 'Guardado Correctamente',
        showConfirmButton: false,
        timer: 150
      })
    });
    </script>
    <?php if($mostrarModal) { ?>
      <script>
        $('#exampleModal').modal('show');
      </script>
    <?php  }?>

  </body>
</html>
