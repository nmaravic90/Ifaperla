
<?php 

   $to = "office@ifaperla.rs"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
   $name = $_POST['ime'];
   $date = $_POST['datum'];
    $phone = $_POST['telefon'];
	$school = $_POST['skola'];
	$zanimanje=$_POST['zanimanje'];
	$sekcija=$_POST['sekcija'];
	$iskustvo=$_POST['iskustvo'];
	
	
	
   // $subject = "Konkurs za audiciju 2016";
    
   $message = 'Ime i prezime'.$name.'Datum rodjenja:'.$date.'E-mail:'.$from.'Telefon'.$phone.'Skola:'.$school.'Sekcija:'.$sekcija.'Zanimanje'.$zanimanje.'Iskustvo:'.$iskustvo. "\n\n" ;
    
   
   // $headers = "From:" . $from;
    
  // mail($to,$subject,$message,$headers);
     
    print($message);

    // You can also use header('Location: thank_you.php'); to redirect to another page.

    //header("location:index.php"); 
	
?>