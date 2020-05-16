<?php

    include("../DB.php");
    include("../query.php");


?>

<?php 

    if(isset($_POST["submit"])) {
        $id = $_POST["Update"];
        $Bookname = $_POST["Bookname"];
        $Pages = $_POST["Pages"];
        $Date = $_POST["Date"];
        $Price = $_POST["Price"];
        $Author = $_POST["Author"];

        $query-> updateIntoBooks($id,$Bookname,$Pages, $Date,$Price,$Author);
        echo "ragaca";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>


<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>



<form action="" id="insertForm" method="post">
<label for="">მონაცემის განახლება</label>
        <input type="text" name="Update" id="Update">
        <br>
        <label for="">დასახელება</label>
        <input type="text" id="Bookname" name="Bookname">
       
        <br>       <label for="">გვერდები</label>
        <input type="text" id="Pages" name="Pages">
       
        <br>  
        <label for="">თარიგი</label>
        <input type="date" id="Date" name="Date">
        <br>  
        <br>  
        <label for="">წიგნისკოდი</label>
        <input type="text" id="BookCode" name="BookCode">
        <br>  
        <br>  
        <label for="">ფასი</label>
        <input type="text" id="Price" name="Price">
        <br>  
        <label for="">ავტორი</label>
        <input type="text" id="Author" name="Author">
        <br>  
        
        
        <br>  
        <br>
        <input type="submit" id="submit" name="submit" value="submit">
       
        <br>    

</form>

<script>
    $(document).on("click","#submit",function(e) {
        e.preventDefault();

        let Update = $("#Update").val()
        let Bookname = $("#Bookname").val();
        let Pages = $("#Pages").val();
        let Date = $("#Date").val();
        let Price = $("#Price").val();
        let Author = $("#Author").val();
        let submit = $("#submit").val();

       

        $.ajax({
            url:"update.php",
            type:"post",
            data: {
                Update: Update,
                Bookname:Bookname,
                Pages:Pages,
                Date:Date,
                Price:Price,
                Author:Author, 
                submit:submit
            },
            success : function(data) {
                $("#result").html(data)
            }
        })
   

    })
    

</script>




    
</body>
</html>