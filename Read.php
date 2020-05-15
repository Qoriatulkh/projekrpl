 <?php
        $sql = "SELECT * FROM Pendaftar";
        $query = mysqli_query($db, $sql);

        while($Pendaftar = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$Pendaftar['ID Pendaftar']."</td>";
            echo "<td>".$Pendaftar['NIK']."</td>";
            echo "<td>".$Pendaftar['Nama']."</td>";
            echo "<td>".$Pendaftar['Alamat']."</td>";
            echo "<td>".$Pendaftar['Kota']."</td>";
            echo "<td>".$Pendaftar['Kode Pos']."</td>";
            echo "<td>".$Pendaftar['Golongan Darah']."</td>";
            echo "<td>".$Pendaftar['Email']."</td>";
            echo "<td>".$Pendaftar['Password']."</td>";

            echo "<td>";
            echo "<a href='Form-Edit.php?id=".$Pendaftar['ID Pendaftar']."'>Edit</a> | ";
            echo "<a href='Hapus.php?id=".$Pendaftar['ID Pendaftar']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>