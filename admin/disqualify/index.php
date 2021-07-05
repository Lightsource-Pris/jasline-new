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
        include "../../apis/get_nominee.php";
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
                    <li class="mb-3 pt-3"><a class="pl-4" href="../user/"><img class="mr-3 sub_icon my_icon" src="../img/add.png" alt="Icon">Add Nominee</a></li>
                    <li class="mb-3 pt-3"><a class="pl-4 " href="../view/"><img class="mr-3 share_icon view_icon my_icon" src="../img/view-details.png" alt="Icon">View Nominees</a></li>
                    <li class="mb-3 add pt-3"><a class="pl-4 act" href=""><img class="mr-3 share_icon view_icon my_icon" src="../img/remove-white.png" alt="Icon">Disqualify Nominee</a></li>
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
                        <li class="mb-3 pt-3"><a class="pl-4" href="../user/"><img class="mr-3 sub_icon add_icon my_icon" src="../img/add.png" alt="Icon">Add Nominee</a></li>
                        <li class="mb-3 pt-3"><a class="pl-4" href="../view/"><img class="mr-3 share_icon view_icon my_icon" src="../img/view-details.png" alt="Icon">View Nominees</a></li>
                        <li class="mb-3 add pt-3"><a class="pl-4 act" href=""><img class="mr-3 share_icon view_icon my_icon" src="../img/remove-white.png" alt="Icon">Disqualify Nominee</a></li>
                        <li class="pt-3 mt-5 pt-5" id="logout"><a class="pl-4 logout"><img class="mr-3" src="../img/logout_icon.svg" alt="Icon">Logout</a></li>
                    </ul>
                </div>
            </aside>
            <div class="col-lg-9 col-md-12 mt-3 body">
                <div class="row publicize pb-5">
                    <div class="col-12 mb-5 ml-lg-5"><h3>Jasline Admin</h3><span>Disqualify Nominee</span></div>
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
                    <h3 class="ml-lg-3 mt-4 col-12">Disqualify Nominee</h3>
                    <div class="table-responsive col-12">
                    <table class="table table-hover mt-4 mx-auto" style="width: 910px">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Sub Category</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          while ($row = $new_get->fetch_array()){
                            $id = $row['id'];
                            $name = $row['name'];
                            $category = $row['category'];
                            $sub_category = $row['sub_category'];
                            $votes = $row['votes'];
                          ?>
                          <tr>
                            <th scope="row"><?php echo $id?></th>
                            <td><?php echo $name?></td>
                            <td><?php echo $category?></td>
                            <td><?php echo $sub_category?></td>
                            <td><a style="color:red" href="./gfjeuen.php?id=<?php echo$id?>">Disqualify</a></td>
                          </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
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
    </script>
</html>