<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/tcpdf/tcpdf.php';

class dashboard extends CI_Controller {

	public function __construct()
	{
		error_reporting(0);
		parent::__construct();
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->model('M_Datatables');

		if(empty($this->session->userdata['username'])){
			$this->load->view('login');
		}
	}

	public function index()
	{
		if(!empty($this->session->userdata['username'])){
			$this->dashboard();
		}else{
			$this->login();
		}
	}

	public function login(){
		try {
			$username = @$_POST['username'];
			$password = md5(@$_POST['password']);
			if(isset($username) && isset($password)) {
				$data = $this->db->get_where('tb_users',array('username'=>$username, 'password'=>$password))->row_array();
				if(!empty($data['username'])){
					$this->session->set_userdata('username',$data); 
					redirect('./');
				}else{
					$alert['alert'] = '
					<div class="alert alert-success alert-dismissible" role="alert">
					<div class="alert-message">
					<strong>Perhatian !! Mohon maaf gagal login cek kembali user dan password anda</strong>
					</div>
					</div>
					';
					$this->session->set_flashdata('alert',$alert);
					redirect('./login');
				}
			}
		} catch (Exception $e) {
			echo "Error ".$e;
		}
	}
	public function dashboard()
	{
		$this->checkSession();
		$data['halaman'] = 'master/home';
		$this->load->view('modul',$data);
	}
	public function ajukan_proposal()
	{
		$this->checkSession();
		$data['halaman'] = 'ormawa/ajukan_proposal';
		$this->load->view('modul',$data);
	}
	public function proposal()
	{
		$this->checkSession();
		$data['halaman'] = 'ormawa/proposal';
		$this->load->view('modul',$data);
	}
	public function act_proposal()
	{
		$this->checkSession();
		$data['halaman'] = 'ormawa/act_proposal';
		$this->load->view('modul',$data);
	}
	public function users()
	{
		$this->checkSession();
		$data['halaman'] = 'users/users';
		$this->load->view('modul',$data);
	}
	public function act_user()
	{
		$this->checkSession();
		$data['halaman'] = 'users/act_user';
		$this->load->view('modul',$data);
	}
	public function dana()
	{
		$this->checkSession();
		$data['halaman'] = 'ormawa/dana';
		$this->load->view('modul',$data);
	}
	public function act_dana()
	{
		$this->checkSession();
		$data['halaman'] = 'ormawa/act_dana';
		$this->load->view('modul',$data);
	}
	public function cek_data_proposal()
	{
		$this->checkSession();
		$data = $this->db->select('acara,tgl_acara,tempat,ketua')
						 ->get_where('tb_proposal',array('id'=>$_REQUEST['id']))->row_array();
		echo json_encode($data);
	}
	public function act_ajukan_proposal()
	{
		$this->checkSession();
		if (isset($_REQUEST['simpan'])) {
			$pengesahan = $_REQUEST['halaman_pengesahan'];


			$config['upload_path']          = './upload/proposal';
			$config['allowed_types']        = 'pdf';
			$config['max_size']             = 800000;
			$config['max_width']            = 100000;
			$config['max_height']           = 100000;
			$this->load->library('upload', $config);

			if($_FILES['file']['name']!="") {
				if (!$this->upload->do_upload('file')){
					echo $this->upload->display_errors();
				}else{
					$upload_data=$this->upload->data();
					$file_lama = $_REQUEST['file_lama'];
					unlink('./upload/proposal/'.$file_lama);
					$file=(empty($upload_data['file_name'])) ? "-" : $upload_data['file_name'];
				}
			}else{
				$file = $_REQUEST['file_lama'];
			}

			$data = array(
				'halaman' => $pengesahan,
				'file_pdf' => $file,
				'id_user' => $this->session->userdata('username')['id'],
				'ormawa'=>$_REQUEST['ormawa'],
				'tgl_kegiatan'=>$_REQUEST['tgl_kegiatan'],
				'nama_kegiatan'=>$_REQUEST['nama_kegiatan'],
				'dana_kegiatan'=>$_REQUEST['dana_kegiatan'],
				'catatan'=>$_REQUEST['catatan'],
				'tanggal' => date('Y-m-d H:i:s'),
				'status' => 1
			);

			if (!empty($_REQUEST['id'])) {
				$this->db->where('id', $_REQUEST['id']);
				$exc = $this->db->update('tb_ajukan_proposal',$data);
			}else{
				$exc = $this->db->insert('tb_ajukan_proposal',$data);
			}

			if ($exc) {
				echo "<script>alert('Data berhasil disimpan')</script>";
				redirect('ajukan_proposal');
			}else{
				echo "<script>alert('Data gagal disimpan')</script>";
			}

		}
		$data['halaman'] = 'ormawa/act_ajukan_proposal';
		$this->load->view('modul',$data);
	}
	public function save_users()
	{
		$this->checkSession();
		if (isset($_REQUEST['simpan'])) {
			$nama = $_REQUEST['nama'];
			$organisasi = $_REQUEST['organisasi'];
			$fakultas = $_REQUEST['fakultas'];
			$username = $_REQUEST['username'];
			$password = md5($_REQUEST['password']);
			$level = $_REQUEST['level'];
			$alamat = $_REQUEST['alamat'];


			$config['upload_path']          = './upload';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 800000;
			$config['max_width']            = 100000;
			$config['max_height']           = 100000;
			$this->load->library('upload', $config);

			if($_FILES['foto']['name']!="") {
				if (!$this->upload->do_upload('foto')){
					echo $this->upload->display_errors();
				}else{
					$upload_data=$this->upload->data();
					$foto=(empty($upload_data['file_name'])) ? "-" : $upload_data['file_name'];
				}
			}else{
				$foto = $_REQUEST['foto_lama'];
			}


			$data = array(
				'nama' => $nama,
				'organisasi' => $organisasi,
				'fakultas' => $fakultas,
				'username' => $username,
				'password' => $password,
				'level' => $level,
				'alamat' => $alamat,
				'logo' => $foto
			);

			if (!empty($_REQUEST['id'])) {
				$this->db->where('id', $_REQUEST['id']);
				$exc = $this->db->update('tb_users',$data);
			}else{
				$exc = $this->db->insert('tb_users',$data);
			}

			if ($exc) {
				echo "<script>alert('Data berhasil disimpan')</script>";
				redirect('users');
			}else{
				echo "<script>alert('Data gagal disimpan')</script>";
			}
		}

	}

