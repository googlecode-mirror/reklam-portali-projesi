<?php include("bas.php"); 
/**
 * @author mehmettopcu
 * @copyright 2013
 */
        $sonuc = mysql_query("SELECT id, kullanici_ad, ad, soyad, mail, tel FROM kullanici");
		$liste="";
        $liste.=<<<list
        <table style="width: 100%;text-align: center;" align="center" border="1">
			<tr>
				<th>Ad</th>
				<th>Soyad</th>
				<th>Kullanici Adi</th>
				<th>E-posta</th>
				<th>Telefon</th>
                <th>Islem</th>
			</tr>
            
list;
        while (list($id, $kullanici_ad, $ad, $soyad, $mail, $tel) = mysql_fetch_row($sonuc)) {
            $liste.= <<<List
    <tr>
    <td>$ad</td>
    <td>$soyad</td>
    <td>$kullanici_ad</td>
    <td>$mail</td>
    <td>$tel</td>
    <td><a href="kullaniciDuzenle.php?id=$id" title="Duzenle">[D]</a>
        <a href="kullaniciSil.php?id=$id" title="Sil" onclick="return confirm('Silmek istediginizdden emin misiniz?');">[S]</a></td>
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