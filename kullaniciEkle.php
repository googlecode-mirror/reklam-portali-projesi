<?php 
include("bas.php"); 
require_once ('kullanici.php');
/**
 * @author mehmettopcu
 * @copyright 2013
 */
$kul = new kullanici();
if (isset($_GET["s"])):
    if ($_GET["s"] == "kEkle"):
        if (isset($_POST["kadi"])) {
            $kul->kadi = $_POST["kadi"];
            if (strlen(trim($kul->kadi)) < 3) {
                $kul->kadi = NULL;
            }
        }
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
        if (isset($_POST["sifre"])) {
            $kul->sifre = $_POST["sifre"];
            if (strlen(trim($kul->sifre)) < 4) {
                $kul->sifre = NULL;
            }
        }
        if (isset($_POST["mail"])) {
            $kul->mail = $_POST["mail"];
            if (strlen(trim($kul->mail)) < 5) {
                $kul->mail = NULL;
            }
        }
        if (isset($_POST["firma"])) {
            $kul->firma = $_POST["firma"];
        }
        if (isset($_POST["tel"])) {
            $kul->tel = $_POST["tel"];
        }
        if (isset($_POST["rol"])) {
            $kul->rol = $_POST["rol"];
        }
        if (isset($_POST["web"])) {
            $kul->web = $_POST["web"];
        }
        $sonuc = 0;
        if (isset($kul->kadi) && isset($kul->adi) && isset($kul->sadi) && isset($kul->sifre) && isset($kul->mail)):
            $sonuc = mysql_query("INSERT INTO `reklamportal`.`kullanici` (`id`, `kullanici_ad`, `mail`, `sifre`, `ad`, `soyad`, `firma`, `tel`, `web_url`, `rol`) VALUES (NULL, '$kul->kadi', '$kul->mail', '$kul->sifre', '$kul->adi', '$kul->sadi', '$kul->firma', '$kul->tel', '$kul->web', '$kul->rol');");
        endif;
    endif;
endif;
?>
 <div id="icerik" style="position: absolute; left: 210px; top: 160px; width: 870px; height: 390px;" class="kenarlik">
            <title>Kullanici Ekle</title>
            <div class="icerik dolgu">Kullanici Ekle</div>
            <div class="dolgu oge icerik" style="height: 340px;">
    <form action="?s=kEkle" method="post" id="kEkle">
	<?php 
	if (isset($_GET["s"])):
		if ($sonuc == 1):
            echo "Kayit islemi tamamlandi";
            header('Location: kullaniciListele.php');
        else:
            echo "Kayit islemin tamamlanamadi.\n(*) olan alanlari doldurmayi unutmayin.\n (*) olan alanlar en az 3 karakterdene olusmali.";
        endif;
	endif;
	
	?>
        <table align="left">
				<tr>
					<td>Kullanici Adin(*) : </td>
				    <td><input type="text" name="kadi" value="" /></td>
				</tr>
				<tr>
					<td>Adin (*) : </td>
					<td><input type="text" name="adi" value="" /></td>
				</tr>
				<tr>
				    <td>Soyadin (*) : </td>
				    <td><input type="text" name="sadi" value="" /></td>
				</tr>
				<tr>
				    <td>Sifren (*) : </td>
				    <td><input type="password" name="sifre" /></td>
				</tr>
				<tr>
				    <td>E-posta adresin (*) : </td>
				    <td><input type="text" name="mail" value=""/></td>
				</tr>
				<tr>
				    <td>Bagli oldugun Firma ( ) : </td>
				    <td><input type="text" name="firma" value=""/></td>
				</tr>
				<tr>
				    <td>Web sitesi ( ) : </td>
				    <td><input type="text" name="web" value=""/></td>
				</tr>
				<tr>
				    <td>Telefon Numarasi: ( ) : </td>
				    <td><input type="text" name="tel" value=""/></td>
				</tr>
				<tr>
				    <td>Kullanici Rolu : </td>
				    <td>
                        <select name="rol">
								<option value="admin">admin</option>
								<option value="editor">editor</option>
								<option value="uye">uye</option>
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