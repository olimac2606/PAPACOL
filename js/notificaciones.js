function notificacion() {
    // Obtener la cadena de consulta (todo lo que viene después de ? en la URL)
    const queryString = window.location.search;

    // Usar URLSearchParams para trabajar con los parámetros de la URL
    const urlParams = new URLSearchParams(queryString);

    // Obtener los datos por medio de la URL
    const color = urlParams.get("color");
    const mensaje = urlParams.get("mensaje");

    if (color && mensaje) {
        // Crear el HTML para mostrar la notificación
        const div = document.createElement("DIV");
        div.classList.add("my-[0.5rem]", "p-[1.5rem]", "w-[28rem]", "h-[6rem]", "rounded", "flex", "justify-center", "items-center", color);//bg-rojoClaroCustom bg-verdeClaroCustom (para que los reconozca tailwind, se puede eliminar cuando se haya terminado de dar estilos a todo);
        const h2 = document.createElement("H2");
        h2.classList.add("text-white", "uppercase", "font-bold", "text-center");
        div.appendChild(h2);

        // Ingresar el texto de la notificación
        h2.innerText = mensaje;

        // Seleccionar el contenedor principal
        const contenedor = document.querySelector("#contenedor");
        if (contenedor) {
            // Añadir la notificación al cuerpo del HTML
            contenedor.appendChild(div);

            // Eliminar la notificación después de 5 segundos
            setTimeout(() => {
                contenedor.removeChild(div);

                // Eliminar los parámetros de la URL
                urlParams.delete("color");
                urlParams.delete("mensaje");

                // Construir una nueva URL sin los parámetros eliminados
                const newUrl = `${window.location.origin}${window.location.pathname}${urlParams.toString() ? `?${urlParams.toString()}` : ""}`;

                // Actualizar la URL sin recargar la página
                window.history.replaceState({}, document.title, newUrl);
            }, 5000);
        }
    }
}
notificacion();