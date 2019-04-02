<?php 
require "../../entities/class_produit.php";
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="admin template, angular admin template, bootstrap admin template, modern admin template, modern design admin template, dashboard template, responsive admin template, angular web app, crypto dashboard, bitcoin dashboard">
    <title>Bootstrap &amp; Angular admin template + crypto dashboard - modern design admin | Boutique</title><!-- GLOBAL VENDORS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" media="all">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="../assets/vendors/feather-icons/feather.css" rel="stylesheet" />
    <link href="../assets/vendors/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <link href="../assets/vendors/themify-icons/themify-icons.css" rel="stylesheet" />
    <link href="../assets/vendors/line-awesome/css/line-awesome.min.css" rel="stylesheet" />
    <link href="../assets/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" /><!-- PAGE LEVEL VENDORS-->
    <link href="../assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="../assets/vendors/ion-rangeslider/css/ion.rangeSlider.min.css" rel="stylesheet" />
    <link href="../assets/css/app.min.css" rel="stylesheet" /><!-- PAGE LEVEL STYLES-->
    <link href="../assets/vendors/sweetalert2/dist/sweetalert.css" rel="stylesheet" />
    <link href="../assets/vendors/toastr/build/toastr.min.css" rel="stylesheet" />
    <script src="../assets/vendors/sweetalert2/dist/sweetalert.min.js"></script>
    <link href="../assets/vendors/boostrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <style type="text/css">
        .g::-webkit-file-upload-button {
  visibility: hidden;
}
        .g::-o-file-upload-button {
  visibility: hidden;
}
        .g::-moz-file-upload-button {
  visibility: hidden;
}
.g::before {
  content: 'Changer';
  display: inline-block;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
}

/* width */
::-webkit-scrollbar {
  width: 4px;
  border-radius:1px;
}

