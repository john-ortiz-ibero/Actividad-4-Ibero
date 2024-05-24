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
                    <h2 style="font-size: 19px; margin-bottom: 60px;">Opciones de busqueda</h2>

                    <!--  document search-->
                    <form class="d-flex" style="margin-left: -3px;">
                        <input class="form-control  me-2" type="search" placeholder="Ingrese documento" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Buscar</button>
                    </form>
                    <!-- zonas -->
                    <select class="form-select "  aria-label="Default select example">
                        <option selected>Lista de zonas</option>
                        <option value="1">Zona Oriente</option>
                        <option value="2">Zona Occidente</option>
                        <option value="3">Zona Norte</option>
                        <option value="3">Zona Sur</option>

                    </select>
                    <!-- Jornada -->
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Jornadas</option>
                        <option value="1">Tarde</option>
                        <option value="2">Mañana</option>
                    </select>
                    <!-- Grado -->

                    <input class="form-control  my-4 mx-2" style="width: 110px; background-color: #003566!important;   " list="datalistOptions" id="exampleDataList" placeholder="Grados">
                    <datalist id="datalistOptions">
                        <option value="Preescolar">
                        <option value="Primero">
                        <option value="Segundo">
                        <option value="Tercero">
                        <option value="Cuarto">
                    </datalist>



                </div>

            </div>

            <!-- container lista de estudiantes -->
            <div class="col-xl-10 bg-light  my-3" id="col10">

                <div class="web-header ">
                    <h2 style="font-size: 50px; text-align: center;">Estudiantes Registrados</h2>
                    <button type="button" class="btn btn-secondary" id="BtnRegisterModal" data-bs-toggle="modal" data-bs-target="#Modal" class="btn "><span><i class="fas fa-plus"> </i> </span>Nuevo Estudiante</button>

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
                            <th>Código del estudiante</th>
                            <th>Nombre</th>
                            <th>Primer Apellido</th>
                            <th>Segundo Apellido</th>
                            <th>Grado</th>
                            <th>Jornada</th>
                            <th>RH</th>
                            <th>Acudiente</th>
                            <th>Dirección</th>
                            <th>Zona</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>

                    <tbody id="students-table">


                    </tbody>
                </table>


            </div>
        </div>



    </div>
<!-- modal bootstrapp -->
    <!-- Modal -->
    <div class="modal " id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Registro de estudiantes nuevos</h3>
                   
                </div>
                <div class="modal-body">
                    <section class="modal-card-body">
                        <!-- Content ... -->

                        <form class="row g-3 needs-validation" id="register-form" novalidate>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Número de documento</label>
                                <input required type="text" class="form-control" name="Documento" placeholder="Documento de Identidad" placeholder="Número de documento" maxlength="10" minlength="8" >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Nombres</label>
                                <input type="text" class="form-control" type="text" name="Nombres" placeholder="Nombres" required>

                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Primer apellido</label>
                                <input type="text" class="form-control" type="text" name="Apellido1" placeholder="Primer Apellido" required>

                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Segundo apellido</label>
                                <input type="text" class="form-control" type="text" name="Apellido2" placeholder="Segundo apellido" required>

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Grado en curso</label>

                                <input class="form-control  mx-2" list="datalistOptions" name="Grado" placeholder="Grado" require>
                                <datalist id="datalistOptions">
                                    <option value="Pre-escolar">
                                    <option value="Primero">
                                    <option value="Segundo">
                                    <option value="Tercero">
                                    <option value="Cuarto">
                                </datalist>

                            </div>



                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Jornada</label>
                                <!-- Jornada -->
                                <select class="form-control" name="Jornada" required aria-label="Default select example">
                                    <option selected></option>
                                    <option value="Tarde">Tarde</option>
                                    <option value="Mañana">Mañana</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Rh</label>
                                <input type="text" class="form-control" type="text" name="Rh" placeholder="Rh" required>

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Acudiente</label>
                                <input type="text" class="form-control" type="text" name="Acudiente" placeholder="Acudiente" required>

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Dirección</label>
                                <input type="text" class="form-control" type="text" name="Direccion" placeholder=" Dirección " required>

                            </div>

                            <div class="col-md-4 ">
                                <label for="validationCustom01" class="form-label">Zona</label>
                                <!-- zonas -->
                                <select class="form-control " name="Zona" aria-label="Default select example" required>
                                    <option selected></option>
                                    <option value="Oriente">Zona Oriente</option>
                                    <option value="Occidente">Zona Occidente</option>
                                    <option value="Norte">Zona Norte</option>
                                    <option value="Sur">Zona Sur</option>

                                </select>
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
<!-- modal bootstrapp -->
    <!-- Modal -->
    <div class="modal " id="Modal_update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Actualizar estudiante </h3>
                   
                </div>
                <div class="modal-body">
                    <section class="modal-card-body">
                        <!-- Content ... -->

                        <form class="row g-3 needs-validation" id="updateForm" novalidate>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Número de documento</label>
                                <input required type="text" class="form-control" name="Documento" placeholder="Documento de Identidad" placeholder="Número de documento" maxlength="10" minlength="8" >

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Nombres</label>
                                <input type="text" class="form-control" type="text" name="Nombres" placeholder="Nombres" required>

                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Primer apellido</label>
                                <input type="text" class="form-control" type="text" name="Apellido1" placeholder="Primer Apellido" required>

                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Segundo apellido</label>
                                <input type="text" class="form-control" type="text" name="Apellido2" placeholder="Segundo apellido" required>

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Grado en curso</label>

                                <input class="form-control  mx-2" list="datalistOptions" name="Grado" placeholder="Grado" require>
                                <datalist id="datalistOptions">
                                    <option value="Pre-escolar">
                                    <option value="Primero">
                                    <option value="Segundo">
                                    <option value="Tercero">
                                    <option value="Cuarto">
                                </datalist>

                            </div>



                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Jornada</label>
                                <!-- Jornada -->
                                <select class="form-control" name="Jornada" required aria-label="Default select example">
                                    <option selected></option>
                                    <option value="Tarde">Tarde</option>
                                    <option value="Mañana">Mañana</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Rh</label>
                                <input type="text" class="form-control" type="text" name="Rh" placeholder="Rh" required>

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Acudiente</label>
                                <input type="text" class="form-control" type="text" name="Acudiente" placeholder="Acudiente" required>

                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Dirección</label>
                                <input type="text" class="form-control" type="text" name="Direccion" placeholder=" Dirección " required>

                            </div>

                            <div class="col-md-4 ">
                                <label for="validationCustom01" class="form-label">Zona</label>
                                <!-- zonas -->
                                <select class="form-control " name="Zona" aria-label="Default select example" required>
                                    <option selected></option>
                                    <option value="Oriente">Zona Oriente</option>
                                    <option value="Occidente">Zona Occidente</option>
                                    <option value="Norte">Zona Norte</option>
                                    <option value="Sur">Zona Sur</option>

                                </select>
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
    <script src="../assets/plugins/waitMe/waitMe.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?php echo JS . 'estudiantes.js' ?>"></script> <!-- estudiantes  -->
    <script src="<?php echo JS . 'main.js' ?> "></script> <!-- main.js -->
    <!-- js booststrap -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
   
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
</body>

</html>