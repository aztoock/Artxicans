/* funcion para simplificar la interaccion con el DOM del navegador */
((d)=>{
    /* Tomamos la referencia del boton de hamburguesa */
    const $btnMenu = d.querySelector(".burger-btn");
    /* Tomamos la referencia del navbar */
    const $menu = d.querySelector(".navbar");
    /* Evento click del boton de hamburguesa */
    $btnMenu.addEventListener("click", e=> {
        /* El boton hamburguesa desaparece */
        $btnMenu.firstElementChild.classList.toggle("none");
        /* Y se le agrega una nueva clase para mostrar otro svg  */
        $btnMenu.lastElementChild.classList.toggle("none");
        /* Para indicar que se muestre nuestro navbar que se encuentra oculto */
        $menu.classList.toggle("is-active");
    });
    /* Evento de click */
    d.addEventListener("click",e=>{
        /* Si el evento que nos devuelve todas las ocurrencias es falso retornamos falso(oculto) */
        if(!e.target.matches(".navbar ul li a")) return false;
        /* Al hacer click en el boton quitamos el svg de X  para poner el boton de Hamburguesa*/
        $btnMenu.firstElementChild.classList.remove("none");
        $btnMenu.lastElementChild.classList.add("none");
        /* Ocultamos nuevamente el navbar */
        $menu.classList.remove("is-active");
    })
})(document);