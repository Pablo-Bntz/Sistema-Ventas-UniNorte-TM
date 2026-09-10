<!--git add.
git commit -m "Added MVC."
git push-->
<?php
    class conectar{
        protected $dbh;
        public function Conexion (){
         try{
                $this->dbh = new PDO(
                    "mysql:host=localhost;dbname=ventas;charset=utf8",
                    "root",
                    "",
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    ]
                );

                echo "conexion exitosa  a la base de datos";
                return $this ->dbh;
            }catch(Exception $e){
                echo "Error DB".$e->getmessage();
                die();

            }
        }
        public function set_names(){
            return this->dbh->query("SET_NAME 'utf8'");
        }
    }
    $conexion = new conectar;
    $conexion->Conexion();