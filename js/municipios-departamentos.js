const url = "/PAPACOL/colombia.json";

document.addEventListener("DOMContentLoaded", function (){
    fetch(url)
        .then(response => response.json())
        .then(data => {
            //Seleccionar el select para el departamento
            const departamentoSelect = document.querySelector("#departamento");

            //Agrega todos los departamentos que se encuentran en el JSON al select
            data.forEach(depto => {
                const optionDepartamento = document.createElement("option");
                optionDepartamento.value = depto.departamento;
                optionDepartamento.textContent = depto.departamento;
                departamentoSelect.appendChild(optionDepartamento);
            })

            //Evento change al momento de seleccionar departamento
            departamentoSelect.addEventListener("change", function() {
                const municipioSelect = document.querySelector("#municipio");
                municipioSelect.disabled = true;

                const selectedDepto = data.find(d => d.departamento === this.value);

                if(selectedDepto) {
                    //Agrega todas las ciudades del departamento que se eligió
                    selectedDepto.ciudades.forEach(municipio => {
                        const option = document.createElement("option");
                        option.value = municipio;
                        option.textContent = municipio;
                        municipioSelect.appendChild(option);
                    });
                    municipioSelect.disabled = false;

                }
            });
        })
        .catch(error => console.log("Error al cargar el JSON:", error));
});