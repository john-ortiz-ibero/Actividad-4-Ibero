<?php
require_once('../app/config.php');
require_once('../includes/inc_header_home.php');
require_once('../includes/inc_navbar_home.php');
?>

<body>


    <!--AQUI TENGO EL CONTENIDO PRINCIPAL-->

    <div class="container-fuid" style="width: 98%;">

        <div class="row ">
            <div class="col-lg-2  my-3">
                <div class="row">
                    <h2 style="font-size: 19px; margin-bottom: 60px;">Ociones de búsqueda</h2>

                    <!--  document search-->
                    <form class="d-flex" style="margin-left: -3px;">
                        <input class="form-control  me-2" type="search" placeholder="Ingrese documento!important" aria-label="Search">
                        <button class="btn btn-outline-light"  type="submit">Buscar</button>
                    </form>
                    



                </div>

            </div>

            <!-- container lista de estudiantes -->
            <div class="col-xl-10 bg-light  my-3">

                <div class="web-header ">
                    <h2 style="font-size: 50px; text-align: center;">Conductores Registrados</h2>
                    <button type="button" class="btn btn-secondary" id="BtnRegisterModal" data-bs-toggle="modal" data-bs-target="#Modal" class="btn "><span><i class="fas fa-plus"> </i> </span>Nuevo Conductor</button>

                </div>
                <style>
                    .table th {
                        width: 1px !important;
                    }
                </style>
                <table class="table table-striped table table-bordered ">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Documento</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Celular</th>
                            <th>Correo</th>
                            <th>Vehicuilo asignado</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>

                    <tbody id="Conductor-table">


                    </tbody>
                </table>


            </div>
        </div>



    </div>
<!-- modal registro nuevo bootstrapp -->
    <!-- Modal -->
    <div class="modal " id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Registro de conductores nuevos</h3>
                   
                </div>
                <div class="modal-body">
                    <section class="modal-card-body">
                        <!-- Content ... -->

                        <form class="row g-3 needs-validation" id="register-conductor" >
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Número de documento</label>
                                <input  type="text" class="form-control" name="DocumentoC" placeholder="Documento de Identidad" maxlength="10" minlength="8" >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Nombres</label>
                                <input type="text" class="form-control" type="text" name="NombresC" placeholder="Nombre completo" >

                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" type="text" name="ApellidoC" placeholder="Apellidos" >

                            </div>
                            
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Celular</label>
                                <input type="text" class="form-control" type="text" name="Celular" placeholder="Celular" >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Correo Electrónico</label>
                                <input type="text" class="form-control" type="email" name="Email" placeholder="Correo electrónico" >

                            </div>
             
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Placa de vehiculo asignado</label>
                                <input type="text" class="form-control" type="text" name="VehiculoC" placeholder="Vehiculo asignado" >

                            </div>

                           
                
                    </section>
                </div>
                <footer  class="modal-footer" >
                    
                        <button type="submit" data-bs-toggle="close" data-bs-target="#Modal" id="guardarNuevo"   class="btn btn-success">
                            <i class="fas fa-save "> </i> <span>Guardar</span> </button>
                            <button type="button" class="btn-close" id="CerrarRegisterModal" data-bs-dismiss="modal" aria-label="Close"></button>
                        </form>
                    </footer>
                </div>
            </div>
        </div>
    
<!-- modal bootstrapp -->

<!-- modal update bootstrapp -->
    <!-- Modal -->
    <div class="modal " id="Modal_updateC" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Actualizar conductor</h3>
                   
                </div>
                <div class="modal-body">
                    <section class="modal-card-body">
                        <!-- Content ... -->

                        <form class="row g-3 needs-validation" id="updateFormC" >
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Número de documento</label>
                                <input required type="text" class="form-control" name="DocumentoC" placeholder="Documento de Identidad" maxlength="10" minlength="8" >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Nombres</label>
                                <input type="text" class="form-control" type="text" name="NombresC" placeholder="Nombres Completos" required>

                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" type="text" name="ApellidoC" placeholder="Apellidos" required>

                            </div>
                            
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Celular</label>
                                <input type="text" class="form-control" type="text" name="Celular" placeholder="Celular" required>

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Correo Electrónico</label>
                                <input type="text" class="form-control" type="email" name="Email" placeholder="Correo electrónico" required>

                            </div>
             
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Placa de vehiculo asignado</label>
                                <input type="text" class="form-control" type="text" name="VehiculoC" placeholder="Vehiculo asignado" required>

                            </div>

                           
                
                    </section>
                </div>
                <footer  class="modal-footer" >
                    
                        <button type="submit" data-bs-toggle="close" data-bs-target="#Modal" id="guardarNuevo"   class="btn btn-success">
                            <i class="fas fa-save "> </i> <span>Actualizar</span> </button>
                            <button type="button" class="btn-close" id="CerrarRegisterModal" data-bs-dismiss="modal" aria-label="Close"></button>
                        </form>
                    </footer>
                </div>
            </div>
        </div>
    
<!-- modal bootstrapp -->

    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase.js "></script> <!-- conexión a firebase -->
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-database.js "></script> <!-- conexión a firebase -->
   
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="<?php echo JS . 'conductores.js' ?>"></script> <!-- estudiantes  -->
    <script src="<?php echo JS . 'main.js' ?> "></script> <!-- main.js -->
    <!-- js booststrap -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo PLUGINS . 'waitMe/waitMe.min.js' ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
</body>

</html>