<?php 

    if(isset($_GET["sell"]))
    {
        include('adpost/addpost.php');
    }

    if(isset($_GET["myads"]))
    {
        include('adpost/myads.php');
    }

    if(isset($_GET["saleH"]))
    {
        include('adpost/forms/saleH.php');
    }

    if(isset($_GET["saleS"]))
    {
        include('adpost/forms/saleS.php');
    }

    if(isset($_GET["rentH"]))
    {
        include('adpost/forms/rentH.php');
    }
    
    if(isset($_GET["rentS"]))
    {
        include('adpost/forms/rentS.php');
    }

    if(isset($_GET["cars"]))
    {
        include('adpost/forms/car.php');
    }

    if(isset($_GET["commercial"]))
    {
        include('adpost/forms/commercial.php');
    }

    if(isset($_GET["spare4"]))
    {
        include('adpost/forms/spare4.php');
    }

    if(isset($_GET["bike"]))
    {
        include('adpost/forms/bike.php');
    }

    if(isset($_GET["bicycle"]))
    {
        include('adpost/forms/bicycle.php');
    }

    if(isset($_GET["spare2"]))
    {
        include('adpost/forms/spare2.php');
    }

    if(isset($_GET["computer"]))
    {
        include('adpost/forms/computer.php');
    }

    if(isset($_GET["game"]))
    {
        include('adpost/forms/game.php');
    }

    if(isset($_GET["camera"]))
    {
        include('adpost/forms/camera.php');
    }

    if(isset($_GET["men"]))
    {
        include('adpost/forms/men.php');
    }

    if(isset($_GET["women"]))
    {
        include('adpost/forms/women.php');
    }

    if(isset($_GET["pkgoptions"]))
    {
        include('adpost/packagesoptions.php');
    }

    if(isset($_GET["packages"]))
    {
        include('adpost/packages.php');
    }

    if(isset($_GET["mypackages"]))
    {
        include('adpost/mypackages.php');
    }

?>