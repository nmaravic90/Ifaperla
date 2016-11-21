<?php 

    $to = "office@ifaperla.rs"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['ime'];
   
	
	
	
    $subject = $_POST['naslov'];
    
    $message =$_POST['poruka'];
    

    $headers = "From:" . $from;
    
   mail($to,$subject,$message,$headers);
     
    
    // You can also use header('Location: thank_you.php'); to redirect to another page.

    header("location:../kontakt.php"); 
	
	
?>