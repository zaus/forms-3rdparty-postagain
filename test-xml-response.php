<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?> <env:Envelope xmlns:env="http://www.w3.org/2003/05/soap-envelope" xmlns:ns1="http://tempuri.org/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
	<env:Body>
		<ns1:Response>
			<ns1:Resultstatus><?php echo $_GET['status'] ?></ns1:Resultstatus>
			<ns1:Result><?php echo $_GET['customerid'] ?></ns1:Result>
			<ns1:Description><?php echo $_GET['description'] ?></ns1:Description>
		</ns1:Response>
	</env:Body>
</env:Envelope>