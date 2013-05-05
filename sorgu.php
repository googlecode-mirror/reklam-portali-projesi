<?php

require_once ('mysql_connect.php');
require_once ('kullanici.php');
/**
 * @author mehmettopcu
 * @copyright 2013
 */
$kul = new kullanici();
if (isset($_GET["s"])):
    if ($_GET["s"] == "k_ekle"):
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
        if ($sonuc == 1):
            echo "Kayit islemi tamamlandi";
            //header('Location: index.php?p=kListe');
        else:
            echo "Kayit islemin tamamlanamadi.\n(*) olan alanlari doldurmayi unutmayin.\n (*) olan alanlar en az 3 karakterdene olusmali.";
        endif;

    endif;

    if ($_GET["s"] == "k_liste"):
        $sonuc = mysql_query("SELECT id, kullanici_ad, ad, soyad, mail, tel FROM `kullanici` LIMIT 0, 30");

        echo <<<list
        <table style="width: 100%;text-align: center;" align="center" border="1">
			<tr>
				<th>Ad</th>
				<th>Soyad</th>
				<th>Kullanici Adi</th>
				<th>E-posta</th>
				<th>Telefon</th>
			</tr>
            
list;
        while (list($id, $kullanici_ad, $mail, $ad, $soyad, $tel) = mysql_fetch_row($sonuc)) {
            echo <<<List
    <tr>
    <td>$ad</td>
    <td>$soyad</td>
    <td><a href="bilgi.php?id=$id">$kullanici_ad</a></td>
    <td>$mail</td>
    <td>$tel</td>
    </tr>
List;
        }
        echo "</table>";
    endif;
endif;
?>