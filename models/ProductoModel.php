<?php
Class ProductoModel{
    public function getProductos(){
        require_once '../config/database.php';
        $db = new Conectar();
        $mysqli = $db->conexion();
        $sql = "SELECT * FROM productos";
        $result = $mysqli->query($sql);
        $listaProductos = array();
        while($p = $result->fetch_assoc()){
            $listaProductos[] = $p;
        }
        return $listaProductos;
    }

    public static function addProductos(){
        require_once '../config/database.php';
            $nombre = $_POST['addnombre'];
            $precio = $_POST['addprecio'];
            $categoria = $_POST['addcategoria'];
            $db = new Conectar();
            $mysqli = $db->conexion();
            $sql = "INSERT INTO productos (nombre, precio, categoria) VALUES ('".$nombre."', '".$precio."', '".$categoria."')";
            $result = $mysqli->query($sql);
            if($result){
                echo "Producto agregado correctamente";
            }else{
                echo "Error al agregar el producto";
            }
    }

    public static function updateProductos(){
        require_once '../config/database.php';
            $nombre = $_POST['editnombre'];
            $precio = $_POST['editprecio'];
            $categoria = $_POST['editcategoria'];
            $db = new Conectar();
            $mysqli = $db->conexion();
            $sql = "UPDATE productos SET nombre = '".$nombre."', precio = '".$precio."', categoria = '".$categoria."' WHERE id = '".$_POST['editid']."'";
            $result = $mysqli->query($sql);
            if($result){
                echo "Producto editado correctamente";
            }else{
                echo "Error al editar el producto";
            }
    }

    public static function deleteProductos(){
        require_once '../config/database.php';
            $db = new Conectar();
            $mysqli = $db->conexion();
            $sql = "DELETE FROM productos WHERE id = '".$_POST['delid']."'";
            $result = $mysqli->query($sql);
            if($result){
                echo "Producto eliminado correctamente";
            }else{
                echo "Error al eliminar el producto";
            }
    }
}
?>