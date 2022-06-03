@if (!Session::get('success') and !Session::get('errorcode'))
    <script>
        window.location.href = "{{ route('auth.login')}}";
    </script>
@endif
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
        @elseif ($mensaje = Session::get('errorcode'))
            <div class='alert alert-danger text-center'>{{$mensaje}}</div>
        @endif
      <br/> Ingresa el código enviado para verificar tu correo.
      <br>¿No ha recibido el correo de verificación? <a href="{{ route('coderesend')}}?correo={{Session::get('correo')}}&nombre={{Session::get('nombre')}}">Envíalo de nuevo!</a>
    </p>
      <form action="{{ route('auth.verifyemail')}}" method="post">
        @csrf
        <div class="code-container">
            <input type="hidden" name="correo" value="{{Session::get('correo')}}">
            <input type="number" class="code" placeholder="0" min="0" max="9" maxlength="1" required name="n1">
            <input type="number" class="code" placeholder="0" min="0" max="9" maxlength="1" required name="n2">
            <input type="number" class="code" placeholder="0" min="0" max="9" maxlength="1" required name="n3">
            <input type="number" class="code" placeholder="0" min="0" max="9" maxlength="1" required name="n4">
            <input type="number" class="code" placeholder="0" min="0" max="9" maxlength="1" required name="n5">
            <input type="number" class="code" placeholder="0" min="0" max="9" maxlength="1" required name="n6">
        </div>
        <input type="submit" class="btn btn-success" value="Verificar">
      </form>
    </div>
    <script src="{{ asset('js/verify.js')}}"></script>
  </body>
</html>
