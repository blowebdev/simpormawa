 <div id="page-wrapper">
     <div class="container-fluid">
         <div class="row bg-title">
             <div class="col-lg-12">
                 <h4 class="page-title">Buat Proposal</h4>
                 <ol class="breadcrumb">
                     <li><a href="<?php echo base_url() ?>assets/#">Dashboard</a></li>
                 </ol>
             </div>
             <!-- /.col-lg-12 -->
         </div>

         <?php 
    if (isset($_REQUEST['simpan'])) {
      $acara = $_REQUEST['acara'];
      $no_surat = $_REQUEST['no_surat'];
      $hal = $_REQUEST['hal'];
      $kepada = $_REQUEST['kepada'];
      $tgl_acara = $_REQUEST['tgl_acara'];
      $tempat = $_REQUEST['tempat'];
      $ketua = $_REQUEST['ketua'];
      $sekertaris = $_REQUEST['sekertaris'];
      $tgl_surat = $_REQUEST['tgl_surat'];
      $mengetahui_1 = $_REQUEST['mengetahui_1'];
      $mengetahui_2 = $_REQUEST['mengetahui_2'];
      $halaman_pengesahan = $_REQUEST['halaman_pengesahan'];
      $halaman_proposal = $_REQUEST['halaman_proposal'];
      $halaman_anggaran = $_REQUEST['halaman_anggaran'];
      $halaman_agenda = $_REQUEST['halaman_agenda'];

      $data = array(
        'acara' => $acara,
        'id_user' => $this->session->userdata['username']['id'],
        'no_surat' => $no_surat,
        'hal' => $hal,
        'kepada' => $kepada,
        'tgl_acara' => $tgl_acara,
        'tempat' => $tempat,
        'tempat' => $tempat,
        'ketua' => $ketua,
        'sekertaris' => $sekertaris,
        'tgl_surat' => $tgl_surat,
        'mengetahui_1' => $mengetahui_1,
        'mengetahui_2' => $mengetahui_2,
        'halaman_pengesahan' => $halaman_pengesahan,
        'halaman_proposal' => $halaman_proposal,
        'halaman_agenda' => $halaman_agenda,
        'halaman_anggaran' => $halaman_anggaran
      );

      if (!empty($_REQUEST['id'])) {
        $this->db->where('id', $_REQUEST['id']);
        $exc = $this->db->update('tb_proposal',$data);
      }else{
        $exc = $this->db->insert('tb_proposal',$data);
      }

      if ($exc) {
        echo "<script>alert('Data berhasil disimpan')</script>";
        redirect('proposal');
      }else{
        echo "<script>alert('Data gagal disimpan')</script>";
      }
    }

    if (!empty($_REQUEST['id'])) {
      $dt = $this->db->query("SELECT * FROM tb_proposal WHERE id='".$_REQUEST['id']."'")->row_array();
    }
    ?>
         <!-- row -->
         <div class="row">
             <div class="col-md-12">
                 <div class="white-box">
                     <div class="white-box clearfix">
                         <h3>Tambah Proposal</h3>
                         <p class="text-muted m-b-30 font-13"> Tambah data proposal </p>
                         <div class="row">
                             <div class="col-sm-12 col-xs-12">
                                 <form action="" method="POST">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Judul Acara</label>
                                         <input type="text" class="form-control" name="acara" placeholder="Judul Acara"
                                             value="<?php echo $dt['acara']; ?>" required="">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Nomor Surat</label>
                                         <input type="text" class="form-control" name="no_surat"
                                             value="<?php echo rand(1000, 9999); ?>/<?php echo strtoupper($this->session->userdata['username']['username']); ?>/II/AA/IX/<?php echo date('Y'); ?>"
                                             placeholder="Nomor Surat" value="<?php echo $dt['no_surat']; ?>"
                                             required="">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Perihal</label>
                                         <input type="text" name="hal" class="form-control"
                                             value="<?php echo $dt['hal']; ?>" placeholder="Perihal Surat" required="">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Kepada</label>
                                         <input type="text" class="form-control" name="kepada"
                                             placeholder="Ditunjukan kepada" value="<?php echo $dt['kepada']; ?>"
                                             required="">
                                     </div>

                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Tanggal Acara</label>
                                         <input type="date" class="form-control" name="tgl_acara" placeholder="Tanggal"
                                             value="<?php echo $dt['tgl_acara']; ?>" required="">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Tempat</label>
                                         <input type="text" class="form-control" name="tempat"
                                             placeholder="Tempat Acara" value="<?php echo $dt['tempat']; ?>"
                                             required="">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Ketua Panitia</label>
                                         <input type="text" class="form-control" name="ketua" placeholder="Ketua Acara"
                                             value="<?php echo $dt['ketua']; ?>" required="">
                                         <i>Penulisan : Nama, Nim dan jabatan dipisah dengan tanda "|" contoh
                                             "Muhammad|ketua bem|123"</i>
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Sekertaris</label>
                                         <input type="text" class="form-control" name="sekertaris"
                                             placeholder="Sekertaris Acara" value="<?php echo $dt['sekertaris']; ?>"
                                             required="">
                                         <i>Penulisan : Nama, Nim dan jabatan dipisah dengan tanda "|" contoh
                                             "Muhammad|ketua bem|123"</i>
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Tanggal Surat</label>
                                         <input type="date" class="form-control" name="tgl_surat"
                                             placeholder="Tanggal Surat" value="<?php echo $dt['tgl_surat']; ?>"
                                             required="">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Mengetahui 1</label>
                                         <input type="text" class="form-control" name="mengetahui_1"
                                             placeholder="Mengetahui 1" value="<?php echo $dt['mengetahui_1']; ?>"
                                             required="">
                                         <i>Penulisan : Nama, Nim dan jabatan dipisah dengan tanda "|" contoh
                                             "Muhammad|ketua bem|123"</i>
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Mengetahui 2</label>
                                         <input type="text" class="form-control" name="mengetahui_2"
                                             placeholder="Mengetahui 2" value="<?php echo $dt['mengetahui_2']; ?>"
                                             required="">
                                         <i>Penulisan : Nama, Nim dan jabatan dipisah dengan tanda "|" contoh
                                             "Muhammad|ketua bem|123"</i>
                                     </div>
                                     <hr>
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Halaman Pengesahan</label>
                                         <textarea class="form-control" rows="15" name="halaman_pengesahan"
                                             id="halaman_pengesahan" required="">
                  <?php if(!empty($dt['halaman_pengesahan'])){
                    echo $dt['halaman_pengesahan'];
                  } else {
                    include 'halaman_pengesahan.php';
                  } ?></textarea>
                                     </div>
                                     <hr>
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Halaman Proposal</label>
                                         <textarea class="form-control" rows="30" name="halaman_proposal"
                                             id="halaman_proposal" required="">
                  <?php if(!empty($dt['halaman_proposal'])){
                    echo $dt['halaman_proposal'];
                  } else{
                    include 'halaman_proposal.php';
                  } ?></textarea>
                                     </div>

                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Lampiran I</label>
                                         <textarea class="form-control" rows="30" name="halaman_agenda"
                                             id="halaman_agenda" required="">
                  <?php if(!empty($dt['halaman_agenda'])){
                    echo $dt['halaman_agenda'];
                  } else{
                    include 'halaman_agenda.php';
                  } ?></textarea>
                                     </div>

                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Lampiran II</label>
                                         <textarea class="form-control" rows="30" name="halaman_anggaran"
                                             id="halaman_anggaran" required="">
                  <?php if(!empty($dt['halaman_anggaran'])){
                    echo $dt['halaman_anggaran'];
                  } else{
                    include 'halaman_anggaran.php';
                  } ?></textarea>
                                     </div>

                                     <button type="submit" type="submit" name="simpan"
                                         class="btn btn-primary waves-effect waves-light">Submit</button>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- /.row -->
         </div>
         <!-- /.container-fluid -->
     </div>