/* Track */
::-webkit-scrollbar-track {
  background: rgba(0,0,0,0.1); 
  margin-top:4%;
  margin-bottom:4%;
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
<body class="mini-sidebar" style="overflow-y:hidden;display:none;">
    <div class="page-wrapper">
        <div class="content-wrapper">
            <!-- BEGIN: Content-->
            <div class="content-area" style="background-color: #F0F0F0">
                <!-- BEGIN: Header-->



                                        <div class="card col-md-3" style="border-radius:0px;position:fixed;top:6%;z-index:10;">
                                            <div class="card-body" style="margin:auto;">
                                <h5 class="box-title text-primary">critère de selections</h5>
                            </div>
                                                                    <div class="card-body" style="margin-top:-14%;">                           
                                            <div class="md-form mb-4"><input class="md-form-control" type="text" id="recherche" autocomplete="off"><label>Nom Produit</label></div>
                                            <div class="form-group row mb-4">
                                    <div class="col-md-12">
                                        <span class="text-primary" style="font-size:13px;">
                                        Prix    
                                        </span><br><br>
                                        <input id="range_03" class="irs-hidden-input" tabindex="-1" readonly="" style="display:none;">
                                    </div>
                                    <div class="col-md-12">
                                        <span class="text-primary" style="font-size:13px;">
                                        Quantité    
                                        </span><br><br>
                                        <input id="range_04" class="irs-hidden-input" tabindex="-1" readonly="" style="display:none;">
                                    </div>
                                </div>
<div class="dropdown bootstrap-select form-control" style="margin-bottom:5%;"><select class="form-control selectpicker" id="ge" data-style="btn-dark" tabindex="-98">
                                                <option value='option'>Genre</option>
                                                <option value='homme'>homme</option>
                                                <option value='femme'>femme</option>
                                                <option value='enfant'>enfant</option>
                                            </select></div>
<div class="dropdown bootstrap-select form-control" style="margin-bottom:5%;"><select class="form-control selectpicker" data-style="btn-dark" id="cs" tabindex="-98">
                                            <?php 
$req="select * from categorie";
    $requette=config::$bdd->query($req);
                        echo "<option value='option'>Catégories</option>"; 
                        while($data=$requette->fetch()){
                        echo "<option value='".$data[0]."'>".$data[0]."</option>";
                        } 
                                            ?>
                                            </select></div>
<div class="col-md-12" style="margin-bottom:10%;"><br><center><span style="font-size:15px;">elements par page</span><br> <input id="touchspin_1" style="padding-left:30px;padding:17px;background:#2949ef;color:white;outline:none;" value="1" type="text" class="form-control col-md-3"></center></div>
                                 
                                
                                        </div>
                        </div>

                <div class="page-content">      
                    <span class="lead">2 resultats</span>
                                <div class="row offset-md-6"  style="margin-top:-5%;margin-bottom:5%;">
                        <div class="btn-group" role="group" aria-label="Basic example">
                                             <div class="btn btn-primary" id="plus" style="padding-top:1.7%;padding-bottom:1.7%;"><span class="btn-icon"><i class="la la-backward"></i>Back</span></div>
                                                <div class="btn" style="padding-top:1.7%;padding-bottom:1.7%;background:white;"><span class="btn-icon"><span class="page_actuel">1</span> /<span class=resultat> 1</span> </span></div>
                                                <div class="btn btn-primary" id="moins" style="padding-top:1.7%;padding-bottom:1.7%;"><span class="btn-icon btn-icon-right">Next<i class="la la-forward"></i></span></div>
                                            </div>
                </div>             
<div class="row offset-md-4 col-md-6" style="overflow-y:scroll;padding-top:2.7%;height:1100px;opacity:0;" id="con">

<?php 
Produit::afficher();
?>
                                        
</div>
                </div><!-- BEGIN: Footer-->
            </div><!-- END: Content-->
<div class="sweet-overlay" tabindex="-1" style="opacity: 1.04; display: block;" id="lol">
<div class="row">
    <div class="col-md-3" style="margin-left:5%;margin-top:7%;">
                                <div class="card" id="j">
                                    <div class="card-cup text-white justify-content-center" style="box-shadow:none;">
                     <input type="button" name="modifier le produit" class="btn btn-primary" value="Quitter l'opération" id="q">
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post" id="formualire">
                                            <input type="text" name="id" style="display:none;">
                                        <div class="md-form mb-4"><input class="md-form-control" taille="255" tip="chaine"  oninput="verifier(this);" type="text" name="titres"  autocomplete="off" required><label>Nom Produit</label></div>
                                        <div class="md-form mb-4"><input class="md-form-control"  taille="4" tip="numero" oninput="verifier(this);"  type="text" name="prix"  autocomplete="off" required><label>Prix Produit</label></div>
                                        <div class="md-form mb-4" required><input class="md-form-control" taille="4"  tip="numero" oninput="verifier(this);" type="text" name="quantite" autocomplete="off"  required><label>Quantité</label></div>
                                        <div class="dropdown bootstrap-select form-control" style="margin-bottom:5%;"><select class="form-control selectpicker ic" data-style="btn-dark" tabindex="-98" name="categorie">
                                            <?php 
$req="select * from categorie";
    $requette=config::$bdd->query($req);
                        echo "<option value='option'>Catégories</option>"; 
                        while($data=$requette->fetch()){
                        echo "<option value='".$data[0]."'>".$data[0]."</option>";
                        } 
                                            ?>
                                            </select></div>
                                         <div class="dropdown bootstrap-select form-control" style="margin-bottom:5%;"><select class="form-control selectpicker" data-style="btn-dark" tabindex="-98" name="genre">
                                                <option value="option">Genre</option>
                                                <option value="homme">homme</option>
                                                <option value="femme">femme</option>
                                                <option value="enfant">enfant</option>
                                            </select></div>
                                        <div class="md-form"><i class="material-icons prefix">description</i><textarea class="md-form-control auto-resize" taille="255" oninput="verifier(this);" name="description"></textarea><label>Description</label></div>
                                        <hr>
                                        <input type="button" name="modifier le produit" class="btn btn-danger" value="modifier le produit" id="soum" style="border-radius:0;">
                                   </form>
                                    </div>
                                </div>
                            </div>

    <div class="col-md-3" style="margin-top:15%;">
                                <div class="card" id="j">
                                    <form method="post" enctype='multipart/form-data'>
                                                                            <div class="card-cup text-white justify-content-center" style="box-shadow:none;">
                     <input type="file" name="file" class="btn btn-primary g" id="file">
                                    </div>
                                    <div class="card-body io" style="padding:1%;">
                                        <p class="card-text"><label for="file"><img src="../assets/img/clothes/37.jpg" alt="" id="cv" style="cursor:pointer;"></label></p>                                      
                                    </div>
                                    </form>
                                </div>
                            </div>
</div> 
</div>
        </div>
    </div><!-- BEGIN: Search form-->
    <!-- END: Quick sidebar-->
    <!-- BEGIN: Page backdrops-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div><!-- END: Page backdrops-->
    <!-- CORE PLUGINS-->
    <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendors/metismenu/dist/metisMenu.min.js"></script>
    <script src="../assets/vendors/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script><!-- PAGE LEVEL PLUGINS-->
    <script src="../assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="../assets/vendors/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="../assets/vendors/boostrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script><!-- CORE SCRIPTS-->
    <script src="../assets/vendors/toastr/build/toastr.min.js"></script><!-- CORE SCRIPTS-->
    <script src="../assets/js/app.min.js"></script><!-- PAGE LEVEL SCRIPTS-->
    <script src="../assets/js/script.js"></script>
    <script>document.write("<script src=\"../assets/js/consulter_produit.js?dev="+Math.round(+new Date() / 1000)+"\"><\/script>")</script>
    <script>
    </script>
</body>

</html>