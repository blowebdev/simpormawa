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
    if (!empty($_REQUEST['id'])) {
      $dt = $this->db->query("SELECT * FROM tb_users WHERE id='".$_REQUEST['id']."'")->row_array();
    }
    ?>
         <!-- row -->
         <div class="row">
             <div class="col-md-12">
                 <div class="white-box">
                     <form action="<?php echo base_url(); ?>save_users" enctype="multipart/form-data" method="POST">
                         <div class="form-group">
                             <label for="exampleInputEmail1">Nama</label>
                             <input type="hidden" name="id" value="<?php echo $dt['id']; ?>">
                             <input type="text" class="form-control" name="nama" placeholder="Nama" required=""
                                 value="<?php echo $dt['nama']; ?>">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">ORMAWA</label>
                             <input type="text" class="form-control" name="organisasi" placeholder="Organisasi"
                                 required="" value="<?php echo $dt['organisasi']; ?>">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Fakultas</label>
                             <input type="text" class="form-control" name="fakultas" placeholder="Fakultas" required=""
                                 value="<?php echo $dt['fakultas']; ?>">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Alamat</label>
                             <textarea class="form-control" rows="5" class="form-control" name="alamat"
                                 required=""><?php echo $dt['alamat']; ?></textarea>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Username</label>
                             <input type="text" class="form-control" name="username" placeholder="username" required=""
                                 value="<?php echo $dt['username']; ?>">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Password</label>
                             <input type="password" class="form-control" name="password" placeholder="Password"
                                 required="">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Level</label>
                             <select class="form-control" name="level" required="">
                                 <option value="">Level User</option>
                                 <option value="1" <?php echo ($dt['level']==1) ? "selected": ""; ?>>Admin</option>
                                 <option value="2" <?php echo ($dt['level']==2) ? "selected": ""; ?>>BAKM</option>
                                 <option value="3" <?php echo ($dt['level']==3) ? "selected": ""; ?>>BAK</option>
                                 <option value="4" <?php echo ($dt['level']==4) ? "selected": ""; ?>>ORMAWA</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Logo</label><br>
                             <?php if(!empty($_REQUEST['id'])) : ?>
                             <img src="<?php echo base_url(); ?>upload/<?php echo $dt['logo']; ?>"
                                 style="height: 100px; width: 100px"><br>
                             <input type="file" name="foto">
                             <input type="hidden" name="foto_lama" value="<?php echo $dt['logo']; ?>">
                             <?php else : ?>
                             <input type="file" name="foto" required="">
                             <?php endif; ?>
                         </div>
                         <div class="form-group">
                             <button type="submit" name="simpan"
                                 class="btn btn-primary waves-effect waves-light">Submit</button>
                         </div>

                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>