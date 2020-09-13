window.addEventListener('load', function () {

  const formulario = document.querySelector('#form');

  //console.log(cedula);


  formulario.addEventListener('submit', function (e) {



    const cedula = document.querySelector('#cedula').value;
    const nombre = document.querySelector('#nombre').value;
    const telefono = document.querySelector('#telefono').value;
    const operador = document.querySelector('#operador').value;
    const tipoventa = document.querySelector('#tipoventa').value;
    const producto = document.querySelector('#producto').value;
    const revenue = document.querySelector('#revenue').value;


    if (cedula.trim() == "" || nombre.trim() == "" || telefono.trim() == "" || operador.trim() == 0 || tipoventa.trim() == 0 || producto.trim() == 0 || revenue.trim() == 0) {

      alert('Todos los campos debe estar diligeniados');

      e.preventDefault();

    }


    console.log('Sali del if');


  })

})



