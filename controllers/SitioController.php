<?php
Class SitioController{
        
        public static function index(){
            include '../views/layouts/app.php';
        }

        public static function home(){
            include '../views/modules/home.php';
        }

        public static function Productos(){
            include '../views/modules/productos.php';
        }

        public static function CRUD(){
            include '../views/modules/crud.php';
        }
        
}
?>