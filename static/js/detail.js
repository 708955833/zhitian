$(function(){
	


var w=$(document).width();



if(w < 768){
	var viewSwiper = new Swiper('.view-container .swiper-container', {
		autoplay : 3000,
		loop:true,
		effect : 'fade',
		onSlideChangeStart: function() {
			updateNavPosition()
		}
	});
	
}else{
	
	
  var viewSwiper = new Swiper('.view-container .swiper-container', {
	onSlideChangeStart: function() {
		updateNavPosition()
	}
	});
	
	$(".preview .swiper-slide a").append("<p></p>");
	
	
	$('.view-container .arrow-left,.preview .arrow-left').on('click', function(e) {
	e.preventDefault();
	if($(this).hasClass("prv-default")){
		return;
	}
	
	$(".view-container .arrow-right,.preview .arrow-right").removeClass("next-default");
	if (viewSwiper.activeIndex == 1) {
		$(".view-container .arrow-left,.preview .arrow-left").addClass("prv-default");
	}
	if (viewSwiper.activeIndex == 0) {
		//viewSwiper.swipeTo(viewSwiper.slides.length - 1, 1000);
		return
	}
	viewSwiper.swipePrev();
})
$('.view-container .arrow-right,.preview .arrow-right').on('click', function(e) {
	e.preventDefault();
	if($(this).hasClass("next-default")){
		return;
	}
	
	$(".view-container .arrow-left,.preview .arrow-left").removeClass("prv-default");
	
	if (viewSwiper.activeIndex == viewSwiper.slides.length-2) {
		$(".view-container .arrow-right,.preview .arrow-right").addClass("next-default");
	}
	if (viewSwiper.activeIndex == viewSwiper.slides.length-1) {
		return;
	}
	viewSwiper.swipeNext()
})
	
	
	
}




var previewSwiper = new Swiper('.preview .swiper-container', {
    spaceBetween: 30,
	effect : 'fade',
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

	
	




if(w < 768){
		var moreSwiper = new Swiper('.more-building .swiper-container', {
		autoplay : 3000,
		loop:true,
		spaceBetween: 0,
		slidesPerView: 1
		
		
	});


	var typeSwiper = new Swiper('.housetype-mod  .swiper-container', {
		autoplay : 3000,
		loop:true,
		spaceBetween: 0,
		slidesPerView: 1
	});
	
}else{
	var moreSwiper = new Swiper('.more-building .swiper-container', {
		autoplay : 0,
		spaceBetween: 30,
		slidesPerView: 5
	});

/*
	var typeSwiper = new Swiper('.housetype-mod  .swiper-container', {
		autoplay : 0,
		spaceBetween: 30,
		slidesPerView: 4,
		prevButton:'.arrow-left',
		nextButton:'.arrow-right'
	})
*/
	$(".housetype-mod .swiper-slide a").click(function(){
		$(".mask").fadeIn(300);
		
		$(".pop-con img").attr("src",$(this).attr("data-src"));
		$(".pop").fadeIn(600);
	});
	
	
	$(".view-container .swiper-slide a img").click(function(){
		$(".mask").fadeIn(300);
		$(".pop2 .pop-con img").attr("src",$(this).attr("src"));
		$(".pop2").fadeIn(600);
	});
	
	
	$(".close").click(function(){
		$(".mask").fadeOut(300);
		$(".pop,.pop2").fadeOut(600);
	});

	
	
     var clickFlag=false;
	$(".more-mod span").click(function(){
		if(!clickFlag){
			$(".more-mod span").html("收起 >");
			$(".hx-list-mod .hx-list").css("height","auto");
			clickFlag=true;
		}else{
			$(".more-mod span").html("更多 >")
			$(".hx-list-mod .hx-list").css("height","264px");
			clickFlag=false;
		}
		
		
	});
	
	
	
	}


});

 function setPoint(obj){
		point = obj.point.replace("(","");
		point = point.replace(")","");
		var point_arr = point.split(",");// 在每个逗号(,)处进行分解
		var sContent = "<a href='###' style='font-size:14px; color:#000; line-height:150%;' target='_blank'>"+obj.name+"</a><br><span style='font-size:12px; color:#999; line-height:150%;'>"+obj.address+"</span>";
		var map = new BMap.Map("map_canvas");            // 创建Map实例
		map.enableScrollWheelZoom();                            //启用滚轮放大缩小
		map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
		var point = new BMap.Point(point_arr[1],point_arr[0]);
		var marker = new BMap.Marker(point);
		var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
		map.centerAndZoom(point, 15);
		map.addOverlay(marker);         
		marker.openInfoWindow(infoWindow);
}	

	

