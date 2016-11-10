<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Voicelant order</TITLE>

<META http-equiv=Content-Type content="text/html; charset=windows-1251" />
<META name="description" content="Voicelant order" />
<LINK href="css/style.css" type=text/css rel=stylesheet />

</HEAD>
<BODY><!-- body table -->
<TABLE cellSpacing=0 cellPadding=8 width="80%" align=center border=0 valign="top">
<!-- top header -->
  <TBODY>
  <TR>
    <TD vAlign=center width="25%" colSpan=2>
<!-- title table -->
      <TABLE cellSpacing=0 cellPadding=1 width="100%" align=center bgColor=#000000 border=0>
        <TBODY>
        <TR>
          <TD vAlign=center>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" bgColor=#ffffff border=0>
              <TBODY>
              <TR>
                <TD style="background: url(images/t_clear_rep_4_2.png) repeat;" vAlign=center cellspacing="0" cellpadding="0" bgColor=#d5dcff>
		  <a href='index.html'><IMG alt="Voicelant products" src="images/titvoicelant4_2.png" align=center border=0></a>
                </TD>
	      </TR>
	      </TBODY>
            </TABLE>
          </TD>
        </TR>
	</TBODY>
     </TABLE>
<!-- end title table -->
     </TD>
   </TR>
<!-- title navigation -->
   <TR>
    <TD width="100%" colSpan=2>
      <TABLE cellSpacing=0 cellPadding=0 width="100%" bgColor=#000000 border=0>
      <TBODY>
        <TR>
          <TD>
            <TABLE cellSpacing=1 cellPadding=3 width="100%" border=0>
              <TBODY>
              <TR valign=center>
                <TD align=right bgColor=#d5dcff>&nbsp;
		<SPAN>
		<A class=nav href="index.html">Home</A>&nbsp;
		<A class=nav href="download.html">Download</A>&nbsp;
		<A class=nav href="order.php">Order</A>&nbsp;
		<A class=nav href="awards.html">Support</A>&nbsp;
		<A class=nav href="contacts.html">Contacts</A>
		</SPAN>
		</TD>
              </TR>
	      </TBODY>
            </TABLE>
           </TD>
         </TR>
      </TBODY>
      </TABLE>
     </TD>
   </TR>
<!-- end title navigation -->
<!-- end top header -->
  <TR>
<!-- left column -->
    <TD vAlign=top width="17%">
<!-- sidebox -->
      <TABLE cellSpacing=0 cellPadding=0 width="100%" bgColor=#000000 border=0>
      <TBODY>
        <TR>
          <TD>
            <TABLE cellSpacing=1 cellPadding=8 width="100%" border=0>
              <TBODY>
              <TR>
                <TD bgColor=#d5dcff>&nbsp;&nbsp;<A class=title href="index.html">Voicelant</A></TD>
              </TR>
              <TR>
                <TD bgColor=#ffffff>&nbsp;
		<A class=nav href="applications.html">Applications</A><BR>&nbsp;
		<A class=nav href="features.html">Features</A><BR>&nbsp;
		<A class=nav href="solutions.html">Solutions</A><BR>&nbsp;
		<A class=nav href="screenshots.html">Screenshots</A><BR>&nbsp;
		<A class=nav href="requirements.html">Requirements</A><BR>&nbsp;
		<A class=nav href="examples.html">Examples</A><BR>&nbsp;
		<BR>&nbsp;
		<A class=nav href="faq.html">FAQ</A><BR>&nbsp;
		<A class=nav href="support.html">Support</A><BR>&nbsp;
		<A class=nav href="onlinehelp.html">Documentation</A><BR>&nbsp;
		<A class=nav href="service.html">Services</A><BR>&nbsp;
		<BR>&nbsp;
		<A class=nav href="download.html">Download</A><BR>&nbsp;
		<A class=nav href="order.php"><FONT color = #ff0077>Order</FONT></A><BR>&nbsp;
		<BR>&nbsp;
		<A class=nav href="contacts.html">Contacts</A><BR>
                </TD>
              </TR>
	      </TBODY>
            </TABLE>
           </TD>
         </TR>
      </TBODY>
      </TABLE>
<!-- end sidebox -->
      <BR><BR>
     </TD>
<!-- end left column -->
<!-- right column -->
    <TD vAlign=top width="83%">
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD vAlign=top width="100%">

	  <P>
   	  <TABLE cellSpacing=0 cellPadding=0 width="100%" bgColor=#000000 border=0>
      	  <TBODY>
       	    <TR>
     	      <TD>
                <TABLE cellSpacing=1 cellPadding=8 width="100%" border=0>
                <TBODY>
                  <TR>
                    <TD bgColor=#d5dcff>&nbsp;<SPAN class=title>
                    <?php
                    	$run_order=$_REQUEST['runorder'];
                    	if ($run_order=='7777')
                    		echo 'Contact';
                    	else
                    		echo 'Order';
                    ?>
                    </SPAN> </TD>
                  </TR>
   		  <TR>
       		    <TD bgColor=#ffffff>
<?php
//var_dump($_REQUEST);
$name_order=$_REQUEST['nameorder'];
//$run_order=$_REQUEST['runorder'];

 $plugin_array=array(1=>"Plugin for Access to the database MS SQL Server - free",
						"Plugin for Execution of scripts VBScript - free",
						"Plugin for Connecting third-party software libraries (DLL)- free",
						"Plugin for Direct access to data in text files and DBF files",
						"Plugin for Access to databases via ODBC",
						"Plugin for Access to databases via OLEDB",
						"Plugin for Sending e-mail messages via SMTP",
						"Plugin for Running third-party programs",
						"Plugin for Access to data via FTP and HTTP",
						"Plugin for Speech synthesis (Text To Speech - TTS)",
						"Plugin for Sending SMS via GSM-phone"
					);
