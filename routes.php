<?php 

    $scats = array(
        'saleH'=>array(1,'Properties','Sale:Houses & Apartment'),
        'renH'=>array(2,'Properties','Rent:Houses & Apartment'),
        'saleS'=>array(3,'Properties','Sale:Shops & Offices'),
        'rentS'=>array(4,'Properties','Rent:Shops & Offices'),
        'cars'=>array(5,'Vehicles (Four Wheelers & More)','Cars'),
        'commercial'=>array(6,'Vehicles (Four Wheelers & More)','Other Vehicles'),
        'spare4'=>array(7,'Vehicles (Four Wheelers & More)','Spare Parts'),
        'bike'=>array(8,'Vehicles (Two Wheelers)','Bikes'),
        'bicycle'=>array(9,'Vehicles (Two Wheelers)','Bicycle'),
        'spare2'=>array(10,'Vehicles (Two Wheelers)','Spare Parts'),
        'computer'=>array(11,'Electronics','Computer & Laptops'),
        'game'=>array(12,'Electronics','Games & Entertainment'),
        'camera'=>array(13,'Electronics','Cameras & Lenses')
        );
    if(isset($_GET['ad']))
    {
        $cat = $scats[$_GET['ad']];
        
        echo '<input type="hidden" value="'.$cat[0].'" id="scid" >';
        echo '<input type="hidden" value="'.$cat[1].'" id="catn" >';
        echo '<input type="hidden" value="'.$cat[2].'" id="scatn" >';
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
    else if(isset($_GET["logout"]))
    {
        include('login/logout.php');
    }



?>