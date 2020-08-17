   <!DOCTYPE html>
    <head>
      <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


     <!-- Bootstrap CSS -->
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
     <link rel="stylesheet" type="text/css" href="./public/css/packageoptions.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <link rel="stylesheet" href="./public/css/forms/forms.css">

    <script language="javascript" type="text/javascript">


    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {


        case "cars" :
            document.getElementById("status").options[0]=new Option("Select...","Select...");
            document.getElementById("status").options[1]=new Option("Cars","Cars");
            document.getElementById("status").options[2]=new Option("Commercial & Other Vehicles","Commercial & Other Vehicles");
            document.getElementById("status").options[3]=new Option("Spare Parts","Spare Parts");
            document.getElementById("status").options[4]=new Option("","");
            document.getElementById("status").options[4]=new Option("","");
            document.getElementById("status").options[5]=new Option("","");
            document.getElementById("status").options[6]=new Option("","");
            document.getElementById("status").options[7]=new Option("","");
            document.getElementById("status").options[8]=new Option("","");
            document.getElementById("status").options[9]=new Option("","");
            document.getElementById("status").options[10]=new Option("","");
            document.getElementById("status").options[11]=new Option("","");
            document.getElementById("status").options[12]=new Option("","");
            document.getElementById("status").options[13]=new Option("","");
            document.getElementById("status").options[14]=new Option("","");
            document.getElementById("status").options[15]=new Option("","");
            for(i=0;i<12;i++){
                                    document.getElementById("status").remove(document.getElementById("status").length-1);

            }



            break;
            case "mobiles" :
                document.getElementById("status").options[0]=new Option("Select...","Select...");
                document.getElementById("status").options[1]=new Option("Mobile Phones","Mobile Phones");
                document.getElementById("status").options[2]=new Option("Accesories","Accesories");
                document.getElementById("status").options[3]=new Option("Tablets","Tablets");
                document.getElementById("status").options[4]=new Option("","");
                document.getElementById("status").options[5]=new Option("","");
                document.getElementById("status").options[6]=new Option("","");
                document.getElementById("status").options[7]=new Option("","");
                document.getElementById("status").options[8]=new Option("","");
                document.getElementById("status").options[9]=new Option("","");
                document.getElementById("status").options[10]=new Option("","");
                document.getElementById("status").options[11]=new Option("","");
                document.getElementById("status").options[12]=new Option("","");
                document.getElementById("status").options[13]=new Option("","");
                document.getElementById("status").options[14]=new Option("","");
                document.getElementById("status").options[15]=new Option("","");
                for(i=0;i<12;i++){
                                    document.getElementById("status").remove(document.getElementById("status").length-1);

            }
                break;
                case "fashion" :
                    document.getElementById("status").options[0]=new Option("Select...","Select...");
                    document.getElementById("status").options[1]=new Option("Men","Men");
                    document.getElementById("status").options[2]=new Option("Women","Women");
                    document.getElementById("status").options[3]=new Option("Kids","Kids");
                    document.getElementById("status").options[4]=new Option("","");
                    document.getElementById("status").options[5]=new Option("","");
                    document.getElementById("status").options[6]=new Option("","");
                    document.getElementById("status").options[7]=new Option("","");
                    document.getElementById("status").options[8]=new Option("","");
                    document.getElementById("status").options[9]=new Option("","");
                    document.getElementById("status").options[10]=new Option("","");
                    document.getElementById("status").options[11]=new Option("","");
                    document.getElementById("status").options[12]=new Option("","");
                    document.getElementById("status").options[13]=new Option("","");
                    document.getElementById("status").options[14]=new Option("","");
                    document.getElementById("status").options[15]=new Option("","");
                    for(i=0;i<12;i++){
                                    document.getElementById("status").remove(document.getElementById("status").length-1);

            }
                    break;

                      case "pets" :
                          document.getElementById("status").options[0]=new Option("Select...","Select...");
                          document.getElementById("status").options[1]=new Option("Fishes & Aquarium","Fishes & Aquarium");
                          document.getElementById("status").options[2]=new Option("Pet Food & Accessories","Pet Food & Accessories");
                          document.getElementById("status").options[3]=new Option("Dogs","Dogs");
                          document.getElementById("status").options[4]=new Option("Other Pets","Other Pets");
                          document.getElementById("status").options[5]=new Option("","");
                          document.getElementById("status").options[6]=new Option("","");
                          document.getElementById("status").options[7]=new Option("","");
                          document.getElementById("status").options[8]=new Option("","");
                          document.getElementById("status").options[9]=new Option("","");
                          document.getElementById("status").options[10]=new Option("","");
                          document.getElementById("status").options[11]=new Option("","");
                          document.getElementById("status").options[12]=new Option("","");
                          document.getElementById("status").options[13]=new Option("","");
                          document.getElementById("status").options[14]=new Option("","");
                          document.getElementById("status").options[15]=new Option("","");
                          for(i=0;i<11;i++){
                                    document.getElementById("status").remove(document.getElementById("status").length-1);

            }

                          break;
                case "bikes" :
                    document.getElementById("status").options[0]=new Option("Select...","Select...");
                    document.getElementById("status").options[1]=new Option("Motorcycles","Motorcycles");
                    document.getElementById("status").options[2]=new Option("Scooters","Scooters");
                    document.getElementById("status").options[3]=new Option("Spare Parts","Spare Parts");
                    document.getElementById("status").options[4]=new Option("Bicycles","Bicycles");
                    document.getElementById("status").options[5]=new Option("","");
                    document.getElementById("status").options[6]=new Option("","");
                    document.getElementById("status").options[7]=new Option("","");
                    document.getElementById("status").options[8]=new Option("","");
                    document.getElementById("status").options[9]=new Option("","");
                    document.getElementById("status").options[10]=new Option("","");
                    document.getElementById("status").options[11]=new Option("","");
                    document.getElementById("status").options[12]=new Option("","");
                    document.getElementById("status").options[13]=new Option("","");
                    document.getElementById("status").options[14]=new Option("","");
                    document.getElementById("status").options[15]=new Option("","");
                    for(i=0;i<11;i++){
                                    document.getElementById("status").remove(document.getElementById("status").length-1);

            }
                    break;
            case "services" :
                        document.getElementById("status").options[0]=new Option("Select...","Select...");
                        document.getElementById("status").options[1]=new Option("Electronics & Computers","Electronics & Computers");
                        document.getElementById("status").options[2]=new Option("Education & Classes","Education & Classes");
                        document.getElementById("status").options[3]=new Option("Drivers & Taxi","Drivers & Taxi");
                        document.getElementById("status").options[4]=new Option("Health & Beauty","Health & Beauty");
                        document.getElementById("status").options[5]=new Option("Other Services","Other Services");
                        document.getElementById("status").options[6]=new Option("","");
                        document.getElementById("status").options[7]=new Option("","");
                        document.getElementById("status").options[8]=new Option("","");
                        document.getElementById("status").options[9]=new Option("","");
                        document.getElementById("status").options[10]=new Option("","");
                        document.getElementById("status").options[11]=new Option("","");
                        document.getElementById("status").options[12]=new Option("","");
                        document.getElementById("status").options[13]=new Option("","");
                        document.getElementById("status").options[14]=new Option("","");
                        document.getElementById("status").options[15]=new Option("","");
                        for(i=0;i<10;i++){
                                    document.getElementById("status").remove(document.getElementById("status").length-1);

            }
                        break;
            case "furniture" :
                document.getElementById("status").options[0]=new Option("Select...","Select...");
                document.getElementById("status").options[1]=new Option("Home Decor & Garden","Home Decor & Garden");
                document.getElementById("status").options[2]=new Option("Sofa & Dining","Sofa & Dining");
                document.getElementById("status").options[3]=new Option("Beds & Wardrobe","Beds & Wardrobe");
                document.getElementById("status").options[4]=new Option("Kids Furniture","Kids Furniture");
                document.getElementById("status").options[5]=new Option("Other Household","Other Household");
                document.getElementById("status").options[6]=new Option("","");
                document.getElementById("status").options[7]=new Option("","");
                document.getElementById("status").options[8]=new Option("","");
                document.getElementById("status").options[9]=new Option("","");
                document.getElementById("status").options[10]=new Option("","");
                document.getElementById("status").options[11]=new Option("","");
                document.getElementById("status").options[12]=new Option("","");
                document.getElementById("status").options[13]=new Option("","");
                document.getElementById("status").options[14]=new Option("","");
                document.getElementById("status").options[15]=new Option("","");
                for(i=0;i<10;i++){
                                    document.getElementById("status").remove(document.getElementById("status").length-1);

            }
                break;
            case "books,sports and hobbies" :
                    document.getElementById("status").options[0]=new Option("Select...","Select...");
                    document.getElementById("status").options[1]=new Option("Books","Books");
                    document.getElementById("status").options[2]=new Option("Gym & Fitness","Gym & Fitness");
                    document.getElementById("status").options[3]=new Option("Musical Instruments","Musical Instruments");
                    document.getElementById("status").options[4]=new Option("Sports Equipments","Sports Equipments");
                    document.getElementById("status").options[5]=new Option("Other Hobbies","Other Hobbies");
                    document.getElementById("status").options[6]=new Option("","");
                    document.getElementById("status").options[7]=new Option("","");
                    document.getElementById("status").options[8]=new Option("","");
                    document.getElementById("status").options[9]=new Option("","");
                    document.getElementById("status").options[10]=new Option("","");
                    document.getElementById("status").options[11]=new Option("","");
                    document.getElementById("status").options[12]=new Option("","");
                    document.getElementById("status").options[13]=new Option("","");
                    document.getElementById("status").options[14]=new Option("","");
                    document.getElementById("status").options[15]=new Option("","");
                    for(i=0;i<10;i++){
                                    document.getElementById("status").remove(document.getElementById("status").length-1);

            }
                    break;
            case "properties" :
                document.getElementById("status").options[0]=new Option("Select...","Select...");
                document.getElementById("status").options[1]=new Option("For Sale: Houses & Apartments","For Sale: Houses & Apartments");
                document.getElementById("status").options[2]=new Option("For Rent: Houses & Apartments","For Rent: Houses & Apartments");
                document.getElementById("status").options[3]=new Option("Lands & Plots","Lands & Plots");
                document.getElementById("status").options[4]=new Option("For Rent:Shop & Offices","For Rent:Shop & Offices");
                document.getElementById("status").options[5]=new Option("For Sale:Shops & Offices","For Sale:Shops & Offices");
                document.getElementById("status").options[6]=new Option("PG & Guest Houses","PG & Guest Houses");
                document.getElementById("status").options[7]=new Option("","");
                document.getElementById("status").options[8]=new Option("","");
                document.getElementById("status").options[9]=new Option("","");
                document.getElementById("status").options[10]=new Option("","");
                document.getElementById("status").options[11]=new Option("","");
                document.getElementById("status").options[12]=new Option("","");
                document.getElementById("status").options[13]=new Option("","");
                document.getElementById("status").options[14]=new Option("","");
                document.getElementById("status").options[15]=new Option("","");
                for(i=0;i<9;i++){
                                    document.getElementById("status").remove(document.getElementById("status").length-1);

            }
            break;
            case "electronics and appliances" :
                    document.getElementById("status").options[0]=new Option("Select...","Select...");
                    document.getElementById("status").options[1]=new Option("TVs,Video-Audio","TVs,Video-Audio");
                    document.getElementById("status").options[2]=new Option("Kitchen & Other Appliances","Kitchen & Other Appliances");
                    document.getElementById("status").options[3]=new Option("Computer & Laptops","Computer & Laptops");
                    document.getElementById("status").options[4]=new Option("Cameras & Lenses","Cameras & Lenses");
                    document.getElementById("status").options[5]=new Option("Games & Entertainment","Games & Entertainment");
                    document.getElementById("status").options[6]=new Option("Fridges","Fridges");
                    document.getElementById("status").options[7]=new Option("Computer Accesories","Computer Accesories");
                    document.getElementById("status").options[8]=new Option("Hard Disk,Printers & Monitors","Hard Disk,Printers & Monitors");
                    document.getElementById("status").options[9]=new Option("ACs","ACs");
                    document.getElementById("status").options[10]=new Option("Washing Machine","Washing Machine");
                    document.getElementById("status").options[10]=new Option("Operator & Technician","Operator & Technician");
                    document.getElementById("status").options[11]=new Option("","");
                    document.getElementById("status").options[12]=new Option("","");
                    document.getElementById("status").options[13]=new Option("","");
                    document.getElementById("status").options[14]=new Option("","");
                    document.getElementById("status").options[15]=new Option("","");
                    document.getElementById("status").remove(document.getElementById("status").length-1);
                    document.getElementById("status").remove(document.getElementById("status").length-1);
                    document.getElementById("status").remove(document.getElementById("status").length-1);
                    document.getElementById("status").remove(document.getElementById("status").length-1);
                    document.getElementById("status").remove(document.getElementById("status").length-1);
                    break;
            case "jobs" :
            document.getElementById("status").options[0]=new Option("Select...","Select...");
            document.getElementById("status").options[1]=new Option("Data Entry & Back office","Data Entry & Back office");
            document.getElementById("status").options[2]=new Option("Sales & Marketing","Sales & Marketing");
            document.getElementById("status").options[3]=new Option("BPO & Telecaller","BPO & Telecaller");
            document.getElementById("status").options[4]=new Option("Driver","Driver");
            document.getElementById("status").options[5]=new Option("Office Assistant","Office Assistant");
            document.getElementById("status").options[6]=new Option("Delivery & Collection","Delivery & Collection");
            document.getElementById("status").options[7]=new Option("Teacher","Teacher");
            document.getElementById("status").options[8]=new Option("Cook","Cook");
            document.getElementById("status").options[9]=new Option("Receptionist & Front office","Receptionist & Front office");
            document.getElementById("status").options[10]=new Option("Operator & Technician","Operator & Technician");
            document.getElementById("status").options[11]=new Option("IT Engineer & Developer","IT Engineer & Developer");
            document.getElementById("status").options[12]=new Option("Hotel & Travel Executive","Hotel & Travel Executive");
            document.getElementById("status").options[13]=new Option("Accountant","Accountant");
            document.getElementById("status").options[14]=new Option("Designer","Designer");
            document.getElementById("status").options[15]=new Option("Other Jobs","Other Jobs");
            break;






        }
        return true;

        $(".submit").click(function() {


var option = $(".source").val();
console.log(option);
var suboption = $("#status").val();
var location = $("#location").val();

    data = {
        "option":option,
        "suboption":suboption,
        "location":location
        
        }
        console.log(data);
if(option =='' || suboption =='' || location =='')
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

    }

    </script>
    </head>

    <body>
    <nav class="navbar navbar-expand-sm  fixed-top">
        <a href="./"><span class="fa fa-arrow-left navbar-brand"style="font-size:20px"></span></a>
        <a class="navbar-brand" href="./"><b style="font-size: 25px;font-family: Jokerman;color:#000033;">OpenUps</b></a>
    </nav> <br><br>
      <div class="container">
        <form>
      <div class="heading">
              <h5> SELECT OPTIONS TO SHOW PACKAGES</h5><br>
              </div>
        <div class="category_div" id="category_div">
        <select id="source" name="source" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" required>
        <option value="">Select...</option>
        <option value="cars">Cars</option>
        <option value="mobiles">Mobiles</option>
        <option value="fashion">Fashion</option>
        <option value="pets">Pets</option>
        <option value="bikes">Bikes</option>
        <option value="services">Services</option>
        <option value="furniture">Furniture</option>
        <option value="books,sports and hobbies">Books, Sports and Hobbies</option>
        <option value="properties">properties</option>
        <option value="electronics and appliances">Electronics and Appliances</option>
        <option value="jobs">Jobs</option>
      </select><br>
        </div>

        <div class="sub_category_div" id="sub_category_div">
        <script type="text/javascript" language="JavaScript">
        document.write('<select name="status" id="status"><option value="">Select...</option></select>')
        </script>
      </div><br>

      <div class="location" id="location">
        <i class="fa fa-map-marker icon" aria-hidden="true"></i>

        <input type="text" id="loc" name="location" placeholder="location.." required>

      </div><br>


      <div class="show" id="show">
        
        <a href="./routes.php?packages"><input type="button" value="Submit" class="btn btn-primary submit"/></a>

      </div>
      </form>
      </div>



      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>
