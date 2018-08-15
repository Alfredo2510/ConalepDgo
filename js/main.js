$(document).ready(function(){
    var x = false;
    var scroll;

   var y = window.matchMedia("(max-width: 949px)")
   myFunction(y) // Call listener function at run time
   y.addListener(myFunction) // Attach listener function on state changes

function myFunction() {
    if (y.matches) { // If media query matches
    $(window).scroll(function(){
        scroll = $(window).scrollTop();
        if(scroll > 44.67){
            if(!x){    
                $("h1#header-phone").css({"position":"fixed","width":"100%","z-index":"1000","top":"0px"});
                $("h1#header-phone div img").css({"margin-top":"4px"});
                $(".banner").css({"padding-top":"80px"});
                x=true;
            }
        }else if (scroll < 44.67 ){
            if(x){
                $("#header-phone").css({"position": "relative"});
                $(".banner").css({"padding-top":"0px"});
                x = false;
            }
        } 
    });
    } else {
        $(".banner").css({"padding-top":"0px"});
    }
}
});



