
<div>
    <h1 class="text-center my-4">
        Lista de Productos
    </h1>
    <div class="container my-4">
        <div class="col-4 ms-auto">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
    <table class="table table-success table-striped table-hover">
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

</div>   