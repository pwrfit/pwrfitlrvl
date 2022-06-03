<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="{{ asset('jquery/dist/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
                            @if ($errors->all())
                            <div class='alert alert-danger text-center'>
                                @foreach ($errors->all() as $error)
                                    {{$error}}
                                @endforeach
                            </div>
                            @endif
                            <h4 class="card-title text-center">Registro</h4>
                            <form class="login-form mt-4" method="post" action="{{ route('auth.store') }}"
                                id="formulario">
                                @csrf
                                @if (Request::path() == 'register/comprometido')
                                    <input type="hidden" name="membresia" value="1">
                                @elseif (Request::path() == 'register/casual')
                                    <input type="hidden" name="membresia" value="2">
                                @elseif (Request::path() == 'register/aficionado')
                                    <input type="hidden" name="membresia" value="3">
                                @endif
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="formulario__grupo" id="grupo__nombre">
                                            <div class="mb-3">
                                                <label class="form-label">Nombre completo <span
                                                        class="text-danger">*</span></label>
                                                <div class="formulario__grupo-input">
                                                    <div class="form-icon position-relative">
                                                        <i class="fa-regular input fa-user"></i>
                                                        <input type="text" name="nombre" id="nombre"
                                                            class="form-control ps-5 formulario__input"
                                                            placeholder="Juan Pablo Holguin Holguin" required value="{{ old('nombre')}}">
                                                        <i
                                                            class="fa-solid formulario__validacion-estado fa-circle-xmark"></i>
                                                        <p class="formulario__input-error">El nombre solo puede llevar
                                                            letras y espacios.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="formulario__grupo" id="grupo__documento">
                                            <div class="mb-3">
                                                <label class="form-label">Documento de identidad <span
                                                        class="text-danger">*</span></label>
                                                <div class="formulario__grupo-input">
                                                    <div class="form-icon position-relative">
                                                        <i class="fa-regular input fa-id-card"></i>
                                                        <input type="text" name="documento" id="documento"
                                                            class="form-control ps-5 formulario__input"
                                                            placeholder="N° documento" name="documento" required value="{{ old('documento')}}">
                                                        <i class="fa-solid formulario__validacion-estado fa-circle-xmark"></i>
                                                        <p class="formulario__input-error">El documento solo puede
                                                            contener numeros y el maximo son 20 dígitos.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="formulario__grupo" id="grupo__correo">
                                            <div class="mb-3">
                                                <label class="form-label">Tu correo <span
                                                        class="text-danger">*</span></label>
                                                <div class="formulario__grupo-input">
                                                    <div class="form-icon position-relative">
                                                        <i class="fa-regular input fa-envelope"></i>
                                                        <input type="email" name="correo" id="correo"
                                                            class="form-control ps-5 formulario__input" placeholder="email@mail.com"
                                                            name="email" required value="{{ old('correo')}}">
                                                        <i class="fa-solid formulario__validacion-estado fa-circle-xmark"></i>
                                                        <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="formulario__grupo" id="grupo__contrasenna">
                                            <div class="mb-3">
                                                <label class="form-label">Contraseña <span
                                                        class="text-danger">*</span></label>
                                                <div class="formulario__grupo-input">
                                                    <div class="form-icon input position-relative">
                                                        <i class="fa-regular input fa-key-skeleton"></i>
                                                        <input type="password" name="contrasenna" id="contrasenna"
                                                            class="form-control ps-5 formulario__input" placeholder="••••••••" required=""
                                                            minlength="8">
                                                        <i class="fa-solid formulario__validacion-estado fa-circle-xmark"></i>
                                                        <p class="formulario__input-error">La contraseña tiene que ser de 8 a 16 dígitos.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="formulario__grupo" id="grupo__ccontrasenna">
                                            <div class="mb-3">
                                                <label class="form-label">Confirmar Contraseña <span
                                                        class="text-danger">*</span></label>
                                                <div class="formulario__grupo-input">
                                                    <div class="form-icon input position-relative">
                                                        <i class="fa-regular input fa-key-skeleton"></i>
                                                        <input type="password" name="ccontrasenna" id="ccontrasenna"
                                                            class="form-control ps-5 formulario__input" placeholder="••••••••" required=""
                                                            minlength="8">
                                                        <i class="fa-solid formulario__validacion-estado fa-circle-xmark"></i>
                                                        <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-11">
                                        <label class="form-label">¿Deseas recibir correos promocionales?<span
                                                class="text-danger">*</span></label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="boletin" value="SI"
                                                id="SI" required>
                                            <label class="form-check-label" for="SI">SI</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="boletin" id="NO"
                                                value="NO">
                                            <label class="form-check-label" for="NO">NO</label>
                                        </div>
                                    </div>
                                    <br><br><br>
                                    <div style="margin-left: 18px;"
                                        class="form-check col-md-10 d-flex justify-content-start">
                                        <input class="form-check-input" type="checkbox" value="acepto" id="terminos"
                                            required>
                                        <label class="form-check-label" for="terminos">
                                            &nbsp;&nbsp;&nbsp;Acepto los <label data-toggle="modal"
                                                data-target="#myModal" class="text-primary"
                                                style="cursor: pointer;">términos y condiciones<span
                                                    class="text-danger">*</span></label>
                                        </label>
                                    </div>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="myModal">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Términos y condiciones</h4>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                    efficitur leo leo, dapibus lobortis nibh accumsan quis. Nam pharetra
                                                    mattis mauris, et iaculis purus euismod at. Integer metus orci,
                                                    efficitur vitae faucibus vitae, finibus ut elit. Aliquam quam
                                                    ligula, fringilla in augue ac, ultrices faucibus turpis. Donec erat
                                                    mi, accumsan vitae turpis ac, ultrices aliquet odio. Mauris eget
                                                    purus ut ipsum egestas egestas. Suspendisse ante ex, porttitor id
                                                    dictum eu, fermentum quis lorem. Duis commodo gravida tempor. Ut
                                                    convallis dui ipsum, id ullamcorper ante consequat vel. Nam sed
                                                    sagittis urna, et gravida sapien.
                                                    In ut felis a augue sagittis convallis sed molestie est. Nullam et
                                                    faucibus metus, nec rutrum dolor. Praesent nec tristique nibh.
                                                    Aliquam at pretium ipsum. In elit odio, dictum quis ullamcorper
                                                    eget, maximus vel nulla. Curabitur pretium nisl dui, quis
                                                    sollicitudin odio ornare vel. Nam libero tortor, varius et risus at,
                                                    molestie elementum lacus.
                                                    Vestibulum erat arcu, maximus nec venenatis vel, dignissim eu nisl.
                                                    Donec id tortor et lacus fermentum accumsan non et nunc. Aenean
                                                    consequat tempus arcu vitae tempor. Nunc quis velit fringilla,
                                                    fermentum sapien in, elementum justo. Vivamus euismod maximus
                                                    sapien, vel ullamcorper erat blandit vel. Morbi porttitor est ut
                                                    lacus vulputate volutpat. Mauris porta lobortis imperdiet. Sed
                                                    pretium, enim in eleifend iaculis, nisl sem varius nibh, id lacinia
                                                    odio dui ultrices neque. Etiam sed massa non purus rutrum dapibus
                                                    vestibulum vel enim. Duis hendrerit bibendum leo, vitae iaculis
                                                    augue lacinia eget. Etiam ut metus nec mauris blandit faucibus quis
                                                    sed nunc. Ut sit amet consectetur libero. Cras varius quam nec
                                                    pretium imperdiet. Duis nec tincidunt lacus.
                                                    Pellentesque condimentum posuere ex nec faucibus. Vivamus at mauris
                                                    mollis tellus vehicula porttitor. Quisque ultrices auctor ipsum, eu
                                                    consequat sapien interdum et. Morbi auctor lobortis consectetur.
                                                    Vivamus in erat tempor, dignissim tellus non, aliquet mauris.
                                                    Suspendisse suscipit, odio pulvinar maximus pulvinar, risus ex
                                                    ornare ante, vitae gravida urna ante vitae justo. Integer vel
                                                    posuere est, eu ultrices lacus.
                                                    Ut gravida lorem vitae augue mollis, ut facilisis ipsum dictum.
                                                    Nullam facilisis fringilla sem dapibus porttitor. Praesent consequat
                                                    velit quis ex sollicitudin fermentum. Vestibulum interdum euismod
                                                    dolor. Nunc feugiat justo et eros mollis, ut cursus risus facilisis.
                                                    Nulla feugiat risus odio, quis varius orci pellentesque vitae.
                                                    Maecenas ut dui sed nulla porta malesuada. Ut at dolor pellentesque,
                                                    consectetur elit id, dictum ex. Integer imperdiet laoreet risus.
                                                    Vivamus a purus malesuada turpis auctor cursus. Aliquam aliquet nisl
                                                    et condimentum convallis. Nulla et massa quis nulla efficitur
                                                    finibus sed et ligula. Donec a purus elit. Integer pharetra neque in
                                                    tortor porta vehicula id nec urna. Aliquam efficitur tortor in
                                                    lectus commodo faucibus.
                                                    Cras non dictum nibh. Morbi justo magna, faucibus nec risus at,
                                                    vulputate rhoncus dolor. Praesent egestas semper ex, non congue
                                                    mauris tempus id. Aenean suscipit semper lacus sed bibendum. Aliquam
                                                    pharetra dignissim molestie. Etiam ultricies augue in velit rhoncus,
                                                    nec maximus est rhoncus. Morbi dignissim at tortor id euismod. Fusce
                                                    euismod urna tincidunt lacus pretium, ut blandit nulla ultrices.
                                                    Praesent a sapien vestibulum, lacinia augue et, rhoncus lacus.
                                                    Curabitur convallis, odio eget tempor tincidunt, lorem tellus tempor
                                                    mi, eget lobortis ligula elit a diam.
                                                    Vestibulum elementum velit ut tincidunt hendrerit. In porttitor elit
                                                    id lectus lobortis ornare. Donec ultrices venenatis sapien lacinia
                                                    viverra. Donec condimentum metus non massa molestie vulputate. Nulla
                                                    rhoncus rutrum velit, consectetur varius sapien aliquet vel. Aliquam
                                                    in sodales nibh. Nullam convallis mollis tincidunt. Aenean lorem ex,
                                                    ultricies in venenatis vel, lobortis vitae turpis. Ut nec enim
                                                    lobortis, sodales purus nec, pellentesque elit. Quisque maximus
                                                    mauris vel sapien commodo placerat. Integer tincidunt eu felis ac
                                                    dapibus.
                                                    Phasellus egestas lorem facilisis urna eleifend, in fringilla erat
                                                    vulputate. Nulla sodales et erat vitae vestibulum. Phasellus auctor
                                                    nisi et nisl feugiat, sit amet vulputate ante feugiat. Curabitur
                                                    nunc elit, ullamcorper at varius non, volutpat at turpis. Donec
                                                    tellus elit, congue vel est congue, tristique sodales metus. In non
                                                    mollis nulla, eu sollicitudin purus. Aenean id lacus ut nisl
                                                    porttitor tempor. Maecenas mattis velit ac urna pellentesque, vel
                                                    imperdiet elit eleifend. Pellentesque arcu velit, maximus et dui ac,
                                                    eleifend molestie turpis. Vestibulum viverra ac magna eu facilisis.
                                                    Curabitur vitae leo libero. Etiam in sagittis urna, sed mollis arcu.
                                                    Phasellus ultricies orci non eros tempus ullamcorper vel et metus.
                                                    Sed imperdiet, neque facilisis scelerisque porta, ligula elit dictum
                                                    leo, eget cursus metus augue ut nisl.
                                                    Aliquam tristique ultricies sem, ut posuere magna ultricies ac.
                                                    Aenean in semper ipsum. Sed et fringilla libero. Morbi et erat sed
                                                    erat porttitor dictum eget a erat. Donec viverra dolor eget euismod
                                                    dapibus. Fusce elit ligula, malesuada in auctor nec, iaculis ac mi.
                                                    Vestibulum lacinia justo ac pulvinar auctor. Sed efficitur pulvinar
                                                    dapibus. Etiam et finibus risus. Pellentesque ac nibh vitae sapien
                                                    lacinia pellentesque. Integer vitae sodales enim. Proin efficitur
                                                    leo felis, sit amet tempor ipsum mattis ut.
                                                    Curabitur placerat placerat justo, et pretium ipsum venenatis sed.
                                                    Phasellus eget gravida velit, a pretium urna. Ut ipsum sapien,
                                                    ornare vel ex sed, auctor varius tellus. Donec maximus placerat
                                                    consectetur. Curabitur pharetra molestie varius. Aenean ac ultricies
                                                    lacus. Praesent nibh est, ultricies nec aliquet eget, lacinia quis
                                                    ante.
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                        <div class="d-grid">
                                            <input type="submit" name="registrar" class="btnf btn-primary" value="Registrate">
                                        </div>
                                        <style>

                                        </style>
                                    </div>
                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="me-2">¿Ya tienes una cuenta?
                                            </small> <a href="{{ route('auth.login') }}" class="fw-bold">Inicia
                                                sesión</a></p>
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
    <script src="{{ asset('js/validarform.js')}}"></script>
</body>

</html>
