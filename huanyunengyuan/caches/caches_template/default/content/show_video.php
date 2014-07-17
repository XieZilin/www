<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link href="<?php echo CSS_PATH;?>vms/vms.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.tools_tabs.min.js"></script>
<script type="text/javascript">
<script type="text/javascript" src="<?php echo JS_PATH;?>jwplayer/jwplayer.js"></script>
<div class="content">
  <?php include template("content","left"); ?>


     <div class="right_main">
       <?php include template("content","right_title"); ?>
       <h1><?php echo $title;?><br />
	   <span>发布时间：<?php echo date('Y-m-d',time($inputtime));?></span></h1>

       <div class="main_div">
        <?php echo video_Content($content);?>
       </div>
       <p class="main_div">
         <strong>上一篇：</strong><a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a><br />
         <strong>下一篇：</strong><a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a>
       </p>  
   </div>

    




   <div class="clear"></div>
</div>
<?php include template("content","footer"); ?>
