/*
var mySwiper = new Swiper('.swiper-container', {
			autoplay: false,
			speed:300,
			loop : true,
			//effect : 'fade',
			prevButton:'.prev',
			nextButton:'.next',
});


$(".gallery_thumbs li").click(function(){
	var index=$(this).index();
	if($(this).hasClass("active")){
		return;
	}
	$(this).addClass("active").siblings().removeClass("active")
	
	$(".container-wrapper .container-item").stop().fadeOut(300).eq(index).fadeIn(300);
});
var index=0;
$(".gallery .btn").click(function(){
	
	if($(this).hasClass("active")) return;
	
	this.len=$(".gallery_thumbs li").length;
	this.max=Math.ceil(this.len/5)-1;
	this.remainder=this.len%5;
	
	
	if(this.id=="next"){
		index++;
		$("#prev").removeClass("active");
		document.title=index;
		this.dis=189*5*index;
		if(index >= this.max){
			this.dis=189*5*index - 189*(5-this.remainder);
			$(this).addClass("active");
		}
		$(".gallery_thumbs ul").css("left",-this.dis);
		
	}else{
		$("#next").removeClass("active");
		index--;
		document.title=index;
		this.dis=-189*5*index;
		if(index== 0){
			this.dis=0;
			$(this).addClass("active");
		}
		$(".gallery_thumbs ul").css("left",this.dis);
		
		
	}
});
*/


setScrollPosi();
function setScrollPosi(){
	if($(window).scrollTop()>549){
		$(".building-recommend").css("top",$(window).scrollTop()-500);
	}else{
		$(".building-recommend").css("top",20);
	}
}
$(window).scroll(function(){
	setScrollPosi();
	
 });


var viewSwiper = new Swiper('.view .swiper-container', {
	effect : 'fade',
	autoplay : 5000,
	onSlideChangeStart: function() {
		updateNavPosition()
	}
})

$('.view .arrow-left,.preview .arrow-left').on('click', function(e) {
	e.preventDefault()
	if (viewSwiper.activeIndex == 0) {
		viewSwiper.swipeTo(viewSwiper.slides.length - 1, 1000);
		return
	}
	viewSwiper.swipePrev()
})
$('.view .arrow-right,.preview .arrow-right').on('click', function(e) {
	e.preventDefault()
	if (viewSwiper.activeIndex == viewSwiper.slides.length - 1) {
		viewSwiper.swipeTo(0, 1000);
		return
	}
	viewSwiper.swipeNext()
})

var previewSwiper = new Swiper('.preview .swiper-container', {
    spaceBetween: 30,
	visibilityFullFit: true,
	slidesPerView: 5,
	onlyExternal: true,
	onSlideClick: function() {
		viewSwiper.swipeTo(previewSwiper.clickedSlideIndex)
	}
})

function updateNavPosition() {
		$('.preview .active-nav').removeClass('active-nav')
		var activeNav = $('.preview .swiper-slide').eq(viewSwiper.activeIndex).addClass('active-nav')
		if (!activeNav.hasClass('swiper-slide-visible')) {
			if (activeNav.index() > previewSwiper.activeIndex) {
				var thumbsPerNav = Math.floor(previewSwiper.width / activeNav.width()) - 1
				previewSwiper.swipeTo(activeNav.index() - thumbsPerNav)
			} else {
				previewSwiper.swipeTo(activeNav.index())
			}
		}
	}

