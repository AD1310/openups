<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenUps | Sale:Houses & Apartment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./public/css/forms/forms.css">
    <!-- <script src="./public/js/forms/forms.js"></script> -->

   <style>
    .modal-body{
    height: 800px;
    border:500px;
  }
  .cont{
    padding:5px;
    margin: 25px;
  }
   </style>
</head>

<script>


</script>
<body>
     
<nav class="navbar navbar-expand-sm  fixed-top">
  <a href="./routes.php?sell"><span class="fa fa-arrow-left navbar-brand"style="font-size:20px"></span></a>
  <a class="navbar-brand" href="./"><b style="font-size: 25px;font-family: Jokerman;color:#000033;">OpenUps</b></a>
</nav>
    <div class="container-fliud">
        <div style="text-align:center;">
          <h2 style="color:black">Post Your Ad</h2>

        </div>
        <section class="container-fliud">
          <section class="row justify-content-center">
            <section class="col-12 col-sm-2 col-md-8 col-lg-6">
              <form method="post" enctype="multipart/form-data" id="formsub">
                <div class="form-container">
                <p class="headtitle">SELECTED CATEGORY</p>
                <p class="terms" style="font-weight:bold;font-size:13px;"></p>
                <hr>
                <p class="includedet">INCLUDE SOME DETAILS</p>
                <label for="adtitle">Ad title*</label>
                <input type="text" id="adtitle" name="adtitle">

                <label for="brand">Brand*</label>
                <input type="text" id="brand" name="brand" placeholder="">

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
                      <h5 id="desc">State*</h5> 
                          <select id="state" name="state">
                              <option value="Maharashtra">Maharashtra</option>
                              <option value="Gujarat">Gujarat</option>
                              <option value="Goa">Goa</option>
                              <option value="Delhi">Delhi</option>
                          </select>
                      <h5 id="desc">City*</h5> 
                        <input type="text" id="city" name="city" placeholder="Enter City" >
                      <h5 id="desc">Area*</h5> 
                        <input type="text" id="area" name="area" placeholder="Enter Area" >     
                      <h5 id="desc">Landmark*</h5>    
                        <input type="text" id="landmark" name="city" placeholder="Enter Landmark" >              
                    </div>
                    
                    <div id="Location" class="tabcontent">
                      <h3>Maharashtra</h3>
                      <p>Patan,Satara</p> 
                    </div> 
                
                    
               </div> 
              <br><br>
               <div id="reviewdetails">
                  <h3 class="head">REVIEW YOUR DETAILS</h3>
                  <h5 id="descs">Name</h4>
                  <input type="text" id="namebox" name="nambebox" placeholder="Enter Name" >   

                  <div class="note">
                    <h4>Let's verify your account</h4>
                  We will send you a confirmation code by sms on the next step.
                  <br>
                  </div>
                  
                  <h5 id="descs">Mobile Phone Number*</h5> 
                      <span class="input-symbol-phn">
                          <input type="text" id="namebox1" onkeyup="validate()" style="width:70%;"/>
                      </span>
                      <button type="button" class="form-btn" id="sendotp"  >Send OTP</button>
                  <div class="verifydiv">
                  </div>
               </div>
                <br>
                
                <button type="button" class="form-btn" id="preview" data-toggle="modal" data-target="#exampleModalLong" onclick="previewForm()">Preview</button>
               <span class="error" style="display:none">You didn't enter any information </span>
               <span class="success" style="display:none"> data sent</span>
              </div>
              <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                      
                      <div class="cont">
                          <label for="adtitle">Ad title*</label>
                          <input type="text" id="adt" disabled="true" ><br><br>

                          <label for="br">Brand*</label>
                          <input type="text" id="br" disabled="true" ><br><br>

                          <label for="des">Description *</label>
                          <textarea id="des" disabled="true"></textarea><br><br>

                          <label for="price">SET A PRICE</label>
                          <input type="text" id="pri" disabled="true" placeholder="₹">

                          <label>STATE:</label><br>
                          <input type="text" id="sta" disabled="true">
                          
                          <label>CITY:</label>
                          <input type="text" disabled="true" id="ci">

                          <label>AREA:</label>
                          <input type="text" disabled="true" id="ar">

                          <label>LANDMARK:</label>
                          <input type="text" disabled="true" id="land">

                          <label>Name</label>
                          <input type="text" id="nameb" disabled="true"> 

                          <label>Mobile No</label><br>
                          <input type="text" id="nam" disabled="true" />
                          <!-- <input type="hidden" id="catscat" value="1-1" disabled="true" /> -->
                      </div>

                  
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Edit</button>
                      <input  value="Submit" id="submit" class="btn btn-primary" />
                    </div>
                  </div>
                </div>
              </div>
              </form>
            </section>

          </section>
        </section>
      </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js" integrity="sha512-nOQuvD9nKirvxDdvQ9OMqe2dgapbPB7vYAMrzJihw5m+aNcf0dX53m6YxM4LgA9u8e9eg9QX+/+mPu8kCNpV2A==" crossorigin="anonymous"></script>
