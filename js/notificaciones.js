// Obtener la cadena de consulta (todo lo que viene después de ? en la URL)
const queryString = window.location.search;

// Usar URLSearchParams para trabajar con los parámetros de la URL
const urlParams = new URLSearchParams(queryString);

//obtiene el dato por medio de la url
const color = urlParams.get("color");
const mensaje = urlParams.get("mensaje");

function notificacion(m, c) {
    //Crear html para mostrar la notificación
    const div = document.createElement("DIV");
    div.classList.add("my-[0.5rem]", "p-[1.5rem]", "w-[28rem]", "h-[6rem]", "rounded", "flex", "justify-center", "items-center", c);
    const h2 = document.createElement("H2");
    h2.classList.add("text-white", "uppercase", "font-bold", "text-center");
    div.appendChild(h2);

    //Ingreso el texto de la notificación
    h2.innerText = m;

    //Selecciono el contenedor principal
    const contenedor = document.querySelector("#contenedor");
    if(c && m){
        //Añado la notificación al cuerpo del html
        contenedor.appendChild(div);
        
        //Elimino la notificación después de 5 segundos
        setTimeout(() => {
            contenedor.removeChild(div);
        }, 5000);
    }
}
notificacion(mensaje, color);