
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
        
            <!-- Main section -->
            <div class="section">
                <!-- Container -->
                <div class="container">
        
                    <!-- Wishlists Layout -->
                    <div class="columns account-header">
                        <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                            <!-- title -->
                            <div class="account-title">
                                <h2>WISHLIST</h2>
                                <!-- Icon filigrane -->
                                <img class="brand-filigrane" src="assets/images/logo/nephos-greyscale.svg" alt="">
                            </div>
        
                            <!-- Account tabs -->
                            <div class="tabs account-tabs">
                                <ul>
                                    <li><a href="MonBlog-mvc-objet/index.php">Mon compte</a></li>
                                    <li class="is-active"><a href="../basic ui/consulter_offre.php">Pub & Offre</a></li>
                                    <li><a href="panier.php">Panier</a></li>
                                </ul>
                            </div>
        
                            <!-- Row -->
                            <div class="columns is-account-grid is-multiline" style="display:none;">
                                <!-- Wishlists -->
                                <div class="column is-4">
                                    <!-- List of Wishlists -->
                                    <div class="flat-card is-auto menu-card">
                                        <div class="card-title">
                                            <h3>Add Wishlist</h3>
        
                                            <div class="edit-account">
                                                <a href="javascript:void(0);" class="modal-trigger has-simple-popover" data-modal="new-wishlist" data-content="Add a New Wishlist" data-placement="top"><i class="feather-icons" data-feather="plus"></i></a>
                                            </div>
                                        </div>
                                        <ul class="wishlists">
                                            <li class="is-active"><a>Main List</a></li>
                                            <li><a>Couches</a></li>
                                            <li><a>Tables</a></li>
                                            <li><a>Accessories</a></li>
                                        </ul>
                                    </div>
                                </div>
        
                                <div class="column is-8">
                                    <div class="flat-card wishlist-card is-auto">
                                        <!-- List of Wishlist Items -->
                                        <ul class="wishlist">
        
                                            <!-- Wishlist Item -->
                                            <li class="wishlist-item" onclick="return true">
                                                <div class="item-wrapper">
                                                    <!-- Product Image -->
                                                    <img src="assets/images/products/office6.png" alt="">
                                                    <!-- Product meta -->
                                                    <span class="product-info">
                                                        <span>The Conqueror</span>
                                                        <span>Office</span>
                                                    </span>
                                                    <div class="action">
                                                        <!-- Dropdown button -->
                                                        <div class="dropdown is-right">
                                                            <span class="dropdown-trigger">
                                                                <span class="dropdown-button">
                                                                    <a href="javascript:void(0);"><i class="feather-icons" data-feather="chevron-down"></i></a>
                                                                </span>
                                                            </span>
                                                            <!-- Dropdown menu-->
                                                            <div class="dropdown-menu" role="menu">
                                                                <div class="dropdown-content">
                                                                    <!-- Dropdown item -->
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="list"></i> <span>Move to List</span>
                                                                    </a>
                                                                    <!-- Dropdown item -->
                                                                    <a class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="eye"></i> <span>View Product</span>
                                                                    </a>
                                                                    <!-- Dropdown item -->
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="shopping-cart"></i> <span>Add to Cart</span>
                                                                    </a>
                                                                    <hr class="dropdown-divider">
                                                                    <!-- Dropdown item -->
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="x"></i> <span>Remove</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
        
                                            <!-- Wishlist Item -->
                                            <li class="wishlist-item" onclick="return true">
                                                <div class="item-wrapper">
                                                    <img src="assets/images/products/office7.gif" alt="">
                                                    <span class="product-info">
                                                        <span>The Gentleman</span>
                                                        <span>Office</span>
                                                    </span>
                                                    <div class="action">
                                                        <div class="dropdown is-right">
                                                            <span class="dropdown-trigger">
                                                                <span class="dropdown-button">
                                                                    <a href="javascript:void(0);"><i class="feather-icons" data-feather="chevron-down"></i></a>
                                                                </span>
                                                            </span>
                                                            <div class="dropdown-menu" role="menu">
                                                                <div class="dropdown-content">
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="list"></i> <span>Move to List</span>
                                                                    </a>
                                                                    <a class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="eye"></i> <span>View Product</span>
                                                                    </a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="shopping-cart"></i> <span>Add to Cart</span>
                                                                    </a>
                                                                    <hr class="dropdown-divider">
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="x"></i> <span>Remove</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
        
                                            <!-- Wishlist Item -->
                                            <li class="wishlist-item" onclick="return true">
                                                <div class="item-wrapper">
                                                    <img src="assets/images/products/access1.jpg" alt="">
                                                    <span class="product-info">
                                                        <span>Styled Lamp</span>
                                                        <span>Accessories</span>
                                                    </span>
                                                    <div class="action">
                                                        <div class="dropdown is-right">
                                                            <span class="dropdown-trigger">
                                                                <span class="dropdown-button">
                                                                    <a href="javascript:void(0);"><i class="feather-icons" data-feather="chevron-down"></i></a>
                                                                </span>
                                                            </span>
                                                            <div class="dropdown-menu" role="menu">
                                                                <div class="dropdown-content">
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="list"></i> <span>Move to List</span>
                                                                    </a>
                                                                    <a class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="eye"></i> <span>View Product</span>
                                                                    </a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="shopping-cart"></i> <span>Add to Cart</span>
                                                                    </a>
                                                                    <hr class="dropdown-divider">
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="x"></i> <span>Remove</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
        
                                            <!-- Wishlist Item -->
                                            <li class="wishlist-item" onclick="return true">
                                                <div class="item-wrapper">
                                                    <img src="assets/images/products/kids5.jpg" alt="">
                                                    <span class="product-info">
                                                        <span>Treasure Chest</span>
                                                        <span>For Kids</span>
                                                    </span>
                                                    <div class="action">
                                                        <div class="dropdown is-right">
                                                            <span class="dropdown-trigger">
                                                                <span class="dropdown-button">
                                                                    <a href="javascript:void(0);"><i class="feather-icons" data-feather="chevron-down"></i></a>
                                                                </span>
                                                            </span>
                                                            <div class="dropdown-menu" role="menu">
                                                                <div class="dropdown-content">
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="list"></i> <span>Move to List</span>
                                                                    </a>
                                                                    <a class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="eye"></i> <span>View Product</span>
                                                                    </a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="shopping-cart"></i> <span>Add to Cart</span>
                                                                    </a>
                                                                    <hr class="dropdown-divider">
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="x"></i> <span>Remove</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
        
                                            <!-- Wishlist Item -->
                                            <li class="wishlist-item" onclick="return true">
                                                <div class="item-wrapper">
                                                    <img src="assets/images/products/modern-bed.jpg" alt="">
                                                    <span class="product-info">
                                                        <span>Modern Bed</span>
                                                        <span>House</span>
                                                    </span>
                                                    <div class="action">
                                                        <div class="dropdown is-right">
                                                            <span class="dropdown-trigger">
                                                                <span class="dropdown-button">
                                                                    <a href="javascript:void(0);"><i class="feather-icons" data-feather="chevron-down"></i></a>
                                                                </span>
                                                            </span>
                                                            <div class="dropdown-menu" role="menu">
                                                                <div class="dropdown-content">
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="list"></i> <span>Move to List</span>
                                                                    </a>
                                                                    <a class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="eye"></i> <span>View Product</span>
                                                                    </a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="shopping-cart"></i> <span>Add to Cart</span>
                                                                    </a>
                                                                    <hr class="dropdown-divider">
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class="feather-icons" data-feather="x"></i> <span>Remove</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
        
                                    <!-- List Pagination -->
                                    <div class="wishlist-pagination">
                                        <ul>
                                            <li class="is-active"><span>1</span></li>
                                            <li><span>2</span></li>
                                            <li><span>3</span></li>
                                            <li><span>4</span></li>
                                        </ul>
                                    </div>
                                    <!-- /List Pagination -->
                                </div>
                            </div>
                            <!-- /Row -->
                        </div>
                    </div>
                </div>
                <!-- /Container -->
            </div>
            <!-- /Main section -->
        </div>
        <!-- /Main wrapper -->
        
        <!-- Add Wishlist Modal -->
        <div id="new-wishlist" class="modal review-modal">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="box">
                    <div class="box-header">
                        <img src="assets/images/logo/nephos-greyscale.svg" alt="">
                        <span>NEW LIST</span>
                        <div class="modal-delete"><i data-feather="x"></i></div>
                    </div>
                    <div class="box-body">
                        <p>Add a new sub list to classify your wishlist items. You can then manage them and find them more easily.</p>
                        <div class="control control-medium is-input-wrapper">
                            <input type="text" class="input is-minimal" placeholder="Wishlist name">
                        </div>
                        <div class="has-text-right">
                            <button type="submit" class="button feather-button is-bold primary-button raised">
                                Create
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Wishlist Modal -->
        <!-- Concatenated plugins -->
        <script src="assets/js/app.js"></script>
        <!-- Helios js -->
        <script src="assets/js/nephos.js"></script>
        <script src="assets/js/jquery.min.js"></script>
<script>
    $(function(){
        $(".columns.is-account-grid.is-multiline").fadeIn("100");
    })
</script>
    </body>  
</html>
