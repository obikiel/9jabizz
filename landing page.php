<?php
include("landing.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>search box</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="landing.css" rel="stylesheet">
    
</head>
<body>
    
    <img src="9jabizz_logo-removebg-preview.png" height="100px" width="150px">
    
    <?php if(isset($_SESSION['msg'])):?>
                <div class="msg">
                    <?php
                        echo $_SESSION['msg'];
                        unset ($_SESSION['msg']);
                    ?>
                </div>
    <?php endif ?>
    <div id="main">
    <form action="landing page.php" method="post"> 
        <input type="text" class="search"  id="search-box" name="search" placeholder="search for product">
            <input type="submit" class="submit"  id="submit-box" name="submit" value="search">
        </form> 
    </div>
    </br></br>


   <label>Countries: </label>
   <input type="text" id="input" placeholder="please enter country" />
   
   <div id ="major">
       <ul id="ul"></ul>
   </div>
<br><br>
    <a href="index.html"> back to the home page </a>

<script src="landing.js"></script>
</body>
</html>