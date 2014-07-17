<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>

<?php include template("content","header"); ?>
<script type="text/javascript" src="<?php echo JS_PATH;?>MSClass.js"></script>

<link href="<?php echo CSS_PATH;?>ys_index.css" rel="stylesheet" type="text/css" />

<div class="banner">
<!-- indexCon start -->
<div class="indexCon fl">
    <div class="flashBanner">
        <a href="#"><img class="bigImg"/></a>
          <div class="mask"></div>
          <div class="mask_div">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=196c0633507f22d15762eaaf6f17519b&sql=SELECT+setting+FROM+allwww_poster+WHERE+spaceid+%3D+11+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM allwww_poster WHERE spaceid = 11 AND type='images' AND disabled=0 ORDER BY listorder DESC LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<?php
eval("\$narry =$r[setting];");
?>
 <img src="<?php echo $narry['1']['imageurl'];?>" uri="<?php echo $narry['1']['imageurl'];?>" link="<?php echo $narry['1']['linkurl'];?>" width="91" height="48"/>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>         
        </div>
    </div>
</div>
<!-- indexCon end -->
  
</div>
<div class="content">

     <div class="newslist_div">
          <!--选项卡开始-->
           <div class="newslist_con">
                <div class="tab4">
                    <ul class="menu4">
                        <li class="active4"><?php echo $CATEGORYS['19']['catname'];?></li>
                        <li><?php echo $CATEGORYS['20']['catname'];?></li>
                        <li><?php echo $CATEGORYS['21']['catname'];?></li>
                    </ul>
                    <div class="con1">
                    
                       <div class="flashbox">
                        <div class="focusNew_out flashlist">
              <?php $i=0;?>          
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=985136eae543576c43b78df944999f66&action=position&posid=18&catid=19&thumb=1&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','catid'=>'19','thumb'=>'1','order'=>'listorder DESC','limit'=>'4',));}?>
        	 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
             <?php $i++; ?>
               <div <?php if($i==1) { ?> style="display:block;" <?php } ?> class="f_out">
                                <span class="f_out_txt"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36,'');?></a></span>
                                <a href="<?php echo $r['url'];?>"><img width="382" height="233" alt="<?php echo $r['title'];?>" src="<?php echo thumb($r[thumb],382,233);?>" /></a>
               </div>
               <?php $n++;}unset($n); ?>  
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
                        </div>
                        <div class="ceng_div"><img src="<?php echo IMG_PATH;?>index_82.png"></div>
                        <div class="f_tabs">
              <?php $i=0;?>          
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=985136eae543576c43b78df944999f66&action=position&posid=18&catid=19&thumb=1&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','catid'=>'19','thumb'=>'1','order'=>'listorder DESC','limit'=>'4',));}?>
        	 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
             <?php $i++; ?>
              <span <?php if($i==1) { ?> class="hover" <?php } ?>><?php echo $n;?></span>  
               <?php $n++;}unset($n); ?>  
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>         
                        </div>
                      </div><!--flashbox end-->
                      
                      <div class="news_list">
                        <div class="more" style="margin-top:-67px;"><a href="<?php echo $CATEGORYS['19']['url'];?>">更多+</a></div>
                        <ul>                  
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4847b5bb8d8d0575616268de083aa246&action=position&posid=19&catid=19&order=listorder+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','catid'=>'19','order'=>'listorder DESC','limit'=>'7',));}?>
        	 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
               <li><span class="date_div">[<?php echo date('Y-m-d',$r[inputtime]);?>]</span><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],60,'');?></a></li>
               <?php $n++;}unset($n); ?>  
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
                       </ul>
                      </div>
                        
                    </div>
                    <div class="con2">
                    
                       <div class="flashbox1">
                        <div class="focusNew_out1 flashlist1">
               <?php $i=0;?>          
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cfd0b3d6b772c32ed5b9ee87b8271b3a&action=position&posid=18&catid=20&thumb=1&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','catid'=>'20','thumb'=>'1','order'=>'listorder DESC','limit'=>'4',));}?>
        	 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
             <?php $i++; ?>
               <div <?php if($i==1) { ?> style="display:block;" <?php } ?> class="f_out">
                                <span class="f_out_txt"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36,'');?></a></span>
                                <a href="<?php echo $r['url'];?>"><img width="382" height="233" alt="<?php echo $r['title'];?>" src="<?php echo thumb($r[thumb],382,233);?>" /></a>
               </div>
               <?php $n++;}unset($n); ?>  
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
                        </div>
                        <div class="ceng_div1"><img src="<?php echo IMG_PATH;?>index_82.png"></div>
                        <div class="f_tabs1">
              <?php $i=0;?>          
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cfd0b3d6b772c32ed5b9ee87b8271b3a&action=position&posid=18&catid=20&thumb=1&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','catid'=>'20','thumb'=>'1','order'=>'listorder DESC','limit'=>'4',));}?>
        	 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
             <?php $i++; ?>
              <span <?php if($i==1) { ?> class="hover" <?php } ?>><?php echo $n;?></span>  
               <?php $n++;}unset($n); ?>  
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
                        </div>
                      </div><!--flashbox end-->
                      
                      <div class="news_list">
                      <div class="more" style="margin-top:-67px;"><a href="<?php echo $CATEGORYS['20']['url'];?>">更多+</a></div>
                        <ul>
                         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7708088963fc4449aaf0bfd12418e341&action=position&posid=19&catid=20&order=listorder+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','catid'=>'20','order'=>'listorder DESC','limit'=>'7',));}?>
        	             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         <li><span class="date_div">[<?php echo date('Y-m-d',$r[inputtime]);?>]</span><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],60,'');?></a></li>
                         <?php $n++;}unset($n); ?>  
                         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
                        </ul>
                      </div>
                        
                    </div>
                    <div class="con3">
                    
                       <div class="flashbox2">
                        <div class="focusNew_out2 flashlist2">
             <?php $i=0;?>          
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d7394d232ccfe5102bd2d99f5e04be58&action=position&posid=18&catid=21&thumb=1&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','catid'=>'21','thumb'=>'1','order'=>'listorder DESC','limit'=>'4',));}?>
        	 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
             <?php $i++; ?>
               <div <?php if($i==1) { ?> style="display:block;" <?php } ?> class="f_out">
                                <span class="f_out_txt"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36,'');?></a></span>
                                <a href="<?php echo $r['url'];?>"><img width="382" height="233" alt="<?php echo $r['title'];?>" src="<?php echo thumb($r[thumb],382,233);?>" /></a>
               </div>
               <?php $n++;}unset($n); ?>  
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
                        </div>
                        <div class="ceng_div2"><img src="<?php echo IMG_PATH;?>index_82.png"></div>
                        <div class="f_tabs2">
              <?php $i=0;?>          
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d7394d232ccfe5102bd2d99f5e04be58&action=position&posid=18&catid=21&thumb=1&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','catid'=>'21','thumb'=>'1','order'=>'listorder DESC','limit'=>'4',));}?>
        	 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
             <?php $i++; ?>
              <span <?php if($i==1) { ?> class="hover" <?php } ?>><?php echo $n;?></span>  
               <?php $n++;}unset($n); ?>  
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
                        </div>
                      </div><!--flashbox end-->
                      
                      <div class="news_list">
                      <div class="more" style="margin-top:-67px;"><a href="<?php echo $CATEGORYS['21']['url'];?>">更多+</a></div>
                        <ul>
                         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=05b601d9478293a369611fdbe48fc569&action=position&posid=19&catid=21&order=listorder+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','catid'=>'21','order'=>'listorder DESC','limit'=>'7',));}?>
        	             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         <li><span class="date_div">[<?php echo date('Y-m-d',$r[inputtime]);?>]</span><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],60,'');?></a></li>
                         <?php $n++;}unset($n); ?>  
                         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
                        </ul>
                      </div>
                        
                    </div>
              </div>
          </div>
          <!--选项卡结束-->
       
     </div>

     <!--新闻结束-->

     <div class="gonggao_div">
       <div class="gonggao_title"><span class="more"><a href="<?php echo $CATEGORYS['22']['url'];?>">更多+</a></span><?php echo $CATEGORYS['22']['catname'];?>&nbsp;&nbsp;<span>Announcement</span></div>
       <div class="news_list">
        <ul>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fd049c1db48b9ce957943621978401b5&action=lists&catid=22&order=listorder+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'22','order'=>'listorder DESC','limit'=>'7',));}?>
        <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
         <li> <a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
      </div>
    </div>
    <!--公告结束-->
     
    <div class="left_div"> 
    
    <div class="cpzx_div">
        <div class="cpzx_title"><span class="more"><a href="<?php echo $CATEGORYS['9']['url'];?>">更多+</a></span><?php echo $CATEGORYS['9']['catname'];?>&nbsp;&nbsp;<span>Listed Products</span></div>
        <div class="product_div">
            <div class="tab2">

                <ul class="menu2">
                   <li class="active2"><span class="number">1</span><span class="name_l"><a href="<?php echo $CATEGORYS['23']['url'];?>" style="display:block;">银</a></span></li>
                   <li><span class="number">2</span><span class="name_l"><a href="<?php echo $CATEGORYS['24']['url'];?>" style="display:block;">钼</a></span></li>
                   <li><span class="number">3</span><span class="name_l"><a href="<?php echo $CATEGORYS['25']['url'];?>" style="display:block;">铜</a></span></li>
                   <li><span class="number">4</span><span class="name_l"><a href="<?php echo $CATEGORYS['26']['url'];?>" style="display:block;">镍</a></span></li>
                   <li><span class="number">5</span><span class="name_l"><a href="<?php echo $CATEGORYS['27']['url'];?>" style="display:block;">钒</a></span></li>
                   <li><span class="number">6</span><span class="name_l"><a href="<?php echo $CATEGORYS['28']['url'];?>" style="display:block;">钛</a></span></li>
                </ul>
                <div class="con1">
                <div class="shuju"><img src="<?php echo IMG_PATH;?>shuju_03.jpg"></div>
                </div>
                <div class="con2">
                <div class="shuju"><img src="<?php echo IMG_PATH;?>shuju_03.jpg"></div>
                </div>
                <div class="con3">
                <div class="shuju"><img src="<?php echo IMG_PATH;?>shuju_03.jpg"></div>
                </div>
                <div class="con4">
                <div class="shuju"><img src="<?php echo IMG_PATH;?>shuju_03.jpg"></div>
                </div>
                <div class="con5">
                <div class="shuju"><img src="<?php echo IMG_PATH;?>shuju_03.jpg"></div>
                </div>
                <div class="con6">
                <div class="shuju"><img src="<?php echo IMG_PATH;?>shuju_03.jpg"></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="serviece_content">
    <div class="serviece_div">
       <div class="serviece_title"><span class="more"><a href="<?php echo $CATEGORYS['11']['url'];?>">更多+</a></span><?php echo $CATEGORYS['11']['catname'];?>&nbsp;&nbsp;<span>Serviece</span></div>
       <div class="serviece_con">
          <div class="tup_div_one">
               <p><a href="<?php echo $CATEGORYS['65']['url'];?>"><img src="<?php echo $CATEGORYS['65']['image'];?>"/></a></p>
               <div class="tup_top_new">
                 <h1><a href="<?php echo $CATEGORYS['65']['url'];?>"><?php echo $CATEGORYS['65']['catname'];?></a></h1>
                 <h2><a href="<?php echo $CATEGORYS['65']['url'];?>"><?php echo $CATEGORYS['65']['description'];?></a></h2>
               </div>
               <div class="clear"></div>
            </div>
            <div class="tup_div_one">
               <p><a href="<?php echo $CATEGORYS['64']['url'];?>"><img src="<?php echo $CATEGORYS['64']['image'];?>"/></a></p>
               <div class="tup_top_new">
                 <h1><a href="<?php echo $CATEGORYS['64']['url'];?>"><?php echo $CATEGORYS['64']['catname'];?></a></h1>
                 <h2><a href="<?php echo $CATEGORYS['64']['url'];?>"><?php echo $CATEGORYS['64']['description'];?></a></h2>
               </div>
               <div class="clear"></div>
            </div>
       </div>
    </div>
    <div class="serviece_div serviece_line">
       <div class="serviece_title"><span class="more"><a href="<?php echo $CATEGORYS['12']['url'];?>">更多+</a></span><?php echo $CATEGORYS['12']['catname'];?>&nbsp;&nbsp;<span>Serviece</span></div>
       <div class="serviece_con">
          <div class="tup_div_one">
               <p><a href="<?php echo $CATEGORYS['72']['url'];?>"><img src="<?php echo $CATEGORYS['72']['image'];?>"/></a></p>
               <div class="tup_top_new">
                 <h1><a href="<?php echo $CATEGORYS['72']['url'];?>"><?php echo $CATEGORYS['72']['catname'];?></a></h1>
                 <h2><a href="<?php echo $CATEGORYS['72']['url'];?>"><?php echo $CATEGORYS['72']['description'];?></a></h2>
               </div>
               <div class="clear"></div>
            </div>
            <div class="tup_div_one">
               <p><a href="<?php echo $CATEGORYS['83']['url'];?>"><img src="<?php echo $CATEGORYS['83']['image'];?>"/></a></p>
               <div class="tup_top_new">
                 <h1><a href="<?php echo $CATEGORYS['83']['url'];?>"><?php echo $CATEGORYS['83']['catname'];?></a></h1>
                 <h2><a href="<?php echo $CATEGORYS['83']['url'];?>"><?php echo $CATEGORYS['83']['description'];?></a></h2>
               </div>
               <div class="clear"></div>
            </div>
       </div>
    </div>
    <div class="clear"></div>
    
    </div> 
    <div class="clear"></div>
    
    </div> 
    
    
     
    <div class="dthq_div">
       <div class="dthq_title"><span class="more"><a href="#">更多+</a></span>动态行情&nbsp;&nbsp;<span>Dynamic Quotes</span></div>
       <div class="dthq_list">
         <div class="dthq_list_title">
           <span class="spmc">商品名称</span>
           <span class="cjj">成交价</span>
           <span class="zdj">最低价</span>
           <span class="zgj">最高价</span>
           <span class="dj">涨跌</span>
         </div>
         <div id="CSSBox">
                <ul id="CSSContent">
                    <li><span class="spmc_div">现货白银</span><span class="cjj_div">362</span><span class="zdj_div">-23</span><span class="zgj_div">750</span><span class="dj_div">265</span></li>
                    <li><span class="spmc_div">现货黄金</span><span class="cjj_div">362</span><span class="zdj_div">-23</span><span class="zgj_div">750</span><span class="dj_div">265</span></li>
                    <li><span class="spmc_div">现货铝铜</span><span class="cjj_div">362</span><span class="zdj_div">-23</span><span class="zgj_div">750</span><span class="dj_div">265</span></li>
                    <li><span class="spmc_div">现货白银</span><span class="cjj_div">362</span><span class="zdj_div">-23</span><span class="zgj_div">750</span><span class="dj_div">265</span></li>
                    <li><span class="spmc_div">现货黄金</span><span class="cjj_div">362</span><span class="zdj_div">-23</span><span class="zgj_div">750</span><span class="dj_div">265</span></li>
                    <li><span class="spmc_div">现货铝铜</span><span class="cjj_div">362</span><span class="zdj_div">-23</span><span class="zgj_div">750</span><span class="dj_div">265</span></li>
                    <li><span class="spmc_div">现货白银</span><span class="cjj_div">362</span><span class="zdj_div">-23</span><span class="zgj_div">750</span><span class="dj_div">265</span></li>
                    <li><span class="spmc_div">现货黄金</span><span class="cjj_div">362</span><span class="zdj_div">-23</span><span class="zgj_div">750</span><span class="dj_div">265</span></li>
                    <li><span class="spmc_div">现货铝铜</span><span class="cjj_div">362</span><span class="zdj_div">-23</span><span class="zgj_div">750</span><span class="dj_div">265</span></li>
                    <li><span class="spmc_div">现货白银</span><span class="cjj_div">362</span><span class="zdj_div">-23</span><span class="zgj_div">750</span><span class="dj_div">265</span></li>
                    <li><span class="spmc_div">现货黄金</span><span class="cjj_div">362</span><span class="zdj_div">-23</span><span class="zgj_div">750</span><span class="dj_div">265</span></li>
                    <li><span class="spmc_div">现货铝铜</span><span class="cjj_div">362</span><span class="zdj_div">-23</span><span class="zgj_div">750</span><span class="dj_div">265</span></li>
                    <li><span class="spmc_div">现货白银</span><span class="cjj_div">362</span><span class="zdj_div">-23</span><span class="zgj_div">750</span><span class="dj_div">265</span></li>
                </ul>
         </div>
         <div class="clear"></div>
       </div>
       <div class="btn_div">
           <div class="btn_1"><a href="<?php echo $CATEGORYS['66']['url'];?>"><img src="<?php echo $CATEGORYS['66']['image'];?>"></a></div>
           <div class="btn_2"><a href="<?php echo $CATEGORYS['67']['url'];?>"><img src="<?php echo $CATEGORYS['67']['image'];?>"></a></div>
           <div class="clear"></div>
           <div class="btn_3"><a href="<?php echo $CATEGORYS['75']['url'];?>"><img src="<?php echo $CATEGORYS['75']['image'];?>"></a></div>
       </div>
    </div>
    <div class="clear"></div>
    <!--动态行情结束-->


     <div class="links_div">
          <!--选项卡开始-->
           <div class="links_con">
                <div class="title">友情链接&nbsp;&nbsp;<span>Links</span></div>
                <div class="tab5">
                    <ul class="menu5">
                        <li class="active5">交收库</li>
                        <li>保险公司</li>
                        <li>合作银行</li>
                        <li>质检机构</li>
                    </ul>
                    <div class="con1">
                        <div class="tup_div_one">
                           <p>
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=6084f1a353e45e18af1b636ee800c7cf&action=type_list&siteid=%24siteid&typeid=53&order=listorder+DESC&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'typeid'=>'53','order'=>'listorder DESC','limit'=>'20',));}?>
                            <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
                            <a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
 
                           </p>
                           <div class="logo_list">
                              <ul>
                              <?php $i=0;?>
                              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=00e94c5e70d4776a9859a2ed2588d8c3&action=type_list&siteid=%24siteid&linktype=1&typeid=53&order=listorder+DESC&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'1','typeid'=>'53','order'=>'listorder DESC','limit'=>'20',));}?>
                               <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
                               <?php $i++; ?>
                               <li <?php if($i==1) { ?> class="frist_li" <?php } ?>><a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" /></a></li>
                               <?php $n++;}unset($n); ?>
                               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                              </ul>
                           </div>
                        </div>
                    </div>
                    <div class="con2"> 
                        <div class="tup_div_one">
                           <p><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=3b3e294085dc2b89dbcd87ee48109d2b&action=type_list&siteid=%24siteid&typeid=54&order=listorder+DESC&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'typeid'=>'54','order'=>'listorder DESC','limit'=>'20',));}?>
                            <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
                            <a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></p>
                           <div class="logo_list">
                              <ul>
                                <?php $i=0;?>
                              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=e94d591d4db24b6d02bfc424bb6f17bd&action=type_list&siteid=%24siteid&linktype=1&typeid=54&order=listorder+DESC&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'1','typeid'=>'54','order'=>'listorder DESC','limit'=>'20',));}?>
                               <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
                               <?php $i++; ?>
                               <li <?php if($i==1) { ?> class="frist_li" <?php } ?>><a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" /></a></li>
                               <?php $n++;}unset($n); ?>
                               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                              </ul>
                           </div>
                        </div>
                    </div>
                    <div class="con3">
                        <div class="tup_div_one">
                           <p><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=e381f6f3567af9ff65940e9c3573ca36&action=type_list&siteid=%24siteid&typeid=55&order=listorder+DESC&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'typeid'=>'55','order'=>'listorder DESC','limit'=>'20',));}?>
                            <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
                            <a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></p>
                           <div class="logo_list">
                              <ul>
                               <?php $i=0;?>
                              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=8eb378f3f72f21ab3ddb8bd92b692a50&action=type_list&siteid=%24siteid&linktype=1&typeid=55&order=listorder+DESC&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'1','typeid'=>'55','order'=>'listorder DESC','limit'=>'20',));}?>
                               <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
                               <?php $i++; ?>
                               <li <?php if($i==1) { ?> class="frist_li" <?php } ?>><a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" /></a></li>
                               <?php $n++;}unset($n); ?>
                               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                              </ul>
                           </div>
                        </div>
                    </div>
                    <div class="con4">
                        <div class="tup_div_one">
                           <p><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=a95b2d1a08220fe7af72bf718a184358&action=type_list&siteid=%24siteid&typeid=56&order=listorder+DESC&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'typeid'=>'56','order'=>'listorder DESC','limit'=>'20',));}?>
                            <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
                            <a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></p>
                           <div class="logo_list">
                              <ul>
                                <?php $i=0;?>
                              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=fd13ce47d30623eae8fa1b9e96f22585&action=type_list&siteid=%24siteid&linktype=1&typeid=56&order=listorder+DESC&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'1','typeid'=>'56','order'=>'listorder DESC','limit'=>'20',));}?>
                               <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
                               <?php $i++; ?>
                               <li <?php if($i==1) { ?> class="frist_li" <?php } ?>><a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" /></a></li>
                               <?php $n++;}unset($n); ?>
                               <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                              </ul>
                           </div>
                        </div>
                    </div>
                
              </div>
          </div>
          <!--选项卡结束-->
       
     </div>
     <!--内容第六部分结束-->

