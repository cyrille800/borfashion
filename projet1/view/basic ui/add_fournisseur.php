<?php 
require "../../entities/categorie.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="admin template, angular admin template, bootstrap admin template, modern admin template, modern design admin template, dashboard template, responsive admin template, angular web app, crypto dashboard, bitcoin dashboard">
    <title>Bootstrap &amp; Angular admin template + crypto dashboard - modern design admin | Dropzone File Upload</title><!-- GLOBAL VENDORS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" media="all">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="../assets/vendors/feather-icons/feather.css" rel="stylesheet" />
    <link href="../assets/vendors/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <link href="../assets/vendors/themify-icons/themify-icons.css" rel="stylesheet" />
    <link href="../assets/vendors/line-awesome/css/line-awesome.min.css" rel="stylesheet" />
    <link href="../assets/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" /><!-- PAGE LEVEL VENDORS-->
    <link href="../assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="../assets/vendors/ion-rangeslider/css/ion.rangeSlider.min.css" rel="stylesheet" />
    <link href="../assets/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" /><!-- PAGE LEVEL VENDORS-->
    <link href="../assets/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet" /><!-- THEME STYLES-->
    <link href="../assets/vendors/toastr/build/toastr.min.css" rel="stylesheet" />
    <link href="../assets/vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" />
    <script src="../assets/vendors/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <link href="../assets/css/app.min.css" rel="stylesheet" /><!-- PAGE LEVEL STYLES-->
</head>

<body    style="background-color: #f0f0f0;display:none;overflow:hidden;">
        <div class="content-wrapper">

                <div class="page-content"   style="background-color: #f0f0f0;">
                    <!-- BEGIN: Page heading-->
                    <div class="page-heading">
                        <div class="page-breadcrumb">
                            <h1 class="page-title page-title-sep">Fournisseur</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="la la-home font-20"></i></a></li>
                                <li class="breadcrumb-item">Forms</li>
                                <li class="breadcrumb-item">Ajouter un fournisseur</li>
                            </ol>
                        </div>
                    </div><!-- BEGIN: Page content-->
                    <div>
                        <div class="card col-md-8"  style="margin-left:12%;border-radius:0px;">
                            <div class="card-body">
                                <h5 class="box-title text-primary">AJOUTER UN FOURNISSEUR</h5>
                                <div class="row" style="margin-top:-5%;">
                                    <div class="col-md-4" style="margin-top:9%;">
                                                                    <form action="../../core/upload_contact.php" class="dropzone" id="dropzones">
                                                                      <div class="fallback">
                                                                        <input name="contact" type="file" id="fichier">
                                                                      </div>
                                                                    </form> 
                                                                    <button class="btn btn-light" type="button" id="preview">Prévisualiser</button>
                                    </div>
                                                                    <div class="col-lg-5">
                                    <div class="card-body">
                                                               <form action="" method="post" id="testform">
                                        <div>
                                            <div class="md-form mb-4"><input class="md-form-control" type="text" taille="255" tip="chaine" name="prenom"  oninput="verifier(this);" autocomplete="off" required><label>Prenom</label></div>
                                                                                        <div class="form-group row">
                                                <div class="col-4">Femme</div>
                                                <div class="col-4" style="margin-left:-12%;"><label class="ui-switch switch-solid"><input type="checkbox" name="genre"><span></span></label></div>
                                                <div class="col-5">Homme</div>
                                            </div>
                                            <div class="md-form mb-4"><input class="md-form-control" name="mail" type="email" tip="mail"  oninput="verifier(this);" required><label>email</label></div>
                                            <div class="md-form mb-4"><input class="md-form-control" type="text" name="numero" tip="numero" taille="8" oninput="verifier(this);" required><label>Numero de téléphone</label></div>
                                            <div class="dropdown bootstrap-select form-control" style="margin-bottom:5%;"><select class="form-control  selectpicker" name="pays" data-style="btn-dark" tabindex="-98" >
                                                <option value="option">Pays</option>
                                                <option value="tunisie">tunisie</option>
                                                <option value="cameroun">cameroun</option>
                                                <option value="tunisie">france</option>
                                            </select></div>
                                        <div class="dropdown bootstrap-select form-control" style="margin-bottom:5%;"><select class="form-control selectpicker ic" data-style="btn-dark" tabindex="-98" name="ville">
                                                <option value="option">Ville</option>
                                                <option value="tunis">tunis</option>
                                                <option value="bizerte">bizerte</option>
                                                <option value="sousse">sousse</option>
                                            </select></div>
                                        <div class="dropdown bootstrap-select form-control" style="margin-bottom:5%;"><select class="form-control selectpicker ic" data-style="btn-primary" tabindex="-98" name="categorie">
                                            <?php 
