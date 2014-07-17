<?php defined('IN_ADMIN') or exit('No permission resources.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?php echo L('phpcms_logon')?></title>
<style type="text/css">


/*---------------------reset----------------------*/
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td { margin:0; padding:0; border:0; outline:0;}
ol, ul, li { list-style:none } 
body { background: url(<?php echo IMG_PATH?>admin_img/bg_login.jpg) repeat-x scroll left top #3C7FB5;}
:focus { outline:0 }
table { border-collapse:collapse; border-spacing:0 }
table,table td,table th{border:1px solid #edeada;border-collapse:collapse;}
address, cite, code, dfn, em, var, i { font-style:normal }
input[type=button], input[type=submit], button { cursor:pointer; outline:none;}
.input, select { vertical-align:middle }
* html .clearfix { zoom:1 }
*+html .clearfix { zoom:1 }
textarea{resize:none;}
a { text-decoration:none; color:#009bd8 }
.clearfix:after {clear: both;content: ".";display: block;height: 0;overflow: hidden;visibility: hidden;}
.pos-r{ position:relative;}
.hide{ display:none;}
/*---------------------header----------------------*/

.header{ height: 84px;margin:26px auto; overflow: hidden; position: relative; width: 800px; z-index: 2;}
.headerNav { right: 0;text-align: right;top: 52px; width: 300px; position:absolute;}
.headerNav a{ color:#515151; font-size:12px; padding:0 2px;}
.headerNav a:hover{ text-decoration:underline; color:#658b98;}

/*---------------------banner----------------------*/
.banner{ min-width:1000px;  position:relative;  height:700px; overflow:hidden;  }
.banner .bd{ position:relative; z-index:0;  }
.banner .bd ul{ width:100% !important; }
.banner .bd li{ width:100% !important;  height:auto; }
.banner .bd li .siteWidth{ width:1000px; position:relative;  margin:0 auto;  height:299px;  }
.banner .bd li a{ height:299px; display:block;  }
.banner .bd .txt{ position:absolute; width:415px; top:100px; left:22px;   font:normal 18px/30px "Microsoft YaHei";    }
.banner-shadow{ height:50px; line-height:50px; background:url(<?php echo IMG_PATH?>admin_img/banner-shdow.png) repeat-x;}
.footer{text-align:center; font-size:12px; color:#999999;}
.login-aside{position:absolute; width:320px; height:380px; z-index:9999999; border-radius:5px; left:53%; top:210px;}
.allwww{ position:absolute; width:375px; height:80px; z-index:9999999;  left:27%; top:360px; background: url(<?php echo IMG_PATH?>admin_img/allwww.png) no-repeat;}


.error-box{
color:#f7ccc8;
font-size:12px;
margin-bottom:10px;
}


label.form-label {
    display: block;
    float: none;
    height: auto;
    line-height: 12px;
    text-align: left;
    width: auto;
	font-size:14px;
	color:#fff;
	font-weight:bold;
	text-shadow:1px 1px 1px #4e6877;
	-o-text-shadow:1px 1px 1px #4e6877;
	-o-moz-shadow:1px 1px 1px #4e6877;
	-o-mis-shadow:1px 1px 1px #4e6877;
	-o-webkit-shadow:1px 1px 1px #4e6877;
	margin-top:16px;
	margin-bottom:16px;
}

#o-box-up,#o-box-down {
    width:320px;
    height:380px;
    position:absolute;
	border-radius:5px;

}
#o-box-up {
    background-color:#000;
    filter:alpha(opacity:40);
    opacity:0.4;
}
 
#o-box-down{ padding:30px 0 0 40px;}

.i-text{ 
  width:240px;
  height:37px;
  line-height:37px;
  border:1px solid #858585;
  background:#eef3f8;
  color:#455;
  font-size:16px; font-weight:bold;
  text-indent:12px; 
  box-shadow:1px 1px 1px #dfe4e8 inset;
  -moz-box-shadow:1px 1px 1px #dfe4e8 inset;
  -webkit-box-shadow:1px 1px 1px #dfe4e8 inset;
  -o-box-shadow:1px 1px 1px #dfe4e8 inset;
  -mis-box-shadow:1px 1px 1px #dfe4e8 inset;
 }
 
 .yzm{ width:112px;}
 .yzm-img{ position:absolute; left:130px; top:30px; cursor:pointer;}

.btn-login{ width:242px; height:38px; background:url(<?php echo IMG_PATH?>admin_img/login-btn.png) no-repeat; border:none; margin-top:5px;}




.h-light{
  border:1px solid #80acd9;
  background:#fff;
  color:#9cb5cd;
  font-size:14px; 
  text-indent:12px; 
  border-color: #0787be;
  box-shadow: 0 1px 4px rgba(11, 122, 179, 0.65) inset, 0 0 14px rgba(11, 122, 179, 0.45);

}


</style>
<script language="JavaScript">
<!--
	if(top!=self)
	if(self!=top) top.location=self.location;
//-->
</script>
</head>

<body onload="javascript:document.myform.username.focus();">

<div class="banner">

<div class="login-aside" >
  <div id="o-box-up"></div>
  <div id="o-box-down"  style="table-layout:fixed;">
   <div class="error-box"></div>
   
    <form action="index.php?m=admin&c=index&a=login&dosubmit=1" method="post" name="myform">
   <div class="fm-item">
     <label  for="logonId" class="form-label"><?php echo L('username')?>：</label>
      <input name="username" type="text"  maxlength="100"  class="i-text" value="" />
       <div class="ui-form-explain"></div>
  </div>
  
  <div class="fm-item">
  <label for="logonId" class="form-label"><?php echo L('password')?>：</label>
 <input name="password" type="password"  class="i-text" maxlength="100" value="" />
       <div class="ui-form-explain"></div>
  </div>
  
  <div class="fm-item pos-r" style="width:240px;">
   <label for="logonId" class="form-label"><?php echo L('security_code')?>：</label>
 <div style="float:left; *margin-left:-5px;"> <input name="code" type="text" class="i-text yzm" maxlength="100" onfocus="document.getElementById('yzm').style.display='block'" /></div>
       <div class="ui-form-explain" style="float:right;"><?php echo form::checkcode('code_img')?></div>
       <div style="clear:both;"></div>
  </div>
  
  <div class="fm-item">
	   <label for="logonId" class="form-label"></label>
	   <input type="submit" value="" tabindex="4" id="send-btn" class="btn-login"> 
       <div class="ui-form-explain"></div>
  </div>
  
  </form>
  
  </div>

</div>

</div>

<div class="allwww" ></div>

</body>
</html>