<?php 
include("bas.php"); 
require_once ('reklam.php');
/**
 * @author mehmettopcu
 * @copyright 2013
 */
if (isset($_GET["id"])){
		$id = $_GET["id"];
		$sql = "DELETE FROM reklam WHERE id = '$id'";
		$sonuc = mysql_query($sql);
		if($sonuc) {
			header('Location: reklamListele.php');
		}
}

?>