<html>
    <head>
        <title>{$this->title}</title>
        <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js.js"></script>
        <link rel="stylesheet" href="css.css"/>
    </head>
    <body>
        <div id="anaKatman" style="position: relative; margin: 0 auto; width: 1080px;">
            <div id="basKisim" style="position: absolute; left: 0px; top: 20px; width: 1080px; height: 120px;" class="kenarlik">
                <div class="anadolgu">{$this->title}</div>
            </div>
            <div id="menu" style="position: absolute; left: 0px; top: 160px; width: 190px; height: 390px; right: 874px;" class="kenarlik">
                <div class="dolgu menu">{$this->menuTitle}</div>
                <div class="dolgu oge">
                    <ul>{$this->menuCikti}
                    </ul>
                </div>
            </div>
        <div id="icerik" style="position: absolute; left: 210px; top: 160px; width: 870px; height: 390px;" class="kenarlik">
            <div class="icerik dolgu">{$this->icerikTitle}</div>
            <div class="dolgu oge icerik" style="height: 340px;">
               {$this->icerikOge}
            </div>
		</div>
<div id="altKisim" style="position: absolute; left: 0px; top: 570px; width: 1080px; height: 60px;" class="kenarlik">
            <div class="icerik dolgu">{$this->altkisim}</div>
        </div>
    </div>
</body>
</html>

    <form action="" method="post" id="kEkle">
        <table align="left">
				<tr>
					<td>Kullanici Adin(*) : </td>
				    <td><input type="text" name="kadi" value="{$this->kadi}" /></td>
				</tr>
				<tr>
					<td>Adin (*) : </td>
					<td><input type="text" name="adi" value="{$this->adi}" /></td>
				</tr>
				<tr>
				    <td>Soyadin (*) : </td>
				    <td><input type="text" name="sadi" value="{$this->sadi}" /></td>
				</tr>
				<tr>
				    <td>Sifren (*) : </td>
				    <td><input type="password" name="sifre" /></td>
				</tr>
				<tr>
				    <td>E-posta adresin (*) : </td>
				    <td><input type="text" name="mail" value="{$this->mail}"/></td>
				</tr>
				<tr>
				    <td>Bagli oldugun Firma ( ) : </td>
				    <td><input type="text" name="firma" value="{$this->firma}"/></td>
				</tr>
				<tr>
				    <td>Web sitesi ( ) : </td>
				    <td><input type="text" name="web" value="{$this->web}"/></td>
				</tr>
				<tr>
				    <td>Telefon Numarasi: ( ) : </td>
				    <td><input type="text" name="tel" value="{$this->tel}"/></td>
				</tr>
				<tr>
				    <td>Kullanici Rolu : </td>
				    <td>
                        <select name="rol">
								<option value="admin">admin</option>
								<option value="editor" {$e}>editor</option>
								<option value="uye" {$u}>uye</option>
						</select>
                    </td>
				</tr>
                <tr>
				    <td><input type="button" id="gonder" value="Kaydet"/></td>
				</tr>

		</table>
    </form>

function htmlKullaniciListele(){
    return <<<Html
    <div id= "kList"></div>
Html;
}

function htmlReklamListele(){
    return <<<Html
    <div id= "rList"></div>
Html;
}

function htmlAnasayfa(){
    return <<<Html
    Anasayfa Ogeleri
Html;
}

function htmlHata(){
    return <<<Html
    Burada bir sey yok
Html;
}


}
