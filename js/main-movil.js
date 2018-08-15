$(document).ready(main);

var contador=1;

var y = window.matchMedia("(max-width: 949px)")
myFunction(y) // Call listener function at run time
y.addListener(myFunction) // Attach listener function on state changes



function main () {
    $('.i-menu').click(function(){
        if (contador==1){
            $('header .sub-wrapper').animate({
                right:'0'
            });
            contador=0;
        }else {
            contador=1;
            $('header .sub-wrapper').animate({
                right:'-100%'
            });
        }
    });
    $('.sub-menu').click(function(){
        $(this).children('.children').slideToggle();    
    });
}