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
        <title>Pengajuan|M-bangun</title>
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
        <link href="assets/global/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/jquery-multi-select/css/multi-select.css" rel="stylesheet" type="text/css" />

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
                                            <span class="caption-subject font-red bold uppercase"> Pendaftaran Mitra -
                                                <span class="step-title"> Step 1 of 3 </span>
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
                                                                    <i class="fa fa-check"></i> Data Mitra </span>
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
                                                                    <i class="fa fa-check"></i> Dokumen </span>
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
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="email" value="<?= $email ?>" readonly="true" />
                                                                    <input type="hidden" class="form-control" name="id_google" value="<?= $id ?>" readonly="true" />

                                                                </div>
                                                            </div>

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Nomor KTP
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="no_ktp" id="no_ktp" required/>
                                                                    </div>
                                                                </div>

                                                                
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Foto KTP
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="file" class="form-control" name="foto_ktp" id="foto_ktp" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Foto
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="file" class="form-control" name="foto" id="foto" required />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Nama
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" id="nama" name="nama" required />

                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Nomor Telepon
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="no_hp" id="no_hp" required />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Tanggal Lahir
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-3">
                                                                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Jenis Kelamin
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                                                            <option value="l" selected>Laki-Laki</option>
                                                                            <option value="p" selected>Perempuan</option>

                                                                        </select>

                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Tempat Lahir
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <textarea class="form-control" id="tempat_lahir" name="tempat_lahir" required></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Password
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" name="password" id="password" class="form-control" required />
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
                                                                        <textarea class="form-control" rows="5" name="alamat" id="alamat"></textarea>

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
                                                                        <label class="control-label col-md-3">Jenis Mitra
                                                                        </label>
                                                                        <div class="col-md-4">
                                                                            <select name="jenis_mitra" id="jenis_mitra" class="form-control" >

                                                                                <option value="">Pilih Jenis Mitra...</option>
                                                                                <option value="perorangan">Perorangan</option>
                                                                                <option value="ud" >UD</option>
                                                                                <option value="cv" >CV</option>
                                                                                <option value="pt" >PT</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Keahlian
                                                                        </label>
                                                                        <div class="col-md-4">
                                                                            <select multiple="multiple" class="multi-select" id="my_multi_select1" name="my_multi_select1[]" required="true">
                                                                                <?php foreach ($jenis_layanan as $item): ?>
                                                                                    <option value="<?php echo $item->id ?>"><?php echo $item->nama ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    

                                                                    <div class="form-group" id="1">
                                                                            <label class="control-label col-md-3">No SIUP
                                                                            </label>
                                                                            <div class="col-md-4">
                                                                                <input type="text" class="form-control" name="no_siup" id="no_siup" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group" id="2">
                                                                            <label class="control-label col-md-3">Foto SIUP
                                                                            </label>
                                                                            <div class="col-md-4">
                                                                                <input type="file" class="form-control" name="foto_siup" id="foto_siup" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group" id="3">
                                                                            <label class="control-label col-md-3">Nama Pemilik
                                                                            </label>
                                                                            <div class="col-md-4">
                                                                                <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" />
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group" id="4">
                                                                            <label class="control-label col-md-3">Alamat Pemilik
                                                                            </label>
                                                                            <div class="col-md-4">
                                                                                <input type="text" class="form-control" name="alamat_pemilik"  id="alamat_pemilik" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-3">Pengalaman Kerja
                                                                            </label>
                                                                            <div class="col-md-4">
                                                                                <textarea id="pengalaman_kerja" rows="8" name="pengalaman_kerja" class="form-control" placeholder="ceritakan pengalaman kerja anda"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-3">No NPWP
                                                                            </label>
                                                                            <div class="col-md-4">
                                                                                <input type="text" class="form-control" name="no_npwp" id="no_npwp" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-3">Foto NPWP
                                                                            </label>
                                                                            <div class="col-md-4">
                                                                                <input type="file" class="form-control" name="foto_npwp" id="foto_npwp" />
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

                    <!-- BEGIN CORE PLUGINS -->
                    <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
                    <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                    <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
                    <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
                    <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
                    <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
                    <!-- END CORE PLUGINS -->
                    <!-- BEGIN PAGE LEVEL PLUGINS -->
                    <script src="assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
                    <script src="assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js" type="text/javascript"></script>

                    <script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
                    <script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
                    <script src="assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
                    <script src="assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
                    <!-- END PAGE LEVEL PLUGINS -->
                    <!-- BEGIN THEME GLOBAL SCRIPTS -->
                    <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
                    <script src="assets/pages/scripts/components-multi-select.min.js" type="text/javascript"></script>

                    <!-- END THEME GLOBAL SCRIPTS -->
                    <!-- BEGIN PAGE LEVEL SCRIPTS -->
                    <script src="assets/pages/scripts/form-wizard-mitra.js?v=5" type="text/javascript"></script>
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
                        $(document).ready(function () {
                            $("#jenis_mitra").on("change", function (event) {
                                var jenis = $("#jenis_mitra").val();
                                if (jenis == 'perorangan') {
                                    $("#1").hide();
                                    $("#2").hide();
                                    $("#3").hide();
                                    $("#4").hide();
                                } else {
                                    $("#1").show();
                                    $("#2").show();
                                    $("#3").show();
                                    $("#4").show();
                                }

                            });
                            //binds to onchange event of your input field
                            $('#foto').bind('change', function () {
                                var f = this.files[0]

                                //here I CHECK if the FILE SIZE is bigger than 8 MB (numbers below are in bytes)
                                if (f.size > 1048576 || f.fileSize > 1048576) {
                                    //show an alert to the user
                                    alert("Allowed file size exceeded. (Max. 1 MB)")

                                    //reset file upload control
                                    this.value = null;
                                }

                            });
                            $('#foto_ktp').bind('change', function () {
                                var f = this.files[0]

                                //here I CHECK if the FILE SIZE is bigger than 8 MB (numbers below are in bytes)
                                if (f.size > 1048576 || f.fileSize > 1048576) {
                                    //show an alert to the user
                                    alert("Allowed file size exceeded. (Max. 1 MB)")

                                    //reset file upload control
                                    this.value = null;
                                }

                            });
                            $('#foto_siup').bind('change', function () {
                                var f = this.files[0]

                                //here I CHECK if the FILE SIZE is bigger than 8 MB (numbers below are in bytes)
                                if (f.size > 1048576 || f.fileSize > 1048576) {
                                    //show an alert to the user
                                    alert("Allowed file size exceeded. (Max. 1 MB)")

                                    //reset file upload control
                                    this.value = null;
                                }

                            });
                            $('#foto_npwp').bind('change', function () {
                                var f = this.files[0]

                                //here I CHECK if the FILE SIZE is bigger than 8 MB (numbers below are in bytes)
                                if (f.size > 1048576 || f.fileSize > 1048576) {
                                    //show an alert to the user
                                    alert("Allowed file size exceeded. (Max. 1 MB)")

                                    //reset file upload control
                                    this.value = null;
                                }

                            });
                            $('#clickmewow').click(function () {
                                $('#radio1003').attr('checked', 'checked');
                            });
                            $("#provinsi").on("change", function (event) {
                                $("#kota").empty();
                                $("#id_kecamatan").empty();
                                $.ajax({
                                    type: "POST",
                                    url: "welcome/getKota/",
                                    data: {
                                        id_provinsi: $("#provinsi").val()
                                    },
                                    dataType: "json",
                                    success: function (f) {
                                        $("#kota").append('<option value="" selected>Pilih Kota... </option>');

                                        $.each(f, function (bb) {
                                            $("#kota").append('<option  value="' + f[bb].city_id + '">' + f[bb].city_name + '  </option>');
                                        });
                                    }
                                });
                            });

                            $("#kota").on("change", function (event) {
                                $("#id_kecamatan").empty();
                                $.ajax({
                                    type: "POST",
                                    url: "welcome/getKecamatan/",
                                    data: {
                                        id_kota: $("#kota").val()
                                    },
                                    dataType: "json",
                                    success: function (f) {
                                        $("#id_kecamatan").append('<option value="" selected>Pilih Kecamatan... </option>');

                                        $.each(f, function (bb) {
                                            $("#id_kecamatan").append('<option  value="' + f[bb].subdistrict_id + '">' + f[bb].subdistrict_name + '  </option>');
                                        });
                                    }
                                });
                            });
                        })
                    </script>

                    </body>

                    </html>