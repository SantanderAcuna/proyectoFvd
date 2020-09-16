window.addEventListener('load', function () {

  const formulario = document.querySelector('#form');

  //console.log(cedula);


  formulario.addEventListener('submit', function (e) {



    const file = document.querySelector('#file').value;
 


    if (file == "") {

      alert('No hay archivo seleccionado');

      e.preventDefault();

    }


    console.log('No hay archivo seleccionado');


  })

})



