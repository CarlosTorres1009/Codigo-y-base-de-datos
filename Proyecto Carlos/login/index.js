document.getElementById("btn__iniciar-sesion").addEventListener("click",iniciarSesion);
document.getElementById("btn__Registrarse").addEventListener("click",register);

var contenedor_login_register=document.querySelector(".contenedor__login-register");

var contenedor_login_register=document.querySelector(".contenedor__login-register");
var formulario_login=document.querySelector(".formulario__login");
var formulario_register=document.querySelector(".formulario__register");
var caja_trasera_login=document.querySelector(".caja__trasera-login");


function iniciarSesion(){
    formulario_register.style.display = "none";
    contenedor_login_register.style.left = "10px";
    formulario_login.style.display= "block";
    caja_trasera_register.stlyle.opacity= "1";
    caja_trasera_login.stlyle.opacity= "0";

}
function register(){
    formulario_register.style.display = "block";
    contenedor_login_register.style.left = "410px";
    formulario_login.style.display= "none";
    caja_trasera_register.stlyle.opacity= "0";
    caja_trasera_login.stlyle.opacity= "1";

}