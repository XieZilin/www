<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>海南环宇新能源</title>
<!--<link rel="stylesheet" type="text/css" href="css/style.css"/>-->
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>common.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>about.css"/>
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

           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
              <li><a href="<?php echo siteurl($siteid);?>" class="bi">首页<span>HOME</span></a></li>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo siteurl($siteid);?>/<?php echo diy_top_link($r[catid]);?>" class="bi"><?php echo $r['catname'];?><span><?php echo $r['catdir'];?></span></a></li>

              <?php $n++;}unset($n); ?>
           <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
         </ul>
       </div>
       <div class="clear"></div>
      </div> 
    </div>

    <div class="banner"></div>
</div>
