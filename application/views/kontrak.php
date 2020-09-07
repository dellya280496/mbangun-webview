<style>
    @page {
        margin: 2.0cm;
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
</style>
<center>
    <h3>MEMORANDUM OF UNDERSTANDING <br><?= strtoupper($kontrak['data']->nama) ?></br>
        <br><?= strtoupper($kontrak['data']->nama_user) ?> DAN <?= strtoupper($kontrak['data']->nama_mitra) ?> </br>
    </h3>
</center>
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
    <?= strtoupper($kontrak['data']->nama) ?> dengan nilai Total <label style="font-weight: bold;">Rp <?= number_format($kontrak['data']->budget) ?></label>.
    <br>dengan spesifikasi : <?= $kontrak['data']->deskripsi_proyek ?></br>
</p>
<center style="font-weight: bold;">
    <label>PASAL 3</label>
    <br>
    CARA PEMBAYARAN
    </br>
</center>
<p>
    Jumlah termin pembayaran <label style="font-weight: bold;"><?= $kontrak['data']->termin ?></label> kali dalam waktu pengerjaan<label style="font-weight: bold;">
    <?= $kontrak['data']->waktu_pengerjaan ?></label> Hari dihitung dari per tanggal <label style="font-weight: bold;"><?= date("d M Y") ?></label>.
    <center>
        <table style="width: 100%;" border="1">
            <tr>
                <th>Termin</th>
                <th>Nilai</th>
            </tr>
            <tr>
                <td>
                    Termin 1
                </td>
                <td>
                <?= $kontrak['data']->termin1 ?> %
                </td>
            </tr>
            <tr>
                <td>
                    Termin 2
                </td>
                <td>
                <?= $kontrak['data']->termin2 ?> %
                </td>
            </tr>
            <tr>
                <td>
                    Termin 3
                </td>
                <td>
                <?= $kontrak['data']->termin3 ?> %
                </td>
            </tr>
            <tr>
                <td>
                    Retensi
                </td>
                <td>
                <?= $kontrak['data']->retensi ?> %
                </td>
            </tr>
        </table>
    </center>
</p>

<p>Surabaya, <?= date("d M Y") ?>.</p>


<table style="width:100%">
    <tr>
        <th style=" height: 80px;vertical-align: top;">Pihak Pertama</th>
        <th style=" height:80px;vertical-align: top;">Mengetahui</th>
        <th style=" height: 80px;vertical-align: top;">Pihak Kedua</th>
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