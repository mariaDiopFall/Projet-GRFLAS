<?php 
require('index.php');             //pour s'assurer que l'utilisateur s'est deja authentifié avant d'accéder à cet page
if ($_SESSION['profil'] != 'Administrateur')
{
    header('Location:index.php');
}
//include('connect_desk.php');                 
?>
<!DOCTYPE html>
<html>
<?php
//include_once('entete.php'); 
?>
<body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
            <?php
            //include_once('topbar.php'); 
            //include_once('leftsidebar.php'); 
            ?>
            <div class="content-page">
            <!-- Start content -->
                <div class="content">
                    <div class="container">
                    <div class="row">
                            <div class="col-md-8 col-lg-3 B" align="center">
                                <div class="card card-horizontal" >
                                    <div class="card-image"><img src="assets/images/inter.jpg" align="left" height="200" width="255">
                                    </div>
                                    <div class="card-stacked">
                                        <div class="card-content">
                                        <p><strong>Gestion d'intervention</strong></p>
                                        </div>
                                        <div class="card-action teal lighten-2">
                                        <a href="inter.php"><button type="button" class="btn btn-info btn-lg active" target="_blank">Acceder<i class="material-icons right">trending_flat</i></button></a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        
                            <div class="col-md-8 col-lg-3 B" align="center">
                                <div class="card card-horizontal" align="center">
                                    <div class="card-image"><img src="assets/images/Mat.jpg" align="left" height="200"></div>
                                    <div class="card-stacked">
                                        <div class="card-content">
                                        <p><strong>Gestion Materiel et Systeme</strong></p>
                                        </div>
                                        <div>
                                        <a href="matsys.php?"><button type="button" class="btn btn-info btn-lg active" target="_blank">Acceder<i class="material-icons right">trending_flat</i></button></a>
                                        </div>

                                    </div>
                                </div> 
                            </div>

                            <div class="col-md-8 col-lg-3 B" align="center">
                                <div class="card card-horizontal" align="center">
                                    <div class="card-image"><img src="assets/images/users.png" align="left" height="200"></div>
                                    <div class="card-stacked">
                                        <div class="card-content">
                                        <p><strong>Gestion utilisateurs</strong></p>
                                        </div>
                                        <div>
                                        <a href="user.php?"><button type="button" class="btn btn-info btn-lg active" target="_blank">Acceder<i class="material-icons right">trending_flat</i></button></a>
                                        </div>

                                    </div>
                                </div> 
                            </div>

                            <div class="col-md-8 col-lg-3 B" align="center">
                                <div class="card card-horizontal" align="center">
                                    <div class="card-image"><img src="assets/images/stat.jpg" align="left" height="200"></div>
                                    <div class="card-stacked">
                                        <div class="card-content">
                                        <p><strong>Statistiques</strong></p>
                                        </div>
                                        <div>
                                        <a href="stat.php?"><button type="button" class="btn btn-info btn-lg active" target="_blank">Acceder<i class="material-icons right">trending_flat</i></button></a>
                                        </div>

                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            //include_once('rightsidebar.php'); 
            ?>
        </div>
        <!-- End page-->
        <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <script src="assets/js/jquery.app.js"></script>
        
    <!-- jQuery  -->
    <script src="assets/plugins/moment/moment.js"></script>
        
    <!-- jQuery  -->
    <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
    <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
        
    <!-- jQuery  -->
    <script src="assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
        
        
    <!-- flot Chart -->
    <script src="assets/plugins/flot-chart/jquery.flot.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.pie.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>

    <!-- jQuery  -->
    <script src="assets/pages/jquery.todo.js"></script>
        
    <!-- jQuery  -->
    <script src="assets/pages/jquery.chat.js"></script>
        
    <!-- jQuery  -->
    <script src="assets/pages/jquery.dashboard.js"></script>
        
    <script type="text/javascript">
        /* ==============================================
        Counter Up
        =============================================== */
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 100,
                time: 1200
            });
        });
    </script>

</body>
</html>