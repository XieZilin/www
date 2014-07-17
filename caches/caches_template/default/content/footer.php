<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="footer">
  <div class="footer_div">
     <div class="footer_one">
        <p><a href="#">中心介绍</a>|<a href="#">媒体报道</a>|<a href="#">个人服务</a>|<a href="#">企业服务</a>|<a href="#">英才招聘</a>|<a href="#">客户留言</a>|<a href="#">联系我们</a></p>
        <p>版权所有 © 2013-2014&nbsp;&nbsp;陕西有色金属交易中心&nbsp;&nbsp;Made in Allwww.cn<a href="http:www.allwww.cn/" target="_blank"><易网></a></p>
     </div>
     <div class="footer_thr"><img src="<?php echo IMG_PATH;?>fo_03.jpg" /></div>
     <div class="footer_two">
         <p><img src="<?php echo IMG_PATH;?>fo_06.jpg" /></p>
         <div class="bshare-custom"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
     </div>
     <div class="clear"></div>
  </div>
</div>



<!-- 代码部分begin -->
<div id="rightsead">
    <div class="title_top"><img src="<?php echo IMG_PATH;?>l01.jpg" width="76" height="74" /></a></div>
    <div class="clear"></div>
	<ul>
		
		<li><a href="#"><img src="<?php echo IMG_PATH;?>ll02.jpg" width="200" height="58"  class="hides"/><img src="<?php echo IMG_PATH;?>l02.jpg" width="76" height="58" class="shows" /></a></li>
        <li><a href="#"><img src="<?php echo IMG_PATH;?>ll03.jpg" width="200" height="58" class="hides"/><img src="<?php echo IMG_PATH;?>l03.jpg" width="76" height="58" class="shows" /></a></li>
		<li>
        <a class="youhui">
        <img src="<?php echo IMG_PATH;?>l04.jpg" width="76" height="58" class="shows" /><img src="<?php echo IMG_PATH;?>erweima.jpg" width="116" height="113" class="hides" />
        </a></li>
		
		<li><a href="#"><img src="<?php echo IMG_PATH;?>ll05.jpg" width="200" height="58" class="hides"/><img src="<?php echo IMG_PATH;?>l05.jpg" width="76" height="58" class="shows" /></a></li>
		<li><a id="top_btn"><img src="<?php echo IMG_PATH;?>ll06.jpg" width="200" height="58" class="hides"/><img src="<?php echo IMG_PATH;?>l08.jpg" width="76" height="58" class="shows" /></a></li>
	</ul>
</div>
<!-- 代码部分end -->

<script>
$(function(){
	$("#rightsead a").hover(function(){
		if($(this).prop("className")=="youhui"){
			$(this).children("img.hides").show();
		}else{
			$(this).children("img.hides").show();
			$(this).children("img.shows").hide();
			$(this).children("img.hides").animate({marginRight:'0px'},'slow'); 
		}
	},function(){ 
		if($(this).prop("className")=="youhui"){
			$(this).children("img.hides").hide('slow');
		}else{
			$(this).children("img.hides").animate({marginRight:'-212px'},'slow',function(){$(this).hide();$(this).next("img.shows").show();});
		}
	});

	$("#top_btn").click(function(){if(scroll=="off") return;$("html,body").animate({scrollTop: 0}, 600);});

});
</script>