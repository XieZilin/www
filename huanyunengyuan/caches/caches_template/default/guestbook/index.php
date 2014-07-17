<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link href="<?php echo CSS_PATH;?>guestbook.css" rel="stylesheet" type="text/css" />
<!--main-->
<div class="content">
  <!--left_bar-->
  <div class="right_main">
    <div class="right_main_title"><a href="<?php echo siteurl($siteid);?>">网站首页</a><span> &gt; </span><a href="<?php echo APP_PATH;?>index.php?m=<?php echo ROUTE_M;?>&siteid=<?php echo $siteid;?>">留言板</a></div>
    <div class="box boxsbg cboxs">
      <h5>默认分类 <a href="<?php echo APP_PATH;?>index.php?m=guestbook&c=index&a=list_type&type_id=0&siteid=<?php echo $siteid;?>" class="more">更多>></a></h5>
      <div class="tag_a"> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"guestbook\" data=\"op=guestbook&tag_md5=031297cae6030e1657c5e5c11d894f57&action=lists&typeid=0&siteid=%24siteid&order=desc&num=6&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$guestbook_tag = pc_base::load_app_class("guestbook_tag", "guestbook");if (method_exists($guestbook_tag, 'lists')) {$dat = $guestbook_tag->lists(array('typeid'=>'0','siteid'=>$siteid,'order'=>'desc','limit'=>'6',));}?>
        <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
        <table class="ltable" width="95%" border="0"  align="center">
          <tr>
          <td width="25%">姓名：<?php echo $v['name'];?></td>
          <td width="35%">性别：<?php echo $v['sex'];?></td>
          <td>时间：<?php echo date('Y-m-d H:i:s',$v[addtime]);?> </td>
          </tr>
          <tr>
            <td colspan="4"><span><b>留言内容：</b>&nbsp;<?php echo $v['introduce'];?></span></td>
           </tr>
          <tr>
            <td colspan="4"><span class="huifu"><b>管理员回复：</b>&nbsp;<?php echo $v['reply'];?></span></td>
          </tr>
        </table>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </div>
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=274750ae87f3b000334b2eeb6e2a35bc&action=type_lists&listorder=desc&siteid=%24siteid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_lists')) {$data = $link_tag->type_lists(array('listorder'=>'desc','siteid'=>$siteid,'limit'=>'20',));}?>
      <?php $n=1;if(is_array($data)) foreach($data AS $type_v) { ?>
      <h5><?php echo $type_v['name'];?> <a href="<?php echo APP_PATH;?>index.php?m=guestbook&c=index&a=list_type&type_id=<?php echo $type_v['typeid'];?>&siteid=<?php echo $siteid;?>" class="more">更多>></a></h5>
      <div class="tag_a"> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"guestbook\" data=\"op=guestbook&tag_md5=8c9652f402e2b6d4caebc39110191f7b&action=lists&typeid=%24type_v%5Btypeid%5D&siteid=%24siteid&order=desc&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$guestbook_tag = pc_base::load_app_class("guestbook_tag", "guestbook");if (method_exists($guestbook_tag, 'lists')) {$dat = $guestbook_tag->lists(array('typeid'=>$type_v[typeid],'siteid'=>$siteid,'order'=>'desc','limit'=>'10',));}?>
        <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
         <table class="ltable" width="95%" border="0"  align="center">
          <tr>
            <td width="30%">姓名：<?php echo $v['name'];?></td>
            <td width="30%">性别：<?php echo $v['sex'];?></td>
            <td>时间：<?php echo date('Y-m-d H:i:s',$v[addtime]);?> </td>
          </tr>
          <tr>
            <td colspan="2">留言内容：&nbsp;<?php echo $v['introduce'];?></td>
            <td colspan="2"><span style="color:#F00">管理员回复：</span>&nbsp;<?php echo $v['reply'];?></td>
          </tr>
        </table>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </div>
      <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
      
      <!--pages--> 
    </div>
  </div>
  <!--right_bar-->
  <div class="col-auto"> 
    <!--广告228x90-->
    <div class="box">
      <h5 class="title-2">留言板分类</h5>
      <div class="tag_a"> <a href="<?php echo APP_PATH;?>index.php?m=guestbook&c=index&a=list_type&type_id=0&siteid=<?php echo $siteid;?>" title="默认分类">默认分类</a> <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"guestbook\" data=\"op=guestbook&tag_md5=ec2aaff69f34898e618fc2f890e98c54&action=type_lists&listorder=desc&siteid=%24siteid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$guestbook_tag = pc_base::load_app_class("guestbook_tag", "guestbook");if (method_exists($guestbook_tag, 'type_lists')) {$data = $guestbook_tag->type_lists(array('listorder'=>'desc','siteid'=>$siteid,'limit'=>'20',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $type_v) { ?> <a href="<?php echo APP_PATH;?>index.php?m=guestbook&c=index&a=list_type&type_id=<?php echo $type_v['typeid'];?>&siteid=<?php echo $siteid;?>" title="<?php echo $type_v['name'];?>"><?php echo $type_v['name'];?></a> <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> </div>
    </div>
    <div class="bk10"></div>
    <?php if($setting[$siteid]['is_post']=='1') { ?>
    <div class="txt_c"> <a href="<?php echo APP_PATH;?>index.php?m=guestbook&c=index&a=register&siteid=<?php echo $siteid;?>"  target="_blank">我要留言</a> </div>
    <?php } ?> </div>
</div>
<?php include template("content","footer"); ?> 