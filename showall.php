<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>girls</title>
  </head>
  <body>
    <?php
    $db = mysql_connect("localhost","root","");
    mysql_select_db("gilrs",$db);
    mysql_set_charset('utf-8',$db);

    $query_result = mysql_query("SELECT * FROM `photo`");
    $data = array();
    while ($curret_row = mysql_fetch_assoc($query_result))
    {
        echo '<img src="'.$curret_row['name'].'"><br/>';
    }
    ?>
  </body>
</html>
