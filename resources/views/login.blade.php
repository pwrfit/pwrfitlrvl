<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <title>Iniciar sesión</title>
      <link rel="stylesheet" href="assets/css/slick.min.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/fontawesome/css/all.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body class="body-auth">
      <div class="back-to-home rounded d-none d-sm-block">
         <a href="/" class="btn btn-icon btn-primary" style="height: 35px;">
         <i class="fa-regular fa-house"></i></a>
         </a>
      </div>
      <section class="bg-auth-home">
         <div class="bg-overlay bg-overlay-white"></div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-5 col-md-8">
                  <div class="card login-page bg-white shadow rounded border-0">
                     <div class="card-body">
                        @if ($mensaje = Session::get('success'))
                              <div class='alert alert-info text-center'>{{$mensaje}}</div>
                        @endif
                        <h4 class="card-title text-center">Inicio de Sesión</h4>
                        <form class="login-form mt-4" method="post">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="mb-3">
                                    <label class="form-label">Documento de identidad<span class="text-danger">*</span>
                                    </label>
                                    <div class="form-icon position-relative">
                                       <i class="fa-regular input fa-id-card"></i>
                                       <input type="text" class="form-control ps-5" placeholder="1000213121" name="documento" required="">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="mb-3">
                                    <label class="form-label">Contraseña <span class="text-danger">*</span>
                                    </label>
                                    <div class="form-icon position-relative">
                                       <i class="fa-regular input fa-key-skeleton"></i>
                                       <input type="password" class="form-control ps-5" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" name="contrasenna" required="">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="d-flex justify-content-between">
                                    <p class="forgot-pass mb-0">
                                       <a href="recover" class="fw-bold" style="color: #000;">¿Olvidaste tu contraseña?</a>
                                    </p>
                                 </div>
                              </div>
                              <div class="col-lg-12 mb-0">
                                 <div class="d-grid">
                                    <button class="btnf btn-primary">Ingresar</button>
                                 </div>
                              </div>
                              <div class="col-12 text-center">
                                 <p class="mb-0 mt-3">
                                    <small class="me-2">¿No tienes una cuenta?</small>
                                    <a href="/#prices" class="fw-bold" style="color: #000">Regístrate</a>
                                 </p>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script type="text/javascript" src="assets/js/darkmode.js"></script>
   </body>
</html>