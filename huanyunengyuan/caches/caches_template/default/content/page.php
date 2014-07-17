<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div class="content">
  <?php include template("content","left"); ?>

  

    <!--右侧正文列表-->
     <div class="right_main">
       <?php include template("content","right_title"); ?>
   
       <div class="main_div">
        <?php echo $content;?>
       </div>
   </div>


    




   <div class="clear"></div>
</div>

<?php include template("content","footer"); ?>