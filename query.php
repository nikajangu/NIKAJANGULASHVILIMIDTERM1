<?php   
    include_once 'DB.php';
?>
<?php
    class Query {
        public $stmt;
        public $conn;


        function __construct() {
            $db = new Db();
            $this->conn = $db->conn();
    }
    function selectFrombook() {
        $sql = "SELECT * FROM `bookinfo`";

        $result = $this->conn->query($sql);


        if($result->rowCount() > 0 ){
          
            while($row = $result->fetch()){
                 $data[] = $row;
            }
            return $data;
         }
         

   
    }
    function insertIntoBooks($Bookname,$Pages,$Date,$BookCode,$Price,$Author) {
        $sql = "INSERT INTO `bookinfo`(`Bookname`, `Pages`, `Date`, `BookCode`, `Price`,`Author`) VALUES
        ('$Bookname','$Pages','$Date','$BookCode','$Price','$Author')";
        $result = $this->conn->query($sql);
                    
        echo "Book inserted";
                
           
    } function updateIntoBooks($id,$Bookname,$Pages, $Date,$Price,$Author) {
        $sql = "UPDATE `bookinfo` SET `Bookname`='$Bookname',`Pages`='$Pages',`Date` = '$Date',`Price`='$Price',`Author`='$Author' WHERE `id`='$id'";


      
        $result = $this->conn->query($sql);
                    
        echo "Updated ";
                
           
    }
    function deleteFromBooks($id) {
           
        $sql = "DELETE FROM `bookinfo` WHERE `id`='$id'";
        $result = $this->conn->query($sql);
    
    
}
}
    $query = new Query();
    $rows = $query->selectFrombook();
?>