var x = $(window).width();
            
            
if(x<=880){
    var y = document.getElementById("main").className = "main";
    $('#navPills').removeClass('nav-stacked');
}

$(window).resize(function() {
    var x = $(window).width();
    var y = document.getElementById("main");

    // Set Main-Raised when Screen size Changes
    if(x <= 880){
        y.className = "main";
        $('#navPills').removeClass('nav-stacked');
    }
    else{
        y.className = "main main-raised";
        $('#navPills').addClass('nav-stacked');
    }

});