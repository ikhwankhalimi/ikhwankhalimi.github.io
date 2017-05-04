      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Penerbit
            <small>All Data Penerbit</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Penerbit</a></li>
            <li class="active">Data Penerbit</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Penerbit</h3>
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
                            $result = mysqli_query($connect, "SELECT * FROM tb_penerbit ORDER BY id_penerbit ASC");
                            
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
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->