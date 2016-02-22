<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PIMSforms demo site</title>
<link rel="stylesheet" href="gbv.css" type="text/css">
<script language="Javascript"> 
<!-- www.hypergurl.com 
if (document.images) 
{ 
	image1 = new Image 
	image2 = new Image 
	image1.src = 'reserveUP.png' 
	image2.src = 'reserveOVER.png' 
} 
--> 
</script>
</head>

<body>


<div align=center>
<?php require_once ('iheader.htm'); ?>
<table border="0" width="900"  cellspacing="0" cellpadding="0" >
	<tr>
    	<td width="240">
        
       
  	<?php require_once ('inav.htm'); ?>
             
    </td>
        <td align="left">
        <table border="0" width="100%"  cellspacing="0" cellpadding="0" >
            <tr>
                <td>
        			<h1>The Balmoral Web Page</h1>
                    <p>The elaborate Balmoral Castle is situated on a large estate in Aberdeenshire in the highlands of Scotland.</p>
                    <p>It is the site of a 16th century square tower house, with a walled courtyard but it was replaced in the construction 
					of a 19th century baronial mansion. The castle has been Scottish home of the royal family since it was purchased for 
					Queen Victoria by Prince Albert in 1852.</p>
					
					<div class="pimstext">
					<div id="goDemo">
					<a href="balmoral_reserve.php" class="goDemoText">
					Make a reservation at Balmoral Castle
					</a>
					</div>
                    <p>OR</p>
					
					<div id="goDemo">
					<a href="balmoral_contact.php" class="goDemoText">
					Send us an enquiry about Balmoral Castle
					</a>
					</div>
					
					
                    <p>&nbsp;</p>
                    <p><strong>Prices:</strong>.</p>
                    <iframe height='120' width='400' frameborder='0' SCROLLING='no' src='http://www.holidayrentalmanagement.com/userratecards/pimsratecard.php?uid=0006&propcode=bb' ></iframe>
                    
					<p><strong>Availability:</strong>.</p>
					<iframe height='670' width='400' marginwidth='0' frameborder='0' SCROLLING='no' src='http://www.holidayrentalmanagement.com/usercalendars/pimscalendar.php?uid=0006&propcode=bb'></iframe>
					
                    </div>
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td width="150" valign="top">
                
                <!--<a href="balmoral_reserve.php" onMouseOver="document.rollover.src=image2.src" onMouseOut="document.rollover.src=image1.src">-->
              
                    
                    <img src="balm03.jpg" alt="Fortress" width="150" >
					<p>&nbsp;</p>
					
					
                    <p>&nbsp;</p>
                    <img src="balm02.jpg" alt="Dining" width="150" >
                    
                    <p>&nbsp;</p>
                </td>
            </tr>
        </table>
        
        </td>
     </tr>
</table>
</div>

</body>
</html>
