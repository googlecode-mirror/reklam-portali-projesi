<?php

/**
 * @author mehmettopcu
 * @copyright 2013
 */
 
$bag = mysql_connect("localhost","reklam","passreklam") or die("<pre>mysql_connect işlemi tamamlanamadı.");
mysql_select_db("reklamportal",$bag) or die("<pre>mysql_select_db işlemi tamamlanamadı.");



?>