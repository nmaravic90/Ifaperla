
<?php 
	$to = "office@ifaperla.rs";
    $subject="prijava za obavestenja";
	$from = $_POST['email'];
	$headers = "From:" . $from;
	
	
	
   
    
    $message = 'E-mail:'.$from ;
	mail($to,$subject,$message,$headers);
    
	header("location:../pocetna.php"); 
	
	
	
?>