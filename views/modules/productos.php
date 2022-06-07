
<div>
    <h1 class="text-center my-4">
        Lista de Productos
    </h1>
    <div class="container my-4">
        <div class="col-4 ms-auto">
            <input id="buscar" name="buscar"class="form-control me-2" type="text" placeholder="Buscar...">
        </div>
    </div>
    <table class="table table-success table-striped table-hover" id="tabla-productos">
        <?php 
            echo ProductoModel::getProducto();
        ?>
    </table>

</div>   