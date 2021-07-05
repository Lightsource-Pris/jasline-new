document.getElementById('btn-me').disabled = true;
    function checkk(){ 
        if(document.getElementById("phone").value==="" || document.getElementById("email-add").value==="" || 
        document.getElementById("full-name").value==="" || document.getElementById("ticket").value=='select your choice') { 
        document.getElementById('btn-me').disabled = true;
    } else { 
        document.getElementById('btn-me').disabled = false;
    }
    }

    document.getElementById("ticket").addEventListener("change", function() {


        if(document.getElementById("ticket").value=='Bronze'){
            document.getElementById("amount").value = "10000";
        }else if(document.getElementById("ticket").value=='Silver'){
            document.getElementById("amount").value = "25000";
        }else if(document.getElementById("ticket").value=='Diamond'){
            document.getElementById("amount").value = "250000";
        }else{
            document.getElementById("amount").value = "No selected amount";
        }

        
        });
















  
 
      // FlutterwaveCheckout({
      //   public_key: "FLWPUBK-8b738f7f40f908a17bdcb041762b1883-X",
      //   tx_ref: "JE",
      //   amount: 50,
      //   currency: "NGN",
      //   payment_options: " ",
      //   redirect_url: 
      //     "http://localhost/jasline/verify/",
      //   customer: {
      //     email: email_add,
      //     phone_number: phone,
      //     name: "Jasline Entertainment",
      //   },
      //   callback: function (data) {
      //     console.log(data);
      //   },
      //   onclose: function() {
     
      //   },
      //   customizations: {
      //     title: "Jasline Entertainment",
      //     description: "Payment Ticket",
      //     logo: "../img/jasline - Copy.png",
      //   },
      // });
    // }