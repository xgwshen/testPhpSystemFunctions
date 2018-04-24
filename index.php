<?php
/**
 * 测试系统函数---字符串函数
 */
//adslashes 在预定义字符前加反斜杠
//$str="hhh\ null'sdfs',/hNULLh,NULL";
//echo addslashes($str);
//$str1=addslashes($str);
//stripslashes 把经过addslashes添加的反斜杠去掉
//echo stripslashes($str1);
//htmlspecialchars 把预定义字符转化为html实体
//$str2="<a>baidu.com</a>";
//echo $str2;
//echo htmlspecialchars($str2);
////html_entity_decode()函数把HTML实体转化为字符 参数1:字符串 2:解码双引号与与单引号 3:字符集
//$str="John &amp; &#039; Admin&#039; &gt";
//echo html_entity_decode($str);
//strpos() 返回字符串在另一个字符串中第一次出现的位置 如果没有找到该字符串 返回false; strpos(string,find,start)
//string find-必须 start开始搜索的位置 可选
//echo strpos("hello world",'wo');
/**
 * str_replace() 使用一个字符串替换字符串中的另一些字符
 * str_repalce(find,replace,string,count)->find,replace,string(必须) count(可选变量):对替换数进行计数
 */
//echo str_replace("hello",'',"hello world!",$count);
//echo $count;
//reponse:world!1
//突然发现问题所在
