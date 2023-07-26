const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});

// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})

sidebar.classList.add('hide');
if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} 


/* Tab reports */
const tabs = document.querySelector(".wrapper");
const tabButton = document.querySelectorAll(".tab-button");
const contents = document.querySelectorAll(".content");
/* Al hacer click en tab, comprobamos si en el id del nodo, en cada click del boton removemos el active del boton en donde se encontraba activo
y le agregamos el active al boton donde se realizo el click, el contenido "contents" tambien le removemos el active para que desaparezca y se active
en donde se le a dado el nuevo click, ahi se agregara la clase "active" para mostrar el contenido que hay en ese contenedor*/
tabs.onclick = e => {
  const id = e.target.dataset.id;
  if (id) {
    tabButton.forEach(btn => {
      btn.classList.remove("active");
    });
    e.target.classList.add("active");

    contents.forEach(content => {
      content.classList.remove("active");
    });
    const element = document.getElementById(id);
    element.classList.add("active");
  }
}