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

    public static function getProducto(){
        require_once '../config/database.php';
        $db = new Conectar();
        $mysqli = $db->conexion();

        $tabla_productos = "";
        $sql = "SELECT * FROM productos";

        if(isset($_POST['productos'])){
            $q = $db->conexion()->real_escape_string($_POST['productos']);

            $sql = "SELECT * FROM productos WHERE nombre LIKE '%".$q."%' OR
            precio LIKE '%".$q."%' OR
            categoria LIKE '%".$q."%' OR
            id LIKE '%".$q."%'";

            return "que esta pasando";
        }

        $tabla_default = $mysqli->query($sql);
        // if($tabla_default -> num_rows > 0){
        //     $tabla_productos .= '<thead>
        //                             <tr>
        //                             <th scope="col">#</th>
        //                             <th scope="col">Nombre</th>
        //                             <th scope="col">Precio</th>
        //                             <th scope="col">Categoria</th>
        //                             </tr>
        //                         </thead>';

        //     while($p = $tabla_default->fetch_assoc()){
        //         $tabla_productos .= '<tr>
        //                                 <td>'.$p['id'].'</td>
        //                                 <td>'.$p['nombre'].'</td>
        //                                 <td>'.$p['precio'].'</td> 
        //                                 <td>'.$p['categoria'].'</td>
        //                             </tr>';
        //     }
        //     return $tabla_productos;
        // }else{
        //     return "No se encontraron registros con sus criterios de busqueda";
        // }
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
                echo "<div class='alert alert-success my-4' id='alert' role='alert'>Producto agregado correctamente</div>";
            }else{
                echo "<div class='alert alert-danger my-4' id='alert' role='alert'>Error al agregar el producto</div>";
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
                echo "<div class='alert alert-warning my-4' id='alert' role='alert'>Producto editado correctamente</div>";
            }else{
                echo "<div class='alert alert-danger my-4'  id='alert' role='alert'>Error al editar el producto</div>";
            }
    }

    public static function deleteProductos(){
        require_once '../config/database.php';
            $db = new Conectar();
            $mysqli = $db->conexion();
            $sql = "DELETE FROM productos WHERE id = '".$_POST['delid']."'";
            $result = $mysqli->query($sql);
            if($result){
                echo "<div class='alert alert-dark my-4' id='alert'role='alert'>Producto eliminado correctamente</div>";
            }else{
                echo "<div class='alert alert-danger my-4' id='alert' role='alert'>Error al eliminar el producto</div>";
            }
    }
}
?>