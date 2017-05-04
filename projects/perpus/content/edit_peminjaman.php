<?php
include "config/koneksi.php";
$sql=mysqli_query($connect,"SELECT * FROM tb_peminjaman order by kd_pinjam DESC LIMIT 0,1");
 $data=mysqli_fetch_array($sql);
 $kodeawal=substr($data['kd_pinjam'],3,4)+1;
 if($kodeawal<10){
  $kode='P00'.$kodeawal;
 }elseif($kodeawal > 9 && $kodeawal <=99){
  $kode='P0'.$kodeawal;
 }else{
  $kode='P'.$kodeawal;
 }
 ?>
 
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Peminjaman
            <small>All Data Peminjaman</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Peminjaman</a></li>
            <li class="active">Add Peminjaman</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-8">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Peminjaman</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/save_peminjaman.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Kode Peminjaman</label>
                      <div class="col-sm-10">
                        <input type="text" value="<?php echo $kode;?>" required="" class="form-control" placeholder="Kode Peminjaman" disabled="">
                        <input type="hidden" name="kd_pinjam" value="<?php echo $kode;?>" required="" class="form-control" placeholder="Kode Peminjaman">
                      </div>
                    </div>					
					<div class="form-group">
                      <label class="col-sm-2 control-label">Judul Buku</label>
                      <div class="col-sm-10">
						<select class="form-control select2" name="kd_buku">
							<option selected="selected">Pilih</option>
							<?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_buku ORDER BY judul_buku ASC");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
						
							<option value="<?php echo $row['kd_buku'];?>"><?php echo $row['judul_buku'];?></option>
							<?php } ?>
						</select>
						</div>
					</div><!-- /.form-group -->
					<div class="form-group">
                      <label class="col-sm-2 control-label">Nama Anggota</label>
                      <div class="col-sm-10">
						<select class="form-control select2" name="id_anggota">
							<option selected="selected">Pilih</option>
							<?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_anggota ORDER BY nm_anggota ASC");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
							<option value="<?php echo $row['id_anggota'];?>"><?php echo $row['nm_anggota'];?></option>
							<?php } ?>
						</select>
						</div>
					</div><!-- /.form-group -->					
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="javascript:history.back()" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Save</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->