<script src="./public/js/forms/addpost.js"></script>
<script>
   
   
 
  //  console.log("This is cat - ",cat)
        function checkUpload(id,name)
        {
          // console.log("id = "+id+"name = "+name)
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
        function previewForm() {
        var sel=document.getElementById("state");
            //console.log(sel);
        var opt=sel.options[sel.selectedIndex];
        var stat=opt.value;
        var te=document.getElementById('description').value;
        console.log(te);
        document.getElementById('adt').value=document.getElementById('adtitle').value;
        document.getElementById('br').value=document.getElementById('brand').value;
        document.getElementById('des').value=te;
        document.getElementById('pri').value=document.getElementById('price').value;
        document.getElementById('sta').value=stat;
        document.getElementById('ci').value=document.getElementById('city').value;
        document.getElementById('ar').value=document.getElementById('area').value;
        document.getElementById('land').value=document.getElementById('landmark').value;
        document.getElementById('nameb').value=document.getElementById('namebox').value;
        document.getElementById('nam').value=document.getElementById('namebox1').value;
        
      }

  $(document).ready(function(){

    //getting values from hidden field from routes
    cat = $('#catn').val()
    scat = $('#scatn').val()
    $('.terms').html(cat+' : '+scat)
      
    const queryString = window.location.search;

    const urlParams = new URLSearchParams(queryString);

    const page_type = urlParams.get('ad')

    console.log("Before changeing - ",page_type);
    
    $('#preview').prop('disabled',true)
      
          document.getElementById("List").style.display = "block";
          $("#sendotp").click(function(){
            $('#namebox1').prop('disabled',true)
  
              var mobilenumber = $("#namebox1").val();
              $.ajax({
                  url: 'http://localhost/openups/database/sendotp.php',
                  type: 'POST',
                  data: {'mobNo':mobilenumber},
                  contentType: false,
                  processData: false,
                  success: function(response){
                    response = response.trim()
                    if(response=="success")
                    {
                      
                      inputbox1 = '<h5 id="descs">Enter you OTP*</h5>'
                      inputbox2 = '<span class="input-symbol-phn">'
                      inputbox3 = '<input type="text" id="namebox2"  style="width:70%;"/></span>'
                      inputbox4 = ' <button id="verify"  type="button" class="form-btn"   >Verify OTP</button>'
                      $('#sendotp').prop('disabled',true);
                      // $("#sendotp").prop("value", "Prop Click"); 
                      $("#sendotp").html("OTP Sent");
                        $('.verifydiv').append(inputbox1+inputbox2+inputbox3+inputbox4)
                    
                    }
                    else
                    {
                        alert("Unable to verify your mobile number");
                    }
                    // console.log("Response",response)
                  }
              })
  })
  
  
  $(document).on('click','#verify',function(){
                console.log("This is click")
                var otp = $("#namebox2").val();
                $.ajax({
                    url: 'http://localhost/openups/database/verifyotp.php',
                    type: 'POST',
                    data: {'otp':otp},
  
                    success: function(response){
                      response = response.trim()
                      if(response == "success")
                      {
                          alert("OTP Verified")
                          $('#verify').hide()
                          $('#sendotp').hide()
                          $('#namebox2').prop('disabled',true)
                          $('#preview').prop('disabled',false)
  
                      }
                      else
                      {
                          alert("Not verified")
                      }
                      console.log("Response",response)
                    }
                })
          })
  
  
  
  })

  
  
  $("#submit").click(function() {

    const queryString = window.location.search;

    const urlParams = new URLSearchParams(queryString);

    const addtype = urlParams.get('ad')

    console.log("After changing  - ",addtype);
    

    console.log("submit")
  
    var fd = new FormData();
    var adtitle = $("#adtitle").val();
    var des = $("#Description").val();
    var price = $("#price").val();
    var brand = $("#brand").val();
    fd.append("title",$("#adtitle").val())
    fd.append("brand",$("#brand").val())
    fd.append("description",$("#description").val())
    fd.append("price",$("#price").val())
    fd.append("brand",$("#brand").val())
    fd.append("state",$("#state").val())
    fd.append("city",$("#city").val())
    fd.append("area",$("#area").val())
    fd.append("landmark",$("#landmark").val())
    fd.append("name",$("#namebox").val())
    

    // console.log(fd.get("title");)
    var k = 'image'; 
    var i = 0; 

  
 
    fd.append("image1",$('#image1')[0].files[0])
    fd.append("image2",$('#image2')[0].files[0]?$('#image2')[0].files[0]:"")
    fd.append("image3",$('#image3')[0].files[0]?$('#image3')[0].files[0]:"")
    fd.append("image4",$('#image4')[0].files[0]?$('#image4')[0].files[0]:"")
    fd.append("image5",$('#image5')[0].files[0]?$('#image5')[0].files[0]:"")
    fd.append("image6",$('#image6')[0].files[0]?$('#image6')[0].files[0]:"")
    fd.append("image7",$('#image7')[0].files[0]?$('#image7')[0].files[0]:"")
    fd.append("image8",$('#image8')[0].files[0]?$('#image8')[0].files[0]:"")
    fd.append("image9",$('#image9')[0].files[0]?$('#image9')[0].files[0]:"")
    fd.append("image10",$('#image10')[0].files[0]?$('#image10')[0].files[0]:"")
    fd.append("image11",$('#image11')[0].files[0]?$('#image11')[0].files[0]:"")
    fd.append("image12",$('#image12')[0].files[0]?$('#image12')[0].files[0]:"")



    
    scati = $('#scid').val()
    console.log("Hidden - ",scati)
    fd.append("scat",scati)
    fd.append("uid",1)



  
      
if(adtitle =='' || des =='' || price =='')
{
$('.success').fadeOut(200).hide();
$('.error').fadeOut(200).show();
}
else
{
  $.ajax({
      url: 'http://localhost/openups/database/submitadd.php',
      type: 'POST',
      data: fd,
      contentType: false,
      processData: false,
      success: function(response){
        response = response.trim()
        console.log("Response",response)
        if(response == "200")
        {
          alert("Advertisement Posted Successfully")
          window.setTimeout(function(){location.reload()},1000)
        }
      }
  })
}
return false;
});  
</script>
</html>