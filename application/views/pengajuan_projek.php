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
        <title>Pengajuan Projek|M-bangun</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for bootstrap form wizard demos using Twitter Bootstrap Wizard Plugin" name="description" />
        <meta content="" name="author" />
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
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body >
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
                                            <span class="caption-subject font-red bold uppercase"> Pengajuan Projek -
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
                                                                    <i class="fa fa-check"></i> Data Projek </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab2" data-toggle="tab" class="step">
                                                                <span class="number"> 2 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> Alamat </span>
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
                                                                <label class="control-label col-md-3">Nama Projek
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" id="nama" name="nama" required="true" />

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Budget
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" id="budget" name="budget" required="true" />

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Deskripsi
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <textarea class="form-control" rows="10" id="deskripsi" name="deskripsi"  required="true"></textarea>

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Maksimal Penawaran
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="date" class="form-control" id="tgl_max_bid" name="tgl_max_bid" required="true" >

                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="tab-pane" id="tab2">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Jenis Layanan
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <select name="id_jenis_layanan"  id="id_jenis_layanan"  class="form-control" required>
                                                                        <option value="" selected>Pilih Jenis Layanan...</option>
                                                                        <?php foreach ($jenis_layanan as $item): ?>
                                                                            <option value="<?php echo $item->id ?>"><?php echo html_escape($item->nama); ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Tipe Lokasi
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">

                                                                    <select name="tipe_lokasi"  id="tipe_lokasi"  class="form-control" required>
                                                                        <option value="" selected>Pilih Tipe Lokasi...</option>
                                                                        <option value="rumah" >Rumah</option>
                                                                        <option value="apartemen" >Apartemen</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Provinsi
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">

                                                                    <select name="provinsi"  id="provinsi"  class="form-control" required>
                                                                        <option value="" selected>Pilih Provinsi...</option>
                                                                        <?php foreach ($provinces as $item): ?>
                                                                            <option value="<?php echo $item->province_id ?>"><?php echo html_escape($item->province); ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Kota
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <select name="kota" id="kota" class="form-control"  required="true">
                                                                        <option value="" selected>Pilih Kota...</option>

                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Kecamatan
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <select name="id_kecamatan" id="id_kecamatan" class="form-control" required="true" >
                                                                        <option value="" selected>Pilih Kecamatan...</option>

                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Alamat
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <textarea class="form-control" rows="5" name="alamat_lengkap" id="alamat_lengkap" required="true"></textarea>

                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">
                                                                </label>
                                                                <div class=" col-md-8">

                                                                    <iframe src="https://maps.google.com/maps?width=100%&height=100%&hl=en&q=indonesia&ie=UTF8&t=&z=8&iwloc=B&output=embed&disableDefaultUI=true" id="IframeMap" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="pointer-events:none;"></iframe>

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
        <script src="assets/pages/scripts/form-wizard-projek.js?v=8" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

        <script src="assets/js/blockui.js" type="text/javascript"></script>

        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function ()
            {
                $('#clickmewow').click(function ()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
                $("#provinsi").on("change", function (event) {
                    $("#kota").empty();
                    $("#id_kecamatan").empty();
                    $.ajax({
                        type: "POST",
                        url: "welcome/getKota/",
                        data: {id_provinsi: $("#provinsi").val()},
                        dataType: "json",
                        success: function (f) {
                            $("#kota").append('<option value="" selected>Pilih Kota... </option>');
                            $.each(f, function (bb) {
                                $("#kota").append('<option  value="' + f[bb].city_id + '">' + f[bb].city_name + '  </option>');
                            });
                        }
                    });
                });
                $("#alamat_lengkap").bind('input propertychange', function () {
                     $("#IframeMap").attr("src", "https://maps.google.com/maps?width=100%&height=600&hl=en&q="+this.value+"&ie=UTF8&t=&z=8&iwloc=B&output=embed&disableDefaultUI=true");
  
                });

                $("#kota").on("change", function (event) {
                    $("#id_kecamatan").empty();
                    $.ajax({
                        type: "POST",
                        url: "welcome/getKecamatan/",
                        data: {id_kota: $("#kota").val()},
                        dataType: "json",
                        success: function (f) {
                            $("#id_kecamatan").append('<option value="" selected>Pilih Kecamatan... </option>');
                            $.each(f, function (bb) {
                                $("#id_kecamatan").append('<option  value="' + f[bb].subdistrict_id + '">' + f[bb].subdistrict_name + '  </option>');
                            });
                        }
                    });
                });
            }
            )
        </script>

    </body>

</html>