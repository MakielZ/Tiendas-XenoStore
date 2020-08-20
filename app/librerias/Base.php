<?php

    class Base{
        private $host = DB_HOST;
        private $user = DB_USER;
        private $password = DB_PASSWORD;
        private $dbname = DB_NAME;
        
        private $dbh; //database handler
        private $stmt; //statement
        private $error;

        public function __construct(){

            //Configurar conexion
            /*El dsn es el origen de la base de datos, recuerdas la sintaxis? */
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            $opciones = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            //crear instancia de pdo
            try{
                $this->dbh = new PDO($dsn, $this->user, $this->password, $opciones);
                $this->dbh->exec("set names utf8");
            } catch(PDOException $e){
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        //esto sera para la consulta
        public function query($sql){
            $this->stmt = $this->dbh->prepare($sql);
        }

        //Se vincula la consulta con el metodo bind
        public function bind ($parametro,$valor,$tipo=null){
            if(is_null($tipo)){
                switch(true){
                    case is_int($valor):
                        $tipo = PDO::PARAM_INT;
                    break;
                    case is_bool($tipo):
                        $tipo = PDO::PARAM_BOOL;
                    break;
                    case is_null($tipo):
                        $tipo=PDO::PARAM_NULL;
                    break;
                    default:
                        $tipo=PDO::PARAM_STR;
                    break;
                }
            }
            $this->stmt->bindValue($parametro, $valor, $tipo);
        }

        public function execute(){
            return $this->stmt->execute();
        }

        public function registros(){
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);

        }

        public function registro(){
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);

        }

        public function rowCount(){
            $this->execute();
            return $this->stmt->rowCount;

        }
    }
    

?>