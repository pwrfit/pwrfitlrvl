<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/fontawesome/css/all.css">
      <link rel="stylesheet" href="assets/fontawesome5/css/all.css">
      <title>Contáctanos | PWR FIT</title>
   </head>
   <body style="background-color: #fff;" class="body-payment">
      @extends('layout/header')
      <section class="contact-form pb-0">
         <div class="darkmode" id="darkmode">
            <i class="light fa-light fa-sun"></i>
            <i class="dark fa-duotone fa-moon"></i>
         </div>
         <div class="container mt-100 mt-60">
            <div class="row align-items-center">
               <div class="col-lg-5 col-md-6 pt-2 pt-sm-0 order-2 order-md-1">
                  <div class="card shadow rounded border-0">
                     <div class="card-body py-5">
                        <h4 class="card-title">¿Tienes alguna queja, reclamo o sugerencia? ¡Contáctanos!</h4>
                        <div class="custom-form mt-3">
                           @if ($mensaje = Session::get('success'))
                              <div class='alert alert-success'>{{$mensaje}}</div>
                           @endif
                           <form method="post" action="{{ route('contact.store')}}">
                              @csrf
                              <p id="error-msg" class="mb-0"></p>
                              <div id="simple-msg"></div>
                              <div class="row">
                                 <div class="col-12">
                                    <div class="mb-3">
                                       <label class="form-label">Nombre completo <span class="text-danger">*</span></label>
                                       <div class="form-icon position-relative">
                                          <i class="fa-regular input fa-user-check"></i>
                                          <input name="name" id="name" type="text" class="form-control ps-5" placeholder="Nombres" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="mb-3">
                                       <label class="form-label">Tu correo <span class="text-danger">*</span></label>
                                       <div class="form-icon position-relative">
                                          <i class="fa-regular input fa-envelope"></i>
                                          <input name="email" id="email" type="email" class="form-control ps-5" placeholder="email@mail.com" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="mb-3">
                                       <label class="form-label">Asunto <span class="text-danger">*</span></label>
                                       <div class="form-icon position-relative">
                                          <i class="fa-regular input fa-book"></i>
                                          <input name="subject" id="subject" class="form-control ps-5" placeholder="Asunto :" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="mb-3">
                                       <label class="form-label">Comentarios <span class="text-danger">*</span></label>
                                       <div class="form-icon position-relative">
                                          <i class="fa-regular input fa-message-lines"></i>
                                          <textarea name="comments" id="comments" rows="4" class="form-control ps-5" placeholder="Mensaje :" required></textarea>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-12">
                                    <div class="d-grid">
                                       <button type="submit" class="btn btn-primary" style="height:50px">Enviar</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-7 col-md-6 order-1 order-md-2">
                  <div class="card border-0">
                     <div class="card-body p-0">
                        <img src="assets/img/form.svg" class="img-fluid" draggable="false">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container" style="padding-top: 50px">
            <div class="row">
               <div class="col-md-4">
                  <div class="card border-0 text-center features feature-clean">
                     <div class="icons text-primary text-center mx-auto">
                        <i><img src="{{ asset('img/undraw_handcrafts_smartphone.svg')}}" draggable="false" style="width: 50px"></i>
                     </div>
                     <div class="content mt-3">
                        <h5 class="fw-bold">Teléfono</h5>
                        <p class="text-muted">Contáctanos via WhatsApp a través del número</p>
                        <a href="tel:+573105963564" class="text-primary">+57 3105963564</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                  <div class="card border-0 text-center features feature-clean">
                     <div class="icons text-primary text-center mx-auto">
                        <i><img src="{{ asset('img/undraw_handcrafts_envelope.svg')}}" draggable="false" style="width: 110px; padding-top: 29px;"></i>
                     </div>
                     <div class="content mt-3">
                        <h5 class="fw-bold">Correo</h5>
                        <p class="text-muted">Contáctanos via correo eléctronico a través de la dirección</p>
                        <a href="mailto:pwrfitcontact@gmail.com" class="text-primary">pwrfitcontact@gmail.com</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                  <div class="card border-0 text-center features feature-clean">
                     <div class="icons text-primary text-center mx-auto">
                        <i><img src="{{ asset('img/undraw_handcrafts_location.svg')}}" draggable="false" width="100px"></i>
                     </div>
                     <div class="content mt-3">
                        <h5 class="fw-bold">Úbicación</h5>
                        <p class="text-muted">Cra. 67 #104b104, <br>Medellín, Colombia</p>
                        <a href="https://goo.gl/maps/3D9Ht8fF4h5Djzwc7" target="_blank"
                           data-type="iframe" class="video-play-icon text-primary lightbox">Ver en Google Maps</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script type="text/javascript" src="assets/js/contact-form.js"></script>
      <script type="text/javascript" src="assets/js/darkmode.js"></script>
   </body>
</html>