$service_array=array(1=>"Preparation of proposals and projects for the introduction of new telecommunications services",
						"Develop scenarios Voicelant",
						"Record of separate speech prompts and complete sets of sound files",
						"Writing a specific query to the database for the \"complex\" services",
						"Development of custom plugins Voicelant",
						"Training of employees which will be working with Voicelant",
						"Other services"
					);
$scen_array=array(1=>"Voicelant-AISST: automatic notification and reference-information system",
					 "Voicelant-IVR: information voice portal"
					);
//$name_order_array=explode(':',$name_order);
//$name_order_id=$name_order_array[0];
       if ($run_order!=''){
       	  $strresmail="false";          switch ($run_order){          	case '0':
          		extract($_REQUEST);
          		$toaddress="order@voicelant.com";
          		$subject="Voicelant (register)";
          		$mailcontent="Serial Number of board: $serialnumber;\n
          					  Number Channels: $numchannels:\n
          					  Name: $contactname;\n
          					  Company: $companyname;\n
          					  Address: $contactaddress;\n
          					  Phone: $contactphone;\n
          					  E-mail: $contactemail;\n
          					  Comment: $briefdescr";
          		if ($contactemail!='')
          			$fromaddress="From:".$contactemail;
          		else
          			$fromaddress="From:voicelant";
//          		echo "$mailcontent<br>";

          		if (mail($toaddress,$subject,$mailcontent,$fromaddress)){
          			echo "<h3>Order for registration submitted</h3>";
          			$strresmail="true";
          		} else {
          			echo "<h3>Order for registration not submitted</h3>";
          		}
          		$db=mysql_connect("localhost","voicelan_typik","rkjylfqr") or die ("Could not connect: ".mysql_error());
          		mysql_select_db("voicelan_VL",$db);
//          		$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,serialnum,numchannels,plugin,request,service,regkey,scenario,resultmail)
          		$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,serialnum,numchannels,resultmail)
          		values ('$toaddress','$subject','$contactname','$companyname','$contactaddress','$contactphone','$contactemail','$briefdescr','$serialnumber','$numchannels','$strresmail')";
          		//echo $query;
          		$dbresult=mysql_query($query) or die (mysql_error());

          		break;
          	case '1':
          		extract($_REQUEST);
          		$toaddress="order@voicelant.com";
          		$subject="Voicelant-Kit";
          		$mailcontent="Name: $contactname;\n
          					  Company: $companyname;\n
          					  Address: $contactaddress;\n
          					  Phone: $contactphone;\n
          					  E-mail: $contactemail;\n
          					  Comment: $briefdescr";
          		if ($contactemail!='')
          			$fromaddress="From:".$contactemail;
          		else
          			$fromaddress="From:voicelant";
//          		echo "$mailcontent<br>";

          		if (mail($toaddress,$subject,$mailcontent,$fromaddress)){
          			echo "<h3>Order for Voicelant-Kit submitted</h3>";
          			$strresmail="true";
          		} else {
          			echo "<h3>Order for Voicelant-Kit not submitted</h3>";
          		}
          		$db=mysql_connect("localhost","voicelan_typik","rkjylfqr") or die ("Could not connect: ".mysql_error());
          		mysql_select_db("voicelan_VL",$db);
//          		$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,serialnum,numchannels,plugin,request,service,regkey,scenario,resultmail)
          		$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,resultmail)
          		values ('$toaddress','$subject','$contactname','$companyname','$contactaddress','$contactphone','$contactemail','$briefdescr','$strresmail')";
          		//echo $query;
          		$dbresult=mysql_query($query) or die (mysql_error());
          		break;
          	case '2':
          		extract($_REQUEST);
          		$toaddress="order@voicelant.com";
          		$subject="Voicelant-Demo";
          		$mailcontent="Serial Number of board: $serialnumber;\n
          					  Number Channels: $numchannels:\n
          					  Name: $contactname;\n
          					  Company: $companyname;\n
          					  Address: $contactaddress;\n
          					  Phone: $contactphone;\n
          					  E-mail: $contactemail;\n
          					  Comment: $briefdescr";
          		if ($contactemail!='')
          			$fromaddress="From:".$contactemail;
          		else
          			$fromaddress="From:voicelant";
//          		echo "$mailcontent<br>";
          		if (mail($toaddress,$subject,$mailcontent,$fromaddress)){
          			echo "<h3>Order for Voicelant-Demo submitted</h3>";
          			$strresmail="true";
          		} else {
          			echo "<h3>Order for Voicelant-Demo not submitted</h3>";
          		}
          		$db=mysql_connect("localhost","voicelan_typik","rkjylfqr") or die ("Could not connect: ".mysql_error());
          		mysql_select_db("voicelan_VL",$db);
