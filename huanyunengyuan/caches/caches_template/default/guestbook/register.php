<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<?php include template("content","header"); ?>
<link href="<?php echo CSS_PATH;?>ys_about.css" rel="stylesheet" type="text/css" />


<div class="banner_div"></div>

<div class="content">

<!--left begin-->
<?php $catid="16"?>
<?php $parentCatId = intval(diy_top_id($catid))?>

<div class="left_main">
      <div class="left_main_title">
        <!--
        <span>ABOUT US</span><br/>关于我们</div>
        -->
        
        <span>CONTACT</span><br/>联系我们</div>
      <div class="left_nav">
          <ul>
            <!--
              <li><a href="javascript:void(0)">公司简介</a></li>
              <li><a href="javascript:void(0)">组织架构</a></li>
              <li><a href="javascript:void(0)">资质荣誉</a></li>
              <li><a href="javascript:void(0)">领导致辞</a></li>
              <li><a href="javascript:void(0)">发展战略</a></li>
            -->
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=00f5a891750cf2cdda895f8b4d6caf66&action=category&catid=%24parentCatId&num=6&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parentCatId,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'6',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                   <li><a href="<?php echo $r['url'];?>" ><h4><?php echo $r['catname'];?></h4></a></li>
 
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
           </ul>
           
          <div class="dzqk_div">
               <div class="com_title">电子期刊&nbsp;&nbsp;&nbsp;<span>Electronic Journal</span></div>
               <div class="dzqk_con">
                  <a href="javascript:void(0)"></a>
               </div>
          </div>
      </div>
      
      <div><img src="<?php echo IMG_PATH;?>hy_a_18.jpg"/></div>
   </div>
<!--left end-->

<div class="right_main">

   <div class="right_main_title"><span class="position_div"><a href="<?php echo siteurl($siteid);?>">首页</a>><?php echo catpos($catid);?></span>客户留言</div>
   <div class="main_div">

      <div class="tabchange_div">
          <!--选项卡开始-->
           <div class="tabchange_con">
            <script type="text/javascript" src="<?php echo JS_PATH;?>formvalidator.js" charset="UTF-8"></script> 
<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidatorregex.js" charset="UTF-8"></script>
<link href="<?php echo CSS_PATH;?>guestbook.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>table_form.css" rel="stylesheet" type="text/css" /> 
<!--main-->
<div class="main">
<!--left_bar-->
<div class="col-liuyanban">

<div>
<form action="<?php echo APP_PATH;?>index.php?m=guestbook&c=index&a=register&siteid=<?php echo $siteid;?>" method="post" name="myform" id="myform">
<table cellspacing="1" cellpadding="0" class="table_form" width="960px">
<tbody>
<tr> 
<th class="liuyan_left">姓　　名：</th>
<td><input type="text" value="" id="name" name="name" class="input-text" onkeyup="value="/oblog/value.replace(/[^\u4E00-\u9FA5]/g,'')></td>
</tr>
<tr> 
<th>性　　别：</th>
<td><input type="radio" value="男" name="sex" checked="checked"/> 男<input type="radio" value="女" name="sex"/> 女</td>
</tr>
<tr> 
<th>联 系QQ：</th>
<td><input type="text" size="40" value="" name="lxqq" id="lxqq" class="input-text"></td>
</tr>
<th>电子邮箱：</th>
<td><input type="text" size="40" value="" name="email" id="email" class="input-text"></td>
</tr>
<tr>
<th>手　　机：</th>
<td><input type="text" size="40" value="" name="shouji" id="shouji" class="input-text"></td>
</tr>
<tr> 
  <th>所属分类：</th>
  <td width="300">
  <select  style="width: 36%;" id="typeid" name="typeid">
  <option value="0">默认分类</option>
<?php $n=1;if(is_array($types)) foreach($types AS $type_arr) { ?>
<option value="<?php echo $type_arr['typeid'];?>"><?php echo $type_arr['name'];?></option>
<?php $n++;}unset($n); ?>
</select>
  </td>
</tr>

<tr>
  <th>填写留言：</th>
  <td><textarea name="introduce" cols="40" rows="5" class="input-text" id="introduce" style='width:500px;height:70px;'></textarea></td>
</tr>
<?php if($setting[1]['enablecheckcode']=='1') { ?>
<tr>
       <th>验证码：</th>
       <td><input name="code" type="text" id="code" size="10"  class="input-text"/> <?php echo form::checkcode('code_img','4','14',110,30);?></td>
</tr>
<?php } ?>
<tr> 
<th></th>
<td><input type="submit" value=" 提 交 " name="dosubmit" class="liuyan_button">　　<input type="reset" value=" 取 消 " name="reset" class="liuyan_button"> </td>
</tr> 
</tbody></table>
</form>
        </div>

    </div>
<!--right_bar--></div>
<script type="text/javascript">
<!--
  $(function(){
  $.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
  $("#name").formValidator({onshow:"请输入姓名",onfocus:"请输入姓名"}).inputValidator({min:4,max:10,onerror:"姓名应该为2-3个汉字"}).regexValidator({regexp:"ps_username",datatype:"enum",onerror:"姓名格式错误"});
  
  $("#email").formValidator({onshow:"请输入电子邮箱",onfocus:"请输入电子邮箱",oncorrect:"邮箱格式正确"}).inputValidator({min:6,max:32,onerror:"邮箱应该为6-32位之间！"}).regexValidator({regexp:"email",datatype:"enum",onerror:"请填写正确的邮箱地址"});
  
  $("#lxqq").formValidator({onshow:"请输入QQ号码",onfocus:"请输入QQ号码",oncorrect:"QQ格式正确"}).inputValidator({min:5,max:10,onerror:"QQ号码应该为5-10位之间！"}).regexValidator({regexp:"qq",datatype:"enum",onerror:"请填写正确的QQ号"});
  
  $("#shouji").formValidator({onshow:"请输入手机",onfocus:"请输入联系电话",oncorrect:"电话格式正确"}).inputValidator({min:11,max:11,onerror:"手机应该为11位数！"}).regexValidator({regexp:"mobile",datatype:"enum",onerror:"请填写正确的手机"});
  $("#introduce").formValidator({onshow:"请输入留言内容",onfocus:"请输入留言内容"}).inputValidator({min:10,max:200,onerror:"10-100个字之间"});
  
  $("#code").formValidator({onshow:"请输入验证码",onfocus:"验证码不能为空"}).inputValidator({min:1,max:999,onerror:"验证码不能为空"}).ajaxValidator({
      type : "get",
    url : "",
    data :"m=pay&c=deposit&a=public_checkcode",
    datatype : "html",
    async:'false',
    success : function(data){ 
            if(data == 1)
      {
                return true;
      }
            else
      {
                return false;
      }
    },
    buttons: $("#dosubmit"),
    onerror : "验证码错误",
    onwait : "验证中"
  });
  })
//-->
</script>

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
