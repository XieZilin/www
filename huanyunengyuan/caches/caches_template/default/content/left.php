<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php $parentCatId = intval(diy_top_id($catid))?>

<div class="left_main">
      <div class="left_main_title">
        <!--
        <span>ABOUT US</span><br/>关于我们</div>
        -->
        
        <span><?php echo $CATEGORYS[$parentCatId]['catdir'];?></span><br/><?php echo $CATEGORYS[$parentCatId]['catname'];?></div>
      <div class="left_nav">
          <!--左侧列表开始-->
          <ul id="J_navlist">
            <!--
              <li><a href="javascript:void(0)">公司简介</a></li>
              <li><a href="javascript:void(0)">组织架构</a></li>
              <li><a href="javascript:void(0)">资质荣誉</a></li>
              <li><a href="javascript:void(0)">领导致辞</a></li>
              <li><a href="javascript:void(0)">发展战略</a></li>
            -->
           
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a76ac9d5fff9213aa59b04049b2af345&action=category&catid=%24parentCatId&order=listorder+ASC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parentCatId,'order'=>'listorder ASC','limit'=>'8',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                  <?php $child = $r[child]?>
                  <li>
                  <?php if($child == 0) { ?>
                   <a href="<?php echo $r['url'];?>"><h4><?php echo $r['catname'];?></h4></a>
                  <?php } else { ?> 
                    <h4><?php echo $r['catname'];?></h4>
                    <?php $chilid = intval($r[catid])?>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=217f2786ae220a6b962379b7f7bbf55d&sql=select+%2A+from+allwww_category+where+parentid%3D%24chilid+order+by+listorder+ASC&return=child\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from allwww_category where parentid=$chilid order by listorder ASC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$child = $a;unset($a);?>
                      <div class="list-item none" <?php if($CATEGORYS[$CAT[parentid]][catid]==$chilid ) { ?>style="display: block;"<?php } ?>>
                      <?php $n=1;if(is_array($child)) foreach($child AS $c) { ?>
                        <p><a <?php if($catid==$c[catid]) { ?> class="xuanz" <?php } ?> href="<?php echo $c['url'];?>" ><?php echo $c['catname'];?></a></p>
                      <?php $n++;}unset($n); ?>
                      </div>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                  <?php } ?>
                  </li>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
           </ul>
           <script type="text/javascript" language="javascript">
                navList(6);
           </script>
           <!--左侧列表结束-->
          <div class="dzqk_div">
               <div class="com_title">电子期刊&nbsp;&nbsp;&nbsp;<span>Electronic Journal</span></div>
               <div class="dzqk_con">
                  <a href="javascript:void(0)"></a>
               </div>
          </div>
      </div>
      
      <div><img src="<?php echo IMG_PATH;?>hy_a_18.jpg"/></div>
   </div>