//          		$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,serialnum,numchannels,plugin,request,service,regkey,scenario,resultmail)
          		$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,serialnum,numchannels,resultmail)
          		values ('$toaddress','$subject','$contactname','$companyname','$contactaddress','$contactphone','$contactemail','$briefdescr','$serialnumber','$numchannels','$strresmail')";
          		//echo $query;
          		$dbresult=mysql_query($query) or die (mysql_error());
          		break;
          	case '3':
          		extract($_REQUEST);
          		$toaddress="order@voicelant.com";
	          	$subject="Voicelant-Plugin";
	          	$mailcontent="Plugin: $plugin_array[$idplugin];\n
	          				  Name: $contactname;\n
	          				  Company: $companyname;\n
	          				  Address: $contactaddress;\n
	          				  Phone: $contactphone;\n
	          				  E-mail: $contactemail;\n
	          				  Comment: $briefdescr";
	          	if ($contactemail!='')
	          		$fromaddress="From:".$contactemail;
	          	else
	          		$fromaddress="From:voicelant";
//		        echo "$mailcontent<br>";
		        $resmail=mail($toaddress,$subject,$mailcontent,$fromaddress);
/*          		switch ($idplugin){          		case '1':
          			echo "<h3>$plugin_array[$idplugin]</h3>";
          			echo "<h5><a href='/download/mssql.pvt'>скачать</a></h5>";
          			break;
          		case '2';
	          		echo "<h3>$plugin_array[$idplugin]</h3>";
          			echo "<a href='/download/vbscript.pvt'>скачать</a>";
          			break;
          		case '3':
	          		echo "<h3>$plugin_array[$idplugin]</h3>";
          			echo "<a href='/download/dll.pvt'>скачать</a>";
          			break;
          		default:
                   if ($resmail){
		          		echo "<h2>$plugin_array[$idplugin]</h2>";
		          		echo "<h3>Заказ отправлен</h3>";
		          	} else {
		          		echo "<h2>$plugin_array[$idplugin]</h2>";
		          		echo "<h3>Заказ не отправлен</h3>";
		          	}
          		}
*/
				if ($resmail){
		          		echo "<h2>$plugin_array[$idplugin]</h2>";
		          		echo "<h3>Order submitted</h3>";
		          		$strresmail="true";
		          	} else {
		          		echo "<h2>$plugin_array[$idplugin]</h2>";
		          		echo "<h3>Order not submitted</h3>";
		          	}
		        $db=mysql_connect("localhost","voicelan_typik","rkjylfqr") or die ("Could not connect: ".mysql_error());
          		mysql_select_db("voicelan_VL",$db);
	          	$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,plugin,resultmail)
          		values ('$toaddress','$subject','$contactname','$companyname','$contactaddress','$contactphone','$contactemail','$briefdescr','$plugin_array[$idplugin]','$strresmail')";
          		//echo $query;
          		$dbresult=mysql_query($query) or die (mysql_error());
          		break;
          	case '4':
          		extract($_REQUEST);
          		$toaddress="order@voicelant.com";
          		$subject="Voicelant-Request Plugin";
          		$mailcontent="Request: $reqplugin;\n
          					  Name: $contactname;\n
          					  Company: $companyname;\n
          					  Address: $contactaddress;\n
          					  Phone: $contactphone;\n
          					  E-mail: $contactemail;\n
          					  Comment: $briefdescr";
          		if ($contactemail!='')
          			$fromaddress="From:".$contactemail;
          		else
          			$fromaddress="From:voicelant";
//	          	echo "$mailcontent<br>";
          		if (mail($toaddress,$subject,$mailcontent,$fromaddress)){
          			echo "<h3>Order submitted</h3>";
          			$strresmail="true";
          		} else {
          			echo "<h3>Order not submitted</h3>";
          		}
          		$db=mysql_connect("localhost","voicelan_typik","rkjylfqr") or die ("Could not connect: ".mysql_error());
          		mysql_select_db("voicelan_VL",$db);
//          		$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,serialnum,numchannels,plugin,request,service,regkey,scenario,resultmail)
          		$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,request,resultmail)
          		values ('$toaddress','$subject','$contactname','$companyname','$contactaddress','$contactphone','$contactemail','$briefdescr','$reqplugin','$strresmail')";
          		//echo $query;
          		$dbresult=mysql_query($query) or die (mysql_error());
          		break;
          	case '5':
          		extract($_REQUEST);
          		$toaddress="order@voicelant.com";
          		$subject="Voicelant-Service";
          		$mailcontent="Service: $service_array[$idservice];\n
          					  Request: $reqservice;\n
          					  Name: $contactname;\n
          					  Company: $companyname;\n
          					  Address: $contactaddress;\n
          					  Phone: $contactphone;\n
          					  E-mail: $contactemail;\n
          					  Comment: $briefdescr";
          		if ($contactemail!='')
          			$fromaddress="From:".$contactemail;
          		else
          			$fromaddress="From:voicelant";
//	          	echo "$mailcontent<br>";
          		if (mail($toaddress,$subject,$mailcontent,$fromaddress)){          			echo "<h2>$service_array[$idservice]</h2>";
          			echo "<h3>Order submitted</h3>";
          			$strresmail="true";
          		} else {
          			echo "<h2>$service_array[$idservice]</h2>";
          			echo "<h3>Order not submitted</h3>";
          		}
          		$db=mysql_connect("localhost","voicelan_typik","rkjylfqr") or die ("Could not connect: ".mysql_error());
          		mysql_select_db("voicelan_VL",$db);
