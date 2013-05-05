<?php include("bas.php"); 
/**
 * @author mehmettopcu
 * @copyright 2013
 */
        $sonuc = mysql_query("SELECT reklam.id, kullanici_ad, baslik, kategori FROM reklam,kullanici where uye_id=kullanici.id");
		$liste="";
        $liste.=<<<list
        <table style="width: 100%;text-align: center;" align="center" border="1">
			<tr>
				<th>Kullanici Adi</th>
				<th>Baslik</th>
				<th>Kategori</th>
                <th>Islem</th>
			</tr>
            
list;
        while (list($id, $kullanici_ad, $baslik, $kategori) = mysql_fetch_row($sonuc)) {
            $liste.= <<<List
    <tr>
    <td>$kullanici_ad</td>
    <td>$baslik</td>
    <td>$kategori</td>
    <td><a href="reklamDuzenle.php?id=$id" title="Duzenle">[D]</a>
        <a href="reklamSil.php?id=$id" title="Sil" onclick="return confirm('Silmek istediginizdden emin misiniz?');">[S]</a></td>
    </tr>
List;
        }
        $liste.= "</table>";
?>
 <div id="icerik" style="position: absolute; left: 210px; top: 160px; width: 870px; height: 390px;" class="kenarlik">
        <title>Kullanicilar</title>
        <div class="icerik dolgu">Kullanicilar</div>
        <div class="dolgu oge icerik" style="height: 340px;">
		<div id= "kList"><?php echo $liste; ?></div>
	</div>
	</div>
	<?php include("alt.php"); ?>