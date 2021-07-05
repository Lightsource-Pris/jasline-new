<?php
session_start();

 $phone =  $_GET["phone_num"];
 $email_add =  $_GET["email_add"];
 $amount =  $_GET["amount"];
 $full_name =  $_GET["full_name"];
 $ticket_type =  $_GET["ticket_type"];

 $_SESSION['phone'] = $phone;
 $_SESSION['email_add'] = $email_add;
 $_SESSION['full_name'] = $phone;
 $_SESSION['ticket_type'] = $phone;
 $_SESSION['amount'] = $amount;
?>

<script src="https://checkout.flutterwave.com/v3.js"></script>
<style>
.mydiv{
    margin-top:10%!important;
    margin: auto;
    width: 300px;
    padding: 10px;
}
    .mybtn{
        
        background:blue;
        color:white;
        width:300px;
        height:40px;
        border-radius:20px;
        border:1px solid #ffffff;
    }
</style>
<script src="../js/getval.js"></script>
<body>
<div class="mydiv">
<button class="mybtn" onclick="makePayment()">Continue to Flutterwave</button>
</div>
</body>



<script>
var email_add = sessionStorage.getItem("user_email");
var amount = getval('amount');
var phone_num = getval('phone_num');
// original --> FLWPUBK-29b5e0f7990984e4a446db7a2e6f4e4e-X
 
            // FLWPUBK-8b738f7f40f908a17bdcb041762b1883-X
function makePayment() {
FlutterwaveCheckout({
        public_key: "FLWPUBK-29b5e0f7990984e4a446db7a2e6f4e4e-X",
        tx_ref: "JE",
        amount: amount,
        currency: "NGN",
        // country: "Nigeria",
        payment_options: " ",
        redirect_url: 
          "https://jaslineentertainment.com/verify/",
        customer: {
          email: email_add,
          phone_number: phone_num,
          name: "Jasline Entertainment",
        },
        callback: function (data) {
          console.log(data);
        },
        onclose: function() {
     
        },
        customizations: {
          title: "Jasline Entertainment",
          description: "Payment Ticket",
          logo: "../img/jasline - Copy.png",
        },
      });
    }
</script>