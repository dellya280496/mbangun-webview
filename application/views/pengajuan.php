<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Pengajuan|Mbangun</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<body>
    <div class="page-wrapper">
        <!-- BEGIN HEADER -->

        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->

        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->

            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div>
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->

                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->

                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->

                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">

                            <div class="portlet light bordered" id="form_wizard_1">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-layers font-red"></i>
                                        <span class="caption-subject font-red bold uppercase"> Pengajuan Toko -
                                            <span class="step-title"> Step 1 of 4 </span>
                                        </span>
                                    </div>

                                </div>
                                <div class="portlet-body form">
                                    <form class="form-horizontal" name="submit_form" id="submit_form" method="POST">
                                        <div class="form-wizard">
                                            <div class="form-body">
                                                <ul class="nav nav-pills nav-justified steps">
                                                    <li>
                                                        <a href="#tab1" data-toggle="tab" class="step">
                                                            <span class="number"> 1 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Data Toko </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab2" data-toggle="tab" class="step">
                                                            <span class="number"> 2 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Alamat </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab3" data-toggle="tab" class="step active">
                                                            <span class="number"> 3 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Pengaturan </span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <!--                                                    <div id="progress" >
                                                                                                            <img style="width:100%" src="/images/spinner.gif"/>
                                                                                                            <a href="https://icon-library.net/icon/spinner-icon-gif-10.html" title="Spinner Icon Gif #49761"><img src="https://icon-library.net//images/spinner-icon-gif/spinner-icon-gif-10.jpg" width="350" /></a>
                                                                                                        </div>-->
                                                <div id="bar" class="progress progress-striped" role="progressbar">
                                                    <div class="progress-bar progress-bar-success"> </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="alert alert-danger display-none">
                                                        <button class="close" data-dismiss="alert"></button> Gagal Menyimpan data </div>
                                                    <div class="alert alert-success display-none">
                                                        <button class="close" data-dismiss="alert"></button> Sukses menyimpan data </div>
                                                    <div class="tab-pane active" id="tab1">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Email
                                                                <!--<span class="required"> * </span>-->
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="email" value="<?= $email ?>" readonly="true" />

                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Nama Toko
                                                                <!--<span class="required"> * </span>-->
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" id="nama_toko" name="nama_toko" />

                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Slug
                                                                <!--<span class="required"> * </span>-->
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" id="slug" name="slug" />

                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Nomor Telepon
                                                                <!--<span class="required"> * </span>-->
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="no_hp" id="no_hp" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab2">

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Provinsi
                                                            </label>
                                                            <div class="col-md-4">

                                                                <select name="provinsi" id="provinsi" class="form-control" required>
                                                                    <option value="" selected>Pilih Provinsi...</option>
                                                                    <?php foreach ($provinces as $item) : ?>
                                                                        <option value="<?php echo $item->province_id ?>"><?php echo html_escape($item->province); ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Kota
                                                            </label>
                                                            <div class="col-md-4">
                                                                <select name="kota" id="kota" class="form-control">
                                                                    <option value="" selected>Pilih Kota...</option>

                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Kecamatan
                                                            </label>
                                                            <div class="col-md-4">
                                                                <select name="id_kecamatan" id="id_kecamatan" class="form-control">
                                                                    <option value="" selected>Pilih Kecamatan...</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Alamat
                                                                <span class="required"> * </span>
                                                            </label>
                                                            <div class="col-md-4">
                                                                <textarea class="form-control" rows="5" name="alamat_pengiriman" id="alamat_pengiriman"></textarea>

                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Kode POS
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="kode_pos" id="kode_pos" />

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab3">


                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Instagram
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="instagram" id="instagram" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Facebook
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="facebook" id="facebook" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Youtube
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" name="youtube" id="youtube" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Foto
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="file" class="form-control" name="foto" id="foto" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Foto Sampul
                                                            </label>
                                                            <div class="col-md-4">
                                                                <input type="file" class="form-control" name="foto_sampul" id="foto_sampul" />
                                                            </div>
                                                        </div>



                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <a href="javascript:;" class="btn default button-previous">
                                                            <i class="fa fa-angle-left"></i> Back </a>
                                                        <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                        <a href="javascript:;" class="btn green button-submit"> Submit
                                                            <i class="fa fa-check"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>

            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->

        <!-- END FOOTER -->
    </div>
    <!-- BEGIN QUICK NAV -->

    <div class="quick-nav-overlay"></div>
    <!-- END QUICK NAV -->
    <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<script src="assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/pages/scripts/form-wizard.js?v=5" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    <script src="assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
    <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <script src="assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
    <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

    <script src="assets/js/blockui.js" type="text/javascript"></script>

    <!-- END THEME LAYOUT SCRIPTS -->
    <script>
        $(document).ready(function() {
            $('#foto').bind('change', function() {
                var f = this.files[0]

                //here I CHECK if the FILE SIZE is bigger than 8 MB (numbers below are in bytes)
                if (f.size > 1048576 || f.fileSize > 1048576) {
                    //show an alert to the user
                    alert("Allowed file size exceeded. (Max. 1 MB)")

                    //reset file upload control
                    this.value = null;
                }

            });
            $('#foto_sampul').bind('change', function() {
                var f = this.files[0]

                //here I CHECK if the FILE SIZE is bigger than 8 MB (numbers below are in bytes)
                if (f.size > 1048576 || f.fileSize > 1048576) {
                    //show an alert to the user
                    alert("Allowed file size exceeded. (Max. 1 MB)")

                    //reset file upload control
                    this.value = null;
                }

            });
            $('#clickmewow').click(function() {
                $('#radio1003').attr('checked', 'checked');
            });
            $("#provinsi").on("change", function(event) {
                swal({
                    title: "",
                    text: "Tunggu Sebentar...",
                    imageUrl: "assets/img/ajax-loader.gif",
                    showConfirmButton: false,
                    closeOnClickOutside: false,
                    allowOutsideClick: false,
                    imageWidth: 30,
                    imageHeight: 30,
                });
                $("#kota").empty();
                $("#id_kecamatan").empty();
                $.ajax({
                    type: "POST",
                    url: "welcome/getKota/",
                    data: {
                        id_provinsi: $("#provinsi").val()
                    },
                    dataType: "json",
                    success: function(f) {
                        $("#kota").append('<option value="" selected>Pilih Kota... </option>');

                        $.each(f, function(bb) {
                            $("#kota").append('<option  value="' + f[bb].city_id + '">' + f[bb].city_name + '  </option>');
                        });
                        swal.close();
                    }
                });
            });

            $("#kota").on("change", function(event) {
                swal({
                    title: "",
                    text: "Tunggu Sebentar...",
                    imageUrl: "assets/img/ajax-loader.gif",
                    showConfirmButton: false,
                    closeOnClickOutside: false,
                    allowOutsideClick: false,
                    imageWidth: 30,
                    imageHeight: 30,
                });
                $("#id_kecamatan").empty();
                $.ajax({
                    type: "POST",
                    url: "welcome/getKecamatan/",
                    data: {
                        id_kota: $("#kota").val()
                    },
                    dataType: "json",
                    success: function(f) {
                        $("#id_kecamatan").append('<option value="" selected>Pilih Kecamatan... </option>');

                        $.each(f, function(bb) {
                            $("#id_kecamatan").append('<option  value="' + f[bb].subdistrict_id + '">' + f[bb].subdistrict_name + '  </option>');
                        });
                        swal.close();
                    }
                });
            });
        })
    </script>

</body>

</html>