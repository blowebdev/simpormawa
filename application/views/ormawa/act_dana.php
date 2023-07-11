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
      $total_dana_disetujui = $_REQUEST['total_dana_disetujui'];
      $total_dana = $_REQUEST['total_dana'];
      $id_proposal = $_REQUEST['id_proposal'];
      $persentase = $_REQUEST['persentase'];

      $data = array(
        'total_dana_disetujui' => $total_dana_disetujui,
        'total_dana' => $total_dana,
        'id_proposal' => $id_proposal,
        'persentase' => $persentase
      );

      if (!empty($_REQUEST['id'])) {
        $this->db->where('id', $_REQUEST['id']);
        $exc = $this->db->update('tb_dana',$data);
      }else{
        $exc = $this->db->insert('tb_dana',$data);
      }

      if ($exc) {
        echo "<script>alert('Data berhasil disimpan')</script>";
        redirect('dana');
      }else{
        echo "<script>alert('Data gagal disimpan')</script>";
      }
    }

    if (!empty($_REQUEST['id'])) {
      $dt = $this->db->query("SELECT * FROM tb_dana WHERE id='".$_REQUEST['id']."'")->row_array();
    }
    ?>
         <!-- row -->
         <div class="row">
             <div class="col-md-12">
                 <div class="white-box">
                     <div class="white-box clearfix">
                         <h3>Tambah Pencairan Dana Proposal</h3>
                         <p class="text-muted m-b-30 font-13"> Tambah Pencairan data proposal </p>
                         <div class="row">
                             <div class="col-sm-12 col-xs-12">
                                 <form action="" method="POST">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Pilih proposal (<i>Tampil proposal yang sudah
                                                 disetujui</i>)</label>
                                         <select class="form-control" name="id_proposal">
                                             <option value="">Pilih Proposal</option>
                                             <?php 
                    $b = $this->db->query("SELECT * FROM tb_proposal WHERE status='3'")->result_array();
                    foreach ($b as $key => $value):
                      ?>
                                             <option value="<?php echo $value['id']; ?>"
                                                 <?php echo ($value['id']==$dt['id_proposal']) ? "selected": ""; ?>>
                                                 <?php echo $value['acara']; ?></option>
                                             <?php endforeach; ?>
                                         </select>
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Total Dana Disetujui</label>
                                         <input type="text" class="form-control" name="total_dana_disetujui"
                                             placeholder="Total Dana Disetujui"
                                             value="<?php echo $dt['total_dana_disetujui']; ?>">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Total Dana Dicairkan</label>
                                         <input type="text" class="form-control" name="total_dana"
                                             placeholder="Total Dana" value="<?php echo $dt['total_dana']; ?>">
                                     </div>
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">% Persentase Dana Dicairkan</label>
                                         <input type="text" class="form-control" name="persentase"
                                             placeholder="Persentase" value="<?php echo $dt['persentase']; ?>">
                                     </div>

                                     <button type="submit" type="submit" name="simpan"
                                         class="btn btn-primary waves-effect waves-light">ACC</button>
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