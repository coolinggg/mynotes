<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
<?php
if($_REQUEST["delete"] && $_REQUEST["delete"]==1)
{
	$handle = fopen('xy.ini','w');
	fwrite($handle,"");
	fclose($handle);
}
else if((isset($_REQUEST["x"])) && (isset($_REQUEST["y"])))
{
	$data["ID"] = date('Ymdhis');
	$data["x"] = (float)$_REQUEST["x"];
	$data["y"] = (float)$_REQUEST["y"];
	$data["PhoneNO"] = $_REQUEST["tel"];
	$data["Name"] = $_REQUEST["name"];
	$data["HappenTime"] = $_REQUEST["HappenTime"];
	$data["State"] = (int)$_REQUEST["State"];

	$handle = fopen('xy.ini','a+');
	fwrite($handle, json_encode($data) . "\n");
	fclose($handle);
}
?>
    <form id="form1" id="xxx" name="xxx" method="post" action="set.php">
    <div>
    横坐标：<input id="x" type="text" name="x" style="color: rgb(153, 153, 153);"></br>
    纵坐标：<input id="y" type="text" name="y" style="color: rgb(153, 153, 153);"></br>
    电&nbsp;&nbsp;话：<input id="x" type="text" name="tel" style="color: rgb(153, 153, 153);"></br>
    姓&nbsp;&nbsp;名：<input id="y" type="text" name="name" style="color: rgb(153, 153, 153);"></br>
    时&nbsp;&nbsp;间：<input id="x" type="text" name="HappenTime" style="color: rgb(153, 153, 153);"></br>
    状&nbsp;&nbsp;态：<input id="y" type="text" name="State" style="color: rgb(153, 153, 153);"></br>
    <input id="subxxx" type="submit" name="subxxx" value="确定" style="width:80px;">
    </div>
    </form>
</body>
</html>
