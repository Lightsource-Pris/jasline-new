<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="../img/foya-trans.ico">
    <title>Ticket Verification</title>
</head>
<body>
<?php
session_start();
 $phone =  $_SESSION["phone"];
 $email_add =  $_SESSION["email_add"];
 $amount =  $_SESSION["amount"];
 $full_name =  $_SESSION["full_name"];
 $ticket_type =  $_SESSION["ticket_type"];
 $transid = $_GET['transaction_id'];

 $conn = mysqli_connect('localhost','root','','jasline') or die("Connection Failed!");
 $query = $conn->prepare("INSERT INTO tickets(`name`,`transaction_id`,`amount`,`email_address`,`phone_num`) VALUES(?,?,?,?,?)");
 $query->bind_param("sssss",$full_name,$transid,$amount,$email_add,$phone);
 $query->execute();
 if($query){
      
    $to = $email_add;
    $subject = "FOYA AWARDS Ticket";
    $message = "<html><body>";
    $message .= "<table align='center' cellpadding='0' cellspacing='0' width='100%'><tbody><tr>
        <td align='center' style='background-color:#ffffff' valign='top' width='100%'>

            <table cellpadding='0' cellspacing='0' class='w320' width='600'>
              <tbody>
                <tr>
                  <td align='center' valign='top'>
                    <table cellpadding='0' cellspacing='0' style='margin:0 auto;' width='100%'>
                      <tbody >
                        <tr >
                          <td  style='text-align: center;'>
                          </td>
                        </tr>
                      </tbody>
                    </table>

                    <table cellpadding='0' cellspacing='0' style='background-color:#010101;' width='100%'>
                      <tbody >
                        <tr >
                          <td  style='background-color:#010101;'>
                            <table cellpadding='0' cellspacing='0'  width='100%'>
                              <tbody >
                                <tr >
                                  <td ><img  
                                    src='https://jaslineentertainment.com/img/jasline%20-%20Copy.png'
                                    style='max-width:100%; height:auto; display:block;'>
                                  </td>
                                </tr>
                              </tbody>
                            </table>

                            <table cellpadding='0' cellspacing='0'  width='100%'>
                              <tbody >
                                <tr >
                                  <td class='mobile-spacing' 
                                    style='font-size:40px; font-weight: 600; color: #ffffff; text-align:center;'>
                                    <div class='mobile-br'>
                                    </div>
                                    <span style='color:gold'>FOYA AWARDS</span> <br>
                                    <span style='font-size:35px' id='first_name'>Hey $full_name !
                                    </span>
                                  </td>
                                </tr>

                                <tr >
                                  <td class='w320 mobile-spacing' 
                                    style='font-size:24px; color: #ffffff; text-align:center; padding: 0 75px;'>
                                    <br>
                                    Ticket ID: $transid
                                    <br>
                                    <br>
                                    Type:
                                    <br>
                                    <br>

                                    <div >
                                      <a 
                                        style='background-color:#5F9EA0;color:#ffffff;display:inline-block;font-family:Source Sans Pro, Helvetica, Arial, sans-serif;font-size:18px;font-weight:400;line-height:45px;text-align:center;text-decoration:none;width:180px;-webkit-text-size-adjust:none;'>
                                        <strong >
                                          <span id='button_text'>$ticket_type</span>
                                        </strong>
                                      </a>
                                    </div>
                                    <br>
                                    <div>Venue: Safari lounge Conference hotel</div><br>
                                    <div>Date: 25th June, 2021.</div><br>
                                    <div>Red Carpet: 7pm</div><br>
                                    <div>Main Event: 8pm</div><br>
                                    <div>After Party Follows Immediately</div><br>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>

                    <table bgcolor='#FFFFFF' cellpadding='0' cellspacing='0' width='100%'>
                      <tbody >
                        <tr >
                          <td  style='background-color:#ffffff;'>
                            <table cellpadding='0' cellspacing='0' class='force-full-width'>
                              <tbody>
                                <tr>
                                  <td class='mobile-hide' width='230'>
                                    <table cellpadding='0' cellspacing='0' class='force-full-width'>
                                      <tbody >
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>

                            <table bgcolor='#3B4E5D' cellpadding='0' cellspacing='0' class='force-full-width'>
                              <tbody >
                                <tr>
                                  <td  style='background-color:#363636; text-align:center;''> </td>
                                </tr>

                                <tr >
                                  <td  style='color:#f0f0f0; font-size: 14px; text-align:center; padding-bottom:4px;'>
                                    <br>
                                  </td>
                                </tr>

                                <tr>
                                  <td  style='color:#27aa90; font-size: 14px; text-align:center;'>&nbsp;</td>
                                </tr>

                                <tr>
                                  <td  style='font-size:12px;'>&nbsp;</td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
        </td>
      </tr>
    </tbody>
  </table>"; 
$message .= "</body></html>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <jaslineentertainment.com>' . "\r\n";

if(mail($to,$subject,$message,$headers)){
  echo "<script>alert('Your ticket is ready, please check your mail')</script>";
  echo "<script>location.href='https://jaslineentertainment.com/get-ticket/';</script>";

}else{
  echo "<script>alert('There was an error sending your ticket, please contact us')</script>";
  echo "location.href='https://jaslineentertainment.com/get-ticket/';";
}
 }
 else{
  echo "<script>alert('There was an error fetching your details $to')</script>";
  echo "location.href='https://jaslineentertainment.com/get-ticket/';";
 }
?>
</body>
</html>