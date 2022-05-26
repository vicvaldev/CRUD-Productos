<table border="1" width="80%">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
    </tr>
    <?php
        $producto = new ProductoModel();
        $lista = $producto->getProductos();
        foreach ($lista as $p) {
            echo "<tr>";
            echo "<td>".$p['id']."</td>";
            echo "<td>".$p['nombre']."</td>";
            echo "<td>".$p['precio']."</td>";
            echo "<td>".$p['categoria']."</td>";
            echo "</tr>";
        }
    ?>
</table>
