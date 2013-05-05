<?php include("bas.php"); 
require_once ('kullanici.php');

$kul = new kullanici();
$e=""; $u="";
$uyari = "";


if (isset($_GET["id"])){
	$id = $_GET["id"];
	$sql = "SELECT * FROM kullanici where id=".$id;
    $sonuc = mysql_query($sql);

		$dizi = mysql_fetch_row($sonuc);
		$kul->kadi = $dizi[1];
		$kul->mail = $dizi[2];
		$kul->sifre = $dizi[3];
		$kul->adi = $dizi[4];
		$kul->sadi = $dizi[5];
		$kul->firma = $dizi[6];
		$kul->tel = $dizi[7];
		$kul->web = $dizi[8];
		$kul->rol = $dizi[9];	
	
		if($kul->rol=="uye") {
			$u ="selected";
		}elseif($kul->rol=="editor") {
			$e="selected";
		}
		
		if (isset($_GET["c"])){
		$uyari = "Degisiklikler Kaydedildi..";
		}
	
}else if(isset($_GET["s"])){
    if ($_GET["s"] == "kGuncel"){
        
        if (isset($_POST["adi"])) {
            $kul->adi = $_POST["adi"];
            if (strlen(trim($kul->adi)) < 3) {
                $kul->adi = NULL;
            }
        }
        if (isset($_POST["sadi"])) {
            $kul->sadi = $_POST["sadi"];
            if (strlen(trim($kul->sadi)) < 3) {
                $kul->sadi = NULL;
            }
        }
        if (isset($_POST["mail"])) {
            $kul->mail = $_POST["mail"];
            if (strlen(trim($kul->mail)) < 5) {
                $kul->mail = NULL;
            }
        }
        
            $kul->firma = $_POST["firma"];
        
        
            $kul->tel = $_POST["tel"];
        
        
            $kul->rol = $_POST["rol"];
        
        
            $kul->web = $_POST["web"];
        
		$pid= $_POST["id"];
        $sql1 = "UPDATE kullanici SET mail='$kul->mail', ad='$kul->adi',soyad='$kul->sadi',firma='$kul->firma',tel='$kul->tel',web_url='$kul->web',rol='$kul->rol' WHERE id='$pid'";
        echo $sql1;
	$sonuc = mysql_query($sql1);
		$getquery = "?id=$pid&c=1";
 		header('Location: kullaniciDuzenle.php'.$getquery);
		
}

}else{
	header('Location: kullaniciEkle.php');
}
?>
 <div id="icerik" style="position: absolute; left: 210px; top: 160px; width: 870px; height: 390px;" class="kenarlik">
            <div class="icerik dolgu">Kullanici Duzenle  <em style="color: orangered; background: white;"> <?php echo $uyari; ?></em></div>
            <div class="dolgu oge icerik" style="height: 340px;">
    <form action="?s=kGuncel" method="post" id="kEkle">
        <table align="left">
				<tr>
					<td>Kullanici Adi() : </td>
				    <td><input type="text" name="kadi" value="<?php echo $kul->kadi; ?>" disabled /></td>
				</tr>
				<tr>
					<td>Adi (*) : </td>
					<td><input type="text" name="adi" value="<?php echo $kul->adi; ?>" /></td>
				</tr>
				<tr>
				    <td>Soyadi (*) : </td>
				    <td><input type="text" name="sadi" value="<?php echo $kul->sadi; ?>" /></td>
				</tr>
				<tr>
				    <td>E-posta adresi (*) : </td>
				    <td><input type="text" name="mail" value="<?php echo $kul->mail; ?>"/></td>
				</tr>
				<tr>
				    <td>Bagli oldugu Firma ( ) : </td>
				    <td><input type="text" name="firma" value="<?php echo $kul->firma; ?>"/></td>
				</tr>
				<tr>
				    <td>Web sitesi ( ) : </td>
				    <td><input type="text" name="web" value="<?php echo $kul->web; ?>"/></td>
				</tr>
				<tr>
				    <td>Telefon Numarasi: ( ) : </td>
				    <td><input type="text" name="tel" value="<?php echo $kul->tel; ?>"/></td>
				</tr>
				<tr>
				    <td>Sifre () : </td>
				    <td><a href="sifreDegistir.php?id=<?php echo $id;?>">Sifre degistir</a><input type="hidden" name="id" value="<?php echo $id;?>"/></td>
				</tr>
				<tr>
				    <td>Kullanici Rolu : </td>
				    <td>
                        <select name="rol">
								<option value="admin">admin</option>
								<option value="editor"<?php echo $e; ?>>editor</option>
								<option value="uye" <?php echo $u; ?>>uye</option>
						</select>
                    </td>
				</tr>
                <tr>
				    <td><input type="submit" id="gonder" value="Kaydet"/></td>
				</tr>

		</table>
    </form>
	</div>
	</div>
	<?php include("alt.php"); ?>