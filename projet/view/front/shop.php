
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
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
<style type="text/css">
            /* width */
        ::-webkit-scrollbar {
        width: 4px;
        border-radius:1px;
        }
        /* Track */
        ::-webkit-scrollbar-track {
        background: rgba(0,0,0,0.1);
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: #888;
        }
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
        background: #555;
        }
</style>
    </head>
    <body>
        
        <!-- Pageloader -->
        <div class="pageloader"></div>
        <div class="infraloader is-active"></div>
        <nav class="navbar mobile-navbar is-hidden-desktop is-hidden-tablet" aria-label="main navigation">
            <!-- Brand -->
            <div class="navbar-brand">
                <a class="navbar-item" href="index.php" target="frame1">
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
                        <a href="wishlist.php" class="navbar-item">PUB & OFFRE</a>
                        <a href="account-edit.php" class="navbar-item">Settings</a>
                        <a href="index_client.php" class="navbar-item">Log out</a>
                    </div>
                </div>
        
            </div>
        </nav>
        <!-- Main Sidebar-->
        <div class="main-sidebar">
            <div class="sidebar-brand">
                <a href="index.php" target="frame1"><img src="assets/images/logo/nephos.svg" alt=""></a>
            </div>
            <div class="sidebar-inner">
                <ul class="icon-menu">
                    <!-- Shop sidebar trigger -->
                    <li>
                        <a href="javascript:void(0);" id="open-shop"><i data-feather="home"></i></a>
                    </li>            <!-- Cart sidebar trigger -->
                    <li>
                        <a href="javascript:void(0);" id="open-cart"><i data-feather="shopping-cart"></i><span class="cart-items"></span></a>
                    </li>            <!-- Search trigger -->
                    <li>
                        <a href="javascript:void(0);" id="open-search"><i data-feather="search"></i></a>
                        <a href="javascript:void(0);" id="close-search" class="is-hidden is-inactive"><i data-feather="x"></i></a>
                    </li>            <!-- Shop Filters -->
                    <li>
                        <a id="open-filters"><i data-feather="settings"></i></a>
                    </li>            <!-- Mobile mode trigger -->
                    <li class="is-hidden-desktop is-hidden-tablet">
                        <a href="javascript:void(0);" id="mobile-mode"><i data-feather="smartphone"></i></a>
                    </li>        </ul>
        
                <!-- User account -->
                <ul class="bottom-menu is-hidden-mobile">
                    <li>
                        <a href="index_client.php"><i data-feather="log-out"></i></a>
                    </li>        </ul>
            </div>
        </div>
        
        <!-- Shop quickview -->
        <div class="shop-quickview has-background-image" data-background="assets/images/bg/sidebar.jpeg">
            <div class="inner">
                <!-- Header -->
                <div class="quickview-header">
                    <h2>Nephos</h2>
                    <span id="close-shop-sidebar"><i data-feather="x"></i></span>
                </div>
                <!-- Shop menu -->
                <ul class="shop-menu">
                    <li>
                        <a href="liste_shop.php" target="frame1">
                            <span>Boutique</span>
                            <i data-feather="grid"></i>
                        </a>
                    </li>
                    <li>
                        <a href="compte_client.php" target="frame1">
                            <span>Mon Compte</span>
                            <i data-feather="user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="panier.php" target="frame1">
                            <span>Panier</span>
                            <i data-feather="credit-card"></i>
                        </a>
                    </li>
                    <li>
                        <a href="pub&offre.php" target="frame1">
                            <span>PUB & OFFRE</span>
                            <i data-feather="heart"></i>
                        </a>
                    </li>
                </ul>
                <!-- Profile image -->
                <ul class="user-profile">
                    <li>
                        <a href="account.php">
                            <img src="assets/images/avatars/elie.jpg" alt="">
                            <span class="user">
                                <span>ELie Daniels</span>
                                <span>0 <small>Orders</small></span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Cart quickview -->
        <div class="cart-quickview">
            <div class="inner">
                <!-- Header -->
                <div class="quickview-header">
                    <h2>panier rapide</h2>
                    <span id="close-cart-sidebar"><i data-feather="x"></i></span>
                </div>
                <!-- Total and checkout -->
                <div class="cart-action">
                    <span class="cart-total">
                        <small>$</small><prix>0</prix>
                    </span>
                    <a href="panier.php" class="button primary-button upper-button raised is-bold" style="text-decoration:none;" target="frame1">
                        <span>Ouvrir le panier</span>
                    </a>
                </div>
                <!-- Cart quickview body -->
                <div class="cart-body">
                    <ul class="shopping-cart-items">
                    </ul>
                </div>
            </div>
        </div>
        <!-- Filters quickview -->
        <div class="filters-quickview">
            <div class="inner">
                <!-- Header -->
                <div class="quickview-header">
                    <h2>Filters</h2>
                    <span id="close-filters-sidebar"><i data-feather="x"></i></span>
                </div>
        
                <!-- Filters body -->
                <div class="filters-body">
                    
        
                    <!-- Categories checkboxes -->
                    <div class="filter-block">
                        <h3 class="filter-title has-padding">Categories</h3>
                        <div class="columns is-checkboxes is-gapless is-multiline">
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="accessoire" type="checkbox" name="categorie" class="d-checkbox" checked>
                                            <span></span>
                                            accessoire
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="chaussure" type="checkbox" name="categorie" class="d-checkbox" checked>
                                            <span></span>
                                            chaussure
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="costume" type="checkbox" name="categorie" class="d-checkbox" checked>
                                            <span></span>
                                            costume
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="pantalon" type="checkbox" name="categorie" class="d-checkbox" checked>
                                            <span></span>
                                            pantalon
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="pull" type="checkbox" name="categorie" class="d-checkbox" checked>
                                            <span></span>
                                            pull
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="tricot" type="checkbox" name="categorie" class="d-checkbox" checked>
                                            <span></span>
                                            tricot
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <h3 class="filter-title has-padding">Genre</h3>
                        <div class="columns is-checkboxes is-gapless is-multiline">
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="homme" type="checkbox" name="genre" class="d-checkbox" checked>
                                            <span></span>
                                            homme
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="femme" type="checkbox" name="genre" class="d-checkbox" checked>
                                            <span></span>
                                            femme
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="enfant" type="checkbox" name="genre" class="d-checkbox" checked>
                                            <span></span>
                                            enfant
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /Categories -->
                    
                    <!-- Price range filter -->
                    <div class="filter-block">
                        <h3 class="filter-title">Price</h3>
                        <div class="price-range-wrapper">
                            <div class="price-limit">0</div>
                            <div class="range-slider">
                                <input class="input-range" type="range" name="prix" value="1500" min="1" max="1500">
                                <div class="slider-output">
                                    <small>Show between</small><span class="range-value"></span>
                                </div>
                            </div>   
                            <div class="price-limit">1500</div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
        
        <!-- Main wrapper -->
        <div class="shop-wrapper">
        
            <!-- Search overlay -->
            <div class="search-overlay"></div>
            
            <!-- Search input -->
            <div class="search-input-wrapper is-desktop is-hidden">
                <div class="field">
                    <div class="control">
                        <input type="text" name="search" autofocus required>
                        <span id="clear-search" role="button"><i data-feather="x"></i></span>
                        <span class="search-help">Saisir le nom d'un produit</span>
                    </div>
                </div>
            </div>
                 <iframe src="index.php" style="min-height:99.6vh;width:100%;" name="frame1" vspace=100 scrolling=no frameborder=0>

                </iframe>
        </div>
        <!-- /Main wrapper -->
        <!-- Concatenated plugins -->
        <script src="assets/js/app.js"></script>
        <!-- Helios js -->
        <script src="assets/js/nephos.js"></script>
        <script src="assets/js/jquery.min.js"></script>
