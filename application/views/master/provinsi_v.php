<!DOCTYPE html>

<html lang="en">
    <?php $this->load->view('component/header') ?>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
        <div class="page-wrapper">
            <?php $this->load->view('component/navbar') ?>
            <div class="clearfix"> </div>
            <div class="page-container">
                <div class="page-sidebar-wrapper">
                    <?php $this->load->view('component/menu') ?>
                </div>
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <?php $this->load->view('component/breadcumb') ?>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-dark">
                                            <!--<i class="icon-settings font-dark"></i>-->
                                            <span class="caption-subject bold uppercase"> Master Provinsi</span>
                                        </div>
                                        <div class="actions">
                                            <a  data-toggle="modal" data-target="#draggable" class="btn sbold green" >
                                                <span>
                                                    <i class="fa fa-plus-square"></i>
                                                    <span>Tambah Data</span>
                                                </span>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-toolbar">

                                        </div>
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="m_table_1">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5%">
                                                        No
                                                    </th>
                                                    <th style="width: 70%"> Nama </th>
                                                    <th style="width: 25%"> Actions </th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <div class="modal fade draggable-modal" id="draggable" tabindex="-1" role="basic" aria-hidden="true">
                                            <div class="modal-dialog">

                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                        <h4 class="modal-title">Data <?php echo $menu ?></h4>
                                                    </div>
                                                     <form name="formku" id="formku" method="POST" action="#">
                                                    <div class="modal-body" style="margin: 10px"> 
                                                       
                                                            <div class="row">
                                                                <div class="form-group">

                                                                    <div class="col-lg-2">
                                                                        <labe>Nama</labe>
                                                                    </div>
                                                                    <div class="col-lg-10">
                                                                        <input type="text" class="form-control" name="nama" id="nama" required>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                        <button type="submit" id="submit" class="btn green">Simpan</button>
                                                    </div>
                                                    </form>
                                                </div>

                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!--                                        <div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                    <form class="m-form m-form--fit m-form--label-align-right" action="#" id="formku" name="formku"  method="post" enctype="multipart/form-data">
                                                                                        <div class="modal-dialog modal-md" role="document">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Aspek</h5>
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <div class="row">
                                        
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <label for="recipient-name" class="form-control-label">Nama Aspek</label>
                                                                                                                <div class="input-group m-input-group">
                                                                                                                    <input type="text" class="form-control m-input" id="nama_aspek" name="nama_aspek" required >
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="form-group">
                                                                                                                <label for="recipient-name" class="form-control-label">Bobot Aspek (%)</label>
                                                                                                                <div class="input-group m-input-group">
                                                                                                                    <input type="number" class="form-control m-input" id="bobot" name="bobot" required >
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                        
                                        
                                                                                                    </div>
                                                                                                    <input type="hidden" name="id_aspek" id="id_aspek">
                                                                                                    <input type="hidden" name="mode_form" id="mode_form" value="Tambah">
                                                                                                    <div class="modal-footer">
                                                                                                        <button type="submit" class="btn btn-info m-btn--pill" id="simpan">Simpan</button>
                                                                                                        <button type="button" class="btn btn-danger m-btn--pill" data-dismiss="modal" id="batal">Tutup</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                    </form>
                                                                                </div>
                                        
                                                                            </div>-->
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php $this->load->view('component/footer') ?>
        </div>
        <?php $this->load->view('component/js_table') ?>

        <script type="text/javascript">
            $(document).ready(function () {

//            window.location.replace(window.location.hash);

            });
        </script>
        <script src="assets/js/provinsi.js" type="text/javascript"></script>
    </body>

</html>