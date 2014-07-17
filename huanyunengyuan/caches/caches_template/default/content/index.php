<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>海南环宇新能源</title>
<!--<link rel="stylesheet" type="text/css" href="css/style.css"/>-->
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>common.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>index.css"/>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>MSClass.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>common.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.SuperSlide.2.1.1.source.js"></script>
<script type="text/javascript">
$(function () {
	 $(".share_2").hover(function(){
			$(".ewm").stop(true,true).show(100);
			},function(){
			$(".ewm").stop(true,true).hide(100);
	   });
});
</script>
</head>

<body>
<div class="head_box">
  <div class="top_con">
    <div class="top_header">
      <div class="logo"><a href="#"><img src="<?php echo IMG_PATH;?>index_07.png"/></a></div>
      <div class="menu">
        <ul class="nav">
          <!--
           <li><a href="#" class="bi">首页<span>HOME</span></a></li>
           <li><a href="#" class="bi">关于我们<span>ABOUT</span></a></li>
           <li><a href="#" class="bi">新闻中心<span>NEWS</span></a></li>
           <li><a href="#" class="bi">产品中心<span>PRODUCTS</span></a></li>
           <li><a href="#" class="bi">企业文化<span>CULTURE</span></a></li>
           <li><a href="#" class="bi">投资者关系<span>INVESTOR</span></a></li>
           <li><a href="#" class="bi">社会责任<span>lIABILITY</span></a></li>
           <li><a href="#" class="bi">人力资源<span>CAREERS</span></a></li>
           <li><a href="#" class="bi last_li">联系我们<span>CONTACT</span></a></li>
          --> 
          
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
          <li><a href="<?php echo siteurl($siteid);?>" class="bi">首页<span>HOME</span></a></li>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <li><a href= "<?php echo siteurl($siteid);?>/<?php echo diy_top_link($r[catid]);?>" class="bi"><?php echo $r['catname'];?><span><?php echo $r['catdir'];?></span></a></li>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="slideBox">
    <div class="hd">
      <ul>
        <li><a class="banner1" href="#"></a></li>
        <li><a class="banner2" href="#"></a></li>
        <li><a class="banner3" href="#"></a></li>
        <li><a class="banner4" href="#"></a></li>
      </ul>
    </div>
    <div class="bd">
      <ul>
        <li><img src="<?php echo IMG_PATH;?>banner_01.jpg" /></li>
        <li><img src="<?php echo IMG_PATH;?>banner2_01.jpg" /></li>
        <li><img src="<?php echo IMG_PATH;?>banner_01.jpg" /></li>
        <li><img src="<?php echo IMG_PATH;?>banner2_01.jpg" /></li>
      </ul>
    </div>
  </div>
</div>
<div class="top_news">
  <div class="top_news_con">
    <div class="left_gg">
      <div id="TextDiv1" style=" text-align:left;width:760px; height:30px; line-height:30px; overflow:hidden;">
        <div id="TextContent1"> 
          
          <!--
                   <ul>
                      <li><a href="#">通知公告：欢迎海南环宇新能源网站上线！</a></li>
                      <li><a href="#">陕西省西凤酒厂生产经营性净资产为核心钒氮合金...</a></li>
                      <li><a href="#">我校召开2014稳定安全工作会议...</a></li>
                   </ul>
                    <ul>
                      <li><a href="#">我校召开2014稳定安全工作会议...</a></li>
                      <li><a href="#">营性净资产为核心，联合其他企业法人和社...</a></li>
                      <li><a href="#">通知公告：欢迎海南环宇新能源网站上线！</a></li>
                    </ul>
                    <ul>
                      <li><a href="#">陕西西凤酒集团股份有限公司是1999年10月...</a></li>
                      <li><a href="#">西省西凤酒厂营性净资产为核心，联合其...</a></li>
                      <li><a href="#">通知公告：欢迎海南环宇新能源网站上线！</a></li>
                    </ul>
                  --> 
          
          <!--循环显示 新闻中心=> 通知公告 的前6条信息 一个循环有$n个ul--> 
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=853475005bfa52f6ead487f441e1e8a5&action=lists&catid=21&num=6&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'21','order'=>'id DESC','limit'=>'6',));}?>
          <?php     
          	$i=0; 
            $size;
            $n=4;                    
            foreach($data as $x=>$y) {                         
            	$myarray[$i]=$x;
                $i++;
                $size++;
            }
            for($j=0; $j <$n;$j++) {
            ?>
          		<ul>
            		<?php
                    	for($k=0; $k<3; $k++){
                        	$p=$j+$k;
                        	if($p>=$size && $size!=0){
                                  $p=$p % $size;
                            } 
                    ?>
            <li><a href="<?php echo $data[$myarray[$p]]['url'];?>" target="_blank"><?php echo $data[$myarray[$p]]['title'];?></a></li>
            <?php
                              } 
                            ?>
          </ul>
          <?php
                      }
                    ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </div>
      </div>
      <div class="clear"></div>
      <script type="text/javascript">
                /*********文字翻屏滚动***************/
                new Marquee(["TextDiv1","TextContent1"],0,1,760,30,20,4000,2000)//文字翻屏滚动实例
              </script> 
    </div>
    
    <!--previous search
    <div class="right_serch">
      <div class="serch_l">
        <input type="text" class="search_text" value="搜索">
      </div>
      <div class="serch_r">
        <input type="button" class="search_button">
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    --> 
    
    <!--搜索开始-->
    <div class="right_serch"> 
      <script type="text/javascript">
