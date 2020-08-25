<?php 

    if(isset($_GET['ad']))
    {
        session_start();
        $_SESSION['scat'] = $_GET['ad'];
        include('adpost/form.php');
    }
    if(isset($_GET["sell"]))
    {
        include('adpost/addpost.php');
    }

    else if(isset($_GET["myads"]))
    {
        include('adpost/myads.php');
    }

    else if(isset($_GET["saleH"]))
    {
        include('adpost/forms/saleH.php');
    }

    else if(isset($_GET["saleS"]))
    {
        include('adpost/forms/saleS.php');
    }

    else if(isset($_GET["rentH"]))
    {
        include('adpost/forms/rentH.php');
    }
    
    else if(isset($_GET["rentS"]))
    {
        include('adpost/forms/rentS.php');
    }

    else if(isset($_GET["cars"]))
    {
        include('adpost/forms/car.php');
    }

    else if(isset($_GET["commercial"]))
    {
        include('adpost/forms/commercial.php');
    }

    else if(isset($_GET["spare4"]))
    {
        include('adpost/forms/spare4.php');
    }

    else if(isset($_GET["bike"]))
    {
        include('adpost/forms/bike.php');
    }

    else if(isset($_GET["bicycle"]))
    {
        include('adpost/forms/bicycle.php');
    }

    else if(isset($_GET["spare2"]))
    {
        include('adpost/forms/spare2.php');
    }

    else if(isset($_GET["computer"]))
    {
        include('adpost/forms/computer.php');
    }

    else if(isset($_GET["game"]))
    {
        include('adpost/forms/game.php');
    }

    else if(isset($_GET["camera"]))
    {
        include('adpost/forms/camera.php');
    }

    else if(isset($_GET["men"]))
    {
        include('adpost/forms/men.php');
    }

    else if(isset($_GET["women"]))
    {
        include('adpost/forms/women.php');
    }

    else if(isset($_GET["pkgoptions"]))
    {
        include('adpost/packagesoptions.php');
    }

    else if(isset($_GET["packages"]))
    {
        include('adpost/packages.php');
    }

    else if(isset($_GET["mypackages"]))
    {
        include('adpost/mypackages.php');
    }

    else if(isset($_GET["product"]))
    {
        include('./productdetails.php');
    }

    else
    {
        header("refresh:0;url=./");
    }

?>