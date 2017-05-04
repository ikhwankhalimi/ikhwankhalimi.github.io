<?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_petugas WHERE username='$_SESSION[username]'"); 
                            // tampilkan query
                            $row=mysqli_fetch_array($result);
                            ?>
						<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User
            <small>All Data User</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">User</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">User Aktif</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/user.php" method="post">
                  <div class="box-body">                    					
					<div class="form-group">
                      <label class="col-sm-4 control-label">Nama User</label>
                      <div class="col-sm-8">
                        <input type="text" name="fullname" value="<?php echo $row['fullname'];?>" required="" class="form-control" placeholder="Nama Aplikasi">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label">Nickname</label>
                      <div class="col-sm-8">
                        <input type="text" name="nickname" value="<?php echo $row['nickname'];?>" required="" class="form-control" placeholder="Version">
                      </div>
                    </div>					
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="javascript:history.back()" class="btn btn-default">Cancel</a>
                    <button type="submit" name="changeuser" class="btn btn-success pull-right">Change</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
			<div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Add User</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/user.php" method="post">
                  <div class="box-body">                    					
					<div class="form-group">
                      <label class="col-sm-4 control-label">Fullname</label>
                      <div class="col-sm-8">
                        <input type="text" name="fname" required="" class="form-control" placeholder="Fullname">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label">Nickname</label>
                      <div class="col-sm-8">
                        <input type="text" name="nname" required="" class="form-control" placeholder="Nickname">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label">Username</label>
                      <div class="col-sm-8">
                        <input type="text" name="username" required="" class="form-control" placeholder="Username">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label">Password</label>
                      <div class="col-sm-8">
                        <input type="password" name="password" required="" class="form-control" placeholder="Ketik Password">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-4 control-label">Level</label>
                      <div class="col-sm-8">
						<select class="form-control" name="level">
							<option selected="selected">Pilih</option>							
							<option value="admin">Admin</option>							
							<option value="operator">Operator</option>							
						</select>
						</div>
					</div><!-- /.form-group -->
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="javascript:history.back()" class="btn btn-default">Cancel</a>
                    <button type="submit" name="adduser" class="btn btn-info pull-right">Add User</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
