<?php
	require_once ('lib/nusoap/nusoap.php'); 
//Δημιουργία soap client
	$client = new nusoap_client('http://pt-et.info/TicketServer.php'); 
//$param = η μεταβλητή στην οποία έχουμε αποθηκευμένες τις παραμέτρους που
//θέλουμε να περάσουμε στην getTicket()
	$ticketText = $client->call('getTicket',$param); 
//$ticketText = το κρυπτογραφήμενο κείμενο του εισιτηρίου	
?>