function search_zhu(){
	var content = document.getElementById("q").value;
		if( content == '在这里搜索...' ) content = '';
		if ( content == '' ) {
		alert('请输入内容');
	     return false;
		}
 var isNull=/^[\s'　']*$/
 if(isNull.test(document.getElementById("q").value)){
  alert("请输入内容!")
  return false;
 }
}

</script>
      <div class="right_serch">
        <form action="<?php echo APP_PATH;?>index.php" method="get" onsubmit="return search_zhu();" target="_blank">
          <input type="hidden" name="m" value="search"/>
          <input type="hidden" name="c" value="index"/>
          <input type="hidden" name="a" value="init"/>
          <input type="hidden" name="typeid" value="54" id="typeid"/>
          <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
          <div class="serch_l">
            <input type="text" onBlur="if(!value){value=defaultValue;}" onFocus="if(value==defaultValue){value='';}" class="search_text" value="在这里搜索..." name="q" id="q"/>
          </div>
          <div class="serch_r">
            <input type="submit" value="" class="search_button" />
          </div>
        </form>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    
    <!--搜索结束--> 
  </div>
</div>
<div class="content">
  <div class="news_div"> 
    
    <!-- 图片轮换代码 开始 取新闻中心 企业新闻前三个 轮转-->
    <div class="banner_index">
      <div class="com_title">新闻中心&nbsp;&nbsp;&nbsp;<span>News</span></div>
      <a href="javascript:void(0);" class="btn btnPre" id="banner_index_pre"></a> <a href="javascript:void(0);" class="btn btnNext" id="banner_index_next"></a>
      <ul class="banner_wrap" id="banner_index">
      	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e8d786bd47557cab833bc9b67271f27b&action=lists&catid=19&num=3&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'19','order'=>'id DESC','limit'=>'3',));}?>
      	 <li>
          <?php $i=0; ?>
          <div class="tup_div_one">
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          	<?php if(($i==0)) { ?>
   				<p><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>"/></a></p>
           		<div class="tup_top_new">
              	<h1><span class="date_div"><?php echo date('Y/m/d',$r[inputtime]);?></span><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></h1>
              	<h2><?php echo str_cut($r[description],140);?></h2>
           	 	</div>
           	 <div class="clear"></div>
            <?php } ?>
            <?php $i++; ?>       	
          <?php $n++;}unset($n); ?>
         </div> 
         <?php $i=0; ?>
          <div class="news_list">
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          	<?php if(($i!=0)) { ?>
   				<p><span class="date_div"><?php echo date('Y/m/d',$r[inputtime]);?></span><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></p>
            <?php } ?>
            <?php $i++; ?>       	
          <?php $n++;}unset($n); ?>
         </div> 
        </li>
        
        <!--2nd-->
        <li>
          <?php $i=0; ?>
          <div class="tup_div_one">
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          	<?php if(($i==1)) { ?>
   				<p><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>"/></a></p>
           		<div class="tup_top_new">
              	<h1><span class="date_div"><?php echo date('Y/m/d',$r[inputtime]);?></span><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></h1>
              	<h2><?php echo str_cut($r[description],140);?></h2>
           	 	</div>
           	 <div class="clear"></div>
            <?php } ?>
            <?php $i++; ?>       	
          <?php $n++;}unset($n); ?>
         </div> 
         <?php $i=0; ?>
          <div class="news_list">
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          	<?php if(($i!=1)) { ?>
   				<p><span class="date_div"><?php echo date('Y/m/d',$r[inputtime]);?></span><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></p>
            <?php } ?>
            <?php $i++; ?>       	
          <?php $n++;}unset($n); ?>
         </div> 
        </li>
        
        <!--3rd-->
        <li>
          <?php $i=0; ?>
          <div class="tup_div_one">
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          	<?php if(($i==2)) { ?>
   				<p><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>"/></a></p>
           		<div class="tup_top_new">
              	<h1><span class="date_div"><?php echo date('Y/m/d',$r[inputtime]);?></span><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></h1>
              	<h2><?php echo str_cut($r[description],140);?></h2>
           	 	</div>
           	 <div class="clear"></div>
            <?php } ?>
            <?php $i++; ?>       	
          <?php $n++;}unset($n); ?>
         </div> 
         <?php $i=0; ?>
          <div class="news_list">
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          	<?php if(($i!=2)) { ?>
   				<p><span class="date_div"><?php echo date('Y/m/d',$r[inputtime]);?></span><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></p>
            <?php } ?>
            <?php $i++; ?>       	
          <?php $n++;}unset($n); ?>
         </div> 
        </li>

     	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
        
        
      </ul>
      <div class="indexBanner_num" id="index_numIco"></div>
    </div>
    <script type="text/javascript">
        var ShowPre1 = new ShowPre({box:"banner_index",Pre:"banner_index_pre",Next:"banner_index_next",numIco:"index_numIco",loop:1,auto:1});
        </script> 
    <!-- 图片轮换代码 结束 --> 
    
  </div>
  <div class="product_div">
    <div class="com_title">产品中心&nbsp;&nbsp;&nbsp;<span>Products</span></div>
    <div class="product_list"> 
      <!-- 图片轮换代码 开始 产品中心 显示产品中心前三条内容-->
      <div class="banner_index1"> <a href="javascript:void(0);" class="btn1 btnPre1" id="banner_index_pre1"></a> <a href="javascript:void(0);" class="btn1 btnNext1" id="banner_index_next1"></a>
        <ul class="banner_wrap1" id="banner_index1">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3ea5bc7abc1fb00df26d3620c715a31c&action=lists&catid=11&num=3&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'11','order'=>'id DESC','limit'=>'3',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
          <li>
            <div class="tup_div_one">
              <p><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>"/></a></p>
              <div class="tup_top_new">
                <h1><a href="<?php echo $r['url'];?> target="_blank""><?php echo $r['title'];?></a></h1>
                <h2><?php echo str_cut($r[description],120);?></h2>
              </div>
              <div class="clear"></div>
            </div>
          </li>
            <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          <!--previous
          <li>
            <div class="tup_div_one">
              <p><a href="javascript:void(0)"><img src="<?php echo IMG_PATH;?>index_41.png"/></a></p>
              <div class="tup_top_new">
                <h1><a href="javascript:void(0)">国内首套最大脱氧降凝生物质燃</a></h1>
                <h2>为减少社会对化石能源的依赖，减轻思维超前的环宇能源和国家一起行动成年的废动植物油新能源...</h2>
              </div>
              <div class="clear"></div>
            </div>
          </li>
          <li>
            <div class="tup_div_one">
              <p><a href="javascript:void(0)"><img src="<?php echo IMG_PATH;?>index_41.png"/></a></p>
              <div class="tup_top_new">
                <h1><a href="javascript:void(0)">国内首套最大脱氧降凝生物质燃</a></h1>
                <h2>为减少社会对化石能源的依赖，减轻思维超前的环宇能源和国家一起行动成年的废动植物油新能源...</h2>
              </div>
              <div class="clear"></div>
            </div>
          </li>
          <li>
            <div class="tup_div_one">
              <p><a href="javascript:void(0)"><img src="<?php echo IMG_PATH;?>index_41.png"/></a></p>
              <div class="tup_top_new">
                <h1><a href="javascript:void(0)">国内首套最大脱氧降凝生物质燃</a></h1>
                <h2>为减少社会对化石能源的依赖，减轻思维超前的环宇能源和国家一起行动成年的废动植物油新能源...</h2>
              </div>
              <div class="clear"></div>
            </div>
          </li>
        -->
        </ul>
        <!--<div class="indexBanner_num1" id="index_numIco1"></div>--> 
      </div>
      <div class="pro_more"><a href="<?php echo $CATEGORYS['28']['url'];?>" target="_blank">VIEW DETALLS</a></div>
      <script type="text/javascript">
                var ShowPre1 = new ShowPre({box:"banner_index1",Pre:"banner_index_pre1",Next:"banner_index_next1",numIco:"index_numIco1",loop:1,auto:1});
                </script> 
      <!-- 图片轮换代码 结束 --> 
    </div>
  </div>
  <div class="dzqk_div">
    <div class="com_title">电子期刊&nbsp;&nbsp;&nbsp;<span>Electronic Journal</span></div>
    <div class="dzqk_con"> <a href="javascript:void(0)"></a> </div>
  </div>
  <div class="clear"></div>
</div>
<?php include template("content","footer"); ?> 
