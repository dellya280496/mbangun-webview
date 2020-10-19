<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Simulai Kredit</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<style>

		.zebra-table{

	box-shadow: 0 2px 3px 1px #ddd;

	overflow:hidden;

	border:10px solid #fff;

	border-collapse: collapse;

}



.zebra-table th,.zebra-table td{

	vertical-align: top;

	padding: 8px 5px;

	text-align: left;

	margin: 0;

}

.zebra-table tbody th{

	background: #34495E;

	color: #fff;



}

.zebra-table tbody tr:nth-child(odd){

  	background:#DADFE1;

}

	</style>

</head>

<body>

	<?php

function buatrp($angka){

		$jadi ="Rp. " .number_format($angka,2,',','.');

		return $jadi;

	}

?>



<div class="container">

<h2 class="section-title"><span>Simulasi Kredit</span></h2>

<form action="" method="POST">

	<b>Jumlah Pinjaman : </b>

	<input class="form-control" type="text" id="jumlah_view"></input>
	<input class="form-control" type="hidden" name="jumlah" id="jumlah"></input>
	<br>

	<b>Lama Peminjaman : </b>

	<select name="lama" id="myPinjam" onchange="myFunction()" class="form-control" required>

		<option value="">-Pilih-</option>

		<option value="12">12 Bulan</option>

		<option value="24">24 Bulan</option>

		<option value="36">36 Bulan</option>

		<option value="48">48 Bulan</option>

		<option value="60">60 Bulan</option>

		<option value="72">72 Bulan</option>

		<option value="84">84 Bulan</option>

	</select><br>

	<input type="submit" name="btn-kalkulasi" class="btn btn-ku" value="Kalkulasi">



</form>

<hr>

<?php

	if (isset($_POST['btn-kalkulasi'])) {

		$jumlah_pinjaman = $_POST['jumlah'];

		$lama_pinjaman = $_POST['lama'];



		if($lama_pinjaman==12){

			$bunga_pertahun=10.56;

		}elseif ($lama_pinjaman==24) {

			$bunga_pertahun=12;

		}elseif ($lama_pinjaman==36) {

			$bunga_pertahun=14.40;

		}elseif ($lama_pinjaman==48) {

			$bunga_pertahun=14.40;

		}elseif ($lama_pinjaman==60) {

			$bunga_pertahun=15.36;

		}elseif ($lama_pinjaman==72) {

			$bunga_thn=15.36;

		}elseif ($lama_pinjaman==84) {

			$bunga_pertahun=15.36;

		}



		$bunga_perbulan=$bunga_pertahun/12;

		$bunga_rp = $jumlah_pinjaman/$bunga_pertahun;

		$angsuran_bunga=$jumlah_pinjaman*$bunga_perbulan/100;

		$angsuran_pokok = $jumlah_pinjaman/$lama_pinjaman;

		$jumlah = $angsuran_pokok+$angsuran_bunga;



		echo "<pre>";

		echo "Jumlah Pinjaman          = "."<b>".buatrp($jumlah_pinjaman)."</b>"."<br>";

		echo "Lama Pinjaman            = "."<b>".$lama_pinjaman." Bulan"."</b>"."<br>";

		echo "Bunga per tahun          = "."<b>".$bunga_pertahun.' %'."</b>"."<br>";

		echo "Bunga per bulan          = "."<b>".$bunga_perbulan.' %'."</b>".'<br>';

		echo "<br>";

		echo "Angsuran Pokok Per Bulan = "."<b>".buatrp($angsuran_pokok)."</b>"."<br>";

		echo "Angsuran Bunga Per Bulan = "."<b>".buatrp($angsuran_bunga)."</b>"."<br>";

		echo "                           _____________________ ( + )<br>";

		echo "Total Angsuran Per Bulan = "."<b>".buatrp($jumlah)."</b>";

		echo "</pre>";



		$row=$jumlah_pinjaman;

		$no=1;

?>

	<table class="table zebra-table">

		<tr>

			<th>Angsuran ke -</th>

			<th>Angsuran Pokok</th>

			<th>Angsuran Bunga</th>

			<th>Total Angsuran</th>

			<th>Baki Debet</th>

		</tr>

		<tr>

			<td>0</td>

			<td>0</td>

			<td>0</td>

			<td>0</td>

			<td><b><?php echo buatrp($jumlah_pinjaman);?></b></td>

		</tr>

	

<?php while ( $row > 1) { $row=$row-$angsuran_pokok; ?>



		<tr>

			<td><?php echo $no++;?></td>

			<td><?php echo buatrp($angsuran_pokok);?></td>

			<td><?php echo buatrp($angsuran_bunga);?></td>

			<td><?php echo buatrp($jumlah);?></td>

			<td><?php echo buatrp($row);?></td>

		</tr>

		

	<?php }

		$tot_ang_pokok=$angsuran_pokok*$lama_pinjaman;

		$tot_ang_bunga=$angsuran_bunga*$lama_pinjaman;

		$tot_jumlah=$jumlah*$lama_pinjaman;

	?>



		<tr>

			<td></td>

			<td><b><?php echo buatrp($tot_ang_pokok);?></b></td>

			<td><b><?php echo buatrp($tot_ang_bunga);?></b></td>

			<td><b><?php echo buatrp($tot_jumlah);?></b></td>

			<td></td>

		</tr>

	</table>

</div>

<div class="container"><br></div>

<?php } ?>



</body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
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
    <script src="assets/pages/scripts/form-wizard-projek.js?v=9" type="text/javascript"></script>
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

    <script>
        $(document).ready(function() {
            $('#jumlah_view').mask('000.000.000.000.000.000', {
                reverse: true
            });
            $("#jumlah_view").on("keyup", function(event) {
                var budget = $(this).cleanVal();
                $('#jumlah').val(budget);
            });
            $('#clickmewow').click(function() {
                $('#radio1003').attr('checked', 'checked');
            });
        })
    </script>
</html>
