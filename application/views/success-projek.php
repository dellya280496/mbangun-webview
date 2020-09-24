<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <title>Metronic Admin Theme #1 | 500 Page Option 2</title>
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="../assets//global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets//global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets//global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets//global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="../assets//global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="../assets//global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="../assets//pages/css/error.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<body class=" page-500-full-page">
    <div class="row" style="justify-content: center;padding-left: 20px;padding-right: 20px;">
        <div class="col-md-12 page-500" style="margin-top: 25%">
            <div class=" details">
                <img src="../assets//img/etalase.png" alt="Girl in a jacket" width="70%">
            </div>
        </div>
        <div class="col-md-12">
            <div class=" details">
                <center>
                    <h3>Pengajuan anda berhasilter</h3>
                    <p style="color: #afadad;">Klik lanjutkan untuk memproses pengajuan anda</p>
                </center>
            </div>
        </div>
        <div class="col-md-12">
            <div class=" details">
                <center>
                    <button onclick="kelolaToko()" class="btn btn-success">Lanjutkan</button>
                </center>
            </div>
        </div>
    </div>
    <!--[if lt IE 9]>
<script src="../assets//global/plugins/respond.min.js"></script>
<script src="../assets//global/plugins/excanvas.min.js"></script> 
<script src="../assets//global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="../assets//global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../assets//global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets//global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="../assets//global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="../assets//global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="../assets//global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="../assets//global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <!-- END THEME LAYOUT SCRIPTS -->
    <script>
        $(document).ready(function() {
        });

        function kelolaToko() {
            Print.postMessage('kelolaToko');
        }
    </script>
</body>


</html>