</div>
<!--内容结束-->

<?php include template("content","footer"); ?>
<script src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>bigpicroll.js"></script>
<script type="text/javascript">
FeatureList(".flashbox",{
	"onclass":"hover",
	"offclass":"",
	"pause_on_act":"click",
	"interval":5000,
	"speed":5
});
</script>
<script type="text/javascript" src="<?php echo JS_PATH;?>bigpicroll_1.js"></script>
<script type="text/javascript">
FeatureList1(".flashbox1",{
	"onclass":"hover1",
	"offclass":"",
	"pause_on_act":"click",
	"interval":5000,
	"speed":5
});
</script>

<script type="text/javascript" src="<?php echo JS_PATH;?>bigpicroll_2.js"></script>
<script type="text/javascript">
FeatureList2(".flashbox2",{
	"onclass":"hover2",
	"offclass":"",
	"pause_on_act":"click",
	"interval":5000,
	"speed":5
});
</script>

<script type="text/javascript">
new Marquee(
{
	MSClass	  : ["CSSBox","CSSContent"],
	Direction : -2,
	Step	  : 0.3,
	Width	  : 295,
	Height	  : 320,
	Timer	  : 20,
	DelayTime : 3000,
	WaitTime  : 0,
	ScrollStep: 46,
	SwitchType: 0,
	AutoStart : true
});
</script>

</body>
</html>
