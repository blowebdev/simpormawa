<?php 
// $id_user = $this->session->userdata('username')['id'];
$detil = $this->db->query("SELECT * FROM tb_proposal WHERE id='".$_REQUEST['id']."'")->row_array();
$users = $this->db->query("SELECT * FROM tb_users WHERE id='".$detil['id_user']."'")->row_array();
?>
<table width="100%" style="width: 100% !important">
    <tr>
        <td rowspan="1" width="10%"><img src="<?php echo base_url()."upload/".$users['logo']; ?>"
                style="width: 100px; height: 100px"></td>
        <td width="90%" style="font-weight: bold; font-size: 14px; line-height: 19px">
            PANITIA PELAKSANA <?php echo $detil['acara']; ?><br>
            <?php echo strtoupper($users['fakultas']); ?> <?php echo strtoupper($users['organisasi']); ?><br>
            UNIVERSITAS PESANTREN TINGGI DARUL ‘ULUM
        </td>
    </tr>
    <tr>
        <td colspan="2" style="background-color: blue; color: white; font-size: 12px; line-height: 20px">Sekertaris :
            Pusat ORMAWA Unipdu, Gor Universitas Pesantren Tinggi Darul Ulum Jombang.</td>
    </tr>
</table>
<br>
<br>
<table>
    <tr>
        <td width="10%">No</td>
        <td nowrap="">: <?php echo $detil['no_surat']; ?></td>
    </tr>
    <tr>
        <td width="10%">Lamp</td>
        <td nowrap="">: 1 (Satu) Bendel</td>
    </tr>
    <tr>
        <td width="10%">Hal</td>
        <td nowrap="">: <?php echo $detil['hal']; ?></td>
    </tr>

</table>
<br>
<div style="padding-left: 20px;">
    <table>
        <tr>
            <td width="10%"></td>
            <td nowrap="">Kepada Yang Terhormat</td>
        </tr>
        <tr>
            <td></td>
            <td style="" width="90%" nowrap="">
                <?php $kepada = explode("|", $detil['kepada']); echo $kepada[0]."<br>".$kepada[1]; ?></td>
        </tr>
        <tr>
            <td width="10%"></td>
            <td nowrap="" style="padding-left: 10px">Di-</td>
        </tr>
        <tr>
            <td width="10%"></td>
            <td nowrap="" style="padding-left: 30%">Tempat</td>
        </tr>
    </table>
    <br>
    <br>
    <table width="100%">
        <tr>
            <td width="10%"></td>
            <td nowrap="" width="90%" style="padding-left: 100px; text-align: left;"><i>Assalamu’alaikum Wr. Wb.</i>
                <br>Salam silaturrahim, semoga derap langkah aktivitas kita senantiasa dalam limpahan rahmat dan karunia
                Allah SWT. Amin. Sehubungan dengan acara <?php echo $detil['acara']; ?> yang akan diadakan oleh
                <?php echo ucfirst($users['fakultas']." Universitas Pesantren Tinggi Darul
                Ulum ".$users['organisasi']); ?> pada :
                <br>
                <table>
                    <tr>
                        <td width="10%">Hari</td>
                        <td>: <?php echo hari($detil['tgl_acara']); ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>: <?php echo tanggal($detil['tgl_acara']); ?></td>
                    </tr>
                    <tr>
                        <td>Tempat</td>
                        <td>: <?php echo $detil['tempat']; ?></td>
                    </tr>
                </table>
                <br>Maka demi terlaksananya acara tersebut, kami bermaksud mengajukan
                <?php echo strtolower($detil['hal']); ?>. Sebagai bahan pertimbangan, berikut kami lampirkan agenda dan
                anggaran dana yang kami butuhkan dalam acara tersebut.
                Demikian Permohonan Dana ini kami buat, atas perhatian dan kerjasamanya kami sampaikan terima kasih
                <br><label style="font-style: italic;">Wallahul Muwaffieq Ilaa Aqwamit-Thorieq <br>Wassalamu’alaikum Wr.
                    Wb</label>
            </td>
        </tr>
    </table>
    <br>
    <div style="padding-left: 20px;">
        <table width="100%">
            <tr>
                <td width="10%"></td>
                <td width="40%">
                    <center></center>
                </td>
                <td width="40%" style="text-align: right;">
                    <center>Jombang, <?php echo tanggal($detil['tgl_surat']); ?></center>
                </td>
            </tr>
            <tr>
                <td width="7%"></td>
                <td width="40%">
                    <center>Ketua Panitia</center>
                </td>
                <td width="40%" style="text-align: right;">
                    <center>Sekertaris</center>
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="height: 50px"></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td style="font-weight: bold; text-align: left;">
                    <center><u><?php $ketua = explode("|", $detil['ketua']);  echo $ketua[0]."</u><br> NIM. ".$ketua[1]; ?>
                    </center>
                </td>
                <td style="font-weight: bold; text-align: right;">
                    <center><u><?php $sekertaris = explode("|", $detil['sekertaris']);  echo $sekertaris[0]."</u><br> NIM. ".$sekertaris[1]; ?>
                    </center>
                </td>
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
                <td width="40%">
                    <center><?php echo $mengetahui_1[1]; ?></center>
                </td>
                <td width="40%" style="text-align: right;">
                    <center><?php echo $mengetahui_2[1]; ?></center>
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="height: 50px"></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td style="font-weight: bold;">
                    <center><?php echo $mengetahui_1[0]." <br>NIDN. ".$mengetahui_1[2]; ?></center>
                </td>
                <td style="text-align: right; font-weight: bold;">
                    <center><?php echo $mengetahui_2[0]." "."<br> NIM. ".$mengetahui_2[2]; ?></center>
                </td>
            </tr>
        </table>
    </div>