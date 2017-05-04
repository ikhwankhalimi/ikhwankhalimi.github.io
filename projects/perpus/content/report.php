<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Report
            <small>All Data Report</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Report</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Buku</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/excel_buku.php" method="post">
				<div class="box-body">
					<div class="callout callout-info">
					<h4>Buku Report Excel!</h4>
					<p>Seluruh Data Buku.</p>
					</div>
				</div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-center">EXPORT</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
			<div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Anggota</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/excel_anggota.php" method="post">
				<div class="box-body">
					<div class="callout callout-danger">
					<h4>Anggota Report Excel!</h4>
					<p>Seluruh Data Anggota.</p>
					</div>
				</div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-danger pull-center">EXPORT</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
			</div>
			<div class="row">
			<div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Peminjaman</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/excel_peminjaman.php" method="post">
				<div class="box-body">
					<div class="callout callout-warning">
					<h4>Peminjaman Report Excel!</h4>
					<p>Seluruh Data Peminjaman.</p>
					</div>
				</div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-warning pull-center">EXPORT</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
			<div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Pengembalian</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/excel_pengembalian.php" method="post">
				<div class="box-body">
					<div class="callout callout-success">
					<h4>Pengembalian Report Excel!</h4>
					<p>Seluruh Data Pengembalian.</p>
					</div>
				</div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-success pull-center">EXPORT</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->