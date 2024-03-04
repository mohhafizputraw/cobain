<?php
        include('koneksi.php');

        // Ambil data dari database
        $query = mysqli_query($connection, "SELECT * FROM siswa");
        $no = 1;
        while($data = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$data['nis']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['kelas']."</td>";
            echo "<td>".$data['jurusan']."</td>";
            echo "<td>
                    <a href='edit.php?id=".$data['id']."'>Edit</a> |
                    <a href='hapus.php?id=".$data['id']."' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
                </td>";
            echo "</tr>";
            $no++;
        }
        ?>