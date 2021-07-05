<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Jasline Entertainment</title>
        <link rel="shortcut icon" href="../img/jaslin.png">
        <!-- Bootstrap 4.5 CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/ustyle.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Mulish" rel="stylesheet">
        <script src="../js/jquery-3.5.1.js"></script>
    </head>
    <body>
        <?php
        include "../../apis/nominee.php";
        include "../../apis/count.php";
        ?>
        <div class="container-fluid header d-none d-lg-block">
            <div class="row">
                <div class="col-3">
                    <img class="head_icon" src="../img/jaslin.png">
                </div>
                <div class="col-9 mt-4 pt-2">
                    <ul class="liss">
                        <li class="liss- mr-5"><a class="home-link" href="../../">Home</a></li>
                        <li class="liss- mr-5"><a class="home-link" href="../../#about-us">About Us</a></li>
                        <li class="liss-"><a class="home-link" href="../../#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>  
        </div>
        <nav class="navbar navbar-default d-lg-none size-14">
            
            <div class="container-fluid">
                <div style="height:50px;width:50px" class="navbar-header">
                <button class="navbar-toggle navbar-dark d-lg-none user-toggle" data-toggle="slide-collapse" data-target="#slide-and-collapse" aria-expanded="false">
                    <span class="navbar-toggler-icon" style="color: white;"></span>
                </button>
               
                <div class="collapse navbar-collapse" id="slide-and-collapse">
                <ul class="nav navbar-nav mt-5 pl-3">
                    <li class="mb-3 add pt-3"><a class="pl-4 act" href=""><img class="mr-3 sub_icon my_icon" src="../img/add_white.svg" alt="Icon">Add Nominee</a></li>
                    <li class="mb-3 pt-3"><a class="pl-4 share_act" href="../view/"><img class="mr-3 share_icon view_icon my_icon" src="../img/view-details.png" alt="Icon">View Nominees</a></li>
                    <li class="mb-3 pt-3"><a class="pl-4" href="../disqualify/"><img class="mr-3 sub_icon my_icon" src="../img/remove.png" alt="Icon">Disqualify Nominee</a></li>
                    <li class="pt-3 mt-5 pt-5" id="logout1"><a class="pl-4 logout"><img class="mr-3" src="../img/logout_icon.svg" alt="Icon">Logout</a></li>
                </ul>
                
                </div>
            </div>
            </div>
            <a class="navbar-brand ml-auto jas-bar" href="#"><img style="height: 70px; width: 70px;" src="../img/jaslin.png"></a>
        </nav>
        <div class="row size-14">
            <aside class="col-lg-3 d-none d-lg-block"> 
                <div class="row">
                    <h3 class="col-12 mt-3 mb-5 text-center"><img style="width: 100px;height: 100px;" src="../img/jasline logo.jpg"></h3>
                    <ul class="col-12 mt-">
                        <li class="mb-3 pt-3 add"><a class="pl-4 act" href=""><img class="mr-3 sub_icon add_icon my_icon" src="../img/add_white.svg" alt="Icon">Add Nominee</a></li>
                        <li class="mb-3 pt-3"><a class="pl-4 share_act" href="../view/"><img class="mr-3 share_icon view_icon my_icon" src="../img/view-details.png" alt="Icon">View Nominees</a></li>
                        <li class="mb-3 pt-3"><a class="pl-4" href="../disqualify/"><img class="mr-3 sub_icon my_icon" src="../img/remove.png" alt="Icon">Disqualify Nominee</a></li>
                        <li class="pt-3 mt-5 pt-5" id="logout"><a class="pl-4 logout"><img class="mr-3" src="../img/logout_icon.svg" alt="Icon">Logout</a></li>
                    </ul>
                </div>
            </aside>
            <div class="col-lg-9 col-md-12 mt-3 body">
                <div class="row publicize pb-5">
                    <div class="col-12 mb-5 ml-lg-5"><h3>Jasline Admin</h3><span>Add Nominee</span></div>
                    <div class="col-12 col-lg-5 vote-card nomi-count ml-lg-5 mr-lg-5">
                        <div class="row ">
                            <div class="col-12 total text-light mt-3">Nominees Count</div>
                            <div class="col-12 numb text-light mt-5"><?php echo $count_nomi?></div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 vote-card nomi-count mt-3 mt-lg-0">
                        <div class="row">
                            <div class="col-12 total text-light mt-3">Votes Count</div>
                            <div class="col-12 numb text-light mt-5"><?php echo $count_votes?></div>
                        </div>
                    </div>
                    <div class="col-11 mx-auto mt-4">
                        <form method="POST">
                            <h3>Add a new Nominee</h3>
                            <div class="form-group">
                              <label for="exampleInputName">Name/Nick</label>
                              <input required type="text" name="name" class="form-control" id="exampleInputName" placeholder="Nominee name">
                
                            </div>
                            <div class="form-group"> 
                                <label for="exampleFormControlSelect1">Category</label>
                                <select required name="category" class="form-control" id="cat">
                                  <option value="null">Choose a category</option>
                                  <option value="General">General</option>
                                  <option value="Fresh Student">Fresh Students</option>
                                  <option value="Entertainment">Entertainment</option>
                                  <option value="Special Recognition">Special Recognition</option>
                                  <option value="Entreprenuer">Enterpreneur</option>
                                  <option value="Academics">Academics</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Sub Category</label>
                                <select required name="sub_category" class="form-control" id="sub_cat">
                               
                                </select>
                              </div>
                            <input type="submit" name="nominate" id="sub" class="btn btn-primary jas-btn">
                          </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-overlay"></div>
    </body>
    <script src="../js/menu.js"></script>
    <script src="../js/notification.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>

    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-analytics.js"></script>
    <script src="../login_js/firebase-config.js"></script>
    <script src="../login_js/firebase-logout.js"></script>
    <script src="../login_js/firebase-auth.js"></script>
    <script>
        document.getElementById('logout1').addEventListener('click',GoogleLogout);
        document.getElementById('logout').addEventListener('click',GoogleLogout);
        document.getElementById('cat').addEventListener('click',Change);

        function Change(){
            var cat_value = document.getElementById('cat').value;
            if(cat_value == 'General'){
                document.getElementById('sub_cat').innerHTML=`
                <option value="Most Popular M">Most Popular Male</option>
                <option value="Most Popular F">Most Popular Female</option>
                <option value="Sport Man">Sport Man of the Year</option>
                <option value="Most Fashionable F">Most Fashionable F</option>
                <option value="Most Fashionable M">Most Fashionable M</option>
                <option value="Mr Personality">Mr Personality</option>
                <option value="Miss Personality">Miss Personality</option>
                <option value="Perfect gentleman">Perfect gentleman</option>
                <option value="Most reserved M">Most reserved M</option>
                <option value="Most reserved F">Most reserved F</option>
                <option value="Best dressed M">Best dressed M</option>
                <option value="Best dressed F">Best dressed F</option>
                <option value="Miss petit">Miss petit</option>
                <option value="Big bold and beautiful">Big bold and beautiful</option>
                <option value="Miss ebony">Miss ebony</option>
                <option value="Most beautiful">Most beautiful</option>
                <option value="Most handsome">Most handsome</option>
                <option value="Most expensive">Most expensive</option>
                <option value="Money bag">Money bag</option>
                <option value="Man of the year">Man of the year</option>
                <option value="Unsung hero">Unsung hero</option>
                <option value="Best clique">Best clique</option>
                <option value="Political icon">Political icon</option>
                <option value="Brand influencer">Brand influencer</option>
                <option value="Most influential M">Most influential student M</option>
                <option value="Most influential F">Most influential student F</option>
                <option value="Most sophisticated M">Most sophisticated student M</option>
                <option value="Most sophisticated F">Most sophisticated student F</option>
                <option value="Best automobile">Best automobile</option>
                <option value="Model of the year">Model of the year</option>
                <option value="Miss photogenic">Miss photogenic</option>
                <option value="Most sought after M">Most sought after M</option>
                <option value="Most sought after F">Most sought after F</option>
                <option value="Golden boy">Golden boy</option>
                <option value="YAGI">YAGI ( young and getting it )</option>
                <option value="Revelation">Revelation</option>
                <option value="Hour Glass">Hour Glass</option>
                `
            }else if(cat_value == 'Entreprenuer'){
                document.getElementById('sub_cat').innerHTML=`
                <option value="Clothier">Clothier of the Year</option>
                <option value="Most Enterprising Student">Most Enterprising Student</option>
                <option value="CEO of the Year">CEO of the Year</option>
                <option value="Make Up Artist">Make Up Artist of the Year</option>
                <option value="Student Brand">Student Brand of the Year</option>
                <option value="Graphics Designer">Graphics Designer</option>
                <option value="Most Creative Student">Most Creative Student</option>
                <option value="Photographer">Photographer of the Year</option>
                `
                
            }else if(cat_value == 'Entertainment'){
                document.getElementById('sub_cat').innerHTML=`
                <option value="Best News Act">Best News Act</option>
                <option value="Artist of the Year">Artist of the Year</option>
                <option value="DJ of the Year">DJ of the Year</option>
                <option value="Entertainment Personality">Entertainment Personality</option>
                <option value="Entertainment Brand">Entertainment Brand of the Year</option>
                <option value="Music Producer">Music Producer of the year</option>
                <option value="Best Dancer">Best Dancer</option>
                <option value="Next Rated Act">Next Rated Act</option>
                <option value="Rap Artist of the Year">Rap Artist of the Year</option>
                <option value="Most Promising Entertainment Personality">Most Promising Entertainment Personality</option>
                <option value="Best Use of Social Media">Best Use of Social Media</option>
                <option value="Event Organizer of the Year">Event Organizer of the Year</option>
                <option value="Online Comedy Platform">Online Comedy Platform</option>
                <option value="Comedian of the Year">Comedian of the Year</option>
                <option value="PR of the Year">PR of the Year</option>
                <option value="Social Media Influencer of the Year">Social Media Influencer of the Year</option>
                `
            }else if(cat_value == 'Fresh Student'){
                document.getElementById('sub_cat').innerHTML=`
                <option value="Rookie Female">Rookie Female</option>
                <option value="Rookie Male">Rookie Male</option>
                <option value="Best New Student F">Best New Student F</option>
                <option value="Best New Student M">Best New Student M</option>
                <option value="Next Rated Artist">Next Rated Artist</option>
                `
            }else if(cat_value == 'Special Recognition'){
                document.getElementById('sub_cat').innerHTML=`
                <option value="Hall of Fame">Hall of Fame</option>
                `
            }else if(cat_value == 'Academics'){
                document.getElementById('sub_cat').innerHTML=`
                <option value="Best Student">Best Student Academics</option>
                <option value="Best Honorable">Best Honorable</option>
                `
            }else{
                document.getElementById('sub_cat').innerHTML=`
               
                `
            }
        }
    </script>
</html>