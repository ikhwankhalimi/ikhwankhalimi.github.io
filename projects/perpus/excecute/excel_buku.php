<?php
                      
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=buku.xls");
 
// memanggil query dari database

                            include('../config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT tb_buku.*,tb_pengarang.*,tb_penerbit.*
							FROM tb_buku,tb_pengarang,tb_penerbit
							WHERE tb_buku.id_pengarang=tb_pengarang.id_pengarang
							AND tb_buku.id_penerbit=tb_penerbit.id_penerbit
							ORDER BY kd_buku ASC");
        
            ?>
      
 
    <h3>Data Buku</h3>   
         
        <table bordered="1">  
            <thead bgcolor="green" align="center">
            <tr>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Jumlah</th>
                        <th>Rak No.</th>
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
					    <td><?php echo $row['kd_buku'];?></td>
                        <td><?php echo $row['judul_buku'];?></td>
                        <td><?php echo $row['nama_pengarang'];?></td>
                        <td><?php echo $row['nama_penerbit'];?></td>
                        <td><?php echo $row['jml_buku'];?></td>
                        <td><?php echo $row['no_rak'];?></td>
                      </tr>
                      <?php } ?>                            
                        </table>       
