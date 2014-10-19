<?php

    /*****************************************************
     ** Title........: REPO Counter File
     ** Filename.....: counter.php
     ** Author.......: damar1st
     ** Homepage.....: http://damarist.de/
     ** Contact......: info@damarist.de
     ** Version......: 0.8
     ** Last changed.: 01.03.2012
     ** Last change..:
     *****************************************************/

    include "../config.php"; 	// einfÃ¼gen der Verbindung zur SQL

    $filename = mysql_real_escape_string($_GET['file']);
    $path = $_SERVER['DOCUMENT_ROOT']."/repo_folder/";                    //Pfad zur Datei
    $fullPath = $path.$filename;                             //Pfad zur Downloaddatei
    $filetypes = array("deb");              // UnterstÃ¼tzte Dateitypen

    if (!in_array(substr($filename, -3), $filetypes)) {
        echo "falscher Dateityp.";
        exit;
    }

    if ($fd = fopen ($fullPath, "r")) {
        //hinzufÃ¼gen der Downloadanzahl
        $result = mysql_query("SELECT COUNT(*) AS countfile FROM download
                              WHERE filename='" . $filename . "'");
                              $data = mysql_fetch_array($result);
                              $q = "";

                              if ($data['countfile'] > 0) {
                              $q = "UPDATE download SET dldate = NOW(), stats = stats + 1 WHERE
                              filename = '" . $filename . "'";
                              } else {
                              $q = "INSERT INTO download (filename, dldate, stats) VALUES
                              ('" . $filename . "',NOW(), 1)";
                              }
                              $statresult = mysql_query($q);
                              
                              //der nÃ¤chste Teil fÃ¼hrt die Datei aus
                              
                              $fsize = filesize($fullPath);
                              $path_parts = pathinfo($fullPath);
                              
                              header("Content-type: application/octet-stream");
                              header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
                              header("Content-length: $fsize");
                              header("Cache-control: private");              //Ã¶ffnen der Downloaddatei
                              while(!feof($fd)) {
                              $buffer = fread($fd, 2048);
                              echo $buffer;
                              }
                              }
                              fclose ($fd);
                              exit;
                              
    ?>