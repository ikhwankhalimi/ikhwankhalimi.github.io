<?php
                            include('config/koneksi.php');

                            $get_id = $_GET['id'];
                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_anggota WHERE id_anggota='$get_id' limit 1");

                            // tampilkan query
                            $row=mysqli_fetch_object($result);
?>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Anggota
            <small>All Data Anggota</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Anggota</a></li>
            <li class="active">Edit Anggota</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-8">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Anggota</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/edit_anggota.php" method="post">
                  <div class="box-body">                    
					<div class="form-group">
                      <label class="col-sm-2 control-label">ID Anggota</label>
                      <div class="col-sm-10">
                        <input type="text" value="<?php echo $row->id_anggota;?>" required="" class="form-control" placeholder="ID Anggota" disabled="">
                        <input type="hidden" name="id_anggota" value="<?php echo $row->id_anggota;?>" required="" class="form-control" placeholder="ID Anggota">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Nama Anggota</label>
                      <div class="col-sm-10">
                        <input type="text" name="nm_anggota" value="<?php echo $row->nm_anggota;?>" required="" class="form-control" placeholder="Nama Anggota">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Alamat Anggota</label>
                      <div class="col-sm-10">
                        <textarea name="alamat_anggota" class="form-control" rows="3" placeholder="Enter ..." required=""><?php echo $row->alamat;?></textarea>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
						<select class="form-control select2" name="jenis_kelamin">
							<option selected="selected">Laki-Laki</option>
							<option>Perempuan</option>
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
