<style>
    @page {
        margin: 1.5cm;
        font-size: 12px;
        text-align: justify,
    }

    div.a {
        text-indent: 50px;
    }

    div.b {
        text-indent: -2em;
    }

    div.c {
        text-indent: 30%;
    }

    .tb {
        border: 1px solid black;
        border-collapse: collapse;
    }

    #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #3b9c93;
        color: white;
    }
</style>
<center>
    <h2>MEMORANDUM OF UNDERSTANDING <br><?= strtoupper($kontrak['data']->nama) ?></br>
        <br><?= strtoupper($kontrak['data']->nama_user) ?> DAN <?= strtoupper($kontrak['data']->nama_mitra) ?> </br>
    </h2>
</center>
<br>
<p>
    Kami yang bertanda tangan di bawah ini
</p>
<p>
    <label style="font-weight: bold;"><?= strtoupper($kontrak['data']->nama_user) ?></label> berkedudukan di <?= $kontrak['data']->alamat_lengkap_user ?>. selanjutnya disebut sebagai <label style="font-weight: bold;">PIHAK PETAMA</label>.
</p>
<center>dan</center>
<p>
    <label style="font-weight: bold;"><?= strtoupper($kontrak['data']->nama_mitra) ?></label> berkedudukan di <?= $kontrak['data']->alamat_mitra ?>. selanjutnya disebut sebagai <label style="font-weight: bold;">PIHAK KEDUA</label>.
</p>

<p>
    Kedua belah pihak telah sepakat untuk mengadakan kesepatakan dengan ketentuan-ketentuan sebagai berikut :
</p>

<center style="font-weight: bold;">
    <label>PASAL 1</label>
    <br>
    LOKASI KERJASAMA
    </br>
</center>

<p>
    PIHAK PERTAMA bekerjasama dengan PIHAK KEDUA, dengan kondisi PIHAK KEDUA akan Mengejerkan atau Menyediakan "<label style="font-weight: bold;"><?= strtoupper($kontrak['data']->nama) ?></label>" di <?= $kontrak['data']->alamat_lengkap_user ?>.
</p>


<center style="font-weight: bold;">
    <label>PASAL 2</label>
    <br>
    NILAI KERJASAMA
    </br>
</center>
<p>
    <?= strtoupper($kontrak['data']->nama) ?> dengan nilai Total <label style="font-weight: bold;">Rp <?= number_format($kontrak['data']->harga) ?></label>.
    <br>dengan spesifikasi : <?= $kontrak['data']->deskripsi_proyek ?></br>
</p>
<center style="font-weight: bold;">
    <label>PASAL 3</label>
    <br>
    CARA PEMBAYARAN
    </br>
</center>
<p>
    Jumlah termin pembayaran <label style="font-weight: bold;"><?= count($tagihan['data']) ?></label> kali dalam waktu pengerjaan<label style="font-weight: bold;">
        <?= $kontrak['data']->waktu_pengerjaan ?></label> Hari dihitung dari per tanggal <label style="font-weight: bold;"><?= date("d M Y") ?></label>.
    <p>Rincian pembayaran sebagai berikut : </p>
    <center>
        <table id="customers">
            <tr>
                <th>Nama</th>
                <th>Percentase</th>
                <th>Nilai</th>
            </tr>
            <?php foreach ($tagihan['data'] as $item) { ?>
                <tr>
                    <td><?= $item->nama ?></td>
                    <td><?= $item->percentase . '%' ?> </td>
                    <td><?= 'Rp ' . number_format($kontrak['data']->harga * $item->percentase / 100) ?></td>
                </tr>
            <?php } ?>
        </table>
    </center>
</p>
<br>
<p style="text-align: right;">Surabaya, <?= date("d M Y") ?></p>

<table style="width:100%">
    <tr>
        <th >Pihak Pertama</th>
        <th >Mengetahui</th>
        <th >Pihak Kedua</th>
    </tr>
    <tr>
        <td style="text-align: center; "><img src="data:image/gif;base64,<?= $kontrak['data']->user_ttd ?>" alt="images" width="100px" style="opacity: 1;"></td>
        <td style="text-align: center; "><img src="data:image/gif;base64,<?= $kontrak['data']->mbangun_ttd ?>" alt="images" width="100px" style="opacity: 1;"></td>
        <td style="text-align: center; "><img src="data:image/gif;base64,<?= $kontrak['data']->mitra_ttd ?>" alt="images" width="100px" style="opacity: 1;"></td>
    </tr>
    <tr>
        <td style="text-align: center; "><?= strtoupper($kontrak['data']->nama_mitra) ?></td>
        <td style="text-align: center; ">m-Bangun</td>
        <td style="text-align: center; "><?= strtoupper($kontrak['data']->nama_user) ?></td>
    </tr>
</table>