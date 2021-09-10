
<?php

class Conexion extends PDO{
   private $dsn = "mysql:host=PMYSQL106.dns-servicio.com:3306;dbname=6633800_wp_l1w6i;charset=utf8mb4";
   private $usu="wp_dq18q";
   private $pass="I@hal980";
   private $opciones=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
   
   public function __construct() {
       parent::__construct($this->dsn, $this->usu, $this->pass, $this->opciones);
   }
}
