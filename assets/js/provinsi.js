function convertToRupiah(angka)
{
    var rupiah = '';
    var angkarev = angka.toString().split('').reverse().join('');
    for (var i = 0; i < angkarev.length; i++)
        if (i % 3 == 0)
            rupiah += angkarev.substr(i, 3) + '.';
    return 'Rp. ' + rupiah.split('', rupiah.length - 1).reverse().join('') + ',-';
}
var DatatablesDataSourceAjaxClient = {
    init: function () {
        $("#m_table_1").DataTable({
            responsive: !0,
            ajax: {
                url: "provinsi/getTabel",
                type: "POST",
                data: {
                    // pagination: {
                    //     perpage: 5
                    // }
                }
            },
            initComplete: function (settings, json) {
                $('#m_table_1').DataTable().on('order.dt search.dt', function () {
                    $('#m_table_1').DataTable().column(0, {
                        search: 'applied',
                        order: 'applied'
                    }).nodes().each(function (cell, i) {
                        cell.innerHTML = i + 1;
                    });
                }).draw();
            },
            columns: [{
                    data: null
                },
                {
                    data: "nama"
                },
                {
                    data: null,
                    render: function (data, type, row) {
                        return '<a href="#"><button type="button" data-id="' + data.id + '" \n\
                                    data-nama_aspek="' + data.nama + '" class="btn m-btn--pill sbold green btn-xs button_ubah" data-toggle="modal" data-target="#m_modal_1"> <i class="fa fa-edit"></i></button></a>\n\
                                    <button type="button" class="btn m-btn--pill btn-danger btn-xs button_hapus" id="m_sweetalert_demo_8" \n\
                                data-id="' + data.id + '" ><i class="fa fa-trash"></i></button>';
                    },
                    targets: -1,
                    orderable: false
                }
            ]
        });


    }
}

;
jQuery(document).ready(function () {
    DatatablesDataSourceAjaxClient.init();
}

);
jQuery(document).ready(function () {
    $('#m_table_1 tbody').on('click', '.button_ubah', function (e) {

        var id = $(this).attr("data-id");
        console.log("id ".id)
        $('#id_aspek').val(id);
        $('#mode_form').val("Ubah");
        var bobot = $(this).attr("data-bobot");
        $('#bobot').val(bobot);
        var nama_aspek = $(this).attr("data-nama_aspek");
        $('#nama_aspek').val(nama_aspek);


    });

    $('#m_table_1 tbody').on('click', '.button_hapus', function (e) {

        var id = $(this).attr('data-id');
        console.log("id " + id);
        swal({
            title: "Apakah anda yakin?",
            text: "Penghapusan data tidak dapat dikembalikan!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Hapus"
        }).then(function (e) {
            if (e.value) {

                $.ajax({
                    method: 'POST',
                    dataType: 'json',
                    url: 'aspek/do_Hapus',
                    data: {'id_aspek': id},
                    success: function (data) {
                        if (data.success === true) {
                            $('#m_table_1').DataTable().ajax.reload(null, false);
                            e.value && swal("Terhapus!", data.msgServer, "success");


                        } else {
                            e.value && swal("Gagal Terhapus!", data.msgServer, "error");
                        }
                    },
                    fail: function (e) {
                        toastr.warning('Data gagal terhapus!');
                    },
                    error: function (e) {
                        toastr.error('Data gagal terhapus!');
                    }
                });

            }
        })
    });
});

jQuery(document).ready(function () {
    $('#formku').validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block', // default input error message class
        focusInvalid: true, // do not focus the last invalid input
        ignore: "",
        rules: {
            nama: {
                required: true
            }
        },
        invalidHandler: function (event, validator) { //display error alert on form submit              
            toastr.error("Maaf, Inputkan data dengan lengkap");
        },
        errorPlacement: function (error, element) { // render error placement for each input type
            var icon = $(element).parent('.input-icon').children('i');
            icon.removeClass('fa-check').addClass("fa-warning");
            icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
        },
        highlight: function (element) { // hightlight error inputs
            $(element).closest('.form-group').addClass('has-error'); // set error class to the control group   
        },
        unhighlight: function (element) { // revert the change done by hightlight
        },
        success: function (label, element) {
            var icon = $(element).parent('.input-icon').children('i');
            $(element).closest('.form-group').removeClass('has-error');
            icon.removeClass("fa-warning");
        },
        submitHandler: function (form) {
            App.blockUI('#formku');
            $.ajax({
                method: 'POST',
                dataType: 'json',
                url: 'provinsi/do_Simpan',
                data: $('#formku').serializeArray(),
                success: function (data) {
                    if (data.success === true) {
                        toastr.success(data.msgServer);
                        $('#formku').each(function () {
                            this.reset();
                        });
                        $('#m_table_1').DataTable().ajax.reload(null, false);
                        $('#mode_form').val("Tambah");
                        App.unblockUI('#formku');
                    } else {
                        toastr.warning(data.msgServer);
                        App.unblockUI('#formku');
                    }
                },
                fail: function (e) {
                    toastr.error(e);
                    App.unblockUI('#formku');
                }
            });
        }
    });

});

