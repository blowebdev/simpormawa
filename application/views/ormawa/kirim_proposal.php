 <div id="page-wrapper">
     <div class="container-fluid">
         <div class="row bg-title">
             <div class="col-lg-12">
                 <h4 class="page-title">Kirim Proposal</h4>
                 <ol class="breadcrumb">
                     <li><a href="<?php echo base_url() ?>assets/#">Dashboard</a></li>
                 </ol>
             </div>
             <!-- /.col-lg-12 -->
         </div>
         <?php 
        $level = $this->session->userdata('username')['level'];
if (!empty($_REQUEST['id'])) {
  $dt = $this->db->query("SELECT * FROM tb_ajukan_proposal WHERE id='".$_REQUEST['id']."'")->row_array();
}
?>
<div class="row">
 <div class="col-md-6">
     <div class="white-box">
         <div class="white-box clearfix">
             <h3>Kirim Proposal Proposal</h3>
             <p class="text-muted m-b-30 font-13"> Tambah data proposal </p>
             <div class="row">
                 <div class="col-sm-12 col-xs-12">
                     <?php if(in_array($level, array(4,3))  AND in_array($dt['status'],array(1,3))): ?>
                     <div class="alert alert-info">
                         Mohon maaf masih proses tahap verifikasi BAKM
                     </div>
                     <a href="<?php echo $base_url; ?>ajukan_proposal" class="btn btn-danger">Kembali</a>
                     <?php else : ?>
                         <?php if(!in_array($level, array(3))) : ?>
                             <form action="" method="POST" enctype="multipart/form-data">
                                 <div class="form-group">
                                     <label for="exampleInputEmail1">User</label>
                                     <input type="text" class="form-control" disabled="" name="acara"
                                     placeholder="Judul Acara" value="<?php echo $this->session->userdata('username')['nama']; ?>">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputEmail1">Kirim Ke</label>
                                     <select class="form-control" name="status" required="">
                                         <?php if(in_array($level, array('4'))): ?><option value="1">BAKM
                                             </option><?php endif; ?>
                                             <?php if(in_array($level, array(1,2))): ?><option value="2">Ditolak BAKM
                                                 </option> <?php endif; ?>
                                                 <?php if(in_array($level, array(1,2))): ?><option value="3">Setuju</option>
                                             <?php endif; ?>
                                         </select>
                                     </div>

                                     <?php 
                                     $cek_file = $this->db->query("
                                        SELECT * FROM `tb_histori_catatan`  as a 
                                        LEFT JOIN tb_ajukan_proposal as b ON a.id_proposal = b.id
                                        WHERE b.id='".$_REQUEST['id']."'
                                        ORDER BY tgl_kirim DESC
                                        ");
                                     $cek_file_tot = $cek_file->num_rows();
                                     $datane = $cek_file->row_array();
                                        if(in_array($this->session->userdata('username')['level'], array(4))) : ?>
                                         <div class="form-group">
                                             <label for="exampleInputEmail1">Upload File Proposal</label>
                                             <input type="file" name="file" class="form-control">
                                         </div>
                                         <?php else : ?>
                                            <?php if(in_array($level, array(1))) :  ?>
                                            <label for="exampleInputEmail1">Upload File Proposal</label>
                                            <input type="file" name="file" class="form-control">
                                            <input type="hidden" name="file_lama" value="<?php echo $datane['file'] ?>">
                                             <a href="<?php  echo base_url()."upload/proposal/".$datane['file']; ?>"><?php echo $datane['file']; ?></a>
                                            <?php else : ?>
                                                <?php if(!empty($datane)) : ?>
                                                    <label for="exampleInputEmail1">Upload File Proposal</label>
                                                    <a href="<?php  echo base_url()."upload/proposal/".$datane['file']; ?>"><?php echo $datane['file']; ?></a>
                                                    <input type="hidden" name="file_lama" value="<?php echo $datane['file'] ?>">
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <div class="form-group">
                                         <label for="exampleInputEmail1">Catatan</label>
                                         <textarea class="form-control" name="catatan" placeholder="catatan"
                                         rows="3"></textarea>
                                     </div>
                                     <div class="form-group">
                                         <button type="submit" name="simpan" class="btn btn-primary">Kirim</button>
                                     </div>
                                 </form>
                                 <?php else : ?>
                                     <div class="alert alert-danger">Hak akses BAKM dan Ormawa</div>
                                 <?php endif; ?>
                             <?php endif; ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-6">
             <div class="white-box">
                 <div class="white-box clearfix">
                     <h3>Histori Catatan Proposal</h3>
                     <table class="table table-striped" >
                         <thead>
                             <tr>
                                 <th>Tanggal</th>
                                 <th>Username</th>
                                 <th>Status</th>
                                 <th>File Step Proposal</th>
                                 <th>Catatan</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php 
                             $result_histori = $this->db->query("SELECT * FROM tb_histori_catatan WHERE id_proposal='".$_REQUEST['id']."' ORDER BY tgl_kirim DESC")->result_array();
                             foreach ($result_histori as $key => $data) {
                                ?>
                                <tr>
                                 <td><?php echo $data['tgl_kirim']; ?></td>
                                 <td><?php echo $data['username']; ?></td>
                                 <td><?php echo status($data['status']); ?></td>
                                 <td>
                                     <a href="<?php  echo base_url()."upload/proposal/".$data['file']; ?>">File Proposal</a>
                                 </td>
                                 <td><?php echo $data['catatan']; ?></td>
                             </tr>

                         <?php } ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>
</div>
</div>