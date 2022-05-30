<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('css/verify.css')}}" />

    <title>Verifica tu cuenta | PWRFIT</title>
  </head>
  <body>
    <div class="back-to-home rounded d-none d-sm-block">
        <a href="/" class="btn btn-icon btn-primary" style="height: 35px;"><i class="fa-regular fa-house"></i></a>
     </div>
    <div class="container">
      <h2>Verifica tu cuenta</h2>
      <p>
        @if ($mensaje = Session::get('success'))
            <div class='alert alert-success text-center'>{{$mensaje}}</div>
        @endif
      <br/> Ingresa el código enviado para verificar tu correo.
    </p>
      <form action="{{ route('auth.verifycode')}}" method="post">
        @csrf
        <div class="code-container">
          <input type="number" class="code" placeholder="0" min="0" max="9" required name="n1">
          <input type="number" class="code" placeholder="0" min="0" max="9" required name="n2">
          <input type="number" class="code" placeholder="0" min="0" max="9" required name="n3">
          <input type="number" class="code" placeholder="0" min="0" max="9" required name="n4">
          <input type="number" class="code" placeholder="0" min="0" max="9" required name="n5">
          <input type="number" class="code" placeholder="0" min="0" max="9" required name="n6">
        </div>
        <button type="submit" class="btn btn-success">Verificar</button>
      </form>
    </div>
    <script src="{{ asset('js/verify.js')}}"></script>
  </body>
</html>
