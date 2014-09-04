<?php  if (!defined("IS_INITPHP")) exit("Access Denied!");  /* INITPHP Version 1.0 ,Create on 2014-09-04 04:59:22, compiled from ../app/web/template/index/run.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>InitPHP框架 A PHP Framework 国产PHP框架 Demo列表</title>
</head>
<style>
/* CSS Document */
@charset "utf-8";
/* 全局 */
body, div, dl, dt, dd, ,
h1, h2, h3, h4, h5, h6, pre, code,
form, fieldset, legend, p,  {margin: 0;padding: 0;}
img {border: 0;}
cite,em,strong,th{font-style: inherit;font-weight: inherit;}
input,button,textarea,select{font-family: inherit;font-size: inherit;font-style: inherit;font-weight: inherit;}
input,button,textarea,select{*font-size: 100%;}
/*table {border-collapse: collapse;border-spacing: 0;}*/
th{text-align: left;}
:link, :visited {text-decoration: none;}
td,th,div{word-break:break-all;word-wrap:break-word}
form{display:inline;}
*{outline:none}
.hidden{ display:none;}
body{ height:100%; font-size:14px; margin:20px; font-family: Lucida Grande,Verdana,Geneva,Sans-serif,宋体; line-height:22px; width:1000px; margin: 0 auto;}
.header_nav{ margin-top:10px; text-align:center; margin-bottom:10px; font-weight:bold; }
.jk,p { text-indent:2em; width:800px;}

