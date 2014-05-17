<?php
/*Κάνουμε include το αρχείο SimpleEncryption.php το οποίο περιέχει 2 μεθόδους:
encryptString($String)
decryptString($String)
Πρόκειται για συμμετρική κρυπτογράφηση, το κλειδί είναι hardcoded μέσα στο αρχείο.
*/
	require_once ('SimpleEncryption.php');
//Στην περίπτωση του demo το κρυπτογραφημένο κείμενο του εισιτηρίου βρίσκεται στην $_POST
	$encryptedTicketInformation = $_POST["TicketInfo"];
//Αποκρυπτογραφούμε το εισιτήριο
	$decryptedTicketInformation = decryptString($encryptedTicketInformation);
//Ο πίνακας $TicketInformation θα περιέχει τα στοιχεία του εισιτηρίου
	$ticketInformation = explode("-", $decryptedTicketInformation);
//Εμφανίζουμε τα στοιχεία του εισιτηρίου	
	if(count($ticketInformation) == 6){//(Πολύ απλός έλεγχος, σε ρεαλιστικές συνθήκες δεν αρκεί, για τους σκοπό του demo όμως είναι αρκετός)
		echo 'CompanyID: '.$ticketInformation[0]; 
		echo 'VehicleID: '.$ticketInformation[1];
		echo 'Creation DateTime: '. $ticketInformation[2].'-'.$ticketInformation[3];  
		echo 'Duration: '.$ticketInformation[4]; 
		echo 'PaymentAccount(Hidden): '.$ticketInformation[5]; 
		echo "Με τις παραπάνω πληροφορίες ο ελεγκτής μπορεί πλέον να κρίνει την εγκυρότητα του ηλεκτρονικού εισιτηρίου που του έδειξε ο επιβάτης.";
		echo "Ευχαριστούμε που είδατε όλο το demo :)";	
		} else{
			echo "Σφάλμα: Not A Valid Ticket Type";
			echo 'Δοκίμασε να ελένξεις ένα εισιτήριο <a href ="/ValidationForm.php">ξανά</a>.';			
		}		
?>
