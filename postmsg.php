<?php

	if(isset($_POST['name']) & isset($_POST['email'])  & isset($_POST['tele']) & isset($_POST['msg'])){
		
		 $name = $_POST['name'];
		 $tele = $_POST['tele'];
		 $email = $_POST['email'];
		 $msg = $_POST['msg'];


		$to = "asshrivastava@adt.ca";
									$from = "$email";
								//	$subject = '.$name';
									
									$message = '
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HomeEsecurity - '.$name.'</title>
</head>

<body style="margin:0px; font-family:Georgia, Times New Roman, Times, serif;">
<div style="padding:10px;">
<h3 style="color:#333; font-family:Roboto,trebuchet ms,serif !important; font-size:28px;">HomeEsecurity - '.$name.'</h3>
<p style="line-height:22px; font-size:16px;">Client Name: '.$name.' <br>
Client Telephone: '.$tele.' 
<br>Client Email Address: '.$email.'<br>
<br>Client Message: '.$msg.'
<br><br></p>

</div> 
</body>
</html>';
								$headers = "From: $from\n";
								$headers .= "MIMI-Version: 1.0\n";
								$headers .= "Content-Type: text/html; charset=iso-8859-1\n";
								
								mail($to, $name, $message, $headers);
	}
?>