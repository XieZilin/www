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
<div id="Article">
        	<h1><?php echo $title;?><br />
<span>发布时间：<?php echo date('Y-m-d',time($inputtime));?></span></h1>
			
			<div class="content">
		
				<?php echo $content;?>
	
			</div>

			<div id="pages" class="text-c"><?php echo $pages;?></div>
            
            <p class="f14">
                <strong>上一篇：</strong><a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a><br />
                <strong>下一篇：</strong><a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a>
            </p>
         
          <div class="bk15"></div>
          
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
