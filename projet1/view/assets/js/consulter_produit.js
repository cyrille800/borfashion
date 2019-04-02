$(function() {
            $("body").fadeIn();

            res=false;
                        max_prix=0;
                        max_qte=0;
            $("prix").each(function(){
                if(parseInt($(this).text())>max_prix){
                    max_prix=parseInt($(this).text());
                }
            })
            $("qte").each(function(){
                if(parseInt($(this).text())>max_qte){
                    max_qte=parseInt($(this).text());
                }
            })

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
        url:'../../core/upload_produit.php',
        method:'POST',
        data:form_data,
        contentType:false,
        cache:false,
        processData:false,
        success:function(data)
            {
                res=true;
                
                $("#cv").attr("src","../assets/img/clothes/tmp.jpg?timestamp=" + new Date().getTime());
                $("#cv").hide();
                $("#cv").fadeIn();
                $.get("../../core/upload_produit.php?id="+$("[name='id']").val());
                $(" [identifiant='"+$("[name='id']").val()+"'] .chan").attr("src","../assets/img/clothes/tmp.jpg?timestamp=" + new Date().getTime());
                $(" [identifiant='"+$("[name='id']").val()+"'] .chan").hide();
                $(" [identifiant='"+$("[name='id']").val()+"'] .chan").fadeIn();
                notification("success","opération terminée");
            }
        });
    }
    // console.log($(this).val())
    // $("#cv").attr("src",$(this).val());
})


            $(".sweet-overlay").hide();
            $(".modif").click(function(){
              var categorie="";
                id=$(this).attr("cni");
                $.get("../../entities/produit.php?operation=un_resultat&valeur="+id+"&rec=titre",function(data){
                   $('[name="titres"]').parent().children("label").addClass("active");
                    $('[name="titres"]').val(data);
                });
                $.get("../../entities/produit.php?operation=un_resultat&valeur="+id+"&rec=prix",function(data){
                   $('[name="prix"]').parent().children("label").addClass("active");
                    $('[name="prix"]').val(data);
                });
                $.get("../../entities/produit.php?operation=un_resultat&valeur="+id+"&rec=quantite",function(data){
                   $('[name="quantite"]').parent().children("label").addClass("active");
                    $('[name="quantite"]').val(data);
                });
                $.get("../../entities/produit.php?operation=un_resultat&valeur="+id+"&rec=description",function(data){
                   $('[name="description"]').parent().children("label").addClass("active");
                    $('[name="description"]').val(data);
                });
                $.get("../../entities/produit.php?operation=un_resultat&valeur="+id+"&rec=id",function(data){
                    $('[name="id"]').val(data);
                    $("#cv").attr("src","../assets/img/clothes/"+data+".jpg?timestamp=" + new Date().getTime());
                });
                $("#lol").fadeIn();

            })

             $("#q").click(function(){
                $(".sweet-overlay").fadeOut()
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


$(".delete").click(function(){
    id=$(this).attr("cni");
    $(this).parent().parent().parent().parent().parent().parent().fadeOut().remove();
    $.get("../../entities/produit.php?operation=suppression&id="+id);
    notification("success","vous avez supprimer un produit");
})

$("#soum").click(function(){
    if((($("[name='titres']").val()!="" && $("[name='prix']").val()!="") && $("[name='quantite']").val()!="") && $("[name='description']").val()!=""){
         $.post( "../../entities/produit.php", $( "#formualire" ).serialize(),function(data){
    if(data!="ok"){
    notification("error",data);    
    }
    else{
        id=$("[name='id']").val();
        $('[identifiant="'+id+'"] .card-title').text($("[name='titres']").val());
        $('[identifiant="'+id+'"] div.text-muted').text($("[name='description']").val());
        $('[identifiant="'+id+'"] [href="#"] span qte').text(" "+$("[name='quantite']").val());
        $('[identifiant="'+id+'"] span.text-muted').html('<i class="far fa-dollar-sign mr-2"></i><prix>'+$("[name='prix']").val()+"</prix>");

        if($("[name='genre']").val().toLowerCase()=="homme"){
          $('[identifiant="'+id+'"] .card-cup').removeClass("bg-primary");  
          $('[identifiant="'+id+'"] .card-cup').addClass("bg-danger");  
          $('[identifiant="'+id+'"] .card-cup h5').text('homme');
        }
        if($("[name='genre']").val().toLowerCase()=="femme"){
          $('[identifiant="'+id+'"] .card-cup').addClass("bg-primary");  
          $('[identifiant="'+id+'"] .card-cup').removeClass("bg-danger");  
          $('[identifiant="'+id+'"] .card-cup h5').text('femme');
        }
        if($("[name='genre']").val().toLowerCase()=="enfant"){
          $('[identifiant="'+id+'"] .card-cup').removeClass("bg-primary");  
          $('[identifiant="'+id+'"] .card-cup').removeClass("bg-danger"); 
          $('[identifiant="'+id+'"] .card-cup').css("background-color","#FF1493")  
          $('[identifiant="'+id+'"] .card-cup h5').text('enfant');
        }
        $('[identifiant="'+id+'"] .card-cup').text($("[name='genre']").val());
        $('[identifiant="'+id+'"] .categorie').text($('[name="categorie"]').val());
        notification("success","modification terminée");
        trie_gobal("#recherche","#range_03","#range_04","#ge","#cs");
    }
 } );  
    }
    else{
     notification("error","remplir tous les champs");   
    }
})

setInterval(function(){


       vo=0;
       $("[identifiant]").each(function(){
        if($(this).css("display")!="none"){
            vo++;
        }
       })

       if(vo==0){
       if($("h3.lead").text()!="Aucun resultat ..."){
                trie_gobal("#recherche","#range_03","#range_04","#ge","#cs")
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
                trie_gobal("#recherche","#range_03","#range_04","#ge","#cs")
            }
       }

},100)
    // fonction avancer
    
    function trie(valeur,changer){
var data=valeur
    rec=changer
    tableau=[]
    $(rec).each(function(){
        var texte=$(this).text().toLowerCase();
        var n=texte.indexOf(data);
        if(n!=-1){
            tableau.push($(this).parent().parent().parent().attr("identifiant"))
        }

    })
    return tableau;
    }

    function trie_interval(min,max,changer){
    rec=changer
    tableau=[]
    $(rec).each(function(){
        var nombre=parseInt($(this).text());
         console.log(rec)
        if(nombre>=min && nombre<=max){
            v=$(this).parent().parent().parent().parent().parent().parent().attr("identifiant");
                tableau.push(v);

        }
    })
   
    return tableau
    }

    function trie_gobal(titre,prix,qte,genre,cat){


       var tableau=[];
    tableau=trie($(titre).val(),".bv");
   var tableaux=[];
   valeur=$(prix).val().split(";");
   tableaux=trie_interval(parseInt(valeur[0]),parseInt(valeur[1]),"prix");
    for(i=0;i<tableau.length;i++){
        if(tableaux.indexOf(tableau[i])==-1){
            tableau[i]="";
        }
    }
    valeur=$(qte).val().split(";")
    tableaux=trie_interval(parseInt(valeur[0]),parseInt(valeur[1]),"qte");

    for(i=0;i<tableau.length;i++){
        if(tableaux.indexOf(tableau[i])==-1){
            tableau[i]="";
        }
    }
    if($(genre).val()=="option"){
    tableaux=trie("",".card-cupss")
    }
    else{
    tableaux=trie($(genre).val().toLowerCase(),".card-cupss")
    }
        for(i=0;i<tableau.length;i++){
        if(tableaux.indexOf(tableau[i])==-1){
            tableau[i]="";
        }
    }

     if($(cat).val()=="option"){
     tableaux=trie("",".categorie")
    }
    else{
        tableaux=trie($(cat).val().toLowerCase(),".categorie")
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
            console.log("oui");
            }
            else{
             $(this).hide();   
            }
            console.log($(this).attr("data-pagination")+" == "+$(".page_actuel").text());
        }
        else{
            $(this).attr("etat","false");
            $(this).hide();
        }
    }) 
    }

