window.addEventListener('load', function () {

  const formulario = document.querySelector('#form');

  console.log(formulario);


  formulario.addEventListener('submit', function (e) {



    const file = document.querySelector('#file').value;
 


    if (file) {

      alert('No hay archivo seleccionado');

      e.preventDefault();

    }


    console.log('Se puede subir archivo seleccionado');


  })

})



