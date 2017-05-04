      <?php
	  $kata = $_GET['q'];
	  ?>
	  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Search
            <small>All Search</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Search</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Search "<?php echo $kata; ?>"</h3><br><br><br>
				  <h3 class="box-title">Pencarian di Data Buku</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Jumlah</th>
                        <th>Rak No.</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            include('config/koneksi.php');
							include('config/tgl_indonesia.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT tb_buku.*,tb_pengarang.*,tb_penerbit.*
							FROM tb_buku,tb_pengarang,tb_penerbit
							WHERE tb_buku.id_pengarang=tb_pengarang.id_pengarang
							AND tb_buku.id_penerbit=tb_penerbit.id_penerbit
							AND judul_buku like '%$kata%'
							ORDER BY kd_buku ASC");
                            
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
                        <td><a href="admin.php?page=edit_Buku&id=<?php echo $row['kd_buku'];?>">
                            <span class="label label-success">Edit</span>
                            </a>
                            <a onclick="return confirm('Are You Sure  ?')" href="excecute/delete.php?dlt=dlbuku&id=<?php echo $row['kd_buku'];?>">
                            <span class="label label-danger">Hapus</span>
                            </a>
                        </td>
                      </tr>
                      <?php } ?>                                            
                    </tbody>                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->              
            </div><!-- /.col -->
          </div><!-- /.row -->
		  
		  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pencarian di Data Anggota</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Kode Anggota</th>
                        <th>Nama Anggota</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_anggota WHERE nm_anggota like '%$kata%'");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
                      <tr>
                        <td><?php echo $row['id_anggota'];?></td>
                        <td><?php echo $row['nm_anggota'];?></td>
                        <td><?php echo $row['jenis_kelamin'];?></td>
                        <td><?php echo $row['alamat'];?></td>
                        <td><a href="admin.php?page=edit_anggota&id=<?php echo $row['id_anggota'];?>">
                            <span class="label label-success">Edit</span>
                            </a>
                            <a onclick="return confirm('Are You Sure  ?')" href="excecute/delete.php?dlt=dlanggota&id=<?php echo $row['id_anggota'];?>">
                            <span class="label label-danger">Hapus</span>
                            </a>
                        </td>
                      </tr>
                      <?php } ?>                                            
                    </tbody>                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->              
            </div><!-- /.col -->
          </div><!-- /.row -->
		  
		  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pencarian di Data Pengarang</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID Pengarang</th>
                        <th>Nama Pengarang</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_pengarang WHERE nama_pengarang like '%$kata%'");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
                      <tr>
                        <td><?php echo $row['id_pengarang'];?></td>
                        <td><?php echo $row['nama_pengarang'];?></td>
                        <td><a href="admin.php?page=edit_pengarang&id=<?php echo $row['id_pengarang'];?>">
                            <span class="label label-success">Edit</span>
                            </a>
                            <a onclick="return confirm('Are You Sure  ?')" href="excecute/delete.php?dlt=dlpengarang&id=<?php echo $row['id_pengarang'];?>">
                            <span class="label label-danger">Hapus</span>
                            </a>
                        </td>
                      </tr>
                      <?php } ?>                                            
                    </tbody>                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->              
            </div><!-- /.col -->
          </div><!-- /.row -->
		  
		  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pencarian di Data Penerbit</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID Penerbit</th>
                        <th>Nama Penerbit</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_penerbit WHERE nama_penerbit like '%$kata%'");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
                      <tr>
                        <td><?php echo $row['id_penerbit'];?></td>
                        <td><?php echo $row['nama_penerbit'];?></td>
                        <td><a href="admin.php?page=edit_penerbit&id=<?php echo $row['id_penerbit'];?>">
                            <span class="label label-success">Edit</span>
                            </a>
                            <a onclick="return confirm('Are You Sure  ?')" href="excecute/delete.php?dlt=dlpenerbit&id=<?php echo $row['id_penerbit'];?>">
                            <span class="label label-danger">Hapus</span>
                            </a>
                        </td>
                      </tr>
                      <?php } ?>                                            
                    </tbody>                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->              
            </div><!-- /.col -->
          </div><!-- /.row -->
		  
		  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pencarian di Data Peminjaman</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Kode Peminjaman</th>
                        <th>Nama Anggota</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
						<th>Tanggal Harus Kembali</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT tb_peminjaman.*,tb_buku.*,tb_anggota.*
                              FROM tb_peminjaman,tb_buku,tb_anggota
							  WHERE tb_peminjaman.kd_buku=tb_buku.kd_buku
							  AND tb_peminjaman.id_anggota=tb_anggota.id_anggota
							  AND nm_anggota like '%$kata%' or judul_buku like '%$kata%'");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
                      <tr>
					    <td><?php echo $row['kd_pinjam'];?></td>
						<td><?php echo $row['nm_anggota'];?></td>
                        <td><?php echo $row['judul_buku'];?></td>
                        <td><?php echo tgl_indo($row['tgl_pinjam']);?></td>
                        <td><?php echo tgl_indo($row['tgl_kembali']);?></td>
                        <td><a href="admin.php?page=detail_pinjam&id=<?php echo $row['kd_pinjam'];?>" target="_blank">
                            <span class="label label-warning">View</span>
                            </a>
							<a href="admin.php?page=detail_pinjam&id=<?php echo $row['kd_pinjam'];?>" target="_blank">
                            <span class="label label-success">Kembalikan</span>
                            </a>
                            <a onclick="return confirm('Are You Sure  ?')" href="excecute/delete.php?dlt=dlpeminjaman&id=<?php echo $row['kd_pinjam'];?>">
                            <span class="label label-danger">Hapus</span>
                            </a>
                        </td>
                      </tr>
                      <?php } ?>                                            
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->              
            </div><!-- /.col -->
          </div><!-- /.row -->
		  
		  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pencarian di Data Pengembalian</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Kode Pengembalian</th>
                        <th>Nama Anggota</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
						<th>Tanggal Kembali</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT tb_pengembalian.*,tb_buku.*,tb_anggota.*
                              FROM tb_pengembalian,tb_buku,tb_anggota
							  WHERE tb_pengembalian.kd_buku=tb_buku.kd_buku
							  AND tb_pengembalian.id_anggota=tb_anggota.id_anggota
							  AND nm_anggota like '%$kata%' or judul_buku like '%$kata%'");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
                      <tr>
					    <td><?php echo $row['kd_pinjam'];?></td>
						<td><?php echo $row['nm_anggota'];?></td>
                        <td><?php echo $row['judul_buku'];?></td>
                        <td><?php echo tgl_indo($row['tgl_pinjam']);?></td>
                        <td><?php echo tgl_indo($row['tgl_kembali']);?></td>
                        <td><a href="admin.php?page=detail_kembali&id=<?php echo $row['kd_pinjam'];?>" target="_blank">
                            <span class="label label-warning">View Pengembalian</span>
                            </a>
                        </td>
                      </tr>
                      <?php } ?>                                            
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->