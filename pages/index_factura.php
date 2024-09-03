<?php
require '../config/db.php';

// Primera consulta para obtener todas las facturas
$sql = "SELECT ID_Factura	ID_Cliente	ID_Campesino	Fecha_Factura	Valor_Compra	Descuento_Compra	Iva_Compra	Tipopago_compra	
        FROM factura f
        JOIN cliente c ON f.Id = c.Id
        JOIN servicios s ON f.Id_ser = s.Id_ser";
        
$stmt = $pdo->query($sql);
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<h1>Lista de Facturas</h1>";
echo "<a href='../vistas/crear_factura.php'>Crear Nueva Factura</a><br><br>"; // Enlace para crear una nueva factura
echo "<table border='1'>
        <tr>
            <th>ID Factura</th>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Campesino</th>
            <th>Valor Total</th>
             <th>Iva compra</th>
             <th>Descuentos</th>
              <th>Tipo pago</th>
            <th>Acciones</th>
        </tr>";

foreach ($resultado as $fila) {
    // Usa directamente $fila['Id_fac'] para el enlace de eliminación
    $idFac = htmlspecialchars($fila['Id_Factura']); 
    $nomCli = htmlspecialchars($fila['Id_Cliente']);
    $nomCam =htmlspecialchars($fila['Id_Campesino']);
    $fecFac = htmlspecialchars($fila['Fecha_factura']);
    $valorTotal = htmlspecialchars($fila['Valor_Compra']);
    $descuCompra = htmlspecialchars($fila['Descuento_Compra']);
    $ivaCompra = htmlspecialchars($fila['Iva_Compra']);
    $tipoPago = htmlspecialchars($fila['Tipo_Pago']);

    echo "<tr>
            <td>" . $idFac . "</td>
            <td>" . $nomCli . "</td>
             <td>" . $monCam . "</td>
             <td>" . $fecFac . "</td>
            <td>" . $valorTotal . "</td>
            <td>" . $descuCompra . "</td>
            <td>" . $ivaCompra . "</td>
            <td>" . $tipoPago . "€</td>
            <td>
                <a href='../vistas/factura_update.php?id=" . $idFac . "'>Editar</a> |
                <a href='../sesiones/factura_eliminar.php?Id_fac=" . $idFac . "' onclick=\"return confirm('¿Estás seguro?')\">Eliminar</a>
            </td>
          </tr>";
}
echo "</table>";
?>

