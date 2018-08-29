$(document).ready(main);
    var x = false;
    var scroll;

function main() {

    $(window).scroll(function(){
        scroll = $(window).scrollTop();
        if(scroll > 45){
            if(!x){    
                $("div.master").css({"position":"fixed","top":"0px","background":"#ffffffe3"});
                x=true;
            }
        }else if (scroll < 45 ){
            if(x){
                $("div.master").css({"position":"absolute","top":"45px","background":"#ffffff9c"});
                x = false;
            }
        } 
    });

    $('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});

}



