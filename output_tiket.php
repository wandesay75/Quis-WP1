<!DOCTYPE html>
<html lang="en">
<head>
    <title>KERETA API BSI</title>
</head>
<body bgcolor="aqua">
    <?php
    $nama_pembeli=$_POST['nama_pembeli'];
    $no_ktp=$_POST['no_ktp'];
    $kode_kereta=$_POST['kode_kereta'];
    $jurusan=$_POST['jurusan'];
    $jenis_pelayanan=$_POST['jenis_pelayanan'];
    $jumlah_tiket=$_POST['jumlah_tiket'];

    if ($kode_kereta=="ARB") {
        $nama_kereta="ARGO BISNIS";
    } elseif ($kode_kereta=="JES") {
        $nama_kereta="JOHAR EXPRES";
    } elseif ($kode_kereta=="KKD") {
        $nama_kereta="KERETA KUDA";
    } else {
        $nama_kereta="kode tidak ditemukan";
    }

    if ($jurusan=="Cikampek-Tuparev") {
        if ("busines") {
            $harga = 20000;
        } elseif ("executive") {
            $harga = 30000;
        } else {
            echo "layanan tidak ditemukan";
        }
    } elseif ($jurusan=="Johar-Bypass") {
        if ("busines") {
            $harga = 10000;
        } elseif ("executive") {
            $harga = 20000;
        } else {
            echo "layanan tidak ditemukan";
        }
    } elseif ($jurusan=="Klari-Badami") {
        if ("busines") {
            $harga = 15000;
        } elseif ("executive") {
            $harga = 25000;
        } else {
            echo "layanan tidak ditemukan";
        }
    } else {
        echo "jurusan tidak ditemukan";
    }

    $total = $harga * $jumlah_tiket;
    ?>

    <table border="2" bgcolor="white" align="center">
        <tr>
            <td colspan="3">BUKTI PEMBAYARAN TIKET KERETA API</td>
        </tr>
        <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td><?php echo $nama_pembeli; ?></td>
        </tr>
        <tr>
            <td>No. KTP</td>
            <td>:</td>
            <td><?php echo $no_ktp; ?></td>
        </tr>
        <tr>
            <td>Kode Kereta</td>
            <td>:</td>
            <td><?php echo $kode_kereta; ?></td>
        </tr>
        <tr>
            <td>Nama Kereta</td>
            <td>:</td>
            <td><?php echo $nama_kereta; ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><?php echo $jurusan; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelas</td>
            <td>:</td>
            <td><?php echo $jenis_pelayanan; ?></td>
        </tr>
        <tr>
            <td>Harga ticket</td>
            <td>:</td>
            <td><?php echo $harga; ?></td>
        </tr>
        <tr>
            <td>Jumlah Tiket</td>
            <td>:</td>
            <td><?php echo $jumlah_tiket ?></td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td>:</td>
            <td><?php echo $total ?></td>
        </tr>
    </table>
    <div align="center">
    <a href="input_tiket.php" align="center"><button><span>Input Kembali</span></button></a>
    </div>
</body>
</html>