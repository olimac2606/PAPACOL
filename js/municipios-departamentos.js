const url = "/PAPACOL/colombia.json";

document.addEventListener("DOMContentLoaded", function () {
    fetch(url)
        .then(response => response.json())
        .then(data => {
            // Seleccionar el select para el departamento
            const departamentoSelect = document.querySelector("#departamento");
            
            //Bloque necesario cuando se esta actualizando la información
            //Selecciona la clase opcion-actualizar cuando este actualizando los datos para que cargue los municipios del departamento que ya esta seleccionado.
            const opcionActualizarDepartamento = document.querySelector(".opcion-actualizar-departamento");
            if(opcionActualizarDepartamento){
                //Seleccionar el municipio que esta actualizando
                const opcionActualizarMunicipio = document.querySelector(".opcion-actualizar-municipio");
                opcionActualizarDepartamento.classList.add("opcionMunicipio");
                const departamentoActualizando = data.find(d => d.departamento === opcionActualizarDepartamento.value);
                
                const municipioSelect = document.querySelector("#municipio");

                // Agregar todas las ciudades del departamento que se esta actualizando.
                departamentoActualizando.ciudades.forEach(municipio => {
                    if(opcionActualizarMunicipio.value !== municipio){
                        const option = document.createElement("option");
                        option.value = municipio;
                        option.textContent = municipio;
                        option.classList.add("opcionMunicipio");
                        municipioSelect.appendChild(option);    
                    }
                });
            }
            //Hasta acá va el bloque

            // Agregar todos los departamentos que se encuentran en el JSON al select
            data.forEach(depto => {
                const optionDepartamento = document.createElement("option");
                optionDepartamento.value = depto.departamento;
                optionDepartamento.textContent = depto.departamento;
                departamentoSelect.appendChild(optionDepartamento);
            });

            // Evento change al momento de seleccionar departamento
            departamentoSelect.addEventListener("change", function () {
                const opcionActualizarMunicipio = document.querySelector(".opcion-actualizar-municipio");
                const opcionActualizarDepartamento = document.querySelector(".opcion-actualizar-departamento");
                //Elimina la clase opcion-actualizar-departamento cuando se está editando para que no entre al if de arriba
                if(opcionActualizarDepartamento){
                    opcionActualizarDepartamento.classList.remove("opcion-actualizar-departamento");
                    opcionActualizarMunicipio.remove();
                    
                }

                // Limpiar los municipios actuales
                const opcionesMunicipio = document.querySelectorAll(".opcionMunicipio");
                opcionesMunicipio.forEach(opcion => opcion.remove());

                const municipioSelect = document.querySelector("#municipio");

                municipioSelect.disabled = true;

                const selectedDepto = data.find(d => d.departamento === this.value);

                if (selectedDepto) {
                    // Agregar todas las ciudades del departamento que se eligió
                    selectedDepto.ciudades.forEach(municipio => {
                        const option = document.createElement("option");
                        option.value = municipio;
                        option.textContent = municipio;
                        option.classList.add("opcionMunicipio");
                        municipioSelect.appendChild(option);
                    });
                    municipioSelect.disabled = false;
                }
            });
        })
        .catch(error => console.log("Error al cargar el JSON:", error));
});