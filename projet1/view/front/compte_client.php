
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title> Nephos :: Modern Bulma Ecommerce App and Dashboard</title>
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
        <div class="shop-wrapper" style="margin-left:0;width:100%;">
        
            <div class="section">
                <!-- Container -->
                <div class="container">
        
                    <!-- Account Layout -->
                    <div class="columns account-header">
                        <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                            <!-- Title -->
                            <div class="account-title">
                                <h2>ACCOUNT</h2>
                                <img class="brand-filigrane" src="assets/images/logo/nephos-greyscale.svg" alt="">
                            </div>
        
                            <!-- Account tabs -->
                            <div class="tabs account-tabs">
                                <ul>
                                    <li class="is-active"><a href="compte_client.php">Mon compte</a></li>
                                    <li><a href="pub&offre.php">Pub & Offre</a></li>
                                    <li><a href="panier.php">Panier</a></li>
                                </ul>
                            </div>
        
                            <!-- Account layout -->
                            <div class="columns is-account-grid is-multiline" style="display:none;">
        
                                <div class="column is-5">
                                    <!-- User card -->
                                    <div class="flat-card profile-card is-auto">
                                        <div class="card-body">
                                            <div class="profile-image">
                                                <img src="assets/images/avatars/elie.jpg" alt="">
                                            </div>
                                            <div class="username has-text-centered">
                                                <span>Elie Daniels</span>
                                                <small>Member since Sep 23 2017</small>
                                            </div>
                                        </div>
                                        <div class="profile-footer has-text-centered">
                                            <span class="achievement-title">Next Achievement</span>
                                            <div class="count">
                                                24/150
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Gold Customer card -->
                                    <div class="flat-card profile-info-card is-auto is-dark is-achievement">
                                        <div class="card-body">
                                            <img src="assets/images/logo/nephos-gold.svg" alt="">
                                            <div class="achievement-name">
                                                <span class="is-gold">Nephos Gold Customer</span>
                                                <span>As a Gold Customer, you have a permanent 10% discount on all your purchases.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Referal card -->
                                    <div class="flat-card profile-info-card is-auto is-dark is-achievement">
                                        <div class="card-body">
                                            <img src="assets/images/logo/nephos-referral.svg" alt="">
                                            <div class="achievement-name">
                                                <span class="is-green">Nephos Referer</span>
                                                <span>You have referred <b>30+</b> customers. You get a 2.5% discount on all your purchases.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- Details -->
                                <div class="column is-7">
                                    <div class="flat-card profile-info-card is-auto">
                                        <!-- Title -->
                                        <div class="card-title">
                                            <h3>Account details</h3>
        
                                            <div class="edit-account has-simple-popover popover-hidden-mobile" data-content="Edit Account" data-placement="top">
                                                <a href="parametre.php"><i class="feather-icons" data-feather="settings"></i></a>
                                            </div>
                                        </div>
                                        <!-- Contact Info -->
                                        <div class="card-body">
                                            <div class="columns">
                                                <div class="column is-6">
                                                    <div class="info-block">
                                                        <span class="label-text">First Name</span>
                                                        <span class="label-value">Elie</span>
                                                    </div>
        
                                                    <div class="info-block">
                                                        <span class="label-text">Email</span>
                                                        <span class="label-value">eliedaniels@gmail.com</span>
                                                    </div>
                                                </div>
        
                                                <div class="column is-6">
                                                    <div class="info-block">
                                                        <span class="label-text">Last Name</span>
                                                        <span class="label-value">Daniels</span>
                                                    </div>
        
                                                    <div class="info-block">
                                                        <span class="label-text">Phone</span>
                                                        <span class="label-value">+1 555 623 568</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Background Nephos Icon -->
                                        <img class="card-bg" src="assets/images/logo/nephos-greyscale.svg" alt="">
                                    </div>
        
                                    <!-- Address Info -->
                                    <div class="flat-card profile-info-card is-auto">
                                        <!-- Title -->
                                        <div class="card-title">
                                            <h3>Billing address</h3>
                                            <!-- Cog Button -->
                                            <div class="edit-account is-vhidden">
                                                <a href="parametre.php"><i class="feather-icons" data-feather="settings"></i></a>
                                            </div>
        
                                        </div>
                                        <!-- Billing Address -->
                                        <div class="card-body">
                                            <div class="columns">
                                                <div class="column is-6">
                                                    <div class="info-block">
                                                        <span class="label-text">Number</span>
                                                        <span class="label-value">23, Block C2</span>
                                                    </div>
        
                                                    <div class="info-block">
                                                        <span class="label-text">City</span>
                                                        <span class="label-value">Los Angeles</span>
                                                    </div>
        
                                                    <div class="info-block">
                                                        <span class="label-text">State</span>
                                                        <span class="label-value">CA</span>
                                                    </div>
                                                </div>
        
                                                <div class="column is-6">
                                                    <div class="info-block">
                                                        <span class="label-text">Street</span>
                                                        <span class="label-value">Church Street</span>
                                                    </div>
        
                                                    <div class="info-block">
                                                        <span class="label-text">Postal Code</span>
                                                        <span class="label-value">100065</span>
                                                    </div>
        
                                                    <div class="info-block">
                                                        <span class="label-text">Country</span>
                                                        <span class="label-value">United States</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Address Form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Container -->
            </div>
            <!-- /Main section -->
        </div>
        <!-- /Main wrapper -->
        <!-- Concatenated plugins -->
        <script src="assets/js/app.js"></script>
        <!-- Helios js -->
        <script src="assets/js/nephos.js"></script>
        <script src="assets/js/jquery.min.js"></script>
<script>
    $(function(){
        $(".columns.is-account-grid.is-multiline").fadeIn();
    })
</script>
        </body>  
</html>
