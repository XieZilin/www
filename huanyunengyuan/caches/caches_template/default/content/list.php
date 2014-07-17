<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div class="content">
  <?php include template("content","left"); ?>

<div class="right_main">
  <?php include template("content","right_title"); ?>
   

   <div class="main_div">

      <div class="tabchange_div">
          <!--选项卡开始-->
           <div class="tabchange_con">
           
   
                    <div class="conent_about">
<div class="main_div_a">

<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3d7d17c3fb6882050b885c008ff78d08&action=lists&catid=%24catid&order=listorder+DESC&page=%24page&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li><a href="<?php echo $r['url'];?>" target="_blank"<?php echo title_style($r[style]);?>> ● &nbsp<?php echo $r['title'];?></a><span class="rt"><?php echo date('Y-m-d',$r[inputtime]);?></span></li>

<?php $n++;}unset($n); ?>
       
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

<?php include template("content","footer"); ?>