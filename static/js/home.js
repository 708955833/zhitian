
var viewSwiper = new Swiper('.kv .swiper-container', {
	autoplay : 5000,
	loop : true,
	pagination : '.swiper-pagination',
	prevButton:'.arrow-left',
	nextButton:'.arrow-right'
});


setNavition();
function setNavition(){
	

var href=location.pathname;

$(".navigation a").removeClass("active");
if(href.indexOf("zhuozhou")>-1){
	$(".navigation a").eq(0).addClass("active");
}else if(href.indexOf("tangshan")>-1){
	$(".navigation a").eq(1).addClass("active");
}

}