<script>
    $(function(){
trier();
function trier(){
    var genre="";
    $('[name="genre"]').each(function(){
       if($(this).is(":checked")){
        genre+=$(this).attr("id");
       }
    })
    var categorie="";
    $('[name="categorie"]').each(function(){
       if($(this).is(":checked")){
        categorie+=$(this).attr("id");
       }
    })
     $.get("code_panier.php",{operation:"trier",nom:$('[name="search"]').val(),prix:$('[name="prix"]').val(),genre:genre,categorie:categorie}) 
}
$('[name="genre"]').change(function(){
trier();
})
$('[name="categorie"]').change(function(){
trier();
})
$('[name="search"]').keyup(function(){
trier();
})
$('[name="prix"]').change(function(){
trier();
})

        $('[target="frame1"]').click(function(){
            $(".shop-quickview.has-background-image").removeClass("is-active");
            $(".cart-quickview").removeClass("is-active");
        })


var nombre=$(".shopping-cart-items li").length;
            $.get("code_panier.php",{operation:"compter"},function(data){
              var i=0;
                    
                if((parseInt(data)!=parseInt(nombre)) && parseInt(data)!=0){
                    
                while(i!=parseInt(data)){

$.get("code_panier.php",{operation:"lire",numero:i},function(datas){

                         var value=datas.split(";");
                        $(".shopping-cart-items").append('<li class="clearfix" id="'+value[0]+'"><img src="../assets/img/clothes/'+value[0]+'.jpg" alt=""><span class="item-meta"><span class="item-name">'+value[1]+'</span><span class="item-price">$'+value[2]+'</span></span><span class="quantity"><input class="input is-rounded" type="number" value="'+value[3]+'"></span><span class="remove-item" id="'+value[0]+'" prix="'+value[2]+'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x has-simple-popover" data-content="Remove from Cart" data-placement="top"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></li>')
                    })  
                i++; 
                }
                               }

            })
        


        setInterval(function(){
            var nombre=$(".shopping-cart-items li").length;
            $.get("code_panier.php",{operation:"compter"},function(data){
                    
                if((parseInt(data)!=parseInt(nombre)) && parseInt(data)!=0){

$.get("code_panier.php?operation=lires",function(datas){

                         var value=datas.split(";");
                        if($(".shopping-cart-items").find("li[id='"+value[0]+"']").length==0){
                        $(".shopping-cart-items").append('<li class="clearfix" id="'+value[0]+'"><img src="../assets/img/clothes/'+value[0]+'.jpg" alt=""><span class="item-meta"><span class="item-name">'+value[1]+'</span><span class="item-price">$'+value[2]+'</span></span><span class="quantity"><input class="input is-rounded" type="number" value="'+value[3]+'"></span><span class="remove-item" id="'+value[0]+'" prix="'+value[2]+'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x has-simple-popover" data-content="Remove from Cart" data-placement="top"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></li>')
                    
                        }
                    })  
                               }

            })

                                    compter=0;
            $(".shopping-cart-items li [prix]").each(function(){
compter+=parseInt($(this).attr("prix"))*parseInt($(this).parent().find("input").val());
            })
            $("prix").text(compter);



        },100)

        setInterval(function(){
                                $(".remove-item").click(function(){
                $.get("code_panier.php",{operation:"supprimer",id:$(this).attr("id")},function(datass){
                    console.log(datass);
                })
                $(".shopping-cart-items li[id='"+$(this).attr("id")+"']").remove();
            })
                                $("[type='number']").change(function(){
                                    $.get("code_panier.php",{operation:"modifier",id:$(this).parent().parent().attr("id"),qte:$(this).val()});
                                })
                            },200)
    })
</script>
          </body>  
</html>
