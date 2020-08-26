<?php
error_reporting(0);
session_start();
if($_SESSION['username']){
    $user=$_SESSION['username']; 
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="OpenUps Template">
    <meta name="keywords" content="OpenUps, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>OpenUps</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <!-- Css Styles -->

    <link rel="stylesheet" href="public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/bootstrap.css" />
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    
    <link rel="stylesheet" href="public/css/card.css" type="text/css">
   
    <!-- Js Plugins -->
 <style>

     .container{
         width:350%;
     }
     
    @media screen and (min-width: 480px) {
	.carou{
		width:98% !important;
		height:30vw;
    }
    #sell{
        background-color:#000033;
        width:175%;
        height:108%;
        color:white;
        border: none;
        margin-left:-43%;
        margin-top:-3%;
        font-weight:bold;
        font-size:15px;
        font-size: 18px;
        border: 4px solid;
        border-radius:10px;
        border-color: deepskyblue yellow royalblue;
    }

  }
  @media screen and (max-width: 480px) {
	.togglecat{
        display:none;
    }
    .carou{
        margin-left:15%;
    }
    #sell{
        background-color:#000033;
        width:175%;
        color:white;
        border: none;
        margin-left:-43%;
        margin-top: -5%;
        font-weight:bold;
        font-size:15px;
       text-align:center;
       border: 4px solid;
        border-radius:18px;
        border-color: deepskyblue yellow royalblue;
    }
    .details{
        margin-top:20%;
    }
    .hero__search
    {
        margin-left:5%;
        width:100%;
    }
    .hero__search__phone
    {
        margin-left:18%;
    }
    .container{
         width:100%;
     }
  }
  .patch {
    
    text-decoration : none;
    
    position: absolute;
    
    margin-top: -16.5%;
    
    margin-left:-28.6%;
    
    z-index: 20;
    font-family: Roboto,Arial,Helvetica,sans-serif;

    
    }
    
    
    .patch .patch-background {
    
    position: absolute;
    top:0;
    right:0;
    }
    
    .patch .thepatch {
    
    position: relative;
    width: 100px;
    padding: 6px 50px 6px 15px;
    margin: 40px 50px 10px -71px;
    color: #fff;
    font-size:18px;
    font-weight:bold;
    background-color:gold;
    text-shadow: 0px 1px 2px #bbb ;
    
    }
    
    .patch .thepatch:before,
    .patch .thepatch:after {
    content: '';
    position: absolute;
    width:0;
    height:0;
    }
    
    .patch .thepatch:after {
    left: 0px;
    top: 100%;
    border-width : 5px 10px;
    border-style: solid;
    border-color: #e77548 #e77548 transparent transparent;
    }
    
    .patch.sale {
    top: 0;
    
    }
    #imgcard
    {
        width: 100%;
        height: 11vw;
    }
    @media only screen and (max-width: 600px) {
        #imgcard {
            width: 100%;
            height: 30vw;
        }
        /* #cardDiv{
            width:52%;
            height:80vw;
        } */
        .properties-listing div.properties .price {
            margin-left:-55%;
            font-size:20px;
        }
        .properties-listing div.properties .title {
                margin-left:-55%;
            }
            .properties-listing div.properties .address{
                margin-left:-12%;
                font-size:12px;
            }
            .patch{
                margin-top: -44%;
                margin-left: -89%; 
            }
            .patch .thepatch{
                margin-left:24%;
                margin-top:35%;
               font-size:10px;
               
            }
        #cardDiv {
            width: 72%;
            height: 70vw;
            margin-left: -22%;
            padding-left: 22%;
            padding-bottom: 85%;
        }
    }

 </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div> 


        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html">
                            <b style="font-size: 25px;font-family: Jokerman;color:#000033;">OpenUps</b>
                        </a>
                    </div>
                </div>
           
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all" id="categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All Categories</span>
                    </div>
                    <ul class="togglecat">
                        <li ><a href="#"><i class="fa fa-television" aria-hidden="true"></i> &nbsp; Electronics</a> 
                            <ul class="sub" >
                                
                                <li><a href="#"><i class="fa fa-laptop" aria-hidden="true"></i> &nbsp; Computers & Laptop</a></li>
                                <li><a href="#"><i class="fa fa-camera-retro" aria-hidden="true"></i> &nbsp; Cameras & Lenses</a></li>
                                <li><a href="#"><i class="fa fa-gamepad" aria-hidden="true"></i> &nbsp; Games & Entertainment</a></li>
                            </ul>
                        </li>
                        <li ><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i> &nbsp; Fashion</a>
                            <ul class="sub">
                                <li><a href="#"><i class="fa fa-male" aria-hidden="true"></i> &nbsp; Men</a></li>
                                <li><a href="#"><i class="fa fa-female" aria-hidden="true"></i> &nbsp; Women</a></li>
                            </ul>
                        </li>
                        <li ><a href="#"><i class="fa fa-building" aria-hidden="true"></i> &nbsp; Properties</a>
                            <ul class="sub">
                                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> &nbsp; Sale:Houses & Apartment</a></li>
                                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> &nbsp; Rent:Houses & Apartment</a></li>
                                <li><a href="#"><i class="fa fa-industry" aria-hidden="true"></i> &nbsp; Sale:Shops & Offices</a></li>
                                <li><a href="#"><i class="fa fa-industry" aria-hidden="true"></i> &nbsp; Rent:Shops & Offices</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="#"><i class="fa fa-car" aria-hidden="true"></i> &nbsp; Vehicles</a>
                            <ul class="sub">
                                <li><a href="#"><i class="fa fa-taxi" aria-hidden="true"></i> &nbsp; Cars</a></li>
                                <li><a href="#"><i class="fa fa-motorcycle" aria-hidden="true"></i> &nbsp; Bikes</a></li>
                                <li><a href="#"><i class="fa fa-bicycle" aria-hidden="true"></i> &nbsp; Bicycle</a></li>
                                <li><a href="#"><i class="fa fa-wrench" aria-hidden="true"></i> &nbsp; Spare Parts</a></li>
                                <li><a href="#"><i class="fa fa-truck" aria-hidden="true"></i> &nbsp; Other Vehicle</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-handshake-o" aria-hidden="true"></i> &nbsp; Services</a>
                            <ul class="sub">
                                <li><a href="#"><i class="fa fa-television" aria-hidden="true"></i> &nbsp; Electronics & Computers</a></li>
                                <li><a href="#"><i class="fa fa-university" aria-hidden="true"></i> &nbsp; Education & Classes</a></li>
                                <li><a href="#"><i class="fa fa-taxi" aria-hidden="true"></i> &nbsp; Drivers & Taxi</a></li>
                                <li><a href="#"><i class="fa fa-heartbeat" aria-hidden="true"></i> &nbsp; Health & Beauty</a></li>
                                <li><a href="#"><i class="fa fa-wrench" aria-hidden="true"></i> &nbsp; Other Services</a></li>

                            </ul>
                        </li>
                       
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                             Location
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>    
                    </div>
                    
                    <div class="hero__search__phone">
                       <div class="hero__search__phone__icon">
                        <a href="./routes.php?sell"><div type="submit" id="sell" >SELL</div></a>
                       </div>  
                        <div id="heart" class="hero__search__phone__icon">
                                <a href="#"><i class="fa fa-heart"  style="color:#000033"></i> <span>1</span></a>     
                        </div>  
                        <div id="msg" class="hero__search__phone__icon">
                            <a href="#"><i class="fa fa-envelope" style="color:#000033"></i> <span>3</span></a> 
                        </div>  
                        <div class="hero__search__phone__icon" id="profile" style="cursor:pointer;">
                            <i class="fa fa-user"></i>
                        </div> 
                        
                        <div class="details" style="display:none;">
                            <div class="profiledetails">
                                <img class="profiledetaisimg" style="width: 70px; height: 70px;" src="storage/images/usericon.jpg">  
                                <a class="profiledetailsanchor">
                                    <div class="profiledetailsdiv">
                                        <div class="hello">
                                        <span>Hello</span>,
                                <div data-aut-id="step" class="rui-1xby4 rui-3NjYq"></div>Kalpesh Waghmare </div>
                                    </div>
                                    <div class="name"></div>
                                    <span class="viewandedit"><a href="/edit"><span>View and edit profile</span></a></span>
                                </a>
                            </div>
                            
                            <div class="detailslist">
                                <a href="./routes.php?myads" class="myadsdetails">
                                    <div style="padding: 2px 16px 0 0;">
                                        <svg width="23px" height="23px" viewBox="0 0 1024 1024" >
                                            <path d="M349.46 85.333h487.619l40.635 40.635v609.524l-40.635 40.635h-487.619l-40.635-40.635v-609.524l40.635-40.635zM390.095 694.857h406.35v-528.254h-406.35v528.254zM146.286 247.873l40.635-40.635 40.635 40.635v609.524h528.254l40.635 40.635-40.635 40.635h-568.889l-40.635-40.635v-650.159zM512 329.143h162.54l40.635 40.635-40.635 40.635h-162.54l-40.635-40.635 40.635-40.635zM512 491.683h81.27l40.635 40.635-40.635 40.635h-81.27l-40.635-40.635 40.635-40.635z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span>My Ads</span>
                                </a>
                                <a class="myadsdetails" href="./routes.php?pkgoptions">
                                    <div style="padding: 2px 16px 0 0;">
                                        <svg width="23px" height="23px" viewBox="0 0 1024 1024">
                                            <path d="M426.667 42.667h170.667l42.667 42.667-42.667 42.667h256l42.667 42.667v768l-42.667 42.667h-682.667l-42.667-42.667v-768l42.667-42.667h256l-42.667-42.667 42.667-42.667zM213.333 896h597.333v-682.667h-597.333v682.667zM469.333 426.667v-85.333h256v85.333h-256zM298.667 426.667v-85.333h85.333v85.333h-85.333zM469.333 597.333v-85.333h256v85.333h-256zM298.667 597.333v-85.333h85.333v85.333h-85.333zM469.333 768v-85.333h256v85.333h-256zM298.667 768v-85.333h85.333v85.333h-85.333z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span>Buy Business Packages</span>
                                </a>
                                <a href="./routes.php?mypackages" class="myadsdetails">
                                    <div style="padding: 2px 16px 0 0;">
                                        <svg width="23px" height="23px" viewBox="0 0 1024 1024">
                                            <path d="M899.285 256l39.381 39.083v476.501l-39.381 39.083h-774.571l-39.381-39.083v-476.501l39.381-39.083h774.571zM853.461 511.573h-681.6v213.632h681.6v-213.632zM693.205 618.411h76.459l34.901 32.213-34.901 32.213h-128.896l-34.901-32.213 34.901-32.213h52.437zM853.461 341.248h-681.387v86.357l681.387-2.347v-84.053z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span>Bought Packages & Billing</span>
                                </a>
                                <a href="/settings" class="myadsdetails">
                                    <div style="padding: 2px 16px 0 0;">
                                        <svg width="23px" height="23px" viewBox="0 0 1024 1024" >
                                            <path d="M341.333 640c55.595 0 102.912 35.712 120.533 85.333v0h434.133l42.667 42.667-42.667 42.667h-434.133c-17.621 49.621-64.939 85.333-120.533 85.333s-102.912-35.712-120.533-85.333v0h-92.8l-42.667-42.667 42.667-42.667h92.8c17.621-49.621 64.939-85.333 120.533-85.333zM341.333 725.333c-23.531 0-42.667 19.136-42.667 42.667s19.136 42.667 42.667 42.667c23.531 0 42.667-19.136 42.667-42.667s-19.136-42.667-42.667-42.667zM682.667 384c55.595 0 102.912 35.712 120.533 85.333v0h92.8l42.667 42.667-42.667 42.667h-92.8c-17.621 49.621-64.939 85.333-120.533 85.333s-102.912-35.712-120.533-85.333v0h-434.133l-42.667-42.667 42.667-42.667h434.133c17.621-49.621 64.939-85.333 120.533-85.333zM682.667 469.333c-23.531 0-42.667 19.136-42.667 42.667s19.136 42.667 42.667 42.667c23.531 0 42.667-19.136 42.667-42.667s-19.136-42.667-42.667-42.667zM341.333 128c55.595 0 102.912 35.712 120.533 85.333v0h434.133l42.667 42.667-42.667 42.667h-434.133c-17.621 49.621-64.939 85.333-120.533 85.333s-102.912-35.712-120.533-85.333v0h-92.8l-42.667-42.667 42.667-42.667h92.8c17.621-49.621 64.939-85.333 120.533-85.333zM341.333 213.333c-23.531 0-42.667 19.136-42.667 42.667s19.136 42.667 42.667 42.667c23.531 0 42.667-19.136 42.667-42.667s-19.136-42.667-42.667-42.667z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span>Settings</span>
                                </a>
                               
                                <a href="./routes.php?logout" class="myadsdetails">
                                    <div style="padding: 2px 16px 0 0;">
                                        <svg width="23px" height="23px" viewBox="0 0 1024 1024">
                                            <path d="M128 85.333l-42.667 42.667v768l42.667 42.667h768l42.667-42.667v-213.333l-42.667-42.667-42.667 42.667v170.667h-682.667v-682.667h682.667v170.667l42.667 42.667 42.667-42.667v-213.333l-42.667-42.667h-768zM494.336 298.667l-183.168 183.168v60.331l183.168 183.168h60.331v-60.331l-110.336-110.336h323.669l42.667-42.667-42.667-42.667h-323.669l110.336-110.336v-60.331h-60.331z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span>Logout</span>
                                </a>
                            </div>
                    
                        </div>
                      
                    
                    </div>
                   
                </div>
                <!-- <div class="hero__item set-bg" data-setbg="storage/images/banner5.jpg">
                    <div class="hero__text">
                    </div>
                </div> -->
                
                <div id="carouselExampleIndicators" class="carousel slide carou" data-ride="carousel" >
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner ">
                      <div class="carousel-item active"  style="height:50%;">
                        <img class="d-block w-100" src="storage/images/banner6.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item"  style="height:50%;">
                        <img class="d-block w-100" src="storage/images/banner5.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item"  style="height:50%;">
                        <img class="d-block w-100" src="storage/images/banner8.jpg" alt="Third slide">
                      </div>
                   
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
    </div>
