<?php
require_once('app/config.php');
require_once('includes/inc_header_home.php'); ?>
<html>

<style>
  * {
    margin: 0;
    padding: 0
  }

  body {
    background-color: #000000
  }

  .card1 {
    background: #ffffff !important;
    height: 400px;
    width: 95.3%;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.5s
  }

  .card1:hover {
    transform: scale(1.1)
  }

  .card2 {
    background: #000000 !important;
    height: 400px;
    width: 100%;
    border: none;
    background-color: #000;
    border-radius: 8px;
    transition: all 0.5s
  }

  .card2:hover {
    transform: scale(1.1)
  }

  .login {
    font-size: 20px;
    font-weight: bold;
    margin-left: 10px
  }

  .input-field span {
    font-size: 12px;
    color: #cecdcd;
    margin-left: 10px
  }

  .form-control {
    font-size: 13px;
    color: #767473;
    font-weight: 500;
    border-left: none;
    border-right: none;
    border-top: none;
    border-bottom: 1px solid #9b9b9b;
    box-shadow: none
  }

  .btn {
    height: 35px;
    width: 100%;
    background-color: #000000;
    font-weight: 500;
    color: #ffffff;
    border: none;
    font-size: 15px
  }

  .text1 .forget {
    color: #ffffff;
    font-weight: 500
  }

  .text2 span {
    font-weight: 500;
    color: #ffffff
  }

  .text2 .register {
    color: #4f4942;
    font-weight: bold
  }
</style>
</head>

<body oncontextmenu="return false" class="snippet-body">
  <div class="container mt-5 mb-5">
    <div class="d-flex flex row g-0">
      <div class="col-md-6 mt-3">
        <div class="card card1 p-3">
          <h2 class="text-center">Routing Software</h2>
          <div class="d-flex flex-column"> <img style="width: 30px; height: 30px;" src="<?php echo IMG . 'Logo Routing blanco.png' ?>" height="50" width="50" loading="lazy"> <span class="login mt-3">Ingreso de usuario</span> </div>
          <div class="input-field d-flex flex-column mt-3"> <span>Email</span> <input class="form-control" id="email" placeholder="email@example.com"> <span class="mt-3">Password</span>
            <input id="pass" type="password" class="form-control" placeholder="Enter Your Password">
            <button onclick="Ingreso()"  class="mt-4 btn btn-dark d-flex justify-content-center align-items-center">Login</button>

          </div>
        </div>
      </div>
      <div class="col-md-6 mt-3">
        <div class="card card2 p-3">
          <div class="image"> <img style="width: 400px; height: 380px; border-radius:30px;" src="<?php echo IMG . 'bus_ruta.jpg' ?>" loading="lazy"> </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase.js "></script> <!-- conexión a firebase -->
  <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-database.js "></script> <!-- conexión a firebase -->
  <script src="<?php echo JS . 'traerRutas.js' ?>"></script> <!-- estudiantes  -->
  <script src="<?php echo JS . 'main.js' ?> "></script> <!-- main.js -->
  <!-- js booststrap -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="<?php echo PLUGINS . 'waitMe/waitMe.min.js' ?>"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>