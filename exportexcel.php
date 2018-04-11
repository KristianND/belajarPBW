<?php

// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");

// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Email_Pengunjung_Web.xls");

// Tambahkan table
include 'awal.php';

// memanggil query dari database
$sqlshow = mysqli_query($koneksi, "SELECT * FROM users");

?>

<h3>Data Kategori</h3>

<!--<table>
    <tr>
        <td width="20px">Tanggal : <?php echo date("d-m-Y") ?></td>
    </tr>

</table>-->
<table width='80%' border=1>
    <thead bgcolor="eeeeee" align="center">
        <tr bgcolor="eeeeee" >
            <!--<th>Nomor</th>-->
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
    </tbody>

    </div>
    </div>
    </div>
    <?php
    //Menampilkan data dari database
        $rowshow = mysqli_fetch_assoc($sqlshow);
        $id=0;
        while($rowshow = mysqli_fetch_assoc($sqlshow)){
            $id++;
            echo '<tr>';
            //echo '<td width="5px">'.$id.'</td>';
            echo '<td width="5px" align="center">'.$rowshow['id'].'</td>';
            echo '<td width="5px" align="center">'.$rowshow['name'].'</td>';
            echo '<td width="5px" align="center">'.$rowshow['email'].'</td>';
            echo '<td width="5px" align="center">'.$rowshow['subject'].'</td>';
            echo '<td width="5px" align="left">'.$rowshow['message'].'</td>';
            echo '</tr>';
        }
    ?>
</table>