//          		$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,serialnum,numchannels,plugin,request,service,regkey,scenario,resultmail)
          		$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,request,service,resultmail)
          		values ('$toaddress','$subject','$contactname','$companyname','$contactaddress','$contactphone','$contactemail','$briefdescr','$reqservice','$service_array[$idservice]','$strresmail')";
          		//echo $query;
          		$dbresult=mysql_query($query) or die (mysql_error());
          		break;
          	case '6':
          		extract($_REQUEST);
          		$toaddress="order@voicelant.com";
          		$subject="Voicelant-Support";
          		$mailcontent="Register Key: $regkey;\n
          					  Name: $contactname;\n
          					  Company: $companyname;\n
          					  Address: $contactaddress;\n
          					  Phone: $contactphone;\n
          					  E-mail: $contactemail;\n
          					  Comment: $briefdescr";
          		if ($contactemail!='')
          			$fromaddress="From:".$contactemail;
          		else
          			$fromaddress="From:voicelant";
//          		echo "$mailcontent<br>";
          		if (mail($toaddress,$subject,$mailcontent,$fromaddress)){          			echo "<h3>Order submitted</h3>";
          			$strresmail="true";          		} else {          			echo "<h3>Order not submitted</h3>";          		}
          		$db=mysql_connect("localhost","voicelan_typik","rkjylfqr") or die ("Could not connect: ".mysql_error());
          		mysql_select_db("voicelan_VL",$db);
//          		$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,serialnum,numchannels,plugin,request,service,regkey,scenario,resultmail)
          		$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,regkey,resultmail)
          		values ('$toaddress','$subject','$contactname','$companyname','$contactaddress','$contactphone','$contactemail','$briefdescr','$regkey','$strresmail')";
          		//echo $query;
          		$dbresult=mysql_query($query) or die (mysql_error());
          		break;
          	case '7':
          		extract($_REQUEST);
          		$toaddress="order@voicelant.com";
          		$subject="Voicelant-Scenario";
          		$mailcontent="Scenario: $scen_array[$idscen];\n
          					  Request: $reqscen;\n
          					  Name: $contactname;\n
          					  Company: $companyname;\n
          					  Address: $contactaddress;\n
          					  Phone: $contactphone;\n
          					  E-mail: $contactemail;\n
          					  Comment: $briefdescr";
          		if ($contactemail!='')
          			$fromaddress="From:".$contactemail;
          		else
          			$fromaddress="From:voicelant";
//	          	echo "$mailcontent<br>";
          		if (mail($toaddress,$subject,$mailcontent,$fromaddress)){          			echo "<h2>$scen_array[$idscen]</h2>";
          			echo "<h3>Order submitted</h3>";
          			$strresmail="true";
          		} else {
          			echo "<h2>$scen_array[$idscen]</h2>";
          			echo "<h3>Order not submitted</h3>";
          		}
          		$db=mysql_connect("localhost","voicelan_typik","rkjylfqr") or die ("Could not connect: ".mysql_error());
          		mysql_select_db("voicelan_VL",$db);
//          		$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,serialnum,numchannels,plugin,request,service,regkey,scenario,resultmail)
          		$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,request,scenario,resultmail)
          		values ('$toaddress','$subject','$contactname','$companyname','$contactaddress','$contactphone','$contactemail','$briefdescr','$reqscen','$scen_array[$idscen]','$strresmail')";
          		//echo $query;
          		$dbresult=mysql_query($query) or die (mysql_error());
          		break;
          	case '7777':
          		extract($_REQUEST);
          		$toaddress="contact@voicelant.com";
          		$subject="Voicelant-Contact";
          		$mailcontent="Name: $contactname;\n
          					  Company: $companyname;\n
          					  Address: $contactaddress;\n
          					  Phone: $contactphone;\n
          					  E-mail: $contactemail;\n
          					  Comment: $briefdescr";
          		if ($contactemail!='')
          			$fromaddress="From:".$contactemail;
          		else
          			$fromaddress="From:voicelant";
//          		echo "$mailcontent<br>";
          		if (mail($toaddress,$subject,$mailcontent,$fromaddress)){
          			echo "<h3>Feedback submitted</h3>";
          			$strresmail="true";
          		} else {
          			echo "<h3>Feedback not submitted</h3>";
          		}
               	$db=mysql_connect("localhost","voicelan_typik","rkjylfqr") or die ("Could not connect: ".mysql_error());
          		mysql_select_db("voicelan_VL",$db);
