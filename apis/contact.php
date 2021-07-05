<?php
class Contact extends Send_Message{

    public function contact_us(){
        if(isset($_POST['contact'])){
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $to = 'info@jaslineentertainment.com';

            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From:  ' . $name . ' <' . $email .'> ' . " \r\n" . 
                    'Reply-To: '.  $email . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

            $mail = mail($to, $subject, $message, $headers);
            if($mail){
                echo "<script>alert('Success')</script>";
            }else{  
                echo "<script>alert('There was an error, please try again')</script>";
                echo "<script>location.href=''</script>";
            } 
                    
            }
        
    }
}

    $new_contact = new Contact();
    $contact = $new_contact->contact_us();
?>

