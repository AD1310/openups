
<!DOCTYPE html>
<html>
<head>
	<title>Form-Bicycles</title>
	

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
                <p class="terms">Bicycle</p>
                <hr>
		<p class="includedet">
			<h2>INCLUDE SOME DETAILS</h2>
			<form action="/action_page.php">
    	<div class="tab-content">
      	<label for="year" id="brands">Brands*</label>
      	<select id="State" name="sellist1">
        <option>Hercules</option>
        <option>Hero</option>
        <option>Other Brands</option>
        
        
   		 </select>

			</div>
		
	
		 <label for="usr" id="Adtitle">Ad Title:</label>
  		<input type="text" id="Adtitle"  id="user">
 		<span class="content">0/70</span>
  		<p>Mention the key feature of your item(e.g brand,model,age,type)</p>
  		
  	    
  	

   		<label for="Description">Description:</label>
  		<textarea  id="description"  id="comment"></textarea>
  		<span class="content">0/2000</span>
  		<p>Include condition,features and reason for selling
		</p>	
		

	    <div class="price ABC">
			  	<h3>SET A PRICE</h3>
		<label for="usr" id="price">Price*</label>
  		<input type="text"  placeholder="₹ |" id="user">
		</div>
	<div id="imgset1">
                  <div id="upload_button">
                    <label>
                      <input type="file" class="images" name="img1" id="img" accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                      <div class="img"><span class="fa fa-camera fileuploadicons" id="img1" ></span></div>
                    </label>
                  </div>
                  <div id="upload_button">
                    <label>
                        <input type="file" class="images" name="img2" id="img" accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                      <div class="img"><span class="fa fa-camera fileuploadicons" id="img2" ></span></div>
                    </label>
                  </div>
                  <div id="upload_button">
                    <label>
                        <input type="file" class="images" name="img3" id="img" accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                      <div class="img"><span class="fa fa-camera fileuploadicons" id="img3" ></span></div>
                    </label>
                  </div>
                  <div id="upload_button">
                    <label>
                        <input type="file" class="images" name="img4" id="img"  accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                      <div class="img"><span class="fa fa-camera fileuploadicons" id="img4" ></span></div>
                    </label>
                  </div>
              </div>
              <div id="imgset1">
                <div id="upload_button">
                  <label>
                      <input type="file"  class="images" name="img5" id="img"  accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                    <div class="img"><span class="fa fa-camera fileuploadicons" id="img5" ></span></div>
                  </label>
                </div>
                <div id="upload_button">
                  <label>
                      <input type="file" class="images" name="img6" id="img"  accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                    <div class="img"><span class="fa fa-camera fileuploadicons" id="img6" ></span></div>
                  </label>
                </div>
                <div id="upload_button">
                  <label>
                      <input type="file" class="images" name="img7" id="img"  accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                    <div class="img"><span class="fa fa-camera fileuploadicons" id="img7" ></span></div>
                  </label>
                </div>
                <div id="upload_button">
                  <label>
                      <input type="file" class="images" name="img8" id="img" accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                    <div class="img"><span class="fa fa-camera fileuploadicons"  id="img8" ></span></div>
                  </label>
                </div>
              </div>
              <div id="imgset1">
                <div id="upload_button">
                  <label>
                      <input type="file"class="images" name="img9" id="img"  accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                    <div class="img"><span class="fa fa-camera fileuploadicons" id="img9"></span></div>
                  </label>
                </div>
                <div id="upload_button">
                  <label>
                      <input type="file" class="images" name="img10" id="img" accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                    <div class="img"><span class="fa fa-camera fileuploadicons" id="img10"></span></div>
                  </label>
                </div>
                <div id="upload_button">
                  <label>
                      <input type="file" class="images" name="img11" id="img" accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                    <div class="img"><span class="fa fa-camera fileuploadicons" id="img11" ></span></div>
                  </label>
                </div>
                <div id="upload_button">
                  <label>
                      <input type="file" class="images" name="img12" id="img" accept="image/*" multiple="false" value="1" onchange="checkUpload(this.id,this.name)">
                    <div class="img"><span class="fa fa-camera fileuploadicons" id="img12" ></span></div>
                  </label>
                </div>
              </div>

		
	    <p>This field is manadatory</p>

	    <div class="Loc ABC">
			 <h3>CONFIRM YOUR LOCATION</h3>
			 <form action="/action_page.php">
		    <div class="tab-content">
		      <label for="year" id="state">State*</label>
		      <select  id="State" name="sellist1">
		        <option>1</option>
		        <option>2</option>
		        <option>3</option>
		        <option>4</option>
		        <option>5</option>
		        <option>6</option>
		        <option>4</option>
		        <option>5</option>
		        <option>6</option>
		        
		    </select>

		     <label for="year" id="city">City*</label>
		      <select  id="State" name="sellist1">
		        <option>1</option>
		        <option>2</option>
		        <option>3</option>
		        <option>4</option>
		        <option>5</option>
		        <option>6</option>
		        <option>4</option>
		        <option>5</option>
		        <option>6</option>
		        
		    </select>


 			<label for="year" id="region">Region*</label>
		      <select  id="State" name="sellist1">
		        <option>1</option>
		        <option>2</option>
		        <option>3</option>
		        <option>4</option>
		        <option>5</option>
		        <option>6</option>
		        <option>4</option>
		        <option>5</option>
		        <option>6</option>
		        
		    </select>

	    <div class="Peronal ABC">
		<h3>PERSONAL DETAILS</h3>
		<label for="usr" id="name">Name:</label>
  		<input type="text"  id="user">
  		<label for="usr" id="contact">Phone No.</label>
  		<input type="text"  id="user">

	    </div>

			  <input type="submit" value="Submit" class="form-btn"/>
			  <span class="error" style="display:none"> Please Enter Valid Data</span>
    <span class="success" style="display:none"> Registration Successfully</span>
		</form>
	</div>
	</div>
</div>
</div>
<!-- </section>
</section>
 -->


<script>
  $(".submit").click(function() {


var Brands = $("#brands").val();
var Years = $("#years").val();
var KMdriven = $("#KMdriven").val();
var Adtitle = $("#Adtitle").val();
var Description = $("#description").val();
var Price = $("#price").val();
var Image = $("#Img").val();
var State = $("#state").val();
var City = $("#city").val();
var Region= $("#region").val();
var Name= $("#name").val();
var Contact = $("#contact").val();
    data = {
    	"Brands":Brands,
    	"Years":Years,
    	"KMdriven":KMdriven,
        "Adtitle":Adtitle,
        "Description":Description,
        "Price":Price,
        "Image":Image,
        "State":State,
        "City":City,
        "Region":Region,
        "Name":Name,
        "Contact":Contact      
    	}
        console.log(data);
if( Brands=='' || Years=='' ||  KMdriven=='' || Adtitle =='' || Description =='' || Price =='' || Image=='' || State=='' || City=='' || Region=='' ||  Name==''  || Contact=='')
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