//          		$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,serialnum,numchannels,plugin,request,service,regkey,scenario,resultmail)
          		$query="insert into shots (toaddress,subject,name,company,address,phone,email,comment,resultmail)
          		values ('$toaddress','$subject','$contactname','$companyname','$contactaddress','$contactphone','$contactemail','$briefdescr','$strresmail')";
          		//echo $query;
          		$dbresult=mysql_query($query) or die (mysql_error());          }
       } else {
			if ($name_order!=''){
				echo '<script language="JavaScript">
				function trim(str) {
    				var newstr = str.replace(/^\s*(.+?)\s*$/, "$1");
				    if (newstr == " ") {
				        return "";
				    }
				    return newstr;
				}
				function drop_spaces(str) {
    				var newstr = trim(str);
    				return newstr.replace(/(\s)+/g, "");
				}
				function check_email(email) {
    				var template = /^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z])+$/;
				    email = drop_spaces(email);
    				if (template.test(email)) {
        				return true;
    				}
    				return false;
				}
				function isEmpty(str) {
				   for (var i = 0; i < str.length; i++)
				      if (" " != str.charAt(i))
				          return false;
				      return true;
				}
				function checkform(f) {
					var errMSG = "";
				  	for (var i = 0; i<f.elements.length; i++)
				    	if (null!=f.elements[i].getAttribute("required")){
				        	if (isEmpty(f.elements[i].value)){
				            	errMSG += "  " + f.elements[i].name + "\n";
				            } else {				            	if (f.elements[i].name=="contactemail"){				            		if (!check_email(f.elements[i].value)){				            			errMSG += "  " + f.elements[i].name + "\n";				            		}				            	}				            }
				        }
				    if ("" != errMSG) {
				      	alert("Неправильно заполнены обязательные поля:\n" + errMSG);
				       	return false;
				    }
                }
				</script>
				';
				switch($name_order){				case '0':
					echo "<h2>Register Voicelant</h2>";
					//<li>1 канал - 89 USD</li>
					echo "<p>Cost of software licenses Voicelant depends on the number of channels:
							<ul>
							<li>2 channels - 170 USD</li>
							<li>4 channels - 320 USD</li>
							<li>8 channels - 520 USD</li>
							<li>16 channels - 950 USD</li>
							<li>30 channels - 1600 USD</li>
							<li>60 channels - 2600 USD</li>
							<li>120 channels - 4100 USD</li>
							<li>>120 channels - <a href='contacts.html'>contact us</a></li>
							</ul>
							</p>
							<p>
							<i><FONT color = #ff0077>
							If you decide to register Voicelant fill out the form and send the order.
							We'll send you the necessary documents.
							</FONT></i>
							</P>";
					echo "<form action='order.php' method='post' name='mailorder' onSubmit = 'return checkform(this)'>";
					echo "<input type='hidden' name='nameorder' value=$name_order>";
					echo "<input type='hidden' name='runorder' value=$name_order>";
                	echo "  <table class=norm border=0>
                      	<tr>
                      		<td>Serial number of board Dialogic:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='serialnumber' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Number of channels:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='numchannels' size='10' required></td>
                      	</tr>
                      	<tr>
                      		<td>Name:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Company:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='companyname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Address:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactaddress' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Phone:</td>
                      		<td><input type='text' name='contactphone' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>E-mail:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactemail' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Comments, suggestions:</td>
                      		<td><textarea cols='40' rows='6' name='briefdescr'></textarea></td>
                      	</tr>
                      	<tr align='left'>
                      		<td colspan=2><sup><FONT color = #ff0077>*</FONT></sup><i> - required fields.</i></td>
                      	</tr>
                      	";
                   	echo"<tr>
                      		<td colspan=2 align=center><input type='submit' value='Submit Order'></td>
                      	</tr>";

                   	echo "</table>";
                   	echo"</form>";
					//echo "<P class=center><a href=download/setupvl.exe class=nav>скачать бесплатно</a></P>";
					break;
				case '1':
					echo "<h2>Starter complect: Vocelant-Kit</h2>";
					echo"<p>Designed for those who have not yet bought
						the Boards Dialogic, but would like to look at
						the possibilities Voicelant.
						Starter kit contains all the necessary tools
						for creating and testing scripts without
						the use of phone cards -
						a visual script editor <a href=features.html#visualvt>VisualVT</a>,
						a program of testing scenarios <a href=features.html#displayvt>DisplayVT</a>,
						a set of core <a href=features.html#plugins>plug-ins</a> and a set of scenarios and examples.
							<i><FONT color = #ff0077>Will be sent free by e-mail after registration.</FONT></i>
						 </p>";
					echo "<form action='order.php' method='post' name='mailorder' onSubmit = 'return checkform(this)'>";
					echo "<input type='hidden' name='nameorder' value=$name_order>";
					echo "<input type='hidden' name='runorder' value=$name_order>";
                	echo "  <table class=norm border=0>
                      	<tr>
                      		<td>Name:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Company:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='companyname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Address:</td>
                      		<td><input type='text' name='contactaddress' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>Phone:</td>
                      		<td><input type='text' name='contactphone' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>E-mail:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactemail' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Write a summary, for what purpose you want to use Voicelant:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><textarea cols='40' rows='6' name='briefdescr' required></textarea></td>
                      	</tr>
                      	<tr align='left'>
                      		<td colspan=2><sup><FONT color = #ff0077>*</FONT></sup><i> - required fields.</i></td>
                      	</tr>
                      	";
                   echo"<tr>
                      		<td colspan=2 align=center><input type='submit' value='Submit Order'></td>
                      	</tr>";

                   echo "</table>";
                   echo"</form>";
				//echo "<P class=center><a href=download/startkit.exe class=nav>скачать бесплатно</a></P>";
					break;
				case '2':
					echo "<h2>Voicelant-Demo</h2>";
					echo "<P>Demo version for those who have already bought a Dialogic card
						and wants to get acquainted with all the features Voicelant.
						It has some limitations compared to a working version,
						such as the 30-day free trial period and the number of calls
						for each channel is not more than 10, then you must restart the program.
							<br><br>
							<i><FONT color = #ff0077>If you decide to use Voicelant,
							you must determine the number of licenses and
							to purchase a <a href=order.php?nameorder=0>registration key</a>,
							which is entered when you start Voicelant, then all restrictions will be lifted.
							After 30 days the  Voicelant cannot be used.</FONT></i>
							</p>";
					echo "<form action='order.php' method='post' name='mailorder' onSubmit = 'return checkform(this)'>";
					echo "<input type='hidden' name='nameorder' value=$name_order>";
					echo "<input type='hidden' name='runorder' value=$name_order>";
                	echo "  <table class=norm border=0>
                      	<tr>
                      		<td>Serial number of board Dialogic:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='serialnumber' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Number of channels:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='numchannels' size='10' required></td>
                      	</tr>
                      	<tr>
                      		<td>Name:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Company:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='companyname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Address:</td>
                      		<td><input type='text' name='contactaddress' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>Phone:</td>
                      		<td><input type='text' name='contactphone' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>E-mail:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactemail' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Write a summary, for what purpose you want to use Voicelant:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><textarea cols='40' rows='6' name='briefdescr' required></textarea></td>
                      	</tr>
                      	<tr align='left'>
                      		<td colspan=2><sup><FONT color = #ff0077>*</FONT></sup><i> - required fields.</i></td>
                      	</tr>
                      	";
                   	echo"<tr>
                      		<td colspan=2 align=center><input type='submit' value='Submit Order'></td>
                      	</tr>";

                   	echo "</table>";
                   	echo"</form>";
					//echo "<P class=center><a href=download/setupvl.exe class=nav>скачать бесплатно</a></P>";
					break;
				case '3':
					echo "<h2>Plugins Voicelant</h2>";
					echo "<P>Plugins increase the ability of the system. They are used for transmitting, receiving, processing and data conversion.
							<br><br>
							<i><FONT color = #ff0077>This page provides ready plugins Voicelant, a list which is continuously replenished.<br>
							Some are included in the distribution Voicelant and are supplied free of charge. Others can be ordered at an affordable price.</FONT></i>
							</p>";
					echo "<form action='order.php' method='post' name='mailorder' onSubmit = 'return checkform(this)'>";
					echo "<input type='hidden' name='nameorder' value=$name_order>";
					echo "<input type='hidden' name='runorder' value=$name_order>";
                	echo "  <table class=norm border=0>
                      	<tr>
                      		<td>Select the plug-in for the order:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td>
                      		<select name='idplugin'>";
                      		if (($idplugin=$_REQUEST['idplugin'])!=''){
                      			echo "<option selected value=$idplugin>$plugin_array[$idplugin]</option>";
                      		}
                			foreach($plugin_array as $key=>$value){                				echo "<option value=$key>$value</option>";                			}
                      		echo"</select>
                      		</td>
                      	</tr>
                      	<tr>
                      		<td>Name:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Company:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='companyname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Address:</td>
                      		<td><input type='text' name='contactaddress' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>Phone:</td>
                      		<td><input type='text' name='contactphone' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>E-mail:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactemail' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Write a summary, for what purpose you use Voicelant:</td>
                      		<td><textarea cols='40' rows='6' name='briefdescr'></textarea></td>
                      	</tr>
                      	<tr align='left'>
                      		<td colspan=2><sup><FONT color = #ff0077>*</FONT></sup><i> - required fields.</i></td>
                      	</tr>
                      	";
                   	echo"<tr>
                      		<td colspan=2 align=center><input type='submit' value='Submit Order'></td>
                      	</tr>";

                   	echo "</table>";
                   	echo"</form>";
					//echo "<P class=center><a href=download/setupvl.exe class=nav>скачать бесплатно</a></P>";
					break;
				case '4':
					echo "<h2>Order for developing custom plug-in Voicelant</h2>";
					echo "<P>Plugins increase the ability of the system. They are used for transmitting, receiving, processing and data conversion.
							<br><br>
							<i><FONT color = #ff0077>
							To develop a new plugin Voicelant needs to describe the requirements for it,
							ie, what should be the input and output parameters and basic functions.
							If the creation of such a plug-in is possible, then we can discuss with the customer time and price.
							</FONT></i>
							</p>";
					echo "<form action='order.php' method='post' name='mailorder' onSubmit = 'return checkform(this)'>";
					echo "<input type='hidden' name='nameorder' value=$name_order>";
					echo "<input type='hidden' name='runorder' value=$name_order>";
                	echo "  <table class=norm border=0>
                      	<tr>
                      		<td>Describe the basic requirements for a new plugin Voicelant:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><textarea cols='60' rows='10' name='reqplugin' required></textarea></td>
                      	</tr>
                      	<tr>
                      		<td>Name:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Company:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='companyname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Address:</td>
                      		<td><input type='text' name='contactaddress' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>Phone:</td>
                      		<td><input type='text' name='contactphone' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>E-mail:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactemail' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Write a summary, for what purpose you use Voicelant:</td>
                      		<td><textarea cols='40' rows='6' name='briefdescr'></textarea></td>
                      	</tr>
                      	<tr align='left'>
                      		<td colspan=2><sup><FONT color = #ff0077>*</FONT></sup><i> - required fields.</i></td>
                      	</tr>
                      	";
                   	echo"<tr>
                      		<td colspan=2 align=center><input type='submit' value='Submit Order'></td>
                      	</tr>";

                   	echo "</table>";
                   	echo"</form>";
					//echo "<P class=center><a href=download/setupvl.exe class=nav>скачать бесплатно</a></P>";
					break;
				case '5':
					echo "<h2>Services related to Voicelant</h2>";
					echo "<P>
							<i><FONT color = #ff0077>
							You can order from us the additional services associated with Voicelant.
							To do this, select the type of service and briefly describe the basic requirements.
							Specific conditions for services are negotiated with the client separately.
							</FONT></i>
						 </P>";
					echo "<form action='order.php' method='post' name='mailorder' onSubmit = 'return checkform(this)'>";
					echo "<input type='hidden' name='nameorder' value=$name_order>";
					echo "<input type='hidden' name='runorder' value=$name_order>";
                	echo "  <table class=norm border=0>
                      	<tr>
                      		<td>Select the service for the order:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td>
                      		<select name='idservice' required>";
                      		if (($idservice=$_REQUEST['idservice'])!=''){
                      			echo "<option selected value=$idservice>$service_array[$idservice]</option>";
                      		}
                			foreach($service_array as $key=>$value){
                				echo "<option value=$key>$value</option>";
                			}
                      		echo"</select>
                      		</td>
                      	</tr>
                      	<tr>
                      		<td>Describe the basic requirements for service:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><textarea cols='60' rows='10' name='reqservice' required></textarea></td>
                      	</tr>
                      	<tr>
                      		<td>Name:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Company:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='companyname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Address:</td>
                      		<td><input type='text' name='contactaddress' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>Phone:</td>
                      		<td><input type='text' name='contactphone' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>E-mail:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactemail' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Write a summary, for what purpose you use Voicelant:</td>
                      		<td><textarea cols='40' rows='6' name='briefdescr'></textarea></td>
                      	</tr>
                      	<tr align='left'>
                      		<td colspan=2><sup><FONT color = #ff0077>*</FONT></sup><i> - required fields.</i></td>
                      	</tr>
                      	";
                   	echo"<tr>
                      		<td colspan=2 align=center><input type='submit' value='Submit Order'></td>
                      	</tr>";

                   	echo "</table>";
                   	echo"</form>";
					//echo "<P class=center><a href=download/setupvl.exe class=nav>скачать бесплатно</a></P>";
					break;
				case '6':
					echo "<h2>Order of technical support Voicelant</h2>";
					echo "<P>We provide customized technical support Voicelant:
							by e-mail <a href=mailto:support@voicelant.com?subject=Voicelant>
							<FONT COLOR='#ff0077'><B><I>support@voicelant.com</I></B></FONT></a>;<br>
							The cost of technical support: 15% of the cost of license per year.
							<br><br>
							<i><FONT color = #ff0077>
							If you decide to order a technical support Voicelant fill out the form and send the order.
							We will contact you to confirm your order.
							</FONT></i>
							</P>";
					echo "<form action='order.php' method='post' name='mailorder' onSubmit = 'return checkform(this)'>";
					echo "<input type='hidden' name='nameorder' value=$name_order>";
					echo "<input type='hidden' name='runorder' value=$name_order>";
                	echo "  <table class=norm border=0>
                      	<tr>
                      		<td>Registration key Voicelant:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='regkey' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Name:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Company:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='companyname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Address:</td>
                      		<td><input type='text' name='contactaddress' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>Phone:</td>
                      		<td><input type='text' name='contactphone' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>E-mail:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactemail' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Write a summary, for what purpose you use Voicelant:</td>
                      		<td><textarea cols='40' rows='6' name='briefdescr'></textarea></td>
                      	</tr>
                      	<tr align='left'>
                      		<td colspan=2><sup><FONT color = #ff0077>*</FONT></sup><i> - required fields.</i></td>
                      	</tr>
                      	";
                   	echo"<tr>
                      		<td colspan=2 align=center><input type='submit' value='Submit Order'></td>
                      	</tr>";

                   	echo "</table>";
                   	echo"</form>";
					//echo "<P class=center><a href=download/setupvl.exe class=nav>скачать бесплатно</a></P>";
					break;
				case '7':
					echo "<h2>Ready for use scenarios Voicelant</h2>";
					echo '
							<p>Ready Voicelant scenario may represent a
							entire large application <a href="applications.html">example</a>,
							and can be completed in small fragments of a scenario
							perform useful functions, such as, "transfer call".<br>
							You can send us your scenario, which we will publish it on your terms.
							<br><br>You can also order a complete system of "turnkey"
							comprising:</p>
							<ul>
							<li>computer-server system with the relevant parameters;</li>
							<li>boards with the necessary number of channels;</li>
							<li>software Voicelant;</li>
							<li>set of scenarios Voicelant;</li>
							<li>set of plugins Voicelant;</li>
							<li>library voice prompts;</li>
							<li>package of scripts for creating database objects;</li>
							<li>additional software required for system;</li>
							</ul>
							<br>
							<p>
							<i><FONT color = #ff0077>
							To order a product you have to select the scenario and send the order.
							You may also wish to briefly describe the modification of the finished scenario to your needs.
							Specific conditions for the modification of scenarios are discussed individually.
							</FONT></i>
							</p>
						 ';
					echo "<form action='order.php' method='post' name='mailorder' onSubmit = 'return checkform(this)'>";
					echo "<input type='hidden' name='nameorder' value=$name_order>";
					echo "<input type='hidden' name='runorder' value=$name_order>";
                	echo "  <table class=norm border=0>
                      	<tr>
                      		<td>Select a ready scenario for order:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td>
                      		<select name='idscen' required>";
                      		if (($idscen=$_REQUEST['idscen'])!=''){
                      			echo "<option selected value=$idscen>$scen_array[$idscen]</option>";
                      		}
                			foreach($scen_array as $key=>$value){
                				echo "<option value=$key>$value</option>";
                			}
                      		echo"</select>
                      		</td>
                      	</tr>
                      	<tr>
                      		<td>Describe additional requirements for the scenario:</td>
                      		<td><textarea cols='60' rows='10' name='reqscen'></textarea></td>
                      	</tr>
                      	<tr>
                      		<td>Name:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Company:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='companyname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Address:</td>
                      		<td><input type='text' name='contactaddress' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>Phone:</td>
                      		<td><input type='text' name='contactphone' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>E-mail:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactemail' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Write a summary, for what purpose you want to use Voicelant:</td>
                      		<td><textarea cols='40' rows='6' name='briefdescr'></textarea></td>
                      	</tr>
                      	<tr align='left'>
                      		<td colspan=2><sup><FONT color = #ff0077>*</FONT></sup><i> - required fields.</i></td>
                      	</tr>
                      	";
                   	echo"<tr>
                      		<td colspan=2 align=center><input type='submit' value='Submit Order'></td>
                      	</tr>";

                   	echo "</table>";
                   	echo"</form>";
					//echo "<P class=center><a href=download/setupvl.exe class=nav>скачать бесплатно</a></P>";
					break;
/*				case '8':
					echo '<h2>Готовые системы на базе Voicelant "под ключ"</h2>';
					echo '<P>
							В настоящее время мы можем предложить Вам готовые "коробочные" системы на базе Voicelant,
							которые содержат все необходимое для начала работы.
							В комплект поставки входит:
							<ul>
							<li>Сервер системы, комплектация которого соответствует требованиям системы</li>
							<li>Программа Voicelant</li>
							<li>Пакет сценариев Voicelant, реализующий функции выбранной системы</li>
							<li>Необходимые скрипты для создания объектов базы данных базы данных</li>
							</ul>
							<br><br>
							<i><FONT color = #ff0077>
							Вы можете заказать у нас эти готовые сценарии.
							Для этого выберите интересующий Вас сценарий и отправьте заказ.
							Также Вы можете кратко описать пожелания по модификации готового сценария по Вашим требованиям.
							Конкретные условия по модификации сценария обговариваются индивидуально.
							</FONT></i>
						 </P>';
					echo "<form action='order.php' method='post' name='mailorder' onSubmit = 'return checkform(this)'>";
					echo "<input type='hidden' name='nameorder' value=$name_order>";
					echo "<input type='hidden' name='runorder' value=$name_order>";
                	echo "  <table class=norm border=0>
                      	<tr>
                      		<td>Выберите готовый сценарий для заказа:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td>
                      		<select name='idscen' required>";
                      		if (($idscen=$_REQUEST['idscen'])!=''){
                      			echo "<option selected>$scen_array[$idscen]</option>";
                      		}
                			foreach($scen_array as $key=>$value){
                				echo "<option value=$key>$value</option>";
                			}
                      		echo"</select>
                      		</td>
                      	</tr>
                      	<tr>
                      		<td>Опишите дополнительные требования к сценарию:</td>
                      		<td><textarea cols='60' rows='10' name='reqscen'></textarea></td>
                      	</tr>
                      	<tr>
                      		<td>Фамилия, имя:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Компания (предприятие):<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='companyname' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Адрес:</td>
                      		<td><input type='text' name='contactaddress' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>Контактный телефон:</td>
                      		<td><input type='text' name='contactphone' size='30'></td>
                      	</tr>
                      	<tr>
                      		<td>E-mail:<sup><FONT color = #ff0077>*</FONT></sup></td>
                      		<td><input type='text' name='contactemail' size='30' required></td>
                      	</tr>
                      	<tr>
                      		<td>Напишите кратко, для каких целей <br>Вы хотите использовать Voicelant:</td>
                      		<td><textarea cols='40' rows='6' name='briefdescr'></textarea></td>
                      	</tr>
                      	<tr align='left'>
                      		<td colspan=2><sup><FONT color = #ff0077>*</FONT></sup><i> - поля, обязательные для заполнения.</i></td>
                      	</tr>
                      	";
                   	echo"<tr>
                      		<td colspan=2 align=center><input type='submit' value='Отправить заказ'></td>
                      	</tr>";

                   	echo "</table>";
                   	echo"</form>";
					//echo "<P class=center><a href=download/setupvl.exe class=nav>скачать бесплатно</a></P>";
					break;
*/
				}			} else {
				echo "<form action='order.php' method='get' name='formorder'>";
                echo "  <table class=norm border=0>
                      	<tr>
                      		<td>What do you want to order:</td>
                      		<td><select class=normnorm name='nameorder' size='8' onchange='return document.formorder.submit();'>";
                //echo "      	<option>select</option>";
				echo ' 			<option value=0>Voicelant(registration)</option>
                      			<option value=1>Voicelant - Kit</option>
                      			<option value=2>Voicelant - Demo</option>
                      			<option value=7>Ready scenario Voicelant</option>
                      			<option value=3>Standard plug-in Voicelant</option>
                      			<option value=4>Development of custom plug-in Voicelant</option>
                      			<option value=5>Services related to Voicelant</option>
                      			<option value=6>Technical support Voicelant</option>
                      			</select>
                      		</td>
                      	</tr>';
//                   echo"<tr>
//                      		<td colspan=2 align=center><input type='submit' value='Отправить заказ'></td>
//                      	</tr>";

                   echo "</table>";
                   echo"</form>";
             }
    	}
?>
	             </TD>
                   </TR>
                 </TBODY>
		 </TABLE>
               </TD>
             </TR>
           </TBODY>
	   </TABLE>
           </P>
<BR>
<!-- story -->
<!-- end story --></TD></TR></TBODY></TABLE></TD>
<!-- end right column --></TR>
  <TR>
    <TD align=middle colSpan=2><!-- footer -->
  <TR>
    <TD align=middle colSpan=2><SPAN class=footer>© Copyright 2008-2009 - <A
      href="mailto:contact@voicelant.com">Voicelant</A> </SPAN></TD></TR><!-- end footer --></TBODY></TABLE><!-- end body table --></BODY></HTML>
