<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>common.css" rel="stylesheet" type="text/css" />
<!--<script type="text/javascript" src="js/MSClass.js"></script>-->
<script src="<?php echo JS_PATH;?>jquery-1.4.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
	$('.con1').show();
	
	$('.tab2 ul.menu2 li').hover(function(){
        //获得当前被点击的元素索引值
        var Index = $(this).index();
		//给菜单添加选择样式
	    $(this).addClass('active2').siblings().removeClass('active2');
		//显示对应的div
		$('.tab2').children('div').eq(Index).show().siblings('div').hide();
   
    });
	$('.tab4 ul.menu4 li').hover(function(){
        //获得当前被点击的元素索引值
        var Index = $(this).index();
		//给菜单添加选择样式
	    $(this).addClass('active4').siblings().removeClass('active4');
		//显示对应的div
		$('.tab4').children('div').eq(Index).show().siblings('div').hide();
   
    });
	$('.tab5 ul.menu5 li').hover(function(){
			//获得当前被点击的元素索引值
			var Index = $(this).index();
			//给菜单添加选择样式
			$(this).addClass('active5').siblings().removeClass('active5');
			//显示对应的div
			$('.tab5').children('div').eq(Index).show().siblings('div').hide();
	   
	});
	
	$('.tab6 ul.menu6 li').hover(function(){
			//获得当前被点击的元素索引值
			var Index = $(this).index();
			//给菜单添加选择样式
			$(this).addClass('active6').siblings().removeClass('active6');
			//显示对应的div
			$('.tab6').children('div').eq(Index).show().siblings('div').hide();
	   
	});
});

</script>

<script src="<?php echo JS_PATH;?>ddsmoothmenu.js" type="text/javascript" ></script>
<script type="text/javascript">
ddsmoothmenu.init({

	mainmenuid: "smoothmenu1", //menu DIV id
	
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	
	classname: 'nav'

});

</script>

<script type="text/javascript" src="<?php echo JS_PATH;?>lrtk.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>about.js"></script>

<!--<script type="text/javascript" src="js/lrtk.js"></script>-->




<!--


<script src="js/jquery.slides.js" type="text/javascript"></script>
-->



</head>

<body>

<div class="header">
    <div class="header_div">
       <div class="logo"><a href="#"><img src="<?php echo IMG_PATH;?>index_03.jpg"/></a></div>
       <div class="header_right">
          <div class="search">
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
             <div class="search_div">
               <form action="<?php echo APP_PATH;?>index.php" method="get" onsubmit="return search_zhu();" target="_blank">
				<input type="hidden" name="m" value="search"/>
				<input type="hidden" name="c" value="index"/>
				<input type="hidden" name="a" value="init"/>
				<input type="hidden" name="typeid" value="1" id="typeid"/>
				<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
                <div class="search_text"><input type="text" onBlur="if(!value){value=defaultValue;}" onFocus="if(value==defaultValue){value='';}" class="text_div" value="在这里搜索..." name="q" id="q"/></div>
                <div class="button_text"><input type="submit" value="" class="button_div" /></div>
               </form>
               <div class="clear"></div>
             </div>
             <div class="tel"><a href="#"><img src="<?php echo IMG_PATH;?>index_09.jpg"/></a></div>
             <div class="clear"></div>
          </div>
          <div class="clear"></div>
          <!--搜索框结束-->
          <div class="menu_div">
              <div class="nav" id="smoothmenu1" >
               <ul class="clearfix">
               
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f1404ca8e2cf81b2c2e1f25bbee5a68f&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC&return=dataa\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$dataa = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
	    <li><a <?php if(!$catid) { ?> class="curr" <?php } ?>  href="<?php echo siteurl($siteid);?>">首页</a></li>
        <?php $n=1; if(is_array($dataa)) foreach($dataa AS $k => $v) { ?>     
	    <li> <a <?php if($catid==$v[catid] || diy_top_id($catid)==$v[catid]) { ?> class="curr" <?php } ?> href="<?php echo diy_top_link($v[catid]);?>"><?php echo $v['catname'];?></a>
		<ul class="submenu">       
     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d63b11abc40c235d0356031817f7e367&sql=select+%2A+from+allwww_category+where+parentid%3D%24k+order+by+listorder+ASC&num=6&return=zlm\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from allwww_category where parentid=$k order by listorder ASC LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$zlm = $a;unset($a);?>
      <?php $n=1;if(is_array($zlm)) foreach($zlm AS $r) { ?>
      <Li><a href="<?php echo diy_top_link($r[catid]);?>"><?php echo $r['catname'];?></a></Li>
      <?php $n++;}unset($n); ?>
     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
         </ul>
	    </li>
      <?php $n++;}unset($n); ?>  
       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <?php echo runhook('glogal_header')?>  
                 </ul>
               </div>
               <div class="clear"></div>
          </div>
          <!--菜单结束-->
          
       </div>
       <div class="clear"></div>
   </div>
</div>