	public function send()
	{
		$this->checkSession();

		$level = $this->session->userdata('username')['level'];
		$id = $this->session->userdata('username')['id'];
		$username = $this->session->userdata('username')['username'];
		$organisasi = $this->session->userdata('username')['organisasi'];
		if (isset($_REQUEST['simpan'])) {


			$config['upload_path']          = './upload/proposal';
			$config['allowed_types']        = 'pdf';
			$config['max_size']             = 800000;
			$config['max_width']            = 100000;
			$config['max_height']           = 100000;
			$this->load->library('upload', $config);

			if($_FILES['file']['name']!="") {
				if (!$this->upload->do_upload('file')){
					echo $this->upload->display_errors();
				}else{
					$upload_data=$this->upload->data();
					$file=(empty($upload_data['file_name'])) ? "-" : $upload_data['file_name'];
				}
			}else{
				$file = $_REQUEST['file_lama'];
			}

			if($username){

				$act = $this->db->query("UPDATE tb_ajukan_proposal SET status='".$_REQUEST['status']."' WHERE id='".$_REQUEST['id']."'");
				if ($act) {
					$data = array(
						'id_proposal' => $_REQUEST['id'],
						'status' => $_REQUEST['status'],
						'catatan' => $_REQUEST['catatan'],
						'username' => $username,
						// 'file' => $file,
						'tgl_kirim' => date('Y-m-d H:i:s')
					);
					$result = $this->db->insert('tb_histori_catatan',$data);
					if ($result) {
						redirect('ajukan_proposal');
					}else{
						echo "<div class='alert alert-danger'>Mohon maaf data gagal disimpan</div>";
					}
				}else{
					redirect('ajukan_proposal');
				}
			}
		}else{
			// echo "<script>alert('Data gagal diupload')</script>";
		}

		$data['halaman'] = 'ormawa/kirim_proposal';
		$this->load->view('modul',$data);
		
	}
	public function preview()
	{

        // Create new PDF document
		$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

        // Set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Your Name');
		$pdf->SetTitle('Sample PDF');
		$pdf->SetSubject('Generating PDF using TCPDF in CodeIgniter');
		$pdf->SetKeywords('PDF, CodeIgniter, TCPDF');

		// remove default header/footer
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);
        // Add a page
		$pdf->AddPage();
		$html =$this->load->view('ormawa/preview_surat', [], true);
        // Set some content
		$pdf->writeHTML($html, true, false, true, false, '');
		$pdf->lastPage();

		$pdf->AddPage();
		$html =$this->load->view('ormawa/preview_halaman_pengesahan', [], true);
        // Set some content
		$pdf->writeHTML($html, true, false, true, false, '');
		$pdf->lastPage();

		$pdf->AddPage();
		$html =$this->load->view('ormawa/preview_halaman_proposal', [], true);
        // Set some content
		$pdf->writeHTML($html, true, false, true, false, '');
		$pdf->lastPage();

		$pdf->AddPage();
		$html =$this->load->view('ormawa/preview_halaman_agenda', [], true);
        // Set some content
		$pdf->writeHTML($html, true, false, true, false, '');
		$pdf->lastPage();

		$pdf->AddPage();
		$html =$this->load->view('ormawa/preview_halaman_anggaran', [], true);
        // Set some content
		$pdf->writeHTML($html, true, false, true, false, '');
		$pdf->lastPage();
        // Output the PDF as a file (force download)
		$pdf->Output('Proposal.pdf', 'I');

		// $this->load->view("preview");
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('./login');
	}

	public function checkSession()
	{
		if(empty($this->session->userdata['username'])){
			redirect('./');
		}
	}

}

?>