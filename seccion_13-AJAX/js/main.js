var btn_cargar= document.getElementById('btn_cargar_usuarios'),
    error_box= document.getElementById('error_box'),
    tabla= document.getElementById('tabla'),
    loader= document.getElementById('loader');

var usuario_nombre,
    usuario_edad,
    usuario_pais,
    usuario_email;

function cargarUsuarios(){
    tabla.innerHTML='<tr><th>ID</th><th>Nombre</th><th>Edad</th><th>Pais</th><th>Email</th></tr>';

    var peticion= new XMLHttpRequest();

    peticion.open('GET','php/leer-datos.php');

    loader.classList.add('active');

    console.log(peticion.responseText);
    peticion.onload= function(){
        var datos= JSON.parse(peticion.responseText); // JSON.parse() convierte un texto en formato JSON a un objeto de JavaScript

        if(datos.error){
            error_box.classList.add('active');
        }else{

            for(var i = 0; i < datos.length; i++){
                var elemento = document.createElement('tr');
              
                elemento.innerHTML += "<td>"+datos[i].id +"</td>";
                elemento.innerHTML += "<td>"+datos[i].nombre +"</td>";
                elemento.innerHTML += "<td>"+datos[i].edad +"</td>";
                elemento.innerHTML += "<td>"+datos[i].pais +"</td>";
                elemento.innerHTML += "<td>"+datos[i].email +"</td>";
                tabla.appendChild(elemento);
            }

        }
    };

    peticion.onreadystatechange = function(){
        if(peticion.readyState == 4 && peticion.status == 200){
            loader.classList.remove('active');
        }
    }

    peticion.send();
}

function agregarUsuarios(e){
    e.preventDefault();

    var peticion = new XMLHttpRequest();
    peticion.open('POST', 'php/insertar-usuario.php');

    usuario_nombre= formulario.nombre.value.trim();
    usuario_edad= parseInt(formulario.edad.value.trim());
    usuario_pais= formulario.pais.value.trim();
    usuario_email= formulario.email.value.trim();

    if(formulario_valido()){
        console.log('formulario valido');
        console.log(usuario_edad);
        error_box.classList.remove('active');

        var parametros = 'nombre='+usuario_nombre+'&edad='+usuario_edad+'&pais='+usuario_pais+'&email='+usuario_email;

        peticion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        loader.classList.add('active');

        peticion.onload = function(){
            cargarUsuarios();
            formulario.nombre.value='';
            formulario.edad.value='';
            formulario.pais.value='';
            formulario.email.value='';
        };

        peticion.onreadystatechange = function(){
            if(peticion.readyState == 4 && peticion.status == 200){
                loader.classList.remove('active');
            }
        };

        peticion.send(parametros); // enviamos los datos al servidor con send() y los datos se envian en formato de cadena de texto
    }else{
        error_box.classList.add('active');
        error_box.innerHTML= 'Por favor rellena el formulario correctamente';   
    };
}

btn_cargar.addEventListener('click',cargarUsuarios);

formulario.addEventListener('submit', function(e){
    agregarUsuarios(e);
});

function formulario_valido(){ console.log(usuario_edad);
    if(usuario_nombre=='' || usuario_edad=='' || isNaN(usuario_edad)|| usuario_pais=='' || usuario_email==''){
        return false;
    }
    
    return true;
};
