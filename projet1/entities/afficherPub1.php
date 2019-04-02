<?php

include "publicationP.php";
$PublicationP1=new PublicationP();
$listeEmployes=$PublicationP1->afficherPublicationP();

?>

<!DOCTYPE html>
<html>
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
    <link href="../assets/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet" /><!-- THEME STYLES-->
    <link href="../assets/css/app.min.css" rel="stylesheet" /><!-- PAGE LEVEL STYLES-->
    <link href="../assets/vendors/DataTables/tables_pub.css" rel="stylesheet" /><!-- PAGE LEVEL STYLES-->
    
     <script type="text/javascript" src="js/plugins/modernizr/modernizr.js"></script>
</head>
<body>

<style>.dev-page{visibility: hidden;}</style>
 <!-- page content -->
                 

                  <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container">
                        
                        <!-- page title -->
                        <div class="page-title">
                            <h1>Sortable Tables</h1>
                            <p>Sortable features for default tables</p>
                            
                            <ul class="breadcrumb">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Tables</a></li>
                                <li>Sortable tables</li>
                            </ul>
                        </div>                        
                        <!-- ./page title -->
                        
                        <!-- datatables plugin -->
                        <div class="wrapper wrapper-white">
                            <div class="page-subtitle">
                                <h3>DataTables</h3>
                                <p>DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.</p>
                                <p>Add class <code>.table-sortable</code> to table to get zero configuration.</p>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-sortable">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Categorie</th>
                                            <th>Date_debut</th>
                                            <th>Date_fin</th>
                                            <th>Titre</th>
                                            <th>Type</th>
                                            <th>suppression</th>
                                            <th>modifications</th>
                                        <?PHP
foreach($listeEmployes as $row){
    ?>
    <tbody>
    <tr>
    <td><?PHP echo $row['Description']; ?></td>
    <td><?PHP echo $row['Categorie']; ?></td>
    <td><?PHP echo $row['Date_debut']; ?></td>
    <td><?PHP echo $row['Date_fin']; ?></td>
    <td><?PHP echo $row['Titre']; ?></td>
    <td><?PHP echo $row['Type']; ?></td>
    <td><form method="post" action="supprimerPub.php">
    <input type="submit" name="supprimer" value="supprimer">
    <input type="hidden" value="<?PHP echo $row['Description']; ?>" name="Description">
    </form>
    </td>
    <td><a href="recupererPub.php?Description=<?PHP echo $row['Description']; ?>">
    Modifier</a></td>
    </tr>
    </tbody>
    <?PHP
}
?>
                                        </tr>
                                    </thead>                               
                                    
                                </table>
                            </div>
                            
                        </div>                        
                        <!-- ./datatables plugin -->
                        
                        <!-- Sortable plugin -->
                         
                        <!-- summernote plugin -->
                        
                        <!-- Copyright -->
                        <div class="copyright">
                            <div class="pull-left">
                                &copy; 2015 <strong>Aqvatarius</strong>. All rights reserved.
                            </div>
                            <div class="pull-right">
                                <a href="#">Terms of use</a> / <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                        <!-- ./Copyright -->
                        
                    </div>
                    <!-- ./page content container -->                                       
                </div>
                <!-- ./page content -->                                                
            </div>  


        <script type="text/javascript" src="../js/plugins/jquery/jquery.min.js"></script>       
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="../js/plugins/moment/moment.js"></script>
        
        <script type="text/javascript" src="../js/plugins/knob/jquery.knob.min.js"></script>
        <script type="text/javascript" src="../js/plugins/sparkline/jquery.sparkline.min.js"></script>
        
        <script type="text/javascript" src="../js/plugins/datatables/jquery.dataTables.min.js"></script>
        
        <script type="text/javascript" src="../js/plugins/sortable/sortable.min.js"></script>
        
        <script type="text/javascript" src="../js/dev-settings.js"></script>
        <script type="text/javascript" src="../js/dev-loaders.js"></script>
        <script type="text/javascript" src="../js/dev-layout-default.js"></script>
        <script type="text/javascript" src="../js/dev-app.js"></script>

</body>
</html>