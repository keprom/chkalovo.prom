<?php
function f_d($var)
{
	if ($var==0) return "&nbsp;"; else
	return sprintf("%22.2f",$var);
}?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>24 Энергетика</title>
<center>
<b>24 Энергетика<br> Отчет о полезно отпущенной электроэнергии <br> по категориям потребителей Чкаловского ПЭУ
</center>
</head>
<body>
<table width=100% border=1px cellspacing=0px style="border: black;font-family: Verdana; font-size: x-small;">
<?php foreach($energo->result() as $e ):?>
<tr>
<td>
<?php echo $e->firm_otrasl_name;?>
</td>
<td align="right">
<?php echo f_d($e->sum);?>
</td>
</tr>
<?php endforeach;?>
</table>
</body>
</html>
