var x = $(window).width();
            
            
if(x<=830){
    var y = document.getElementById("main").className = "main";
}

$(window).resize(function() {
    var x = $(window).width();
    var y = document.getElementById("main");

    // Set Main-Raised when Screen size Changes
    if(x <= 830){
        y.className = "main";
    }
    else{
        y.className = "main main-raised";
    }

});