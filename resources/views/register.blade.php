<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <title>Registro</title>
      <link rel="stylesheet" href="assets/css/slick.min.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/fontawesome/css/all.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body class="body-auth">
      <div class="back-to-home rounded d-none d-sm-block">
         <a href="/" class="btn btn-icon btn-primary" style="height: 35px;"><i class="fa-regular fa-house"></i></a>
      </div>
      <section class="bg-auth-home">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-5 col-md-8">
                  <div class="card shadow rounded border-0 mt-4">
                     <div class="card-body">
                        <h4 class="card-title text-center">Registro</h4>
                        <form class="login-form mt-4" method="post">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="mb-3">
                                    <label class="form-label">Nombres <span class="text-danger">*</span></label>
                                    <div class="form-icon position-relative">
                                       <i class="fa-regular input fa-user"></i>
                                       <input type="text" name="nombres" class="form-control ps-5" placeholder="Juan" required>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="mb-3">
                                    <label class="form-label">Apellidos <span class="text-danger">*</span></label>
                                    <div class="form-icon position-relative">
                                       <i class="fa-regular input fa-user-alien"></i>
                                       <input type="text" name="apellidos" class="form-control ps-5" placeholder="Holguin" name="s" required="">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="mb-3">
                                    <label class="form-label">Documento de identidad <span class="text-danger">*</span></label>
                                    <div class="form-icon position-relative">
                                       <i class="fa-regular input fa-id-card"></i>
                                       <input type="text" name="documento" class="form-control ps-5" placeholder="N° documento" name="documento" required="">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="mb-3">
                                    <label class="form-label">Tu correo <span class="text-danger">*</span></label>
                                    <div class="form-icon position-relative">
                                       <i class="fa-regular input fa-envelope"></i>
                                       <input type="email" name="correo" class="form-control ps-5" placeholder="email@mail.com" name="email" required="">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="mb-3">
                                    <label class="form-label">Contraseña <span class="text-danger">*</span></label>
                                    <div class="form-icon input position-relative">
                                       <i class="fa-regular input fa-key-skeleton"></i>
                                       <input type="password" name="contrasenna" class="form-control ps-5" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" required="">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="mb-3">
                                    <label class="form-label">Confirmar Contraseña <span class="text-danger">*</span></label>
                                    <div class="form-icon input position-relative">
                                       <i class="fa-regular input fa-key-skeleton"></i>
                                       <input type="password" name="ccontrasenna" class="form-control ps-5" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" required="">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="d-grid">
                                    <input type="submit" name="registrar" class="btnf btn-primary" value="Registrate">
                                 </div>
                              </div>
                              <div class="mx-auto">
                                 <p class="mb-0 mt-3"><small class="me-2">¿Ya tienes una cuenta? </small> <a href="login" class="fw-bold">Inicia sesión</a></p>
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
