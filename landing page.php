<!DOCTYPE.html>
<?php
include("landing.php");
?>

<html>
<head>
    <title>search box</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="landing.css" rel="stylesheet">
    <script src="landing.js"></script>
    
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


   <label for="mycolor">enter an item:</label>
   <input type="text" name="mycolor" id="mycolor" list="colorlist">
    <datalist id="colorlist">
        <option>chair</option>
        <option>table</option>
        <option>printer</option>
        <option>shoe</option>
        <option>bag</option>
        <option>phone</option>
        <option>computers</option>


        <a href="index.html"> back to the home page </a>
</body>
</html>