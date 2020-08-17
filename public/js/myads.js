function myFunction(a) {

    document.getElementById('myDropdown'+a).classList.toggle("show");
    document.getElementById('fasterbuttonid'+a).style.visibility = 'hidden';
    


}
function remove(a) {

    
    document.getElementById('myDropdown'+a).classList.remove('show');
    document.getElementById('fasterbuttonid'+a).style.visibility = 'visible';
    var quantity = 'block'+a;
  
    
}

$(document).mouseup(function(e){
    var container = $(".myDropdown1");
    $('#dotslink').click(function() {
        $('#myDropdown1').toggle();
      });
    // If the target of the click isn't the container
    if(!container.is(e.target) && container.has(e.target).length === 0){
        container.hide();
    }
  
});
// $("#dotslink").click(function(){
//     // console.log("This is click")

// })
