alert('jola');
const nombre = document.querySelector("#name");
const telefono = document.querySelector("#lastname");
const correo = document.querySelector("#email");
const contraseña =document.querySelector("#password");
const formulario =document.querySelector(".formulario-registro");
formulario.addEventListener("submit", validaFormulario);
function validaFormulario(e){
    e.preventDefault();
    if (
        nombre.value === "" ||
        telefono.value === "" ||
        correo.value === "" ||
        contraseña.value === ""
    ) {
        mostrarError("Todos los campos son obligatorios");
        return;
    }
    alert("Has sido registrado con exito");
    window.location.reload();
}
function mostrarError(mensaje){
    const alerta = document.createElement("p");
    alerta.textContent = mensaje;
    alerta.style.background = "red";
    alerta.style.color = "white";
    formulario.appendChild(alerta);
    setTimeout(() => {
        alerta.remove();
    },5000);
}