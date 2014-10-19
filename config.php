<?php

  /*****************************************************
  ** Title........: Configuration File
  ** Filename.....: config.php
  ** Author.......: damar1st
  ** Homepage.....: http://damarist.de/
  ** Contact......: info@damarist.de
  ** Version......: 0.8
  ** Notes........: This file contains the configuration
  ** Last changed.: 01.03.2012
  ** Last change..:
  *****************************************************/

$server = "localhost";
$Benutzer = "username";
$Passwort = "password";
$verbindung = mysql_connect ($server, $Benutzer, $Passwort); 
mysql_select_db("table_name", $verbindung);

?>