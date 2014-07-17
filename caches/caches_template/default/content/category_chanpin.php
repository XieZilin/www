<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link href="<?php echo CSS_PATH;?>ys_about.css" rel="stylesheet" type="text/css" />

<div class="banner_div"></div>

<div class="content">

<?php include template("content","left"); ?>
<div class="right_main">

   <div class="right_main_title"><span class="position_div"><a href="<?php echo siteurl($siteid);?>">首页</a>><?php echo catpos($catid);?></span><?php $k = intval(diy_top_id($catid))?>
       <?php echo $CATEGORYS[$k]['catname'];?></div>
   <div class="right_main_con">
      <div class="icon_div"><img src="<?php echo IMG_PATH;?>shuju_03.jpg" /></div>
      
      <div class="tabchange_div">
          <!--选项卡开始-->
           <div class="tabchange_con">
           
                <div class="tab6">
                    <ul class="menu6">
            <?php $i=0;?>        
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=5a6cf2c30916ceb260e983f74cea891c&sql=select+%2A+from+allwww_category+where+parentid%3D%24catid+order+by+listorder+ASC&return=child\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from allwww_category where parentid=$catid order by listorder ASC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$child = $a;unset($a);?> 
         <?php $n=1;if(is_array($child)) foreach($child AS $c) { ?>
         <?php $i++; ?>
           <li <?php if($i==1) { ?> class="active6" <?php } ?>><?php echo $c['catname'];?></li>
         <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                    </ul>
        <?php $i=0;?>        
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=36afca6f77a34716abd64e4e5d64cbc3&sql=select+%2A+from+allwww_category+where+parentid%3D%24catid+order+by+listorder+ASC&return=zlm\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from allwww_category where parentid=$catid order by listorder ASC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$zlm = $a;unset($a);?> 
        <?php $n=1;if(is_array($zlm)) foreach($zlm AS $cat) { ?>
         <?php $i++; ?>
         <?php $k=$cat['catid']?>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=4af91e3b4dc4a85e9eb04a61141f95f0&sql=SELECT+%2A+FROM+allwww_page+where+catid%3D%24k+\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM allwww_page where catid=$k  LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
      <div class="con<?php echo $i;?>">
      <?php echo $r['content'];?>
      </div>
    <?php $n++;}unset($n); ?> 
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>     
         <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
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
