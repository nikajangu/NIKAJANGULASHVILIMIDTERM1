<?php

    include("../DB.php");
    include("../query.php");


?>

<?php 

if(isset($_POST["submit"])) {
    $Bookname = $_POST["Bookname"];
    $Pages = $_POST["Pages"];
    $Date = $_POST["Date"];
    $BookCode = $_POST["BookCode"];
    $Price = $_POST["Price"];
    $Author = $_POST["Author"];

    $query->insertIntoBooks($Bookname,$Pages,$Date,$BookCode,$Price,$Author);
    echo "You inserted in administratorRights ";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
        
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>



    <form action="" id="form" method="post">
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


        let Bookname = $("#Bookname").val();
        let Pages = $("#Pages").val();
        let Date = $("#Date").val();
        let BookCode = $("#BookCode").val();
        let Price = $("#Price").val();
        let Author = $("#Author").val();
        let submit = $("#submit").val();

       

        $.ajax({
            url:"insert.php",
            type:"post",
            data: {
                Bookname:Bookname,
                Pages: Pages,
                Date: Date,
                BookCode:BookCode,
                Price:Price,
                Author: Author,
                submit:submit
            },
            success : function(data) {
                $("#result").html(data)
            }
        })
        $("#form")[0].reset();
        // alert(Bookname);
        console.log(Bookname);
    })
    

</script>



    
</body>
</html>