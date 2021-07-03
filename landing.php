<?php
session_start();
        if (isset($_POST["submit"]) && ($_POST['search'] == "")){
          $_SESSION["msg"] = "please enter a product name";

    }
?>
