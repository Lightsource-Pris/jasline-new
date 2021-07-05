<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Payment of for ticket page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i|Signika+Negative:300,400,600,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://checkout.flutterwave.com/v3.js"></script>
    <link rel="stylesheet" href="../css/payment.css">
    <link rel="icon" href="../img/foya-trans.ico">
    <title>Get ticket</title>
</head>
<body>
    <?php
            $conn = mysqli_connect('localhost','root','','jasline') or die("Connection Failed!");
            $query = mysqli_query($conn, "SELECT * FROM tickets where `amount`=25000");
            $count = mysqli_num_rows($query);

            $query2 = mysqli_query($conn, "SELECT * FROM tickets where `amount`=250000");
            $count2 = mysqli_num_rows($query2);
    ?>
    <nav class="navbar navbar-expand-md bg-light navbar-light">
        <a class="navbar-brand" href="#">
            <img src="../img/jasline - Copy.png" alt="Brand-logo" id="brand-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-home"></i>Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services"><i class="fa fa-handshake-o" aria-hidden="true"></i>Our Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team"><i class="fa fa-users"></i>Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact"><i class="fa fa-info"></i>Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./foya/" id="foya-nav" ><i class="fa fa-sun-o"></i>FOYA AWARDS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link blink" href="./foya/" id="foya-nav" ><i class="fa fa-ticket"></i>Get Ticket</a>
                </li>
                
            </ul>
        </div>  
      </nav>
      <br>
    <div class="core-box row">
        <div class="pay-ill col-xl-6 col-lg-12">
            <img src="../img/paymentillus.jpg" alt=" Payment illustration" class="pay-img img-fluid">
        </div>
        <div class="pay-form col-xl-6 col-lg-12">
            <form method="get" action="process.php">
                <div class="form-group col-lg-10">
                    <label for="name" >Fullname</label>
                    <input id="full-name" name="full_name" type="text" class="form-control" onkeyup="checkk()" placeholder="Fullname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out your name.</div>
                </div>
                <div class="form-group col-lg-10"> 
                    <label for="email" >Email <Address></Address></label>
                    <input id="email-add" onkeyup="checkk()" type="email" class="form-control" name="email_add" placeholder="Email" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out your email.</div>
                </div>
                <div class="form-group col-lg-10">
                    <label for="phoneNumber" >Phone Number</label>
                    <input id="phone" type="tel" onkeyup="checkk()" class="form-control" name="phone_num" placeholder="Phone number"  required >
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out your phone number.</div>
                </div>
                <div class="form-group col-lg-10">
                    <label for="ticket" > What type of ticket are you paying for?</label>
                    <select class="form-control selected" onclick="checkk()" name="ticket_type" id="ticket" required>
                     <option value="select your choice">select your choice</option>
                     <?php   if($count <= 50){?>
                     <option value="Bronze">Bronze</option>
                     <?php  }?>
                     <?php   if($count <= 100){?>
                     <option value="Silver">Silver</option>
                     <?php  }?>
                     <option value="Diamond">Diamond (Table for 6)</option>
                    </select>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group col-lg-10">
                    <label for="Amount" ></label>Amount</label>
                    <input id="amount" readonly name="amount" class="form-control"  >
                    
                </div>
                <div class="container">
                    <button id="btn-me" class="btn btn-secondary" onclick="set_email()">Make payment</button>
                </div>
                
            </form>
        </div>
    </div>
    <footer>
        <footer id="footer">
            <div class="foot-text row">
                <div class="foot-links col-lg-6 wow animated fadeInDown">
                    <h2 class="footer-heading">Useful Links</h2>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="../">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../foya/">FOYA Awards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Get ticket</a>
                        </li>
                    </ul>
                </div>
                <div class="contact col-lg-6 wow animated fadeInDown" id="contact">
                    <h2 class="footer-heading">Contact Us</h2>
                    <p>You can always talk to us on</p>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/jasline__entertainment/?utm_medium=copy_link"><i class="fa fa-instagram"></i>IG @jasline_entertainment </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:info@jaslineentertainment.com"><i class="fa fa-envelope"></i> info@jaslineentertainment.com</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://wa.me/+2349055076022"> <i class="fa fa-whatsapp"></i>Whatsapp </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tel:09055076022"><i class="fa fa-phone"></i> Call 09055076022</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                © Copyright Jasline Entertainment 2021
            </div>
    </footer>
  <script src="../js/ticket.js"></script>
  <script>
  function set_email(){
    var user_email = document.getElementById('email-add').value;
    sessionStorage.setItem("user_email", user_email);
  }
    
  </script>
</body>
</html>