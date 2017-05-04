<?php
                      
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=anggota.xls");
 
// memanggil query dari database

                            include('../config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_anggota ORDER BY nm_anggota ASC");
        
            ?>
      
 
    <h3>Data Anggota</h3>   
         
        <table bordered="1">  
            <thead bgcolor="green" align="center">
            <tr>
                        <th>Kode Anggota</th>
                        <th>Nama Anggota</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                      </tr>
            </thead>
            <tbody>
         
                    
        </tbody>

        </div>
    </div>
</div>
   <?php

                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
                      <tr>
					    <td><?php echo $row['id_anggota'];?></td>
                        <td><?php echo $row['nm_anggota'];?></td>
                        <td><?php echo $row['jenis_kelamin'];?></td>
                        <td><?php echo $row['alamat'];?></td>
                      </tr>
                      <?php } ?>                            
                        </table>       
