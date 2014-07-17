<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="left_main">
       <div class="gonggao_title">
       <?php $k = intval(diy_top_id($catid))?>
       <?php echo $CATEGORYS[$k]['catname'];?>
       </div>
       <div class="aboutnav_zw">
       
          <div class="operate">
            <ul id="J_navlist">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=6ab2b584d7b09b8e226c594b8655df90&sql=select+%2A+from+allwww_category+where+parentid%3D%24k+order+by+listorder+ASC&return=zlm\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from allwww_category where parentid=$k order by listorder ASC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$zlm = $a;unset($a);?>
<?php $n=1;if(is_array($zlm)) foreach($zlm AS $r) { ?>
               <li >
               <?php $child=$r[child]?>
                <?php if($child==0 || $k==9) { ?>
                <a href="<?php echo $r['url'];?>"><h4><?php echo $r['catname'];?></h4></a>
                <?php } else { ?>
                 <h4><?php echo $r['catname'];?></h4>
                               
          <?php $chilid = intval($r[catid])?>
 
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=217f2786ae220a6b962379b7f7bbf55d&sql=select+%2A+from+allwww_category+where+parentid%3D%24chilid+order+by+listorder+ASC&return=child\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from allwww_category where parentid=$chilid order by listorder ASC LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$child = $a;unset($a);?>
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
                navList(12);
            </script>
          </div>
       </div>
       <div class="gonggao_div">
       <div class="gonggao_title">交易所公告</div>
       <div class="news_list">
        <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3800367774e84cc0108faf75096e48bb&action=lists&catid=22&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'22','order'=>'listorder DESC','limit'=>'6',));}?>
 <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
 <li> <a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></li>
 <?php $n++;}unset($n); ?>
 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
      </div>
    </div>
    <!--公告结束-->
</div>