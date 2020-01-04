<?php include 'connection.php';
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $var1 = 'slide-out';
    $var2 = 'sidenav-trigger show-on-large';
} else {
    $var1 = 'modal1';
    $var2 = 'modal-trigger';
}
if (!isset($_GET['sorting'])) {
    $_GET['sorting'] = 1;
}
?>
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
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li><a href="#!">three</a></li>
    </ul>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <div class="row">
                <ul id="tab-login-register" class="tabs tabs-fixed-width">
                    <li class="tab"><a class="active" href="#login">
                            Login
                        </a></li>
                    <li class="tab"><a href="#register">
                            Register
                        </a></li>
                </ul>
            </div>
            <div id="login">
                <div class="row">
                    <form class="col s12" action="./login.php" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="text" class="validate" name="email" required>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate" name="password" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn waves-effect waves-light col s12 z-depth-0" type="submit">Login
                            </button>
                        </div>
                        <div class="row">
                            <a href="#">Forgot your password?</a>
                        </div>
                    </form>
                </div>
            </div>

            <div id="register">
                <div class="row">
                    <form class="col s12" action="./register.php" method="post">
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="first_name" type="text" class="validate" name="first_name" required>
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" type="text" class="validate" name="last_name" required>
                                <label for="last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="registerEmail" type="text" class="validate" name="registerEmail" required>
                                <label for="registerEmail">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="registerPassword" type="password" class="validate" name="registerPassword" required>
                                <label for="registerPassword">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <label for="conditions">
                                <input type="checkbox" class="checkbox-blue" id="conditions" required name="terms" />
                                <span>I agree to the terms and conditions.</span>
                            </label>
                        </div>
                        <div class="row">
                            <button class="btn waves-effect waves-light col s12 z-depth-0" type="submit">Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cancel</a>
        </div>
    </div>

    <ul id="slide-out" class="sidenav">
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

    <ul id="slide-out2" class="sidenav slide2 sidenav-fixed">
        <li>
            <div class="user-view">
                <div class="background">
                </div>

        </li>
        <form method="get">
            <li>
                <div class="row">
                    <div class="input-field sort col offset-s4">
                        <select id="sorting" name="sorting">
                            <option value="1" <?php if ($_GET['sorting'] == 1) echo 'selected' ?>>Name</option>
                            <option value="2" <?php if ($_GET['sorting'] == 2) echo 'selected' ?>>Price</option>
                            <option value="3" <?php if ($_GET['sorting'] == 3) echo 'selected' ?>>Year</option>
                        </select>
                    </div>
                </div>
                <div class='row'>
                    <div class="col offset-s3">
                        <label for="descending">
                            <input id="descending" type="checkbox" name="descending" <?php if (isset($_GET['descending'])) echo 'checked' ?> class="filled-in" />
                            <span>Descending</span>
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="divider"></div>
            </li>
            <li>
                <div class='row'>
                    <div class="col offset-s3">
                        <label for="filter">
                            <input id="filter" onchange="filterCheck()" <?php if (isset($_GET['filter'])) echo 'checked' ?> type="checkbox" name="filter" class="filled-in" />
                            <span>Filter</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col offset-s2 s9">
                        <label for="red">
                            <input id="red" value="1" <?php if (!isset($_GET['filter'])) echo 'disabled'; ?> <?php if (isset($_GET['category']) && $_GET['category'] == 1) echo 'checked' ?> name="category" type="radio" />
                            <span>Red Wine</span>
                        </label>

                        <label>
                            <input id="white" value="2" <?php if (!isset($_GET['filter'])) echo 'disabled'; ?> <?php if (isset($_GET['category']) && $_GET['category'] == 2) echo 'checked' ?> name="category" type="radio" />
                            <span>White Wine</span>
                        </label>
                        <br>
                        <label>
                            <input id="rose" value="3" <?php if (!isset($_GET['filter'])) echo 'disabled'; ?> <?php if (isset($_GET['category']) && $_GET['category'] == 3) echo 'checked' ?> name="category" type="radio" />
                            <span>Rose Wine</span>
                        </label>
                        <br>
                        <label>
                            <input id="sparkling" value="4" <?php if (!isset($_GET['filter'])) echo 'disabled'; ?> <?php if (isset($_GET['category']) && $_GET['category'] == 4) echo 'checked' ?> name="category" type="radio" />
                            <span>Sparkling Wine & Champagne</span>
                        </label>
                        <br>
                        <label>
                            <input id="sweet" value="5" <?php if (!isset($_GET['filter'])) echo 'disabled'; ?> <?php if (isset($_GET['category']) && $_GET['category'] == 5) echo 'checked' ?> name="category" type="radio" />
                            <span>Dessert & Sweet Wine</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <button class="btn waves-effect waves-light col offset-s4 z-depth-0" type="submit">Sort & Filter
                    </button>
                </div>
            </li>
        </form>
        <li><a class="subheader">Social Media</a></li>
        <li><a class="waves-effect btn" href="logout.php">Logout</a></li>
    </ul>

    <nav class="z-depth-0">
        <div class="nav-wrapper">
            <div class="container">
                <a href="#!" class="brand-logo">Logo</a>
                <ul class="icon-items right hide-on-small-and-down">
                    <li><a href="./shopped.php"><i class="small material-icons">shopping_cart</i></a></li>
                    <li><a href="#"><i class="small material-icons">search</i></a></li>
                    <li><a href="#" data-target="<?php echo $var1 ?>" class="<?php echo $var2 ?>">
                            <i class="small material-icons">person</i></a></li>
                </ul>
                <ul class="menu-items right hide-on-med-and-down">
                    <li><a href="#">SHOP</a></li>
                    <li><a href="#">HOME</a></li>
                    <li><a class='dropdown-button' href="#" data-target='dropdown1'>ABOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="listing" class="container">
        <?php
        $count = 0;
        if (isset($_GET['descending'])) {
            if ($_GET['sorting'] == 2)
                $query = 'SELECT * FROM wine, brand, wine_sub, subcategories WHERE wine.product_id = wine_sub.product_id AND wine.brand_id = brand.brand_id AND wine_sub.sub_category_no = subcategories.Type_no order by price desc';
            elseif ($_GET['sorting'] == 3)
                $query = 'SELECT * FROM wine, brand, wine_sub, subcategories WHERE wine.product_id = wine_sub.product_id AND wine.brand_id = brand.brand_id AND wine_sub.sub_category_no = subcategories.Type_no order by year desc';
            elseif ($_GET['sorting'] == 1)
                $query = 'SELECT * FROM wine, brand, wine_sub, subcategories WHERE wine.product_id = wine_sub.product_id AND wine.brand_id = brand.brand_id AND wine_sub.sub_category_no = subcategories.Type_no order by brand_name, Sub_category desc';
        } else {
            if ($_GET['sorting'] == 2)
                $query = 'SELECT * FROM wine, brand, wine_sub, subcategories WHERE wine.product_id = wine_sub.product_id AND wine.brand_id = brand.brand_id AND wine_sub.sub_category_no = subcategories.Type_no order by price';
            elseif ($_GET['sorting'] == 3)
                $query = 'SELECT * FROM wine, brand, wine_sub, subcategories WHERE wine.product_id = wine_sub.product_id AND wine.brand_id = brand.brand_id AND wine_sub.sub_category_no = subcategories.Type_no order by year';
            elseif ($_GET['sorting'] == 1)
                $query = 'SELECT * FROM wine, brand, wine_sub, subcategories WHERE wine.product_id = wine_sub.product_id AND wine.brand_id = brand.brand_id AND wine_sub.sub_category_no = subcategories.Type_no order by brand_name, Sub_category';
        }



        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            echo "<div class='row'>";
            while ($row = mysqli_fetch_assoc($result)) {
                if (isset($_GET['category'])) {
                    $category = $row['category_no'];
                    if ($_GET['category'] == $category) {
                        if ($count % 3 == 0 && $count != 0) {
                            echo "</div>";
                        }
                        $brand = $row['brand_id'];
                        $product = $row['product_id'];
                        $sub = mysqli_fetch_assoc(mysqli_query($conn, "SELECT sub_category_no FROM wine_sub WHERE product_id = '$product'"))['sub_category_no'];
                        echo "<div class='products col s12 m6 l4'>
                <div class='card-panel'>
                <div class='card-image'>
                <img src='" . $row['image_url'] . "'>
                </div>
              </div>
              <h5 class='list center-align'><span class='brand'>" . mysqli_fetch_assoc(mysqli_query($conn, ("SELECT brand_name FROM brand WHERE brand_id = '$brand'")))['brand_name'] . "</span><br><span class='make'>" . mysqli_fetch_assoc(mysqli_query($conn, ("SELECT Sub_category from subcategories WHERE Type_no = '$sub'")))['Sub_category'] . ' ' . $row['year'] . "</span><br><span class='price'>$" . $row['price'] . "</span></h5>
              <div class='hovered center-align'><a href='cart.php?product=" . $product . "' class='cart-button waves-effect waves-wine btn'>Add to Cart</a><a class='favorite waves-effect waves-light btn'><i class='material-icons'>favorite</i></a></div></div>";
                        $count++;
                        if ($count % 3 == 0) {
                            echo "<div class='row'>";
                        }
                    }
                } else {
                    if ($count % 3 == 0 && $count != 0) {
                        echo "</div>";
                    }
                    $brand = $row['brand_id'];
                    $product = $row['product_id'];
                    $sub = mysqli_fetch_assoc(mysqli_query($conn, "SELECT sub_category_no FROM wine_sub WHERE product_id = '$product'"))['sub_category_no'];
                    echo "<div class='products col s12 m6 l4'>
            <div class='card-panel'>
            <div class='card-image'>
            <img src='" . $row['image_url'] . "'>
            </div>
          </div>
          <h5 class='list center-align'><span class='brand'>" . mysqli_fetch_assoc(mysqli_query($conn, ("SELECT brand_name FROM brand WHERE brand_id = '$brand'")))['brand_name'] . "</span><br><span class='make'>" . mysqli_fetch_assoc(mysqli_query($conn, ("SELECT Sub_category from subcategories WHERE Type_no = '$sub'")))['Sub_category'] . ' ' . $row['year'] . "</span><br><span class='price'>$" . $row['price'] . "</span></h5>
          <div class='hovered center-align'><a href='cart.php?product=" . $product . "' class='cart-button waves-effect waves-wine btn'>Add to Cart</a><a class='favorite waves-effect waves-light btn'><i class='material-icons'>favorite</i></a></div></div>";
                    $count++;
                    if ($count % 3 == 0) {
                        echo "<div class='row'>";
                    }
                }
            }
        }
        ?>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>