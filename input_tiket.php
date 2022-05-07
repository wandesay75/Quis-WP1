<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kereta BSI</title>
</head>
<body bgcolor="aqua">
    <form action="output_tiket.php" method="POST">
        <table border="2px" bgcolor="white" align="center">
            <tr>
                <td colspan="2" align="center">KERETA API BSI</td>
            </tr>
            <tr>
                <td>Nama Pembeli</td>
                <td><input type="text" name="nama_pembeli" placeholder="masukan nama" maxlength="50" required></td>
            </tr>
            <tr>
                <td>No KTP</td>
                <td><input type="number" name="no_ktp" placeholder="masukan no ktp anda" maxlength="50" required></td>
            </tr>
            <tr>
                <td>Kode Kereta</td>
                <td>
                    <select name="kode_kereta" required>
                        <option>--PILIH--</option>
                        <option name="ARB">ARB</option>
                        <option name="JES">JES</option>
                        <option name="KKD">KKD</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pilih Jurusan</td>
                <td>
                    <select name="jurusan" required>
                        <option>--PILIH--</option>
                        <option name="CT">Cikampek-Tuparev</option>
                        <option name="JB">Johar-Bypass</option>
                        <option name="KB">Klari-Badami</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Pelayanan</td>
                <td>
                    <input type="radio" name="jenis_pelayanan" value="busines">busines
                    <input type="radio" name="jenis_pelayanan" value="executive">executive
                </td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td><input type="number" name="jumlah_tiket" placeholder="masukan jumlah tiket" maxlength="50" required></td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <button type="submit" name="kirim">Kirim</button>
                    <button type="reset" name="batal">Batal</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>