<form action="" method="post">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query data dari database
            $query = "SELECT * FROM absensi";
            $result = mysqli_query($koneksi, $query);

            // Tampilkan data pada form
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                $nis = $row['nis'];
                $nama_siswa = $row['namasiswa'];
            ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $nis ?><input type="hidden" name="nis[]" value="<?= $nis ?>"></td>
                    <td><?= $nama_siswa ?><input type="hidden" name="nm_siswa[]" value="<?= $nama_siswa ?>"></td>
                    <td>
                        <label><input type="radio" name="keterangan[<?= $i ?>]" value="Hadir">Hadir</label>
                        <label><input type="radio" name="keterangan[<?= $i ?>]" value="Tidak Hadir">Tidak Hadir</label>
                    </td>
                </tr>
            <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
    <button type="submit" name="submit">Simpan</button>
</form>
