<?php
include("bas.php"); 
require_once ('kullanici.php');

$kul = new kullanici();
if (isset($_GET["id"])){
	$id = $_GET["id"];
	$sql = "SELECT id, kullanici_ad, sifre FROM kullanici where id=".$id;
    $sonuc = mysql_query($sql);

		$dizi = mysql_fetch_row($sonuc);
		$kul->kadi = $dizi[1];
		$kul->sifre = $dizi[2];
        
}else if(isset($_GET["s"])){
    if ($_GET["s"] == "kGuncel"){
        
        if (isset($_POST["sifre"])) {
            $kul->sifre = $_POST["sifre"];
            if (strlen(trim($kul->sifre)) < 3) {
                $kul->sifre = NULL;
            }
        
		$pid= $_POST["id"];
        $sql1 = "UPDATE kullanici SET sifre='$kul->sifre' WHERE id='$pid'";
        echo $sql1;
	$sonuc = mysql_query($sql1);
 		header('Location: kullaniciDuzenle.php?id='.$pid);
		
}
}
}else{
	header('Location: kullaniciEkle.php');
}

?>
 <div id="icerik" style="position: absolute; left: 210px; top: 160px; width: 870px; height: 390px;" class="kenarlik">
            <div class="icerik dolgu">Sifre Duzenle</div>
            <div class="dolgu oge icerik" style="height: 340px;">

<form action="?s=kGuncel" method="post" id="kEkle">
        <table align="left">
				<tr>
					<td>Kullanici Adi() : </td>
				    <td><input type="text" name="kadi" value="<?php echo $kul->kadi; ?>" disabled /></td>
				</tr>
				<tr>
				    <td>Sifre (*) : </td>
				    <td><input type="password" name="sifre" value=""/><input type="hidden" name="id" value="<?php echo $id;?>"/></td>
				</tr>
                <tr>
				    <td><input type="submit" id="gonder" value="Kaydet"/></td>
				</tr>

		</table>
    </form>


	</div>
	</div>


<?php include("alt.php"); ?>