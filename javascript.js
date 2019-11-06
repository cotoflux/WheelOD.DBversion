

var nombres ;
var muertos = [];
var longitud;
var nomRandom;
var div;
var nuevoH1;
var texto;
var colocarH1;
var valorRandom;
var apariencia;
var fantasmas;
var animacion = document.getElementById("rejilla");


function onLoadCargameTodosLosVivos(){
    fetch('./functions/recogerVivos.php')
    .then(function(response) {
        console.log(response);
      return response.json();
    });
}

        //if (animacion.classList.contains('active')) {
          //  animacion.classList.remove("active");
        //}
    //if (!animacion.classList.contains("active")) {
      //  animacion.classList.add("active");
    //}




function fantasmas() {
  //  console.log(apariencia);
    apariencia = document.getElementById("nombresLista");
    apariencia.innerHTML = "";
    for (var i = 0; i < muertos.length; i++) {
        apariencia.innerHTML += "<li>" + muertos[i] + "</li>";
        console.log[i];
    }
    console.log(fantasmas);
}



function reload() {
    window.location.reload();
}