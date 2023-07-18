 <div id="page-wrapper">
   <div class="container-fluid">
       <div class="row bg-title">
           <div class="col-lg-12">
            <h4 class="page-title">Ajukan proposal</h4>
            <ol class="breadcrumb">
               <li><a href="<?php echo base_url() ?>assets/#">Dashboard</a></li>
           </ol>
       </div>
       <!-- /.col-lg-12 -->
   </div>
   <div class="row">
       <div class="col-md-12">
           <div class="white-box">
            <div class="white-box clearfix">
                   <div class="row">
                    <?php 
                    if (!empty($_REQUEST['id'])) {
                      $dt = $this->db->query("SELECT * FROM tb_ajukan_proposal WHERE id='".$_REQUEST['id']."'")->row_array();
                  }
                  ?>
                  <div class="col-sm-12 col-xs-12">
                   <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
                    <div class="form-group">
                     <label for="exampleInputEmail1">Halaman Pengesahan</label>
                     <textarea class="form-control" rows="15" name="halaman_pengesahan"
                     id="halaman_pengesahan" required="">
                     <?php if(!empty($dt['halaman'])){
                        echo $dt['halaman'];
                    } else {
                        include 'halaman_pengesahan.php';
                    } ?></textarea>
                </div>
                 <div class="form-group">
                   <label for="exampleInputEmail1">IMPORT DATA DARI PROPOSAL</label>
                   <select class="form-control" id="id_proposal" onchange="show_data_proposal()">
                       <option value="reset">Pilih Data Proposal</option>
                       <?php $dto = $this->db->get_where("tb_proposal",array('id_user'=> $this->session->userdata('username')['id']))->result_array(); foreach ($dto as $key => $data) :?>
                            <option value="<?php echo $data['id']; ?>"><?php echo $data['acara']; ?></option>
                        <?php endforeach; ?>
                   </select>
               </div>
               <script type="text/javascript">
                   function show_data_proposal() {
                    var id = $("#id_proposal").val();
                    if(id=='reset'){
                        $("#kegiatan").val('');
                        $("#tgl_kegiatan").val('');
                    }
                    $.ajax({
                        url: '<?php echo base_url(); ?>dashboard/cek_data_proposal?id='+id,
                        type: 'POST',
                        dataType: 'JSON',
                    })
                    .done(function(result) {
                        if(result.acara!==''){
                            $("#kegiatan").val(result.acara);
                            $("#tgl_kegiatan").val(result.tgl_acara);
                        }else{
                            $("#kegiatan").val('');
                            $("#tgl_kegiatan").val('');
                        }
                    })
                    .fail(function() {
                        console.log("error");
                         $("#kegiatan").val('');
                         $("#tgl_kegiatan").val('');
                    })
                    .always(function() {
                        console.log("complete");
                    });
                    
                   }
               </script>
                <div class="form-group">
                   <label for="exampleInputEmail1">ORMAWA</label>
                   <input type="text" name="ormawa" class="form-control" value="<?php echo empty($dt['ormawa']) ?  $this->session->userdata('username')['organisasi']: $dt['ormawa']; ?>" required="">
               </div>
               <div class="form-group">
                   <label for="exampleInputEmail1">Tanggal Kegiatan</label>
                   <input type="date" name="tgl_kegiatan" id="tgl_kegiatan" class="form-control" value="<?php echo $dt['tgl_kegiatan']; ?>" required="">
               </div>
               <div class="form-group">
                   <label for="exampleInputEmail1">Nama Kegiatan</label>
                   <input type="text" name="nama_kegiatan" id="kegiatan" class="form-control" value="<?php echo $dt['nama_kegiatan']; ?>" required="">
               </div>
               <div class="form-group">
                   <label for="exampleInputEmail1">Dana Kegiatan</label>
                   <input type="text" name="dana_kegiatan" class="form-control" value="<?php echo $dt['dana_kegiatan']; ?>" required="">
               </div>
               <div class="form-group">
                   <label for="exampleInputEmail1">Kirim Ke</label>
                   <input type="text" name="kirim_ke" class="form-control" value="BAKM" required="">
               </div>

               <div class="form-group">
                   <label for="exampleInputEmail1">Upload File Proposal</label>
                   <?php if(!empty($dt['file_pdf'])) :  ?>
                       <input type="file" name="file" class="form-control"> 
                       <br>
                       File diupload : <a href="<?php echo base_url(); ?>upload/proposal/<?php echo $dt['file_pdf']; ?>"><?php echo $dt['file_pdf']; ?></a>
                       <input type="hidden" name="file_lama" value="<?php echo $dt['file_pdf']; ?>">
                       <?php else : ?>
                           <input type="file" name="file" class="form-control" required="">
                       <?php endif; ?><br>
                       <label style="color: red">Maksimal 5 mb</label>
                   </div>


                   <div class="form-group">
                       <label for="exampleInputEmail1">Catatan</label>
                       <input type="text" name="catatan" class="form-control" value="<?php echo $dt['catatan']; ?>">
                   </div>

                   <button class="btn btn-primary" type="submit" name="simpan">Simpan Pengajuan</button>
               </form>
           </div>
       </div>
   </div>
</div>
</div>
</div>


</div>
