<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COPAPA</title>
    <link rel="stylesheet" href="../css/panel-cliente.css">
    <link rel="icon" href="../img/copapa.png" type="image/png">
    <script>
        function cerrarSesion(){
            window.location.href = "index.html";
        }
    </script>
</head>
<body>
    <nav>
        <ul>
            <li><button><a href="actualizar-cuenta.html">Actualizar Cuenta</a></button></li>
            <li><button onclick="cerrarSesion()" class="cerrar-sesion">Cerrar Sesión</button></li>
            <li><a href="compra.html"><img src="../img/carrito-de-compras.png" alt="Icono de carrito de compras"></a></li>
        </ul>
    </nav>
    <div class="contenido">
        <img src="../img/copapa.png" class="icono" alt="Icono COPAPA">
        <h2>Publicaciones Disponibles</h2>
        <div class="publicacion">
            <div class="informacion">
                <p>Cepa: <span>Papa Pastusa</span></p>
                <p>Precio: <span>6.000$ x kg</span></p>
                <p>Ubicación: <span>Pasto-Nariño</span></p>
                <p>Cantidad Disponible: <span>80000kg</span></p>
                <p>Responsable: <span>Fred Camilo Polania Montero</span></p>
                <p>Número de teléfono: <span>3234171295</span></p>
            </div>
            <div class="imagen-papa"><img src="../img/papa-pastusa.jpeg" alt="Foto de papa en venta"></div>
            <div class="botones">
                <div class="casilla">
                    <label for="cantidad">Ingrese cantidad a comprar aquí:</label>
                    <input id="cantidad" name="cantidad" type="number" min="50">
                </div>
                <button class="actualizar">Agregar al Carrito</button>
            </div>
        </div>
        <div class="publicacion">
            <div class="informacion">
                <p>Cepa: <span>Papa Pastusa</span></p>
                <p>Precio: <span>6.000$ x kg</span></p>
                <p>Ubicación: <span>Pasto-Nariño</span></p>
                <p>Cantidad Disponible: <span>80000kg</span></p>
                <p>Responsable: <span>Fred Camilo Polania Montero</span></p>
                <p>Número de teléfono: <span>3234171295</span></p>
            </div>
            <div class="imagen-papa"><img src="../img/papa-pastusa.jpeg" alt="Foto de papa en venta"></div>
            <div class="botones">
                <div class="casilla">
                    <label for="cantidad">Ingrese cantidad a comprar aquí:</label>
                    <input id="cantidad" name="cantidad" type="number" min="50">
                </div>
                <button class="actualizar" >Agregar al Carrito</button>
            </div>
        </div>
        <div class="publicacion">
            <div class="informacion">
                <p>Cepa: <span>Papa Pastusa</span></p>
                <p>Precio: <span>6.000$ x kg</span></p>
                <p>Ubicación: <span>Pasto-Nariño</span></p>
                <p>Cantidad Disponible: <span>80000kg</span></p>
                <p>Responsable: <span>Fred Camilo Polania Montero</span></p>
                <p>Número de teléfono: <span>3234171295</span></p>
            </div>
            <div class="imagen-papa"><img src="../img/papa-pastusa.jpeg" alt="Foto de papa en venta"></div>
            <div class="botones">
                <div class="casilla">
                    <label for="cantidad">Ingrese cantidad a comprar aquí:</label>
                    <input id="cantidad" name="cantidad" type="number" min="50">
                </div>
                <button class="actualizar">Agregar al Carrito</button>
            </div>
        </div>
    </div>

</body>
</html>