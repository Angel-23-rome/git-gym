<?php
class DB {

    protected static $con1;
    private function __construct(){

        try{
            self::$con1 = new PDO('pgsql:user=postgres dbname=EscuelaITI password=12345');
            
            self::$con1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$con1->setAttribute(PDO::ATTR_PERSISTENT, false);
        }catch(PDOException $e){
            echo "No conectados";
            exit;
        }
    }
        public static function getConn(){
            if(!self::$con1){
                new DB();
            }
            return self::$con1;
        }
    



}

?>