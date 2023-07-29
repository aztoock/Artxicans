/* Creamos funcion para que en lo que carga la pagina se agrege el loader*/
window.onload = function(){
    /* Referencia de nuestro loader */
    var container = document.getElementById('loader-main');
    /* Desaparece cuando la pagina a sido cargada */
    container.style.visibility = 'hidden';
    /* Quitamos la opacidad */
    container.style.opacity = '0' 
}


