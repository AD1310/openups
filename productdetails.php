<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single product display</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./public/css/forms/forms.css">

    <style>
        .imagecontainer{
            border:1px solid black;
            margin-top: 30px;
            margin-right:200px ;
            height:300px;
            width: 60%;
        }
        .infocontainer{
            border:1px solid black;
            margin-top: 30px;
            margin-right:200px ;
            height:1000px;
            width: 60%;
        }
        .infosubtext{
            color: grey;
            padding-left: 10px;
        }
        .info{
            padding-left: 50px;
        }
        .item{
            height: 90%;
            width: 80%;
            align-items: center;
            padding-left: 30px;
        }
        .Info{
            text-align: left;
            padding: 10px;
            margin: 10px;
        }
        ul{
            list-style: none;
            
        }
        .pricecontainer{
            border: 1px solid black;
            height:300px;
            float: right;
            width: 30%;
        }
        .card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
  height: auto;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.leftcolumn {   
  float: left;
  width: 65%;
  
}
.rightcolumn {
  float: left;
  width: 35%;
  background-color:white;
  padding-left: 20px;
}
pre{
    background-color: white;
    border: none;
}
.price{
    font-size: 30px;
    font-weight: bold;
}
.ic{
    font-size: 20px;
    padding-left: 40%;
    padding-right: 10px;

}
.ice{
    font-size: 20px;
    padding-left: 10px;

}
.explanation {
    margin-left: 5px;
    vertical-align: middle;
}
 .btn{
      background-color:#226fff;
      padding: 10px 16px;
      font-size: 18px;
      border-radius: 0px;
      margin: 10px;
  
  }
  @media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
    </style>

</head>
<body>
<nav class="navbar navbar-expand-sm  fixed-top">
    <a href="./"><span class="fa fa-arrow-left navbar-brand"style="font-size:20px"></span></a>
    <a class="navbar-brand" href="./"><b style="font-size: 25px;font-family: Jokerman;color:#000033;">OpenUps</b></a>
</nav>
    <div class="container">
        <div class="row">
            <div class="leftcolumn">
              <div class="card">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                  
                    <!-- Wrapper for slides -->
                    <center style="padding-top: 10px;padding-bottom: 40px;">
                        <div class="carousel-inner">
                            <div class="item active">
                              <img src="https://apollo-singapore.akamaized.net/v1/files/2k8dxekv0f9m2-IN/image;s=1080x1080" alt="Los Angeles">
                            </div>
                        
                            <div class="item">
                              <img src="https://apollo-singapore.akamaized.net/v1/files/2k8dxekv0f9m2-IN/image;s=1080x1080" alt="Chicago">
                            </div>
                        
                            <div class="item">
                              <img src="https://apollo-singapore.akamaized.net/v1/files/2k8dxekv0f9m2-IN/image;s=1080x1080" alt="New York">
                            </div>
                          </div>
                  
                    </center>
                                  
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
               
              </div>
              <div class="card">
                <h3 style="padding-left: 10px;">Details</h3>
                <pre>YEAR                               2019           KM driven                       86 KM</pre>
                <hr style="width: 95%;">
                <div class="#">
                        <h2>Description</h2>
                    <p>At this price<br>We will give you a jeep with these features.</p>
                    <span>Jeep Description</span>
                    <ul>
                        <li>* Paper work: -</li>
                        <li>* Smart Card Online Registration</li>
                        <li>* N.o.c online with number 28</li>
                        <li>* Court sales affidavit with form number 29 and 30</li>
                        <li>* police clearance</li>
                        <li>* Value Voucher (Invoice)</li>
                        <li>* 2033 is passing.</li>
                        <li>* Pay once</li>
                        <li># features Details</li>
                        <li>* Mahindra or Toyota's engine will fitted on choice with a splendid position</li>
                        <li>* 5 + 1 top speed new model transmission</li>
                        <li>* Mm550 chassis with new RC book</li>
                        <li>* 15 km mileage</li>
                        <li>* Branded battery</li>
                        <li>* Benz Power Steering</li>
                        <li>* 16 gauge body shell</li>
                        <li>* Manual bucket seats</li>
                        <li>* Front disc brake with back drum brake</li>
                        <li>* Hand brake</li>
                        <li>* Powerful Break Booster</li>
                        <li>* Power clutch</li>
                        <li> * Fully greased arch leads to spring</li>
                        <li>* Hydraulic shock absorbers</li>
                        <li>*power steering</li>
                        <li>* Power brakes</li>
                        <li>* Wiper motor with blade</li>
                        <li>* Wide bolero defanshel</li>
                        <li>* Steering wheel lock feature</li>
                        <li>* New aluminum radiator</li>
                        <li>* All new lights and wires</li>
                        <li> * If you want to take a jeep with these features
                            So we will take 50000 Advance and 50000 paint work time. And the rest will be taken when the jeep is ready.
                            And after the order, prepare it in 40 days.</li>
                        <li>* If you want more with extended and more features</li>
                        <li> AC</li>
                        <li>4X4</li>
                        <li>Automatic transmission e.t.c</li>
                        
                        <li>Or any additional features
                            Then we provide jeep on your choice
                            Then the price will increase further.</li>
                        <li>* If you want to send online advance then i am sending you account details
                            And</li>
                       <li> * If you want to give advance with hand to hand then I will send you my shop address. You come and place order.</li>
                
                
                    </ul>
                    
                
                </div>
                
              </div>
            </div>
            <div class="rightcolumn">
                <div class="card">
                    <div class="price">₹ 3,84,000<span class="fa fa-share-alt ic"></span><span class="fa fa-heart ice"></span></div>
                    <h5>Jain motors</h5>
                    <span style="margin-top:10px;font-size: 10px;padding-right:20px ;">Malacca, Andaman & Nicobar Islands,India &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FEB 04
                    </span>
                      
                </div>
                <div class="card">
                  <h3>Seller description</h3>
                  <div id="container" style="white-space:nowrap">

                    <div id="image" style="display:inline;">
                        <img style="height: 50px;
                        width: 50px;" src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male2-512.png"/>
                    </div>
                
                    <div id="texts" style="display:inline; white-space:nowrap;padding-left: 20px;"> 
                        Seller's Name <i class="fa fa-arrow-right" style="padding-left: 100px; font-size: 30px;" aria-hidden="true"></i>
                
                  </div>
                </div>
                <button class="btn btn-primary btn-lg">CHAT WITH SELLER</button>
              </div>
              <div class="card">
                  <h2>Posted in</h2>
                  <small>Malacca, Andaman & Nicobar Islands, India</small>
                  <div id="googleMap" style="width:100%;height:400px;"></div>

              </div>
             </div>
    </div>
    <script>
      function myMap() {
      var mapProp= {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:5,
      };
      var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
      }
      </script>
      
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
      
</body>
</html>