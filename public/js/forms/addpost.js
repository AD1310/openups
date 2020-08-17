jQuery(document).ready(function($) {
	var alterClass = function() {
	  var ww = document.body.clientWidth;
	  var dropChange=document.querySelectorAll('#y');
	  if (ww < 600) {
        console.log("mobile")

		    for(var i=0;i<dropChange.length;i++)
			{
				dropChange[i].className="dropdown";
			}
	  } 
	  else if (ww >= 601) 
	  {
          console.log("desktop")
		for(var i=0;i<dropChange.length;i++)
		{
			dropChange[i].className="dropdown dropright";
		}
	  };
	};

	$(window).resize(function(){
	  alterClass();
	});
	//Fire it when the page first loads:
	alterClass();
  });