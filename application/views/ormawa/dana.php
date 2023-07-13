 <div id="page-wrapper">
     <div class="container-fluid">
         <div class="row bg-title">
             <div class="col-lg-12">
                 <h4 class="page-title">User</h4>
                 <ol class="breadcrumb">
                     <li><a href="<?php echo base_url() ?>assets/#">Dashboard</a></li>
                 </ol>
             </div>
             <!-- /.col-lg-12 -->
         </div>
         <!-- row -->
         <?php
    if (isset($_REQUEST['hapus'])) {
      $hapus = $this->db->query("DELETE FROM tb_dana WHERE id='".$_REQUEST['id']."'");
      if ($hapus) {
        echo '
        <div class="alert alert-success alert-dismissible" role="alert">
        <div class="alert-message">
        <strong>Perhatian !! Data berhasil dihapus</strong>
        </div>
        </div>

        ';
      }else{
        echo '
        <div class="alert alert-danger alert-dismissible" role="alert">
        <div class="alert-message">
        <strong>Perhatian !! Data gagal dihapus</strong>
        </div>
        </div>
        ';
      }
    }?>
         <div class="row">
             <div class="col-md-12">
                 <div class="white-box">

                     <?php if(in_array($this->session->userdata('username')['level'], array(3))) : ?>
                     <a href="<?php echo base_url(); ?>act_dana" class="btn btn-danger">Tambah Pencairan Dana</a>

                     <br>
                     <br>
                     <br>
                     <?php endif; ?>
                     <table class="table table-stripped" id="myTable">
                         <thead>
                             <tr>
                                 <th>#</th>
                                 <th>Nama Proposal</th>
                                 <th>Total Dana Disetuju</th>
                                 <th>Total Dana Cair</th>
                                 <th>Persentase</th>
                                 <th>Status</th>
                                 <th>Aksi</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php 
            $no=1;
            $admin = $this->db->query("SELECT a.*, b.acara  FROM tb_dana as a LEFT JOIN tb_proposal as b ON a.id_proposal = b.id")->result_array();
            foreach ($admin as $key => $value):
              ?>
                             <tr>
                                 <td><?php echo $no++; ?></td>
                                 <td style="font-weight: bold;"><?php echo $value['acara']; ?></td>
                                 <td><?php echo number_format($value['total_dana_disetujui']); ?></td>
                                 <td><?php echo number_format($value['total_dana']); ?></td>
                                 <td><?php echo $value['persentase']; ?></td>
                                 <td>Done</td>
                                 <td>
                                     <?php if(in_array($this->session->userdata('username')['level'], array(3,1))) : ?>
                                     <form action="" method="POST">
                                         <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                                         <a href="<?php echo base_url(); ?>act_dana?id=<?php echo $value['id']; ?>"
                                             class="btn btn-primary btn-sm"><i class="ti-pencil"></i></a>
                                         <button class="btn btn-danger btn-sm"
                                             onclick="return confirm('Apakah anda ingin menghapus data ini ?')"
                                             type="submit" name="hapus"><i class="ti-trash"></i></button>
                                     </form>
                                     <?php else : ?>
                                     Hak akses BAK
                                     <?php endif;?>
                                 </td>
                             </tr>
                             <?php endforeach; ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>