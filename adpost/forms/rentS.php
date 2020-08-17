<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/forms/forms.css">
<style type="text/css">
  input[type="number"],input[type="email"]{
    width: 100%;
    padding: 12px;
    border: 1px solid black;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
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
          
            <div class="form-container" >
            <p class="headtitle">Properties/For Sale : Houses & Apartments</p>
            <label style="color:grey;font-weight:normal;">Type*</label><br>
            <label class="container2">Apartment
            <input id="type" type="radio" name="radio2" value="Apartment">
            <span class="checkmark2"></span>
            </label>
            <label class="container2">Builder Floor
            <input id="type" type="radio" name="radio2" value="Builder Floor">
            <span class="checkmark2"></span>
            </label>
            <label class="container2">Villas and Houses
            <input id="type" type="radio" name="radio2"value="Villas and Houses">
            <span class="checkmark2"></span>
            </label>
            <label class="container2">Farm Houses
            <input id="type" type="radio" name="radio2" value="Farm Houses">
            <span class="checkmark2"></span>
            </label>
            <br>

            <div class="Bedrooms">
            <label style="color:grey;font-weight:normal;">Bedrooms</label><br>
            <label class="container1">1
            <input id="bedrooms" type="radio" name="radio1" value=1>
            <span class="checkmark1"></span>
            </label>
            <label class="container1">2
            <input id="bedrooms" type="radio" name="radio1" value=2>
            <span class="checkmark1"></span>
            </label>
            <label class="container1">3
            <input id="bedrooms" type="radio" name="radio1" value=3>
            <span class="checkmark1"></span>
            </label>
            <label class="container1">4
            <input id="bedrooms" type="radio" name="radio1" value=4>
            <span class="checkmark1"></span>
            </label>
            <label class="container1">4+
            <input id="bedrooms" type="radio" name="radio1" value=5>
            <span class="checkmark1"></span>
            </label>
            </div><br>

            <div class="Bathrooms">
            <label style="color:grey;font-weight:normal;">Bathrooms</label><br>
            <label class="container3">1
            <input id="bathrooms" type="radio" name="radio3" value=1>
            <span class="checkmark3"></span>
            </label>
            <label class="container3">2
            <input id="bathrooms"  type="radio" name="radio3" value=2>
            <span class="checkmark3"></span>
            </label>
            <label class="container3">3
            <input id="bathrooms" type="radio" name="radio3" value=3>
            <span class="checkmark3"></span>
            </label>
            <label class="container3">4
            <input id="bathrooms" type="radio" name="radio3" value=4>
            <span class="checkmark3"></span>
            </label>
            <label class="container3">4+
            <input id="bathrooms" type="radio" name="radio3" value=5>
            <span class="checkmark3"></span>
            </label>
            </div><br>

               <div class="Furnishing">
               <label style="color:grey;font-weight:normal;">Furnishing</label><br>
               <label class="container4">Furnished
               <input id="furnishing" type="radio" name="radio4" value="Furnished">
               <span class="checkmark4"></span>
               </label>
               <label class="container4">Semi-Furnished
               <input id="furnishing" type="radio" name="radio4" value="Semi-Furnished">
               <span class="checkmark4"></span>
               </label>
               <label class="container4">Unfurnished
               <input id="furnishing" type="radio" name="radio4" value="Unfurnished">
               <span class="checkmark4"></span>
               </label>
             </div><br>



                <div class="Construction">
                <label style="color:grey;font-weight:normal;">Construction Status</label><br>
                <label class="container5">New Launch
                <input id="construction" type="radio" name="radio5" value="New Launch">
                <span class="checkmark5"></span>
                </label>
                <label class="container5">Ready to move
                <input id="construction" type="radio" name="radio5" value="Ready to move">
                <span class="checkmark5"></span>
                </label>
                <label class="container5">Under Construction
                <input id="construction" type="radio" name="radio5" value="Under Construction">
                <span class="checkmark5"></span>
                </label>
                </div>
                <br>

                 <div class="by">
                 <label style="color:grey;font-weight:normal;">Listed by</label><br>
                 <label class="container6">Builder
                 <input id="by" type="radio" name="radio6" value="Builder">
                 <span class="checkmark6"></span>
                 </label>
                 <label class="container6">Dealer
                 <input id="by" type="radio" name="radio6" value="Dealer">
                 <span class="checkmark6"></span>
                 </label>
                 <label class="container6">Owner
                 <input id="by" type="radio" name="radio6" value="Owner">
                 <span class="checkmark6"></span>
                 </label>
                 </div>
                 <br>

        <label>Builtup area(sq.ft)*</label><br>

        <input  type="number" min=50 id="arb" name="areab" required><br><br>

        <label>Carpet area(sq.ft)*</label><br>
        <input  type="number" min=50 id="arc" name="areac" required><br><br>

        <label>Maintenance(Monthly)</label><br>
        <input  type="number" min=0 id="maintenance" name="Maintenance" required><br><br>

        <label>Total Floors</label><br>
        <input  type="number" min=0 id="totalfloor" name="Floors" required><br><br>

        <label>Floor No</label><br>
        <input  type="numer" min=10 id="floorno" name="Floor-no" required><br><br>
  

        <label>Car Parking</label><br>
        <div class="Parking">
        <label class="container7">1
        <input id="car" type="radio" name="radio7" value=1>
        <span class="checkmark7"></span>
        </label>
        <label class="container7">2
        <input id="car" type="radio" name="radio7" value=2>
        <span class="checkmark7"></span>
        </label>
        <label class="container7">3
        <input id="car" type="radio" name="radio7" value=3>
        <span class="checkmark7"></span>
        </label>
        <label class="container7">4
        <input id="car" type="radio" name="radio7" value=4>
        <span class="checkmark7"></span>
        </label>
        <label class="container7">4+
        <input id="car" type="radio" name="radio7" value=5>
        <span class="checkmark7"></span>
        </label>
        </div><br>

        <div class="direction">
        <label>Facing:</label><br>
              <select  id="facing" name="direction" required>
                <option value="E">    </option>
                  <option value="E">  E  </option>
                  <option value="W">  W  </option>
                  <option value="N">  N  </option>
                  <option value="S">  S  </option>
                  <option value="NW"> NW   </option>
                  <option value="SE">  SE  </option>
                  <option value="SW">  SW  </option>
                  <option value="NE">  NE  </option>
              </select><br><br>
        </div>

      
        <label>Project name:</label><br>
        <input  type="text" minlength="5" id="pname" name="Projectname" placeholder="Name..." required><br><br>



        <label>Add Title:</label><br>
        <input  type="text" minlength="5" id="title" name="titl" placeholder="Write something.." required><br><br>

        
        <label>Description:</label><br>
        <input  type="text" minlength="50" id="des" name="Description" placeholder="Write something.." required><br><br><br>
        
        <label>Set Price:</label><br>
        <input  type="number" min=1000 id="pri" name="price" placeholder="Price.." required><br><br><br>
      

        <label>Upload upto 10 Photos :</label><br>
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

        <br><br>
        </span>
        

        <label><br>LOCATION :</label><br>
         <div id="List" class="tabcontent">
          <h5 id="desc">State*</h4> 
            <select id="state" name="state">
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra" selected>Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
                </select>
          </div><br>

              <label>City*</label><br>
              <input  type="text" maxlength="10" id="city" name="City" required><br><br>
        
              <label>Address*</label><br>
              <input  type="text" minlength="8" id="address" name="address" required><br><br>
            <br>


      
        <label>About You :</label><br>
      
        <label>Name:</label><br>
        <input  type="text" minlength="3" id="name" name="yName" required>
      <br>
      <label>Email id :</label><br>
      <input  type="email" id="Email" name="email" required>
      <br>
    
    <label>Phone Number :</label><br>
    <input  type="number" maxlength=10 minlength=10 id="number" name="Number" required>
  <br>
  <br>
          <input type="submit" value="Submit" id="submit" class="form-btn"/>
         <span class="error" style="display:none">You didn't enter any information </span>
         <span class="success" style="display:none"> data sent</span>
         </div> 
      </form>
  </section>

          </section>
        </section>
      </div>

    <script>

      $("#submit").click(function() {


    var propertytype = $("#type").val();
    var bedrooms = $("#bedrooms").val();
    var bathrooms = $("#bathrooms").val();
    var furnishing = $("#furnishing").val();
    var construction = $("#construction").val();
    var postby = $("#by").val();
    var cars = $("#car").val();
    var buitarea = $("#arb").val();
    var carpetarea = $("#arc").val();
    var totalfloor = $("#totalfloor").val();
    var floorno = $("#floorno").val();
    var maintenance = $("#maintenance").val();
    var facing = $("#facing").val();
    var projectname = $("#pname").val();
    var title = $("#title").val();
    var price = $("#pri").val();
    var description = $("#des").val();
    var state = $("#state").val();
    var city = $("#city").val();
    var address = $("#address").val();
    var username = $("#name").val();
    var email = $("#email").val();
    var phonenumber = $("#number").val();
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
          "propertytype": propertytype,
          "bedrooms": bedrooms,
          "bathrooms": bathrooms,
          "furnishing":furnishing,
          "construction": construction,
         "postby": postby,
         "cars": cars,
         "buitarea": builtarea,
         "carpetarea": carpetarea,
        "totalfloor": totalfloor,
          "floorno": floorno,
         "maintenance": maintenance,
         "facing": facing,
          "projectname": projectname,
         "title": title,
         "price": price,
         "description": description,
          "state": state,
           "city": city,
           "address": address,
           "username": username,
           "email": email,
           "phonenumber": phonenumber,
            "Adtitle":adtitle,
            "Description":description,
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
    if(title =='' || description =='' || price =='' || propertytype =='' || bedrooms =='' || bathrooms ==''|| furnishing==''||construction==''||postby==''||cars==''||buitarea==''||carpetarea==''||totalfloor==''||floorno==''||maintenance==''||facing==''||projectname=='' || state==''||city==''||address=='')
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
    </script>


  </body>
  </html>