$req="select * from categorie";
    $requette=config::$bdd->query($req);
                        echo "<option value='option'>Type de produit</option>"; 
                        while($data=$requette->fetch()){
                        echo "<option value='".$data[0]."'>".$data[0]."</option>";
                        } 
                                            ?>
                                            </select></div>
                                        </div>
                                    </div> 
                            </div>
                            <div class="col-md-2" style="margin-top:9%;">
                                <button class="btn btn-primary" type="button" id="soum">ajouter fournisseur</button><br><br>
                                <button class="btn btn-light" type="reset" style="margin-left:7%;">Annuler l'opération</button>
                            </div>
                                </div>
                        </form>
                        </div>
                    </div><!-- END: Page content-->
                </div><!-- BEGIN: Footer-->
            </div><!-- END: Content-->
    </div><!-- BEGIN: Search form-->
    <!-- CORE PLUGINS-->


    <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendors/metismenu/dist/metisMenu.min.js"></script>
    <script src="../assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="../assets/vendors/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="../assets/vendors/boostrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script><!-- CORE SCRIPTS-->
    <script src="../assets/vendors/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script><!-- PAGE LEVEL PLUGINS-->
    <script src="../assets/vendors/dropzone/dist/min/dropzone.min.js"></script><!-- CORE SCRIPTS-->
    <script src="../assets/vendors/toastr/build/toastr.min.js"></script>
    <script src="../assets/js/app.min.js"></script><!-- PAGE LEVEL SCRIPTS-->
    <script src="../assets/js/script.js"></script>
    <script>
        $(function(){
            $("body").hide();
            $("body").fadeIn();

            function notification(type,message){
    Command: toastr[type](message)

toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

}
$("#preview").click(function(){
    if($(".dz-preview").length!=0){
swal({
  title: "",
  text: "Visualisation",
  imageUrl: '../assets/img/contact/tmp.jpg?timestamp=' + new Date().getTime()
});
    }else{
        notification("error","ajouter un fichier image");
    }
})

        $("#soum").click(function(){
            if(($("[name='pays']").val()=="option" || $("[name='ville']").val()=="option") || $("[name='categorie']").val()=="option"){
                notification("error","remplir tous les champs");
            }
            else{
                if(($("[name='prenom']").val()=="" || $("[name='mail']").val()=="") || $("[name='numero']").val()==""){
                notification("error","remplir tous les champs");    
                }
                else{
                if($("#err").text()!=""){
                 notification("warning","respecter les instructions");     
                }
                else{
                    console.log($("#dropzones")[0].childElementCount)
                    if($("#dropzones")[0].childElementCount==1){
                        notification("error","ajouter un fichier image");
                    }
                    else{
                         $.post( "../../entities/fournisseur.php", $( "#testform" ).serialize(),function(data){
    if(data!="ok"){
    notification("error",data);    
    }
    else{
        $(".dz-preview:nth-child("+(1)+")").fadeOut();
        $("#dropzones")[0].children[1].remove();
    notification("success","vous avez ajouté un fournisseur ' "+$("[name='prenom']").val()+" '");
    refaire=true;
    }
 } );
                    }
                }
                }
            }
        })

setInterval(function(){
    i=2;
    if($("#dropzones")[0].childElementCount-1>1){
        $(".dz-preview:nth-child("+(i-1)+")").fadeOut();
        $("#dropzones")[0].children[i-1].remove();
    }
},1);


        })
    </script>
</body>

</html>