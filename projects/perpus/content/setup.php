<?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM setup LIMIT 1"); 
                            // tampilkan query
                            $row=mysqli_fetch_array($result);
                            ?>
						<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Setup
            <small>All Data Setup</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Setup</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Aplikasi</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/setup.php" method="post">
                  <div class="box-body">                    					
					<div class="form-group">
                      <label class="col-sm-4 control-label">Nama Aplikasi</label>
                      <div class="col-sm-8">
                        <input type="text" name="app_title" value="<?php echo $row['app_title'];?>" required="" class="form-control" placeholder="Nama Aplikasi">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label">Version</label>
                      <div class="col-sm-8">
                        <input type="text" name="app_version" value="<?php echo $row['app_version'];?>" required="" class="form-control" placeholder="Version">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label">Deskripsi</label>
                      <div class="col-sm-8">
                        <textarea name="app_description" class="form-control" rows="3"><?php echo $row['app_description'];?></textarea>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label">Footer</label>
                      <div class="col-sm-8">
                        <textarea name="app_footer" class="form-control" rows="3"><?php echo $row['app_footer'];?></textarea>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label">Theme</label>
                      <div class="col-sm-8">
						<select class="form-control select2" name="app_theme">
							<option selected="selected">Pilih</option>							
							<option value="skin-blue">Biru</option>							
							<option value="skin-black">Hitam</option>							
							<option value="skin-purple">Ungu</option>							
							<option value="skin-yellow">Kuning</option>							
							<option value="skin-red">Merah</option>							
							<option value="skin-green">Hijau</option>							
						</select>
						</div>
					</div><!-- /.form-group -->
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="javascript:history.back()" class="btn btn-default">Cancel</a>
                    <button type="submit" name="app" class="btn btn-success pull-right">Change</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
			<div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">User</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/setup.php" method="post">
                  <div class="box-body">                    					
					<div class="form-group">
                      <label class="col-sm-4 control-label">Password</label>
                      <div class="col-sm-8">
                        <input type="password" name="password" required="" class="form-control" placeholder="Password">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label">RePassword</label>
                      <div class="col-sm-8">
                        <input type="password" name="repassword" required="" class="form-control" placeholder="Ketik Lagi Password">
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="javascript:history.back()" class="btn btn-default">Cancel</a>
                    <button type="submit" name="user" class="btn btn-success pull-right">Change</button>
                  </div><!-- /.box-footer -->
				  <hr>
				  <div class="box-footer">
                    <a href="admin.php?page=user" class="btn btn-info">ADD USER</a>                    
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
