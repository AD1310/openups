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
                <p class="terms">Pets / Fishes & Aquarium</p>
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
      <script src="adpost.js"></script>
      <script>
        // $('.upload-block input').change(function() {
        //   $('#upload-btn').prop(
        //       'disabled',
        //       !($('.upload-block :checked').length && $('#InputFile').val()));
        // });
        function checkUpload(id,name)
        {
          console.log("id = "+id+"name = "+name)
          if (document.getElementById(id).files.length != 0){
            document.getElementById(name).className = "fa fa-check fa-3x fileuploadicons";
            document.getElementById(name).style.color="blue"; 
          }
          else
          {
            document.getElementById(name).className = "fa fa-camera fa-2x";
            document.getElementById(name).style.color="black"; 

          }
        }
        // function upload() {
        //   if (document.getElementById("image1").files.length != 0){
        //     document.getElementById("img1").className = "fa fa-check";
        //   }
        //   if (document.getElementById("image2").files.length != 0){
        //     document.getElementById("img2").className = "fa fa-check";
        //   }
          
        //   if (document.getElementById("image3").files.length != 0){
        //     document.getElementById("img3").className = "fa fa-check";
        //   }
        //   if (document.getElementById("image4").files.length != 0){
        //     document.getElementById("img4").className = "fa fa-check";
        //   }
        //   if (document.getElementById("image5").files.length != 0){
        //     document.getElementById("img5").className = "fa fa-check";
        //   }
        //   if (document.getElementById("image6").files.length != 0){
        //     document.getElementById("img6").className = "fa fa-check";
        //   }
        //   if (document.getElementById("image7").files.length != 0){
        //     document.getElementById("img7").className = "fa fa-check";
        //   }
        //   if (document.getElementById("image8").files.length != 0){
        //     document.getElementById("img8").className = "fa fa-check";
        //   }
        //   if (document.getElementById("image9").files.length != 0){
        //     document.getElementById("img9").className = "fa fa-check";
        //   }
        //   if (document.getElementById("image10").files.length != 0){
        //     document.getElementById("img10").className = "fa fa-check";
        //   }
        //   if (document.getElementById("image11").files.length != 0){
        //     document.getElementById("img11").className = "fa fa-check";
        //   }
        //   if (document.getElementById("image12").files.length != 0){
        //     document.getElementById("img12").className = "fa fa-check";
        //   }
        //   else{
        //     document.getElementById("img1").className = "fa fa-camera";
        //     document.getElementById("img2").className = "fa fa-camera";
        //     document.getElementById("img3").className = "fa fa-camera";
        //     document.getElementById("img4").className = "fa fa-camera";
        //     document.getElementById("img5").className = "fa fa-camera";
        //     document.getElementById("img6").className = "fa fa-camera";
        //     document.getElementById("img7").className = "fa fa-camera";
        //     document.getElementById("img8").className = "fa fa-camera";
        //     document.getElementById("img9").className = "fa fa-camera";
        //     document.getElementById("img10").className = "fa fa-camera";
        //     document.getElementById("img11").className = "fa fa-camera";
        //     document.getElementById("img12").className = "fa fa-camera";
        //   }
      //}
    </script>
<script>


$(document).ready(function(){
  console.log("Hellow Eowdk")
  document.getElementById("List").style.display = "block";
})

  $(".submit").click(function() {


var adtitle = $("#adtitle").val();
var des = $("#Description").val();
var price = $("#price").val();
var image1 = $("#image1").val();
var image2 = $("#image2").val();
var image3 = $("#image3").val();
var image4 = $("#image4").val();
var image5 = $("#image5").val();
var image6 = $("#image6").val();
var image7 = $("#image7").val();
var image8 = $("#image8").val();
var image9 = $("#image9").val();
var image10 = $("#image10").val();
var image11 = $("#image11").val();
var image12 = $("#image12").val();

    data = {
        "Adtitle":adtitle,
        "Description":des,
        "Price":price,
        "Image1":image1,
        "Image2":image2,
        "Image3":image3,
        "Image4":image4,
        "Image5":image5,
        "Image6":image6,
        "Image7":image7,
        "Image8":image8,
        "Image9":image9,
        "Image10":image10,
        "Image11":image11,
        "Image12":image12
        }
        console.log(data);
if(adtitle =='' || des =='' || price =='')
{
$('.success').fadeOut(200).hide();
$('.error').fadeOut(200).show();
}
else
{
$.ajax({
type: "GET",
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
</script>     
</body>
</html>