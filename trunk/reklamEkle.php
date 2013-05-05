<?php
include("bas.php"); 
require_once ('reklam.php');
/**
 * @author mehmettopcu
 * @copyright 2013
 */
$rek = new reklam();
if (isset($_GET["uid"])){
	$uid = $_GET["uid"];
}else {
	$uid = "1";
}
if (isset($_GET["s"])):
    if ($_GET["s"] == "rEkle"):
        if (isset($_POST["uyeid"])) {
            $rek->uyeid = $_POST["uyeid"];
			}
        if (isset($_POST["baslik"])) {
            $rek->baslik = $_POST["baslik"];
            if (strlen(trim($rek->baslik)) < 3) {
                $rek->baslik = NULL;
            }
        }
        if (isset($_POST["kategori"])) {
            $rek->kategori = $_POST["kategori"];
            if (strlen(trim($rek->kategori)) < 3) {
                $rek->kategori = NULL;
            }
        }
        if (isset($_POST["icerik"])) {
            $rek->icerik = $_POST["icerik"];
            if (strlen(trim($rek->icerik)) < 4) {
                $rek->icerik = NULL;
            }
        }
        if (isset($_POST["link"])) {
            $rek->link = $_POST["link"];
            if (strlen(trim($rek->link)) < 5) {
                $rek->link = NULL;
            }
        }
        if (isset($_POST["afis"])) {
            $rek->afis = $_POST["afis"];
			if (strlen(trim($rek->afis)) < 5) {
                $rek->afis = NULL;
            }
        }
        if (isset($_POST["weburl"])) {
            $rek->weburl = $_POST["weburl"];
        }
        if (isset($_POST["firma"])) {
            $rek->firma = $_POST["firma"];
        }
        if (isset($_POST["mail"])) {
            $rek->mail = $_POST["mail"];
        }
		 if (isset($_POST["yayintarih"])) {
            $rek->yayintarih = $_POST["yayintarih"];
        }
		 if (isset($_POST["bitistarih"])) {
            $rek->bitistarih = $_POST["bitistarih"];
        }
		
		$sonuc=0;
		
        if (isset($rek->baslik) && isset($rek->kategori) && isset($rek->icerik) && isset($rek->link) && isset($rek->afis)):
			$sonuc = mysql_query("INSERT INTO reklamportal.reklam (id, uye_id, baslik, kategori, icerik, link, afis, web_url, firma, mail, yayin_tarih, bitis_tarih, ucret) VALUES (NULL, '$rek->uyeid', '$rek->baslik', '$rek->kategori', '$rek->icerik', '$rek->link', '$rek->afis', '$rek->weburl', '$rek->firma', '$rek->mail', '$rek->yayintarih', '$rek->bitistarih', '20tl');");
        endif;
    endif;
endif;
?>
 <div id="icerik" style="position: absolute; left: 210px; top: 160px; width: 870px; height: 390px;" class="kenarlik">
            <title>Reklam Ekle</title>
            <div class="icerik dolgu">Reklam Ekle</div>
            <div class="dolgu oge icerik" style="height: 340px;">
    <form action="?s=rEkle" method="post" id="rEkle">
	<?php 
	if (isset($_GET["s"])):
		if ($sonuc == 1):
            echo "Kayit islemi tamamlandi";
            header('Location: reklamListele.php');
        else:
            echo "Kayit islemin tamamlanamadi.\n(*) olan alanlari doldurmayi unutmayin.\n (*) olan alanlar en az 3 karakterdene olusmali.";
        endif;
	endif;
	
	?>
        <table align="left">
				<tr>
					<td>Baslik(*) : </td>
				    <td><input type="text" name="baslik" value="" /></td>
				</tr>
				<tr>
					<td>Kategori (*) : </td>
					<td><input type="text" name="kategori" value="" /></td>
				</tr>
				<tr>
				    <td>Icerik (*) : </td>
				    <td><input type="text" name="icerik" value="" /></td>
				</tr>
				<tr>
				    <td>Link (*) : </td>
				    <td><input type="text" name="link" /></td>
				</tr>
				<tr>
				    <td>Afis (*) : </td>
				    <td><input type="text" name="afis" value=""/></td>
				</tr>
				<tr>
				    <td>Web Url ( ) : </td>
				    <td><input type="text" name="weburl" value=""/></td>
				</tr>
				<tr>
				    <td>Firma ( ) : </td>
				    <td><input type="text" name="firma" value=""/></td>
				</tr>
				<tr>
				    <td>Mail ( ) : </td>
				    <td><input type="text" name="mail" value=""/></td>
				</tr>
				<tr>
				    <td>Yayin Tarihi ( ) : </td>
				    <td><input type="text" name="yayintarih" value="<?php echo date('Y-m-d'); ?>"/></td>
				</tr>
				<tr>
				    <td>Bitis Tarihi ( ) : </td>
				    <td><input type="date" name="bitistarih" value="<?php echo date('Y-m-d'); ?>"/></td>
					<input type="hidden" name="uyeid" value="<?php echo $uid; ?>"/>
				</tr>

                <tr>
				    <td><input type="submit" id="gonder" value="Kaydet"/></td>
				</tr>

		</table>
    </form>
	</div>
	</div>
<?php include("alt.php"); ?>