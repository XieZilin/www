<?php
return array (
  'Name' => 
  array (
    'info' => 
    array (
      'formtype' => 'text',
      'field' => 'Name',
      'name' => '姓名',
      'tips' => '请输入姓名',
      'formattribute' => '',
      'css' => '',
      'minlength' => '1',
      'maxlength' => '',
      'pattern' => '',
      'errortips' => '请输入正确的姓名！',
      'modelid' => '0',
      'setting' => 'array (
  \\\'size\\\' => \\\'50\\\',
  \\\'defaultvalue\\\' => \\\'\\\',
  \\\'ispassword\\\' => \\\'0\\\',
)',
      'siteid' => '1',
      'unsetgroupids' => '',
      'unsetroleids' => '',
    ),
    'sql' => 'ALTER TABLE `formguide_table` ADD `Name` VARCHAR( 255 ) NOT NULL DEFAULT \'\'',
  ),
);
?>