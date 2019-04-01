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
    <link href="../assets/vendors/dropzone/dist/min/dropzone.css" rel="stylesheet" /><!-- THEME STYLES-->
    <link href="../assets/vendors/toastr/build/toastr.min.css" rel="stylesheet" />
    <link href="../assets/vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" />
    <script src="../assets/vendors/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <link href="../assets/css/app.min.css" rel="stylesheet" /><!-- PAGE LEVEL STYLES-->
    <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
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

<body class="mini-sidebar" style="background-color: #f0f0f0;display:none;">
    <div class="page-wrapper">
   <div class="content-wrapper" >

     <div class="page-content" style="background-color: #f0f0f0;">
                                                        <!-- BEGIN: Page heading-->
                                                        <div class="page-heading">
                                                            <div class="page-breadcrumb">
                                                                <h1 class="page-title page-title-sep">Produit</h1>
                                                                <ol class="breadcrumb">
                                                                    <li class="breadcrumb-item"><a href="index.html"><i class="la la-home font-20"></i></a></li>
                                                                    <li class="breadcrumb-item">Forms</li>
                                                                    <li class="breadcrumb-item">Ajouter un produit</li>
                                                                </ol>
                                                            </div>
                                                        </div><!-- BEGIN: Page content-->
                                            <div>
                                                <div class="card col-md-8" style="margin-left:12%;border-radius:0px;">
                                                    <div class="card-body">
                                                        <h5 class="box-title text-primary">AJOUTER UN PRODUIT</h5>
                                                        <div class="row" style="margin-top:-5%;">
                                                            <div class="col-md-4" style="margin-top:9%;">
 
                                                                    <form action="../../core/upload_produit.php" class="dropzone" id="dropzones">
                                                                      <div class="fallback">
                                                                        <input name="file" type="file" id="fichier">
                                                                      </div>
                                                                    </form>
                                                                    <button class="btn btn-light" type="button" id="preview">Prévisualiser</button>
                                                            </div>
                                                            <div class="col-lg-5">
                                                                    <div class="card-body">
                                                                        <form action="" method="post" id="testform">
                                                                        <div>
                                                                            <div class="md-form mb-4"><input class="md-form-control" taille="255" tip="chaine"  oninput="verifier(this);" type="text" name="titre"  autocomplete="off" required><label>Nom Produit</label></div>
                                                                            <div class="md-form mb-4"><input class="md-form-control"  taille="4" tip="numero" oninput="verifier(this);"  type="text" name="prix"  autocomplete="off" required><label>Prix Produit</label></div>
                                                                            <div class="md-form mb-4" required><input class="md-form-control" taille="4"  tip="numero" oninput="verifier(this);" type="text" name="quantite" autocomplete="off"  required><label>Quantité</label></div>
                                                                            <div class="md-form mb-4"><select class="md-form-control form-control select2_demo" name="genre">
                                                                                <option value="option">Genre</option>
                                                                                <option value="homme">homme</option>
                                                                                <option value="femme">femme</option>
                                                                                <option value="enfant">enfant</option>
                                                                            </select></div>
                                                                            <div class="row">
                                                                                <div class="col-md-8"><select class="md-form-control form-control select2_demo"  name="categorie" id="sel">
                                                                                <option value="option">Catégories</option>
                                                                                </select>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                <button class="btn btn-primary" type="button" style="color:white;"  data-toggle="modal" data-target="#exampleModal"><span class="far fa-pen"></span></button>
                                                                                </div>
                                                                            </div> 
                                                                            <div class="md-form"><i class="material-icons prefix">description</i><textarea class="md-form-control auto-resize" taille="255" oninput="verifier(this);" name="description"></textarea><label>Description</label></div>
                                                                        </div>
                                                                        </form>
                                                                    </div> 
                                                            </div>
                                                            <div class="col-md-2" style="margin-top:9%;">
                                                                <input type="button" name="valider" class="btn btn-primary" value="Soumettre le produit" id="soum"><br><br>
                                                                <button class="btn btn-light" type="reset" style="margin-left:7%;">Annuler l'opération</button>
                                                            </div>
                                                        
                                                        </div>

                                                </div>
                                            </div><!-- END: Page content-->
                                        </div><!-- BEGIN: Footer-->
                                    </div><!-- END: Content-->

                                                <div class="modal fade col-md-3" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin:auto;">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content"  style="border-radius:1px;">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Catégories</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            </div>
                                                            <div class="modal-body" style="height:360px;">
                                                                <form action="" method="post" style="margin-left:10%;">
                                                                    <div class="md-form mb-4 col-md-8"><input class="md-form-control" taille="255" tip="chaine"  oninput="verifier(this);" type="text" id="cat" autocomplete="off" required><label>Saisir une catégorie</label></div>
                                                                    <div class="btn-group col-md-12" style="padding:0px;margin:0;margin-top:-2%;" role="group" aria-label="Basic example">
                                                                    <button type="button"  style="padding-top:3px;padding-bottom:3px;" class="btn btn-facebook col-md-6" id="add_categorie"><span style="font-size:11px;" class="fas fa-plus"></span></button>
                                                                    <button type="button" style="padding-top:3px;padding-bottom:3px;"  class="btn btn-youtube col-md-6" id="delete_categorie"><span style="font-size:11px;" class="fas fa-minus"></span></button>
                                                                    </div>

                                                            </form>
                                                            <hr>
                                                            <div style="margin:auto;text-align:center;overflow-y:scroll;height:62%;">
                                                                <div class="text-dark">Liste des catégories</div><br><div id="cont" style=""></div> <br>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div><!-- END: Page content-->
       </div>
    <!-- CORE PLUGINS-->

    <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendors/metismenu/dist/metisMenu.min.js"></script>
    <script src="../assets/vendors/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script><!-- PAGE LEVEL PLUGINS-->
    <script src="../assets/vendors/dropzone/dist/min/dropzone.js"></script><!-- CORE SCRIPTS-->
    <script src="../assets/vendors/toastr/build/toastr.min.js"></script><!-- CORE SCRIPTS-->
    <script src="../assets/js/app.min.js"></script><!-- PAGE LEVEL SCRIPTS-->
    <script src="../assets/js/script.js"></script>
    <script type="text/javascript">
        $(function() {
            $("body").fadeIn();
refaire=false;
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
  imageUrl: '../assets/img/clothes/tmp.jpg?timestamp=' + new Date().getTime()
});
    }else{
        notification("error","ajouter un fichier image");
    }
})


            $("#add_categorie").click(function(){
                $("#cont").hide();
                $("#cont").text("");
                if($("#cat").val().trim()!=""){
$.get("../../entities/categorie.php?operation=ajouter&title="+$("#cat").val(), function(data){
  if(data=="ok"){
    notification("success","vous avez ajouté une nouvelle catégorie '"+$("#cat").val()+"'");
        $("#cont").text("");
    $.get("../../entities/categorie.php?operation=contenu", function(data){
  $("#cont").append(data);
      $("#sel").html("");
 $.get("../../entities/categorie.php?operation=select", function(data){
  $("#sel").append(data);
});
});
  }else{
   notification("error",data);
  }
})
                }
                else{
notification("info","vous devez remplir tous les champs");
                }
                $("#cont").fadeIn();
            });

            $("#delete_categorie").click(function(){
                $("#cont").hide();
                if($("#cat").val().trim()!=""){
$.get("../../entities/categorie.php?operation=supprimer&title="+$("#cat").val(), function(data){
  if(data=="ok"){
    notification("success","vous avez supprimé la catégorie '"+$("#cat").val()+"'");
        $("#cont").text("");
    $.get("../../entities/categorie.php?operation=contenu", function(data){
  $("#cont").append(data);
      $("#sel").html("");
 $.get("../../entities/categorie.php?operation=select", function(data){
  $("#sel").append(data);
});
});
  }else{
   notification("error",data);
  }
})
                }
else{
notification("info","vous devez remplir tous les champs");
}
$("#cont").fadeIn();
            })

            setInterval(function(){
if($("#cont").text()==""){
    $("#cont").text("");
 $.get("../../entities/categorie.php?operation=contenu", function(data){
  $("#cont").append(data);
});
}
},200);
    $("#sel").html("");
 $.get("../../entities/categorie.php?operation=select", function(data){
  $("#sel").append(data);
});

$("#soum").click(function(){

        if($(".dz-preview").length!=0){
 $.post( "../../entities/produit.php", $( "#testform" ).serialize(),function(data){
    if(data!="ok"){
    notification("error",data);    
    }
    else{
        $(".dz-preview:nth-child("+(1)+")").fadeOut();
        $("#dropzones")[0].children[1].remove();
    notification("success","vous avez ajouté un produit ' "+$("[name='titre']").val()+" '");
    refaire=true;
    }
 } );
    }else{
        notification("error","ajouter un fichier image");
    }

});


setInterval(function(){
    i=2;
    if($("#dropzones")[0].childElementCount-1>1){
        $(".dz-preview:nth-child("+(i-1)+")").fadeOut();
        $("#dropzones")[0].children[i-1].remove();
    }
},1);

        });
    </script>
</body>

</html>