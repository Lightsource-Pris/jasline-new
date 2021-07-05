<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="../css/foya.css">
    <link rel="stylesheet" href="../css/bg/entre-bg.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="icon" href="../img/foya-trans.ico"> 
    <title>FOYA AWARDS</title>
</head>
<?php
       
        include "../apis/vote.php";
        $vote = $new_vote->entre_vote();
    ?>
<body>
    <nav class="navbar navbar-expand-xl navbar-light fixed-top">
        <a class="navbar-brand" href="../foya/">
            <img src="../img/foya-black.jpeg" alt="Brand-logo" id="brand-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse side-nav" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../general/"><i class="fa fa-home"></i>General </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../fresh-student/"><i class="fa fa-street-view" aria-hidden="true"></i>Fresh
                        Students </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../entertainment/"><i class="fa fa-users"></i>Entertainment</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../entrepreneur/"><i class="fa fa-briefcase"></i>Entrepreneur </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../academic/"><i class="fa fa-book"></i>Academics <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../special/"><i class="fa fa-sun-o"></i>Special Recognition</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="hero-image">
        <div class="hero-text wow animated fadeInUp">
            <h1 class="hero-heading">Welcome to FOYA Voting Page</h1>
            <p class="hero-p">Entrepreneur Category</p>

        </div>
    </div>

    <div class="cat-descrpt row">
        <div class="desc-illustration col-lg-6 wow animated fadeInLeft">
            <img src="../img/business.svg" alt="" class="desc-img img-fluid">
        </div>
        <div class="desc-text col-lg-6 wow animated fadeInRight">
            This is to those that get reckoned with as a staylite by just spending a notable amount of time on campus with
            reasonable and giant strides. <br>
    
            To those that tried not to be overwhelmed by the ocean of activities and school engagements on getting to the
            campus. <br>
    
            To the Young And Getting It, cheers to doing better; this is the point of skyrocketing FO'YAII. <br>
        </div>
    </div>

    <div class="vote-div">
    <form method="post">
        <h1 class="heading">Vote for your Favorite Here</h1>
        
        <div class="vote-section">
        <?php
            include "../apis/fetch.php";
        ?>
            <div class="vote-box wow animated fadeInDown">

                <h4 class="vote-title">Clothier of The Year</h4>
                <?php
                    while($row = $coty->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Clothier_of_the_year" value="<?php echo $name?>"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>
    
            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Most Enterprising Student</h4>
                <?php
                    while($row = $mes->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_Enterprising_Student" value="<?php echo $name?>"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>
    
            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">CEO of The Year</h4>
                <?php
                    while($row = $ceo->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="CEO_of_the_Year" value="<?php echo $name?>"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>
    
            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Make up Artist of The Year</h4>
                <?php
                    while($row = $maoty->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Make_up_artist_of_the_year" value="<?php echo $name?>"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>
    
            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Student Brand of The Year</h4>
                <?php
                    while($row = $sboty->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Student_Brand_of_the_year" value="<?php echo $name?>"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Graphics Designer of The Year</h4>
                <?php
                    while($row = $gdoty->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Graphics_Designer_of_the_year" value="<?php echo $name?>"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Most Creative Student</h4>
                <?php
                    while($row = $mcs->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_Creative_student" value="<?php echo $name?>"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Photographer of The Year</h4>
                <?php
                    while($row = $poty->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Photographer_of_the_year" value="<?php echo $name?>"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

        </div>
        <input type="submit" class="btn btn-info" name="vote">
                </form>
    </div>

    <footer id="footer">
        <div class="foot-text row">
            <div class="foot-links col-lg-6 wow animated fadeInDown">
                <h4 class="footer-heading">Useful Links</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="../">Jasline Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../foya/">General Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../fresh-student/">Fresh Students Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../entertainment/">Entertainment Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../academic/">Academics Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../special/">Special Recognition Category</a>
                    </li>
                </ul>
            </div>
            <div class="contact col-lg-6 wow animated fadeInDown" id="contact">
                <h2 class="footer-heading">Contact Us</h2>
                <p>You can always talk to us on</p>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/jasline__entertainment/?utm_medium=copy_link"><i
                                class="fa fa-instagram"></i>IG @jasline_entertainment </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="info@jaslineentertainment.com"><i class="fa fa-envelope"></i>
                            info@jaslineentertainment.com</a>
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

    <script>window.jQuery || document.write('<script src="../js/jquery-slim.min.js"><\/script>')</script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/holder.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/scroll.js"></script>
</body>

</html>