.header {border-bottom: 1px solid #666666;padding: 0 0 0 6px;}
.header_div{ margin-bottom:5px;margin: 0;padding: 0 0 6px; height:20px; }
.header_title{ float:left;font-size: 18px;font-weight: normal;color:#000000;}
.header_right{ float:right;}
.title { margin-top:10px; margin-bottom:10px;font-size: 14px;font-weight:bold; font-family: Arial,Sans-serif;
    line-height: 1.3;
    margin-top: 1.5em; color: #525D76;}
h3{font-size: 14px;font-weight:bold; font-family: Arial,Sans-serif;
    line-height: 1.3;
    margin-top: 1.5em; color: #525D76;}
.nav {margin-top:20px; margin-bottom:20px; border-bottom: 1px solid #D6E3F1;}
ul { list-style:decimal; width:800px;}
li span,p span{ color:#FF0000;}
table {
    font-family: verdana,arial,sans-serif;
    font-size:12px;
    color:#333333;
    border-width: 1px;
    border-color: #666666;
    border-collapse: collapse;
	width:800px;
	margin-left:2em;
}
table th {
    border-width: 1px;
    padding: 3px;
    border-style: solid;
    border-color: #666666;
    background-color: #dedede;
	font-weight:bold;
}
table td {
    border-width: 1px;
    padding: 3px;
    border-style: solid;
    border-color: #666666;
    background-color: #ffffff;
}
a:link {
    color: #000099;
    text-decoration: none;
}
a {
    border-bottom: 1px solid #000099;
    color: #000099;
    text-decoration: none;
}
.footer{margin-top:20px; border-top: 1px solid #666666; padding-top:8px; margin-bottom:10px;}
.m_2em{ margin-left:2em;}
.m_4em{ margin-left:4em;}
.m_6em{ margin-left:6em;}
.m_8em{ margin-left:8em;}
</style>
<body>
<div class="header">
  <div class="header_nav">InitPHP (A PHP Framework) Demo列表</div>
  <div class="header_div">
    <div class="header_title">InitPHP (A PHP Framework)</div>
    <div class="header_right"></div>
  </div>
</div>
<div class="title">控制器Controller基本操作Demo</div>
<table style="width:900px;">
  <tr>
    <th width="120px;">名称</th>
    <th  width="250px;">Controller</th>
    <th width="250px;">说明</th>
    <th width="80px;">查看</th>
  </tr>
  <tr>
    <td>Hello World</td>
    <td>/app/web/controller/demo/helloController.php</td>
    <td>输出最简单的Hello World</td>
    <td><a href="?m=demo&c=hello&a=run" target="_blank">查看</a></td>
  </tr>
  <tr>
    <td>白名单使用</td>
    <td>/app/web/controller/demo/helloController.php</td>
    <td>每个Controller中的$initphp_list使用</td>
    <td><a href="?m=demo&c=hello&a=white_list" target="_blank">查看</a></td>
  </tr>
  <tr>
    <td>直接输出JSON格式数据</td>
    <td>/app/web/controller/demo/helloController.php</td>
    <td>使用$this->controller->中提供的框架方法，可以参考：<br/>
      http://initphp.com/6_2_1.htm<br/>
      http://initphp.com/6_2_2.htm<br/>
      http://initphp.com/6_2_3.htm<br/>
      http://initphp.com/6_2_4.htm</td>
    <td><a href="?m=demo&c=hello&a=to_json" target="_blank">查看</a></td>
  </tr>
  <tr>
    <td>Rest使用</td>
    <td>/app/web/controller/demo/helloController.php</td>
    <td>rest的使用，可以参考：<br/>
      http://initphp.com/5_3.htm</td>
    <td><a href="?m=demo&c=hello&a=rest_get" target="_blank">查看</a></td>
  </tr>
  <tr>
    <td>GET方法获取URL中请求参数</td>
    <td>/app/web/controller/demo/helloController.php</td>
    <td>可以参考：<br/>
      http://initphp.com/6_2_4.htm#$this-%3Econtroller-%3Eget_gp</td>
    <td><a href="?m=demo&c=hello&a=get_info&username=initphp" target="_blank">查看</a></td>
  </tr>
  <tr>
    <td>拦截器使用例子</td>
    <td>/app/web/controller/demo/helloController.php</td>
    <td>可以参考：<br/>
      http://initphp.com/3_6.htm</td>
    <td><a href="?m=demo&c=hello&a=interceptor" target="_blank">查看</a></td>
  </tr>
</table>
<div class="title">View模板操作DEMO</div>
<table style="width:900px;">
  <tr>
    <th width="120px;">名称</th>
    <th  width="250px;">Controller</th>
    <th width="250px;">说明</th>
    <th width="80px;">查看</th>
  </tr>
  <tr>
    <td>模板赋值操作</td>
    <td>/app/web/controller/demo/viewController.php</td>
    <td>最简单的模板赋值，参考手册：http://initphp.com/4_5.htm</td>
    <td><a href="?m=demo&c=view&a=run" target="_blank">查看</a></td>
  </tr>
  <tr>
    <td>使用模板</td>
    <td>/app/web/controller/demo/viewController.php</td>
    <td>最简单的模板使用，参考手册：http://initphp.com/4_5.htm</td>
    <td><a href="?m=demo&c=view&a=tpl" target="_blank">查看</a></td>
  </tr>
</table>

<div class="title">Service和Dao基本操作</div>
<table style="width:900px;">
  <tr>
    <th width="120px;">名称</th>
    <th  width="250px;">Controller</th>
    <th width="250px;">说明</th>
    <th width="80px;">查看</th>
  </tr>
  <tr>
    <td>Service的基本使用</td>
    <td>/app/web/controller/demo/serviceController.php</td>
    <td>Service的基本使用，参考手册：http://initphp.com/4_3.htm</td>
    <td><a href="?m=demo&c=service&a=run" target="_blank">查看</a></td>
  </tr>
   <tr>
    <td>Dao的基本使用</td>
    <td>/app/web/controller/demo/serviceController.php</td>
    <td>Dao的基本使用，参考手册：http://initphp.com/4_2.htm</td>
    <td><a href="?m=demo&c=service&a=create" target="_blank">查看</a></td>
  </tr>
</table>
<br/><br/>
</body>
</html>
