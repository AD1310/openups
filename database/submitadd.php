<?php 
    error_reporting(0);
    require_once('sqlconnection.php');
    require_once('Ads.php');

    $success = $database->connect_db();
    
    if($success == "200")
    {
       
        //get connection variable
        $connection = $database->get_db();

        //send connection variable to posts controller
        $post = new Ads($connection);

        if(isset($_FILES))
        {
            
            $images = [];
            //assign values to Posts Controller
            $post->title = $_POST['title'];
            $post->brand = $_POST['brand'];
            $post->desc = $_POST['description'];
            $post->price = $_POST['price'];
            $post->name = $_POST['name'];
            $post->ploc = "pune";
            $post->landmark = $_POST['landmark'];
            $post->city = $_POST['city'];
            $post->state = $_POST['state'];
            $post->area = $_POST['area'];
            $post->visibility = 1;
            $post->tperiod = 30;
            $post->scid = $_POST['scat'];
            $post->uid = 1;
            // $imgFile = $_FILES['image1']['name'];
            // $ctemp = $_FILES["image1"]['tmp_name'];
            // $post->pimg ='../storage/posts/'.$imgFile;
            
            for($i=1;$i<=12;$i++)
            {
                if($_POST['image'.$i]=='no')
                {
                    continue;
                }
                else
                {
                    $imgFile = $_FILES['image'.$i]['name'];
                    $ctemp = $_FILES["image".$i]['tmp_name'];
                    
                    if(move_uploaded_file($ctemp,'../storage/posts/'.$imgFile))
                    {
                        
                        array_push($images,$imgFile);
                    }
                }
                
            }
            $post->images = $images;

            // echo $post->create();
            //Call create of PostsController to insert data to database

            if($post->create()){
                echo "200";
            }
            // if unable to create the product, tell the user
            else{
                echo "404";
            }
        }
        else
        {
            echo "error";
        }
    }
   
    
?>