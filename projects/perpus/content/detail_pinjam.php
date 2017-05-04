<?php
                            include('config/koneksi.php');

                            $get_id = $_GET['id'];
                            // jalankan query
                            $result = mysqli_query($connect, "SELECT tb_peminjaman.*,tb_buku.*,tb_anggota.*
                              FROM tb_peminjaman,tb_buku,tb_anggota
							  WHERE tb_peminjaman.kd_buku=tb_buku.kd_buku
							  AND tb_peminjaman.id_anggota=tb_anggota.id_anggota
							  AND kd_pinjam='$get_id' limit 1");

                            // tampilkan query
                            $row=mysqli_fetch_object($result);
?>
 
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Detail Peminjaman
            <small>All Data Peminjaman</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Peminjaman</a></li>
            <li class="active">Detail Peminjaman</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-8">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Detail Peminjaman</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/save_pengembalian.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Kode Peminjaman</label>
                      <div class="col-sm-10">
                        <input type="text" value="<?php echo $row->kd_pinjam;?>" required="" class="form-control" placeholder="Kode Peminjaman" disabled="">
                        <input type="hidden" name="kd_pinjam" value="<?php echo $row->kd_pinjam;?>" required="" class="form-control" placeholder="Kode Peminjaman">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-2 control-label">Nama Anggota</label>
                      <div class="col-sm-10">
                        <input type="text" value="<?php echo $row->nm_anggota;?>" required="" class="form-control" disabled="">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Judul Buku</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" disabled=""><?php echo $row->judul_buku;?>"</textarea>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal Pinjam</label>
                      <div class="col-sm-10">
                        <input type="text" value="<?php echo tgl_indo($row->tgl_pinjam);?>" required="" class="form-control" disabled="">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Lama Pinjam</label>
                      <div class="col-sm-10">
                        <input type="text" value="<?php $selisih = ((abs(strtotime ($row->tgl_pinjam) - strtotime (date('Y-m-d'))))/(60*60*24)); echo $selisih;?> Hari" required="" class="form-control" disabled="">
                        <input type="hidden" name="lama_pinjam" value="<?php $selisih = ((abs(strtotime ($row->tgl_pinjam) - strtotime (date('Y-m-d'))))/(60*60*24)); echo $selisih;?> Hari" required="" class="form-control">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Denda</label>
                      <div class="col-sm-10">
                        <input type="text" value="Rp. <?php echo $selisih*500;?>" required="" class="form-control" disabled="">
                        <input type="hidden" name="denda" value="Rp. <?php echo $selisih*500;?>" required="" class="form-control">
                      </div>
                    </div>
				
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="javascript:history.back()" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-success pull-right">Kembalikan</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->