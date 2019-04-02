<?php
require "../../entities/class_fournisseur.php";
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
        <script src="../assets/vendors/sweetalert2/dist/sweetalert.min.js"></script>
        <link href="../assets/vendors/boostrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link href="../assets/vendors/summernote/dist/summernote.css" rel="stylesheet" /><!-- THEME STYLES-->
        <link href="../assets/vendors/sweetalert2/dist/sweetalert.css" rel="stylesheet" />
        <link href="../assets/vendors/toastr/build/toastr.min.css" rel="stylesheet" />
        <script src="../assets/vendors/sweetalert2/dist/sweetalert.min.js"></script>
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
        .loader {
        border: 2px solid rgba(255,255,255,0.5);
        border-radius: 50%;
        border-top: 2px solid #ffffff;
        width: 20px;
        height: 20px;
        -webkit-animation: spin 1s linear infinite; /* Safari */
        animation: spin 1s linear infinite;
        }
        /* Safari */
        @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
        }
        @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
        }
        </style>
    </head>
    <body class="mini-sidebar" style="display:none;overflow:hidden;">
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
                            <div class="md-form mb-4"><input class="md-form-control" type="text" name="prenomss" taille="255" tip="chaine" autocomplete="off"><label>Prenom</label></div>
                            <div class="md-form mb-4"><input class="md-form-control" type="text" name="mailss" tip="mail"  autocomplete="off"><label>email</label></div>
                            <div class="md-form mb-4"><input class="md-form-control" type="text" name="numeross" taille="8" tip="numero"  autocomplete="off"><label>Numero</label></div>
                            <div class="dropdown bootstrap-select form-control" style="margin-bottom:5%;"><select class="form-control selectpicker" data-style="btn-dark" tabindex="-98" name="categoriess">
                                <?php
                                $req="select * from categorie";
                                $requette=config::$bdd->query($req);
                                echo "<option value='option'>Type de categorie</option>";
                                while($data=$requette->fetch()){
                                echo "<option value='".$data[0]."'>".$data[0]."</option>";
                                }
                                ?>
                            </select></div>
                            <div class="dropdown bootstrap-select form-control" style="margin-bottom:5%;"><select class="form-control selectpicker" data-style="btn-dark" tabindex="-98" name="payss">
                                <option value="option">Pays</option>
                                <option value="cameroun">Cameroun</option>
                                <option value="tunisie">Tunisie</option>
                                <option value="france">France</option>
                            </select></div>
                            <div class="dropdown bootstrap-select form-control" style="margin-bottom:5%;"><select class="form-control selectpicker ic" data-style="btn-dark" tabindex="-98" name="villess">
                                <option value="option">Ville</option>
                                <option value="tunis">tunis</option>
                                <option value="bizerte">bizerte</option>
                                <option value="sousse">sousse</option>
                            </select></div>
                            <div class="col-md-12" style="margin-bottom:10%;"><br><center><span style="font-size:15px;">elements par page</span><br> <input id="touchspin_1" style="padding-left:30px;padding:17px;background:#2949ef;color:white;outline:none;" value="1" type="text" class="form-control col-md-3"></center></div>
                            
                            
                        </div>
                    </div>
                    <div class="page-content">
                        <div class="row offset-md-6"  style="margin-top:-5%;margin-bottom:5%;">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <div class="btn btn-primary" id="plus" style="padding-top:1.7%;padding-bottom:1.7%;"><span class="btn-icon"><i class="la la-backward"></i>Back</span></div>
                                <div class="btn btn-light" style="padding-top:1.7%;padding-bottom:1.7%;"><span class="btn-icon"><span class="page_actuel">1</span> /<span class=resultat> 1</span> </span></div>
                                <div class="btn btn-primary" id="moins" style="padding-top:1.7%;padding-bottom:1.7%;"><span class="btn-icon btn-icon-right">Next<i class="la la-forward"></i></span></div>
                            </div>
                        </div>
                        <div class="row offset-md-4 col-md-6" style="overflow-y:scroll;padding-top:2.7%;height:1100px;opacity:0;" id="con">
                            <?php
                            fournisseur::afficher();
                            ?>
                        </div>
                        </div><!-- BEGIN: Footer-->
                        </div><!-- END: Content-->
                        <div class="sweet-overlay" tabindex="-1" style="opacity: 1.04; display: block;" id="lol">
                            <div class="row" id="modifier" style="display:none;">
                                <div class="col-md-3" style="margin-left:5%;margin-top:7%;">
                                    <div class="card" id="j">
                                        <div class="card-cup text-white justify-content-center" style="box-shadow:none;">
                                            <input type="button" name="modifier le produit" class="btn btn-primary" value="Quitter l'opération" id="q">
                                        </div>
                                        <div class="card-body">
                                            <form action="" method="post" id="formualire">
                                                <input type="text" name="id" style="display:none;">
                                                <div class="md-form mb-4"><input class="md-form-control" taille="255" tip="chaine"  oninput="verifier(this);" type="text" name="prenoms"  autocomplete="off" required><label>Prenom</label></div>
                                                <div class="md-form mb-4"><input class="md-form-control"  tip="mail" oninput="verifier(this);"  type="text" name="mail"  autocomplete="off" required><label>Email</label></div>
                                                <div class="md-form mb-4" required><input class="md-form-control" taille="9"  tip="numero" oninput="verifier(this);" type="text" name="numero" autocomplete="off"  required><label>Numéro</label></div>
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
                                                <div class="dropdown bootstrap-select form-control" style="margin-bottom:5%;"><select class="form-control selectpicker" data-style="btn-dark" tabindex="-98" name="pays">
                                                    <option value="option">pays</option>
                                                    <option value="tunisie">tunisie</option>
                                                    <option value="cameroun">cameroun</option>
                                                    <option value="france">france</option>
                                                </select></div>
                                                <div class="dropdown bootstrap-select form-control" style="margin-bottom:5%;"><select class="form-control selectpicker" data-style="btn-dark" tabindex="-98" name="ville">
                                                    <option value="option">ville</option>
                                                    <option value="tunis">tunis</option>
                                                    <option value="bizerte">bizerte</option>
                                                    <option value="sousse">sousse</option>
                                                </select></div>
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
                                            <div class="card-body io">
                                                <p class="card-text"><label for="file"><img src="../assets/img/contact/8.jpg" alt="" id="cv" style="cursor:pointer;"></label></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="display:none;" id="envoyer">
                                <div class="col-md-6" style="margin:auto;margin-top:7%;">
                                    <div class="card" id="j" style="border-radius:0px;">
                                        <div class="card-cup text-white justify-content-center" style="box-shadow:none;">
                                            <input type="button" name="modifier le produit" class="btn btn-danger" value="Quitter l'opération" id="qh">
                                        </div>
                                        <div class="card-body">
                                            <form action="" method="post" id="formualiress">
                                                <center><div class="md-form col-md-7"><input class="md-form-control" id="objet" type="text"  autocomplete="off" required><label>Objet</label></div></center>
                                                <div class="form-group">
                                                    <label for="message"><textarea name="message" class="form-control" id="message"></textarea></label>
                                                </div>
                                                <hr>
                                                <button type="button" class="btn btn-primary" value="Envoyer le mail" id="envoyer_mail" style="border-radius:0;float:right;margin-right:5%;">Envoyer le mail  &nbsp;&nbsp;&nbsp;<div class="loader" style="float:right;display:none;"></div><div style="float:right;" class="xc">
                                                <i class="ti-arrow-right mr-3"></i>
                                            </div></button>
                                        </form>
                                    </div>
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
                    <script src="../assets/vendors/summernote/dist/summernote.js"></script><!-- CORE SCRIPTS-->
                    <script src="../assets/js/app.min.js"></script><!-- PAGE LEVEL SCRIPTS-->
                    <script src="../assets/js/script.js"></script>
