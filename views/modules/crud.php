<?php
if(isset($_POST['addnombre']) && isset($_POST['addprecio']) && isset($_POST['addcategoria'])){
    ProductoModel::addProductos();
}

if(isset($_POST['editnombre']) && isset($_POST['editprecio']) && isset($_POST['editcategoria'])){
    ProductoModel::updateProductos();
}

if(isset($_POST['delid'])){
    ProductoModel::deleteProductos();
}
?>
<form action="#" method="POST">
    <h1>Agregar Producto Nuevo</h1>
    <label for="nombre">Nombre Producto</label>
    <input type="text" id="nombre" name="addnombre">
    <label for="nombre">Precio</label>
    <input type="text" id="precio" name="addprecio">
    <label for="nombre">Categoria</label>
    <input type="text" id="categoria" name="addcategoria">
    <input type="submit" value="agregar producto">
</form>

<form action="#" method="POST">
    <h1>Editar Producto</h1>
    <label for="nombre">Editar por ID</label>
    <input type="text" id="id" name="editid">
    <label for="nombre">Nombre Producto</label>
    <input type="text" id="nombre" name="editnombre">
    <label for="nombre">Precio</label>
    <input type="text" id="precio" name="editprecio">
    <label for="nombre">Categoria</label>
    <input type="text" id="categoria" name="editcategoria">
    <input type="submit" value="editar producto">
</form>

<form action="#" method="POST">
    <h1>Eliminar Producto</h1>
    <label for="nombre">Eliminar por ID</label>
    <input type="text" id="id" name="delid">
    <input type="submit" value="eliminar producto">
</form>