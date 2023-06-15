<table>
	<tr>
		<td width="100%" style="text-align: center;"><center><h3>LAPORAN PENGESAHAN</h3></center></td>
	</tr>
</table>
<style type="text/css">
	table tr {
		width: 100% !important;
	}
</style>
<br>
<br>
<br>
<?php 
$detil = $this->db->query("SELECT * FROM tb_proposal WHERE id='".$_REQUEST['id']."'")->row_array();
echo $detil['halaman_pengesahan'];
?>


<br>
<div style="padding-left: 20px;">
	<table width="100%">
		<tr>
			<td width="10%"></td>
			<td width="40%"><center></center></td>
			<td width="40%" style="text-align: right;"><center>Jombang, <?php echo tanggal($detil['tgl_surat']); ?></center> <br></td>
		</tr>
		<tr>
			<td width="7%"></td>
			<td width="40%"><center>Ketua Panitia</center></td>
			<td width="40%" style="text-align: right;"><center>Sekertaris</center></td>
		</tr>
		<tr>
			<td></td>
			<td style="height: 50px"></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td style="font-weight: bold; text-align: left;"><center><u><?php $ketua = explode("|", $detil['ketua']);  echo $ketua[0]."</u><br> NIM. ".$ketua[1]; ?></center> </td>
			<td style="font-weight: bold; text-align: right;"><center><u><?php $sekertaris = explode("|", $detil['sekertaris']);  echo $sekertaris[0]."</u><br> NIM. ".$sekertaris[1]; ?></center> </td>
		</tr>
	</table>
	<br>
	<br>
	<br>
	<table width="100%">
		<tr>
			<td width="7%"></td>
			<td><i>Mengetahui, </i></td>
		</tr>
		<?php 
		$mengetahui_1 = explode("|", $detil['mengetahui_1']);
		$mengetahui_2 = explode("|", $detil['mengetahui_2']);
		?>
		<tr>
			<td width="7%"></td>
			<td width="40%"><center><?php echo $mengetahui_1[1]; ?></center></td>
			<td width="40%" style="text-align: right;"><center><?php echo $mengetahui_2[1]; ?></center></td>
		</tr>
		<tr>
			<td></td>
			<td style="height: 50px"></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td style="font-weight: bold;"><center><?php echo $mengetahui_1[0]." <br>NIDN. ".$mengetahui_1[2]; ?></center> </td>
			<td style="text-align: right; font-weight: bold;"><center><?php echo $mengetahui_2[0]." "."<br> NIM. ".$mengetahui_2[2]; ?></center> </td>
		</tr>
	</table>
</div>