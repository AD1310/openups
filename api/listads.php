<?php
error_reporting(0);
if(isset($_POST))
{
    require('../database/connection.php');
    if($_POST['category'] == 'allproducts')
    {
        // $sql = 'SELECT aid,title,price from ads where visibility = 1';
        $sql = 'SELECT ads.title, ads.price, locations.city, adimgs.img
                FROM ads
                INNER JOIN locations ON ads.aid=locations.aid and ads.visibility = 1
                INNER JOIN adimgs ON ads.aid=adimgs.aid GROUP BY adimgs.aid LIMIT 1';

        $result = $con->query($sql);
        $arr = [];
        
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
              array_push($arr,[$row["title"],$row["price"],$row["city"],$row["img"]]);
            }
            echo json_encode($arr);
        } 
        else 
        {
            echo "nodata";
        }
    }
    else 
    {
        echo "nodata";
    }
}


?>