<?php

    include("../DB.php");
    include("../query.php");


?>

<?php 
    $id = "";
    if(isset($_POST["DeleteDB"])) {
        $id = $_POST["DeleteFromDB"];
        $query->deleteFromBooks($id);
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>



<?php foreach($rows as $row) {   ?>

<p><h3>Bookname</h3><?php echo $row["Bookname"]  ?></p>
<p><h3>Pages</h3><?php echo $row["Pages"]  ?></p>
<p><h3>Date</h3><?php echo $row["Date"]  ?></p>
<p><h3>BookCode</h3><?php echo $row["BookCode"]  ?></p>
<p><h3>Price</h3><?php echo $row["Price"]  ?></p>
<p><h3>Author</h3><?php echo $row["Author"] ?> </p>




<?php }?> 



    <form action="" id="del" method="post">
        <label for="">წაშალე მონაცემი</label>
        <input type="text" name="delete" id="deleteFromBase">
        <br>    
        <br>
        <input type="submit" name="deletebase" value="deletebase" id="deletebase">
    </form>





    <script>
    $(document).on("click","#del",function(e) {
        e.preventDefault();

        
        let deleteFromBase = $("#DeleteFromDB").val()
        let deletebase = $("#DeleteDB").val();
       

        $.ajax({
            url:"delete.php",
            type:"post",
            data: {
                DeleteFromDB: DeleteFromDB,
                DeleteDB:DeleteDB
               
            },
            success : function(data) {
                $("#delete").html(data)
            }
        })
        
    })
    

</script>




</body>
</html>