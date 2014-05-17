pt-et.info
==========

Notes
--------
Εκτός του TicketServer.php στα υπόλοιπα αρχεία υπάρχουν αποσπάσματα του κώδικα που χρησιμοποιεί η σελίδα.
Συγκεκριμένα τα αρχεία περιλαμβάνουν:
TicketServer.php - Ορισμός του web service. Ως έχει, υπάρχει μόνο μια μέθοδος η getTicket που επιστρέφει το εισιτήριο.
TicketRequest.php - Consume του web service σε php.
ValidateTicket.php - Ο έλεγχος του εισιτήριου όπως γίνετε στην ιστοσελίδα.

Η υλοποίηση της ιδέας γίνετε μέσω πολύ απλού κώδικα, σε πραγματικές συνθήκες χρειάζεται να γίνετε έλεγχος εγκυρότητας πριν την έκδοση εισιτηρίου, ενώ και ο ελέγχος του εισιτηρίου πρέπει να υλοποιείται μέσω διαφορετικού web service στο οποίο θα έχουν πρόσβαση μόνο οι οργανισμοί. Επιπλέον χρειάζεται ισχυρότερο αλγόριθμο κρυπτογράφησης.
To nusoap διαθέτει έναν αυτόματο μηχανισμό παραγωγής του WSDL της υπηρεσίας, ωστόσο επειδή ήθελα να το κάνω μόνος το άφησα, με αποτέλεσμα μέχρι στιγμής να μην υπάρχει το WSDL.

Με λίγα λόγια πρόκειται για μια πολύ απλή υλοποίηση της ιδέας που περιγράφουμε στο doc του διαγωνισμού. Αν χρειαστείται όλα τα source files του pt-et.info στείλτε μου ένα e-mail.
