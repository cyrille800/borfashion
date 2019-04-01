
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title> BOR Fashion</title>
        <link rel="icon" type="image/png" href="assets/images/favicon.png" />

        <!--Core CSS -->
        <link rel="stylesheet" href="assets/css/bulma.css">
        <link rel="stylesheet" href="assets/css/core.css">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet">
        
        <!-- plugins -->
        <link rel="stylesheet" href="assets/js/slick/slick.css">
        <link rel="stylesheet" href="assets/js/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/js/webuipopover/jquery.webui-popover.min.css">
        <link rel="stylesheet" href="assets/js/izitoast/css/iziToast.min.css">
        <link rel="stylesheet" href="assets/js/zoom/zoom.css">
        <link rel="stylesheet" href="assets/js/jpcard/card.css">
        <link rel="stylesheet" href="assets/css/chosen/chosen.css">
        <link rel="stylesheet" href="assets/css/icons.min.css">

    </head>
    <body>
        
        <!-- Pageloader -->
        <div class="pageloader"></div>
        <div class="infraloader is-active"></div>
        <nav class="navbar mobile-navbar is-hidden-desktop is-hidden-tablet" aria-label="main navigation">
            <!-- Brand -->
            <div class="navbar-brand">
                <a class="navbar-item" href="home.php">
                    <img src="assets/images/logo/nephos.svg" alt="">
                </a>
        
                <!-- Sidebar mode toggler icon -->
                <a id="sidebar-mode" class="navbar-item is-icon is-sidebar-toggler" href="javascript:void(0);">
                    <i data-feather="sidebar"></i>
                </a>
        
                <!-- Mobile menu toggler icon -->
                <div class="navbar-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <!-- Navbar mobile menu -->
            <div class="navbar-menu">
                <!-- Account -->
                <div class="navbar-item has-dropdown">
                    <a class="navbar-link">
                        <img src="assets/images/avatars/elie.jpg" alt=""> 
                        <span class="is-heading">Elie Daniels</span> 
                    </a>
        
                    <!-- Mobile Dropdown -->
                    <div class="navbar-dropdown">
                        <a href="cart.php" class="navbar-item is-flex">
                            <span>Cart</span>
                            <!-- Number of items in Cart -->
                            <span class="menu-badge">3</span>
                        </a>
                        <a href="account.php" class="navbar-item">Account</a>
                        <a href="wishlist.php" class="navbar-item">Wishlist</a>
                        <a href="account-edit.php" class="navbar-item">Settings</a>
                        <a href="authentication.php" class="navbar-item">Log out</a>
                    </div>
                </div>
        
                <!-- More -->
                <div class="navbar-item has-dropdown">
                    <a class="navbar-link">
                        <i data-feather="grid"></i>
                        <span class="is-heading">Categories</span>
                    </a>
        
                    <!-- Mobile Dropdown -->
                    <div class="navbar-dropdown">
                        <a href="products.php" class="navbar-item">House</a>
                        <a href="products.php" class="navbar-item">Office</a>
                        <a href="products.php" class="navbar-item">Kids</a>
                        <a href="products.php" class="navbar-item">Kitchen</a>
                        <a href="products.php" class="navbar-item">Accessories</a>
                    </div>
                </div>
            </div>
        </nav>
        
        
    
        <!-- Main wrapper -->
        <div class="shop-wrapper">
        
            
            <!-- Main section -->
            <div class="section">
                <!-- Container -->
                <div class="container">
        
                    <!-- Authentication Layout -->
                    <div class="columns account-header is-auth">
                        <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                            <!-- Title -->
                            <div class="auth-title">
                                <h2>LOGIN</h2>
                                <h3 style="text-transform: uppercase;font-size:20px;">0 <span style="color:#4a4a4a;">abonné</span></h3>
                                <img class="brand-filigrane" src="assets/images/logo/nephos-greyscale.svg" alt="">
                                <h3 style="text-transform: uppercase;font-size:20px;">0 <span style="color:#4a4a4a;">partenaire</span></h3>
                            </div>
                            <!-- Card -->
                            <div class="flat-card is-auto is-auth-form">
                                <div class="columns is-gapless is-flex-mobile">
                                    <!-- Image Columns -->
                                    <div class="column is-6 has-text-centered image-column is-padded">
                                        <div class="store-wrapper">
                                            <img src="assets/images/logo/nephos-white.svg" alt="">
                                            <div class="title">
                                                BOR Fashion
                                            </div>
                                            <div class="subtitle">Administrer votre Boutique </div>
                                        </div>
                                        <div class="nephos-overlay"></div>
                                    </div>
                                    <!-- Login/Register form -->
                                    <div class="column is-6 is-mobile-padded">
        
                                        <div class="tabs-wrapper animated-tabs">
                                            <!-- Tabs -->
                                            <div class="tabs is-form-tabs">
                                                <ul>
                                                    <li class="is-active" data-tab="login"><a>Login</a></li>
                                                </ul>
                                            </div>
                                            <!-- Login form -->
                                            <div id="login" class="navtab-content is-active">
                                                <form>
                                                    <!-- Form Control -->
                                                    <div class="control">
                                                        <label class="auth-label">Email*</label>
                                                        <input type="email" class="input" placeholder="">
                                                    </div>
                                                    <!-- Form Control -->
                                                    <div class="control">
                                                        <label class="auth-label">Password*</label>
                                                        <input type="password" class="input" placeholder="">
                                                    </div>
                                                    <!-- Form Control -->
                                                    <div class="control">
                                                        <label class="checkbox-wrap is-small">
                                                            <input id="house" type="checkbox" class="d-checkbox" checked>
                                                            <span></span>
                                                            <small>Remember me?</small>
                                                        </label>
                                                    </div>
                                                    <!-- Form Submit -->
                                                    <div class="button-wrapper">
                                                        <button type="submit" class="button feather-button is-small primary-button upper-button raised">
                                                            <span>Login</span>
                                                        </button>
                                                        <a class="forgotten">Forgot Password ?</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Login/Register form -->
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                    </div>
                    <!-- Authentication Layout -->
                </div>
                <!-- /Container -->
            </div>
            <!-- /Main section -->
        </div>
        <!-- /Main wrapper -->
        <!-- Concatenated plugins -->
        <script src="assets/js/app.js"></script>
        <!-- Helios js -->
        <script src="assets/js/nephos.js"></script>    </body>  
</html>
