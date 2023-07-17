 <div id="page-wrapper">
 	<div class="container-fluid">
 		<div class="row bg-title">
 			<div class="col-lg-12">
 				<h4 class="page-title">AjukanProposal</h4>
 				<ol class="breadcrumb">
 					<li><a href="<?php echo base_url() ?>assets/#">Dashboard</a></li>
 				</ol>
 			</div>
 			<!-- /.col-lg-12 -->
 		</div>
 		<!-- row -->
 		<?php
 		if (isset($_REQUEST['hapus'])) {
 			$hapus = $this->db->query("DELETE FROM tb_proposal WHERE id='".$_REQUEST['id']."'");
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
 					<?php if(in_array($this->session->userdata('username')['level'], array(4))) : ?>
 					<!-- <a href="<?php echo base_url(); ?>act_proposal" class="btn btn-primary">Buat Proposal</a>
 					<br>
 					<br>
 					<br> -->
 				<?php endif; ?>
 				<div class="table-responsive">
 					<table id="myTable" class="table table-striped">
 						<thead>
 							<tr>
 								<th>No</th>
 								<th>Nama Pengaju</th>
 								<th>Acara</th>
 								<th>Tanggal Acara</th>
 								<th>Tempat</th>
 								<th>Ketua</th>
 								<th>File Proposal</th>
 								<th>Status</th>
 								<th nowrap="">Aksi</th>
 							</tr>
 						</thead>
 						<tbody>

 							<?php 
 							$no =1;
 							$level = $this->session->userdata('username')['level'];
 							if ($this->session->userdata('username')['level']==4) {
 								$id_user = $this->session->userdata('username')['id'];
 								$q = $this->db->get_where('tb_proposal', array('id_user'=>$id_user))->result_array();
 							}else{
 								$q = $this->db->get('tb_proposal')->result_array();
 							}
 							foreach ($q as $key => $data) :
 								$nm_ormawa = $this->db->get_where('tb_users',array('id'=>$data['id_user']))->row_array();
 								$nama_file = $this->db->query("
 									SELECT * FROM `tb_histori_catatan`  as a 
 									LEFT JOIN tb_proposal as b ON a.id_proposal = b.id
 									WHERE b.id='".$data['id']."'
 									ORDER BY tgl_kirim DESC
 									LIMIT 1
 									")->row_array();
 									?>
 									<tr>

 										<td><?php echo $data['no_surat']; ?></td>
 										<td><?php echo $nm_ormawa['organisasi']; ?></td>
 										<td><?php echo $data['acara']; ?></td>
 										<td><?php echo $data['tgl_acara']; ?></td>
 										<td><?php echo $data['tempat']; ?></td>
 										<td nowrap=""><?php $ketua = explode('|', $data['ketua']);
 										echo "Nama : ".$ketua[0]."<BR>"; 
 										echo "ID : ".$ketua[1];
 										?></td>
 										<td>
 											 <a href="<?php  echo base_url()."upload/proposal/".$nama_file['file']; ?>"><i class="fa fa-download"></i> File Proposal</a>
 										</td>
 										<td style="font-weight: bold;">
 											<?php echo status($data['status']); ?>
 										</td>
 										<td nowrap="">
 											<form action="" method="POST">
 												<!-- <a href="<?php echo base_url(); ?>preview?id=<?php echo $data['id']; ?>"
 													class="btn btn-primary btn-sm"><i class="ti-eye"></i> Lihat Proposal</a> -->
 													<a title="upload_file" href="<?php echo base_url(); ?>send?id=<?php echo $data['id']; ?>"
 														class="btn btn-success btn-sm"><i class="fa fa-upload"></i> Upload Proposal</a>
 														<?php if(in_array($level, array(4,3))  AND in_array($data['status'],array(1,3))): ?>
 														<?php else: ?>

 														<?php endif; ?>
 													</form>
 												</td>
 											</tr>

 										<?php endforeach; ?>
 									</tbody>
 								</table>
 							</div>
 						</div>
 					</div>
 				</div>
 				<!-- /.row -->
 			</div>
 			<!-- /.container-fluid -->
 		</div>