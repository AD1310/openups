<?php

if(isset($_POST))
{
    require('../database/connection.php');
    $sql = 'SELECT pid,pname,title,price from posts where visibility = "1"';
    $result = $con->query($sql);
    $arr = [];
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
          array_push($arr,[$row["pid"],$row["pname"],$row["title"],$row["price"]]);
        }
        echo json_encode($arr);
    } 
    else 
    {
        echo "0 results";
    }
}


?>