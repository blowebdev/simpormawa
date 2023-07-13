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

       <?php
       if (isset($_REQUEST['hapus'])) {
          $hapus = $this->db->query("DELETE FROM tb_users WHERE id='".$_REQUEST['id']."'");
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
    <!-- row -->
    <div class="row">
       <div class="col-md-12">
           <div class="white-box">

               <?php if(in_array($this->session->userdata('username')['level'], array(1))) : ?>
               <a href="<?php echo base_url(); ?>act_user" class="btn btn-primary">Tambah User</a>

               <br>
               <br>
               <br>
           <?php endif; ?>
           <table class="table table-stripped" id="myTable">
               <thead>
                   <tr>
                       <th>#</th>
                       <th>Logo</th>
                       <th>Nama</th>
                       <th>Nama ORMAWA</th>
                       <th>ORMAWA</th>
                       <th>Username</th>
                       <th>Alamat</th>
                       <th>Level</th>
                       <th>Aksi</th>
                   </tr>
               </thead>
               <tbody>
                   <?php 
                   $id = $this->session->userdata('username')['id'];
                   if($this->session->userdata('username')['level']==1){
                    $admin = $this->db->query("SELECT * FROM tb_users")->result_array();
                }else{
                    $admin = $this->db->query("SELECT * FROM tb_users WHERE id='".$id."'")->result_array();
                }
                $no=1;
                foreach ($admin as $key => $value):
                  ?>
                  <tr>
                   <td><?php echo $no++; ?></td>
                   <td>
                       <img src="<?php echo base_url(); ?>upload/<?php echo $value['logo']; ?>"
                       class="img-circle" style="width: 50px; height: 50px">
                   </td>
                   <td><?php echo $value['nama']; ?></td>
                   <td><?php echo $value['organisasi']; ?></td>
                   <td><?php echo $value['fakultas']; ?></td>
                   <td><?php echo $value['username']; ?></td>
                   <td><?php echo $value['alamat']; ?></td>
                   <td style="font-weight: bold;">
                       <?php 
                       if($value['level']==1){echo "ADMIN";}
                       elseif ($value['level']==2) {echo "BAKM";}
                       elseif ($value['level']==3) {echo "BAK";} 
                       elseif ($value['level']==4) {echo "ORMAWA";}
                       ?>

                   </td>
                   <td>
                       <?php if(in_array($this->session->userdata('username')['level'], array(1,2,3,4))) : ?>
                       <form action="" method="POST">
                           <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                           <a href="<?php echo base_url(); ?>act_user?id=<?php echo $value['id']; ?>"
                               class="btn btn-primary btn-sm"><i class="ti-pencil"></i></a>
                               <?php if(in_array($this->session->userdata('username')['level'], array(1))) : ?>
                               <button class="btn btn-danger btn-sm" name="hapus" type="submit"
                               onclick="return confirm('Apakah ingin menghapus data ini ?')"><i
                               class="ti-trash"></i></button>
                           <?php endif; ?>
                       </form>
                       <?php else : ?>
                           Hak akses Admin
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