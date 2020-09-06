<table style="width:100%">
    <tr>
        <th style=" height:80px;vertical-align: top;">Mengetahui</th>
        <th style=" height: 80px;vertical-align: top;">Pihak Pertama</th>
        <th style=" height: 80px;vertical-align: top;">Pihak Kedua</th>
    </tr>
    <tr>
        <td style="text-align: center; "><img src="data:image/gif;base64,<?= $kontrak['data']->mbangun_ttd ?>" alt="images" width="100px" style="opacity: 1;"></td>
        <td style="text-align: center; "><img src="data:image/gif;base64,<?= $kontrak['data']->user_ttd ?>" alt="images" width="100px" style="opacity: 1;"></td>
        <td style="text-align: center; "><img src="data:image/gif;base64,<?= $kontrak['data']->mitra_ttd ?>" alt="images" width="100px" style="opacity: 1;"></td>
    </tr>
    <tr>
        <td style="text-align: center; ">m-Bangun</td>
        <td style="text-align: center; "><?= $kontrak['data']->nama_mitra ?></td>
        <td style="text-align: center; "><?= $kontrak['data']->nama_user ?></td>
    </tr>
</table>