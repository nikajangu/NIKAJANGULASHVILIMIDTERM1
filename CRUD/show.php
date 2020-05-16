<?php

    include("../DB.php");
    include("../query.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
</head>
<body>
    
    


<?php foreach($rows as $row) {   ?>


<div >
<p><h3>Bookname</h3><?php echo $row["Bookname"]  ?></p>
<p><h3>Pages</h3><?php echo $row["Pages"]  ?></p>
<p><h3>Date</h3><?php echo $row["Date"]  ?></p>
<p><h3>BookCode</h3><?php echo $row["BookCode"]  ?></p>
<p><h3>Price</h3><?php echo $row["Price"]  ?></p>
<p><h3>Author</h3><?php echo $row["Author"] ?> </p>
</div>






<?php }?> 




    
<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

<script>
    
    function fetch() {

        $.ajax({
        url:"show.php",
        type:"post",
        success : function(data) {
            $("#fetch").html(data)
            }
        })
       
    }
    fetch();

    console.log(fetch());

</script>



</body>
</html>