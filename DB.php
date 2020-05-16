

<?php
 class Db {


    public function conn() {
        $servername = "localhost";
        $dbname = "book";
        $dbhost = "root";
        $password = "";

        try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",$dbhost,$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "conn";
            return $conn;
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
    } 
 

 }


?>


