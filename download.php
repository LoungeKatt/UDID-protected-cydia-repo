<?PHP

  /*****************************************************
  ** Title........: SQL Screen File
  ** Filename.....: download.php
  ** Author.......: damar1st
  ** Homepage.....: http://damarist.de/
  ** Contact......: info@damarist.de
  ** Version......: 0.8
  ** Last changed.: 01.03.2012
  ** Last change..:
  *****************************************************/

include "config.php";



$SQL = "SELECT * FROM download";
$result = mysql_query($SQL);



while ($db_field = mysql_fetch_assoc($result)) {

print $db_field['filename'] . "<BR>" ;
print $db_field['stats'] . "<BR>";
print $db_field['dldate'] . "<BR><BR><BR>";



}


?>