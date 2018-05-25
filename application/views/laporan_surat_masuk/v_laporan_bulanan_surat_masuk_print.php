<!DOCTYPE html>
<html>
<body onload=" window.print();" onafterprint="window.close();" style="font-family: sans-serif;">
    <center>
    <div style="font-weight: bold;" align="center">
        <img style="float: left;margin-right: -60px" width="75px" src="<?php echo base_url() ?>assets/img/logo.png" >
        PEMERINTAH KABUPATEN JEMBER<br>
        KECAMATAN BALUNG<br>
        KANTOR DESA BALUNG KIDUL<br>
        Jl.Pemuda no 23 Desa Balung Kidul kode Pos 68161
        <br>
        <hr style="border: 2px solid #000">
        <br>
    </div>
    <div style="font-size: 20px">
        Laporan Bulanan Surat Masuk<br>
        Bulan : <?php echo date("F", strtotime($_GET['bulan']));?> <?php echo $_GET['tahun'];?><br><br>
    </div>
    <table cellpadding="10" border="1" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th>No.</th>
                <th>No Surat</th>
                <th>Asal Surat</th>
                <th>Perihal</th>
                <th>Tanggal Arsip</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=0; foreach ($data_surat_masuk as $surat_masuk): ?>
            <tr>
                <td><?php echo ++$no; ?></td>
                <td><?php echo $surat_masuk->no_surat ?></td>   
                <td><?php echo $surat_masuk->asal_surat ?></td>
                <td><?php echo $surat_masuk->perihal ?></td>
                <td><?php echo date("d F Y", strtotime($surat_masuk->tgl_arsip)) ?></td>
                <td><?php echo $surat_masuk->keterangan ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table><br><br>
    <div style="float: left;margin-left: 50px"><td>Mengetahui :</td></div>
    <div style="float: right;margin-right: 50px"><td>Jember,<?php echo date('d F Y'); ?></td></div><br>
    <div style="float: left;margin-left: 50px"><td>Kepala Desa</td></div>
    <div style="float: right;margin-right: 50px"><td>Sekretaris Desa</td></div><br><br><br><br>
    <div style="float: left;margin-left: 50px;"><td><u>Syamsul Arifin</u></td></div>
    <div style="float: right;margin-right: 50px"><td><u>Candra Mak</u></td></div><br>
    <div style="float: left;margin-left: 50px"><td>NIP.874509985</td></div>
    <div style="float: right;margin-right:50px"><td>NIP.874558545</td></div>
</body>
</html>