bv=0;
$("[identifiant]").each(function(){
if(bv>0){
$(this).hide();
}
    bv++;
})
$("#recherche").keyup(function(){
    trie_gobal("#recherche","#range_03","#range_04","#ge","#cs")
})

$("#ge").change(function(){
       trie_gobal("#recherche","#range_03","#range_04","#ge","#cs")
})

$("#cs").change(function(){
       trie_gobal("#recherche","#range_03","#range_04","#ge","#cs")
})
$("#range_03").change(function(){
        trie_gobal("#recherche","#range_03","#range_04","#ge","#cs")
})

$("#range_04").change(function(){
        trie_gobal("#recherche","#range_03","#range_04","#ge","#cs")
})
$("#moins").click(function(){

if(parseInt($(".page_actuel").text())+1<=parseInt($(".resultat").text())){
        $(".page_actuel").text(parseInt($(".page_actuel").text())+1)
    trie_gobal("#recherche","#range_03","#range_04","#ge","#cs")
    }
})
$("#plus").click(function(){
    if(parseInt($(".page_actuel").text())-1>0){
        $(".page_actuel").text(parseInt($(".page_actuel").text())-1)
    trie_gobal("#recherche","#range_03","#range_04","#ge","#cs")
}
})
$("#touchspin_1").change(function(){
    trie_gobal("#recherche","#range_03","#range_04","#ge","#cs")
})

        });