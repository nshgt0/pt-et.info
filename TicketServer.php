<?php
/*Κάνουμε include το αρχείο SimpleEncryption.php το οποίο περιέχει 2 μεθόδους:
encryptString($String)
decryptString($String)
Πρόκειται για συμμετρική κρυπτογράφηση, το κλειδί είναι hardcoded μέσα στο αρχείο.
*/
	require_once ('SimpleEncryption.php');
	require_once ('lib/nusoap/nusoap.php'); 
	
//Δημιουργία soap server
	$server = new soap_server; 
	
//Κάνουμε register την μέθοδο getTicket
	$server->register('getTicket'); 
	
//Η μέθοδος που επιστρέφει το εισιτήριο	
	function getTicket($companyID,$vehicleID,$duration,$paymentAccount){ 
		if(!($companyID && $vehicleID && $duration && $paymentAccount )){ 
			return new soap_fault('Client','','Not enough data.'); 
		} 
		
	//Οι χρονικοί έλεγχοι των εισιτηρίων γίνονται στο timezone του server
		date_default_timezone_set('Europe/Athens'); 
		
	//Στην $date αποθηκεύουμε την ώρα που κλήθηκε η μέδοθος, δηλαδή την ώρα έκδοσης του εισιτηρίου
		$date = date('m/d/Y-H:i', time());		
		
	//Στην $result αποθηκεύουμε την plain text μορφή του εισιτηρίου
	
		$result = $companyID . "-" . $vehicleID . "-" . $date . "-" . $duration . "-" . $paymentAccount; 	
		
	//Τέλος η μέθοδος επιστρέφει την κρυπτογραφημένη μορφή του εισιτηρίου
		return encryptString($result); 
	} 	
	
//Παιρνάμε τα δεδομένα που γίναν post στο web service
	$server->service($HTTP_RAW_POST_DATA); 
	exit(); 
?>  
