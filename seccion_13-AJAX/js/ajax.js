var btn= document.getElementById('btn_cargar_usuarios');
var loader= document.getElementById('loader');

btn.addEventListener('click',function(){
    var peticion= new XMLHttpRequest(); // new XMLHttpRequest() es un objeto que nos permite hacer peticiones a un servidor
   // peticion.open('GET','https://api.npoint.io/6fada6215d7d575ae72a');

   peticion.open('GET','php/leer-datos.php');

    loader.classList.add('active'); 

    peticion.onload= function(){
        var datos= JSON.parse(peticion.responseText);


        for(var i = 0; i < 5; i++){
            var elemento = document.createElement('tr');
          
            elemento.innerHTML += "<td>"+datos[i].id +"</td>";
            elemento.innerHTML += "<td>"+datos[i].nombre +"</td>";
            elemento.innerHTML += "<td>"+datos[i].edad +"</td>";
            elemento.innerHTML += "<td>"+datos[i].pais +"</td>";
            elemento.innerHTML += "<td>"+datos[i].correo +"</td>";
            document.getElementById('tabla').appendChild(elemento);
        }
    };


    peticion.onreadystatechange= function(){
        if(peticion.readyState == 4 && peticion.status == 200){
            loader.classList.remove('active');
            
        }
    };


    peticion.send();
});