<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/forms/forms.css">
    <script src="forms.js"></script>
   <style>
    
   </style>
</head>
<body>
     
<nav class="navbar navbar-expand-sm  fixed-top">
  <a href="#"><span class="fa fa-arrow-left navbar-brand"style="font-size:20px"></span></a>
  <a class="navbar-brand" href="#" style="font-size: 20px;">Logo</a>
</nav>
    <div class="container-fliud">
        <div style="text-align:center;">
          <h2 style="color:black">Post Your Ad</h2>

        </div>
        <section class="container-fliud">
          <section class="row justify-content-center">
            <section class="col-12 col-sm-2 col-md-8 col-lg-6">
              <form>
                <div class="form-container">
                <p class="headtitle">SELECTED CATEGORY</p>
                <p class="terms">Fashion/Clothes</p>
                <hr>
                <p class="includedet">INCLUDE SOME DETAILS</p>
                <label for="adtitle">Ad title*</label>
                <input type="text" id="adtitle" name="adtitle">
                <p class="terms">Mention the key features of your item (e.g. brand, model, age, type)</p>
                <label for="Description">Description *</label>
                <textarea id="description" name="Description" ></textarea>
                <p class="terms">Include condition, features and reason for selling</p>
                <label for="price">SET A PRICE</label>
                <p class="terms">Price*</p>
                <input type="text" id="price" name="price" placeholder="₹">
                <label for="image">UPLOAD UP TO 12 PHOTOS</label>
                <br>
              <div id="imgset1">
                  <div id="upload_button">
                    <label>
                      <input type="file" class="images" name="img1" id="image1" accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                      <div class="img"><span class="fa fa-camera fileuploadicons" id="img1" ></span></div>
                    </label>
                  </div>
                  <div id="upload_button">
                    <label>
                        <input type="file" class="images" name="img2" id="image2" accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                      <div class="img"><span class="fa fa-camera fileuploadicons" id="img2" ></span></div>
                    </label>
                  </div>
                  <div id="upload_button">
                    <label>
                        <input type="file" class="images" name="img3" id="image3" accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                      <div class="img"><span class="fa fa-camera fileuploadicons" id="img3" ></span></div>
                    </label>
                  </div>
                  <div id="upload_button">
                    <label>
                        <input type="file" class="images" name="img4" id="image4"  accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                      <div class="img"><span class="fa fa-camera fileuploadicons" id="img4" ></span></div>
                    </label>
                  </div>
              </div>
              <div id="imgset1">
                <div id="upload_button">
                  <label>
                      <input type="file"  class="images" name="img5" id="image5"  accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                    <div class="img"><span class="fa fa-camera fileuploadicons" id="img5" ></span></div>
                  </label>
                </div>
                <div id="upload_button">
                  <label>
                      <input type="file" class="images" name="img6" id="image6"  accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                    <div class="img"><span class="fa fa-camera fileuploadicons" id="img6" ></span></div>
                  </label>
                </div>
                <div id="upload_button">
                  <label>
                      <input type="file" class="images" name="img7" id="image7"  accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                    <div class="img"><span class="fa fa-camera fileuploadicons" id="img7" ></span></div>
                  </label>
                </div>
                <div id="upload_button">
                  <label>
                      <input type="file" class="images" name="img8" id="image8" accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                    <div class="img"><span class="fa fa-camera fileuploadicons"  id="img8" ></span></div>
                  </label>
                </div>
              </div>
              <div id="imgset1">
                <div id="upload_button">
                  <label>
                      <input type="file"class="images" name="img9" id="image9"  accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                    <div class="img"><span class="fa fa-camera fileuploadicons" id="img9"></span></div>
                  </label>
                </div>
                <div id="upload_button">
                  <label>
                      <input type="file" class="images" name="img10" id="image10" accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                    <div class="img"><span class="fa fa-camera fileuploadicons" id="img10"></span></div>
                  </label>
                </div>
                <div id="upload_button">
                  <label>
                      <input type="file" class="images" name="img11" id="image11" accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                    <div class="img"><span class="fa fa-camera fileuploadicons" id="img11" ></span></div>
                  </label>
                </div>
                <div id="upload_button">
                  <label>
                      <input type="file" class="images" name="img12" id="image12" accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                    <div class="img"><span class="fa fa-camera fileuploadicons" id="img12" ></span></div>
                  </label>
                </div>
              </div>
                <hr>
                <div id="confirmlocation">
                  <h3 class="head">CONFIRM YOUR LOCATION</h3>
                  <div class="tab">
                      <label class="tablinks " onclick="openCity(event, 'List')" id="defaultOpen">LIST</label>
                      <label class="tablinks" onclick="openCity(event, 'Location')">CURRENT LOCATION</label>
                    </div>
                    
                    <div id="List" class="tabcontent">
                      <h5 id="desc">State*</h4> 
                          <select id="state" name="state">
                              <option value="Maharashtra">Maharashtra</option>
                              <option value="Gujarat">Gujarat</option>
                              <option value="Goa">Goa</option>
                              <option value="Delhi">Delhi</option>
                            </select>
                      <h5 id="desc">City*</h4> 
                        <input type="text" id="city" name="city" placeholder="Enter City" >   
                      <h5 id="desc">Landmark*</h4>    
                        <input type="text" id="landmark" name="city" placeholder="Enter Landmark" >              
                    </div>
                    <div id="Location" class="tabcontent">
                      <h3>Maharashtra</h3>
                      <p>Patan,Satara</p> 
                    </div> 
                
                    
               </div> 
              
               <div id="reviewdetails">
                  <h3 class="head">REVIEW YOUR DETAILS</h3>
                  <h5 id="descs">Name</h4>
                  <input type="text" id="namebox" onkeyup="validate()"> 
                  <div class="note">
                    <h4>Let's verify your account</h4>
                  We will send you a confirmation code by sms on the next step.
                  <br>
                  </div>
                  
                  <h5 id="descs">Mobile Phone Number*</h5> 
                      <span class="input-symbol-phn">
                          <input type="text" id="namebox" onkeyup="validate()"/>
                      </span>
      
               </div>
                <br>
                <input type="submit" value="Post Now" class="form-btn" onclick="upload()">
               <span class="error" style="display:none">You didn't enter any information </span>
               <span class="success" style="display:none"> data sent</span>
              </div>
              </form>
            </section>

          </section>
        </section>
      </div>
      <script src="script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">

    $(".submit").click(function() {


    var adtitle = $("#adtitle").val();
    var description = $("#Description").val();
    var price= $("#price-input").val();
    var state = $("#state").val();
    var city = $("#city").val();
    var landmark = $("#landmark").val();
    var name = $("#name").val();
    var contact = $("#contact").val();
    var img1 = $("#real-file1").val();
    var img2 = $("#real-file2").val();
    var img3 = $("#real-file3").val();
    var img4 = $("#real-file4").val();
    data = {
            "adtitle":adtitle,
            "description":description,
            "price":price,
            "state":state,
            "city":city,
            "landmark":landmark,
            "name":name,
            "contact":contact
            }
            console.log(data);
    if(adtitle=='' || description=='' || price=='' || state=='' || city=='' || landmark=='' || name=='' || contact=='')
    {
    $('.success').fadeOut(200).hide();
    $('.error').fadeOut(200).show();
    }
    else
    {
    $.ajax({
    type: "POST",
    url: "demo.txt",
    data: data,
    success: function(){
    $('.success').fadeIn(200).show();
    $('.error').fadeOut(200).hide();
    }
    });
    }
    return false;
    });


    const filepath1 = document.getElementById('real-file1');
    const btn1 = document.getElementById('custbtn1');
    const text1 = document.getElementById('text1');

    btn1.addEventListener("click", function(){
      filepath1.click();
    });

    filepath1.addEventListener("change", function(){
      if(filepath1.value){
        text1.innerHTML = "Uploaded";
      }
      else{
        text1.innerHTML = "No File uploaded";
      }
    })


    const filepath2 = document.getElementById('real-file2');
    const btn2 = document.getElementById('custbtn2');
    const text2 = document.getElementById('text2');

    btn2.addEventListener("click", function(){
      filepath2.click();
    });

    filepath2.addEventListener("change", function(){
      if(filepath2.value){
        text2.innerHTML = "Uploaded";
      }
      else{
        text2.innerHTML = "No File uploaded";
      }
    });

    const filepath3 = document.getElementById('real-file3');
    const btn3 = document.getElementById('custbtn3');
    const text3 = document.getElementById('text3');

    btn3.addEventListener("click", function(){
      filepath3.click();
    });

    filepath3.addEventListener("change", function(){
      if(filepath3.value){
        text3.innerHTML = "Uploaded";
      }
      else{
        text3.innerHTML = "No File uploaded";
      }
    });

    const filepath4 = document.getElementById('real-file4');
    const btn4 = document.getElementById('custbtn4');
    const text4 = document.getElementById('text4');

    btn4.addEventListener("click", function(){
      filepath4.click();
    });

    filepath4.addEventListener("change", function(){
      if(filepath4.value){
        text4.innerHTML = "Uploaded";
      }
      else{
        text4.innerHTML = "No File uploaded";
      }
    });


  </script>
  
</body>
</html>