</section>

<!-- Hero Section End -->

<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 id='allb'>All Product Listing</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" id="allproducts">All Products</li>
                        <li id="bulkproducts">Bulk Products</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="properties-listing spacer" >
                
                <div class="row" style="margin-left:1%;" >
                    <div class="col-lg-12 col-sm-8">
                        <div class="row" >
                            <!-- {{-- Property 1 --}} -->
                            <a href="./routes.php?product">
                            <div id="cardDiv" class="col-lg-3 col-sm-2">
                                <div class="properties" style="border:2px solid grey;border-radius:3px;">
                                    <div class="image-holder" style="width:100%;height:100%;"><img src="storage/images/mobile.jpg"  id="imgcard" class="img-responsive" alt="properties">
                                        <a class='patch sale' href='#' style='color:black;'>
                                            <div class='thepatch'>Featured</div>
                                            <div class='patch-background'> </div>
                                        </a> 
                                        <ul class="featured__item__pic__hover favorites">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
                                            </i></a></li>
                                        </ul> 
                                        <p class="price" >₹8,520</p> 
                                        <h4><a href="property-detail.php" class="title" >Bunglow</a></h4>
                                    
                                            <p class="address">Chandannagar, Pune</p>
                                        
                                    </div>
                                </div>  
                            </div>
                            </a>
                            <!-- {{-- Property 2--}} -->
                            <a href="./routes.php?product">
                            <div id="cardDiv" class="col-lg-3 col-sm-4">
                                <div class="properties" style="border:2px solid grey;border-radius:3px;">
                                    <div class="image-holder" ><img src="storage/images/mobile.jpg " id="imgcard" class="img-responsive" alt="properties">
                                        <a class='patch sale' href='#' style='color:black;'>
                                            <div class='thepatch'>Featured</div>
                                            <div class='patch-background'> </div>
                                        </a> 
                                        <ul class="featured__item__pic__hover favorites">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
                                            </i></a></li>
                                        </ul> 
                                        <p class="price" >₹8,520</p> 
                                        <h4><a href="property-detail.php" class="title" >Bunglow</a></h4>
                                    
                                            <p class="address">Chandannagar, Pune</p>
                                        
                                    </div>
                                </div>   
                            </div>
                            </a>
                              <!-- {{-- Property 3--}} -->
                            <a href="./routes.php?product">
                              <div id="cardDiv" class="col-lg-3 col-sm-4">
                                <div class="properties" style="border:2px solid grey;border-radius:3px;">
                                    <div class="image-holder"><img src="storage/images/tv2.jpeg " id="imgcard" class="img-responsive" alt="properties">
                                        
                                        <ul class="featured__item__pic__hover favorites">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
                                            </i></a></li>
                                        </ul> 
                                        <p class="price" >₹8,520</p> 
                                        <h4><a href="property-detail.php" class="title" >Bunglow</a></h4>
                                    
                                            <p class="address">Chandannagar, Pune</p>
                                        
                                    </div>
                                </div>   
                            </div>
                            </a>
                              <!-- {{-- Property 4--}} -->
                            <a href="./routes.php?product">
                              <div id="cardDiv" class="col-lg-3 col-sm-4">
                                <div class="properties" style="border:2px solid grey;border-radius:3px;">
                                    <div class="image-holder"><img src="storage/images/bike.jpeg " id="imgcard" class="img-responsive" alt="properties">
                                        <a class='patch sale' href='#' style='color:black;'>
                                            <div class='thepatch'>Featured</div>
                                            <div class='patch-background'> </div>
                                        </a> 
                                        <ul class="featured__item__pic__hover favorites">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
                                            </i></a></li>
                                        </ul> 
                                        <p class="price" >₹8,520</p> 
                                        <h4><a href="property-detail.php" class="title" >Bunglow</a></h4>
                                    
                                            <p class="address">Chandannagar, Pune</p>
                                        
                                    </div>
                                </div>   
                            </div>
                            </a>
                            <!-- {{-- Property 4--}} -->
                            <a href="./routes.php?product">
                            <div id="cardDiv" class="col-lg-3 col-sm-4">
                                <div class="properties" style="border:2px solid grey;border-radius:3px;">
                                    <div class="image-holder"><img src="storage/images/tv2.jpeg " id="imgcard" class="img-responsive" alt="properties">
                                        <!-- {{-- <a class='patch sale' href='#' style='color:black;'>
                                            <div class='thepatch'>Featured</div>
                                            <div class='patch-background'> </div>
                                        </a>  --}} -->
                                        <ul class="featured__item__pic__hover favorites">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
                                            </i></a></li>
                                        </ul> 
                                        <p class="price" >₹8,520</p> 
                                        <h4><a href="property-detail.php" class="title" >Bunglow</a></h4>
                                    
                                            <p class="address">Chandannagar, Pune</p>
                                        
                                    </div>
                                </div>   
                            </div>
                            </a>
                            <!-- {{-- Property 4--}} -->
                            <a href="./routes.php?product">
                            <div id="cardDiv" class="col-lg-3 col-sm-4">
                                <div class="properties" style="border:2px solid grey;border-radius:3px;">
                                    <div class="image-holder"><img src="storage/images/tv2.jpeg " id="imgcard" class="img-responsive" alt="properties">
                                        <a class='patch sale' href='#' style='color:black;'>
                                            <div class='thepatch'>Featured</div>
                                            <div class='patch-background'> </div>
                                        </a> 
                                        <ul class="featured__item__pic__hover favorites">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
                                            </i></a></li>
                                        </ul> 
                                        <p class="price" >₹8,520</p> 
                                        <h4><a href="property-detail.php" class="title" >Bunglow</a></h4>
                                    
                                            <p class="address">Chandannagar, Pune</p>
                                        
                                    </div>
                                </div>   
                            </div>
                            </a>
                            <!-- {{-- Property 4--}} -->
                            <a href="./routes.php?product">
                            <div id="cardDiv" class="col-lg-3 col-sm-4">
                                <div class="properties" style="border:2px solid grey;border-radius:3px;">
                                    <div class="image-holder"><img src="storage/images/about.jpg " id="imgcard" class="img-responsive" alt="properties">
                                        <!-- {{-- <a class='patch sale' href='#' style='color:black;'>
                                            <div class='thepatch'>Featured</div>
                                            <div class='patch-background'> </div>
                                        </a>  --}} -->
                                        <ul class="featured__item__pic__hover favorites">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
                                            </i></a></li>
                                        </ul> 
                                        <p class="price" >₹8,520</p> 
                                        <h4><a href="property-detail.php" class="title" >Bunglow</a></h4>
                                    
                                            <p class="address">Chandannagar, Pune</p>
                                        
                                    </div>
                                </div>   
                            </div>
                            </a>
                            <!-- {{-- Property 4--}} -->
                            <a href="./routes.php?product">
                            <div id="cardDiv" class="col-lg-3 col-sm-4">
                                <div class="properties" style="border:2px solid grey;border-radius:3px;">
                                    <div class="image-holder" ><img src="storage/images/about.jpg" id="imgcard"  class="img-responsive" alt="properties">
                                        <a class='patch sale' href='#' style='color:black;'>
                                            <div class='thepatch'>Featured</div>
                                            <div class='patch-background'> </div>
                                        </a> 
                                        <ul class="featured__item__pic__hover favorites">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
                                            </i></a></li>
                                        </ul> 
                                        <p class="price" >₹8,520</p> 
                                        <h4><a href="property-detail.php" class="title" >Bunglow</a></h4>
                                    
                                            <p class="address">Chandannagar, Pune</p>
                                        
                                    </div>
                                </div>   
                            </div>
                            </a>
                        </div>
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- Footer Section -->
<footer id="bottom">
        <div class="topfooter">
            <div class="topfootercontent">
                <section class="sectioncontent">
                    Popular Locations<ul>
                        <li><a class="anchorcontent" >Kolkata</a></li>
                        <li><a class="anchorcontent" >Mumbai</a></li>
                        <li><a class="anchorcontent" >Chennai</a></li>
                        <li><a class="anchorcontent" >Pune</a></li>
                    </ul>
                </section>
                <section class="sectioncontent">
                    Trending Locations<ul>
                        <li><a class="anchorcontent" >Pune</a></li>
                        <li><a class="anchorcontent" >Goa</a></li>
                        <li><a class="anchorcontent" >Mumbai</a></li>
                        <li><a class="anchorcontent" >Nashik</a></li>
                    </ul>
                </section>
                <section class="sectioncontent">
                    About Us<ul>
                        <li><a class="anchorcontent" >About OLX Group</a></li>
                        <li><a class="anchorcontent" >Careers</a></li>
                        <li><a class="anchorcontent" >Contact Us</a></li>
                        <li><a class="anchorcontent" >OLXPeople</a></li>
                        <li><a class="anchorcontent" >AasaanJobs</a></li>
                    </ul>
                </section>
                <section class="sectioncontent">
                    OLX<ul>
                        <li><a class="anchorcontent" >Help</a></li>
                        <li><a class="anchorcontent" >Sitemap</a></li>
                        <li><a class="anchorcontent" >Legal &amp; Privacy </a></li>
                    </ul>
                </section>
                <section class="sectioncontent">
                    Follow us
                </section>
            
            </div>
        </div>
        <div class="bottomfooter">
            <div class="bottomfooterdiv">
                <section class="sectioncontent1">
                    <span>Free Classifieds in Pune</span>. © 2020<!-- -->OLX
                </section>
                <!-- <section class="sectioncontent1">
                    <span>Other </span> &nbsp;
                </section> -->
            </div>
        </div>
    </footer>
