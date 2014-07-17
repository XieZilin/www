$(function(){
	$(".flashBanner").each(function(){
		var timer;
		$(".flashBanner .mask_div img").click(function(){
			var index = $(".flashBanner .mask_div img").index($(this));	
			changeImg(index);
		}).eq(0).click();
		$(this).find(".mask_div").animate({
			"bottom":"0"	
		},700);
		$(".flashBanner").hover(function(){
			clearInterval(timer);	
		},function(){
			timer = setInterval(function(){
				var show = $(".flashBanner .mask_div img.show").index();
				if (show >= $(".flashBanner .mask_div img").length-1)
					show = 0;
				else
					show ++;
				changeImg(show);
			},3000);
		});
		function changeImg (index)
		{
			$(".flashBanner .mask_div img").removeClass("show").eq(index).addClass("show");
			$(".flashBanner .bigImg").parents("a").attr("href",$(".flashBanner .mask_div img").eq(index).attr("link"));
			$(".flashBanner .bigImg").hide().attr("src",$(".flashBanner .mask_div img").eq(index).attr("uri")).fadeIn("slow");
		}
		timer = setInterval(function(){
			var show = $(".flashBanner .mask_div img.show").index();
			if (show >= $(".flashBanner .mask_div img").length-1)
				show = 0;
			else
				show ++;
			changeImg(show);
		},3000);
	});
});