<tr>
    <td width="100%" style="text-align: left;">
        <left>
            <h3>LAMPIRAN II</h3>
        </left>
    </td>
</tr>
<style type="text/css">
table {
    border: 1px solid #000;
}

td {
    border: 1px solid #000;
}

thead td,
thead th {
    border: 1px solid #000;
}
</style>
<?php 
$detil = $this->db->query("SELECT * FROM tb_proposal WHERE id='".$_REQUEST['id']."'")->row_array();
echo $detil['halaman_anggaran'];
?>