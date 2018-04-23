<?php
/**
 * 测试系统函数
 */
//adslashes 在预定义字符前加反斜杠
$str="hhh\ null'sdfs',/hNULLh,NULL";
echo addslashes($str);
$str1=addslashes($str);
//stripslashes 把经过addslashes添加的反斜杠去掉
echo stripslashes($str1);
//htmlspecialchars 把预定义字符转化为html实体
$str2="<a>baidu.com</a>";
echo $str2;
echo htmlspecialchars($str2);
