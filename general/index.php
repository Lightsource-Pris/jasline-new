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
    <link rel="stylesheet" href="../css/bg/gen-bg.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="icon" href="../img/foya-trans.ico">
    <title>FOYA AWARDS</title>
</head>
<body>
    <?php
        include "../apis/vote.php";
        $vote = $new_vote->gen_vote();
    ?>
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
                    <a class="nav-link active" href=""><i class="fa fa-home"></i>General </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../fresh-student/"><i class="fa fa-street-view" aria-hidden="true"></i>Fresh
                        Students </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../entertainment/"><i class="fa fa-users"></i>Entertainment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../entrepreneur/"><i class="fa fa-briefcase"></i>Entrepreneur </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../academic/"><i class="fa fa-book"></i>Academics <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../special/"><i class="fa fa-sun-o"></i></i>Special Recognition</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="hero-image">
        <div class="hero-text wow animated fadeInUp">
            <h1 class="hero-heading" >Welcome to FOYA Voting Page</h1>
            <p class="hero-p">General Category</p>
           
        </div>
    </div>

    <div class="cat-descrpt row" >
        <div class="desc-illustration col-lg-6 wow animated fadeInLeft"> 
            <img src="../img/people.svg" alt="" class="desc-img img-fluid">
        </div>
        <div class="desc-text col-lg-6 wow animated fadeInRight">
            Kings and Queens, this section is fully dedicated towards Individuality that makes up Generality. <br>
            
            Ranging from the best dressed, most popular, the beautiful faces of the students, best athletes, notable icons in
            different spheres, and the groups and pairs of unique characters. <br>
            
            Come forth y'all, FO'YA crowns.
        </div>
    </div>

    <div class="vote-div">
    
        <h1 class="heading">Vote for your Favorite Here</h1>
        <form method="post">
        <div class="vote-section">
        <?php
                include "../apis/fetch.php";
            ?>
            <div class="vote-box wow animated fadeInDown">
    
                <h4 class="vote-title">Most Popular - Male</h4>
                <?php
                    while($row = $mpma->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_popular_M" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>

            </div>
    
            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Most Popular - Female</h4>
                <?php
                
                    while($row = $mpfe->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_popular_F" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>
    
            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Sport Man of The Year</h4>
                <?php
                    while($row = $sm->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Sport_man_of_the_year" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>
    
            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Most Fashionable - Male</h4>
                <?php
                    while($row = $mfm->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_fashionable_M" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>
    
            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Most Fashionable - Female</h4>
                <?php
                    while($row = $mff->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_fashionable_F" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>
    
            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Mr Personality</h4>
                <?php
                    while($row = $mrp->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Mr_personality" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>
    
            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Miss Personality</h4>
                <?php
                    while($row = $mip->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="miss_personality" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>
    
            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Perfect Gentleman</h4>
                <?php
                    while($row = $pgm->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Perfect_gentleman" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Most Reserved - Male</h4>
                <?php
                    while($row = $mrm->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_reserved_M" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Most Reserved - Female</h4>
                <?php
                    while($row = $mrf->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_reserved_F" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Best Dressed - Male</h4>
                <?php
                    while($row = $bdm->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Best_dressed_M" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Best Dressed - Female</h4>
                <?php
                    while($row = $bdf->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Best_dressed_F" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Miss Petit</h4>
                <?php
                    while($row = $mpe->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Miss_petit" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Big Bold and Beautiful</h4>
                <?php
                    while($row = $bbab->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Big_bold_and_beautiful" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Miss Ebony</h4>
                <?php
                    while($row = $meb->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Miss_ebony" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>
            
            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Most Beautiful</h4>
                <?php
                    while($row = $mbe->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_beautiful" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Most Handsome</h4>
                <?php
                    while($row = $mh->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_handsome" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>
            
            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Most Expensive</h4>
                <?php
                    while($row = $me->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_expensive" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Money Bag</h4>
                <?php
                    while($row = $mba->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Money_bag" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Man of The Year</h4>
                <?php
                    while($row = $moty->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Man_of_the_year" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Unsung Hero</h4>
                <?php
                    while($row = $uh->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Unsung_hero" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Best Clique</h4>
                <?php
                    while($row = $bc->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Best_clique" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Political Icon</h4>
                <?php
                    while($row = $pi->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Political_icon" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Brand Influencer</h4>
                <?php
                    while($row = $bi->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Brand_influencer" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Most Influential - Male</h4>
                <?php
                    while($row = $mim->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_influential_student_M" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Most Influential - Female</h4>
                <?php
                    while($row = $mif->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_influential_student_F" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Most Sophisticated - Male</h4>
                <?php
                    while($row = $msm->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_sophisticated_student_M" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Most Sophisticated - Female</h4>
                <?php
                    while($row = $msf->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_sophisticated_student_F" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Best Automobile</h4>
                <?php
                    while($row = $ba->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Best_automobile" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Model of The Year</h4>
                <?php
                    while($row = $motye->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Model_of_the_year" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Miss Photogenic</h4>
                <?php
                    while($row = $mph->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Miss_photogenic" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Most Sought After - Male</h4>
                <?php
                    while($row = $msam->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_sought_after_M" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Most Sought After - Female</h4>
                <?php
                    while($row = $msaf->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Most_sought_after_F" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Golden Boy</h4>
                <?php
                    while($row = $gb->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Golden_boy" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Young and Getting It - YAGI</h4>
                <?php
                    while($row = $y->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="YAGI" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Revelation</h4>
                <?php
                    while($row = $r->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Revelation" value="option1"
                        ><?php echo $name?>
                    </label>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="vote-box wow animated fadeInDown">
                <h4 class="vote-title">Hour Glass</h4>
                <?php
                    while($row = $hg->fetch_array()){
                        $name = $row['name'];
                ?>
                <div class="form-check">
                    <label class="form-check-label" for="mostPM1">
                        <input required type="radio" class="form-check-input" id="mostPM1" name="Hour_glass" value="option1"
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
                <h2 class="footer-heading">Useful Links</h2>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="../">Jasline Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../fresh-student/">Fresh Students Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../entrepreneur/">Entrepreneur Category</a>
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