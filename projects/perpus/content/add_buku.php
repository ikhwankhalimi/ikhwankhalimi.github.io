<?php
include "config/koneksi.php";
$sql=mysqli_query($connect,"SELECT * FROM tb_buku order by kd_buku DESC LIMIT 0,1");
 $data=mysqli_fetch_array($sql);
 $kodeawal=substr($data['kd_buku'],1,4)+1;
 if($kodeawal<10){
  $kode='B00'.$kodeawal;
 }elseif($kodeawal > 9 && $kodeawal <=99){
  $kode='B0'.$kodeawal;
 }else{
  $kode='B'.$kodeawal;
 }
 ?>
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Buku
            <small>All Data Buku</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Buku</a></li>
            <li class="active">Add Buku</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-8">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Buku</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/save_buku.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Kode Buku</label>
                      <div class="col-sm-10">
                        <input type="text" value="<?php echo $kode;?>" required="" class="form-control" placeholder="Kode Buku" disabled="">
                        <input type="hidden" name="kd_buku" value="<?php echo $kode;?>" required="" class="form-control" placeholder="Kode Buku">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Judul Buku</label>
                      <div class="col-sm-10">
                        <input type="text" name="judul_buku" required="" class="form-control" placeholder="Judul Buku">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Pengarang</label>
                      <div class="col-sm-10">
						<select class="form-control select2" name="id_pengarang">
							<option selected="selected">Pilih</option>
							<?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_pengarang ORDER BY nama_pengarang ASC");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
							<option value="<?php echo $row['id_pengarang'];?>"><?php echo $row['nama_pengarang'];?></option>
							<?php } ?>
						</select>
						</div>
					</div><!-- /.form-group -->
					<div class="form-group">
                      <label class="col-sm-2 control-label">Penerbit</label>
                      <div class="col-sm-10">
						<select class="form-control select2" name="id_penerbit">
							<option selected="selected">Pilih</option>
							<?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_penerbit ORDER BY nama_penerbit ASC");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
							<option value="<?php echo $row['id_penerbit'];?>"><?php echo $row['nama_penerbit'];?></option>
							<?php } ?>
						</select>
						</div>
					</div><!-- /.form-group -->
					<div class="form-group">
                      <label class="col-sm-2 control-label">Jumlah</label>
                      <div class="col-sm-10">
                        <input type="text" name="jumlah" required="" class="form-control" placeholder="Jumlah">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Tahun Terbit</label>
                      <div class="col-sm-10">
                        <input type="text" name="tahun" required="" class="form-control" placeholder="Tahun">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">No Rak</label>
                      <div class="col-sm-10">
                        <input type="text" name="rak" required="" class="form-control" placeholder="rak">
                      </div>
                    </div>
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