<script>
        $(function() {

$("#message").summernote({
  height: 150,
  placeholder: 'Saisir votre mail...',
                      lang: "es-ES",
                      disableDragAndDrop: true,
                      fontNames: ["Helvetica", "sans-serif", "Arial", "Arial Black", "Comic Sans MS", "Courier New"],
                      fontNamesIgnoreCheck: ["Helvetica", "sans-serif", "Arial", "Arial Black", "Comic Sans MS", "Courier New"],
                      toolbar: [
                        ["style", ["style"]],
                        ["font", ["bold", "italic", "underline", "clear"]],
                        ["fontname", ["fontname"]],
                        ["color", ["color"]],
                        ["para", ["ul", "ol", "paragraph"]],
                        ["insert", ["link", "hr"]],
                      ]
})

$(".note-frame").css("border","0px");
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
$(".note-editable").css("cursor","text");
$("#envoyer_mail").click(function(){
    if($("#objet").val()==""){
        notification("error","saisir l'objet du message");
    }
    else{
    if($(".note-editable").text()==""){
        notification("error","saisir le message");
    }
    else{
        var contenu="<html><body>"+$(".note-editable").html()+"</body></html>";
        $(".xc").fadeOut("fast").queue(function(){
        $(".loader").fadeIn("fast");  
        $(this).dequeue();  
        });
        
                $.post("../../entities/mailing.php",{objets:$("#objet").val(),contenu:contenu,le_mail:$('[name="mail"]').val()},function(data){
         $(".loader").fadeOut("fast").queue(function(){
             $(".xc").fadeIn("fast");
             $(this).dequeue();
         });                    
                    if(data=="ok"){
                        notification("success","message envoyé")
                    }
                    else{
                        notification("error","echec d'envoie")
                    }
                })
    }
    }
})

            $(".sweet-overlay").hide()
            $("body").fadeIn();

            $("#range_03").ionRangeSlider({
                type: "double",
                grid: true,
                min: 0,
                max: 1000,
                from: 200,
                to: 800,
                prefix: "$"
            });
             $(".irs-bar").css("background-color","#2949ef");
             $(".irs-handle i").css("background-color","#2949ef");
             $(".irs-to").css("background-color","#2949ef");
             $(".irs-from").css("background-color","#2949ef");


$(".mailing").click(function(){
    id=$(this).attr("cni");
    notification("warning","nous vous conseillons d'utiliser le module mail pour une personnalisation complete")
                    $.get("../../entities/fournisseur.php?operation=un_resultat&valeur="+id+"&rec=mail",function(data){
                    $('[name="mail"]').val(data);
                });
                $("#modifier").hide();
                $("#lol").fadeIn();
                $("#envoyer").fadeIn();
})
                         $(".modif").click(function(){
id=$(this).attr("cni");
                $.get("../../entities/fournisseur.php?operation=un_resultat&valeur="+id+"&rec=prenom",function(data){
                   $('[name="prenoms"]').parent().children("label").addClass("active");
                    $('[name="prenoms"]').val(data);
                });
                $.get("../../entities/fournisseur.php?operation=un_resultat&valeur="+id+"&rec=mail",function(data){
                   $('[name="mail"]').parent().children("label").addClass("active");
                    $('[name="mail"]').val(data);
                });
                $.get("../../entities/fournisseur.php?operation=un_resultat&valeur="+id+"&rec=numero",function(data){
                   $('[name="numero"]').parent().children("label").addClass("active");
                    $('[name="numero"]').val(data);
                });
                $.get("../../entities/fournisseur.php?operation=un_resultat&valeur="+id+"&rec=description",function(data){
                   $('[name="description"]').parent().children("label").addClass("active");
                    $('[name="description"]').val(data);
                });
                $.get("../../entities/fournisseur.php?operation=un_resultat&valeur="+id+"&rec=id",function(data){
                    $('[name="id"]').val(data);
                    $("#cv").attr("src","../assets/img/contact/"+data+".jpg?timestamp=" + new Date().getTime());
                });
                $("#envoyer").hide();
                $("#lol").fadeIn();
                $("#modifier").fadeIn();
            })

             $("#q").click(function(){
                $(".sweet-overlay").fadeOut()
             })
             $("#qh").click(function(){
                $(".sweet-overlay").fadeOut()
             })

$('[name="file"]').change(function(){
    var propertie=document.getElementById("file").files[0];
    var name=propertie.name;
    var extension=name.split('.').pop().toLowerCase();
    if(jQuery.inArray(extension,['jpg','jpeg'])==-1){
        notification("error","uniquement des fichiers jpg");
    }else{
        var form_data=new FormData();
        form_data.append("file",propertie);
        $.ajax({
        url:'../../core/upload_contact.php',
        method:'POST',
        data:form_data,
        contentType:false,
        cache:false,
        processData:false,
        success:function(data)
            {
                res=true;
                
                $("#cv").attr("src","../assets/img/contact/tmp.jpg?timestamp=" + new Date().getTime());
                $("#cv").hide();
                $("#cv").fadeIn();
                $.get("../../core/upload_contact.php?id="+$("[name='id']").val());
                $(" [identifiant='"+$("[name='id']").val()+"'] .chan").attr("src","../assets/img/contact/tmp.jpg?timestamp=" + new Date().getTime());
                $(" [identifiant='"+$("[name='id']").val()+"'] .chan").hide();
                $(" [identifiant='"+$("[name='id']").val()+"'] .chan").fadeIn();
                notification("success","opération terminée");
            }
        });
    }
})
$("#soum").click(function(){
    if(($("[name='prenoms']").val()!="" && $("[name='mail']").val()!="") && $("[name='numero']").val()!=""){
         $.post( "../../entities/fournisseur.php", $( "#formualire" ).serialize(),function(data){
    if(data!="ok"){
    notification("error",data);    
    }
    else{
        id=$("[name='id']").val();
        $('[identifiant="'+id+'"] prenom').text($("[name='prenoms']").val());
        $('[identifiant="'+id+'"] numero').text($("[name='numero']").val());
        $('[identifiant="'+id+'"] mail').text($("[name='mail']").val());
        $('[identifiant="'+id+'"] ville').text($("[name='ville']").val());
        $('[identifiant="'+id+'"] pays').text($("[name='pays']").val());

        notification("success","modification terminée");
        trie_gobal("[name='prenomss']","[name='mailss']","[name='numeross']","[name='categoriess']","[name='payss']","[name='villess']")
    }
 } );  
    }
    else{
     notification("error","remplir tous les champs");   
    }
})

$(".delete").click(function(){
    id=$(this).attr("cni");
    $(this).parent().parent().parent().parent().parent().parent().fadeOut().remove();
    $.get("../../entities/fournisseur.php?operation=suppression&id="+id,function(data){
       notification("success","vous avez supprimer un produit"); 
    });
    
})


 setInterval(function(){


$(".modal-backdrop").css("z-index","10")
       vo=0;
       $("[identifiant]").each(function(){
        if($(this).css("display")!="none"){
            vo++;
        }
       })

       if(vo==0){
       if($("h3.lead").text()!="Aucun resultat ..."){
        trie_gobal("[name='prenomss']","[name='mailss']","[name='numeross']","[name='categoriess']","[name='payss']","[name='villess']")
       }
       }

        if(parseInt($(".page_actuel").text())>parseInt($(".resultat").text())){
        $(".page_actuel").text($(".resultat").text());
    }
    if(parseInt($(".page_actuel").text())==0){
if(parseInt($(".resultat").text())>0){
        $(".page_actuel").text("1");
}
    }
    i=0;
    $("#con h4").remove();
    $("[identifiant]").each(function(){
        if($(this).css("display")!="none"){
            i++;
        }
    })
    if(i>2){
        $("#con").css("overflow-y","scroll")
        $("#con").css("height","1100px")
        $("#con").css("opacity","1")
        $("#con").css("background","#f9f9f9");
        $(".dropdown-menu-right").css("margin-top","1%")
    }else{
        $("#con").css("overflow","hidden")
        $("#con").css("height","900px")
        $("#con").css("opacity","1")
        $("#con").css("background","transparent");
        $(".dropdown-menu-right").css("margin-top","-50%")
        $(".dropdown-menu-right").css("opacity","0")
    }

    t=0;
    page=parseInt($("#touchspin_1").val());
    pas=page;
    $("[identifiant]").each(function(){
       if($(this).attr("etat")=="true"){
        t++;
        $(this).attr("data-pagination",Math.round(page/parseInt($("#touchspin_1").val())))
       if(t%page==0){
        page+=pas;
       }
       }
    });

       if(t==0){
        $("#con").append("<h4 class='text-muted lead' style='display:block;'>Aucun resultat ...<h4>")
       }
       nb=parseInt(t)/parseInt($("#touchspin_1").val());
       if(Math.round(nb-Math.round(parseInt(t)/parseInt($("#touchspin_1").val())))==1){
        valeur=Math.round(parseInt(t)/parseInt($("#touchspin_1").val()));
        $(".resultat").text(" "+valeur);
       }
       else{
        valeur=Math.round((parseInt(t)/parseInt($("#touchspin_1").val()))+0.3);
        $(".resultat").text(" "+valeur);
       }

              if(vo!=parseInt($("#touchspin_1").val())){
       
            if(parseInt($(".page_actuel").text())!=valeur){
        trie_gobal("[name='prenomss']","[name='mailss']","[name='numeross']","[name='categoriess']","[name='payss']","[name='villess']")
            }
       }



},100)


    function trie(valeur,changer){
var data=valeur
 var   rec=changer
 var   tableau=[]
    $(rec).each(function(){
        var texte=$(this).text().toLowerCase();
        var n=texte.indexOf(data);
        if(n!=-1){
            if(changer=="ville"){
            tableau.push($(this).parent().parent().parent().parent().parent().attr("identifiant"))   
            }
            else{
            if(changer=="pays"){
            tableau.push($(this).parent().parent().parent().parent().parent().parent().attr("identifiant"))    

            }
            else{
            tableau.push($(this).parent().parent().parent().parent().attr("identifiant"))    
            }
            }
            
        }

    }) 

    return tableau;
    }

        function trie_gobal(prenom,mail,numero,cat,pays,ville){


       var tableau=[];
       tableau=trie($(mail).val(),"mail") 
   var tableaux=[];
    tableaux=trie($(prenom).val(),"prenom");  
        for(i=0;i<tableau.length;i++){
        if(tableaux.indexOf(tableau[i])==-1){
            tableau[i]="";
        }
    }
   tableaux=trie($(numero).val(),"numero")
        for(i=0;i<tableau.length;i++){
        if(tableaux.indexOf(tableau[i])==-1){
            tableau[i]="";
        }
    }
    if($(cat).val()=="option"){
    tableaux=trie("","categorie")
    }
    else{
    tableaux=trie($(cat).val(),"categorie")
    }
        for(i=0;i<tableau.length;i++){
        if(tableaux.indexOf(tableau[i])==-1){
            tableau[i]="";
        }
    }


    if($(ville).val()=="option"){
    tableaux=trie("","ville")
    }
    else{
    tableaux=trie($(ville).val(),"ville")
    }
        for(i=0;i<tableau.length;i++){
        if(tableaux.indexOf(tableau[i])==-1){
            tableau[i]="";
        }
    }

    if($(pays).val()=="option"){
    tableaux=trie("","pays")
    }
    else{
    tableaux=trie($(pays).val(),"pays")
    }

        for(i=0;i<tableau.length;i++){
        if(tableaux.indexOf(tableau[i])==-1){
            tableau[i]="";
        }
    }

        $("[identifiant]").each(function(){
        if(tableau.indexOf($(this).attr("identifiant"))!=-1){
            $(this).attr("etat","true");

            if($(this).attr("data-pagination")==$(".page_actuel").text()){
            $(this).fadeIn("fast");
            }
            else{
             $(this).hide();   
            }
        }
        else{
            $(this).attr("etat","false");
            $(this).hide();
        }
    }) 
    }

    bv=0
$("[identifiant]").each(function(){
if(bv>0){
$(this).hide();
}
    bv++;
})

    $("[name='prenomss']").keyup(function(){
        trie_gobal("[name='prenomss']","[name='mailss']","[name='numeross']","[name='categoriess']","[name='payss']","[name='villess']");
    })
    $("[name='mailss']").keyup(function(){
        trie_gobal("[name='prenomss']","[name='mailss']","[name='numeross']","[name='categoriess']","[name='payss']","[name='villess']")
    })
    $("[name='numeross']").keyup(function(){
        trie_gobal("[name='prenomss']","[name='mailss']","[name='numeross']","[name='categoriess']","[name='payss']","[name='villess']")
    })
    $("[name='categoriess']").change(function(){
        trie_gobal("[name='prenomss']","[name='mailss']","[name='numeross']","[name='categoriess']","[name='payss']","[name='villess']")
    })
    $("[name='payss']").change(function(){
        trie_gobal("[name='prenomss']","[name='mailss']","[name='numeross']","[name='categoriess']","[name='payss']","[name='villess']")
    })
        $("[name='villess']").change(function(){
        trie_gobal("[name='prenomss']","[name='mailss']","[name='numeross']","[name='categoriess']","[name='payss']","[name='villess']")
    })
$("#moins").click(function(){

if(parseInt($(".page_actuel").text())+1<=parseInt($(".resultat").text())){
        $(".page_actuel").text(parseInt($(".page_actuel").text())+1)
    trie_gobal("[name='prenomss']","[name='mailss']","[name='numeross']","[name='categoriess']","[name='payss']","[name='villess']")
    }
})
$("#plus").click(function(){
    if(parseInt($(".page_actuel").text())-1>0){
        $(".page_actuel").text(parseInt($(".page_actuel").text())-1)
    trie_gobal("[name='prenomss']","[name='mailss']","[name='numeross']","[name='categoriess']","[name='payss']","[name='villess']")
}
})
        });
    </script>
                </body>
            </html>