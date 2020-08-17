<?php 

    if(isset($_GET["sell"]))
    {
        include('adpost/addpost.php');
    }

    if(isset($_GET["myads"]))
    {
        include('adpost/myads.php');
    }


?>