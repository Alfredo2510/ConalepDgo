$(document).ready(main);
    var x = false;
    var z = false;
    var w = false;
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

if (screen.width>768){
    $(window).scroll(function(){
        scroll = $(window).scrollTop();
        if(scroll > 178){
            if(!z){    
                $("div#becas-primer-semestre-enlaces").css({"position":"fixed","top":"102px"});
                z=true;
            }
        }else if (scroll < 175){
            if(z){
                $("div#becas-primer-semestre-enlaces").css({"position":"absolute","top":"280px"});
                z = false;
            }
        } 
    });
}

$(function(){
    var $jittery = $('.jiterry'),
        aText    = $jittery.text().split(''),
        letters = '';
    
    for(var i = 0; i < aText.length; i++){
      letters += '<a>'+aText[i]+'</a>';
    }
    
    $jittery.empty().append(letters);
    
    $.each($('a', $jittery), function(i){
      $(this).css('animation-delay', '-'+i+'70ms');
    });
  });
}



