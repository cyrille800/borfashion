<?php 
include "../../entities/class_produit.php";
?>
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
        <div class="shop-wrapper" style="margin-left:0;width:100%;">
    
            <div class="section">
                <!-- Container -->
                <div class="container" style="overflow-y:scroll;height:100vh;">
        
                    <!-- Accessories products -->
                    <div class="columns category-header" style="display:none;">
                        <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                            <!-- Title -->
                            <div class="category-title is-product-category">
                                <h2>CHAUSSURES</h2>
                            </div>
        
                            <!-- Controls -->
                            <div class="listing-controls">
                            </div>

                            <div class="columns is-product-grid is-multiline">
<?php 
produit::afficher_dans_boutique("chaussure");
?>
                            </div>
</div>
        
                        </div>
<div class="columns category-header">
                        <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                            <!-- Title -->
                            <div class="category-title is-product-category">
                                <h2>ACCESSOIRES</h2>
                            </div>
        
                            <!-- Controls -->
                            <div class="listing-controls">
                            </div>

                            <div class="columns is-product-grid is-multiline">
<?php 
produit::afficher_dans_boutique("accessoire");
?>
                            </div>

        
                        </div>
                    </div>
                    <div class="columns category-header">
                        <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                            <!-- Title -->
                            <div class="category-title is-product-category">
                                <h2>COSTUMES</h2>
                            </div>
        
                            <!-- Controls -->
                            <div class="listing-controls">
                            </div>

                            <div class="columns is-product-grid is-multiline">
<?php 
produit::afficher_dans_boutique("costume");
?>
                            </div>

        
                        </div>
                    </div>
                    <div class="columns category-header">
                        <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                            <!-- Title -->
                            <div class="category-title is-product-category">
                                <h2>PANTALONS</h2>
                            </div>
        
                            <!-- Controls -->
                            <div class="listing-controls">
                            </div>

                            <div class="columns is-product-grid is-multiline">
<?php 
produit::afficher_dans_boutique("pantalon");
?>
                            </div>

        
                        </div>
                    </div>
<div class="columns category-header">
                        <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                            <!-- Title -->
                            <div class="category-title is-product-category">
                                <h2>PULLS</h2>
                            </div>
        
                            <!-- Controls -->
                            <div class="listing-controls">
                            </div>

                            <div class="columns is-product-grid is-multiline">
<?php 
produit::afficher_dans_boutique("pull");
?>
                            </div>

        
                        </div>
                         </div>
                         <div class="columns category-header">
                        <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                            <!-- Title -->
                            <div class="category-title is-product-category">
                                <h2>TRICOTS</h2>
                            </div>
        
                            <!-- Controls -->
                            <div class="listing-controls">
                            </div>

                            <div class="columns is-product-grid is-multiline">
<?php 
produit::afficher_dans_boutique("tricot");
?>
                            </div>

        
                        </div>
                    </div>
                    </div> 
                    <!-- /Accessories products -->
                </div>
                <!-- /Container -->
            </div>
        </div>
        <!-- /Main wrapper -->
        <!-- Concatenated plugins -->
        <script src="assets/js/app.js"></script>
        <!-- Helios js -->
        <script src="assets/js/nephos.js"></script>
        <script src="assets/js/jquery.min.js"></script>
<script>
    $(function(){
        $(".columns.category-header").fadeIn("100");
        $(".add").click(function(){
            $.get("code_panier.php",{operation:"ajouter",id:$(this).attr("id"),nom:$(this).attr("nom"),prix:$(this).attr("prix")})
        })
    })
</script>

        </body>  
</html>
