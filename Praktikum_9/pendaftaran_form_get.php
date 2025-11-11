<html>
<head>
    <title>Form Pendaftaran Mahasiswa Baru Universitas X (GET)</title>
    <style>
        table { border-collapse: collapse; width: 60%; }
        td { padding: 5px; }
        .label { font-weight: bold; width: 200px; }
    </style>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa Baru (GET)</h1>
    <form method="get" action="pendaftaran_proses_get.php">
        <table>
            <tr>
                <td class="label">Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" size="50" required></td>
            </tr>
            <tr>
                <td class="label">Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempatLahir" size="30" required></td>
            </tr>
            <tr>
                <td class="label">Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <select name="tanggal">
                        <?php for ($i = 1; $i <= 31; $i++) { echo "<option value=\"$i\">$i</option>"; } ?>
                    </select>
                    
                    <select name="bulan">
                        <?php 
                            $namaBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                            for ($i = 1; $i <= 12; $i++) { 
                                echo "<option value=\"$i\">{$namaBulan[$i-1]}</option>"; 
                            } 
                        ?>
                    </select>
                    
                    <select name="tahun">
                        <?php for ($i = 2005; $i >= 1980; $i--) { echo "<option value=\"$i\">$i</option>"; } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="label">Alamat Rumah</td>
                <td>:</td>
                <td><textarea name="alamat" rows="4" cols="40" required></textarea></td>
            </tr>
            <tr>
                <td class="label">Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Pria" required> Pria
                    <input type="radio" name="jk" value="Wanita"> Wanita
                </td>
            </tr>
            <tr>
                <td class="label">Asal Sekolah</td>
                <td>:</td>
                <td><input type="text" name="asalSekolah" size="50" required></td>
            </tr>
            <tr>
                <td class="label">Nilai UAN</td>
                <td>:</td>
                <td><input type="text" name="nilaiUan" size="10" required></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center; padding-top: 20px;">
                    <input type="submit" name="submit" value="Kirim Data Pendaftaran">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>