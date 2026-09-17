<?php
        //la clase Producto hereda las funciones de la clase conectar
    class Producto extends Conectar
    {
        // obtiene todos los productos de la base de datos
        public function get_producto(){

              // establece la conexion con la base de datos
            $conectar = parent::conexion();

           // codificacion de caracteres
            parent ::set_names();

           // consulta SQL para obtener todos los productos
            $sql= "SELECT * FROM tm_producto WHERE est = 1";

            // prepara la consulta
            $sql= $conectar->prepare($sql);

            //ejecuta la consulta
            $sql = execute

            //obtiene y retorna todos los registros encontrados
            $resultado = $sql->fetchAll

            
            return $resultado;
        }
    }


?>