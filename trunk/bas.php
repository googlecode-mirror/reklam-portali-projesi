<?php 
require_once("ayar.php"); ?>
<html>
    <head>
        <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js.js"></script>
        <link rel="stylesheet" href="css.css"/>
        <link rel='stylesheet' href='http://wp.mehmettopcu.info/wp-admin/load-styles.php?c=1&amp;dir=ltr&amp;load=admin-bar,wp-admin,buttons&amp;ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='thickbox-css' href='http://wp.mehmettopcu.info/wp-includes/js/thickbox/thickbox.css?ver=20121105' type='text/css' media='all' />
        <link rel='stylesheet' id='custom_meta_css-css' href='http://wp.mehmettopcu.info/wp-content/themes/diary/admin/shortcodes/shortcodes.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='colors-css' href='http://wp.mehmettopcu.info/wp-admin/css/colors-classic.min.css?ver=3.5.1' type='text/css' media='all' />
        <!--[if lte IE 7]><link rel='stylesheet' id='ie-css' href='http://wp.mehmettopcu.info/wp-admin/css/ie.min.css?ver=3.5.1' type='text/css' media='all' /><![endif]-->
        <link rel='stylesheet' id='icons-css' href='http://wp.mehmettopcu.info/wp-content/plugins/download-manager/css/icons.css?ver=3.5.1' type='text/css' media='all' />
        <link rel='stylesheet' id='chosen-css-css' href='http://wp.mehmettopcu.info/wp-content/plugins/download-manager/css/chosen.css?ver=3.5.1' type='text/css' media='all' />
        </head>
    <body>
        <div id="anaKatman" style="position: relative; margin: 0 auto; width: 1080px;">
            <div id="basKisim" style="position: absolute; left: 0px; top: 20px; width: 1080px; height: 120px;" class="kenarlik">
                <div class="anadolgu">Yonetim Paneli</div>
            </div>
            <div id="menu" style="position: absolute; left: 0px; top: 160px; width: 190px; height: 390px; right: 874px;" class="kenarlik">
                <div class="dolgu menu">Islemler</div>
                <div class="dolgu oge">
                   <?php include("menu.php"); ?>
                </div>
            </div>