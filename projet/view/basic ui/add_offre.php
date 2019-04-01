<?php 
require "../../entities/class_produit.php";
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
    <link href="../assets/vendors/sweetalert2/dist/sweetalert.css" rel="stylesheet" />
            <script src="../assets/vendors/sweetalert2/dist/sweetalert.min.js"></script>
        <link href="../assets/css/pages/form-wizard.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="../assets/jquery-ui/jquery-ui.css">
    <link href="../assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="../assets/vendors/ion-rangeslider/css/ion.rangeSlider.min.css" rel="stylesheet" />
    <link href="../assets/vendors/toastr/build/toastr.min.css" rel="stylesheet" />
     <link href="../assets/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" />
     <link href="../assets/css/app.min.css" rel="stylesheet" /><!-- PAGE LEVEL STYLES-->
        <style type="text/css">
        body{
            overflow:hidden;
        }
        .g::-webkit-file-upload-button {
        width:30%;
        visibility: hidden;
        }
        .g::-o-file-upload-button {
        width:30%;
        visibility: hidden;
        }
        .g::-moz-file-upload-button {
        width:30%;
        visibility: hidden;
        }
        .g::before {
        content: 'Upload';
        display: none;
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
        .fondu{
            width: all;
            height: all;
            background: rgba(0,0,0,0.7);
            position:fixed;
            padding:50%;
            z-index: 10;

        }
        </style>
    </head>
    <body style="background-color: #f0f0f0;display:none;">
        <div class="fondu" style="display:none;"></div>
        <div class="content-wrapper" style="background-color: #f0f0f0;" >
            <div class="page-content" style="background-color: #f0f0f0;margin-top:-20px;">
                <div>
                    <div class="card" style="background:transparent;box-shadow:none;">
                        <div class="card-body">
                            <form class="pill-steps justified-steps" id="form-wizard-justified" method="post" enctype="multipart/form-data">
                                <h6><center>Selectionner les articles</center></h6>
                                <fieldset>
                                    <div class="row" id="delimiteur">
                                        <div class="card col-md-3 offset-md-1" style="border-radius:0px;padding:2px;padding-left:0px;padding-right:0px;">
                                            <div class="card-body">
                                                <center>
                                                <h5 class="box-title text-primary">Produits Sélectionnés</h5>
                                                <p class="text-dark">Nombre d'éléments : <nombre-element> 0 </nombre-element></p>
                                                <p class="text-dark">Prix total : $<span class="text-primary"> <prix-tottal>0</prix-tottal>    </span></p>
                                                </center>
                                            </div>
                                            <div class="card-body" id="deposer" style="height:240px;overflow-y:scroll;overflow-x:hidden;">
                                               
                                            </div>
                                            <center><hr width="70%;"></center>
                                            <center>
                                            <div id="ma">
                                                <div class="badge badge-primary text-white">FEMME</div>
                                            <div class="badge badge-danger text-white">HOMME</div>
                                            <div class="badge text-white" style="background:#FF1493;">ENFANT</div>
                                            </div>
                                            <div  id="deposer_supprimer"  style="display:none;opacity:0.8">
                                            <div class="badge badge-danger text-white">DEPOSER &nbsp;&nbsp;&nbsp;<i class="ti-close"></i></div>
                                            </div>
                                            </center>
                                            <br>
                                        </div>
                                        <div class="col-md-2">
                                            <div style="margin-top:140%;">
                                                <h2 style="display:inline-block;transform:rotate(90deg);" class="ti-exchange-vertical mr-3 text-black-50"></h2>
                                            </div>
                                        </div>
                                        <div class="card col-md-4" style="background-color:transparent;box-shadow:none;border-radius:0px;padding:2px;padding-left:0px;padding-right:0px;margin-left:-10%;">
                                                <center style="margin-bottom:11%;margin-top:4%;">
                                                <h5 class="lead text-primary">Listes des produits</h5>
                                                <button class="btn btn-vk col-md-8" style="padding-top:8px;" id="rechercher" type="button"><span class="btn-icon"><i class="ti-search"></i>rechercher</span></button><br>
                                                <total-element class="text-primary"></total-element> <span class="text-primary">Items</span> 
                                                </center>
                                                <div class="row">
                                                    <div class="col-md-1" style="margin-left:14%;z-index:1;margin-top:25%;">  
                                                    <button class="btn btn-dark btn-floating btn-sm" id="left_left" type="button"><i class="ti-angle-left text-white"></i></button>
                                                    </div> 
                                                    <div class="col-md-8" id="ici" style="margin-left:-5%;height:100px;">
                                                    
<?php 
Produit::afficher_dans_offre();
?>

                                                    </div>
                                        <div class="col-md-1" style="margin-left:-12%;z-index:1;margin-top:25%;">  
                                        <button class="btn btn-dark btn-floating btn-sm" id="right_right" type="button"><i class="ti-angle-right text-white"></i></button>
                                        </div> 

                                    </div>
                                    <br>
                                    <br>
                                    <br>
                            </div>
                        </div>
                        </fieldset>
                        <h6><center>Details</center></h6>
                        <fieldset>
                        <div class="card offset-md-2 col-md-7"  style="border-radius:0px;margin-left:10%;">
                            <div class="card-body">
                                <h5 class="box-title text-primary">Completer les détails</h5>
<div class="col-md-12">
                            <div class="row">
                    <div class="col-md-7">
                                                <div>
                                                    <div class="md-form mb-4"><i class="material-icons prefix">link</i><input class="md-form-control" taille="255" tip="chaine"  oninput="verifier(this);" type="text" name="titre"  autocomplete="off"><label>Titre</label></div>
                                                    <div class="md-form mb-4"><i class="material-icons prefix">attach_money</i><input class="md-form-control"   taille="8" tip="numero"  oninput="verifier(this);" type="text" name="prix"  autocomplete="off"><label id="activation">Prix de l'offre</label></div>
                                                    <div>
                                                    <div class="input-daterange input-group" id="datepicker_range"><i style="margin-top:2.6%;margin-left:1%;margin-right:3%;" class="material-icons prefix">today</i><input class="form-control" type="text" value="28/03/2019" placeholder="Start date" name="date_debut">
                                                <div class="input-group-append"><span class="input-group-text">to</span></div><input name="date_fin" class="form-control" type="text" value="04/04/2000" placeholder="End date">
                                            </div>
                                                </div>
                                                <div class="md-form" style="margin-bottom:10%;"><i class="material-icons prefix">description</i><textarea class="md-form-control auto-resize" taille="255" name="description"  oninput="verifier(this);"></textarea><label>Description</label></div>
                                                <input type="text" name="liste_produit" style="display:none;">
                                                                            <div class="md-form mb-3">
                                                        <input type="file" name="file" class="btn btn-dark g">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="offset-md-1 col-md-2" style="margin-top:9%;">
                                        <button class="btn btn-danger" type="reset" style="margin-left:7%;">Annuler l'opération</button>
                                    </div>
                            </div> 
                                    </div>
                        </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            </div><!-- END: Page content-->
            </div><!-- BEGIN: Footer-->
            </div><!-- END: Content-->
<div class="sweet-overlay" tabindex="-1" style="opacity: 1.04; display: none;" id="lol">
<div class="row">
    <div class="col-md-3" style="margin-left:5%;margin-left:12%;">
        <div class="card col-md-3" style="border-radius:0px;position:fixed;top:10%;z-index:10;">                      
                                            <div class="card-body" style="margin:auto;">
                      <div class="card-body" style="margin:auto;">
                                <h5 class="box-title text-primary">critère de selections</h5>
                            </div>
                            </div>
                                                                    <div class="card-body" style="margin-top:-30%;">                           
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
                                            </select></div><br><br>
        <center><button class="btn btn-danger btn-sm" type="button" id="q">Fermer le menu le selection</button>  </center>                                  
                                        </div>
                        </div>
                            </div>
</div> 
</div>
            <!-- CORE PLUGINS-->
            <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
            <script src="../assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <script src="../assets/vendors/metismenu/dist/metisMenu.min.js"></script>
            <script src="../assets/vendors/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script><!-- PAGE LEVEL PLUGINS-->
            <script src="../assets/vendors/dropzone/dist/min/dropzone.min.js"></script><!-- CORE SCRIPTS-->
            <script src="../assets/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
             <script src="../assets/vendors/toastr/build/toastr.min.js"></script><!-- CORE SCRIPTS-->
            <script src="../assets/vendors/jquery-steps/build/jquery.steps.min.js"></script>
            <script src="../assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
            <script src="../assets/vendors/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
            <script src="../assets/js/app.min.js"></script><!-- PAGE LEVEL SCRIPTS-->
            <script src="../assets/js/script.js"></script>
            <script src="../assets/jquery-ui/jquery-ui.js"></script>
            <script type="text/javascript">
            $(function(){
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
var fondu=0;
                            $("#recherche").keyup(function(){
    trier()
})

$("#ge").change(function(){
       trier()
})

$("#cs").change(function(){
       trier()
})
$("#range_03").change(function(){
        trier()
})

$("#range_04").change(function(){
        trier()
})



                                    max_prix=0;
                        max_qte=0;
            $(".io").each(function(){
                if(parseInt($(this).attr("prix"))>max_prix){
                    max_prix=parseInt($(this).attr("prix"));
                }
            })
            $(".io").each(function(){
                if(parseInt($(this).attr("qte"))>max_qte){
                    max_qte=parseInt($(this).attr("qte"));
                }
            })

                            $("#range_03").ionRangeSlider({
                type: "double",
                grid: true,
                min: 0,
                max: max_prix+10,
                from:0,
                to: max_prix,
                prefix: "$"
            });
            $("#range_04").ionRangeSlider({
                type: "double",
                grid: true,
                min: 0,
                max: max_qte+10,
                from:0,
                to: max_qte,
                prefix: ""
            });

             $(".irs-bar").css("background-color","#2949ef");
             $(".irs-handle i").css("background-color","#2949ef");
             $(".irs-to").css("background-color","#2949ef");
             $(".irs-from").css("background-color","#2949ef");

            i=1;
            $("body").fadeIn("fast");
            var temp = {
            leftArrow: '<i class="ti-angle-left"></i>',
            rightArrow: '<i class="ti-angle-right"></i>',
            };
 
            $("#q").click(function(){
                $("#lol").fadeOut()
            })

var form = $("#form-wizard-justified").show();
            form.steps({
            headerTag: "h6",
            bodyTag: "fieldset",
            stepsOrientation: "vertical",
            onStepChanging: function(event, currentIndex, newIndex) {
            // Always allow going backward even if the current step contains invalid fields!
            if (currentIndex > newIndex) {
            return true;
            }
            // Clean up if user went backward before
            if (currentIndex < newIndex) {
            // To remove error styles
            $(".body:eq(" + newIndex + ") label.invalid-feedback", form).remove();
            $(".body:eq(" + newIndex + ") .invalid-feedback", form).removeClass(".invalid-feedback");
            }
            // Disable validation on fields that are disabled or hidden.
            form.validate().settings.ignore = ":disabled,:hidden";
            // Start validation; Prevent going forward if false
            return form.valid();
            },
            onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
            },
            onFinished: function(event, currentIndex) {
                                    if($(".preview").length==0){
                        notification("error","Attention: vous devez selectionner des produits")
                        }
                        else{
                        if(($.trim($("[name='titre']").val())=="" || $.trim($("[name='prix']").val())=="") || $.trim($("[name='description']").val())==""){
                        notification("error","Remplir tous les champs")
                        }else{
                        var regex =/^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/g;
                        if (regex.test($("[name='date_debut']").val())) {
                            var regexs =/^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/g;
                            if(regexs.test($("[name='date_fin']").val())){
                            var extension=$("[name='date_debut']").val().split('/');
                            var extensions=$("[name='date_fin']").val().split('/');
                            if(((parseInt(extension[0])<=0 || parseInt(extension[0])>31) || (parseInt(extension[1])<=0 || parseInt(extension[1])>12)) || (parseInt(extensions[0])<=0 || parseInt(extensions[0])>31) || (parseInt(extensions[1])<=0 || parseInt(extensions[1])>12)){
                             notification("error","Entrez une date valide")   
                            }
                            else{
                                if($("[name='file']").val()==""){
                                 notification("error","Choisie une image")     
                                }
                                else{
    var form = $("#form-wizard-justified");
    var formdata = false;
    if (window.FormData){
        formdata = new FormData(form[0]);
    }

    var formAction = form.attr('action');
    $.ajax({
        url         : '../../entities/offre.php',
        data        : formdata ? formdata : form.serialize(),
        cache       : false,
        contentType : false,
        processData : false,
        type        : 'POST',
        success     : function(data){
        if(data=="ok"){
            notification("success","vous avez ajouté une offre ' "+$("[name='titre']").val()+" '");
        }
        else{
             notification("error",data)
        }
        }
    });                           
                                }
                            }
                            }else{
                            notification("error","Entrez une date valides")
                            }
                        }
                        else{
                        notification("error","Entrez une date validess")
                        }
                        }                            
                        }

            }
            }).validate({
            errorPlacement: function errorPlacement(error, element) {
            error.insertAfter(element);
            },
            rules: {
            confirm: {
            equalTo: "#password4"
            }
            },
            errorClass: 'invalid-feedback',
            validClass: 'valid-feedback',
            highlight: function(e) {
            $(e).addClass("is-invalid").removeClass('is-valid');
            },
            unhighlight: function(e) {
            $(e).removeClass("is-invalid").addClass('is-valid');
            },
            });

                $("[role='tablist'] li a").css({width:"40%",cursor:"pointer"})
                $("[role='tablist'] li a:first").css("margin-left","33%")
                $("[role='tablist'] li a:eq(1)").css("margin-left","-25%")
                $("[role='menuitem']").click(function(){
                    if($(this).text()=="Next"){
                        var variable="";
                        $(".preview").each(function(){
                            variable+=$(this).attr("id")+",";
                        })
                        variable=variable.substr(0, variable.length-1);
                        $("[name='liste_produit']").val(variable);
                        $("#activation").attr("class","active");
                        $("[name='prix']").val($("prix-tottal").text());
                        if($(".preview").length==0){
                        notification("warning","Attention: vous devez selectionner des produits")
                        }
                    }
                })

            i=0;
            $("#rechercher").click(function(){
            $("#lol").fadeIn();
            })
            $('.io').draggable({
                revert : 'invalid',
                helper:'clone',
                snap : true,
                drag:function(event,ui){
                    
                    ui.helper.addClass("col-md-12")
                    ui.helper.find(".card").css({background:"transparent",boxShadow:"none"})
                    ui.helper.find(".card-body").hide()
                }
            });
            $("#deposer").droppable({
                accept : '.io',
                drop:function(event,ui){

                    $("nombre-element").text(parseInt($("nombre-element").text())+1);
                    $("prix-tottal").text(parseInt($("prix-tottal").text())+parseInt($("[identifiant='"+ui.draggable.attr("identifiant")+"']").attr("prix")));
                    if(isNaN(parseInt($("[identifiant='"+ui.draggable.attr("identifiant")+"']").next().next().attr("identifiant")))){
                    $("[identifiant='"+ui.draggable.attr("identifiant")+"']").prev().attr("tour","oui");
                    }
                    else{
                    if(!isNaN(parseInt($("[identifiant='"+ui.draggable.attr("identifiant")+"']").prev().attr("identifiant")))){
                    $("[identifiant='"+ui.draggable.attr("identifiant")+"']").next().attr("tour","oui");
                    }
                    else{
                        $("[identifiant='"+ui.draggable.attr("identifiant")+"']").prev().attr("tour","oui");
                    }
                    }
                    $("[identifiant='"+ui.draggable.attr("identifiant")+"']").fadeOut("fast");
                    $("[identifiant='"+ui.draggable.attr("identifiant")+"']").attr("tour","non");
                    $("[identifiant='"+ui.draggable.attr("identifiant")+"']").attr("disponible","non");
        
        variable='<div class="card mt-4 moic" id="'+ui.draggable.attr("identifiant")+'" style="box-shadow:none;background:transparent;z-index:1"><div class="card-cup';
        if(ui.draggable.attr("sexe")=="femme"){
        variable+=' bg-primary ';
        }
        if(ui.draggable.attr("sexe")=="homme"){
        variable+=' bg-danger ';
        }
        variable+='  text-white justify-content-center" ';
        variable+='text-white justify-content-center"';
        if(ui.draggable.attr("sexe")=="enfant"){
        variable+=' style="background:#FF1493;" ';
        }
        variable+=' > ';
        variable+=ui.draggable.attr("nom")+'</div><div class="card-body" style="margin-top:-75px;margin-right:-32px;"><button style="float:right;" class="btn btn-dark btn-floating preview" data-container="body" data-toggle="popover" data-placement="left" type="button" id="'+ui.draggable.attr("identifiant")+'" prix="'+ui.draggable.attr("prix")+'" nom="'+ui.draggable.attr("nom")+'" qte="'+ui.draggable.attr("qte")+'"><i class="la la-share-alt"></i></button></div></div>';
        $(this).prepend(variable)
                }
            });
            function affiche_moi(){
                var element=$(this);
                var data="<img src='../assets/img/clothes/"+element.attr("id")+".jpg'><br><br><p class='text-primary text-center' id_actif='"+element.attr("id")+"'>"+element.attr("id")+"</p><p class='lead text-dark text-center'>Quantite : "+element.attr("qte")+"</p><p class='lead text-dark text-center'>$ "+element.attr("prix")+"</p>";
                return data;
            }
            setInterval(function(){
                $("[data-toggle='popover']").popover({
                    title:affiche_moi,
                    html:true
                })
                $("#deposer").find(".card").css({cursor:"pointer"})
                $(".bs-popover-left").css({zIndex:'12',left:'-15%'})
                if($(".popover").length>0){
                    $(".preview[id='"+$(".popover-header p:first").text()+"']").parent().parent().css("zIndex","11")
                    $(".fondu").fadeIn("fast");
                }else{
                    $(".preview").parent().parent().css("zIndex","1")
                    $(".fondu").hide();
                }
},10)


            setInterval(function(){
                                if($("#deposer").find(".card").length==1){
                    $("#deposer").find("center").remove();  
                }

                nombre=0;
                $("[trier='oui']").each(function(){
                    if($(this).attr("disponible")=="oui"){
                        nombre++;
                    }
                });
                if(nombre!=0){
                $("#ici .lead").remove();
                }
                $("total-element").text(nombre)
                j=0;
                                    $("#ici").children().each(function(){
                    if($(this).css("display")!="none"){
                        j++;
                    }
                    })
                if(j!=0){
$("#ici").children().each(function(){
    i=0;
                    if(($(this).attr("tour")=="non" || $(this).attr("disponible")=="non") || $(this).attr("trier")=="non"){
                        $(this).hide();
                    }
                    if((i==0 && $(this).attr("tour")=="oui") && ($(this).attr("disponible")=="oui" && $(this).attr("trier")=="oui")){
                        $(this).fadeIn()
                        i++;
                    }
                })
                }
                else{
j1=0;
                                    $("#ici").children().each(function(){
                    if(($(this).attr("disponible")=="oui" && j1==0) && $(this).attr("trier")=="oui"){
                        $(this).attr("tour","oui")
                        $(this).fadeIn()
                        j1++;
                    }
                    })
                                    if(j1==0){
                                        $("#ici .lead").remove();
                                        $("#ici").append("<h3 class='lead text-center'>vide</h3>");
                                    }
                }


                                $(".moic").draggable({
                    revert : 'invalid',
                    helper:'clone',
                    opacity:'0.5',
                    drag:function(event,ui){
                        ui.helper.addClass("col-md-10"),
                        ui.helper.css("z-index","10")
                        $("#ma").fadeOut("fast").queue(function(){
                            $("#deposer_supprimer").fadeIn("fast");
                            $(this).dequeue()
                        });
                    }
                })
 $("#deposer_supprimer").droppable({
    drop:function(event,ui){
        id=ui.draggable.attr("id");
        $("#deposer .card[id='"+id+"']").fadeOut("fast").remove();
        if(parseInt($("nombre-element").text())-1==0){
$("#deposer").append("<center style='cursor:pointer;position:absolute;left:15%;top:38%;z-index:0;'><p class='text-primary'>Glisser et deposer un produit</p><h3 class='ti-save-alt'></h3></center>");
        }
        $("[identifiant]").attr("tour","non");
        $("[identifiant='"+id+"']").attr("disponible","oui");
        $("[identifiant='"+id+"']").attr("tour","oui");
        $("nombre-element").text(parseInt($("nombre-element").text())-1);
         $("prix-tottal").text(parseInt($("prix-tottal").text())-parseInt($("#deposer .card .card-body button[id='"+id+"']").attr("prix")));
    }
 })
            },100);

                    $("#deposer").append("<center style='cursor:pointer;position:absolute;left:15%;top:38%;z-index:0;'><p class='text-primary'>Glisser et deposer un produit</p><h3 class='ti-save-alt'></h3></center>");

            $(".io").mousedown(function(){

                    $("#deposer").find("center").remove();  
                $("#deposer").css({background:"rgba(255,0,0,0.1)",border:"1px dashed red"});
            });
            $(document).mouseup(function(){
                if($("#deposer").find(".card").length==0){
                    $("#deposer").find("center").remove();  
                    $("#deposer").append("<center style='cursor:pointer;position:absolute;left:15%;top:38%;z-index:0;'><p class='text-primary'>Glisser et deposer un produit</p><h3 class='ti-save-alt'></h3></center>");
                }
                if($("#ma").css("display")=="none"){
                    $("#deposer_supprimer").fadeOut("fast").queue(function(){
                        $("#ma").fadeIn("fast");
                        $(this).dequeue();
                    })
                }
                $("#deposer").css({background:"transparent",border:"0px"});
            });


            $("#right_right").click(function(){
                id=$("[tour='oui']").attr("identifiant");
                i=0;
                if(!isNaN(parseInt($("[identifiant='"+id+"']").next().attr("identifiant")))){ 
                $("[identifiant='"+id+"']").nextAll().each(function(){
                    if(($(this).attr("disponible")=="oui" && i==0) && $(this).attr("trier")=="oui"){
                $("[tour='oui']").attr("tour","non");
                $(this).attr("tour","oui");
                        i++;
                    }
                })     
        }
            });
            $("#left_left").click(function(){
                id=$("[tour='oui']").attr("identifiant");
                i=0;
                if(!isNaN(parseInt($("[identifiant='"+id+"']").prev().attr("identifiant")))){ 
                $("[identifiant='"+id+"']").prevAll().each(function(){
                    if(($(this).attr("disponible")=="oui" && i==0) && $(this).attr("trier")=="oui"){
                $("[tour='oui']").attr("tour","non");
                $(this).attr("tour","oui");
                        i++;
                    }
                })     
        }
            });

            function trie_simple(name,valeur){
    var tableau=[]
    $(".io").each(function(){
        var texte=$(this).attr(name);
        if(typeof texte !== "undefined" ){
        n=texte.indexOf($(valeur).val());
                   if(n!=-1 || ($(valeur).val()=="option" || $(valeur).val()=="")){
                    tableau.push($(this).attr("identifiant"))
                   }
        }
    })
    return tableau;                
            }
            function trie_interval(name,min,max){
    tableau=[]
    $(".io").each(function(){
                    if(parseInt($(this).attr(name))>=min && parseInt($(this).attr(name))<=max){
                    tableau.push($(this).attr("identifiant"))                       
                    }
    })
    return tableau;                
            }
            function trier(){
 var tableau=[];
                    tableau=trie_simple("nom","#recherche");
                   var tableaux=[];
                    tableaux=trie_simple("sexe","#ge")
        for(i=0;i<tableau.length;i++){
        if(tableaux.indexOf(tableau[i])==-1){
            tableau[i]="";
        }
    }
    
                    tableaux=trie_simple("categorie","#cs")
        for(i=0;i<tableau.length;i++){
        if(tableaux.indexOf(tableau[i])==-1){
            tableau[i]="";
        }
    }

    valeur=$("#range_03").val().split(";");
                    tableaux=trie_interval("prix",valeur[0],valeur[1])
                    console.log(tableaux)
        for(i=0;i<tableau.length;i++){
        if(tableaux.indexOf(tableau[i])==-1){
            tableau[i]="";
        }
    }
    console.log(tableau)
    valeur=$("#range_04").val().split(";");
                    tableaux=trie_interval("qte",valeur[0],valeur[1])
        for(i=0;i<tableau.length;i++){
        if(tableaux.indexOf(tableau[i])==-1){
            tableau[i]="";
        }
    }

            $(".io").each(function(){
        if(tableau.indexOf($(this).attr("identifiant"))!=-1){
            $(this).attr("trier","oui");

        }
        else{
           $(this).attr("trier","non");;
        }
    }) 
            }

            });
            </script>
        </body>
    </html>