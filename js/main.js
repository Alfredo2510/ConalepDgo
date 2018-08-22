$(document).ready(main);
    var x = false;
    var scroll;

function main() {

    $(window).scroll(function(){
        scroll = $(window).scrollTop();
        if(scroll > 45){
            if(!x){    
                $("div.master").css({"position":"fixed","top":"0px"});
                x=true;
            }
        }else if (scroll < 45 ){
            if(x){
                $("div.master").css({"position":"absolute","top":"45px"});
              
                x = false;
            }
        } 
    });
}



