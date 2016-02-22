<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PIMSforms demo site</title>
<link rel="stylesheet" href="gbv.css" type="text/css">
</head>

<body>

</body>

<div align=center>
<?php require_once ('iheader.htm'); ?>
<table border="0" width="900"  cellspacing="0" cellpadding="0" >
	<tr>
    	<td width="240">

<?php require_once ('inav.htm'); ?>
<!--  // Defaults:
	if ($calwidth == "") 	$calwidth = 800;
	if ($propwidth == "") 	$propwidth = 120;
	if ($truncate == "") 	$truncate = 50;
	if ($cellwidth == "") 	$cellwidth = 20;
	if ($scroll == "") 		$scroll = 0;
	if ($display == "") 	$display = "user";
	
	$calsize = 1;
-->
	           
        </td>
        <td align="left">
		<h1>V6.0 TEST 10</h1>
		<iframe width='650' height='225' marginwidth='0' frameborder='0' scrolling='no' src='http://www.holidayrentalmanagement.com/usercalendars/pimscalendarmulti.php?uid=0010&calwidth=650&propwidth=100&truncate=40&cellwidth=22&sizemonth=8&sizeday=8&sizedate=7' ></iframe>

        </td>
     </tr>
</table>
</div>

</html>
