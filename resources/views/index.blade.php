@extends('layout/estilos')
<?php

   session_start();

   if (isset($_SESSION['rol'])) {
      header('location: login');
   }
?>

<!DOCTYPE html>
<html>
   <body id="home" class="light">
      @extends('layout/header')
      <section class="home-section" id="home">
         <div class="darkmode" id="darkmode">
            <i class="light fa-light fa-sun"></i>
            <i class="dark fa-duotone fa-moon"></i>
         </div>
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <h1>Un Gimnasio Como Nunca Lo Habías Visto</h1>
                  <p class="hero-text">Descubre cientos de videos y rutinas con los que podrás mantener un buen estado de salud físico y mental. ¡Únete Ahora!</p>
                  <div class="mt-4">
                     <a href="#prices" class="btnn btn-primary mt-2 me-2"><i class="fa-duotone fa-user"></i> Únete</a>
                     <a href="login" class="btnn btn-outline-primary mt-2"><i class="fa-duotone fa-arrow-right-to-bracket"></i> Inicia Sesión</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <img src="assets/img/meditation.svg" draggable="false">
               </div>
            </div>
         </div>
      </section>
      <section class="services" id="services">
         <div class="container">
            <h2 class="title-decor">Bienvenido a <span>PWR FIT</span></h2>
            <p class="slogan">No seas una máquina, sé la máquina.</p>
            <div class="row align-items-center">
               <div class="col-lg-5">
                  <div class="section-right-image text-center animate-float-bob-y wow fadeInDown" data-wow-delay="0ms" data-wow-duration="2000ms">
                     <img src="assets/img/healthyhabit.svg" draggable="false">
                  </div>
               </div>
               <div class="col-lg-7">
                  <div class="icon-boxes-wrapper icon-boxes-grid">
                     <div class="single-iconic-box iconic-box-v2">
                        <div class="iconic-box-icon iconic-box-gradient-3">
                           <i class="fa-duotone fa-heart-pulse"></i>
                        </div>
                        <div class="iconic-box-body">
                           <h5 class="iconic-box-title">Cardio</h5>
                           <p class="iconic-box-content">
                              Nuestras rutinas de cardio harán que tu corazón se fortalezca y la salud de nuestros pulmones sea buena.
                           </p>
                        </div>
                     </div>
                     <div class="single-iconic-box iconic-box-v2">
                        <div class="iconic-box-icon iconic-box-gradient-4">
                           <i class="fa-duotone fa-weight-hanging"></i>
                        </div>
                        <div class="iconic-box-body">
                           <h5 class="iconic-box-title">Full-body</h5>
                           <p class="iconic-box-content">
                              Con nuestras rutinas de fullbody activaremos una gran cantidad de músculos.
                           </p>
                        </div>
                     </div>
                     <div class="single-iconic-box iconic-box-v2">
                        <div class="iconic-box-icon iconic-box-gradient-5">
                           <i class="fa-duotone fa-dumbbell"></i>
                        </div>
                        <div class="iconic-box-body">
                           <h5 class="iconic-box-title">Entrenamiento Exhaustivo</h5>
                           <p class="iconic-box-content">
                              Con nuestras rutinas de ejercicio exhaustivo la disciplina y perseverancia harán de ti y de tu cuerpo un templo.
                           </p>
                        </div>
                     </div>
                     <div class="single-iconic-box iconic-box-v2">
                        <div class="iconic-box-icon iconic-box-gradient-6">
                           <i class="fa-duotone fa-peach"></i>
                        </div>
                        <div class="iconic-box-body">
                           <h5 class="iconic-box-title">Gluteos</h5>
                           <p class="iconic-box-content">
                              ¿Quiéres ser una Kardashian? hello amiga, ya sabes en dónde podrás serlo.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
         </div>
      </section>
      <section class="prices" id="prices">
         <div class="container">
         <h2 class="title-decor">¡ELIGE EL PACK QUE <span>MEJOR SE ADAPTE A TI!</span></h2>
         <p class="slogan">Tenemos los mejores precios en el mercado, solo elige el plan que desees y haz parte de esta familia</p>
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="pricing-table basic-plan" style="background-image: url(assets/img/bg-price-1.svg">
                     <div class="pricing-plan-title">
                        <div class="pricing-table-basic-icon">
                           <h5 class="plan-title">Deportista casual</h5>
                           <img class="pricing-image" src="assets/img/basic_prev_ui1.png" draggable="false">
                        </div>
                        <div class="pricing-plan-cost">
                           <span class="payment-currency">$</span>
                           <span class="plan-price">20.900</span><br>
                           <span class="plan-type">/ Mes</span>
                        </div>
                     </div>
                     <div class="pricing-plan-features">
                        <ul>
                           <li class="plan-feature">Acceso ilimitado a todas las rutinas</li>
                           <li class="plan-feature">Lives ilimitados</li>
                           <li class="plan-feature">Cancela cuando quieras</li>
                           <li class="plan-feature">7 días de prueba GRATIS</li>
                        </ul>
                     </div>
                     <div class="pricing-table-foot">
                        <div class="plan-select">
                           <a href="register" class="filled-btn bg-burning-red">Únete <i class="fa-duotone fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="pricing-table king-plan" style="background-image: url(assets/img/bg-price-2.svg">
                     <div class="pricing-plan-title">
                        <div class="pricing-table-icon">
                           <h5 class="plan-title bg-gold-gradient">Leo Messi</h5>
                           <img class="pricing-image" src="assets/img/king_prev_ui1.png" draggable="false">
                        </div>
                        <div class="pricing-plan-cost">
                           <span class="payment-currency">$</span>
                           <span class="plan-price">199.900</span><br>
                           <span class="plan-type">/ Año</span>
                        </div>
                     </div>
                     <div class="pricing-plan-features">
                        <ul>
                           <li class="plan-feature">Acceso ilimitado a todas las rutinas</li>
                           <li class="plan-feature">Únete a los lives que desees</li>
                           <li class="plan-feature">Cancela cuando quieras</li>
                           <li class="plan-feature">30 días de prueba GRATIS</li>
                        </ul>
                     </div>
                     <div class="pricing-table-foot">
                        <div class="plan-select">
                           <a href="register" class="filled-btn bg-gold-gradient">Únete <i class="fa-duotone fa-arrow-right"></i></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="pricing-table amateur-plan" style="background-image: url(assets/img/bg-price-3.svg">
                     <div class="pricing-plan-title">
                        <div class="pricing-table-amateur-icon">
                           <h5 class="plan-title">Aficionado</h5>
                           <img class="pricing-image" src="assets/img/amateur_prev_ui1.png" draggable="false">
                        </div>
                        <div class="pricing-plan-cost">
                           <span class="payment-currency">$</span>
                           <span class="plan-price">5.900</span><br>
                           <span class="plan-type">/ Mes</span>
                        </div>
                     </div>
                     <div class="pricing-plan-features">
                        <ul>
                           <li class="plan-feature">Escoges las rutinas que desees</li>
                           <li class="plan-feature">Puedes escoger solo de 1 a 3 rutinas</li>
                           <li class="plan-feature plan-feature-disabled">Cancela cuando quieras</li>
                           <li class="plan-feature plan-feature-disabled">7 días días de prueba GRATIS</li>
                        </ul>
                     </div>
                     <div class="pricing-table-foot">
                        <div class="plan-select">
                           <a href="register" class="filled-btn bg-blue">Únete <i class="fa-duotone fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </section>
      
      <section class="newsletter" id="newsletter">
         <div class="container">
            <h2 class="title-decor">Suscribete a nuestro <span>Boletín</span></h2>
            <p class="slogan">¡Suscríbete a nuestro boletín y recibe correos con promociones y ofertas para tí!</p>
            <form class="subscribe-form" action="{{ route('boletin.store')}}" method="post">
               @csrf
               <input class="inp-form" type="email" name="email" placeholder="Tu E-mail" required>
               <button type="submit" class="btn" style="height:50px">Suscribirse</button>
            </form>
         </div>
      </section>
      <footer style="background-image: url(assets/img/bg-1-min.pngs)">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-lg-3 footer-item footer-item-list">
               </div>
               <div class="col-sm-6 col-lg-3 footer-item-logo">
                  <a href="index" class="logo-footer"><img src="assets/img/logo.png"></a>
                  <p>Desafío aceptado</p>
                  <ul class="social-list">
                     <li><a target="_blank" href=""><i class="fab fa-facebook"></i></i></a></li>
                     <li><a target="_blank" href=""><i class="fab fa-youtube"></i></a></li>
                     <li><a target="_blank" href=""><i class="fab fa-instagram"></i></a></li>
                  </ul>
               </div>
               <div class="col-sm-6 col-lg-3 footer-item">
                  <h3>Contáctanos</h3>
                  <ul class="footer-cont">
                     <li><i class="fa fa-phone"></i><a href="tel:3105963564">3105963564</a></li>
                     <li><i class="fa fa-envelope"></i><a href="mailto:pwrfitcontact@gmail.com">pwrfitcontact@gmail.com</a></li>
                     <li><i class="fa fa-map-marker"></i><a target="_blank" href="https://goo.gl/maps/3D9Ht8fF4h5Djzwc7">Cra. 67 #104b104, Medellín, Antioquia</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
      </a>
      <script src="assets/js/jquery-2.2.4.min.js"></script>
      <script src="assets/js/slick.min.js"></script>
      <script src="assets/js/scripts.js"></script>
      <script type="text/javascript" src="assets/js/darkmode.js"></script>
   </body>
</html>
