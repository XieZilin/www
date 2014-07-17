<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<?php include template("content","header"); ?>
<link href="<?php echo CSS_PATH;?>ys_about.css" rel="stylesheet" type="text/css" />


<div class="banner_div"></div>

<div class="content">

<?php include template("content","left"); ?>

<div class="right_main">

   <div class="right_main_title"><span class="position_div"><a href="<?php echo siteurl($siteid);?>">首页</a>><?php echo catpos($catid);?></span><?php $k = intval(diy_top_id($catid))?>
       <?php echo $CATEGORYS[$k]['catname'];?></div>
   <div class="right_main_con">

      <div class="tabchange_div">
          <!--选项卡开始-->
           <div class="tabchange_con">
           
   
                    <div class="conent_about">
<div class="list_news">

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a9b8317248eb7b6289773e6d0dc98abe&action=lists&catid=%24catid&num=1&order=listorder+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        <ul>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
	<li><a href="<?php echo $r['url'];?>" target="_blank"<?php echo title_style($r[style]);?>><?php echo $r['title'];?></a><span class="rt"><?php echo date('Y-m-d',$r[inputtime]);?></span></li>

<?php $n++;}unset($n); ?>
        </ul>
        <div id="pages" class="text-c"><?php echo $pages;?></div>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

</div>


                    </div>

          </div>
          <!--选项卡结束-->
       
     </div>
      
      
   
   </div>


</div>    
<div class="clear"></div>

</div>
<!--内容结束-->

<?php include template("content","footer"); ?>

</body>
</html>
