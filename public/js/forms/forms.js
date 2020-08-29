function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  // document.getElementById("defaultOpen").click();
  function validate()
  {
    
    var title=document.getElementById('Adtitle').value;
    var desc=document.getElementById('Addescription').value;
    var price=document.getElementById('Adprice').value;
    var name=document.getElementById('namebox').value;
    var phn=document.getElementById('Adphn').value;
    var titleregex=/^[A-Za-z]+/;
    var descregex=/^[A-Za-z]+/;
    var priceregex=/^[1-9]\d*$/;
    var nameregex=/^[A-Za-z]+/;
    var phnregex=/^[7-9]\d{9}$/;
    var bt = document.getElementById('submit');
    
    if((titleregex.test(title))&&(descregex.test(desc))&&(nameregex.test(name))&&(phnregex.test(phn))&&(priceregex.test(price)))
    {
      bt.disabled = false;  
    }
    else
    {
      bt.disabled = true;
    }
 
  }
  $(".submit").click(function() {


    var title= $("#Adtitle").val();
    var desc= $("#Addescription").val();
    var price= $("#Adprice").val();
    var name= $("#namebox").val();
    var phn= $("#Adphn").val();
    var state=$("#state").val();
    data = {
            "title":title,
            "description":desc,
            "price":price,
            "name":name,
            "phn":phn,
            "state":state
            }
            console.log(data);
    if(name=='' || title=='' || desc=='' || phn=='')
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

    
  