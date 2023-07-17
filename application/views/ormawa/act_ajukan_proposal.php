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
                     <h3>Ajukan Proposal</h3>
                     <p class="text-muted m-b-30 font-13"> Ajukan data proposal </p>
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
                         <label for="exampleInputEmail1">Upload File Proposal</label>
                        <?php if(!empty($dt['file_pdf'])) :  ?>
                         <input type="file" name="file" class="form-control"> 
                         <br>
                         File diupload : <a href="<?php echo base_url(); ?>upload/proposal/<?php echo $dt['file_pdf']; ?>"><?php echo $dt['file_pdf']; ?></a>
                         <input type="hidden" name="file_lama" value="<?php echo $dt['file_pdf']; ?>">
                        <?php else : ?>
                         <input type="file" name="file" class="form-control">
                        <?php endif; ?>
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
