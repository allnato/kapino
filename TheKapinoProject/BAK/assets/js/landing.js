console.log("Hello World");
var x = $(window).width();
if(x<=763){
    var y = document.getElementById("main").className = "main";
}

if(x < 513){
    document.getElementById("header").style.height = "auto";
    document.getElementById("header").style.paddingBottom = "30px";
}
console.log(x);

$(window).resize(function() {
    var x = $(window).width();
    var y = document.getElementById("main");
    
    // Set Main-Raised when Screen size Changes
    if(x <= 763){
        y.className = "main";
    }
    else{
        y.className = "main main-raised";
    }
    
    // Set the Header image to auto for Mobiles
    if(x < 513){
        document.getElementById("header").style.height = "auto"
        document.getElementById("header").style.paddingBottom = "30px";
    }
    
    else{
        document.getElementById("header").style.height = "100vh";
        document.getElementById("header").style.paddingBottom = "0px";
    }
    
});

//Sign in Modal
$('#signInModal').on('hidden.bs.modal', function () {
    $(this).find("input,textarea,select").val('').end();

});


