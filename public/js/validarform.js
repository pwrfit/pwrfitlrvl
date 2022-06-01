const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	contrasenna: /^.{8,16}$/, // 8 a 16 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, //solo puede contener letras, numeros, puntos, guiones y guion bajo.
	documento: /^\d{6,20}$/ // 7 a 20 numeros.
}

const campos = {
	nombre: false,
	contrasenna: false,
	correo: false,
	documento: false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "contrasenna":
			validarCampo(expresiones.contrasenna, e.target, 'contrasenna');
			validarContrasenna2();
		break;
		case "ccontrasenna":
			validarContrasenna2();
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "documento":
			validarCampo(expresiones.documento, e.target, 'documento');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i.fa-solid`).classList.add('fa-circle-check');
		document.querySelector(`#grupo__${campo} i.fa-solid`).classList.remove('fa-circle-xmark');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i.fa-solid`).classList.add('fa-circle-xmark');
		document.querySelector(`#grupo__${campo} i.fa-solid`).classList.remove('fa-circle-check');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

const validarContrasenna2 = () => {
	const inputPassword1 = document.getElementById('contrasenna');
	const inputPassword2 = document.getElementById('ccontrasenna');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`grupo__ccontrasenna`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__ccontrasenna`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__ccontrasenna i.fa-solid`).classList.add('fa-circle-xmark');
		document.querySelector(`#grupo__ccontrasenna i.fa-solid`).classList.remove('fa-circle-check');
		document.querySelector(`#grupo__ccontrasenna .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['contrasenna'] = false;
	} else {
		document.getElementById(`grupo__ccontrasenna`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__ccontrasenna`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__ccontrasenna i.fa-solid`).classList.remove('fa-circle-xmark');
		document.querySelector(`#grupo__ccontrasenna i.fa-solid`).classList.add('fa-circle-check');
		document.querySelector(`#grupo__ccontrasenna .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['contrasenna'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	const terminos = document.getElementById('terminos');
	if(campos.usuario && campos.nombre && campos.password && campos.correo && campos.documento && terminos.checked ){
		formulario.reset();

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});