<!-- Footer Section End -->
<script src="public/js/jquery-3.3.1.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/jquery.nice-select.min.js"></script>
<script src="public/js/jquery-ui.min.js"></script>
<script src="public/js/jquery.slicknav.js"></script>
<script src="public/js/mixitup.min.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/main.js"></script>
<script>
$("#sell").click(function(){
    window.open("/post", "_self");

});

$('.sub').hide(); //Hide children by default
$('.togglecat').children().click(function(){
    $(this).children('.sub').slideToggle('slow');     
}).children('.sub').click(function (event) {
    event.stopPropagation();
});

$(document).mouseup(function(e){
    console.log("Hello World")
    var container = $(".details");
    $('#profile').click(function() {
        <?php
    if($user){
        ?>
        $('.details').toggle();
        <?php
    }else{
        ?>               
        window.location.href = "login/first.php";
    <?php
    }
        ?>
        
        });
    // If the target of the click isn't the container
    if(!container.is(e.target) && container.has(e.target).length === 0){
        container.hide();
    }
        
    
});

$(document).ready(function(){

    <?php
    if($user){
        ?>
        $('#heart').show(); 
        $('#msg').show(); 
        <?php
    }else{
        ?> 
        $('#heart').hide(); 
        $('#msg').hide();               
        
    <?php
    }
        ?>

    $.ajax({
        url:'./api/listads.php',
        type:'POST',
        data:
        {'category':'allproducts'},
        success:function(para)
        {
            console.log(para)
            if(para != 'nodata')
            {
                para = JSON.parse(para)
                alert(para)
            }
            else
            {
                alert(para)
            }
        }
    })
})

$('#bulkproducts').click(function(){
    $.ajax({
        url:'./api/listads.php',
        type:'POST',
        data:
        {'category':'bulkproducts'},
        success:function(para)
        {
            console.log(para)

            if(para != 'nodata')
            {
                para = JSON.parse(para)
                alert(para)
            }
            else
            {
                alert(para)
            }
        }
    })
})

$('#allproducts').click(function(){
    $.ajax({
        url:'./api/listads.php',
        type:'POST',
        data:
        {'category':'allproducts'},
        success:function(para)
        {
            console.log(para)

            if(para != 'nodata')
            {
                para = JSON.parse(para)
                alert(para)
            }
            else
            {
                alert(para)
            }
        }
    })
})

</script>
                                                                          