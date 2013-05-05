<?php 
include("bas.php"); 
require_once ('kullanici.php');
/**
 * @author mehmettopcu
 * @copyright 2013
 */
if (isset($_GET["id"])){
		$id = $_GET["id"];
		$sql = "DELETE FROM kullanici WHERE id = '$id'";
		$sonuc = mysql_query($sql);
		if($sonuc) {
			header('Location: kullaniciListele.php');
		}
}

?>