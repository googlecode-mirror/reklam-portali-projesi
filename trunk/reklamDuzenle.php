<?php include("bas.php"); ?>
 <div id="icerik" style="position: absolute; left: 210px; top: 160px; width: 870px; height: 390px;" class="kenarlik">
            <div class="icerik dolgu">Reklam Duzenle</div>
            <div class="dolgu oge icerik" style="height: 340px;">
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
	</div>
	</div>
	<?php include("alt.php"); ?>