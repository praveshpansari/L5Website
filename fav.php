<?php
include 'connection.php';
session_start() ?>
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
    <div class='container'>
        <div class='row clearBtn'>
            <a href="favorite.php?product=clear" class="col s12 m3 l1 offset-m5 offset-l11 waves-effect waves-wine btn">Clear All</a>
        </div>
            <div class='favorites'>
                <?php
                $userID = $_SESSION['user'];
                $query = "SELECT * FROM favorites,wine WHERE favorites.product_id = wine.product_id AND userID = '$userID'";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $brand = $row['brand_id'];
                        $product = $row['product_id'];
                        $sub = mysqli_fetch_assoc(mysqli_query($conn, "SELECT sub_category_no FROM wine_sub WHERE product_id = '$product'"))['sub_category_no'];
                        echo "<div class='products'>
            <div class='card-panel'>
            <div class='card-image'>
            <img src='" . $row['image_url'] . "'>
            </div></div> <h5 class='list center-align'><span class='brand'>" . mysqli_fetch_assoc(mysqli_query($conn, ("SELECT brand_name FROM brand WHERE brand_id = '$brand'")))['brand_name'] . "</span><br><span class='make'>" . mysqli_fetch_assoc(mysqli_query($conn, ("SELECT Sub_category from subcategories WHERE Type_no = '$sub'")))['Sub_category'] . ' ' . $row['year'] . "</span><br><span class='price'>$" . $row['price'] . "</span></h5>
          <div class='hovered center-align'><a href='cart.php?product=" . $product . "' class='cart-button waves-effect waves-wine btn'>Add to Cart</a><a href='favorite.php?product=" . $product . "' class='favorite waves-effect waves-light btn'><i class='material-icons'>favorite</i></a></div></div>";
                    }
                } else {
                    echo '<div class="row">
                    <div class="no-item col s12 m12">
                      <div class="card">
                        <div class="card-content">
                          <p>You have no favorite items. Favorite items on the shop will appear here.</p>
                        </div>
                        <div class="card-action center-align wine">
                          <a  href="products.php">SHOP</a>
                        </div>
                      </div>
                    </div>
                  </div>';
                }
                ?>
            </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>