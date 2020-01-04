<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./css/materialize.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Home</title>
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

    <div class="navbar-fixed">
        <nav class="mainpage z-depth-0">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="#!" class="brand-logo">Logo</a>
                    <ul class="icon-items right hide-on-small-and-down">
                        <li><a href="#"><i class="small material-icons">shopping_cart</i></a></li>
                        <li><a href="#"><i class="small material-icons">search</i></a></li>
                        <li><a href="#" data-target="modal1" class="modal-trigger"><i class="small material-icons">person</i></a></li>
                    </ul>
                    <ul class="menu-items right hide-on-med-and-down">
                        <li><a href="products.php">SHOP</a></li>
                        <li><a href="#">HOME</a></li>
                        <li><a class='dropdown-button' href="#" data-target='dropdown1'>ABOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <header>
        <div class="slider fullscreen">
            <ul class="slides">
                <li>
                    <img src="imag/h2-slide-1.jpg"> <!-- random image -->
                    <div class="caption left-align">
                        <h1>merlot</h1>
                        <h5>Here's our small slogan.</h5>
                        <br>
                        <a class="product-btn btn z-depth-0">view products</a>
                    </div>
                </li>
                <li>
                    <img src="./imag/3.jpg"> <!-- random image -->
                    <div class="caption right-align">
                        <h1>Chardonnay</h1>
                        <h5>Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="./imag/20180423212222_44784.jpg" alt="A glass of "> <!-- random image -->
                    <div class="caption left-align">
                        <h1>pinot noir</h1>
                        <h5>Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="./imag/pink-wine-1964456.jpg" alt="An glass of rose wine"> <!-- random image -->
                    <div class="caption left-align">
                        <h1>rose</h1>
                        <h5>Here's our small slogan.</h5>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>