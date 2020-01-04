<?php include 'connection.php';
session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./css/materialize.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Document</title>
</head>

<body>

    <div class="preloader">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>

    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li><a href="#!">three</a></li>
    </ul>

    <ul id="slide-out" class="sidenav sidenav-fixed">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="imag\20180423212222_44784.jpg">
                </div>
                <a href="#user"><img class="responisve-img circle big" src="imag/profile-dummy.png" style="width: 100px;height: 100px;"></a>
                <span class="white-text name"><?php echo $_SESSION['name'] ?></span>
                <span class="white-text email"><?php echo $_SESSION['email'] ?></span>
            </div>
        </li>
        <li><a href="#!"><i class="material-icons">history</i>Orders</a></li>
        <li><a href="#!">Profile</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="subheader">Social Media</a></li>
        <li><a class="waves-effect btn" href="logout.php">Logout</a></li>
    </ul>

    <nav class="z-depth-0">
        <div class="nav-wrapper">
            <div class="container">
                <a href="#!" class="brand-logo">Logo</a>
                <ul class="icon-items right hide-on-small-and-down">
                    <li><a href="#"><i class="small material-icons">shopping_cart</i></a></li>
                    <li><a href="#"><i class="small material-icons">search</i></a></li>
                    <li><a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="small material-icons">person</i></a></li>
                </ul>
                <ul class="menu-items right hide-on-med-and-down">
                    <li><a href="products.php">SHOP</a></li>
                    <li><a href="#">HOME</a></li>
                    <li><a class='dropdown-button' href="#" data-target='dropdown1'>ABOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>